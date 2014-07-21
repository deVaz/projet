<script type="text/javascript" src="webroot/js/recherche.js" ></script>
<script type="text/javascript" src="webroot/js/jquery.autocomplete.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="webroot/js/map.js" ></script>
<div id="advancedSearch">
    <div id="body">
        <center>

            <table>
                <tr>
                    <td>
                        <fieldset>
                            <legend>
                                <?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Recherche avanc&eacute;e";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Advanced search";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "fortschrittliche Suche";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Busqueda avanzada";
                                }
                                ?>
                            </legend>
                            <form method="post" action="index.php?page=resultatRecherche" >
                                <input type="hidden" name="typeRecherche" value="rechercheAvancee" />
                                <fieldset>
                                    <legend> <?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Localisation";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Location";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Lage";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Ubicac&iacute;on";
                                }
                                ?>
                                    </legend>

                                    <p>
                                        <?php
                                        if ($_SESSION['langue'] == "fr") {
                                            echo "Indiquez un d&eacute;partement, un code postal, une ville, une r&eacute;gion ou un pays, etc.<br />
                          Vous pouvez indiquer autant de lieux que vous le souhaitez.";
                                        } elseif ($_SESSION['langue'] == "en") {
                                            echo "Specifie a department, a zip code, a town, a country side or a country.<br/>
                        You can specify as many places as you want.";
                                        } elseif ($_SESSION['langue'] == "de") {
                                            echo "Geben Sie eine Abteilung, Postleitzahl, Stadt, Region oder Land, etc.. <br />
                                         Sie können festlegen, wie viele Plätze, wie Sie wollen.";
                                        } elseif ($_SESSION['langue'] == "es") {
                                            echo "Especificar un departamento, c&oacute;digo postal, ciudad, regi&oacute;n o país, etc. <br />
                                         Puede especificar tantos lugares como quieras.";
                                        }
                                        ?>
                                    </p>
                                    <input id="local" type ="text" name="local" style="height:40px;width:80%;" onkeyup="validForm();liste();codeAddress();" onchange="codeAddress();" /><br/>
                                    <input  id="boutonCarte" type="button" value="<?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Masquer la carte";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Hide map";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Karte verbergen";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Ocultar map";
                                                    }
                                                    ?>" onclick="codeAddress();fetchMap();" />
                                    <br/><br/>
                                    <center>  
                                        <div id="carte" class="mapRecherche" ></div>
                                    </center>
                                </fieldset>  
                                <fieldset>
                                    <legend><?php
                                        if ($_SESSION['langue'] == "fr") {
                                            echo "Type de bien ";
                                        } elseif ($_SESSION['langue'] == "en") {
                                            echo "Type of housing";
                                        } elseif ($_SESSION['langue'] == "de") {
                                            echo "Art der Unterbringung";
                                        } elseif ($_SESSION['langue'] == "es") {
                                            echo "Typo de vivienda";
                                        }
                                        ?></legend>
                                    <table>
                                        <tr>
                                            <td>
                                                <input checked="checked" type="radio" name="bien" value="location" id="bien1" onclick="validForm()" />            
                                            </td>
                                            <td>
                                                <label for="bien1"> 
                                                <?php
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
                                                <input type="radio"  name="bien" value="colocation" id="bien2" onclick="validForm()" />        
                                            </td>
                                            <td>
                                                <label for="bien2" >
                                                    <?php
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
                                            <td>
                                                <input type="radio" name="bien"  value="echange" id="bien3" onclick="validForm()" />        
                                            </td>
                                            <td>
                                                <label for="bien3" ><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "&Eacutechange";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Exchange";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Austausch";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Cambio";
                                                    }
                                                    ?></label>         
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input checked="checked" type="radio" name="type" value="chambre" id="type1" onclick="validForm()" />            
                                            </td>
                                            <td>
                                                <label for="type1"><?php
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
                                                <input type="radio" name="type" value="studio" id="type2" onclick="validForm()" />            
                                            </td>
                                            <td>
                                                <label for="type2"><?php
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
                                                <input type="radio" name="type" value="appartement" id="type3" onclick="validForm()" />            
                                            </td>
                                            <td>
                                                <label for="type3">
                                                    <?php
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
                                                <input type="radio" name="type" value="pavillon" id="type4" onclick="validForm()" />                                           
                                            </td>
                                            <td>
                                                <label for="type4"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Pavillon";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "House";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "H&auml;uschen";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "casa";
                                                    }
                                                    ?></label>
                                            </td>
                                        </tr>
                                    </table>    
                                </fieldset>
                                <fieldset>
                                    <legend><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Prix par mois";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Price per month";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Preis pro Monat";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Precio por mes";
                                                    }
                                                    ?></legend>
                                    <table>
                                        <tr>
                                            <td>
                                                <label for="min"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Entre";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Between";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Zwischen";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Entre";
                                                    }
                                                    ?></label>            
                                            </td>
                                            <td>
                                                <input style="width:50px;" type="text" id="minprix" name="minprix" onkeyup="validForm()" />
                                            </td>
                                            <td><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "et";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "and";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "und";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "y";
                                                    }
                                                    ?>
                                            </td>
                                            <td>
                                                <input style="width:50px;" type="text" id="maxprix" name="maxprix" onkeyup="validForm()" />
                                            </td>
                                            <td>
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
                                    </table>
                                </fieldset>
                                <fieldset>
                                    <legend><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Dimensions";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Dimension";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Gr&ouml;&;e";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Dimensiones";
                                                    }
                                                    ?></legend>
                                    <table>
                                        <tr>
                                            <td><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Nombre de pièces";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Number of rooms";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Anzahl der Zminimumimmer";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "N&uacute;mero de habitaciones";
                                                    }
                                                    ?>      
                                            </td>
                                            <td>
                                                <label for="minp"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Minimum :";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Minimum :";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Minimum :";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "M&iacute;nimo :";
                                                    }
                                                    ?> </label>            
                                            </td>
                                            <td>
                                                <input style="width:50px;" type="int" id="minpiece" name="minpiece" onkeyup="validForm()" />            
                                            </td>
                                            <td>
                                                <label for="min"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Maximum :";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Maximum :";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Maximum :";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "M&aacute;ximo :";
                                                    }
                                                    ?> </label>           
                                            </td>
                                            <td>
                                                <input style="width:50px;" type="int" id="maxpiece" name="maxpiece" onkeyup="validForm()" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Nombre de chambres";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Number of bedrooms";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Anzahl der zimmer";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "N&uacute;mero de habitaciones";
                                                    }
                                                    ?>
                                            </td>
                                            <td>
                                                <label for="minc"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Minimum :";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Minimum :";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Minimum :";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "M&iacute;nimo :";
                                                    }
                                                    ?></label>            
                                            </td>
                                            <td>
                                                <input style="width:50px;" type="text" id="minchambre" name="minchambre" onkeyup="validForm()" />            
                                            </td>
                                            <td>
                                                <label for="min"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Maximum :";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Maximum :";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Maximum :";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "M&aacute;ximo :";
                                                    }
                                                    ?> </label>           
                                            </td>
                                            <td>
                                                <input style="width:50px;" type="text" id="maxchambre" name="maxchambre" onkeyup="validForm()" />           
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Surface";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Area";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Oberfl&auml;che";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "&Aacute;rea :";
                                                    }
                                                    ?>    
                                            </td>
                                            <td>
                                                <label for="min"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Minimum :";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Minimum :";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Minimum :";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "M&iacute;nimo :";
                                                    }
                                                    ?></label>
                                            </td>
                                            <td>
                                                <input style="width:50px;" type="text" id="mins" name="mins" onkeyup="validForm()" />m<sup>2</sup>            
                                            </td>
                                            <td>
                                                <label for="minprix"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Maximum :";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Maximum :";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Maximum :";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "M&aacute;ximo :";
                                                    }
                                                    ?> </label>
                                            </td>
                                            <td>
                                                <input style="width:50px;" type="text" id="maxs" name="maxs" onkeyup="validForm()" />m<sup>2</sup>
                                            </td>
                                        </tr>
                                    </table>                           
                                </fieldset>
                                <fieldset>
                                    <legend><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo " M&eacute;tro / RER / tramway / Bus (&Icirc;le-de-France uniquement)";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Underground / RER / tramway / Bus / (Only in &Icirc;le-de-France";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "U-Bahn / RER / Stra&szlig;enbahn / Bus (nur in Ile-de-France)";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "metro / RER / tranv&iacute;a / autob&uacute;s (s&oacute;lo en Ile-de-France)";
                                                    }
                                                    ?></legend>
                                    <p><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Vous pouvez indiquer des lignes ou des stations de m&eacute;tro, RER et tramway du r&eacute;seau RATP d'&Icirc;le-de-France.";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "You can specify metro, RER, tramway and bus lines or stops of the RATP network";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Sie k&ouml;nnen Linien oder Haltestellen U-Bahn / RER / Stra&szlig;enbahn / Bus-Netz RATP angeben";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Puede especificar las l&iacute;neas o paradas de metro / RER / tranv&iacute;a / autob&uacute;s RATP red";
                                                    }
                                                    ?> </p>
                                    <input type ="text" nom="trans" style="height:40px;width:500px;"/><br />
                                </fieldset>                
                                <fieldset>
                                    <legend><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Options";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "optionsascenceur";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Optionen";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Optiones";
                                                    }
                                                    ?></legend>
                                    <table>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="ascenseur" id="ascenseur" /> <label for="ascenseur"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Ascenseur";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Lift";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Aufzug";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Leventar";
                                                    }
                                                    ?></label><br />
                                            </td>
                                            <td>
                                                <input type="checkbox" name="vide" id="vide" /> <label for="vide"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Vide";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Empty";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Leer";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Vac&iacute;o";
                                                    }
                                                    ?></label><br /> 
                                            </td>
                                            <td>
                                                <input type="checkbox" name="meuble" id="meuble" /> <label for="meuble"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Meubl&eacute;";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Furnished";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "M&ouml;bliert";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Amueblado";
                                                    }
                                                    ?></label><br /> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="plein_pied" id="pied" /> <label for="pied"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Plain pied";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Storey";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Stockwerk";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "piso";
                                                    }
                                                    ?></label><br /> 
                                            </td>
                                            <td>
                                                <input type="checkbox" name="piscine" id="piscine" /> <label for="piscine"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Piscine";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Swimming pool";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Schwimmbad";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Piscina";
                                                    }
                                                    ?></label><br /> 
                                            </td>
                                            <td>
                                                <input type="checkbox" name="balcon" id="balcon" /> <label for="balcon"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Balcon, terrasse";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Balcony, terrace";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Balkon, Terrasse";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Balc&oacute;n, terraza";
                                                    }
                                                    ?></label><br /> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="coloc" id="coloc" /> <label for="coloc"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Colocation acceptée";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Accepted co-rental";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "akzeptiert Gemeinsame";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Compartida acceptado";
                                                    }
                                                    ?></label><br /> 
                                            </td>
                                            <td>
                                                <input type="checkbox" name="handicap" id="handicap" /> <label for="handicap"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Acc&egrave;s handicap&eacute;s";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Disabled access";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Zugang f&uuml;r Behinderten";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "acceso par discapacitados";
                                                    }
                                                    ?></label><br /> 
                                            </td>
                                            <td>
                                                <input type="checkbox" name="parking" id="parking" /> <label for="parking"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Garage, Parking";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Car park";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Garage, Parkplatz";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Garaje, parking";
                                                    }
                                                    ?></label><br /> 
                                            </td>
                                        </tr> 
                                    </table>
                                </fieldset>
                                <br/>
                                <span id="activeButton" ></span><br/>
                                <input value="<?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Rechercher";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Search";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Suche";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Buscar";
                                                    }
                                                    ?>" type="submit" disabled="disabled" id="recherchebouton" />
                            </form>
                        </fieldset>
                    </td>
                    <td>
                        <div id="advancedSearchPub">

                        </div>
                    </td>
                </tr>
            </table>
        </center>
    </div>
</div>