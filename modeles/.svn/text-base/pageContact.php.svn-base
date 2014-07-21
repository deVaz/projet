<?php
function addContact($titre,$text){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('INSERT INTO contact(text,titre) VALUES (?,?) ');
    $a->execute(array($text,$titre));
}
?>
