<?php

function getLogementVariables($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT * FROM logements WHERE id= :id');
    $reponse->execute(array('id' => $id));
    $logement = $reponse->fetch();

    return $logement;
}

function getEstablissmentVariables($etablissement){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT * FROM etablissement WHERE nom= :nomEtablissement');
    $reponse->execute(array('nomEtablissement' => $etablissement));
    $etablissementVariables = $reponse->fetch();

    return $etablissementVariables;
}

function getMemberVariables($id){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT * FROM membre WHERE id= :id');
    $reponse->execute(array('id' => $id));
    $memberVariables = $reponse->fetch();

    return $memberVariables;
}

?>
