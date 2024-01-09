Vous disposez d'une VM avec apache2, php 8.2,  mariaDB 10.1 
La VM dispose de trois comptes root, user et sql, root et user disposent d'un accès en ssh et sql uniquement en sftp
Le SGBD dispose du compte user avec comme mot de passe pass et du compte sql avec comme mot de passe sql

Sur l'OS root et user ont le même mot de passe (ip, password) : 172.26.82.53
e3qnBIJF

## Utiliser la base de données
### Créer la BD sur son PC et la remplir
La base de données est actuellement faite pour fonctionner sur le même PC que le PHP.

Pour faire cela il faut :
- Avoir MariaDB ( ou MySQL )
- Créer une BD dessus
- Utiliser le "dump" pour la remplir


```bash
sudo mysql -u root -p
``` 
( pour se connecter en tant que root, si un mdp est demandé, appuyez sur entrée )

```sql
CREATE DATABASE mainDatabase;
```

( pour créer la base de données qu'on remplira )

```shell
sudo mysql -u root -p mainDatabase < mainDatabaseDump.sql
``` 
( pour utiliser le "dump" pour remplir la BD. **ATTENTION**, il faut être dans le dossier app/Database )

### Créer un dump

Si l'on souhaite faire une "sauvegarde" des diverses modifications faites aux tabels et à leurs éléments, ils faut faire un dump, une "sauvegarde" :

```shell
sudo mysqldump -u root -p mainDatabase > mainDatabaseDump.sql
```
( **ATTENTION**, il faut être dans le dossier app/Database )


# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

The user guide corresponding to the latest version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> **Warning**
> The end of life date for PHP 7.4 was November 28, 2022. If you are
> still using PHP 7.4, you should upgrade immediately. The end of life date
> for PHP 8.0 will be November 26, 2023.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
