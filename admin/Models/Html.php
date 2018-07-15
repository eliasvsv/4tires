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
		$result="<div id=\"div".$filter."\" class=\"form-group\">
  <label for=\"$filter\">".$filter."</label><select class=\"form-control $filter\" id=\"combo$filter\" name=\"combo$filter\" >";
  $result.="<option value=\"\">Default</option>";

		$sql="select DISTINCT(".$filter.") from vwautoturisme  order by ".$filter."";
		if($filter=="Latime"){
			$sql="select DISTINCT(CAST(".$filter." AS DOUBLE)) AS ".$filter." from vwautoturisme where $filter>0 order by ".$filter."";
		}
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<option value=\"".trim($fila[$filter])."\">".trim($fila[$filter])."</option>";
		}
		$result.="</select></div>";
		
		return $result;
	} // end function getemails

//SELECT DISTINCT(Latime) FROM nexxon WHERE Categorie='AUTOTURISME' AND Latime<>'' ORDER BY Latime	
public	function getLatime($filter)
	{
		$result="<div class=\"form-group\">
  <label for=\"latime\">latime</label><select class=\"form-control latime\" id=\"comboLatime\" name=\"comboLatime\" >";
  $result.="<option value=\"\">Default</option>";

		$sql="SELECT DISTINCT(Latime) FROM nexxon WHERE Categorie='$filter' AND Latime<>'' ORDER BY Latime";
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<option value=\"".trim($fila['Latime'])."\">".trim($fila['Latime'])."</option>";
		}
		$result.="</select></div>";
		
		return $result;
	} // end function getemails	

public	function getInaltime($filter)
	{
		$result="<div class=\"form-group\">
  <label for=\"Inaltime\">Inaltime</label><select class=\"form-control Inaltime\" id=\"comboInaltime\" name=\"comboInaltime\" >";
  $result.="<option value=\"\">Default</option>";

		$sql="SELECT DISTINCT(Inaltime) FROM nexxon WHERE Latime='$filter' AND Inaltime<>'' ORDER BY Inaltime";
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<option value=\"".trim($fila['Inaltime'])."\">".trim($fila['Inaltime'])."</option>";
		}
		$result.="</select></div>";
		
		return $result;
	} // end function getemails	
public	function getRadius($latime,$inaltime)
	{
		$result="<div class=\"form-group\">
  <label for=\"Radius\">Radius</label><select class=\"form-control Inaltime\" id=\"comboRadius\" name=\"comboRadius\" >";
  $result.="<option value=\"\">Default</option>";

		$sql="SELECT DISTINCT(Radius) FROM nexxon WHERE Latime='$latime' AND Inaltime='$inaltime' ORDER BY Radius";
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<option value=\"".trim($fila['Radius'])."\">".trim($fila['Radius'])."</option>";
		}
		$result.="</select></div>";
		
		return $result;
	} // end function getemails	
	//	  $sql="SELECT DISTINCT(Radius) FROM nexxon WHERE Latime='$latime' AND categorie='$categorie' ORDER BY Radius";
public	function getRadius2($latime)
	{
		$result="<div class=\"form-group\">
  <label for=\"Radius\">Radius</label><select class=\"form-control Inaltime\" id=\"comboRadius\" name=\"comboRadius\" >";
  $result.="<option value=\"\">Default</option>";

	 $sql="SELECT DISTINCT(Radius) FROM vwautoturisme WHERE Latime='$latime' ORDER BY Radius";
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<option value=\"".trim($fila['Radius'])."\">".trim($fila['Radius'])."</option>";
		}
		$result.="</select></div>";
		
		return $result;
	} // end function getemails	
	public function checkLatime($latime){
			$result="False";
			 $sql="SELECT DISTINCT(categorie) FROM vwautoturisme WHERE latime='$latime'";
			 $data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
			 $fila = $data->fetch_assoc();
			 if(strtoupper($fila["categorie"])=="INDUSTRIALE" or strtoupper($fila["categorie"])=="AGRO-INDUSTRIALE" ){
			 	$result="True";
			 }
			 return $result;

	}
