FROM php:7.4-apache
EXPOSE 80

# Installation globale
RUN apt update && apt upgrade -y
RUN apt install -y build-essential nano
RUN apt install -y git
RUN apt install -y nodejs npm

# Installation de Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer self-update --1