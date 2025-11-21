<?php
	$bdd_fichier = 'labyrinthe.db';
    
    $sqlite = new SQLite3($bdd_fichier);

    include('depart.php');

    include('fin.php');

    
    include('Rechercher_couloirs.php');

    //Création de la page html avec les résultats qu'on a get depuis le début du code
    echo "<!DOCTYPE html>\n";		//On demande un saut de ligne avec \n, seulement avec " et pas '
        echo "<html lang=\"fr\"><head><meta charset=\"UTF-8\">\n";	//Avec " on est obligé d'échapper les " a afficher avec \
        echo "<title>Liste des couloirs</title>\n";
    echo "</head>\n";
    echo "<body>\n";
            echo "<h1>Départ/Arrivée</h1>\n";
            echo "<ul>";
            echo "$depart, $fin";
    echo "</ul>";
    echo "<a href='test.php?position=13'>RESET</a>";
    echo "</body>\n";
    echo "</html>\n";

?>