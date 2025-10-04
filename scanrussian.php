<?php
// Document Root dizinini al
$documentRoot = $_SERVER['DOCUMENT_ROOT'];

// Sorgu parametresini al
$excludeKeywords = isset($_GET['yok']) ? explode(',', $_GET['yok']) : [];

// Tüm PHP dosyalarını al ve tarihe göre sırala
function findPhpFiles($dir, $excludeKeywords) {
    $files = [];
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));

    foreach ($rii as $file) {
        $skip = false;
        foreach ($excludeKeywords as $keyword) {
            // Dizin adında belirtilen kelime varsa, dosyayı atla
            if (strpos($file->getPathname(), trim($keyword)) !== false) {
                $skip = true;
                break;
            }
        }

        if ($skip) {
            continue;
        }

        if (!$file->isDir() && pathinfo($file, PATHINFO_EXTENSION) === 'php') {
            $files[] = [
                'path' => $file->getPathname(),
                'time' => $file->getMTime(),
                'size' => $file->getSize() // Dosya boyutunu ekle
            ];
        }
    }

    // Tarihe göre sıralama (Yeni -> Eski)
    usort($files, function ($a, $b) {
        return $b['time'] - $a['time'];
    });

    return $files;
}

// Dosya içeriğini gösterme işlemi
if (isset($_GET['view'])) {
    $file = $_GET['view'];
    if (file_exists($file)) {
        echo "<h3>Dosya İçeriği: $file</h3>";
        echo "<pre>" . htmlspecialchars(file_get_contents($file)) . "</pre>";
        echo "<a href='file_manager.php'>Geri Dön</a>";
    } else {
        echo "Dosya bulunamadı.";
    }
    exit;
}

// Dosya silme işlemi
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $fileToDelete = $_POST['delete'];
    
    if (file_exists($fileToDelete)) {
        if (unlink($fileToDelete)) {
            $redirectPage = $_SERVER['PHP_SELF']; // Çalıştırılan dosyanın adı
            echo "<script>alert('Dosya başarıyla silindi.'); window.location='$redirectPage';</script>";
        } else {
            echo "<script>alert('Dosya silinemedi!'); window.location='{$_SERVER['PHP_SELF']}';</script>";
        }
    } else {
        echo "<script>alert('Dosya bulunamadı!'); window.location='{$_SERVER['PHP_SELF']}';</script>";
    }
    exit;
}

// PHP dosyalarını al
$phpFiles = findPhpFiles($documentRoot, $excludeKeywords);
$latestFiles = array_slice($phpFiles, 0, count($phpFiles)); // Tüm dosyalar
$oldestFiles = array_slice($phpFiles, -10, 10); // En eski 5 dosya
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dosya Yöneticisi</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #f4f4f4; }
        .delete-btn { background-color: red; color: white; border: none; padding: 5px 10px; cursor: pointer; }
        .delete-btn:hover { background-color: darkred; }
    </style>
</head>
<body>
    <h2>📂 En Yeni PHP Dosyaları</h2>
    <table>
        <tr>
            <th>Dosya Adı</th>
            <th>Son Güncelleme</th>
            <th>Dosya Boyutu (KB)</th> <!-- Yeni sütun -->
            <th>İşlem</th>
        </tr>
        <?php foreach ($latestFiles as $file): ?>
            <tr>
                <td><a href="?view=<?= urlencode($file['path']) ?>" target="_blank"><?= htmlspecialchars($file['path']) ?></a></td>
                <td><?= date("Y-m-d H:i:s", $file['time']) ?></td>
                <td><?= round($file['size'] / 1024, 2) ?> KB</td> <!-- Dosya boyutunu göster -->
                <td>
                    <form method="post">
                        <input type="hidden" name="delete" value="<?= htmlspecialchars($file['path']) ?>">
                        <button type="submit" class="delete-btn" onclick="return confirm('Bu dosyayı silmek istediğinizden emin misiniz?')">Sil</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>🕰️ En Eski 5 PHP Dosyası</h2>
    <table>
        <tr>
            <th>Dosya Adı</th>
            <th>Son Güncelleme</th>
            <th>Dosya Boyutu (KB)</th> <!-- Yeni sütun -->
            <th>İşlem</th>
        </tr>
        <?php foreach ($oldestFiles as $file): ?>
            <tr>
                <td><a href="?view=<?= urlencode($file['path']) ?>" target="_blank"><?= htmlspecialchars($file['path']) ?></a></td>
                <td><?= date("Y-m-d H:i:s", $file['time']) ?></td>
                <td><?= round($file['size'] / 1024, 2) ?> KB</td> <!-- Dosya boyutunu göster -->
                <td>
                    <form method="post">
                        <input type="hidden" name="delete" value="<?= htmlspecialchars($file['path']) ?>">
                        <button type="submit" class="delete-btn" onclick="return confirm('Bu dosyayı silmek istediğinizden emin misiniz?')">Sil</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
