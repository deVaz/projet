<?php

// Renvoie les derniers logements ajoutés
function lastLogement() {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare("SELECT * FROM logements ORDER BY date_ajout DESC LIMIT 0,10");
    $a->execute();
    $r = $a->fetchAll();
    return $r;
}

function getImage($id){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare("SELECT * FROM photo WHERE logement_id = ?");
    $a->execute(array($id));
    $r = $a->fetch();
    return $r['photo'];
}

?>
