<?php
include('../../const.php');
function removeAnnonce($id){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare("DELETE FROM logements WHERE id=?");
    $a->execute(array($id));
}
if (isset($_GET['supr'])){
    removeAnnonce($_GET['supr']);
}
?>
