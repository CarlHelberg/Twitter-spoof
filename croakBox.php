<?php
?>
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
<div class="form-group">
<form method ="POST" action ="croakSubmit.php" >
	<input type = "text" name = "croakText" id ="croakTextId" placeholder = "TYPE YOUR CROAK HERE!" class="form-control" >
	<button type = "submit" id ="croakTextSubmit" name ="croakTextSubmitId" class=" signbuttons btn btn-primary" ><strong>Croak!</strong></button>
</form>
</div>
</body>
</html>
