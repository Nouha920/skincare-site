# 🌸 SKINCARE-SITE

Application web de gestion de produits de soins de la peau développée avec Laravel et MySQL.

![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=flat&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=flat&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=flat&logo=mysql)
![Docker](https://img.shields.io/badge/Docker-2496ED?style=flat&logo=docker)

## 📋 Table des matières

- [À propos](#à-propos)
- [Fonctionnalités](#fonctionnalités)
- [Technologies utilisées](#technologies-utilisées)
- [Prérequis](#prérequis)
- [Installation](#installation)
- [Utilisation](#utilisation)
- [Structure du projet](#structure-du-projet)
- [Configuration](#configuration)
- [Commandes utiles](#commandes-utiles)
- [Contribuer](#contribuer)
- [Licence](#licence)

## 🎯 À propos

SKINCARE-SITE est une plateforme web complète permettant de gérer et consulter des produits de soins de la peau. L'application offre une interface intuitive pour explorer différents produits avec leurs caractéristiques, ingrédients et recommandations d'utilisation.

## ✨ Fonctionnalités

- ✅ Gestion complète des produits (CRUD)
- ✅ Système d'authentification sécurisé
- ✅ Catégorisation des produits par type de peau
- ✅ Recherche et filtres avancés
- ✅ Interface responsive et moderne
- ✅ Gestion des ingrédients et compositions
- ✅ Système de recommandations personnalisées
- ✅ Panel d'administration complet

## 🛠 Technologies utilisées

### Backend
- **Laravel 10.x** - Framework PHP moderne et élégant
- **PHP 8.2** - Langage de programmation serveur
- **MySQL 8.0** - Système de gestion de base de données
- **Blade** - Moteur de templates Laravel

### Infrastructure
- **Docker** - Conteneurisation de l'application
- **Docker Compose** - Orchestration des conteneurs
- **Nginx** - Serveur web haute performance
- **PHP-FPM** - Gestionnaire de processus PHP

## 📦 Prérequis

Avant de commencer, assurez-vous d'avoir installé :

- [Docker](https://docs.docker.com/get-docker/) >= 20.10
- [Docker Compose](https://docs.docker.com/compose/install/) >= 2.0
- [Git](https://git-scm.com/downloads)

## 🚀 Installation

### 1. Cloner le projet

```bash
git clone https://github.com/Nouha920/skincare-site.git
cd skincare-site
```

### 2. Configuration de l'environnement

```bash
# Copier le fichier d'environnement
cp backend/.env.example backend/.env
```

Modifiez `backend/.env` si nécessaire :

```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=skincare_db
DB_USERNAME=skincare_user
DB_PASSWORD=user_password
```

### 3. Lancer Docker

```bash
# Construire et démarrer les conteneurs
docker-compose up -d --build

# Vérifier que les conteneurs sont actifs
docker-compose ps
```

Vous devriez voir :
```
NAME                  STATUS    PORTS
skincare_backend      Up        9000/tcp
skincare_mysql        Up        0.0.0.0:3306->3306/tcp
skincare_nginx        Up        0.0.0.0:8000->80/tcp
```

### 4. Configuration de Laravel

```bash
# Entrer dans le conteneur backend
docker-compose exec backend bash

# Générer la clé d'application
php artisan key:generate

# Créer le lien symbolique pour le storage
php artisan storage:link

# Exécuter les migrations
php artisan migrate

# (Optionnel) Lancer les seeders pour des données de test
php artisan db:seed

# Quitter le conteneur
exit
```

### 5. Installation des dépendances frontend (si nécessaire)

```bash
docker-compose exec backend bash
npm install
npm run build
exit
```

## 💻 Utilisation

L'application est maintenant accessible à :

🌐 **http://localhost:8000**

### Accès administrateur (si seeders exécutés)

- **Email** : admin@skincare.com
- **Mot de passe** : password

## 📂 Structure du projet

```
SKINCARE-SITE/
├── backend/                    # Application Laravel
│   ├── app/
│   │   ├── Http/
│   │   │   ├── Controllers/   # Contrôleurs
│   │   │   └── Middleware/    # Middlewares
│   │   └── Models/            # Modèles Eloquent
│   ├── config/                # Configuration
│   ├── database/
│   │   ├── migrations/        # Migrations de base de données
│   │   └── seeders/           # Seeders
│   ├── public/                # Point d'entrée public
│   ├── resources/
│   │   ├── css/              # Styles CSS
│   │   ├── js/               # Scripts JavaScript
│   │   └── views/            # Templates Blade
│   ├── routes/
│   │   ├── web.php           # Routes web
│   │   └── api.php           # Routes API (si utilisées)
│   ├── storage/              # Fichiers générés
│   ├── .env                  # Configuration environnement
│   └── Dockerfile            # Configuration Docker backend
├── nginx/
│   └── conf.d/
│       └── default.conf      # Configuration Nginx
├── docker-compose.yml        # Orchestration Docker
├── .gitignore
└── README.md
```

## ⚙️ Configuration

### Variables d'environnement importantes

Modifiez `backend/.env` selon vos besoins :

```env
APP_NAME="Skincare Site"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=skincare_db
DB_USERNAME=skincare_user
DB_PASSWORD=user_password
```

### Modifier les ports

Pour changer le port de l'application, modifiez dans `docker-compose.yml` :

```yaml
nginx:
  ports:
    - "8000:80"  # Changez 8000 par le port souhaité
```

## 🔧 Commandes utiles

### Docker

```bash
# Démarrer les conteneurs
docker-compose up -d

# Arrêter les conteneurs
docker-compose down

# Voir les logs en temps réel
docker-compose logs -f

# Voir les logs d'un service spécifique
docker-compose logs -f backend

# Redémarrer un service
docker-compose restart backend

# Reconstruire les images
docker-compose up -d --build
```

### Laravel (dans le conteneur)

```bash
# Entrer dans le conteneur
docker-compose exec backend bash

# Créer un contrôleur
php artisan make:controller NomController

# Créer un modèle avec migration
php artisan make:model NomModele -m

# Créer une migration
php artisan make:migration create_table_name

# Exécuter les migrations
php artisan migrate

# Rollback de la dernière migration
php artisan migrate:rollback

# Nettoyer le cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear
php artisan route:clear

# Lister toutes les routes
php artisan route:list
```

### Base de données

```bash
# Accéder à MySQL
docker-compose exec mysql mysql -u skincare_user -p skincare_db

# Exporter la base de données
docker-compose exec mysql mysqldump -u skincare_user -p skincare_db > backup.sql

# Importer une base de données
docker-compose exec -T mysql mysql -u skincare_user -p skincare_db < backup.sql
```

## 🐛 Dépannage

### Problème de permissions

```bash
docker-compose exec backend bash
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache
```

### Les migrations ne fonctionnent pas

```bash
# Vérifier la connexion à la base de données
docker-compose exec backend php artisan tinker
>>> DB::connection()->getPdo();
```

### Le site ne charge pas

```bash
# Vérifier que tous les conteneurs sont actifs
docker-compose ps

# Vérifier les logs
docker-compose logs nginx
docker-compose logs backend
```

## 🤝 Contribuer

Les contributions sont les bienvenues ! Voici comment participer :

1. Forkez le projet
2. Créez votre branche de fonctionnalité (`git checkout -b feature/AmazingFeature`)
3. Committez vos changements (`git commit -m 'Add some AmazingFeature'`)
4. Pushez vers la branche (`git push origin feature/AmazingFeature`)
5. Ouvrez une Pull Request

### Standards de code

- Suivez les standards PSR-12 pour PHP
- Utilisez des noms de variables descriptifs
- Commentez le code complexe
- Écrivez des tests pour les nouvelles fonctionnalités

## 📝 Licence

Ce projet est sous licence MIT. Voir le fichier `LICENSE` pour plus de détails.

## 👥 Auteurs

- **Nouha Belwaer** - *Développeur principal* - [Nouha920](https://github.com/Nouha920)

## 📞 Support

Pour toute question ou problème :

- 📧 Email : nouhabelwaer82@gmail.com
- 🐛 Issues : [GitHub Issues](https://github.com/Nouha920/skincare-site/issues)

## 🙏 Remerciements

- Laravel Framework
- Docker Community
- Tous les contributeurs

---

⭐ Si ce projet vous a aidé, n'hésitez pas à lui donner une étoile sur GitHub !
