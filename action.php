<?php
	include('database.php');
	include('function.php');
// if users hit Change to level 1 button;  
if(isset($_POST['increasebtn'])) {  
    
// set $username var
 $dish_id = $_GET['id'];
 echo '<p class="success">' .$dish_id.' has been updated !</p>';
 //$sql = "select * FROM menu where dish_name="; 
 //$result = $con->query($sql); 
 $qty = $_POST['increase'];
 //$rows=$result->fetch_assoc()

// update user in that row to level 1 in database
$updateLevel_1 = mysqli_query($con,"UPDATE menu SET status=$qty WHERE id=$dish_id");


// echo success message and redirect
echo '<p class="success">' .$dish_id.' has been updated !</p>';
//header('refresh:1;url=admin_menu.php');

}


?>