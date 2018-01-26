<?php
session_start();


if (isset($_SESSION['promo'])) {
		$cart = $_SESSION["promo"];
		$r="<table class=\"table table-bordered\"><tr><th>Code</th><th>Description</th></tr>";
			foreach ($cart as $c=>$code) {
				$mysqli= new mysqli("localhost","root",'' , "web");
				$data=$mysqli->query("select * from nexxon where code='".$c."'");
				$tire=$data->fetch_assoc();
				$mysqli->close();

			$r.="<tr><td>".$c."</td><td>".$tire["latime"].$tire["inaltime"]."/".$tire["radius"]." ".$tire["load_index"].$tire["speed_index"]." ".$tire["brand"]." ".$tire["profil"]."</td></tr>";
						}
		$r.="</table>";	
}
else
{
$r="<h3>No Items</h3>"	;
}

			
		echo $r;
?>