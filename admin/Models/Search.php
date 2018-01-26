<?php namespace Models;
session_start();
/**
* 
*/
class Search 
{
	private $mysqli;
	function __construct()
	{
	$this->mysqli = new Conexion();
	}
public function searchProducts()
	{	
	$args = func_get_args();
		$ii= count($args);
		$j=0;
		$sql="	SELECT * FROM vwautoturisme ";
	
		//******************************************
		if($args[2]<>''){
			if ($j==0) {
				$sql.=" where  latime='".$args[2]."'";
				$j=1;
			}
			else{
				$sql.="and  latime='".$args[2]."'";
			}
		}
		//******************************************
		if($args[3]<>''){
			if ($j==0) {
				$sql.=" where  inaltime='".$args[3]."'";
				$j=1;
			}
			else{
				$sql.="and  inaltime='".$args[3]."'";
			}
		}
		//******************************************
		if($args[4]<>''){
			if ($j==0) {
				$sql.=" where  radius='".$args[4]."'";
				$j=1;
			}
			else{
				$sql.="and  radius='".$args[4]."'";
			}
		}
		//******************************************
		if($args[6]<>''){
			if ($j==0) {
				$sql.=" where  categorie='".$args[6]."'";
				$j=1;
			}
			else{
				$sql.="and  categorie='".$args[6]."'";
			}
		}
		if($args[7]<>''){
			if ($j==0) {
				$sql.=" where  sezon='".$args[7]."'";
				$j=1;
			}
			else{
				$sql.="and  sezon='".$args[7]."'";
			}
		}
		//******************************************
	$sql2=$sql."  order by price asc";

		$data2 = $this->mysqli->retorno($sql2) or die(mysqli_error($this->mysqli));
			$total=mysqli_num_rows($data2);
			$paginas= ceil($total/24);
			//echo mysqli_num_rows($data2);
			if ($args[5]=='1') {
			$sql.="  order by price asc  limit ". ($args[5]*24)  ;
		//echo $sql;
			}
			else{
				$inicio=(($args[5]-1)*24)+1;
					$sql.="order by price asc  limit ". $inicio .",24" ;
			}
			//echo $sql;

		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		

		//echo count($args);
		$result="<div class='row'> ";
		$msg="";
		$img=0;
	

		while ($fila = $data->fetch_assoc()) 
		{
			if ($fila['idSupplier']=='3') {
				$msg="Livrarea: in 7 zile lucratoare dupa cumparare.";
			}
			$labes="<div id=\"labels\"><div class=\"row\"><div class=\"col-md-4 petrol\"></div><div class=\"col-md-4 weat\"></div><div class=\"col-md-4 sound\"></div></div>    
<div class=\"row\"><div class=\"col-md-4 label-".trim($fila["rulare"])."\"></div><div class=\"col-md-4 label-".trim($fila["Franare"])."\"></div><div class=\"col-md-4\"><p class=\"text-left\">".$fila["fundal"]."dB</p></div></div><span class=\"label label-success\">Stock: </span>  <span class=\"badge\">".$fila["stock"]."</span> </div>";
/*
				$result.="<div class='row Product'><div class=\"col-md-1 crop\"><p> 
		  <img  data-toggle=\"modal\" data-target=\"#image".$img."\" src=\"http://".$fila["image_url"]."\" alt=\"Avatar\" class=\"image\"></p></div><div onclick='getProductById(\"".$fila["CODE"]."\")' class=\"col-md-3\">  <h4>Anvelope ".$fila["sezon"]." <br>".$fila["latime"]."/".$fila["inaltime"]." ".$fila["radius"]." ".$fila["load_index"].$fila["speed_index"]."<br>".ucfirst(strtolower($fila["Brand"]))." ".ucfirst(strtolower($fila["Profil"]))." </h4></div><div class=\"col-md-4\"> 
		  <h5>Anvelope ".ucfirst(strtolower($fila["categorie"]))."</h5>".$labes."</div> <div class=\"col-md-1\"><h3>".number_format($fila["price"]*1.01,2,'.','')." Lei</h3><br><h5>$msg</h5>
           </div><div class=\"col-md-2\"><br><div class=\"input-group\"><input id='qyt".$img."' type=\"text\" class=\"form-control\" placeholder=\"0.00\" aria-describedby=\"basic-addon1\">   <span class=\"input-group-btn\"><button onclick=\"setBasket('".$fila['CODE']."',$('#qyt".$img."').val(),'".number_format($fila["price"]*1.01,2,'.','')."')\" class=\"btn btn-danger\">Add</span></button></span>
</div></div></div>

		";
		$result.="<div id=\"image".$img."\" class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
  <div class=\"modal-dialog modal-sm\" role=\"document\">
    <div class=\"modal-content\">
     <img src=\"http://".$fila["image_url"]."\">
    </div>
  </div>
</div>";*/

//*********************************************************************************************************************************************************************
//*********************************************************************************************************************************************************************
$result.="<div class=\"col-md-3 product\">
			<h4 onclick='getProductById(\"".$fila["CODE"]."\")'>Anvelope  ".ucfirst(strtolower($fila["categorie"]))." ".$fila["sezon"]." <br>".$fila["latime"]."/".$fila["inaltime"]." ".$fila["radius"]."  ".ucfirst(strtolower($fila["Brand"]))."<br>".ucfirst(strtolower($fila["Profil"]))." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$fila["load_index"].$fila["speed_index"]."  </h4>
			<div class='crop'>
			<p> 
		  <img  data-toggle=\"modal\" data-target=\"#image".$img."\" src=\"http://".$fila["image_url"]."\" alt=\"Avatar\" class=\"image\"></p></div>
		  	<h3>".number_format($fila["price"]*1.01,2,'.','')." Lei</h3>
		  
		  	".$labes."
		  	<button onclick=\"compare('".$fila["CODE"]."')\" class='btn btnBlack ' >Compare</button><button onclick=\"setBasket('".$fila['CODE']."',$('#qyt".$img."').val(),'".number_format($fila["price"]*1.01,2,'.','')."')\" class=\"btn btn-danger\">Buy</span></button>
		 ".$fila['idSupplier']." </div>";


//******************************************************************************************************************************************************
//***********************************************************table*************************************************************************************
$table="<table class=\"table table-bordered\">
<tr>
	<th>Latime</th>
	<td>".$fila["latime"]."</td>
</tr>
<tr>
	<th>Inaltime</th>
	<td>".$fila["inaltime"]."</td>
</tr>
<tr>
	<th>Radius</th>
	<td>".$fila["radius"]."</td>
</tr>
<tr>
	<th>Speed Index</th>
	<td>".$fila["speed_index"]."</td>
</tr>
<tr>
	<th>load_index</th>
	<td>".$fila["load_index"]."</td>
</tr>

</table>";








		  $result.="<div id=\"image".$img."\" class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
  <div class=\"modal-dialog modal-sm\" role=\"document\">
    <div class=\"modal-content\">
    <div class'row'>
    	<div class='col-md-6'> <img src=\"http://".$fila["image_url"]."\"></div>
    	<div class='col-md-6'> <div class=\"description\">
					<div id=\"labelling-front\" style=\"\">
                    <div class=\"labelBG\">
                        <span class=\"plabel labelWet ".trim($fila["Franare"])." \"></span>
                        <span class=\"plabel labelGrip". trim($fila["rulare"])." \"></span>
                        <span class=\"plabel labelNoiseClass2\"></span>
                        <span class=\"labelNoiseVal\"> ".trim($fila["fundal"])."</span>
                    </div>
                </div>
				</div></div>
    </div>
    
    
     ".$table."
    </div>
  </div>
</div>";









		  $img++;
	} 
		//echo $sql;
	
		$result.="</div>".$this->pagination($paginas,$args[5]);	
			return $result;
	}// end function


public function pagination($total,$actual)
{
	$pagination="<div class='row'>
			<div class='col-md-1'></div>
			<div class='col-md-10'>
					<nav aria-label=\"...\">
  <ul class=\"pagination\">";
	for ($i=1; $i <=$total ; $i++) { 
		if ($i=='1') {
			if ($actual=='1') {
				$pagination.="<li class=\"disabled\"><a href=\"#\" aria-label=\"Previous\"><span aria-hidden=\"true\">&laquo;</span></a></li>
    <li onclick='searchProducts(\"$i\")' class=\"active\"><a href=\"#\">1 <span class=\"sr-only\">(current)</span></a></li>";
			}
			else{
				$pagination.="<li  onclick='searchProducts(\"$i\")'><a href=\"#\" aria-label=\"Previous\"><span aria-hidden=\"true\">&laquo;</span></a></li>
    <li><a href=\"#\">1</a></li>";
			}
			
		}else{
			if($actual==$i){
				$pagination.=" <li class=\"active\"  onclick='searchProducts(\"$i\")'><a href=\"#\">$i<span class=\"sr-only\">(current)</span></a></li>";
			}else{
				$pagination.=" <li  onclick='searchProducts(\"$i\")'><a href=\"#\">$i</a></li>";
			}
		}

		# code...
	}
$pagination.="
    <li>
      <a href=\"#\" aria-label=\"Next\">
        <span aria-hidden=\"true\">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
			</div>
			<div class='col-md-1'></div>
	</div>";
	return $pagination;
}





} //end of class


?>