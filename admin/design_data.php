<?php include('session.php');?>
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
	
		<?php include('header.php');?>
		<!-- Header End -->
		<div id="main" class="haslayout padding-section" style="padding:0px;">
			<div class="container">
				<form  action="" method="POST" enctype="multipart/form-data">
					<fieldset class="row">
					<div class="col-md-3"></div>
						
						<div class=" col-md-6 col-sm-6 col-xs-6 col-offset-sm-3 reg-customers">
							<div class="border-left">
								<h2>Design.....</h2>
							</div>
							<div class="form-group">
							<label>Design Name:</label><br>
							<input type="text" class="form-control" name="dname" placeholder="Enter Design name" autocomplete="off"> <br>
						</div>
						<div class="form-group">
							<label>design Image:</label><br>
							<input type="file" name="image" class="form-control"><br>
						</div>
						<div class="form-group clearfix">
								<button type="submit" class="theme-btn btn-small" name="submit">Add Design</button>
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
       


                        if(isset($_POST['submit']))
                        {
                            $file = rand(1000,100000)."-".$_FILES['image']['name'];
                            $file_loc = $_FILES['image']['tmp_name'];
                            $file_size = $_FILES['image']['size'];
                            $imgtype = $_FILES['image']['type'];
                            $folder="photos/";
                            $new_size = $file_size/2048;  
                            $new_file_name = strtolower($file);
                            $final_file=str_replace(' ','-',$new_file_name);
                            if($imgtype != "image/jpg" && $imgtype != "image/png" && $imgtype != "image/jpeg" ) 
                            {
                                  echo "<script>alert('File type is not compatible');
                                   window.location='design_data.php';</script>";
                            }
                            else {
                            if(move_uploaded_file($file_loc,$folder.$final_file))
                               {                      
						           
						            $Name=$_POST['dname'];
		                            $qry=mysqli_query($con,"INSERT INTO `tbl_design_data`(`design_id`, `design_name`, `design_image`) VALUES ('','$Name','$final_file')")or die(mysqli_error($con));
		                            if($qry)
		                            {
		                              echo '<script>alert("information added succefully");window.location="view_design.php";</script>';
		                            }
		                           else
		                           {           
		                                 echo '<script>alert("Failed to add information");window.location="design.php";</script>';
		                           }
                         		}
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