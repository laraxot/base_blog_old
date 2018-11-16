# base_blog

requirements:

install stack lamp (linux-apache-mysql-php)

update Php:

PHP >= 7.1.3

OpenSSL PHP Extension

PDO PHP Extension

Mbstring PHP Extension

Tokenizer PHP Extension

XML PHP Extension

Ctype PHP Extension

JSON PHP Extension

php_sqlite3 Extension

php_gd Extension


For installation on linux:

installing composer:

https://getcomposer.org/

cd /var/www/html

mkdir blogx

cd blogx

git init

git remote add origin https://github.com/laraxot/base_blog

git pull origin master

git submodule update --init --checkout --force

./bashscripts/git_branch.sh

cd laravel 

cp .env.latest .env

composer update

bower update --save --force

update your .env 

open browser for migrations: 

http://localhost/blogx/public_html?migrate=1

chmod 777 -R /var/www/html/blogx/

a2enmod rewrite

a2enmod ssl

cd /etc/apache2/sites-available/

nano 000-default.conf

add:
<Directory "/var/www/html">

	Options Indexes FollowSymLinks MultiViews
	
	AllowOverride All
	
	Require all granted
	
</Directory>


--------




