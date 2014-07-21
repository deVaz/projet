<?php
if (!isset($_SESSION['id'])) {
    ?> 
    <fieldset style="background-color: rgba(15, 146, 179, 0.5);">
        <legend><?php
    if ($_SESSION['langue'] == "fr") {
        echo "Erreur";
    } elseif ($_SESSION['langue'] == "en") {
        echo "Error";
    } elseif ($_SESSION['langue'] == "de") {
        echo "Fehler";
    } elseif ($_SESSION['langue'] == "es") {
        echo "Error";
    }
    ?></legend>
        <p>
            <?php
            if ($_SESSION['langue'] == "fr") {
                echo "Vous devez &ecirc;tre identifi&eacute; pour acc&eacute;der &agrave; cette page.";
            } elseif ($_SESSION['langue'] == "en") {
                echo "You must register to access this page.";
            } elseif ($_SESSION['langue'] == "de") {
                echo "Sie müssen sich registrieren sein, um diese Seite zu betreten";
            } elseif ($_SESSION['langue'] == "es") {
                echo "Es necesario registrarse para acceder a esta página.";
            }
            ?> 
        </p>
    </fieldset>
    <?php
} else { ?>
    <div id="menuMarge">
        <?php
    include ('controleurs/menuProfil.php');
    ?>
    </div>
<?php
    if (isset($_GET['erreur'])) {
        if ($_GET['erreur'] == 1) {
            ?>
            <span style="color: red" ><?php
    if ($_SESSION['langue'] == "fr") {
        echo "Des champs sont manquants";
    } elseif ($_SESSION['langue'] == "en") {
        echo "Purview are missing";
    } elseif ($_SESSION['langue'] == "de") {
        echo "Zust&auml;ndigkeit fehlen";
    } elseif ($_SESSION['langue'] == "es") {
        echo "&Aacute;mbito faltan";
    }
    ?></span>
            <?php
        } else {
            ?>
            <span style="color: green" ><?php
    if ($_SESSION['langue'] == "fr") {
        echo "Alerte ajout&eacute;e";
    } elseif ($_SESSION['langue'] == "en") {
        echo "Warning added";
    } elseif ($_SESSION['langue'] == "de") {
        echo "hinzugef&uuml;gt Warnung";
    } elseif ($_SESSION['langue'] == "es") {
        echo "Advertencia a&ntilde;adido";
    }
    ?></span>
            <?php
        }
    }
    ?>
    <div class="antContent" style="text-align: center; border: 1px solid brown;" >
        <h3 style="color: brown;"><?php
    if ($_SESSION['langue'] == "fr") {
        echo "Cr&eacute;er une alerte";
    } elseif ($_SESSION['langue'] == "en") {
        echo "Create a warning";
    } elseif ($_SESSION['langue'] == "de") {
        echo "Erstellen einer Warnung";
    } elseif ($_SESSION['langue'] == "es") {
        echo "Crear advertencia";
    }
    ?></h3>
        <form method="post" action="controleurs/traitementAlert.php" >
            <label for="alertVille" ><?php
    if ($_SESSION['langue'] == "fr") {
        echo "Ville";
    } elseif ($_SESSION['langue'] == "en") {
        echo "City";
    } elseif ($_SESSION['langue'] == "de") {
        echo "Stadt";
    } elseif ($_SESSION['langue'] == "es") {
        echo "Ciudad";
    }
    ?></label>
            <input id="alertVille" name="ville" type="text" /><br/><br/>
            <label for="alertLoyerMin" ><?php
    if ($_SESSION['langue'] == "fr") {
        echo "Prix par mois minimum";
    } elseif ($_SESSION['langue'] == "en") {
        echo "Minimum price per month";
    } elseif ($_SESSION['langue'] == "de") {
        echo "Mindestpreis pro Monat";
    } elseif ($_SESSION['langue'] == "es") {
        echo "precio m&iacute;nimo por mes";
    }
    ?></label>
            <input id="alertLoyerMin" name="loyerMin" type="text" />
            <label for="alertLoyerMax"><?php
    if ($_SESSION['langue'] == "fr") {
        echo "Prix par mois maximum";
    } elseif ($_SESSION['langue'] == "en") {
        echo "Maximum price per month";
    } elseif ($_SESSION['langue'] == "de") {
        echo "Preis pro Monat maximal";
    } elseif ($_SESSION['langue'] == "es") {
        echo "Precio m&aacute;ximo por mes";
    }
    ?></label>
            <input id="alertLoyerMax" name="loyerMax" type="text" /><br/><br/>
            <input type="radio" name="type" value="location" id="alertLocation" /><label for="alertLocation" ><?php
    if ($_SESSION['langue'] == "fr") {
        echo "Location";
    } elseif ($_SESSION['langue'] == "en") {
        echo "Rental";
    } elseif ($_SESSION['langue'] == "de") {
        echo "Mieten";
    } elseif ($_SESSION['langue'] == "es") {
        echo "Contratar";
    }
    ?></label>
            <input type="radio" name="type" value="colocation" id="alertColocation" /><label for="alertColocation" ><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Colocation";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Co-rental";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Gemeinsame";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Colocaci&oacute;n";
                                                    }
                                                    ?></label>
            <input type="radio" name="type" value="echange" id="alertEchange" /><label for="alertEchange" ><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "&Eacutechange";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Exchange";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Austausch";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Cambio";
                                                    }
                                                    ?></label><br/><br/>
            <label for="alertSuperMin" ><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Superficie minimum";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Minimum area";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Mindestfl&auml;che";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "&Aacute;rea m&iacute;nima";
                                                    }
                                                    ?> </label>
            <input id="alertSuperMin" name="superMin" type="text" />
            <label for="alertSuperMax" ><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Superficie minimum";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Maximum area";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "maximale Fl&auml;che";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "&Aacute;rea m&aacute;xima";
                                                    }
                                                    ?></label>
            <input id="alertSuperMax" name="superMax" type="text" /><br/><br/>
            <br/>
            <input type="submit" value="<?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Ajouter l'alerte";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Add warning";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "add Warnung";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "A&ntilde;adir advertencia";
                                                    }
                                                    ?>"/>
        </form>
    </div>
    <center><h2 style="color:brown;" ><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Mes Alertes";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "My warning";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "add Warnung";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Mis advertencias";
                                                    }
                                                    ?></h2></center>
    <?php
    foreach ($getAlert as $value) {
        ?>
    <div class="antContent" style="text-align: center" >
        ville: <?php echo $value['ville'] ?><br/>
        Loyer: <?php echo 'de '.$value['loyer_min']." &agrave; ".$value['loyer_max'] ?><br/>
        Type: <?php echo $value['type'] ?><br/>
        Superficie: <?php echo 'de '.$value['superficie_min']." &agrave; ".$value['superficie_max'] ?><br/>
        <input type="button" value="<?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Supprimer";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Delete";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "entfernen";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Eliminar";
                                                    }
                                                    ?>" onclick="location.href='controleurs/traitementAlert.php?supr=<?php echo $value['id'] ?>'" />
    </div>
        <?php
    }
}
?>