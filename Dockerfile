# Imagem PHP com Apache
FROM php:8.1-apache

# Instala extensões e dependências do sistema
RUN apt-get update && apt-get install -y \
    zip unzip curl libpng-dev libonig-dev libxml2-dev git \
    libzip-dev libjpeg-dev libfreetype6-dev libpq-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Ativa mod_rewrite para o Apache
RUN a2enmod rewrite

# Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Diretório de trabalho
WORKDIR /var/www/html

# Copia os arquivos do projeto para o contêiner
COPY . .

# Garantir permissões corretas para o Apache acessar os arquivos
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Configure Apache para apontar para o diretório public do Laravel
RUN echo '<VirtualHost *:80>\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html/public>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

# Habilita mod_rewrite no Apache para o Laravel funcionar corretamente
RUN a2enmod rewrite

# Instala dependências do Laravel
RUN composer install --no-dev --optimize-autoloader

# Copia .env e gera a chave de aplicação
RUN cp .env.example .env && php artisan key:generate

# Expondo porta 80 para o Apache
EXPOSE 80

# Comando para garantir a geração da chave sempre que o contêiner for iniciado
CMD ["sh", "-c", "php artisan key:generate && apache2-foreground"]