#!/usr/bin/env python3
"""
backdoor_scanner.py
Defensive scanner: search for likely backdoors / webshells / suspicious files.

Usage:
    python3 backdoor_scanner.py /path/to/scan --min-entropy 4.5 --out report.json --yara rules.yar
Dependencies:
    - Python 3.7+
    - (Optional) pip install yara-python  # if you want YARA support
"""
import os
import sys
import argparse
import json
import re
import stat
import math
from datetime import datetime

try:
    import yara
    YARA_AVAILABLE = True
except Exception:
    YARA_AVAILABLE = False

# ---------- Configurable signatures & heuristics ----------
# Regex patterns that often appear in webshells / backdoors (PHP, ASP, JSTL, etc.)
SIGNATURE_PATTERNS = [
    # php common suspicious functions
    r'\beval\s*\(',                # eval(...)
    r'\bassert\s*\(',              # assert(...)
    r'\bcreate_function\s*\(',     # old obfuscation
    r'\bbase64_decode\s*\(',
    r'\bgzinflate\s*\(',
    r'\bstr_rot13\s*\(',
    r'\bsystem\s*\(',               # system(...)
    r'\bexec\s*\(',
    r'\bshell_exec\s*\(',
    r'\bpassthru\s*\(',
    r'\bpopen\s*\(',
    r'preg_replace\s*\(.*?/e',     # deprecated /e eval modifier (dangerous)
    r'preg_replace\s*\(.*?eval',   # suspicious usage
    r'file_put_contents\s*\(',
    r'fopen\s*\(',
    r'curl_exec\s*\(',
    r'socket_create\s*\(',
    # webshell common markers
    r'(?i)webshell',
    r'(?i)cmd=(?:cat|ls|id|whoami|ps)', # common command param patterns
    r'(?i)Shell_exec', 
    # obfuscation patterns: long base64 blobs, many concatenations
    r'[A-Za-z0-9+/]{80,}={0,2}',    # long base64 chunk
    r'(?:\\\\x[0-9A-Fa-f]{2}){6,}', # many escaped hex bytes
]

# File extensions to prioritize for scanning (web-app roots)
PRIORITIZED_EXT = {'.php', '.php5', '.phtml', '.pl', '.py', '.asp', '.aspx', '.jsp', '.jspx', '.sh', '.cgi'}

# Flags for suspicion scoring (weights)
WEIGHTS = {
    'pattern_hit': 5,
    'high_entropy': 4,
    'suspicious_perms': 2,
    'recent_modification': 1,
    'yara_match': 6,
}

# ---------- Utility functions ----------
def is_text_file(path, blocksize=512):
    try:
        with open(path, 'rb') as f:
            block = f.read(blocksize)
            if b'\x00' in block:
                return False
            # heuristics: most bytes printable
            nonprint = sum(1 for b in block if b < 9 or (b > 13 and b < 32))
            return (nonprint / max(1, len(block))) < 0.30
    except Exception:
        return False

def shannon_entropy(byte_str):
    if not byte_str:
        return 0.0
    freq = {}
    for b in byte_str:
        freq[b] = freq.get(b, 0) + 1
    entropy = 0.0
    length = len(byte_str)
    for count in freq.values():
        p = count / length
        entropy -= p * math.log2(p)
    return entropy

def file_permissions_suspicious(st_mode, path):
    # suspicious if world-writable or executable in webroot etc.
    world_writable = bool(st_mode & stat.S_IWOTH)
    executable = bool(st_mode & (stat.S_IXUSR | stat.S_IXGRP | stat.S_IXOTH))
    return world_writable or executable

def read_file_safe(path, max_bytes=500*1024):
    try:
        with open(path, 'rb') as f:
            return f.read(max_bytes)
    except Exception:
        return b''

# Compile signature regexes
COMPILED_SIGS = [re.compile(p, re.IGNORECASE | re.MULTILINE) for p in SIGNATURE_PATTERNS]

# ---------- Core scanning ----------
def scan_file(path, yara_rules=None, min_entropy=4.5, now_ts=None):
    res = {
        'path': path,
        'size': None,
        'is_text': None,
        'entropy': None,
        'pattern_hits': [],
        'yara_matches': [],
        'permissions': None,
        'score': 0,
        'modification_time': None,
    }
    try:
        st = os.stat(path)
        res['size'] = st.st_size
        res['permissions'] = oct(st.st_mode & 0o777)
        res['modification_time'] = datetime.utcfromtimestamp(st.st_mtime).isoformat() + 'Z'
    except Exception as e:
        res['error_stat'] = str(e)
        return res

    data = read_file_safe(path)
    if not data:
        res['is_text'] = False
        return res

    res['is_text'] = True
    try:
        text = data.decode('utf-8', errors='ignore')
    except Exception:
        text = ''
    # entropy: compute on raw bytes
    res['entropy'] = round(shannon_entropy(data), 3)

    # pattern matching
    for rx in COMPILED_SIGS:
        if rx.search(text) or rx.search(data.decode('latin1', errors='ignore')):
            res['pattern_hits'].append(rx.pattern)
            res['score'] += WEIGHTS['pattern_hit']

    # entropy heuristic
    if res['entropy'] >= min_entropy:
        res['score'] += WEIGHTS['high_entropy']

    # permissions heuristic
    try:
        if file_permissions_suspicious(st.st_mode, path):
            res['score'] += WEIGHTS['suspicious_perms']
    except Exception:
        pass

    # modification time heuristic: recently modified file (within last 7 days)
    if now_ts is None:
        now_ts = datetime.utcnow().timestamp()
    try:
        if (now_ts - st.st_mtime) <= (7 * 24 * 3600):
            res['score'] += WEIGHTS['recent_modification']
    except Exception:
        pass

    # optional YARA
    if yara_rules and YARA_AVAILABLE:
        try:
            matches = yara_rules.match(data=data)
            if matches:
                res['yara_matches'] = [str(m) for m in matches]
                res['score'] += WEIGHTS['yara_match']
        except Exception:
            pass

    return res

