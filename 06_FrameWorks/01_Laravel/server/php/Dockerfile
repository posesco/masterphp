# Contenedor efimero para traer libreria con composer php
FROM composer:latest as librerias
RUN composer create-project laravel/laravel

# Contenedor final con solo librerias importadas
FROM php:7.4-fpm-alpine
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli
COPY --from=librerias /app/laravel/* /srv/www/api