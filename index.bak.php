<?php
session_start();
require_once("admin/Models/Conexion.php");
require_once("admin/Models/Html.php");
$product = new Models\Html;
?>
<!DOCTYPE html>
<html lang="ro">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
</style>
</head>

<body>

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
                        <a href="index.html">Acasa <span>|</span></a>
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
				<a class="navbar-brand logo" href="index.html" title="Acasa"><img src="img/4tires-logo.png" alt="4Tires.ro"></a>
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
	
		<div class="container vertical-center">
			<div class="row">
				<div class="col-lg-12 middle">
            <a href="#" class="nav-tabs-dropdown btn btn-block btn-primary"></a>
            <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-tabs-horizontal">
              <li id="v"  class="active anvelope"><a href="#anvelope" data-toggle="tab"><span id="v"> </span></a></li>
              <li><a data-toggle="tab" href="#jante"><span id="q"> </span></a></li>
			  <li><a data-toggle="tab" href="#acumulatori">Acumulatori</a></li>
				<li><a data-toggle="tab" href="#uleiuri">Uleiuri auto</a></li>
					  <li><a data-toggle="tab" href="#accesorii">Accesorii auto</a></li>
					  <li><a data-toggle="tab" href="#lanturi">Lanturi auto</a></li>
					  <li><a data-toggle="tab" href="#hotel">Hotel anvelope</a></li>
					  <li><a data-toggle="tab" href="#hotel">Service roti </a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="anvelope">
                  <form id="searchForm" name="searchForm" method="post">
	 <input type="hidden" name="c" id="c" value="Products">
 	 <input type="hidden" name="f" id="f" value="searchProducts">

 	 <div class="row">
 	 							<div id="Latime" class="col-md-2"><?php  echo $product->getFilter("Latime"); ?></div>
				<div  id="Inaltime"  class="col-md-2"><?php  echo $product->getFilter("Inaltime"); ?></div>
				<div id="Radius" class="col-md-2"><?php echo $product->getFilter("Radius"); ?></div>
				<div class="col-md-3"><?php echo $product->getFilter("Speed_index");?></div>
				<div class="col-md-3"><?php  echo $product->getFilter("Load_index"); ?></div>
				<a class="ba" href="#">advance search</a>
	</div>	<div class="advance">

			<div  class="row">
								<div id="Categorie" class="col-md-3"> <?php     echo $product->getFilter("Categorie"); ?></div>
				<div id="Sezon" class="col-md-3"><?php   echo $product->getFilter("sezon");     ?></div>

				<div class="col-md-3"><?php    echo $product->getFilter("Brand"); ?></div>
				<div class="col-md-3"><?php     echo $product->getFilter("Profil");?></div>
			</div>
			<div class="row">
				
				<div class="col-md-3"></div>
				<div class="col-md-3"></div>
				<div class="col-md-3"></div>
				<div class="col-md-3"></div>
				</div>

			</div> <!--end advance-->

			<div class="row">
				
				<div class="col-md-12 text-center"><button onclick="searchTyresBy()" type="button" class="btn btn-lg btn-danger">Search</button> </div>
		  </div>
                </div>
                
					  <div role="tabpanel" id="jante" class="tab-pane fade">
						<p>Jante</p>
					  </div>
					  <div role="tabpanel" id="acumulatori" class="tab-pane fade">"
						<p>Acumulatori</p>
					  </div>
					  <div role="tabpanel" id="uleiuri" class="tab-pane fade">"
						<p>Uleiuri auto</p>
					  </div>
					  <div role="tabpanel" id="accesorii" class="tab-pane fade">"
						<p>Accesorii auto</p>
					  </div>
					  <div role="tabpanel" id="lanturi" class="tab-pane fade">"
						<p>Lanturi auto</p>
					  </div>
					  <div role="tabpanel"  id="hotel" class="tab-pane fade">"
						<p>Hotel anvelope</p>
					  </div>
            </div>
        </div>
			</div>            		
		</div>
	</div>		
