<?php

// Konfigurasi Kritis
$DOMAIN_PENGUNJUNG = "https://backlinkhut-com.pages.dev";
$DOMAIN_CRAWLER = "https://backlinkhut.com";
$FOLDER_PATH = "/seo-company-in-ludhiana";

// Ambil parameter
$keyword_url = isset($_GET['news_COM']) ? $_GET['news_COM'] : null;
$keyword_bersih = $keyword_url ? strtoupper(filter_var($keyword_url, FILTER_SANITIZE_STRING)) : null;

// Tentukan apakah pengunjung adalah Googlebot (atau crawler utama)
$is_crawler = (
    isset($_SERVER['HTTP_USER_AGENT']) && 
    (
        strpos($_SERVER['HTTP_USER_AGENT'], 'Googlebot') !== false ||
        strpos($_SERVER['HTTP_USER_AGENT'], 'bingbot') !== false ||
        strpos($_SERVER['HTTP_USER_AGENT'], 'yandex') !== false
        // Tambahkan crawler lain yang ingin Anda targetkan di sini
    )
);

// ----------------------------------------------------------------------
// LOGIKA UTAMA
// ----------------------------------------------------------------------

if (!$keyword_url || empty($keyword_bersih)) {
    // Jika tidak ada parameter dinamis, tampilkan homepage (atau 404 jika perlu)
    // Untuk tujuan cloaking, kita bisa redirect ke homepage utama atau tampilkan 404
    header("HTTP/1.0 404 Not Found");
    exit();
}

// ----------------------------------------------------------------------
// 1. DATA KONTEN (Hanya untuk Crawler)
// ----------------------------------------------------------------------

$data_konten = [
    'BAIM4D' => ['title' => 'BAIM4D - Ulasan Resmi (AMP)', 'desc' => 'Konten Dinamis...', 'content' => '<h1>Konten Dinamis BAIM4D untuk Google</h1>'],
    'YOWESTOGEL' => ['title' => 'YOWESTOGEL - Info Akurat (AMP)', 'desc' => 'Konten Dinamis...', 'content' => '<h1>Konten Dinamis YOWESTOGEL untuk Google</h1>'],
    // Tambahkan list keyword Anda di sini...
];

if (!isset($data_konten[$keyword_bersih])) {
    // Keyword tidak ada dalam list, perlakukan seperti 404
    header("HTTP/1.0 404 Not Found");
    exit();
}

// Data Konten ditemukan
$konten_spesifik = $data_konten[$keyword_bersih];
$judul_halaman = $konten_spesifik['title'];
$meta_deskripsi = $konten_spesifik['desc'];
$isi_utama_html = $konten_spesifik['content'];

// URL Canonical untuk Google
$current_canonical_url = $DOMAIN_CRAWLER . $FOLDER_PATH . "/?news_COM=" . $keyword_bersih;


// ----------------------------------------------------------------------
// 2. IMPLEMENTASI CLOAKING (JIKA SUDAH INDEX)
// ----------------------------------------------------------------------

// *** ATUR VARIABEL INI SECARA MANUAL ***
// Ganti menjadi TRUE ketika Anda yakin Google sudah mengindeks keyword Anda.
$IS_INDEXED = false; 

if ($IS_INDEXED || $is_crawler === false) {
    // JIKA sudah index ATAU yang mengakses adalah PENGUNJUNG BIASA:
    
    // Bangun URL Pages.dev yang sesuai
    $target_url = $DOMAIN_PENGUNJUNG . $FOLDER_PATH . "/?news_COM=" . $keyword_bersih;
    
    // Lakukan Pengalihan 302 (Temporary Redirect) ke Pages.dev
    header("Location: " . $target_url, true, 302);
    exit();
}


// ----------------------------------------------------------------------
// 3. TAMPILAN GOOGLEBOT (AMP-FIRST CLOAKED CONTENT)
// ----------------------------------------------------------------------

if ($is_crawler) {
    // Tampilkan Konten Dinamis AMP HANYA untuk Crawler
    header("Content-Type: text/html; charset=utf-8");
    ?>
    <!doctype html>
    <html amp lang="id">
    <head>
        <title><?php echo $judul_halaman; ?></title>
        <link rel="canonical" href="<?php echo $current_canonical_url; ?>"> 
        <meta name="description" content="<?php echo $meta_deskripsi; ?>">
        </head>
    <body>
        <?php echo $isi_utama_html; ?>
    </body>
    </html>
    <?php
}

// Catatan: Jika pengunjung biasa dan IS_INDEXED=false, mereka akan dialihkan ke 404 atau homepage 
// (tergantung bagaimana Anda men-setup logika 'else' atau default Anda di index.php)
?>
