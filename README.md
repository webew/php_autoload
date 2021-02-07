# Etape 1

On crée le fichier composer.json à la racine du projet.

# Etape 2

On lance dans le terminal la commande :

> composer dump-autoload

# Etape 3

On ajoute la ligne suivante dans index.php :

> require_once "vendor/autoload.php";

Et voilà !

# Explications

La fonction spl_autoload_register charge les classes dans la pile Php.

La gestion de l'autoload est possible grâce au fichier composer/autoload_real.php
 