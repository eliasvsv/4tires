<?php
include 'api/api.html.php';
include 'api/api.database.php';
$api = new Api\Html();
$conf=array(
  "server"=>"localhost",
  "user"=>"root",
  "pass"=>"",
  "bd"=>"web"
);
$db= new Api\Database($conf);
if (isset($_GET['categorie']) and isset($_GET["supplier"])) {
  $supplier=$_GET["supplier"];
$datos=$db->retorno("select * from {$supplier}_b limit 0,25");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Products Admin</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css">
    .alert{
      display:  none; 
    }

  </style>
  </head>
  <body>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-body">
           <div class="row">
            <div class="col-md-12" >
                <select id="supplier" class="form-control">
                <option>Impar</option>
                <option>Nexxon</option>
                <option>Dinamic</option>
                <option>Sprin</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <select id="categorie" class="form-control">
                <option>Autoturisme</option>
                <option>Autoutilitare</option>
                <option>4x4</option>
                <option>Camion</option>
                <option>Agricole</option>
                <option>Industriale</option>
                <option>Atv</option>
              </select>
                 <button id="view_products" class="btn btn-primary btn-block">Get Products</button>
                  <button id="update-all" data-title="Testing" class="btn btn-success btn-block">Update ALL</button>
             </div>
          </div>
          </div>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="alert alert-success" role="alert"><p id="mensaje"> Updated ! </p></div>
        <!--progres bar-->
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 100%;">
              100%
            </div>
          </div>
        <!---->
      </div>
      <div class="col-md-2"></div>
    </div>
    <div class="row ">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Impar Products</h3>
          </div>
          <div class="panel-body">
            <table id="products" class="table" >
               <tr>
                  <th><button id="update-selected" class="btn btn-success" >update</button></th>
                  <th>id</th>
                 <th>Picture</th>
                 <th>Description</th>
                 <th>Status</th>

               </tr>
                <?php
                         while ($fila = $datos->fetch_assoc()) {
                          $class=" class=\"btn btn-danger\"";
                          if($api->checkSatusByLink($fila["link"])=="true"){
                               $class=" class=\"btn btn-success\"";
                          }
                          echo "
                              <tr>
                                <td><input id=p[] name=p[] type='checkbox' value='".$fila["link"]."'></td>
                               <td>".$fila["id"]."</td>
                               <td><img src='".$fila["image"]."'></td>
                               <td><a target=\"_blank\" href=\"".$fila["link"]."\">".$fila["desc"]."</a></td>
                               <td><button type=\"button\" data-link='".$fila["link"]."' {$class} >Status</button>
                               </td>
                             </tr>
                          ";
                      }
               ?>
            </table>
          </div>
        </div>

      </div>
      <div class="col-md-2">
        
        
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript">
  function update(link2){
      $.get( "api/router.php", { f: "insertImparProduct", link:  link2 } )
  .done(function( data ) {
   if(data=="[ok]"){
    alert("Product Updated succesfuly!");
      location.reload();

   }
   else{
     alert("Product Updated ERROR!");
   }
  });
  }
  ////////////////////////////////////////////////
  //
  //
  //      Document Ready
  //
  //
  ///////////////////////////////////////////////
  $( document ).ready(function() {
  $( "#products tr td button" ).on( "click", function() {

update($( this ).data("link"));

});  
$('#update-all').on('click', function (e) {
$('#mensaje').html($('#update-all').data('title'));
$('.alert').css({display:"block"});
});
$("#view_products").on('click',function(event){
 location.href="imparConsole.php?categorie="+$("#categorie").val()+"&supplier="+$("#supplier").val();


});
$('#update-selected').on('click',function(e){
$("input:checkbox:checked").each(   
    function() {
      update($( this ).val());
    }
);

});
}); //end document ready


</script>
  </body>
</html>