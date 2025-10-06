<?php

// ----------------------------------------------------
// A. DEFINISI DATA KONTEN (TIDAK BERUBAH)
// ----------------------------------------------------

$data_konten = [
    // Tambahkan keyword Anda di sini. Keyword harus dalam HURUF KAPITAL.
    // Contoh penggunaan: https://backlinkhut.com/seo-company-in-ludhiana/?news_COM=BAIM4D
    'BAIM4D' => [
        'title' => 'BAIM4D - Ulasan Resmi dan Panduan Lengkap (AMP)',
        'desc' => 'Dapatkan ulasan terkini mengenai platform BAIM4D dalam format yang cepat dan ringan.',
        'content' => '<h1>Selamat Datang di Halaman BAIM4D</h1><p>Konten ini unik untuk **BAIM4D** dan sepenuhnya dioptimalkan sebagai halaman AMP.</p><p>URL yang dipanggil: <b>?news_COM=BAIM4D</b></p>'
    ],
    'YOWESTOGEL' => [
        'title' => 'YOWESTOGEL - Info dan Tips Akurat 2024 (AMP)',
        'desc' => 'Semua yang perlu Anda ketahui tentang YOWESTOGEL, disajikan dengan kecepatan kilat.',
        'content' => '<h1>Panduan Cepat YOWESTOGEL</h1><p>Kami menyajikan tips terbaik untuk **YOWESTOGEL**. Ingat, halaman ini adalah AMP-First!</p>'
    ],
    // --- Konten Default untuk Halaman Utama ---
    'HOME' => [
        'title' => 'backlinkhut.com - Jaringan Backlink Terpercaya',
        'desc' => 'Situs resmi backlinkhut.com untuk layanan SEO dan backlink berkualitas.',
        'content' => '<h1>Selamat Datang di backlinkhut.com</h1><p>Ini adalah halaman utama (Homepage) Anda, yang juga disajikan sebagai AMP.</p>'
    ]
];

// ----------------------------------------------------
// B. LOGIKA PENGONTROL URL DAN DATA
// ----------------------------------------------------

// Domain utama Anda
$domain_cuan = "https://backlinkhut.com";

// Tentukan Path Folder Anda
$folder_path = "/seo-company-in-ludhiana"; // <-- VARIABEL BARU INI PENTING!

// 1. Ambil nilai dari parameter URL 'news_COM'
$keyword_url = isset($_GET['news_COM']) ? $_GET['news_COM'] : null;

// Tentukan keyword yang akan diproses
$keyword_bersih = '';
if ($keyword_url) {
    $keyword_bersih = strtoupper(filter_var($keyword_url, FILTER_SANITIZE_STRING));
}

// 2. Ambil Konten: Jika keyword tidak ditemukan, gunakan 'HOME'
$target_key = (isset($data_konten[$keyword_bersih]) && !empty($keyword_bersih)) ? $keyword_bersih : 'HOME';

// 3. Set data berdasarkan target key
$konten_spesifik = $data_konten[$target_key];
$judul_halaman = $konten_spesifik['title'];
$meta_deskripsi = $konten_spesifik['desc'];
$isi_utama_html = $konten_spesifik['content'];

// URL Canonical: HARUS MENAMBAHKAN FOLDER PATH
// Jika HOME: /seo-company-in-ludhiana/
// Jika ada ID: /seo-company-in-ludhiana/?news_COM=KEYWORD
$canonical_suffix = $folder_path . '/';
if ($target_key !== 'HOME' && !empty($target_key)) {
    $canonical_suffix .= '?news_COM=' . $target_key;
}
$current_canonical_url = $domain_cuan . $canonical_suffix;


// 4. Penanganan 404 (TIDAK BERUBAH)
if ($target_key === 'HOME' && $keyword_url && !isset($data_konten[$keyword_bersih])) {
    header("HTTP/1.0 404 Not Found");
    $judul_halaman = "404 - Konten Tidak Ditemukan";
    $meta_deskripsi = "Konten dengan keyword " . htmlspecialchars($keyword_url) . " tidak ada.";
    $isi_utama_html = "<h1>404: Konten Tidak Ditemukan</h1><p>Keyword <b>" . htmlspecialchars($keyword_url) . "</b> tidak ada dalam database kami.</p>";
}

// ----------------------------------------------------
// C. TEMPLATE HTML AMP-FIRST
// ----------------------------------------------------

// Header wajib AMP
header("Content-Type: text/html; charset=utf-8");
?>
<!doctype html>
<html amp lang="id">
<head>
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <title><?php echo $judul_halaman; ?></title>
    
    <link rel="canonical" href="<?php echo $current_canonical_url; ?>">
    <meta name="description" content="<?php echo $meta_deskripsi; ?>">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;
    -moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;
    animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
    @-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
    @-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
    @-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
    @keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    
    <style amp-custom>
        /* CSS Wajib AMP */
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; padding: 20px; background-color: #f0f0f0; }
        .container { max-width: 600px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h1 { color: #333; }
        nav { margin-bottom: 20px; border-bottom: 1px solid #ddd; padding-bottom: 10px; }
        nav a { margin-right: 15px; text-decoration: none; color: #007bff; }
    </style>
    <script async custom-element="amp-img" src="https://cdn.ampproject.org/v0/amp-img-0.1.js"></script>
</head>
<body>
    <div class="container">
        <header>
            <nav>
                <a href="<?php echo $domain_cuan; ?>">Home</a>
                <a href="<?php echo $folder_path; ?>/?news_COM=BAIM4D">BAIM4D (AMP)</a>
                <a href="<?php echo $folder_path; ?>/?news_COM=YOWESTOGEL">YOWESTOGEL (AMP)</a>
            </nav>
        </header>

        <main>
            <?php echo $isi_utama_html; ?>
        </main>
        
        <footer>
            <hr>
            <p><small>Disajikan oleh **backlinkhut.com** menggunakan parameter `news_COM`.</small></p>
        </footer>
    </div>
</body>
</html>
