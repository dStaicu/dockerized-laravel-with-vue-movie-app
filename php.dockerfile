FROM php:7.4-fpm-alpine
RUN apk upgrade --no-cache
RUN apk add --no-cache icu-libs libldap libsasl imagemagick-libs libmemcached-libs libzip
ADD ./php/www.conf /usr/local/etc/php-fpm.d/www.conf

RUN addgroup -g 1000 laravel && adduser -G laravel -g laravel -s /bin/sh -D laravel

RUN mkdir -p /var/www/html

RUN chown laravel:laravel /var/www/html

WORKDIR /var/www/html
COPY ./src /var/www/html

RUN docker-php-ext-install pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install

RUN php artisan key:generate
RUN php artisan config:clear
RUN php artisan config:cache

RUN php artisan migrate
RUN php artisan db:seed