<?php 
include('../../const.php');
function addComent($id,$membre,$comm){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('INSERT INTO commentaire(logement_id,membre_id,commentaire) VALUES (?,?,?)');
    $a->execute(array($id,$membre,$comm));
}

addComent($_POST['logement_id'], $_POST['membre_id'], $_POST['message']);

?>