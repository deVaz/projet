<?php
include(dirname(__FILE__).'/../controleurs/haut.php'); 
include(dirname(__FILE__).'/../controleurs/topMenu.php'); 
include(dirname(__FILE__).'/../modeles/mesAnnonces.php');



// On récupère les logements ajoutés par le membre
$Logement = getLogement();

include(dirname(__FILE__).'/../vues/mesAnnonces.php');
include(dirname(__FILE__).'/../controleurs/bas.php');
?>
