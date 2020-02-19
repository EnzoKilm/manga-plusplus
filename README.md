# Campus Contest n°2
Deuxième session de Campus Contest au sein de Campus Academy.

## Membres
Le projet est composé de 5 personnes :

NOM  | Prénom
------------- | -------------
AMELINE  | Matthias
BARBEREAU  | Maxime
BEAUCHAMP  | Enzo
BELLEIL  | Mathieu
BELNOU  | Kylian

# Énoncé
La consigne de l'exercice est disponible dans le dossier "docs-pdf" et s'intitule "Campus Contest 2 - B1-Info - Angers".

## Installation

Le dossier du site est le dossier nommé "manga++".
Pour pouvoir y accéder vous devez créer un projet laravel voir le lien suivant : (https://laravel.com/docs/6.x#installing-laravel).

Une fois ce projet crée, vous devez simplement mettre le contenu du dossier "manga++" dans le dossier du projet laravel que vous venez de créer.

Le fichier "config/services.php" n'est pas présent dans le dossier "manga++" du repository car il contient une clé secrète pour accéder à l'API qui gère l'envoi de mails automatique.
Pour utiliser votre API d'envoi de mails vous devez remplacer les champs "domain" et "secret" du fichier généré automatiquement par laravel.

Le fichier ".env" n'est pas non plus présent dans ce même dossier car il contient les accès à la base de données du site.
Pour pouvoir associer votre base de données et votre API d'envoi de mails vous devez remplacer les champs concernés par vos informations.
De plus, veuillez ajouter une ligne à la fin du fichier ".env" en écrivant ceci :
```
ADMIN_ID = X
```
Remplacez bien entendu le "X" par l'ID de l'utilisateur à qui vous souhaitez accorder les accès au panel d'administration.

# Dépendances

* [PHP 7.2.18](https://www.php.net/releases/7_2_18.php)
* [Apache 2.4.39](https://httpd.apache.org/docs/2.4/)
* [MySQL 5.7.26](https://dev.mysql.com/doc/relnotes/mysql/5.7/en/news-5-7-26.html)
* [phpMyAdmin 4.8.5](https://www.phpmyadmin.net/files/4.8.5/)

Pour le bon fonctionnement du site, vous devez utiliser les versions des dépendances précédemment mentionnées.
