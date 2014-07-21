<script type="text/javascript" src="webroot/js/logementNote.js" ></script>
<?php
if (isset($_POST['loId'])) {
    $Logement['id'] = $_POST['loId'];
}
if (!isset($_POST['loId']) && testNote($logement['id']) && isset($_SESSION['id'])) {
    ?>
    <img id="staroff1" src="webroot/img/starOver.png" onmouseover="star1off1()" />
    <img id="staron1" style="display: none;" src="webroot/img/starOut.png" onmouseover="star1on1()" onclick="giveNote('1','<?php echo $logement['id'] ?>','<?php echo $_SESSION['id'] ?>');" />
    <img id="staroff2" src="webroot/img/starOver.png" onmouseover="star2off2()" />
    <img id="staron2" style="display: none;" src="webroot/img/starOut.png" onmouseover="star2on2()" onclick="giveNote('2','<?php echo $logement['id'] ?>','<?php echo $_SESSION['id'] ?>');" />
    <img id="staroff3" src="webroot/img/starOver.png" onmouseover="star3off3()" />
    <img id="staron3" style="display: none;" src="webroot/img/starOut.png" onmouseover="star3on3()" onclick="giveNote('3','<?php echo $logement['id'] ?>','<?php echo $_SESSION['id'] ?>');" />
    <img id="staroff4" src="webroot/img/starOver.png" onmouseover="star4off4()" />
    <img id="staron4" style="display: none;" src="webroot/img/starOut.png" onmouseover="star4on4()" onclick="giveNote('4','<?php echo $logement['id'] ?>','<?php echo $_SESSION['id'] ?>');" />
    <img id="staroff5" src="webroot/img/starOver.png" onmouseover="star5off5()" />
    <img id="staron5" style="display: none;" src="webroot/img/starOut.png" onmouseover="star5on5()" onclick="giveNote('5','<?php echo $logement['id'] ?>','<?php echo $_SESSION['id'] ?>');" />
    <?php
} elseif (isset($_POST['note'])) {
    include '../const.php';
    setNote($_POST['note'], $_POST['loId'], $_POST['idm']);
    ?><p><?php
session_start();
                if ($_SESSION['langue'] == "fr") {
                    echo "Vous avez not&eacute; ce logement.";
                } elseif ($_SESSION['langue'] == "en") {
                    echo "You have noted this housing.";
                } elseif ($_SESSION['langue'] == "de") {
                    echo "Sie haben diese Wohnung bewertet";
                } elseif ($_SESSION['langue'] == "es") {
                    echo "Usted se&ntilde;al&oacute; que la vivienda.";
                }
                ?> 
        </p><?php
} else {

    if (calcNote($logement['id']) == "0") {
        ?> 
        <img src="webroot/img/starOver.png" />
        <img src="webroot/img/starOver.png" />
        <img src="webroot/img/starOver.png" />
        <img src="webroot/img/starOver.png" />
        <img src="webroot/img/starOver.png" />
        <?php
    } elseif (calcNote($logement['id']) == "1") {
        ?> 
        <img src="webroot/img/starOut.png" />
        <img src="webroot/img/starOver.png" />
        <img src="webroot/img/starOver.png" />
        <img src="webroot/img/starOver.png" />
        <img src="webroot/img/starOver.png" />
        <?php
    } elseif (calcNote($logement['id']) == "2") {
        ?> 
        <img src="webroot/img/starOut.png" />
        <img src="webroot/img/starOut.png" />
        <img src="webroot/img/starOver.png" />
        <img src="webroot/img/starOver.png" />
        <img src="webroot/img/starOver.png" />
        <?php
    } elseif (calcNote($logement['id']) == "3") {
        ?> 
        <img src="webroot/img/starOut.png" />
        <img src="webroot/img/starOut.png" />
        <img src="webroot/img/starOut.png" />
        <img src="webroot/img/starOver.png" />
        <img src="webroot/img/starOver.png" />
        <?php
    } elseif (calcNote($logement['id']) == "4") {
        ?> 
        <img src="webroot/img/starOut.png" />
        <img src="webroot/img/starOut.png" />
        <img src="webroot/img/starOut.png" />
        <img src="webroot/img/starOut.png" />
        <img src="webroot/img/starOver.png" />
        <?php
    } elseif (calcNote($logement['id']) == "5") {
        ?> 
        <img src="webroot/img/starOut.png" />
        <img src="webroot/img/starOut.png" />
        <img src="webroot/img/starOut.png" />
        <img src="webroot/img/starOut.png" />
        <img src="webroot/img/starOut.png" />
        <?php
    }
}
?>
