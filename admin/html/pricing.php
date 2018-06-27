<?php
require_once("Models/Conexion.php");
require_once("Models/Html.php");
$product = new Models\Html;
 

  
  


   


?>
<style type="text/css">
	#divLoad_index{
		width: 100px;
		float: left;
	}
		#divSpeed_index{
		width: 100px;
				float: left;
	}
.filters{
	background-color: #E8E8E8;
	padding-top: 10px;
	margin-bottom: 10px;
}
.busca{
	margin-right: 0px;
}
</style>
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10 filters">
		<div class="panel panel-default">
 			 <div class="panel-body">
    			<div id="comboSup"></div>
  			</div>
		</div>
			
		 </table>
	</div>
	<div class="col-md-2"></div>
</div>
<div class="row">
	<div class="col-md-2"></div>
	<div  class="col-md-8 filters">
	<form id="busqueda" name="busqueda" method="post">
	 <input type="hidden" name="c" id="c" value="Products">
 	 <input type="hidden" name="f" id="f" value="searchProducts3">
 	  	 	<table class="table" >
			<tr>
				<td><?php  echo $product->getFilter("Latime"); ?></td>
				<td><?php echo $product->getFilter("Inaltime"); ?></td>
				<td><?php  echo $product->getFilter("Radius"); ?></td>
				<td><?php      echo $product->getFilter("Load_index").$product->getFilter("Speed_index"); ?></td>

			</tr>
			<tr>
				<td><?php     echo $product->getFilter("Categorie"); ?></td>
				<td><?php    echo $product->getFilter("Brand"); ?></td>
				<td><?php     echo $product->getFilter("Profil");?></td>
				<td><?php  echo $product->getFilter("sezon"); ?></td>

			</tr>
			<tr>
				<td colspan="3"><div class="input-group input-group-lg">
 					 <input type="text" id="priceGlobal" name="priceGlobal" class="form-control" placeholder="Price" aria-describedby="sizing-addon1">
 					 <span class="input-group-addon" id="sizing-addon1">%</span>
 		
 					 <button onclick="setPrices()" class="btn btn-primary">Set</button>
					 </div>
				</td><input type="hidden" name="supplier" id="supplier" value="">
					</form>
				<td  align="right"> <button id="searchingBTN" onclick="search()" type="button" class="btn btn-danger">Search</button> </td>
			</tr>
		</table>
	
	</div>
	<div class="col-md-1"></div>
</div>
<div class="row">
	<div class="col-md-1"></div>
	<div id="contentendor" class="col-md-10"></div>
	<div class="col-md-1"></div>
</div>
<script type="text/javascript">
function search() {
$.post( "router.php", $("#busqueda").serializeArray())
  .done(function( data ) {
   $('#contentendor').html(data);
  //$("#results").append(data);
  });
}
function setPrices() {
$.post( "router.php", {c:"Products",f:"setPriceNexxon",latime:$("#comboLatime").val(),inaltime:$("#comboInaltime").val(),radius:$("#comboRadius").val(),load_index:$("#comboLoad_index").val(),speed_index:$("#comboSpeed_index").val(),categorie:$("#comboCategorie").val(),brand:$("#comboBrand").val(),profil:$("#comboProfil").val(),sezon:$("#comboSezon").val(),sezon:$("#combosezon").val(),price:$("#priceGlobal").val()})
  .done(function( data ) {

  //$("#results").append(data);
  });
}
$( document ).ready(function() {
 getSuppliers();
 $("#comboSup").change(function(event){
  event.preventDefault();
 $("#supplier").val($('#comboSupplier').val());
 return false;
});
  $( function() {
    $( "#dateStart" ).datepicker({
  dateFormat: "yy-mm-dd"
});
  } );
    $( function() {
    $( "#dateEnd" ).datepicker({
  dateFormat: "yy-mm-dd"
});
  } );
});

function openModal(code) {
 $("#codeO").val(code); 
$('#priceModal').modal('show');
}
</script>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create new price !!</h4>
      </div>
      <div class="modal-body">
      <div class="input-group">
  <span class="input-group-addon">€</span>
  <input id="price" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
  <input type="hidden" name="code" id="code" value="">
  <span class="input-group-addon">.00</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" onclick="closeModal()" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div></div>

<!-- Modal create and edit price *************************************************************************************************************** -->
<div id="priceModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="panel panel-default">
  <div class="panel-heading">offer</div>
  <form id="cOffert">
  <div id="promoContent" class="panel-body">
    Panel content
  </div>
  <p>Date Start: <input type="text" id="dateStart"></p>
    <p>Date End: <input type="text" id="dateEnd"></p>
     <div class="input-group">
  <span class="input-group-addon">€</span>
  <input id="priceOffert" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
  <input type="hidden" name="codeO" id="codeO" value="">
  <span class="input-group-addon">.00</span>
      </div>
   </form>   
    <button type="button" onclick="cleanPromo()" class="btn btn-danger">Clean</button>
    <button type="button" onclick="createOffer()" class="btn btn-success">Create offer</button>
</div>
  </div>
    </div>
  </div>
</div>