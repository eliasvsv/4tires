<?php
ini_set("memory_limit",-1);
include('simple_html_dom.php');
$html=file_get_html('table3.html');
$mysqli = new mysqli("localhost", "root", "realmadrid", "web");

//echo var_dump($page);
/*$source=str_get_html($page);
$products=$source->find("div.Product");
*/
//echo $page;
// Find all <div> which attribute id=foo
foreach($html->find('table',0)->find("tr") as $tr) {
if(count($tr->children())==16){
	$lsi=trim($tr->children(5)->plaintext);
	$img=$tr->children(4)->find("img",0);
	$pro="n/a";
	if (count($tr->children(6)->find("img"))>0) {
	$pro=$tr->children(6)->find("img",0)->alt.$tr->children(6)->find("img",1)->alt.$tr->children(6)->find("img",2)->alt;
	}
$tyre["seazon"]=$img->title;
$tyre["price"]= trim($tr->children(12)->plaintext);
$tyre["stock"]=$tr->children(11)->plaintext;
$tyre["desc"]=str_replace("'", " ", $tr->children(3)->plaintext);
$tyre["brand"]=$tr->children(2)->plaintext;
$tyre["speedIndex"]=substr($lsi, -1);
$tyre["loadIndex"]=substr($lsi, 0,-1); 
$tyre["profil"]=$pro;
$sql="insert into sprin(id,descript,brand,seazon,speedIndex,loadIndex,profil,cost,stock,price) values(0,'".$tyre["desc"]."','".$tyre["brand"]."','".$tyre["seazon"]."','".$tyre["speedIndex"]."','".$tyre["loadIndex"]."','".$tyre["profil"]."','".$tyre["price"]."','".$tyre["stock"]."','0') ";
$mysqli->query($sql) or  trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($mysqli), E_USER_ERROR);

}

}

?>
