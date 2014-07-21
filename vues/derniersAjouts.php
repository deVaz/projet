<div id="searchResult">
    <div id="body">
        <?php include 'controleurs/modifRecherche.php'; ?>
        <fieldset id="photorecherche">
            <legend><?php
        if ($_SESSION['langue'] == "fr") {
            echo "Derniers ajouts";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Last added";
        } elseif ($_SESSION['langue'] == "de") {
            echo "L&auml;tze Zusatzen";
        } elseif ($_SESSION['langue'] == "es") {
            echo "&Uacute;ltimas incorporaciones";
        }
        ?></legend>
            <table>
                <?php
                foreach ($last as $value) {
                    ?>
                    <tr>
                        <td>
                            <a href="index.php?page=pageLogementFinale&id=<?php echo $value['id']; ?>">
                                <img src="webroot/img/logements/<?php echo getImage($value['id']); ?>" alt="image" height="150" width="210" />
                            </a>
                        </td>
                        <td style="vertical-align: top;">
                            <table>
                                <tr>
                                    <th><?php
                getTypeAnnonce($value['type_annonce']);
                    ?></th>
                                </tr>
                                <tr>                  
                                    <th><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Type de bien";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Type of property";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Art der Immobilienbesitz";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Typo de propriedad";
                                    }
                    ?></th>
                                    <td><?php echo $value['type_logement']; ?></td>
                                </tr>
                                <tr>
                                    <th><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Lieu";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Place";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Ort";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Lugar";
                                    }
                    ?></th>
                                    <td><?php echo $value['ville']; ?></td>
                                </tr>                   
                                <tr>
                                    <th><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Superficie";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Area";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Bereich";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "&Aacute;rea";
                                    }
                    ?></th>
                                    <td><?php echo $value['superficie']; ?>m<sup>2</sup></td>
                                </tr>
                                <tr>
                                    <th><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Prix par mois";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Price per month";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Preis pro Monat";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Precio por mes";
                                    }
                    ?></th>
                                    <td><?php echo $value['loyer']; ?> &euro;</td>  
                                </tr>
                            </table>
                        </td>
                        <?php
                        $inc = getNbNote($value['id']);
                        $calc = calc($inc, $value['id']);
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
                    <?php
                }
                ?>
            </table>
        </fieldset>
    </div>
</div>

