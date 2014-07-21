<?php
if(isset ($_POST['ville'])&&isset ($_POST['loyerMin'])&&isset ($_POST['loyerMax'])&&isset ($_POST['type'])&&isset ($_POST['superMin'])&&isset ($_POST['superMax'])){
    insertAlert($_POST['ville'], $_POST['loyerMin'], $_POST['loyerMax'], $_POST['type'], $_POST['superMin'], $_POST['superMax']);
    header('location:../index.php?page=membreAlert&erreur=0');
}elseif(isset ($_GET['supr'])){
    suprAlert($_GET['supr']);
    header('location:../index.php?page=membreAlert');
}else{
    header('location:../index.php?page=membreAlert&erreur=1');
}
?>
