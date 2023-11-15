# Changelog

## Ajout

1. Création d'une structure de projet de base :

    Créez un répertoire pour votre projet.
    Organisez-le avec des sous-dossiers tels que src, public, et éventuellement vendor.

2. Création d'un contrôleur simple :

    Dans src/Application/Controllers/HelloController.php, créez une classe HelloController avec une méthode sayHello renvoyant "Hello, World!".

3. Mise en place d'un autoloader manuel :

    Créez un fichier autoloader.php à la racine de votre projet.
    Utilisez spl_autoload_register pour enregistrer une fonction d'autoloading.
    La fonction d'autoloading charge les fichiers de classe en remplaçant les \ par / et en ajoutant le chemin vers le dossier src.

4. Utilisation du contrôleur dans l'application :

    Dans public/index.php, incluez le fichier d'autoloader et utilisez la classe HelloController pour afficher "Hello, World!".

5. Exécution de l'application :

    Accédez à public/index.php depuis votre navigateur pour voir le résultat.

6. Mise en place d'un système de gestion de namespace :

    Création de dossiers avec des namespaces.
    Organisation des fichiers avec des namespaces.
    Adaptation de l'autoloader.
    Utilisation des classes avec namespaces.

7. Mise en place d'un système de logger simple :

    Création de la classe Logger.
    Intégration du Logger dans l'autoloader.
    Utilisation du Logger dans votre application.
    Capture des erreurs avec le Logger.