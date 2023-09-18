<?php
require('textlocal.class.php');
include('connect.php');
$cid=$_GET['cid'];
$amt=$_GET['amt']; 

$textlocal = new Textlocal('vedashreehd1402@gmail.com', 'Vedashree@1421');
$sq=mysqli_query($con,"SELECT * FROM tbl_user where uid='$cid'");
$rr=mysqli_fetch_array($sq);
$cont=$rr['contact'];
$numbers = array($cont);
$sender = 'TXTLCL';
$message = 'Dear '.$rr['full_name']. '. Thank you for the shopping. Your order amount is Rs.'.$amt . 'Order will be delivered to you very soon. Thank you' ;

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    print_r($result);
} 
catch (Exception $e) 
{
    echo '<script>alert("Message sent to the customer"); window.location="orderitem.php"; </script>';

}
echo '<script>alert("Message sent"); window.location="orderitem.php"; </script>';

?>
