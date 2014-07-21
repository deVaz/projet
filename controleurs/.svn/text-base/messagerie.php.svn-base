<?php

include(dirname(__FILE__) . '/../controleurs/haut.php');
include(dirname(__FILE__) . '/../controleurs/topMenu.php');
include(dirname(__FILE__) . '/../modeles/messagerie.php');

// On vérifie que le login existe pour le laisser accéder à la messagerie
if (isset($_SESSION['id'])) {
    $loginUser = findUser($_SESSION['id']);
}
include(dirname(__FILE__) . '/../vues/messagerie.php');
include(dirname(__FILE__) . '/../controleurs/bas.php');
?>
