<?php
if(isset($_POST['login'])&&isset($_POST['pwd'])){
    connectAdmin($_POST['login'], $_POST['pwd']);
}
if (isset($_SESSION['admin'])) {
    header('location:index.php?page=admin');
} else {
    ?>
        <div style="border: 1px solid brown; text-align: center;margin-left: 20%;margin-right: 20%; margin-top: 70px"  >
            <h1 style="color:brown">Connexion</h1>
            <form method="post" action="index.php?page=connexion" >
                <label for="login" >Login</label>
                <input type="text" id="login" name="login"/><br/><br/>
                <label for="pwd" >Mot de Passe</label>
                <input type="text" id="pwd" name="pwd"/><br/><br/>
                <input type="submit" value="Connexion" /><br/><br/>
            </form>
        </div>
    <?php

}
?>
