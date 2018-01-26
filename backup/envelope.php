<?php namespace envelope;

class envelope{
  static function  login(){
$url="http://customers.inter-sprint.nl/scripts/cgirpc32.dll/ww0302?wa=433127,s=artikelzoek";
$data="artkode=WIN";
    $fp = fopen("cookie.txt", "w");
    fclose($fp);
    $login = curl_init();
    curl_setopt($login, CURLOPT_COOKIEJAR,dirname(__FILE__). "/cookie.txt");
    curl_setopt($login, CURLOPT_COOKIEFILE,dirname(__FILE__). "/cookie.txt");
    curl_setopt($login, CURLOPT_TIMEOUT, 40000);
    curl_setopt($login, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($login, CURLOPT_URL, $url);
 /*   $headers = [
    'GET / HTTP/1.1',
'Host: customers.inter-sprint.nl',
'Connection: keep-alive',
'Authorization: Basic c2NhZGkxOmV6bjVwMw==',
'Upgrade-Insecure-Requests: 1',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*\/*;q=0.8',
'Accept-Encoding: gzip, deflate',
'Accept-Language: es-ES,es;q=0.8,en;q=0.6,gl;q=0.4'
];

    curl_setopt($login, CURLOPT_HTTPHEADER, $headers);*/
    curl_setopt($login, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($login, CURLOPT_POST, TRUE);
    curl_setopt($login, CURLOPT_POSTFIELDS, $data);

   return curl_exec ($login);

    curl_close ($login);
  

	}  	
// adv_search=1&pass_value=1&skip=0&order=&deliveryaddress=&query=1757013&profil=-&class=-&speed=-&weight=-&min=&max=
//  http://anvelope.biz/index.php?page=search&action=product
    

	static function grab_page($site,$data){
  //envelope::login();
    $login = curl_init();
    curl_setopt($login, CURLOPT_COOKIEFILE,dirname(__FILE__). "/cookie.txt");
    curl_setopt($login, CURLOPT_TIMEOUT, 40000);
    curl_setopt($login, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($login, CURLOPT_URL, $site);
    curl_setopt($login, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36');
    curl_setopt($login, CURLOPT_FOLLOWLOCATION, TRUE);
  //  curl_setopt($login, CURLOPT_POST, TRUE);
   // curl_setopt($login, CURLOPT_POSTFIELDS, $data);

    return curl_exec ($login);

    curl_close ($login);
	}

}


?>