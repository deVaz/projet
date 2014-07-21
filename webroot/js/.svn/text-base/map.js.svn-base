var geocoder;
var map;
var masquer;
function initialize() {
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(48.8566667, 2.3509871);
    var myOptions = {
        zoom: 15,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(document.getElementById("carte"), myOptions);
}

function codeAddress() {
    addr = document.getElementById("local").value;
    if(addr.length == 0){
        address = "France"
    }
    geocoder.geocode( {
        'address': addr
    }, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location
            });
        }
    });
}
  
function fetchMap(){
if(masquer == 0 ){
    document.getElementById("boutonCarte").value = "Masquer la carte";
    masquer = 1;
}else{
    document.getElementById("boutonCarte").value = "Afficher la carte";
    masquer = 0;
}
    $('#carte').slideToggle()
}