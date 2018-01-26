<?php namespace Models;

/**
* 
*/
class Products 
{
	private $mysqli;
	function __construct()
	{
	$this->mysqli = new Conexion();
	}
public function searchProducts()
	{
		$args = func_get_args();
		$sql="	SELECT a.code as articol, b.Denumire,a.categorie,b.clasa,b.price AS anvelopePrice,a.pret AS nexxonPrice,a.`image_url` FROM nexxon a, anvelope b WHERE a.latime='".$args[2]."' 
AND a.inaltime='".$args[3]."' AND a.radius='".$args[4]."' AND b.Denumire LIKE '%".$args[2]."/".$args[3].$args[4]."%' AND a.brand = b.Brand AND b.Profil = a.profil AND a.sezon= b.Subgrupa";
// array ( 0 => 'Products', 1 => 'searchProducts', 2 => '155', 3 => '65', 4 => 'R15', 5 => '85', 6 => 'U', 7 => 'VARA', )
	/*	$sql="select DISTINCT(".$filter.") from nexxon";*/
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
	$result="";
		while ($fila = $data->fetch_assoc()) 
		{
				$result.="<div class=\"col-lg-3\"> <div class=\"Product\">
		  <img src=\"http://".$fila["image_url"]."\" alt=\"Avatar\" class=\"image\">
		  <h4>Price : ".$fila["anvelopePrice"]."<br> <small>".$fila["Denumire"]." <br>".$fila["categorie"]."</small></h4>
        <div class=\"overlay\">
            <div class=\"text\" onclick=\"getProductById('".$fila["articol"]."')\">Details</div>
        </div></div></div>

		";
		}
			return $result;
	}
//end funciont
public function getProductById()
{
		$args = func_get_args();
		//$sql="select * from nexxon where code='".$args[2]."'";
		$sql="SELECT a.code AS articol, b.Denumire,a.categorie,a.`profil`,a.`brand`,b.clasa,b.price AS anvelopePrice,a.pret AS nexxonPrice,a.`image_url` ,a.`descriere` FROM nexxon a, anvelope b WHERE   a.brand = b.Brand
AND b.Denumire LIKE CONCAT( '%',a.latime,'/',a.inaltime,a.radius,'%')  
 AND b.Profil = a.profil AND a.sezon= b.Subgrupa AND a.`code` = '".$args[2]."'
";

		$result="";
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		/*	while ($fila = $data->fetch_assoc()) 
		{
				$result.="<img width='auto' height='200px'  src='http://".$fila["image_url"]."'><br>";
				$des= str_replace("<![CDATA[","",base64_decode($fila["descriere"]));
				$result.= $des ;
		}
		return  $result;
		 }
*/
		 return  json_encode($data->fetch_assoc()); }

}
?>
