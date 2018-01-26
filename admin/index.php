<?php
session_start();
if (!isset($_SESSION["admin"])) {
header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      body {
  padding-top: 50px;
}
.starter-template {
  padding: 100px 15px;
  text-align: center;
}
#container{
  padding-top: 50px;
}
.Product h3{
color: #FF5656;
}
.modal-body {
    max-height: 800px;
}
    </style>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li role="presentation" class="dropdown active"  ><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" href="#">  Products <span class="caret"></span>   </a>
    <ul class="dropdown-menu">
    <li onclick="loadTemplate('nexxon')"><a href="#contact">Edit</a></li>
     <li><a onclick="pricing()" href="#contact">Pricing</a></li>
    </ul></a></li>
            <li onclick="loadTemplate('descriptions')"><a href="#about">Descriptions</a></li>
            <li role="presentation" class="dropdown" ><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" href="#">offers <span class="caret"></span>   </a>
    <ul class="dropdown-menu">
    <li onclick="newOffer()"><a href="#contact">New</a></li>
     <li onclick="loadTemplate('editOffers')" ><a href="#contact">Edit</a></li>
    </ul></a></li>
           <li><a href="#contact">Orders</a></li>
          <li><a href="#contact">Call Center</a></li>
          <li><a href="#contact">Invoicing</a></li>
          <li><a href="#contact">Pending Cash</a></li>
          <li><a href="#contact">Pending Payments</a></li>
          <li><a href="#contact">Delivery Handling</a></li>
          <li><a href="#contact">Reports</a></li>
          <li><a href="#contact">Tickets</a></li>
          <li><a href="#contact">Credit Line</a></li>
          <li><a href="#contact">SetUp</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<div class="row starter-template">
<div class="col-lg-1"></div>
<div id='container' class="col-lg-10">
  


</div>
<div class="col-lg-1"></div>

 </div><!-- /.container -->
<div class="row">
  <div class="col-lg-2"></div>
  <div id="results" class="col-lg-8">
    
  </div>
  <div class="col-lg-2"></div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript">
function getFilter(filter){
    $.get( "router.php", { c: "Html", f: "getFilter",t:"h",p:filter } )
  .done(function( data ) {
   $("#"+filter).html(data);
  });
  }
function searchTyresBy() {
$.post( "router.php", $("#searchForm").serializeArray())
  .done(function( data ) {
  $("#results").html(data);
  });
}
function loadTemplate(template) {
$.post( "html/"+template+".html")
  .done(function( data ) {
    $("#container").html(data);
      });   
}
function getBrandsCombo() {
$.post( "router.php", { c: "Products", f: "getBrandsCombo" })
  .done(function( data ) {
    $("#comboBrands").html(data);
      });   
}
function getProfilCombo() {
$.post( "router.php", { c: "Products", f: "getProfilCombo",brand:$("#brand").val() })
  .done(function( data ) {
    $("#comboProfil").html(data);
      });   
}
function getTires() {
$.post( "router.php", $("#searchForm").serializeArray())
  .done(function( data ) {
   $('#results').html(data);
  //$("#results").append(data);
  }); }
  function editNexxon(code) {
    $.post( "router.php", { c: "Products", f: "getNexxonProductById",id:code,idSupplier:$('#comboSupplier').val() })
  .done(function( data ) {
    var obj = jQuery.parseJSON(data);
     tinyMCE.activeEditor.setContent(atob(obj.descriere));
     $("#price").val(obj.price);
     $("#code").val(obj.code);
      }); 
  $('#myModal').modal('show');

}
function updateNexxonPrice()
{
  var content =tinymce.activeEditor.getContent({format: 'raw'});
   $.post( "router.php", { c: "Products", f: "updateNexxonProduct",id: $("#code").val(),price: $("#price").val(),description: content  })
  .done(function( data ) {
   
      }); 
     }
function updateNexxonDescriptions()
{
  var content =tinymce.activeEditor.getContent({format: 'raw'});
   $.post( "router.php", { c: "Products", f: "updateNexxonDescriptions",id: $("#brand").val(),price: $("#profil").val(),description: content  })
  .done(function( data ) {
   
      }); 
     }
function updateNexxonPrices()
{
   $.post( "router.php", { c: "Products", f: "updateNexxonPrices",id: $("#brand").val(),profil: $("#profil").val(),price: $("#price").val()  })
  .done(function( data ) {
   
      }); 
     }     
function closeModal() {
var txt;
var r = confirm("Confirm you want update this product");
if (r == true) {
  updateNexxonPrice();
   $('#myModal').modal('hide');
} else {
    txt = "You pressed Cancel!";
}
}
function getPromo() {
    $.post( "Controls/getPromo.php")
  .done(function( data ) {
     $('#promoContent').html(data);
      }); 
 }
 function addItemPromo(code) {
    $.post( "Controls/promo.php", { cod: code })
  .done(function( data ) {
   getPromo();
      }); 
  
}
 function cleanPromo() {
    $.post( "Controls/clearPromo.php")
  .done(function( data ) {
   getPromo();
      }); 
  
}
function createOffer() {
$.post( "router.php", { c: "Products", f: "createOffert",start: $("#dateStart").val(),end:$("#dateEnd").val() })
  .done(function( data ) {
   
      }); 
}
function getSuppliers() {
$.post( "router.php", { c: "Products", f: "getSuppliers" })
  .done(function( data ) {
    $('#comboSup').html(data);
      }); 
}
function pricing() {
$.post( "html/pricing.php")
  .done(function( data ) {
    $("#container").html(data);
      });   
}
function newOffer() {
$.post( "html/newOffer.php")
  .done(function( data ) {
    $("#container").html(data);
      });   
} 
  $( document ).ready(function() {
loadTemplate('nexxon');
});

 
</script>
  </body>
</html>