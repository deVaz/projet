<fieldset id="modifier_votre_recherche" style="width:30%;">
    <legend><?php
        if ($_SESSION['langue'] == "fr") {
            echo "Modifier votre recherche";
        } elseif ($_SESSION['langue'] == "en") {
            echo "modify your search";
        } elseif ($_SESSION['langue'] == "de") {
            echo "&Auml;ndern Sie Ihre Suche";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Modifique su búsqueda";
        }
                ?></legend>
    <form method="post" action="index.php?page=resultatRecherche">
         <input type="hidden" name="typeRecherche" value="rechercheAvancee" />
        <table>
            <tr>
                <th><label for="local"><?php
        if ($_SESSION['langue'] == "fr") {
            echo "Localisation:";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Location:";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Lage:";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Ubicaci&oacute;n:";
        }
                ?></label></th>
                <td colspan="2"><input type="text" id="local" name="local" style="width:175px;"/></br></td>
            </tr>
            <tr><th><?php
                                        if ($_SESSION['langue'] == "fr") {
                                            echo "Type de logement ";
                                        } elseif ($_SESSION['langue'] == "en") {
                                            echo "Type of housing";
                                        } elseif ($_SESSION['langue'] == "de") {
                                            echo "Art den Wohnung";
                                        } elseif ($_SESSION['langue'] == "es") {
                                            echo "Typo de vivienda";
                                        }
                                        ?></th>
                <td><input type="radio" name="bien" value="location" id="bien1"/>
                    <label for="bien1"><?php
                                                if ($_SESSION['langue'] == "fr") {
                                                    echo "Location";
                                                } elseif ($_SESSION['langue'] == "en") {
                                                    echo "Rental";
                                                } elseif ($_SESSION['langue'] == "de") {
                                                    echo "Mieten";
                                                } elseif ($_SESSION['langue'] == "es") {
                                                    echo "Contratar";
                                                }
                                                ?></label></td>
                <td><input type="radio" name="bien" value="colocation" id="bien2"/>
                    <label for="bien2"> <?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Colocation";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Co-rental";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Gemeinsame";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Colocaci&oacute;n";
                                                    }
                                                    ?></label></td></tr>
            <tr><td></td><td colspan="3"><input type="radio" name="bien" value="echange" id="bien3"/>
                    <label for="bien3"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "&Eacutechange";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Exchange";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Austausch";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Cambio";
                                                    }
                                                    ?></label></td></tr>
            <tr><th><?php
                                        if ($_SESSION['langue'] == "fr") {
                                            echo "Type de bien ";
                                        } elseif ($_SESSION['langue'] == "en") {
                                            echo "Type of housing";
                                        } elseif ($_SESSION['langue'] == "de") {
                                            echo "Art der Wohnung";
                                        } elseif ($_SESSION['langue'] == "es") {
                                            echo "Typo de vivienda";
                                        }
                                        ?></th>
                <td><input type="radio" name="type" value="studio" id="bien4"/>
                    <label for="bien4"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Studio";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Studio flat";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Studio";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Hab";
                                                    }
                                                    ?></label></td>
                <td><input type="radio" name="type" value="appartement" id="bien5"/>
                    <label for="bien5"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Appartement";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Flat";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Wohnung";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Apartamento";
                                                    }
                                                    ?></label></td></tr>
            <tr><td></td><td><input type="radio" name="type" value="maison" id="bien5"/>
                    <label for="bien5"><?php
                                        if ($_SESSION['langue'] == "fr") {
                                            echo "Maison ";
                                        } elseif ($_SESSION['langue'] == "en") {
                                            echo "Home";
                                        } elseif ($_SESSION['langue'] == "de") {
                                            echo "Hause";
                                        } elseif ($_SESSION['langue'] == "es") {
                                            echo "Casa";
                                        }
                                        ?></label></td>
                <td><input type="radio" name="type" value="pavillon" id="bien6"/>
                    <label for="bien6"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Pavillon";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "House";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Ha&uuml;schen";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Pabell&oacute;n";
                                                    }
                                                    ?></label></td></tr>
        </table>
        <br/>
        <table>
            <tr><th><?php
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
                    <input style="width:50px;" type="text" id="min" name="minprix"/>
                </td>
                <td>
                    <?php
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
                    <input style="width:50px;" type="text" id="max" name="maxprix"/>
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
        <br/>
        <table>
            <tr><th><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Dimensions";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Dimension";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Gr&ouml;&szlig;e";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Dimensiones";
                                                    }
                                                    ?></th>
                <td>
                    <?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Nombre de pièces";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Number of rooms";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Anzahl der Zimmer";
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
                                                    ?></label>            
                </td>
                <td>
                    <input style="width:50px;" type="int" id="min" name="minpiece"/>            
                </td>
            </tr>
            <tr><td>                        
                </td>
                <td>                        
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
                    <input style="width:50px;" type="int" id="max" name="maxpiece"/>
                </td>
            </tr>
            <tr><td>                                            
                </td>
                <td>
                     <?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Nombre de chambres";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Number of bedrooms";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Anzahl der Zimmer";
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
                    <input style="width:50px;" type="text" id="min" name="minchambre"/>            
                </td>
            </tr>
            <tr>
                <td>                                            
                </td>
                <td>                                       
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
                                                    ?></label>           
                </td>
                <td>
                    <input style="width:50px;" type="text" id="max" name="maxchambre"/>           
                </td>
            </tr>
            <tr><td>                                           
                </td>
                <td>
                    <?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Surface";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Area";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Oberfl&auml;che";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "&Aacute;rea:";
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
                    <input style="width:50px;" type="text" id="min" name="mins"/>m<sup>2</sup>            
                </td>
            </tr>
            <tr>
                <td>                                           
                </td>
                <td>                                           
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
                                                    ?></label>
                </td>
                <td>
                    <input style="width:50px;" type="text" id="max" name="maxs"/>m<sup>2</sup>
                </td>
            </tr>                               
        </table>
        <br/>
        <table>
            <tr><th><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo " M&eacute;tro / RER / tramway / Bus (&Icirc;le-de-France uniquement)";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Underground / RER / tramway / Bus / (Only in &Icirc;le-de-France";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "U-Bahn / RER / Stra&szlig;enbahn / Bus (nur in Ile-de-France)";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "metro / RER / tranv&iacute;a / autob&uacute;s (s&oacute;lo en Ile-de-France)";
                                                    }
                                                    ?></th></tr>
            <tr><td><input type ="text" nom="trans" style="width:250px;"/></td></tr>              
        </table>
        <br/>
        <table>
            <tr><th><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Options";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "options";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Optionen";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Optiones";
                                                    }
                                                    ?></th>
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
                </td></tr>
            <tr><td></td><td>
                    <input type="checkbox" name="meuble" id="meuble" /> <label for="meuble"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Meubl&eacute;";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Furnished";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "M&ouml;bliert";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Amuebladoo";
                                                    }
                                                    ?></label><br /> 
                </td>


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
                </td></tr>
            <tr><td></td><td>
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
                <td></td><td>
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
                </td></tr>
            <tr><td></td><td>
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
            <tr><td colspan="3"><input type="submit" value="<?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Modifier la recherche";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Modify search";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Suche &auml;ndern";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Modificar b&uacute;squeda";
                                                    }
                                                    ?>"</td>
            <br/>
            <tr><td colspan="3"><a href="index.php?page=advancedSearch"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Nouvelle recherche avanc&eacute;e";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "New advanced search";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Neue fortschrittliche Suche";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Nueva busqueda avanzada";
                                                    }
                                                    ?></a></td>
        </table>
    </form>
</fieldset> 
