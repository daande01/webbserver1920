<?php
function top(){
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mybootstrap.css" rel="stylesheet">
    <link href="css/my.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <br>
      <br>

      <div class="row">
        <div  class="col-xs-12 col-md-8" >  <div class="logo"> logotype  </div></div>
        <div class="col-xs-6 col-md-4 login">
        
            <form class="form-signin" action="login" method="POST" >
              <h2 class="form-signin-heading">Please sign in</h2>
              <label for="username" class="sr-only">username</label>
              <input type="text" name="username" id="username" class="form-control" autocomplete="off" placeholder="username" required autofocus >
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" name="password" id="inputPassword" class="form-control" autocomplete="off" placeholder="password" required>
              <div class="checkbox">

              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
            
        </div>
      </div>


      <br>
      <br>
      <?php
    }
    ?>
