<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['firstname']);
unset($_SESSION['cust_id']);
header("Location:index.php");
 ?>
