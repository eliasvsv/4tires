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
    <title>Test Template</title>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap -->
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
<link href="https://livedemo00.template-help.com/opencart_53498/catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,400italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

<link rel="stylesheet"  href="https://livedemo00.template-help.com/opencart_53498/catalog/view/theme/theme537/js/fancybox/jquery.fancybox.css" media="screen" />
<link href="https://livedemo00.template-help.com/opencart_53498/catalog/view/javascript/jquery/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="https://livedemo00.template-help.com/opencart_53498/catalog/view/theme/theme537/stylesheet/livesearch.css" rel="stylesheet">
<link href="https://livedemo00.template-help.com/opencart_53498/catalog/view/theme/theme537/stylesheet/photoswipe.css" rel="stylesheet">
<link href="https://livedemo00.template-help.com/opencart_53498/catalog/view/theme/theme537/js/jquery.bxslider/jquery.bxslider.css" rel="stylesheet">
<link href="https://livedemo00.template-help.com/opencart_53498/catalog/view/theme/theme537/stylesheet/stylesheet.css" rel="stylesheet">
<link href="https://livedemo00.template-help.com/opencart_53498/catalog/view/theme/theme537/stylesheet/superfish.css" rel="stylesheet">
<link href="https://livedemo00.template-help.com/opencart_53498/catalog/view/theme/theme537/stylesheet/responsive.css" rel="stylesheet">
<link href="https://livedemo00.template-help.com/opencart_53498/catalog/view/javascript/parallax/css/parallax.css" type="text/css" rel="stylesheet" media="screen" />
<link href="https://livedemo00.template-help.com/opencart_53498/catalog/view/javascript/camera/css/camera.css" type="text/css" rel="stylesheet" media="screen" />
<link href="https://livedemo00.template-help.com/opencart_53498/catalog/view/javascript/jquery/owl-carousel/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
<link href="https://livedemo00.template-help.com/opencart_53498/catalog/view/javascript/jquery/owl-carousel/owl.transitions.css" type="text/css" rel="stylesheet" media="screen" />
<script src="https://livedemo00.template-help.com/opencart_53498/catalog/view/theme/theme537/js/common.js" type="text/javascript"></script>
<script src="https://livedemo00.template-help.com/opencart_53498/catalog/view/theme/theme537/js/tm-stick-up.js" type="text/javascript"></script>
<script src="https://livedemo00.template-help.com/opencart_53498/catalog/view/theme/theme537/js/jquery.unveil.js" type="text/javascript"></script>
<script src="https://livedemo00.template-help.com/opencart_53498/catalog/view/theme/theme537/js/jquery.bxslider/jquery.bxslider.js" type="text/javascript"></script>
<script src="https://livedemo00.template-help.com/opencart_53498/catalog/view/theme/theme537/js/fancybox/jquery.fancybox.js"></script>
<script src="https://livedemo00.template-help.com/opencart_53498/catalog/view/theme/theme537/js/elavatezoom/jquery.elevatezoom.js" type="text/javascript"></script>
<script src="https://livedemo00.template-help.com/opencart_53498/catalog/view/theme/theme537/js/superfish.js" type="text/javascript"></script>
<!--video script-->
<script src="https://livedemo00.template-help.com/opencart_53498/catalog/view/theme/theme537/js/jquery.vide.min.js" type="text/javascript"></script>
<script src="https://livedemo00.template-help.com/opencart_53498/catalog/view/theme/theme537/js/jquery.touchSwipe.min.js" type="text/javascript"></script>
<!--Green Sock-->
<script src="https://livedemo00.template-help.com/opencart_53498/catalog/view/theme/theme537/js/greensock/jquery.gsap.min.js" type="text/javascript"></script>
<script src="https://livedemo00.template-help.com/opencart_53498/catalog/view/theme/theme537/js/greensock/TimelineMax.min.js" type="text/javascript"></script>
<script src="https://livedemo00.template-help.com/opencart_53498/catalog/view/theme/theme537/js/greensock/TweenMax.min.js" type="text/javascript"></script>
<script src="https://livedemo00.template-help.com/opencart_53498/catalog/view/theme/theme537/js/greensock/jquery.scrollmagic.min.js" type="text/javascript"></script>


<!--photo swipe-->
<script src="chttps://livedemo00.template-help.com/opencart_53498/atalog/view/theme/theme537/js/photo-swipe/klass.min.js" type="text/javascript"></script>
<script src="https://livedemo00.template-help.com/opencart_53498/catalog/view/theme/theme537/js/photo-swipe/code.photoswipe.jquery-3.0.5.js" type="text/javascript"></script>
<script src="https://livedemo00.template-help.com/opencart_53498/catalog/view/theme/theme537/js/photo-swipe/code.photoswipe-3.0.5.min.js" type="text/javascript"></script>
<script src="https://livedemo00.template-help.com/opencart_53498/catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<script src="catalog/view/theme/theme537/js/script.js" type="text/javascript"></script>

<!--custom script-->
<script src="https://livedemo00.template-help.com/opencart_53498/catalog/view/javascript/parallax/cherry-fixed-parallax.js" type="text/javascript"></script>
<script src="https://livedemo00.template-help.com/opencart_53498/catalog/view/javascript/parallax/device.min.js" type="text/javascript"></script>
<script src="https://livedemo00.template-help.com/opencart_53498/catalog/view/javascript/camera/camera.js" type="text/javascript"></script>
<script src="https://livedemo00.template-help.com/opencart_53498/catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<!--[if lt IE 9]><div style='clear:both;height:59px;padding:0 15px 0 15px;position:relative;z-index:10000;text-align:center;'><a href="https://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="https://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div><![endif]--> 
<style type="text/css">
ul.owl-carousel li {
    list-style: outside none none;
    float: left;
    padding-left: 10px;
}
</style>
</head>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

<header>
  <div class="container">
    <div id="logo">
            <a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=common/home"><img src="https://livedemo00.template-help.com/opencart_53498/image/catalog/logo.png" title="Tyres" alt="Tyres" class="img-responsive" /></a>
          </div>    
    <div class="box-right">
      <div class="box-cart">
<div id="cart">
  <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="dropdown-toggle">
    <i class="fa fa-shopping-cart"></i> 
    <strong>Cart: </strong>
    <span id="cart-total"> 0 item(s) </span>
    <span id="cart-total2">0</span> </button>
  <ul class="dropdown-menu pull-right">
    <li>
    <p class="text-center">Your shopping cart is empty!</p>
  </li>
    </ul>
