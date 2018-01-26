<?php
require_once("../Models/Conexion.php");
require_once("../Models/Html.php");
$product = new Models\Html;
 

  
  


   


?>
  <script type="text/javascript" src="tinymce.min.js"></script>

  <script type="text/javascript">
    tinyMCE.init({
      mode : "textareas",
      plugins: 'textcolor'
    });
    </script>
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
	<div class="col-md-2"></div>
	<div class="col-md-8 filters">
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
				<td  align="right"> <button onclick="search()" type="button" class="btn btn-danger">Search</button> </td>
			</tr>
		</table>
	
	</div>
	<div class="col-md-2"></div>
</div>
<div class="row">
	<div class="col-md-2"></div>
	<div id="contentendor" class="col-md-8"></div>
	<div class="col-md-2"></div>
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
});
</script>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Product</h4>
      </div>
      <div class="modal-body">
      <div class="input-group">
  <span class="input-group-addon">€</span>
  <input id="price" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
  <input type="hidden" name="code" id="code" value="">
  <span class="input-group-addon">.00</span>
</div>
     <textarea id="description"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" onclick="closeModal()" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal create and edit price *************************************************************************************************************** -->
<div class="modal fade" id="priceModal" tabindex="-1" role="dialog" aria-labelledby="priceModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ModalLabel">Prices</h4>
      </div>
      <div class="modal-body">
  <div class="row">
  <table class="table">
  		<tr>	
  			<th>#</th>
  			<th>Price</th>
  			<th>isActive</th>

  		</tr>
    </table>
  	
  </div>
  <div class="row">
  	<table class="table">
  		<tr>	
  			<th>Price</th>
  			<th>isActive</th>
  			<th></th>

  		</tr>
  		<tr>	
  			<td> <input type="text" class="form-control" id="priceNew"></td>
  			<td> <input type="radio" aria-label="Is Active"></td>
  			<td> <button type="button" class="btn btn-success">save</button></td>

  		</tr>
    </table>
  </div>	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           </div>
    </div>
  </div>
</div>