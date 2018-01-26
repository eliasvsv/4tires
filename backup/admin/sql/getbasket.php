<?php
session_start();
$cart = $_SESSION["basket"];
		$r=0;
			foreach ($cart as $c) {
			$r=$r+	$c["q"];
						}
		echo var_dump($_SESSION["basket"]);
?>