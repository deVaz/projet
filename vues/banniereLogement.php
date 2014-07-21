<script src="webroot/js/galleria/galleria-1.2.6.min.js"></script>
<div id="banniereLogement" >
    <div id="gallery" style="width: 500px;" >
        <?php
        foreach ($photo as $value) {
         ?><img src="webroot/img/logements/<?php echo $value['photo'] ; ?>"  /><?php   
}
        ?>
    </div>
    <script>
        Galleria.loadTheme('webroot/js/galleria/themes/classic/galleria.classic.min.js');
        $("#gallery").galleria({
            width: 500,
            height: 500
        });
    </script>
</div>
