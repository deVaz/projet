<?php

include(dirname(__FILE__).'/../modeles/changeLangue.php');

// Si on a sélectionné une langue, on applique la traduction correspondante
if(isset($_GET['langue'])){
    changeL($_GET['langue']);
}

// On redirige l'utilisateur vers l'accueil
header("location:index.php");
include(dirname(__FILE__).'/../vues/changeLangue.php');
?>