</div>
</div>
      
      <div class="log-button">
                <a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=account/login"><i class="fa fa-unlock-alt"></i><span>Login</span></a>
                <a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=account/register" title="Create an account"><i class="fa fa-user"></i><span>Create an account</span></a>
      </div>
    </div>    
  </div>
</header>  



  <script type="text/javascript">
  jQuery(document).ready(function(){
    if ($('body').width() > 990) { 
      $('.nav__primary').tmStickUp({correctionSelector: $('#menu_stick')});
    };
  });
</script>
 <div class="nav__primary" style="position: relative; top: 0px;">
    <div class="container">
      <div class="menu-shadow">
                  <div id="menu-gadget">
            <div id="menu-icon">Categories</div>
            <ul class="menu sf-js-enabled sf-arrows">
<li>
<a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/category&amp;path=25" class="sf-with-ul">Wheel covers</a>
<ul style="display: none;">
<li>
<a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/category&amp;path=57">Elit sed do eiusmod</a>
</li>
<li>
<a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/category&amp;path=49">Lorem ipsum </a>
</li>

</ul>

</li>
<li>
<a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/category&amp;path=33" class="sf-with-ul">Wheel locks</a>
<ul style="display: none;">
<li>
<a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/category&amp;path=39">Eusmod teampor</a>
</li>

</ul>

</li>
<li>
<a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/category&amp;path=20" class="sf-with-ul">Wheel spacers</a>
<ul style="display: none;">
<li>
<a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/category&amp;path=36">Incididunt</a>
</li>

</ul>

</li>
<li>
<a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/category&amp;path=18" class="sf-with-ul">Summer tyres</a>
<ul style="display: none;">
<li>
<a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/category&amp;path=30">Conse ctetur </a>
</li>
<li>
<a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/category&amp;path=59">Incididunt ut labore </a>
</li>
<li>
<a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/category&amp;path=31">Dolor sit amet</a>
</li>

</ul>

</li>
<li>
<a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/category&amp;path=34" class="sf-with-ul">Winter tyres</a>
<ul style="display: none;">
<li>
<a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/category&amp;path=45">Incididunt</a>
</li>
<li>
<a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/category&amp;path=32">Lorem ipsum </a>
</li>

</ul>

</li>
<li>
<a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/category&amp;path=37" class="sf-with-ul">Sport tyres</a>
<ul style="display: none;">
<li>
<a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/category&amp;path=28">Eusmod teampor</a>
</li>

</ul>

</li>

</ul>
          </div>
                
        <div id="top-links" class="nav">
          <ul class="list-inline">
            <li class="first"><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=common/home" title="Home"><i class="fa fa-home"></i><span>Home</span></a></li>
            <li><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=account/wishlist" id="wishlist-total" title="Wish List"><i class="fa fa-heart"></i><span>Wish List <span>0</span></span></a></li>
            <li><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=account/account" title="My Account"><i class="fa fa-user"></i><span>My Account</span></a></li>
            <li><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=checkout/cart" title="Shopping Cart"><i class="fa fa-shopping-cart"></i><span>Shopping Cart</span></a></li>
            <li><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=checkout/checkout" title="Checkout"><i class="fa fa-share"></i><span>Checkout</span></a></li>
          </ul>
        </div>
        
        <div id="search">
  <input type="text" name="search" value="" placeholder="">
  <i class="fa fa-search"></i><button type="button" class="button-search"><i class="fa fa-angle-double-right"></i></button>
  <div class="clear"></div>
</div>        
        <div class="clear"></div>
      </div>
    </div>
  </div>
      <div class="header_modules"><script>
  jQuery(function(){
    jQuery('#camera_wrap_0').camera({
      navigation: true,
      playPause: false,
      thumbnails: false,
      navigationHover: false,
      barPosition: 'top',
      loader: false,
      time: 3000,
      transPeriod:800,
      alignment: 'center',
      autoAdvance: true,
      mobileAutoAdvance: true,
      barDirection: 'leftToRight', 
      barPosition: 'bottom',
      easing: 'easeInOutExpo',
      fx: 'simpleFade',
      height: '36.1%',
      minHeight: '250px',
      hover: true,
      pagination: false,
      loaderColor     : '#1f1f1f', 
      loaderBgColor   : 'transparent',
      loaderOpacity   : 1,
      loaderPadding   : 0,
      loaderStroke    : 3,
      });
  });
</script>
<div class="fluid_container" >
  <div class="camera_container">
  <div id="camera_wrap_0">
      <div title="slide-1" data-thumb="https://livedemo00.template-help.com/opencart_53498/image/cache/catalog/slide-1-2050x740.jpg"  data-src="https://livedemo00.template-help.com/opencart_53498/image/cache/catalog/slide-1-2050x740.jpg">
            <div class="camera_caption fadeIn">
        <div>
<h1>Find wheels & tyres</h1>
<h2>For all vehicle types</h2>
</div>      </div>
          </div>
      <div title="slide-2" data-thumb="https://livedemo00.template-help.com/opencart_53498/image/cache/catalog/slide-2-2050x740.jpg"  data-src="https://livedemo00.template-help.com/opencart_53498/image/cache/catalog/slide-2-2050x740.jpg">
            <div class="camera_caption fadeIn">
        <div>
<h1>Your wheels are in</h1>
<h2>Good hands!</h2>
</div>      </div>
          </div>
      <div title="slide-3" data-thumb="https://livedemo00.template-help.com/opencart_53498/image/cache/catalog/slide-3-2050x740.jpg"  data-src="https://livedemo00.template-help.com/opencart_53498/image/cache/catalog/slide-3-2050x740.jpg">
            <div class="camera_caption fadeIn">
        <div>
<h1>Custom Wheels & Rims</h1>
<h2>It's all about style and performance</h2>
</div>      </div>
          </div>
    </div>
  </div>
  
</div><div id="banner0" class="banners">
      <div class="col-sm-4">
    <div class="banner-box">
      <a class="clearfix" href="index.php?route=product/product&amp;product_id=43">
        <img src="https://livedemo00.template-help.com/opencart_53498/image/cache/catalog/banner-1-663x370.png" alt="banner-1" class="img-responsive" />
                <div class="s-desc"><h1>Winter</h1>
<h2>Tires</h2>
<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
<span class="banner_button"><span>See all winter tyres</span><i class="fa fa-chevron-right "></i></span></div>
              </a>
    </div>
  </div>
        <div class="col-sm-4">
    <div class="banner-box">
      <a class="clearfix" href="index.php?route=product/product&amp;product_id=42">
        <img src="https://livedemo00.template-help.com/opencart_53498/image/cache/catalog/banner-2-663x370.png" alt="banner-2" class="img-responsive" />
                <div class="s-desc"><h1>Summer</h1>
