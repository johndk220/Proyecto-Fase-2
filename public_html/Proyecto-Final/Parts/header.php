<!doctype html>

<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html;" charset="ISO-8859-1"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sports Masters</title>

<form>
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
   <?php
if (!isset($loggedUser)) {
?>
      
 <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample10">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Sports Masters</a>
            </li>
           <li class="nav-item">
             <a class="nav-link" href="index.php?a=contacto">Contact Us</a>
            </li>
          </ul>
        </div>
      
     <?php
} else {
 ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample10">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php"><h4>Sports Masters</h4><span class="sr-only">(current)</span></a>
            </li>
           
            
           <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle" href="" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Deportes</a>
              <div class="dropdown-menu" aria-labelledby="dropdown10">
                <a class="dropdown-item"  href="index.php?a=Tennis">Tenis</a>
                <a class="dropdown-item"  href="index.php?a=baloncesto">Baloncesto</a>
                <a class="dropdown-item"  href="index.php?a=baseball">Beisboll</a>
                <a class="dropdown-item" href="index.php?a=volley">Voleibol</a>
              </div>
            </li>
           
           
         
          
          
          
          </div>
       
         
           
          </div>
       
       
      
<?php
}
?>
<?php
if (!isset($loggedUser)) {
?>
  
<?php
}
else{?>
  <div class=" btn btn-group justify-content-end" id="navbarsExample10">
          <ul class="navbar-nav">
            
        <li class=" dropdown">
             <?php
              echo '<a class="nav-link dropdown-toggle" href="" id="dropdown10" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="true">' . $loggedUser->username . '</a>';
              ?>
       
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown10">
                <a class="dropdown-item"  href="index.php?a=profile">Ver Perfil</a>
                     <a class="dropdown-item"  href="index.php?a=entrenador">Contactar Entrenador</a>
                      <div class="dropdown-divider"></div>
                <a class="dropdown-item  "  href="index.php?a=logout">Cerrar Sesión</a>
              </div>
            </li>
          </ul>
        </div>
 
 <?php
}
?>
        </form>
     
    </nav>

    <main role="main" class="container">
     <br>
