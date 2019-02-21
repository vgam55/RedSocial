#!/bin/bash
sudo apt-get install php7.2-cli php-common php-mbstring php-xml php-zip php-mysql php-pgsql php-pdo-pgsql
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer