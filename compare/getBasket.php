<?php
session_start();
@$cart = $_SESSION["compare"];
	/*	$r="<table class=\"table table-bordered\"><tr><th>Code</th><th>Description</th></tr>";
			foreach ($cart as $c) {
			$r.="<tr><td>".$c['cod']."</td><td></td></tr>";
						}
		$r.="</table>";			*/	
if (isset($_SESSION['compare'])) {
		$cart = $_SESSION["compare"];
		$r="<table class=\"table table-bordered\"><tr><th>Code</th><th>Description</th></tr>";
			foreach ($cart as $c=>$code) {
						$mysqli= new mysqli("localhost","root",'' , "web");
				$data=$mysqli->query("select * from vwautoturisme where CODE='".$c."'");
				$tire=$data->fetch_assoc();
				$mysqli->close();

			$r.="<tr><td><img height=\"42px\" width=\"42px\" src='http://".$tire["image_url"]."'></td><td>".$tire["latime"].$tire["inaltime"]."/".$tire["radius"]." ".$tire["load_index"].$tire["speed_index"]." ".$tire["Brand"]." ".$tire["Profil"]."</td></tr>";
						}
		$r.="</table><button onclick='openCompare()'  class=\"btn btn-danger\">Compare</button><button onclick='clearCompare()'  class=\"btn btn-success\">Clear</button>";	
}
else
{
$r="<h3>No Items</h3>"	;
}
echo $r;

?>