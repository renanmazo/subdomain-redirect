FROM php:7.4-apache

RUN a2dissite 000-default

RUN a2enmod rewrite

COPY ./app/ /var/www/html/