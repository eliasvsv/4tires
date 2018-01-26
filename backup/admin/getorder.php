<?php
if(isset($_GET["order"])){
	$mysqli = new mysqli("localhost", "root", "realmadrid", "web"); 
$sql="SELECT c.`name`,c.`link`,c.`price`  FROM orders a,orders_line b, products c WHERE a.`id` = b.`idOrder` AND  b.`idProduct`= c.`cod` AND a.`id`='".$_GET["order"]."'";	
$orders =$mysqli->query($sql);
}

?>
<table class="table table-bordered">
<tr><th>#</th><th>Produtc</th><th>Price</th></tr>
	<?php
$i=1;
while($obj = $orders->fetch_object()){ 
 echo "<tr><td>$i</td><td><a target=\"_blank\" href='$obj->link'>$obj->name</a></td><td>$obj->price</td></tr>"; 
    $i++;                 } 

?>

</table>
