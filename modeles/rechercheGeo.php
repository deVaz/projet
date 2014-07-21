<?php

function getDistance($adresse1, $adresse2) {
    $adresse1 = str_replace(" ", "+", $adresse1);
    $adresse2 = str_replace(" ", "+", $adresse2);
    $url = 'http://maps.google.com/maps/api/directions/xml?language=fr&origin=' . $adresse1 . '&destination=' . $adresse2 . '&sensor=false';
    $xml = file_get_contents($url);
    $root = simplexml_load_string($xml);

    $distance = @$root->route->leg->distance->value;

    if ($root->status == "OK") {
        return $distance;
    } else {
        return "0";
    }
}

function getLogements() {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('SELECT * FROM logements ORDER BY id ASC');
    $a->execute();
    $r = $a->fetchAll();
    return $r;
}
function getLogementFId($id){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('SELECT * FROM logements WHERE id=?');
    $a->execute(array($id));
    $r = $a->fetch();
    return $r;
}

function createTable($adresse) {
    $logements = getLogements();
    foreach ($logements as $value) {
        $adresseLoge = $value['adresse'] . "+" . $value['code_postal'] . "+" . $value['ville'];
        $dist = getDistance($adresse, $adresseLoge);
        $tab[$value['id']] = (string) $dist;
        //$tab[]['id'] = $value['id'];
    }
    asort($tab);
    return $tab;
}

/* retourne une image que l'on associe à chaque logement sur la page */
function getImage($id){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare("SELECT * FROM photo WHERE logement_id = ?");
    $a->execute(array($id));
    $r = $a->fetch();
    return $r['photo'];
}

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
