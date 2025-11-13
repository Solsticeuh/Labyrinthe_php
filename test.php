<?php
	$bdd_fichier = 'labyrinthe.db';
    
    $sqlite = new SQLite3($bdd_fichier);

    $depart = 'SELECT couloir FROM couloirs WHERE type = "depart"';
    $fin = 'SELECT couloir FROM couloirs WHERE type = "sortie"'
    $position = $depart;

    while($position != $fin){
        $possibilité = 'SELECT couloirs1,couloir2 FROM passage WHERE couloirs1 = $position OR couloirs2 = $position'
    }

?>