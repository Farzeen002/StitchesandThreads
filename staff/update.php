<?php  include('connect.php');
$id=$_GET['sid'];
$cid=$_GET['cid']; 
$q=mysqli_query($con,"UPDATE `tbl_assign` SET `status`='Completed' WHERE `assign_id`='$id'");
$sql=mysqli_query($con,"UPDATE `tbl_pant` SET `status`='Completed' WHERE p_id=".$cid);
$sq2=mysqli_query($con,"UPDATE `tbl_gshirt` SET `status`='Completed' WHERE gs_id=".$cid);
$sq3=mysqli_query($con,"UPDATE `tbl_blouse` SET `status`='Completed' WHERE b_id=".$cid);
$sq4=mysqli_query($con,"UPDATE `tbl_bshirt` SET `status`='Completed' WHERE bs_id=".$cid);
$sq5=mysqli_query($con,"UPDATE `tbl_frock` SET `status`='Completed' WHERE f_id=".$cid);
$sq6=mysqli_query($con,"UPDATE `tbl_gown` SET `status`='Completed' WHERE g_id=".$cid);
$sq7=mysqli_query($con,"UPDATE `tbl_top` SET `status`='Completed' WHERE t_id=".$cid);

 if($q)
		                            {
		                             echo '<script>alert("succefully");window.location="viewassignwork.php";</script>';
		                            }
		                           else
		                           {           
		                                 echo '<script>alert("Failed to add ");</script>';
		                           }
 ?>

