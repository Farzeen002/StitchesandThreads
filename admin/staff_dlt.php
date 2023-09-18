<?php

include('connect.php'); 
$s_id=$_GET['sid'];
$qry=mysqli_query($con,"delete from tbl_staff where staff_id='$s_id'")or die(mysqli_error($con));
if($qry)
{
	echo '<script>
		alert("Deleted successfully!!"); window.location="view_staff.php";
		</script>';
}
else
{
		echo '<script>
		alert("Unsuccessful"); window.location="view_staff.php";
		</script>';
}

?>