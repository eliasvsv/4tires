<?php
session_start();
require_once("admin/Models/Conexion.php");
require_once("admin/Models/Html.php");
$product = new Models\Html;
?>
<!DOCTYPE html>
<html lang="ro">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114840378-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114840378-1');
</script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Importator si distribuitor de anvelope.Distribuim toata gama de anvelope pentru toate tipurile de autovehicule.Anvelope pentru autoturisme,4X4,autoutilitare,autocamioane,autocare,utilaje agricole, utilaje industriale.Anvelope pentru toate sezoanele vara,iarna si allseason.">
    <meta name="keywords"  content="anvelope, cauciucuri, anvelope de iarna, anvelope iarna, cauciucuri iarna, pneuri auto, anvelope auto, anvelope de vara, anvelope ieftine, anvelope vara, anvelopa, preturi anvelope, cauciucuri vara, pneuri,anvelope autoturisme,anvelope 4x4,anvelope camioane,anvelope autobuz,anvelope industriale,anvelope agricole,camere de aer,acumulatori auto,bateri auto,acumulatori autoturisme,acumulatori camioane,acumulatori motociclete,jante auto,jante autoturisme,jante 4x4 ,jante aliaj, jante otel,jante tabla,lanturi antiderapante,lanturi autoutilitare,lanturi pentru anvelope,anvelope pentru autoturisme, anvelope pentru autoutilitare,anvelope pentru off road ,anvelope pentru camioane,anvelopepentru autojuse ,anvelope pentru utilaje industriale,anvelope pentru utilaje agricole ,anvelope pentru stiviutoare,anvelope pentru remorci,anvelope pentru utilaje forestiere,anvelope pentru remorci, hotel anvelope,accesorii auto, anvelope atv,anvelope pentru motociclete  " />
    <meta name="author" content="4tires">

    <title>Home | 4Tires.ro</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  	<link rel="stylesheet" href="css/bootstrap-select.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

    <!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/compare.js"></script>
      <link rel="stylesheet" href="css/busqueda.css">
      <link rel="stylesheet" type="text/css" href="css/labels.css">
<!--      <link rel="stylesheet" type="text/css" href="https://cdn.tiresleader.com/static/css/style.css?5"> -->
      <style type="text/css">
	#divboLoad_index{
		width: 100px;
		float: left;
	}
		#divSpeed_index{
		width: 100px;
				float: left;
	}

.filters{
	background-color: #E8E8E8;
	padding-top: 10px;
	margin-bottom: 10px;
}
.busca{
	margin-right: 0px;
}
.advance{
display: none;
}
.ba{
	color: #ff5656;
}
.wrapper{

	background-color: #000;
	margin-top:-20px; 
}
.jcarousel-wrapper {
    margin: 20px auto;
    position: relative;
    border: 10px solid #000;
    width: 1600px;
    height: 425px;
    -webkit-border-radius: 5px;
       -moz-border-radius: 5px;
            border-radius: 5px;
    -webkit-box-shadow: 0 0 2px #999;
       -moz-box-shadow: 0 0 2px #999;
            box-shadow: 0 0 2px #999;
            background-color: #000;
}


.jcarousel-wrapper .photo-credits {
    position: absolute;
    right: 15px;
    bottom: 0;
    font-size: 13px;
    color: #fff;
    text-shadow: 0 0 1px rgba(0, 0, 0, 0.85);
    opacity: .66;
}

.jcarousel-wrapper .photo-credits a {
    color: #fff;
}

/** Carousel **/

.jcarousel {
    position: relative;
    overflow: hidden;
}

.jcarousel ul {
    width: 20000em;
    position: relative;
    list-style: none;
    margin: 0;
    padding: 0;
}

.jcarousel li {
    float: left;
}

/** Carousel Controls **/

.jcarousel-control-prev,
.jcarousel-control-next {
    position: absolute;
    top: 200px;
    width: 30px;
    height: 30px;
    text-align: center;
    background: #4E443C;
    color: #fff;
    text-decoration: none;
    text-shadow: 0 0 1px #000;
    font: 24px/27px Arial, sans-serif;
    -webkit-border-radius: 30px;
       -moz-border-radius: 30px;
            border-radius: 30px;
    -webkit-box-shadow: 0 0 2px #999;
       -moz-box-shadow: 0 0 2px #999;
            box-shadow: 0 0 2px #999;
}

