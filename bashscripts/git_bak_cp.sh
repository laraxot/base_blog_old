#!/bin/bash
day=$(date +%Y-%m-%d)
curr_dir=${PWD##*/}
bak_dir=../_backup/$day/$curr_dir
echo $bak_dir
mkdir -p $bak_dir/laravel
mkdir -p $bak_dir/public_html
cp -uvR ../$curr_dir/laravel/packages $bak_dir/laravel
cp -uvR ../$curr_dir/public_html/themes $bak_dir/public_html