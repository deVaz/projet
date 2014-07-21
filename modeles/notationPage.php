<?php

/* vérifie s'il y a une note */
function testNote($id) {
    if(!isset($_SESSION['id'])){
        return false;
    }
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('SELECT * FROM note WHERE membre_id =? AND logement_id=?');
    $a->execute(array($_SESSION['id'], $id));
    $r = $a->fetch();
    if (empty($r)) {
        return true;
    } else {
        return false;
    }
}

function calcNote($id) {
    $i=0;
    $firstNote=0;
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('SELECT * FROM note WHERE logement_id=?');
    $a->execute(array($id));
    $r = $a->fetchAll();
    foreach ($r as $value) {
        $i++;
        $firstNote = $firstNote + $value['note'];
    }
    if($i==0){
        return 0;
    }
    $note = $firstNote/$i;
    return round($note) ;
}

/* attribut une note à un logement */
function setNote($note,$id,$idm){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('INSERT INTO note(membre_id,logement_id,note) VALUES (?,?,?)');
    $a->execute(array($idm,$id,$note));
}

?>
