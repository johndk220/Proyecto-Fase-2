<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">User Profile Card</h2>

<div class="card">
 <?php
  echo '<center><img src= "https://intropulse.com/images/default.png"' . ' style="width:50%"></center>';
  echo  $loggedUser->username;
  echo '<h1>' . $loggedUser->first_name . '<br>' . $loggedUser->last_name . '</h1>';
  ?>
  <p class="title">baloncesto, tennis , volleyball</p>
  <p></p>
  <div style="margin: 24px 0;">
    <a href="index.php?a=volley"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
  <?php
  
 echo '<p><button>'. $loggedUser->email .'</button></p>';
  echo '<p><button>'. $loggedUser->id .'</button></p>';
  
  ?>
 <p><button>Contact</button></p>
 <p><button>Crear Cita</button></p>
 </div>
</body>
</html>

