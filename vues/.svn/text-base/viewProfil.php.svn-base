<div id="body">
    <div id="profil">
        <?php
        //*vérifier que l'utilisateur est inscrit et identifié pour voir cette page
        if (!isset($_SESSION['id'])) {
            ?> 
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
                <p>
                    <?php
                    if ($_SESSION['langue'] == "fr") {
                        echo "Vous devez &ecirc;tre identifi&eacute; pour acc&eacute;der &agrave; cette page.";
                    } elseif ($_SESSION['langue'] == "en") {
                        echo "You must register to access this page.";
                    } elseif ($_SESSION['langue'] == "de") {
                        echo "Sie müssen sich registrieren sein, um diese Seite zu betreten";
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

            <fieldset style="background-color: rgba(15, 146, 179, 0.5);">
                <legend><?php echo $fetchInfo['genre'] . " " . $fetchInfo['nom'] . " " . $fetchInfo['prenom'] ?></legend>
                <center>
                    <table>
                        <tr>
                            <td>
                                <strong>
                                    Login    
                                </strong>        
                            </td>
                            <td>
                                <?php echo $fetchInfo['login']; ?>       
                            </td>           
                            <td>
                                <strong>
                                    <?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Adresse e-mail";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "E-mail address";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "E-Mail Adresse";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Direcci&oacute;n e-mail";
                                    }
                                    ?>       
                                </strong>
                            </td>
                            <td>
                                <?php echo $fetchInfo['mail']; ?>  
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>
                                    <?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "Etablissement ";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "institution";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Universit&auml;t";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "establecimiento";
                                    }
                                    ?> 
                                </strong>
                            </td>
                            <td>
                                <?php echo $fetchInfo['etablissement']; ?>
                            </td>                
                            <td>
                                <strong>
                                    <?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo " Nationalit&eacute; ";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Nationality ";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Nationalit&auml;t ";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "nacionalidad ";
                                    }
                                    ?> 
                                </strong>
                            </td>
                            <td>
                                <?php echo $fetchInfo['nationalite']; ?> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>
                                    <?php
                                    if ($_SESSION['langue'] == "fr") {
                                        echo "  Date d'inscription ";
                                    } elseif ($_SESSION['langue'] == "en") {
                                        echo "Join date";
                                    } elseif ($_SESSION['langue'] == "de") {
                                        echo "Registriert seit";
                                    } elseif ($_SESSION['langue'] == "es") {
                                        echo "Fecha de inscripci&oacute;n";
                                    }
                                    ?>   
                                </strong>
                            </td>
                            <td>
                                <?php 
                                $inscriptionDate=formatDate($fetchInfo['date_inscription']);
                                echo $inscriptionDate; ?>
                            </td>
                            <td>
                                <strong>
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
                                </strong>
                            </td>
                            <td>
                                <?php 
                                $birthday=formatDate($fetchInfo['birthdate']);
                                echo $birthday; ?>  
                            </td>
                        </tr>
                    </table>
                </center>
            </fieldset>
        <?php } ?>
    </div>
</div>