<script type="text/javascript" src="webroot/js/jquery.scrollTo.js"></script>
<script type="text/javascript" src="webroot/js/accueilRecherche.js" ></script>
<script type="text/javascript" src="webroot/js/recherche.js" ></script>
<script type="text/javascript" src="webroot/js/jquery.autocomplete.js"></script>
<div id="search" >
    <table>
        <tr>
            <td class="searchButton" onmouseover="rechercheRapideIn()" onmouseout="rechercheRapideOut()" onclick="rechercheRapideClick()" id="rechercheRapide" >
                <?php
                if ($_SESSION['langue'] == "fr") {
                    echo "Recherche Rapide";
                } elseif ($_SESSION['langue'] == "en") {
                    echo "Quick search";
                } elseif ($_SESSION['langue'] == "de") {
                    echo "Schnelle Suche";
                } elseif ($_SESSION['langue'] == "es") {
                    echo "B&uacute;squeda r&aacute;pida";
                }
                ?>
            </td>
            <td rowspan="3" style=";padding-left: 5%;width: 300px; " >
                <div id="rechercheRap">
                    <h3><?php
                if ($_SESSION['langue'] == "fr") {
                    echo "Recherche Rapide";
                } elseif ($_SESSION['langue'] == "en") {
                    echo "Quick search";
                } elseif ($_SESSION['langue'] == "de") {
                    echo "Schnelle Suche";
                } elseif ($_SESSION['langue'] == "es") {
                    echo "B&uacute;squeda r&aacute;pida";
                }
                ?></h3>
                    <form method="post" action="index.php?page=resultatRecherche" >
                        <label for="localisation" ><?php
                        if ($_SESSION['langue'] == "fr") {
                            echo "Localisation";
                        } elseif ($_SESSION['langue'] == "en") {
                            echo "Location";
                        } elseif ($_SESSION['langue'] == "de") {
                            echo "Lage";
                        } elseif ($_SESSION['langue'] == "es") {
                            echo "Ubicaci&oacute;n";
                        }
                ?></label><br/>
                        <input type="hidden" name="typeRecherche" value="rechercheRapide" />
                        <input type="text" id="local" name="local" style="width: 300px;height: 30px;" onkeyup="liste();" />
                        <p>
                            <?php
                            if ($_SESSION['langue'] == "fr") {
                                echo "Exemple :";
                            } elseif ($_SESSION['langue'] == "en") {
                                echo "Example :";
                            } elseif ($_SESSION['langue'] == "de") {
                                echo "Beispiel :";
                            } elseif ($_SESSION['langue'] == "es") {
                                echo "Ejemplo :";
                            }
                            ?> Marseille, 13000, 234 rue du val, ...
                        </p>
                        <center>
                            <input type="submit" class="topMenuButton" value="<?php
                            if ($_SESSION['langue'] == "fr") {
                                echo "Rechercher";
                            } elseif ($_SESSION['langue'] == "en") {
                                echo "Search";
                            } elseif ($_SESSION['langue'] == "de") {
                                echo "Suche";
                            } elseif ($_SESSION['langue'] == "es") {
                                echo "Buscar";
                            }
                            ?>" />
                        </center>
                    </form>
                </div>
                <div id="rechercheG" style="display: none;" >
                    <h3><?php
                                   if ($_SESSION['langue'] == "fr") {
                                       echo "Recherche G&eacute;olocalis&eacute;e";
                                   } elseif ($_SESSION['langue'] == "en") {
                                       echo "Search geotagged";
                                   } elseif ($_SESSION['langue'] == "de") {
                                       echo "Suche géo-lokalisiert";
                                   } elseif ($_SESSION['langue'] == "es") {
                                       echo "Buscar con etiqueta geogr&aacute;fica";
                                   }
                            ?></h3>
                    <form method="post" action="index.php?page=rechercheGeo" >
                        <label for="localisation" ><?php
                        if ($_SESSION['langue'] == "fr") {
                            echo "Localisation";
                        } elseif ($_SESSION['langue'] == "en") {
                            echo "Location";
                        } elseif ($_SESSION['langue'] == "de") {
                            echo "Lage";
                        } elseif ($_SESSION['langue'] == "es") {
                            echo "Ubicaci&oacute;n";
                        }
                            ?></label><br/>
                        <input type="text" id="local" name="local" style="width: 300px;height: 30px;" onkeyup="liste();" placeholder="<?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Vous pouvez &eacute;crire l'adresse de votre &eacute;tablissement";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "You can write the adress of your school here";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Sie k&ouml;nnen schreiben die Adresse Ihrer Institution";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Se puede escribir el direcci&oacute;n de su escuela";
                                }
                                ?>" />
                        <p>
                            <?php
                            if ($_SESSION['langue'] == "fr") {
                                echo "Exemple :";
                            } elseif ($_SESSION['langue'] == "en") {
                                echo "Example :";
                            } elseif ($_SESSION['langue'] == "de") {
                                echo "Beispiel :";
                            } elseif ($_SESSION['langue'] == "es") {
                                echo "Ejemplo :";
                            }
                            ?> Marseille, 13000, 234 rue du val, ...
                        </p>
                        <center>
                            <input type="submit" class="topMenuButton" value="<?php
                            if ($_SESSION['langue'] == "fr") {
                                echo "Rechercher";
                            } elseif ($_SESSION['langue'] == "en") {
                                echo "Search";
                            } elseif ($_SESSION['langue'] == "de") {
                                echo "Suche";
                            } elseif ($_SESSION['langue'] == "es") {
                                echo "Buscar";
                            }
                            ?>" />
                        </center>
                    </form>
                </div>
            </td>
            <td rowspan="3" style="padding-left:100px;;width: 500px;" >
                <div id="debug"></div>

                <div id="slider">

                    <div id="mask-gallery">
                        <ul id="gallery">
                            <?php
                            foreach ($logements as $value) {
                                ?>
                                <li><a href="index.php?page=pageLogementFinale&amp;id=<?php echo $value['id'] ?>"><img src="<?php echo "webroot/img/logements/" . getImage($value['id']); ?>" width="350" height="250" alt=""/></a></li>
                                <?php
                            }
                            ?>
                        </ul>

                    </div>

                    <div id="mask-excerpt">
                        <ul id="excerpt">
                            <?php
                            foreach ($logements as $value) {
                                ?>
                                <li><?php echo $value['code_postal'] . "<br/>" . $value['ville'] . "<br/>" . $value['adresse']; ?></li>
                                <?php
                            }
                            ?>
                        </ul>

                    </div>

                </div>

                <div id="buttons">
                    <a href="#" id="btn-prev"><img alt="prev" src="webroot/img/prev.png" height="30px" width="30px" /></a> 
                    <a href="#" id="btn-pause"><img alt="pause" src="webroot/img/pause.png" height="30px" width="30px" /></a> 
                    <a href="#" id="btn-play"><img alt="play" src="webroot/img/play.png" height="30px" width="30px" /></a> 
                    <a href="#" id="btn-next"><img alt="next" src="webroot/img/next.png" height="30px" width="30px" /></a>
                </div>

                <div class="clear"></div>
            </td>
        </tr>
        <tr>
            <td class="searchButton" onmouseover="rechercheGeoIn()" onmouseout="rechercheGeoOut()" onclick="rechercheGeoClick()" id="rechercheGeo" >
                <?php
                if ($_SESSION['langue'] == "fr") {
                    echo "Recherche G&eacute;olocalis&eacute;e";
                } elseif ($_SESSION['langue'] == "en") {
                    echo "Geotagged Search";
                } elseif ($_SESSION['langue'] == "de") {
                    echo "Géo-lokalisiert Suche ";
                } elseif ($_SESSION['langue'] == "es") {
                    echo "Buscar con etiqueta geogr&aacute;fica";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="searchButton" onmouseover="rechercheAvIn()" onmouseout="rechercheAvOut()" onclick="rechercheAvClick()" id="rechercheAv" > 
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
            </td>
        </tr>
    </table>
</div>

