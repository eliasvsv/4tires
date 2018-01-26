<?php
  session_start();
 if(!isset($_SESSIONS["basket"])){
 	$_SESSIONS["basket"]=null;
 }

	if(empty($_SESSION["basket"])){
			$_SESSION["basket"]=array( array("cod"=>$_GET["cod"],"q"=> $_GET["q"]));
		}else{		
$cart = $_SESSION["basket"];
array_push($cart, array("cod"=>$_GET["cod"],"q"=> $_GET["q"]));
				$_SESSION["basket"] = $cart;
		}

echo var_dump($_SESSIONS["basket"]);
echo session_id();

?>