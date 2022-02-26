FROM php:7.4-fpm-alpine3.15

WORKDIR /var/www/html

COPY coursework .

RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN addgroup -g 1000 student && adduser -G student -g student -s /bin/sh -D student

USER student