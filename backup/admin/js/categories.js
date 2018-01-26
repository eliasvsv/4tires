   function addCategory() {

$.post( "functions/categories/add.php",$("#addCategoryForm").serialize());// end post
$('#addCategoryModal').modal('hide');
$('#addCategoryModal').on('hidden.bs.modal', function (e) {
getCategories();
})

}// end adduser
function getCategories () {
$.post( "functions/categories/get.php", function( data ) {
  $( "#usersTable" ).html( data );
});// end post
}// end get Suppliers

function deleteCategory (id) {
$.post( "functions/categories/delete.php",{id:id})
  .done(function( data ) {
getCategories();
  }); 
}//end delete