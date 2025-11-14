<?php
	$bdd_fichier = 'labyrinthe.db';
    
    $sqlite = new SQLite3($bdd_fichier);

    //trouver/stocker le départ
    $requetedepart = 'SELECT couloir FROM couloirs WHERE type = "depart"';
    $depart = $sqlite->query($requetedepart);

    //trouver/stocker la fin
    $requetefin = 'SELECT couloir FROM couloirs WHERE type = "sortie"';
    $fin = $sqlite->query( $requetefin);

    //stocker position de départ
    $preparefin = $sqlite -> prepare($requetedepart);
    $position = $depart;

    // /!\ boucle while du jeu à décommenter quand nécessaire
    // while($position != $fin){
    //    $possibilités = 'SELECT couloirs1,couloir2 FROM passage WHERE couloirs1 = $position OR couloirs2 = $position';
    //}
    
    // trouver les possibilités de déplacement à partir de la position actuelle
    $requeteposs = 'SELECT couloirs1,couloir2 FROM passage WHERE couloirs1 = :position OR couloirs2 = :position';
    $sql = $sqlite -> prepare($requeteposs);
    $sql -> bindValue(':position', $position, SQLITE3_INTEGER);
    $poss = array();

        //crée un array avec les positions possible à partir de la position actuelle
    while($result = $returned_set->fetchArray()) {
        if($result!=$posoition){
            array_push($poss, $result);
        }
    }

    //Création de la page html avec les résultats qu'on a get depuis le début du code
    echo "<!DOCTYPE html>\n";		//On demande un saut de ligne avec \n, seulement avec " et pas '
	    echo "<html lang=\"fr\"><head><meta charset=\"UTF-8\">\n";	//Avec " on est obligé d'échapper les " a afficher avec \
	    echo "<title>Liste des couloirs</title>\n";
	echo "</head>\n";
    echo "<body>\n";
	    echo "<h1>Liste des couloirs</h1>\n";
	    echo "<ul>";
            echo''.$position.''.$fin.''.$poss;
        echo "</ul>";
	echo "</body>\n";
	echo "</html>\n";
?>