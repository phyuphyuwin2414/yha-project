<?php
if (isset($_GET['id'])) {
		$id = $_GET['id'];
        $con = mysqli_connect("localhost","root","","yha");
        $sql = "SELECT a.*,c.*,s.*,se.* FROM attendance AS a LEFT JOIN course AS c ON a.course_id=c.courseid LEFT JOIN section AS s ON a.section_id=s.sectionid LEFT JOIN sectiontime AS se ON a.time_id=se.timeid WHERE attend_id = '$id'";
        $res = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($res)){
	}
?>
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
    <?php include("nav.php");?>
    <section class="main">
      <div class="main-top">
        <h1>Attendance</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      
    <form action="" method="post">
    <div class="form-group row">
        <label for="studentId" class="col-sm-2 col-form-label">Student ID</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="studentcId" value="<?php echo $row['student_id'];?>" placeholder="Student ID" name="student_id">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Student Name</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" value="<?php echo $row['student_name'];?>" id="name" placeholder="Student Name" name="student_name">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10">
        <input type="date" class="form-control" value="<?php echo $row['dat'];?>" id="date" name="date">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Courses</label>
        <div class="col-sm-10">
            <select name="course" id="" class="form-control">
                <option value="<?php echo $row['courseid'];?>"><?php echo $course;?>&nbsp;<?php echo $row['coursename'];?></option>
                <?php 
                  include('inc/dbcon.php');
                  $sql = "SELECT * FROM course";
                  $res = mysqli_query($con,$sql);
                  while($row=mysqli_fetch_assoc($res)):
                ?>
                <option><?php echo $row['courseid'];?>&nbsp;&nbsp;<?php echo $row['coursename'];?></option>
                <?php endwhile;?>
            </select>
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Choose Section</label>
        <div class="col-sm-10">
            <select name="section" id="" class="form-control">
                <option value="<?php echo $row['sectionid'];?>"><?php echo $section;?>&nbsp;<?php echo $row['sectionname'];?></option>
                <?php 
                  include('inc/dbcon.php');
                  $sql = "SELECT * FROM section";
                  $res = mysqli_query($con,$sql);
                  while($row=mysqli_fetch_assoc($res)):
                ?>
                <option><?php echo $row['sectionid'];?>&nbsp;&nbsp;<?php echo $row['sectionname'];?></option>
                <?php endwhile;?>
            </select>
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Time</label>
        <div class="col-sm-10">
            <select name="time" id="" class="form-control">
                <option value="<?php echo $row['timeid'];?>"><?php echo $row['timeid'];?> <?php echo $row['timename'];?></option>
                <?php 
                  include('inc/dbcon.php');
                  $sql = "SELECT * FROM sectiontime";
                  $res = mysqli_query($con,$sql);
                  while($row=mysqli_fetch_assoc($res)):
                ?>
                <option><?php echo $row['timeid'];?>&nbsp;&nbsp;<?php echo $row['timename'];?></option>
                <?php endwhile;?>
            </select>
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Attendance</label>
        <div class="col-sm-10">
            <select name="attend" id="" class="form-control">
                <option value="<?php echo $row['attend'];?>"><?php echo $row['attend'];?></option>
                <option value="Present">Present</option>
                <option value="Absent">Absent</option>
                <option value="Leave">Leave</option>
            </select>
        </div>
    </div><br/>
    <div class="form-inline">
      <button class="btn btn-success" type="submit" name="update" >Update</button>
    </div>
    </form><br/><br/>
    <?php }?>
    <?php 
        if(isset($_POST['update'])){
            $stu_id = $_POST['student_id'];
            $stu_name = $_POST['student_name'];
            $date = $_POST['date'];
            $course = $_POST['course'];
            $section = $_POST['section'];
            $time = $_POST['time'];
            $attend = $_POST['attend'];

            $con = mysqli_connect("localhost","root","","yha");
            $sql = "UPDATE attendance SET student_id='$stu_id',student_name='$stu_name',course_id='$course',dat='$date',section_id='$section',time_id='$time',attend='$attend' WHERE attend_id='$id'";
            mysqli_query($con, $sql);
        }
        
    ?>
</body>
</html>
