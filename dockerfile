FROM php:8.2-cli

# Instala dependências
RUN apt-get update && apt-get install -y \
    unzip curl git libzip-dev zip \
    && docker-php-ext-install zip

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define pasta de trabalho
WORKDIR /app

# Copia tudo
COPY . .

# Instala dependências PHP
RUN composer install

# Porta
EXPOSE 10000

# Start do Laravel
CMD php artisan serve --host=0.0.0.0 --port=10000
