   function addSupplier() {

$.post( "functions/suppliers/add.php",$("#addSupplierForm").serialize());// end post
$('#addSupplierModal').modal('hide');
$('#addSupplierModal').on('hidden.bs.modal', function (e) {
getSuppliers();
})

}// end adduser
function getSuppliers () {
$.post( "functions/suppliers/get.php", function( data ) {
  $( "#usersTable" ).html( data );
});// end post
}// end get Suppliers
function deleteSupplier (id) {
$.post( "functions/suppliers/delete.php",{id:id})
  .done(function( data ) {
getSuppliers();
  }); 
}//end delete