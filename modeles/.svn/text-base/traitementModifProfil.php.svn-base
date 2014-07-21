<?php

/* fonction permettant d'enregistrer le nouveau mot de passe entré par l'utilisateur si celui-ci décide de modifier celui existant déjà*/
function checkPwd($oldPwd, $newPwd, $id ){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT mdp FROM membre WHERE id=?');
    $reponse->execute(array($id));    
    }
    
    /* fonction permettant de modifier le mot de passe */
    function setPassword($id, $newpassword) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('UPDATE membre SET mdp=? WHERE id=?');
    $reponse->execute(array(md5($newpassword), $id));
}

function testVoid($var) {
    $var = trim($var);
    if (!empty($var)) {
        return true;
    } else {
        return false;
    }
}

function verifEqual($var1, $var2) {
    if ($var1 == $var2) {
        return true;
    } else {
        return false;
    }
}

?>
