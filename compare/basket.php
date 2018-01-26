<?php
  session_start();
 if(!isset($_SESSIONS["compare"])){
 	$_SESSIONS["compare"]=null;
 }
$cart = $_SESSION["compare"];
$code=$_POST["cod"];

	if(empty($cart)){
		$cart= array();
			$cart[$code]="codw";
		}else{		
				$i=count($cart);
				if($i==0 or $i<4){
					 if(!isset($cart[$code])){
				 	$cart[$code]="codw";
				 			
				 }
				}
				

		}

$_SESSION['compare']=$cart;
//;
//echo session_id();

?>
