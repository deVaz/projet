<?php

if (verifLogin($_POST['login'])) {
    if (verifPwd($_POST['login'], $_POST['pwd'])) {
        session($_POST['login']);
        if ($_POST['connexionAuto'] == 1) {
            createCookie($_POST['login'], $_POST['pwd']);
        }
        header('location:index.php');
    } else {
         header('location:index.php');
    }
} else {
     header('location:index.php');
}
?>
