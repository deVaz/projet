<?php

include('../../const.php');
if (isset($_GET['q'])) {
    $q = htmlentities($_GET['q']); // protection
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    // écriture de la requête
    $requete = "SELECT * FROM cp WHERE Ville LIKE :q OR CP LIKE :q LIMIT 0, 10";
    // exécution de la requête
    $resultat = $bdd->prepare($requete);
    $resultat->execute(array(":q"=>$q."%"));
    // affichage des résultats
    while ($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo $donnees['Ville'] ." ".$donnees['CP']." ".$donnees['Pays']. "\n";
    }
}
?>
