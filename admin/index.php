<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <script src="../js/jquery-ui.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="index.php?page=products"><i class="fa fa-fw fa-bar-chart-o"></i> Products</a>
                    </li>
                    <li>
                        <a href="index.php?page=users"><i class="fa fa-fw fa-table"></i> Users</a>
                    </li>
                    <li>
                        <a href="index.php?page=oferts"><i class="fa fa-fw fa-edit"></i> Oferts</a>
                    </li>
          
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid"> <!--*********************************************************************************************************************************-->

        <?php
        if (isset($_GET["page"])) {
            $page="html/".$_GET["page"].".php";
            include($page);

            # code...
        }
        ?>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>



</body>
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
   $.post( "router.php", { c: "Products", f: "updateNexxonProduct",id: $("#code").val(),price: $("#price").val() })
  .done(function( data ) {
search();
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
$.post( "router.php", { c: "Products", f: "createOffert",start: $("#dateStart").val(),end:$("#dateEnd").val(),idProduct:$("#codeO").val(),price:$("#priceOffert").val() })
  .done(function( data ) {
   console.log("ok");
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
</script>

</html>
