<?php namespace Api;

/**
* 
*/
class database 
{
	private $mysqli;
	private $server;
	private $user;
	private $pass;
	private $bd;
public	function __construct($config)
	{
		$this->server=$config["server"];
		$this->user=$config["user"];
		$this->pass=$config["pass"];
		$this->bd=$config["bd"];
		$this->mysqli = new \mysqli($this->server,$this->user, $this->pass, $this->bd);
	}
public function retorno($sql)
	{
		$datos =$this->mysqli->query($sql);
		return $datos;
	}
}
?>