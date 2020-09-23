# Contenedor efimero para traer libreria con composer php
FROM composer:latest as librerias
RUN composer create-project --prefer-dist laravel/laravel blog "5.8.*"  
# Contenedor final con solo librerias importadas
FROM php:7.4-fpm-alpine
WORKDIR /srv/www/api/
RUN docker-php-ext-install bcmath mysqli pdo pdo_mysql && docker-php-ext-enable mysqli
COPY --from=librerias /app /tmp
COPY copiador.sh /tmp
RUN sh /tmp/copiador.sh
CMD ["php-fpm"]