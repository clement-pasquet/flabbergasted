# Projet Flabbergasted

<img src="./public/assets/images/screenshot_accueil.jpg" width="640px" height="360px">

## But :
Créer un site web fonctionnel **de commerce**.

Dans notre cas, nous sommes partis sur un site web de film/série à l'unité.

Le système de vente est basé sur celui de YouTube, il n'existe pas de panier
et il n'est possible de n'acheter les films que un-par-un.

L'utilisateur pourra "liker" un film pour augmenter ses chances d'apparaître
avec la barre de recherche, et quand l'utilisateur aura acheté un film,
il pourra le retrouver dans la page "vosFilms" ( yourMovies ).

## Consignes :
Vous disposez d'une VM avec apache2, php 8.2,  mariaDB 10.1

La VM dispose de trois comptes root, user et sql, root et user disposent d'un accès en ssh et sql uniquement en sftp

Le SGBD dispose du compte user avec comme mot de passe pass et du compte sql avec comme mot de passe sql

Sur l'OS root et user ont le même mot de passe (ip, password) : 172.26.82.53
e3qnBIJF

## Utiliser le site web

En premier il faut se créer un compte cliquant sur "connexion" puis "Créer compte" :

<img src="./public/assets/images/screenshot_accountcreate.jpg" width="640px" height="360px">

