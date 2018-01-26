<?php
include("../config.php");
$mysqli = new mysqli(SERVIDOR,USUARIO, CLAVE, BD);
$sql="SELECT a.id,a.name,b.name AS suppliter,c.name AS category FROM products a,  suppliers b , categories c WHERE a.idcategory = c.idCategory  AND a.idsupplier =b.id ";
$data = $mysqli->query($sql) or die(mysqli_error($mysqli));
$resultado="<table class='table table-striped'>
 <tr><th align='right' colspan='5'>
<button  type='button' class='btn btn-success pull-right btn-xs' data-toggle='modal' data-target='#addProductModal'>
  Add Category +
</button></th></tr>
<tr><th>#</th><th>Name</th><th>suppliter</th><th>category</th><th>Delete</th></tr>";
while ($fila = $data->fetch_assoc()) 
		{
    	$resultado.= " <tr><td>".$fila['id']."</td><td>".$fila['name']."</td><td>".$fila['suppliter']."</td><td>".$fila['category']."</td><td><span onclick='deleteProduct(\"".$fila['id']."\")' class='glyphicon glyphicon-trash' aria-hidden='true'></span></td></tr>";
		}
		$resultado.=" </table>";
echo $resultado;
?>