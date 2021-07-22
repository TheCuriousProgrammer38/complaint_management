<?php
session_start();
$em = $_SESSION['email'];
$u = $_GET['sug_no'];
include("connection.php");
include("header.php");
$q = "select * from student_suggestion where sug_no='$u'";
$rs = mysqli_query($cn,$q);

$ct ="";
$com ="";
$d ="";

if($a=mysqli_fetch_array($rs)){
    $ct=$a['suggestion_type'];
    $com=$a['suggestion'];
    $d=$a['date'];
}
?>

<html>
<body>
    <div class="container">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center"><b>Update Suggestion</b></h5>
            <form method="POST">
            <div class="form-label-group">
            <select name="txtct" class="form-control" value="<?php echo $ct ?>" style="border-radius:10px;">
            <option>Choose Suggestions</option>
            <option>Suggestion on Syllabus</option>
            <option>Suggestion on Campus</option>
            <option>Suggestion on Teaching</option>
            <option>Other Suggestion</option>
            </select>
            </div>
            <br>
            <div class="form-label-group">
            <textarea style="border-radius:10px;" class="form-control" rows="7" type="text" name="txtcom" placeholder="Type Suggestion....." required></textarea>
            </div>
            <br>
            <button class="btn btn-primary text-uppercase" name="btnup" type="submit">Update Suggestion</button>
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

    $q = "update student_suggestion set suggestion_type='$ctc',suggestion='$comc',date='$dc' where sug_no='$u'";
    mysqli_query($cn,$q);
    echo "<script>alert('Suggestion updated');window.location='managesuggestion.php'</script>";
    mysqli_close($cn);
}
?>