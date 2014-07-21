<?php
include(dirname(__FILE__).'/../modeles/deconnexion.php');
setcookie('login', '', time() + 365 * 24 * 3600, null, null, false, true);
    setcookie('pwd', '', time() + 365 * 24 * 3600, null, null, false, true);
session_destroy();
header('location:index.php');
include(dirname(__FILE__).'/../vues/deconnexion.php');
?>