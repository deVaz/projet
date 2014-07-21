<?php

// Permet d'effectuer une recherche rapide par mots clés
function rechercheRapide($loc) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    if (preg_match("#[0-9]{1,6}#", $loc)) {
        preg_match("#[0-9]{1,6}#", $loc, $postCodeTab);
        $postCode = $postCodeTab[0];
        $a = $bdd->prepare("SELECT * FROM logements WHERE code_postal LIKE ?  ");
        $a->execute(array("%".$postCode."%"));
        $r = $a->fetchAll();
        return $r;
    }else{
        $a = $bdd->prepare("SELECT * FROM logements WHERE ville LIKE ? ");
        $a->execute(array("%".$loc."%"));
        $r = $a->fetchAll();
        return $r;
    }
}

// Permet d'effectuer une recherche avancée
function rechercheAvancee($lieu,$typeAnnonce, $typeLogement, $prixMin, $prixMax, $nbrPieceMin, $nbrPieceMax, $nbrChambreMin, $nbrChambreMax, $surfaceMin,$surfaceMax) {
    
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    if (preg_match("#[0-9]{5}#", $lieu)) {
        preg_match("#[0-9]{5}#", $lieu, $postCodeTab);
        $postCode = $postCodeTab[0];
        $a = $bdd->prepare("SELECT * FROM logements WHERE code_postal=? AND type_annonce=? AND type_logement = ? AND loyer<=? AND loyer>=? AND nb_pieces<=? AND nb_pieces>=? AND nb_chambres<=? AND nb_chambres>=? AND superficie<=? AND superficie>=? ");
        $a->execute(array($postCode,$typeAnnonce,$typeLogement,$prixMax,$prixMin,$nbrPieceMax,$nbrPieceMin,$nbrChambreMax,$nbrChambreMin,$surfaceMax,$surfaceMin));
        $r = $a->fetchAll();
        return $r;
    }else{
        $a = $bdd->prepare("SELECT * FROM logements WHERE ville LIKE ? AND type_annonce=? AND type_logement = ? AND loyer<=? AND loyer>=? AND nb_pieces<=? AND nb_pieces>=? AND nb_chambres<=? AND nb_chambres>=? AND superficie<=? AND superficie>=? ");
        $a->execute(array($lieu."%",$typeAnnonce,$typeLogement,$prixMax,$prixMin,$nbrPieceMax,$nbrPieceMin,$nbrChambreMax,$nbrChambreMin,$surfaceMax,$surfaceMin));
        $r = $a->fetchAll();
        return $r;
    }
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
