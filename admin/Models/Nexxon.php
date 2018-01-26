<?php namespace Nexxon;
{
	class Products
	{

		private $mysqli;
	function __construct()
	{
	$this->mysqli = new \Models\Products\Conexion();
	}
public function getBrands(){
	$args = func_get_args();
	$sql="select  distinct(brand) from nexxon where categorie like '%AUTOTURISME%' order by brand";
	$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
	$result="<select class=\"form-control\" name='brand' id='brand'>";
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<option value='".$fila["brand"]."'>".$fila["brand"]."</option>";
		}
	$result .= "</select>";		
}

	}
}

?>