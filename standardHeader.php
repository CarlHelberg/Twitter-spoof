<?php


?>


	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><strong>Frogger</strong></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="signIn.php">Sign In</a></li>
      <li><a href="about.php">About</a></li>
    </ul>
    <form class="navbar-form navbar-left" method = "POST" action = "search.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name ="searchBox">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</nav>
