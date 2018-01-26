<?php
include("simple_html_dom.php");
$html = file_get_html('http://www.canalrcn.com/los-reyes/capitulos?page=0');
$i=$html->find('ul.pager',0);

echo $i;

?>