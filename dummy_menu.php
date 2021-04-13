<?php
$con=mysqli_connect('localhost','root','','login');
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

    <title>Myrestaurant</title>
    <style>
    .card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
}
.card-image {
 
  width: 300px;
  height: 300px;
  display: flex;
  justify-content: center;
  flex-direction: row;
}
</style>
  </head>
  <body>
    <h1 class ="logo">MENU</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

  <?php  
  $query = "SELECT * FROM menu_table group by category"; 
  $result = mysqli_query($con, $query);  
    while($row = mysqli_fetch_array($result))  
    { 
      $cat=$row['category'];
    ?> 
    <h1 class ="logo1"><?php echo $row['category']?></h1>
    <div class="container" >
    <?php  
    $query1 = "SELECT * FROM menu_table where category='$cat'"; 
    $result2 = mysqli_query($con, $query1);  
    $count=0;
    while($rows = mysqli_fetch_array($result2))  
    { 
      if($count>2){ $count=0;?>
      </div>
      <div class="container">
        <div class="col mb-4">
          <div class="card h-100">
          <img src="<?php echo 'data:image/jpeg;base64,'.base64_encode($rows['image'] );?>" height="250" width="250" class="card-img-top" />
          <div class="card-body">
          <h5 class="card-title"><?php echo $rows['dish_name']?></h5>
          <p class="card-text"><?php echo $rows['dish_desc']?></p>
          <div class= abc >Rs. <?php echo $rows['price']?></div>
          <a href="#" class="card-link">Add</a>
          </div>
          </div>
    </div>
    
      <?php  
      }
      else{?>
        <div class="col mb-4">
          <div class="card h-100">
          <img src="<?php echo 'data:image/jpeg;base64,'.base64_encode($rows['image'] );?>"height="250" width="250"  class="card-img-top" />
          <div class="card-body">
          <h5 class="card-title"><?php echo $rows['dish_name']?></h5>
          <p class="card-text"><?php echo $rows['dish_desc']?></p>
          <div class= abc >Rs. <?php echo $rows['price']?></div>
          <a href="#" class="card-link">Add</a>
          </div>
          </div>
    </div>
    <?php
  }
    $count=$count+1;
     }
    
    ?>
  </div>
<?php
    }
    ?>