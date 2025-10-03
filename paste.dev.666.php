# Lindungi index.php agar tidak bisa diakses langsung
<Files "index.php">
    Require all denied
</Files>

# Lindungi semua file PHP di folder ini dari akses luar
<FilesMatch "\.php$">
    Require all denied
</FilesMatch>

# Jika ingin tetap menampilkan halaman kosong saat diakses folder
DirectoryIndex index.php
