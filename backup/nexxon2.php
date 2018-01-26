<?php
$j=0;
for ($i=1; $i <=295 ; $i++) { 
  $login = curl_init();
    curl_setopt($login, CURLOPT_TIMEOUT, 40000);
    curl_setopt($login, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($login, CURLOPT_URL, "http://localhost/api/nexxon.php?txtSearch=".$j);
	curl_setopt($login, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36');
    curl_setopt($login, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_exec ($login);
    curl_close ($login);
    echo "OK ".$i."<br>";
    $j=$j+20;
}
?>