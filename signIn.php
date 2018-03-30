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
	<?php include "standardHeader.php";?>



<div class="row col-md-8 col-md-offset-2 registeration">

<div class="registerInner">
        <div class="col-md-6 signUp">
            <h3 class="headerSign">Sign Up</h3>
            <form action="signUpSubmit.php" method="post">


                <div class="form-group">
                    <input class="form-control" type="text" name="name" id="name" placeholder="NAME" required= "">
                </div>

                <div class="form-group">
                    <input class="form-control" type="text" name="surname" id="surname" placeholder="SURNAME" required = "">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="email" id="email" placeholder="YOUR EMAIL" required = "">
                </div>

                <div class="form-group ">
                    <input class="form-control" type="password" name="password" id="password" value="" placeholder="PASSWORD" required = "">
                </div>
                <div class="form-group">
                    <label for="birthday" class="darktext">Birthday</label>
                    <input class="form-control" type="date" name="birthday" id="birthday" value="" required = "">
                </div>

                <button type="submit" class=" signbuttons btn btn-primary">Sign Up</button>

            </form>
        </div>



        <div class ="col-md-6">
            <h3 class="headerSign">Sign In</h3>
            <form action="signInSubmit.php" method="POST">

                <div class="form-group">
                    <input class="form-control" type="text" name="email" id="email" placeholder="YOUR EMAIL">
                </div>

                <div class="form-group">
                    <input class="form-control" type="password" name="password" id="password" placeholder="PASSWORD" value="">
                </div>

                <button type="submit" class="signbuttons btn btn-primary">Sign In</button>


            </form>


        </div>

</div>

</div>

</body>
</html>
