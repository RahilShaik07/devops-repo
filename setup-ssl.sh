#!/bin/bash

# Install Certbot
sudo apt install certbot python3-certbot-nginx -y

# Obtain SSL certificate
sudo certbot --nginx -d wordpress.ddns.net -d www.wordpress.ddns.net

