
<?php
$mysqli = new mysqli("localhost", "root", "realmadrid", "web"); 
$sql="select * from nexxon limit 20";
$products =$mysqli->query($sql);
?>
<table class="table table-bordered">
<tr><th>Code</th><th>Brand</th><th>Profil</th><th>Latime</th><th>inaltime</th><th>radius</th><th>load index</th><th>speed index </th><th>sezon</th><th>Edit</th></tr>

<?php
while ($product = $products->fetch_object()) {
echo "<tr><td>$product->code</td><td>$product->brand</td><td>$product->profil</td><td>$product->latime</td><td>$product->inaltime</td><td>$product->radius</td><td>$product->load_index</td><td>$product->speed_index</td><td>$product->sezon</td><td><button onclick=\"loadProduct('$product->code')\" type=\"button\" class=\"btn btn-primary btn-xs\" data-toggle=\"modal\" data-target=\"#myModal\">Edit</button></td></tr>";
}
?>
</table>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Product Information</h4>
      </div>
      <div class="modal-body">
<form id="update" name="update" method="post">
  <div class="form-group">
    <label for="code">Code</label>
    <input hidden="true" type="text" class="form-control" name="code" id="code">
  </div>
   <div class="form-group">
    <label for="brand">Brand</label>
    <input type="text" class="form-control" name="brand" id="brand">
  </div>
   <div class="form-group">
    <label for="profil">Profil</label>
    <input type="text" class="form-control" name="profil" id="profil">
  </div>
   <div class="form-group">
    <label for="latime">Latime</label>
    <input type="text" class="form-control" name="latime" id="latime">
  </div>
   <div class="form-group">
    <label for="inaltime">Inaltime</label>
    <input type="text" class="form-control" name="inaltime" id="inaltime">
  </div>
   <div class="form-group">
    <label for="radius">Radius</label>
    <input type="text" class="form-control" name="radius" id="radius">
  </div>
   <div class="form-group">
    <label for="load_index">Load Index</label>
    <input type="text" class="form-control" name="load_index" id="load_index">
  </div>
   <div class="form-group">
    <label for="speed_index">Speed Index</label>
    <input type="text" class="form-control" name="speed_index" id="speed_index">
  </div>
   <div class="form-group">
    <label for="sezon">Sezon</label>
    <input type="text" class="form-control" name="sezon" id="sezon">
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button onclick="updateProduct()" type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>