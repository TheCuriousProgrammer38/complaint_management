<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
include 'header.php';
?>
<link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Complaint Management</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="profileDropdown" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" href="#">Admin</a>
          <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
    </ul>
</nav>

<div class="container mb-4 main-container">
    <div class="row">
        <div class="col-lg-4 pb-5">
            <!-- Account Sidebar-->
            <div class="author-card pb-3">
                <div class="author-card-cover"></div>
                <div class="author-card-profile">
                    <div class="author-card-avatar"><img src="img/profile_img.png" alt="Admin">
                    </div>
                    <div class="author-card-details">
                        <h5 class="author-card-name text-lg">Admin</h5><span class="author-card-position">Admin</span>
                    </div>
                </div>
            </div>
            <div class="wizard">
                <nav class="list-group list-group-flush">
                    <a class="list-group-item" href="index.php">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="d-inline-block font-weight-medium text-uppercase">Student Complaints</div>
                            </div>
                        </div>     
                    </a>
                    <a class="list-group-item" href="teachercomplaint.php">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="d-inline-block font-weight-medium text-uppercase">Teacher Complaints</div>
                            </div>
                        </div>     
                    </a>
                    <a class="list-group-item" href="#">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="d-inline-block font-weight-medium text-uppercase">Student Suggestions</div>
                            </div>
                        </div>
                    </a>
                    <a class="list-group-item" href="teachersuggestion.php">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="d-inline-block font-weight-medium text-uppercase">Teacher Suggestions</div>
                            </div>
                        </div>
                    </a>
                    <a class="list-group-item active" href="feedback.php">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="d-inline-block font-weight-medium text-uppercase">Feedback</div>
                            </div>
                        </div>
                    </a>
                </nav>
            </div>
        </div>
        <!-- Orders Table-->
        <div class="col-lg-8 pb-5">
            <div class="d-flex justify-content-end pb-3">
                <div class="form-inline">
                    <label class="text-muted mr-3" for="order-sort">Sort by</label>
                    <select class="form-control" id="order-sort">
                        <option>All</option>
                        <option>Student</option>
                        <option>Teacher</option>
                        <option>In Progress</option>
                        <option>Delayed</option>
                        <option>Canceled</option>
                    </select>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Email</th>
                            <th>Suggestion type</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    include("connection.php");
                    $q="select * from feedback";
                    $rs=mysqli_query($cn,$q);
                    while($a=mysqli_fetch_array($rs))
                    {
                    $em=$a['email'];
                    $feed=$a['feedback'];
                    $d=$a['date'];
                    $u=$a['feed_id'];
                    
                    echo "<tr>";
                    echo "<td><a href=delf.php?feed_id=$u>Delete</a> <a
                    href=ansf.php?feed_id=$u>Answer</a> </td><td>$em</td><td>$feed</td><td>$d</td>";
                    echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>
