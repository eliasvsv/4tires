 function addUser () {

$.post( "functions/users/adduser.php",$("#addUserForm").serialize());// end post
$('#addUserModal').modal('hide');
getUsers();
}// end adduser
function getUsers () {
$.post( "functions/users/getUsers.php", function( data ) {
  $( "#usersTable" ).html( data );
});// end post
}// end get user
function deleteUser (iduser2) {
$.post( "functions/users/deleteUser.php",{iduser:iduser2})
  .done(function( data ) {
getUsers();
  }); 
}//end delete
function getUserById (iduser2) {
$.post( "functions/users/getUserById.php",{iduser:iduser2})
  .done(function( data ) {
    var myObj = JSON.parse(data);
    $("#idM").val(myObj.iduser);
    $("#fullNameM").val(myObj.fullname);
    $("#emailM").val(myObj.email);
    $("#userM").val(myObj.user);
    $("#passwordM").val(myObj.password);

  }); 
}
function editUser () {
  $.post( "functions/users/editUser.php",$("#editUserForm").serialize());// end post
$('#editUserModal').modal('hide');
getUsers();

}