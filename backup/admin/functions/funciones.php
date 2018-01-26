<?php
include("config.php");
/**
* 
*/
class funciones  
{

	function getUsers()
	{

		$resultado="";
		$mysqli = new mysqli($SERVIDOR,$USUARIO, $CLAVE, $BD);
		$sql="select * from users";
		$data = $mysqli->query($sql);
		while ($fila = $data->fetch_assoc()) 
		{
    	$resultado.= " <tr><td>".$fila['id']."</td><td>".$fila['name']."</td><td>".$fila['surname']."</td><td></td><td></td></tr>";
		}
		return $resultado;
	}
}//class
?>