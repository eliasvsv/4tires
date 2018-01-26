<!DOCTYPE html>
<?php
include("search.php");
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Panel</title>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap -->
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript">
$( document ).ready(function() {

$( "#search" ).click(function() {
$.get( "http://www.acvila-romania.ro/cauta/?latime=215&inaltime=70&diametru=16&brand=Firestone&runflat=0&tip=autoturisme", function( data ) {
  $( "#result").html( data );

});
}); // end user function

});// end document.ready
   </script> 
   <style type="text/css">
  #menuLlanta {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;

}

#menuLlanta li {
    float: left;
}
</style>
  </head>
  <body>
<div id="header" class="row">
  <div class="col-md-12"> 
     
<nav class = "navbar navbar-inverse" role = "navigation">
   
  
   
   <div>
      <ul class = "nav navbar-nav">
         <li class = "active"><a href = "#">Home</a></li>
         <li id="products"><a href = "#">Products</a></li>         
         <li id="users"><a href = "#">Users</a></li>
         <li id="categories"><a href = "#">Categories</a></li>
         <li id="suppliers" ><a href = "#">Suppliers</a></li>
         
         </ul>
   </div>
   
</nav>
  </div>
</div>
<div id="content" class="row">
  <div class="col-md-2"></div>
  <div id="workarea" class="col-md-8">


<?php
$n = new nexxon();
echo $n->getData();
 echo $n->getData2();
?>
 
</div>
<div id="result"></div>
  </div>
  <div class="col-md-2"></div>
</div>\
<div id="footer" class="row">
  <div class="col-md-12">
    <nav class="navbar navbar-inverse navbar-fixed-bottom">
    <div class="container-fluid"><p class="navbar-text navbar-right">Signed in as <a href="#" class="navbar-link">Elias Espino </a></p> </div>
     
    </nav>
  </div>
  
</div>
  </body>
</html>