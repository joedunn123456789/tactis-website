#!/bin/bash

pwd=$(pwd)
printf "Current folder is %s\n" "$pwd"

# Let's configure our linux environment
apt-get update && apt-get install -y git nodejs npm curl rsync

docker-php-ext-install bcmath

# If you want to build the css rather than commit it,
# you do it here:

cd $pwd

printf "Installing GULP\n"
npm install -g gulp

# For Acquia we need to commit the vendor, contrib, and libraries
# so we need to ACLI.
cd /usr/local/bin/
curl -OL https://github.com/acquia/cli/releases/latest/download/acli.phar
chmod 755 acli.phar
mv acli.phar acli
cd $pwd

# Here we have our database tasks.
#mysql -u root -proot -h 127.0.0.1 -e "CREATE DATABASE IF NOT EXISTS drupal"

export PIPELINES_ENV=PIPELINES_ENV
