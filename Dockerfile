# syntax=docker/dockerfile:1
### Builder
FROM php:8.2-fpm-alpine AS builder

# build deps
RUN apk add --no-cache \
    curl build-base autoconf libzip-dev zlib-dev libpng-dev libjpeg-turbo-dev freetype-dev icu-dev postgresql-dev

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www

# copy composer only to leverage layer cache
COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --no-interaction --optimize-autoloader --no-scripts

# copy app
COPY . .

# run optimizations that do not require runtime APP_KEY (avoid running artisan config:cache if APP_KEY not present)
RUN composer dump-autoload --optimize

### Final image
FROM php:8.2-fpm-alpine

RUN apk add --no-cache libzip libpng libjpeg-turbo freetype icu tzdata \
    && rm -rf /var/cache/apk/*

# copy extensions (if any) and app from builder
COPY --from=builder /var/www /var/www
WORKDIR /var/www

# ensure proper permissions (will be re-checked at runtime in entrypoint)
RUN addgroup -g 1000 app && adduser -D -u 1000 -G app app \
    && chown -R app:app /var/www/storage /var/www/bootstrap/cache \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# switch to non-root user
USER app

# expose php-fpm socket port
EXPOSE 9000

# default command runs php-fpm (already in base image)
CMD ["php-fpm"]