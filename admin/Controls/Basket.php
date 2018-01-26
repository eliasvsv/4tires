<?php
  session_start();
 if(!isset($_SESSIONS["promo"])){
 	$_SESSIONS["promo"]=null;
 }

	if(empty($_SESSION["promo"])){
			$_SESSION["promo"]=array( array("cod"=>$_GET["cod"],"d"=> $_GET["d"]));
		}else{		
$cart = $_SESSION["promo"];
array_push($cart, array("cod"=>$_GET["cod"],"d"=> $_GET["d"]));
				$_SESSION["promo"] = $cart;
		}

echo var_dump($_SESSIONS["promo"]);
//echo session_id();

?>