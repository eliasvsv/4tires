<?php
$mysqli = new mysqli("localhost", "root", "", "web"); 
//echo $html->outertext;
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
$array2=parse_csv_file("1.csv");
foreach ($array2 as $array) {
	$sql="insert into anvelope(`Partener central`,`Articol id`,Denumire,Profil,Grupa,Clasa,Subgrupa,Brand,Stoc,Ecovaloare,price) values('".$array["Partener central"]."','".$array["Articol id"] ."','".$array["Denumire"] ."','". $array["Profil"]."','". $array["Grupa"]."','". $array["Clasa"]."','".$array["Subgrupa"] ."','".$array["Brand"] ."','". $array["Stoc"]."','".$array["Ecovaloare"] ."','".$array["Pret fara TVA si fara ecovaloare"] ."')";
		$mysqli->query($sql) or  trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error(), E_USER_ERROR);
	# code...
}




/*
$sql="";
foreach ($array2 as $array) {
$sql="insert into mails (id,address) value(0,'".key($array)."')";
    $mysqli->query($sql) or  trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error(), E_USER_ERROR);
//echo $array[0]."<br>";
    foreach ($array as $key) {
       if($key!=""){
$sql="insert into mails (id,address) value(0,'".$key."')";
    $mysqli->query($sql) or  trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error(), E_USER_ERROR);

       }
        # code...
    }
}

    SELECT b.`Articol id`, b.Denumire,a.categorie,b.clasa,b.price AS price1,a.pret AS price2 FROM nexxon a, anvelope b WHERE a.latime='175' 
AND a.inaltime='70' AND a.radius='R13' AND b.Denumire LIKE '%175/70R13%' AND a.brand = b.Brand AND b.Profil = a.profil AND a.sezon= b.Subgrupa


*/



?>