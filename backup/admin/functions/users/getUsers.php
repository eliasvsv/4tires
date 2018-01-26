<?php
include("../config.php");
$mysqli = new mysqli(SERVIDOR,USUARIO, CLAVE, BD);
$sql="select * from admins";
$data = $mysqli->query($sql) or die(mysqli_error($mysqli));
$resultado="<table class='table table-striped'>
 <tr><th align='right' colspan='5'>
<button  type='button' class='btn btn-success pull-right btn-xs' data-toggle='modal' data-target='#addUserModal'>
  Add User +
</button></th></tr>
<tr><th>#</th><th>Name</th><th>Email</th><th>Modify</th><th>Delete</th></tr>";
while ($fila = $data->fetch_assoc()) 
		{
    	$resultado.= " <tr><td>".$fila['iduser']."</td><td>".$fila['fullname']."</td><td>".$fila['email']."</td><td><span onclick=getUserById(\"".$fila['iduser']."\") data-toggle='modal' data-target='#editUserModal' class='glyphicon glyphicon-pencil' aria-hidden='true'></span></td><td><span onclick='deleteUser(".$fila['iduser'].")' class='glyphicon glyphicon-trash' aria-hidden='true'></span></td></tr>";
		}
		$resultado.=" </table>";
echo $resultado;
?>