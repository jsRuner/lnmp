FROM mysql:latest


RUN echo "Asia/shanghai" > /etc/timezone;

RUN rm -rf /etc/localtime;
RUN cp /usr/share/zoneinfo/Asia/Shanghai /etc/localtime

ADD ./mysql.conf.d/ /etc/mysql/mysql.conf.d



