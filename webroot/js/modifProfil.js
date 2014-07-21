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

