<?php
include("../config.php");
	$mysqli = new mysqli(SERVIDOR,USUARIO, CLAVE, BD);
	$sql="insert into admins(iduser,fullname,user,password,email) values(0,'".$_POST['fullName']."','".$_POST['user']."','".$_POST['password']."','".$_POST['email']."')";
    $mysqli->query($sql) or die(mysqli_error($mysqli));

?>