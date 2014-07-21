<?php

/* retourne les dernières entrées de la table logements par limitation de 10 par page */

function getLast() {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare("SELECT * FROM logements ORDER BY date_ajout DESC LIMIT 0,10");
    $a->execute();
    $r = $a->fetchAll();
    return $r;
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

function getTypeAnnonce($value) {
    if ($value == "location") {
        if ($_SESSION['langue'] == "fr") {
            echo "Location";
        } elseif ($_SESSION['langue'] == "en") {
            echo "rental";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Mieten";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Contratar";
        }
    }elseif($value == "colocation"){
       if ($_SESSION['langue'] == "fr") {
            echo "Colocation";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Colocation";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Wohngemeinschaft";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Colocaci&ograve;n";
        } 
    }else{
       if ($_SESSION['langue'] == "fr") {
            echo "Echange";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Exchange";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Austausch";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Cambio";
        } 
    }
}

?>
