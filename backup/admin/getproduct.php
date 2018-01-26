<?php
if (isset($_POST["id"])) {
$mysqli = new mysqli("localhost", "root", "realmadrid", "web"); 
$sql="select * from nexxon WHERE code='".$_POST["id"]."'";
$products =$mysqli->query($sql);
$p=$products->fetch_object();
$j=json_encode($p);
echo $j;
}
?>