<?php
ini_set('memory_limit', '-1');
$mysqli = new mysqli("localhost", "root", "", "web");
//http://www.nexxon.ro/anvelope.xml/516v93tS/autoturisme
//http://www.nexxon.ro/anvelope.xml/516v93tS/autoutilitare
//http://www.nexxon.ro/anvelope.xml/516v93tS/atv
//$html = file_get_contents("http://www.nexxon.ro/anvelope.xml/516v93tS/autoturisme");
//http://www.nexxon.ro/anvelope.xml/516v93tS/offroad
//http://www.nexxon.ro/anvelope.xml/516v93tS/camioane
//http://www.nexxon.ro/anvelope.xml/516v93tS/implement
//AGRICOLE
//forestiere
//industriale
//combine
//gradinarit
//echo $html->outertext;
//militare
//stivuitoare
//remorci
$html = file_get_contents("http://www.nexxon.ro/anvelope.xml/516v93tS/agricole");
//$xml = simplexml_load_string($html);
$xml = simplexml_load_string($html, 'SimpleXMLElement', LIBXML_NOCDATA);
$xmlJson = json_encode($xml);
$xmlArr = json_decode($xmlJson, 1); // Returns associative array
foreach ( $xml->produse as $product  ) {
	$sql="INSERT INTO nexxon(`code`,`categorie`, `brand`,`profil`,`latime`,`inaltime`,`radius`,`load_index`,`speed_index`,`specification`,`tube`,`fold`,`descriere`,`sezon`,`image_url`,`rulare`, `franare`,`fundal`,`zgomot`, `stoc`, `pret`)VALUES ('$product->code', '$product->categorie', '$product->brand','$product->profil','$product->latime','$product->inaltime', '$product->radius','$product->load_index','$product->speed_index','$product->specification','$product->tube', '$product->fold','".  base64_encode($product->descriere)."','$product->sezon','http://".$product->image_url->img["src"]."','$product->rulare','$product->franare','$product->fundal','$product->zgomot','$product->stoc','$product->pret')";
	$mysqli->query($sql) or  trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($mysqli), E_USER_ERROR);
//echo $sql;
//break;#
//$sql="update nexxon set image_url='". $product->image_url->img["src"]."' where code='".$product->code."'";
//$mysqli->query($sql) or  trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error(), E_USER_ERROR);
//print var_dump($xmlArr->descriere[0]);

}

?>
