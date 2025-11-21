<?php
    //trouver/stocker la fin
    $requetefin = 'SELECT id FROM couloir WHERE type = "sortie"';
    $posf = $sqlite->prepare($requetefin);
    $execfin = $posf->execute();
    $posfint = $execfin->fetchArray();
    $fin = $posfint[0];
?>