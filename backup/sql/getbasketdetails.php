<?php
session_start();
include("functions.php");
$cart= $_SESSION["basket"];
$k=count($cart);
$j=1;
$ids="";
		foreach ($cart as $c) {
			
			if($k==$j){
				$ids.=$c["cod"];
			}
			else{
					$ids.=$c["cod"].",";
			}
$j++;
				}
	?>
<table class="table table-bordered">
<tr><th>#</th><th>Produtc</th><th>Price</th></tr>
	<?php
$data=select("select * from products where cod in ($ids)");
$i=1;
while($obj = $data->fetch_object()){ 
 echo "<tr><td>$i</td><td>$obj->name</td><td>$obj->price</td></tr>"; 
    $i++;                 } 

?>

</table>