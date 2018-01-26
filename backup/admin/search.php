<?php
include("simple_html_dom.php");
/*$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL, 'http://www.acvila-romania.ro/cauta/?latime=215&inaltime=70&diametru=16&brand=Firestone&runflat=0&tip=autoturisme');
curl_setopt($ch, CURLOPT_URL, 'http://www.nexxon.ro/anvelope/?category=0&season=0&width=68108&height=69097&radius=68119&load_index=0&speed_index=0&brand=0&profile=0&inputString=&order=price+asc&af=Lista');
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept-Language: es-es,en,ro'));
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
$error = curl_error($ch);
curl_close($ch);
//preg_match_all("(<div class=\"prod-desc\">(.*)</div>)siU", $result, $matches);
preg_match_all("(<div id=\"products_container\">(.*)</div>)siU", $result, $matches);

$products = $matches[1];
echo $result;
*/

/**
* 
*/
class nexxon 
{
	function getHtml()
	{
		$html = file_get_html("http://www.nexxon.ro/anvelope/?category=0&season=0&width=68108&height=69097&radius=68119&load_index=0&speed_index=0&brand=0&profile=0&inputString=&order=price+asc&af=Lista") ;
		return $html;
	}

	function getCombos()
	{
		$html = $this->getHtml();
		
$r= "<ul id=\"menuLlanta\">";

$r.= $html->find("form#filter ul li",2)->outertext;
$r.= $html->find("form#filter ul li",3)->outertext;
$r.= $html->find("form#filter ul li",4)->outertext;

$r.= "</ul>";
return $r;
	}

function getData()
{


$html = file_get_html('http://www.acvila-romania.ro/cauta/?latime=175&inaltime=70&diametru=13&brand=&runflat=&tip=autoturisme');

		$ret = $html->find('.product');
		return $ret[0]->outertext;

}
function getData2()
{
	$html = file_get_html('http://www.nexxon.ro/anvelope/?category=72406&season=0&width=67827&height=67828&radius=67820&load_index=0&speed_index=0&brand=0&profile=0&inputString=&order=price+asc&af=Lista');

		$ret = $html->find('#products_container',0);
		return $ret;

}
	
}

