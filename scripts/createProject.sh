#!/bin/sh
echo 'Creando proyecto '$nombreProyecto
composer create-project laravel/laravel $nombreProyecto
cd $nombreProyecto
echo 'Instalando dependencias de Laravel'
composer install
php artisan key:generate
echo 'Preparando permisos sobre Storage'
sudo chmod -R 777 storage
echo 'Preparando permisos sobre Bootstrat/cache'
sudo chmod -R 777 bootstrap/cache
clear
echo 'Instalacion finalizada'
cd ..