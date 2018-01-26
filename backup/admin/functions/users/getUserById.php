<?php
include("../config.php");
$mysqli = new mysqli(SERVIDOR,USUARIO, CLAVE, BD);
$sql="select * from admins where iduser=".$_POST['iduser'];
$data = $mysqli->query($sql) or die(mysqli_error($mysqli));
$resultado="{";
while ($fila = $data->fetch_assoc()) 
		{
    	$resultado.="\"iduser\":\"".$fila['iduser']."\",\"fullname\":\"".$fila['fullname']."\",\"user\":\"".$fila['user']."\",\"password\":\"".$fila['password']."\",\"email\":\"".$fila['email']."\"";
    	}
		$resultado.=" }";
echo $resultado;
?>