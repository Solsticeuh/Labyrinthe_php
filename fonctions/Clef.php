<?php
    //stocker clefs, $_GET pour pouvoir garder les clefs inter pages.
    if(isset($_GET['key']))
    {
        $key=$_GET['key'];
    }
    else
    {  
        $key=0;
    }
    
    //gestion des clefs
    $requeteclef = 'SELECT id FROM couloir WHERE couloir.type = "cle"';
    $posclef = $sqlite->prepare($requeteclef);
    $execclef = $posclef->execute();

    $cles = array();
    $nbclef = 0;
    
    while($result = $execclef -> fetchArray()){
        array_push($cles,$result[0]);
        $nbclef+=1;
    }
    
    //Récupération d'une seule clé
    if(isset($_GET['position'])){
        if(in_array($_GET['position'],$cles))
        {
            $key=1;
            $_SESSION['score'] += 10;
        } 
    }
?>