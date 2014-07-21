<script src="webroot/js/getCaptcha.js" ></script>
<script type="text/javascript" src="webroot/js/inscription.js" ></script>
<div id="body">
    <div id="inscription">
        <form method="post" enctype="multipart/form-data" id="inscriptionForm" action="index.php?page=traitementInscription">
            <fieldset>
                <legend> <?php
if ($_SESSION['langue'] == "fr") {
    echo "Informations de connexion";
} elseif ($_SESSION['langue'] == "en") {
    echo "Log in informations";
} elseif ($_SESSION['langue'] == "de") {
    echo "Verbindunginformation";
} elseif ($_SESSION['langue'] == "es") {
    echo "Informaci&oacute;s de conexi&oacute;n ";
}
?></legend>
                <table>
                    <tr>
                        <td>
                            <label for="identifiant" ><?php
                    if ($_SESSION['langue'] == "fr") {
                        echo "Identifiant";
                    } elseif ($_SESSION['langue'] == "en") {
                        echo "Login";
                    } elseif ($_SESSION['langue'] == "de") {
                        echo "Login";
                    } elseif ($_SESSION['langue'] == "es") {
                        echo "Identificador";
                    }
?></label>
                        </td>
                        <td>
                            <input id="identifiant" name="identifiant" type="text" required="required" onkeyup="checkPseudo(this.value);validForm()" />
                        </td>
                        <td colspan="2" id="ajaxLogin" >

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="pwd1" ><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Mot de passe";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "password";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Passwort";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Contrase&ntilde;a";
                                }
?></label>
                        </td>
                        <td>
                            <input id="pwd1" name="pwd1" type="password" required="required" onkeyup="checkPwd(this.value,pwd2.value);validForm()" />
                        </td>
                        <td>
                            <label for="pwd2" ><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Confirmation mot de passe";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Confirm password";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Best&auml;tigung Passwort";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Confirmaci&oacute; de la contrase&ntilde;a";
                                }
?></label>
                        </td>
                        <td>
                            <input id="pwd2" name="pwd2" type="password" required="required" onkeyup="checkPwd(this.value,pwd1.value);validForm()" />
                        </td>
                        <td id="ajaxPwd" >

                        </td>
                    </tr>
                </table>
            </fieldset>
            <fieldset>
                <legend><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "informations personelles";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Personal informations";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Persönliche Information";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Informaci&oacute;s personales";
                                }
?></legend>
                <table>
                    <tr>
                        <td>
                            <input type="radio" name="type" id="Mlle" value="Mlle" />
                            <label for="Mlle" ><?php
                    if ($_SESSION['langue'] == "fr") {
                        echo "Mademoiselle";
                    } elseif ($_SESSION['langue'] == "en") {
                        echo "Mrs.";
                    } elseif ($_SESSION['langue'] == "de") {
                        echo "Fraulein";
                    } elseif ($_SESSION['langue'] == "es") {
                        echo "Se&ntilde;orita";
                    }
?></label>
                        </td>
                        <td>
                            <input type="radio" name="type" id="Mme" value="Mme"  checked="checked" />
                            <label for="Mme" ><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Madame";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Mrs.";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Frau";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Sra";
                                }
?></label>
                        </td>
                        <td>
                            <input type="radio" name="type" id="Mr" value="Mr" />
                            <label for="Mr" ><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Monsieur";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Sir";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Herr";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Se&ntilde;or";
                                }
?></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="lastName" ><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Nom";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Last name";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Name";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Apellido";
                                }
?></label>
                        </td>
                        <td>
                            <input id="lastName" name="lastName" type="text" required="required" onkeyup="checkVoid();validForm();" />
                        </td>
                        <td>
                            <label for="firstName" ><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Pr&eacute;nom";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "First name";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Vorname";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Nombre";
                                }
?></label>
                        </td>
                        <td>
                            <input id="firstName" name="firstName" type="text" required="required" onkeyup="checkVoid();validForm();" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nationality"><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Votre nationalit&eacute;";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Your nationality";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Ihre nationalit&auml;t";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Su nacionalidad";
                                }
