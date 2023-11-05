<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searching with date</title>
    <link rel="stylesheet" href="css/01.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    
</head>
<body>
      <?php

      $arr = ["dd","ff"];  // Initialize the array

      
        echo $arr[0];  // This will not trigger an error
      
      ?>
    <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="img/yha_logo.png">
          <span class="nav-item"></span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-user"></i>
          <span class="nav-item">Admin</span>
        </a></li>
        <li><a href="re_form.php">
          <i class="fas fa-address-card"></i>
          <span class="nav-item">Registration</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-file"></i>
          <span class="nav-item">Attendance</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Report</span>
        </a></li>
        <li><a href="status.php">
          <i class="fas fa-check"></i>
          <span class="nav-item">Status</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-arrow-right"></i>
          <span class="nav-item">Dropout</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-star"></i>
          <span class="nav-item">Complete</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Setting</span>
        </a></li>

        <li><a href="01.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>
    <section class="main">
      <div class="main-top">
        <h1>Attendance</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div>
        <?php 
        include("inc/dbcon.php");
        if(isset($_POST['save'])){
            $st_date = $_POST['st_date'];
            $e_date = $_POST['e_date'];
            $sql = "SELECT * FROM attendance WHERE date BETWEEN '$st_date' AND '$e_date'";
            $result = mysqli_query($con,$sql);
            if(mysqli_num_rows($result)>0){?>
                <table class="table table-bordered table striped mt-4">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Courses</th>
                            <th>Date</th>
                            <th>Section</th>
                            <th>Time</th>
                            <th>Attendance</th>
                            <th colspan="2" style="text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while($row=mysqli_fetch_assoc($result)):
                        ?>
                        <tr>
                            <td><?php echo $row['student_id']; ?></td>
                            <td><?php echo $row['student_name']; ?></td>
                            <td><?php echo $row['course']; ?></th>
                            <td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['section']; ?></td>
                            <td><?php echo $row['time']; ?></td>
                            <td><?php echo $row['attend']; ?></td>
                            <td><a href="attendupdate.php?id=<?php echo $row['student_id']; ?>" class="btn btn-outline-info" style="width:50px">Edit</a></td>
                            <td><a href="del_attend.php?id=<?php echo $row['student_id']; ?>" class="btn btn-outline-danger text-center" style="width:70px">Delete</a></td>
                    </tbody>
                    <?php endwhile; ?>
                </table>
            <?php
            }else{

            }
        }
        ?>
        </div>
        </section>
    </div>
</body>
</html>