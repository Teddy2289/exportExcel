
Importation de fichiers Excel avec Symfony et PhpSpreadsheet

 -Mise en place de l'importation de fichiers Excel avec Symfony en utilisant la bibliothèque PhpSpreadsheet (https://phpspreadsheet.readthedocs.io).

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
