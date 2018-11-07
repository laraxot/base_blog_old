#!/bin/bash
git branch --set-upstream-to=origin/master master
git submodule foreach git branch --set-upstream-to=origin/master master
git push --set-upstream origin master
git submodule foreach git push --set-upstream origin master
git checkout master --
git submodule foreach git checkout master --
read -p "Press [Enter] key to exit..."
