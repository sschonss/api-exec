FROM ubuntu:20.04

LABEL authors="sschonss"

LABEL description="Docker image containing all requirements for running a PHP application"

COPY . ./app

WORKDIR /app

RUN apt-get update && apt-get install -y

RUN apt-get install software-properties-common -y

RUN add-apt-repository ppa:ondrej/php

RUN apt update

RUN apt install php7.4 -y

RUN apt install openssl -y \
    php-bcmath -y \
    php-curl -y \
    php-json -y \
    php-mbstring -y \
    php-mysql -y \
    php-tokenizer -y \
    php-xml -y \
    php-zip -y

RUN apt-get install curl -y

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install


