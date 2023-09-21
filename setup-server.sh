#!/bin/bash

# Update system
sudo apt update
sudo apt upgrade -y

# Install necessary packages
sudo apt install nginx mysql-server php-fpm php-mysql -y

# Secure MySQL installation
sudo mysql_secure_installation

# Start services and enable them on boot
sudo systemctl start nginx
sudo systemctl enable nginx
sudo systemctl start mysql
sudo systemctl enable mysql
sudo systemctl start php8.1fpm
sudo systemctl enable php8.1-fpm

