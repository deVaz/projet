<?php

$id=$_GET['id'];

include(dirname(__FILE__).'/../controleurs/haut.php'); 
include(dirname(__FILE__) . '/../controleurs/topMenu.php');

include(dirname(__FILE__) . '/../modeles/pageLogementFinale.php');

// On récupère toutes les variables du logement via son id récupéré plus haut par la méthode GET 
// ainsi que quelques informations de l'annonceur
$logement=getLogementVariables($id);
if(isset($_SESSION['id'])){
$memberVariables=getMemberVariables($_SESSION['id']);
$establissementVariables=getEstablissmentVariables($memberVariables['etablissement']);
}

$transport=getTransportVariables($logement['id']);
$station=getStationVariables($logement['id']+1);
$login = getLogin($logement['membre_id']);
$annoucerCoordinates=getAnnouncerCoordinates($logement['membre_id']);

// On définit quel diagramme énergetique associé au logement
setLogementEnergetic($logement);
//On récupère les commentaires
$commentaire = getComment($id);
include(dirname(__FILE__) . '/../vues/pageLogementFinale.php');
include(dirname(__FILE__) . '/../controleurs/bas.php');
?>
