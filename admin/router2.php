<?php
require_once("autoload.php");
Config\Autoload::run();
$v="Models\\Nexxon";
$test = new $v;
$args=array();
foreach (array_keys($_GET) as $key ) {
	$args[$key]=$_GET[$key];
}//end for
echo call_user_func_array(array($test, $_POST["f"]),$args);

?>