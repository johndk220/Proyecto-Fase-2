<?php
//$uname = (isset($_POST['username'])) ? $_POST['username'] : '';
$uname = $_POST['username'] ?? '';
?>


    
<div>
  <div class="row">
    <div class="col-sm-4">
      &nbsp;
    </div>
    <div class="col-sm-4">
      <form method="post" action="index.php?a=doLogin">
       <body class="text-center">
    <form class="form-signin">
      <img class="mb-4" src="https://78.media.tumblr.com/c68402e99756b1bad08650ee83e9ea5f/tumblr_p42ojfJKgG1rcn198o1_1280.png" alt="" width="200" height="200">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="username" class="sr-only">Username</label>
      <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Enter username" value="<?php echo $uname; ?>">
    <div style="height: 5px;font-size:1px;">&nbsp</div>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" class="form-control"  name="password" placeholder="Password">
      <div class="checkbox mb-3">
      
      </div>
      <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
    </div>
    <div class="col-sm-4">
      &nbsp;
    </div>
  </div>
</div>
