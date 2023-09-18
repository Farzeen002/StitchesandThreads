<?php
include('connect.php'); 
$m_id=$_GET['mid'];
$qry=mysqli_query($con,"DELETE FROM `tbl_material` where m_id='$m_id'")or die(mysqli_error($con));
if($qry)
{
	echo '<script>
		alert("Deleted successfully!!"); window.location="view_material.php";
		</script>';
}
else
{
		echo '<script>
		alert("Unsuccessful"); window.location="view_material.php";
		</script>';
}
?>