<?php

include(dirname(__FILE__).'/../controleurs/haut.php'); 
include(dirname(__FILE__).'/../controleurs/topMenu.php'); 
include(dirname(__FILE__).'/../modeles/favoris.php');

// On récupère les favoris du membre
$idLogement = getFavoris($_SESSION['id']);



include(dirname(__FILE__).'/../vues/favoris.php');
include(dirname(__FILE__).'/../controleurs/bas.php');
?>
