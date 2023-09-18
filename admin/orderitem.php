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
								<h2>VIEW Material....</h2>
							</div>
							<table class="table table-bordered table-striped table-hover">
              <tr>
                <th>Action</th>
                <th>SL.NO</th>
                <th>User</th>
                <th>Contact</th>
                <th>Order Date</th>
                <th>Net Amount</th>
                <th>Products</th>
                <th>Product Image</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Tax</th>
                <th>Total</th>
                
              </tr>
            <?php
              include('connect.php');$i=1;
              $sql1=mysqli_query($con,"SELECT * FROM `tbl_order`") or die(mysqli_error($con));
              while($rr=mysqli_fetch_array($sql1)) {
                $oid=$rr['oid'];
                $cid=$rr['uid'];
                $query=mysqli_query($con,"select tbl_order_details.`qty`,tbl_order_details.`mrp`,tbl_order_details.`total`,tbl_item.`item_id` from tbl_order_details,tbl_item where oid='$oid' and tbl_item.item_id=tbl_order_details.item_id");
                $count=mysqli_num_rows($query);
                if($count>=1)
                {
              ?>
            <tr>
          <td rowspan="<?php echo $count; ?>"><a href="sendsms1.php?amt=<?php echo $rr['gtotal']; ?>&&cid=<?php echo $rr['uid']; ?>" class="btn btn-warning">Notify</a></td>
          <td rowspan="<?php echo $count; ?>"> <?php echo $i++; ?></td>
           <?php 
            $sqr=mysqli_query($con,"SELECT * FROM tbl_user where uid='$cid'");
            $res=mysqli_fetch_array($sqr); ?>
          <td rowspan="<?php echo $count; ?>"><?php echo $res['full_name']; ?></td>
          <td rowspan="<?php echo $count; ?>"><?php echo $res['contact']; ?></td>
          <td rowspan="<?php echo $count; ?>"> <?php echo $rr['odate']; ?></td>
          <td rowspan="<?php echo $count; ?>"> <?php echo $rr['gtotal']; ?></td>
          <?php while($read=mysqli_fetch_array($query)) {?>
          <td> <?php $prid=$read['item_id']; $ss=mysqli_query($con,"select * from tbl_item where tbl_item.item_id='$prid'");
                  $rrs=mysqli_fetch_array($ss); echo $rrs['item_name']; 
                  ?></td>
                  <td> <?php $prid=$read['item_id']; $ss=mysqli_query($con,"select * from tbl_item where tbl_item.item_id='$prid'");
                  $rrs=mysqli_fetch_array($ss); 
                  ?><img src="photos/<?php echo $rrs['item_image'];?> " height=100 width=100></td>
                  <td> <?php echo $read['qty']; ?></td>
          <td> <?php echo $read['mrp']; ?></td>
          <td> <?php echo 18; ?></td>
          <td> <?php echo $read['total']; ?></td>
          </tr>
<?php
   } } }
?>
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