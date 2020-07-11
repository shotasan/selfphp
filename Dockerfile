FROM php:7.2-apache
RUN docker-php-ext-install bcmath
COPY php.ini-development /usr/local/etc/php/
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"