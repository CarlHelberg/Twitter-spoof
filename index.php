<!DOCTYPE html>
<html>
<head>
	<title>Frogger! Like twitter, but frogs!</title>
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel = "stylesheet" href = "Css/style.css" type ="text/css">
</head>

<body>
	<?php

	session_start();
 			if ($_SESSION['loggedIn'] == YES){
 				include "userHeader.php";
 				include "croakBox.php";


 			}

 			else {
 				include "standardHeader.php";
 				echo '<div class="text-center"><h1><strong>Please sign in for full functionality!</strong></h1></div>';

 			}

 			echo'

				  <div class="container">

				    <div id="carousel" class="carousel slide" data-ride="carousel">
				      <!-- Indicators -->
				      <ol class="carousel-indicators">
				        <li data-target="#carousel" data-slide-to="0" class="active"></li>
				        <li data-target="#carousel" data-slide-to="1"></li>
				        <li data-target="#carousel" data-slide-to="2"></li>
				      </ol>

				      <!-- Wrapper for slides -->
				      <div class="carousel-inner">
				        <div class="item active">
				          <img src="Images/fish.jpg" alt="...">
				          <div class="carousel-caption">
				            <h2>Croaks are our version of TWEETS!</h2>
				          </div>
				        </div>
				        <div class="item">
				          <img src="Images/dragonfly.jpg" alt="...">
				          <div class="carousel-caption">
				            <h2>This dragonfly is not actually related to a dragon!</h2>
				          </div>
				        </div>
				        <div class="item">
				          <img src="Images/ducks.jpg" alt="...">
				          <div class="carousel-caption">
				            <h2>Look at these menacing water-doves!</h2>
				          </div>
				        </div>
				      </div>

				      <!-- Controls -->
				      <a class="left carousel-control" href="#carousel" data-slide="prev">
				        <span class="glyphicon glyphicon-chevron-left"></span>
				        <span class="sr-only">Previous</span>
				      </a>
				      <a class="right carousel-control" href="#carousel" data-slide="next">
				        <span class="glyphicon glyphicon-chevron-right"></span>
				        <span class="sr-only">Previous</span>
				      </a>
				    </div>

				  </div>


 			';
 	mysql_close();

 	?>

</body>
</html>
