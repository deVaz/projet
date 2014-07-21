<?php

session_start();
include('../../const.php');

function addFavorite($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('INSERT INTO favoris VALUES (\'\',?,?)');
    $a->execute(array($id, $_SESSION['id']));
}

function deleteFavoris($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('DELETE FROM favoris WHERE logement_id=? AND membre_id =?');
    $a->execute(array($id, $_SESSION['id']));
}

if (isset($_GET['id'])) {
    addFavorite($_GET['id']);
}
if (isset($_GET['supr'])) {
    deleteFavoris($_GET['supr']);
}
?>
