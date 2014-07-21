<?php

//On récupère les messages envoyés
function getMessage($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT * FROM message WHERE id_target = :id AND del_target = 1 ORDER BY date ASC ');
    $reponse->bindParam(':id', $id, PDO::PARAM_INT);
    $reponse->execute();
    $arr = $reponse->fetchAll();
    return $arr;
}

//On récupère le contenu des messages
function getMessageContent($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT * FROM message WHERE id = :id ');
    $reponse->bindParam(':id', $id, PDO::PARAM_INT);
    $reponse->execute();
    $arr = $reponse->fetch();
    return $arr;
}

//On récupère les messages de la boite d'envoi
function getEnvoi($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT * FROM message WHERE id_send = :id AND del_send = 1 ORDER BY date ASC ');
    $reponse->bindParam(':id', $id, PDO::PARAM_INT);
    $reponse->execute();
    $arr = $reponse->fetchAll();
    return $arr;
}

// On récupère l'id des membres pour obtennir leur login
function getMembre($id) {
if($id==0){
    return "Admin";
}
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT login FROM membre WHERE id=?');
    $reponse->execute(array($id));
    $arr = $reponse->fetch();
    $arr = $arr['login'];

    return $arr;
}

//On supprime les messages de la boite d'envoi
function deleteEnvoi($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('UPDATE message SET del_send = 0 WHERE id = ? ');
    $reponse->execute(array($id));
}

//On supprime les messages de la boite de réception 
function deleteReception($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('UPDATE message SET del_target = 0 WHERE id = ? ');
    $reponse->execute(array($id));
}

// On met a jour le statut des messages si il est lu
function readMessage($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('UPDATE message SET lu = 1 WHERE id = ? ');
    $reponse->execute(array($id));
}

// On crée un brouillon
function insertBrouillon($id, $destimataire, $message, $sujet) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('INSERT INTO brouillon VALUES (\'\',?,?,?,?)');
    $reponse->execute(array($id, $destimataire, $message, $sujet));
}

// On récupère les brouillons
function getBrouillon($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT * FROM brouillon WHERE id_membre=? ORDER BY id ASC');
    $reponse->execute(array($id));
    $arr = $reponse->fetchAll();
    return $arr;
}

//On consulte les brouillons
function readBrouillon($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT * FROM brouillon WHERE id=? ORDER BY id ASC');
    $reponse->execute(array($id));
    $arr = $reponse->fetch();
    return $arr;
}

//On supprime les brouillons
function deleteBrouillon($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('DELETE FROM brouillon WHERE id=?');
    $reponse->execute(array($id));
}

// On consulte les messages supprimés
function getDeleteMessage($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT * FROM message WHERE id_send=? AND del_target=0');
    $reponse->execute(array($id));
    $arr = $reponse->fetchAll();
    return $arr;
}

//On supprimes les messages supprimés
function deleteDeleteMessage($id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('UPDATE message SET del_target = -1 WHERE id = ? ');
    $reponse->execute(array($id));
}

?>
