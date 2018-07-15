<?php
include("simple_html_dom.php");
$mysqli = new mysqli("localhost", "root", "", "web");
$html = file_get_html("http://www.chimonobrasov.ro/refine/results,1-5000.html?Categorie=Anvelope%20agricole&filter_product=");
$products=$html->find("div.product");
//echo count($products);
foreach ($products as $p) {
	$p2=$p->find("table",0)->find("td");
$img= $p2[0]->find("a",0)->href."<br>";
$size= $p2[1]->plaintext."<br>";
$link= "http://www.chimonobrasov.ro". $p2[1]->find("a",0)->href."<br>";
$description= $p2[2]->plaintext."<br>";
$price= $p2[3]->plaintext."<br>";
$sql="INSERT INTO `web`.`chimono` (
  `id`,
  `img`,
  `size`,
  `link`,
  `description`,
  `price`
) 
VALUES
  (
    0,
    '$img',
    '$size',
    '$link',
    '$description',
    '$price'
  ) ;

";
$mysqli->query($sql) or  trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($mysqli), E_USER_ERROR);
}


//$mysqli->query($sql) or  trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($mysqli), E_USER_ERROR);

?>