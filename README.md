![separe](https://raw.githubusercontent.com/studoo-app/.github/main/profile/studoo-banner-logo.png)
# Trip Expenses API
[![Version](https://img.shields.io/badge/Version-2.0.0-blue)]()

## Description

Ce projet propose une API RESTful pour la gestion des dépenses de voyage pour des utilisateurs authentifiés.

Ce projet sert d'introduction au framework ApiPlatform en proposant une couverture des fonctionnalités de base.

Le projet est livré dans un environnement Docker pour faciliter le déploiement et le développement.

## Prérequis

- Docker
- Docker Compose

## Installation

>[!WARNING] Attention !
> Les commandes suivantes sont à exécuter dans le répertoire du projet.
> Le service est livré avec 2 containers, un sous apache2 et l'autre sous franken.
> Penser a commenter le service non utilisé dans le fichier docker-compose.yml
> Penser à bien renseigner le nom du container dans les commandes ci-dessous

- `docker-compose up -d`
- `docker-compose exec api-<franken|apache2> cp .env.example .env`
- `docker-compose exec api-<franken|apache2> composer install`
- `docker-compose exec api-<franken|apache2> symfony console d:d:c`
- `docker-compose exec api-<franken|apache2> symfony console d:m:m`
- `docker-compose exec api-<franken|apache2> symfony console d:f:l`

## Accès

- [Application](http://localhost:8002/api)

