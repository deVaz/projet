<?php

function sendMessage($cible, $titre, $text) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare("INSERT INTO message(id_send,id_target,sujet,message,piece,lu,date,del_send,del_target) VALUES (?,?,?,?,?,?,NOW(),?,?) ");
    $a->execute(array($_SESSION['id'], $cible, $titre, $text, "", "0", "1", "1"));
}

?>
