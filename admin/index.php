<?php
session_start();
include '../const.php';


//vérifie si la page existe 
if (!empty($_GET['page']) && is_file('controleurs/'.$_GET['page'].'.php'))
{
        include 'controleurs/'.$_GET['page'].'.php';
}
else
{
        include 'controleurs/home.php';
}


?>
</html>