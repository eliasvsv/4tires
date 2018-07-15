<?php
session_start();
if (isset($_SESSION['basket'])) {
		$cart = $_SESSION["basket"];
		$k=count($cart);
		$i=1;
		$table="<table class=\"table\">
				<tr>
					<th>#</th>
					<th>code</th>
					<th>description</th>
					<th>qyt</th>
					<th>Price per unit</th>
					<th>VAT</th>
					<th>Total Price</th>
					<th>Delete</th>
				</tr>
				";
		$mysqli= new mysqli("localhost","root",'' , "web");
             // $mysqli= new mysqli("localhost","verpeli4_elias",'RealMadrid01' , "verpeli4_web");
        $totalComplete=0;
		foreach ($cart as $c=>$qyt) {
		$sql="select * from vwautoturisme where CODE = '".$c."'";
				//echo $sql;
				$data=$mysqli->query($sql);
				$fila=$data->fetch_assoc();
				$vat=$fila["price"]*0.19;
				$total=($fila["price"]*$qyt["q"])+($vat*$qyt["q"]);
                $totalComplete=$total+$totalComplete;

				$table.="<tr>
							<td>$i</td>
							<td><span id=\"code$i\">".$fila["CODE"]."</span></td>
							<td>".$fila["latime"]."/".$fila["inaltime"].$fila["radius"]." ".$fila["Profil"]." ".$fila["Brand"]."</td>
							<td><input type=\"q$i\" name=\"q$i\" value=\"".$qyt['q']."\"></td>
							<td>".$fila["price"]."</td>
							<td>".number_format($vat,2,'.','')."</td>
							<td>".number_format($total,2,'.','')."</td>
							<td><span onclick=\"deleteItem($('#code$i').text())\" class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></td>
						</tr>";
						$i++;

		}
		$table.="<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>Total</td>
					<td>".number_format($totalComplete,2,'.','')."</td>
					<td></td>
		   		</tr></table>";
	
				
				
				

				
				

			
						
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
.juridica1{
    display: none;
}
.juridica2{
    display: block;
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
				<a class="navbar-brand logo logoProd" href="index.php" title="Acasa"><img src="img/4tires-logo.png" alt="4Tires.ro"></a>
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
	<div class="col-md-6 principal"><?php echo $table;?><button  type="button" data-toggle="modal" data-target=".bs-example-modal-lg" class="btn btn-success">Checkout</button></div>
	<div class="col-md-3">
     <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                      <div class="row">
                  <div class="col-md-12 text-center"><h3>Date de facturare</h3></div>
              </div>
              <div class="row">
                  <div class="col-md-4">Doresc emiterea facturii pe: </div>
                  <div class="col-md-4">
                    <div class="checkbox">
                        <label>
                          <input type="radio" name="person" id="person" value="fizica"><label>Persoana Fizica</label> 
                        </label>
                    </div>
                 </div>
                  <div class="col-md-4">
                      <div class="checkbox">
                                <label>
                                  <input type="radio" name="person" id="person" value="juridica"><label>Persoana Juridica</label> 
                                </label>
                        </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <form>
                          <div class="form-group">
                            <input type="text" class="form-control" id="nume" placeholder="Nume si prenume:">
                          </div>
                            <div class="fizica">
                          <div class="form-group">
                            <input type="text" class="form-control" id="denumire" placeholder="Denumire firma:">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="cuiCif" placeholder="CUI / CIF:">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="cuiCif" placeholder="Banca:">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="IBAN" placeholder="Cod IBAN:">
                          </div>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="adresa" placeholder="Adresa de facturare: ">
                          </div>
                          <label><h3>Modalitati de plata:</h3></label>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> La adresa de facturare
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> La alta adresa
                            </label>
                          </div>
                          <label><h3>Mesajul tau:</h3></label>
                          <label>Daca doresti sa ne oferi informatii suplimentare referitoare la comanda ta.</label>
                          <textarea class="form-control" rows="5" id="comment"></textarea>
                          <div class="row">
                              <div class="col-md-6"><h5>Sumar comanda:</h5>
                               <label> Produse:    </label><br>
                                <label>Costuri livrare:    </label><br>
                                <label>Reduceri:  </label><br>
                                <label>TOTAL:  </label><br>
                                </div>
                              <div class="col-md-6"><br><br><br><button class="btn btn-danger">Trimite Comanda</button></div>
                          </div>
                         
                      </form>
                  </div>
              </div>
                  </div><!-- final del form-->
                  <div class="col-md-3"></div>
              </div>
        </div>
  </div>
</div>   
    </div>

</div>
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
 <script type="text/javascript">
function deleteItem(id) {
  $.post( "admin/router.php", { basket: "ok", f: "deleteItem",code:id} )
  .done(function( data ) {
  location.reload();
  });
}
 	  $( document ).ready(function() {
        $( "#person" ).click(function() {
  $('#person').toggleClass('juridica1 juridica2');
 // $("#compareBasket").show();


 
});
 });
 </script>  

</body>

</html>
