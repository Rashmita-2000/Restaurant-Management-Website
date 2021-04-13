<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
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
<div class="img-container">
<img src=Capture.PNG alt="Paris">
</div>
	
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" id="new" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
	<div class="input-group">
  	  <label>Phone Number</label>
  	  <input type="text" name="phno">
  	</div>
	  <div class="input-group">
  	  <label>Address</label>
  	  <input type="text" name="address">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
	
  </form>
  <center><a href="mainhomepage.php">Go back</a><center>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
  $(document).ready(function(){
	  $('#new input[type="text"]').blur(function(){
		  if(!$(this).val()){
			  $(this).focus();
		  }
	  });
  });
  </script>
  <script>
            document.onkeydown = function (t) {
             if(t.which == 9){
              return false;
             }
            }
            </script>
</html>
