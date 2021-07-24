<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
include 'header.php';
?>
<link rel="stylesheet" href="stylesignin.css">

<style>
  .container{
    margin-top: 80px;
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
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Complaint</a>
      </li> -->


      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Actions
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">Login</a>
          <a class="dropdown-item" href="register.php">Register</a>
        </div>


      <li class="nav-item">
        <a class="nav-link" href="viewfeedback.php">Feedback</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>

    </ul>
  </div>
</nav>

<?php
if(isset($_POST['btnlog'])){
  $em = $_POST['email'];
  $pass = $_POST['pwd'];

  include('connection.php');

  $q = "select * from admin_login where email='$em' and password='$pass'";
  $result = mysqli_query($cn,$q);

  if($a=mysqli_fetch_array($result)){
    $_SESSION['email']=$em;
    echo "<script>window.location='admin/index.php';</script>";
  }else{
      echo "<script>alert('Invalid Username or Password');</script>";
  }
  mysqli_close($cn);
}
?>

<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center"><b>Admin</b></h5>
            <form class="form-signin" method="POST">
                            
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" required> 
                <label for="inputPassword">Password</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="btnlog">Sign in</button>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>