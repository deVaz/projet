<?php
if (isset($_GET['type'])) {
    //formlaire de traitement des annonces
    if ($_GET['type'] == "dellAnnonce") {
        ?>
        <h3>Supprimer une annonce</h3>
        <p>Entrez l'id de l'annonce &agrave; supprimer</p>
        <form>
            <label>Id de l'annonce</label>
            <input type="text" id="idAnnonce" /><br/><br/>
            <input type="button" value="supprimer l'annonce" onclick="dellAnnonce(idAnnonce.value)" />
        </form>
        <p id="reponseMessage" style="color: green;display: none;" >

        </p>
        <p>
            Comment avoir l'id d'une annonce ?<br/><br/>
            Pour cela il vous suffit de consulter l'annonce que vous voulez supprimer et de r&eacute;cup&eacute;rer l'id contenue dans le lien:<br/>
            index.php?page=pageLogementFinale&<span style="color: red" >id=30</span>
        </p>
        <h3>Supprimer les annonces ayant plus d'un mois</h3>
        <p>
            En cliquant sur ce bouton vous supprimerez toutes les annonces viellles de 30 jours ou plus.
        </p>
        <input type="button" value="Supprimer les annonces" onclick="dellOldAnnonce();" />
        <?php
        //formlaire de traitement des commentaires
    } elseif ($_GET['type'] == 'dellCom') {
        ?>
        <h3>Supprimer un commentaire</h3>
        <p>Entrez l'id de l'annonce &agrave; ou veous voulez supprimer un commentaire</p>
        <form>
            <label>Id de l'annonce</label>
            <input type="text" id="idCommentaire" /><br/><br/>
            <input type="button" value="Voir les commentaires" onclick="fetchComment(idCommentaire.value)" />
        </form>
        <div id="contentComment" style="margin-left: 10%;margin-right: 10%;padding: 5px;border: 1px solid black; display: none; " >

        </div>
        <p>
            Comment avoir l'id d'une annonce ?<br/><br/>
            Pour cela il vous suffit de consulter l'annonce que vous voulez supprimer et de r&eacute;cup&eacute;rer l'id contenue dans le lien:<br/>
            index.php?page=pageLogementFinale&<span style="color: red" >id=30</span>
        </p>
        <?php
    } elseif ($_GET['type'] == 'fetchComment') {
        $commentaire = getComment($_GET['id']);
        ?><center><table><?php
        foreach ($commentaire as $value) {
            ?><tr id="<?php echo $value['id']; ?>" ><td style="border-bottom: 1px solid black;" ><b><?php echo getMembre($value['membre_id']) ?></b></td><td style="border-bottom: 1px solid black;padding: 5px;" ><?php
            echo nl2br($value['commentaire']);
            ?></td><td style="border-bottom: 1px solid black;" ><input type=button value="Supprimer" style="margin-left: 20px;" onclick="dellComm('<?php echo $value['id']; ?>')" /></td></tr><?php
            }
        ?></table></center><?php
                }
                //Formulaire de supression des utilisateurs
                elseif ($_GET['type'] == 'dellUser') {
        ?>
        <h3>Supprimer un utilisateur</h3>
        <p>Entrez le login de l'utilisateur &agrave; supprimer</p>
        <form>
            <label>Login de l'utilisateur:</label>
            <input type="text" id="user" /><br/><br/>
            <input type="button" value="supprimer l'utilisateur" onclick="dellUser(user.value)" />
        </form>
        <p id="reponseMessage" style="color: green;display: none;" >

        </p>
        <?php
    } elseif ($_GET['type'] == 'message') {
        ?>
        <h3>Envoyer un message g&eacute;n&eacute;ral</h3>
        <p>Ce message sera envoy&eacute; &agrave; tous les utilisateurs du site</p>
        <form>
            <label>Titre:</label>
            <input type="text" id="titre" /><br/><br/>
            <center>
                <textarea style="height: 300px;width: 80%" id="text" ></textarea>
            </center>
            <input type="button" value="Envoyer" onclick="message(titre.value,text.value)" />
        </form>
        <p id="reponseMessage" style="color: green;display: none;" >

        </p>
        <?php
    } elseif ($_GET['type'] == 'trDellAnn') {
        dellAnn($_GET['id']);
    } elseif ($_GET['type'] == 'trDellcomm') {
        dellCom($_GET['id']);
    } elseif ($_GET['type'] == 'trDellUser') {
        dellUser($_GET['id']);
    } elseif ($_GET['type'] == 'formContact') {
        $contact = getContact();
        foreach ($contact as $value) {
            ?>
        <div id="<?php echo $value['id'] ?>">
            <b><?php echo $value['titre'] ?></b>: <?php echo nl2br($value['text']) ?> <input type="button" value="Supprimer"  onclick="dellContact(<?php echo $value['id'] ?>)" />
        </div>
            <?php
        }
    } elseif ($_GET['type'] == 'dellOldAnnonce') {
        suprOldAnn();
        ?>
        <span style="color: green" >Les annonces sont supprim&eacute;es</span>
        <?php
    }elseif($_GET['type']=='suprContact'){
        supprContact($_GET['id']);
    }
}if (isset($_POST['message'])) {
    sendMessage($_POST['titre'], $_POST['text']);
}
?>
