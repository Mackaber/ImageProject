<?php session_start(); ?>
<!DOCTYPE html>
<!-- saved from url=(0050)http://getbootstrap.com/examples/starter-template/ -->
<html lang="en"><script type="text/javascript" src="chrome-extension://kajfghlhfkcocafkcjlajldicbikpgnp/catcher.js"><!-- script injected by Request Maker --></script><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://getbootstrap.com/assets/ico/favicon.png">

    <title>Imageneer</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/starter-template/starter-template.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  <style type="text/css"></style></head>

  <body style="">
	
  	<!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Login/Signup</h4>
        </div>
        <div class="modal-body">
        <div class="row">

          <div class="col-md-6">
          	<h3>Sign up</h3>
          	<br>
          	<form class="form-horizontal" role="form" action="signup.php" method="post" >
			  <div class="form-group">
			    <div class="col-lg-10">
			      <input name="email" type="email" class="form-control" id="email" placeholder="Email">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-lg-10">
			      <input name="username" type="text" class="form-control" id="username" placeholder="Username">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-lg-10">
			      <input name="password" type="password" class="form-control" id="password" placeholder="Password">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-lg-10">
			      <input name="password_confirm" type="password" class="form-control" id="password_confirm" placeholder="Repeat password">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-lg-offset-2 col-lg-10">
			      <button type="submit" class="btn btn-default">Sign up</button>
			    </div>
			  </div>
			</form>
          </div>

          <div class="col-md-6">
	          	<form class="form-horizontal" role="form" action="login.php" method="post" >
				  <div class="form-group">
				  	<h3>Login</h3>
				  	<br>
				    <div class="col-lg-10">
				      <input name="email" type="email" class="form-control" id="email" placeholder="Email">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-lg-10">
				      <input name="password" type="password" class="form-control" id="password" placeholder="Password">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-lg-offset-2 col-lg-10">
				      <button name="submit" type="submit" class="btn btn-default">Sign in</button>
				    </div>
				  </div>
				</form>
			</div>
          </div>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  	<?php include 'upload-form.php'; ?>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Imageneer</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <!-- <li class="active"><a href="#">Login</a></li>
            <li><a href="#">About</a></li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <?php
          		$nombre = $_SESSION['nombre'];
          		$user_id = $_SESSION['user_id'];

		  		if(!$_SESSION['logged']){
		  			echo "<li><a data-toggle='modal' href='#myModal'>Login/Signup</a></li>";
				} else {
					//echo 'Welcome, '.$_SESSION['username']; 
					echo "	<li class='dropdown'>
						        <a href='#' class='dropdown-toggle' data-toggle='dropdown'>$nombre<b class='caret'></b></a>
						        <ul class='dropdown-menu'>
						          <li><a href='myimages.php'>My Images</a></li>
						          <li><a href='myfavourites.php'>My Favourites</a></li>
						          <li><a data-toggle='modal' href='#uploadModal'>Upload an image</a></li>
						          <li role='presentation' class='divider'></li>
						          <li><a href='log_out.php'>Log out</a></li>
						        </ul>
						      </li>";
				}

		  	?>
		  	</ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="starter-template">