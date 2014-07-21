function messagerie(str)
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
            document.getElementById("messagerie").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","controleurs/ajaxMessagerie.php?type="+str,true);
    xmlhttp.send();
}

function getMessage(str1,str2)
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
            document.getElementById("messagerie").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","controleurs/ajaxMessagerie.php?type=message&idMessage="+str1+"&lecture="+str2,true);
    xmlhttp.send();
}

function deleteEnvoi(str)
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
    }
    xmlhttp.open("GET","controleurs/ajaxMessagerie.php?idEnvoi="+str,true);
    xmlhttp.send();
}
function deleteReception(str)
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
    }
    xmlhttp.open("GET","controleurs/ajaxMessagerie.php?idReception="+str,true);
    xmlhttp.send();
}

var i=2;
function addTypeFile(str){
    document.getElementById(str+i).style.display = "";
    
    i++;
}
function brouillon(id,destinataire,message,sujet){
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
            document.getElementById("messagerie").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("POST","controleurs/ajaxMessagerie.php",true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send("brouillon=1&idMembre="+id+"&destinataire="+destinataire+"&message="+message+"&sujet="+sujet);
}
function fetchBrouillon(){
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
            document.getElementById("messagerie").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","controleurs/ajaxMessagerie.php?type=getBrouillon",true);
    xmlhttp.send();
}
function getBrouillon(str){
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
            document.getElementById("messagerie").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","controleurs/ajaxMessagerie.php?type=readBrouillon&idBrouillon="+str,true);
    xmlhttp.send();
}
function deleteBrouillon(str){
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
            document.getElementById("messagerie").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","controleurs/ajaxMessagerie.php?type=deleteBrouillon&idBrouillon="+str,true);
    xmlhttp.send();
}
function getDelete(){
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
            document.getElementById("messagerie").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","controleurs/ajaxMessagerie.php?type=messageDelete",true);
    xmlhttp.send();
}
function deleteDeleteMessage(str){
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
            document.getElementById("messagerie").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","controleurs/ajaxMessagerie.php?idMessageDelete="+str,true);
    xmlhttp.send();
}