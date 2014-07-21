<?php

/* on inclut les constantes */
include ('const.php');

/* retourne le login du membre */
function getLogin($id){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT login FROM membre WHERE id=?');
    $reponse->execute(array($id)); 
    $array = $reponse->fetch();
    return $array['login'];
}

/* retourne l'id en fonction du login et du mot de passe valide de l'utilisateur puis lui ouvre une session */
function connexionCookie($login,$pwd){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT id FROM membre WHERE login=? AND mdp=?');
    $reponse->execute(array($login,$pwd)); 
    $array = $reponse->fetch();
    if(!empty($array)){
        $_SESSION['id']= $array['id'];
    }
}
?>
