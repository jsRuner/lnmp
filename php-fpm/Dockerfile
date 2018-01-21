FROM php:7.0-fpm

ADD php.ini /usr/local/etc/php

RUN docker-php-ext-install mysqli 


#RUN sed -i -e 's/listen = 127.0.0.1:9000/listen = 9000/' /usr/local/etc/php-fpm.d/www.conf

ADD www.conf /usr/local/etc/php-fpm.d/www.conf

#启动php
CMD ["php-fpm"]
