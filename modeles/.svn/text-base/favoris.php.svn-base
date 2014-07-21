<?php

/* Retourne les logements associés aux favoris */

function getFavoris($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('SELECT logement_id FROM favoris WHERE membre_id=?');
    $a->execute(array($id));
    $r = $a->fetchAll();
    return $r;
}

/* Retourne les logements en fonction de leur id */

function getLogements($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('SELECT * FROM logements WHERE id = ?');
    $a->execute(array($id));
    $r = $a->fetch();
    return $r;
}

/* retourne le nombre de note figurant sur la page */

function getNbNote($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare("SELECT * FROM note WHERE logement_id=?");
    $a->execute(array($id));
    $r = $a->fetchAll();
    $i = 0;
    foreach ($r as $value) {
        $i++;
    }
    return $i;
}

/* récupère les images du logement */

function getImage($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare("SELECT * FROM photo WHERE logement_id = ?");
    $a->execute(array($id));
    $r = $a->fetch();
    return $r['photo'];
}

function calc($i, $id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare("SELECT * FROM note WHERE logement_id=?");
    $a->execute(array($id));
    $r = $a->fetchAll();
    $all = 0;
    foreach ($r as $value) {
        $all = $value['note'];
    }
    if ($i == 0) {
        $note = 0;
    } else {
        $note = $all / $i;
    }
    return $note;
}

function calcNote($note) {
    $note = round($note);
    if ($note == "1") {
        $tabNote[0] = "webroot/img/StarOut.png";
        $tabNote[1] = "webroot/img/StarOver.png";
        $tabNote[2] = "webroot/img/StarOver.png";
        $tabNote[3] = "webroot/img/StarOver.png";
        $tabNote[4] = "webroot/img/StarOver.png";
    } elseif ($note == "0") {
        $tabNote[0] = "webroot/img/StarOver.png";
        $tabNote[1] = "webroot/img/StarOver.png";
        $tabNote[2] = "webroot/img/StarOver.png";
        $tabNote[3] = "webroot/img/StarOver.png";
        $tabNote[4] = "webroot/img/StarOver.png";
    } elseif ($note == "2") {
        $tabNote[0] = "webroot/img/StarOut.png";
        $tabNote[1] = "webroot/img/StarOut.png";
        $tabNote[2] = "webroot/img/StarOver.png";
        $tabNote[3] = "webroot/img/StarOver.png";
        $tabNote[4] = "webroot/img/StarOver.png";
    } elseif ($note == "3") {
        $tabNote[0] = "webroot/img/StarOut.png";
        $tabNote[1] = "webroot/img/StarOut.png";
        $tabNote[2] = "webroot/img/StarOut.png";
        $tabNote[3] = "webroot/img/StarOver.png";
        $tabNote[4] = "webroot/img/StarOver.png";
    } elseif ($note == "4") {
        $tabNote[0] = "webroot/img/StarOut.png";
        $tabNote[1] = "webroot/img/StarOut.png";
        $tabNote[2] = "webroot/img/StarOut.png";
        $tabNote[3] = "webroot/img/StarOut.png";
        $tabNote[4] = "webroot/img/StarOver.png";
    } else {
        $tabNote[0] = "webroot/img/StarOut.png";
        $tabNote[1] = "webroot/img/StarOut.png";
        $tabNote[2] = "webroot/img/StarOut.png";
        $tabNote[3] = "webroot/img/StarOut.png";
        $tabNote[4] = "webroot/img/StarOut.png";
    }
    return $tabNote;
}

?>
