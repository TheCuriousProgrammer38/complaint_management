<?php
session_start();
$em = $_SESSION['email'];
$u = $_GET['feed_id'];
include("connection.php");
$q = "delete from feedback where feed_id='$u'";
mysqli_query($cn,$q);
mysqli_close($cn);
echo "<script>alert('Feedback deleted');window.location='feedback.php';</script>";
?>