<h2>Tires</h2>
<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
<span class="banner_button"><span>See all winter tyres</span><i class="fa fa-chevron-right "></i></span></div>
              </a>
    </div>
  </div>
        <div class="col-sm-4">
    <div class="banner-box">
      <a class="clearfix" href="index.php?route=product/product&amp;product_id=48">
        <img src="https://livedemo00.template-help.com/opencart_53498/image/cache/catalog/banner-3-663x370.png" alt="banner-3" class="img-responsive" />
                <div class="s-desc"><h1>Custom</h1>
<h2>Wheels</h2>
<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
<span class="banner_button"><span>See all winter tyres</span><i class="fa fa-chevron-right "></i></span></div>
              </a>
    </div>
  </div>
    </div>
</div>
      
<div id="container">
  <div class="container">
    <div class="row">
                   <div id="content" class="col-sm-12">
                   <div class="box_html brand">
  <div class="box brand"><div class="box-content">
  <ul class="owl-carousel owl-theme" id="owl-example2">
  <li><a href="index.php?route=product/manufacturer/info&amp;manufacturer_id=5"><img alt="image-brand-1" src="image/catalog/brand-1.png"></a></li>
  <li><a href="index.php?route=product/manufacturer/info&amp;manufacturer_id=10"><img alt="image-brand-2" src="image/catalog/brand-2.png"></a></li>
  <li><a href="index.php?route=product/manufacturer/info&amp;manufacturer_id=7"><img alt="image-brand-3" src="image/catalog/brand-3.png"></a></li>
  <li><a href="index.php?route=product/manufacturer/info&amp;manufacturer_id=8"><img alt="image-brand-4" src="image/catalog/brand-4.png"></a></li>
  <li><a href="index.php?route=product/manufacturer/info&amp;manufacturer_id=9"><img alt="image-brand-5" src="image/catalog/brand-5.png"></a></li>
  <li><a href="index.php?route=product/manufacturer/info&amp;manufacturer_id=6"><img alt="image-brand-6" src="image/catalog/brand-6.png"></a></li>
  </ul></div></div></div>

<script>
  window.onload = function() {  
  
  var mapelement=document.getElementById('map');
  
  if(mapelement){
  
  function initialize() { 

  var locations = [
      ['Tyres', 42.332, -83.046, 2],
      ['Tyres', 42.649224, -73.796384, 1]
  ];
  var styles = [
    {
        "featureType": "landscape",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 65
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
      "featureType": "poi",
      "stylers": [
        {
          "saturation": -100
        },
        {
          "lightness": 51
        },
        {
          "visibility": "simplified"
        }
      ]
    },
    {
      "featureType": "road.highway",
      "stylers": [
        {
          "saturation": -100
        },
        {
          "visibility": "simplified"
        }
      ]
    },
    {
      "featureType": "road.arterial",
      "stylers": [
        {
          "saturation": -100
        },
        {
          "lightness": 30
        },
        {
          "visibility": "on"
        }
      ]
    },
    {
      "featureType": "road.local",
      "stylers": [
        {
          "saturation": -100
        },
        {
          "lightness": 40
        },
        {
          "visibility": "on"
        }
      ]
    },
    {
      "featureType": "transit",
      "stylers": [
        {
          "saturation": -100
        },
        {
          "visibility": "simplified"
        }
      ]
    },
    {
      "featureType": "administrative.province",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "labels",
      "stylers": [
        {
          "visibility": "on"
        },
        {
          "lightness": -25
        },
        {
          "saturation": -100
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "geometry",
      "stylers": [
        {
          "hue": "#ffff00"
        },
        {
          "lightness": -25
        },
        {
          "saturation": -97
        }
      ]
    }
  ];

  var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});
  var map;
  var marker, i;
    
  var mapOptions = {
    zoom: 10,
    scrollwheel: false,
    center: new google.maps.LatLng(42.649224, -73.796384),
    mapTypeControl: false,
    panControl: true,
    scaleControl: false,
    streetViewControl: true,
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  };    
  google.maps.event.addDomListener(window, "resize", function() {
    var center = map.getCenter();
    google.maps.event.trigger(map, "resize");
    map.setCenter(center);
  });
  
  map = new google.maps.Map(document.getElementById('map'),mapOptions);
    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');
    var markerImage = 'image/catalog/gmap_marker.png';
    
    infowindow = new google.maps.InfoWindow(),
        markers = [];
    
    for (i = 0; i < locations.length; i++) {
    
    markers[i] = new google.maps.Marker({
         map: map,
         icon: markerImage,
         position: new google.maps.LatLng(locations[i][1], locations[i][2]),
         animation: null
      });   
    var contentString = 'Company Inc., 8901 Marmora Road, Glasgow, D04 89GR';
    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });
    google.maps.event.addListener(markers[i], "click", function() {
            infowindow.open(map, this);
    });
      
    }   
    
    
    
  }   
  
    
  initialize();
  } };
</script><script>
$(document).ready(function() {    
    $(".quickview").fancybox({
      maxWidth  : 800,
      maxHeight : 600,
      fitToView : false,
      width   : '70%',
      height    : '70%',
      autoSize  : false,
      closeClick  : false,
      openEffect  : 'elastic',
      closeEffect : 'elastic',
      
    });
  });
</script>
<div class="box featured">
  <div class="box-heading"><h3>Featured products</h3></div>
  <?php
