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
                <label for="studentName" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="studentName" value="" placeholder="Phone Number" name="phno">
                </div>
            </div><br/>
            <div class="form-group row">
                <label for="studentPhNo" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="studentphNo" value="" placeholder="Password" name="pass">
                </div>
            </div><br/>
            <form class="form-inline">          
            <input class="btn  my-2 my-sm-0" style="background-color:orangered" 
             type="submit" name="login"><a href="attendupdate.php?id=<?php echo $row['student_id']; ?>" style="width:50px"></a></input>
            </form>
        </form>
    </div>
</section>
<?php
    session_start();
    if(isset($_POST['login'])){
        $phno=$_POST['phno'];
        $pass=$_POST['pass'];
        $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
        $sql="SELECT * FROM login_sample WHERE phno='$phno' AND password='$pass'";
        $res=mysqli_query($con,$sql);
        if(mysqli_num_rows($res)==1){
            $row=mysqli_fetch_assoc($res);
            $_SESSION['phno'] = $row['phno'];
            $_SESSION['pass'] = $row['password'];
            $_SESSION['login']=true;
            header("Location:newattendance.php");
        }else{
            header("Location:login_sample.php");
        }
    }
?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>