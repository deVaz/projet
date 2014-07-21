<script type="text/javascript" src="webroot/js/pageAjout.js" ></script>
<div id="body">
    <script type="text/javascript">
        function showImage(thingId)
        {
            var targetElement;
            targetElement = document.getElementById(thingId) ;
            targetElement.style.display = "" ;
        }    
    </script>
    <?php if (!isset($_SESSION['id'])) {
        ?>
        <fieldset style="border:1px brown solid">
            <legend style="color: brown" ><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Erreur";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Error";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Felher";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Error";
                                }
                                ?></legend>
            <p>
                <?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Vous devez vous connecter pour ajouter un logement.";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "You must log in to add a property.";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Du musst angemeldet sein, um eine Wohnung hinzuf&uuml;gen.";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Usted debe ingresar para agregar una propiedad.";
                                }
                                ?>
            </p>
        </fieldset>
    <?php } else { ?>
        <div id="ajout">
            <fieldset>
                <legend><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Ajouter une annonce";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Add an anounce";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "eine Anzeige hinzuf&uuml;gen";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "publicar avisos";
                                }
                                ?></legend>
                <form method="post" enctype="multipart/form-data" action="index.php?page=traitementAjout">
                    <table>
                        <tr>
                            <td colspan="2">
                                <fieldset>
                                    <legend><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Caract&eacute;ristiques du logement";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Housing characteristics";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Eigenschaften der Wohnung";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Caracter&iacute;sticas de la vivienda";
                                }
                                ?></legend>
                                    <table>
                                        <tr>
                                            <td><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Vous proposez :";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "You suggest:";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Sie schlagen vor:";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Le sugerimos:";
                                }
                                ?></td>
                                            <td>
                                                <input type="radio" name="type_annonce" id="echange" value="echange"/><label for="echange" ><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "&Eacute;change";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Exchange";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Austausch";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Cambio";
                                }
                                ?></label>
                                            </td>
                                            <td>
                                                <input type="radio" name="type_annonce" id="location" value="location"/><label for="location" ><?php
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
                                            </td>
                                            <td>
                                                <input type="radio" name="type_annonce" id="colocation" value="colocation"/><label for="colocation" ><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Colocation";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Co-rental";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Wohngemeinschaft";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Colocaci&oacute;n";
                                                    }
                                                    ?></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Type du logement :";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Type of housing:";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Art der Wohnung";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "tipo de vivienda";
                                                    }
                                                    ?>
                                            </td>
                                            <td>
                                                <input type="radio" name="type_logement" id="chambre" value="chambre"/>
                                                <label for="chambre"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Chambre";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Room";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Zimmer";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Habitaci&oacute;n";
                                                    }
                                                    ?></label>
                                            </td>                        
                                            <td>
                                                <input type="radio" name="type_logement" id="studio" value="studio"/>
                                                <label for="studio"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Studio";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Studio flat";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Studio";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Hab";
                                                    }
                                                    ?></label>
                                            </td>
                                            <td>
                                                <input type="radio" name="type_logement" id="appartement" value="appartement"/>
                                                <label for="appartement"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Appartement";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Flat";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Wohnung";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Apartamento";
                                                    }
                                                    ?></label>
                                            </td>
                                           
                                            <td>
                                                <input type="radio" name="type_logement" id="pavillon" value="pavillon"/>
                                                <label for="pavillon"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Pavillon";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Detached house";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Ha&uuml;schen";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Pabellón";
                                                    }
                                                    ?></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="adresse"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Adresse";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Address";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Adresse";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Direecci&oacute;";
                                                    }
                                                    ?></label>
                                            </td>
                                            <td colspan="2">
                                                <input style="width:350px" type="text" name="adresse" id="adresse"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="ville"><?php
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
                                            </td>
                                            <td>
                                                <input type="text" name="ville" id="ville"/>
                                            </td>
                                            <td  style="text-align:right;">
                                                <label for="code_postal"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Code postal";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Postal zip";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Postleitzahl";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "código postal";
                                                    }
                                                    ?></label>
                                            </td>
                                            <td>
                                                <input type="text" name="code_postal" id="code_postal"/>
                                            </td>
                                            <td colspan="2" style="text-align: right;">
                                                <label for="pays"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Pays";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Country";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Land";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Pa&iacute;s";
                                                    }
                                                    ?></label>
                                            </td>
                                            <td>
                                                <select name='pays' id='pays' required='required'>
                                                    <option value='Allemagne'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Allemagne";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Germany";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Deutschland";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Alemania";
                                                    }
                                                    ?></option>
                                                    <option value='Autriche'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Autriche";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Austria";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "&Ouml;sterreich";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Austria";
                                                    }
                                                    ?></option>
                                                    <option value='Belge'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Belgique";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Belgium";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Belgien";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "B&eacute;lgica";
                                                    }
                                                    ?></option>
                                                    <option value='Bielorussie'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Bi&eacute;lorussie";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Belarus";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Wei&szlig;russland";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Bielorrusia";
                                                    }
                                                    ?></option>
                                                    <option value='Bosnie'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Bosnie Herz&eacute;govine";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Bosnia and Herzegovina";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Bosnien und Herzegowina";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Bielorrusia";
                                                    }
                                                    ?></option>
                                                    <option value='Bulgarie'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Bulgarie";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Bulgaria";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Bulgarien";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Bulgaria";
                                                    }
                                                    ?></option>
                                                    <option value='Chypre'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Chypre";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Cyprus";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Zypern";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Chipre";
                                                    }
                                                    ?></option>
                                                    <option value="Croatie"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Croatie";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Croatia";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Kroatien";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Croacia";
                                                    }
                                                    ?></option>
                                                    <option value='Danois'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Danemark";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Denmark";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "D&auml;nemark";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Dinamarca";
                                                    }
                                                    ?></option>
                                                    <option value='Espagne'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Espagne";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Spain";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Spanien";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Espa&ntilde;a";
                                                    }
                                                    ?></option>
                                                    <option value='Estonie'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Estonie";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Estonia";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Estland";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Estonia";
                                                    }
                                                    ?></option>
                                                    <option value='Finlande'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Finlande";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Finland";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Finnland";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Finlandia";
                                                    }
                                                    ?></option>
                                                    <option value='France' selected="selected"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "France";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "France";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Frankreich";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Francia";
                                                    }
                                                    ?></option>
                                                    <option value='Grèce'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Gr&egrave;ce";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Greece";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Griechenland";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Grecia";
                                                    }
                                                    ?></option>
                                                    <option value='Hongrie'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Hongrie";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Hungary";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Ungarn";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Hungr&iacute;a";
                                                    }
                                                    ?></option>
                                                    <option value='Italie'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Italie";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Italy";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Italien";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Italia";
                                                    }
                                                    ?></option>
                                                    <option value='Irlande'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Irlande";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Ireland";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Irland";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Irlanda";
                                                    }
                                                    ?></option>
                                                    <option value='Lettonie'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Lettonie";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Latvian";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Lettisch";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Let&oacute;n";
                                                    }
                                                    ?></option>
                                                    <option value='Lituanie'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Lituanie";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Lithuania";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Litauen";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Lituania";
                                                    }
                                                    ?></option>
                                                    <option value="Luxembourg"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Luxembourg";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Luxembourg";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Luxemburg";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Luxemburgo";
                                                    }
                                                    ?></option>
                                                    <option value="Macedoine"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Mac&eacute;doine";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Macedonia";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Mazedonien";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Macedonia";
                                                    }
                                                    ?></option>
                                                    <option value='Malte'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Malte";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Malta";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Malta";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Malta";
                                                    }
                                                    ?></option>
                                                    <option value='Moldavie'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Moldavie";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Moldova";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Moldawien";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Moldavia";
                                                    }
                                                    ?></option>
                                                    <option value='Montenegro'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Mont&eacute;n&eacute;gro";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Montenegro";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Montenegro";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Montenegro";
                                                    }
                                                    ?></option>
                                                    <option value="Norvège"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Norv&egrave;ge";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Norway";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Norwegen";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Noruega";
                                                    }
                                                    ?></option>
                                                    <option value='Pays-bas'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Pays-Bas";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Netherlands";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Niederlande";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Países Bajos";
                                                    }
                                                    ?></option>
                                                    <option value='Pologne'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Pologne";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Poland";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Polen";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Polonia";
                                                    }
                                                    ?></option>
                                                    <option value='Portugal'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Portugal";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Portugal";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Portugal";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Portugal";
                                                    }
                                                    ?></option>
                                                    <option value='Tchequie'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "R&eacute;publique Tch&egrave;que";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Czech Republic";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Tschechische Republik";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "República Checa";
                                                    }
                                                    ?></option>
                                                    <option value='Roumanie'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Roumanie";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Romania";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Rum&auml;nien";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Rumania";
                                                    }
                                                    ?></option>
                                                    <option value='Royaume-Uni'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Royaume-Uni";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "United Kingdom";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Vereinigtes K&ouml;nigreich";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Reino Unido";
                                                    }
                                                    ?></option>
                                                    <option value="Russie"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Russie";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Russia";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Russland";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Rusia";
                                                    }
                                                    ?></option>
                                                    <option value='Serbie'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Serbie";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Serbia";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Serbien";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Serbia";
                                                    }
                                                    ?></option>
                                                    <option value='Slovaquie'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Slovaquie";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Slovakia";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Slowakei";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Eslovaquia";
                                                    }
                                                    ?></option>
                                                    <option value='Slovenie'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Slov&eacute;nie";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Slovenia";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Slowenien";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Eslovenia";
                                                    }
                                                    ?></option>
                                                    <option value='Suède'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Su&egrave;de";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Sweden";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Wildleder";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Suecia";
                                                    }
                                                    ?></option>
                                                    <option value='Suisse'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Suisse";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Switzerland";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Schweiz";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Suiza";
                                                    }
                                                    ?></option>
                                                    <option value='Ukraine'><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Ukraine";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Ukrainia";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Ukrainia";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Ucrania";
                                                    }
                                                    ?></option> 
                                                </select>                                               
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="superficie"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Superficie";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Area";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Oberfl&auml;sche";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "&Aacute;rea";
                                                    }
                                                    ?></label>
                                            </td>
                                            <td>
                                                <input type="text" name="superficie" id="superficie"/>
                                                m<sup>2</sup>
                                            </td>
                                            <td  style="text-align:right;">
                                                <label for="meuble"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Meubl&eacute;";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Furnished";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "M&ouml;bliert";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Amueblado";
                                                    }
                                                    ?></label>
                                            </td>
                                            <td>
                                                <select name="meuble" id="meuble">
                                                    <option value="oui"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Oui";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Yes";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Ja";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Si";
                                                    }
                                                    ?></option>
                                                    <option value="non"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Non";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "No";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Nein";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "No";
                                                    }
                                                    ?></option>
                                                </select>
                                            </td>
                                            <td colspan="2" style="text-align: right;">
                                                <?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "&Eacute;tage";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "floor";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Stockwerk";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "piso";
                                                    }
                                                    ?>
                                            </td>
                                            <td>
                                                <select name="etage" id="etage">
                                                    <option value="0"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Rez de chauss&eacute;e";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "ground floor";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Erdgeschoss";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "planta baja";
                                                    }
                                                    ?></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="nb_pieces"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Nombre de pièces";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Number of rooms";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Anzahl der Zimmer";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "N&uacute;mero de habitaciones";
                                                    }
                                                    ?>  </label>
                                            </td>
                                            <td>
                                                <input type="text" name="nb_pieces" id="nb_pieces"/>
                                            </td>
                                            <td  style="text-align:right;">
                                                <label for="nb_chambres"> <?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Nombre de chambres";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Number of bedrooms";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Anzahl der Zimmer";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "N&uacute;mero de habitaciones";
                                                    }
                                                    ?></label>
                                            </td>
                                            <td>
                                                <input type="text" name="nb_chambres" id="nb_chambres"/>
                                            </td> 
                                            <td colspan="2" style="text-align: right;">
                                                <label for="phone"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "T&eacute;l&eacute;phone ";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Phone";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Telefon";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Tel&eacute;fono";
                                                    }
                                                    ?></label>
                                            </td>
                                            <td>
                                                <input type="text" name="phone" id="phone"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="loyer"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Prix par mois";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Price per month";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Preis pro Monat";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Precio por mes";
                                                    }
                                                    ?></label>
                                            </td>
                                            <td colspan="2">
                                                <input type="text" name="loyer" id="loyer"/>
                                                <select name='devise' id='devise' required='required'>
                                                    <option value='euros'>euros</option>
                                                    <option value='livres'>livres</option>
                                                    <option value='dollars'>dollars</option>
                                                    <option value='francs_suisses'>francs suisses</option>
                                                    <option value='danois'>couronnes danoises</option>
                                                    <option value="russe">rouble russe</option>
                                                    <option value='bulgare'>lev bulgare</option>
                                                    <option value='hongrois'>forint hongrois</option>
                                                    <option value='letton'>lats letton</option>
                                                    <option value='lituanien'>litas lituanien</option>
                                                    <option value='polonais'>zloty polonais</option>
                                                    <option value='tcheque'>couronnes tch&egrave;ques</option>
                                                    <option value='roumain'>leu roumain</option>
                                                    <option value='suedois'>couronnes su&eacute;doises</option>
                                                </select>                                      
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="jourdu"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Date de disponibilit&eacute; : du";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Date of availability: from";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Datum der Verfügbarkeit: Vom";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Fecha de disponibilidad: el";
                                                    }
                                                    ?></label>
                                            </td>
                                            <td>
                                                <select name='jourdu' id='jourdu' required="required" >

                                                    <?php
                                                    $j = 1;
                                                    while ($j < 32) {
                                                        echo "<option value=$j>$j</option>";
                                                        $j++;
                                                    }
                                                    ?>

                                                </select>
                                                <select name='moisdu' id='moisdu' required="required" >
                                                    <option value="1"><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Janvier";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "January";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Januar";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Enero";
                                }
                                ?></option>
                                                    <option value="2"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "F&eacute;vrier";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "February";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Februar";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Febrero";
                                    }
                                ?></option>
                                                    <option value="3"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Mars";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "March";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "M&auml;rz";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Marzo";
                                    }
                                ?></option>
                                                    <option value="4"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Avril";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "April";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "April";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Abril";
                                    }
                                ?></option>
                                                    <option value="5"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Mai";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "May";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Mai";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Mayo";
                                    }
                                ?></option>
                                                    <option value="6"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Juin";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "June";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "juni";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Junio";
                                    }
                                ?></option>
                                                    <option value="7"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Juillet";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "July";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Juli";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Julio";
                                    }
                                ?></option>
                                                    <option value="8"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Ao&ucirc;t";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "August";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "August";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Agosto";
                                    }
                                ?></option>
                                                    <option value="9" selected><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Septembre";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "September";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "September";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Septiembre";
                                    }
                                ?></option>
                                                    <option value="10"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Octobre";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "October";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Oktober";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Octubre";
                                    }
                                ?></option>
                                                    <option value="11"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Novembre";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "november";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "November";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "noviembre";
                                    }
                                ?></option>
                                                    <option value="12"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "D&eacute;cembre";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "December";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Dezember";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Diciembre";
                                    }
                                ?></option>
                                                </select> 
                                                <select name='anneedu' id='anneedu' required="required" >

                                                    <?php
                                                    $a = 2011;
                                                    while ($a < 2021) {
                                                        echo "<option value=$a>$a</option>";
                                                        $a++;
                                                    }
                                                    ?>

                                                </select>
                                            </td>    
                                            <td colspan="3" ><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "au";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "to";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "zu";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "al";
                                    }
                                ?> 
                                                <select name='jourau' id='jourau' required="required" >

                                                    <?php
                                                    $j = 1;
                                                    while ($j < 32) {
                                                        echo "<option value=$j>$j</option>";
                                                        $j++;
                                                    }
                                                    ?>

                                                </select>

                                                <select name='moisau' id='moisau' required="required" >
                                                    <option value="1"><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Janvier";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "January";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Januar";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Enero";
                                }
                                ?></option>
                                                    <option value="2">><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "F&eacute;vrier";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "February";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Februar";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Febrero";
                                    }
                                ?></option>
                                                    <option value="3"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Mars";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "March";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "M&auml;rz";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Marzo";
                                    }
                                ?></option>
                                                    <option value="4"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Avril";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "April";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "April";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Abril";
                                    }
                                ?></option>
                                                    <option value="5"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Mai";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "May";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Mai";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Mayo";
                                    }
                                ?></option>
                                                    <option value="6"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Juin";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "June";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "juni";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Junio";
                                    }
                                ?></option>
                                                    <option value="7"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Juillet";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "July";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Juli";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Julio";
                                    }
                                ?></option>
                                                    <option value="8"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Ao&ucirc;t";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "August";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "August";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Agosto";
                                    }
                                ?></option>
                                                    <option value="9" selected><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Septembre";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "September";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "September";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Septiembre";
                                    }
                                ?></option>
                                                    <option value="10"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Octobre";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "October";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Oktober";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Octubre";
                                    }
                                ?></option>
                                                    <option value="11"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Novembre";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "november";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "November";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "noviembre";
                                    }
                                ?></option>
                                                    <option value="12"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "D&eacute;cembre";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "December";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Dezember";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Diciembre";
                                    }
                                ?></option>
                                                </select> 

                                                <select name='anneeau' id='anneeau' required="required" >
                                                    <?php
                                                    $a = 2012;
                                                    while ($a < 2021) {
                                                        echo "<option value=$a>$a</option>";
                                                        $a++;
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;">
                                <fieldset id="accomodations">
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
                                ?></legend>
                                    <table>
                                        <tr>
                                            <td><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Sanitaires";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Toilets";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Toiletten";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Sanitarios";
                                    }
                                ?></td>
                                            <td>
                                                <input type="radio" name="sanitaires" id="privatifs" value="privatifs"/>
                                    <?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Privatifs";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Private";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "privaten";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "privados";
                                    }
                                ?>
                                            </td>
                                            <td>
                                                <input type="radio" name="sanitaires" id="sur_le_palier" value="sur le palier"/>
                                    <?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Sur le palier";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "On the landing";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Auf dem Treppenabsatz";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "En el rellano";
                                    }
                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Salle de bain";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Bathroom";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Badezimmer";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "cuarto de ba&ntilde;o";
                                    }
                                ?></td>
                                            <td>
                                                <input type="radio" name="salle_de_bain" id="douche" value="douche"/>
                                    <?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Douche";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "shower";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Dusche";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "ducha";
                                    }
                                ?>
                               
                                            </td>
                                            <td>
                                                <input type="radio" name="salle_de_bain" id="baignoire" value="baignoire"/>
                                    <?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Baignoire";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Bath";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Badewanne";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "ba&ntilde;o";
                                    }
                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> <?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Cuisine";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Kitchen";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "K&uuml;che";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Cocina";
                                    }
                                ?></td>
                                            <td>
                                                <input type="radio" name="cuisine" id="privee" value="privee"/>
                                    <?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Priv&eacute;e";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Private";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "private";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "privado";
                                    }
                                ?>
                                            </td>
                                            <td>
                                                <input type="radio" name="cuisine" id="collective" value="collective"/>
                                    <?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Collective";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "collective";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Kollektive";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "colectivo";
                                    }
                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> <?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Chauffage";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "heating";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Heizung";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "calefacci&oacute;n";
                                    }
                                ?></td>
                                            <td>
                                                <input type="radio" name="chauffage" id="individuel" value="individuel"/><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Individuel";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Individual";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Eigen";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Individual";
                                    }
                                ?>
                                            </td>
                                            <td>
                                                <input type="radio" name="chauffage" id="collectif" value="collectif"/> <?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Collectif";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "collective";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Kollektiv";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "colectivo";
                                    }
                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> <?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Bilan &eacute;nerg&eacute;tique";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "energy balance";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Energiebilanz";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "balance de energ&iacute;a";
                                    }
                                ?>
                                                <br/>
                                            </td>
                                            <td>
                                                <select name="energetic" id="energetic">
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                </select>
                                            </td>
                                            <td>
                                                <a href="http://fr.wikipedia.org/wiki/Diagnostic_de_performance_%C3%A9nerg%C3%A9tique" target="_blank"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Qu'est ce que c'est ?";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "What is it?";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Was ist das?";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "¿Qué es?";
                                    }
                                ?></a>
                                            </td>
                                        </tr>
                                    </table>    
                                </fieldset>
                            </td>
                            <td style="vertical-align: top;">
                                <fieldset>
                                    <legend><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Pratique";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Practice";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Praxis";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "pr&aacute;ctica";
                                    }
                                ?></legend>
                                    <table>
                                        <tr>
                                            <td>
                                                <label for="type_transport"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Transports &agrave; proximit&eacute;";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Transport near";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Transport in der N&auml;he";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Transporte cerca";
                                    }
                                ?></label>
                                            </td>
                                            <td>
                                                <input type="text" name="type_transport" id="type_transport"/><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "( S&eacute;parez les noms des moyens de transport par un ; )";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "(Separate names of Conveyances by a;)";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "(Trennen Sie die Namen der Transportbehälter mit einem ;)";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "(Separe los nombres de los medios de transporte por un;)";
                                    }
                                ?>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="stations"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Stations";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Station";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Bahnhof";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Estaci&oacute;n";
                                    }
                                ?></label>
                                            </td>
                                            <td>
                                                <input type="text" name="station" id="station"/><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "( S&eacute;parez les noms des stations par un ; )";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "(Separate names of stations by a ;)";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "(Trennen Sie die Namen der Stationen mit dem ;)";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "(Separe los nombres de las estaciones por un ;)";
                                    }
                                ?>
                                     
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Charges incluses";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Charges included";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Nebenkosten inbegriffen";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Gastos incluidos";
                                    }
                                ?></td>
                                            <td>
                                                <input type="checkbox" name="eau" id="eau" value="eau" /><label for="eau"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Eau";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Water";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Wasser";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Aqua";
                                    }
                                ?></label>
                                                <input type="checkbox" name="electricite" value="electricite" id="electricite"/><label for="electricite"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "&Eacute;lectricit&eacute;";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Electricity";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Strom";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "electricidad";
                                    }
                                ?></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Disponibilit&eacute;s m&eacute;dia";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Media Availability";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Medien Verfügbarkeit";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "disponibilidad de medios";
                                    }
                                ?></td>
                                            <td>
                                                <input type="checkbox" name="prise_internet" id="prise_internet"/><label for="prise_internet"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Prise Internet";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Internet connection";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Interent-Verbindung";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Conexi&oacute; a Internet";
                                    }
                                ?></label>
                                                <input type="checkbox" name="wi-fi" id="wi-fi"/><label for="wi-fi"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Wi-fi";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "wi-fi";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Wi-fi";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "wifi";
                                    }
                                ?></label>
                                                <input type="checkbox" name="prise_telephone" id="prise_telephone"/><label for="prise_telephone"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Prise t&eacute;l&eacute;phone";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "phone jack";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Telefon-Buchse";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Toma de tel&eacute;fono";
                                    }
                                ?></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                        <center>
                                            <a href="##" 
                                               id="moreDetails" 
                                               onMouseOver="document.getElementById('moreDetails').style.color='blue'"
                                               onMouseOut="document.getElementById('moreDetails').style.color='brown'"
                                               onClick="$('#precisions').slideToggle();">
                                                <strong><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Plus de précisions sur votre annonce ?";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Details on your ad ?";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Details zu Ihrer Anzeige?";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "M&aacute;s detalles en su anuncio?";
                                    }
                                ?></strong>
                                            </a>
                                        </center>
                                        </td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div id="precisions" style="display:none">
                                    <fieldset>
                                        <legend>
                                           <?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Pr&eacute;cisions sur votre annonce";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Details on your ad ";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Details Ihrer Anzeige";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Detalles del anuncio";
                                    }
                                ?> 
                                        </legend>
                                        <table>
                                            <tr>
                                                <td>
                                                     <?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Les plus";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "The most ";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "die meisten";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Los m&aacute;s";
                                    }
                                ?> 
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="colocation_acceptee" id="colocation_acceptee"/><label for="colocation_acceptee"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Colocation accept&eacute;e";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Accepted co-rental";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "akzeptiert Wohngemeinschaft";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Compartida acceptado";
                                                    }
                                                    ?></label>
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="cuisine_equipee" id="cuisine_equipee"/><label for="cuisine_equipee"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Cuisine équipée";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Fully equipped kitchen";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "ausgestattete K&uuml;che";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "cocina totalmente equipada";
                                                    }
                                                    ?></label>            
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="balcon_terasse" id="balcon_terasse"/><label for="balcon_terasse"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Balcon, terrasse";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Balcony, terrace";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Balkon, Terrasse";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Balc&oacute;n, terraza";
                                                    }
                                                    ?></label>
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="piscine" id="piscine"/><label for="piscine"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Piscine";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Swimming pool";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Schwimmbad";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Piscina";
                                                    }
                                                    ?></label><br/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   <?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Accessibilit&eacute;s et services";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Accessibility and services";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Zug&auml;nglichkeit und Leistungen";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "La accesibilidad y los servicios";
                                                    }
                                                    ?> 
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="acces_handicape" id="acces_handicape"/><label for="acces_handicape"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Accès handicapé";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Disabled access";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Zugang f&uuml;r Behinderten";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "acceso par discapacitados";
                                                    }
                                                    ?></label>
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="interphone" id="interphone"/><label for="interphone"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Interphone";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "intercom";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Gegensprechanlage";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "intercomunicador";
                                                    }
                                                    ?></label>
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="ascenceur" id="ascenceur"/><label for="ascenceur"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Ascenseur";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Lift";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Aufzug";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Leventar";
                                                    }
                                                    ?></label>
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="garage_parking" id="garage_parking"/><label for="garage_parking"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Garage, Parking";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Car park";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Garage, Parkplatz";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Garaje, parking";
                                                    }
                                                    ?></label>
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="gardien_veilleur_de_nuit" id="gardien_veilleur_de_nuit"/><label for="gardien_veilleur_de_nuit"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Gardien";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "guardian";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Hausmeister";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Tutor";
                                                    }
                                                    ?></label>
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="lingerie" id="lingerie"/><label for="lingerie"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Buanderie";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "utility room";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Waschraum";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Trastero";
                                                    }
                                                    ?></label>
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top;">
                                <fieldset>
                                    <legend>
                                        <?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Commentaires";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Comments";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Kommentare";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "comentarios";
                                                    }
                                                    ?>
                                    </legend>
                                    <textarea name="commentaire" id="commentaire" placeholder="<?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Ajoutez des commentaires sur le logement, par exemple : vue, orientation ...";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Add comments on housing, for example : view, orientation ...";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Hinzufügen von Kommentaren auf Gehäuse, zum Beispiel Ansicht, Orientierung ...";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "A&ntilde;adir comentarios en la vivienda, por ejemplo : el visto, la orientación...";
                                                    }
                                                    ?>" style="width:355px; height:100px;"></textarea>
                                </fieldset>
                            </td>
                            <td style="vertical-align:top;">
                                <fieldset id="ajoutphoto">
                                    <legend><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Photo";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Picture";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Foto";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Foto";
                                                    }
                                                    ?></legend>
                                    <center>
                                        <span id="champPhoto1" >
                                            <label for="inputPhoto1" ><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Photo 1";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Picture 1";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Foto 1";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Foto 1";
                                                    }
                                                    ?></label>
                                            <input type="file" name="inputPhoto1" id="inputPhoto1" />
                                            <br/><br/>
                                        </span>
                                        <span id="champPhoto2" style="display: none" >
                                            <label for="inputPhoto2" ><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Photo 2";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Picture 2";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Foto 2";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Foto 2";
                                                    }
                                                    ?></label>
                                            <input type="file" name="inputPhoto2" id="inputPhoto2" />
                                            <br/><br/>
                                        </span>
                                        <span id="champPhoto3" style="display: none" >
                                            <label for="inputPhoto3" ><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Photo 3";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Picture 3";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Foto 3";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Foto 3";
                                                    }
                                                    ?></label>
                                            <input type="file" name="inputPhoto3" id="inputPhoto3" />
                                            <br/><br/>
                                        </span>
                                        <span id="champPhoto4" style="display: none" >
                                            <label for="inputPhoto4" ><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Photo 4";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Picture 4";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Foto 4";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Foto 4";
                                                    }
                                                    ?></label>
                                            <input type="file" name="inputPhoto4" id="inputPhoto4" />
                                            <br/><br/>
                                        </span>
                                        <span id="champPhoto5" style="display: none" >
                                            <label for="inputPhoto5" ><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Photo 5";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Picture 5";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Foto 5";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Foto 5";
                                                    }
                                                    ?></label>
                                            <input type="file" name="inputPhoto5" id="inputPhoto5" />
                                            <br/><br/>
                                        </span>
                                        <input type="button" value="<?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Ajouter une photo";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Add a picture";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "ein Foto hinzuf&uuml;gen";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "A&ntilde;adir una foto";
                                                    }
                                                    ?>" onclick="fetchImg();" />
                                    </center>
                                </fieldset>
                            </td>
                        </tr>
                    </table>
                    <center>
                        <br/>
                        <input type="submit" name="envoyer" id="envoyer" value="<?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Envoyer";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Send";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "schicken";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "enviar";
                                                    }
                                                    ?>"/>
                    </center> 
                </form>
            </fieldset>
        </div>
    <?php }
    ?>
</div>
