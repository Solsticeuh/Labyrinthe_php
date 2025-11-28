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

    if(isset($_GET['direction']))
    {
        $direction = $_GET['direction'];
    }
    else
    {
        $direction = 'N';
    }

    // trouver les possibilités de déplacement à partir de la position actuelle
    $requeteposs = 'SELECT couloir1,couloir2,position1,position2 FROM passage WHERE (couloir1 = :position OR couloir2 = :position)';
    $prepareposs = $sqlite -> prepare($requeteposs);
    $prepareposs -> bindValue(':position', $position, SQLITE3_INTEGER);
    $resultposs = $prepareposs->execute();
    $possibilités = array();
    $directionarr = array();

    //crée un array avec les positions possible à partir de la position actuelle
    while($result = $resultposs->fetchArray())
    {
        $autre = ($result['couloir1'] == $position) ? $result['couloir2'] : $result['couloir1'];
        $autredir = ($result['couloir1'] == $position) ? $result['position2'] : $result['position1'];
        array_push($possibilités, $autre);
        array_push($directionarr,$autredir);
    }
?>