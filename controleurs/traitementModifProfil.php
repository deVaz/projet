<?php

include('const.php');
include(dirname(__FILE__).'/../modeles/traitementModifProfil.php');

if(isset($_POST['newPwd1'])&& isset($_POST['newPwd2']) && isset($_POST['oldPwd'])){

    $oldpassword=$_POST['oldPwd'];
    $newpassword1=$_POST['newPwd1'];    
    $newpassword2=$_POST['newPwd2'];    
    
    if(testVoid($oldpassword) && testVoid($newpassword1) && testVoid($newpassword2)){
    
        if(verifEqual($newpassword1, $newpassword2)){
            
            $newPassword=$newpassword1;
            setPassword($_SESSION['id'], $newPassword);
            
            header("location:index.php?page=validModif1&id=$identifiant");
            
        } else {
            
            echo "Les mots de passe ne sont pas identiques.";
        }
    } else {
        
        echo "Des champs sont vides.";
    }    
} else {
    
    echo "Tous les champs n'ont pas été remplis.";
}

include(dirname(__FILE__).'/../vues/traitementModifProfil.php');

?>
