# FROM php:7.4-cli 
# COPY . /usr/src/myapp
# WORKDIR /usr/src/myapp
# CMD ["php","./Car.php"]
FROM php:7.2-apache
COPY . /var/www/html/