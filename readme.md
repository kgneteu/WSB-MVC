W Apachu trzeba włączyć rewrite, czyli dopisać:

RewriteEngine on
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.+)$ /index.php/$1 [L] 