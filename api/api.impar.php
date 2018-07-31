<?php
include('api.login.php');
include('api.database.php');
//************* setup api.login*****************************************
$url="https://www.impar.ro/ro/account/login.html";
$data="email=dan.florin@acvila-romania.ro&password=cv4dst7&staylogged=on";
$api= new Api\Impar($url,$data);
//***********************************************************************
//
//						seting up api.database
//
//
$conf=array(
	"server"=>"localhost",
	"user"=>"root",
	"pass"=>"",
	"bd"=>"web"
);
$db= new Api\Database($conf);
//
//
// 			
//
//

echo $api->grab_page("https://www.impar.ro/ro/Anvelope/Autoturisme/TOYO/Anvelopa-135-R15-TOYO-310-S-p92739c61c62.html?limit=5000","");

?>