<?php
	$bdd_fichier = 'labyrinthe.db';
    
    $sqlite = new SQLite3($bdd_fichier);

    //trouver/stocker le départ
    $requetedepart = 'SELECT couloir.id FROM couloir WHERE type = "depart"';
    $posd = $sqlite->prepare($requetedepart);
    $execdep = $posd->execute();
    $posdint = $execdep -> fetchArray();
    $depart = $posdint[0];

    //trouver/stocker la fin
    $requetefin = 'SELECT id FROM couloir WHERE type = "sortie"';
    $posf = $sqlite->prepare($requetefin);
    $execfin = $posf->execute();
    $posfint = $execfin->fetchArray();
    $fin = $posfint[0];
    

    //stocker position de départ, $_GET pour pouvoir gérer la position inter pages.
    if(isset($_GET['position'])==false)
    {
        $position=$depart
    }

    // /!\ boucle while du jeu à décommenter quand nécessaire
    $tour=0;
    $demande=true;
    while($tour<5){
    
        // trouver les possibilités de déplacement à partir de la position actuelle
        $requeteposs = 'SELECT couloir1,couloir2 FROM passage WHERE couloir1 = :position OR couloir2 = :position';
        $prepareposs = $sqlite -> prepare($requeteposs);
        $prepareposs -> bindValue(':position', $position, SQLITE3_INTEGER);
        $resultposs = $prepareposs->execute();
        $poss = array();
        $nbcouloir = 0;

        //crée un array avec les positions possible à partir de la position actuelle
        echo "<ul>";
        while($result = $resultposs->fetchArray()){
            $autre = ($result['couloir1'] == $position) ? $result['couloir2']:$result['couloir1'];
            array_push($poss, $autre);
            echo '<li><button onclick='."$position=Change_pos($poss[$nbcouloir])".'>'.$poss[$nbcouloir].'</button></li>';
            $nbcouloir+=1;
        }
        echo "</ul>";

        //Création de la page html avec les résultats qu'on a get depuis le début du code
        echo "<!DOCTYPE html>\n";		//On demande un saut de ligne avec \n, seulement avec " et pas '
            echo "<html lang=\"fr\"><head><meta charset=\"UTF-8\">\n";	//Avec " on est obligé d'échapper les " a afficher avec \
            echo "<title>Liste des couloirs</title>\n";
        echo "</head>\n";
        echo "<body>\n";
                echo "<h1>Liste des couloirs</h1>\n";
                echo "<ul>";
                echo "$depart, $fin";
        echo "</ul>";
        echo "</body>\n";
        echo "</html>\n";

        $tour=$tour+1;
    }

    function Change_pos($new_pos)
    {
        return $new_pos;
    }
?>