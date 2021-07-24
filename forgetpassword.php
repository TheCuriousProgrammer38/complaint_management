<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    include 'header.php';
    ?>
    <link rel="stylesheet" href="stylesignin.css">
</head>
<body>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center"><b>Forgot Password</b></h5>
            <form class="form-signin" method="POST">    
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required>
                <label for="inputEmail">Email address</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="btnsub">Next</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

<?php
if(isset($_POST['btnsub']))
{
$em=$_POST['email'];
include('connection.php');
$q="select * from registration where email='$em'";
$result=mysqli_query($cn,$q);
if($a=mysqli_fetch_array($result))
{
 $sq=$a["security_question"];
 ?>

<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <form class="form-signin" method="POST">               
              <div class="form-label-group">
                <input type="hidden" class="form-control" name="txtem" value="<?php echo $em; ?>" required>
                <label for="inputEmail">Email address</label>
              </div>
              <div class="form-label-group">
                <input type="text" class="form-control" name="squ" value="<?php echo $sq; ?>" id="inputQue" required>
                <label for="inputQue">Security Question</label>
              </div>
              <div class="form-label-group">
                <input type="text" class="form-control" name="ans" id="inputAns" required>
                <label for="inputAns">Security Answer</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="btns">Submit</button>
            
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
<?php
}
mysqli_close($cn);
}
?>

<?php
if(isset($_POST["btns"]))
{
$em=$_POST["txtem"];
$sq=$_POST["squ"];
$an=$_POST["ans"];
include('connection.php');
$q="select * from registration where email='$em' and security_question='$sq' and security_answer='$an'";
$result=mysqli_query($cn,$q);
if($a=mysqli_fetch_array($result))
{
$answer=$a["password"];
?>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
          <h5 class="card-title text-center"><b>Your Password is <?php echo $answer ?></b></h5>
          </div>
        </div>
      </div>
    </div>
</div>
<?php
}
}
?>

</div>
</body>
</html>