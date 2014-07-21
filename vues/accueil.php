<?php include(dirname(__FILE__) . '/../controleurs/recherche.php'); ?>

<div style="background-image:url('webroot/img/post-it.png');margin: auto;background-repeat: no-repeat;width: 275px;height: 275px; font-size: 20px; padding-top: 100px; margin-bottom: -120px; " ><center>
        <?php
        if ($_SESSION['langue'] == "fr") {
            echo "Nombres de visites: <br/><span style='font-family: Georgia, Arial, Geneva, Verdana, Serif; font-size: xx-large'>" . $nbVues. "</span>";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Number of visits: <br/><span style='font-family: Georgia, Arial, Geneva, Verdana, Serif; font-size: xx-large'>" . $nbVues. "</span>";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Anzahl der Besuch: <br/><span style='font-family: Georgia, Arial, Geneva, Verdana, Serif; font-size: xx-large'>" . $nbVues. "</span>";
        } elseif ($_SESSION['langue'] == "es") {
            echo "N&ugrave;mero de visitas: <br/><span style='font-family: Georgia, Arial, Geneva, Verdana, Serif; font-size: xx-large'>" . $nbVues. "</span>";
        }
        ?>
    </center></div>
