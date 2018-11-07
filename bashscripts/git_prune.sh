#!/bin/bash
rm -rf .git/refs/original/
git gc --auto --aggressive
git submodule foreach git gc --auto --aggressive
git gc --aggressive
git submodule foreach git gc --aggressive
git reflog expire --all --expire=now
git gc --prune=now --aggressive
git submodule foreach reflog expire --all --expire=now
git submodule foreach git gc --prune=now --aggressive
read -p "Press [Enter] key to exit..."

