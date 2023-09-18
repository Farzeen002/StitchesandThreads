 <?php include 'session_user.php';
	include('connect.php');
	if(isset($_POST['cart']))
	{
		$prid=$_POST['prid'];
		$qty=$_POST['qty'];
		$price=$_POST['price'];
		$total=($qty * $price);
		$q=mysqli_query($con,"SELECT * FROM tbl_cart where item_id='$prid' and uid='$user' and status= 
			'in_cart'")or die(mysqli_error($con));
		$w=mysqli_num_rows($q);
		$n=mysqli_fetch_array($q);
		$cartid=$n['cartid'];
		if($w>0){
            $q1=mysqli_query($con,"UPDATE tbl_cart SET qty=qty+'$qty' where cartid='$cartid' ")or die(mysqli_error($con));
            if($q1)
		{

			echo '<script>alert("Added to cart"); window.location="cart.php"; </script>';
		}else
		{
				
				echo '<script>alert("Failed to Add"); window.location="product.php";</script>';
			

		}
			


		}else{
			$sql=mysqli_query($con,"INSERT INTO `tbl_cart`(`cartid`, `item_id`, `uid`, `qty`, `price`, `total`, `date`, `status`) VALUES ('','$prid','$user','$qty','$price','$total',now(),'in_cart')") or die(mysqli_error($con));
		if($sql)
		{

			echo '<script>alert("Added to cart");window.location="itemdetails.php";</script>';
		}else
		{
				
				echo '<script>alert("Failed to Add"); window.location="product.php";</script>';
			

		}

		}
		

		
	}
?>