.jcarousel-control-prev {
    left: -50px;
}

.jcarousel-control-next {
    right: -50px;
}

.jcarousel-control-prev:hover span,
.jcarousel-control-next:hover span {
    display: block;
}
#comboLatime{
max-width: 10px;
}
#comboInaltime{
max-width: 10px;
}
#comboRadius{
max-width: 10px;
}
#v{
background: 	 url(images/switcher.png.pagespeed.ce.4_TMkUw9sf.png)
	 no-repeat;
	 width: 80px;
	 height:25px;
	 display: block;
	     background-position: 0 -52px;
}
#q{
background: 	 url(images/switcher.png.pagespeed.ce.4_TMkUw9sf.png)
	 no-repeat;
	 width: 80px;
	 height:25 px;
	 display: block;
	background-position: 0 -130px;
}
      .panel-body {
    padding: 5px;
    background-color: #f3f3f3;
      
        padding-top: 40px;
        }
    .panel-default {
    border-color: #FFF;
    margin-top: 50px;
}
@media screen and (max-width: 767px) {
    .root
       {
        display: table; width: 100%;
    }
 
    .left-side {
        display: table-row-group; 
    }
     
    .content{
       display: table-header-group;
    }
}
.imgd{
  max-height: 100px;
}
#amp {
    margin-top: 5px;
}
</style>

</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v2.12&appId=118443248985786&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div  class="navbar-brand"><a href="tel:0744123000" ><span class="whiteBig">0744.123.000</span></a> <span>pentru comenzi online si informatii</span></div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Acasa <span>|</span></a>
                    </li>
                    <li>
                        <a href="#">Despre noi <span>|</span></a>
                    </li>
                    <li>
                        <a href="#">Cum comand <span>|</span></a>
                    </li>
                    <li>
                        <a href="#">Livrare <span>|</span></a>
                    </li>
                    <li>
                        <a href="#">Blog <span>|</span></a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<div class="jumbotron logoNav ">
	<div class="logoheader">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
				<a class="navbar-brand logo" href="index.php" title="Acasa"><img src="img/4tires-logo.png" alt="4Tires.ro"></a>
				</div>
				
				<div class="col-lg-8 alignright">
					<ul class="nav navbar-nav_small">
                    	<li>
                        	<a href="#"   data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-html="true"   data-content="<p><button class='incont'>Intra in cont</button><a href='#' class='red'>Cont nou</a></p>" title="<span class='col1'>
								<i class='fa fa-user fa-2x' aria-hidden='true'></i>
							</span>
							<span class='col2'>Intra in contul tau si ai control complet asupra ofertelor!</span>
							<br class='clear'>"><i class="fa fa-user" aria-hidden="true"></i> Contul meu   </a>
                    	</li>
                    	<li>
                        	<a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favorite   </a>
                    	</li>
                    	<li>
                        	<a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cosul meu  <span id="basketN" class="badge">0</span> </a>
                        	
                    	</li>
					</ul>
				</div>
			</div>            		
		</div>
	</div>



	</div>		
	   <!-- Page Content *********************************************************************************************** -->
<div  class="row root">
	<div class="col-md-12 principal"> 
       <div id="contenedor" class="row">
         <div id="filtersArea" class="col-md-2 left-side ">
           <div class="panel panel-default">
              <div class="panel-body">
                       <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">Tip</h3>
                            </div>
                            <div class="panel-body">
                              <div  class="list-group">
                                 <?php     echo $product->getBrandsList(); ?>
                              </div>
                            </div>
                        </div>
                               
                       <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">anvelope autoturisme</h3>
                            </div>
                            <div class="panel-body">
                              <div  class="list-group">
                                 <?php     echo $product->getBlockAutoturisme('AUTOTURISME'); ?>
                              </div>
                            </div>
                        </div>
                      <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">anvelope AUTOUTILITARE</h3>
                            </div>
                            <div class="panel-body">
                              <div  class="list-group">
                                 <?php     echo $product->getBlockAutoturisme('AUTOUTILITARE'); ?>
                              </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">anvelope CAMIOANE</h3>
                            </div>
                            <div class="panel-body">
                              <div  class="list-group">
                                 <?php     echo $product->getBlockAutoturisme('CAMIOANE'); ?>
                              </div>
                            </div>
                        </div>             
              </div>
          </div>
        </div>
         <div id="searchArea " class="col-md-9 content">
