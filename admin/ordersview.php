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
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/color.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<style type="text/css">
		
	</style>
</head>
<body class="home" style="background-image: url('../photos/IMG-20190326-WA0043.jpg'); background-size:100% 100%; background-repeat: no-repeat; ">
	<div id="wrapper">
		<?php include('header.php');?>
		<div id="main" class=" haslayout padding-section" style="padding:0px;">
			<div class="container">
				
					<fieldset class="row" style="overflow-x:auto;">
					
						<div class=" col-md-12 col-sm-8 col-xs-6 col-offset-sm-2 col-md-offset-2 reg-customers">
							<div class="border-left">
								<h2>VIEW ORDERS....</h2>
							</div>
							<table class="table table-bordered table-responsive" id="example" >
							<thead>
								<tr>
								
								<th>Material Name</th>
								<th>Quantity</th>
								<th>Duration</th>
								<th>Length</th>
								<th>Waist</th>
								<th>Kneelength</th>
								<th>Hip</th>
								<th>Thigh</th>
								<th>Bottom</th>
								<th>Book Date</th>
								<th>Delivery Date</th>
								<th>Neck to Shoulder</th>
								<th>Blouse Length</th>
								<th>Sleeve Length</th>
								<th>Around Bust</th>
								<th>Around Bottom of Blouse</th>
								<th>Shoulder to Bust</th>
								<th>Front Neck Depth</th>
								<th>Armhole Circumference</th>
								<th>Around Arm</th>
								<th>Shoulder</th>
								<th>Back Neck Depth</th>
								<th>Chest</th>
								<th>Swidth</th>
								<th>Bodice</th>
								<th>SKlenth</th>
								<th>Sweep</th>
								<th>Pocket</th>
								<th>Height</th>
								<th>comment</th>
								<th>Image</th>
								<th>Take order</th>
								<th>Cnacel order</th>
							</tr>
						</thead>
					<tbody>
<?php
include('connect.php');

$i=1;
$query=mysqli_query($con,"SELECT * from `tbl_design`   ") or die(mysqli_error($con));
while ($row=mysqli_fetch_array($query)) {?>
<tr>
	<td><?php echo $row['m_id'];?></td>
	<td><?php echo $row['qty'];?></td>
	<td><?php $col=$row['colour'];?>
		<div style="background-color: <?php echo $col;?>; height: 30px; width: 30px; border: 1px solid white;"></div>
	</td>
	<td><?php echo date('d-m-Y',strtotime($row['book_date']));?></td>
	<td><?php echo date('d-m-Y',strtotime($row['delivery_date']));?></td>
	<td><?php echo $row['length'];?></td>
	<td><?php echo $row['waist'];?></td>
	<td><?php echo $row['kneelength'];?></td>
	<td><?php echo $row['hip'];?></td>
	<td><?php echo $row['Thigh'];?></td>
	<td><?php echo $row['bottom'];?></td>
	
	<td><?php echo $row['NtoSM'];?></td>
	<td><?php echo $row['BL'];?></td>
	<td><?php echo $row['SL'];?></td>
	<td><?php echo $row['AB'];?></td>
	<td><?php echo $row['ABOB'];?></td>
	<td><?php echo $row['SB'];?></td>
	<td><?php echo $row['FND'];?></td>
	<td><?php echo $row['AOC'];?></td>
	<td><?php echo $row['AA'];?></td>
	<td><?php echo $row['Shoulder'];?></td>
	<td><?php echo $row['BND'];?></td>
	<td><?php echo $row['chest'];?></td>
	<td><?php echo $row['Swidth'];?></td>
	<td><?php echo $row['Bodice'];?></td>
	<td><?php echo $row['SKlength'];?></td>
	<td><?php echo $row['sweep'];?></td>
	<td><?php echo $row['pocket'];?></td>
	<td><?php echo $row['height'];?></td>
	<td><?php echo $row['comment'];?></td>
	<td>

			 			<!-- <img src="photos/<?php $img=explode(',', $row['front_image']); $image=$img[0];
			 			echo $image;?>" width="60" height="60"> -->

			 			<?php 
			 							
										$splittedstring=explode(",",$row['front_image']);
										foreach ($splittedstring as $key => $value) 
										{
												
										?>
										<img src="../photos/<?php echo $value ?>" width="60" height="60">			
										
										<?php
										}
			 							?>

			 			</td>
			 			<td><a href="" class="btn btn-danger"><i class="fa fa-trash">&nbsp;&nbsp;Cancel</i></a></td>
	<td><a href="dlt_blouse.php?fid=<?php echo $row['fabric_id'];?>" class="btn btn-danger"><i class="fa fa-trash">&nbsp;&nbsp;Cancel</i></a></td>
</tr>
<?php	}?>
</tbody>
</table>	
		
							
						</div>
						
					</fieldset>
				
		    </div>
		</div>
		</div>

	
   <?php include('footer.php');?>3

	<script src="js/vendor/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#example').DataTable();
		});
	</script>
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












