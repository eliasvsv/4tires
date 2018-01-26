<?php
session_start();
if(!isset( $_SESSION["basket"])){
	 $_SESSION["basket"]=array();
}	
	if(empty($_SESSION["basket"])){
			$_SESSION["basket"]=array( array("cod"=>$_GET["cod"],"q"=> $_GET["q"]));
		}else{		
$cart = $_SESSION["basket"];
array_push($cart, array("cod"=>$_GET["cod"],"q"=> $_GET["q"]));
				$_SESSION["basket"] = $cart;
		}

/*if(!isset( $_SESSION["basket"])){
	 $_SESSION["basket"]=array();
}	


$_SESSIONS["basket"][$_GET["cod"]]= $_GET["q"];
print_r(session_save_path());

echo var_dump($_SESSIONS);

*/

?>