<?php
include 'session.php';
include('connect.php'); 
$id=$_GET['del'];
$qry=mysqli_query($con,"delete from `tbl_purchase` where pur_id='$id'")or die(mysqli_error($con));
if($qry)
{
	echo '<script>
		alert("Deleted successfully!!"); window.location="addpurchase.php";
		</script>';
}
else
{
		echo '<script>
		alert("Unsuccessful");</script>';
}

?>