( n'oublie pas de vous connecter après avoir crée votre compte )

Une fois sur l'accueil, vous pouvez cliquer sur n'importe quel film pour arriver sur la vue filmFocused.

Elle vous permet d'acheter ou de "liker" n'importe quel film.

<img src="./public/assets/images/screenshot_filmfocused.jpg" width="640px" height="360px">

Si vous décidez de cliquer sur acheter

<img src="./public/assets/images/screenshot_pagepaiement.jpg" width="640px" height="360px">

( Le formulaire n'est pas utilisable pour l'instant, 
il ne récupère donc aucune donnée. 
Cliquer sur le bouton acheter rajoute instantanément le film à l'utilisateur sans conséquence.)

Vos films sont accessibles dans la rubrique "Vos Films" :
<img src="./public/assets/images/screenshot_yourmovies.jpg" width="640px" height="360px">



## Structure du code

La structure est classique des projets codeigniter, et est une structure sous forme
Modèles-Vues-Controleurs (MVC) :

- app
    - Config
        - Database.php
        - Routes.php
    - Controllers
        - Achat.php
        - Film.php
        - Likes.php
        - Pages.php
        - Utilisateur.php
    - Database
        - import
            - film.csv
        - mainDatabase_create.sql
        - mainDatabaseDump.sql
        - mainDatabase_populate.sql
        - stored_procedure.sql
    - Models
        - achatModel.php
        - filmModel.php
        - LikesModel.php
        - UserModel.php
    - Views
        - pages
            - yourMovies.php
- public
    - assets
        - css
            - yourMovies.css
        - images
            - logo1.png
- README.md


### "Config" contient les paramètres du projet.

- **Database.php** = gère la connexion à la BD.
- **Routes.php** = rajoute les "Routes" nécessaire aux fonctionnement de notre projet.

### "Controllers" contient les controleurs, un par table.
- **Achat.php**
- **Film.php**
- **Likes.php**
- **Pages.php** = Sert à accéder à toutes les vues contenues dans le dossier Pages par leur nom.
- **Utilisateur.php**

### "Database" gère la création et le remplissage de la BD.

- **import**
    - **film.csv** = Fichier contenant les films et séries utilisées pour remplir la bd
- **mainDatabase_create.sql** = Fichier de création des tables ( déprécié, il faut utiliser le dump ) 
- **mainDatabaseDump.sql** = Fichier de sauvegarde complet de la BD. A utiliser.
- **mainDatabase_populate.sql** = Fichier d'insertion des lignes dans la bd.  ( déprécié, il faut utiliser le dump ) 
- **stored_procedure.sql** = Fichier d'insertion des procédures stockées dans la bd. ( déprécié, il faut utiliser le dump ) 

### "Models" gère les modèles, utilisés pour modifier les tables de la bd.
Un modèle par table.
- Models
    - **achatModel.php**
    - **filmModel.php**
    - **LikesModel.php**
    - **UserModel.php**
### "Views" contient toutes les vues.
- Views
    - pages = Les vues dans ce dossier sont accessible directement en faisant /nom_de_la_vue grâce au controleur page.
        - **yourMovies.php**

### Tous les fichiers "accessibles au public" sont dans "public"
- public
    - assets
        - css = Contient les css de toutes les vues
            - **yourMovies.css**
        - images = Contient les images de tout le projet
            - **logo1.png**



## Utiliser la base de données
### Créer la BD sur son PC et la remplir
La base de données est actuellement faite pour fonctionner sur le même PC que le PHP.

Pour faire cela il faut :
- Avoir MariaDB ( ou MySQL )
- Utiliser le "dump" pour la remplir


```bash
sudo mysql -u admin -ppassword 
``` 
( pour se connecter en tant que admin, si un mdp est demandé, donner "password", le root ne possède pas de password )


```shell
sudo mysql -u root -p mainDatabase < mainDatabaseDump.sql
``` 
( pour utiliser le "dump" pour remplir la BD. **ATTENTION**, il faut être dans le dossier app/Database )

### Créer un dump

Si l'on souhaite faire une "sauvegarde" des diverses modifications faites aux tables et à leurs éléments, ils faut faire un dump, une "sauvegarde" :

```shell
mysqldump -u admin -ppassword --databases mainDatabase --routines --result-file=mainDatabaseDump.sql
```
( **ATTENTION**, il faut être dans le dossier app/Database )

( Le dump inclue désormais les procédures stockées )

## Rajouter une page

Pour rajouter une page il suffit de rajouter un fichier "**nom_de_page.php**" dans 
- app
  - Views
    - pages
      - **nom_de_page.php**"

La page sera accessible en faisant ```localhost:8000/nom_de_page```.

Le css devra être mis dans
- public
  - assets
    - css
      - **nom_de_page.css**

**ATTENTION**, n'oubliez d'adapter le chemin à votre css en utilisant ```<?=CSS.'nom_de_page.css'?>```.

CSS est un chemin php prédéfini vers le dossier css.

De même, pour les images, il faut utiliser ```<?=IMG.'logo1.png'?>```.

Il permet d'utiliser les images du répertoire image.

## Mettre sur le serveur

Nous devons mettre le projet sur le serveur.

Pour ce faire, nous devons déjà nous y connecter en ssh :
```sshpass -p "e3qnBIJF" ssh root@172.26.82.53```

( **ATTENTION** il faut être dans le réseau de l'IUT )

### Etapes faites à l'initialisation

Le Projet sera accessible grâce à apache2.

En premier, lançons mariadb : ```sudo service mariadb start```

En deuxième, dumpons la base de données ( depuis le dossier app/Database ) : ```sudo mysql -u root -p mainDatabase < mainDatabaseDump.sql```

En troisième, modifions le port par défaut pour 8080 : ```nano /etc/apache2/ports.conf```

Redémarrons apache2 : ```sudo service apache2 restart```

Rajoutons une configuration de VirtualHost pour apache2 : ```sudo nano /etc/apache2/sites-available/flabbergasted.conf```
```
<VirtualHost *:8080>
    ServerAdmin webmaster@example.com
    DocumentRoot /var/www/html/eq_01_02_bernier-justine_malki-basma_pasquet-clement_troeira-paul-adrien/public
    ServerName flabbergasted.local

    <Directory /var/www/html/eq_01_02_bernier-justine_malki-basma_pasquet-clement_troeira-paul-adrien/public>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

Utilisation d'un lien symbolique pour activer le site web : ```sudo ln -s /etc/apache2/sites-available/flabbergasted.conf /etc/apache2/sites-enabled/```

Redémarrons apache2 : ```sudo service apache2 restart```

### Mettre le projet sur le serveur

Premièrement, clonons le projet :

```git clone https://gitlab.univ-nantes.fr/pub/but/but2/sae3.real.01_developpement_d_une_application/groupe01/eq_01_02_bernier-justine_malki-basma_pasquet-clement_troeira-paul-adrien.git```

Mettons à jour composer : ```composer update```

Déplacons les fichiers du projet dans /var/www/html : ```cp -r eq_01_02_bernier-justine_malki-basma_pasquet-clement_troeira-paul-adrien/ /var/www/html/```

#### Modification des constantes :

Il faut adapter les constantes utilisées, pour pouvoir utiliser CSS ou IMG comme ici : ```<?=CSS.'accueil.css'?>``` 

Dans app/Config/App.php modifier : ```public string $baseURL = 'http://localhost:8080/';``` en ```public string $baseURL = 'http://172.26.82.53:8080/';```

Dans app/Config/Constants.php modifier : ```define('BASE_URL_ASSET', 'http://localhost:8080/assets/');``` en ```define('BASE_URL_ASSET', 'http://172.26.82.53:8080/assets/');```