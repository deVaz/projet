<?php
function insertAlert($ville,$loyerMin,$loyerMax,$type,$superMin,$superMax){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('INSERT INTO alerte(membre_id,ville,loyer_min,loyer_max,type,superficie_min,superficie_max) VALUES (?,?,?,?,?,?,?) ');
    $a->execute(array($_SESSION['id'],$ville,$loyerMin,$loyerMax,$type,$superMin,$superMax));
}
function suprAlert($id){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('DELETE FROM alerte WHERE id=?');
    $a->execute(array($id));
}
?>
