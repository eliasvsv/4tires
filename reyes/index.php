
<!doctype html>

<head>

   <!-- player skin -->
   <link rel="stylesheet" href="skin/skin.css">

   <!-- site specific styling -->
   <style>
   body { font: 12px "Myriad Pro", "Lucida Grande", sans-serif; text-align: center; padding-top: 5%; }
   .flowplayer { width: 80%; }
   </style>

   <!-- for video tag based installs flowplayer depends on jQuery 1.7.2+ -->
   <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

   <!-- include flowplayer -->
<!-- Flowplayer library -->
<script src="//releases.flowplayer.org/7.1.2/flowplayer.min.js"></script>
<!-- Flowplayer hlsjs engine (light) -->
<script src="//releases.flowplayer.org/hlsjs/flowplayer.hlsjs.light.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">
   .flowplayer {
  background-color: #00abcd;
}
.flowplayer .fp-color-play {
  fill: #eee;
}

</style>

</head>

<body>
<header>
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8"><img src="logo-reyes_0.png"></div>
  <div class="col-md-2"></div>
</div>   
</header>
<content>
 <div class="row">
  <div class="col-md-4"></div>
  <div id="player" class="col-md-4">
      
  </div>
  <div class="col-md-4">
  <div class="panel panel-default">
      <div class="panel-heading">
      <h3 class="panel-title">Capitulos</h3>
      </div>
      <div class="panel-body">
         <table id="caps" class="table table-bordered">

         </table>
      </div>
   </div>
  </div>
</div>  
</content>
<footer>
 <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4"></div>
  <div class="col-md-4"></div>
</div>  
</footer>
<script type="text/javascript">
function getCaps(url){
   $.get( "api.php",{"f":"getCapLinks","u":url})
  .done(function( data ) {
   var obj = jQuery.parseJSON( data );
   var i=0;
  for (key in obj) {

$("#caps").append("<tr><td>"+obj[i].link+"</td><td><button class='btn btn-primary' onclick=\"getDetails('"+obj[i].link+"')\">Play</button></td></tr>");
i++;
  }
 // $("#caps").html(data);
  });
}

function getDetails(url){
  $.get( "api.php",{"f":"getCapDetails","u":url})
  .done(function( data ) {
      var obj = jQuery.parseJSON( data );
      console.log(obj.SRC);
      setCap(obj.SRC);
 //  $("#reproductor").attr("src",obj.SRC);
   
 // 
  });
}
function setCap(url){
  $.post( "player.php",{"url":url})
  .done(function( data ) {
$("#player").html(data);
 // $("#caps").html(data);
  }); 
}
   $( document ).ready(function() {
   // var obj = jQuery.parseJSON( '{ "name": "John" }' );
   getCaps("http://www.canalrcn.com/los-reyes/capitulos?page=0");
});
</script>
</body>
</html>
