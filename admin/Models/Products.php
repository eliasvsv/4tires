<?php namespace Models;
@session_start();
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
		$ii= count($args);
		$j=0;
		$sql="	SELECT * FROM vwautoturisme ";
		if($args[2]<>''){
			if ($j==0) {
				$sql.=" where latime='".$args[2]."'";
				$j=1;
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
		if($args[5]<>''){
			if ($j==0) {
				$sql.=" where  load_index='".$args[5]."'";
				$j=1;
			}
			else{
				$sql.="and  load_index='".$args[5]."'";
			}
		}
		//******************************************
		if($args[6]<>''){
			if ($j==0) {
				$sql.=" where  speed_index='".$args[6]."'";
				$j=1;
			}
			else{
				$sql.="and  speed_index='".$args[6]."'";
			}
		}
		//******************************************
		if($args[7]<>''){
			if ($j==0) {
				$sql.=" where  categorie='".$args[7]."'";
				$j=1;
			}
			else{
				$sql.="and  categorie='".$args[7]."'";
			}
		}
		//******************************************
		if($args[9]<>''){
			if ($j==0) {
				$sql.=" where  Brand='".$args[9]."'";
				$j=1;
			}
			else{
				$sql.="and  Brand='".$args[9]."'";
			}
		}
		//******************************************
		if($args[10]<>''){
			if ($j==0) {
				$sql.=" where  Profil='".$args[10]."'";
				$j=1;
			}
			else{
				$sql.="and  Profil='".$args[10]."'";
			}
		}
		//******************************************
		if($args[8]<>''){
			if ($j==0) {
				$sql.=" where  sezon='".$args[8]."'";
				$j=1;
			}
			else{
				$sql.="and  sezon='".$args[8]."'";
			}
		}
$sql.="and price<>'0' order by price asc";
		echo $sql;
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		//echo count($args);
		$result=" ";
		$msg="";
		$img=0;
		while ($fila = $data->fetch_assoc()) 
		{
			if ($fila['idSupplier']=='3') {
				$msg="Livrarea: in 7 zile lucratoare dupa cumparare.";
			}
			$link="anvelope/".$fila['sezon']."/".$fila['sezon']."/".$fila['brand']."/".$fila['sezon']."/".$fila['latime'].$fila['inaltime'].$fila['radius']."/".$fila['id'];
			$labes="<div id=\"labels\"><div class=\"row\"><div class=\"col-md-4 petrol\"></div><div class=\"col-md-4 weat\"></div><div class=\"col-md-4 sound\"></div></div>    
<div class=\"row\"><div class=\"col-md-4 label-".trim($fila["rulare"])."\"></div><div class=\"col-md-4 label-".trim($fila["Franare"])."\"></div><div class=\"col-md-4\"><p class=\"text-left\">".$fila["fundal"]."dB</p></div></div><span class=\"label label-success\">Stock: </span>  <span class=\"badge\">".$fila["stock"]."</span> </div>";
				
				$result.="<div class='row Product'><div class=\"col-md-2\"><button onclick=\"compare('".$fila["CODE"]."')\" class='btn btnBlack btn-sm' >Compare</button></div><div class=\"col-md-2 crop\"><p> 
		  <img  data-toggle=\"modal\" data-target=\"#image".$img."\" src=\"http://".$fila["image_url"]."\" alt=\"Avatar\" class=\"image\"></p></div><div onclick='getProductById(\"".$link."\")' class=\"col-md-3\">  <h4>Anvelope ".$fila["sezon"]." <br>".$fila["latime"]."/".$fila["inaltime"]." ".$fila["radius"]." ".$fila["load_index"].$fila["speed_index"]."<br>".ucfirst(strtolower($fila["Brand"]))." ".ucfirst(strtolower($fila["Profil"]))." </h4></div><div class=\"col-md-2\"> 
		  <h5>Anvelope ".ucfirst(strtolower($fila["categorie"]))."</h5>".$labes."</div> <div class=\"col-md-1\"><h3>".number_format($fila["price"]*1.01,2,'.','')." Lei</h3><br><h5>$msg</h5>
           </div><div class=\"col-md-1\"><br><div class=\"input-group\"><input id='qyt".$img."' type=\"text\" class=\"form-control\" placeholder=\"0.00\" aria-describedby=\"basic-addon1\">   <span class=\"input-group-btn\"><button onclick=\"setBasket('".$fila['CODE']."',$('#qyt".$img."').val(),'".number_format($fila["price"]*1.01,2,'.','')."')\" class=\"btn btn-danger\">Add</span></button></span>
</div></div></div>

		";
		$result.="<div id=\"image".$img."\" class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
  <div class=\"modal-dialog modal-sm\" role=\"document\">
    <div class=\"modal-content\">
     <img src=\"http://".$fila["image_url"]."\">
    </div>
  </div>
</div>";

//produs.php?type=$1&sezon=$2&brand=$3&size=$4&id=$5
$img++;
		} 
		//echo $sql;
		
			return $result;
	}
public function searchProducts2()
	{
		$args = func_get_args();
		$sql="	SELECT a.code as articol, b.Denumire,a.categorie,b.clasa,b.price AS anvelopePrice,a.pret AS nexxonPrice,a.`image_url` FROM nexxon a, anvelope b WHERE a.latime='".$args[2]."' 
AND a.inaltime='".$args[3]."' AND a.radius='".$args[4]."' AND b.Denumire LIKE '%".$args[2]."/".$args[3].$args[4]." ".$args[5].$args[6]."%' AND a.`brand` LIKE '%".$args[8]."%'AND a.`sezon` LIKE '%".$args[7]."%' AND a.profil LIKE '%".$args[9]."%' AND a.categorie like '%".$args[10]."%'  AND a.brand = b.Brand AND b.Profil = a.profil AND a.sezon= b.Subgrupa AND a.categorie=b.Grupa";
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		$result="<tr><td></td><th>#</th><th>Description</th><th>Nexxon</th><th>Dynamic</th><th>Cost 3</th><th>Edit</th></tr>";
		$i=0;
		while ($fila = $data->fetch_assoc()) 
		{
				$result.="<tr><td><input type='checkbox' class='form-control' name='id[]' value='".$fila['articol']."' /></td><td>$i</td><td>".$fila['Denumire']."</td><td>".$fila['nexxonPrice']."</td><td>".$fila['anvelopePrice']."</td><td>-</td><td><button type=\"button\" class=\"btn btn-success\" >Add Price</button></td></tr>";
				$i++;
		}
			return $result;
	}
public function searchProducts3()
{	
	$args = func_get_args();
		$ii= count($args);
		$j=0;
		$sql="	SELECT a.*,b.`name` FROM vwautoturisme a , suppliers b WHERE a.`idSupplier`= b.`id` ";
		if($args[2]<>''){
			
				$sql.=" and a.latime='".$args[2]."'";
				
		}
		//******************************************
		if($args[3]<>''){
			
				$sql.="and  a.inaltime='".$args[3]."'";
			
		}
		//******************************************
		if($args[4]<>''){
			
				$sql.="and  a.radius='".$args[4]."'";
			
		}
		//******************************************
		if($args[5]<>''){
			
				$sql.="and  a.load_index='".$args[5]."'";
			
		}
		//******************************************
		if($args[6]<>''){
			
				$sql.="and  a.speed_index='".$args[6]."'";
			
		}
		//******************************************
		if($args[7]<>''){
			
				$sql.="and  a.categorie='".$args[7]."'";
			
		}
		//******************************************
		if($args[8]<>''){
			
				$sql.="and  a.Brand='".$args[8]."'";
			
		}
		//******************************************
		if($args[9]<>''){
			
				$sql.="and  a.Profil='".$args[9]."'";
			
		}
		//******************************************
		if($args[10]<>''){
			
				$sql.="and  a.sezon='".$args[10]."'";
			
		}
			if($args[12]<>'' and $args[12]<>6 ){
			
				$sql.="and  a.idSupplier='".$args[12]."'";
			
		}
$sql.="order by a.price ASC limit 100";


$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));

