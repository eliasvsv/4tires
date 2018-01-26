<?php
if (isset($_POST["code"])) {
$mysqli = new mysqli("localhost", "root", "realmadrid", "web"); 
$sql="update nexxon set brand='".$_POST["brand"]."',profil='".$_POST["profil"]."',latime='".$_POST["latime"]."',inaltime='".$_POST["inaltime"]."',radius='".$_POST["radius"]."',load_index='".$_POST["load_index"]."',speed_index='".$_POST["speed_index"]."',sezon='".$_POST["sezon"]."' WHERE code='".$_POST["code"]."'";
$mysqli->query($sql) or die(mysqli_error($mysqli));

}
?>