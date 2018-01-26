<?php
include("../config.php");
	$mysqli = new mysqli(SERVIDOR,USUARIO, CLAVE, BD);
	$sql="delete from admins where iduser='".$_POST['iduser']."'";
    $mysqli->query($sql) or die(mysqli_error($mysqli));
?>