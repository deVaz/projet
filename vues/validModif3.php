<div id="body">
    <fieldset id="valid">
        <legend id="valide"><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Modification de l'&eacute;tablissement";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Change the institution";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "&Auml;nderung der Anlage";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Modificaci&oacute;n de la instalaci&oacute;n";
                                                    }
                                                    ?></legend>
        <p><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "Votre &eacute;tablissement a &eacute;t&eacute; modifi&eacute; avec succ&egrave;s<br/>";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "Your institution has been successfully changed <br/>";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Ihre Institution wurde erfolgreich ge&auml;ndert<br/>";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "Su institución ha sido cambiado con &eacute;xito <br/>";
                                                    }
                                                    ?>
        </p>
    </fieldset>
</div>
