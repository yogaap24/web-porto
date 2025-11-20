# Stage 1: BUILD (Install dependensi dan Composer)
FROM php:8.2-fpm-alpine AS builder

# 1. Install Tool yang dibutuhkan
RUN apk add --no-cache git libzip-dev zlib-dev libpng-dev libjpeg-turbo-dev freetype-dev libpq-dev zip unzip \
    && rm -rf /var/cache/apk/*

# 2. Install Composer (Versi 2.3.3 sesuai permintaan)
COPY --from=composer:2.3.3 /usr/bin/composer /usr/bin/composer

# 3. Konfigurasi PHP Extension
RUN docker-php-ext-configure pgsql --with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install zip opcache bcmath

# 4. Copy code dan install Composer
WORKDIR /var/www
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --prefer-dist --no-scripts
COPY . /var/www

# Stage 2: PRODUCTION (Image final yang ramping)
# Gunakan Alpine CLI base yang sangat ringan (FPM sudah di-install di stage builder)
FROM php:8.2-fpm-alpine

# Copy user dan kode dari stage builder
COPY --from=builder /etc/passwd /etc/passwd
COPY --from=builder /etc/group /etc/group
COPY --from=builder /var/www /var/www

# Copy Composer/Vendor (Sudah di-install tanpa --no-dev)
COPY --from=builder /usr/local/bin/composer /usr/local/bin/composer
COPY --from=builder /usr/local/etc/php /usr/local/etc/php

# Perbaikan permission storage Laravel
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Ganti mode ke user non-root
USER www-data

# Perintah menjalankan PHP-FPM (standar production)
CMD ["php-fpm"]
EXPOSE 9000