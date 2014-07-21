<?php
//Constante pour la BDD 
define('BDD_NAME', 'logement');
define('BDD_USER', 'root');
define('BDD_PASS', '');
define('BDD_HOST', 'localhost');

// Pour se connecter à la base de données
function connect(){

$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);

}
?>
