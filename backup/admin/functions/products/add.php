<?php
include("../config.php");
	$mysqli = new mysqli(SERVIDOR,USUARIO, CLAVE, BD);
	$sql="insert into products(id,name,description,price,idsupplier,picture,registerDate,onindex,idcategory) values(0,'".$_POST['name']."','".$_POST['description']."','".$_POST['price']."','".$_POST['supplier']."','".$_POST['picture']."',CURDATE(),'".$_POST['onindex']."','".$_POST['category']."')";
    $mysqli->query($sql) or die(mysqli_error($mysqli));
?>