?></label>
                        </td>
                        <td>
                            <select name="nationality" id="nationality">

                                <option value='bielorusse'>&Bcy;enapycb</option>
                                <option value='belge'>Belge</option>
                                <option value='bosnienne'>Bosnian</option>
                                <option value='bulgare'>Bulgarian</option>
                                <option value='tcheque'>&ccaron;esk&yacute;</option>
                                <option value='serbe'>Cp&pcy;c&kappav;n</option>
                                <option value='danoise'>Danske</option>
                                <option value='allemande'>Deutsch</option>
                                <option value='estonienne'>Eesti</option>
                                <option value='anglaise'>English</option>
                                <option value='grecque'>&epsilon;&lambda;&lambda;&nu;vik&alpha;</option>
                                <option value='française'selected="selected">Fran&ccedil;aise</option>
                                <option value="croate">Hrvatski</option>
                                <option value='chypriote'>K&uacute;&pi;&rho;o&sigmaf;</option>
                                <option value='italienne'>Italiano</option>
                                <option value='irlandaise'>Irish</option>
                                <option value='lettonne'>Latvijas</option>
                                <option value='lituanienne'>Lituanian</option>
                                <option value="luxembourgeoise">Luxembourgeois</option>
                                <option value='hongroise'>Magyar</option>
                                <option value="macédonienne">Ma&kappav;e&aogon;ohc&kappav;n</option>
                                <option value='maltaise'>Maltese</option>
                                <option value='moldave'>Moldava</option>
                                <option value='monténegrine'>Montenegrin</option>
                                <option value='autriche'>&Ouml;sterreicher</option>
                                <option value='néerlandais'>Nederlands</option>
                                <option value="norvegienne">Norske</option>
                                <option value='polonaise'>Polski</option>
                                <option value='portugaise'>Portugu&ecirc;s</option>
                                <option value="russe">Pycc&kcy;n&ncaron;</option>
                                <option value='roumaine'>Rom&acirc;n</option>
                                <option value='suisse'>Schweizerisch</option>
                                <option value='slovaque'>Slovensk&yacute;ch</option>
                                <option value='finlandaise'>Suomalainen</option>
                                <option value='slovenienne'>Slovenski</option>
                                <option value='suedoise'>Svenska</option>
                                <option value='ukrainien'>Y&kappav;pa&iuml;hcb&kappav;n&ncaron;</option>
                            </select>
                        </td> 
                        <td>
                            <?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "  Date de naissance ";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Birthdate ";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Geburtsdatum";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Fecha de nacimiento ";
                                    }
                                    ?>
                        </td>
                        <td>
                            <select name='jour' id='jour' required="required" >
                                <?php
                                $j = 1;
                                while ($j < 32) {
                                    echo "<option value=$j>$j</option>";
                                    $j++;
                                }
                                ?>
                            </select>
                            <label for="mois"> </label>
                            <select name='mois' id='mois' required="required" >
                                <option value="01"><?php
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
                                <option value="02"><?php
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
                                <option value="03"><?php
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
                                <option value="04"><?php
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
                                <option value="05"><?php
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
                                <option value="06"><?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Juin";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "June";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Juni";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Junio";
                                    }
                                ?></option>
                                <option value="07"><?php
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
                                <option value="08"><?php
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
                                <option value="09"><?php
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
                            <label for="annee"> </label>
                            <select name='annee' id='annee' required="required" >
                                <?php
                                $a = 1930;
                                while ($a < 2010) {
                                    echo "<option value=$a>$a</option>";
                                    $a++;
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="etablissement" ><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Etablissement";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Institution";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "gr&uuml;ndung";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Establecimiento";
                                }
                                ?></label>
                        </td>
                        <td>
                            <input type="text" name="etablissement" id="etablissement" onkeyup="checkVoid();validForm();" />
                        </td>
                        <td colspan="2" id="ajaxForm">

                        </td>
                    <tr/>
                    <tr>
                        <td>
                            <label for="adresse_etablissement" ><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Adresse de l'établissement";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Adress of the institution";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Anschrift des Unternehmens";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Direcci&oacute;n del establecimiento";
                                }
                                ?></label>
                        </td>
                        <td colspan="2">
                            <input type="text" name="adresse_etablissement" id="adresse_etablissement" onkeyup="checkVoid();validForm();"
                                   placeholder="ex : 28 rue Notre Dame des Champs, 75006, Paris, France"
                                   style="width: 375px;"/>
                        </td>
                        <td colspan="2" id="ajaxForm">

                        </td>
                    </tr>
                    <tr>
                        <td><label for="mail1" ><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Adresse e-mail";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "E-mail address";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "E-mail Adresse";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "E-mail";
                                }
                                ?></label></td>
                        <td><input type="email" name="mail1" id="mail1" required="required" onkeyup="checkMail(this.value,mail2.value);validForm()" /></td>
                        <td><label for="mail2" ><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Confirmation adresse e-mail";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Confirmation E-mail address";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Best&auml;tigung E-mail Adresse";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Confirmaci&oacute;n e-mail";
                                }
                                ?></label></td>
                        <td><input type="email" name="mail2" id="mail2" required="required" onkeyup="checkMail(mail1.value,this.value);validForm()" /></td>
                        <td colspan="2" id="ajaxMail"></td>
                    </tr>
                </table>
            </fieldset>
            <fieldset>
                <legend><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "S&eacute;curit&eacute;";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Security";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Sicherheit";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Seguridad";
                                }
                                ?></legend>
                <table>
                    <tr>
                        <td>
                            <label for="Code" ><?php
                    if ($_SESSION['langue'] == "fr") {
                        echo "Code";
                    } elseif ($_SESSION['langue'] == "en") {
                        echo "Code";
                    } elseif ($_SESSION['langue'] == "de") {
                        echo "Code";
                    } elseif ($_SESSION['langue'] == "es") {
                        echo "C&oacute;digo";
                    }
                                ?></label>
                        </td>
                        <td>
                            <div id="txtHint"></div>
                        </td>
                        <td>
                            <input type="text" name="captcha" id="Code" />
                        </td>
                    </tr>
                </table>
            </fieldset>
            <center>
                <input type="checkbox" value="1" name="condition" required="required" id="condition" onclick="checkCondition();validForm()" />
                <label for="condition"><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "J'accepte les conditions g&eacute;n&eacute;rales d'utilisation";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "I accept the Terms of Use";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Ich akzeptiere die Nutzungsbedingungen";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Acepto las condiciones de uso";
                                }
                                ?>(  <a href="index.php?page=mentionslegales" target="_blank" ><?php
                    if ($_SESSION['langue'] == "fr") {
                        echo "lire les conditions g&eacute;n&eacute;rales d'utilistation";
                    } elseif ($_SESSION['langue'] == "en") {
                        echo "Read the Terms of Use";
                    } elseif ($_SESSION['langue'] == "de") {
                        echo "Lesen Sie die Nutzungsbedingungen";
                    } elseif ($_SESSION['langue'] == "es") {
                        echo "Lea los términos de uso";
                    }
                                ?></a> ) </label>
                <br /><br/>
                <input type="submit" value="<?php
                        if ($_SESSION['langue'] == "fr") {
                            echo "S'inscrire";
                        } elseif ($_SESSION['langue'] == "en") {
                            echo "Register";
                        } elseif ($_SESSION['langue'] == "de") {
                            echo "registrieren";
                        } elseif ($_SESSION['langue'] == "es") {
                            echo "registro";
                        }
                                ?>" id="submit" disabled="disabled" /> <input type="reset" value="<?php
                       if ($_SESSION['langue'] == "fr") {
                           echo "Effacer";
                       } elseif ($_SESSION['langue'] == "en") {
                           echo "Erase";
                       } elseif ($_SESSION['langue'] == "de") {
                           echo "l&ouml;schen";
                       } elseif ($_SESSION['langue'] == "es") {
                           echo "Borrar";
                       }
                                ?>" />
            </center>
        </form>
    </div>
</div>
