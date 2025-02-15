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

- `docker-compose up -d`
- `docker-compose exec api cp .env.example .env`
- `docker-compose exec api composer install`
- `docker-compose exec api symfony console d:d:c`
- `docker-compose exec api symfony console d:m:m`
- `docker-compose exec api symfony console d:f:l`

## Accès

- [Application](http://localhost:8002/api)

