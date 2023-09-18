<?php
session_start();
$staff_id=$_SESSION['staff_id'];

if (!(isset($staff_id))) {
   header('location:../admin/index.php');
}
?>