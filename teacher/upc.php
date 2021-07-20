<?php
session_start();
$em = $_SESSION['email'];
$u = $_GET['que_no'];
include("connection.php");
include("header.php");
$q = "select * from teacher_complaint where que_no='$u'";
$rs = mysqli_query($cn,$q);

$ct ="";
$com ="";
$d ="";

if($a=mysqli_fetch_array($rs)){
    $ct=$a['complain_type'];
    $com=$a['complain'];
    $d=$a['t_date'];
}
?>

<html>
<body>
    <div class="container">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center"><b>Update complaint</b></h5>
            <form method="POST">
            <div class="form-label-group">
            <select name="txtct" class="form-control" value="<?php echo $ct ?>" style="border-radius:10px;">
            <option>Choose Complaint Type</option>
            <option>Complaint over Teacher</option>
            <option>Complaint over other Student</option>
            <option>Complaint over other Faculty</option>
            <option>Other Complaint</option>
            </select>
            </div>
            <br>
            <div class="form-label-group">
            <textarea style="border-radius:10px;" class="form-control" rows="7" type="text" name="txtcom" placeholder="Type Complaint....." required></textarea>
            </div>
            <br>
            <button class="btn btn-primary text-uppercase" name="btnup" type="submit">Update Complaint</button>
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
    $ctc = $_POST['txtct'];
    $comc = $_POST['txtcom'];
    $dc = date('d-m-y');

    $q = "update teacher_complaint set complain_type='$ctc',complain='$comc',t_date='$dc' where que_no='$u'";
    mysqli_query($cn,$q);
    echo "<script>alert('Complaint updated');window.location='managecomplaint.php'</script>";
    mysqli_close($cn);
}
?>