<?php
/**
 * Auto Sitemap Generator for doanhnhantrieuson.com
 * -----------------------------------------------
 * Fungsi:
 * - Menelusuri semua file & folder dalam domain.
 * - Membuat sitemap.xml otomatis.
 * - Mem-ping ke Google setelah selesai.
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

$site_url = "https://doanhnhantrieuson.com";
$sitemap_file = __DIR__ . "/sitemap.xml";

// Fungsi untuk menelusuri semua file HTML/PHP di direktori
function list_files($dir, $base_url) {
    $result = [];
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));

    foreach ($rii as $file) {
        if ($file->isDir()) continue;
        $filePath = $file->getPathname();

        // Hanya ambil file dengan ekstensi web
        if (preg_match('/\.(php|html|htm)$/i', $filePath)) {
            $urlPath = str_replace($_SERVER['DOCUMENT_ROOT'], '', $filePath);
            $urlPath = str_replace('\\', '/', $urlPath);
            $result[] = rtrim($base_url, '/') . $urlPath;
        }
    }
    return $result;
}

// Ambil semua URL
$urls = list_files($_SERVER['DOCUMENT_ROOT'], $site_url);

// Tambahkan homepage secara manual
array_unshift($urls, $site_url . '/');

// Generate sitemap XML
$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset/>');
$xml->addAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

foreach ($urls as $url) {
    $urlNode = $xml->addChild('url');
    $urlNode->addChild('loc', htmlspecialchars($url));
    $urlNode->addChild('lastmod', date('Y-m-d'));
    $urlNode->addChild('changefreq', 'weekly');
    $urlNode->addChild('priority', '0.8');
}

// Simpan ke sitemap.xml
$xml->asXML($sitemap_file);

// Ping ke Google
$ping_url = "https://www.google.com/ping?sitemap=" . urlencode($site_url . "/sitemap.xml");
$ping_result = @file_get_contents($ping_url);

echo "<h3>Sitemap berhasil digenerate!</h3>";
echo "<p><a href='/sitemap.xml' target='_blank'>Lihat sitemap.xml</a></p>";
echo "<p>Ping Google: " . ($ping_result ? "Berhasil" : "Gagal / diblokir oleh server") . "</p>";
?>
