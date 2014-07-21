<?php

/* retourne les annonces que le membre a publié */
function getLogement(){
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('SELECT * FROM logements WHERE membre_id=?'); 
    $a->execute(array($_SESSION['id']));
    $r = $a->fetchAll();
    return $r;
}

/* retourne le nombre de notes attribuées à un logement */
function getNbNote($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare("SELECT * FROM note WHERE id=?");
    $a->execute(array($id));
    $r = $a->fetchAll();
    $i = 0;
    foreach ($r as $value) {
        $i++;
    }
    return $i;
}

/* retourne une image que l'on associe à chaque logement sur la page */
function getImage($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare("SELECT * FROM photo WHERE logement_id = ?");
    $a->execute(array($id));
    $r = $a->fetch();
    return $r['photo'];
}

/* calcule puis retourne la note moyenne d'un logement en fonction de son id et du nombre de note lui étant attribuées */
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

/* permet de calculer et de retourner la note d'un logement */
function calcNote($note) {
    $note = round($note);
    if ($note == "1") {
        $tabNote[0] = "webroot/img/StarOver.png";
        $tabNote[1] = "webroot/img/StarOut.png";
        $tabNote[2] = "webroot/img/StarOut.png";
        $tabNote[3] = "webroot/img/StarOut.png";
        $tabNote[4] = "webroot/img/StarOut.png";
    } elseif ($note == "2") {
        $tabNote[0] = "webroot/img/StarOver.png";
        $tabNote[1] = "webroot/img/StarOver.png";
        $tabNote[2] = "webroot/img/StarOut.png";
        $tabNote[3] = "webroot/img/StarOut.png";
        $tabNote[4] = "webroot/img/StarOut.png";
    } elseif ($note == "3") {
        $tabNote[0] = "webroot/img/StarOver.png";
        $tabNote[1] = "webroot/img/StarOver.png";
        $tabNote[2] = "webroot/img/StarOver.png";
        $tabNote[3] = "webroot/img/StarOut.png";
        $tabNote[4] = "webroot/img/StarOut.png";
    } elseif ($note == "4") {
        $tabNote[0] = "webroot/img/StarOver.png";
        $tabNote[1] = "webroot/img/StarOver.png";
        $tabNote[2] = "webroot/img/StarOver.png";
        $tabNote[3] = "webroot/img/StarOver.png";
        $tabNote[4] = "webroot/img/StarOut.png";
    } else {
        $tabNote[0] = "webroot/img/StarOver.png";
        $tabNote[1] = "webroot/img/StarOver.png";
        $tabNote[2] = "webroot/img/StarOver.png";
        $tabNote[3] = "webroot/img/StarOver.png";
        $tabNote[4] = "webroot/img/StarOver.png";
    }
    return $tabNote;
}
?>
