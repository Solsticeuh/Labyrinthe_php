<?php

    //Affiche les possibilités de déplacement.
    echo 'possibilités: ';
    for($poss=0;$poss<count($possibilités);$poss++)
    {
        if(!in_array($position,$grille) || !in_array($possibilités[$poss],$grille))
        {
            echo "<li><a href='index.php?position=$possibilités[$poss]&direction=$directionarr[$poss]&key=$key'>chemin: $possibilités[$poss] direction: $directionarr[$poss] .</a></li>";
        }
        
        if(in_array($position,$grille) && in_array($possibilités[$poss],$grille) && ($_GET['key'] == 1 || $_SESSION['gripen'][$_SESSION['positgrille']] == 1))
        {
            echo "<li><a href='index.php?position=$possibilités[$poss]&direction=$directionarr[$poss]&key=$key'>chemin: $possibilités[$poss], direction: $directionarr[$poss] .</a></li>";
        }
    }

    $dirjoueurarr = ['N','E','S','O'];
    
?>