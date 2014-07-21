<?php
include(dirname(__FILE__).'/../controleurs/haut.php'); 
include(dirname(__FILE__).'/../controleurs/topMenu.php'); 
include(dirname(__FILE__).'/../modeles/derniersAjouts.php');

// On récupère les derniers logements ajoutés
 $last = getLast();
 
include(dirname(__FILE__).'/../vues/derniersAjouts.php');
include(dirname(__FILE__).'/../controleurs/bas.php');
?>
