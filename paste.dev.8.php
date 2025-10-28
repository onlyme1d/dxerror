<?php
$targetDir = '/home/gk4juni457tt/public_html/taalumgroup.com';
$logFile   = __DIR__ . '/security-monitor-log.json';
$envFile   = __DIR__ . '/.env';

// --- Load .env ---
if (!file_exists($envFile)) die("❌ File .env tidak ditemukan!");
foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
    if (strpos(trim($line), '#') === 0) continue;
    [$k, $v] = explode('=', $line, 2);
    $_ENV[trim($k)] = trim($v);
}

$botToken = $_ENV['BOT_TOKEN'] ?? '';
$chatId   = $_ENV['CHAT_ID'] ?? '';
if (!$botToken || !$chatId) die("❌ BOT_TOKEN atau CHAT_ID belum diatur di .env");

// --- Ambil semua file rekursif ---
function getFileList($dir) {
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    $files = [];
    foreach ($rii as $file) {
        if ($file->isDir()) continue;
        $files[$file->getPathname()] = $file->getMTime();
    }
    return $files;
}

// --- Ambil snapshot lama ---
$oldData = file_exists($logFile) ? json_decode(file_get_contents($logFile), true) : [];
$newData = getFileList($targetDir);

// --- Cek file baru ---
$newFiles = array_diff_key($newData, $oldData);

// --- Debug output ---
echo "===== DEBUG FILE BARU =====\n";
if (!empty($newFiles)) {
    foreach ($newFiles as $file => $time) {
        $rel = str_replace($targetDir, '', $file);
        echo "📁 $rel  🕒 " . date('Y-m-d H:i:s', $time) . "\n";
    }
} else {
    echo "Tidak ada file baru yang terdeteksi.\n";
}

// --- Kirim ke Telegram ---
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
    $res = curl_exec($ch);
    curl_close($ch);

    echo "\n===== DEBUG TELEGRAM RESPONSE =====\n";
    echo $res . "\n";

    // Simpan log teks
    file_put_contents(__DIR__ . '/security-monitor-events.log', date('Y-m-d H:i:s') . "\n" . $msg . "\n\n", FILE_APPEND);
}

// --- Simpan snapshot terbaru ---
file_put_contents($logFile, json_encode($newData, JSON_PRETTY_PRINT));

echo "\n===== DEBUG SELESAI =====\n";
?>
