# La Galerie Lumière - Documentation

## 1. Présentation du projet  
**La Galerie Lumière** est un site fictif dédié à une galerie d'art contemporain située à Paris. Le projet inclut :  
- Une interface utilisateur pour explorer les œuvres d'art.  
- Un panneau d'administration permettant de gérer les images affichées sur le site.  

## 2. Prérequis  
Avant de commencer, assurez-vous d'avoir les éléments suivants installés :  
- **PHP** : Version 8.4.5 ou supérieure  
- **Composer** : Version 2.8.8 ou supérieure  
- **MySQL** : Pour la base de données  

## 3. Installation  
1. Clonez le dépôt GitHub :  
    ```bash
    git clone https://github.com/amauury/galerie-lumiere.git
    cd galerie-lumiere
    ```  
2. Installez les dépendances PHP avec Composer :  
    ```bash
    composer install
    ```   

## 4. Configuration de la base de données  
1. Configurez les informations de connexion à la base de données dans le fichier `.env` :  
    ```env
    DB_CONNECTION=mysql  
    DB_HOST=127.0.0.1  
    DB_PORT=3306  
    DB_DATABASE=galerie_lumiere  
    DB_USERNAME=votre_utilisateur  
    DB_PASSWORD=votre_mot_de_passe  
    ```  
2. Créez la base de données et exécutez les migrations :  
    ```bash
    php artisan migrate
    ```  
3. Importez les données initiales dans la table `images` en executant la requete sql `images.sql` 

## 5. Création du compte administrateur  
1. Utilisez la commande suivante pour créer un utilisateur admin :  
    ```bash
    php artisan tinker
    ```  
2. Dans la console Tinker, exécutez :  
    ```php
    \App\Models\User::create([
         'name' => 'Admin',
         'email' => 'admin@example.com',
         'password' => bcrypt('motdepasse'),
         'is_admin' => true,
    ]);
    ```  

## 6. Lancement du projet  
1. Démarrez le serveur local Laravel :  
    ```bash
    php artisan serve
    ```  


## 7. Fonctionnalités supplémentaires  
- **Gestion des images** : Ajoutez, modifiez ou supprimez des images via le panneau admin.  
- **Acces au Dashboard** : via /dashboard