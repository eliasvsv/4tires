<?php
include("simple_html_dom.php");
$html = file_get_html("http://www.canalrcn.com/los-reyes/capitulos/articulo-video/capitulo-14-de-febrero-nueva-vida-5976") ;
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
curl_close($ch);
$value[0] = explode(',', $pieces[2]);
        foreach($value[0] as $index => $element) {
            if(stripos($element, 'RESOLUTION') !== false) {
                echo $element;
            }
        }
echo "<br>".$pieces[3];
?>