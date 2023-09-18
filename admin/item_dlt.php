<?php

include('connect.php'); 
$i_id=$_GET['iid'];
$qry=mysqli_query($con,"delete from tbl_item where item_id='$i_id'")or die(mysqli_error($con));
if($qry)
{
	echo '<script>
		alert("Deleted successfully!!"); window.location="view_item.php";
		</script>';
}
else
{
		echo '<script>
		alert("Unsuccessful"); window.location="view_item.php";
		</script>';
}

?>