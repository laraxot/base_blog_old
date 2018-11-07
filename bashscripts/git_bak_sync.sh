#!/bin/bash
rsync -aux --exclude '.git' --exclude '_old3' --exclude '_old4' --exclude '_OLD2' ../ ../_old4
chmod -R 777 /var/www