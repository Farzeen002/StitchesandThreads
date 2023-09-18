<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>STITCHES AND THREADS</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css">
	<link rel="stylesheet" href="css/jcf.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" type="text/css" href="css/flaticon.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/color.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<style type="text/css">
	input[type="file"].form-control
	{
	    box-shadow: none;
	    border-radius: 4px;
	    background: none;
	    height: 48px;
	    padding: 8px 15px;
	    width: 100%;
	}
	input[type="tel"].form-control
	{
	    box-shadow: none;
	    border-radius: 4px;
	    background: none;
	    height: 48px;
	    padding: 8px 15px;
	    width: 100%;
	}
	input[type="text"].form-control
	{
	    color: white;
	}
	input[type="email"].form-control
	{
	    color: white;
	}
	input[type="password"].form-control
	{
	    color: white;
	}

	label
	{
	    color: white;
	}
	input,
input::-webkit-input-placeholder {
    font-size: 15px;
    line-height: 3;
    color: white;
}


	</style>
</head>
<body style="background-image: url('../photos/adminbg.jpg'); background-size:100%; background-repeat: no-repeat; ">
	<div id="wrapper">
		<div id="main" class="haslayout padding-section">
			<a  href="../index.php"><button style="margin-left:850px;width:250px;" type="submit" class="theme-btn btn-small" >Home</button></a>
			<div class="container">
				<form class="login-form adform" action="" method="POST">
					<fieldset class="row">
					<div class="col-md-3"></div>
						
						<div class=" col-md-6 col-sm-6 col-xs-6 col-offset-sm-3 reg-customers">
							<div class="border-left">
								<h2 style="color:white;">Admin/staff Login</h2>
							</div>
							<div class="form-group" style="color: white;">
								<input name="type" class="" type=radio value="Admin" required="">Admin
				    	<input type="radio" name="type" value="Staff" required="">Staff</option>
				    </select>
								<!-- <select name="type" class="form-control">
				    	<option value="Admin">Admin</option>
				    	<option value="Staff">Staff</option>
				    </select> -->
							</div>
							<div class="form-group">
								<label>User Name</label>
								<input type="text" class="form-control" name="aemail"  placeholder="Enter the username" autocomplete="off">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="apassword" placeholder="Enter the correct password">
							</div>
						
							<div class="form-group clearfix">
								<button type="submit" class="theme-btn btn-small" name="admin_login">Log In</button>
							</div>
						</div>
						<div class="col-md-3"></div>
					</fieldset>
				</form>
				<?php
                  include('connect.php');
                  if(isset($_POST['admin_login'])){
                  	 $email=$_POST['aemail'];
                  	 $password=$_POST['apassword'];
                  	 $htype=$_POST['type'];
                  	 if($htype=='Admin'){
                  	 	$qry=mysqli_query($con,"SELECT * from tbl_admin where name='$email' and password='$password'")or die(mysqli_error($con));
                  	 $nums=mysqli_num_rows($qry);
                  	 $row=mysqli_fetch_array($qry);
                  	 if($nums==1){
                  	 	
                  	 	$_SESSION['admin_id']=$row['aid'];
                  	 	$_SESSION['admin_name']=$row['name'];
                  	 	echo '<script>alert("admin is logged in");window.location="home.php";</script>';

                  	 }else{
                  	 	echo '<script>alert("failed to login");window.location="index.php";</script>';
                  	 }
	                   	  	

                   	  }else if($htype=="Staff"){
                   	  	$query=mysqli_query($con,"SELECT * from tbl_staff where staff_name='$email' and phone='$password' and type='$htype' ") or die(mysqli_error($con));
                   	  	$nrows=mysqli_num_rows($query);
                   	  	$row=mysqli_fetch_array($query);
                   	  	if($nrows==1)
                   	  	{
                   	  		session_start();
                   	  		$_SESSION['staff_id']=$row['staff_id'];
                   	  		echo '<script>alert("succefull");window.location="../staff/home.php";</script>';
                   	  	}else{
                   	  		echo '<script>alert("failed");</script>';
                   	  	}
                     }                  	 
                  }

				?>
			</div>
		</div>
	</div>
	<script src="js/vendor/jquery-1.11.3.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/custom-form/jcf.js"></script>
	<script src="js/custom-form/jcf.checkbox.js"></script>
	<script src="js/custom-form/jcf.select.js"></script>
	<script src="js/custom-form/jcf.radio.js"></script>
	<script src="js/custom-form/jcf.file.js"></script>
	<script src="js/appear.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="js/gmap3.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>