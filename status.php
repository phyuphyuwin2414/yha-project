<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Attendance Dashboard | By Code Info</title>
  <link rel="stylesheet" href="css/01.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>
  .attendance .attendance-list span{
    margin:0 50px;
  }
</style>
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

            <li><a href="#" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Log out</span>
            </a></li>
        </ul>
        </nav>
        <section class="main">
      <div class="main-top">
        <h1>Status</h1>
        <i class="fas fa-user-cog"></i>
      </div>
    <!--<form action="" method="GET">
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Student Phone Number</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Student Phone Number" name="stu_ph" value="<?php //if(isset($_GET['stu_ph'])){echo $_GET['stu_ph'];}?>"><br>
        <input type="button" name="enter" id="myBtn" class="btn btn-outline-success" value="Enter" onclick="javascript:alert('Hello World!')">
    </div><br>
    <?php 
        /*include("inc/dbcon.php");
        if(isset($_POST['save'])){
            $st_date = $_POST['st_date'];
            $e_date = $_POST['e_date'];
            $sql = "SELECT * FROM attendance WHERE date BETWEEN '$st_date' AND '$e_date'";
            $result = mysqli_query($con,$sql);*/?>
      <?php
        /*include('inc/dbcon.php'); 
        if(isset($_GET['stu_ph'])){
          $stu_ph = $_GET['stu_ph'];
          $sql = "SELECT * FROM register WHERE phno = '$stu_ph'";
          $res = mysqli_query($con,$sql);
          if(mysqli_num_rows($res)>0){
            foreach($res as $row){*/
              ?>
              <div class="form-group row">
                <label for="text" class="col-sm-2 col-form-label">Student ID</label>
                <input type="number" class="form-control" value="<?php //echo $row['stu_id'];?>" name="stu_id">
                </div>
              </div><br/>
              <div class="form-group row">
                <label for="text" class="col-sm-2 col-form-label">Student Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php //echo $row['stu_name'];?>" name="stu_name">
                </div>
              </div><br/>
              <?php
            /*}
          }*/
      ?>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Student ID</label>
        <div class="col-sm-10">
          <?php 
            //while($row = mysqli_fetch_assoc($res)):
          ?>
        <input type="number" class="form-control" id="name" placeholder="Student ID" name="stu_id">
        <?php //endwhile;?>
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Student Name</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Student Name" name="stu_name">
        </div>
    </div><br/>
    <?php
        //}
    ?>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Status Details</label>
        <div class="col-sm-10">
            <select name="course" id="" class="form-control">
                <option value="">Choose Status Details</option>
                <?php 
                  /*include('inc/dbcon.php');
                  $sql = "SELECT * FROM status";
                  $res = mysqli_query($con,$sql);
                  while($row=mysqli_fetch_assoc($res)):*/
                ?>
                <option><?php //echo $row['id'];?>&nbsp;&nbsp;<?php //echo $row['description'];?></option>
                <?php //endwhile;?>
            </select>
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Remark</label>
        <div class="col-sm-10">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10">
        <input type="date" class="form-control" placeholder="Remark" id="date" name="date">
        </div>
    </div><br/>
    <form class="form-inline">          
        <button class="btn  my-2 my-sm-0" style="background-color:orangered; margin-left:170px;"  type="submit" name="save">Save</button>
    </form>
    </form><br/><br/>-->
    <!--Form-->
    <form action="" method="get">
      <div class="form-group row">
          <label for="text" class="col-sm-2 col-form-label"> Phone Number</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Student Phone Number" name="stu_ph" value="<?php if(isset($_GET['stu_ph'])){echo $_GET['stu_ph'];}?>">
          </div>
      </div><br>
      <?php 
        include('inc/dbcon.php'); 
        if(isset($_GET['stu_ph'])){
          $stu_ph = $_GET['stu_ph'];
          $sql = "SELECT * FROM register WHERE phno = '$stu_ph'";
          $res = mysqli_query($con,$sql);
          if(mysqli_num_rows($res)>0){
            foreach($res as $row){
      ?>
      <div class="form-group row">
          <label for="text" class="col-sm-2 col-form-label">Student ID</label>
          <div class="col-sm-10">
            <input type="text" value="<?php echo $row['stu_id'];?>" class="form-control" id="name" placeholder="Student ID" name="stu_id">
          </div>
      </div><br>
      <div class="form-group row">
          <label for="text" class="col-sm-2 col-form-label">Student Name</label>
          <div class="col-sm-10">
            <input type="text" value="<?php echo $row['stu_name'];?>" class="form-control" id="name" placeholder="Student Name" name="stu_name">
          </div>
      </div><br>
      <?php 
            }
          }
        }
      ?>
      <div class="form-group row">
          <label for="text" class="col-sm-2 col-form-label">Status Details</label>
          <div class="col-sm-10">
            <select name="course" id="" class="form-control">
                <option value="">Choose Status Details</option>
                <?php 
                  include('inc/dbcon.php');
                  $sql = "SELECT * FROM status";
                  $res = mysqli_query($con,$sql);
                  while($row=mysqli_fetch_assoc($res)):
                ?>
                <option><?php echo $row['id'];?>&nbsp;&nbsp;<?php echo $row['description'];?></option>
                <?php endwhile;?>
            </select>
        </div>
      </div><br>
      <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Remark</label>
        <div class="col-sm-10">
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="date" name="date">
        </div>
    </div><br/>
    <form class="form-inline">          
        <button class="btn  my-2 my-sm-0" style="background-color:orangered; margin-left:170px;"  type="submit" name="save">Save</button>
    </form>
    </form>
    <!-- End Form-->
      <section class="attendance" id="attend">
        <div class="attendance-list">
          <h1>Status List</h1>
          <div class="dt">
        <span style="padding-left:285px;">
            <div class="form-group row">
              <span style="margin-left:60px;font-weight:bold;">Start Date&nbsp; :&nbsp;&nbsp;<input type="date" id="stdate" name="st_date"></span>
              <span style="margin-left:40px;font-weight:bold;">End Date&nbsp; :&nbsp;&nbsp;<input type="date" id="edate" name="e_date"></span>
              <button name="save" id="d_search" class="btn btn-secondary" style="margin-left:30px;">Search</button>
            </div><br/>
        </span>
      </div><br>
          <table class="table">
            <thead>
              <tr>
                <th>Status ID</th>
                <th>Student Name</th>
                <th>Student Phone Number</th>
                <th>Status Details</th>
                <th>Remark</th>
                <th colspan="2" style="text-align:center">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php
                    /*$con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                    $sql = "SELECT * FROM attendance";
                    $res = mysqli_query($con,$sql);
                    while($row=mysqli_fetch_assoc($res)):*/
                ?>
                    <tr>
                        <td><?php //echo $row['status_id']; ?></td>
                        <td><?php //echo $row['student_phno']; ?></td>
                        <td><?php //echo $row['student_name']; ?></td>
                        <td><?php //echo $row['status_details']; ?></th>
                        <td><?php //echo $row['remark']; ?></td>
                        <td><a href="status_update.php?id=<?php //echo $row['student_id']; ?>" class="btn btn-outline-info" style="width:50px">Edit</a></td>
                        <td><a href="del_status.php?id=<?php //echo $row['student_id']; ?>" class="btn btn-outline-danger text-center" style="width:70px">Delete</a></td>
                <?php //endwhile; ?>
            </tbody>
          </table>
        </div>
      </section>
    </section>
  </div>
</div>
  <!--<script>
      var input = document.getElementById("name");
      input.addEventListener("keypress", function(event) {
      if (event.key === "Enter") {
      <?php //echo $row;?>
      document.getElementById("myBtn").click();
      }
    });
  </script>-->
</body>
</html>