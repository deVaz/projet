<?php

include(dirname(__FILE__) . '/../modeles/banniereLogement.php');
$photo = selectImage($logement['id']); // On récupère les images associées au logement
include(dirname(__FILE__) . '/../vues/banniereLogement.php');
?>
