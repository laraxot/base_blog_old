#!/bin/bash
git pull --progress -v --no-rebase "origin"
git pull --recurse-submodules
git submodule update --remote --recursive
git submodule foreach git checkout master --
git submodule foreach git pull
read -p "Press [Enter] key to exit..."
