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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Complaint Management</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Actions
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="complaint.php">Complaint</a>
          <a class="dropdown-item" href="Suggestion.php">Suggestions</a>
        </div>


      <li class="nav-item">
        <a class="nav-link" href="feedback.php">Feedback</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>

    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" id="profileDropdown" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" href="#">Profile</a>
          <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="viewprofile.php">Dashboard</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<div class="col-sm-12">
<h1 class="title">Your Suggestions</h1>

<table class="table table-hover">
<thead>
<tr>
<th>Actions</th><th>Suggestion type</th><th>Suggestion</th><th>Date</th><th>Answer</th>
</tr>
</thead>
<tbody>
<?php
include("connection.php");
$q="select * from teacher_suggestion where email='$em'";
$rs=mysqli_query($cn,$q);
while($a=mysqli_fetch_array($rs))
{
$ct=$a['suggestion_type'];
$com=$a['suggestion'];
$d=$a['date'];
$ans=$a['answer'];
$u=$a['sug_no'];

echo "<tr>";
echo "<td><a href=dels.php?sug_no=$u>Delete</a> <a 
href=ups.php?sug_no=$u>Update</a> </td><td>$ct</td><td>
$com</td><td>$d</td><td>$ans</td>";
echo "</tr>";
}

?>
</tbody>
</table>
</div>

</body>
</html>