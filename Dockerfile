FROM node:22-bookworm-slim AS assets
WORKDIR /app
COPY . .
RUN npm install --ignore-scripts && npm run build

FROM php:8.3-apache

RUN apt-get update && apt-get install -y \
    unzip libzip-dev libonig-dev libxml2-dev \
    libsqlite3-dev \
    && docker-php-ext-install pdo_sqlite mbstring xml zip \
    && a2enmod rewrite \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .
COPY --from=assets /app/public/build /var/www/html/public/build

RUN composer install --no-dev --optimize-autoloader --no-interaction

RUN printf '%s\n' \
    '<VirtualHost *:10000>' \
    '    DocumentRoot /var/www/html/public' \
    '    <Directory /var/www/html/public>' \
    '        AllowOverride All' \
    '        Require all granted' \
    '    </Directory>' \
    '    ErrorLog /proc/self/fd/2' \
    '    CustomLog /proc/self/fd/1 combined' \
    '</VirtualHost>' \
    > /etc/apache2/sites-available/000-default.conf \
    && sed -i 's/Listen 80/Listen 10000/' /etc/apache2/ports.conf

ENV APP_ENV=production \
    APP_DEBUG=false \
    DB_CONNECTION=sqlite \
    DB_DATABASE=/var/www/html/database/database.sqlite \
    SESSION_DRIVER=file \
    CACHE_STORE=file \
    QUEUE_CONNECTION=sync \
    PORT=10000

RUN mkdir -p storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs bootstrap/cache database \
    && touch database/database.sqlite \
    && chown -R www-data:www-data storage bootstrap/cache database \
    && chmod -R ug+rwX storage bootstrap/cache database \
    && php artisan migrate --force \
    && php artisan db:seed --force \
    && php artisan config:clear \
    && chown www-data:www-data database/database.sqlite

EXPOSE 10000
CMD ["apache2-foreground"]
