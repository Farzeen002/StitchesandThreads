<?php
include('connect.php'); 
$s_id=$_GET['sid'];
$qry=mysqli_query($con,"delete from tbl_supply where supid='$s_id'")or die(mysqli_error($con));
if($qry)
{
	echo '<script>
		alert("Deleted successfully!!"); window.location="viewsupply.php";
		</script>';
}
else
{
		echo '<script>
		alert("Unsuccessful"); window.location="viewsupply.php";
		</script>';
}

?>