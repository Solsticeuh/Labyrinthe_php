<?php

    //ouvre la base de données.
	$bdd_fichier = 'labyrinthe.db';
    $sqlite = new SQLite3($bdd_fichier);

    //ouvre une session pour l'état des grilles, la position précédente.
    session_start();


    //Récupère le début et la fin du labyrinthe
    include('fonctions\depart.php');
    include('fonctions\fin.php');

    //Récupère et gère les grilles et les clefs.
    include('fonctions\grille.php');
    include('fonctions\clef.php');

    //Récupère et gère les couloirs et les déplacements dans le labyrinthe.
    include('fonctions\Rechercher_couloirs.php');
    include('fonctions\Déplacement.php');

    //Fais un affichage simple sans interface graphique pour le moment.
    include ('fonctions\Affichage.php');

    // Initialise une session
    include('fonctions\Session_init.php');

?>