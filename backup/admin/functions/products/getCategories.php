<?php
include("../config.php");
$mysqli = new mysqli(SERVIDOR,USUARIO, CLAVE, BD);
$sql="select * from categories";
$data = $mysqli->query($sql) or die(mysqli_error($mysqli));
$resultado="<select id='category' name='category' class='form-control'>";
while ($fila = $data->fetch_assoc()) 
		{
    	$resultado.= " <option value=".$fila['idCategory'].">".$fila['name']."</option>";
		}
		$resultado.=" </select>";
echo $resultado;
?>