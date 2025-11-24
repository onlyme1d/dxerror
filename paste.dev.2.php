<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $targetDir = __DIR__ . '/uploads/';
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true);
    }

    $fileName = basename($_FILES["file"]["name"]);
    $targetFile = $targetDir . $fileName;

    $allowedTypes = ['jpg','png','pdf','zip','php','txt'];
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if (!in_array($fileType, $allowedTypes)) {
        echo "Tipe file tidak diizinkan.";
        exit;
    }

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        echo "File berhasil diupload: " . htmlspecialchars($fileName);
    } else {
        echo "Gagal upload file.";
    }
}
?>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <button type="submit">Upload</button>
</form>
