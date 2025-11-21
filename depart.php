<?php
    //trouver/stocker le départ
    $requetedepart = 'SELECT couloir.id FROM couloir WHERE type = "depart"';
    $posd = $sqlite->prepare($requetedepart);
    $execdep = $posd->execute();
    $posdint = $execdep -> fetchArray();
    $depart = $posdint[0];
?>