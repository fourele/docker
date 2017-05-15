FROM ubuntu:16.04
MAINTAINER fourele <fourele@126.com>
ENV DEBIAN_FRONTEND noninteractive 
RUN sed -i 's/archive.ubuntu.com/cn.archive.ubuntu.com/g' /etc/apt/sources.list && \
    apt-get update -y \
    && apt-get install -yqq vim \
    curl \
    unzip \
    apache2 \
    mysql-client \
    mysql-server \
    php7.0-fpm \
    php7.0-mysql \
    libapache2-mod-php7.0 \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* \
    && rm -f /var/www/html/index.html
EXPOSE  80
