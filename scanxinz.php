<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Scanner by Xinz</title>
    <style>
        body {
            background-color: #1e1e2f;
            color: #cfcfcf;
            font-family: 'Segoe UI', sans-serif;
            padding: 20px;
        }
        h2, h3 {
            color: #f0f0f0;
        }
        label {
            margin-right: 8px;
        }
        .inline-form {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }
        select, input[type="submit"] {
            padding: 8px 12px;
            border-radius: 5px;
            border: none;
            font-size: 14px;
            background-color: #2b2b3c;
            color: white;
        }
        input[type="submit"] {
            background-color: #3b82f6;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #2563eb;
        }
        input[type="checkbox"] {
            transform: scale(1.2);
            margin-right: 10px;
        }
        .file-entry {
            font-size: 16px;
            margin-bottom: 6px;
        }
        hr {
            border: 0;
            border-top: 1px solid #444;
            margin: 20px 0;
        }
        .select-all-label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
            font-size: 15px;
        }
    </style>
    <script>
        function toggleCheckboxes(source) {
            const checkboxes = document.querySelectorAll('.file-checkbox');
            checkboxes.forEach(cb => cb.checked = source.checked);
        }
    </script>
</head>
<body>

<?php
$scanDir = __DIR__;
$keywordPattern = ['eval', 'base64_decode', 'shell_exec', 'gzinflate'];

$daysBack = isset($_POST['days']) ? intval($_POST['days']) : 1;
$extensionSelected = $_POST['extension'] ?? 'php';
$scanAll = isset($_POST['scan_all']);

function renderDayOptions($selected) {
    $html = "";
    for ($i = 1; $i <= 30; $i++) {
        $sel = $selected == $i ? "selected" : "";
        $html .= "<option value='$i' $sel>$i hari</option>";
    }
    return $html;
}

function renderExtensionOptions($selected) {
    $extensions = ['php', 'py', 'txt', 'html', 'js'];
    $html = "";
    foreach ($extensions as $ext) {
        $sel = $selected == $ext ? "selected" : "";
        $html .= "<option value='$ext' $sel>.$ext</option>";
    }
    return $html;
}

function scanFiles($dir, $extension, $patterns, $daysBack, $scanAll) {
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    $results = [];
    $timeLimit = time() - ($daysBack * 86400);

    foreach ($rii as $file) {
        if ($file->isDir()) continue;

        $ext = pathinfo($file, PATHINFO_EXTENSION);
        if ($ext === $extension) {
            $lastModified = filemtime($file);
            if ($lastModified >= $timeLimit) {
                $path = $file->getPathname();
                $date = date("Y-m-d H:i:s", $lastModified);

                if ($scanAll) {
                    $results[] = ['path' => $path, 'date' => $date];
                } else {
                    $content = @file_get_contents($path);
                    foreach ($patterns as $pattern) {
                        if (stripos($content, $pattern) !== false) {
                            $results[] = ['path' => $path, 'date' => $date];
                            break;
                        }
                    }
                }
            }
        }
    }

    return $results;
}
?>

<h2>🛡️Awas Kena Tebas Bestieeee</h2>

<form method="post" class="inline-form">
    <label for="days">📅Hari:</label>
    <select name="days" id="days">
        <?= renderDayOptions($daysBack); ?>
    </select>

    <label for="extension">📁File:</label>
    <select name="extension" id="extension">
        <?= renderExtensionOptions($extensionSelected); ?>
    </select>

    <label><input type="checkbox" name="scan_all" <?= $scanAll ? 'checked' : '' ?>> Scan All</label>

    <input type="submit" value="🔍Scan">
</form>

<hr>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['delete'])) {
    $foundFiles = scanFiles($scanDir, $extensionSelected, $keywordPattern, $daysBack, $scanAll);

    echo "<h3>📂 Hasil Scan (.$extensionSelected | {$daysBack} hari terakhir)</h3>";
    if (empty($foundFiles)) {
        echo "<p>✅ Tidak ada file ditemukan.</p>";
    } else {
        echo "<form method='post'>";
        echo "<input type='hidden' name='days' value='" . htmlspecialchars($daysBack) . "'>";
        echo "<input type='hidden' name='extension' value='" . htmlspecialchars($extensionSelected) . "'>";
        if ($scanAll) echo "<input type='hidden' name='scan_all' value='1'>";

        echo "<label class='select-all-label'><input type='checkbox' onclick='toggleCheckboxes(this)'> Pilih Semua File</label>";

        foreach ($foundFiles as $file) {
            echo "<div class='file-entry'>";
            echo "<label><input type='checkbox' class='file-checkbox' name='delete_files[]' value='" . htmlspecialchars($file['path']) . "'>"
                . htmlspecialchars($file['path']) . " <i>(Diubah: " . $file['date'] . ")</i></label>";
            echo "</div>";
        }
        echo "<input type='submit' name='delete' value='🗑️Tebassss'>";
        echo "</form>";
    }
}

if (isset($_POST['delete']) && !empty($_POST['delete_files'])) {
    echo "<h3>📌 Hasil Penebasan:</h3>";
    foreach ($_POST['delete_files'] as $fileToDelete) {
        if (file_exists($fileToDelete)) {
            unlink($fileToDelete);
            echo "✅ Ditebas: <span class='file-entry'>" . htmlspecialchars($fileToDelete) . "</span><br>";
        } else {
            echo "⚠️ Gagal menebas: <span class='file-entry'>" . htmlspecialchars($fileToDelete) . "</span><br>";
        }
    }
}
?>

</body>
</html>
