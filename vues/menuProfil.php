    <div id="menuProfil">
    <h3>Menu</h3>
    <ul>

        <a href="index.php?page=viewProfil"><li><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Mon profil";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "My profile";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Mein profil";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Mi perfil";
                                }
                                ?></li></a>
        <a href="index.php?page=modifProfil"><li><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Modification du profil";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Profile modification";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Profilverschiebung";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Modificaci&oacute;n del perfil  ";
                                }
                                ?></li></a>
        <a href="index.php?page=favoris"><li><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Mes favoris";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "My favourites";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Meine Favoriten";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Mis favoritos";
                                }
                                ?></li></a>
        <a href="index.php?page=mesAnnonces"><li><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Mes annonces";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "My annunces";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Meine Verkünden";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Mis anuncios";
                                }
                                ?></li></a>
        <a href="index.php?page=membreAlert"><li><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Mes Alertes";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "My Alerts";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Meine Benachrichtigungen";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Mis Alertas";
                                }
                                ?></li></a>
        <a href="index.php?page=messagerie"><li><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Messagerie";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "mail";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "E-Mail";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Correo";
                                }
                                ?></li></a>

    </ul>
</div>