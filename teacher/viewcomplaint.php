<!DOCTYPE html>
<html lang="en">
<head>
<?php
include 'header.php';
?>

<style>
body{
    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(img/feed2.jpg);
    background-size: cover;
}

.img-thumbnail{
  margin: 10px 10px 10px 10px;
  background-color: #f1f2f6;
  border: 1px solid #f1f2f6;
  padding: 0px 0px 10px 10px;
}

.viewpage_title{
  text-align: center;
  color: #fff;
  font-size: 60px;
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
          <a class="dropdown-item disabled" href="complaint.php">Complaint</a>
          <a class="dropdown-item disabled" href="Suggestion.php">Suggestions</a>
          <a class="dropdown-item disabled" href="solution.php">Solutions</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="login.php">Login</a>
          <a class="dropdown-item" href="register.php">Register</a>
        </div>


      <li class="nav-item active">
        <a class="nav-link" href="feedback.php">Feedback</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>

    </ul>
  </div>
</nav>

<h1 class="viewpage_title">Complaints</h1>

<?php
  include('connection.php');
  $rs = mysqli_query($cn,"select * from teacher_complaint");
  while($a=mysqli_fetch_array($rs))
  {
    $e = $a["email"];
    $t = $a["complain_type"];
    $c = $a["complain"];
    $d = $a["t_date"];

    echo "<div class=\"row\"><div class='col-md-4'>";
    echo "<div class=\"img-thumbnail\">";

    echo "<div class=\"caption\">";
    echo "<b>$e</b><br>$t<br>$d<hr>$c</div></div></div></div>";
  }
  ?>

</body>
</html>

