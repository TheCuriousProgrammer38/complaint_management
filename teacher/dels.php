<?php
session_start();
$em = $_SESSION['email'];
$u = $_GET['sug_no'];
include("connection.php");
$q = "delete from teacher_suggestion where sug_no='$u'";
mysqli_query($cn,$q);
mysqli_close($cn);
echo "<script>alert('Suggestion deleted');window.location='managesuggestion.php';</script>";
?>