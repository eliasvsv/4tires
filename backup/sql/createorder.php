<?php
session_start();
include("functions.php");
$id= date("Ymdhis");
$date=date("Y-m-d- h:i:s");
$cart= $_SESSION["basket"];
insert("insert into orders (id, date) values($id,'$date')");
foreach ($cart as $c) {

			insert("insert into orders_line(idline,idorder,idproduct,q) values(0,$id,'". $c["cod"] ."','".$c["q"]."')");
				}
?>