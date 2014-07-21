<?php
if(isset($_GET['annon'])){
    ?>
<div class="antContent2" style="text-align: center" >
    <?php
    if ($_SESSION['langue'] == "fr") {
        echo "Envoyer un message &agrave; : ";
    } elseif ($_SESSION['langue'] == "en") {
        echo "Send a message to : ";
    } elseif ($_SESSION['langue'] == "de") {
        echo "Eine Nachricht schicken nach : ";
    } elseif ($_SESSION['langue'] == "es") {
        echo "Enviar un mensaje a : ";
    }
    ?>
    <?php echo $_GET['annon'] ?>
    <form method="post" action="index.php?page=contactAnn" >
        <input type="hidden" name="cible" value="<?php echo $_GET['annon'] ?>" /><br/>
        Sujet:
        <input type="text" name="sujet"/><br/><br/>
        Message: <br/>
        <textarea name="message" style="width: 80%;height: 300px;" ></textarea><br/><br/>
        <input type="submit" value="Envoyer le message"/>
    </form>
</div>
    <?php
}elseif(isset ($_POST['cible'])){
    sendMessage($_POST['cible'], $_POST['sujet'], $_POST['message']);
    header('location:index.php?page=messagerie&message=envoi');
}
?>
