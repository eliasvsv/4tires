<?php
include("../config.php");
	$mysqli = new mysqli(SERVIDOR,USUARIO, CLAVE, BD);
	$sql="insert into categories(idCategory,name,description) values(0,'".$_POST['name']."','".$_POST['description']."')";
    $mysqli->query($sql) or die(mysqli_error($mysqli));
?>