$tabla ="<table class=\"table table-striped\">
			<tr>
				<th>Latime</th>
				<th>Inaltime</th>
				<th>Radius</th>
				<th>Load Index</th>
				<th>Speed Index</th>
				<th>Categorie</th>
				<th>Brand</th>
				<th>Profil</th>
				<th>Sezon</th>
				<th>Furnizor</th>
				<th>pret achizitie</th>
				<th>adaaos %</th>
				<th>Pret pe sit</th>
				<th>Pret oferta</th>
				<th>Durata oferta</th>
				
			</tr>";

	while ($fila = $data->fetch_assoc()) 
		{
			$sql2="select price from offerts where idProduct='".$fila['CODE']."' order by id desc";
$data2 = $this->mysqli->retorno($sql2) or die(mysqli_error($this->mysqli));
	$item2 = $data2->fetch_assoc();
			$price=$this->getPrice($fila['CODE'],$fila['idSupplier']);
			$pp=$fila['price'];
			$dif=$price-$pp;
		@$av=($dif*100)/$pp;
			$tabla.="<tr>
						<td>".$fila['latime']."</td>
						<td>".$fila['inaltime']."</td>
						<td>".$fila['radius']."</td>
						<td>".$fila['load_index']."</td>
						<td>".$fila['speed_index']."</td>
						<td>".$fila['categorie']."</td>
						<td>".$fila['Brand']."</td>
						<td>".$fila['Profil']."</td>
						<td>".$fila['sezon']."</td>
						<td>".$fila["name"]."</td>
						<td>".$pp."</td>
						<td>".$av."</td>
						<td ><button id='".$fila['CODE']."' class='btn btn-success' onclick=\"editNexxon('".$fila['CODE']."')\" >".$price."</button></td>
						<td>".$item2["price"]."</td>
						<td><button onclick=\"openModal('".$fila['CODE']."')\" type=\"button\" class=\"btn btn-danger\">
  <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span> data oferta
</button>  </td>			
						
					 </tr>	";
		}
		$tabla.="</table>";
		return $tabla;
}
//end funciont
public function getProductById()
{
		$args = func_get_args();
		//$sql="select * from nexxon where code='".$args[2]."'";
		$sql="SELECT * from vwautoturisme where CODE = '".$args[2]."'
";
echo $sql;

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



public function getNexxonProduct()
{
			$args = func_get_args();

$sql="select * from nexxon where latime='".$args[2]."' and inaltime='".$args[3]."' and radius='".$args[4]."' and categorie='".$args[5]."' and brand = '".$args[6]."'
";

		$result="<tr><th>#</th><th>Code</th><th>latime</th><th>inaltime</th><th>radius</th><th>description</th><th>price</th><th>Button</th></tr>";
$i=1;
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
			while ($fila = $data->fetch_assoc()) 
		{
				$result.="<tr><td>$i</td><td>".$fila['code']."</td><td>".$fila['latime']."</td><td>".$fila['inaltime']."</td><td>".$fila['radius']."</td><td>".base64_decode( $fila['descriere'])."</td><td>".$fila['price']."</td><td><button type=\"button\" class=\"btn btn-primary\" onclick=\"editNexxon('".$fila['code']."')\">Edit</button>
</td></tr>";
				$i++;
		}
		
		 return  $result;
}
public function getNexxonProduct2()
{
			$args = func_get_args();
$sql="select * from nexxon where latime='".$args[2]."' and inaltime='".$args[3]."' and radius='".$args[4]."' and categorie='".$args[5]."' and brand = '".$args[6]."'
";

		$result="<tr><th>#</th><th>Code</th><th>latime</th><th>inaltime</th><th>radius</th><th>description</th><th>price</th><th>Add</th></tr>";
$i=1;
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
			while ($fila = $data->fetch_assoc()) 
		{
				$result.="<tr><td>$i</td><td>".$fila['code']."</td><td>".$fila['latime']."</td><td>".$fila['inaltime']."</td><td>".$fila['radius']."</td><td>".base64_decode( $fila['descriere'])."</td><td>".$fila['price']."</td><td><button type=\"button\" class=\"btn btn-success\" onclick=\"addItemPromo('".$fila['code']."')\">+</button>
</td></tr>";
				$i++;
		}
		
		 return  $result;
}
public function getNexxonProductById()
{
	$args = func_get_args();
		//$sql="select * from nexxon where code='".$args[2]."'";
		$sql="select * from nexxon where code = '".$args[2]."'";
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
	    return  json_encode($data->fetch_assoc());
}
public function getBrandsCombo()
{
	$sql="SELECT DISTINCT(brand) FROM nexxon ORDER BY brand ";
	$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
	$result="<div class=\"input-group\"><select class=\"form-control\" name='brand' id='brand'>";
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<option value='".$fila["brand"]."'>".$fila["brand"]."</option>";
		}
	$result .= "</select><span class=\"input-group-btn\"><button onclick=\"getProfilCombo()\" type=\"button\" class=\"btn btn-success\">Get Profils</button></span></div>";	
	return $result;
}
public function getProfilCombo()
{	
	$args = func_get_args();
	$sql="SELECT DISTINCT(profil) FROM nexxon WHERE brand='".$args[2]."' ORDER BY profil";
	$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
	$result="<select name='profil' id='profil'>";
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<option value='".$fila["profil"]."'>".$fila["profil"]."</option>";
		}
	$result .= "</select>";	
	return $result;
}

