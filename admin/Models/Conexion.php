<?php namespace Models;

/**
* 
*/
class Conexion 
{
	private $mysqli;
	function __construct()
	{
		@define("SERVIDOR", "localhost");
		@define("USUARIO", "root");
		@define("CLAVE", "");
		@define("BD", "web");
		$this->mysqli = new \mysqli(SERVIDOR,USUARIO, CLAVE, BD);
	}
public function retorno($sql)
	{
		$datos =$this->mysqli->query($sql);
		return $datos;
	}
}
?>