public function topPremiun()	{
	$sql="SELECT * FROM vwautoturisme WHERE latime=185 AND inaltime=65 AND radius='R15' AND rulare<>''  ORDER BY rulare,Franare,Fundal LIMIT 3";
	$result="";
	$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<div class=\"row\">";
			$result.="<div  class=\"col-xs-4 crop\"><p><img class=\"avatar\" alt='premiun' src=\"http://".$fila["image_url"]."\"></p></div>";
			$result.="<div class=\"col-xs-4\">".$fila["Brand"]." ".$fila["Profil"]."</div>";
			$result.="<div class=\"col-xs-4\"><h4 class=\"text-danger\">".$fila["price"]."</h4></div></div>";
		}
		return $result;
}

public function getBrandsList(){

	$sql="SELECT DISTINCT(Brand) FROM vwautoturisme limit 5";
	$result="";
	$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		while ($fila = $data->fetch_assoc()) 
		{
			
			$result.=" <button type=\"button\" class=\"list-group-item\"><span class=\"badge\">100</span>".$fila["Brand"]."</button>";
		}
		$result.="<button class=\"btn btn-primary list-group-item\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseExample\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
  <span class=\"glyphicon glyphicon-menu-down\" aria-hidden=\"true\"></span>
</button>
<div class=\"collapse\" id=\"collapseExample\">
  <div class=\"well\">
    ...
  </div>
</div>

";
		return $result;
}//end function
public function getBlockAutoturisme($cat){

	$sql="SELECT * FROM block_".strtolower($cat)." group by latime,inaltime,radius ";
	$result="";
	$more="";
$i=1;
	$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		while ($fila = $data->fetch_assoc()) 
		{
			
				$result.=" <button onclick=\"searchProducts2('1','".$fila["latime"]."','".$fila["inaltime"]."','".$fila["radius"]."','".$cat."')\" type=\"button\" class=\"list-group-item\"><span class=\"badge\">100</span>".$fila["latime"]."/".$fila["inaltime"]." ".$fila["radius"]."</button>";
			
		}
		
		return $result;
}//end function


