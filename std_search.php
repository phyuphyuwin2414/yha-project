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
        <h1>Status Details</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div>
        <?php 
        include("inc/dbcon.php");
        if(isset($_POST['save'])){
            $st_date = $_POST['st_date'];
            $e_date = $_POST['e_date'];
            $status = $_POST['status'];
            if($st_date=='' || $e_date=='' || $status==''){
              echo "You have to choose.";
            }else{
            if($status==2){
            $sql = "SELECT s.*,re.stu_name,re.phno,sta.* FROM status_details AS s LEFT JOIN register AS re ON s.student_id = re.stu_id LEFT JOIN status AS sta ON s.status_id = sta.id WHERE dt_start BETWEEN '$st_date' AND '$e_date' AND id=2";
            //$sql = "SELECT s.*,stu.student_name,stu.phNo,sta.* FROM status_details AS s LEFT JOIN student AS stu ON s.student_id = stu.student_id LEFT JOIN status AS sta ON s.status_id = sta.id WHERE dt_start BETWEEN '$st_date' AND '$e_date' AND id=2";
            $result = mysqli_query($con,$sql);
            if($st_date<$e_date){
            if(mysqli_num_rows($result)>0){
              ?>
                <table class="table  mt-4">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Status ID</th>
                        <th>Student Name</th>
                        <th>Student Phone Number</th>
                        <th>Remark</th>
                        <th>Date</th>
                        <th>Status Details</th>
                        <th colspan="2" style="text-align:center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                        
                            while($row=mysqli_fetch_assoc($result)):
                        ?>
                        <tr>
                            <td><?php echo $row['std_id']; ?></td>
                            <td><?php echo $row['status_id']; ?></td>
                            <td><?php echo $row['stu_name']; ?></td>
                            <td><?php echo $row['phno']; ?></td>
                            <td><?php echo $row['remark']; ?></td>
                            <td><?php echo $row['dt_start']; ?></td>
                            <td class="btn" width="120px" style="background-color:<?php if($row['id']==1){
                                echo '#B43CE3';
                            }elseif($row['id']==2){
                                echo '#FFFF00';
                            }else{
                                echo '#00FF4F';
                            }  
                            ?>"><?php echo $row['description']; ?></td>
                            <td><a href="status_update.php?id=<?php echo $row['std_id']; ?>" class="btn btn-outline-info" style="width:50px">Edit</a></td>
                            <td><a href="status_delete.php?id=<?php echo $row['std_id']; ?>" class="btn btn-outline-danger text-center" style="width:70px">Delete</a></td>
                    </tbody>
                    <?php endwhile; ?>
                </table>
            <?php
            }else{
                echo "No record found.";
            }
            }
            else{
              echo "Start date must less than end date!";
            }
          }else{
            $sql = "SELECT s.*,re.stu_name,re.phno,sta.* FROM status_details AS s LEFT JOIN register AS re ON s.student_id = re.stu_id LEFT JOIN status AS sta ON s.status_id = sta.id WHERE dt_start BETWEEN '$st_date' AND '$e_date' AND id=3";
            $result = mysqli_query($con,$sql);
            if($st_date<$e_date){
            if(mysqli_num_rows($result)>0){
              ?>
                <table class="table table-bordered table striped mt-4">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Status ID</th>
                        <th>Student Name</th>
                        <th>Student Phone Number</th>
                        <th>Remark</th>
                        <th>Date</th>
                        <th>Status Details</th>
                        <th colspan="2" style="text-align:center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                        
                            while($row=mysqli_fetch_assoc($result)):
                        ?>
                        <tr>
                            <td><?php echo $row['std_id']; ?></td>
                            <td><?php echo $row['status_id']; ?></td>
                            <td><?php echo $row['stu_name']; ?></td>
                            <td><?php echo $row['phno']; ?></td>
                            <td><?php echo $row['remark']; ?></td>
                            <td><?php echo $row['dt_start']; ?></td>
                            <td class="btn" width="120px" style="background-color:<?php if($row['id']==1){
                                echo '#B43CE3';
                            }elseif($row['id']==2){
                                echo '#FFFF00';
                            }else{
                                echo '#00FF4F';
                            }  
                            ?>"><?php echo $row['description']; ?></td>
                            <td><a href="status_update.php?id=<?php echo $row['student_id']; ?>" class="btn btn-outline-info" style="width:50px">Edit</a></td>
                            <td><a href="status_delete.php?id=<?php echo $row['student_id']; ?>" class="btn btn-outline-danger text-center" style="width:70px">Delete</a></td>
                    </tbody>
                    <?php endwhile; ?>
                </table>
            <?php
            }else{
                echo "No record found.";
            }
            }
            else{
              echo "Start date must less than end date!";
            }
          }
          }
        }
        ?>
        </div>
        </section>
    </div>
</body>
</html>