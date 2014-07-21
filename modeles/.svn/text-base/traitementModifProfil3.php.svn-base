<?php

/* modifie le nom de l'établissement du membre */
function setEtablissement($id, $etablissement) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('UPDATE membre SET etablissement=? WHERE id=?');
    $reponse->execute(array($etablissement, $id));
}

/* modifie l'adresse de l'établissement du membre */
function setAdressEtablissement($adresse, $etablissement, $membre_id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('UPDATE etablissement SET adresse=?, nom=? WHERE membre_id=?');
    $reponse->execute(array($adresse, $etablissement, $membre_id));
}

function testVoid($var) {
    $var = trim($var);
    if (!empty($var)) {
        return true;
    } else {
        return false;
    }
}

?>