$datos =select("select * from products limit 8");
$line=array();
$i=0;
while($obj = $datos->fetch_object()){ 
            $line[$i]["code"]=$obj->cod; 
            $line[$i]["name"]=$obj->name; 
            $line[$i]["price"]=$obj->price;
            $i++;
          } 
  ?>
  <div class="box-content">
    <div class="product-layout">
       
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
      <div class="product-thumb transition">
      
        <span class="stickers">
                
        
                    <span class="new_pr">New!</span>
                    </span>
      
        <a class="quickview" data-rel="details" href="#quickview_3">
          Quick View        </a>
        <div class="quick_info">
          <div id="quickview_3">
            <div>
              <div class="left col-sm-4">
                  <div class="quickview_image image"><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/product&amp;product_id=49"><img alt="Lorem ipsum dolor sit amet conse ctetuar adipisicing elit" title="Lorem ipsum dolor sit amet conse ctetuar adipisicing elit" class="img-responsive" src="https://livedemo00.template-help.com/opencart_53498/image/cache/catalog/Adrenalin-Potenza1-270x270.png" /></a></div>
                </div>
                <div class="right col-sm-8">
                  <h2>Lorem ipsum dolor sit amet conse ctetuar adipisicing elit</h2>
                  <div class="inf">
                                                              <p class="product_model model">Model: Product5</p>
                    
                                        <div class="price">
                                        $258.89                                                           </div>
                                      </div>
                  <div class="cart-button">
                    <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('49');"><i class="fa fa-heart"></i></button>
                    <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('49');"><i class="fa fa-exchange"></i></button>
                    <button class="btn btn-icon btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('49');"><i class="fa fa-shopping-cart"></i></button>
                  </div>
                  <div class="clear"></div>
                  <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                                          </div>
                    
                </div>
                <div class="col-sm-12">
                  <div class="quickview_description description">
                    <iframe src="https://www.youtube.com/embed/6BQxvkC5juY?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen="" frameborder="0" height="315" width="560"></iframe><p><b>Car owners</b> know the real value of choosing quality wheels and tyres. Even if you have the most powerful engine, the next generation power transmission system and premium super-trick suspension, all this can make you lag behind competitors unless you equip your beast with the right wheels and tyres. It frequently happens that you can’t find the necessary part or accessory in the local auto parts store. This is when online shops come in handy. You no longer need to wander around the town in search of the necessary car parts since all this can be found on our website. Join the club and bring wheels &amp; tyres shopping to the whole new level. </p><p><b>We keep track</b> of the latest web design trends and try hard to keep our estore up-to-date and modern. It is designed in such a way that nothing will distract you from the items worth your attention. All auto part can be accessed by clicking the banner on the home page, picking the right category in the top menu or simply typing the name of the items you need in the integrated search bar. Do you need assistance to come up with the product that will perfectly fit your particular vehicle? Our experienced team of sales and customer service reps can be reached <b>24/7</b> to give the customer a premium shopping experience.</p>                 </div>
                </div>
            </div>
          </div>
        </div>      
      <div class="image"><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/product&amp;product_id=49"><img alt="Lorem ipsum dolor sit amet conse ctetuar adipisicing elit" title="Lorem ipsum dolor sit amet conse ctetuar adipisicing elit" class="img-responsive lazy" data-src="https://livedemo00.template-help.com/opencart_53498/image/cache/catalog/Adrenalin-Potenza1-270x270.png" src="image/catalog/preload.gif"  /></a></div>
      <div class="caption">
        <div class="name"><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/product&amp;product_id=49">Lorem ipsum dolor sit amet conse ctetuar adipisicing elit</a></div>
        <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                        </div>
                <div class="price">
                $258.89                       </div>
              </div>
      <div class="cart-button">
        <button class="btn btn-icon btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('49');"><i class="fa fa-shopping-cart"></i></button>
        <a class="btn btn-primary" href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/product&amp;product_id=49"><span><i class="fa fa-chevron-right"></i>Details</span></a>
      </div>
        <div class="clear"></div>
      </div>
      </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
      <div class="product-thumb transition">
      
        <span class="stickers">
                
        
                </span>
      
        <a class="quickview" data-rel="details" href="#quickview_4">
          Quick View        </a>
        <div class="quick_info">
          <div id="quickview_4">
            <div>
              <div class="left col-sm-4">
                  <div class="quickview_image image"><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/product&amp;product_id=30"><img alt="Lorem ipsum dolor sit amet conse ctetuar adipisicing elit" title="Lorem ipsum dolor sit amet conse ctetuar adipisicing elit" class="img-responsive" src="https://livedemo00.template-help.com/opencart_53498/image/cache/catalog/PILOT-SPORT1-270x270.png" /></a></div>
                </div>
                <div class="right col-sm-8">
                  <h2>Lorem ipsum dolor sit amet conse ctetuar adipisicing elit</h2>
                  <div class="inf">
                                          <p class="quickview_manufacture manufacture manufacture">Brand: <a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/manufacturer/info&amp;manufacturer_id=9">Quisque sodales</a></p>
                                                              <p class="product_model model">Model: Product 3</p>
                    
                                        <div class="price">
                                        $258.89                                                           </div>
                                      </div>
                  <div class="cart-button">
                    <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button>
                    <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><i class="fa fa-exchange"></i></button>
                    <button class="btn btn-icon btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('30');"><i class="fa fa-shopping-cart"></i></button>
                  </div>
                  <div class="clear"></div>
                  <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                          </div>
                    
                </div>
                <div class="col-sm-12">
                  <div class="quickview_description description">
                    <iframe src="https://www.youtube.com/embed/6BQxvkC5juY?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen="" frameborder="0" height="315" width="560"></iframe><p><b>Car owners</b> know the real value of choosing quality wheels and tyres. Even if you have the most powerful engine, the next generation power transmission system and premium super-trick suspension, all this can make you lag behind competitors unless you equip your beast with the right wheels and tyres. It frequently happens that you can’t find the necessary part or accessory in the local auto parts store. This is when online shops come in handy. You no longer need to wander around the town in search of the necessary car parts since all this can be found on our website. Join the club and bring wheels &amp; tyres shopping to the whole new level. </p><p><b>We keep track</b> of the latest web design trends and try hard to keep our estore up-to-date and modern. It is designed in such a way that nothing will distract you from the items worth your attention. All auto part can be accessed by clicking the banner on the home page, picking the right category in the top menu or simply typing the name of the items you need in the integrated search bar. Do you need assistance to come up with the product that will perfectly fit your particular vehicle? Our experienced team of sales and customer service reps can be reached <b>24/7</b> to give the customer a premium shopping experience.</p>                 </div>
                </div>
            </div>
          </div>
        </div>      
      <div class="image"><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/product&amp;product_id=30"><img alt="Lorem ipsum dolor sit amet conse ctetuar adipisicing elit" title="Lorem ipsum dolor sit amet conse ctetuar adipisicing elit" class="img-responsive lazy" data-src="https://livedemo00.template-help.com/opencart_53498/image/cache/catalog/PILOT-SPORT1-270x270.png" src="image/catalog/preload.gif"  /></a></div>
      <div class="caption">
        <div class="name"><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/product&amp;product_id=30">Lorem ipsum dolor sit amet conse ctetuar adipisicing elit</a></div>
        <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                        </div>
                <div class="price">
                $258.89                       </div>
              </div>
      <div class="cart-button">
        <button class="btn btn-icon btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('30');"><i class="fa fa-shopping-cart"></i></button>
        <a class="btn btn-primary" href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/product&amp;product_id=30"><span><i class="fa fa-chevron-right"></i>Details</span></a>
      </div>
        <div class="clear"></div>
      </div>
      </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
      <div class="product-thumb transition">
      
        <span class="stickers">
                
        
                </span>
      
        <a class="quickview" data-rel="details" href="#quickview_5">
          Quick View        </a>
        <div class="quick_info">
          <div id="quickview_5">
            <div>
              <div class="left col-sm-4">
                  <div class="quickview_image image"><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/product&amp;product_id=31"><img alt="Lorem ipsum dolor sit amet conse ctetuar adipisicing elit" title="Lorem ipsum dolor sit amet conse ctetuar adipisicing elit" class="img-responsive" src="https://livedemo00.template-help.com/opencart_53498/image/cache/catalog/Nokian-WR1-270x270.png" /></a></div>
                </div>
                <div class="right col-sm-8">
                  <h2>Lorem ipsum dolor sit amet conse ctetuar adipisicing elit</h2>
                  <div class="inf">
                                                              <p class="product_model model">Model: Product 4</p>
                    
                                        <div class="price">
                                        $258.89                                                           </div>
                                      </div>
                  <div class="cart-button">
                    <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('31');"><i class="fa fa-heart"></i></button>
                    <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('31');"><i class="fa fa-exchange"></i></button>
                    <button class="btn btn-icon btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('31');"><i class="fa fa-shopping-cart"></i></button>
                  </div>
                  <div class="clear"></div>
                  <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                          </div>
                    
                </div>
                <div class="col-sm-12">
                  <div class="quickview_description description">
                    <iframe src="https://www.youtube.com/embed/6BQxvkC5juY?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen="" frameborder="0" height="315" width="560"></iframe><p><b>Car owners</b> know the real value of choosing quality wheels and tyres. Even if you have the most powerful engine, the next generation power transmission system and premium super-trick suspension, all this can make you lag behind competitors unless you equip your beast with the right wheels and tyres. It frequently happens that you can’t find the necessary part or accessory in the local auto parts store. This is when online shops come in handy. You no longer need to wander around the town in search of the necessary car parts since all this can be found on our website. Join the club and bring wheels &amp; tyres shopping to the whole new level. </p><p><b>We keep track</b> of the latest web design trends and try hard to keep our estore up-to-date and modern. It is designed in such a way that nothing will distract you from the items worth your attention. All auto part can be accessed by clicking the banner on the home page, picking the right category in the top menu or simply typing the name of the items you need in the integrated search bar. Do you need assistance to come up with the product that will perfectly fit your particular vehicle? Our experienced team of sales and customer service reps can be reached <b>24/7</b> to give the customer a premium shopping experience.</p>                 </div>
                </div>
            </div>
          </div>
        </div>      
      <div class="image"><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/product&amp;product_id=31"><img alt="Lorem ipsum dolor sit amet conse ctetuar adipisicing elit" title="Lorem ipsum dolor sit amet conse ctetuar adipisicing elit" class="img-responsive lazy" data-src="https://livedemo00.template-help.com/opencart_53498/image/cache/catalog/Nokian-WR1-270x270.png" src="image/catalog/preload.gif"  /></a></div>
      <div class="caption">
        <div class="name"><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/product&amp;product_id=31">Lorem ipsum dolor sit amet conse ctetuar adipisicing elit</a></div>
        <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                        </div>
                <div class="price">
                $258.89                       </div>
              </div>
      <div class="cart-button">
        <button class="btn btn-icon btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('31');"><i class="fa fa-shopping-cart"></i></button>
        <a class="btn btn-primary" href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/product&amp;product_id=31"><span><i class="fa fa-chevron-right"></i>Details</span></a>
      </div>
        <div class="clear"></div>
      </div>
      </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
      <div class="product-thumb transition">
      
        <span class="stickers">
                
        
                </span>
      
        <a class="quickview" data-rel="details" href="#quickview_6">
          Quick View        </a>
        <div class="quick_info">
          <div id="quickview_6">
            <div>
              <div class="left col-sm-4">
                  <div class="quickview_image image"><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/product&amp;product_id=33"><img alt="Lorem ipsum dolor sit amet conse ctetuar adipisicing elit" title="Lorem ipsum dolor sit amet conse ctetuar adipisicing elit" class="img-responsive" src="https://livedemo00.template-help.com/opencart_53498/image/cache/catalog/ATS-Cup1-270x270.png" /></a></div>
                </div>
                <div class="right col-sm-8">
                  <h2>Lorem ipsum dolor sit amet conse ctetuar adipisicing elit</h2>
                  <div class="inf">
                                          <p class="quickview_manufacture manufacture manufacture">Brand: <a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/manufacturer/info&amp;manufacturer_id=10">Fusce vestibulum</a></p>
                                                              <p class="product_model model">Model: Product 6</p>
                    
                                        <div class="price">
                                        $258.89                                                           </div>
                                      </div>
                  <div class="cart-button">
                    <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('33');"><i class="fa fa-heart"></i></button>
                    <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('33');"><i class="fa fa-exchange"></i></button>
                    <button class="btn btn-icon btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('33');"><i class="fa fa-shopping-cart"></i></button>
                  </div>
                  <div class="clear"></div>
                  <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                          </div>
                    
                </div>
                <div class="col-sm-12">
                  <div class="quickview_description description">
                    <iframe src="https://www.youtube.com/embed/6BQxvkC5juY?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen="" frameborder="0" height="315" width="560"></iframe><p><b>Car owners</b> know the real value of choosing quality wheels and tyres. Even if you have the most powerful engine, the next generation power transmission system and premium super-trick suspension, all this can make you lag behind competitors unless you equip your beast with the right wheels and tyres. It frequently happens that you can’t find the necessary part or accessory in the local auto parts store. This is when online shops come in handy. You no longer need to wander around the town in search of the necessary car parts since all this can be found on our website. Join the club and bring wheels &amp; tyres shopping to the whole new level. </p><p><b>We keep track</b> of the latest web design trends and try hard to keep our estore up-to-date and modern. It is designed in such a way that nothing will distract you from the items worth your attention. All auto part can be accessed by clicking the banner on the home page, picking the right category in the top menu or simply typing the name of the items you need in the integrated search bar. Do you need assistance to come up with the product that will perfectly fit your particular vehicle? Our experienced team of sales and customer service reps can be reached <b>24/7</b> to give the customer a premium shopping experience.</p>                 </div>
                </div>
            </div>
          </div>
        </div>      
      <div class="image"><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/product&amp;product_id=33"><img alt="Lorem ipsum dolor sit amet conse ctetuar adipisicing elit" title="Lorem ipsum dolor sit amet conse ctetuar adipisicing elit" class="img-responsive lazy" data-src="https://livedemo00.template-help.com/opencart_53498/image/cache/catalog/ATS-Cup1-270x270.png" src="image/catalog/preload.gif"  /></a></div>
      <div class="caption">
        <div class="name"><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/product&amp;product_id=33">Lorem ipsum dolor sit amet conse ctetuar adipisicing elit</a></div>
        <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                        </div>
                <div class="price">
                $258.89                       </div>
              </div>
      <div class="cart-button">
        <button class="btn btn-icon btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('33');"><i class="fa fa-shopping-cart"></i></button>
        <a class="btn btn-primary" href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/product&amp;product_id=33"><span><i class="fa fa-chevron-right"></i>Details</span></a>
      </div>
        <div class="clear"></div>
      </div>
      </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
      <div class="product-thumb transition">
      
        <span class="stickers">
                
        
                </span>
      
        <a class="quickview" data-rel="details" href="#quickview_7">
          Quick View        </a>
        <div class="quick_info">
          <div id="quickview_7">
            <div>
              <div class="left col-sm-4">
                  <div class="quickview_image image"><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/product&amp;product_id=34"><img alt="Lorem ipsum dolor sit amet conse ctetuar adipisicing elit" title="Lorem ipsum dolor sit amet conse ctetuar adipisicing elit" class="img-responsive" src="https://livedemo00.template-help.com/opencart_53498/image/cache/catalog/Nokian-C1-270x270.png" /></a></div>
                </div>
                <div class="right col-sm-8">
                  <h2>Lorem ipsum dolor sit amet conse ctetuar adipisicing elit</h2>
                  <div class="inf">
                                          <p class="quickview_manufacture manufacture manufacture">Brand: <a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Lorem ipsum</a></p>
                                                              <p class="product_model model">Model: Product 7</p>
                    
                                        <div class="price">
                                        $258.89                                                           </div>
                                      </div>
                  <div class="cart-button">
                    <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('34');"><i class="fa fa-heart"></i></button>
                    <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('34');"><i class="fa fa-exchange"></i></button>
                    <button class="btn btn-icon btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('34');"><i class="fa fa-shopping-cart"></i></button>
                  </div>
                  <div class="clear"></div>
                  <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                          </div>
                    
                </div>
                <div class="col-sm-12">
                  <div class="quickview_description description">
                    <iframe src="https://www.youtube.com/embed/6BQxvkC5juY?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen="" frameborder="0" height="315" width="560"></iframe><p><b>Car owners</b> know the real value of choosing quality wheels and tyres. Even if you have the most powerful engine, the next generation power transmission system and premium super-trick suspension, all this can make you lag behind competitors unless you equip your beast with the right wheels and tyres. It frequently happens that you can’t find the necessary part or accessory in the local auto parts store. This is when online shops come in handy. You no longer need to wander around the town in search of the necessary car parts since all this can be found on our website. Join the club and bring wheels &amp; tyres shopping to the whole new level. </p><p><b>We keep track</b> of the latest web design trends and try hard to keep our estore up-to-date and modern. It is designed in such a way that nothing will distract you from the items worth your attention. All auto part can be accessed by clicking the banner on the home page, picking the right category in the top menu or simply typing the name of the items you need in the integrated search bar. Do you need assistance to come up with the product that will perfectly fit your particular vehicle? Our experienced team of sales and customer service reps can be reached <b>24/7</b> to give the customer a premium shopping experience.</p>                 </div>
                </div>
            </div>
          </div>
        </div>      
      <div class="image"><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/product&amp;product_id=34"><img alt="Lorem ipsum dolor sit amet conse ctetuar adipisicing elit" title="Lorem ipsum dolor sit amet conse ctetuar adipisicing elit" class="img-responsive lazy" data-src="https://livedemo00.template-help.com/opencart_53498/image/cache/catalog/Nokian-C1-270x270.png" src="image/catalog/preload.gif"  /></a></div>
      <div class="caption">
        <div class="name"><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/product&amp;product_id=34">Lorem ipsum dolor sit amet conse ctetuar adipisicing elit</a></div>
        <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                        </div>
                <div class="price">
                $258.89                       </div>
              </div>
      <div class="cart-button">
        <button class="btn btn-icon btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('34');"><i class="fa fa-shopping-cart"></i></button>
        <a class="btn btn-primary" href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/product&amp;product_id=34"><span><i class="fa fa-chevron-right"></i>Details ></span></a>
      </div>
        <div class="clear"></div>
      </div>
      </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
      <div class="product-thumb transition">
      
        <span class="stickers">
                
        
                </span>
      
        <a class="quickview" data-rel="details" href="#quickview_8">
          Quick View        </a>
        <div class="quick_info">
          <div id="quickview_8">
            <div>
              <div class="left col-sm-4">
                  <div class="quickview_image image"><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/product&amp;product_id=35"><img alt="Lorem ipsum dolor sit amet conse ctetuar adipisicing elit" title="Lorem ipsum dolor sit amet conse ctetuar adipisicing elit" class="img-responsive" src="https://livedemo00.template-help.com/opencart_53498/image/cache/catalog/PZERO-SILVER1-270x270.png" /></a></div>
                </div>
                <div class="right col-sm-8">
                  <h2>Lorem ipsum dolor sit amet conse ctetuar adipisicing elit</h2>
                  <div class="inf">
                                          <p class="quickview_manufacture manufacture manufacture">Brand: <a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/manufacturer/info&amp;manufacturer_id=5">Donec eu</a></p>
                                                              <p class="product_model model">Model: Product 8</p>
                    
                                        <div class="price">
                                        $258.89                                                           </div>
                                      </div>
                  <div class="cart-button">
                    <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('35');"><i class="fa fa-heart"></i></button>
                    <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('35');"><i class="fa fa-exchange"></i></button>
                    <button class="btn btn-icon btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('35');"><i class="fa fa-shopping-cart"></i></button>
                  </div>
                  <div class="clear"></div>
                  <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                          </div>
                    
                </div>
                <div class="col-sm-12">
                  <div class="quickview_description description">
                    <iframe src="https://www.youtube.com/embed/6BQxvkC5juY?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen="" frameborder="0" height="315" width="560"></iframe><p><b>Car owners</b> know the real value of choosing quality wheels and tyres. Even if you have the most powerful engine, the next generation power transmission system and premium super-trick suspension, all this can make you lag behind competitors unless you equip your beast with the right wheels and tyres. It frequently happens that you can’t find the necessary part or accessory in the local auto parts store. This is when online shops come in handy. You no longer need to wander around the town in search of the necessary car parts since all this can be found on our website. Join the club and bring wheels &amp; tyres shopping to the whole new level. </p><p><b>We keep track</b> of the latest web design trends and try hard to keep our estore up-to-date and modern. It is designed in such a way that nothing will distract you from the items worth your attention. All auto part can be accessed by clicking the banner on the home page, picking the right category in the top menu or simply typing the name of the items you need in the integrated search bar. Do you need assistance to come up with the product that will perfectly fit your particular vehicle? Our experienced team of sales and customer service reps can be reached <b>24/7</b> to give the customer a premium shopping experience.</p>                 </div>
                </div>
            </div>
          </div>
        </div>      
      <div class="image"><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/product&amp;product_id=35"><img alt="Lorem ipsum dolor sit amet conse ctetuar adipisicing elit" title="Lorem ipsum dolor sit amet conse ctetuar adipisicing elit" class="img-responsive lazy" data-src="https://livedemo00.template-help.com/opencart_53498/image/cache/catalog/PZERO-SILVER1-270x270.png" src="image/catalog/preload.gif"  /></a></div>
      <div class="caption">
        <div class="name"><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/product&amp;product_id=35">Lorem ipsum dolor sit amet conse ctetuar adipisicing elit</a></div>
        <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star active fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                        </div>
                <div class="price">
                $258.89                       </div>
              </div>
      <div class="cart-button">
        <button class="btn btn-icon btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('35');"><i class="fa fa-shopping-cart"></i></button>
        <a class="btn btn-primary" href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/product&amp;product_id=35"><span><i class="fa fa-chevron-right"></i>Details</span></a>
      </div>
        <div class="clear"></div>
      </div>
      </div>
        <div class="clear"></div>
    </div>
  </div>
