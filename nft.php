<?php
//username=dan.florin%40acvila-romania.ro&passwd=cv4dst7&back=my-account&SubmitLogin=Autentificare
require 'simple_html_dom.php';
ini_set('memory_limit', '-1');
$mysqli = new mysqli("localhost", "root", "", "web");
class envelope{
  static function  login(){
    $url="https://www.nft.ro/authentication?back=my-account";
    $data="username=dan.florin%40acvila-romania.ro&passwd=cv4dst7&back=my-account&SubmitLogin=Autentificare";
    $fp = fopen("cookie.txt", "w");
    fclose($fp);
    $login = curl_init();
    curl_setopt($login, CURLOPT_COOKIEJAR,dirname(__FILE__). "/cookie.txt");
    curl_setopt($login, CURLOPT_COOKIEFILE,dirname(__FILE__). "/cookie.txt");
    curl_setopt($login, CURLOPT_TIMEOUT, 400000);
    curl_setopt($login, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($login, CURLOPT_URL, $url);
	curl_setopt($login, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36');
    curl_setopt($login, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($login, CURLOPT_POST, TRUE);
    curl_setopt($login, CURLOPT_POSTFIELDS, $data);

   return curl_exec ($login);

    curl_close ($login);
  

	}  	
// adv_search=1&pass_value=1&skip=0&order=&deliveryaddress=&query=1757013&profil=-&class=-&speed=-&weight=-&min=&max=
//  http://anvelope.biz/index.php?page=search&action=product
    

	static function grab_page($site,$data){
  envelope::login();
    $login = curl_init();
    $headers = array(
    'Accept: application/json',
    'Content-Type: application/json',

    );
    curl_setopt($login, CURLOPT_COOKIEFILE,dirname(__FILE__). "/cookie.txt");
    curl_setopt($login, CURLOPT_TIMEOUT, 4000000);
    curl_setopt($login, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($login, CURLOPT_HEADER, 0);
    curl_setopt($login, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($login, CURLOPT_URL, $site."?".$data);
    curl_setopt($login, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36');
    curl_setopt($login, CURLOPT_FOLLOWLOCATION, TRUE);
    //curl_setopt($login, CURLOPT_POST, TRUE);
   // curl_setopt($login, CURLOPT_POSTFIELDS, $data);

    return curl_exec ($login);

    curl_close ($login);
	}

}
$nft= new envelope();
$page=$nft->grab_page("https://www.nft.ro/14-anvelope","id_category=14&n=5000&p=3");
$source=str_get_html($page); 
$products=$source->find("table.table",0)->find("tr");
$j =count($products);

for ($i=1; $i <$j ; $i++) { 
$img= $products[$i]->find("td",0)->find("img",0)->src;
$brand=$products[$i]->find("td",1)->plaintext;
$model=$products[$i]->find("td",2)->plaintext;
$latime=$products[$i]->find("td",3)->plaintext;
$inaltime=$products[$i]->find("td",4)->plaintext;
$radius=$products[$i]->find("td",5)->plaintext;
$load_index=$products[$i]->find("td",6)->plaintext;
$speed_index=$products[$i]->find("td",7)->plaintext;
$ms=$products[$i]->find("td",8)->plaintext;
$sezon=$products[$i]->find("td",9)->plaintext;
$grupa=$products[$i]->find("td",10)->plaintext;
$labels=$products[$i]->find("td",12)->plaintext;
$stoc=$products[$i]->find("td",13)->plaintext;
$price1=count( $products[$i]->find("td",14)->find("h4"));
$price=0;
if($price1>1){
	$price= $products[$i]->find("td",14)->find("h4",1)->plaintext;

}
else{
	$price= $products[$i]->find("td",14)->find("h4",0)->plaintext;
}
$sql="INSERT INTO `web`.`nft` (
  `id`,
  `img`,
  `brand`,
  `model`,
  `latime`,
  `inaltime`,
  `radius`,
  `load_index`,
  `speed_index`,
  `ms`,
  `sezon`,
  `grupa`,
  `labels`,
  `stoc`,
  `price`
) 
VALUES
  (
    0,
    '$img',
    '$brand',
    '$model',
    '$latime',
    '$inaltime',
    '$radius',
    '$load_index',
    '$speed_index',
    '$ms',
    '$sezon',
    '$grupa',
    '$labels',
    '$stoc',
    '$price'
  ) ";
	$mysqli->query($sql) or  trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($mysqli), E_USER_ERROR);
}


?>