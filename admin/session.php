<?php
session_start();
$ad_id=$_SESSION['admin_id'];
$ad_name=$_SESSION['admin_name']; 
if (!(isset($ad_id))) {
   header('location:index.php');
}
?>