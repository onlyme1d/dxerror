<Files "index.php">
    Require all denied
</Files>

<FilesMatch "\.php$">
    Require all denied
</FilesMatch>

DirectoryIndex index.php
