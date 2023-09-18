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
								<h2>Supplier Information.....</h2>
							</div>
							
		                <div class="row">
						<form action="" method="post"> 
						<div class="col-md-8">
							<div class="col-md-6">
								<div class="form-group">
									<label>Select Suppliers</label>
			      					<select name="supid" class="form-control">

			      						<option value="" > Select Supplier </option>
			      						<?php include('connect.php');
											$sql=mysqli_query($con,"select * from tbl_supply ") or die(mysql_error($con));
											while($rr=mysqli_fetch_array($sql)){
					 					?>
										 <option value="<?php echo $rr['supid']; ?>"><?php echo $rr['supname']; ?></option>
										<?php } ?>

			      					</select>
								</div>
							</div>
							<div class="col-md-2" style="margin-top: 20px;">
								<label></label>
								<input type="submit" name="search" value="Submit" class="btn btn-info">
							</div>
						</div>
					</form>
					</div>
		<?php include('connect.php');
			if(isset($_POST['search']))
			{
				$sid=$_POST['supid'];
				$qr=mysqli_query($con,"INSERT INTO `tbl_purchase`(`pur_id`, `pdate`, `supid`, `gtotal`) VALUES ('',now(),'$sid','')")or die(mysqli_error($con));
				if($qr)
				{
					echo "<script>alert('Supplier Selected Successfully');</script>";
				}
			}
		 ?>
		</div>   
      <div class="col-md-4">
      	<div class="panel panel-info">
      		<div class="panel-heading">
      			<h2 style="text-align:center;">Add Purchase</h2>
      		</div>
      		<div class="panel-body">
      			<form action="#" method="post">
      				<div class="form-group" style="margin-right:15px;">
      					<label>Select Product</label>
      					<select name="prodid" class="form-control">
      						<option value="" > Select Product </option>
      						<?php include('connect.php');
								$sql=mysqli_query($con,"select * from tbl_material") or die(mysqli_error($con));
								while($rr=mysqli_fetch_array($sql)){
		 					?>
							 <option value="<?php echo $rr['m_id']; ?>"><?php echo $rr['m_type']; ?>
							 	
							 </option>
							<?php } ?>

      					</select><br>
      					<br>
      					<label>Purchased Quantity</label>
      					<input type="text" name="pquantity" id="qty" onchange="addTotalAmount()" placeholder="Enter Purchased qty" class="form-control" required="" >
      					<label>Price</label>
      					<input type="text" name="price" id="price" placeholder="Enter price" class="form-control" required="" onchange="addTotalAmount()" >
      					<label>Tax</label>
      					<input type="text" name="tax" id="tax" onchange="addTotalAmount()" value="18" placeholder="Enter Price" class="form-control" required="" >
      					<label>Total</label>
      					<input type="text" name="total" placeholder="Total" id="total" class="form-control" readonly="">
      					
      					


      				</div>
      				<input type="submit" class="btn btn-danger" name="save" value="Add">
      				


      			</form>
      		</div>
      	</div>
      </div>
      <div class="col-md-6">
      	<form action="" method="post">
      	<table class="table table-bordered table-striped table-hover">
      				<tr>
      					<th>SL.NO</th>
      					<th>product</th>
      					<th>qty</th>
      					<th>tax</th>
      					<th>price</th>
      					<th>total</th>
      					<th>Action</th>
      					
      				</tr>
      			<?php
      				include('connect.php');$i=1;
      				$gtotal=0;
      				$sql1=mysqli_query($con,"select * from tbl_purchase_details,tbl_purchase where tbl_purchase_details.pur_id=tbl_purchase.pur_id  group by tbl_purchase_details.`purdtid`") or die(mysqli_error($con));
      				while($rr=mysqli_fetch_array($sql1)) {
      				?>
      				
      			<tr>
      				
					<td> <?php echo $i++; ?></td>
					<?php $prid=$rr['m_id'];  
					$sr=mysqli_query($con,"SELECT * FROM `tbl_material` where m_id='$prid'");
					$rest=mysqli_fetch_array($sr);
					?>
					<td> <?php echo $rest['m_type']; ?></td>
					<td> <?php echo $rr['qty']; ?></td>
					<td> <?php echo $rr['tax']; ?>%</td>
					<td> <?php echo $rr['price']; ?></td>
					<td> <?php echo $rr['total']; ?></td>
			
					<td> 
						<a href="pur_dlt.php?del=<?php echo $rr['pur_id'];?>" class="btn btn-danger"><span >DELETE</span></a></td>
					<input type="hidden" name="purid" value="<?php echo $rr['pur_id']; ?>">
			    </tr>
				<?php 
					 $gtotal=$gtotal + $rr['total']; }
				?>
				<tr>
					<th colspan="4" style="text-align: right; font-weight: bold;">Net amount</th>
					<td colspan="5" style="text-align: right; font-weight: bold; color: orange;"><input type="text" readonly value="<?php echo $gtotal;?>" name="gtotal"></td>
				</tr>
				<tr>
					<td colspan="5" class="pull-left">
						
						<input type="submit" value="Calculate" name="cal" class="btn btn-success">
					</td>
				</tr>

      				</table>
	      	</form>			
      </div>
    </div>
    
    <?php
	include('connect.php');
	if(isset($_POST['cal']))
	{
		$gtotal=$_POST['gtotal'];
		$purid=$_POST['purid'];
		$cal=mysqli_query($con,"UPDATE tbl_purchase SET gtotal='$gtotal',status='calculated' where pur_id='$purid'");

		if($cal)
		{

			echo '<script>alert("succefully Calculated"); window.location="addpurchase.php";</script>';
		}else
		{
				
				echo '<script>alert("Failed to calculate");</script>';
			

		}
	}
	?>

    <?php
	include('connect.php');
	if(isset($_POST['save']))
	{
		$pid=$_POST['prodid'];
		$ds=mysqli_query($con,"select * from tbl_purchase order by pur_id DESC LIMIT 1");
		$fet=mysqli_fetch_array($ds);
		$purid=$fet['pur_id'];
		$pqty=$_POST['pquantity'];
		$price=$_POST['price'];
		$tax=$_POST['tax'];
		$total=$_POST['total'];

		$sql=mysqli_query($con,"INSERT INTO `tbl_purchase_details`(`purdtid`, `m_id`, `pur_id`, `qty`, `price`, `total`, `status`, `tax`) VALUES ('','$pid','$purid','$pqty','$price','$total','Available','$tax')") or die(mysqli_error($con));
		if($sql)
		{

			echo '<script>alert("succefully Added"); window.location="addpurchase.php";</script>';
		}else
		{
				
				echo '<script>alert("Failed to Add");</script>';
			

		}
	}
?>
					<!-- 	<div class="form-group clearfix">
								<button type="submit" class="theme-btn btn-small" name="submit"> ADD</button>
							</div> -->
						</div>
				

						<div class="col-md-3"></div>
					</fieldset>
				</form>
					</div>
				</div>
	             </div>

<?php include('footer.php');?>
	<script src="js/vendor/jquery-1.11.3.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	 <script>
                function addTotalAmount()
                {
                        var val1 = parseInt(document.getElementById("qty").value);
                       
                        var val2 = parseFloat(document.getElementById("price").value);
                        var val3 = parseFloat(document.getElementById("tax").value);
                        var tota  = val1 * val2;
                        var gst=val3/100;
                        var total=tota*gst;
                        var total=total+tota;
                        document.getElementById('total').value=total;
                }
    </script>
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