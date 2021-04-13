<?php
include('database.php');
include('function.php');
include('server.php');
if (isset($_SESSION['customername'])) {
	echo '<script>alert("Warning!! Please do not refresh the page. You will be redirected after 10 seconds. Kindly save the bill")</script>';
    $uname= $_SESSION['customername'];
    $idquery="select * from `customer` where `username`='$uname'";
    $result = mysqli_query($con, $idquery);
    $val=mysqli_fetch_array($result);
    $uid= $val['id'];
    //echo $val['address'];
    //echo $val['phno'];
    $order="select * from `orderplaced` where `user_id`='$uid' and status=0";
    $result2 = mysqli_query($con, $order);
    $orders=mysqli_fetch_array($result2);

}
?>
<html>
<script type="text/javascript">
    document.oncontextmenu = disableRightClick;

    function disableRightClick(event)
    {
        event = event || window.event;

        if (event.preventDefault)
        {
            event.preventDefault();
        }
        else
        {
            event.returnValue = false
        }
    }
</script>
<script>
$("bill.php").submit(function(e) {
    e.preventDefault();
});
</script>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="stylesheet" href="style.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
		<script src="script.js"></script>
	</head>
	<body>
		<header>
			<h1>Invoice</h1>
			<address>
				<p><?php echo $uname?></p>
				<p><?php echo $val['address']?></p>
				<p><?php echo $val['phno']?></p>
			</address>
			<span><img alt="" src="http://www.jonathantneal.com/examples/invoice/logo.png"><input type="file" accept="image/*"></span>
		</header>
		<article>
			<h1>Recipient</h1>
			<address >
				<p>PERFECT HUNGER TREAT</p>
			</address>
			<table class="meta">
				<tr>
					<th><span >Invoice #</span></th>
					<td><span ><?php echo $orders['id']?></span></td>
				</tr>
				<tr>
					<th><span >Date</span></th>
					<td><span ><?php echo $orders['order_date']?></span></td>
				</tr>
				<tr>
					<th><span>Amount Due</span></th>
					<td><span id="prefix" >Rs.</span><span><?php echo $orders['purchase_amount']?></span></td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >Item</span></th>
						<th><span >Quantity</span></th>
						<th><span >Price</span></th>
					</tr>
				</thead>
				<tbody>
                <?php
				$sql = "select * FROM orderitems i,orderplaced o 
						where o.id=i.orderid
						and i.user_id='$uid'
						and o.status=0";
                $re = $con->query($sql);
                while($rows=$re->fetch_assoc()) 
				{ 
					$a=$rows['orderid'];
					$b=$rows['dish_name'];
					$pricequery="select * from orderitems where orderid='$a' and dish_name ='$b' and user_id='$uid'";
	  				$res = mysqli_query($con, $pricequery);
	  				$val2=mysqli_fetch_array($res);
                   ?>
					<tr>
						<td><span ><?php echo $rows['dish_name'];?></span></td>
						<td><span ><?php echo $rows['qty'];?></span></td>
						<td><span >Rs. </span><span><?php echo $val2['price']?></span></td>
					</tr>
                    <?php
				}
				$update = mysqli_query($con,"UPDATE orderplaced set `status`=1  WHERE `user_id`=$uid;");
				header( "refresh:10;url=dummyadd.php" );
                    ?>
				</tbody>
			</table>
	</body>
</html>