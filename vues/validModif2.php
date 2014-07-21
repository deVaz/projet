<div id="body">
    <fieldset id="valid">
        <legend id="valide"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Modification de l'adresse mail";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Change the Email address";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "&Auml;ndern der E-Mail";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Cambiar la direcci&oacute;n e-mail";
                                                    }
                                                    ?></legend>
        <p><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Votre adresse mail a &eacute;t&eacute; modifi&eacute; avec succ&egrave;s<br/>";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Your e-mail has been changed successfully<br/>";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Ihre E-Mail wurde erfolgreich ge&auml;ndert<br/>";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Su e-mail se ha cambiado correctamente<br/>";
                                                    }
                                                    ?>
        </p>
    </fieldset>
</div>
