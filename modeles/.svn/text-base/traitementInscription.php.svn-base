<?php

/* fonction permettant de remplacer les caractères qui risquent de poser problème dans la lecture du code par le serveur */

function remove($var) {
    $a = array("à", "â", "ä");
    $var = str_replace($a, "a", $var);
    $i = array("î", "ï");
    $var = str_replace($i, "i", $var);
    $u = array("ù", "û", "ü", "µ");
    $var = str_replace($u, "u", $var);
    $e = array("é", "è", "ê", "ë");
    $var = str_replace($e, "e", $var);
    $all = array("&", "~", '"', "#", "(", "[", "{", "|", "`", ")", "°", "]", "+", "=", "}", "^", "¨", "$", "£", "ø", "%", "*", "?", ",", ";", "/", ":", "!", "§", "<", ">");
    $var = str_replace($all, "", $var);
    return $var;
}

/* Fonction qui permet de vérifier si les variables ne sont pas vides */

function testVoid($var) {
    $var = trim($var);
    if (!empty($var)) {
        return true;
    } else {
        return false;
    }
}

/* Fonction permmettant d'ajouter un nouvel inscrit ainsi que ses coordonnées dans la base de données */

function insertUser($genre, $nom, $prenom, $mdp, $mail, $etablissement, $ban, $date_inscription, $login, $nationalite, $birthdate, $photo) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('INSERT INTO membre VALUES (\'\',?,?,?,?,?,?,?,?,?,?,?,?,\'\')');
    $genre = htmlspecialchars($genre);
    $nom = htmlspecialchars($nom);
    $prenom = htmlspecialchars($prenom);
    $mail = htmlspecialchars($mail);
    $etablissement = htmlspecialchars($etablissement);
    $login = htmlspecialchars($login);
    $reponse->execute(array($genre, $nom, $prenom, md5($mdp), $mail, $etablissement, $ban, $date_inscription, $login, $nationalite, $birthdate, $photo));
}

/* Fonction permettant d'ajouter un établissement et son adresse */

function insertEstablishment($etablissement, $adresseEtablissement, $membre_id) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('INSERT INTO etablissement(nom, adresse, membre_id) VALUES (:nom, :adresse, :membre_id)');
    $reponse->execute(array(
        'nom' => htmlspecialchars($etablissement),
        'adresse' => htmlspecialchars($adresseEtablissement),
        'membre_id' => htmlspecialchars($membre_id)
    ));
}

function getMembreId() {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT max(id) AS id FROM membre');
    $reponse->execute();
    $array = $reponse->fetch();

    return $array['id'];
}

/* Cette fonction permet de vérifier si les 2 variables entrées sont bien identiques. */

function verifEqual($var1, $var2) {
    if ($var1 == $var2) {
        return true;
    } else {
        return false;
    }
}

/* Cette fonction permet de vérifier si le mot de passe choisi lors de l'inscription n'est pas déjà utilisé par un autre utilisateur */

function verifLogin($login) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT login FROM membre WHERE login = ? ');
    $reponse->execute(array($login));
    $arr = $reponse->fetch();
    if (!empty($arr)) {
        return false;
    } else {
        return true;
    }
}

/* vérifie que le format de l'adresse mail est au bon format */

function verifMail($mail) {
    $mail = stripslashes(htmlentities($mail));
    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $mail)) {
        return true;
    } else {
        return false;
    }
}

/* Cette fonction vérifie que le code saisi correspond au code affiché sur l'image de contrôle pour éviter inscriptions frauduleuses par les robots */

function checkCaptcha($captcha) {
    if ($_SESSION['captcha'] == $captcha) {
        return true;
    } else {
        return false;
    }
}

?>
