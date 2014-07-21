<div id="searchResult">
    <div id="body">
        <?php include'controleurs/modifRecherche.php'; ?> 
        <div   style="min-height: 700px;" >
            <fieldset id="photorecherche">
                <legend><?php
if ($_SESSION['langue'] == "fr") {
    echo "R&eacute;sultat de votre recherche";
} elseif ($_SESSION['langue'] == "en") {
    echo "Result of your search";
} elseif ($_SESSION['langue'] == "de") {
    echo "Sucheergebnis";
} elseif ($_SESSION['langue'] == "es") {
    echo "Resultados de la búsqueda ";
}
?></legend>
                <?php
                ?>
                <table>
                    <?php
                    foreach ($fetchResult as $value) {
                        ?>
                        <tr>
                            <td>
                                <a href="index.php?page=pageLogementFinale&id=<?php echo $value['id']; ?>">
                                    <img src="webroot/img/logements/<?php echo getImage($value['id']) ; ?>" alt="image" height="150" width="210" />
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
                                                        echo "Type du logement :";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Type of housing:";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Art der Wohnung";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "tipo de vivienda";
                                                    }
                                                    ?></th>
                                        <td><?php echo $value['type_logement']; ?></td>
                                    </tr>
                                    <tr>
                                        <th<?php
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
                                                        echo "Dimensions";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Dimension";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Gr&ouml;&;e";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Dimensiones";
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
                                        <td><?php echo $value['loyer']; ?> <?php echo $value['devise']; ?></td>  
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
</div>