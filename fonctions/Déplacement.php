<?php

    //Affiche les possibilités de déplacement.
    echo 'possibilités: ';
    foreach($possibilités as $poss)
    {
        if(!in_array($position,$grille) || !in_array($poss,$grille))
        {
            echo "<li><a href='index.php?position=$poss&key=$key'>$poss</a></li>";
        }
        
        if(in_array($position,$grille) && in_array($poss,$grille) && ($key == 1 || $_SESSION['gripen'][$posgrille] == 1))
        {
            echo "<li><a href='index.php?position=$poss&key=$key'>$poss</a></li>";
        }
    }

?>