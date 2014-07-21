<?php

// On vérifie si le pseudo n'est pas pris 
function checkPseudo($var){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('SELECT login FROM membre WHERE login = ?');
    $a->execute(array($var));
    $r = $a->fetch();
    if(empty ($r)){
        return true;
    }else{
        return false;
    }
}

// On vérifie si l'adresse mail n'existe pas déjà dans la base de données
function checkMail($var){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('SELECT mail FROM membre WHERE mail = ?');
    $a->execute(array($var));
    $r = $a->fetch();
    if(empty ($r)){
        return true;
    }else{
        return false;
    }
}
?>
