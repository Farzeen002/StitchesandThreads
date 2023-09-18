<?php include('session_user.php');?>
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
		.pic{
			height: 300px!important;
			width: 200px!important;
		}
	</style>
</head>
<body class="home"  onload="showFashion1()" style="background-image: url('photos/IMG-20190326-WA0043.jpg'); background-size:100% 100%; background-repeat: no-repeat; ">
	<div id="wrapper">
		<!-- Header Start -->
		<?php include('header_user.php');?>
		
		<div id="main" class="haslayout padding-section products-listing">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-9 col-sm-12 pull-right">
						<div id="content" class="haslayout">
							
							<div class="products haslayout">
								<div class="row">
								<?php include 'connect.php';
								$q=mysqli_query($con,"SELECT * FROM tbl_item")or(mysqli_error($con));
								while($row=mysqli_fetch_array($q)){
									?>

									
									<div class="col-sm-4 col-xs-6 product" >
										<div class="product-img pic" >
											<img src="admin/photos/<?php echo $row['item_image']; ?>" alt="image description" >
											<div class="img-hover">
												<div class="holder">
													<a class="icon glyph-icon flaticon-plus79" href="itemdetailing.php?I_id=<?php echo $row['item_id'];?>"></a>
												</div>
											</div>
											<div class="price-tag">
												<div class="price-holder">Rs.<?php echo $row['item_price']; ?></div>
											</div>
										</div>
										<div class="detail">
											<span class="title" style="text-transform: capitalize;"><?php echo $row['item_name']; ?></span>
											
											<br>
											<a class="theme-btn addtocart-btn" href="itemdetailing.php?I_id=<?php echo $row['item_id'];?>">Add to cart</a>
										</div>
										
									</div>
									<?php
									} ?>
									
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- Main End -->
		<!-- Footer -->
	 <?php include('footer.php');?>
		<!-- Footer -->
	</div>
	<!-- Wrapper End -->
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

<!-- Mirrored from 786themes.net/html/alteration/women.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Dec 2018 06:56:27 GMT -->
</html>