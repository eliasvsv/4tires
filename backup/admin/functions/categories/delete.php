<?php
include("../config.php");
	$mysqli = new mysqli(SERVIDOR,USUARIO, CLAVE, BD);
	$sql="delete from categories where idCategory='".$_POST['id']."'";
    $mysqli->query($sql) or die(mysqli_error($mysqli));
?>