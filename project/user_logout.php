<?php
session_start();
include('function.php');
unset($_SESSION['customername']);
redirect('login.php');
?>