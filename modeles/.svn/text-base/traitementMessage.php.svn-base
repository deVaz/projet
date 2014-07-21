<?php
/**/
include('const.php');
//la variable destinataires est découpée au niveau du ; pour pouvoir mettre les destinataire dans un tableau
function getTarget($destinataire){
    $array = explode(";", $destinataire);
    return $array;
}
// On met le message dans la base de donnée
function insertMessage($idSend,$idTarget,$sujet,$message,$piece){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('INSERT INTO message values (\'\',?,?,?,?,?,\'0\',NOW(),\'1\',\'1\') ');
    $reponse->execute(array($idSend,$idTarget,$sujet,$message,$piece));
}

// On obtien l'id du membre grace a son login
function getMemberId($login){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT id FROM membre WHERE login=?');
    $reponse->execute(array($login));
    $arr = $reponse->fetch();
    return $arr['id'];
}


?>
 