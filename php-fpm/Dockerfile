FROM php:7.0-fpm

RUN echo "Asia/shanghai" > /etc/timezone;

RUN rm -rf /etc/localtime;
RUN cp /usr/share/zoneinfo/Asia/Shanghai /etc/localtime

ADD php.ini /usr/local/etc/php

RUN docker-php-ext-install mysqli 

#RUN sed -i -e 's/listen = 127.0.0.1:9000/listen = 9000/' /usr/local/etc/php-fpm.d/www.conf

ADD www.conf /usr/local/etc/php-fpm.d/www.conf

