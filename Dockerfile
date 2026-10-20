FROM php:8.3-fpm

# Install system dependencies and PostgreSQL extensions
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions including pdo_pgsql, pgsql, and gd
RUN docker-php-ext-install pdo_pgsql pgsql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy existing application directory contents
COPY . /var/www

# Install composer dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Set permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache || true

# Give execution permission to entrypoint script
RUN chmod +x /var/www/entrypoint.sh

# Expose port 10000 for Render
EXPOSE 10000

# Set entrypoint to run migrations and start server using /bin/sh
ENTRYPOINT ["/bin/sh", "/var/www/entrypoint.sh"]
