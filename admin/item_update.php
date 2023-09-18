<?php include('session.php');?>
 
<?php
	include('connect.php');
		$itemm_id=$_GET['iid'];
		$sql=mysqli_query($con,"SELECT t.*,c.* FROM `tbl_item` t inner join tbl_cate c on c.cid=t.cid WHERE item_id='$itemm_id'") or die(mysqli_error($con));
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
								<h2>Update Item Information.....</h2>
							</div>
							
							
							
							<div class="form-group">
								<label>Category type</label>
								<select  name ="cattype">
							        <option value="<?php echo $rows['cid']; ?>"><?php echo $rows['category_type']; ?></option>
							        <?php 
							        include('connect.php');
							        $q=mysqli_query($con,"SELECT * from tbl_cate ")or die(mysqli_query($con));
							        while($r=mysqli_fetch_array($q)){
							        	?>
							        	<option value="<?php echo $r['cid'];?>"><?php echo $r['category_type'];?></option>
							        	<?php
							        }
							        ?>
     							</select>
							</div>
							
						<div class="form-group">
							<label>Item name:</label><br>
							<input type="text" class="form-control" name="name" placeholder="Enter item name" value="<?php echo $rows['item_name']; ?>"><br>
						</div>

						<div class="form-group">
							<label>Item Description:</label><br>
							<textarea name="Des" placeholder="Enter item discription" rows="4"><?php echo $rows['item_description']; ?></textarea><br>
						</div>

						<div class="form-group">
							<label>Item Image:</label><br>
							<img src="photos/<?php echo $rows['item_image']; ?>" alt="No Image" height="100" width="200" class="img-rounded" >
							<input type="file" name="item_image" class="form-control"><br>
						</div>

						<div class="form-group">
							<label>Item Price:</label>
							<input type="text" class="form-control" name="price" placeholder="Enter price" value="<?php echo $rows['item_price']; ?>">
						</div>

						<div class="form-group">
							<label>Item Quantity:</label>
							<input type="text" class="form-control" name="qty" placeholder="Enter Quantity" value="<?php echo $rows['item_qty']; ?>">
						</div>

						<div class="form-group clearfix">
								<button type="submit" class="theme-btn btn-small" name="btn_update">ITEM UPDATED</button>
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

                            if(isset($_POST['btn_update']))
                            {
                            	
                               if(isset($_FILES['item_image']['name']))
                                {
                                        $file = rand(1000,100000)."-".$_FILES['item_image']['name'];
                                        $file_loc = $_FILES['item_image']['tmp_name'];
                                        $file_size = $_FILES['item_image']['size'];
                                        $imgtype = $_FILES['item_image']['type'];
                                        $folder="photos/";
                                        $new_size = $file_size/2048;  
                                        $new_file_name = strtolower($file);
                                       $final_file=str_replace(' ','-',$new_file_name);
                                        if(move_uploaded_file($file_loc,$folder.$final_file))
                                        {           


                                            $cat_type=$_POST['cattype'];
							                $Descrition=$_POST['Des'];
							                $price=$_POST['price'];
							                $quantity=$_POST['qty'];
		                                    $qry=mysqli_query($con,"UPDATE `tbl_item` SET `cid`='$cat_type',`item_image`='$final_file',`item_description`='$Descrition',`item_price`='$price',`item_qty`='$quantity' WHERE `item_id`='$itemm_id'") or die(mysqli_error($con));
                                            if($qry)
                                            {
                                                echo "<script>alert('Done');window.location='view_item.php';</script>";
                                            }
                                            else{
                                                 echo "<script>alert('Failed);window.location='item_update.php'; </script>";
                                            }
                                                                           
                                        }
                                    }  
                                     $cat_type=$_POST['cattype'];
							                $Descrition=$_POST['Des'];
							                $price=$_POST['price'];
							                $quantity=$_POST['qty'];
		                            $qry=mysqli_query($con,"UPDATE `tbl_item` SET `cid`='$cat_type',`item_description`='$Descrition',`item_price`='$price',`item_qty`='$quantity' WHERE `item_id`='$itemm_id'") or die(mysqli_error($con));
                                    if($qry)
                                    {
                                        echo "<script>alert('Done');window.location='view_item.php'; </script>";
                                    }
                                    else{
                                                 echo "<script>alert('Failed);window.location='item_update.php'; </script>";
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