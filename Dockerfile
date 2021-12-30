FROM php:7.3-apache
RUN apt-get update && apt-get install -y git 
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite
COPY new-vcs /var/www/html/
EXPOSE 80/tcp 
