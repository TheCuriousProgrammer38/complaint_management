<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
include 'header.php';
?>
<link rel="stylesheet" href="stylesignin.css">
<style>
body{
    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(img/2.jpg);
    background-size: cover;
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
    
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Actions
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="complaint.php">Complaint</a>
          <a class="dropdown-item" href="Suggestion.php">Suggestions</a>
          <a class="dropdown-item" href="solution.php">Solutions</a>
          <!-- <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="login.php">Login</a>
          <a class="dropdown-item" href="register.php">Register</a> -->
        </div>


      <li class="nav-item">
        <a class="nav-link" href="feedback.php">Feedback</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>

    </ul>
  </div>
</nav>

<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center"><b>Register Complaint</b></h5>
            <form class="form-signin" method="POST">
              <div class="form-label-group">
                <select class="form-control" name="comtype" style="border-radius:10px;">
                  <option>Choose Complaint Type</option>
                  <option>Complaint over Teacher</option>
                  <option>Complaint over other Student</option>
                  <option>Complaint over other Faculty</option>
                  <option>Other Complaint</option>
                </select>
              </div>

              <div class="form-label-group">
                <textarea style="border-radius:10px;" rows="7" name="complaint" type="text" id="regcomp" class="form-control" placeholder="Type Complaint....." required></textarea>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="btnsub" type="submit">Submit Complaint</button>
              <hr class="my-4">
              <button class="btn btn-lg btn-link btn-block"><a href="viewcomplaint.php" class="col-md-12">View others Complaints</a></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>

<?php
if(isset($_POST['btnsub'])){
  $em = $_SESSION['email'];
  $ct = $_POST['comtype'];
  $com = $_POST['complaint'];
  $date = date('d-m-y');

	include("connection.php");
  $q = "insert into teacher_complaint(email, complain_type, complain, t_date) values('$em','$ct','$com','$date')";

  mysqli_query($cn,$q);
  mysqli_close($cn);
  
  echo "<script>alert('Complaint Registered Successfully');window.location='index.php'</script>";
}
?>