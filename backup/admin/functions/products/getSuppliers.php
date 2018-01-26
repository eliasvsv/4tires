<?php
include("../config.php");
$mysqli = new mysqli(SERVIDOR,USUARIO, CLAVE, BD);
$sql="select * from suppliers";
$data = $mysqli->query($sql) or die(mysqli_error($mysqli));
$resultado="<select id='supplier' name='supplier' class='form-control'>";
while ($fila = $data->fetch_assoc()) 
		{
    	$resultado.= " <option value=".$fila['id'].">".$fila['name']."</option>";
		}
		$resultado.=" </select>";
echo $resultado;
?>