public function SearchBox(){
	?>

  <!-- Nav tabs -->
  <ul class="nav  nav-pills" role="tablist">
    <li role="presentation" class="active"><a href="#anvelope" aria-controls="home" role="tab" data-toggle="tab">Anvelope</a></li>
    <li role="presentation"><a href="#jante" aria-controls="profile" role="tab" data-toggle="tab">Jante</a></li>
    <li role="presentation"><a href="#acumulatori" aria-controls="acumulatori" role="tab" data-toggle="tab">Acumulatori</a></li>
    <li role="presentation"><a href="#camere" aria-controls="camere" role="tab" data-toggle="tab">Camere de aer</a></li>
    <li role="presentation"><a href="#accesorii" aria-controls="settings" role="tab" data-toggle="tab">Lanturi auto</a></li>
    <li role="presentation"><a href="#hotel" aria-controls="settings" role="tab" data-toggle="tab">Hotel anvelope</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="anvelope">


 <div class="panel panel-default">
          <div class="panel-body">
          	
            <div class="row">
                 <div class="list-group">
              <div  class="col-md-4"><button id="divLatimeB" type="button" class="list-group-item"><?php  echo $this->getFilter("Latime"); ?></button></div>
              <div class="col-md-4"> <button id="divInaltimeB" type="button" class="list-group-item"><?php  echo $this->getFilter("Inaltime"); ?></button></div>
              <div class="col-md-4"> <button id="divRadiusB" type="button" class="list-group-item"><?php echo $this->getFilter("Radius"); ?></button></div>

                                </div>
          </div>
          <div class="row">
          		 <div  class="col-md-4"><div id="categorie"></div></div>
          		 <div  class="col-md-4"><div id="Brand"></div></div>
          		 <div  class="col-md-4"><div id="Profil"></div>
          	</div>
          <div class="row">
              <div class="col-md-4 form-inline"><label for="vara">
                  <input name="sezon_radio" type="radio" value="vara" id="sezon_radio">
                  <small class="seasons_icons"></small>
                  Vara
                </label>

              <label for="iarna">
                  <input name="sezon_radio" type="radio" value="iarna" id="sezon_radio">
                  <small style="background-position: 0 -54px;" class="seasons_icons"></small>
                  Iarna
                </label>

   <label for="all-seasons">
                  <input name="sezon_radio" type="radio" value="all-seasons" id="sezon_radio">
                  <small style="background-position: 0 0; width: 36px;" class="seasons_icons"></small>
                  All seasons
                </label></div>
              <div class="col-md-4">
                <div id="searchBtn" class="btn-group btn-group-justified" role="group" aria-label="...">
                <div class="btn-group" role="group">
                  <button onclick="searchProducts('1')" type="button" class="btn btn-success">Search</button>
                </div>
                </div>
              </div>
              <div class="col-md-4">
              		<div class="row">
              			<div class="col-md-6"><div id="load_index"></div></div>
              			<div class="col-md-6"><div id="speed_index"></div></div>
              		</div>
              </div></div>
          </div><!--fin segunda linea-->

          </div>
      </div>



    </div>
    <!--
<iframe id="iframe_pic" width="100%" height="500" frameborder="0" scrolling="no" src="https://www.3dtuning.com/embed/59ba679a1448dad819d42db2?key=od6sbSiH60k8FHrszKclTzyzr3edkpfm&amp;lang=ro-RO&amp;default-disks=59ba7dd002452bb5b88b417f" style="position: absolute; width: 100%; height: 500px; border: none; display: inline;"></iframe>

<iframe src="https://configurator.alcar-wheelbase.ro/default_jante.aspx?did=34298&showtyres=False&sp=True&userdata=|||||" id="ifrmJante" width="1200" height="1000px" frameborder="0" scrolling="yes"></iframe>
    -->
    <div role="tabpanel" class="tab-pane" id="jante">
    	   		<div class="panel panel-default">
  <div class="panel-body">
<iframe src="https://configurator.alcar-wheelbase.ro/default_jante.aspx?did=34298&showtyres=False&sp=True&userdata=|||||" id="ifrmJante" width="1200" height="1000px" frameborder="0" scrolling="yes"></iframe>
</div></div>
    </div>
    <div role="tabpanel" class="tab-pane" id="acumulatori">
    	
   		<div class="panel panel-default">
  <div class="panel-body">

   <div class="row">
                 <div class="list-group">
                 <div class="col-md-4"><button id="subcategorie" type="button" class="list-group-item">  <?php echo $this->getBatterisSub(); ?></button></div>
                   <div  class="col-md-4"><button id="ampB" type="button" class="list-group-item">  <?php echo $this->getBatteriesAMP(); ?></button></div>
              <div class="col-md-4">    <button onclick="searchBatteries()" id="amp" type="button" class="btn btn-success btn-lg btn-block">Search</button></div>

                                </div>
          </div>
  </div>
</div> 		
   
   </div>
   <!--*****************************************************************************************************************************************************************************************************************-->
    <div role="tabpanel" class="tab-pane" id="camere">
    			<div class="row">
              			<div class="col-md-4"><?php echo  $this->getAirCamerasSize('Dimensiune'); ?></div>
              			<div class="col-md-4"><?php echo  $this->getAirCamerasSize('Diametru'); ?></div>
              			<div class="col-md-4"><?php echo  $this->getAirCamerasSize('TipValva'); ?></div>
              		</div>

              	<div class="row">
              		<div class="col-md-4"></div>
              		<div class="col-md-4"><button onclick="SeachCameras()" type="button" class="btn btn-success btn-lg btn-block">Search</button></div>
              		<div class="col-md-4"></div>
              	</div>	


    	</div>
  </div>

	<?php
}

public function getBatteriesAMP(){
	$result="<div class=\"form-group\">
  <label for=\"amp\">amp</label><select class=\"form-control Inaltime\" id=\"comboAmp\" name=\"comboAmp\" >";
  $result.="<option value=\"\">Default</option>";

	 $sql="SELECT DISTINCT(TRIM(SUBSTR(`desc`,(LOCATE('Ah',`desc`)-3 ),6))) AS amp FROM impaaccesories WHERE categorie='Acumulatori'  ";
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<option value=\"".trim($fila['amp'])."\">".trim($fila['amp'])."</option>";
		}
		$result.="</select></div>";
		
		return $result;
}

