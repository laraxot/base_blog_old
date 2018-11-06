# base_blog

for install

mkdir blogx

cd blogx

git init

git remote add origin https://github.com/laraxot/base_blog

git pull origin master

git submodule update --init --checkout --force

cd laravel 

cp .env.example .env

composer update

bower update --save 

open browser

