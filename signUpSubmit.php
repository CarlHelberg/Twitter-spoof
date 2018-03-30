<?php

  DEFINE('DB_USERNAME', 'root');
  DEFINE('DB_PASSWORD', 'root');
  DEFINE('DB_HOST', 'localhost');
  DEFINE('DB_DATABASE', 'frogger');
  DEFINE('DB_TABLE', 'users');

  $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }

$firstName = $_POST['name'];
$lastName = $_POST['surname'];
$dateOfBirth = $_POST['birthday'];
$emailAddress = $_POST['email'];
$password = $_POST['password'];


$stmt = $mysqli->prepare("INSERT INTO users (first_name, last_name, date_of_birth, email_address, password) VALUES (?, ?, ? , ?, ?)");
$stmt->bind_param("sssss", $firstName, $lastName, $dateOfBirth , $emailAddress, $password);


if ($stmt->execute()) {

  $_SESSION['loggedIn'] = YES;
         echo "<script>location.href = 'index.php' </script>";
} else {

      echo "Error: " . $sql . "<br>" . mysql_error();
}
$stmt->close();


$mysqli->close();



?>
