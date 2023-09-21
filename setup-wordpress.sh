#!/bin/bash

# Replace with your actual values
DB_NAME="wordpress"
DB_USER="wpuser"
DB_PASSWORD="RandomP@ssw0rd"

# Download and configure WordPress
wget https://wordpress.org/latest.tar.gz
tar -xzvf latest.tar.gz
sudo cp -r wordpress/* /var/www/html/
sudo chown -R www-data:www-data /var/www/html/
cp /var/www/html/wp-config-sample.php /var/www/html/wp-config.php

# Configure WordPress database
sudo sed -i "s/database_name_here/$DB_NAME/" /var/www/html/wp-config.php
sudo sed -i "s/username_here/$DB_USER/" /var/www/html/wp-config.php
sudo sed -i "s/password_here/$DB_PASSWORD/" /var/www/html/wp-config.php

