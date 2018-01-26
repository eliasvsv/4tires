<?php
ini_set('memory_limit', '-1');
$mysqli = new mysqli("eu-cdbr-azure-west-b.cloudapp.net", "b3013fb5d42628", "cf6a788a", "acsm_9758a53f5ce815c");
//http://www.nexxon.ro/anvelope.xml/516v93tS/autoturisme
//http://www.nexxon.ro/anvelope.xml/516v93tS/autoutilitare
//http://www.nexxon.ro/anvelope.xml/516v93tS/atv
//$html = file_get_contents("http://www.nexxon.ro/anvelope.xml/516v93tS/autoturisme");
//echo $html->outertext;
$html = file_get_contents("http://www.nexxon.ro/anvelope.xml/516v93tS/autoturisme");
//$xml = simplexml_load_string($html);
$xml = simplexml_load_string($html, 'SimpleXMLElement', LIBXML_NOCDATA);
$xmlJson = json_encode($xml);
$xmlArr = json_decode($xmlJson, 1); // Returns associative array
foreach ( $xml->produse as $product  ) {
	$sql="INSERT INTO nexxon(`code`,`categorie`, `brand`,`profil`,`latime`,`inaltime`,`radius`,`load_index`,`speed_index`,`specification`,`tube`,`fold`,`descriere`,`sezon`,`image_url`,`rulare`, `franare`,`fundal`,`zgomot`, `stoc`, `pret`)VALUES ('$product->code', '$product->categorie', '$product->brand','$product->profil','$product->latime','$product->inaltime', '$product->radius','$product->load_index','$product->speed_index','$product->specification','$product->tube', '$product->fold','".  base64_encode($product->descriere)."','$product->sezon','".$product->image_url->img["src"]."','$product->rulare','$product->franare','$product->fundal','$product->zgomot','$product->stoc','$product->pret')";
	$mysqli->query($sql) or  trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error(), E_USER_ERROR);
//echo $sql;
//break;#
/*$sql="update nexxon set image_url='". $product->image_url->img["src"]."' where code='".$product->code."'";
$mysqli->query($sql) or  trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error(), E_USER_ERROR);
print var_dump($xmlArr->descriere[0]);
*/
}

?>
