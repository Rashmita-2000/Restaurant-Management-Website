<?php
include('database.php');
include('function.php');
include('server.php');

if (!isset($_SESSION['customername'])) 
{
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) 
{
  session_destroy();
  unset($_SESSION['customername']);
  header("location: login.php");
}
?>

<html>
    <head>
        <title>About us</title>
        <link rel="stylesheet" href="myweb.css">
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  </head>
  <body>
    <h1 class ="logo">About Us!</h1>
    
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
              <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="menu.php">Menu</a>
            </li>
            <!--<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Help</a>
                <a class="dropdown-item" href="#">Contact Us</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Team</a>
              </div>
            </li>-->
            <li class="nav-item">
                <a class="nav-link" href="#">About us</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="Help.php">Help</a>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION['customername']?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="dummyadd.php">View Cart</a>
                <a class="dropdown-item" href="user_logout.php">Logout</a>
                
              </div>
            </li>
            
            <!--<li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>-->
          </ul>
        </div>
      </nav>
        <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"alt="Paris" height=50% width=100%>
        <div class="centeredAu">“We prepare and serve high quality, simple food, at a great value, in a home-like environment.”</div>
        
            </p>
            <div class="container">
                <div class="card-body">
                    <p>Perfect Hunger treat is an Indian "food on demand" service that was incorporated in 2011. It is one of the brands owned by the online restaurant company, Rebel Foods.<br>
                    Perfect Hunger treat  operates in Dubai and 34 of the largest cities in India and takes customer orders via its mobile app and website. It is the only vertically integrated food business in India and operates all three stages of a "food on demand" business: ordering, distribution and order fulfillment.<br>
                    Perfect Hunger treat receives 10,000 orders a day across India and has recorded a growth rate of 20-25 per cent month-on-month.<br>
                    <h1 class ="logo1">History</h1>
                    Perfect Hunger treat was founded by Rashika.S and Kallol Banerjee and incorporated in 2011. Rashika, an MBA from INSEAD was previously an associate principal at McKinsey & Company in London and Banerjee, holds an MBA from INSEAD and PGDM from IIM Lucknow, previously worked for Bosch in Singapore.<br>
                    <h1 class ="logo1">Funding</h1>Perfect Hunger treat raised its first round of funding of US$5 million (Rs. 30 crore) from Sequoia capital in November 2011, a second round of funding of US$20 million in February 2015 from Lightbox Ventures and Sequoia Capital,and a third round of funding of US$30 million in December 2015 from Russian Internet-focused Investment firm ru-Net, Sequoia Capital and Lightbox Ventures.<br>Faasos has raised over ₹41 crore in April 2017 in an extended Series C round of funding. The investment is led by Lightbox Ventures II, Lightbox Expansion Fund, Sequoia Capital India, ru-Net South Asia, and RB Investments.
                    <h1 class ="logo1">CEO <b>Rashika.S</b></h1></p>
                   <a><img class =ceo src="CEO.jpeg" align=left width=40%></a>
                   <p><div class="ceotext">&nbsp; Rashika believes that food is an integral part of her life.<br><br>&nbsp;&nbsp;She says "Food is not simply stuff that people eat when their hungry. Food is awesome, delicious, inventive, colorful, inspiring, and so much more. A mutual love of food can bring different people together and can make the saddest person feel a little better without even meaning to.<br><br>&nbsp;&nbsp;There's nothing better than having your whole family home around the same table for dinner. Food is a catalyst that brings people together. Having the entire family together at your grandparents' house for Christmas Eve dinner or a Thanksgiving meal, treating a friend to a birthday dinner, or annual family celebrations are perfect ways to keep in touch and connect with your family and friends that you might not see regularly."<br><br>
                    &nbsp;&nbsp;Rashika completed her engineering in Bangalore, India. Later she completed MBA from INSEAD and PGDM from IIM Lucknow, previously worked for Bosch in Singapore. </div></p>
                   <a href="https://www.linkedin.com/in/rashika-suresh-147bb5184/">Founder</a>
                </div>
              </div>
