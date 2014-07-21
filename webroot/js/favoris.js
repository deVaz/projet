function removeToFavoris(id){
    if(confirm("Voulez vous supprimer cette annonce de vos favoris ?")){
    $.ajax({
  type: "GET",
  url: "webroot/js/addFavorite.php?supr="+id ,
  success: function(){
    afficher(id);
  }
});
}}
function afficher(id){
$('#open'+id).fadeToggle();
}