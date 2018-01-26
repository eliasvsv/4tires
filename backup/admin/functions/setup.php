<?php
if(isset($_GET["p"])){
	$mysqli = new mysqli("localhost", "root", "realmadrid", "web"); 
$sql="insert into setup(profit) values('".$_GET["p"]."')";
if(!$mysqli->query($sql)){
echo $sql;
 echo $mysqli->error();
		}
}
?>