<script type="text/javascript" src="webroot/js/pageFinale.js" ></script>
<div id="body">
    <style type="text/css">    
        #map_canvas { height: 100% }
    </style>
    <div id="logement">
        <fieldset>
            <legend><?php
if ($_SESSION['langue'] == "fr") {
    echo "Description du bien immobilier";
} elseif ($_SESSION['langue'] == "en") {
    echo "Description of property";
} elseif ($_SESSION['langue'] == "de") {
    echo "Beschreibung der Besitzimmobilie";
} elseif ($_SESSION['langue'] == "es") {
    echo "Descripci&oacute;n de la propiedad";
}
?></legend>
            <table>
                <tr>
                    <td>
                        <fieldset>
                            <legend><?php
                if ($_SESSION['langue'] == "fr") {
                    echo "Visuels";
                } elseif ($_SESSION['langue'] == "en") {
                    echo "Visual";
                } elseif ($_SESSION['langue'] == "de") {
                    echo "Visuell";
                } elseif ($_SESSION['langue'] == "es") {
                    echo "visual";
                }
?></legend>
                            <?php include 'controleurs/banniereLogement.php'; ?>
                            <table>
                                <tr>
                                    <td>
                                        <div id="map_canvas" style="height:275px; width:275px"></div>
                                    </td>
                                    <td>
                                        <?php echo $perf; ?>
                                    </td>
                                </tr>
                            </table>
                            <fieldset>
                                <legend><?php
                                        if ($_SESSION['langue'] == "fr") {
                                            echo "Noter cette annonce";
                                        } elseif ($_SESSION['langue'] == "en") {
                                            echo "Rate this ad";
                                        } elseif ($_SESSION['langue'] == "de") {
                                            echo "Bewerten Sie diese Anmeldung";
                                        } elseif ($_SESSION['langue'] == "es") {
                                            echo "Calificar el anuncio";
                                        }
                                        ?></legend><br/>
                                <!-- La note ! -->
                                <?php
                                include'controleurs/notationPage.php';
                                ?>
                                <div id="notation"></div>
                            </fieldset><br/>
                            <!-- AddThis Button BEGIN -->

                            <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                                <a class="addthis_button_preferred_1"></a>
                                <a class="addthis_button_preferred_2"></a>
                                <a class="addthis_button_preferred_3"></a>
                                <a class="addthis_button_preferred_4"></a>
                                <a class="addthis_button_compact"></a>
                                <a class="addthis_counter addthis_bubble_style"></a>
                            </div>
                            <!-- AddThis Button END -->
                            <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4ed18503602b1b17"></script>
                            <a href="#"><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Ajouter &agrave; mes favoris";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Add to my favourites";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Zu Favoriten hinzufügen";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Agregar a Favoritos";
                                }
                                ?></a>
                        </fieldset>
                    </td>
                    <td>
                        <fieldset>
                            <legend><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Caract&eacute;ristiques du bien";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Characteristics of the property";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Charakteristiken der Wohnung";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Caracter&iacute;sticas de la propiedad";
                                }
                                ?></legend>
                            <fieldset>
                                <legend><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Principal";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Main";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Das Wesentliche";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Principal";
                                }
                                ?></legend><br/>
                                <table>
                                    <tr>
                                        <td style="font-size:20px;"><strong><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "A louer pour ";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "To rent for ";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "zu vermieten f&uuml;r ";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "en alquiler por ";
                                    }
                                ?> <?php echo $logement['type_annonce']; ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?php
                                                if ($_SESSION['langue'] == "fr") {
                                                    echo "Type de bien ";
                                                } elseif ($_SESSION['langue'] == "en") {
                                                    echo "Type of housing";
                                                } elseif ($_SESSION['langue'] == "de") {
                                                    echo "Art des immobilienen Besitzes";
                                                } elseif ($_SESSION['langue'] == "es") {
                                                    echo "Typo de vivienda";
                                                }
                                ?></strong></td><td><?php echo $logement['type_logement']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?php
                                                if ($_SESSION['langue'] == "fr") {
                                                    echo "Dimensions";
                                                } elseif ($_SESSION['langue'] == "en") {
                                                    echo "Dimension";
                                                } elseif ($_SESSION['langue'] == "de") {
                                                    echo "Gr&ouml;&szlig;e";
                                                } elseif ($_SESSION['langue'] == "es") {
                                                    echo "Dimensiones";
                                                }
                                ?></strong></td><td><?php echo $logement['superficie']; ?> m<sup>2</sup></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?php
                                                if ($_SESSION['langue'] == "fr") {
                                                    echo "Nombre de chambres";
                                                } elseif ($_SESSION['langue'] == "en") {
                                                    echo "Number of bedrooms";
                                                } elseif ($_SESSION['langue'] == "de") {
                                                    echo "Anzahl der Zimmer";
                                                } elseif ($_SESSION['langue'] == "es") {
                                                    echo "N&uacute;mero de habitaciones";
                                                }
                                ?></strong></td><td><?php echo $logement['nb_chambres']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?php
                                                if ($_SESSION['langue'] == "fr") {
                                                    echo "Meubl&eacute;";
                                                } elseif ($_SESSION['langue'] == "en") {
                                                    echo "Furnished";
                                                } elseif ($_SESSION['langue'] == "de") {
                                                    echo "M&ouml;bliert";
                                                } elseif ($_SESSION['langue'] == "es") {
                                                    echo "Amueblado";
                                                }
                                ?></strong></td><td><?php echo $logement['meuble']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?php
                                                if (isset($_SESSION['id'])) {

                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Distance par rapport &agrave; l'&eacute;tablissement ";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Distance to School";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Entfernung zur Schule";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Distancia a la escuela";
                                                    }
                                                }
                                ?></td>
                                        <td id="outputSpan">
                                        </td>
                                    <tr>
                                        <td><strong><?php
                                                if ($_SESSION['langue'] == "fr") {
                                                    echo "Date de disponibilit&eacute; ";
                                                } elseif ($_SESSION['langue'] == "en") {
                                                    echo "Date of availability";
                                                } elseif ($_SESSION['langue'] == "de") {
                                                    echo "Datum der Verfügbarkeit";
                                                } elseif ($_SESSION['langue'] == "es") {
                                                    echo "Fecha de disponibilidad";
                                                }
                                ?></strong></td><td><?php
                                                $debutDate = formatDate($logement['date_dispo_debut']);
                                                echo $debutDate;
                                ?><?php
                                            if ($_SESSION['langue'] == "fr") {
                                                echo "au ";
                                            } elseif ($_SESSION['langue'] == "en") {
                                                echo "from ";
                                            } elseif ($_SESSION['langue'] == "de") {
                                                echo "zu ";
                                            } elseif ($_SESSION['langue'] == "es") {
                                                echo "al ";
                                            }
                                ?> <?php
                                            $finDate = formatDate($logement['date_dispo_fin']);
                                            echo $finDate;
                                ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Adresse";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Address";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Adresse";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Direcci&oacute;n";
                                                    }
                                ?></strong></td>
                                        <td><?php echo $logement['adresse']; ?><br/>
                                            <?php echo $logement['code_postal'] . ' ' . $logement['ville']; ?><br/>
                                            <?php echo $logement['pays']; ?>
                                            <?php $adresseGoogle = $logement['adresse'] . ", " . $logement['code_postal'] . " " . $logement['ville'] . ", " . $logement['pays']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong><?php
                                            if ($_SESSION['langue'] == "fr") {
                                                echo "Prix par mois";
                                            } elseif ($_SESSION['langue'] == "en") {
                                                echo "Price per month";
                                            } elseif ($_SESSION['langue'] == "de") {
                                                echo "Preis pro Monat";
                                            } elseif ($_SESSION['langue'] == "es") {
                                                echo "Precio por mes";
                                            }
                                            ?></strong></td><td><?php echo $logement['loyer']; ?> <?php echo $logement['devise']; ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" >
                                    <center>
                                        <input class="buttonFavorite" type="button" value="Ajouter &agrave; mes favoris" onclick="addToFavoris('<?php echo $logement['id'] ?>');" />
                                    </center>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" id="ajoutFavoris" style="display:none;color: green;"  >
                                    <center>
                                        <p>
                                            <?php
                                            if ($_SESSION['langue'] == "fr") {
                                                echo "L'annonce a &eacute;t&eacute; ajout&eacute; aux favoris.";
                                            } elseif ($_SESSION['langue'] == "en") {
                                                echo "The announce has been added to favourites";
                                            } elseif ($_SESSION['langue'] == "de") {
                                                echo "Die Anmeldung ist zu Favoriten hinzugef&uuml;gt worden.";
                                            } elseif ($_SESSION['langue'] == "es") {
                                                echo "El anuncio fue agregado a favoritos.";
                                            }
                                            ?> 
                                        </p>
                                    </center>
                                    </td>
                                    </tr>
                                </table>
                            </fieldset>
                            <fieldset>
                                <legend><?php
                                            if ($_SESSION['langue'] == "fr") {
                                                echo "Accomodations";
                                            } elseif ($_SESSION['langue'] == "en") {
                                                echo "Accommodations";
                                            } elseif ($_SESSION['langue'] == "de") {
                                                echo "Unterkunft";
                                            } elseif ($_SESSION['langue'] == "es") {
                                                echo "Alojamiento";
                                            }
                                            ?></legend><br/>
                                <table>
                                    <tr>
                                        <td><strong><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Sanitaires ";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Toilets ";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Toiletten ";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Sanitarios ";
                                    }
                                            ?></strong></td><td><?php echo $logement['sanitaires']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?php
                                                if ($_SESSION['langue'] == "fr") {
                                                    echo "Salle de bain ";
                                                } elseif ($_SESSION['langue'] == "en") {
                                                    echo "Bathroom ";
                                                } elseif ($_SESSION['langue'] == "de") {
                                                    echo "Badezimmer ";
                                                } elseif ($_SESSION['langue'] == "es") {
                                                    echo "cuarto de ba&ntilde;o ";
                                                }
                                            ?></strong></td><td><?php echo $logement['salle_de_bain']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?php
                                                if ($_SESSION['langue'] == "fr") {
                                                    echo "Cuisine ";
                                                } elseif ($_SESSION['langue'] == "en") {
                                                    echo "Kitchen ";
                                                } elseif ($_SESSION['langue'] == "de") {
                                                    echo "K&uuml;che ";
                                                } elseif ($_SESSION['langue'] == "es") {
                                                    echo "Cocina ";
                                                }
                                            ?></strong></td><td><?php echo $logement['cuisine']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?php
                                                if ($_SESSION['langue'] == "fr") {
                                                    echo "Chauffage ";
                                                } elseif ($_SESSION['langue'] == "en") {
                                                    echo "heating ";
                                                } elseif ($_SESSION['langue'] == "de") {
                                                    echo "Heizung ";
                                                } elseif ($_SESSION['langue'] == "es") {
                                                    echo "calefacci&oacute;n ";
                                                }
                                            ?></strong></td><td><?php echo $logement['chauffage']; ?></td>
                                    </tr>
                                </table>
                            </fieldset>
                            <fieldset>
                                <legend><?php
                                                if ($_SESSION['langue'] == "fr") {
                                                    echo "Pratique";
                                                } elseif ($_SESSION['langue'] == "en") {
                                                    echo "Practice";
                                                } elseif ($_SESSION['langue'] == "de") {
                                                    echo "Praxis";
                                                } elseif ($_SESSION['langue'] == "es") {
                                                    echo "pr&acute;ctica";
                                                }
                                            ?></legend><br/>
                                <table>
                                    <tr>
                                        <td><strong>
                                                <?php if ($logement['etage'] != 0) { ?>

                                                    <?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Situation ";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "situation ";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Lage ";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "situaci&oacute;n ";
                                                    }
                                                    ?>


                                                </strong></td><td><?php echo $logement['etage']; ?> 

                                                &eacute;tage

                                            <?php } ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong><?php
                                            if ($_SESSION['langue'] == "fr") {
                                                echo "Transports &agrave; proximit&eacute; ";
                                            } elseif ($_SESSION['langue'] == "en") {
                                                echo "Transport near ";
                                            } elseif ($_SESSION['langue'] == "de") {
                                                echo "Transport in der N&auml;he ";
                                            } elseif ($_SESSION['langue'] == "es") {
                                                echo "Transporte cerca ";
                                            }
                                            ?></strong></td><td>
                                            <?php
                                            $transports = explode(';', $transport['type_transport']);
                                            $stations = explode(';', $station['station']);

                                            $i = 0;

                                            for ($i = 0; $i < count($transports); $i++) {
                                                if (!isset($transport[$i])) {
                                                    echo $stations[$i];
                                                } elseif (!isset($stations[$i])) {
                                                    echo $transports[$i];
                                                } else {
                                                    echo $transports[$i] . ' ( ' . $stations[$i] . ' )';
                                                }
                                            }
                                            ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Charges incluses ";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Charges included ";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "inklusiven Nebenkosten ";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Gastos incluidos ";
                                                    }
                                            ?></strong></td><td><?php echo $logement['charges_incluses']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?php
                                                if ($_SESSION['langue'] == "fr") {
                                                    echo "Disponibilit&eacute;s m&eacute;dia ";
                                                } elseif ($_SESSION['langue'] == "en") {
                                                    echo "Media Availability ";
                                                } elseif ($_SESSION['langue'] == "de") {
                                                    echo "Medien Verfügbarkeit ";
                                                } elseif ($_SESSION['langue'] == "es") {
                                                    echo "disponibilidad de medios ";
                                                }
                                            ?> </strong></td><td><?php echo $logement['dispo_media']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>

                                                <?php
                                                if ($logement['lesPlus']) {

                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Les plus ";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "The advantages ";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Die Vorteile ";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Los beneficios ";
                                                    }
                                                }
                                                ?>
                                            </strong>
                                        </td>
                                        <td>
                                            <?php
                                            if ($logement['lesPlus']) {

                                                echo $logement['lesPlus'];
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>
                                                <?php
                                                if ($logement['accessibilite_services']) {

                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Accessibilités et services ";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Accessibility and services ";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Zugänglichkeit und Leistungen ";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "La accesibilidad y los servicios ";
                                                    }
                                                }
                                                ?>
                                            </strong>
                                        </td>
                                        <td>
                                            <?php
                                            if ($logement['accessibilite_services']) {

                                                echo $logement['accessibilite_services'];
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>
                                                <?php
                                                if ($logement['commentaire']) {


                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Commentaires de l'annonceur ";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Comments of the seller ";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Anmeldungerkommentar ";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Comentarios del vendedor ";
                                                    }
                                                }
                                                ?>
                                            </strong>
                                        </td>
                                        <td>
                                            <?php
                                            if (isset($logement['commentaire'])) {

                                                echo $logement['commentaire'];
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            </fieldset>
                            <fieldset>
                                <legend><?php
                                            if ($_SESSION['langue'] == "fr") {
                                                echo "Contacter l'annonceur";
                                            } elseif ($_SESSION['langue'] == "en") {
                                                echo "Contact the advertiser";
                                            } elseif ($_SESSION['langue'] == "de") {
                                                echo "Den Anmeldunger kontaktieren";
                                            } elseif ($_SESSION['langue'] == "es") {
                                                echo "Contactar con el vendedor:";
                                            }
                                            ?></legend>
                                <?php
                                if (isset($_SESSION['id'])) {
                                    ?>

                                    <table>
                                        <tr>
                                            <td>
                                                <strong>
                                                    <?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Annonceur";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Inserent";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Anmeldunger";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Vendedor";
                                                    }
                                                    ?> 
                                                </strong>
                                            </td>
                                            <td>
                                                <a href="index.php?page=pageProfilPublic&id=<?php echo $logement['membre_id']; ?>"><?php echo $login; ?></a><br/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>

                                                    <?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Adresse mail";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "E-mail adress";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "E-mail adresse";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Correo electrónico";
                                                    }
                                                    ?>

                                                </strong>
                                            </td>
                                            <td>
                                                <a href="mailto:<?php echo $annoucerCoordinates['mail']; ?>"><?php echo $annoucerCoordinates['mail']; ?></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>
                                                    <?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Numéro de téléphone";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Phone number";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Telefonnummer";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Número de teléfono";
                                                    }
                                                    ?>
                                                </strong>
                                            </td>
                                            <td>
                                                <?php echo "0" . $logement['phone']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong >
                                                    <a href="index.php?page=contactAnn&amp;annon=<?php echo $login; ?>">
                                                        <?php
                                                        if ($_SESSION['langue'] == "fr") {
                                                            echo "Envoyer un message à ";
                                                        } elseif ($_SESSION['langue'] == "en") {
                                                            echo "Send a message to ";
                                                        } elseif ($_SESSION['langue'] == "de") {
                                                            echo "Enviar un mesaje a ";
                                                        } elseif ($_SESSION['langue'] == "es") {
                                                            echo "Sende eine Nachricht zu ";
                                                        }
                                                        echo $login;
                                                        ?>
                                                    </a>
                                                </strong>
                                            </td>
                                        </tr>
                                    </table>
                                    <?php
                                } else {
                                    ?>
                                    <strong> <?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Vous devez &ecirc;tre inscrit pour b&eacute;n&eacute;ficier de ces informations :";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "You must be registered to benefit from this information:";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Sie müssen registriert sein, um aus diesen Informationen haben zu d&uuml;rfen:";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Debe estar registrado para poder beneficiarse de esta información:";
                                }
                                    ?> 
                                        <a href="#"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Se connecter";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Log in";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Einloggen";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Acceder";
                                    }
                                    ?> </a><br/>
                                        <?php
                                        if ($_SESSION['langue'] == "fr") {
                                            echo "Pas encore inscrit ?";
                                        } elseif ($_SESSION['langue'] == "en") {
                                            echo "Not registered?";
                                        } elseif ($_SESSION['langue'] == "de") {
                                            echo "Noch nicht registriert?";
                                        } elseif ($_SESSION['langue'] == "es") {
                                            echo "No se ha registrado?";
                                        }
                                        ?> <a href="index.php?page=inscription"><?php
                                        if ($_SESSION['langue'] == "fr") {
                                            echo "S'inscrire &agrave; Esk'immo";
                                        } elseif ($_SESSION['langue'] == "en") {
                                            echo "Join Esk'immo";
                                        } elseif ($_SESSION['langue'] == "de") {
                                            echo "Registriert im Esk'immo";
                                        } elseif ($_SESSION['langue'] == "es") {
                                            echo "Ingreso Esk'immo";
                                        }
                                        ?></a></strong>
                                <?php } ?>
                            </fieldset>
                        </fieldset>                       
                    </td>
                </tr>
                <tr>
                    <td>
                        <fieldset id="affichageCommentaires" >
                            <legend><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Commentaires";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Comments";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Kommentare";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "comentarios";
                                }
                                ?></legend>
                            <?php if (isset($_SESSION['id'])) { ?>
                                <input type="button" value="voir les commentaires" onclick="fetchVoirComment()"/>
                                <div id="voirCommentaire" style="display: none" >
                                    <?php
                                    foreach ($commentaire as $value) {
                                        ?>
                                        <h4><?php echo htmlspecialchars(getMembre($value['membre_id'])) ?></h4>
                                        <p>
                                            <?php echo nl2br(htmlspecialchars($value['commentaire'])); ?>
                                        </p>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <input type="button" value="r&eacute;diger un commentaire" onclick="fetchEcrireComment()" />
                                <div id="redigerCommentaire" style="display: none"  >
                                    <form>
                                        <textarea id="theComment" style="height: 100px;width: 80%" ></textarea><br/>
                                        <input type="button" value="Envoyer" onclick="addComment('<?php echo $logement['id'] ?>','<?php echo $_SESSION['id'] ?>',theComment.value);" />
                                    </form>
                                </div>
                            <?php } else { ?>
                                <p><?php
                            if ($_SESSION['langue'] == "fr") {
                                echo "Vous devez &ecirc;tre inscrit pour voir les commentaires";
                            } elseif ($_SESSION['langue'] == "en") {
                                echo "You must be registered to view comments";
                            } elseif ($_SESSION['langue'] == "de") {
                                echo "Sie müssen registriert sein, um Kommentare zu lesen";
                            } elseif ($_SESSION['langue'] == "es") {
                                echo "Usted debe estar registrado para ver los comentarios";
                            }
                                ?>.</p>
                            <?php } ?>
                        </fieldset>
                    </td>
                </tr>
            </table>
        </fieldset>
    </div>

    <script src="webroot/js/getCommentLogement.js" ></script>

    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false">
    </script>

    <script type="text/javascript">
                
        window.onload=initialize();
        window.onload=codeAdress();
        window.onload=calculateDistance();
                           
                
        var geocoder;
        var map;
                    
        var destinationIcon = "http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=D|FF0000|000000";
        var originIcon = "http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=O|FFFF00|000000";
                
        function initialize() {
            geocoder = new google.maps.Geocoder();
            var latlng = new google.maps.LatLng(48.833,2.333);
            var myOptions = {
                zoom: 16,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("map_canvas"),
            myOptions);
                        
        }
        function codeAdress(){
                        
            var address =  '<?php echo $adresseGoogle; ?>';
            geocoder.geocode( { 'address': address}, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                    var marker = new google.maps.Marker({
                        map: map,
                        position: results[0].geometry.location
                    });
                } else {
                    alert("Geocode was not successful for the following reason: " + status);
                }
            });	
        }
                    
        var map2;
                    
        var bounds = new google.maps.LatLngBounds();
        var markersArray = [];
                            
        function calculateDistance(){
                        
            var address =  '<?php echo $adresseGoogle; ?>';
            var destination = '<?php
                            if (isset($_SESSION['id'])) {
                                echo $establissementVariables['adresse'];
                            }
                            ?>';
            
                                        var service = new google.maps.DistanceMatrixService()
                                        service.getDistanceMatrix(
                                        {
                                            origins: [address],
                                            destinations: [destination],
                                            travelMode: google.maps.TravelMode.DRIVING,
                                            unitSystem: google.maps.UnitSystem.METRIC,
                                            avoidHighways: false,
                                            avoidTolls: false
                                        }, callback);   
                                    }
        
                                    function callback(response, status){

                                        if (status != google.maps.DistanceMatrixStatus.OK) {
                
                                        } else {
                                            var origins = response.originAddresses;
                                            var destinations = response.destinationAddresses;
                                            var outputSpan = document.getElementById('outputSpan');
                                            outputSpan.innerHTML = '';
                                            deleteOverlays();

                                            for (var i = 0; i < origins.length; i++) {
                                                var results = response.rows[i].elements;
                                                addMarker(origins[i], false);
                                                for (var j = 0; j < results.length; j++) {
                                                    addMarker(destinations[j], true);
                                                    outputSpan.innerHTML += results[j].distance.text + " en " + results[j].duration.text + "<br />";
                                                }
                                            }
                                        }
                                    }
        
                                    function addMarker(location, isDestination) {
                                        var icon;
                                        if (isDestination) {
                                            icon = destinationIcon;
                                        } else {
                                            icon = originIcon;
                                        }
                                        geocoder.geocode({'address': location}, function(results, status) {
                                            if (status == google.maps.GeocoderStatus.OK) {
                                                bounds.extend(results[0].geometry.location);
                                                map2.fitBounds(bounds);
                                                var marker = new google.maps.Marker({
                                                    map: map2,
                                                    position: results[0].geometry.location,
                                                    icon: icon
                                                });
                                                markersArray.push(marker);
                                            }
                                        });
                                    }
        
                                    function deleteOverlays() {
                                        if (markersArray) {
                                            for (i in markersArray) {
                                                markersArray[i].setMap(null);
                                            }
                                            markersArray.length = 0;
                                        }
                                    }
    
                                    function show2(id) {
                                        var d = document.getElementById(id);
                                        for (var i = 2; i<=100; i++) {
                                            if (document.getElementById('smenu'+i)) {document.getElementById('smenu'+i).style.display='none';}
                                        }
                                        if (d) {d.style.display='block';}
                                    }
                                    function show3(id) {
                                        var d = document.getElementById(id);
                                        for (var i = 1; i<=100; i++) {
                                            if (document.getElementById('smenu'+i)) {document.getElementById('smenu'+i).style.display='none';}
                                        }
                                        if (d) {d.style.display='block';}
                                    }
	
            
    </script>
</div>

