<?php

/* Fonction permettant de tester si une variable est bien entrée par l'utilisateur */

function testVoid($var) {
    $var = trim($var, " ");
    if (!empty($var)) {
        return true;
    } else {
        return false;
    }
}

/* Fonction permettant de remplacer les caractères qui pourraient poser des problèmes lors de la lecture du code par le serveur */

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

// Ajoute un logement à la base de données
function ajoutLogement($adresse, $charges_incluses, $etage, $ville, $code_postal, $date_dispo_debut, $date_dispo_fin, $loyer, $devise, $type_logement, $type_annonce, $superficie, $nb_pieces, $nb_chambres, $meuble, $sanitaires, $salle_de_bain, $cuisine, $chauffage, $energetic, $phone, $dispo_media, $commentaire, $membre_id, $pays, $lesPlus, $accessibilite_services) {
    $adresse = htmlspecialchars($adresse);
    $charges_incluses = htmlspecialchars($charges_incluses);
    $etage = htmlspecialchars($etage);
    $ville = htmlspecialchars($ville);
    $code_postal = htmlspecialchars($code_postal);
    $date_dispo_debut = htmlspecialchars($date_dispo_debut);
    $date_dispo_fin = htmlspecialchars($date_dispo_fin);
    $loyer = htmlspecialchars($loyer);
    $superficie = htmlspecialchars($superficie);
    $nb_chambres = htmlspecialchars($nb_chambres);
    $nb_pieces = htmlspecialchars($nb_pieces);
    $commentaire = htmlspecialchars($commentaire);
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('INSERT INTO logements(adresse, charges_incluses, etage, ville, code_postal, date_dispo_debut, date_dispo_fin, loyer, devise, type_logement, type_annonce, superficie, nb_pieces, nb_chambres, meuble, sanitaires, salle_de_bain, cuisine, chauffage, energetic, phone, dispo_media, commentaire, membre_id, date_ajout, pays, lesPlus, accessibilite_services) VALUES(:adresse, :charges_incluses, :etage, :ville, :code_postal, :date_dispo_debut, :date_dispo_fin, :loyer, :devise, :type_logement, :type_annonce, :superficie, :nb_pieces, :nb_chambres, :meuble, :sanitaires, :salle_de_bain, :cuisine, :chauffage, :energetic, :phone, :dispo_media, :commentaire, :membre_id, NOW(), :pays, :lesPlus, :accessibilite_services)');
    $reponse->execute(array(
        'adresse' => $adresse,
        'charges_incluses' => $charges_incluses,
        'etage' => $etage,
        'ville' => $ville,
        'code_postal' => $code_postal,
        'date_dispo_debut' => $date_dispo_debut,
        'date_dispo_fin' => $date_dispo_fin,
        'loyer' => $loyer,
        'devise' => $devise,
        'type_logement' => $type_logement,
        'type_annonce' => $type_annonce,
        'superficie' => $superficie,
        'nb_pieces' => $nb_pieces,
        'nb_chambres' => $nb_chambres,
        'meuble' => $meuble,
        'sanitaires' => $sanitaires,
        'salle_de_bain' => $salle_de_bain,
        'cuisine' => $cuisine,
        'chauffage' => $chauffage,
        'energetic' => $energetic,
        'phone' => $phone,
        'dispo_media' => $dispo_media,
        'commentaire' => $commentaire,
        'membre_id' => $membre_id,
        'pays' => $pays,
        'lesPlus' => $lesPlus,
        'accessibilite_services' => $accessibilite_services,
    ));
}

//Permet d'obtenir l'id du logement en cours d'ajout
function getLogementId() {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT MAX(id) AS id FROM logements ');
    $reponse->execute();
    $array = $reponse->fetch();

    return $array['id'];
}

//Permet d'obtenir l'id du transport en cours d'ajout 
function getTransportId() {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('SELECT max(id) AS id FROM transport');
    $reponse->execute();
    $array = $reponse->fetch();

    return $array['id'];
}

