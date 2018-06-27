<?php namespace Models;
session_start();
/**
* 
*/
class Search 
{
	private $mysqli;
	private $producto;
	function __construct()
	{
	$this->mysqli = new Conexion();
	$this->producto=new Products();
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
	$sql2=$sql." and price>5  order by price desc";

		$data2 = $this->mysqli->retorno($sql2) or die(mysqli_error($this->mysqli));
			$total=mysqli_num_rows($data2);
			$paginas= ceil($total/24);
			//echo mysqli_num_rows($data2);
			if ($args[5]=='1') {
			$sql.=" and price>5  order by price desc  limit ". ($args[5]*24)  ;
		//echo $sql;
			}
			else{
				$inicio=(($args[5]-1)*24)+1;
					$sql.=" and price>5 order by price desc  limit ". $inicio .",24" ;
			}
			echo $sql;

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
//produs.php?type=$1&sezon=$2&size=$3&brand=$4&profil=$5&speedIndex=$6&loadIndex=$7&id=$8
			$link="".ucfirst(strtolower('anvelope'))."-".ucfirst(strtolower($fila['sezon']))."-".$fila['latime'].$fila['inaltime'].$fila['radius']."-".ucfirst(strtolower($fila['Brand']))."-".ucfirst(strtolower($fila['Profil']))."-".$fila['load_index']."-".$fila['speed_index']."-".$fila['CODE'].".html";

		$img2="";
		  if($fila["image_url"]==""){
	$img2="images/2/69.png";
		  }
		  else{
		  	$img2="http://".$fila["image_url"];
		  }
$result.="<div class=\"col-md-3 product\"><article>
			<h4 onclick='getProductById(\"".$link."\")'>Anvelope  ".ucfirst(strtolower($fila["categorie"]))." ".$fila["sezon"]." <br>".$fila["latime"]."/".$fila["inaltime"]." ".$fila["radius"]."  ".ucfirst(strtolower($fila["Brand"]))."<br>".ucfirst(strtolower($fila["Profil"]))." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$fila["load_index"].$fila["speed_index"]."  </h4>
			<div class='crop'>
			<p> 
		  <img  data-toggle=\"modal\" data-target=\"#image".$img."\" src=\"".$img2."\" alt=\"Avatar\" class=\"image\"></p></div>
		  	<h3>".number_format($fila["price"]*1.01,2,'.','')." Lei</h3>
		  
		  	".$labes."
		  	<button onclick=\"compare('".$fila["CODE"]."')\" class='btn btnBlack ' >Compare</button><button onclick=\"setBasket('".$fila['CODE']."',$('#qyt".$img."').val(),'".number_format($fila["price"]*1.01,2,'.','')."')\" class=\"btn btn-danger\">Buy</span></button>
		  	 <div class=\"fb-share-button\" data-href=\"http://4tires.ro/index.php\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F".$link."&amp;src=sdkpreparse\" class=\"fb-xfbml-parse-ignore\">Compartir</a></div>
		 ".$fila['idSupplier']."</article> </div>";


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


public function searchBatteries()
	{	
	$args = func_get_args();
		$ii= count($args);
		$j=0;
		$sql="	SELECT * FROM impaaccesories ";
	
		//******************************************
		if($args[2]<>''){
			if ($j==0) {
				$sql.=" where  `desc` like '%".$args[2]."%'";
				$j=1;
			}
			else{
				$sql.="and  latime='".$args[2]."'";
			}
		}
		//******************************************
		if($args[3]<>''){
			if ($j==0) {
				$sql.=" where  subcategorie='".$args[3]."'";
				$j=1;
			}
			else{
				$sql.="and  subcategorie='".$args[3]."'";
			}
		}

	$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));


$res="";
	while ($fila = $data->fetch_assoc()) 
		{
			$res.="<div class=\"row\">
					<div class='col-md-2'><img src=\"".$fila["image"]."\" alt=\"".$fila["desc"]." \" class=\"img-thumbnail\"></div>
				<div class='col-md-6'><h3>".$fila["desc"]."</h3></div>
				<div class='col-md-4'><h3><p class=\"text-danger\">".$fila["price"]."</p>
				<button class='btn btnBlack ' >Compare</button><button class=\"btn btn-danger\">Buy</span></button>
				</div>
			</div>
			";

		}




return $res;







	}//end function


public function getCameras()
{
$args = func_get_args();
		$ii= count($args);
		$j=0;
		$sql="	SELECT * FROM cameras ";
	
		//******************************************
		if($args[2]<>''){
			if ($j==0) {
				$sql.=" where  Dimensiune = '".$args[2]."'";
				$j=1;
			}
			else{
				$sql.="and  Dimensiune='".$args[2]."'";
			}
		}
		//******************************************
		if($args[3]<>''){
			if ($j==0) {
				$sql.=" where  Diametru='".$args[3]."'";
				$j=1;
			}
			else{
				$sql.="and  Diametru='".$args[3]."'";
			}
		}
		//******************************************
		if($args[4]<>''){
			if ($j==0) {
				$sql.=" where  TipValva='".$args[4]."'";
				$j=1;
			}
			else{
				$sql.="and  TipValva='".$args[4]."'";
			}
		}

	$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));


