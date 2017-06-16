#!/bin/bash

# Put this shellscript in the same 
# directory as the docker compose file
# Before run it always backup 
# your files, and database!

# Pull Wordpress and service containers
docker pull wordpress
docker pull mysql
docker pull phpmyadmin/phpmyadmin
docker pull tatemz/wp-cli
docker pull jwilder/nginx-proxy

# Stop and remove containers
docker-compose down

# Build and start containers
docker-compose up -d