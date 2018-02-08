<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SportsT</title>


    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
   <?php
if (!isset($loggedUser)) {
?>
      
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample10">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">SportsT</a>
            </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>
        </div>
      
     <?php
} else {
 ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample10">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php"><h4>SportsT</h4><span class="sr-only">(current)</span></a>
            </li>
           <li class="nav-item">
             <a class="nav-link disabled" href="index.php?a=profile">Profile</a>
            </li>
           <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Deportes</a>
              <div class="dropdown-menu" aria-labelledby="dropdown10">
                <a class="dropdown-item"  href="index.php?a=Tennis">Tennis</a>
                <a class="dropdown-item"  href="index.php?a=baloncesto">Baloncesto</a>
                <a class="dropdown-item"  href="index.php?a=baseball">Baseball</a>
                <a class="dropdown-item" href="index.php?a=volley">Volleyball</a>
              </div>
            </li>
          </ul>
        </div>
      
<?php
}
?>
<?php
if (!isset($loggedUser)) {
?>
          <a class="btn btn-outline-info my-2 my-sm-0" href="index.php?a=register">Register</a>
          &nbsp;&nbsp;
          <a class="btn btn-outline-success my-2 my-sm-0" href="index.php?a=login">Login</a>
<?php
} else {
  
  echo '
  
  
  <b><span  class="text-success">Hi ' . $loggedUser->username . '</span></b>&nbsp';
?>
          <a class="btn btn-outline-danger my-2 my-sm-0" href="index.php?a=logout">Logout</a>
<?php
}
?>
        </form>
      </div>
    </nav>

    <main role="main" class="container">
     <br>
