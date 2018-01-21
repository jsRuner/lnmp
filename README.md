# lnmp
lnmp的容器编排。极简、实用。

实现对项目多个服务的编排：nginx、mysql、php-fpm。一键启动和销毁。支持配置的修改和日志的查看。方便开发和测试。


目前版本只合适作为日常开发和测试环境下的配置。生产环境下不宜,需要修改一些配置。

## 版本的选择
- centos latest
- nginx  latest
- mysql  latest
- php  latest

## 相关命令
这些命令是我在编写过程中经常使用到的。

- 拷贝nginx的配置文件到 宿主电脑桌面。 347390c2dac2  是容器的id


	```
$ docker cp 347390c2dac2:/etc/nginx/nginx.conf /Users/ft521/Desktop

	```
- 拷贝php-fpm的配置文件到 宿主电脑桌面。 c85dbd08758e  是容器的id

	```
$ docker cp c85dbd08758e:/usr/local/etc/php-fpm.d/www.conf /Users/ft521/Desktop
```
- php 安装扩展。目前只安装了一个mysqli的扩展。其他扩展参考下面的地址。后续本版本也不断丰富。

 `https://store.docker.com/images/php`

- 拷贝mysql的配置文件到宿主电脑桌面。3282f1a867db 是容器id
```
docker cp 3282f1a867db:/etc/mysql/mysql.conf.d/ /Users/ft521/Desktop
```
- 销毁创建的容器

	```
	docker-compose stop
	docker-compose rm
	```
- 重新编译服务镜像

	```
	docker-compose build --force-rm --no-cache
	
	```
- 重新启动服务

	```
	docker-compose up -d --force-recreate
	
	```
- 进入容器内.例如进入 34aa的容器内

	```
docker exec 34aa  -it /bin/bash
```
- 查看某个容器的日志。查看34aa的容器运行的日志。

	尤其容器启动失败的时候，很需要这个。

	```
	docker logs 34aa
	```

## 数据库
- 测试数据库需要执行db.sql的语句。否则没有数据。
- 外部工具连接容器数据库的配置是 127.0.0.1:3307    username=root  password=123456


### [详细使用方法](https://www.jianshu.com/p/53183a475c1d)