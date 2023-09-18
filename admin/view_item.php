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
				<form  action="" method="POST">
					<fieldset class="row">
					<div class="col-md-3"></div>
						<div class=" col-md-8 col-sm-8 col-xs-6 col-offset-sm-2 col-md-offset-2 reg-customers">
							<div class="border-left">
								<h2>VIEW ITEM....</h2>
							</div>
							<table class="table table-bordered" id="example">
							<thead>
								<tr>
								<th>Sl.No</th>
								<th>category Type</th>
								<th>Item name</th>
								<th>Item Image</th>
								<th>Item Description</th>
								<th>Item Price</th>
								<th>Item Quantity</th>
								<th>Delete</th>
								<th>Update</th>
								</tr>
							</thead>
							<tbody>
					<?php
                        include('connect.php');
						$i=1;
						$query=mysqli_query($con,"SELECT t.*,c.* from `tbl_item` t inner join tbl_cate c on c.cid=t.cid ") or die(mysqli_error($con));
						while ($row=mysqli_fetch_array($query)) {?>
							<tr>
								<td><?php echo $i++;?></td>
								<td><?php echo $row['category_type'];?></td>
								<td><?php echo $row['item_name'];?></td>
								<td><img src="photos/<?php echo $row['item_image'];?>" height='70' width='60';></td>
								<td><?php echo $row['item_description'];?></td>
								<td><?php echo $row['item_price'];?></td>
								<td><?php echo $row['item_qty'];?></td>
								<td><a href="item_dlt.php?iid=<?php echo $row['item_id'];?>" class="btn btn-danger"><i class="fa fa-trash">&nbsp;&nbsp;Delete</i></a></td>
								<td><a href="item_update.php?iid=<?php echo $row['item_id'];?>" class="btn btn-info"><i class="fa fa-edit">&nbsp;&nbsp;Update</i></a></td>
								
							</tr>
					<?php	}?>
				</tbody>
				</table>
		
							
						</div>
						<div class="col-md-3"></div>
					</fieldset>
				</form>
		    </div>
		</div>
		</div>

	
   <?php include('footer.php');?>
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