<!--*********************************************************************************************************-->         	
         <!--****************************************************************inicio menu busqueda--> 
<!--*******************************************************new menu***********************************************************************--> 
<div id="menu1">
<?php echo $product->SearchBox();?>
</div>
       <!--**************************************************fin busqueda***************************************************************************************-->   
           <div class="panel panel-default">
              <div  id="results" class="panel-body">
                       Basic panel example
              </div>
           </div>
</div>
           <!--***********************************-->
              <div class="col-md-1">
          <div class="row">
               <div class="col-md-9"></div> 
               <div id="compareBasket" class="col-md-1" style="">
               <div> 
                   Compare
              </div>  
              </div>
        </div>
      </div>
<!--*************************************************************************************************************************************************************************************-->	
 <div class="wrapper">

          
       

            </div>
<br class="clear">
    <!-- Page Content ******************************************************************************************* -->


    <!-- Page Content ******************************************************************************************* -->
    <div id="top" class="row  " >
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div id="topSearch" class="col-sm-4 "><p>Top Premiun</p>
			<div  class="row bloque">
				<?php 
				echo $product->topPremiun();
				?>
			</div>
	</div>
	<div id="ofer2" class="col-sm-4 "><p>Top Quality</p>
			<div  class="row bloque">
				<?php 
				echo $product->topPremiun();
				?>
			</div>
			
	</div>
	<div id="top-discount" class="col-sm-4 "><p>Top Discount</p>
			<div  class="row bloque">
				<?php 
				echo $product->topPremiun();
				?>
			</div>
			</div>

	</div>
	    <div class="col-md-2"></div>	
	</div>   
    <div class="row contenedor"  >
      <div id="left" class="col-lg-1"></div>
      <div  id="results" class="col-lg-10"></div>
   
    </div>
 
<!-- Page Heading/Breadcrumbs -->
      
   <footer>
   		<section class="bgr2">
			<div class="container">
        		<div class="row">
                	<div class="col-lg-12">
                		<p>Stoc impresionant de anvelope de la toti producatorii  <span class="text-red">Inscrie-te la newsletter</span></p>
					</div>
				</div>
			</div>
		</section>
		<section class="bgr3">
			<div class="container">
        		<div class="row">
        			<div class="col-lg-3">
        				<p><img src="img/4tires-logo.png" width="150"></p>
        				<h3>Categorii</h3>
        				<p><a href="">Anvelope vara</a></p>
        				<p><a href="">Anvelope vara</a></p>
        				<p><a href="">Anvelope all season</a></p> 
        				<p><a href="">Anvelope camioane</a></p>
        				<p><a href="">Anvelope agroindustriale</a></p> 
        				<p><a href="">Jante</a></p>       				
					</div>
        			<div class="col-lg-3">
        				<h3>Informatii clienti</h3>
        				<p><a href="">Despre noi</a></p>
        				<p><a href="">Avantaje clienti</a></p>
        				<p><a href="">Cum cumpar?</a></p> 
        				<p><a href="">Livrare</a></p>
        				<p><a href="">Montaj</a></p> 
        				<p><a href="">Garantie</a></p> 
        				<p><a href="">Politica de returnare</a></p> 
        				<p><a href="">Politica de confidentialitate</a></p> 
        				<p><a href="">Termeni si conditii</a></p>       
        				<p><a href="">Contact</a></p>       
        				<p><a href="">Parteneri vulcanizare</a></p>  	
					</div>
        			<div class="col-lg-3">
        			<p class="support">SUPPORT</p>
        			<p class="font14"><a href="tel:1 8666 478 6251"><strong>1 8666 478 6251</strong></a></p>
        			<p>International toll free:</p> 
        			<p class="font14"><a href="tel:00 8000 6664 66664"><strong>00 8000 6664 66664</strong></a></p>
        			<p class="font14"><a href=""><strong>Contact us</strong></a></p>
        			<p class="font14"><a href=""><strong>FAQ</strong></a></p>
					</div>
        			<div class="col-lg-3">
        			<a class="fa fa-facebook-square fa-4x" href=""></a>
        			<a class="fa fa-twitter-square fa-4x" href=""></a>
        			<a class="fa fa-google-plus-square fa-4x" href=""></a>
        			<a class="fa fa-instagram fa-4x" href=""></a>
					</div>
				</div>
			</div>
		</section>		
		<section class="bgr4">
   			<div class="container">
        		<div class="row">
                	<div class="col-lg-12">
                		<p>&copy; 2017 4Trires.ro</p>
        <div class="fb-share-button" data-href="http://4tires.ro/index.php" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F4tires.ro%2Findex.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
					</div>
				</div>
			</div>
	   </section>
   </footer>
    <!-- jQuery -->
    <script>
		
	function overlayhover(id)
	{
		for(var i=1;i<=4;i++)
		{
			if(id=='overlay-'+''+i+'')
			{
				$('#'+id+'').removeClass('overlay').addClass('overlayhover');
			}else
			{
				$('#'+id+'').removeClass('overlayhover').addClass('overlay');
			}
		}
		
	}
	function overlay(id)
	{
		for(var i=1;i<=4;i++)
		{
				$('#'+id+'').removeClass('overlayhover').addClass('overlay');
		}
		
	}
		
