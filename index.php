<!DOCTYPE html>
<html lang="en">
<head>
<?php
include 'header.php';
?>
<link rel="stylesheet" href="styleCorosel.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Complaint Management</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Actions
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <!-- <a class="dropdown-item" href="viewcomplaint.php">Complaint</a>
          <a class="dropdown-item disabled" href="#">Suggestions</a>
          <a class="dropdown-item disabled" href="#">Solutions</a>
          <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="login.php">Login</a>
          <a class="dropdown-item" href="adminLogin.php">Admin</a>
          <a class="dropdown-item" href="register.php">Register</a>
        </div>


      <li class="nav-item">
        <a class="nav-link" href="viewfeedback.php">Feedback</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
    
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
          <a class="nav-link" href="login.php">Sign in</a>
      </li>
    </ul>

  </div>
</nav>


<!-- slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Register Complaints</h5>
        <p>You can Register complaints or grievance against issues you are currently facing, 
          We try to give you solution as soon as possible.</p>
        <a href="login.php">More Info</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Give feedback and Suggestion</h5>
        <p>Give Feedback or Suggestions on our platforms performance, services, and behaviours of teacher and admins. YOUR FEEDBACK IS VALUABLE FOR US!</p>
        <a href="login.php">More Info</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Get Solution</h5>
        <p>Get Solution as soon as possible after your request, Teachers and Admins are here to give you a Solution.</p>
        <a href="login.php">More Info</a>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</body>
</html>
