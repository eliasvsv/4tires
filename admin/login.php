<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

    <!-- Bootstrap -->
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
      body{
        background-image: url(img/347075.jpg);
        border-image-repeat: no-repeat;
      }
      #loginArea{
background-color: rgb(101,101,109);
margin-top: 280px;
padding-top: 20px;
      }
    </style>
  </head>
  <body>
 <div id="page" class="row">
  <div class="col-md-4"></div>
  <div id="loginArea" class="col-md-4">
    <div class="panel panel-default">

  <div class="panel-body">
      <form name="loginForm" id="loginForm">
        <input type="hidden" name="c" id="c" value="Users">
        <input type="hidden" name="f" id="f" value="login">

  <div class="form-group">
    <label for="exampleInputEmail1">User</label>
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
     </span>
    <input type="text" name="user" class="form-control" id="user" placeholder="User">
  </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
     <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">
        <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
     </span>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
  </div></div>

</form>
  <button name="login"  onclick="login()" class="btn btn-success">Submit</button>
  </div>
  </div>
  </div>
  <div class="col-md-4"></div>
</div>   


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript">
    function login(){
    $.post( "router.php",$("#loginForm").serializeArray() )
  .done(function( data ) {
    console.log(data);
 if (data==1) {
location.href="index.php";
 }
  });
  } 
</script>
  </body>
</html>