public function getBatterisSub()
{
	$sql="SELECT DISTINCT(subcategorie) FROM impaaccesories	WHERE categorie='Acumulatori' ";
	$result="<div class=\"form-group\">
  <label for=\"categorie\">Categorie</label><select class=\"form-control Inaltime\" id=\"subcategorieCombo\" name=\"subcategorieCombo\" >";
  $result.="<option value=\"\">Default</option>";

		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<option value=\"".trim($fila['subcategorie'])."\">".trim($fila['subcategorie'])."</option>";
		}
		$result.="</select></div>";
		
		return $result;
}

public function getAirCamerasSize($filter){
	$result="<div id=\"div".$filter."\" class=\"form-group\">
  <label for=\"$filter\">".$filter."</label><select class=\"form-control $filter\" id=\"combo$filter\" name=\"combo$filter\" >";
  $result.="<option value=\"\">Default</option>";

		$sql="select DISTINCT(".$filter.") from aircameras order by ".$filter."";
				$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<option value=\"".trim($fila[$filter])."\">".trim($fila[$filter])."</option>";
		}
		$result.="</select></div>";
		
		return $result;
}

public function getMainContent(){
	$sql="SELECT * FROM vwautoturisme WHERE categorie='AUTOTURISME' and latime='185' AND  inaltime='65' AND radius='R15' AND idSupplier='1' limit 8";
		/*$result="<div class='row'>
				<div class='col-md-12 text-center titleGrande'>
					<h1>Autoturisme</h1>
				</div>
		</div>";*/
		$result="<div class='row productMain'>";
		$img=0;
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		while ($fila = $data->fetch_assoc()) 
		{

  $img2=$fila["image_url"];

		 
			$button=" <div class=\"input-group\">
           <span class=\"input-group-btn\">
        <button onclick=\"setBasket('".$fila['CODE']."','1','".number_format($fila["price"],2,'.','')."')\"  class=\"btn btn-danger\" type=\"button\">Buy</button>
      </span>
    </div>
  </div>";
  $link="".ucfirst(strtolower('anvelope'))."-".ucfirst(strtolower($fila['sezon']))."-".$fila['latime'].$fila['inaltime'].$fila['radius']."-".ucfirst(strtolower($fila['Brand']))."-".ucfirst(strtolower($fila['Profil']))."-".$fila['load_index']."-".$fila['speed_index']."-".$fila['CODE'].".html";

				$result.="<div class='col-md-3'>
				<table>
				<tr>
					<td colspan=2>
						<h1  onclick='getProductById(\"".$link."\")' class='title'> Anvelope  ".ucfirst(strtolower($fila["categorie"]))." ".$fila["sezon"]."&nbsp;".$fila["latime"]."/".$fila["inaltime"]." ".$fila["radius"]."  ".ucfirst(strtolower($fila["Brand"]))." ".ucfirst(strtolower($fila["Profil"]))." ".$fila["load_index"].$fila["speed_index"]."  </h1> 
					</td>
				</tr>
				<tr>
					<td colspan=2>
						<div class='crop'>
							<p> 
		 					 <img  src=\"".$img2."\" alt=\"Avatar\" class=\"image\"></p></div>
							</div>
					</td>
				</tr>
				<tr>
					<td colspan=2>
						<p class=\"text-success\">Stoc: ".$fila['stock']."</p>
					</td>
				
				</tr>
				<tr>
					<td colspan=2><p class='text-price'>".number_format($fila["lastPrice"],2,'.','')." Lei</p></td>
				</tr>
				<tr>
					<td>
							<button onclick=\"compare('".$fila["CODE"]."')\" class='btn btnBlack ' >Compare</button>
					</td>
					<td>
							$button
					</td>
				</tr>
				</table>
					".$fila["idSupplier"]."
				</div>";
				$img++;
		}
		$result.="</div>";

		return $result;

}		// end function

