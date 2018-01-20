#基础镜像
FROM daocloud.io/library/nginx:1.13.0


#修改配置。站点目录配置和php 请求。
ADD default.conf /etc/nginx/conf.d


#启动
CMD ["nginx", "-g", "daemon off;"]

