<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Login</title>
    <link rel ="stylesheet" href="css/bootstrap.min.css">
    <link rel ="stylesheet" href="css/Login.css">
</head>

<body>
<!--img src="yha.jpg">-->
    <div class="bar">
        
        <nav class="head">
        <img src="yha.jpg" class="user-pic">
        <h1><b>YHA Computer Training Center</b><h1>
    </nav>
</div>
    <form action="" method="post">
      <h2> <b><i> LOG</i> </b><span>IN<span> </h2>
     
      <label>Phone Number</label>
      <input type="text" class="form-control" name="phone" placeholder="Phone Number" >
    
      <label>Password</label>
      <input type="text" class="form-control" name="upass" placeholder="password"  >
     <!--button type="button" class="btn btn-warning"  name="login" style="width:100px; text-align:center;margin-left:80px; margin-top:30px;background-color:#F37335;
      <label>Password</label>-->
     
     
      <input type="submit" name="login"  value="Login" style="background-color:#F37335;width:100px; text-align:center;margin-left:80px; margin-top:30px;border:1px solid yellow;">
      
      <p style="color:orange;">Do You Have An Account? <a href="signupform.php" >Signup</a></p>
</form>
   
<?php
   session_start();
    if(isset($_POST['login'])){
        $phone=$_POST['phone'];
        $upass=$_POST['upass'];
        $con=mysqli_connect("localhost","root","","yha");
        $sql="SELECT s.stu_id,s.pass,re.stu_id,re.phno FROM signup AS s LEFT JOIN register AS re ON s.stu_id=re.stu_id WHERE phno = '$phone' AND pass = '$upass'";
        $result=mysqli_query($con,$sql);
       // echo mysqli_num_rows($result);
            if(mysqli_num_rows($result)==1){
               $row=mysqli_fetch_assoc($result);
               $_SESSION['phone']  = $row['phno'];
                $_SESSION['pass'] = $row['pass'];
                $_SESSION['auth']=true;
                header("Location:timetable.php");            
            }else{
                header("Location:loginsample.php");
            }     
    } 
?>
</body>
</html>