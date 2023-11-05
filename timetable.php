<?php 
include("inc/dbcon.php");
session_start();
error_reporting(0);
ini_set('display_errors',0);
$phno = $_SESSION['phno'];
$pass = $_SESSION['pass'];
if(!isset($_SESSION['login'])){
    header("Location:login1.php");
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yha Computer Training Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- <link rel="stylesheet" href="css/testStudent.css"/> -->
    <link rel="shortcut icon" href="img/logo01.png" type="img/logo.png"/>
  </head>
<style>
    *{ 
    margin:0;
    padding:0;
    box-sizing: border-box;
}
body{
    background: url('../img/c.jpg') no-repeat;
    overflow: hidden;
}
.nav{
    width: 100%;
    background-color: #ff6b01;
}
.nav .col-xl-10, .nav .col-xl-2{
    display: flex;
    justify-content: center;
    align-items: center;
}
.nav .col-xl-10 {
    color: white;
}
.nav .btn{
    border: 2px solid white;
    color: white;
}
.nav .btn:hover{
    background: white;
    color: #ff6b01;
}
.navbar-brand img{
    width: 60px;
    height: 60px;
    border-radius: 50%;
}
.my-table {
table-layout: fixed;
word-wrap: break-word;
}
.text-center{
    height:90px;
    margin-top:40px;
}
.home{
    background-color:white;
    height: 100vh;
}
.col-12 h2{
    color:orangered;
}@media(max-width:800px){
    .bac1 h1{
        font-size: 27px;
    }
}
</style>

<body>
<section class="nav">
    <div class="container">
        <div class="row">
            <div class="col-xl-10">
                <a class=" navbar-brand">
                    <img src="img/yha.jpg" class="img-fluid" alt="Responsive image">
                </a>
                <h1>YHA Computer Training Center</h1>
            </div>
            <div class="col-xl-2">
                    <a href="index.php"><button class="btn"><i class="fa-solid fa-user"></i> Log Out</button></a>
            </div>

        </div>
    </div>
</section>

<section class="home">
    <div class="container-fluid">
    <div class="row">
    <div class="col-12 text-center">
    <?php
        $sql ="SELECT register.stu_name FROM register LEFT JOIN signup on register.stu_id=signup.stu_id WHERE register.phno='$phno'";
        $res = mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($res)):
    ?>
        <h2>Welcome <?php echo $row['stu_name']; ?></h2>
        <?php endwhile; ?>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <table class="table table-bordered table-hover my-table" style="border-color:black;">
            <thead>
                <tr style="background-color:#FFCC80;">

                    <th scope="col" >Date</th>
                    <th scope="col">Session</th>
                    <th scope="col">Time</th>
                    <th scope="col">Course</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Teacher</th>
                    <th scope="col">Assistant Teacher</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $date = date("Y-m-d");
                    $sql ="SELECT tt.dat,sec.sectionname,sect.timename,co.courseid,co.coursename,sub.subname,tea.teachername FROM timetable AS tt LEFT JOIN section AS sec ON tt.sectionid
                    =sec.sectionid
                    LEFT JOIN sectiontime AS sect ON
                    tt.timeid=sect.timeid
                    LEFT JOIN course AS co ON
                    tt.courseid = co.courseid
                    LEFT JOIN subject AS sub ON
                    tt.subid = sub.subid
                     LEFT JOIN teacher AS tea ON tt.teacherid=tea.teacherid WHERE date(tt.dat)>='$date' ORDER BY courseid";
                    $res = mysqli_query($con,$sql);
                    while($row=mysqli_fetch_assoc($res)):
                ?>
                    <tr style="background-color:#FFD54F;">
                        <th scope="row"><?php echo $row['dat'];?></th>
                        <td><?php echo $row['sectionname'];?></td>
                        <td><?php echo $row['timename'];?></td>
                        <td><?php echo $row['coursename'];?></td>
                        <td><?php echo $row['subname'];?></td>
                        <td><?php echo $row['teachername'];?></td>
                        <td><?php echo $row['teachername'];?></td>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>
    </div>
</section>

<!-- <script>
    window.addEventListener('load', function () {
        const loadingScreen = document.getElementById('loading-screen');
        loadingScreen.style.display = 'none'; // Hide the loading animation when the page has loaded
        document.body.classList.remove('loading');
    });
</script> -->
</body>
</html>