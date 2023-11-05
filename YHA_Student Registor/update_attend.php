<?php 
include("inc/dbcon.php");
if(isset($_GET['id'])){
    $stuid=$_GET['id'];
    echo $stuid;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Update</title>
</head>
 <body>
    <h2>Attendance Update</h2>
    <?php 
    $sql = "SELECT * FROM student WHERE student_id = $stuid";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <form action="" method="post">
        <input type="hidden" name="stuid" value="<?php echo $row['student_id']; ?>">
        <input type="text" name="stuname" value="<?php echo $row['student_name']; ?>">
        <select name="course" id="" class="form-control">
                <option value="">Courses</option>
                <option value="ICT Foundation Course">ICT Foundation Course</option>
                <option value="Advance Photoshop">Advance Photoshop</option>
                <option value="Adobe Illustrator">Adobe Illustrator</option>
                <option value="Web Design & Development">Web Design & Development</option>
                <option value="Java">Java</option>
        </select>
        <input type="date" class="form-control" id="date" name="date">
        <select name="section" id="" class="form-control">
                <option value="">Sections</option>
                <option value="Mon-Thu">Mon-Thu</option>
                <option value="Sat-Sun">Sat-Sun</option>
                <option value="Sunday Only">Sunday Only</option>
        </select>
        <select name="time" id="" class="form-control">
                <option selected><?php echo $row['timename'];?></option>
                <?php 
                    $con = mysqli_connect("localhost","root","","yha");
                    $sql = "SELECT * FROM sectiontime";
                    $res = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_assoc
                    )
                ?>
                <option value="8:00-10:00AM">8:00-10:00AM</option>
                <option value="10:00-12:00AM">10:00-12:00AM</option>
                <option value="1:00-2:00PM">1:00-2:00PM</option>
                <option value="2:00-4:00PM">2:00-4:00PM</option>
                <option value="4:00-6:00PM">4:00-6:00PM</option>
        </select>
        <select name="attend" id="" class="form-control">
                <option value="">Attendance</option>
                <option value="Present">Present</option>
                <option value="Absent">Absent</option>
        </select>
        <input type="submit" name="save" value="Update">

    </form>
    <?php
    if(isset($_POST['save'])){
        $stuid = $_POST['stuid'];
        $stuname = $_POST['stuname'];
        $course = $_POST['course'];
        $date = $_POST['date'];
        $section = $_POST['section'];
        $time = $_POST['time'];
        $attend = $_POST['attend'];
        $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
        $csql="UPDATE attendance SET student_name='$stuname',course='$course',date='$date',section='$section',time='$time',attend='$attend' WHERE student_id=$stuid";
        mysqli_query($con,$csql);
        header("Location:01.php?msg=1");
    }
    ?>
</body>
</html>