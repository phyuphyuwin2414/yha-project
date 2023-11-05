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
    <title>Welcome Student</title>
</head>
<body>
    <?php
        $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
        $sql="SELECT * FROM student WHERE student.student_name=student.phNo";
        $res = mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($res)):
    ?>
        <h1>Welcome<?php echo $row['student_name']; ?></h1>
    <?php endwhile; ?>
</body>
</html>