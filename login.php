<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
<section class="main">
    <div class="container">
        <div class="main-top">
            <h1>Attendance</h1>
            <i class="fas fa-user-cog"></i>
        </div>
        <form action="" method="post">
            <div class="form-group row">
                <label for="studentName" class="col-sm-2 col-form-label">Student Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="studentName" value="" placeholder="Student Name" name="stuname">
                </div>
            </div><br/>
            <div class="form-group row">
                <label for="studentPhNo" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="studentphNo" value="" placeholder="Phone Number" name="phNo">
                </div>
            </div><br/>
            <form class="form-inline">          
            <button class="btn  my-2 my-sm-0" style="background-color:orangered"  type="submit" name="login">Login</button>
            </form>
        </form>
    </div>
</section>
<?php
    session_start();
    if(isset($_POST['login'])){
        $stuname=$_POST['stuname'];
        $phNo=$_POST['phNo'];
        $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
        $sql="SELECT * FROM student WHERE student_name='$stuname' AND phNo='$phNo'";
        
        $res=mysqli_query($con,$sql);
        if(mysqli_num_rows($res)==1){ 
            $row=mysqli_fetch_assoc($res);
            $_SESSION['stuname'] = $row['student_name'];
            $_SESSION['phNo'] = $row['phNo'];
            $_SESSION['auth']=true;
            header("Location:newattendance.php");
        }else{
            header("Location:login.php");
        }
    }
?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>