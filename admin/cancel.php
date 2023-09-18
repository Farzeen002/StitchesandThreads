<?php
require('textlocal.class.php');
include('connect.php');
$cid=$_GET['cid'];

$textlocal = new Textlocal('rameeska111@gmail.com', 'Ramees1997ka');
$sq=mysqli_query($con,"SELECT * FROM tbl_user where uid='$cid'");
$rr=mysqli_fetch_array($sq);
$cont=$rr['contact'];
$numbers = array($cont);
$sender = 'TXTLCL';
$message = 'Dear '.$rr['full_name'].'. Thank you your is in process.  Thank you' ;

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    print_r($result);
} 
catch (Exception $e) 
{
    die('Error:' .$e->getMessage());
}
echo '<script>alert("Message sent"); window.location="viewappy.php"; </script>';

?>
