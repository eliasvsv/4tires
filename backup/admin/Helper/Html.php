<?php namespace Helper;
class Html 
{
	private $mysqli;
	function __construct()
	{
		$this->mysqli = new Conexion();
	}
public	function getFilter($filter)
	{
		$result="<select id=\" $filter \" name=\" $filter \" >";

		$sql="select distinict(".$filter.")from nexxon";
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($mysqli));
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<option value=\"".$fila['$filter']."</td><td>".$fila[$filter]."</td><td></td></tr>";
		}
		$result.="</select>";
		return $result;
	} // end function getemails
} // end class
?>