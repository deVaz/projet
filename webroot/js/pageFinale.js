function addToFavoris(id){
    $.ajax({
        type: "GET",
        url: "webroot/js/addFavorite.php?id="+id ,
        success: function(){
            afficher();
        }
    });
}
function afficher(){
    $('#ajoutFavoris').slideToggle();
}
function addComment(logement_id,membre_id,message){
{
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("affichageCommentaires").setAttribute("style", 'color:green');
            document.getElementById("affichageCommentaires").innerHTML = "Votre commentaire est enregistr&eacute;";
        }
    }
    xmlhttp.open('POST',"webroot/js/ajaxcommentLogement.php",true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send('logement_id='+logement_id+'&membre_id='+membre_id+'&message='+message);
}
}

function fetchVoirComment(){

$("#voirCommentaire").slideToggle();

}
function fetchEcrireComment(){

$("#redigerCommentaire").slideToggle();

}


