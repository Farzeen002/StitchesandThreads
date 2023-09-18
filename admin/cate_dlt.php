<?php

include('connect.php'); 
$c_id=$_GET['catid'];
$qry=mysqli_query($con,"delete from tbl_cate where cid='$c_id'")or die(mysqli_error($con));
if($qry)
{
	echo '<script>
		alert("Deleted successfully!!");window.location="view_cate.php";
		</script>';
}
else
{
		echo '<script>
		alert("Unsuccessful"); window.location="view_cate.php";
		</script>';
}

?>