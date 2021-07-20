<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
include 'header.php';
?>
</head>
<body>
    <div id="pr">
        <h1>Profile Details</h1>
        <hr>
        <?php
        include("connection.php");
        $u = $_SESSION['email'];
        $q = "select * from registration where email='$u'";
        $rs = mysqli_query($cn,$q);

        if($a=mysqli_fetch_array($rs)){
            $n = $a['name'];
            $em = $a['email'];
            $ad = $a['address'];
            $ps = $a['password'];
            $phn = $a['phone_no'];
        }
        ?>
        <h4><?php echo $n; ?></h4>
        <h4><?php echo $em; ?></h4>
        <h4><?php echo $ad; ?></h4>
        <h4><?php echo $ps; ?></h4>
        <h4><?php echo $phn; ?></h4>
        <a href="updateprofile.php">Edit profile</a>
    </div>
</body>
</html>