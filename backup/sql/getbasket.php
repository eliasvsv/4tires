<?php
session_start();
$i=0;
	if(isset($_SESSION["basket"])){
		$cart= $_SESSION["basket"];
		foreach ($cart as $c) {
			$i=$i+$c["q"];
			
				}
	}
				echo $i;
?>