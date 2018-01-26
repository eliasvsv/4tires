<?php
include("simple_html_dom.php");
$capitulos = file_get_html('http://www.canalrcn.com/los-reyes/capitulos?page=6');

$i=1;
$j=0;

$caps[]=array();
foreach ($capitulos->find('div.views-row')as$capitulo  ) {
if ($j<>0) {
$caps[$i]["link"] = $capitulo->find('a',1)->href;
$caps[$i]["imagen"] =  $capitulo->find('img',0);
$caps[$i]["sumario"] =  $capitulo->find('div.sumario',0);
$i++;

}
$j=1;
}

//preg_match_all("(<div class=\"prod-desc\">(.*)</div>)siU", $result, $matches);


/*ffmpeg -i "http://mdstrm.com/video/58a377ad8ac010bf080f6b84.mp4" -user-agent "Mozilla/5.0 (Linux; U; Android 4.0.3; ko-kr; LG-L160L Build/IML74K) AppleWebkit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30"  -c copy test1.mp4*/

  $k=count($caps);
for ($i=$k-1; $i >3 ; $i--) { 
echo $caps[$i]["link"]."<br>";
}

  ?>
