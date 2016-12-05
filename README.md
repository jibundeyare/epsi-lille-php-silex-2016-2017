# Cours de php avec silex (2016-2017)

## Description

Ce repo contient le code écrit durant le cours de php avec silex à Epsi Lille, session 2016-2017.

## Pré-requis

Avant de pouvoir utiliser les scripts, vous devez installer composer et installer pré-requis (ce qui créera par la même occasion le fichier d'autoload).

Pour installer composer, référez vous à la documenation officielle : [Composer](https://getcomposer.org/)

Dès que vous avez installé composer, ouvrez un terminal puis rendez-vous dans le dossier `code` du projet avec la commande `cd`.

Puis tapez :

    cd epsi-lille-php-silex-2016-2017
    cd code
    php composer.phar install

## Utilisation

Tous les scripts fonctionnent avec un serveur web.

Vous pouvez démarrer un serveur web en ligne de commande avec php.

Ouvrez un terminal puis rendez-vous dans le dossier `web` du projet avec la commande `cd`.

Tapez :

    cd epsi-lille-php-silex-2016-2017
    cd code
    cd web
    php -S localhost:8000

Vous pourrez alors afficher les scripts dans votre navigateurs.

Par ouvrir la home page, tapez cette url dans votre navigateur : `http://localhost:8000/`
Pour ouvrir la page « hello world », tapez cette url : `http://localhost:8000/name/Foo Bar`