public function updateNexxonProduct()
{
	$args = func_get_args();
	$sql="update prices set isActive=0 WHERE idProduct='".$args[2]."'";
	echo $sql;
	$this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		$sql="insert into prices(idPrice,price,idProduct,isActive,idSupplier) values(0,'".$args[3]."','".$args[2]."',1,2)";
		echo $sql;
			$this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
}

public function updateNexxonDescriptions()
{
	$args = func_get_args();
	$sql="update nexxon set descriere='".base64_encode($args[4])."'  WHERE brand='".$args[2]."' and profil='".$args[3]."'";
	$this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
}

public function updateNexxonPrices(){
	$args = func_get_args();
	$sql="update nexxon set price=(pret*(".$args[4]."/100))+pret  WHERE brand='".$args[2]."' and profil='".$args[3]."'";
	$this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
}

public function createOffert()
{
	$args = func_get_args();
	$sql="insert into offerts(id,dateStart,dateEnd,idProduct,price) values(0,'".$args[2]."','".$args[3]."','".$args[4]."','".$args[5]."')";
	echo $sql;
	$this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
	$id=mysqli_insert_id($this->mysqli);
			foreach ($cart as $c=>$code) {
				$sql="insert into(idLine,idItem,provider,idOffert) values(0,".$c.",0,".$id.")";
				$this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));

			}
} // end function
public function getOrders()
{
	$args = func_get_args();
	$sql="SELECT * from orders";
	$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
	$result="<table class=\"table table-bordered\">";
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<option value='".$fila["profil"]."'>".$fila["profil"]."</option>";
		}
	$result .= "</table>";	
	return $result;
}// end fucntion
public function getSuppliers()
{
$sql="SELECT * from suppliers";
	$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
	$result="<div class=\"input-group\"><select class=\"form-control\" name='comboSupplier' id='comboSupplier'>";
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<option value='".$fila["id"]."'>".$fila["name"]."</option>";
		}
	$result .= "</select><span class=\"input-group-btn\"><button  type=\"button\" class=\"btn btn-success\">Get </button></span></div>";	return $result;	
}// end function

