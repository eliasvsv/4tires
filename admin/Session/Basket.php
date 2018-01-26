<?php namespace Session;
session_start();
/**
* 
*/
class Basket 
{
	public function add()
	{
			$args = func_get_args();
	 if(!isset($_SESSIONS["basket"])){
 		$_SESSIONS["basket"]=null;
 		}
		$cart = $_SESSION["basket"];
		$code=$args[2];
		$qyt=$args[3];
		$price=$args[4];


	if(empty($cart)){
		$cart= array();
			$cart[$code]["q"]=$qyt;
			$cart[$code]["p"]=$price;
		}else{		
				
					 if(!isset($cart[$code])){
			$cart[$code]["q"]=$qyt;
			$cart[$code]["p"]=$price;
				 			
						}
						else{
								$cart[$code]["q"]=$cart[$code]["q"]+$qyt;
						}
		}
				

	

	$_SESSION['basket']=$cart;

	return 0;
	}//end function

	public function get()
	{	$r=0;
		if(!isset($_SESSION["basket"])){
			$_SESSION["basket"]=null;
		}
		else{
					@$cart = $_SESSION["basket"];
					
					//echo var_dump($cart);
					if (count($cart)>0) {
						foreach ($cart as $key => $item) {
							$r=$r+ $item["q"];
						}
					}
		}

		return $r;
		
	}

	public function test()
	{
		echo var_dump($_SESSION["basket"]);
	}
	public function clear(){
		unset($_SESSION['basket']);
	}
	public function deleteItem(){
		$args = func_get_args();
			unset($_SESSION['basket'][$args[2]]);
	}
}

