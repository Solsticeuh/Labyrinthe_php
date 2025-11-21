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

    echo 'clef: ';
    echo '<ul>';
    while($result = $execclef -> fetchArray()){
        array_push($cles,$result[0]);
        echo '<li>'.$cles[$nbclef].'</li>';
        $nbclef+=1;
    }
    echo '</ul>';
?>