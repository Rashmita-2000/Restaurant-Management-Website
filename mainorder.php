<?php
	include('database.php');
	include('function.php');
 // Using database connection file here
 if(isset($_POST["proceedtopay"]))  
 { 
     redirect('mainorder.php')
 }
 ?>