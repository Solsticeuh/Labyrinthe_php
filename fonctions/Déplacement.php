<?php

    //Affiche les possibilités de déplacement.
    for($poss=0;$poss<count($possibilités);$poss++)
    {
        echo "<div class = 'container'>";
        echo "<item1></div>";
        echo "<item3></div>";
        echo "<item7></div>";
        echo "<item9></div>";
        if(!in_array($position,$grille) || !in_array($possibilités[$poss],$grille))
        {
            switch($directionarr[$poss]){
                case 'N':
                    echo "<itemN><a href='index.php?position=$possibilités[$poss]&key=$key'>$directionarr[$poss]</a></div>";
                    break;
                case 'O':
                    echo "<itemO><a href='index.php?position=$possibilités[$poss]&key=$key'>$directionarr[$poss]</a></div>";
                    break;
                case 'E':
                    echo "<itemE><a href='index.php?position=$possibilités[$poss]&key=$key'>$directionarr[$poss]</a></div>";
                    break;
                case 'S':
                    echo "<itemS><a href='index.php?position=$possibilités[$poss]&key=$key'>$directionarr[$poss]</a></div>";
                    break;
                    
            }
        }
        
        if(in_array($position,$grille) && in_array($possibilités[$poss],$grille) && ($_GET['key'] == 1 || $_SESSION['gripen'][$_SESSION['positgrille']] == 1))
        {
            echo "<div><a href='index.php?position=$possibilités[$poss]&key=$key'>$directionarr[$poss]</a></div>";
        }
        echo "</div>";
    }
    
?>