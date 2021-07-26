<!DOCTYPE html>
<html lang="en">
<head>
<?php
include 'header.php';
?>

<style>
body{
    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(img/feed2.jpg);
    background-size: cover;
}

.img-thumbnail{
  margin: 10px 10px 10px 10px;
  background-color: #f1f2f6;
  border: 1px solid #f1f2f6;
  padding: 0px 0px 10px 10px;
}

.viewpage_title{
  text-align: center;
  color: #fff;
  font-size: 60px;
}

.reviews-members .media .mr-3 {
    width: 56px;
    height: 56px;
    object-fit: cover;
}
.rounded-pill {
    border-radius: 50rem!important;
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
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="profileDropdown" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" href="#">Profile</a>
          <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="viewprofile.php">Dashboard</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
<div class="col-md-12">
    <div class="offer-dedicated-body-left">
        <div class="tab-content" id="pills-tabContent">
            
            
            <div class="tab-pane fade active show" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab">
                <div id="ratings-and-reviews" class="bg-white rounded shadow-sm p-4 mb-4 clearfix">
                    <h5 class="mb-0 pt-1">Feedback</h5>
                </div>
                

                <div class="bg-white rounded shadow-sm p-4 mb-4 restaurant-detailed-ratings-and-reviews">
                    <h5 class="mb-1">All Feedbacks</h5>

                <?php
                include('connection.php');
                $rs = mysqli_query($cn,"select * from feedback");
                while($a=mysqli_fetch_array($rs))
                {
                    $e = $a["email"];
                    $f = $a["feedback"];
                    $d = $a["date"];
                ?>

                    <div class="reviews-members pt-4 pb-4">
                        <div class="media">
                            <a href="#"><img alt="Generic placeholder image" src="img/profile_img.png" class="mr-3 rounded-pill"></a>
                            <div class="media-body">
                                <div class="reviews-members-header">
                                    <h6 class="mb-1"><?php echo $e; ?></h6>
                                    <p class="text-gray"><?php echo $d; ?></p>
                                </div>
                                <div class="reviews-members-body">
                                    <p><?php echo $f; ?></p>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                <?php
                }
                ?>
                </div>
               
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>