$res="";
	while ($fila = $data->fetch_assoc()) 
		{
			$res.="<div class=\"row\">
					<div class='col-md-2'><img src=\"".$fila["image"]."\" alt=\"".$fila["desc"]."\" class=\"img-thumbnail\"></div>
				<div class='col-md-6'><h3>".$fila["desc"]."</h3></div>
				<div class='col-md-4'><h3><p class=\"text-danger\">".$fila["price"]."</p>
				<button class='btn btnBlack ' >Compare</button><button class=\"btn btn-danger\">Buy</span></button>
				</div>
			</div>
			";

		}




return $res;
}

public function Listing()
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
	$sql2=$sql." and price>5  order by price ASC";

		$data2 = $this->mysqli->retorno($sql2) or die(mysqli_error($this->mysqli));
			$total=mysqli_num_rows($data2);
			$paginas= ceil($total/24);
			//echo mysqli_num_rows($data2);
			if ($args[5]=='1') {
			$sql.=" and price>5 ORDER BY price DESC, stock ASC  "  ;
		//echo $sql;
			}
			else{
				$inicio=(($args[5]-1)*24)+1;
					$sql.=" and price>5 ORDER BY price DESC, stock ASC   " ;
			}
			echo $sql;

		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		

		//echo count($args);
		$result=" ";
		$msg="";
		$img=0;
	

		while ($fila = $data->fetch_assoc()) 
		{

  $img2="".$fila["image_url"];

				$labes="<div id=\"labels\"><div class=\"row\"><div class=\"col-md-4 petrol\"></div><div class=\"col-md-4 weat\"></div><div class=\"col-md-4 sound\"></div></div>    
						<div class=\"row\"><div class=\"col-md-4 label-".trim($fila["rulare"])."\"></div><div class=\"col-md-4 label-".trim($fila["Franare"])."\"></div><div class=\"col-md-4\"><p class=\"text-left\">".$fila["fundal"]."dB</p></div></div> </div>";
/*$button=" <span class=\"input-group-btn\">
        <button onclick=\"setBasket('".$fila['CODE']."','1','".number_format($this->producto->getPrice($fila['CODE'],'2')*1.01,2,'.','')."')\"  class=\"btn btn-danger\" type=\"button\">Buy</button>
      </span>
  </div>";*/
  $button=" <span class=\"input-group-btn\">
        <button onclick=\"setBasket('".$fila['CODE']."','1','".number_format($fila['price']*1.01,2,'.','')."')\"  class=\"btn btn-danger\" type=\"button\">Buy</button>
      </span>
  </div>";

				$link="".ucfirst(strtolower('anvelope'))."-".ucfirst(strtolower($fila['sezon']))."-".$fila['latime'].$fila['inaltime'].$fila['radius']."-".ucfirst(strtolower($fila['Brand']))."-".ucfirst(strtolower($fila['Profil']))."-".$fila['load_index']."-".$fila['speed_index']."-".$fila['CODE'].".html";

				$twitter="<div id=\"widget\"><a class=\"twitter-share-button\"
  href=\"https://twitter.com/intent/tweet?text=http://www.4tires.ro/$link&via=4tiresRO\"
  data-size=\"large\">
<img class='imgT' src='img/Twitter+Button.jpg'></a></div>";
			$result.="<div class='row product'>
					<div class='col-md-2 '>
						<div class='crop'>
							<p> 
		 					 <img  data-toggle=\"modal\" data-target=\"#image".$img."\" src=\"".$img2."\" alt=\"Avatar\" class=\"image\"></p></div>
						".$labes."	
						</div>
					<div class='col-md-5 '><h1 class='text-title' onclick='getProductById(\"".$link."\")'>Anvelope  ".ucfirst(strtolower($fila["categorie"]))." ".$fila["sezon"]."".$fila["latime"]."/".$fila["inaltime"]." ".$fila["radius"]."  ".ucfirst(strtolower($fila["Brand"]))." ".ucfirst(strtolower($fila["Profil"]))." ".$fila["load_index"].$fila["speed_index"]."  </h1> $twitter
					<div class='entypo-facebook'><div class=\"fb-share-button \" data-href=\"".$link."\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F".$link."&layout=button&locale=ro_RO&mobile_iframe=true&sdk=joey&size=large\" class=\"fb-xfbml-parse-ignore\"><img class='fb-style' src='img/Facebook-share-button.png'></a></div></div>

					</div>
					<div class='col-md-2'>
					<p class=\"text-price\">".number_format($fila['price']*1.01,2,'.','')." Lei</p>
					<p class='text-success'>Pretul include <br> Eco Vloarea si T.V.A.</p><br>".$fila["idSupplier"]."
					<button onclick=\"compare('".$fila["CODE"]."')\" class='btn btnBlack ' >Compara</button>		

					</div>
					<div class='col-md-3'>
				<div class='row'><div class='col-md-12'>	<h4 id=stock>Stoc: ".$fila["stock"]." </h4> 

				</div></div>
					<div class='row'><div class='col-md-12'><br><br><br><br>$button </></div>		
		  	 
		  	 
					</div>


			 </div>";
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
    	<div class='col-md-6'> <img src=\"".$fila["image_url"]."\"></div>
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

</div><br><br>";

			 $img++;
	} 
		//echo $sql;
	
		$result.="";	
			return $result;
}//end function




} //end of class


?>