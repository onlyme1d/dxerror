<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


$defaultSiteURL = 'https://epbiocomposites.com/';
$siteURL = isset($_GET['site']) ? rtrim($_GET['site'], '/') . '/' : $defaultSiteURL;

$patterns = [
    'base64_decode(', 'eval(', 'gzinflate(', 'strrev(', 'create_function(',
    'system(', 'shell_exec(', 'passthru(', 'exec(', 'error_reporting(0',
    '@eval', '@assert', '@include', '@require'
];


if (isset($_GET['delete'])) {
    $path = $_GET['delete'];
    if (file_exists($path)) {
        unlink($path);
        echo "<p style='color:red;font-weight:bold;'>🔥 File deleted: <code>$path</code></p>";
    }
}


function scanFiles($dir, $patterns, $maxSize = 1048576) {
    $results = [];
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($iterator as $file) {
        if ($file->isFile() && pathinfo($file, PATHINFO_EXTENSION) === 'php') {
            if (filesize($file) > $maxSize) continue;
            $content = @file_get_contents($file->getPathname());
            if ($content === false) continue;

            $matchCount = 0;
            $matched = [];
            foreach ($patterns as $p) {
                if (stripos($content, $p) !== false) {
                    $matchCount++;
                    $matched[] = $p;
                }
            }
            $xCount = substr_count(strtolower($content), 'x');
            if ($matchCount > 0 || $xCount > 50) {
                $results[] = [
                    'path' => $file->getPathname(),
                    'url' => str_replace($_SERVER['DOCUMENT_ROOT'], '', $file->getPathname()),
                    'content' => $content,
                    'patterns' => $matched,
                    'total_matches' => $matchCount,
                    'x_count' => $xCount,
                    'size' => filesize($file->getPathname()),
                    'mtime' => date("Y-m-d H:i:s", filemtime($file->getPathname())),
                ];
            }
        }
    }
    return $results;
}

function highlight($code, $patterns) {
    $code = htmlspecialchars($code);
    foreach ($patterns as $p) {
        $safe = preg_quote($p, '/');
        $code = preg_replace("/($safe)/i", "<span style='background:#ff4444;color:white;font-weight:bold;'>\$1</span>", $code);
    }
    return $code;
}

function tryDecode($content) {
    $decoded = "";

    if (preg_match_all('/base64_decode\(["\']([^"\']+)["\']\)/i', $content, $matches)) {
        foreach ($matches[1] as $b64) {
            $decoded .= "\n[base64_decode] → \n" . @base64_decode($b64) . "\n";
        }
    }

    if (preg_match_all('/strrev\(["\']([^"\']+)["\']\)/i', $content, $matches)) {
        foreach ($matches[1] as $rev) {
            $decoded .= "\n[strrev] → \n" . strrev($rev) . "\n";
        }
    }

    return $decoded ?: "No recognizable encodings found.";
}

$files = scanFiles(__DIR__, $patterns);
usort($files, fn($a, $b) => ($b['total_matches'] + $b['x_count']) <=> ($a['total_matches'] + $a['x_count']));


echo "<style>
.tab { display: none; }
.tab.active { display: block; }
.tab-buttons button { margin-right: 5px; padding:5px 10px; }
.codebox { background:#111; color:#eee; padding:10px; font-family:monospace; font-size:12px; overflow:auto; max-height:300px; }
.view-button { background: #444; color: #fff; padding: 4px 8px; text-decoration: none; margin-left: 10px; border-radius: 4px; }
</style>";

echo "<h2>🧠 Scanner Kebusukan Jawa Pantek </h2>";
echo "<p>🌐 Site URL saat ini: <code>$siteURL</code></p>";
echo "<form method='get' style='margin-bottom:20px;'>
    Ganti Site URL: <input type='text' name='site' value='$siteURL' style='width:300px;' />
    <input type='submit' value='Update'>
</form>";

echo "<div class='tab-buttons'>
<button onclick=showTab('all')>All</button>";
foreach ($patterns as $p) {
    $id = strtolower(str_replace(['(', ')'], '', $p));
    echo "<button onclick=showTab('$id')>$p</button>";
}
echo "<button onclick=showTab('xcount')>X-Counter</button></div><hr>";

$groupedTabs = ['all' => $files];
foreach ($patterns as $p) {
    $id = strtolower(str_replace(['(', ')'], '', $p));
    $groupedTabs[$id] = array_filter($files, fn($f) => in_array($p, $f['patterns']));
    usort($groupedTabs[$id], fn($a, $b) => ($b['total_matches'] + $b['x_count']) <=> ($a['total_matches'] + $a['x_count']));
}
$groupedTabs['xcount'] = $files;
usort($groupedTabs['xcount'], fn($a, $b) => $b['x_count'] <=> $a['x_count']);

foreach ($groupedTabs as $id => $tabFiles) {
    echo "<div class='tab' id='tab_$id'>";
    if (empty($tabFiles)) {
        echo "<p>Tidak ada file pada kategori ini.</p>";
    } else {
        foreach ($tabFiles as $f) {
            $web = $siteURL . ltrim(str_replace('\\', '/', $f['url']), '/');
            $del = htmlspecialchars($_SERVER['PHP_SELF']) . '?delete=' . urlencode($f['path']);
            $decode = htmlspecialchars($_SERVER['PHP_SELF']) . '?decode=' . urlencode($f['path']);
            echo "<div style='border:1px solid #ccc;margin:10px;padding:10px;'>";
            echo "<b>File:</b> {$f['path']}<br>
            <b>Ukuran:</b> {$f['size']} bytes<br>
            <b>Terakhir diubah:</b> {$f['mtime']}<br>
            <b>X-count:</b> {$f['x_count']}<br>
            <b>Patterns:</b> " . implode(', ', $f['patterns']) . "<br>
            <a href='$web' target='_blank'>View in browser</a> |
            <a href='$del' onclick='return confirm(\"Yakin hapus?\")' style='color:red;'>DELETE</a> |
            <a href='$decode' class='view-button'>CRACK</a><br><br>";

            echo "<div class='codebox'>" . highlight(substr($f['content'], 0, 2000), $patterns) . "</div></div>";
        }
    }
    echo "</div>";
}

if (isset($_GET['decode']) && file_exists($_GET['decode'])) {
    $raw = @file_get_contents($_GET['decode']);
    echo "<hr><h3>🔓 CRACKED VIEW of: ".htmlspecialchars($_GET['decode'])."</h3>";
    echo "<pre style='background:#222;color:#0f0;padding:10px;'>";
    highlight_string($raw);
    echo "</pre>";

    echo "<h4 style='margin-top:10px;'>🧠 Attempted Decode Output:</h4><div style='background:#000;color:#0f0;padding:10px;'>";
    echo nl2br(htmlspecialchars(tryDecode($raw)));
    echo "</div>";
}

echo "<script>
function showTab(id) {
    document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
    document.getElementById('tab_' + id).classList.add('active');
}
showTab('all');
</script>";
?>