public function getAutolitare(){
	$sql="SELECT * FROM vwautoturisme WHERE categorie='Autoutilitare'  AND latime='185' AND  inaltime='75' AND radius='R16' and idSupplier='1' limit 8";
		/*$result="<div class='row'>
				<div class='col-md-12 text-center titleGrande'>
					<h1>Autoutilitare</h1>
				</div>
		</div>";*/
		$result="<div class='row productMain'>";
		$img=0;
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		while ($fila = $data->fetch_assoc()) 
		{

  $img2=$fila["image_url"];

			$button=" <div class=\"input-group\">
          <span class=\"input-group-btn\">
        <button onclick=\"setBasket('".$fila['CODE']."','1','".number_format($fila["price"],2,'.','')."')\"  class=\"btn btn-danger\" type=\"button\">Buy</button>
      </span>
    </div>
  </div>";
  $link="".ucfirst(strtolower('anvelope'))."-".ucfirst(strtolower($fila['sezon']))."-".$fila['latime'].$fila['inaltime'].$fila['radius']."-".ucfirst(strtolower($fila['Brand']))."-".ucfirst(strtolower($fila['Profil']))."-".$fila['load_index']."-".$fila['speed_index']."-".$fila['CODE'].".html";
				$result.="<div class='col-md-3'>
				<table>
				<tr>
					<td colspan=2>
				<h1  onclick='getProductById(\"".$link."\")'  class='title'>Anvelope  ".ucfirst(strtolower($fila["categorie"]))." ".$fila["sezon"]."&nbsp; ".$fila["latime"]."/".$fila["inaltime"]." ".$fila["radius"]."  ".ucfirst(strtolower($fila["Brand"]))." ".ucfirst(strtolower($fila["Profil"]))." ".$fila["load_index"].$fila["speed_index"]."  </h1>
					</td>
				</tr>
				<tr>
					<td colspan=2>
						<div class='crop'>
							<p> 
		 					 <img  src=\"".$img2."\" alt=\"Avatar\" class=\"image\"></p></div>
							</div>
					</td>
				</tr>
				<tr>
					<td colspan=2>
						<p class=\"text-success\">Stoc: ".$fila['stock']."</p>
					</td>
				
				</tr>
				<tr>
					<td colspan=2><p class='text-price'>".number_format($fila["price"],2,'.','')." Lei</p></td>
				</tr>
				<tr>
					<td>
							<button onclick=\"compare('".$fila["CODE"]."')\" class='btn btnBlack ' >Compare</button>
					</td>
					<td>
							$button
					</td>
				</tr>
				</table>
".$fila["idSupplier"]."
				</div>";
				$img++;
		}
		$result.="</div>";

		return $result;
}

public function getCamioane(){
		$sql="SELECT * FROM vwautoturisme WHERE categorie='Camioane' AND latime='205' AND  inaltime='75' AND radius='R17.5' AND idSupplier='1' limit 8";
	/*	$result="<div class='row'>
				<div class='col-md-12 text-center titleGrande'>
					<h1>Camioane</h1>
				</div>
		</div>";*/
		$result="<div class='row productMain'>";
		$img=0;
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		while ($fila = $data->fetch_assoc()) {

  $img2=$fila["image_url"];
		$button=" <div class=\"input-group\">
      <input id=\"qyt".$img."\" type=\"text\" class=\"form-control\" placeholder=\"Adauga in cos\">
      <span class=\"input-group-btn\">
         <button onclick=\"setBasket('".$fila['CODE']."','1','".number_format($fila["price"],2,'.','')."')\"  class=\"btn btn-danger\" type=\"button\">Buy</button>
    </div>
  </div>";
				$result.="<div class='col-md-3'>
				<table>
				<tr>
					<td colspan=2>
						<h1 class='title'>Anvelope  ".ucfirst(strtolower($fila["categorie"]))." ".$fila["sezon"]." &nbsp;".$fila["latime"]."/".$fila["inaltime"]." ".$fila["radius"]."  ".ucfirst(strtolower($fila["Brand"]))." ".ucfirst(strtolower($fila["Profil"]))." ".$fila["load_index"].$fila["speed_index"]."  </h1> 
					</td>
				</tr>
				<tr>
					<td colspan=2>
						<div class='crop'>
							<p> 
		 					 <img  src=\"".$img2."\" alt=\"Avatar\" class=\"image\"></p></div>
							</div>
					</td>
				</tr>
				<tr>
					<td colspan=2>
						<p class=\"text-success\">Stoc: ".$fila['stock']."</p>
					</td>
				
				</tr>
				<tr>
					<td colspan=2><p class='text-price'>".number_format($fila["price"],2,'.','')." Lei</p></td>
				</tr>
				<tr>
					<td>
							<button onclick=\"compare('".$fila["CODE"]."')\" class='btn btnBlack ' >Compare</button>
					</td>
					<td>
							$button
					</td>
				</tr>
				</table>
				".$fila["idSupplier"]."
				</div>";
				$img++;
		}
		$result.="</div>";

		return $result;
}

