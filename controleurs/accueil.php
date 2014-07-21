<?php
include(dirname(__FILE__).'/../controleurs/haut.php'); 
include(dirname(__FILE__).'/../controleurs/topMenu.php'); 
include(dirname(__FILE__).'/../modeles/accueil.php');
 
 $nbVues = getNbVues();
include(dirname(__FILE__).'/../vues/accueil.php');
include(dirname(__FILE__).'/../controleurs/bas.php');
addVues();
?>
