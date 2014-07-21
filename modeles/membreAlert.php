<?php
function getAlert(){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('SELECT * FROM alerte WHERE membre_id = ?');
    $a->execute(array($_SESSION['id']));
    $r = $a->fetchAll();
    return $r;
}
?>
