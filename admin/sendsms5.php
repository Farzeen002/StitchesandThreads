<?php
require('textlocal.class.php');
include('connect.php');
$cid=$_GET['cid'];
$amt=$_GET['amt'];
$st=1000;
$total=$amt+$st;

 $textlocal = new Textlocal('vedashreehd1402@gmail.com', 'Vedashree@1421');
$sq=mysqli_query($con,"SELECT * FROM tbl_user where uid='$cid'");
$rr=mysqli_fetch_array($sq);
$cont=$rr['contact'];
$numbers = array($cont);
$sender = 'TXTLCL';
$message = 'Dear '.$rr['full_name'].'.your request has been accepted... material price is '.$amt.' and stiching price is '.$st.' and total will '.$total.'when we delivery the item...  Thank you' ;

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    print_r($result);
} 
catch (Exception $e) 
{
  echo '<script>alert("Message sent"); window.location="viewappy.php"; </script>';

}
echo '<script>alert("Message sent"); window.location="viewappy.php"; </script>';

?>
