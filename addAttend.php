<?php
if(isset($_POST['save'])){
    $stuid=$_POST['student_id'];
    $stuname=$_POST['student_name'];
    $course=$_POST['course'];
    $date=$_POST['date'];
    $section=$_POST['section'];
    $time=$_POST['time'];
    $attend=$_POST['attend'];
    $con=mysqli_connect("localhost:3306","root","","yha");
    if($con){
        $sql = "INSERT INTO attendance(student_id, student_name, course_id, dat, section_id, time_id,attend) VALUES ('$stuid','$stuname','$course','$date','$section','$time','$attend')";
        mysqli_query($con,$sql);
        header("Location:01.php");
    }else{
        header("Location:01.php");
    }
} 
?>