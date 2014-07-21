<?php

include('const.php');
include(dirname(__FILE__) . '/../modeles/traitementAjout.php');

$membre_id = $_SESSION['id'];

// On vérifie que les données du formulaires ont bien été envoyées
if (isset($_POST['adresse'])
        && isset($_POST['etage'])
        && isset($_POST['ville'])
        && isset($_POST['code_postal'])
        && isset($_POST['jourdu'])
        && isset($_POST['moisdu'])
        && isset($_POST['anneedu'])
        && isset($_POST['jourau'])
        && isset($_POST['moisau'])
        && isset($_POST['anneeau'])
        && isset($_POST['loyer'])
        && isset($_POST['devise'])
        && isset($_POST['type_annonce'])
        && isset($_POST['type_logement'])
        && isset($_POST['superficie'])
        && isset($_POST['nb_pieces'])
        && isset($_POST['nb_chambres'])
        && isset($_POST['meuble'])
        && isset($_POST['sanitaires'])
        && isset($_POST['salle_de_bain'])
        && isset($_POST['cuisine'])
        && isset($_POST['chauffage'])
        && isset($_POST['energetic'])
        && isset($_POST['phone'])
        && isset($_POST['pays'])
        && isset($_POST['type_transport'])
        && isset($_POST['station'])) {

    $adresse = $_POST['adresse'];
    $etage = $_POST['etage'];
    $ville = $_POST['ville'];
    $code_postal = $_POST['code_postal'];

    $jourdu = $_POST['jourdu'];
    $moisdu = $_POST['moisdu'];
    $anneedu = $_POST['anneedu'];

    $date_dispo_debut = $anneedu . "-" . $moisdu . "-" . $jourdu;

    $jourau = $_POST['jourau'];
    $moisau = $_POST['moisau'];
    $anneeau = $_POST['anneeau'];

    $date_dispo_fin = $anneeau . "-" . $moisau . "-" . $jourau;

    $loyer = $_POST['loyer'];
    $devise = $_POST['devise'];
    $type_logement = $_POST['type_logement'];
    $type_annonce = $_POST['type_annonce'];
    $superficie = $_POST['superficie'];
    $nb_pieces = $_POST['nb_pieces'];
    $nb_chambres = $_POST['nb_chambres'];
    $meuble = $_POST['meuble'];
    $sanitaires = $_POST['sanitaires'];
    $salle_de_bain = $_POST['salle_de_bain'];
    $cuisine = $_POST['cuisine'];
    $chauffage = $_POST['chauffage'];
    $energetic = $_POST['energetic'];
    $phone = $_POST['phone'];


    // On forme une nouvelle variable pour afficher les caractéristiques proprement
    if (isset($_POST['eau']) && isset($_POST['electricite'])) {
        $charges_incluses = "Eau et électricité;";
    } elseif (isset($_POST['eau']) && !isset($_POST['electricite'])) {
        $charges_incluses = "Eau";
    } elseif (isset($_POST['eau']) && !isset($_POST['electricite'])) {
        $charges_incluses = "électricité";
    } else {
        $charges_incluses = "Aucune";
    }

    // On fait de même pour les disponibilités média
    if (isset($_POST['prise_internet']) && isset($_POST['wi-fi']) && isset($_POST['prise_telephone'])) {
        $dispo_media = "Prise internet" . ", " . "wi-fi" . " et " . "prise téléphone";
    } else if (isset($_POST['prise_internet']) && isset($_POST['wi-fi'])) {
        $dispo_media = "Prise internet" . " et " . "wi-fi";
    } else if (isset($_POST['prise_internet']) && isset($_POST['prise_telephone'])) {
        $dispo_media = "Prise internet" . " et " . "prise téléphone";
    } else if (isset($_POST['wi-fi']) && isset($_POST['prise_telephone'])) {
        $dispo_media = "Wi-fi" . " et " . "prise téléphone";
    } else if (isset($_POST['prise_internet']) && isset($_POST['prise_telephone'])) {
        $dispo_media = "Prise internet" . " et " . "prise téléphone";
    } else if (isset($_POST['prise_internet'])) {
        $dispo_media = "Prise internet";
    } else if (isset($_POST['wi-fi'])) {
        $dispo_media = "Wi-fi";
    } else if (isset($_POST['prise_telephone'])) {
        $dispo_media = "Prise téléphone";
    } else {
        $dispo_media = "Aucun";
    }

    // D'autres, trop nombreuses, sont séparées seulement par des ";", remplacées par des "" si elles ne sont pas cochées 
    // puis regroupées au sein d'une même variable
    if (isset($_POST['colocation_acceptee'])) {
        $colocation_acceptee = "colocation acceptée" . "; ";
    } else {
        $colocation_acceptee = "";
    }

    if (isset($_POST['cuisine_equipee'])) {
        $cuisine_equipee = "cuisine équip&ée" . "; ";
    } else {
        $cuisine_equipee = "";
    }

    if (isset($_POST['balcon_terasse'])) {
        $balcon_terasse = "balcon/terasse" . "; ";
    } else {
        $balcon_terasse = "";
    }

    if (isset($_POST['piscine'])) {
        $piscine = "piscine" . "; ";
    } else {
        $piscine = "";
    }

    if (isset($_POST['interphone'])) {
        $interphone = "interphone" . "; ";
    } else {
        $interphone = "";
    }

    if (isset($_POST['ascenceur'])) {
        $ascenceur = "ascenceur" . "; ";
    } else {
        $ascenceur = "";
    }

    if (isset($_POST['garage_parking'])) {
        $garage_parking = "garage/parking" . "; ";
    } else {
        $garage_parking = "";
    }

    if (isset($_POST['gardien_veilleur_de_nuit'])) {
        $gardien_veilleur_de_nuit = "gardien/veilleur de nuit" . "; ";
    } else {
        $gardien_veilleur_de_nuit = "";
    }

    if (isset($_POST['lingerie'])) {
        $lingerie = "lingerie" . "; ";
    } else {
        $lingerie = "";
    }

    if (isset($_POST['acces_handicape'])) {
        $acces_handicape = "accès handicapé" . "; ";
    } else {
        $acces_handicape = "";
    }


    // Les deux variables regroupant les précisions sur le logement cochées optionnellement
    $lesPlus = $colocation_acceptee . $cuisine_equipee . $balcon_terasse . $piscine;
    $accessibilite_services = $acces_handicape . $interphone . $ascenceur . $garage_parking . $gardien_veilleur_de_nuit . $lingerie;


    // On règle l'affichage pour ne pas gâcher d'espace si l'annonceur n'a pas mis de commentaire
    if (isset($_POST['commentaire'])) {
        $commentaire = $_POST['commentaire'];
    } else {
        $commentaire = "";
    }
    $pays = $_POST['pays'];

    $type_transport = $_POST['type_transport'];

    $station = $_POST['station'];


    // On teste si les champs importants ne sont pas vides
    if (testVoid($adresse)
            && testVoid($ville)
            && testVoid($code_postal)
            && testVoid($loyer)
            && testVoid($type_logement)
            && testVoid($type_annonce)
            && testVoid($superficie)
            && testVoid($nb_pieces)
            && testVoid($nb_chambres)
            && testVoid($sanitaires)
            && testVoid($salle_de_bain)
            && testVoid($cuisine)
            && testVoid($chauffage)
            && testVoid($phone)
    ) {

        addPhoto();
        ajoutLogement($adresse, $charges_incluses, $etage, $ville, $code_postal, $date_dispo_debut, $date_dispo_fin, $loyer, $devise, $type_logement, $type_annonce, $superficie, $nb_pieces, $nb_chambres, $meuble, $sanitaires, $salle_de_bain, $cuisine, $chauffage, $energetic, $phone, $dispo_media, htmlspecialchars($commentaire), $membre_id, $pays, $lesPlus, $accessibilite_services);

        $logement_id = getLogementId();

        ajoutTransport($logement_id, $type_transport);

        $transport_id = getTransportId();

        ajoutStation($transport_id, $station);

        // Une fois toutes les fonctions d'ajout éxecutées, on redirige l'utilisateur vers l'annonce qu'il vient de publier
        $id = getLastId();
        $id = $id - 1;
        
        //Partie qui recherche et envoi les alertes
        $checkAlert = checkAlert($ville, $loyer, $type_annonce, $superficie);
        
        foreach ($checkAlert as $value) {
            sendMessage($value['membre_id'], $id);
            echo $value['membre_id'];
        }
        
        header("location:index.php?page=pageLogementFinale&id=$id");

        echo "L'envoi du formulaire a bien &eacute;t&eacute; effectu&eacute;, votre annonce est desormais publi&eacute;e !";
    } else {
        echo'Des champs n\'ont pas &eacute;t&eacute; rempli.';
    }
} else {
    echo 'Le formulaire n\'a pas pu &ecirc;tre envoy&eacute;';
}

include(dirname(__FILE__) . '/../vues/traitementAjout.php');
?>
