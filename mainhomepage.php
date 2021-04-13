<?php
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Perfect Hunger treat</title>
    <style>
    body {
      
width:100%;
background-image:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url("https://static1.squarespace.com/static/4f6792f624ac778428aca39d/4f760d4b6a9b61f6cc2748c3/57fe975e8419c2b0f3affeb7/1476817403449/chownow-blogpost-v3-lgonzalez.jpg?format=1500w");
background-size:cover;
}
.form-group{
			margin:0 auto;
			width:210px;
            top:100px;
		}
        .h1{
    
  text-transform: uppercase;
  color: white;
  font-size:19px;
  font-style: italic;
  font-style: oblique;
  font-weight: bold;

   } 
   .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
   
    </style>
    <img src=Capture.PNG alt="Paris" class="center">

  </head>
  <body>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
<form action="login.php" method="POST">
<div class="form-group">
  <br><br><br<br><br><br><br><br<br><br><input type="image" name="user" src="user.png" style="border-radius: 28px"; width="150" height="150">
  <div class="h1"><b>Login as user<b></div>
  </div>
</form>
<form action="admin_login.php" method="POST">
<div class="form-group">
<br><br><br<br><br><br><br><br<br><input type="image" name="admin" src="admin.JPG" style="border-radius: 28px"; width="150" height="150">
<div class="h1"><b>Login as admin<b></div>
  </div>
</form>

  </body>
</html>