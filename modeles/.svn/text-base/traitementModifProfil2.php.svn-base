<?php

function setMail($id, $mail) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('UPDATE membre SET mail=? WHERE id=?');
    $reponse->execute(array($mail, $id));
}

function testVoid($var) {
    $var = trim($var);
    if (!empty($var)) {
        return true;
    } else {
        return false;
    }
}

function verifEqual($var1, $var2) {
    if ($var1 == $var2) {
        return true;
    } else {
        return false;
    }
}

?>
