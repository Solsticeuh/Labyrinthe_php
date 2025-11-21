<?php

    //stocker position de départ, $_GET pour pouvoir gérer la position inter pages.
    if(isset($_GET['position']))
    {
        $position=$_GET['position'];
    }
    else
    {  
        $position=$depart;
    }

    // trouver les possibilités de déplacement à partir de la position actuelle
    $requeteposs = 'SELECT couloir1,couloir2 FROM passage WHERE (couloir1 = :position OR couloir2 = :position)';
    $prepareposs = $sqlite -> prepare($requeteposs);
    $prepareposs -> bindValue(':position', $position, SQLITE3_INTEGER);
    $resultposs = $prepareposs->execute();
    $possibilités = array();

    //crée un array avec les positions possible à partir de la position actuelle
    while($result = $resultposs->fetchArray())
    {
        $autre = ($result['couloir1'] == $position) ? $result['couloir2'] : $result['couloir1'];
        array_push($possibilités, $autre);
    }
?>