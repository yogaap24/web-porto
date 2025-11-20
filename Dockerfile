# Stage 1: BUILDER (Instalasi dan Kompilasi)
FROM php:8.2-fpm-alpine AS builder

# 1. Install Tool & Dev Dependencies (untuk kompilasi)
RUN apk add --no-cache git libzip-dev zlib-dev libpng-dev libjpeg-turbo-dev freetype-dev libpq-dev zip unzip \
    && rm -rf /var/cache/apk/*

# 2. Install Composer (Versi 2.3.3)
COPY --from=composer:2.3.3 /usr/bin/composer /usr/local/bin/composer

# 3. Konfigurasi PHP Extension (Kompilasi)
RUN docker-php-ext-configure pgsql --with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd opcache bcmath zip

# 4. Copy kode dan install Composer
WORKDIR /var/www
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --prefer-dist --no-scripts
COPY . /var/www

# Stage 2: PRODUCTION (Image final yang ramping)
FROM php:8.2-fpm-alpine

RUN apk add --no-cache libpq libpng libjpeg-turbo freetype \
    && rm -rf /var/cache/apk/*

# 1. Copy user dan group
COPY --from=builder /etc/passwd /etc/passwd
COPY --from=builder /etc/group /etc/group

# 2. Copy PHP configs (penting untuk ekstensi yang baru di-install)
COPY --from=builder /usr/local/etc/php /usr/local/etc/php

# 3. Copy kode aplikasi dan vendor
COPY --from=builder /var/www /var/www

# Perbaikan permission storage Laravel
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Ganti mode ke user non-root
USER www-data

# Perintah menjalankan PHP-FPM (standar production)
CMD ["php-fpm"]
EXPOSE 9000