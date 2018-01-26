<?php namespace Models;
{
	session_start();
	class Users
	{
	private $mysqli;
	function __construct()
	{
	$this->mysqli = new Conexion();
	}
public function login(){
	$r=0;
	$args = func_get_args();
	$sql="select* from users where user='".$args[2]."' and password='".md5($args[3])."'";
	$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
	 $r=mysqli_num_rows($data);
	 if ($r==1) {
	 $_SESSION["admin"]=1;
	 }
	 return $r;

	}

	} //end class
} // end namespace

?>