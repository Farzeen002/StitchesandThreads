<?php include('session.php');?>
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
</head>
<body class="home" style="background-image: url('../photos/IMG-20190326-WA0043.jpg'); background-size:100% 100%; background-repeat: no-repeat; ">
	<div id="wrapper">
		<?php include('header.php');?>
		<div id="main" class="haslayout padding-section" style="padding:0px;">
			<div class="container">
				<form  action="" method="POST">
					<fieldset class="row">
					<div class="col-md-3"></div>
						<div class=" col-md-6 col-sm-6 col-xs-6 col-offset-sm-3 reg-customers">
							<div class="border-left">
								<h2>ADD CATEGORY....</h2>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" required="" name="addtext" placeholder="Enter the category of men or women ">
							</div>
							<div class="form-group clearfix">
								<button type="submit" class="theme-btn btn-small" name="add">ADD</button>
							</div>
						</div>
						<div class="col-md-3"></div>
					</fieldset>
				</form>
		    </div>
		</div>
		<?php
      include('connect.php');
       $ad_name=$_SESSION['admin_name']; 

      if(isset($_POST['add']))
      {
            $adtxt=$_POST['addtext'];
            $qry=mysqli_query($con,"SELECT * from tbl_cate where category_type='$adtxt'")or die(mysqli_error($con));
            $num=mysqli_num_rows($qry);
            if($num>0){
            	echo '<script>alert("category already exits");</script>';
            }else{
            	$sql=mysqli_query($con,"INSERT INTO `tbl_cate`(`cid`, `category_type`) VALUES ('','$adtxt')")or die(mysqli_error($con));
	            if($adtxt)
	            {
	                echo '<script>alert("information added succefully");window.location="home.php";</script>';
	            }
	            else
	            {           
	                echo '<script>alert("Failed to add information");</script>';
	            }  
            }
            
      }

?>
	
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
<?php include('footer.php');?>

</html>