public function setPriceNexxon()
{
	$args = func_get_args();
	$sql="update nexxon set price=(pret*(".$args[11]."/100))+pret  WHERE latime LIKE '%".$args[2]."%' OR inaltime LIKE '%".$args[3]."%' OR radius LIKE '%".$args[4]."%' OR load_index LIKE '%".$args[5]."%' OR speed_index LIKE '%".$args[6]."%' OR categorie LIKE '%".$args[7]."%'
OR brand LIKE '%".$args[8]."%' OR profil LIKE '%".$args[9]."%' OR sezon ='%".$args[10]."%'";
	$this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
}
 public function getPrice($id,$supplier)
 {
 	$sql="select price from prices where idProduct='".$id."' and idSupplier='".$supplier."' and isActive=1";
 //	echo $sql;
 		$data=$this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
	$item = $data->fetch_assoc();
	return $item["price"];

 }
public function getImageDinamic(){
	$vowels = array("(",")","+");

	$sql="SELECT `Articol id` as code, SUBSTR(`anvelope`.`Denumire`,1 ,(LOCATE(';',`anvelope`.`Denumire`)-1)) as Denumire FROM anvelope";
	$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
	$result="";
	while ($fila = $data->fetch_assoc()) 
		{
			$img1=str_replace($vowels, "", $fila["Denumire"]);
			$a= array("/",".","-");
			$img2=str_replace($a, "", $img1);
			$result="http://anvelope.biz/cs-photos/products/normal/".strtolower(str_replace(" ", "-", $img2))."_".$fila["code"]."_0.jpg";
			$sql="update anvelope set img_url='".$result."' where `Articol id`='".$fila["code"]."' ";
			echo $sql;
			$this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));

		}
		return "ok";

}

public function getLoadIndex($value)
{
	$sql="SELECT kg  FROM loadindextable WHERE `index`='$value'";
	$data=$this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
	$item = $data->fetch_assoc();
	return $item["kg"];
}
public function getSpeedIndex($value)
{
	$sql="select kmh  from speedindextable WHERE `index`='$value'";
	$data=$this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
	$item = $data->fetch_assoc();
	return $item["kmh"];
}
public function deleteOfert(){
		$args = func_get_args();
		$sql="delete from offerts where id=".$args[2];
		$this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
}
}

?>
