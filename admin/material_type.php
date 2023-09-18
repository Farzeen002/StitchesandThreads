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
								<h2>Materail Type.....</h2>
							</div>
							
							
							
							<div class="form-group">
								<label>Material type</label>
								<input type="text" class="form-control" name="type" placeholder="Enter material type" autocomplete="off">
							</div>
							
						<div class="form-group">
							<label>Materail Price:</label>
							<input type="text" class="form-control" name="amount" placeholder="Enter material price" autocomplete="off">
						</div>

						<div class="form-group">
							<label>Tax:</label>
							<input type="text" class="form-control" name="tax" value="18" placeholder="Enter tax" autocomplete="off">
						</div>
						<div class="form-group">
							<label>qty:</label>
							<input type="text" class="form-control" name="qty" placeholder="Enter quantity" autocomplete="off">
						</div>


						<div class="form-group clearfix">
							<button type="submit" class="theme-btn btn-small" name="submit">MATERIAL ADDED</button>
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
						            $Mtype=$_POST['type'];
						            $Mamount=$_POST['amount'];
						            $tax=$_POST['tax'];
						            $qty=$_POST['qty'];
						            $qry=mysqli_query($con,"INSERT INTO `tbl_material`(`m_id`, `m_type`, `m_amount`, `tax`, `qty`) VALUES  ('','$Mtype','$Mamount','$tax','$qty')")or die(mysqli_error($con));
		                            if($qry)
		                            {
		                              echo '<script>alert("information added succefully");window.location="view_material.php";</script>';
		                            }
		                           else
		                           {           
		                                 echo '<script>alert("Failed to add information");window.location="material_type.php";</script>';
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