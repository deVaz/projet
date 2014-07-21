<?php
session_start();
include('../const.php');
include(dirname(__FILE__).'/../modeles/ajaxMessagerie.php');
  $arayMessage = getMessage($_SESSION['id']); //On récupère les messages dans la boite de réception
  $arayEnvoi = getEnvoi($_SESSION['id']); //On récupère les messages de la boite d'envoi
  $arayBrouillon = getBrouillon($_SESSION['id']); //On récupère les brouillons
  $getDeleteMessage = getDeleteMessage($_SESSION['id']); // On récupère les messages supprimés
include(dirname(__FILE__).'/../vues/ajaxMessagerie.php');
?>
