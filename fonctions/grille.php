<?php
    //trouver/stocker les grilles
    $requetegrille = 'SELECT couloir1,couloir2 FROM passage WHERE passage.type = "grille"';
    $posgrille = $sqlite->prepare($requetegrille);
    $execgrille = $posgrille->execute();
    
    $grille = array();
    $nbgrille=0;
    echo 'grilles:';
    echo '<ul>';
    while($result = $execgrille -> fetchArray()){
        array_push($grille,$result['couloir1']);
        array_push($grille,$result['couloir2']);
        echo '<li>'.$grille[$nbgrille].' , '.$grille[$nbgrille+1].'</li>';
        $nbgrille=$nbgrille+2;
    }
    echo '</ul>';
?> 