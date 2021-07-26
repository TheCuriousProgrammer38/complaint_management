<?php
session_start();
$u = $_GET['feed_id'];
include("connection.php");
include("header.php");
$q = "select * from feedback where feed_id='$u'";
$rs = mysqli_query($cn,$q);

$em="";
$com="";

if($a=mysqli_fetch_array($rs)){
    $em=$a['email'];
    $com=$a['feedback'];
    $d=$a['date'];
}
?>

<html>
<body>
    <div class="container">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center"><b>Answer The Feedback</b></h5>
            <form method="POST">
            <div class="form-label-group">
            <input type="email" name="email" id="inputEmail" class="form-control" value="<?php echo $em; ?>" readonly>
            </div>
            <br>
            <div class="form-label-group">
            <textarea style="border-radius:10px;" class="form-control" rows="2" type="text" readonly><?php echo $com; ?></textarea>
            </div>
            <br>
            <div class="form-label-group">
            <textarea style="border-radius:10px;" class="form-control" rows="4" type="text" placeholder="Enter Answer" name="ans" required></textarea>
            </div>
            <br>
            <button class="btn btn-primary text-uppercase" name="btnup" type="submit">Reply with answer</button>
            </form>
            </div>
        </div>
    </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['btnup']))
{
    extract($_POST);
    $ans = $_POST['ans'];

    $q = "update feedback set answer='$ans' where feed_id='$u'";
    mysqli_query($cn,$q);
    echo "<script>alert('Answer Added Successfully');window.location='feedback.php'</script>";
    mysqli_close($cn);
}
?>