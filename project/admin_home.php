<?php 
  session_start(); 
  include('database.php');
  include('function.php');
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: admin_login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: admin_login.php");
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="myweb.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>
    <img src=Capture.PNG alt="Paris" class="center">

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#">
            <img src="https://cms-assets.tutsplus.com/uploads/users/2273/posts/32688/image/Restaurant%20Logo.jpg" width="30" height="30" alt="" loading="lazy">
          </a>
        <!--<a class="navbar-brand" href="#">WELCOME!</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_menu.php">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_orders.php">Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_customer.php">Customers</a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Admin
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="logout.php">Logout</a>
                
              </div>
            </li>
           
            
            <!--<li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>-->
          </ul>
        </div>
      </nav>
      <a>              
        <img src="https://static1.squarespace.com/static/4f6792f624ac778428aca39d/4f760d4b6a9b61f6cc2748c3/57fe975e8419c2b0f3affeb7/1476817403449/chownow-blogpost-v3-lgonzalez.jpg?format=1500w" width=100%>
    </a>
    <div class="logo1" >
  <p><b> Should'nt all of us be living to eat?!!YUMM!<br>Find your nearest store in the list below</b></p> </p>
</div>
      <div class="row row-cols-1 row-cols-md-3">
        <div class="card" style="width: 25rem;">
          <div class="card-body">
            <h5 class="card-title"><b>BELVEDERE SQUARE</b></h5>
            <p class="card-text"> Koramangala, 5th Block, Near BDA Complex Koramangala 3 Block,<br> Koramangala Bengaluru,<br> Karnataka 560034.</p>
            <p class="card-text">Contact no.9876540245.</p>
            </div>
        </div>

        <div class="card" style="width: 10rem;">
          <div class="card-body">
            <h5 class="card-title">BLOUBERG</h5>
  
            <p class="card-text">5th main, Near HDFC Bank,<br> Vijay Nagar Bengaluru,<br> Karnataka 560040<br></p>
              <p class="card-text">Contact no.8765402451.</p>
            </div>
        </div>
        <div class="card" style="width: 10rem;">
          <div class="card-body">
            <h5 class="card-title">CAPE TOWN</h5>
            
            <p class="card-text"> 15th Main Rd, West Of Chord Road, 3rd Stage,<br> Rajajinagar Bengaluru,<br> Karnataka 560010</p>
              <p class="card-text">Contact no.9865890245.</p>
            </div>
        </div>
      </div>
      <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Add font awesome icons -->
<footer>
  <p><b>Contact us</b>
    <a href="https://www.facebook.com/rashmita.barick.90" class="fa fa-facebook"></a>
    <a href="https://www.facebook.com/rashmita.barick.90" class="fa fa-twitter"></a>
    <a href="https://www.linkedin.com/in/rashmita-barick-70a853185/" class="fa fa-linkedin"></a>
    </p>
</footer>
    
  </body>
</html>