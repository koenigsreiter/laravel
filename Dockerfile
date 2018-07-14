FROM php:7.0-apache

COPY ./ /var/www/html/

RUN a2dissite 000-default.conf
COPY ./999-default.conf /etc/apache2/sites-available/
RUN a2ensite 999-default.conf

RUN service apache2 reload