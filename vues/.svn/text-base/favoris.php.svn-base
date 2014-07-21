<script type="text/javascript" src="webroot/js/favoris.js" ></script>


    <div id="menuMarge">
        <?php
    include ('controleurs/menuProfil.php');
    ?>
    </div>

<div style="min-height: 250px;" >
    <?php
    foreach ($idLogement as $value) {
        $Logement = getLogements($value['logement_id']);
        ?>
        <div class="antContent" id="open<?php echo $value['logement_id'] ?>" >
            <table>
                <tr>
                    <td>
                        <a href="index.php?page=pageLogementFinale&id=<?php echo $value['logement_id']; ?>">
                            <img src="webroot/img/logements/<?php echo getImage($value['logement_id']); ?>" alt="image" height="150" width="210" />
                        </a>
                    </td>
                    <td style="vertical-align: top;">
                        <table>
                            <tr>
                                <th style="text-align:left"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "LOCATION";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "RENTAL";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "MIETEN";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "CONTRATAR";
                                                    }
                                                    ?></th>
                            </tr>
                            <tr>                  
                                <th style="text-align:left"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Type du logement ";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Type of housing ";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Art der Wohnung";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "tipo de vivienda";
                                                    }
                                                    ?></th>
                                <td><?php echo $Logement['type_logement']; ?></td>
                            </tr>
                            <tr>
                                <th style="text-align:left"><?php
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
                                <td><?php echo $Logement['ville']; ?></td>
                            </tr>                   
                            <tr>
                                <th style="text-align:left"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Surface";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Area";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Oberfl&auml;che";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "M&aacute;ximo :";
                                                    }
                                                    ?>  </th>
                                <td><?php echo $Logement['superficie']; ?>m<sup>2</sup></td>
                            </tr>
                            <tr>
                                <th style="text-align:left"><?php
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
                                <td><?php echo $Logement['loyer']; ?><?php echo $Logement['devise']; ?></td>  
                            </tr>
                        </table>
                    </td>
                    <?php
                    $inc = getNbNote($value['logement_id']);
                    $calc = calc($inc, $value['logement_id']);
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
            </table>
            <span>
                <center>
                    <table>
                        <tr>
                            <td>
                                <a href="index.php?page=pageLogementFinale&id=<?php echo $value['logement_id'] ?>"> <img src="webroot/img/voir.png" alt="voir" title="voir" /></a>
                            </td>
                            <td>
                               <img src="webroot/img/Delete.png" alt="supprimer" title="Supprimer" onclick="removeToFavoris('<?php echo $value['logement_id'] ?>')" />
                            </td>
                        </tr>
                    </table> 
                </center>
            </span>
        </div>
    <?php } ?>
</div>