<?php

include(dirname(__FILE__) . '/../modeles/traitementMessage.php');

//On récupère les données du formulaire
$destinataire = $_POST['destinataire'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];
$arrayDestinataire = getTarget($destinataire);
$taillearray = count($arrayDestinataire);

//On envoie autant de message qu'il y a de destinataire
$i = 0;
while ($i < $taillearray) {
    $membreId = getMemberId($arrayDestinataire[$i]);
    if ($membreId==NULL){$membreId = 0;}
    insertMessage($_SESSION['id'], $membreId, $sujet, $message, "aa");
    $i++;
}

//On est redirigé
header('location:index.php?page=messagerie&message=envoi');
include(dirname(__FILE__) . '/../vues/traitementMessage.php');
?>
