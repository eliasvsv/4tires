<?php
require 'envelope.php';
require 'simple_html_dom.php';
$url="http://anvelope.biz/index.php?page=search";
$data="adv_search=1&pass_value=1&skip=0&order=&deliveryaddress=&query=1757013&profil=-&class=-&speed=-&weight=-&min=&max=";
if(isset($_GET["txtSearch"])){
$data="adv_search=1&pass_value=1&skip=0&order=&deliveryaddress=&query=".$_GET['txtSearch']."&profil=-&class=-&speed=-&weight=-&min=&max=";

}
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
foreach ($products as $product) {

	/*
$jsonResult.="{\"description\":\"".$product->children(0)->plaintext."\",";
$jsonResult.="\"brand\":\"".$product->children(1)->plaintext."\",";
$jsonResult.="\"priceNonVat\":\"".$product->children(2)->plaintext."\",";
$jsonResult.="\"priceVAT\":\"".$product->children(10)->plaintext."\"},"; */
$description= trim($product->children(0)->plaintext);
echo $product->children(0)->find("a",0)->src;
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
?>