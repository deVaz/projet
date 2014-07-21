<?php
if (isset($_POST['login'])) {
    if (testLogin($_POST['login'])) {
        sendPwd($_POST['login']);
        ?>
        <div class="antContent2" style="text-align: center" >
            <h3><?php
                if ($_SESSION['langue'] == "fr") {
                    echo "Mot de passe oubli&eacute;";
                } elseif ($_SESSION['langue'] == "en") {
                    echo "Forgotten password";
                } elseif ($_SESSION['langue'] == "de") {
                    echo "Passwort vergessen";
                } elseif ($_SESSION['langue'] == "es") {
                    echo "Ha olvidado su contrase&ntilde;a";
                }
                ?>
                </h3>
            <p><?php
                if ($_SESSION['langue'] == "fr") {
                    echo "Un nouveau mot de passe vous a &eacute;t&eacute; envoy&eacute;";
                } elseif ($_SESSION['langue'] == "en") {
                    echo "A new password has been send to you";
                } elseif ($_SESSION['langue'] == "de") {
                    echo "Ein neues Passwort l&auml;sst Sie zusenden";
                } elseif ($_SESSION['langue'] == "es") {
                    echo "Una nueva contraseña para";
                }
                ?>
                
        </div>
        <?php
    } else {
        ?>
        <div class="antContent2" style="text-align: center" >
            <h3><?php
                if ($_SESSION['langue'] == "fr") {
                    echo "Mot de passe oubli&eacute;";
                } elseif ($_SESSION['langue'] == "en") {
                    echo "Forgotten password";
                } elseif ($_SESSION['langue'] == "de") {
                    echo "Passwort vergessen";
                } elseif ($_SESSION['langue'] == "es") {
                    echo "Ha olvidado su contrase&ntilde;a";
                }
                ?></h3>
            <p><?php
                if ($_SESSION['langue'] == "fr") {
                    echo "L'utilisateur n'existe pas.";
                } elseif ($_SESSION['langue'] == "en") {
                    echo "The user does not exist";
                } elseif ($_SESSION['langue'] == "de") {
                    echo "Der Benutzer existiert nicht";
                } elseif ($_SESSION['langue'] == "es") {
                    echo "El usuario no existe";
                }
                ?>               
            </p>
        </div>
        <?php
    }
} else {
    ?>
    <div class="antContent2" style="text-align: center" >
        <h3><?php
                if ($_SESSION['langue'] == "fr") {
                    echo "Mot de passe oubli&eacute;";
                } elseif ($_SESSION['langue'] == "en") {
                    echo "Forgotten password";
                } elseif ($_SESSION['langue'] == "de") {
                    echo "Passwort vergessen";
                } elseif ($_SESSION['langue'] == "es") {
                    echo "Ha olvidado su contrase&ntilde;a";
                }
                ?>            
        </h3>
        <p><?php
                if ($_SESSION['langue'] == "fr") {
                    echo "Entrez votre identifiant pour qu'un nouveau mot de passe vous soit envoy&eacute;.";
                } elseif ($_SESSION['langue'] == "en") {
                    echo "Enter your username for a new password will be sent";
                } elseif ($_SESSION['langue'] == "de") {
                    echo "Geben Sie Ihren Login, ein neues Passwort gesendet werden soll";
                } elseif ($_SESSION['langue'] == "es") {
                    echo "Introduzca su nombre de usuario para una nueva contrase&ntilde;a le ser&aacute; enviada";
                }
                ?> 
            
        </p>
        <form method="post" action="index.php?page=password" >
            <label for="identifiant" >Identifiant</label>
            <input id="identifiant" name="login" type="text" /><br/><br/>
            <input type="submit" value="R&eacute;cup&eacute;rer mon mot de passe"/>
        </form>
    </div>
    <?php
}
?>
