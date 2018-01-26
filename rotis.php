<?php
$mysqli = new mysqli("localhost", "root", "", "web"); 
//echo $html->outertext;
require 'simple_html_dom.php';
require 'admin/oldscripts/envelope.php';

function parse_csv_file($csvfile) {
    $csv = Array();
    $rowcount = 0;
    if (($handle = fopen($csvfile, "r")) !== FALSE) {
        $max_line_length = defined('MAX_LINE_LENGTH') ? MAX_LINE_LENGTH : 10000;
        $header = fgetcsv($handle, $max_line_length);
        $header_colcount = count($header);
        while (($row = fgetcsv($handle, $max_line_length)) !== FALSE) {
            $row_colcount = count($row);
            if ($row_colcount == $header_colcount) {
                $entry = array_combine($header, $row);
                $csv[] = $entry;
            }
            else {
                error_log("csvreader: Invalid number of columns at line " . ($rowcount + 2) . " (row " . ($rowcount + 1) . "). Expected=$header_colcount Got=$row_colcount");
                return null;
            }
            $rowcount++;
        }
        //echo "Totally $rowcount rows found\n";
        fclose($handle);
    }
    else {
        error_log("csvreader: Could not read CSV \"$csvfile\"");
        return null;
    }
    return $csv;
}
$link="http://b2b.rotis.ro/printproduse/";
$ids="";
$ii=0;
$i=0;
$code=array();
$array2=parse_csv_file("stoc.csv");
foreach ($array2 as $array) {
if($i==0){
		$ids.=$array["id"];
$i=1;
}
else{
	$ids.="-".$array["id"];
}
$code[$ii]=$array["id"];
$ii++;
}

$url= $link.$ids;
//$mysqli = new mysqli("localhost", "root", "realmadrid", "web");
//echo $url;
$page= envelope\envelope::grab_pageGET($url);
$source=str_get_html($page);
$items = $source->find('.table',0); 
//$products=$source->find("table.table table-bordered");

$label= $items->find("tr",1)->children(5)->plaintext;
$rulare= $label[7];
$franare=$label[9];
$fundal=$label[11].$label[12];
//$producto["code"]=;




// $items->find("tr",1)->children(5)->children(5)->plaintext;

//echo $ii;

for ($i=0; $i <$ii ; $i++) { 
	$producto["produs"]=$items->find("tr",$i+1)->children(0)->plaintext;
$producto["dimensiune"]=$items->find("tr",$i+1)->children(1)->plaintext;
$producto["indici"]=$items->find("tr",$i+1)->children(2)->plaintext;
$producto["aplicatie"]=$items->find("tr",$i+1)->children(3)->plaintext;
$producto["price"]=$items->find("tr",$i+1)->children(4)->plaintext;
$producto["rulare"]=$items->find("tr",$i+1)->children(5)->children(1)->plaintext;
$producto["franare"]=$items->find("tr",$i+1)->children(5)->children(3)->plaintext;
$producto["fundal"]=$items->find("tr",$i+1)->children(5)->children(5)->plaintext;
$sql="insert into rotis(id,produs,dimensiune,indici,aplicatie,price,rulare,franare,fundal) values('".$code[$i]."','".$producto["produs"]."','".$producto["dimensiune"]."','".$producto["indici"]."','".$producto["aplicatie"]."','".$producto["price"]."','".$producto["rulare"]."','".$producto["franare"]."','".$producto["fundal"]."')";
$mysqli->query($sql) or  trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($mysqli), E_USER_ERROR);;
}