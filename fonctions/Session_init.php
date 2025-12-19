<?php

    if(!isset($_SESSION['jeu']))
    {
        $_SESSION['jeu'] = -10;
    }

    if (!isset($_SESSION['score'])) {
        $_SESSION['score'] = 0;
    }   

    if(!isset($_GET['position'])){
        unset($_SESSION['gripen']);
    }

    // Gère les éléments de la session, état des grilles et emplacement précédent.
    if(!isset($_SESSION['gripen'])){
        $_SESSION['gripen'] = array();
        for($gr=0;$gr<$nbgrille;$gr++){
            array_push($_SESSION['gripen'],0);
        }
    }

    if(isset($_GET['position'])){
        if(!isset($_SESSION['prec'])){
        
            $_SESSION['prec'] = $_GET['position'];
        }
        else{$_SESSION['prec']=$_GET['position'];}
    }

    if(!isset($_SESSION['positgrille']))
    {
        $_SESSION['positgrille'] = 0;
    }

    if(!isset($_SESSION['fin_jeu'])){
        $_SESSION['fin_jeu'] = 0;
    }
?>