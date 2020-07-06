FROM php:7.2-apache
RUN docker-php-ext-install bcmath
COPY php.ini /usr/local/etc/php/