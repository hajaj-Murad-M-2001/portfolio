#!/bin/sh

# Clear and cache configs & routes
php artisan config:cache
php artisan route:cache

# Run database migrations automatically
php artisan migrate --force

# Start PHP built-in web server
exec php -S 0.0.0.0:10000 -t public