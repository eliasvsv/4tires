<?php
function select($sql)
	{
	$mysqli = new mysqli("localhost", "root", "realmadrid", "web");
	return $mysqli->query($sql);
}
function insert($sql){
		$mysqli = new mysqli("localhost", "root", "realmadrid", "web");
		if(!$mysqli->query($sql)){
 echo $mysqli->error();
		}
}
?>