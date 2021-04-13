<?php
	include('database.php');
	include('function.php');
	include('server.php');
	if (isset($_SESSION['customername'])) 
	{
	  $uname= $_SESSION['customername'];
	  $idquery="select id from `user` where `username`='$uname'";
	  $result = mysqli_query($con, $idquery);
	  $val=mysqli_fetch_array($result);
	
	if(isset($_POST["ok"]))
	  {

	  $dish = $_POST["dishhidden"];
	  $uid=$val['id'];
	  $qtyquery="select qty from order_items where dish_name='$dish' and user_id='$uid'";
	  $res = mysqli_query($con, $qtyquery);
	  $val2=mysqli_fetch_array($res);
	  if($val2==0){
		$qty=$val2['qty']+1; 
	  }
	  else
	  $qty=$val2['qty'];
	  if($val2)
	  {
	  $qty2=$qty+1;
	  $update=mysqli_query($con,"UPDATE order_items set `qty`='$qty2' where dish_name='$dish'");
	  redirect('menu.php');
	  }
	  
	  else
	  {
	  $insert = mysqli_query($con,"INSERT INTO order_items(qty,user_id,dish_name) VALUES ('$qty','$uid','$dish');");
	  redirect('menu.php');
	  }
	  
     
	}
	
	}
	mysqli_close($con);	
?>