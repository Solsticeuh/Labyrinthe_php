<?php

    //ouvre une session pour l'état des grilles, la position précédente, et reset si jamais on se trouve au tout début de la partie.
    session_start();

    if (isset($_GET['partie']) && $_GET['partie'] === 'new') {
        $_SESSION['jeu'] = 1;
        $_SESSION['fin_jeu'] = 0;
        header("Location: index.php");
        exit;
    }


    //ouvre la base de données.
	$bdd_fichier = 'labyrinthe.db';
    $sqlite = new SQLite3($bdd_fichier);
?>
    <style>
    <?php include('fonctions/Style.css'); ?>
    </style>
<?php

    if(!isset($_SESSION['jeu']) || $_SESSION['jeu'] == 0){
        include('fonctions/Menu.php');
    }
    
    if(isset($_SESSION['jeu']) && $_SESSION['jeu'] == 1){
        //Récupère le début et la fin du labyrinthe
        include('fonctions/depart.php');
        include('fonctions/fin.php');

        include('fonctions/fin_jeu.php');

        if($_SESSION['fin_jeu']==0){

            $_SESSION['score'] += 10;

            //Récupère et gère les grilles et les clefs.
            include('fonctions/grille.php');
            include('fonctions/Clef.php');

            //Récupère et gère les couloirs et les déplacements dans le labyrinthe.
            include('fonctions/Rechercher_couloirs.php');
            include('fonctions/Déplacement.php');

            //Fais un affichage simple sans interface graphique pour le moment.
            include ('fonctions/Affichage.php');

            // Initialise une session
            include('fonctions/Session_init.php');
        }
    }
    $_SESSION['fin_jeu'] = 0;

?>