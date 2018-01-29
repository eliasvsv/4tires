<?php
require_once("autoload.php");
Config\Autoload::run();
  if(isset($_GET["id"])){
$test = new Models\Products();
$args["c"]=$_GET["id"];
$args["f"]=$_GET["id"];
$args["id"]=$_GET["id"];
$product=json_decode( call_user_func_array(array($test,"getProductById"),$args));
$base="http://localhost/web";
//$base="http://www.4tires.ro";
}

 ?>
<!DOCTYPE html>
<html lang="ro">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Titlu produs | 4Tires.ro</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $base;?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $base;?>/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $base;?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  	<link rel="stylesheet" href="<?php echo $base;?>/css/bootstrap-select.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="<?php echo $base;?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $base;?>/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.tiresleader.com/static/css/style.css?5">
<style type="text/css">
	body{background-color: #FFF;}
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
           	<div class="cart cart box_1 clear">
				<form class="last" action="#" method="post">
					<input name="cmd" value="_cart" type="hidden">
					<input name="display" value="1" type="hidden">
					<button class="t4view-cart" type="submit" name="submit" value="">
						<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
					</button>
				</form>
				</div>
    </nav>
    
            
				
	<div class="jumbotron logoNav">
	<div class="logoheader">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
				<a class="navbar-brand logo logoProd" href="index.html" title="Acasa"><img src="<?php echo $base;?>/img/4tires-logo.png" alt="4Tires.ro"></a>
				</div>
				
				<div class="col-md-8 alignright">
					<ul class="nav navbar-nav_small">
                    	<li>
                        	<a href="#"   data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-html="true"   data-content="<p><button class='incont'>Intra in cont</button><a href='#' class='red'>Cont nou</a></p>" title="<span class='col1'>
								<i class='fa fa-user fa-2x' aria-hidden='true'></i>
							</span>
							<span class='col2'>Intra in contul tau si ai control complet asupra ofertelor!</span>
							<div class='clearfix'> </div>"><i class="fa fa-user" aria-hidden="true"></i> Contul meu   </a>
                    	</li>
                    	<li>
                        	<a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favorite   </a>
                    	</li>
                    	<li>
                        	<a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cosul meu   </a>
                        	
                    	</li>
					</ul>
				</div>
			</div>            		
		</div>
	</div>
	
		
			</div>            		
		</div>
            </div>
	</div>		
<div class="clearfix"> </div>
    <!-- Page Content -->
    <div class="container">
		<div class="row paddingBottom15">
            <div class="col-md-12">            
	<div class="single">
		<div class="container">
			<div class="col-md-4 single-left">
				<div class="flexslider">
					<ul class="slides">
						<li data-thumb=<?php echo "http://".$product->image_url;?>>
							<div class="thumb-image"> <img src=<?php echo "http://".$product->image_url;?> data-imagezoom="true" class="img-responsive" alt=""> </div>
						</li>
						<li data-thumb=<?php echo "http://".$product->image_url;?>>
							 <div class="thumb-image"> <img src=<?php echo "http://".$product->image_url;?> data-imagezoom="true" class="img-responsive" alt=""> </div>
						</li>
						<li data-thumb=<?php echo "http://".$product->image_url;?>>
						   <div class="thumb-image"> <img src=<?php echo "http://".$product->image_url;?> data-imagezoom="true" class="img-responsive" alt=""> </div>
						</li> 
					</ul>
				</div>
				<!-- flexslider -->
					<script defer src="<?php echo $base;?>/js/jquery.flexslider.js"></script>
					<link rel="stylesheet" href="<?php echo $base;?>/css/flexslider.css" type="text/css" media="screen" />
					<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>
				<!-- flexslider -->
				<!-- zooming-effect -->
					<script src="../js/imagezoom.js"></script>
				<!-- //zooming-effect -->
			</div>
			<div class="col-md-8 single-right">
				<h1><?php echo $product->latime."/".$product->inaltime.$product->radius." ".$product->speed_index.$product->load_index;?></h1>
				<div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked>
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
				</div>
				<div class="description">
					<div id="labelling-front" style="">
                    <div class="labelBG">
                        <span class="plabel labelWet<?php echo trim($product->Franare) ?>"></span>
                        <span class="plabel labelGrip<?php echo trim($product->rulare) ?>"></span>
                        <span class="plabel labelNoiseClass2"></span>
                        <span class="labelNoiseVal"><?php echo trim($product->fundal) ?></span>
                    </div>
                </div>
				</div>
				<div class="color-quality">
					<div class="color-quality-left">
						<h3>Cantitate :</h3>
						 <div class="quantity"> 
							<div class="quantity-select">                           
								<div class="entry value-minus1">&nbsp;</div>
								<div class="entry value1"><span>1</span></div>
								<div class="entry value-plus1 active">&nbsp;</div>
							</div>
						</div>

					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="occasional">
					<h3>Optiuni :</h3>
					<div class="colr ert">
						<div class="check">
							<input id="opt1" type="checkbox" name="checkbox" checked=""><label class="checkbox" for="opt1">Opt 1</label>
						</div>
					</div>
					<div class="colr">
						<div class="check">
							<input id="opt2" type="checkbox" name="checkbox"><label class="checkbox" for="opt2">Opt 2</label>
						</div>
					</div>
					<div class="colr">
						<div class="check">
							<input id="opt3" type="checkbox" name="checkbox"><label class="checkbox" for="opt3">Opt 3</label>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="simpleCart_shelfItem">
					<p><i class="item_price"><?php echo $product->price; ?></i></p>
					<form action="#" method="post">
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="add" value="1"> 
						<input type="hidden" name="t4ls_item" value=<?php echo $_GET['id']; ?>> 
						<input type="hidden" name="amount" value="384,99">   
						<button type="submit" class="t4ls-cart">Adauga in cos</button>
					</form>
				</div> 
			</div>
			
						<!--quantity-->
								<script>
								$('.value-plus1').on('click', function(){
									var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
									divUpd.text(newVal);
									$('[name="add"]').attr("value",newVal);
								});

								$('.value-minus1').on('click', function(){
									var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
									if(newVal>=1) divUpd.text(newVal);
									$('[name="add"]').attr("value",newVal);
								});
								</script>
							<!--quantity-->
			<div class="clearfix"> </div>
		</div>
	</div> 

	<div class="additional_info">
		<div class="container">
			<div class="sap_tabs">	
				<div id="horizontalTab1" style="display: block; width: 100%; margin: 0px;">
					<ul>
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Specificatii</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Descriere</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Reviews</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>Performante</span></li>
					</ul>		
					<div class="tab-1 resp-tab-content additional_info_grid" aria-labelledby="tab_item-0">
						<h3>TAnvelopa de vara Michelin CrossClimate+ XL TL, cu marcaje de iarna, 205/55 R16 94V</h3>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
							eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
							Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut 
							odit aut fugit, sed quia consequuntur magni dolores eos qui 
							ratione voluptatem sequi nesciunt.Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea 
							commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate 
							velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat 
							quo voluptas nulla pariatur.</p>
					</div>	
	
					<div class="tab-1 resp-tab-content additional_info_grid" aria-labelledby="tab_item-1">
						<h3>Decriere</h3>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
							eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
							Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut 
							odit aut fugit, sed quia consequuntur magni dolores eos qui 
							ratione voluptatem sequi nesciunt.Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea 
							commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate 
							velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat 
							quo voluptas nulla pariatur.</p>
					</div>	
					<div class="tab-2 resp-tab-content additional_info_grid" aria-labelledby="tab_item-2">
						<h4>(2) Reviews</h4>
						<div class="additional_info_sub_grids">
							<div class="col-xs-2 additional_info_sub_grid_left">
								<img src="images/t1.png" alt=" " class="img-responsive" />
							</div>
							<div class="col-xs-10 additional_info_sub_grid_right">
								<div class="additional_info_sub_grid_rightl">
									<a href="single.html">Laura</a>
									<h5>Oct 06, 2016.</h5>
									<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
										velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat 
										quo voluptas nulla pariatur.</p>
								</div>
								<div class="additional_info_sub_grid_rightr">
									<div class="rating">
										<div class="rating-left">
											<img src="img/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="img/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="img/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="img/star.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="img/star.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="additional_info_sub_grids">
							<div class="col-xs-2 additional_info_sub_grid_left">
								<img src="images/t2.png" alt=" " class="img-responsive" />
							</div>
							<div class="col-xs-10 additional_info_sub_grid_right">
								<div class="additional_info_sub_grid_rightl">
									<a href="single.html">Michael</a>
									<h5>Oct 04, 2016.</h5>
									<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
										velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat 
										quo voluptas nulla pariatur.</p>
								</div>
								<div class="additional_info_sub_grid_rightr">
									<div class="rating">
										<div class="rating-left">
											<img src="img/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="img/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="img/star.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="img/star.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="img/star.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="review_grids">
							<h5>Adauga un review</h5>
							<form action="#" method="post">
								<input type="text" name="Name" value="Nume" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nume';}" required="">
								<input type="email" name="Email" placeholder="Email" required="">
								<input type="text" name="Telephone" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
								<textarea name="Review" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Adauga review-ul tau';}" required>Adauga review-ul tau</textarea>
								<input type="submit" value="Trimite" >
							</form>
							
						</div>
					</div> 	
					<div class="tab-1 resp-tab-content additional_info_grid" aria-labelledby="tab_item-3">
						<h3>Performante</h3>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
							eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
							Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut 
							odit aut fugit, sed quia consequuntur magni dolores eos qui 
							ratione voluptatem sequi nesciunt.Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea 
							commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate 
							velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat 
							quo voluptas nulla pariatur.</p>
					</div>			        					            	      
				</div>	
			</div>
			<script src="<?php echo $base;?>/js/easyResponsiveTabs.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab1').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});
			</script>
		</div>
	</div>
            </div>
		</div>
	<div class="clearfix"> </div>
	<div class="t4l_related_products">
			<h3>Produse similare</h3>
			<ul id="flexiselDemo2">			
				<li>
					<div class="t4l_related_products_grid">
						<div class="agile_ecommerce_tab_left products_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="images/image1.jpg" alt=" " class="img-responsive" />
								<img src="images/image2.jpg" alt=" " class="img-responsive" />
								<img src="images/image3.jpg" alt=" " class="img-responsive" />
								<img src="images/image4.jpg" alt=" " class="img-responsive" />
								<img src="images/image5.jpg" alt=" " class="img-responsive" /> 
								<div class="t4_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h2><a href="produs.html">Anvelopa vara Tigar Sigura 185/65 R15 88T</a></h2>
							<div class="simpleCart_shelfItem"> 
								<p class="flexisel_ecommerce_cart"><span>209<sup>99</sup> Lei</span> <i class="item_price">169<sup>10</sup> Lei</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="t4ls_item" value="Anvelopa vara Tigar Sigura 185/65 R15 88T"> 
									<input type="hidden" name="amount" value="169,10">   
									<button type="submit" class="t4ls-cart">Adauga in cos</button>
								</form> 
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="t4l_related_products_grid">
						<div class="agile_ecommerce_tab_left products_grid">
							<div class="hs-wrapper hs-wrapper3">								
								<img src="images/image1.jpg" alt=" " class="img-responsive" />
								<img src="images/image2.jpg" alt=" " class="img-responsive" />
								<img src="images/image3.jpg" alt=" " class="img-responsive" />
								<img src="images/image4.jpg" alt=" " class="img-responsive" />
								<img src="images/image5.jpg" alt=" " class="img-responsive" /> 
								<div class="t4_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h2><a href="produs.html">Anvelopa vara Tigar Sigura 185/65 R15 88T</a></h2>
							<div class="simpleCart_shelfItem"> 
								<p class="flexisel_ecommerce_cart"><span>209<sup>99</sup> Lei</span> <i class="item_price">169<sup>10</sup> Lei</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="t4ls_item" value="Anvelopa vara Tigar Sigura 185/65 R15 88T"> 
									<input type="hidden" name="amount" value="169,10">   
									<button type="submit" class="t4ls-cart">Adauga in cos</button>
								</form> 
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="t4l_related_products_grid">
						<div class="agile_ecommerce_tab_left products_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="<?php echo $base;?>/images/image1.jpg" alt=" " class="img-responsive" />
								<img src="<?php echo $base;?>/images/image2.jpg" alt=" " class="img-responsive" />
								<img src="<?php echo $base;?>/images/image3.jpg" alt=" " class="img-responsive" />
								<img src="<?php echo $base;?>/images/image4.jpg" alt=" " class="img-responsive" />
								<img src="<?php echo $base;?>/images/image5.jpg" alt=" " class="img-responsive" /> 
								<div class="t4_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h2><a href="produs.html">Anvelopa vara Tigar Sigura 185/65 R15 88T</a></h2>
							<div class="simpleCart_shelfItem"> 
								<p class="flexisel_ecommerce_cart"><span>209<sup>99</sup> Lei</span> <i class="item_price">169<sup>10</sup> Lei</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="t4ls_item" value="Anvelopa vara Tigar Sigura 185/65 R15 88T"> 
									<input type="hidden" name="amount" value="169,10">   
									<button type="submit" class="t4ls-cart">Adauga in cos</button>
								</form> 
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="t4l_related_products_grid">
						<div class="agile_ecommerce_tab_left products_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="<?php echo $base;?>/images/image1.jpg" alt=" " class="img-responsive" />
								<img src="<?php echo $base;?>/images/image2.jpg" alt=" " class="img-responsive" />
								<img src="<?php echo $base;?>/images/image3.jpg" alt=" " class="img-responsive" />
								<img src="<?php echo $base;?>/images/image4.jpg" alt=" " class="img-responsive" />
								<img src="<?php echo $base;?>/images/image5.jpg" alt=" " class="img-responsive" /> 
								<div class="t4_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h2><a href="produs.html">Anvelopa vara Tigar Sigura 185/65 R15 88T</a></h2>
							<div class="simpleCart_shelfItem"> 
								<p class="flexisel_ecommerce_cart"><span>209<sup>99</sup> Lei</span> <i class="item_price">169<sup>10</sup> Lei</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="t4ls_item" value="Anvelopa vara Tigar Sigura 185/65 R15 88T"> 
									<input type="hidden" name="amount" value="169,10">   
									<button type="submit" class="t4ls-cart">Adauga in cos</button>
								</form> 
							</div>
							<div class="products_grid_pos">
								<h6>Nou</h6>
							</div>
						</div> 
					</div>
				</li>
			</ul>			
		</div>	  
	</div>  
			<div class="clearfix"> </div>
	
	<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 t4agile_newsletter_left">
				<h3>Newsletter</h3>
				<p>Excepteur sint occaecat cupidatat non proident sunt.</p>
			</div>
			<div class="col-md-6 t4agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="submit" value="" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //newsletter -->
   <footer>
   		<section class="bgr2">
			<div class="container">
        		<div class="row">
                	<div class="col-md-12">
                		<p>Stoc impresionant de anvelope de la toti producatorii  <span class="text-red">Inscrie-te la newsletter</span></p>
					</div>
				</div>
			</div>
		</section>
		<section class="bgr3">
			<div class="container">
        		<div class="row">
        			<div class="col-md-3">
        				<p><img src="<?php echo $base;?>/img/4tires-logo.png" width="150"></p>
        				<h3>Categorii</h3>
        				<p><a href="">Anvelope vara</a></p>
        				<p><a href="">Anvelope vara</a></p>
        				<p><a href="">Anvelope all season</a></p> 
        				<p><a href="">Anvelope camioane</a></p>
        				<p><a href="">Anvelope agroindustriale</a></p> 
        				<p><a href="">Jante</a></p>       				
					</div>
        			<div class="col-md-3">
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
        			<div class="col-md-3">
        			<p class="support">SUPPORT</p>
        			<p class="font14"><a href="tel:1 8666 478 6251"><strong>1 8666 478 6251</strong></a></p>
        			<p>International toll free:</p> 
        			<p class="font14"><a href="tel:00 8000 6664 66664"><strong>00 8000 6664 66664</strong></a></p>
        			<p class="font14"><a href=""><strong>Contact us</strong></a></p>
        			<p class="font14"><a href=""><strong>FAQ</strong></a></p>
					</div>
        			<div class="col-md-3">
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
                	<div class="col-md-12">
                		<p>&copy; 2017 4Trires.ro</p>
					</div>
				</div>
			</div>
	   </section>
   </footer>
    <!-- jQuery -->
    <script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo2").flexisel({
				visibleItems:4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:568,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:667,
						visibleItems:2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			
		});
	</script>
	<script type="text/javascript" src="<?php echo $base;?>/js/jquery.flexisel.js"></script>
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
	</script>
	
	<script src="<?php echo $base;?>/js/minicart.js"></script>
	<script>
        t4ls.render();

        t4ls.cart.on('t4sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  

</body>

</html>
