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
    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(img/sug.jpg);
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
          <a class="dropdown-item" href="solution.php">Suggestions</a>
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
            <h5 class="card-title text-center"><b>Submit Suggestion</b></h5>
            <form class="form-signin" method="POST">
            <!-- <div class="form-label-group">
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address">
                <label for="inputEmail">Email address</label>
              </div> -->

              <div class="form-label-group">
                <select class="form-control" name="sugtype" style="border-radius:10px;">
                  <option>Choose Suggestions</option>
                  <option>Suggestion on Syllabus</option>
                  <option>Suggestion on Campus</option>
                  <option>Suggestion on Teaching</option>
                  <option>Other Suggestion</option>
                </select>
              </div>

              <div class="form-label-group">
                <textarea style="border-radius:10px;" name="suggestion" rows="7" type="text" id="regcomp" class="form-control" placeholder="Type Suggestion....." required></textarea>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="btnsub" type="submit">Submit Your Suggestion</button>
              <hr class="my-4">
              <button class="btn btn-lg btn-link btn-block"><a href="viewsuggestion.php" class="col-md-12">View others Suggestions</a></button>
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
  $st = $_POST['sugtype'];
  $sug = $_POST['suggestion'];
  $date = date('d-m-y');

	include("connection.php");
  $q = "insert into student_suggestion(email, suggestion_type, suggestion, date) values('$em','$st','$sug','$date')";

  mysqli_query($cn,$q);
  mysqli_close($cn);
  
  echo "<script>alert('Suggestion Registered Successfully');window.location='index.php'</script>";
}
?>