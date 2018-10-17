<?php 
session_start();
require("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title>Flinders Clubhouse</title>
</head>
<body>
	<header>
		<div class="container-fluid">
			<div class="row menucontainer">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<nav class="navbar navbar-default menubar">
							  <div class="container-fluid ">
							    <!-- Brand and toggle get grouped for better mobile display -->
							    <div class="navbar-header">
							      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							        <span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							      </button>
							      <a class="navbar-brand" href="index.php"><img class="logo-img" src="images/FlindersClubhouselogo.png"></a>
							    </div>

							    <!-- Collect the nav links, forms, and other content for toggling -->
							    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							      <ul class="nav navbar-nav navbar-right menulist">
							        <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
							        <li><a href="index.php">HOME</a></li>
							        <li><a href="#">FIND CLUBS</a></li>
							        <li><a href="#">LOOK FOR EVENTS</a></li>
							        <li><a href="#">CONTACT US</a></li>
							        <li><a <?php
							        if (isset($_SESSION['user']))
							        	echo 'href="logout.php">SIGN OUT';
							        else
							        	echo 'href="login.php">SIGN IN';
							         ?></a></li>
							    
							       
							        <!-- <li class="dropdown">
							          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
							          <ul class="dropdown-menu">
							            <li><a href="#">Action</a></li>
							            <li><a href="#">Another action</a></li>
							            <li><a href="#">Something else here</a></li>
							            <li role="separator" class="divider"></li>
							            <li><a href="#">Separated link</a></li>
							            <li role="separator" class="divider"></li>
							            <li><a href="#">One more separated link</a></li>
							          </ul>
							        </li> -->
							      </ul>
							      <!-- <ul class="nav navbar-nav navbar-right">
							        <li><a href="#">Link</a></li>
							        <li class="dropdown">
							          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
							          <ul class="dropdown-menu">
							            <li><a href="#">Action</a></li>
							            <li><a href="#">Another action</a></li>
							            <li><a href="#">Something else here</a></li>
							            <li role="separator" class="divider"></li>
							            <li><a href="#">Separated link</a></li>
							          </ul>
							        </li>
							      </ul> -->
							    </div><!-- /.navbar-collapse -->
							  </div><!-- /.container-fluid -->
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>