<?php include('session.php');?>
<?php
	include('connect.php');
		$m_id=$_GET['mid'];
		$sql=mysqli_query($con,"SELECT * FROM `tbl_material` WHERE m_id='$m_id'") or die(mysqli_error($con));
		$rows=mysqli_fetch_array($sql);
?>
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
		<div id="main" class="haslayout padding-section" style="padding:0px;">
			<div class="container">
				<form  action="" method="POST" enctype="multipart/form-data">
					<fieldset class="row">
					<div class="col-md-3"></div>
						<div class=" col-md-6 col-sm-6 col-xs-6 col-offset-sm-3 reg-customers">
							<div class="border-left">
								<h2>Update Material Type</h2>
							</div>
							<div class="form-group">
								<label>Material type</label>
								<input type="text" class="form-control" name="mtype" placeholder="Enter material type" autocomplete="off" value="<?php echo $rows['m_type'];?>">
							</div>
							

						<div class="form-group">
							<label>Materail Price:</label>
							<input placeholder="Enter material price" autocomplete="off" type="text" class="form-control" name="mprice" value="<?php echo $rows['m_amount'];?>">
						</div>

						<div class="form-group">
							<label>Tax:</label>
							<input type="text" autocomplete="off" placeholder="Enter Tax" class="form-control" name="tax" value="<?php echo $rows['tax'];?>">
						</div>
						<div class="form-group">
							<label>Quantity:</label>
							<input placeholder="Enter Quantity" autocomplete="off" type="text" class="form-control" name="qty" value="<?php echo $rows['qty'];?>">
						</div>
						<div class="form-group clearfix">
								<button type="submit" class="theme-btn btn-small" name="btn_update">UPDATE</button>
						</div>
					</div>
					<div class="col-md-3"></div>
				</fieldset>
			</form>
		</div>
	</div>
<?php
include('connect.php');
if(isset($_POST['btn_update']))
{
    

            $mtype=$_POST['mtype'];
		    $mprice=$_POST['mprice'];
		    $tax=$_POST['tax'];
		    $qty=$_POST['qty'];

		    $qry=mysqli_query($con,"UPDATE `tbl_material` SET `m_type`='$mtype',`m_amount`='$mprice',`tax`='$tax',`qty`='$qty' WHERE  m_id='$m_id'") or die(mysqli_error($con));
        	if($qry)
            {
                echo "<script>alert('Done'); window.location='view_material.php';</script>";
            }
            else
            {
                echo "<script>alert('Failed); window.location='material_update.php';</script>";
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