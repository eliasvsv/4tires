<?php
include("../functions/funciones.php");
$f=new funciones();

?>
<div class="panel panel-default">
  <div class="panel-body">
 <center>
 	 <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div><!-- /input-group -->
 </center> 
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-body">
 <table class="table table-striped">
<tr><th>#</th><th>Name</th><th>Surname</th><th>Modify</th><th>Delete</th></tr>
<?php
echo $f->getUsers();
?>
 </table>
  </div>
</div>