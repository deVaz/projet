<script type="text/javascript" src="webroot/js/jquery.scrollTo.js"></script>
<script type="text/javascript" src="webroot/js/accueilRecherche.js" ></script>
<script type="text/javascript" src="webroot/js/recherche.js" ></script>
<script type="text/javascript" src="webroot/js/jquery.autocomplete.js"></script>
<div class="antContent2" >
    <center>
        <p style="font-size: 18px;" ><?php
        if ($_SESSION['langue'] == "fr") {
            echo "Effectuer une nouvelle recherche";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Search again";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Suche wieder";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Buscar de nuevo";
        }
                ?>
            
        </p>
        <form method="post" action="index.php?page=rechercheGeo" >
            <label for="local" >Localisation: </label>
            <input type="text" name="local" id="local" onkeyup="liste();" style="width: 300px;height: 30px;" /><br/><br/>
            <input type="submit" value="<?php
        if ($_SESSION['langue'] == "fr") {
            echo "Rechercher";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Search";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Suche";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Buscar";
        }
                ?>"/>
        </form>
    </center>
</div>
<?php
if (isset($_POST['local'])) {
    $tab = createTable($_POST['local']);
    foreach ($tab as $key => $value) {
        $logement = getLogementFId($key);
        ?>
        <div class="antContent2">
            <table>
                <tr>
                    <td rowspan="5">
                        <a href="index.php?page=pageLogementFinale&id=<?php echo $key; ?>">
                        <img src="webroot/img/logements/<?php echo getImage($key); ?>" width="250px" height="200px"  id="margeImage"/>
                        </a>
                    </td>
                    <th>
                       <?php
        if ($_SESSION['langue'] == "fr") {
            echo "Type de bien:";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Type of housing";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Art der Immobilie";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Tipo de propiedad";
        }
                ?>
                    </th>
                    <td>
                        <?php echo $logement['type_logement'] ?>
                    </td>
                    <?php 
                     $inc = getNbNote($key);
                     $calc = calc($inc, $key);
                     $tabNote = calcNote($calc);
                     
                    ?>
                    <td style="vertical-align: top;">
                        <img src=<?php echo $tabNote[0]; ?> width="50" height="45" />
                        <img src=<?php echo $tabNote[1]; ?> width="50" height="45" />
                        <img src=<?php echo $tabNote[2]; ?> width="50" height="45" />
                        <img src=<?php echo $tabNote[3]; ?> width="50" height="45" />
                        <img src=<?php echo $tabNote[4]; ?> width="50" height="45" />
                    </td>
                </tr>
                <tr>
                    <th>
                       <?php
        if ($_SESSION['langue'] == "fr") {
            echo "Adresse:";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Address :";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Adresse";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Direcci&oacute;n";
        }
                ?> 
                    </th>
                    <td>
                        <?php echo $logement['adresse']." ".$logement['code_postal']." ".$logement['ville'] ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?php
        if ($_SESSION['langue'] == "fr") {
            echo "Superficie:";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Area :";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Bereich";
        } elseif ($_SESSION['langue'] == "es") {
            echo "&Aacute;rea";
        }
                ?>
                    </th>
                    <td>
                         <?php echo $logement['superficie'] ?>m<sup>2</sup>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Prix par mois";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Price per month";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Preis pro Monat";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Precio por mes";
                                                    }
                                                    ?>
                    </th>
                    <td>
                         <?php echo $logement['loyer']." ".$logement['devise'] ?>
                    </td>
                </tr>
                <tr>
                    <th>
                       <?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Distance:";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Distance :";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Entfernung :";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Distancia :";
                                                    }
                                                    ?> 
                    </th>
                    <td>
                        <?php echo $value/1000 ?> Km
                    </td>
                </tr>
            </table>
        </div>
        <?php
    }
}


?>