public function getOfferts(){
		$sql="select * from vwofferts";
		$result="<div class='row productMain'>";
		$img=0;
		$i=1;
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		while ($fila = $data->fetch_assoc()) 
		{
						/*$button=" <div class=\"input-group\">
          <span class=\"input-group-btn\">
        <button onclick=\"setBasket('".$fila['CODE']."','1','".number_format($fila["price"],2,'.','')."')\"  class=\"btn btn-danger\" type=\"button\">Buy</button>
      </span>
    </div>
  </div>";*/
  $button=" <div class=\"input-group\">
      <input type=\"text\" class=\"form-control\" placeholder=\"qyt\" value='1' id='qyt-".$fila['CODE']."'>
      <span class=\"input-group-btn\">
        <button onclick=\"setBasket('".$fila['CODE']."',$('#qyt-".$fila['CODE']."').val(),'".number_format($fila['offert'],2,'.','')."')\" class=\"btn btn-danger\" type=\"button\">Buy</button>
      </span>
    </div><!-- /input-group -->";
  		$labes="<div id=\"labels\"><div class=\"row\"><div class=\"col-md-4 petrol\"></div><div class=\"col-md-4 weat\"></div><div class=\"col-md-4 sound\"></div></div>    
						<div class=\"row\"><div class=\"col-md-4 label-".trim($fila["rulare"])."\"></div><div class=\"col-md-4 label-".trim($fila["Franare"])."\"></div><div class=\"col-md-4\"><p class=\"text-left\">".$fila["fundal"]."dB</p></div></div> </div>";
				$result.="<div class='col-md-4'>
						<table  class=\"table \">
							<tr>
								<td colspan='2'><h4>Anvelope ".$fila["sezon"]." ".$fila['latime']."/".$fila['inaltime']." ".$fila['radius']."</h4></td>

							</tr>
							<tr>	
								<td colspan='2'>
								<div class='crop'>
								<p> 
								 <img  src=\"".$fila["image_url"]."\" alt=\"Avatar\" class=\"image\">
								 </p>
								 <div class='new'></div>
								 </div>
								</td>
							</tr>
							<tr>
								<td colspan='2'><h4>".$fila["Brand"]." ".$fila["Profil"]." ".$fila["load_index"].$fila["speed_index"]."</h4></td>
							</tr>
							<tr class='precios'>
								
								<td>$labes</td><td class='text-right'><s>".number_format($fila["lastPrice"],2,'.','')." Lei</s><h3 class='text-price'>".number_format($fila["offert"],2,'.','')." Lei</h3></td>

							</tr>
							<tr> 
								<td>$button</td> <td  class='text-right'><button onclick=\"compare('".$fila["CODE"]."')\" class='btn btnBlack ' >Compare</button></td>
							</tr>
						</table>
				 </div>";
				if($i==3){
				$i=0;
				$result.="</div><div class='row productMain'>";

			}
			$i++; 
			}
$result.="</div>";
	return $result;	

		}
		
public function report_1(){
		$sql="SELECT b.name ,a.* FROM vwofferts a , suppliers b WHERE b.id=a.idSupplier";
		$result="<table class='table table-bordered'>";
		$result.="<tr><th>Supplier</th><th>Code</th><th>Description</th><th>Last Price</th><th>New Price</th><th>Start</th><th>End</th><tr>";
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<tr><td>".$fila["name"]."</td><td>".$fila["CODE"]."</td><td>".$fila["latime"].$fila["inaltime"]."/".$fila["radius"]." ".$fila["load_index"].$fila["speed_index"]." ".$fila["Brand"]." ".$fila["Profil"]."</td><td>".number_format($fila["lastPrice"],2,'.','')."</td><td>".$fila["offert"]."</td><td>".$fila["dateStart"]."</td><td>".$fila["dateEnd"]."</td></tr>";
		}
		$result.="</table>";
		return $result;
}

