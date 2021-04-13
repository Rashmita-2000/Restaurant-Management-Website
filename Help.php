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
        <title>Help</title>
        <link rel="stylesheet" href="myweb.css">
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Help</title>
  </head>
  <body>
    <h1 class ="logo">HELP DESK!</h1>
    
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
              <a class="nav-link" href="Home.php">Home<span class="sr-only">(current)</span></a>
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
                <a class="nav-link" href="AboutUs.php">About us</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Help</a>
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
        <img src=https://i.pinimg.com/originals/a4/9a/ff/a49aff81d3ff255731c5a2d8a22150a2.jpg alt="Paris" height=50% width=100%>
        <div class="centered">We are here to help you!</div>
             <div class="container">
              <div class="card-body">
              <div class="logo">FAQs for customers<br>Have a question and need some help? Check out some of our most frequently asked questions below.<br>

                  Please view our Terms and Conditions for the supply of products for more information.<br>
                  
                  If you still can’t find the answer you’re looking for, contact us and we'll be happy to help.</p></div>
              <p><div class="help"><div class="help1">How is Collectiv Food different to other suppliers?</div><br>
                  There are a few ways we are different:<br>
                  
                  We source directly from food producers and farms, cutting out any middle men<br>
                  
                  We use an innovative logistics model to get products to customers faster and fresher than other suppliers<br>
                  
                  We are tech-driven, half of our staff is part of the technology team, and we are building best-in-class tools to support our customers<br>
                  
                  We have a very proactive customer service team, which reacts quickly to changes in requirements and to resolve issues<br><br>
                  <div class="help1">How is Collectiv Food different to procurement consultancies?</div><br>
                  We own our supply chain and logistics and we take title of products at the source and handle all deliveries from the producer through to the customer. We will do the work of a typical procurement consultancy but we will do it free of charge. We only ask that, in return, you provide fair feedback on the products and the service, and - if
                   you like the samples you receive - you start to buy through us from our producer partners, who work really hard to meet your requirements.<br><br>
                   <div class="help1">How does the service work exactly?<br></div>
                   The process we typically run through is as follows:<br>
                   
                   We will spend some time understanding your operation and food preferences<br>
                   
                   We will work with you to gather all your specific product requirements<br>
                   
                   Our team will research the best options to fit these product requirements from within our extensive network<br>
                   
                   We will present these options back to you and have a discussion around particular features, such as price or provenance<br>
                   
                   You will select samples of the products you believe will fit the bill<br>
                   
                   Once sampled and happy, we will work together to finalise a trading agreement for the selected products<br>
                   
                   Once signed off, we will start delivering to your required locations!<br><br>
                   <div class="help1">What kind of products can I buy?</div><br>
      We specialise in sourcing proteins (meat, seafood, and plant-based). In each of these categories, we have a wide range of products available from within our network of producers. For customers that are trading with us on these lines, we can potentially source other products such as dairy, 
      eggs and beverages, to try and help you consolidate your basket as much as possible.<br><br>
      <div class="help1">Are there any extra costs?<br></div>
      No. The price you receive from us is the final price agreed and takes into account your specified delivery requirements and volumes.<br>
      Will I receive options to help me choose the product (s) I want?<br>
      Yes, definitely. By leveraging our market expertise, we’re happy to discuss and present alternative options based on different factors such as provenance and delivery methods. Once you’ve shortlisted the products you’re interested in, we will arrange samples for you to test in your kitchen.
      <br><br>
      <div class="help1">Do you credit check customers?<br></div>
      We gather as much information as we can about each customer prior to trading. This can include credit checks but also reputation checks and customer feedback.
       This is particularly relevant if exceptional payment terms are required (e.g. more than the standard 30 days).
      
                   </div></p>
              </div>
            </div>
        
    </body>
</html>