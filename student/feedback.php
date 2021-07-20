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
    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(img/feed2.jpg);
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
    
      <li class="nav-item dropdown">
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


      <li class="nav-item active">
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
            <h5 class="card-title text-center"><b>Feedback</b></h5>
            <form class="form-signin" method="POST">
              <!-- <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required>
                <label for="inputEmail">Email address</label>
              </div> -->

              <div class="form-label-group">
                <textarea style="border-radius:10px;" rows="7" type="text" name="feed" id="inputMsg" class="form-control" placeholder="Enter Feedback Message..." required></textarea>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="btnsub" type="submit">Send Feedback</button>
              <hr class="my-4">
              <button class="btn btn-lg btn-link btn-block"><a href="viewfeedback.php" class="col-md-12">View others Feedback</a></button>
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
	$email = $_SESSION['email'];
	$msg = $_POST['feed'];
  $dt = date('d-m-y');
	
	include("connection.php");
	$q = "insert into feedback values('$email','$msg','$dt')";
	
	mysqli_query($cn,$q);
	mysqli_close($cn);
	
	echo "<script>alert('feedback submitted Successful');window.location='index.php'</script>";
}
?>