</div>
<div id="parallax_0" class="parallax" >
  
      <div data-source-url="https://livedemo00.template-help.com/opencart_53498/image/cache/catalog/parallax-1-2050x1450.jpg" class="parallax-1">
      <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h3>Our <span>services</span></h3>

<div class="row">

<div class="col-sm-6">  

<div class="services-box">
<span class="drop">01</span>
<p><a href="index.php?route=information/information&amp;information_id=6">Excepteur sint occaecat</a> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
</div>

<div class="services-box">
<span class="drop">02</span>
<p><a href="index.php?route=information/information&amp;information_id=4">Excepteur sint occaecat</a> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
</div>

</div>

<div class="col-sm-6">  

<div class="services-box">
<span class="drop">03</span>
<p><a href="index.php?route=information/information&amp;information_id=6">Excepteur sint occaecat</a> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
</div>

<div class="services-box">
<span class="drop">04</span>
<p><a href="index.php?route=information/information&amp;information_id=4">Excepteur sint occaecat</a> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
</div>

</div>

</div>        </div>
      </div>
      </div>
    </div>

  
    
</div>

<script>
  jQuery(document).ready(function() {
  jQuery("#parallax_0>div").cherryFixedParallax({
    invert: false,
    });    
  }); 
</script>
<div class="box_html top-info">
  <div class="top-block">
