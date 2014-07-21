function removeToAnnonce(id){
    if(confirm("Voulez vous supprimer cette annonce ?")){
    $.ajax({
  type: "GET",
  url: "webroot/js/removeAnnonce.php?supr="+id ,
  success: function(){
    afficher(id);
  }
});
}}
function afficher(id){
$('#open'+id).slideToggle();
}