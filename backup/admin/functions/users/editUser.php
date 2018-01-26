<?php
include("../config.php");
	$mysqli = new mysqli(SERVIDOR,USUARIO, CLAVE, BD);
	$sql="update admins set fullname='".$_POST['fullNameM']."' , user='".$_POST['userM']."' , password='".$_POST['passwordM']."', email='".$_POST['emailM']."' where iduser='".$_POST['idM']."'";
    $mysqli->query($sql) or die(mysqli_error($mysqli));
?>