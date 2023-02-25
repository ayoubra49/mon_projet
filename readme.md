# Mon projet

Ce projet est une application web permettant de gérer des utilisateurs.

## Installation

1. Clonez ce dépôt de code sur votre machine locale en utilisant la commande suivante : `git clone https://github.com/ayoubra49/mon_projet.git`

2. Installez les dépendances PHP en utilisant Composer : `composer install`

3. Configurez votre base de données dans le fichier `.env` en utilisant les informations suivantes :

`DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mon_projet
DB_USERNAME=root
DB_PASSWORD=`

4. Exécutez les migrations pour créer les tables de base de données : `php artisan migrate`

5. Lancez le serveur de développement : `php artisan serve`

6. Accédez à l'application en ouvrant votre navigateur et en visitant l'adresse suivante : `http://localhost:8000`.

## Utilisation

L'application vous permet de créer, afficher, modifier et supprimer des utilisateurs.

