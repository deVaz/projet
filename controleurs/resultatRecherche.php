<?php

include(dirname(__FILE__).'/../controleurs/haut.php'); 
include(dirname(__FILE__).'/../controleurs/topMenu.php'); 
include(dirname(__FILE__).'/../modeles/resultatRecherche.php');
 
// On lance la recherche en fonction du type de recherche sélectionné
if(isset($_POST['typeRecherche'])){
     if($_POST['typeRecherche'] == "rechercheRapide"){
         $fetchResult = rechercheRapide($_POST['local']);
     }elseif($_POST['typeRecherche'] == "rechercheAvancee"){
         $fetchResult = rechercheAvancee($_POST['local'],$_POST['bien'],$_POST['type'],$_POST['minprix'],$_POST['maxprix'],$_POST['minpiece'],$_POST['maxpiece'],$_POST['minchambre'],$_POST['maxchambre'],$_POST['mins'],$_POST['maxs']);
     }
 } 
include(dirname(__FILE__).'/../vues/resultatRecherche.php');
include(dirname(__FILE__).'/../controleurs/bas.php');
?>
