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
        <h1>Edit Profile Details</h1>
        <hr>
        <?php
        include("connection.php");
        $u = $_SESSION['email'];

        $q = "select * from registration where email='$u'";
        $rs = mysqli_query($cn,$q);
        $n="";
        $ad="";
        $ps="";
        $phn="";

        if($a=mysqli_fetch_array($rs)){
            $n = $a['name'];
            $em = $a['email'];
            $ad = $a['address'];
            $ps = $a['password'];
            $phn = $a['phone_no'];
        
        ?>

        <form method="POST">
            <input type="text" name="txtnm" value="<?php echo $n; ?>" placeholder="Enter Your Name">
            <br>
            <input type="email" name="txtem" value="<?php echo $em; ?>" readonly>
            <br>
            <textarea name="txtadd" placeholder="Enter Address" cols="30" rows="4"><?php echo $ad; ?></textarea>
            <br>
            <input type="text" name="txtps" placeholder="Enter Password" value="<?php echo $ps; ?>">
            <br>
            <input type="text" name="txtphn" placeholder="Enter Phone Number" value="<?php echo $phn; ?>">
            <br>
            <input type="submit" value="Submit" name="butsub">
        </form>
    </div>

    <?php
    if(isset($_POST['butsub'])){
        include("connection.php");
        $nc = $_POST['txtnm'];
        $adc = $_POST['txtadd'];
        $psc = $_POST['txtps'];
        $phnc = $_POST['txtphn'];

        $qc = "update registration set name='$nc',address='$adc',password='$psc',phone_no='$phnc' where email='$u'";
        mysqli_query($cn,$qc);
        echo "<script>alert('Profile Updated');window.location='viewprofile.php';</script>";
    }
    }
    else
    {
    ?>
        <form method="POST">
            <input type="text" name="txtnm" value="<?php echo $n; ?>" placeholder="Enter Your Name">
            <br>
            <input type="email" name="txtem" value="<?php echo $em; ?>" readonly>
            <br>
            <textarea name="txtadd" placeholder="Enter Address" cols="30" rows="4"><?php echo $ad; ?></textarea>
            <br>
            <input type="text" name="txtps" placeholder="Enter Password" value="<?php echo $ps; ?>">
            <br>
            <input type="text" name="txtphn" placeholder="Enter Phone Number" value="<?php echo $phn; ?>">
            <br>
            <input type="submit" value="Submit" name="butsub">
        </form>

        <?php
        if(isset($_POST['butsub'])){
           include("connection.php");
           $nc = $_POST['txtnm'];
           $adc = $_POST['txtadd'];
           $psc = $_POST['txtps'];
           $phnc = $_POST['txtphn'];
    
           $qc = "insert into registration(name,address,password,phone_no) values('$nc','$adc','$psc','$phnc')";
           mysqli_query($cn,$qc);
           echo "<script>alert('Profile Updated');window.location='viewprofile.php';</script>";
        }
        }
        ?>
</body>
</html>