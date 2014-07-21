<?php if (isset($_POST['messageContact'])) {
     addContact($_POST['sujet'], $_POST['messageContact']);
     ?><span style="color: green" >Message Envoy&eacute;</span><?php
} else { ?>
    <div id="pageContact">
        <div id="body">
            <fieldset>
                <legend><?php
    if ($_SESSION['langue'] == "fr") {
        echo "Contactez-nous!";
    } elseif ($_SESSION['langue'] == "en") {
        echo "Contact us!";
    } elseif ($_SESSION['langue'] == "de") {
        echo "Kontaktieren sie uns!";
    } elseif ($_SESSION['langue'] == "es") {
        echo "cont&acute;ctenos!";
    }
    ?></legend>
                <form method="post" action="#">
                    <label for="messageContact"><?php
                if ($_SESSION['langue'] == "fr") {
                    echo "Bienvenue sur la page de contact d'Esk'Immo, vous pouvez nous contacter en nous envoyant un message ci-dessous.";
                } elseif ($_SESSION['langue'] == "en") {
                    echo "Welcome to the contact page of Esk'Immo, you can contact us by sending us a message below.";
                } elseif ($_SESSION['langue'] == "de") {
                    echo "Willkommen auf der Kontaktseite von Esk'Immo, Sie können uns schicken unten eine Nachricht, um uns zu kontaktieren.";
                } elseif ($_SESSION['langue'] == "es") {
                    echo "Bienvenido a la página de contacto de Esk'Immo, puede contactar con nosotros enviándonos un mensaje a continuación.";
                }
    ?></label><br/><br/>
                    <center>
                        <label for="sujet" ><?php
                    if ($_SESSION['langue'] == "fr") {
                        echo "Sujet :";
                    } elseif ($_SESSION['langue'] == "en") {
                        echo "Subject :";
                    } elseif ($_SESSION['langue'] == "de") {
                        echo "Thema :";
                    } elseif ($_SESSION['langue'] == "es") {
                        echo "Tema :";
                    }
    ?></label><input type="text" name="sujet" id="sujet" /><br/><br/>
                        <textarea name="messageContact" id="messageContact" placeholder="<?php
                        if ($_SESSION['langue'] == "fr") {
                            echo "&Eacute;crivez votre message ici";
                        } elseif ($_SESSION['langue'] == "en") {
                            echo "Write your message here";
                        } elseif ($_SESSION['langue'] == "de") {
                            echo "Schreiben sie hier ihre Nachricht";
                        } elseif ($_SESSION['langue'] == "es") {
                            echo "Escriba aquí su mensaje";
                        }
    ?>"></textarea>
                        <br/><input type="submit" value="<?php
                              if ($_SESSION['langue'] == "fr") {
                                  echo "Envoyer";
                              } elseif ($_SESSION['langue'] == "en") {
                                  echo "Send";
                              } elseif ($_SESSION['langue'] == "de") {
                                  echo "Schicken";
                              } elseif ($_SESSION['langue'] == "es") {
                                  echo "Enviar";
                              }
    ?>"/>
                    </center>
                </form>
            </fieldset>    
        </div>
    </div>
<?php } ?>