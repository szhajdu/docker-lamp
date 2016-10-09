FROM php:5.6-apache

MAINTAINER Szabolcs Hajdu <sabee0418@gmail.com>


# install the PHP extensions we need.
RUN apt-get update && apt-get install -y nano libpng12-dev libjpeg-dev && rm -rf /var/lib/apt/lists/* \
	&& docker-php-ext-configure gd --with-png-dir=/usr --with-jpeg-dir=/usr \
	&& docker-php-ext-install gd

COPY config/php.ini /usr/local/etc/php/

# Configure apache.
RUN a2enmod rewrite
#RUN chown -R www-data:www-data /var/www

# Set up the apache environment variables.
#ENV APACHE_RUN_USER www-data
#ENV APACHE_RUN_GROUP www-data
#ENV APACHE_LOG_DIR /var/log/apache2
#ENV APACHE_LOCK_DIR /var/lock/apache2
#ENV APACHE_PID_FILE /var/run/apache2.pid

# Update the default apache site with the config we created.
ADD config/vhost.conf /etc/apache2/sites-enabled/000-default.conf

CMD ["apache2-foreground"]