<?php namespace Api;
class Impar{
 private $url_login;
 private $data_login;
 public function __construct($login,$data)
    {
       $this->url_login=$login;
       $this->data=$data;
    }
  private function  login(){
    $fp = fopen("cookie.txt", "w");
    fclose($fp);
    $login = curl_init();
    curl_setopt($login, CURLOPT_COOKIEJAR,dirname(__FILE__). "/cookie.txt");
    curl_setopt($login, CURLOPT_COOKIEFILE,dirname(__FILE__). "/cookie.txt");
    curl_setopt($login, CURLOPT_TIMEOUT, 40000);
    curl_setopt($login, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($login, CURLOPT_URL, $this->url_login);
    curl_setopt($login, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($login, CURLOPT_POST, TRUE);
    curl_setopt($login, CURLOPT_POSTFIELDS, $this->data_login);
    return curl_exec ($login);
    curl_close ($login);
  	}  	

	public function grab_page($site,$data){
  impar::login();
    $login = curl_init();
    curl_setopt($login, CURLOPT_COOKIEFILE,dirname(__FILE__). "/cookie.txt");
    curl_setopt($login, CURLOPT_TIMEOUT, 40000);
    curl_setopt($login, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($login, CURLOPT_URL, $site);
    curl_setopt($login, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36');
    curl_setopt($login, CURLOPT_FOLLOWLOCATION, TRUE);
    return curl_exec ($login);
    curl_close ($login);
	}

}
?>