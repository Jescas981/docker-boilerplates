FROM php:fpm

RUN apt-get update && apt install -y git ssh npm nodejs

RUN pecl install xdebug && docker-php-ext-enable xdebug

COPY ./config/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN set -eux; \
    docker-php-ext-enable opcache; \
    { \
    echo 'opcache.memory_consumption=128;' \
    echo 'opcache.interned_strings_buffer=8;' \
    echo 'opcache.max_accelerated_files=4000;' \
    echo 'opcache.revalidate_freq=2;' \
    echo 'opcache.fast_shutdown=2'; \
    } >> /usr/local/etc/php/conf.d/opcache-recommended.ini