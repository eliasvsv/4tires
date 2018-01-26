<?php namespace envelope;

class envelope{
  static function  login(){
    $url="http://anvelope.biz/index.php";
    $data="go_page=checkout&cs_customer_email=dan.florin@acvila-romania.ro&cs_customer_password=cv4dst7";
    $fp = fopen("cookie.txt", "w");
    fclose($fp);
    $login = curl_init();
    curl_setopt($login, CURLOPT_COOKIEJAR,dirname(__FILE__). "/cookie.txt");
    curl_setopt($login, CURLOPT_COOKIEFILE,dirname(__FILE__). "/cookie.txt");
    curl_setopt($login, CURLOPT_TIMEOUT, 400000);
    curl_setopt($login, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($login, CURLOPT_URL, $url);
	curl_setopt($login, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36');
    curl_setopt($login, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($login, CURLOPT_POST, TRUE);
    curl_setopt($login, CURLOPT_POSTFIELDS, $data);

   return curl_exec ($login);

    curl_close ($login);
  

	}  	
// adv_search=1&pass_value=1&skip=0&order=&deliveryaddress=&query=1757013&profil=-&class=-&speed=-&weight=-&min=&max=
//  http://anvelope.biz/index.php?page=search&action=product
    

	static function grab_page($site,$data){
  envelope::login();
    $login = curl_init();
    curl_setopt($login, CURLOPT_COOKIEFILE,dirname(__FILE__). "/cookie.txt");
    curl_setopt($login, CURLOPT_TIMEOUT, 400000);
    curl_setopt($login, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($login, CURLOPT_URL, $site);
    curl_setopt($login, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36');
    curl_setopt($login, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($login, CURLOPT_POST, TRUE);
    curl_setopt($login, CURLOPT_POSTFIELDS, $data);

    return curl_exec ($login);

    curl_close ($login);
	}

}


?>