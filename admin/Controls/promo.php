<?php
  session_start();
 if(!isset($_SESSIONS["promo"])){
 	$_SESSIONS["promo"]=null;
 }
$cart = $_SESSION["promo"];
$code=$_POST["cod"];
	if(empty($cart)){
		$cart= array();
			$cart[$code]="codw";
		}else{		

				 if(!isset($cart[$code])){
				 	$cart[$code]="codw";
				 			
				 }

		}
echo var_dump($cart);
$_SESSION['promo']=$cart;
//;
//echo session_id();

?>
