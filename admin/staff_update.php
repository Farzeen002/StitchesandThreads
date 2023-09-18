<?php include('session.php');?>
 
<?php
	include('connect.php');
		$s_id=$_GET['sid'];
		$sql=mysqli_query($con,"SELECT * FROM `tbl_staff` WHERE staff_id='$s_id'") or die(mysqli_error($con));
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
								<h2>Update Staff Information.....</h2>
							</div>
							
							
							
							<div class="form-group">
								<label>Staff Name:</label>
								<input type="text" class="form-control" name="s_name" autocomplete="off" placeholder="Enter staff name" value="<?php echo $rows['staff_name'];?>" >
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
								<label>Gender:</label>
								<input type="radio" name="gender" value="male"<?php if($rows['gender']=="male"){ echo "checked";}?>>Male
								<input type="radio" name="gender" value="female"<?php if($rows['gender']=="female"){echo "checked";}?> >Female
							</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
								<label>Phone No:</label>
								<input type="tel" class="form-control" name="phone" autocomplete="off" placeholder="Enter phone number" value="<?php echo $rows['phone'];?>">
							</div>
								</div>
							</div>
						
						<div class="form-group">
							<label>Address:</label><br>
							<textarea name="add" placeholder="Enter the address" rows=4 ><?php echo ($rows['address']);?></textarea><br>
							</div>
							


						<div class="form-group">
							<label>Image:</label><br>
							 <img src="photos/<?php echo $rows['image']; ?>" alt="No Image" height="100" width="200" class="img-rounded" >
							<input type="file" name="image" class="form-control"><br>
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
                               if(isset($_FILES['image']['name']))
                                {
                                        $file = rand(1000,100000)."-".$_FILES['image']['name'];
                                        $file_loc = $_FILES['image']['tmp_name'];
                                        $file_size = $_FILES['image']['size'];
                                        $imgtype = $_FILES['image']['type'];
                                        $folder="photos/";
                                        $new_size = $file_size/2048;  
                                        $new_file_name = strtolower($file);
                                       $final_file=str_replace(' ','-',$new_file_name);
                                      
                                        if(move_uploaded_file($file_loc,$folder.$final_file))
                                        {           


                                            $sname=$_POST['s_name'];
							                $Gender=$_POST['gender'];
							                $addr=$_POST['add'];
							                $Phone=$_POST['phone'];
		                                    $qry=mysqli_query($con,"UPDATE `tbl_staff` SET `staff_name`='$sname',`gender`='$Gender',`address`='$addr',`phone`='$Phone',`image`='$final_file' WHERE  staff_id='$s_id'") or die(mysqli_error($con));
                                            if($qry)
                                            {
                                                echo "<script>alert('Done'); window.location='view_staff.php';</script>";
                                            }
                                            else{
                                                 echo "<script>alert('Failed); window.location='staff_update.php';</script>";
                                            }
                                                                           
                                        }
                                    }  
                                    $sname=$_POST['s_name'];
							        $Gender=$_POST['gender'];
							        $addr=$_POST['add'];
							        $Phone=$_POST['phone'];
		                            $qry=mysqli_query($con,"UPDATE `tbl_staff` SET `staff_name`='$sname',`gender`='$Gender',`address`='$addr',`phone`='$Phone' WHERE  staff_id='$s_id'") or die(mysqli_error($con));
                                    if($qry)
                                    {
                                        echo "<script>alert('Done'); window.location='view_staff.php';</script>";
                                    }
                                    else{
                                                 echo "<script>alert('Failed); window.location='staff_update.php';</script>";
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