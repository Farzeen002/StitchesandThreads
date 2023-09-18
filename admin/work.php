<?php
require('textlocal.class.php');
include('connect.php');
$cid=$_GET['usr'];
$id=$_GET['aid'];


 $textlocal = new Textlocal('vedashreehd1402@gmail.com', 'Vedashree@1421');
$sq=mysqli_query($con,"SELECT * FROM tbl_user where uid='$cid'");
$sq1=mysqli_query($con,"UPDATE tbl_assign set status='done' where assign_id='$id'");
$rr=mysqli_fetch_array($sq);
$cont=$rr['contact'];
$numbers = array($cont);
$sender = 'TXTLCL';
$message = 'Dear '.$rr['full_name'].'. work is complete...delivery will be  done within 2 days please keep the amount ready...  Thank you' ;

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    print_r($result);
} 
catch (Exception $e) 
{
    die('Error:' .$e->getMessage());
}
echo '<script>alert("Message sent"); window.location="view_work.php"; </script>';

?>
