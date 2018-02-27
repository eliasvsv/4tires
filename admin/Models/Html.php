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

		$sql="select DISTINCT(".$filter.") from vwautoturisme order by ".$filter."";
		if($filter=="Latime"){
			$sql="select DISTINCT(CAST(".$filter." AS DOUBLE)) AS ".$filter." from vwautoturisme order by ".$filter."";
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
public	function getRadius2($latime,$inaltime)
	{
		$result="<div class=\"form-group\">
  <label for=\"Radius\">Radius</label><select class=\"form-control Inaltime\" id=\"comboRadius\" name=\"comboRadius\" >";
  $result.="<option value=\"\">Default</option>";

	 $sql="SELECT DISTINCT(Radius) FROM nexxon WHERE Latime='$latime' AND categorie='$inaltime' ORDER BY Radius";
		$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<option value=\"".trim($fila['Radius'])."\">".trim($fila['Radius'])."</option>";
		}
		$result.="</select></div>";
		
		return $result;
	} // end function getemails	
public function topPremiun()	{
	$sql="SELECT * FROM vwautoturisme WHERE latime=185 AND inaltime=65 AND radius='R15' AND rulare<>''  ORDER BY rulare,Franare,Fundal LIMIT 3";
	$result="";
	$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		while ($fila = $data->fetch_assoc()) 
		{
			$result.="<div class=\"row\">";
			$result.="<div  class=\"col-xs-4 crop\"><p><img class=\"avatar\" src=\"http://".$fila["image_url"]."\"></p></div>";
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

	$sql="SELECT * FROM block_".strtolower($cat)." ";
	$result="";
	$more="";
$i=1;
	$data = $this->mysqli->retorno($sql) or die(mysqli_error($this->mysqli));
		while ($fila = $data->fetch_assoc()) 
		{
			if($i>=5){
				$more.=" <button onclick=\"searchProducts2('1','".$fila["latime"]."','".$fila["inaltime"]."','".$fila["radius"]."','".$cat."')\" type=\"button\" class=\"list-group-item\"><span class=\"badge\">100</span>".$fila["latime"]."/".$fila["inaltime"]." ".$fila["radius"]."</button>";
			}
			else{
				$result.=" <button onclick=\"searchProducts2('1','".$fila["latime"]."','".$fila["inaltime"]."','".$fila["radius"]."','".$cat."')\" type=\"button\" class=\"list-group-item\"><span class=\"badge\">100</span>".$fila["latime"]."/".$fila["inaltime"]." ".$fila["radius"]."</button>";
			}
			
			$i++;
		}
		$result.="<button class=\"btn btn-primary list-group-item\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse$cat\" aria-expanded=\"false\" aria-controls=\"collapse$cat\">
  Arata mai mult            <span class=\"glyphicon glyphicon-menu-down\" aria-hidden=\"true\"></span>
</button>
<div class=\"collapse\" id=\"collapse$cat\">
  <div class=\"well\">
   ".$more."
  </div>
</div>

";

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
                  <input name="sezon_radio" type="radio" value="vara" id="vara">
                  <small class="seasons_icons"></small>
                  Vara
                </label>

              <label for="iarna">
                  <input name="sezon_radio" type="radio" value="iarna" id="iarna">
                  <small style="background-position: 0 -54px;" class="seasons_icons"></small>
                  Iarna
                </label>

   <label for="all-seasons">
                  <input name="sezon_radio" type="radio" value="all-seasons" id="all-seasons">
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
    <div role="tabpanel" class="tab-pane" id="jante"><iframe src="https://configurator.alcar-wheelbase.ro/default_jante.aspx?did=34298&showtyres=False&sp=True&userdata=|||||" id="ifrmJante" width="1200" height="1000px" frameborder="0" scrolling="yes"></iframe></div>
    <div role="tabpanel" class="tab-pane" id="acumulatori">
    	
   		<div class="panel panel-default">
  <div class="panel-body">

   <div class="row">
                 <div class="list-group">
              <div  class="col-md-4"><button id="ampB" type="button" class="list-group-item">  <?php echo $this->getBatteriesAMP(); ?></button></div>
              <div class="col-md-4"><button id="subcategorie" type="button" class="list-group-item">  <?php echo $this->getBatterisSub(); ?></button></div>
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

} // end class
?>



