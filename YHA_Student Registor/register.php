<?php
if(isset($_POST['signin'])){
    $stuid=$_POST['stuid'];
    $stuname=$_POST['stuname'];
    $phno=$_POST['phNo'];
    $con=mysqli_connect("localhost:3306","root","","yha");
    if($con){
        $sql = "INSERT INTO student(student_id, student_name, phNo) VALUES ('$stuid','$stuname','$phno')";
        mysqli_query($con,$sql);
        header("Location:attendance.php");
    }else{
        header("Location:attendance.php");
    }
} 
?>