<i class="fa fa-thumbs-o-up"></i><p><a href="index.php?route=product/product&amp;product_id=42">satisfaction<br> 100% Guaranteed</a></p>
</div>



<div class="top-block">
<i class="fa fa-truck"></i><p><a href="index.php?route=information/information&amp;information_id=6">Free shipping<br> on orders over $99</a></p>
</div>



<div class="top-block">
<i class="fa fa-refresh"></i><p><a href="index.php?route=account/return/add">7 Day<br> Easy return</a></p>
</div></div>

<script>
  window.onload = function() {  
  
  var mapelement=document.getElementById('map');
  
  if(mapelement){
  
  function initialize() { 

  var locations = [
      ['Tyres', 42.332, -83.046, 2],
      ['Tyres', 42.649224, -73.796384, 1]
  ];
  var styles = [
    {
        "featureType": "landscape",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 65
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
      "featureType": "poi",
      "stylers": [
        {
          "saturation": -100
        },
        {
          "lightness": 51
        },
        {
          "visibility": "simplified"
        }
      ]
    },
    {
      "featureType": "road.highway",
      "stylers": [
        {
          "saturation": -100
        },
        {
          "visibility": "simplified"
        }
      ]
    },
    {
      "featureType": "road.arterial",
      "stylers": [
        {
          "saturation": -100
        },
        {
          "lightness": 30
        },
        {
          "visibility": "on"
        }
      ]
    },
    {
      "featureType": "road.local",
      "stylers": [
        {
          "saturation": -100
        },
        {
          "lightness": 40
        },
        {
          "visibility": "on"
        }
      ]
    },
    {
      "featureType": "transit",
      "stylers": [
        {
          "saturation": -100
        },
        {
          "visibility": "simplified"
        }
      ]
    },
    {
      "featureType": "administrative.province",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "labels",
      "stylers": [
        {
          "visibility": "on"
        },
        {
          "lightness": -25
        },
        {
          "saturation": -100
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "geometry",
      "stylers": [
        {
          "hue": "#ffff00"
        },
        {
          "lightness": -25
        },
        {
          "saturation": -97
        }
      ]
    }
  ];

  var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});
  var map;
  var marker, i;
    
  var mapOptions = {
    zoom: 10,
    scrollwheel: false,
    center: new google.maps.LatLng(42.649224, -73.796384),
    mapTypeControl: false,
    panControl: true,
    scaleControl: false,
    streetViewControl: true,
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  };    
  google.maps.event.addDomListener(window, "resize", function() {
    var center = map.getCenter();
    google.maps.event.trigger(map, "resize");
    map.setCenter(center);
  });
  
  map = new google.maps.Map(document.getElementById('map'),mapOptions);
    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');
    var markerImage = 'image/catalog/gmap_marker.png';
    
    infowindow = new google.maps.InfoWindow(),
        markers = [];
    
    for (i = 0; i < locations.length; i++) {
    
    markers[i] = new google.maps.Marker({
         map: map,
         icon: markerImage,
         position: new google.maps.LatLng(locations[i][1], locations[i][2]),
         animation: null
      });   
    var contentString = 'Company Inc., 8901 Marmora Road, Glasgow, D04 89GR';
    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });
    google.maps.event.addListener(markers[i], "click", function() {
            infowindow.open(map, this);
    });
      
    }   
    
    
    
  }   
  
    
  initialize();
  } };
