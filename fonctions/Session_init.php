<?php

    if(!isset($_GET['position'])){
        unset($_SESSION['gripen']);
    }

    // Gère les éléments de la session, état des grilles et emplacement précédent.
    if(!isset($_SESSION['gripen'])){
        $opened = array();
        $_SESSION['gripen'] = $opened;
        for($gr=0;$gr<$nbgrilles;$gr++){
            array_push($_SESSION['gripen'][],0);
        }
    }

    if(!isset($_SESSION['prec'])){
        if(isset($_GET['position'])){
            $_SESSION['prec'] = $_GET['position'];
        }
    }
    else{$_SESSION['prec']=$_GET['position'];}
    
?>