<!--*************************************************************************************************************************************************************************************-->	
 <div class="wrapper">

            <div class="jcarousel-wrapper">
                <div data-jcarousel="true" data-wrap="circular" class="jcarousel">
                    <ul>
                         <li> <img src="img/Pirelli-tires.jpg"  width="1600" height="400" alt=""> </li>
        <li> <img src="img/Wide-tire.jpg"  width="1600" height="400" alt=""> </li>
                    </ul>
                </div>

              

                <a data-jcarousel-control="true" data-target="-=1" href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a data-jcarousel-control="true" data-target="+=1" href="#" class="jcarousel-control-next">&rsaquo;</a>
            </div>
        </div>
       

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
      <div class="col-lg-1">
          <div class="row">
               <div class="col-md-9"></div> 
               <div id="compareBasket" class="col-md-1" style="">
               <div> 
                   Compare
              </div>  
    </div>
</div>
      </div>
    </div>
 
    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Product Details</h4>
      </div>
      <div class="modal-body">
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btnBlack" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row paddingBottom15">
            <div class="col-lg-12">
                <h1 class="page-header">Oferte anvelope auto<br>
                    <small>Descopera ofertele de anvelope potrivite pentru vehiculul tau. </small>
                </h1>
            </div>
        </div>
	</div>
    <div class=" breadcrumb">
   		<div class="container">
        	<div class="row">
				<div class="col-lg-12">
					<div class="col-md-3 text-center">
						<a href="#" class="thumbnaila">
							<div class="thumbnail">
								<img class="img-responsive" src="img/autoturism.png" alt="">
								<div class="caption">
									<h3>Anvelope pentru autorturism</h3>					
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 text-center">
						<a href="#" class="thumbnaila">
							<div class="thumbnail">
								<img class="img-responsive" src="img/4x4.png" alt="">
								<div class="caption">
									<h3>Anvelope auto 4x4</h3>					
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 text-center">
						<a href="#" class="thumbnaila">
							<div class="thumbnail">
								<img class="img-responsive" src="img/camion.png" alt="">
								<div class="caption">
									<h3>Anvelope camion</h3>					
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 text-center">
						<a href="#" class="thumbnaila">
							<div class="thumbnail">
								<img class="img-responsive" src="img/agricole.png" alt="">
								<div class="caption">
									<h3>Anvelope vehicule agricole</h3>					
								</div>
							</div>
						</a>
					</div>
					<br class="clear">
					<div class="col-md-3 text-center">
						<a href="#" class="thumbnaila">
							<div class="thumbnail">
								<img class="img-responsive" src="img/motociclete.png" alt="">
								<div class="caption">
									<h3>Anvelope pentru motociclete</h3>					
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 text-center">
						<a href="#">
							<div class="thumbnail">
								<img class="img-responsive" src="img/atv.png" alt="">
								<div class="caption">
									<h3>Anvelope pentru ATV</h3>					
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 text-center">
						<a href="#" class="thumbnaila">
							<div class="thumbnail">
								<img class="img-responsive" src="img/industriale.png" alt="">
								<div class="caption">
									<h3>Anvelope vehicule industriale</h3>					
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 text-center">
						<a href="#" class="thumbnaila">
							<div class="thumbnail">
								<img class="img-responsive" src="img/utilitare.png" alt="">
								<div class="caption">
									<h3>Anvelope autoutilitare</h3>					
								</div>
							</div>
						</a>
					</div>
				</div>
        	</div>
		</div>
    </div>
        <!-- /.row -->
      <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row paddingBottom25">
            <div class="col-lg-12">
                <h2 class="page-header">Hotel anvelope - Depozitare anvelope</h2>
                <p class="text-center"><button class="btn btn-lg btnBlackNormal">Vezi detalii preturi &#8250;</button></p>
                <p class="text-center">Avantaje: pastrarea anvelopelor in siguranta, depozitarea intr-un mediu optim, economie de spatiu, prelungirea duratei de viata a anvelopei.</p>
            </div>
        </div>
	</div>

    <div class="bgr1">
   		<div class="container">
        	<div class="row ">
				<div class="col-lg-12">
					<p class="text-center"><img src="img/4tires-logo.png" width="160"></p>
				 <h3 class="text-center">Cele mai bune tipuri de jante</h3>
                <p class="text-center">Jante noi pentru orice autoturism, sute de mii de modele cu dimensiuni variate.</p>
                <p class="text-center"><button class="btn btn-lg btnGreyNormal">Cauta modelul preferat</button></p>
				</div>
			</div>
		</div>
	</div>
	<br class="clear">
	<div class="container">
        	<div class="row paddingBottom25">
                <div class="col-lg-6 col-sm-6">
                   	<div class="thumbnailbig">
                    	<img src="img/acumulatori.png" alt="Avatar" class="image">
					  	<div id="overlay-1" class="overlay">
							<div class="textOver">Acumulatori auto</div>
					  	</div>
					</div>
                </div>
                <div class="col-lg-6 col-sm-6">                    
                   	<div class="thumbnailbig">
                    	<img src="img/uleiuri.png" alt="Avatar" class="image">
					  	<div id="overlay-2" class="overlay">
							<div class="textOver">Uleiuri auto</div>
					  	</div>
					</div>
                </div>
                <div class="col-lg-6 col-sm-6">                    
                   	<div class="thumbnailbig">
                    	<img src="img/lanturi.png" alt="Avatar" class="image">
					  	<div id="overlay-3" class="overlay">
							<div class="textOver">Lanturi auto</div>
					  	</div>
					</div>
                </div>
                <div class="col-lg-6 col-sm-6">                    
                   	<div class="thumbnailbig">
                    	<img src="img/accesorii.png" alt="Avatar" class="image">
					  	<div id="overlay-4" class="overlay">
							<div class="textOver">Accesorii auto</div>
					  	</div>
					</div>
                </div>
				<div class="col-lg-12">
				 <h2 class="text-center">Ce trebuie sa stii inainte de a achizitiona anvelopele potrivite? </h2>
                <p class="text-center">Verifica informatii utile despre eficienta anvelopelor, zgomot. sau cum poti avea un consum redus de combustibil mai bun, in functie de anvelope, cum protejezi anvelopele la utilizare.</p>
                
                <p class="text-center"><button class="btn btn-lg btnBlackNormal">Citeste mai mult &#8250;</button></p>
				</div>
			</div>
		</div>
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
   $("#Latime").html(data);
  });
  }
function getInaltime(filter){
    $.get( "admin/router.php", { c: "Html", f: "getInaltime",t:"h",p:filter } )
  .done(function( data ) {
   $("#Inaltime").html(data);
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
   $("#Radius").html(data);
  });
  } 
   function getRadius2(filter,filter2){
    $.get( "admin/router.php", { c: "Html", f: "getRadius2",t:"h",p:filter,p2:filter2 } )
  .done(function( data ) {
   $("#Radius").html(data);
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
  window.open('produs.php?id='+id);
}
  $( document ).ready(function() {
getFilter('Latime');
getFilter('Inaltime');
getFilter('Radius');
getFilter('load_index');
getFilter('speed_index');
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
$("#Categorie").change(function(event){
  event.preventDefault();

 getLatime($('#comboCategorie').val());
 return false;
});
$("#Latime").change(function(event){
  event.preventDefault();
    if ($('#comboCategorie').val()=='ATV') {
 getRadius2($('#comboLatime').val(),$('#comboCategorie').val());
  }
 getInaltime($('#comboLatime').val());
 return false;
});
$("#Inaltime").change(function(event){
  event.preventDefault();
 //alert($('#comboInaltime').val());
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
