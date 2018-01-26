<?php
require 'simple_html_dom.php';
$html = file_get_html("http://www.nexxon.ro/anvelope/?category=0&season=0&width=0&height=0&radius=0&load_index=0&speed_index=0&brand=0&profile=0&cauta=Afiseaza+%3A+26+&inputString=&p=1#lista");
$items = $html->find('div[style="float:left; width: 158px; margin-bottom: 10px; padding: 7px; border-top: 1px solid #000;"]'); 
for ($i=1; $i <21 ; $i++) { 
$articulo["titulo"] =substr(trim($items[$i-1]->find("h4", 0)->find("a[title]",0)->plaintext),9);
$articulo["precio"] = $items[$i-1]->children(5)->plaintext;
$articulo["link"] = $items[$i-1]->find("h4", 0)->find("a[href]",0)->href ;
echo "insert into products (cod,name,price,link) values(0,'".$articulo["titulo"]."','".$articulo["precio"]."','".$articulo["link"]."')<br>";
}
?>