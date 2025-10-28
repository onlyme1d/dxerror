<?php
$targetDir = '/home/gk4juni457tt/public_html/taalumgroup.com';
$logFile   = __DIR__ . '/security-monitor-log.json';
$envFile   = __DIR__ . '/.env';

if (!file_exists($envFile)) die("❌ File .env tidak ditemukan!");
foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
    if (strpos(trim($line), '#') === 0) continue;
    [$k, $v] = explode('=', $line, 2);
    $_ENV[trim($k)] = trim($v);
}

$botToken = $_ENV['BOT_TOKEN'] ?? '';
$chatId   = $_ENV['CHAT_ID'] ?? '';
if (!$botToken || !$chatId) die("❌ BOT_TOKEN atau CHAT_ID belum diatur di .env");

function getFileList($dir) {
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    $files = [];
    foreach ($rii as $file) {
        if ($file->isDir()) continue;
        $files[$file->getPathname()] = $file->getMTime();
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

    $ch = curl_init("https://api.telegram.org/bot{$botToken}/sendMessage");
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => [
            'chat_id' => $chatId,
            'text' => $msg,
            'parse_mode' => 'Markdown'
        ]
    ]);
    curl_exec($ch);
    curl_close($ch);

    file_put_contents(__DIR__ . '/security-monitor-events.log', date('Y-m-d H:i:s') . "\n" . $msg . "\n\n", FILE_APPEND);
}

file_put_contents($logFile, json_encode($newData, JSON_PRETTY_PRINT));
?>
