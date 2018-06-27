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
public function createUser(){
$args = func_get_args();
	$sql="insert into users (id,user,password) values(0,'".$args[2]."','".md5($args[3])."')";
	$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
}// end function

public function getUsers(){
	$sql="SELECT * FROM  users";
		$result="<table class='table table-bordered'>";
		$result.="<tr><th>id</th><th>User</th><th>Edit</th><th>Delete </th><tr>";
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<tr><td>".$fila["id"]."</td><td>".$fila["user"]."</td><td><button type=\"button\"  class=\"btn btn-success\">Edit</button></td><td><button onclick=\"deleteOfert(".$fila['id'].")\" type=\"button\" class=\"btn btn-danger\"> <p class='fa fa-eraser'></p> </button></td></tr>";
		}
		$result.="</table>";
		return $result;
}

	} //end class
} // end namespace

?>