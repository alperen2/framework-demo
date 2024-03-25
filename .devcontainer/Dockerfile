# Use Alpine Linux as base image
FROM alpine:latest

# Install PHP and MySQL
RUN apk add --no-cache php php-mysqli mysql mysql-client

# Set up MySQL in a Non-Interactive mode with default root password as 'root'
RUN /etc/init.d/mysql setup
RUN service mysql start && \
    mysql -u root -e "SET PASSWORD FOR 'root'@'localhost' = PASSWORD('root');" && \
    mysql -u root -e "FLUSH PRIVILEGES;"

# Expose port 80 for web access
EXPOSE 80

# Start MySQL and PHP services
CMD ["sh", "-c", "service mysql start; php-fpm;"]
