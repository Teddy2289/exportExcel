
Importation de fichiers Excel avec Symfony et PhpSpreadsheet

 -Mise en place de l'importation de fichiers Excel avec Symfony en utilisant la bibliothèque PhpSpreadsheet (https://phpspreadsheet.readthedocs.io).

Lorsque nous importons un fichier depuis l'écran d'accueil, nous effectuons une vérification basée sur le numéro de fiche, car chaque numéro de fiche doit être unique selon la logique suivie. Ensuite, nous vérifions si le numéro de fiche est vide ou nul, et s'il existe déjà, nous le ignorons pour éviter de l'insérer à nouveau dans la base de données

Prérequis :

-PHP 8.0 | 8.2

-Composer installé sur votre machine

-Symfony 7

-Base de données MySQL est on cree un base vide nome "excelDB" et ensuite on import "clienttest.sql" avec le dump de la base dans le répertoire

-Bootstrap 5

 NB:
 -Nous avons spécifiquement utilisé des CDN pour les styles et les scripts afin de ne pas surcharger l'application avec des packages.

Installation :

-git clone https://github.com/Teddy2289/exportExcel.git
-cd \exportExcel

    -composer install
    
    -php -S localhost:8000 -t public

Dans l'interface:

  -un bouton d'ajout

  -un bouton d'importation Excel avec un modal

  -liste des données avec filtre par date et filtre par colonne

  -Avec seulement 6 colonnes affichées dans la liste, les autres informations sont disponibles dans les détails.

  -Nous affichons seulement 10 éléments dans la table.
