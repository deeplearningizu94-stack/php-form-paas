# Utilise l'image officielle PHP avec Apache
FROM php:8.2-apache

# Copie tout le code de ton formulaire dans le serveur web
COPY . /var/www/html/

# Expose le port que Render utilise automatiquement
EXPOSE 10000
