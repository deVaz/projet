<?php

// Si la page n'a pas de titre, on lui donne le titre d'"Esk'immo"
if (!isset($pageTitle)) {
    $pageTitle = "Esk'immo";
}

// On définit le langage français par défaut
if (!isset($_SESSION['langue'])) {
    $_SESSION['langue'] = "fr";
}

// Les fonctions JavaScript a lancer au chargement d'une page sont par défaut initialisés à "" 
// c'est à dire qu'aucune fonction ne s'éxecutera au chargement de la page
if (!isset($javaFunction)) {
    $javaFunction = "";
}
//On inclut le modèle
include(dirname(__FILE__) . '/../modeles/haut.php');

//On inclut la vue
include(dirname(__FILE__) . '/../vues/haut.php');
?>