# Imagem PHP com Apache
FROM php:8.1-apache

# Instala extensões e dependências do sistema
RUN apt-get update && apt-get install -y \
    zip unzip curl libpng-dev libonig-dev libxml2-dev git \
    libzip-dev libjpeg-dev libfreetype6-dev libpq-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Ativa mod_rewrite 
RUN a2enmod rewrite

# Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Diretório de trabalho
WORKDIR /var/www/html

# Copia os arquivos do projeto
COPY . .

# Instala dependências do Laravel
RUN composer install

# Copia .env e gera a chave
RUN cp .env.example .env && php artisan key:generate

# Expondo porta do Apache
EXPOSE 80
