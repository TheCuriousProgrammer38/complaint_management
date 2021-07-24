<?php
session_start();
$em = $_SESSION['email'];
$u = $_GET['que_no'];
include("connection.php");
$q = "delete from student_compliant where que_no='$u'";
mysqli_query($cn,$q);
mysqli_close($cn);
echo "<script>alert('Complaint deleted');window.location='index.php';</script>";
?>