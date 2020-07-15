FROM php:7.2-apache
RUN apt-get update && apt-get install -y zip unzip
COPY --from=composer /usr/bin/composer /usr/bin/composer
COPY php.ini-development /usr/local/etc/php/
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"