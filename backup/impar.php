<?php
ini_set("memory_limit",-1);
require 'envelope.php';
require 'simple_html_dom.php';
$url="http://www.impar.ro/ro/Anvelope/Autoturisme-c61c62.html?limit=6000";
$data="limit=1000";
$page= envelope\envelope::grab_page($url,$data);
$source=str_get_html($page);
$mysqli = new mysqli("localhost", "root", "realmadrid", "web");
$c=$source->find("h4");
$i=0;
foreach ($c as $key ) {
	$sql="INSERT INTO `web`.` impar`(id,description,price,link) values(0,'".$key->plaintext."','".$source->find("p.price",$i)->plaintext."','".$source->find("h4",$i)->find("a",0)->href."')";
	$mysqli->query($sql) or  trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($mysqli), E_USER_ERROR);

	$i++;
}

?>-