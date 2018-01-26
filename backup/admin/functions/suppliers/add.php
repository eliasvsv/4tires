<?php
include("../config.php");
	$mysqli = new mysqli(SERVIDOR,USUARIO, CLAVE, BD);
	$sql="insert into suppliers(id,name,phone,email,address) values(0,'".$_POST['name']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['address']."')";
    $mysqli->query($sql) or die(mysqli_error($mysqli));
?> 