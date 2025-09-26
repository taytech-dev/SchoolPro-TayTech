# PHP 8.2 with Apache
FROM php:8.2-apache

# Install mysqli and PDO MySQL extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache rewrite for URL routing
RUN a2enmod rewrite

# Set recommended PHP settings (optional)
RUN echo "memory_limit=512M\nupload_max_filesize=50M\npost_max_size=50M\nmax_execution_time=300" > /usr/local/etc/php/conf.d/custom.ini

# Copy app code to container
COPY . /var/www/html/

# Ensure permissions (optional)
RUN chown -R www-data:www-data /var/www/html

# Working directory
WORKDIR /var/www/html/

# Copy CA certificate for SSL
COPY ca.pem /var/www/html/ca.pem

# Expose port 10000 (Render maps automatically)
EXPOSE 10000

# Health check: optional, checks PHP runs and DB connects
HEALTHCHECK --interval=60s --timeout=5s --start-period=30s --retries=3 \
 CMD curl -f http://localhost/test_db.php || exit 1

# Start Apache
CMD ["apache2-foreground"]
