//Fonctions pour créer les forulaires en ajax
function formDellAnnonce()
{
    var xmlhttp;
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
            document.getElementById("messageAdmin").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","controleurs/ajaxFormulaires.php?type=dellAnnonce",true);
    xmlhttp.send();
}

function formDellCom()
{
    var xmlhttp;
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
            document.getElementById("messageAdmin").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","controleurs/ajaxFormulaires.php?type=dellCom",true);
    xmlhttp.send();
}
function formDellUser()
{
    var xmlhttp;
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
            document.getElementById("messageAdmin").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","controleurs/ajaxFormulaires.php?type=dellUser",true);
    xmlhttp.send();
}
function formMessage()
{
    var xmlhttp;
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
            document.getElementById("messageAdmin").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","controleurs/ajaxFormulaires.php?type=message",true);
    xmlhttp.send();
}

//fonctions d'affichage

function fetchComment(id)
{
    var xmlhttp;
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
            document.getElementById("contentComment").style.display = "";
            document.getElementById("contentComment").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","controleurs/ajaxFormulaires.php?type=fetchComment&id="+id,true);
    xmlhttp.send();
}
//les fonctions de traitement

function dellAnnonce(id)
{
    var xmlhttp;
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
            document.getElementById("reponseMessage").style.display = "";
            document.getElementById("reponseMessage").innerHTML="L'annonce est supprim&eacute;e";
        }
    }
    xmlhttp.open("GET","controleurs/ajaxFormulaires.php?type=trDellAnn&id="+id,true);
    xmlhttp.send();
}

function dellComm(id)
{
    var xmlhttp;
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
            document.getElementById(id).innerHTML="<td colspan='3' >Commentaire supprim&eacute;<td>";
        }
    }
    xmlhttp.open("GET","controleurs/ajaxFormulaires.php?type=trDellcomm&id="+id,true);
    xmlhttp.send();
}
function dellUser(id)
{
    var xmlhttp;
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
            document.getElementById("reponseMessage").style.display = "";
            document.getElementById("reponseMessage").innerHTML="L'utilisateur est supprim&eacute;.";
        }
    }
    xmlhttp.open("GET","controleurs/ajaxFormulaires.php?type=trDellUser&id="+id,true);
    xmlhttp.send();
}
function message(titre,text)
{
    var xmlhttp;
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
            document.getElementById("reponseMessage").style.display = "";
            document.getElementById("reponseMessage").innerHTML="Le message est envoy&eacute;.";
        }
    }
    xmlhttp.open("POST","controleurs/ajaxFormulaires.php",true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send("message=1&titre="+titre+"&text="+text);
}
function formContact()
{
    var xmlhttp;
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
            document.getElementById("messageAdmin").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","controleurs/ajaxFormulaires.php?type=formContact",true);
    xmlhttp.send();
}
function dellOldAnnonce()
{
    var xmlhttp;
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
            document.getElementById("messageAdmin").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","controleurs/ajaxFormulaires.php?type=dellOldAnnonce",true);
    xmlhttp.send();
}
function dellContact(id)
{
    var xmlhttp;
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
            document.getElementById(id).setAttribute("style", "display:none")
        }
    }
    xmlhttp.open("GET","controleurs/ajaxFormulaires.php?type=suprContact&id="+id,true);
    xmlhttp.send();
}