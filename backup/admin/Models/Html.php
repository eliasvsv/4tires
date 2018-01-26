<?php namespace Models;
class Html 
{
	private $mysqli;
	function __construct()
	{
		$this->mysqli = new Conexion();
	}
public	function getFilter($filter)
	{
		$result="<div class=\"form-group\">
  <label for=\"$filter\">".$filter."</label><select class=\"form-control $filter\" id=\"$filter\" name=\"$filter\" >";
  $result.="<option value=\"\">Default</option>";

		$sql="select DISTINCT(".$filter.") from nexxon";
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<option value=\"".$fila[$filter]."\">".$fila[$filter]."</option>";
		}
		$result.="</select></div>";
		
		return $result;
	} // end function getemails
} // end class
?>