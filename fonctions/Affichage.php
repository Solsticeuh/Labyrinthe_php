<?php
    //Création de la page html avec les résultats qu'on a get depuis le début du code
    echo "<!DOCTYPE html>\n";		//On demande un saut de ligne avec \n, seulement avec " et pas '

        echo "<html lang=\"fr\"><head><meta charset=\"UTF-8\">\n";	//Avec " on est obligé d'échapper les " a afficher avec \
            echo "<title>Labyrinthe</title>\n";
        echo "</head>\n";

        echo "<body>\n";
    
        echo "<h5>Départ/Arrivée</h5>\n";
        echo "<ul>";
            echo "$depart, $fin";
        echo "</ul>";

        echo "<a href='index.php'>RESET</a>";
        echo "<p> </p>";
        echo "</body>\n";

    echo "</html>\n";
?>