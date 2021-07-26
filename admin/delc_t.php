<?php
session_start();
$em = $_SESSION['email'];
$u = $_GET['que_no'];
include("connection.php");
$q = "delete from teacher_complaint where que_no='$u'";
mysqli_query($cn,$q);
mysqli_close($cn);
echo "<script>alert('Complaint deleted');window.location='teachercomplaint.php';</script>";
?>