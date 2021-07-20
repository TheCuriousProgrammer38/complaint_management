<!DOCTYPE html>
<html>
<head>
<?php
session_start();
include 'header.php';
$em = $_SESSION['email'];
?>

<style>
.title{
    text-align: center;
}
</style>
</head>

<body>
<div class="col-sm-12">
<h1 class="title">Your Complaints</h1>

<table class=table>
<thead>
<tr>
<th>Actions</th><th>Complaint type</th><th>Complaint</th><th>Date</th>
</tr>
</thead>
<tbody>
<?php
include("connection.php");
$q="select * from student_compliant where email='$em'";
$rs=mysqli_query($cn,$q);
while($a=mysqli_fetch_array($rs))
{
$ct=$a['complain_type'];
$com=$a['complain'];
$d=$a['s_date'];
$u=$a['que_no'];

echo "<tr>";
echo "<td><a href=delc.php?que_no=$u>Delete</a> <a 
href=upc.php?que_no=$u>Update</a> </td><td>$ct</td><td>
$com</td><td>$d</td>";
echo "</tr>";
}

?>
</tbody>
</table>
</div>

</body>
</html>