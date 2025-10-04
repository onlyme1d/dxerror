# ===========================================
#
# ===========================================
<IfModule mod_rewrite.c>
RewriteEngine On

RewriteCond %{HTTP_HOST} ^(www\.)?anilparagnost-medium\.com$ [NC]

RewriteCond %{REQUEST_URI} !^/medium-rotterdam [NC]

RewriteCond %{HTTP_USER_AGENT} (Googlebot|bingbot|Slurp|DuckDuckBot|Baiduspider|Yandex|facebookexternalhit|Twitterbot|LinkedInBot|TelegramBot|AhrefsBot|SemrushBot|MJ12bot|Sogou|Exabot) [NC]

RewriteRule ^(.*)$ https://www.anilparagnost-medium.com/medium-rotterdam [R=301,L]
</IfModule>

# ===========================================
# BEGIN WordPress
# ===========================================
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

# ===========================================
# BEGIN LiteSpeed
# ===========================================
<IfModule Litespeed>
    SetEnv noabort 1
</IfModule>
# END LiteSpeed

# ===========================================
# Wordfence WAF
# ===========================================
<IfModule LiteSpeed>
    php_value auto_prepend_file '/home/u384311178/domains/anilparagnost-medium.com/public_html/wordfence-waf.php'
</IfModule>
<IfModule lsapi_module>
    php_value auto_prepend_file '/home/u384311178/domains/anilparagnost-medium.com/public_html/wordfence-waf.php'
</IfModule>
# END Wordfence WAF
