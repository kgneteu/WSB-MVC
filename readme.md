W Apachu trzeba włączyć rewrite, czyli dopisać:

RewriteEngine on<br>
RewriteCond %{REQUEST_FILENAME} !-d<br>
RewriteCond %{REQUEST_FILENAME} !-f<br>
RewriteRule ^(.+)$ /index.php/$1 [L]<br>