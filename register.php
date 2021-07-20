<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <?php
    include 'header.php';
  ?>
  <link rel="stylesheet" href="stylesignin.css">
  <script src="validation.js"></script>
  <script>
    function validate(){
      var n = document.frm.name.value;
      var phn = document.frm.phone.value;
      var email = document.frm.email.value;
      var pwd = document.frm.pass.value;

      var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
      var letters = /^[A-Za-z ]*$/;
      var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

      if(!letters.test(n))
      {
        alert('Name field required only alphabet characters');
        document.frm.name.focus();
        document.frm.name.select();
        return false;
      }
      else if(!filter.test(email))
      {
        alert('Invalid email');
        document.frm.email.focus();
        document.frm.email.select();
        return false;
      }
      else if(pwd.length < 8){
        alert('Password too short');
        document.frm.pass.focus();
        document.frm.pass.select();
        return false;
      }
      else if(pwd.length > 16){
        alert('Password too long');
        document.frm.pass.focus();
        document.frm.pass.select();
        return false;
      }

      return true;
    }
  </script>
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
          <!-- <a class="dropdown-item disabled" href="complaint.php">Complaint</a>
          <a class="dropdown-item disabled" href="Suggestion.php">Suggestions</a>
          <a class="dropdown-item disabled" href="solution.php">Solutions</a>
          <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="login.php">Login</a>
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

<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center"><b>Sign Up</b></h5>
            <form name="frm" onsubmit="return validate()" class="form-signin" method="POST">

            <div class="form-label-group">
                <select class="form-control" style="border-radius:10px;" name="user">
                  <option>Student</option>
                  <option>Teacher</option>
                </select>
              </div>

              <div class="form-label-group">
                <input type="name" name="name" id="inputName" class="form-control" placeholder="Name" required>
                <label for="inputName">Name</label>
              </div>

                <div class="form-label-group">
                <input type="text" id="inputAdd" class="form-control" name="address" placeholder="Address" required>
                <label for="inputAdd">Address</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="inputphn" class="form-control" name="phone" placeholder="phone" pattern="[0-9]{10}" required>
                <label for="inputphn">Phone no.</label>
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="pass" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="form-label-group">
                <select class="form-control" style="border-radius:10px;" name="secque">
                  <option>Select Security Question</option>
                  <option>What is your school name?</option>
                  <option>What are the last five digits of your driver's license number?</option>
                  <option>What is your middle name?</option>
                </select>
              </div>

              <div class="form-label-group">
                <input type="text" id="secans" class="form-control" placeholder="Enter Security Answer" name="secans" required>
                <label for="secans">Security Answer</label>
              </div>
            
              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="btnsub" type="submit">Register</button>

              <!-- <hr class="my-4"> -->

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
  $ut = $_POST['user'];
	$nm = $_POST['name'];
	$add = $_POST['address'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
	$phn = $_POST['phone'];
	$secque = $_POST['secque'];
	$secans = $_POST['secans'];
	
	include("connection.php");
	$q = "insert into registration values('$ut','$nm','$add','$email','$pass','$phn','$secque','$secans')";
	
	mysqli_query($cn,$q);
	mysqli_close($cn);
	
	echo "<script>alert('Registration Successful');window.location='login.php'</script>";
}
?>