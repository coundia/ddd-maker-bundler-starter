# Base image avec PHP 8.3 et FPM
FROM php:8.3-fpm

# Mise à jour et installation des dépendances système
RUN apt-get update && apt-get install -y --no-install-recommends \
    libicu-dev \
    libpq-dev \
    libzip-dev \
    unzip \
    git \
    && docker-php-ext-install intl pdo pdo_pgsql zip \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && rm -rf /var/lib/apt/lists/*

# Définition du dossier de travail
WORKDIR /var/www

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copie du projet dans le conteneur
COPY . .


# Définition de la commande de démarrage
CMD if [ -f "bin/console" ]; then \
        php bin/console cache:clear && \
        php bin/console doctrine:migrations:migrate --no-interaction; \
    fi && \
    php-fpm
