# Contenedor efimero para traer libreria con composer php
FROM composer:latest as librerias
RUN composer require spipu/html2pdf
RUN composer require stefangabos/zebra_pagination
# Contenedor final con solo librerias importadas
FROM php:7.4-fpm-alpine
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli
COPY copiador.sh /tmp
COPY --from=librerias /app /tmp
CMD sh /tmp/copiador.sh
CMD ["php-fpm"]