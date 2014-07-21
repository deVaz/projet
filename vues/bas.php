<div id="footer">
    <center>
        <p>
<a href="index.php?page=mentionslegales" ><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Mentions l&eacutegales";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "legal mentions";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Rechts Erw&auml;hnt";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Mencionas legales";
                                }
                                ?></a> | 
<a href="index.php?page=faq" ><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "FAQ";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "FAQ";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "HGF";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "PMF";
                                }
                                ?></a> | 
<a href="index.php?page=pageContact" ><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Nous contacter";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Contact us";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Kontaktieren sie uns";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "cont&aacute;ctenos";
                                }
                                ?></a> |  
<a href="s'abonnerALaNewsletter.php" ><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "S'abonner à la newsletter";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Subscribe to the news";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Abonnieren sie die Rundschreiben";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Sucr&iacute;bete a las noticias";
                                }
                                ?></a> |
<a href="index.php?page=equipe"><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Notre équipe";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Our team";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Unser Team";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Nuestro equipo";
                                }
                                ?></a>
        </p>
    </center>
</div>
</body>
</html>