<div id="body">
    <div id="profil">
        <?php
        //*vérifier que l'utilisateur est inscrit et identifié pour voir cette page
        if (!isset($_GET['id'])) {
            ?> 
            <fieldset>
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
                        echo "Vous devez &ecirc;tre identifi&eacute; pour acc&eacute &agrave; cette page.";
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
        } else {
            include ('controleurs/menuProfil.php');
            ?>

            <fieldset>
                <legend>Annonceur</legend>
                <center>
                    <table>
                        <tr>
                            <td>
                                <strong>
                                    Login        
                                </strong>
                            </td>
                            <td>
                                <?php echo $fetchInfo['login']; ?>       
                            </td>           
                            <td>
                                <strong>
                                    <?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo " Nationalit&eacute; ";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Nationality ";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Nationalit&auml;t ";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "nacionalidad ";
                                    }
                                    ?> 
                                </strong>
                            </td>
                            <td>
                                <?php echo $fetchInfo['nationalite']; ?> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>
                                    <?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Adresse e-mail";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "E-mail address";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "E-Mail Adresse";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Direcci&oacute;n e-mail ";
                                    }
                                    ?>  
                                </strong>
                            </td>
                            <td>
                                <a href="mailto:<?php echo $fetchInfo['mail']; ?>" ><?php echo $fetchInfo['mail']; ?></a>  
                            </td>
                            <td>
                                <strong>
                                    <?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Etablissement";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "institution";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Universit&auml;t";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "establecimiento";
                                    }
                                    ?> 
                                </strong>
                            </td>
                            <td>
                                <?php echo $fetchInfo['etablissement']; ?>
                            </td>                
                        </tr>
                    </table>
                </center>
            </fieldset>
            <fieldset>
                <legend>
                   <?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo " Annonces de";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Ads from";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Anzeigen von ";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Annonces de ";
                                    }
                                    ?>  <?php echo $fetchInfo['prenom']; ?>
                </legend>

                <table>
                    <?php
                    foreach ($fetchAnnonces as $value) {
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
                                        <th><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Type du logement  ";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Type of housing ";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Art der Wohnung";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "tipo de vivienda";
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
        <?php } ?>
    </div>
</div>
