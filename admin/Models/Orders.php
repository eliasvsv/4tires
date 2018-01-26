<?php namespace Models;
session_start();
/**
* 
*/
class Orders 
{
	private $mysqli;
	function __construct()
	{
	$this->mysqli = new Conexion();
	}
public function create(){
		$args = func_get_args();
		$id=date("YmdHis"); 
		$fecha=date("Y-m-d H:i:s"); 

		$sql="insert into orders(id,date,isopen) value('$id','$fecha','1')";
		$this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		$this->createDetalle($id);
		//$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));

}
private function createDetalle($id){
	@$cart = $_SESSION["basket"];

					
					//echo var_dump($cart);
				$i=0;
						foreach ($cart as $key => $item) {
							$r=$r+ $item;
								$sql="insert into orders_line(idLine,idOrder,idProduct,q,vat,price)  
								values('$i','$id','$key','".$item["q"]."','".($item["p"]*0.19)*$item["q"]."','".$item["p"]."')";
							$this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
						}
					

}
}
?>