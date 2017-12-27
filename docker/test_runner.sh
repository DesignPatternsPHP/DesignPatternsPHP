#!/bin/sh

echo "Installing composer..."
EXPECTED_SIGNATURE=$(wget -q -O - https://composer.github.io/installer.sig)
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
ACTUAL_SIGNATURE=$(php -r "echo hash_file('SHA384', 'composer-setup.php');")

if [ "$EXPECTED_SIGNATURE" != "$ACTUAL_SIGNATURE" ]
then
    >&2 echo 'ERROR: Invalid installer signature'
    rm composer-setup.php
    exit 1
fi

php composer-setup.php --quiet
rm composer-setup.php

echo "Downloading dependencies using composer..."
php composer.phar install --prefer-dist --no-interaction

echo "Running tests..."
if ./vendor/bin/phpunit; then
  echo "Tests passed successfully!"
  exit 0
else
  echo "Tests failed :("
  exit 1
fi