// Ajoute une photo associée au logement en cours d'ajout à la base de données
function ajoutPhoto($logement_id, $photo) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('INSERT INTO photo(logement_id, photo)VALUES(:logement_id, :photo)');
    $reponse->execute(array(
        'logement_id' => $logement_id,
        'photo' => htmlspecialchars($photo),
    ));
}

// Ajoute un transport associé au logement en cours d'ajout à la base de données
function ajoutTransport($logement_id, $type_transport) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $type_transport=htmlspecialchars($type_transport);
    $reponse = $bdd->prepare('INSERT INTO transport(logement_id, type_transport)VALUES(?, ?)');
    $reponse->execute(array($logement_id, $type_transport));
}

// Ajoute une station associée au logement en cours d'ajout à la base de données
function ajoutStation($transport_id, $station) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $reponse = $bdd->prepare('INSERT INTO station(transport_id, station)VALUES(:transport_id, :station)');
    $reponse->execute(array(
        'transport_id' => $transport_id,
        'station' => htmlspecialchars($station),
    ));
}

// Récupère l'id du dernier logement ajouté
function getLastId() {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('SELECT id FROM logements ORDER BY id DESC');
    $a->execute();
    $r = $a->fetch();
    return $r['id'] + 1;
}

// Permet l'ajout d'une photo en filtrant les fichiers (type et taille)
function addPhoto() {
    $lastId = getLastId();
    $i = 1;
    while ($i <= 5) {
        if (empty($_FILES['inputPhoto' . $i])) {
            
        } elseif (!isset($_FILES['inputPhoto' . $i])) {
            
        } else {
            // On teste si le fichier a bien été envoyé et s'il n'y a pas d'erreur
            if (isset($_FILES['inputPhoto' . $i]) AND $_FILES['inputPhoto' . $i]['error'] == 0) {

                // On teste si le fichier n'est pas trop gros
                if ($_FILES['inputPhoto' . $i]['size'] <= 2000000) {

                    // On teste si le fichier possède une extension valide
                    $infosfichier = pathinfo($_FILES['inputPhoto' . $i]['name']);
                    $extension_upload = $infosfichier['extension'];
                    $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                    if (in_array($extension_upload, $extensions_autorisees)) {

                        // On valide le fichier, puis on le stocke définitivement
                        move_uploaded_file($_FILES['inputPhoto' . $i]['tmp_name'], 'webroot/img/logements/' . $lastId . "_" . $i . "." . $extension_upload);


                        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                        $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
                        $a = $bdd->prepare('INSERT INTO photo VALUES (\'\',?,?)');
                        $a->execute(array($lastId, $lastId . "_" . $i . "." . $extension_upload));
                    }
                } else {
                    echo"L'image est trop volumineuse !";
                }
            }
        }
        $i++;
    }
}

function checkAlert($ville, $loyer, $type, $superficie) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('SELECT * FROM alerte WHERE ville LIKE ? AND loyer_min <= ? AND loyer_max >= ? AND type LIKE ? AND superficie_min <= ? AND superficie_max >= ?  ');
    $a->execute(array("%" . $ville . "%", $loyer, $loyer, "%" . $type . "%", $superficie, $superficie));
    $r = $a->fetchAll();
    return $r;
}

function sendMessage($idMembre, $idLogement) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME, BDD_USER, BDD_PASS, $pdo_options);
    $a = $bdd->prepare('INSERT INTO message VALUES(\'\',?,?,?,?,?,?,NOW(),?,?)');
    $reponse = "Un logement correspond &agrave; vos attentes
        <a href='index.php?page=pageLogementFinale&id=$idLogement'>Voir l'annonce</a>";
    $a->execute(array("0", $idMembre, "Un nouveau logement correspond &agrave; vos attentes", $reponse, "", 0, 1, 1));
}
?>

