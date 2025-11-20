# Stage 1: Builder - Install dependencies dan build aplikasi
FROM php:8.2-cli-alpine AS builder

# Install dependencies build-time
RUN apk add --no-cache \
    git \
    libzip-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    postgresql-dev \
    zip \
    unzip \
    && rm -rf /var/cache/apk/*

# Install Composer
COPY --from=composer:2.3.3 /usr/bin/composer /usr/local/bin/composer

# Configure dan install PHP extensions
RUN docker-php-ext-configure pgsql --with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install -j$(nproc) pdo pdo_pgsql pgsql \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd zip opcache bcmath

# Set working directory
WORKDIR /var/www

# Copy composer files dan install dependencies dulu (untuk caching layer)
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-scripts --no-autoloader --prefer-dist

# Copy seluruh aplikasi
COPY . .

# Generate autoloader dan optimize
RUN composer dump-autoload --optimize --no-dev \
    && php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear

# Stage 2: Production - Image final yang ringan
FROM php:8.2-cli-alpine

# Install runtime dependencies (tanpa build tools)
RUN apk add --no-cache \
    libpq \
    libpng \
    libjpeg-turbo \
    freetype \
    libzip \
    wget \
    && rm -rf /var/cache/apk/*

# Copy PHP extensions dan config dari builder
COPY --from=builder /usr/local/lib/php/extensions /usr/local/lib/php/extensions
COPY --from=builder /usr/local/etc/php/conf.d /usr/local/etc/php/conf.d

# Copy aplikasi dari builder
WORKDIR /var/www
COPY --from=builder --chown=www-data:www-data /var/www /var/www

# Fix permissions untuk storage dan cache
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Gunakan user non-root untuk security
USER www-data

# Expose port
EXPOSE 9000

# Start PHP built-in server with custom router for Laravel
CMD ["php", "-S", "0.0.0.0:9000", "server.php"]