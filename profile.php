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
	$host="localhost";
	$username="root";
	$db_password="root";
	$db_name="frogger";
	$tbl_name="users";

 	session_start();

 	include "userHeader.php";

$searchValue = $_POST['searchBox'];

$conn = new mysqli($host, $username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM users WHERE id = '$_SESSION[userId]'";
$result = $conn->query($query);

$query2 = "SELECT following FROM followers WHERE id = '$_SESSION[userId]'";
$result2 = $conn->query($query2);

$query3 = "SELECT following FROM followers WHERE following = '$_SESSION[userId]'";
$result3 = $conn->query($query3);



	if ($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){
			?><div class="text-center";<?
				?><div class = "card"><div class = 'card-block'><?
				echo "<html> <div class = 'card-title'> <h1> " . $row['first_name'] . " " . $row['last_name'] . "</div></h1>";
				echo "<div class = 'card-text'></div> <h2>". $row['email_address'] . "</h2><html> <form method ='POST' action ='#'>
																										<button type = 'submit' id ='changeEmail' name ='changeEmailButton' class='btn btn-default'><strong>Change!</strong></button>
																										</form>";
				echo "<h3>Your are following: </h3>" . " <h2> " . $result2->num_rows . " " . "people!" . "</h2></br>";
				echo "<h3>Your are being followed by: </h3>" . " <h2> " . $result3->num_rows . " " . "people!" . "</h2>";
				?></div></div>
			</div>;<?
		}
	}
$conn->close();
?>
</body>
</html>
