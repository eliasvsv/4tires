<?php
function select($sql)
	{
	$mysqli = new mysqli("localhost", "root", "realmadrid", "web");
	return $mysqli->query($sql);
}
?>