<?php

    if(in_array($_GET['position'],$cles))
    {
        $key=1;
    } 

    echo 'possibilités: ';
    foreach($possibilités as $poss)
    {
        if(!in_array($position,$grille) || !in_array($poss,$grille))
        {
            echo "<li><a href='index.php?position=$poss&key=$key'>$poss</a></li>";
        }
        
        if(in_array($position,$grille) && in_array($poss,$grille) && $key == 1)
        {
            echo "<li><a href='index.php?position=$poss&key=$key'>$poss</a></li>";
        }
    }
    
?>