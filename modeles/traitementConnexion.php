<?php

/* permet de vérifier si le login existe dans la base de données */

function verifLogin($login) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT login FROM membre WHERE login=?');
    $reponse->execute(array($login));
    $array = $reponse->fetch();
    if (!empty($array['login'])) {
        return true;
    } else {
        return false;
    }
}

/* permet de vérifier si le mot de passe correspond au login entré précédemment à partir de la table membre de la base de données */

function verifPwd($login, $pwd) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT mdp FROM membre WHERE login=?');
    $reponse->execute(array($login));
    $array = $reponse->fetch();
    if (md5($pwd) == $array['mdp']) {
        return true;
    } else {
        return false;
    }
}

/* Si le login et le mot de passe sont valides, l'ouverture de la session de l'utilisateur se fait */

function session($login) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT id FROM membre WHERE login=?');
    $reponse->execute(array($login));
    $array = $reponse->fetch();
    $_SESSION['id'] = $array['id'];
}

function createCookie($login, $pwd) {
    setcookie('login', $login, time() + 365 * 24 * 3600, null, null, false, true);
    setcookie('pwd', md5($pwd), time() + 365 * 24 * 3600, null, null, false, true);
}

?>
