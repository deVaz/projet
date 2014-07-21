<?php

/* retourne les photos du logement en fonction de son id */
function selectImage($id){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('SELECT * FROM photo WHERE logement_id = ?');
    $a->execute(array($id));
    $r = $a->fetchAll();
    return $r;
}
?>
