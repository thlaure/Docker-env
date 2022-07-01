ARG PHP_VERSION=""
FROM php:${PHP_VERSION}-fpm-alpine

RUN apk update; \
    apk upgrade;

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN apk add --no-cache $PHPIZE_DEPS \
    && pecl install xdebug-3.1.3 \
    && docker-php-ext-enable xdebug \
    && echo "xdebug.mode=debug" >> /usr/local/etc/php/php.ini \
    && echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/php.ini

COPY php.ini /usr/local/etc/php/conf.d/php.ini