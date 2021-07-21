<!DOCTYPE html>
<html lang="en">
<head>
<?php
include 'header.php';
?>

<style>
.wrapper{
    /* min-height: 100vh; */
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f1f1f1;    
}

.about-section{
    background: url(img/about.jpg) no-repeat left;
    background-size: 55%;
    background-color: #353b48;
    overflow: hidden;
    padding: 100px 0;
}

.inner-container{
    width: 55%;
    float: right;
    background-color: #f1f2f6;
    padding: 150px;
}

.inner-container h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
} 

.text{
    font-size: 13px;
    color: #545454;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
}

.skills{
    display: flex;
    justify-content: space-between;
    font-weight: 700;
    font-size: 13px;
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
          <!-- <a class="dropdown-item disabled" href="complaint.php">Complaint</a>
          <a class="dropdown-item disabled" href="Suggestion.php">Suggestions</a>
          <a class="dropdown-item disabled" href="solution.php">Solutions</a>
          <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="login.php">Login</a>
          <a class="dropdown-item" href="register.php">Register</a>
        </div>


      <li class="nav-item">
        <a class="nav-link" href="viewfeedback.php">Feedback</a>
      </li>
      <li class="nav-item active">
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

<div class="wrapper">
<div class="about-section">
<div class="inner-container">
<h1>About us </h1>
<p class="text">
Online Complaint management system is based on complaints of students or teachers regarding to issues of college, In college campus we daily walk into issues or grieviences and we want solution for that.
We have Admins and teachers for Solving complaints of students, And we try to reply as soon as possible.
</p>
<div class="skills">
<span>Register Complaint</span>
<span>Get Solution</span>
</div>
</div>
</div>
</div>

</body>
</html>
