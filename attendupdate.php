<?php 
include("inc/dbcon.php");
if(isset($_GET['id'])){
    $stuid=$_GET['id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Attendance</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <section class="main">
      <div class="main-top">
        <h1>Attendance</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <?php
        $sql = "SELECT a.*,c.*,s.*,se.* FROM attendance AS a LEFT JOIN course AS c ON a.course_id=c.courseid LEFT JOIN section AS s ON a.section_id=s.sectionid LEFT JOIN sectiontime AS se ON a.time_id=se.timeid WHERE attend_id = '$stuid'";
        $res = mysqli_query($con,$sql);
        $count = mysqli_num_rows($res);
        //if($count>0){
        if($row = mysqli_fetch_array($res)){
        ?>
    <form action="" method="post">
    <div class="form-group row">
        <label for="studentId" class="col-sm-2 col-form-label">Student ID</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="studentcId" value="<?php echo $row['student_id']; ?>" placeholder="Student ID" name="stu_id">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Student Name</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="name" value="<?php echo $row['student_name']; ?>" placeholder="Student Name" name="stuname">
        </div>
    </div><br/>
        <div class="form-group row">
            <label for="text" class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-10">
            <input type="date" class="form-control" id="date" name="date" value="<?php echo $row['dat']; ?>">
            </div>
        </div><br/>
        <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Courses</label>
        <div class="col-sm-10 dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Choose Courses
            </button>
            <ul class="dropdown-menu">
                <li onclick="copyInnerText(this)"><a class="dropdown-item" href="#"><?php echo $row['courseid'];?><?php echo $row['coursename'];?></a></li>
                <?php 
                    include("inc/dbcon.php");
                    $sql = "SELECT * FROM course";
                    $res = mysqli_query($con,$sql);
                    while($row=mysqli_fetch_assoc($res)){
                ?>
                <li><a class="dropdown-item" href="#"><?php echo $row['courseid'];?><?php echo $row['coursename'];?></a></li>
                <?php }?>
            </ul>
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Section</label>
        <div class="col-sm-10">
            <select name="section" id="" class="form-control" value="">
            <option value="<?php echo $row['sectionid'];?>"><?php echo $row['sectionname'];?></option>
                <?php 
                    include("inc/dbcon.php");
                    $sql = "SELECT * FROM section";
                    $res = mysqli_query($con,$sql);
                    while($row=mysqli_fetch_assoc($res)){
                ?>
                <option value="<?php echo $row['sectionid'];?>"><?php echo $row['sectionname'];?></option>
                <?php }?>
            </select>
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Time</label>
        <div class="col-sm-10">
            <select name="time" id="" class="form-control" value="">
            <option value="<?php echo $row['timeid'];?>"><?php echo $row['timename'];?></option>
                <?php 
                    include("inc/dbcon.php");
                    $sql = "SELECT * FROM sectiontime";
                    $res = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_assoc($res)){
                ?>
                <option value="<?php echo $row['timeid'];?>"><?php echo $row['timename'];?></option>
                <?php 
                }
            }?>
            </select>
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Attendance</label>
        <div class="col-sm-10">
            <select name="attend" id="" class="form-control" value="">
                <option value="<?php echo $row['attend'];?>"><?php echo $row['attend'];?></option>
                <option value="Present">Present</option>
                <option value="Absent">Absent</option>
            </select>
        </div>
    </div><br/>
    <form class="form-inline">          
        <button class="btn  my-2 my-sm-0" style="background-color:orangered"  type="submit" name="save">Save</button>
    </form>
    </form>
    <?php //}
    // else{
    //     echo 'Something was wrong';
    // }
    ;?>
    <?php
    if(isset($_POST['save'])){
        $stu_id = $_POST['stu_id'];
        $stuname = $_POST['stuname'];
        $course = $_POST['course'];
        $date = $_POST['date'];
        $section = $_POST['section'];
        $time = $_POST['time'];
        $attend = $_POST['attend'];
        $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
        $sql="UPDATE attendance SET student_name='$stuname',course_id='$course',dat='$date',section_id='$section',time_id='$time',attend='$attend' WHERE attend_id='$stuid'";
        mysqli_query($con,$sql);
        header("Location:01.php");
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>