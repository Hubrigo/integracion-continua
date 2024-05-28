FROM php:7.4-apache

# Instalar extensiones de PHP necesarias
RUN docker-php-ext-install pdo pdo_mysql

# Instalar el cliente MySQL
RUN apt-get update && apt-get install -y default-mysql-client

# Copiar archivos de la aplicación al contenedor
COPY . /var/www/html/

EXPOSE 80
