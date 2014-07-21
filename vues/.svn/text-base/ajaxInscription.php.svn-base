<?php
if(!isset($_SESSION['langue'])){
    $_SESSION['langue'] = "fr";
}
if (isset($_GET['login'])) {
    if (checkPseudo($_GET['login'])) {
        ?>
<span id="reponsePseudo" style="color:green" ><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "L'identifiant est disponible";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "The login is available";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Die Kennung ist verf&uuml;gbar";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "El identificador est&acute; disponible";
                                                    }
                                                    ?></span>
        <?php
    }else{
        ?>
<span id="reponsePseudo" style="color: red" ><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "L'identifiant n'est pas disponible";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "The login is not available";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Die Kennung ist nicht verf&uuml;gbar";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "El identificador no est&acute; disponible";
                                                    }
                                                    ?></span>
        <?php
    }
}
if(isset($_GET['mail'])){
    if (checkMail($_GET['mail'])) {
        ?>
<span id="reponseMail" style="color:green" ><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "L'adresse est disponible";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "The adress is available";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Die Anschrift ist verf&uuml;gbar";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "La driecci&oacute; est&acute; disponible";
                                                    }
                                                    ?></span>
        <?php
    }else{
        ?>
<span id="reponseMail" style="color: red" ><?php
                                                    if ($_SESSION['langue'] == "fr") {
                                                        echo "L'adresse n'est pas disponible";
                                                    } elseif ($_SESSION['langue'] == "en") {
                                                        echo "The adress is not available";
                                                    } elseif ($_SESSION['langue'] == "de") {
                                                        echo "Die Anschrift ist nicht verf&uuml;gbar";
                                                    } elseif ($_SESSION['langue'] == "es") {
                                                        echo "La direcci&oacute; no est&acute; disponible";
                                                    }
                                                    ?></span>
        <?php
    }
}
?>
