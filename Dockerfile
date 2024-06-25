FROM php:7.4-apache

# Instalar extensiones de PHP necesarias
RUN docker-php-ext-install pdo pdo_mysql

# Instalar el cliente MySQL
RUN apt-get update && apt-get install -y default-mysql-client

# Copiar archivos de configuración de Apache y aplicación al contenedor
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
COPY . /var/www/html/

# Establecer permisos correctos
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Habilitar sitio por defecto
RUN a2ensite 000-default

EXPOSE 80
