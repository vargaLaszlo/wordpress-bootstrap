#!/bin/bash

# Put this shellscript in the same 
# directory as the docker compose file
# Before run it always backup 
# your files, and database!

# Pull Wordpress and service containers
docker-compose pull

# Stop and remove containers
docker-compose down

# Build and start containers
docker-compose up -d