<?php namespace Api;
include('api.html.php');
include('api.database.php');
/**
* 
*/
class metodos
{
	private $html;
	private $db;
	function __construct()
	{
		$this->html=new html();
		$conf=array(
					"server"=>"localhost",
					"user"=>"root",
					"pass"=>"",
					"bd"=>"web"
				);
		$this->db=new database($conf);
	}

	public function insertImparProduct()
	{
		$args = func_get_args();
		$p=json_decode( $this->html->getProductByLink($args[1],""));
		$sql="
			INSERT INTO `web`.`impar_new` (
  `id`,
  `Tip`,
  `Dimensiune`,
  `Diametru`,
  `Index`,
  `Taxa`,
  `rulare`,
  `franare`,
  `zgomot`,
  `price`,
  `description`,
  `image`,
  `link`
) 
VALUES
  (
    0,
    '{$p->Tip}',
    '$p->Dimensiune',
    '$p->Diametru',
    '$p->Index',
    '$p->Taxa',
    '$p->rulare',
    '$p->franare',
    '$p->zgomot',
    '$p->price',
    '$p->description',
    '$p->image',
    '$p->link'
  ) 
		";
		$res="[error]";
	if(	$this->db->retorno($sql) or die(mysqli_error($this->db))){
			$res="[ok]";
	}
	return $res;
	}// end function


  public function getCategoryImpar(){
    $sql="";
    $this->db->retorno($sql)

  }



}// clase

?>