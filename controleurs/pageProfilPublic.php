<?php

include(dirname(__FILE__) . '/../controleurs/haut.php');
include(dirname(__FILE__) . '/../controleurs/topMenu.php');
include(dirname(__FILE__) . '/../modeles/pageProfilPublic.php');

// On récupère les infos du membre connecté et les annonces qu'il a publiées
$fetchInfo = fetchInfo($_GET['id']);
$fetchAnnonces = fetchAnnonces($_GET['id']);

include(dirname(__FILE__) . '/../vues/pageProfilPublic.php');
include(dirname(__FILE__) . '/../controleurs/bas.php');
?>
