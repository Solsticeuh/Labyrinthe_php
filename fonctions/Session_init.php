<?php

    // Gère les éléments de la session, état des grilles et emplacement précédent.
    if(!isset($_SESSION['gripen'])){
        $_SESSION['gripen'] = array();
        for($g0;$gr<$nbgrilles;$gr++){
            array_push($_SESSION['gripen'],false);
        }
    }

    if(!isset($_SESSION['prec'])){
        if(isset($_GET['position'])){
            $_SESSION['prec'] = $_GET['position'];
        }
    }
    else{$_SESSION['prec']=$_GET['position'];}
    
?>