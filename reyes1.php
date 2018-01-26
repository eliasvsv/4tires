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

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Los Reyes</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php
  $k=count($caps);
for ($i=$k-1; $i >3 ; $i--) { 
?>
<div class="row">
  <div class="col-md-12">
    <?php
      echo "<h3>".$caps[$i]["link"] ."</h3>" 
       ?>; 
  </div>
  </div>
<?php
}
  ?>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>