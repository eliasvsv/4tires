<?php
session_start();
$cart = $_SESSION["promo"];
		$r="<table class=\"table table-bordered\"><tr><th>Code</th><th>Description</th></tr>";
			foreach ($cart as $c) {
			$r.="<tr><td>".$c['cod']."</td><td>".$c['d']."</td></tr>";
						}
		$r.="</table>";				
		echo $cart];
?>