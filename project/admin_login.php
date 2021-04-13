<?php
session_start();
include('database.php');
include('function.php');
$msg="";
if(isset($_POST['login_user'])){
	$username=get_safe_value($_POST['username']);
	$password=get_safe_value($_POST['password']);
	
	$sql="select * from admin where username='$username' and password='$password'";
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_assoc($res);
		$_SESSION['username']='yes';
		redirect('admin_home.php');
  }
  else if($username==""||$password==""){
		echo '<script>alert("Please enter details")</script>';
		redirect('admin_login.php'); 
  }
  else{
	echo '<script>alert("Username or password doesn\'t match")</script>'; 
	redirect('admin_login.php');
}
  
}
?>
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
	 
  <form method="post" action="">
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
  </form>
</div>
</div>
</body>
<center><a href="mainhomepage.php">Go back</a><center>
<script>
            document.onkeydown = function (t) {
             if(t.which == 9){
              return false;
             }
            }
            </script>
</html>