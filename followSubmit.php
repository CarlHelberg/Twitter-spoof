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


	$stmt = $mysqli->prepare("INSERT INTO followers (id, following) VALUES (?, ?)");
	$stmt->bind_param("ss", $_SESSION['userId'], $_SESSION['followTarget']);
	$stmt->execute();
	$stmt->free_result();

    $stmt->close();
echo "<script>location.href = 'index.php' </script>";

?>
