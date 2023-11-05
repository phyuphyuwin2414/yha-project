<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YHA - Image Gallary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="photo.css">
    <link rel="shortcut icon" href="img/logo01.png" type="img/logo01.png"/>
</head>
<?php include ('src/nav_css.php') ?>
<style>
 

.home .container{
    width: 100%;
    columns: 3;
    column-gap: 15px;
}
.home img{
    width: 100%;
    height: auto;
    margin: 10px 10px;
    border-radius: 5px;
    box-shadow: 2px 2px 10px rgb(209, 209, 209);
    cursor: pointer;
}
.home img:hover{
    box-shadow: 2px 2px 10px grey;
}

 
.hidden1{
    opacity: 0;
    transform: translateY(50%);
    transition: all 1s;
}
.hidden2{
    opacity: 0;
    transform: translateY(80%);
    transition: all 1s;
}
.hidden3{
    opacity: 0;
    transform: translateY(100%);
    transition: all 1s;
}
.show{
    opacity: 1; 
    transform: translate(0);
}
@media screen and (max-width:768px) {
  .home .container{
    columns: 2;
}
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
                  <a id="disp" href="index.php" >Home</a>
                  <a class="disp" href="courses.php" id="courses">Courses</a>
                 <a id="disp" href="stu_projects.php">Projects</a>
                  <a id="disp" class="active" href="photo.php">Photo-Gallery</a>
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

<?php include('course_menu.php') ?>


    <section class="home">
        <div class="container">

        <?php
                $con = mysqli_connect("localhost:3306","root","","yha") or die ("Error connection"); //step 1 database connection
                $sql = "SELECT * FROM gallary";
                $contact = $con->query($sql);
                while($row = mysqli_fetch_assoc($contact)){
              ?>
    
                    <img src="img/<?php echo $row['gallary_photo'] ?>" alt="">
 
                    <?php }?>
        </div>
    </section>
    
    <?php include('footer.php') ?>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
      <script src="js.js"></script>

    </body>
</html>