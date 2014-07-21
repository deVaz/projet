<script type="text/javascript" src="webroot/js/modifProfil.js" ></script>
<div id="body">
    <div id="profil">
        <?php if (!isset($_SESSION['id'])) { ?>
            <fieldset style="background-color: rgba(15, 146, 179, 0.5);">
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
                <p><?php
                if ($_SESSION['langue'] == "fr") {
                    echo "Vous devez &ecirc;tre identifi&eacute; pour acc&eacute;der &agrave; cette page.";
                } elseif ($_SESSION['langue'] == "en") {
                    echo "You must register to access this page.";
                } elseif ($_SESSION['langue'] == "de") {
                    echo "Sie m&uuml;ssen sich registrieren, um diese Seite zu betreten.";
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
            <div id="profilBody" >
                <center>
                    <fieldset style="background-color: rgba(15, 146, 179, 0.5);">
                        <legend><?php
        if ($_SESSION['langue'] == "fr") {
            echo "Modification du mot de passe";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Changing the password";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Ver&auml;nderung des Passworts";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Cambiar la contrase&ntilde;a";
        }
            ?></legend>
                        <form method="post" action="index.php?page=traitementModifProfil">
                            <input type="hidden" name="type" value="pwd" />
                            <table>
                                <tr>
                                    <td>
                                        <label for="oldPwd" ><?php
                        if ($_SESSION['langue'] == "fr") {
                            echo "Ancien mot de passe:";
                        } elseif ($_SESSION['langue'] == "en") {
                            echo "Previous password :";
                        } elseif ($_SESSION['langue'] == "de") {
                            echo "Altes Passwort :";
                        } elseif ($_SESSION['langue'] == "es") {
                            echo "Contrase&ntilde;a anterior :";
                        }
            ?> </label>
                                    </td>
                                    <td>
                                        <input type="password" name="oldPwd" id="oldPwd" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="newPwd1" ><?php
                                        if ($_SESSION['langue'] == "fr") {
                                            echo "Nouveau mot de passe:";
                                        } elseif ($_SESSION['langue'] == "en") {
                                            echo "New password :";
                                        } elseif ($_SESSION['langue'] == "de") {
                                            echo "Neuer Passwort :";
                                        } elseif ($_SESSION['langue'] == "es") {
                                            echo "Nuevo Contrase&ntilde;a :";
                                        }
            ?></label>
                                    </td>
                                    <td>
                                        <input type="password" name="newPwd1" id="newPwd1" onkeyup="checkPwd(this.value,newPwd2.value);validForm()"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="newPwd2" ><?php
                                        if ($_SESSION['langue'] == "fr") {
                                            echo "Confirmation du nouveau mot de passe:";
                                        } elseif ($_SESSION['langue'] == "en") {
                                            echo "Confirmation of the new password :";
                                        } elseif ($_SESSION['langue'] == "de") {
                                            echo "Neuen Passworts best&auml;tigen :";
                                        } elseif ($_SESSION['langue'] == "es") {
                                            echo "Confirmaci&oacute;n del nuevo Contrase&ntilde;a :";
                                        }
            ?></label>
                                    </td>
                                    <td>
                                        <input type="password" name="newPwd2" id="newPwd2" onkeyup="checkPwd(this.value,newPwd1.value);validForm()"/>
                                    </td>
                                    <td id="ajaxPwd" >

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" ><center><input type="submit" value="<?php
                                        if ($_SESSION['langue'] == "fr") {
                                            echo "Modifier le mot de passe";
                                        } elseif ($_SESSION['langue'] == "en") {
                                            echo "Change the password";
                                        } elseif ($_SESSION['langue'] == "de") {
                                            echo "&Auml;ndern Sie das Kennwort";
                                        } elseif ($_SESSION['langue'] == "es") {
                                            echo "Cambiar la contraseña";
                                        }
            ?>" /></center></td>
                                </tr>
                            </table>
                        </form>
                    </fieldset>
                    <fieldset style="background-color: rgba(15, 146, 179, 0.5);">
                        <legend><?php
                                                                if ($_SESSION['langue'] == "fr") {
                                                                    echo "E-mail";
                                                                } elseif ($_SESSION['langue'] == "en") {
                                                                    echo "E-mail";
                                                                } elseif ($_SESSION['langue'] == "de") {
                                                                    echo "E-mail";
                                                                } elseif ($_SESSION['langue'] == "es") {
                                                                    echo "e-mail";
                                                                }
            ?></legend>
                        <form method="post" action="index.php?page=traitementModifProfil2">
                            <table>
                                <tr>
                                    <td>
                                        <label for="mail" ><?php
                        if ($_SESSION['langue'] == "fr") {
                            echo "Nouvelle adresse e-mail";
                        } elseif ($_SESSION['langue'] == "en") {
                            echo "New E-mail address";
                        } elseif ($_SESSION['langue'] == "de") {
                            echo "Neuer E-mail";
                        } elseif ($_SESSION['langue'] == "es") {
                            echo "nuevo e-mail";
                        }
            ?></label>
                                    </td>
                                    <td>
                                        <input type="text" name="mail" id="mail" placeholder="<?php echo $fetchInfo['mail']; ?>" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" ><center><input type="submit" value="<?php
                                        if ($_SESSION['langue'] == "fr") {
                                            echo "Modifier l'adresse e-mail";
                                        } elseif ($_SESSION['langue'] == "en") {
                                            echo "Change the email address";
                                        } elseif ($_SESSION['langue'] == "de") {
                                            echo "&Auml;ndern Sie die E-mail-Adresse";
                                        } elseif ($_SESSION['langue'] == "es") {
                                            echo "Cambiar la direcci&oacute;n email";
                                        }
            ?>" /></center></td>
                                </tr>
                            </table>
                        </form>
                    </fieldset>
                    <fieldset style="background-color: rgba(15, 146, 179, 0.5);">
                        <legend><?php
                                                                if ($_SESSION['langue'] == "fr") {
                                                                    echo "&Eacute;tablissement";
                                                                } elseif ($_SESSION['langue'] == "en") {
                                                                    echo "Institution";
                                                                } elseif ($_SESSION['langue'] == "de") {
                                                                    echo "Gr&uuml;ndung";
                                                                } elseif ($_SESSION['langue'] == "es") {
                                                                    echo "establecimiento";
                                                                }
            ?></legend>
                        <form method="post" action="index.php?page=traitementModifProfil3">
                            <table>
                                <tr>
                                    <td>    
                                        <label for="etablissement">
                                            <?php
                                            if ($_SESSION['langue'] == "fr") {
                                                echo "&Eacutetablissement";
                                            } elseif ($_SESSION['langue'] == "en") {
                                                echo "Institution";
                                            } elseif ($_SESSION['langue'] == "de") {
                                                echo "Gr&uuml;ndung";
                                            } elseif ($_SESSION['langue'] == "es") {
                                                echo "Establecimiento";
                                            }
                                            ?>
                                        </label>
                                    </td>
                                    <td>
                                        <input type="text" name="etablissement" id="etablissement"/>
                                    </td><td>
                                        <label for="adresse">
                                            <?php
                                            if ($_SESSION['langue'] == "fr") {
                                                echo "Adresse";
                                            } elseif ($_SESSION['langue'] == "en") {
                                                echo "Adress";
                                            } elseif ($_SESSION['langue'] == "de") {
                                                echo "Adresse";
                                            } elseif ($_SESSION['langue'] == "es") {
                                                echo "Direcci&oacute;n";
                                            }
                                            ?>
                                        </label>
                                    </td>
                                    <td colspan="2">
                                        <input type="text" name="adresse" id="adresse" style="width:375px;"
                                               placeholder="ex : 28 rue Notre Dame des Champs, 75006, Paris, France"/>
                                    </td>
                                </tr>
                            </table>
                            <br/>
                            <input type="submit" value="<?php
                                        if ($_SESSION['langue'] == "fr") {
                                            echo "Modifier l'établissement";
                                        } elseif ($_SESSION['langue'] == "en") {
                                            echo "Change the institution";
                                        } elseif ($_SESSION['langue'] == "de") {
                                            echo "Gr&uuml;ndung bearbeiten";
                                        } elseif ($_SESSION['langue'] == "es") {
                                            echo "Cambiar el establecimiento";
                                        }
                                            ?>"/>
                        </form>
                    </fieldset>
                </center>
            </div>
        <?php } ?>
    </div>
</div>