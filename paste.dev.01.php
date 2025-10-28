<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * Safe Sitemap Generator for taalumgroup.com
 * (Auto-skip permission denied folders)
 */

$site_url = "https://taalumgroup.com";
$sitemap_file = __DIR__ . "/sitemap.xml";

$scan_path = __DIR__;
$excluded_dirs = [
    'wp-admin', 'wp-includes', 'cgi-bin',
    'vendor', 'node_modules', '.git', '.logs'
];

function safe_scan($dir, $excluded_dirs) {
    $result = [];

    try {
        $rii = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS),
            RecursiveIteratorIterator::SELF_FIRST
        );

        foreach ($rii as $file) {
            if ($file->isDir()) {
                $dirname = basename($file);
                if (in_array($dirname, $excluded_dirs)) {

                    $rii->next();
                    continue;
                }
            } else {
                if (preg_match('/\.(php|html|htm)$/i', $file->getFilename())) {
                    $result[] = $file->getPathname();
                }
            }
        }
    } catch (UnexpectedValueException $e) {

    }

    return $result;
}

$files = safe_scan($scan_path, $excluded_dirs);

$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset/>');
$xml->addAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

$urlNode = $xml->addChild('url');
$urlNode->addChild('loc', htmlspecialchars($site_url . '/'));
$urlNode->addChild('lastmod', date('Y-m-d'));
$urlNode->addChild('changefreq', 'daily');
$urlNode->addChild('priority', '1.0');

foreach ($files as $file) {
    $relative = str_replace($scan_path, '', $file);
    $relative = str_replace('\\', '/', $relative);
    $url = rtrim($site_url, '/') . $relative;

    $urlNode = $xml->addChild('url');
    $urlNode->addChild('loc', htmlspecialchars($url));
    $urlNode->addChild('lastmod', date('Y-m-d', filemtime($file)));
    $urlNode->addChild('changefreq', 'weekly');
    $urlNode->addChild('priority', '0.8');
}

$xml->asXML($sitemap_file);

$ping_url = "https://www.google.com/ping?sitemap=" . urlencode($site_url . "/sitemap.xml");
$ping_result = @file_get_contents($ping_url);

echo "<h2>✅ SUCCESS!</h2>";
echo "<p><a href='/sitemap.xml' target='_blank'>Lihat sitemap.xml</a></p>";
echo "<p>Ping To Google: " . ($ping_result ? "SUCCESS" : "FAILED server") . "</p>";
?>
