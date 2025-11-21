<?php

	$bdd_fichier = 'labyrinthe.db';
    $sqlite = new SQLite3($bdd_fichier);

    include('fonctions\depart.php');
    include('fonctions\fin.php');

    include('fonctions\grille.php');
    include('fonctions\clef.php');

    include('fonctions\Rechercher_couloirs.php');
    include('fonctions\Déplacement.php');

    include ('fonctions\Affichage.php');

?>