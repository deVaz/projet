var pseudo;
var mdp;
var mail;
var form;
var cond1;
function checkFormatPseudo(str){
    var reg = /^[a-zA-Z0-9]+$/;
    if(reg.test(str)){
        return true;
    }else{
        return false;
    }
}
function checkSize(str,min,max){
    if(str.length<min || str.length>max){
        return false;
    }else{
        return true;
    }
}
function checkEqual(str1,str2){
    if(str1==str2){
        return true;
    }else{
        return false;
    }
}
function checkPwd(str1,str2){
    if(checkSize(str1,6,32)){
        if(checkEqual(str1,str2)){
            document.getElementById("ajaxPwd").innerHTML="Les mots de passe sont corrects";
            document.getElementById("ajaxPwd").style.color="green";
            mdp=1;
        }else{
            document.getElementById("ajaxPwd").innerHTML="Les mots de passe ne sont pas identiques";
            document.getElementById("ajaxPwd").style.color="red";  
            mdp=0;
        }
    }else{
        document.getElementById("ajaxPwd").innerHTML="Le mot de passe n'est pas au bon format";
        document.getElementById("ajaxPwd").style.color="red";
        mdp=0;
    }
}
function checkPseudo(str){
    if(checkFormatPseudo(str) && checkSize(str, 3, 32)){
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
                document.getElementById("ajaxLogin").innerHTML=xmlhttp.responseText;
                var reponseLogin = document.getElementById("reponsePseudo")
                if(reponseLogin.style.color == "green") pseudo=1;
                else pseudo = 0;
            }
        }
        xmlhttp.open("GET","controleurs/ajaxInscription.php?login="+str,false);
        xmlhttp.send();
    }else{
        document.getElementById("ajaxLogin").innerHTML="L'identifiant n'est pas au bon format ";
        document.getElementById("ajaxLogin").style.color="red";
        pseudo = 0;
    }
}
function checkVoid(){
    var nom = document.getElementById("lastName").value;
    var prenom = document.getElementById("firstName").value;
    var school = document.getElementById("etablissement").value;
    var text = [0,0,0];
    
    var reg = /^[a-zA-Z]+$/;
    if(!reg.test(nom)){
        document.getElementById("ajaxForm").innerHTML="Le nom n'est pas au bon format";
        document.getElementById("ajaxForm").style.color="red";
        text[0]=0;
        form = 0;
    }else{
        text[0]=1;
    }
    if(!reg.test(prenom)){
        document.getElementById("ajaxForm").innerHTML="Le prenom n'est pas au bon format";
        document.getElementById("ajaxForm").style.color="red";
        text[1]=0;
        form = 0;
    }else{
        text[1]=1;
    }
    if(!reg.test(school)){
        document.getElementById("ajaxForm").innerHTML="Le nom de l'&eacute;cole n'est pas au bon format";
        document.getElementById("ajaxForm").style.color="red";
        text[2]=0;
        form = 0;
    }else{
        text[2]=1;
    }
    if(text[0]==1&&text[1]==1&&text[2]==1){
        document.getElementById("ajaxForm").innerHTML="";
        form = 1;
    }    
}
function checkMail(mail1,mail2){
    var reg = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;
    if(checkEqual(mail1,mail2)){
        if(reg.test(mail1)){
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
                    document.getElementById("ajaxMail").innerHTML=xmlhttp.responseText;
                    var reponseMail = document.getElementById("reponseMail")
                    if(reponseMail.style.color == "green") mail=1;
                    else mail = 0;
                }
            }
            xmlhttp.open("GET","controleurs/ajaxInscription.php?mail="+mail1,false);
            xmlhttp.send();
        }else{
            document.getElementById("ajaxMail").innerHTML="L'adresse e-mail n'est pas au bon format";
            document.getElementById("ajaxMail").style.color="red"; 
            mail = 0;
        }
    }else{
        document.getElementById("ajaxMail").innerHTML="Les adresses e-mail ne sont pas identiques";
        document.getElementById("ajaxMail").style.color="red";
        mail =0;
    }
}
function checkCondition(){
    var cond = document.getElementById("condition").value;
    if(cond == true){
        cond1 = 1;
    }else{
        cond1 = 0;
    }
}
function validForm(){

    if(pseudo==1&&mdp==1&&mail==1&&form==1&&cond1==1){
        document.getElementById("submit").removeAttribute("disabled");
    }else{
         document.getElementById("submit").setAttribute("disabled","disabled");
    }
}