<?php

    if($_GET['position']==$fin){
        $_SESSION['fin_jeu'] = 1;
    }

    if ($_SESSION['fin_jeu'] == 1) {

        echo "<h1>Partie terminée</h1>";
        echo "<p>Ton score : <strong>{$_SESSION['score']}</strong></p>";

        echo "<a href='index.php?position=$depart'>RESET</a>";
    }
?>