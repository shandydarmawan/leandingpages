FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    unzip git curl libpq-dev libonig-dev libxml2-dev zip

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

# Install dependencies
RUN composer install --optimize-autoloader --no-dev

# Set folder permission
RUN chmod -R 777 storage bootstrap/cache

# Start server
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=10000

EXPOSE 10000
