<?php
$targetDir = '/home/gk4juni457tt/public_html/taalumgroup.com';
$logFile   = __DIR__ . '/security-monitor-log.json';
$envFile   = __DIR__ . '/.env';

function loadEnv($filePath) {
    if (!file_exists($filePath)) return;
    foreach (file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        [$k, $v] = explode('=', $line, 2);
        $_ENV[trim($k)] = trim($v);
    }
}
loadEnv($envFile);

$botToken = $_ENV['BOT_TOKEN'] ?? '';
$chatId   = $_ENV['CHAT_ID'] ?? '';
if (!$botToken || !$chatId) exit;

function getFileList($dir) {
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    $files = [];
    foreach ($rii as $file) {
        if ($file->isDir()) continue;
        $p = $file->getPathname();
        if (strpos($p, '/cache/') !== false || strpos($p, '/tmp/') !== false) continue;
        $files[$p] = $file->getMTime();
    }
    return $files;
}

$oldData = file_exists($logFile) ? json_decode(file_get_contents($logFile), true) : [];
$newData = getFileList($targetDir);
$newFiles = array_diff_key($newData, $oldData);

if (!empty($newFiles)) {
    $msg = "🚨 *New File Detected!*\n\n";
    foreach ($newFiles as $file => $time) {
        $rel = str_replace($targetDir, '', $file);
        $msg .= "📁 `$rel`\n🕒 " . date('Y-m-d H:i:s', $time) . "\n\n";
    }
    $msg .= "📂 Path: `$targetDir`";

    $url = "https://api.telegram.org/bot{$botToken}/sendMessage";
    $data = ['chat_id' => $chatId, 'text' => $msg, 'parse_mode' => 'Markdown'];
    @file_get_contents($url . '?' . http_build_query($data));

    file_put_contents(__DIR__ . '/security-monitor-events.log', date('Y-m-d H:i:s') . "\n" . $msg . "\n\n", FILE_APPEND);
}

file_put_contents($logFile, json_encode($newData, JSON_PRETTY_PRINT));
?>
