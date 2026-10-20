#!/bin/bash

# Clear and cache configs & routes
php artisan config:clear
php artisan config:cache
php artisan route:cache

# Run database migrations
php artisan migrate --force

# Start PHP built-in server
exec php -S 0.0.0.0:10000 -t public