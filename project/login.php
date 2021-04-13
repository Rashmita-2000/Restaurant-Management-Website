<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style>
      .img-container {
		display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
	  }
	  </style>
  <link rel="stylesheet" type="text/css" href="newstyle.css">
</head>
<body>
<img src=Capture.PNG alt="Paris" class="img-container">
<div class="Log">
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  <center><a href="mainhomepage.php">Go back</a><center>
</div>
</div>
</body>
<script>
            document.onkeydown = function (t) {
             if(t.which == 9){
              return false;
             }
            }
            </script>
</html>