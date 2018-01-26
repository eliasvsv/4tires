<?php
require_once("autoload.php");
Config\Autoload::run();
if(isset($_GET["t"])){
	if ($_GET["t"]=="c") {
$v="Models\\".$_GET["c"];
$test = new $v;
//echo $test->getEmails();
echo call_user_func(array($test, $_GET["f"]));
}
elseif ($_GET["t"]=="h") {
$v="Models\\".$_GET["c"];
$test = new $v;
//echo $test->getEmails();
if (isset($_GET['p2'])) {
echo call_user_func(array($test, $_GET["f"]),$_GET["p"],$_GET["p2"]);
}
else{
	echo call_user_func(array($test, $_GET["f"]),$_GET["p"]);
}
}

}
if(isset($_POST["c"])){
$v="Models\\".$_POST["c"];
$test = new $v;
$args=array();
foreach (array_keys($_POST) as $key ) {
if($key!="c" || $key!="f"){
$args[$key]=$_POST[$key];
//	echo $_POST[$key];
}// end if
}//end for
//echo $_POST["f"]."<br>";
//echo $v;
echo call_user_func_array(array($test, $_POST["f"]),$args);
}
if(isset($_POST["basket"])){
$v="Session\\Basket";
$test = new $v;
$args=array();
foreach (array_keys($_POST) as $key ) {
if($key!="c" || $key!="f"){
$args[$key]=$_POST[$key];
//	echo $_POST[$key];
}// end if
}
echo call_user_func_array(array($test, $_POST["f"]),$args);
}
if(isset($_POST["orders"])){
$v="Models\\Orders";
$test = new $v;
$args=array();
foreach (array_keys($_POST) as $key ) {
if($key!="c" || $key!="f"){
$args[$key]=$_POST[$key];
//	echo $_POST[$key];
}// end if
}
echo call_user_func_array(array($test, $_POST["f"]),$args);
}

/*$v="Models\\Orders";
$test = new $v;
echo $test->create();*/
?> 