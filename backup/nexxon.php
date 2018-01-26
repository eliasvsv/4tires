<?php
require 'simple_html_dom.php';

$mysqli = new mysqli("localhost", "root", "realmadrid", "web");
$html = file_get_html("http://www.nexxon.ro/anvelope/?category=0&season=0&width=0&height=0&radius=0&load_index=0&speed_index=0&brand=0&profile=0&cauta=Afiseaza+%3A+26+&inputString=&p=".$_GET["j"]."#lista");
$items = $html->find('div[style="float:left; width: 158px; margin-bottom: 10px; padding: 7px; border-top: 1px solid #000;"]'); 
//echo $html->outertext;
for ($i=1; $i <21 ; $i++) { 
$articulo["titulo"] =substr(trim($items[$i-1]->find("h4", 0)->find("a[title]",0)->plaintext),9);
$articulo["precio"] = $items[$i-1]->children(5)->plaintext;
$articulo["link"] = $items[$i-1]->find("h4", 0)->find("a[href]",0)->href ;
$articulo["img"]= $items[$i-1]->find('img[style="margin-left: 30px;"]',0);
//$mysqli->query("insert into products1 (cod,name,price,link,img) values(0,'".$articulo["titulo"]."','".$articulo["precio"]."','".$articulo["link"]."','".$articulo["img"]."')");


}

?>