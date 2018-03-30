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

$query = "SELECT following FROM followers WHERE id = '$_SESSION[userId]'";
$result = $conn->query($query);
?><div class = '' style = ''><?
echo "<div class = 'leftBanner panel panel-primary'><div class = ' panel-heading'>Here's some add space</div></div>";
echo "<div class = 'rightBanner panel panel-primary'><div class = ' panel-heading'>Here's some add space</div></div>";

	if ($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){

			foreach ($row as $entry){
				$query3 = "SELECT croak,date_posted FROM croaks WHERE id = '$entry' ";
				$result3 = $conn->query($query3);

				$query2 = "SELECT first_name,last_name FROM users where id = '$entry' ";
				$result2 = $conn->query($query2);

					while ($row2 = $result2->fetch_assoc()){

						while ($row3 = $result3->fetch_assoc()){
							?>
							<?
						echo  "<div class = 'containsAll panel panel-primary'>
								<div id ='newsFeedBlock panel'>
								<div class = ' innerHeader panel-heading'><strong>" . $row2['first_name'] . " " . $row2['last_name'] . "</strong></br></div>"  .
						 "<html> <div > ". "Posted: " . '<html> <strong>"' .  $row3['croak'] . '"</html></strong>' . " " .
						 "<div  class='newsFeedDate'> " . "On: " . $row3['date_posted'] .  "</div> </div> </div></div> </br>" ;
						}
					}
			}
						?>
						<?
		}
	}
	if ($result->num_rows <= 0){
echo "Nobody you follow has made any Croaks.";

	}
$conn->close();
?></div>
</body>
</html>
