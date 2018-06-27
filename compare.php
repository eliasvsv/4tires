<?php
session_start();
if (isset($_SESSION['compare'])) {
		$cart = $_SESSION["compare"];
		$k="";
		foreach ($cart as $c=>$code) {
			$k.=",'".$c."'";
		}
	
				$mysqli= new mysqli("localhost","root",'' , "web");
				$sql="select * from vwautoturisme where CODE in(".substr($k,1).")";
				//echo $sql;
				$data=$mysqli->query($sql);
				$r0="<table class=\"table table-bordered\">";
				$r1="<tr><td>Brand</td>";
				$r2="<tr><td>Profil</td>";
				$r3="<tr><td>Price</td>";
				$r4="<tr><td>Size</td>";
				$r5="<tr><td>Load Index</td>";
				$r6="<tr><td>Speed index</td>";
				$r7="<tr><td>Categorie</td>";
				$r8="<tr><td>European Rating</td>";
				while ($fila = $data->fetch_assoc()) {
				$r1.="<td>".$fila["Brand"]."</td>";
				$r2.="<td>".$fila["Profil"]."<br><img src=\"".$fila["image_url"]."\"height=\"100px\" width=\"50px\"></td>";
				$r3.="<td>".@number_format($fila["price"]."</td>",2,'.','');
				$r4.="<td>".$fila["latime"]."/".$fila["inaltime"].$fila["radius"]."</td>";
				$r5.="<td>".$fila["load_index"]."</td>";
				$r6.="<td>".$fila["speed_index"]."</td>";
				$r7.="<td>".$fila["categorie"]."</td>";
				$r8.="<td><div class=\"label-type\"><i data-tptxt=\"grip\" class=\"label-grip\"></i><i data-tptxt=\"wet\" class=\"label-wet\"></i><i data-tptxt=\"noise\" class=\"label-noise\"></i></div><br><br>".$fila["rulare"]." ".$fila["Franare"]." ".$fila["fundal"]."</td>";
				}

				$r1.="</tr>";
				$r2.="</tr>";
				$r3.="</tr>";
				$r4.="</tr>";
				$r5.="</tr>";
				$r6.="</tr>";
				$r7.="</tr>";
				$r8.="</tr>";
				$rf=$r0.$r1.$r2.$r3.$r4.$r5.$r6.$r7.$r8."</table>";

						
		$mysqli->close();
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

    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <style type="text/css">
    	.principal{
    		background-color: #FFFFFF;
    		height: 500px;
    		display: block;
    	}
    	.contenedor{
	background-image: url("../images/bg1.jpg");
	background-repeat: repeat-y;


}
.label-grip {
	    background-image: url(../images/xsprite-label.png.pagespeed.ic.d1d1QpxFpq.png);
    background-position: 0 0;
    display: block;
    	display: block;
height: 24px;
float: left;
width:24px; 
}
.label-wet {
	    background-image: url(../images/xsprite-label.png.pagespeed.ic.d1d1QpxFpq.png);
    background-position: 0 -48px;
        	display: block;
height: 24px;
float:left;
width:24px; 
}
.label-noise {
	    background-image: url(../images/xsprite-label.png.pagespeed.ic.d1d1QpxFpq.png);
    background-position: 0 -24px;
        	display: block;
height: 24px;
float:left;
width:24px; 
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
    
            
				
	<div class="jumbotron logoNav">
	<div class="logoheader">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
				<a class="navbar-brand logo logoProd" href="index.html" title="Acasa"><img src="img/4tires-logo.png" alt="4Tires.ro"></a>
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
    <!-- Page Content *********************************************************************************************** -->
<div  class="row contenedor">
	<div class="col-md-3">.</div>
	<div class="col-md-6 principal"><?php echo $rf;?></div>
	<div class="col-md-3">.</div>

</di>
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
        				<p><img src="img/4tires-logo.png" width="150"></p>
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
   

</body>

</html>
