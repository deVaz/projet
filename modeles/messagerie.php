<?php

/* commande SQL qui permet de chercher dans la base de données une personne inscrite. Si le login est trouvé, 
  la recherche est réussie et la personne peut accéder à sa messagerie.
  Sinon cela signifie que le login n'existe pas dans la base de données */

function findUser($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT login FROM membre WHERE id= ?'); /* */
    $reponse->execute(array($id));
    $array = $reponse->fetch();
    return $array['login'];
}

function formatDate($date) {
    $formatedDate = explode('-', $date);
    $finalDate = $formatedDate[2] . '/' . $formatedDate[1] . '/' . $formatedDate[0];
    return $finalDate;
}

function countNbNew() {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare("SELECT COUNT(*) FROM message WHERE id_target=? AND lu=?");
    $a->execute(array($_SESSION['id'], "0"));
    $r = $a->fetch();
    return $r[0];
}

?>
