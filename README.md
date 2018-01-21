# lnmp
lnmp的容器编排。极简、实用

版本的选择
centos latest
nginx  latest
mysql  latest
php  latest

拷贝nginx的配置文件到 宿主电脑桌面。 347390c2dac2  是容器的id
$ docker cp 347390c2dac2:/etc/nginx/nginx.conf /Users/ft521/Desktop

拷贝php-fpm的配置文件到 宿主电脑桌面。 c85dbd08758e  是容器的id
$ docker cp c85dbd08758e:/usr/local/etc/php-fpm.d/www.conf /Users/ft521/Desktop

php 安装扩展
https://store.docker.com/images/php

拷贝mysql的配置文件到宿主电脑桌面。3282f1a867db 是容器id
docker cp 3282f1a867db:/etc/mysql/mysql.conf.d/ /Users/ft521/Desktop

连接容器后执行db.sql的语句。
外部工具连接容器数据库的配置是 127.0.0.1:3307    username=root  password=123456


