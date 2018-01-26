<?php namespace Reyes;
	include("simple_html_dom.php");
/**
* 
*/
class Capitulos 
{
public function getCapLinks(){
		$args = func_get_args();
		$capitulos = \file_get_html($args[1]);
		$i=1;
		$j=0;
		$caps[]=array();
		$caps2[]=array();
		foreach ($capitulos->find('div.views-row')as$capitulo  ) {
			if ($j<>0) {
				$caps[$i]["link"] = "http://www.canalrcn.com".$capitulo->find('a',1)->href;
				$caps[$i]["imagen"] =  $capitulo->find('img',0)->src;
				$caps[$i]["sumario"] =  $capitulo->find('div.sumario',0)->plaintext;
				$i++;
			}
		$j=1;
		}
		  $k=count($caps);
		  $j=0;
		for ($i=$k-1; $i >3 ; $i--) { 
		 $caps2[$j]["link"]=$caps[$i]["link"];
		 $caps2[$j]["imagen"]=$caps[$i]["imagen"];
		 $caps2[$j]["sumario"]=$caps[$i]["sumario"];
		 $j++;
		}
//preg_match_all("(<div class=\"prod-desc\">(.*)</div>)siU", $result, $matches);
/*ffmpeg -i "http://mdstrm.com/video/58a377ad8ac010bf080f6b84.mp4" -user-agent "Mozilla/5.0 (Linux; U; Android 4.0.3; ko-kr; LG-L160L Build/IML74K) AppleWebkit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30"  -c copy test1.mp4*/
	 /*  $k=count($caps);
	   for ($i=$k-1; $i >3 ; $i--) { 
       echo "http://www.canalrcn.com".$caps[$i]["link"]."<br>";
	   }*/

 return json_encode($caps2);
	}// end function

public function getCapDetails(){
			$args = func_get_args();
$html = file_get_html($args[1]) ;
$i=$html->find('div.field-item', 1)->find('iframe',0);
$html2= file_get_html("http:".$i->src);
$video=$html2->find('meta', 19);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $video->content);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept-Language: es-es,en,ro'));
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
$pieces = explode("\n", $result);
$error = curl_error($ch);
$det[]=array();
curl_close($ch);
$value[0] = explode(',', $pieces[2]);
        foreach($value[0] as $index => $element) {
            if(stripos($element, 'RESOLUTION') !== false) {
                $det["RESOLUTION"]= $element;
            }
        }
$det["SRC"]=$pieces[3];
return json_encode($det);
}//end funciont	
}// end class

//;
if(isset($_GET["f"])){
$args=array();	
foreach (array_keys($_GET) as $key ) {
	$args[$key]=$_GET[$key];
}//end for
$reyes=new \Reyes\Capitulos($args[1]);
echo call_user_func_array(array($reyes, $args["f"]),$args);
}
?>