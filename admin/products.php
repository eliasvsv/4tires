<?php
session_start();

include("sql/functions.php");
?>
<!DOCTYPE html>
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
<link href="carousel.css" rel="stylesheet">  
  
  </head>
  <body>
  <div id="header" class="row">
  <div class="col-md-8"></div>
  <div id="workarea" class="col-md-2">
 
  </div>
<div id="menu" class="row">
 <div class="col-md-4"> </div>
  <div class="col-md-4"> 
     
<nav class = "navbar " role = "navigation">
   
  
   
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

  <div class="col-md-4"></div>
</div>
<div class="row">
  <div class="col-md-12">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item">
          <img class="first-slide" src="img/1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="img/2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item active">
          <img class="third-slide" src="img/3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div> 
</div>
<div class="row">
<div class="col-md-4">
  
</div>
<div class="col-md-4">
  <form action="products.php" method="get" class="navbar-form navbar-left" role="search">
  <div class="form-group">
    <input id="p" name="p" type="text" class="form-control" placeholder="Search">
  </div>
  <button type="Submit" class="btn btn-success">Submit</button>
</form>
</div>
<div class="col-md-4">
  
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
  <button onclick="showteBasket()" class="btn btn-primary pull-right" type="button" data-toggle="modal" data-target="#myModal">
  Check Out <span id="nBas" class="badge">0</span>
</button><button  onclick="cleanBasket()" type="button" class="btn btn-danger pull-right">Clean Basket</button>
</div> 
<div class="col-md-4"></div>

</div>
<div id="content" class="row">
  <div class="col-md-2"></div>
    <div id="result" class="col-md-8">
    <?php
    $sql="";
    if(isset($_GET["p"])){
      $sql="select * from products where name like '%".$_GET["p"]."%'";
    }
    else{
      $sql="select * from products limit 9";
    }
$datos =select($sql);
$line=array();
$i=1;
?>
<table class="table table-hover">
<tr><th>#</th><th>Product</th><th>Price</th><th>Add Basket</th></tr>
<?php
while($obj = $datos->fetch_object()){ 
  echo"<tr><td>$i</td><td>".$obj->name."</td><td>".$obj->price."</td><td><div class=\"form-group row\">
  <div class=\"col-xs-2\">  <input id=\"".$obj->cod."\" type=\"text\" class=\"form-control\" id=\"produc\" ></div><button onclick=\"addBasket('".$obj->cod."')\" type=\"button\" class=\"btn btn-success\">+</button></td></tr>";
    $i++;           
          } 
 
    ?>


</table>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> <div class="navbar-header">
            <img alt="basket" width="25px" height="25px" src="img/basket.png">
         </div>&nbsp;&nbsp;&nbsp;&nbsp;Your Products</h4>
        
      </div>
      <div id="modalBasket" class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button onclick="createOrder()" type="button" class="btn btn-primary">Create an Order</button>
      </div>
    </div>
  </div>
</div>
      </div> <!--fin content -->

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
 <script type="text/javascript">
   // A $( document ).ready() block.
function addBasket(cod1) {
var q1;
q1=$("#"+cod1).val();
$.get( "sql/add.php", { cod: cod1, q: q1 });
 updateBasket();
 }
function updateBasket() {
$.get( "sql/getbasket.php", function( data ) {
 $( "#nBas" ).text( data );
});
 }
 function showteBasket() {
$.get( "sql/getbasketdetails.php", function( data ) {
 $( "#modalBasket" ).html( data );
});
 }  
  function createOrder() {
$.get( "sql/createorder.php", function( data ) {
 $( "#modalBasket" ).html( "<h4>Thanks For you Order</h4>" );
});
$.get( "sql/des.php");
 }
 function cleanBasket() {
$.get( "sql/des.php");
 updateBasket();
 }
$( document ).ready(function() {
 updateBasket();

});// end document.ready
   </script> 

  </body>
</html>

