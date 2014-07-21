<?php

include('const.php');
include(dirname(__FILE__).'/../modeles/traitementModifProfil2.php');

if(isset($_POST['mail'])){

    $mail=$_POST['mail'];
    
    if(testVoid($mail)){
        
            setMail($_SESSION['id'], $mail);
            
            header("location:index.php?page=validModif2");
            
    } else {
        
        echo "Des champs sont vides.";
    }    
} else {
    
    echo "Tous les champs n'ont pas été remplis.";
}

include(dirname(__FILE__).'/../vues/traitementModifProfil2.php');

?>
