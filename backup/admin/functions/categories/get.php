<?php
include("../config.php");
$mysqli = new mysqli(SERVIDOR,USUARIO, CLAVE, BD);
$sql="select * from categories";
$data = $mysqli->query($sql) or die(mysqli_error($mysqli));
$resultado="<table class='table table-striped'>
 <tr><th align='right' colspan='3'>
<button  type='button' class='btn btn-success pull-right btn-xs' data-toggle='modal' data-target='#addCategoryModal'>
  Add Category +
</button></th></tr>
<tr><th>#</th><th>Name</th><th>Delete</th></tr>";
while ($fila = $data->fetch_assoc()) 
		{
    	$resultado.= " <tr><td>".$fila['idCategory']."</td><td>".$fila['name']."</td><td><span onclick='deleteCategory(".$fila['idCategory'].")' class='glyphicon glyphicon-trash' aria-hidden='true'></span></td></tr>";
		}
		$resultado.=" </table>";
echo $resultado;
?>