#!/bin/bash

DIR="/var/www/html"
if [ -d "$DIR" ]; then
    sudo rm -rf /var/www/html && sudo rm -rf /var/www/html
    sudo rm -rf /var/www/html && sudo rm -rf /var/www/html
else
  direcoty not found.
  exit 1
fi

if [ -d "$DIR" ]; then
    sudo rm -rf /var/www/html && sudo rm -rf /var/www/html
    sudo rm -rf /var/www/html && sudo rm -rf /var/www/html
else
  direcoty not found.
  exit 1
fi

sudo mkdir -p /var/www/html
sudo chmod -R 777 /var/www/html
