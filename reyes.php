<?php
include("simple_html_dom.php");/*
$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL, 'http://www.acvila-romania.ro/cauta/?latime=215&inaltime=70&diametru=16&brand=Firestone&runflat=0&tip=autoturisme');
curl_setopt($ch, CURLOPT_URL, 'http://www.canalrcn.com/los-reyes/capitulos/articulo-video/capitulo-3-de-marzo-beto-tranquiliza-natalia-por-lo-sucedido-6016');
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept-Language: es-es,en,ro'));
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
$error = curl_error($ch);
curl_close($ch);*/
//preg_match_all("(<div class=\"prod-desc\">(.*)</div>)siU", $result, $matches);
$html = file_get_html("http://www.canalrcn.com/los-reyes/capitulos/articulo-video/capitulo-14-de-febrero-nueva-vida-5976") ;

$i=$html->find('div.field-item', 1)->find('iframe',0);
//preg_match_all($regex, $result, $matches);
?>

<?php
$html2= file_get_html("http:".$i->src);
$video=$html2->find('meta', 19);


?>
<video controls>
    <source src="<?php echo $video->content; ?>" type="application/x-mpegURL">
</video>