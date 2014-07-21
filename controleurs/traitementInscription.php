<?php
include('const.php');
include(dirname(__FILE__) . '/../modeles/traitementInscription.php');

//on vérifie si toutes les variables existent
if (isset($_POST['identifiant']) && isset($_POST['pwd1']) && isset($_POST['pwd2']) && isset($_POST['type']) && isset($_POST['lastName']) && 
        isset($_POST['firstName']) && isset($_POST['nationality']) && isset($_POST['jour']) && isset($_POST['mois']) && isset($_POST['annee']) && 
        isset($_POST['etablissement']) && isset($_POST['mail1']) && isset($_POST['mail2'])) {
    
//on ne garde que les lettres et chifres
    $identifiant = remove($_POST['identifiant']);
    $pwd1 = remove($_POST['pwd1']);
    $pwd2 = remove($_POST['pwd2']);
    $type = remove($_POST['type']);
    $lastName = remove($_POST['lastName']);
    $firstName = remove($_POST['firstName']);
    $nationality = remove($_POST['nationality']);
    $jour = remove($_POST['jour']);
    $mois = remove($_POST['mois']);
    $annee = remove($_POST['annee']);
    $etablissement = remove($_POST['etablissement']);
    $mail1 = remove($_POST['mail1']);
    $mail2 = remove($_POST['mail2']);
    $captcha = remove($_POST['captcha']);
    $adresseEtablissement=remove($_POST['adresse_etablissement']);
    
//On dégage les variables vides
    if (testVoid($identifiant) && testVoid($pwd1) && testVoid($pwd2) && testVoid($type) && testVoid($lastName) && testVoid($firstName) && testVoid($nationality) && testVoid($jour) && 
            testVoid($mois) && testVoid($annee) && testVoid($etablissement) && testVoid($mail1) && testVoid($mail2)) {
       if(checkCaptcha($captcha)){
        if(verifLogin($identifiant)){
          if(verifEqual($pwd1, $pwd2)){
              $pwd = $pwd1;
              if(verifEqual($mail1, $mail2)){
                                    $mail = $mail1;
                  if(verifMail($mail)){
                  $ban = 0;
                  $date_inscription = date('Y-m-d');
                  for($i=1;$i<=10;$i++){
                      if($jour == $i){
                          $jour = "0".$jour;
                      }
                  }
                  $birthDate = $annee."-".$mois."-".$jour;
                  $photo = "fail";
                  insertUser($type, $lastName, $firstName, $pwd, $mail, $etablissement, $ban, $date_inscription, $identifiant, $nationality, $birthDate, $photo);
                  $id=getMembreId();
                  insertEstablishment($etablissement,$adresseEtablissement,$id);
                  header("location:index.php?page=validInscription&id=$identifiant");
                  
                  }else{  
                      echo'Le format des adresses e-mail n\'est pas correct';
                  }                  
                  }else{
                  echo 'Les deux adresses e-mail ne sont pas identiques';
              }
          }else{
              echo 'les mots de passe ne sont pas identiques';
          } 
       }else{
           echo "Le login est deja utilise";
       } 
    }
    else{
        echo "Le code n'est pas correct";
    }
    }
    else {
        echo "Des champs sont vides";
    }
} else {
    echo "Tous les champs ne sont pas remplis";
}

include(dirname(__FILE__) . '/../vues/traitementInscription.php');
?>
