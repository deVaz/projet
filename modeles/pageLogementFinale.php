<?php

/* permet d'importer les variables du logement sélectionné */

function getLogementVariables($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT * FROM logements WHERE id= :id');
    $reponse->execute(array('id' => $id));
    $logement = $reponse->fetch();

    return $logement;
}

/* permet d'importer les coordonnées de l'annonceur */

function getAnnouncerCoordinates($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT * FROM membre WHERE id= :id');
    $reponse->execute(array('id' => $id));
    $announcerCoordinates = $reponse->fetch();

    return $announcerCoordinates;
}

/* permet d'importer les transports à proximité du logement */

function getTransportVariables($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT * FROM transport WHERE logement_id= :logement_id');
    $reponse->execute(array('logement_id' => $id));
    $transport = $reponse->fetch();

    return $transport;
}

/* permet d'importer les stations des transports à proximité */

function getStationVariables($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT * FROM station WHERE id= :logement_id');
    $reponse->execute(array('logement_id' => $id));
    $station = $reponse->fetch();

    return $station;
}

function getMemberVariables($id){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT * FROM membre WHERE id= :id');
    $reponse->execute(array('id' => $id));
    $memberVariables = $reponse->fetch();

    return $memberVariables;
}

function getEstablissmentVariables($etablissement){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT * FROM etablissement WHERE nom= :nomEtablissement');
    $reponse->execute(array('nomEtablissement' => $etablissement));
    $etablissementVariables = $reponse->fetch();

    return $etablissementVariables;
}


/* permet de générer le diagramme de performance énergétique du logement */

function setLogementEnergetic($logement) {

    global $perf;

    if ($logement['energetic'] == 'A') {
        $perf = '<img src="webroot/img/hbh/A.jpg" alt="dpea" width="215" height="275"/>';
    } else if ($logement['energetic'] == 'B') {
        $perf = '<img src="webroot/img/hbh/B.jpg" alt="dpeb" width="215" height="275"/>';
    } else if ($logement['energetic'] == 'C') {
        $perf = '<img src="webroot/img/hbh/C.jpg" alt="dpec" width="215" height="275"/>';
    } else if ($logement['energetic'] == 'D') {
        $perf = '<img src="webroot/img/hbh/D.jpg" alt="dped" width="215" height="275"/>';
    } else if ($logement['energetic'] == 'E') {
        $perf = '<img src="webroot/img/hbh/E.jpg" alt="dpee" width="215" height="275"/>';
    } else if ($logement['energetic'] == 'F') {
        $perf = '<img src="webroot/img/hbh/F.jpg" alt="dpef" width="215" height="275"/>';
    } else{
        $perf = '<img src="webroot/img/hbh/G.jpg" alt="dpeg" width="215" height="275"/>';
}

}

function getComment($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('SELECT * FROM commentaire WHERE logement_id = ?');
    $a->execute(array($id));
    $r = $a->fetchAll();
    return $r;
}

function getMembre($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('SELECT * FROM membre WHERE id = ?');
    $a->execute(array($id));
    $r = $a->fetch();
    return $r['login'];
}

// formate le format des dates récupérées de la table en dd/mm/aaaa
function formatDate($date) {
    $formatedDate = explode('-', $date);
    $finalDate = $formatedDate[2] . '/' . $formatedDate[1] . '/' . $formatedDate[0];
    return $finalDate;
}

?>
