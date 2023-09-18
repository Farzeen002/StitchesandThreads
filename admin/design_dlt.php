<?php

include('connect.php'); 
$d_id=$_GET['did'];
$qry=mysqli_query($con,"delete from tbl_design_data where design_id='$d_id'")or die(mysqli_error($con));
if($qry)
{
	echo '<script>
		alert("Deleted successfully!!"); window.location="view_design.php";
		</script>';
}
else
{
		echo '<script>
		alert("Unsuccessful"); window.location="view_design.php";
		</script>';
}

?>