<?php
$mysqli = new mysqli("localhost", "root", "", "web"); 
//echo $html->outertext;
require 'simple_html_dom.php';
//require 'admin/oldscripts/envelope.php';
//$url="https://www.impar.ro/ro/Anvelope-c61.html?limit=5000";
$url="https://www.impar.ro/ro/Anvelope/Camion-c61c67.html?limit=999";
//$page= envelope\envelope::grab_pageGET($url);
/**/
 $login = curl_init();
    curl_setopt($login, CURLOPT_TIMEOUT, 40000);
    curl_setopt($login, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($login, CURLOPT_URL, $url);
	curl_setopt($login, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36');
    curl_setopt($login, CURLOPT_FOLLOWLOCATION, TRUE);
 $pagina=   curl_exec ($login);
$source=str_get_html($pagina);
$items = $source->find('div.product-layout'); 
/*$sql="insert into rotis(id,produs,dimensiune,indici,aplicatie,price,rulare,franare,fundal) values('".$code[$i]."','".$producto["produs"]."','".$producto["dimensiune"]."','".$producto["indici"]."','".$producto["aplicatie"]."','".$producto["price"]."','".$producto["rulare"]."','".$producto["franare"]."','".$producto["fundal"]."')";
$mysqli->query($sql) or  trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($mysqli), E_USER_ERROR);*/
echo count($source->find('div.product-layout') );

foreach ($items as $item) {
$desc= $item->find("h4",0)->plaintext;
$link= $item->find("div.image",0)->children(0)->href;
$image= $item->find("div.image",0)->children(0)->children(0)->src;
$price=$item->find("p.price",0)->children(0)->plaintext;
$sql="INSERT INTO `web`.`impar`(`id`,  `desc`,     `link`,          `image`, `price`) values(0,'".$desc."','".$link."','".$image."','".$price."')";
$mysqli->query($sql) or  trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($mysqli), E_USER_ERROR);
}
?>