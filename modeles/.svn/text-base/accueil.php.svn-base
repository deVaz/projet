<?php

function addVues(){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('INSERT INTO compteur_annonces(date,ip) VALUES (?,?)');
    $a->execute(array(date("Y-m-d"),$_SERVER['REMOTE_ADDR']));
}

function getNbVues(){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('SELECT COUNT(*) FROM compteur_annonces');
    $a->execute();
    $r = $a->fetch();
    return $r[0];
}
?>
