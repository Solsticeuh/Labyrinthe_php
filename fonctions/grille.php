<?php
    //trouver/stocker les grilles
    $requetegrille = 'SELECT couloir1,couloir2 FROM passage WHERE passage.type = "grille"';
    $posgrille = $sqlite->prepare($requetegrille);
    $execgrille = $posgrille->execute();
    
    //Mets les couloirs formant le passage de type grille dans un array.
    $grille = array();
    $nbgrille=0;
    echo 'grilles:';
    echo '<ul>';
    while($result = $execgrille -> fetchArray()){
        array_push($grille,$result['couloir1']);
        array_push($grille,$result['couloir2']);
        echo '<li>'.$grille[$nbgrille].' , '.$grille[$nbgrille+1].'</li>';
        $nbgrille=$nbgrille+1;
    }
    echo '</ul>';

    //Ouverture des couloirs définitive. (work in progress)
    for($i=0;$i<count($grille);$i=$i+2){
        if(isset($_GET['position'])){
            if($grille[$i]==$_GET['position'] && $grille[$i+1]==$_SESSION['prec'] || $grille[$i+1]==$_GET['position'] && $grille[$i]==$_SESSION['prec']){
                $_SESSION['gripen'][round($i/2,0,PHP_ROUND_HALF_DOWN)] = 1;
                $_GET['key']=0;
            }
        }
    }

    //aficher ouvert ou pas.
    for($o=0;$o<count($_SESSION['gripen']);$o++){
        Print_r($_SESSION['gripen'][$o]);
    }
?> 