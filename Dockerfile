
FROM php:8.2-apache

# Instalar extensión para PostgreSQL
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Copiar el código al contenedor
COPY . /var/www/html/

# Habilitar mod_rewrite (si tu app lo necesita)
RUN a2enmod rewrite

# Crear script de arranque para adaptar Apache al $PORT de Render
RUN mkdir -p /usr/local/bin
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Definir directorio de trabajo
WORKDIR /var/www/html

# Render establecerá $PORT, no es necesario EXPOSE, pero no molesta si lo dejas
EXPOSE 80

# Usar nuestro entrypoint que ajusta el puerto y luego lanza apache
ENTRYPOINT ["/usr/local/bin/docker-entrypoint.sh"]
CMD ["apache2-foreground"]
