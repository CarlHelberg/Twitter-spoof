<?php

// $host="localhost";
// $username="root";
// $db_password="root";
// $db_name="frogger";
// $tbl_name="users";

 session_start();

// $link = mysql_connect("$host", "$username", "$db_password")or die("cannot connect");
// mysql_select_db("$db_name",$link)or die("cannot select DB");

  DEFINE('DB_USERNAME', 'root');
  DEFINE('DB_PASSWORD', 'root');
  DEFINE('DB_HOST', 'localhost');
  DEFINE('DB_DATABASE', 'frogger');
  DEFINE('DB_TABLE', 'users');

  $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }

  // echo 'Connected successfully.';

$emailAddress = $_POST['email'];
$password = $_POST['password'];
$_SESSION['loggedIn'];


$query = "SELECT * FROM users WHERE email_address = '$emailAddress' ";

$query2 = "SELECT email_address FROM users WHERE email_address = '$emailAddress'";






    if ($stmt = $mysqli->prepare($query)) {

    /* execute query */
      $stmt->execute();

    /* store result */
      $stmt->store_result();

      $stmt->bind_result($userId,$userFirstName,$userLastName,$userEmail,$userPassword,$userBirthday);
      while ($stmt->fetch()) {
      //just to test printing
      // printf ("%s %s %s %s %s %s\n", $userID,$userFirstName,$userLastName,$userBirthday,$userEmail,$userPassword);
          $_SESSION['userFirstName'] =  $userFirstName;
          $_SESSION['userLastName'] =  $userLastName;
          $_SESSION['userBirthday'] =  $userBirthday;
          $_SESSION['userEmail'] =  $userEmail;
          $_SESSION['userPassword'] =  $userPassword;
          $_SESSION['userId'] =  $userId;

          // echo " variable is " . $userFirstName;

          // $stmt->store_result();
            // echo " variable is " . $userFirstName;
    if ($userEmail !== 0 ){
      if ($userPassword == $password){
          echo "<script>location.href = 'index.php' </script>";
          $_SESSION['loggedIn'] = YES;

          }
        else {
          echo "<script> alert('The credentials you have entered are invalid!') </script>";
            echo "<script>location.href = 'signIn.php' </script>";
          $_SESSION['loggedIn'] = NO;
        }

      }
       /* free result */
        $stmt->free_result();

    /* close statement */
        $stmt->close();
    }



if ($userEmail == 0 ){
  echo "<script> alert('You have entered an invalid email address, please use the sign-up option to create an account!') </script>";
  echo "<script>location.href = 'signIn.php' </script>";
}
}




    //   if(mysqli_num_rows($mysqli,$query) > 0) {
    //  $row = mysqli_fetch_assoc($question);
    //   print_r($row['id']);
    // }

 // if(mysqli_num_rows($mysqli, $query) === 0)
 //   {
 //    echo "Account doesnt exist. Please go back and try again!";
 //    $loggedIn = NO;
 //   }






  // while($row = mysqli_fetch_array($sql)){

  //     $userId = $row['id'];
  //     $userFirstName = $row['first_name'];
  //     $userLastName = $row['last_name'];
  //     $userBirthday = $row['date_of_birth'];
  //     $userEmail = $row['email_address'];
  //     $userPassword = $row['password'];
  //     	if ($userPassword == $password){
  //     		echo "<script>location.href = 'index.php' </script>";
  //     		$_SESSION['loggedIn'] = YES;

  //     	}
  //     	else {
  //     		echo "<script> alert('The credentials you have entered are invalid') </script>";
  //           echo "<script>location.href = 'signIn.php' </script>";
  //     		$_SESSION['loggedIn'] = NO;
  //     	}
  // }



 // $_SESSION['userFirstName'] =  $userFirstName;
 // $_SESSION['userLastName'] =  $userLastName;
 // $_SESSION['userBirthday'] =  $userBirthday;
 // $_SESSION['userEmail'] =  $userEmail;
 // $_SESSION['userPassword'] =  $userPassword;
 // $_SESSION['userId'] =  $userId;

// mysql_close();
 $mysqli->close();


?>
