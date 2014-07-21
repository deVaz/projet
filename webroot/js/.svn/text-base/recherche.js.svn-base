function liste(){
    $('#local').autocomplete('webroot/js/loadVilles.php');
}

function validForm(){
    var str1 = document.getElementById("local").value;
    var str21 = document.getElementById("type1").value;
    var str22 = document.getElementById("type2").value;
    var str23 = document.getElementById("type3").value;
    var str24 = document.getElementById("type4").value;
    var str31 = document.getElementById("bien1").value;
    var str32 = document.getElementById("bien2").value;
    var str33 = document.getElementById("bien3").value;
    var str4 = document.getElementById("minprix").value;
    var str5 = document.getElementById("maxprix").value;
    var str6 = document.getElementById("minpiece").value;
    var str7 = document.getElementById("maxpiece").value;
    var str8 = document.getElementById("minchambre").value;
    var str9 = document.getElementById("maxchambre").value;
    var str10 = document.getElementById("mins").value;
    var str11 = document.getElementById("maxs").value;
    if(str1.length!=0&&(str21.length!=0||str22.length!=0||str23.length!=0||str24.length!=0)&&(str31.length!=0||str32.length!=0||str33.length!=0)&&str4.length!=0&&str5.length!=0&&str6.length!=0&&str7.length!=0&&str8.length!=0&&str9.length!=0&&str10.length!=0&&str11.length!=0){
        document.getElementById('recherchebouton').removeAttribute('disabled');
        document.getElementById('activeButton').innerHTML = "La recherche est correcte";
        document.getElementById('activeButton').style.color="green";
    }
    else{
        document.getElementById('activeButton').innerHTML = "Des champs sont manquants";
        document.getElementById('activeButton').style.color="red"; 
        document.getElementById('recherchebouton').setAttribute('disabled', 'disabled')
    }
}



