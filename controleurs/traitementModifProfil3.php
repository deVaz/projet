<?php

include('const.php');
include(dirname(__FILE__) . '/../modeles/traitementModifProfil3.php');

if (isset($_POST['etablissement']) && isset($_POST['adresse'])) {

    $etablissement = $_POST['etablissement'];
    $adresse = $_POST['adresse'];
    $membre_id=$_SESSION['id'];

    if (testVoid($etablissement) && testVoid($adresse)) {

        setEtablissement($membre_id, $etablissement);
        setAdressEtablissement($adresse, $etablissement, $membre_id);

        header("location:index.php?page=validModif3");
    } else {

        echo "Des champs sont vides.";
    }
} else {

    echo "Tous les champs n'ont pas été remplis.";
}

include(dirname(__FILE__) . '/../vues/traitementModifProfil3.php');
?>