</script></div>
    </div>
  </div>
</div>
<div class="content_bottom">
      </div>
<footer>
      <div class="box_html map">
  <div id="map"></div></div>

<script>
  window.onload = function() {  
  
  var mapelement=document.getElementById('map');
  
  if(mapelement){
  
  function initialize() { 

  var locations = [
      ['Tyres', 42.332, -83.046, 2],
      ['Tyres', 42.649224, -73.796384, 1]
  ];
  var styles = [
    {
        "featureType": "landscape",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 65
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
      "featureType": "poi",
      "stylers": [
        {
          "saturation": -100
        },
        {
          "lightness": 51
        },
        {
          "visibility": "simplified"
        }
      ]
    },
    {
      "featureType": "road.highway",
      "stylers": [
        {
          "saturation": -100
        },
        {
          "visibility": "simplified"
        }
      ]
    },
    {
      "featureType": "road.arterial",
      "stylers": [
        {
          "saturation": -100
        },
        {
          "lightness": 30
        },
        {
          "visibility": "on"
        }
      ]
    },
    {
      "featureType": "road.local",
      "stylers": [
        {
          "saturation": -100
        },
        {
          "lightness": 40
        },
        {
          "visibility": "on"
        }
      ]
    },
    {
      "featureType": "transit",
      "stylers": [
        {
          "saturation": -100
        },
        {
          "visibility": "simplified"
        }
      ]
    },
    {
      "featureType": "administrative.province",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "labels",
      "stylers": [
        {
          "visibility": "on"
        },
        {
          "lightness": -25
        },
        {
          "saturation": -100
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "geometry",
      "stylers": [
        {
          "hue": "#ffff00"
        },
        {
          "lightness": -25
        },
        {
          "saturation": -97
        }
      ]
    }
  ];

  var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});
  var map;
  var marker, i;
    
  var mapOptions = {
    zoom: 10,
    scrollwheel: false,
    center: new google.maps.LatLng(42.649224, -73.796384),
    mapTypeControl: false,
    panControl: true,
    scaleControl: false,
    streetViewControl: true,
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  };    
  google.maps.event.addDomListener(window, "resize", function() {
    var center = map.getCenter();
    google.maps.event.trigger(map, "resize");
    map.setCenter(center);
  });
  
  map = new google.maps.Map(document.getElementById('map'),mapOptions);
    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');
    var markerImage = 'image/catalog/gmap_marker.png';
    
    infowindow = new google.maps.InfoWindow(),
        markers = [];
    
    for (i = 0; i < locations.length; i++) {
    
    markers[i] = new google.maps.Marker({
         map: map,
         icon: markerImage,
         position: new google.maps.LatLng(locations[i][1], locations[i][2]),
         animation: null
      });   
    var contentString = 'Company Inc., 8901 Marmora Road, Glasgow, D04 89GR';
    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });
    google.maps.event.addListener(markers[i], "click", function() {
            infowindow.open(map, this);
    });
      
    }   
    
    
    
  }   
  
    
  initialize();
  } };
