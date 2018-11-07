# base_blog

for install

mkdir blogx

cd blogx

git init

git remote add origin https://github.com/laraxot/base_blog

git pull origin master

git submodule update --init --checkout --force

cd laravel 

cp .env.latest .env

composer update

bower update --save --force

update your .env 

open browser

for migrations 

http://localhost/blogx/public_html?migrate=1

--------




