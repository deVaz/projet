<?php 

/* retourne toutes les infos du membre en fonction de son id */
function fetchInfo($id){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT * FROM membre WHERE id=?');
    $reponse->execute(array($id));
    $array = $reponse->fetch();
    return $array;
}
?>