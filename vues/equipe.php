<div id="body">
    <fieldset style="border:1px solid brown">
        <legend style="color:brown"><?php
                                if ($_SESSION['langue'] == "fr") {
                                    echo "Notre équipe";
                                } elseif ($_SESSION['langue'] == "en") {
                                    echo "Our team";
                                } elseif ($_SESSION['langue'] == "de") {
                                    echo "Unser Team";
                                } elseif ($_SESSION['langue'] == "es") {
                                    echo "Nuestro equipo";
                                }
                                ?></legend>
        <center>
        <table>
            <tr>
                <td>
                    <center><img src="webroot/img/photos/jb.jpg" alt="jbcs" class="identite"/></center> 
                </td>
                <td>
                    <center><img src="webroot/img/photos/dubi.jpg" alt="vd" class="identite"/></center>    
                </td>
                <td>
                    <center><img src="webroot/img/photos/jo.jpg" alt="aj" class="identite"/></center>    
                </td>
            </tr>
            <tr>
                <td>
                    <center>Jean-Baptiste Casadepax-Soulet</center>    
                </td>
                <td>
                    <center>Victor Dubillot</center>    
                </td>
                <td>
                    <center>Jonathan Franguidakis</center>    
                </td>
            </tr>
            <tr>
                <td>
                    <center><img src="webroot/img/photos/wence.jpg" alt="aj" class="identite"/></center>
                </td>
                <td>
                    <center><img src="webroot/img/photos/aj.jpg" alt="wk" class="identite"/></center>    
                </td>
                <td>
                    <center><img src="webroot/img/photos/matthieu.jpg" alt="mn" class="identite"/></center>    
                </td>
            </tr>
            <tr>
                <td>
                    <center>Wenceslas Kerrand</center>    
                </td>
                <td>
                    <center>Antoine Jouve</center>    
                </td>
                <td>
                    <center>Matthieu Nouard<center>    
                </td>
            </tr>
        </table>
        </center>
    </fieldset>
</div>