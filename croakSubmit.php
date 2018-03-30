<?php

session_start();

  DEFINE('DB_USERNAME', 'root');
  DEFINE('DB_PASSWORD', 'root');
  DEFINE('DB_HOST', 'localhost');
  DEFINE('DB_DATABASE', 'frogger');
  DEFINE('DB_TABLE', 'croaks');

  $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }
$croak = $_POST['croakText'];
$datePosted = date('Y/m/d H:i:s');

$stmt = $mysqli->prepare("INSERT INTO croaks (id, croak, date_posted) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $_SESSION['userId'], $croak, $datePosted);

if ($stmt->execute() == TRUE){
	echo "<script>location.href = 'index.php' </script>";
}

else{
	echo "that didn't work";
}

$stmt->close();

?>
