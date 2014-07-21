<?php

function testLogin($login) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('SELECT * FROM membre WHERE login=?');
    $a->execute(array($login));
    $r = $a->fetch();
    if (empty($r)) {
        return false;
    } else {
        return true;
    }
}

function changePwd($login) {
    $pwd = "";
    for ($i = 0; $i < 10; $i++) {
        $rand[$i] = mt_rand(0, 9);
        $pwd = $pwd . $rand[$i];
    }
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('UPDATE membre SET mdp=? WHERE login=? ');
    $a->execute(array(md5($pwd), $login));

    return $pwd;
}

function sendPwd($login) {
    $pwd = changePwd($login);
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('SELECT * FROM membre WHERE login=?');
    $a->execute(array($login));
    $r = $a->fetch();
    $message = "Voici vottre nouveau mot de passe\n
        $pwd\n
    Vous pourrez le modifier dans votre profil";
    $message = wordwrap($message, 70);
    mail($r['mail'], "Esk'immo| Nouveau mot de passe", $message);
}

?>
