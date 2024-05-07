# Utilisez l'image officielle de PHP avec la version FPM
FROM php:8.2-fpm

# Installer les extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
        libzip-dev \
        zip \
        unzip \
    && docker-php-ext-install \
        pdo pdo_mysql zip \
    && apt-get clean

# Définir le répertoire de travail dans le conteneur
WORKDIR /var/www/symfony
