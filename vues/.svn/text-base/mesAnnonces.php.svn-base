<script type="text/javascript" src="webroot/js/mesAnnonces.js" ></script>


    <div id="menuMarge">
        <?php
    include ('controleurs/menuProfil.php');
    ?>
    </div>

<div style="min-height: 250px;" >
    <?php
    foreach ($Logement as $value) {
        ?>
        <div class="antContent" id="open<?php echo $value['id'] ?>" >
            <table>
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
                if ($_SESSION['langue'] == "fr") {
                    echo "LOCATION";
                } elseif ($_SESSION['langue'] == "en") {
                    echo "RENTAL";
                } elseif ($_SESSION['langue'] == "de") {
                    echo "MIETEN";
                } elseif ($_SESSION['langue'] == "es") {
                    echo "CONTRATAR";
                }
                ?> 
                                 </th>
                            </tr>
                            <tr>                  
                                <th><?php
                if ($_SESSION['langue'] == "fr") {
                    echo "Type de bien:";
                } elseif ($_SESSION['langue'] == "en") {
                    echo "Type of housing:";
                } elseif ($_SESSION['langue'] == "de") {
                    echo "Art der Unterbringung";
                } elseif ($_SESSION['langue'] == "es") {
                    echo "Typo de vivienda";
                }
                ?>                                
                                </th>
                                <td><?php echo $value['type_logement']; ?></td>
                            </tr>
                            <tr>
                                <th><?php
                if ($_SESSION['langue'] == "fr") {
                    echo "Lieu:";
                } elseif ($_SESSION['langue'] == "en") {
                    echo "Place:";
                } elseif ($_SESSION['langue'] == "de") {
                    echo "Ort";
                } elseif ($_SESSION['langue'] == "es") {
                    echo "Lugar";
                }
                ?>
                                 </th>
                                <td><?php echo $value['ville']; ?></td>
                            </tr>                   
                            <tr>
                                <th><?php
                if ($_SESSION['langue'] == "fr") {
                    echo "Superficie:";
                } elseif ($_SESSION['langue'] == "en") {
                    echo "Area:";
                } elseif ($_SESSION['langue'] == "de") {
                    echo "Bereich:";
                } elseif ($_SESSION['langue'] == "es") {
                    echo "&Aacute;rea:";
                }
                ?>
                                </th>
                                <td><?php echo $value['superficie']; ?>m<sup>2</sup></td>
                            </tr>
                            <tr>
                                <th><?php
                if ($_SESSION['langue'] == "fr") {
                    echo "Loyer par mois:";
                } elseif ($_SESSION['langue'] == "en") {
                    echo "Price per month:";
                } elseif ($_SESSION['langue'] == "de") {
                    echo "Preis pro Monat:";
                } elseif ($_SESSION['langue'] == "es") {
                    echo "Precio por mes:";
                }
                ?>
                                </th>
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
            </table>
            <span>
                <center>
                    <table>
                        <tr>
                            <td>
                                <a href="index.php?pageLogementFinale&id=<?php echo $value['id'] ?>"> <img src="webroot/img/voir.png" alt="voir" title="voir" /></a>
                            </td>
                            <td>
                               <img src="webroot/img/Delete.png" alt="supprimer" title="Supprimer" onclick="removeToAnnonce('<?php echo $value['id'] ?>')" />
                            </td>
                        </tr>
                    </table> 
                </center>
            </span>
        </div>
    <?php } ?>
</div>
