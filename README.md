# Projet 360° Dev

# Installation

Récupérer le projet :

```bash
$ git clone https://github.com/Oipnet/360-dev.git && cd 360-dev
```
Installer les dépendances : 

```bash
$ composer install -o
```

Paramétrer le fichier .env (à adapter  suivant votre environement) :

```dotenv
...
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=360dev
DB_USERNAME=root
DB_PASSWORD=
...

```

Mettre à jour sa base de données : 

```bash
$ php artisan migrate
```

Préremplir sa base de données :

```bash
$ php artisan db:seed ou php artisan migrate:refresh --seed
```

Installer et compiler les assets : 

```bash
$ npm i && npm run dev
```

Démarrer le serveur local

```bash
$ php artisan serve
```

Vous pouvez accéder à l'application à l'adresse suivant : http://localhost:8000/

Diagramme UML du projet : http://www.laravelsd.com/share/smezUK (pas encore définitif)

## Docker

Pour lancer la construction de l'image

```bash

$ docker-compose build 
$ docker-compose up

# Dans un autre terminal 

$ docker-compose run web /bin/bash
$ chmod +x docker.sh 
$ ./docker.sh 
$ php artisan serve

```

Lancement après essai

```bash
$ docker-compose build 
$ docker-compose up

# S'assurer que les process sont ok dans une autre fenetre
$ docker ps

```
Aller sur localhost:3001 de votre ordi personnel

Pour avoir l'application ok il faut effectuer les migrations soit dans un nouveau terminal

```bash

$ sudo docker exec -it 360dev_web_1 bash
$ php artisan migrate
```

## Contribuer

Pour contribuer il faut respecter les normes de commit et de convensions de codage décris dans le 
CONTRIBUTING.md.
