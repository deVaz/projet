<script src="webroot/js/messagerie.js"></script>
<div id="body">
    <?php if (isset($_SESSION['id'])) { ?>
        <div id="menuMessagerie">
            <h3>Menu</h3>
            <ul>
                <a href="#" onclick="messagerie('nouveau');" ><li><?php
    if ($_SESSION['langue'] == "fr") {
        echo "Nouveau message";
    } elseif ($_SESSION['langue'] == "en") {
        echo "New message";
    } elseif ($_SESSION['langue'] == "de") {
        echo "Neue  nachricht";
    } elseif ($_SESSION['langue'] == "es") {
        echo "Nuevo messaje";
    }
        ?></li></a>
                <a href="#" onclick="messagerie('reception');" ><li><?php
                    if ($_SESSION['langue'] == "fr") {
                        echo "Messages re&ccedil;us";
                    } elseif ($_SESSION['langue'] == "en") {
                        echo "messages received ";
                    } elseif ($_SESSION['langue'] == "de") {
                        echo "Nachrichten empfangen";
                    } elseif ($_SESSION['langue'] == "es") {
                        echo "mensajes recibidos";
                    }
        ?></li></a>
                <a href="#" onclick="messagerie('envoi');" ><li><?php
                    if ($_SESSION['langue'] == "fr") {
                        echo "Messages envoy&eacute;s";
                    } elseif ($_SESSION['langue'] == "en") {
                        echo "messages sent ";
                    } elseif ($_SESSION['langue'] == "de") {
                        echo "Nachrichten geschickt";
                    } elseif ($_SESSION['langue'] == "es") {
                        echo "mensajes enviados";
                    }
        ?></li></a>
                <a href="#" onclick="fetchBrouillon();" ><li><?php
                    if ($_SESSION['langue'] == "fr") {
                        echo "Brouillon";
                    } elseif ($_SESSION['langue'] == "en") {
                        echo "deleted messages ";
                    } elseif ($_SESSION['langue'] == "de") {
                        echo "Nachrichten gel&ouml;schtt";
                    } elseif ($_SESSION['langue'] == "es") {
                        echo "mensajes eliminados";
                    }
        ?></li></a>
                <a href="#" onclick="getDelete();" ><li><?php
                    if ($_SESSION['langue'] == "fr") {
                        echo "Messages supprim&eacute;s";
                    } elseif ($_SESSION['langue'] == "en") {
                        echo "Draft ";
                    } elseif ($_SESSION['langue'] == "de") {
                        echo "Entwurf";
                    } elseif ($_SESSION['langue'] == "es") {
                        echo "Borrador";
                    }
        ?></li></a>
                <a href="index.php?page=viewProfil"><li><?php
                    if ($_SESSION['langue'] == "fr") {
                        echo "Retour profil";
                    } elseif ($_SESSION['langue'] == "en") {
                        echo "back profil ";
                    } elseif ($_SESSION['langue'] == "de") {
                        echo "Rückschritte am Profil";
                    } elseif ($_SESSION['langue'] == "es") {
                        echo "Volver perfil";
                    }
        ?></li></a>
            </ul>
        </div>
        <div id="messagerie" >
            <?php if (!isset($_GET['message'])) { ?>
                <fieldset style="background-color: rgba(15, 146, 179, 0.5);">
                    <legend><?php
        if ($_SESSION['langue'] == "fr") {
            echo "Messagerie";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Mail ";
        } elseif ($_SESSION['langue'] == "de") {
            echo "E-Mail";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Correo";
        }
                ?></legend>
                    <p><?php
                if ($_SESSION['langue'] == "fr") {
                    echo "Bienvenue dans votre messagerie";
                } elseif ($_SESSION['langue'] == "en") {
                    echo "Welcome to your email ";
                } elseif ($_SESSION['langue'] == "de") {
                    echo "Willkommen bei Ihrem E-Mail";
                } elseif ($_SESSION['langue'] == "es") {
                    echo "Bienvenido al correo electrónico";
                }
                ?> 
                        <strong>
                            <?php echo $loginUser; ?>.<br/>
                        </strong>
                        <?php
                        $nbNewMess = countNbNew();
                        if ($_SESSION['langue'] == "fr") {
                            echo "Vous avez $nbNewMess nouveaux messages.";
                        } elseif ($_SESSION['langue'] == "en") {
                            echo "You have $nbNewMess new messages";
                        } elseif ($_SESSION['langue'] == "de") {
                            echo "Sie haben $nbNewMess neue Nachrichten.";
                        } elseif ($_SESSION['langue'] == "es") {
                            echo "Tiene $nbNewMess mensajes nuevos.";
                        }
                        ?></p>
                </fieldset>
            <?php } elseif ($_GET['message'] == "envoi") { ?>
                <fieldset style="background-color: rgba(15, 146, 179, 0.5);">
                    <legend><?php
        if ($_SESSION['langue'] == "fr") {
            echo "Messagerie";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Mail ";
        } elseif ($_SESSION['langue'] == "de") {
            echo "E-Mail";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Correo";
        }
                ?></legend>
                    <p>><?php
                if ($_SESSION['langue'] == "fr") {
                    echo "Votre message a &eacute;t&eacute; envoy&eacute; avec succ&egrave;s";
                } elseif ($_SESSION['langue'] == "en") {
                    echo "Your message was sent successfully";
                } elseif ($_SESSION['langue'] == "de") {
                    echo "Ihre Nachricht wurde mit Erfolg gesendet";
                } elseif ($_SESSION['langue'] == "es") {
                    echo "Su mensaje ha sido enviado con éxito";
                }
                ?><br/>
                        <?php
                        if ($_SESSION['langue'] == "fr") {
                            echo "retour";
                        } elseif ($_SESSION['langue'] == "en") {
                            echo "Back";
                        } elseif ($_SESSION['langue'] == "de") {
                            echo "R&uuml;ckkehr";
                        } elseif ($_SESSION['langue'] == "es") {
                            echo "Anterior";
                        }
                        ?></p>
                </fieldset>
            <?php } ?>

        </div>
        <br/><br/><br/><br/><br/><br/>
    <?php } else {
        ?>
        <fieldset style="background-color: rgba(15, 146, 179, 0.5);">
            <legend style="color: red;" ><?php
    if ($_SESSION['langue'] == "fr") {
        echo "Connexion";
    } elseif ($_SESSION['langue'] == "en") {
        echo "Log in";
    } elseif ($_SESSION['langue'] == "de") {
        echo "Verbindung";
    } elseif ($_SESSION['langue'] == "es") {
        echo "Conexi&oacute;n";
    }
        ?></legend>
            <p>
                <?php
                if ($_SESSION['langue'] == "fr") {
                    echo "Vous devez vous connecter pour acc&eacute;der &agrave; votre messagerie.";
                } elseif ($_SESSION['langue'] == "en") {
                    echo "You must login to access your mail.";
                } elseif ($_SESSION['langue'] == "de") {
                    echo "Du musst eingeloggt sein, um Ihre Mails zugreifen.";
                } elseif ($_SESSION['langue'] == "es") {
                    echo "Usted debe ingresar para acceder a su correo";
                }
                ?>
            </p>
        </fieldset>
        <br/><br/><br/><br/><br/><br/>
    <?php } ?>
</div>

