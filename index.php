<?php
session_start();
ini_set("display_errors",0);
error_reporting(0);


//vérifie si la page existe 
if (!empty($_GET['page']) && is_file('controleurs/'.$_GET['page'].'.php'))
{
        include 'controleurs/'.$_GET['page'].'.php';
}
else
{
        include 'controleurs/accueil.php';
}


?>