public function oferts(){
			$sql="SELECT * FROM  offerts";
		$result="<table class='table table-bordered'>";
		$result.="<tr><th>id</th><th>Start</th><th>End</th><th>Product </th><th>Price</th><th>Edit</th><th>Delete</th><tr>";
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<tr><td>".$fila["id"]."</td><td>".$fila["dateStart"]."</td><td>".$fila["dateEnd"]."</td><td>".$fila["idProduct"]."</td><td>".number_format($fila["price"],2,'.','')."</td><td><button type=\"button\"  class=\"btn btn-success\">Edit</button></td><td><button onclick=\"deleteOfert(".$fila['id'].")\" type=\"button\" class=\"btn btn-danger\"> <p class='fa fa-eraser'></p> </button></td></tr>";
		}
		$result.="</table>";
		return $result;
}

public function getBatteries(){
	$sql="SELECT * FROM impaaccesories WHERE categorie='Acumulatori'";
		$result="<table class='table table-bordered'>";
		$result.="<tr><th>#</th><th>Description</th><th>image</th><th>Price</th><tr>";
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		$i=0;
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<tr><td>".$i."</td><td>".$fila["desc"]."</td><td><img src='".$fila["image"]."'></td><td><button class='btn btn-success'>Price</button></td></tr>";
			$i++;
		}
		$result.="</table>";
		return $result;
}

public function getBatteriesByDesc($desc){
	$sql="SELECT * FROM impaaccesories WHERE categorie='Acumulatori' and `desc` like '%".$desc."Ah%' ";
		$result="<table class='table table-bordered'>";
		$result.="<tr><th>#</th><th>Description</th><th>image</th><th>Price</th><th>Edit</th><tr>";
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		$i=0;
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<tr><td>".$i."</td><td>".$fila["desc"]."</td><td><img src='".$fila["image"]."'></td><td>".$fila["price"]."</td><td><button class='btn btn-success'>Edit</button></td></tr>";
			$i++;
		}
		$result.="</table>";
		return $result;
}
public function getRims(){
	$sql="SELECT * FROM ntf_jante";
		$result="<table class='table table-bordered'>";
		$result.="<tr><th>#</th><th>Description</th><th>image</th><th>Price</th><th>Edit</th><tr>";
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		$i=0;
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<tr><td>".$i."</td><td>".$fila["description"]."</td><td><img class='rims' src='".$fila["image"]."'></td><td>".$fila["price_normal"]*4.65."</td><td><button class='btn btn-success'>Edit</button></td></tr>";
			$i++;
		}
		$result.="</table>";
		return $result;
}
public function getRimsCombo($filter){
	$result="<div id=\"div".$filter."\" class=\"form-group\">
  <label for=\"$filter\">".$filter."</label><select class=\"form-control $filter\" id=\"combo$filter\" name=\"combo$filter\" >";
  $result.="<option value=\"\">Default</option>";

		$sql="select DISTINCT(".$filter.") from ntf_jante   order by ".$filter."";
				$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<option value=\"".trim($fila[$filter])."\">".trim($fila[$filter])."</option>";
		}
		$result.="</select></div>";
		
		return $result;
}

public function getAerCameras(){
	$sql="SELECT * FROM aircameras";
		$result="<table class='table table-bordered'>";
		$result.="<tr><th>#</th><th>Description</th><th>image</th><th>Price</th><th>Edit</th><tr>";
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		$i=0;
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<tr><td>".$i."</td><td>".$fila["description"]."</td><td><img class='rims' src='".$fila["image"]."'></td><td>".$fila["price_normal"]*4.65."</td><td><button class='btn btn-success'>Edit</button></td></tr>";
			$i++;
		}
		$result.="</table>";
		return $result;
}
} // end class
?>



