<?php include('session.php');?>
 
<?php
	include('connect.php');
		$c_id=$_GET['catid'];
		$sql=mysqli_query($con,"SELECT * FROM `tbl_cate` WHERE cid='$c_id'") or die(mysqli_error($con));
		$rows=mysqli_fetch_array($sql);
?>
<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->

<!-- Mirrored from 786themes.net/html/alteration/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Dec 2018 06:54:26 GMT -->
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
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!-- Wrapper Start -->
	
		<!-- Header Start -->
		<?php include('header.php');?>
		<!-- Header End -->
		<div id="main" class="haslayout padding-section">
			<div class="container">
				<form  action="" method="POST" enctype="multipart/form-data">
					<fieldset class="row">
					<div class="col-md-3"></div>
						
						<div class=" col-md-6 col-sm-6 col-xs-6 col-offset-sm-3 reg-customers">
							<div class="border-left">
								<h2>Update Category Information.....</h2>
							</div>
							
							
							
							<div class="form-group">
								<label>Category Type:</label>
								<input type="text" class="form-control" name="c_type" placeholder="Enter the category of men or women" value="<?php echo $rows['category_type'];?>" >
							</div>
											

							<div class="form-group clearfix">
								<button type="submit" class="theme-btn btn-small" name="btn_update">CATEGORY UPDATED</button>
							</div>
						</div>
				

						<!-- <div class="col-md-3"></div> -->
					</fieldset>
				</form>
					</div>
				</div>
	           
                <?php
                         include('connect.php');

                            if(isset($_POST['btn_update']))
                            {
                               
                                    $cname=$_POST['c_type'];
							        $qry=mysqli_query($con,"UPDATE `tbl_cate` SET `category_type`='$cname' WHERE  cid='$c_id'")or die(mysqli_error($con));
                                    if($qry)
                                    {
                                        echo "<script>alert('Done'); window.location='view_cate.php';</script>";
                                    }
                                    else{
                                                 echo "<script>alert('Failed'); window.location='cate_update.php';</script>";
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