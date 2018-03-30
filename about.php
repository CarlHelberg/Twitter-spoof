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

 				include "userHeader.php";


 			echo'
				 <h1 class="text-center"> Welcome to <strong>FROGGER!</strong></h1>
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
				            <h2>Jet fuel cannot melt steel beams!</h2>
				          </div>
				        </div>
				        <div class="item">
				          <img src="Images/ducks.jpg" alt="...">
				          <div class="carousel-caption">
				            <h2>Pheasant Pluckers!</h2>
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
				  <h2 class="text-center"> <strong>FROGGER!</strong> is a site built to immitate its feathered friend, Twitter! </h2>
				  <div class="text-center"> This site was purely built to learn and improve skills in Javascript, mySQL/mySQLI and PHP. </br>
				  							Some of the key features of <strong>FROGGER!</strong> is that you can follow, and be followed by, people and see them on your news feed!</br>
				  							This is only a template and learning curve, and as such, things like the profile page is very incomplete, but could be built on in the future.</br>
				  </div>

 			';
 	mysql_close();

 	?>


</body>
</html>
