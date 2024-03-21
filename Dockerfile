# Use uma imagem PHP base
FROM php:8.2-fpm

# Instale dependências
RUN apt-get update && apt-get install -y \
    curl \
    zip \
    unzip \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql \
    && rm -rf /var/lib/apt/lists/*

# Instale a extensão pdo_pgsql
RUN docker-php-ext-install pdo_pgsql
