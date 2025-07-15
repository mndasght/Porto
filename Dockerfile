# Gunakan image PHP 8.2 dengan FPM
FROM php:8.2-fpm

# Install dependensi sistem
RUN apt-get update && apt-get install -y \
    zip unzip git curl libzip-dev \
    && docker-php-ext-install zip pdo

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy seluruh file project ke container
COPY . .

# Install dependensi Laravel
RUN composer install --optimize-autoloader --no-dev

# Set permission folder storage dan bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache

# Generate key aplikasi Laravel
RUN php artisan key:generate

# Laravel default port 10000 di Render
EXPOSE 10000

# Jalankan server Laravel
CMD php artisan serve --host=0.0.0.0 --port=10000
