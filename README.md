Wall Project
============

# Installation
* Cloner le projet  
`$ git clone git@github.com:Zagonine/Wall-Project.git`
* Aller dans le projet  
`$ cd Wall-Project/`
* Installer les dépendances : `app/config/parameters.yml`   
`$ composer install`
* Si composer n'a pas proposé de renseigner les informations de connection à la base de données, alors modifier ce fichier :  
`app/config/parameters.yml`
* Installer les assets  
`$ app/console assets:install && app/console assetic:dump`
* Créer la base de données  
`$ app/console doctrine:database:create`
* Créer la structure  
`$ app/console doctrine:schema:create`
* Charger les fixtures  
`$ app/console doctrine:fixtures:load`
* Lancer le serveur   
`$ app/console server:run`

* Aller à l'url affichée sur la ligne de commande (ex: http://127.0.0.1:8000)

### Auteur 
[Enzo Gain](https://github.com/Zagonine)
