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
	
		<?php include('header.php');?>
		<!-- Header End -->
		<div id="main" class="haslayout padding-section" style="padding:0px;">
			<div class="container">
				<form  action="" method="POST" enctype="multipart/form-data">
					<fieldset class="row">
					<div class="col-md-3"></div>
						
						<div class=" col-md-6 col-sm-6 col-xs-6 col-offset-sm-3 reg-customers">
							<div class="border-left">
								<h2>Supply Information.....</h2>
							</div>
			
							<div class="form-group">
							<label>Supply Name:</label><br>
							<input type="text" autocomplete="off" class="form-control" name="sname" placeholder="Enter supplier name"> <br>
						</div>

						<div class="form-group">
							<label>Supply Email:</label><br>
							<input type="email" name=semail class="form-control" autocomplete="off" placeholder="Enter supplier email address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" required /
							><br>
						</div>

						<div class="form-group">
							<label>Company:</label>
							<input type="text" autocomplete="off" class="form-control" name="cmp" placeholder="Enter company">
						</div>

						<div class="form-group">
							<label>Phone:</label>
							<input type="tel" class="form-control" name="phone" placeholder="Enter phone number" autocomplete="off" pattern="[5-9]{1}[0-9]{9}+" title="Numbers only" required />
						</div>

						<div class="form-group clearfix">
								<button type="submit" class="theme-btn btn-small" name="submit">SUPPLY ADD</button>
							</div>
						</div>
				

						<div class="col-md-3"></div>
					</fieldset>
				</form>
					</div>
				</div>
	             </div>
<?php			
 include('connect.php');
       $ad_name=$_SESSION['admin_name']; 
		if(isset($_POST['submit']))
        {                      
			$Supname=$_POST['sname'];
			$Supemail=$_POST['semail'];
			$Company=$_POST['cmp'];
			$Phone=$_POST['phone'];
			$qry=mysqli_query($con,"INSERT INTO `tbl_supply`(`supid`, `supname`, `supemail`, `company`, `phone`) VALUES ('','$Supname','$Supemail','$Company','$Phone')")or die(mysqli_error($con));
				if($qry)
		        {
		            echo "<script>alert('information added succefully');window.location='viewsupply.php';</script>";
		        }
		        else
		        {           
		            echo "<script>alert('Failed to add information');window.location='supinfo.php';</script>";
		        }
        }

?>
<?php include('footer.php');?>
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