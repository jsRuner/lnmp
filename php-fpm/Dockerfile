FROM php:7.0-fpm

RUN echo "Asia/shanghai" > /etc/timezone;


RUN rm -rf /etc/localtime;
RUN cp /usr/share/zoneinfo/Asia/Shanghai /etc/localtime


RUN rm -rf /etc/apt/sources.list;
ADD sources.list /etc/apt





ADD php.ini /usr/local/etc/php

RUN docker-php-ext-install pdo_mysql


RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
    && docker-php-ext-install -j$(nproc) iconv mcrypt \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd
    
RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN apt-get install -y libmagickwand-6.q16-dev --no-install-recommends \
 && ln -s /usr/lib/x86_64-linux-gnu/ImageMagick-6.8.9/bin-Q16/MagickWand-config /usr/bin \
 && pecl install imagick \
 && echo "extension=imagick.so" > /usr/local/etc/php/conf.d/ext-imagick.ini


ADD www.conf /usr/local/etc/php-fpm.d/www.conf