$(function () {
 //$('[data-toggle="popover"]').attr( "title", $('#tooltip1').html() );

  $('[data-toggle="popover"]').popover({
    delay: { 
             show: 100,
             hide: 600
    }           

});	
	$('.nav-tabs-dropdown').each(function(i, elm) {
    
    $(elm).text($(elm).next('ul').find('li.active a').text());
    
});
  
$('.nav-tabs-dropdown').on('click', function(e) {

    e.preventDefault();
    
    $(e.target).toggleClass('open').next('ul').slideToggle();
    
});

$('#nav-tabs-wrapper a[data-toggle="tab"]').on('click', function(e) {

    e.preventDefault();
    
    $(e.target).closest('ul').hide().prev('a').removeClass('open').text($(this).text());
      
});
	 
$('.overlay').on('mouseenter', function() {
    $('#'+this.id+'').removeClass('overlay').addClass('overlayhover');
});
	
$('.overlay').on('mouseleave', function(e) {
   overlay(this.id);    
});
})
function getFilter(filter){
    $.get( "admin/router.php", { c: "Html", f: "getFilter",t:"h",p:filter } )
  .done(function( data ) {
   $("#"+filter).html(data);
  });
  }
function getLatime(filter){
    $.get( "admin/router.php", { c: "Html", f: "getLatime",t:"h",p:filter } )
  .done(function( data ) {
   $("#divLatime").html(data);
  });
  }
function getInaltime(filter){
    $.get( "admin/router.php", { c: "Html", f: "getInaltime",t:"h",p:filter } )
  .done(function( data ) {
   $("#divInaltime").html(data);
  });
  }
 function setBasket(code,qyt,price){
 	alert(qyt);
    $.post( "admin/router.php", { basket: "ok", f: "add",code:code,q:qyt,p:price } )
  .done(function( data ) {
   getBasket();
  });
  }
  function clearBasket(){
    $.post( "admin/router.php", { basket: "ok", f: "clear" } )
  .done(function( data ) {
   getBasket();
  });
  }
  function getBasket(){
    $.post( "admin/router.php", { basket: "ok", f: "get"} )
  .done(function( data ) {
   $("#basketN").html(data);
  });
  } 
 function getRadius(filter,filter2){
    $.get( "admin/router.php", { c: "Html", f: "getRadius",t:"h",p:filter,p2:filter2 } )
  .done(function( data ) {
   $("#divRadius").html(data);
  });
  } 
   function getRadius2(filter,filter2){
    $.get( "admin/router.php", { c: "Html", f: "getRadius2",t:"h",p:filter,p2:filter2 } )
  .done(function( data ) {
   $("#divRadius").html(data);
  });
  } 