</script>   <div class="container">
  <div class="row">
    <div class="col-sm-2">
            <div class="footer_box">
        <h5>Information</h5>
        <ul class="list-unstyled">
                <li><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=information/information&amp;information_id=4"><i class="fa fa-angle-right"></i>About</a></li>
                <li><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=information/information&amp;information_id=6"><i class="fa fa-angle-right"></i>Delivery</a></li>
                <li><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=information/information&amp;information_id=3"><i class="fa fa-angle-right"></i>Privacy Policy</a></li>
                <li><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=information/information&amp;information_id=5"><i class="fa fa-angle-right"></i>Terms &amp; Conditions</a></li>
                </ul>
      </div>
          </div>
    <div class="col-sm-2">
      <div class="footer_box">
        <h5>Customer Service</h5>
        <ul class="list-unstyled">
        <li><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=information/contact"><i class="fa fa-angle-right"></i>Contact Us</a></li>
        <li><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=account/return/add"><i class="fa fa-angle-right"></i>Returns</a></li>
        <li><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=information/sitemap"><i class="fa fa-angle-right"></i>Site Map</a></li>
        </ul>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="footer_box">
        <h5>Extras</h5>
        <ul class="list-unstyled">
        <li><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/manufacturer"><i class="fa fa-angle-right"></i>Brands</a></li>
        <li><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=account/voucher"><i class="fa fa-angle-right"></i>Gift Vouchers</a></li>
        <li><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=affiliate/account"><i class="fa fa-angle-right"></i>Affiliates</a></li>
        <li><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=product/special"><i class="fa fa-angle-right"></i>Specials</a></li>
        </ul>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="footer_box">
        <h5>My Account</h5>
        <ul class="list-unstyled">
        <li><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=account/account"><i class="fa fa-angle-right"></i>My Account</a></li>
        <li><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=account/order"><i class="fa fa-angle-right"></i>Order History</a></li>
        <li><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=account/wishlist"><i class="fa fa-angle-right"></i>Wish List</a></li>
        <li><a href="https://livedemo00.template-help.com/opencart_53498/index.php?route=account/newsletter"><i class="fa fa-angle-right"></i>Newsletter</a></li>
        </ul>
      </div>
    </div>
    <div class="col-sm-4">  
      <h5>Follow Us</h5>
      <ul class="list-unstyled social">
        <li><a data-toggle="tooltip" title="Facebook" href="https://www.facebook.com/login/"><i class="fa fa-facebook"></i></a></li>  
        <li><a data-toggle="tooltip" title="Twitter" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
        <li><a data-toggle="tooltip" title="RSS" href=""><i class="fa fa-rss"></i></a></li>
      </ul>
      <div class="copyright">
        Powered By <a href="https://www.opencart.com">OpenCart</a><br /> Tyres &copy; 2017<!-- [[%FOOTER_LINK]] -->
      </div>
    </div>
  </div>
  
  </div>  
</footer>
<script src="catalog/view/theme/theme537/js/livesearch.js" type="text/javascript"></script>

</div><!-- begin olark code -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('7830-582-10-3714');/*]]>*/</script><noscript><a href="https://www.olark.com/site/7830-582-10-3714/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="https://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->

<script type="text/javascript">
 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7078796-5']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();</script>
</body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager --></html>


  </body>
</html>