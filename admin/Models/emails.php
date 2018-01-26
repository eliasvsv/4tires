<?php namespace Models;
class emails 
{
	private $mysqli;
	function __construct()
	{
		$this->mysqli = new Conexion();
	}
public	function getEmails()
	{
		$result="<tr><th>id</th><th>Address</th><th></th><tr>";

		$sql="select * from mails limit 10";
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($mysqli));
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<tr><td>".$fila['id']."</td><td>".$fila['address']."</td><td></td></tr>";
		}
		return $result;
	} // end function getemails
} // end class
?>