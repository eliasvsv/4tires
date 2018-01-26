<?php
include("../config.php");
$mysqli = new mysqli(SERVIDOR,USUARIO, CLAVE, BD);
$sql="select * from suppliers";
$data = $mysqli->query($sql) or die(mysqli_error($mysqli));
$resultado="<table class='table table-striped'>
 <tr><th align='right' colspan='4'>
<button  type='button' class='btn btn-success pull-right btn-xs' data-toggle='modal' data-target='#addSupplierModal'>
  Add Supplier +
</button></th></tr>
<tr><th>#</th><th>Name</th><th>phone</th><th>Delete</th></tr>";
while ($fila = $data->fetch_assoc()) 
		{
    	$resultado.= " <tr><td>".$fila['id']."</td><td>".$fila['name']."</td><td>".$fila['phone']."</td><td><span onclick='deleteSupplier(".$fila['id'].")' class='glyphicon glyphicon-trash' aria-hidden='true'></span></td></tr>";
		}
		$resultado.=" </table>";
echo $resultado;
?>