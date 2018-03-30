<?php

$host="localhost";
$username="root";
$db_password="root";
$db_name="frogger";
$tbl_name="users";

 session_start();

$searchValue = $_POST['searchBox'];

$conn = new mysqli($host, $username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT first_name, last_name, email_address, id FROM users WHERE CONCAT (first_name, ' ', last_name) = '$searchValue' || email_address = '$searchValue'";
$result = $conn->query($sql);

if($row = $result->fetch_assoc())  {
$_SESSION['followTarget'] = $row['id'];
echo "Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>" . "Email: " . $row["email_address"] .
        																											"</br>" . "</br>" .  "</br>" . "</br>" ;
}


$sql2 = "SELECT following FROM followers WHERE id = '$_SESSION[userId]' AND following = '$_SESSION[followTarget]' ";
$myresult = $conn->query($sql2);

if ($result->num_rows > 0) {

	if ($myresult->num_rows > 0) {

		while($row2 = $myresult->fetch_assoc() ){

			switch ($row2['following']){
				case $_SESSION['followTarget']:
					echo "<html> <form method ='POST' action =''>
					 		<button type = 'submit' id ='followedBadge' name ='followedBadge' class='btn btn-default'><strong>FOLLOWED!</strong></button>
					 		</form>" ;
				break;



				default:
					echo "<html> <form method ='POST' action ='followSubmit.php'>
							<button type = 'submit' id ='followSubmitButton' name ='followSubmitButton' class='btn btn-default'><strong>FOLLOW!</strong></button>
							</form>";

			}

		}
	}

	if ($myresult->num_rows == 0) {
					echo "<html> <form method ='POST' action ='followSubmit.php'>
							<button type = 'submit' id ='followSubmitButton' name ='followSubmitButton' class='btn btn-default'><strong>FOLLOW!</strong></button>
							</form>";
	}

}

	else {
    echo "0 results";
	}

$conn->close();
?>
