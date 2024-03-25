FROM php:8.2-apache

# Install MySQL Server in a Non-Interactive mode. Default root password will be "root"
RUN echo "mysql-server mysql-server/root_password password root" | debconf-set-selections
RUN echo "mysql-server mysql-server/root_password_again password root" | debconf-set-selections
RUN apt-get update && apt-get install -y mysql-server

# Install mysqli extension
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli

# Install other utilities
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Start MySQL service
RUN service mysql start
