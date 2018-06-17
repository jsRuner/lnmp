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

#RUN sed -i -e 's/listen = 127.0.0.1:9000/listen = 9000/' /usr/local/etc/php-fpm.d/www.conf

ADD www.conf /usr/local/etc/php-fpm.d/www.conf




