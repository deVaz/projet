<?php
//Ici on choisit le html qui sera transmi via ajax.
if (isset($_GET['type'])) {
    //si on écrit un nouveau message
    if ($_GET['type'] == "nouveau") {
        $idMembre = $_SESSION['id'];
        ?>
      <script src='webroot/js/addTypeFile.js'></script>
      <form method='post' action='index.php?page=traitementMessage' enctype='multipart/form-data' >
        <fieldset>
        <legend><?php
        if ($_SESSION['langue'] == "fr") {
            echo "Nouveau message";
        } elseif ($_SESSION['langue'] == "en") {
            echo "New message ";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Neuer Beitrag";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Nuevo mensaje";
        }
                ?></legend>
        <center>
        <label for='destinataire' ><?php
        if ($_SESSION['langue'] == "fr") {
            echo "Destinataire(s):";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Recipient(s)";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Empf&auml;nger";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Beneficiario(s)";
        }
                ?></label>
        <input type='text' name='destinataire' id='destinataire' /><br/>
       <?php
        if ($_SESSION['langue'] == "fr") {
            echo "S&eacute;parez les diff&eacute;rents destinataires par un ;";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Separate multiple recipients with a ;";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Trennen Sie mehrere Empf&auml;nger mit einem ;";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Separar varios destinatarios con una ;";
        }
                ?>
        <br/>
        <label for='sujet' ><?php
        if ($_SESSION['langue'] == "fr") {
            echo "Sujet :";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Topic :";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Thema";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Tema";
        }
                ?></label>
        <input type='text' name='sujet' id='sujet' />
        <br/>
        <label for='message' ><?php
        if ($_SESSION['langue'] == "fr") {
            echo "Message :";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Message :";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Beitrag :";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Mensaje :";
        }
                ?></label><br/>
        <textarea name='message' id='message' style='width:80%;height:300px;' ></textarea><br/>
        <br/>
        <input type='submit' /><input type='button' value='<?php
        if ($_SESSION['langue'] == "fr") {
            echo "Enregistrer comme brouillon";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Save as draft";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Als Entwurf speichern";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Guardar como borrador";
        }
                ?>' onclick='brouillon($idMembre,destinataire.value,message.value,sujet.value)' />
        </center>
        </fieldset>
        </form>
        <?php
        //Si on est dans la boite de réception
    } elseif ($_GET['type'] == "reception") {
        ?>
        <center>
        <table>
        <tr>
        <th style="color:brown;"><?php
        if ($_SESSION['langue'] == "fr") {
            echo "Auteur";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Author";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Autor";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Autor";
        }
                ?></th>
        <th style="color:brown;"><?php
        if ($_SESSION['langue'] == "fr") {
            echo "Sujet :";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Topic :";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Thema";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Tema";
        }
                ?></th>
        <th style="color:brown;"><?php
        if ($_SESSION['langue'] == "fr") {
            echo "Date";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Date";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Datum";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Fecha";
        }
                ?></th>
        <th style='width:100px;' ></th>
        <?php
        foreach ($arayMessage as $value) {
            echo'<tr>
          <td>' . getMembre($value['id_send']) . '</td>
          <td><a href="#" onclick="getMessage(\'' . $value['id'] . '\',\'reception\')" >' . $value['sujet'] . '</a></td>
          <td>' . $value['date'] . '</td>
              <td>';
            if ($value['lu'] == 0) {
                echo'<img src="webroot/img/new.png" alt="New" title="New" />';
            }
            echo'<a href="#" onclick="deleteReception(\'' . $value['id'] . '\');messagerie(\'reception\')" ><img src="webroot/img/Delete.png" alt="Delete" title="Delete" /></a></td>
        </tr>';
        }
        ?>
        </table>
        </center>
        <?php
        //Si on est dans la boite d'envoi
    } elseif ($_GET['type'] == "envoi") {
        ?>
        <center>
        <table>
        <tr>
        <th style="color:brown;"><?php
        if ($_SESSION['langue'] == "fr") {
            echo "Destinataire(s):";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Recipient(s)";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Empf&auml;nger";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Beneficiario(s)";
        }
                ?></th>
        <th style="color:brown;"><?php
        if ($_SESSION['langue'] == "fr") {
            echo "Sujet :";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Topic :";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Thema";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Tema";
        }
                ?></th>
        <th style="color:brown;"><?php
        if ($_SESSION['langue'] == "fr") {
            echo "Date";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Date";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Datum";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Fecha";
        }
                ?></th>
        <th style='width:100px;' ></th>
        <?php
        foreach ($arayEnvoi as $value) {
            echo'<tr>
          <td>' . getMembre($value['id_target']) . '</td>
          <td><a href="#" onclick="getMessage(\'' . $value['id'] . '\',\'envoi\')" >' . $value['sujet'] . '</a></td>
          <td>' . $value['date'] . '</td>
              <td>';
            if ($value['lu'] == 0) {
                echo'<img src="webroot/img/new.png" alt="New" title="New" />';
            }
            echo'<a href="#" onclick="deleteEnvoi(\'' . $value['id'] . '\');messagerie(\'envoi\')" ><img src="webroot/img/Delete.png" alt="Delete" title="Delete" /></a></td>
        </tr>';
        }
        ?>
        </table>
        </center>
        <?php
        //Ici on lit un message
    } elseif ($_GET['type'] == "message") {
        if ($_GET['lecture'] == "reception") {
            readMessage($_GET['idMessage']);
        }
        $textMessage = getMessageContent($_GET['idMessage']);
        echo "<fieldset>";
        echo '<legend>' . getMembre($textMessage['id_send']) . '</legend>';
        echo '<p>' . nl2br($textMessage['message']) . '</p>';
        echo "</fieldset>";
        //On consulte les brouillons
    } elseif ($_GET['type'] == "getBrouillon") {
        echo '<center>';
        echo "<table>";
        echo "<tr>
        <th class='brouillone'>Destinataire</th>
        <th class='brouillone'>Sujet</th>
        <th style='width:100px;' ></th>
        ";
        foreach ($arayBrouillon as $value) {
            echo'<tr>
          <td>' . $value['destinataire'] . '</td>
          <td><a href="#" onclick="getBrouillon(\'' . $value['id'] . '\')" >' . $value['sujet'] . '</a></td>
              <td>';
            echo'<a href="#" onclick="deleteBrouillon(\'' . $value['id'] . '\');" ><img src="webroot/img/Delete.png" alt="Delete" title="Delete" /></a></td>
        </tr>';
        }
        echo"</table>";
        echo '</center>';
        //On lit les brouillons
    } elseif ($_GET['type']=="readBrouillon") {
        $idMembre = $_SESSION['id'];
        $fetchBrouillon = readBrouillon($_GET['idBrouillon']);
        $fetchBrouillonDestinataire = $fetchBrouillon['destinataire'];
        $fetchBrouillonMessage = $fetchBrouillon['message'];
        $fetchBrouillonSujet = $fetchBrouillon['sujet'];
        ?>
        <script src='webroot/js/addTypeFile.js'></script>
        <form method='post' action='index.php?page=traitementMessage' enctype='multipart/form-data' >
        <fieldset>
        <legend><?php
        if ($_SESSION['langue'] == "fr") {
            echo "Nouveau message";
        } elseif ($_SESSION['langue'] == "en") {
            echo "New message ";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Neuer Beitrag";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Nuevo mensaje";
        }
                ?></legend>
        <center>
        <label for='destinataire' ><?php
        if ($_SESSION['langue'] == "fr") {
            echo "Destinataire(s):";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Recipient(s)";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Empf&auml;nger";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Beneficiario(s)";
        }
                ?></label>
        <input type='text' name='destinataire' id='destinataire' value='$fetchBrouillonDestinataire' /><br/>
         <?php
        if ($_SESSION['langue'] == "fr") {
            echo "S&eacute;parez les diff&eacute;rents destinataires par un ;";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Separate multiple recipients with a ;";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Trennen Sie mehrere Empf&auml;nger mit einem ;";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Separar varios destinatarios con una ;";
        }
                ?>
        <br/>
        <label for='sujet' ><?php
        if ($_SESSION['langue'] == "fr") {
            echo "Sujet :";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Topic :";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Thema";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Tema";
        }
                ?></label>
        <input type='text' name='sujet' id='sujet' value='$fetchBrouillonSujet' />
        <br/>
        <label for='message' ><?php
        if ($_SESSION['langue'] == "fr") {
            echo "Message";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Message ";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Beitrag";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Mensaje";
        }
                ?></label><br/>
        <textarea name='message' id='message' style='width:80%;height:300px;' >$fetchBrouillonMessage</textarea><br/><br/>
        <input type='submit' /><input type='button' value='<?php
        if ($_SESSION['langue'] == "fr") {
            echo "Enregistrer comme brouillon";
        } elseif ($_SESSION['langue'] == "en") {
            echo "Save as draft";
        } elseif ($_SESSION['langue'] == "de") {
            echo "Als Entwurf speichern";
        } elseif ($_SESSION['langue'] == "es") {
            echo "Guardar como borrador";
        }
                ?>' onclick='brouillon($idMembre,destinataire.value,message.value,sujet.value)' />
        </center>
        </fieldset>
        </form>";
        <?php
        //On supprime un brouillon
    }elseif ($_GET['type']=="deleteBrouillon") {
        deleteBrouillon($_GET['idBrouillon']);
        echo '<fieldset>
            <legend style="color:green " >Succ&egrave;s</legend>
            <p>Le brouillon a bien&eacute;tait supprim&eacute;</p>
            </fieldset>';
        //On supprime un message
    }elseif ($_GET['type']=="messageDelete"){
        echo '<center>';
        echo "<table>";
        echo "<tr>
        <th class='brouillone'>Destinataire</th>
        <th class='brouillone'>Sujet</th>
        <th class='brouillone'>Date</th>
        <th style='width:100px;' ></th>
        ";
        foreach ($getDeleteMessage as $value) {
            echo'<tr>
          <td>' . getMembre($value['id_target']) . '</td>
          <td><a href="#" onclick="getMessage(\'' . $value['id'] . '\',\'envoi\')" >' . $value['sujet'] . '</a></td>
          <td>' . $value['date'] . '</td>
              <td>';
            if ($value['lu'] == 0) {
                echo'<img src="webroot/img/new.png" alt="New" title="New" />';
            }
            echo'<a href="#" onclick="deleteDeleteMessage(\'' . $value['id'] . '\');messagerie(\'envoi\')" ><img src="webroot/img/Delete.png" alt="Delete" title="Delete" /></a></td>
        </tr>';
        }
        echo"</table>";
        echo '</center>';
    }
}
//On supprime un message dans la boite d'envoi
if (isset($_GET['idEnvoi'])) {
    deleteEnvoi($_GET['idEnvoi']);
}
//On supprime un message dans la boite de réception
if (isset($_GET['idReception'])) {
    deleteReception($_GET['idReception']);
}
//On enregistre un brouillon
if (isset($_POST['brouillon'])) {
    insertBrouillon($_POST['idMembre'], $_POST['destinataire'], $_POST['message'], $_POST['sujet']);
    echo "Votre message a bien &eacute;tait enregistr&eacute comme brouillon";
}
//On supprime un message dans les messages supprimés
if(isset($_GET['idMessageDelete'])){
    deleteDeleteMessage($_GET['idMessageDelete']);
}
?>