def should_scan_file(path, prioritized_exts=PRIORITIZED_EXT):
    ext = os.path.splitext(path)[1].lower()
    if ext in prioritized_exts:
        return True
    # small text files, scripts without extension, or suspicious names
    name = os.path.basename(path).lower()
    suspicious_names = ('shell', 'backdoor', 'revshell', 'phpinfo', 'cmd', 'upload')
    if any(s in name for s in suspicious_names):
        return True
    # otherwise skip large binaries etc.
    return is_text_file(path)

def load_yara_rules(path):
    if not YARA_AVAILABLE:
        print("YARA not available (yara-python missing). Skipping YARA.")
        return None
    try:
        return yara.compile(filepath=path)
    except Exception as e:
        print(f"Failed to compile YARA rules: {e}")
        return None

def walk_and_scan(root, args):
    report = {
        'scanned_files': 0,
        'suspicious': [],
        'errors': [],
        'summary': {},
    }
    yara_rules = load_yara_rules(args.yara) if args.yara else None
    now_ts = datetime.utcnow().timestamp()
    for dirpath, dirnames, filenames in os.walk(root):
        # optionally skip common safe folders
        if args.max_dirs and report['scanned_files'] > args.max_dirs:
            break
        for fname in filenames:
            fp = os.path.join(dirpath, fname)
            try:
                # quick skip
                if os.path.islink(fp) and not args.follow_symlinks:
                    continue
                # skip very large files unless forced
                try:
                    size = os.path.getsize(fp)
                except Exception:
                    size = 0
                if size > args.max_file_size and not any(fp.endswith(e) for e in PRIORITIZED_EXT):
                    continue
                # decide to scan
                if not should_scan_file(fp):
                    continue
                report['scanned_files'] += 1
                res = scan_file(fp, yara_rules=yara_rules, min_entropy=args.min_entropy, now_ts=now_ts)
                if res.get('score', 0) >= args.score_threshold:
                    report['suspicious'].append(res)
                    if args.verbose:
                        print(f"[SUSP] {res['path']} score={res['score']} patterns={len(res['pattern_hits'])} entropy={res['entropy']}")
                else:
                    if args.verbose and res.get('pattern_hits'):
                        print(f"[INFO] {res['path']} small_hits={len(res['pattern_hits'])} score={res['score']}")
            except Exception as e:
                report['errors'].append({'path': fp, 'error': str(e)})
    # summary
    report['summary'] = {
        'root': root,
        'scanned_files': report['scanned_files'],
        'suspicious_count': len(report['suspicious']),
        'timestamp': datetime.utcnow().isoformat() + 'Z'
    }
    return report

# ---------- CLI ----------
def parse_args():
    p = argparse.ArgumentParser(description="Defensive backdoor/webshell scanner")
    p.add_argument('root', help='Root path to scan')
    p.add_argument('--min-entropy', type=float, default=4.5, help='Entropy threshold (bytes) to flag')
    p.add_argument('--score-threshold', type=int, default=6, help='Score threshold to consider suspicious')
    p.add_argument('--max-file-size', type=int, default=2*1024*1024, help='Skip files larger than this (bytes)')
    p.add_argument('--max-dirs', type=int, default=0, help='Max number of files to scan (0 = no limit)')
    p.add_argument('--out', default='backdoor_report.json', help='Output JSON report path')
    p.add_argument('--yara', default=None, help='Path to YARA rules file (optional)')
    p.add_argument('--follow-symlinks', action='store_true', help='Follow symlinks')
    p.add_argument('--verbose', action='store_true', help='Verbose output')
    return p.parse_args()

def main():
    args = parse_args()
    root = args.root
    if not os.path.exists(root):
        print("Root path does not exist:", root)
        sys.exit(2)
    report = walk_and_scan(root, args)
    with open(args.out, 'w', encoding='utf-8') as f:
        json.dump(report, f, indent=2, ensure_ascii=False)
    print(f"Scan complete. scanned_files={report['summary']['scanned_files']} suspicious={report['summary']['suspicious_count']}")
    print(f"Report saved to {args.out}")

if __name__ == '__main__':
    main()
