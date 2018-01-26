<?php
$mysqli = new mysqli("localhost", "root", "realmadrid", "web"); 
$sql="select * from orders where isopen=0";
$orders =$mysqli->query($sql);
?>
<table class="table table-hover">
<tr><th>ID</th><th>Date</th><th>Items</th></tr>
<?php
while($order = $orders->fetch_object()){ 
	echo "<tr><td>".$order->id."</td><td>".$order->date."</td><td><button type=\"button\" class=\"btn btn-primary btn-sm\" onclick=\"getOrder('".$order->id."')\" data-toggle=\"modal\" data-target=\"#myModal\">Open</button></td></tr>";
}
?>
</table>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div id="nBas" class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
function getOrder(cod1) {
$.get( "getorder.php", { order: cod1} )
  .done(function( data ) {
    $( "#nBas" ).html( data );
  });

 }
</script>