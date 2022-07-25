<?php  
session_start();
$_SESSION=array();
session_destroy();
echo "<script>alert('Apakah Anda ingin keluar?'); window.location='Index.php';</script>";
?>