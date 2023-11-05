<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses Section</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="courses.css">
    <link rel="shortcut icon" href="img/logo01.png" type="img/logo01.png"/>
</head>
<?php include("src/nav_css.php") ?>
<style>
 

.main{
    margin-top: 50px;
}
.main , .main .container, .main .row{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.main .container{
    flex-direction: column;
}
.main .col-xl-4{
    margin: 10px 0px;
}
.main .card{
    padding: 10px;
}
.main .text{
    height: 100px;
    margin-top: 5px;
    margin-bottom: 10px;
}
.main .img{
    width: 100%;
    height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.main img{
    width: 90%;
}
.main .card span{
    font-size: 15px;
}
.main .card .btns{ 
    width: 100%;
    padding: 10px;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
}
.main .card #btn1{
    padding: 0px;
}
.main .card .btn span{
    font-size: 20px;
}

</style>
<body>

 <!-- top section --> 
 <?php include('src/top.php') ?>


<!-- nav section -->
<section class="nav">
  <div class="container-fluid">
      <div class="row">
          <div class="col-xl-5 col-lg-5 col-md-10 col-sm-10 col-10">
              <div class="img">
                  <img src="img/logo01.png" alt="">
              </div>
              <h4>YHA <br> Computer Training Center</h4>
          </div>
          <div class="col-xl-7 col-lg-7 col-md-2 col-sm-2 col-2">
              <a id="disp" href="index.php">Home</a>
              <a class="disp active" href="courses.php" id="courses">Courses</a>
              <a id="disp" href="stu_projects.php">Projects</a>
              <a id="disp" href="photo.php">Photo-Gallery</a>
              <a id="disp" href="event.php">Events</a>
              <a id="disp" href="#">
                  <div class="login">
                      <a class="disp" href="../login1.php"><i class="fa-solid fa-user"></i></a>
                      <!-- <span>Login <span style="color: orangered;">/</span> Signup</span> -->
                  </div>
              </a>
               <?php include('src/responsive_menu.php') ?>
          </div>
      </div>
  </div>
  

</section>

<?php include ('course_menu.php') ?>

    <div class="main w-100">
        <div class="container">
            <h5 style="margin-bottom: 10px;">Courses Section</h5>
            <div class="row w-100">
            <?php
                include ("dbcon.php");
                $sql = "SELECT c_detail.*, c_open.* FROM course_detail AS c_detail LEFT JOIN course_opendate AS c_open ON c_detail.course_id = c_open.course_id ";
                $contact = $con->query($sql);
                // $contact = $con->query($sql);
                while($row = mysqli_fetch_assoc($contact)){
              ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card">
                        <div class="img">
                            <img src="img/<?php echo $row['course_img'] ?>" alt="">
                        </div>
                        <div class="text">
                            <h5> <?php echo $row['course_title'] ?> </h5>
                            <span><?php echo $row['course_about'] ?> </span>
                        </div>
                        <div class="btns" style="margin-top: 5px;">
                            <span> <span style="color: orangered;">Ks /-</span> <?php echo $row['price'] ?> </span>
                            <button id="btn1"><a href="">View More</a></button>
                        </div>
                    </div>
                </div>
                    <?php } ?>
             </div>
          </div>
    </div>
    
 
 
    <?php include('footer.php') ?>


      <script src="bootstrap/bootstrap.bundle.min.js"></script>
      <script src="js.js"></script>
</body>
</php>