function searchTyresBy() {
$.post( "admin/router.php", $("#searchForm").serializeArray())
  .done(function( data ) {
  $("#results").html(data);
    $(".wrapper").toggle();
      $("#top").show();
  });
}
function compare(id) {
$.post( "compare/basket.php", {cod:id})
  .done(function( data ) {
compareGet();
  });
}
function compareGet(){
  $.post( "compare/getBasket.php")
  .done(function( data ) {
  $("#compareBasket").html(data);
  });
}
function clearCompare(){
  $.post( "compare/clear.php")
  .done(function( data ) {
  	compareGet();
  });
}
function openCompare(){
  window.open('compare.php');
}
function getProductById(id) {
/*	$.post( "admin/router.php", {c:"Products",f:"getProductById",id:id})
  .done(function( data ) {
  	
      var obj = jQuery.parseJSON(data);
      $.get( "p.html", function( data ) {
      $( ".result" ).html( data );
       $(".modal-body").html(data);
         $('#myModal').modal('show');
      $('#myModal').on('shown.bs.modal', function (e) {
      //var obj = jQuery.parseJSON
      $("#title").html(obj.Denumire);
      var desc = window.atob(obj.descriere);
      $("#Descriere").html(desc);
      });        




    
})

  });*/
	// getProductById
  window.open('produs/'+id);
}
   function searchProducts(p){

    $.post( "admin/router.php", { c: "Search", f: "searchProducts",latime:$("#comboLatime").val(),inaltime:$("#comboInaltime").val(),Radius:$("#comboRadius").val(),pag:p,categorie:$("#combocategorie").val(),sezon:'' } )
  .done(function( data ) {
$("#results").html(data);
  });
  }
    function searchProducts2(p,la,ina,ra,cat){
    $.post( "admin/router.php", { c: "Search", f: "searchProducts",latime:la,inaltime:ina,Radius:ra,pag:p,categorie:cat } )
  .done(function( data ) {
$("#results").html(data);
  });
  } 

    function searchBatteries(){
    $.post( "admin/router.php", { c: "Search", f: "searchBatteries",amp:$("#comboAmp").val(),subcategorie:$("#subcategorieCombo").val()} )
  .done(function( data ) {
$("#results").html(data);
  });
  } 
    function SeachCameras(){
    $.post( "admin/router.php", { c: "Search", f: "getCameras",dimensiune:$("#comboDimensiune").val(),Diametru:$("#comboDiametru").val(),TipValva:$("#comboTipValva").val()} )
  .done(function( data ) {
$("#results").html(data);
  });
  } 



  //*****************************************************************************************************************************
  $( document ).ready(function() {
    getFilter("categorie");
        getFilter("Profil");
         getFilter("Brand");
         getFilter("load_index");
         getFilter("speed_index");
    $('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
// getLatime('AUTOTURISME');
getBasket();
$("#top").hide();

$( "#compareBasket" ).mouseenter(function() {
  $('#compareBasket').toggleClass('col-md-1 col-md-3');
 // $("#compareBasket").show();


 
});
$( "#compareBasket" ).mouseleave(function() {
//  $('#compareBasket').hide();

});
 });
$("#divLatime").change(function(event){
  event.preventDefault();
 getInaltime($('#comboLatime').val());
 return false;
});
$("#divInaltime").change(function(event){
  event.preventDefault();
 getRadius($('#comboLatime').val(),$('#comboInaltime').val());
 return false;
});
$(".ba").click(function(){
  $(".advance").toggle();

});
(function($) {
    $(function() {
        $('[data-jcarousel]').each(function() {
            var el = $(this);
            el.jcarousel(el.data());
        });

        $('[data-jcarousel-control]').each(function() {
            var el = $(this);
            el.jcarouselControl(el.data());
        });
    });
})(jQuery);
$(function() {
    $('.jcarousel')
        .jcarousel({
            // Core configuration goes here
        })
        .jcarouselAutoscroll({
            interval: 3000,
            target: '+=1',
            autostart: true
        })
    ;
});
	</script>

</body>

</html>

