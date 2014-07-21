<?php
if (isset($_COOKIE['login']) && isset($_COOKIE['pwd'])) {
    connexionCookie($_COOKIE['login'], $_COOKIE['pwd']);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <head>
        <title><?php
echo $pageTitle;
?></title>
        <meta http-equiv="content-language" content="<?php
            echo $_SESSION['langue'];
?>" />
        <meta http-equiv="Content-Type" content="text/html;" charset="UTF-8" />

        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

        <link rel="stylesheet" media="screen" type="text/css" title="Style" href="webroot/css/style.css" />
    </head>
    <script src="webroot/js/jQuery.js" ></script>
    <script type="text/javascript">
        <!--
        function show(thingId)
        {
            var targetElement;
            targetElement = document.getElementById(thingId) ;
            targetElement.style.display = "" ;
        }
        function hide(thingId){
            var targetElement;
            targetElement = document.getElementById(thingId) ;
            targetElement.style.display = "none";
        }
        function langue(str){
            location.href='index.php?page=changeLangue&langue='+str;
        }
        //-->
    </script>
    <body  onload="<?php
              echo $javaFunction;
?>" >
        <div id="headerMenu">
            <table>
                <tr>
                    <td onclick="langue('en')" > 
                        <img src="webroot/img/flags/english.png" alt="English"  />  English   
                    </td>
                    <td onclick="langue('de')" >
                        <img src="webroot/img/flags/deutsch.png" alt="Deutsch"  /> Deutsch  
                    </td>
                    <td onclick="langue('es')" >
                        <img src="webroot/img/flags/espanol.png" alt="Espanol"  />  Espa&ntilde;ol  
                    </td>
                    <td onclick="langue('fr')" > 
                        <img src="webroot/img/flags/french.png" alt="Fran&ccedil;ais" /> Fran&ccedil;ais 
                    </td>
                </tr>
            </table>
            <div id="headerMenuConnect" >
                <?php if (isset($_SESSION['id'])) {
                    ?>
                    <table>
                        <tr>
                            <td>
                                <a href="index.php?page=messagerie"><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Messagerie";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Messaging";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Messaging";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Mensajer&iacute;a";
                                }
                                ?></a>
                            </td>
                            <td>
                                <a href="##"  onmouseover="$('#headerProfil').slideToggle();return false;"><?php echo getLogin($_SESSION['id']); ?>
                                    <div id="headerProfil" style="display: none" >
                                        <ul>
                                            
                                             <a href="index.php?page=pageProfilPublic&id=<?php echo $_SESSION['id']; ?>" ><li><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Mon profil public";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "My public profile";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Mein öffentliches profil";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Mi perfil público";
                                }
                                ?></li></a>
                                            

                                            <a href="index.php?page=viewProfil" ><li><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Voir mon profil";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "View my profile";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Profil mein anzeigen";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Ver mi perfil";
                                }
                                ?></li></a>
                                            
                                           
                                            
                                            <a href="index.php?page=modifProfil" ><li><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Modification profil";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Profile modification";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Profilverschiebung";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Perfil de la modificaci&oacute;n";
                                }
                                ?></li></a>
                                            
                                            <a href="index.php?page=favoris" ><li><?php
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
                                           
                                            
                                             <a href="index.php?page=pageAjout" ><li><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Poster une annonce";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Post an add";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Eine Anzeige aufgeben";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Publicar un anuncio";
                                }
                                ?></li></a>
                                            
                                        </ul>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <a href="index.php?page=deconnexion"><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "D&eacuteconnexion";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Log out";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Umverbindung";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Desconexi&oacute;n";
                                }
                                ?></a>
                            </td>
                        </tr>
                    </table>
                    <?php
                } else {
                    ?>
                    <table>
                        <tr>
                            <td>
                                <a href="#" onclick="$('#headerMenuConnexion').slideToggle();"
                                   ><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Connexion";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Log in";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Login";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Conexi&oacute;n";
                                }
                                ?></a>
                                <div id="headerMenuConnexion" style="display: none;">
                                    <center>
                                        <p>
                                            <form method="post" action="index.php?page=traitementConnexion">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <label for="login" >Login </label>
                                                        </td>
                                                        <td>
                                                            <input type="text" id="login" name="login" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label for="pwd" ><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Mot de passe";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "password";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Passwort";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Contrase&ntilde;a";
                                }
                                ?></label>
                                                        </td>
                                                        <td>
                                                            <input type="password" id="pwd" name="pwd" /><br/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" ><input style="width: 10px;" type="checkbox" name="connexionAuto" id="connexionAuto" value="1" />
                                                            <label for="connexionAuto" ><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Connexion automatique";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Automatic log in";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Automatische Verbindung";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Conexi&oacute;n autom&aacute;tica";
                                }
                                ?></label></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" >
                                                            <center>
                                                                <input type="submit" value="<?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Connexion";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Log in";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Verbindung";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Conexi&oacute;n";
                                }
                                ?>" /><br/><br/>
                                                                <a href="index.php?page=password"><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Mot de passe oubli&eacute";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Forgot your password";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Passwort vergessen";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Olvidaste tu contrase&ntilde;a";
                                }
                                ?></a>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </form>
                                        </p>
                                    </center>
                                </div>
                            </td>
                            <td>
                                <a href="index.php?page=inscription"><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Inscription";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "registration";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Anmeldung";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Registro";
                                }
                                ?></a>
                            </td>                       
                        </tr>
                    </table>
                <?php } ?>
            </div>
        </div>

        <div id="header">
            <a href="index.php"><img src="webroot/img/header.png" alt="Esk'Immo" /></a>
        </div>