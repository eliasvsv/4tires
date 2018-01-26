<?php
function update($url){
	//$mysqli = new mysqli("localhost", "root", "", "web"); 
//echo $html->outertext;
include_once('simple_html_dom.php');
//require 'admin/oldscripts/envelope.php';
//$url="https://www.impar.ro/ro/Anvelope/SUV-4x4/FORTUNE/Anvelopa-195-65-R15-FORTUNE-FSR901-91H-p83189c61c64.html";
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
$items =$source->find('div#tab-description',0)->find('tr'); 
/*$sql="insert into rotis(id,produs,dimensiune,indici,aplicatie,price,rulare,franare,fundal) values('".$code[$i]."','".$producto["produs"]."','".$producto["dimensiune"]."','".$producto["indici"]."','".$producto["aplicatie"]."','".$producto["price"]."','".$producto["rulare"]."','".$producto["franare"]."','".$producto["fundal"]."')";
$mysqli->query($sql) or  trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($mysqli), E_USER_ERROR);*/
//count($source->find('div#tab-description',0)->find('tr') );
$r="";
foreach ($items as $item) {
$r.= $item->plaintext;
}
$source->clear();
return $r;
//$link= $item->find("div.image",0)->children(0)->href;
//$image= $item->find("div.image",0)->children(0)->children(0)->src;
//$price=$item->find("p.price",0)->children(0)->plaintext;
//$sql="INSERT INTO `web`.`impar`(`id`,  `desc`,     `link`,          `image`, `price`) values(0,'".$desc."','".$link."','".$image."','".$price."')";
//$mysqli->query($sql) or  trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($mysqli), E_USER_ERROR);
}
$mysqli = new mysqli("localhost", "root", "", "web"); 
$sql="select * from impar where id>'1489'";
$products=$mysqli->query($sql) or  trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($mysqli), E_USER_ERROR);
foreach ($products as $product) {
$sql="update impar set data='".update($product['link'])."' where id='".$product['id']."'";
$products=$mysqli->query($sql) or  trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($mysqli), E_USER_ERROR);
}
?>