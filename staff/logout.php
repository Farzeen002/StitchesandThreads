<?php
session_start();
session_destroy();
header('location:../admin/index.php?logged_off');

?>