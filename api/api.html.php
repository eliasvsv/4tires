<?php namespace Api;
include('api.login.php');
class html{
	private $db;
	private $login;


	public function __construct(){
			require 'simple_html_dom.php';
			$url="https://www.impar.ro/ro/account/login.html";
$data="email=dan.florin@acvila-romania.ro&password=cv4dst7&staylogged=on";
			$this->login= new Impar($url,$data);
            $conf=array(
                    "server"=>"localhost",
                    "user"=>"root",
                    "pass"=>"",
                    "bd"=>"web"
                );
        $this->db=new database($conf);
			
	}
		public function getProductByLink($link,$data)
		{
		
			try{
  $page= $this->login->grab_page($link,$data);
$source=str_get_html($page);
if($products=$source->find("div[id=tab-description]")){
$description=$source->find("div.product_detail_spe_gutters",0)->find("h1",0)->plaintext;
$products=$source->find("div[id=tab-description]",0);
$image=$source->find("a.thumbnail",0)->href;
$price=str_replace("LEI", "",$source->find("h2",0)->plaintext ) ;
$res=  array(
    "Tip" =>"".trim($products->find("td",1)->plaintext)."" ,
    "Dimensiune" =>"".trim($products->find("td",3)->plaintext)."" ,
    "Diametru" =>"".trim($products->find("td",5)->plaintext)."" ,
    "Index" =>"".trim($products->find("td",7)->plaintext)."" ,
    "Taxa" =>"".trim($products->find("td",9)->plaintext)."" ,
    "rulare" =>"".trim($products->find("td",11)->plaintext)."" ,
    "franare" =>"".trim($products->find("td",13)->plaintext)."" ,
    "zgomot" =>"".trim($products->find("td",15)->plaintext)."" ,
    "price"=>"".str_replace(",", ".", $price) ."",
    "description"=>"".$description."",
    "image"=>"".$image."",
    "link"=>"".$link."",
     );
return json_encode($res);  
}else{
    echo "[Error]";
}
//thumbnail

}
catch (Exception $e){
echo "[Error]";
}

		}//function	
public function checkSatusByLink($link){
    $sql="SELECT * FROM impar_new WHERE link='{$link}'";
    $status="false";
    $datos=      $this->db->retorno($sql) or die(mysqli_error($this->db));
    if(mysqli_num_rows($datos)>0){
            $status="true";
    }
    return $status;
}
}//class

?>