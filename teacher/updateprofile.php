<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
include 'header.php';
?>
<style>
    body{
        margin-top:20px;
        color: #1a202c;
        text-align: left;
        background-color: #e2e8f0;    
    }
    .main-body {
        padding: 15px;
    }
    .card {
        box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0,0,0,.125);
        border-radius: .25rem;
    }

    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1rem;
    }

    .gutters-sm {
        margin-right: -8px;
        margin-left: -8px;
    }

    .gutters-sm>.col, .gutters-sm>[class*=col-] {
        padding-right: 8px;
        padding-left: 8px;
    }
    .mb-3, .my-3 {
        margin-bottom: 1rem!important;
    }

    .bg-gray-300 {
        background-color: #e2e8f0;
    }
    .h-100 {
        height: 100%!important;
    }
    .shadow-none {
        box-shadow: none!important;
    }
    .btn a{
      text-decoration: none;
      color: #fff;
    }
</style>
</head>
<body>
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
            $ut = $a['usertype'];
            $n = $a['name'];
            $em = $a['email'];
            $ad = $a['address'];
            $ps = $a['password'];
            $phn = $a['phone_no'];
        
        ?>

    <div class="container">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="img/profile_img.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $n; ?></h4>
                      <p class="text-secondary mb-1"><?php echo $ut; ?></p> 
                      <button class="btn btn-primary"><a href="managecomplaint.php">Complaints</a></button>
                      <button class="btn btn-primary">Suggestions</button>
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
            <div class="col-lg-8">
					<div class="card">
						<div class="card-body">
                            <form method="POST">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="txtnm" value="<?php echo $n; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="email" name="txtem" value="<?php echo $em; ?>" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="txtphn" value="<?php echo $phn; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="txtadd" class="form-control" value="<?php echo $ad; ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Password</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="txtps" placeholder="Enter Password" value="<?php echo $ps; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" name="butsub" class="btn btn-primary px-4" value="Save Changes">
                                    </div>
                                </div>
                            </form>
						</div>
					</div>
          </div>
        </div>
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
    <div class="container">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="img/profile_img.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $n; ?></h4>
                      <p class="text-secondary mb-1">Full Stack Developer</p>
                      <p class="text-muted font-size-sm"><?php echo $ad; ?></p>
                      <a href="managecomplaint.php" class="btn btn-primary">Complaints</a>
                      <a href="managesuggestion.php" class="btn btn-primary">Suggestions</a>
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
            <div class="col-lg-8">
					<div class="card">
						<div class="card-body">
                            <form method="POST">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="txtnm" value="<?php echo $n; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="email" name="txtem" value="<?php echo $em; ?>" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="txtphn" value="<?php echo $phn; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="txtadd" class="form-control" value="<?php echo $ad; ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Password</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="txtps" placeholder="Enter Password" value="<?php echo $ps; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" name="butsub" class="btn btn-primary px-4" value="Save Changes">
                                    </div>
                                </div>
                            </form>
						</div>
					</div>
          </div>
        </div>
    </div>

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