<?php
session_start();
require_once("admin/Models/Conexion.php");
require_once("admin/Models/Html.php");
$product = new Models\Html;
 ?>
<!DOCTYPE html>
<html lang="ro">

<head>
<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else {
      // The person is not logged into your app or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1501714783211725',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.8' // use graph api version 2.8
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
   
   console.log('Welcome!  Fetching your information.... ');

   FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    
    
    });
  }

</script>
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
      .panel-body {
    padding: 5px;
    background-color: #f3f3f3;
        padding-right: 70px;
        padding-top: 40px;
        }
    .panel-default {
    border-color: #FFF;
    margin-top: 50px;
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
	<div class="col-md-6 principal"> 
        <div class="panel panel-default">
  <div class="panel-body">
                    <form class="form-horizontal" id="registerForm"  name="registerForm">
                                          <div class="form-group">
                                        <label for="forname" class="col-sm-2 control-label">Nume si prenume / Denumire firma</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="name" name="name" placeholder="Nume si prenume / Denumire firma">
                                        </div>
                                      </div>   
                                        <div class="form-group">
                                        <label for="foradresa" class="col-sm-2 control-label">Adresa de livrare</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="adresa" name="adresa" placeholder="Adresa de livrare">
                                        </div>
                                      </div> 
                                      <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                        <div class="col-sm-10">
                                          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                        </div>
                                      </div>
                                       <div class="form-group">
                                        <label for="cnp" class="col-sm-2 control-label">CNP/C.U.I</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="cnp" name="cnp" placeholder="CNP/C.U.I">
                                        </div>
                                      </div> 
                                       <div class="form-group">
                                        <label for="cantitate" class="col-sm-2 control-label">Cantitate comandata</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="cantitate" name="cantitate" placeholder="Cantitate comandata">
                                        </div>
                                      </div> 
                                       <div class="form-group">
                                        <label for="telefon" class="col-sm-2 control-label">Telefon</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="telefon"  name="telefon" placeholder="Telefon">
                                        </div>
                                      </div> 
                                       <div class="form-group">
                                        <label for="observatii" class="col-sm-2 control-label">Observatii</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="observatii" name="observatii" placeholder="Observatii">
                                        </div>
                                      </div> 
                                      
                    </form>
                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                          <button onclick="registerUser()" class="btn btn-success">Create Account</button>
                                        </div>
                                      </div>
                     <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>
</div></div>
 </div>
</div>

    </div>
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
   
<script type="text/javascript">
  $( document ).ready(function() {

});
function registerUser() {
  /*
$.post( "admin/router.php", $("#registerForm").serializeArray())
  .done(function( data ) {

  });*/
  console.log($("#registerForm").serializeArray());
}  
</script>
</body>

</html>
