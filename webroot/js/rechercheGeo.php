<?php

include('../../const.php');

function getLogements() {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('SELECT * FROM logements');
    $a->execute();
    $r = $a->fetchAll();
    return $r;
}

$return = getLogements();
$i = 0;
foreach ($return as $value) {
    $i++;
}
$taille = $i;
?>
<div id="taille"><?php echo $taille ?></div>

<?php 
$i=0;
foreach ($return as $r) {
    ?><div id="<?php echo $i ?>"><?php echo $r['ville'] . " " . $r['code_postal'] . " " . $r['adresse']; ?></div><?php
    $i++;
}
?>