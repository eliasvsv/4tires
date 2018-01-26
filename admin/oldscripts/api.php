<?php
require 'envelope.php';
require 'simple_html_dom.php';
$k=0;
for ($ii=1; $ii <=295 ; $ii++) { 
	$url="http://anvelope.biz/index.php?page=search";
$data="adv_search=1&pass_value=1&skip=".$k."&order=&deliveryaddress=&query=A%20%20%20%20%20%20%20%20%20%20R&profil=-&class=-&speed=-&weight=-&min=&max=";
//$page= envelope\envelope::grab_page($url,$data);
//envelope\envelope::login();
$page= envelope\envelope::grab_page($url,$data);
//echo var_dump($page);
$source=str_get_html($page);
$products=$source->find("div.Product");
/*echo  $source->find("div.Product",1)->children(0)->outertext;
echo  $source->find("div.Product",1)->children(1);
echo  $source->find("div.Product",1)->children(2);
echo  $source->find("div.Product",1)->children(10);
*/
$jsonResult="{\"products\":[";
$p=array();
$i=0;
$mysqli = new mysqli("localhost", "root", "realmadrid", "web");
foreach ($products as $product) {
if(!$i==0){
$articulo["description"]=trim($product->children(0)->plaintext);
$articulo["brand"]=$product->children(1)->plaintext;
$articulo["price"]=$product->children(10)->plaintext;
$articulo["link"]=str_replace("'", "", $product->children(0)->find("a[href]",0)->href);
$sql="insert into anvelope (id,description,price,brand,link) values(0,'".$articulo["description"]."','".$articulo["price"]."','".$articulo["brand"]."','".$articulo["link"]."')";

//echo $sql."<br>";
$mysqli->query($sql);

}
	/*
}
$jsonResult.="{\"description\":\"".$product->children(0)->plaintext."\",";
$jsonResult.="\"brand\":\"".$product->children(1)->plaintext."\",";
$jsonResult.="\"priceNonVat\":\"".$product->children(2)->plaintext."\",";
$jsonResult.="\"priceVAT\":\"".$product->children(10)->plaintext."\"},"; */



/*if(substr($description,0,1)=="*"){
 $p[$i]["description"] =substr($description,7,strlen($description)-1);
}
else
{
 $p[$i]["description"] =$product->children(0)->plaintext;	
}

  $p[$i]["brand"] =$product->children(1)->plaintext;
  $p[$i]["priceNonVat"] =$product->children(2)->plaintext;
    $p[$i]["priceVAT"] =$product->children(10)->plaintext;*/
  $i++;

}
//$result = substr($jsonResult, 0, -1)."]}";

//echo json_encode($p);
$k=$k+20;
}

?>