 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YHA - Computer Training Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="shortcut icon" href="img/logo01.png" type=""/>
</head>
<?php include("src/nav_css.php") ?>
<style> 
.dropdown-content{
  display: none;
}
#home{
    width: 100vw;
    object-fit: cover; 
    background-size: cover;
}
#home{
    width: 100%;
}
#about{
    margin-top: 150px;
    width: 100%;
    height: auto;
    text-align: center;
   
}
#about::before{
    content: '';
    position: absolute;
    transform: translate(0%, 8%);
    left: 0;
    z-index: -1;
    width: 100%;
    height: 500px;
    background-color: var(--ab_bg);
}
#about .col-6{
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
#about .ab_img1,#about .ab_img2{
    width: 35%;
    padding: 5px 0px;
    margin-right: 70px;
}
#about #ab_left{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
#about h3{
    display: inline-block;
    background-color: var(--side-orange);
    padding: 10px 20px;
    letter-spacing: 1px;
    border-radius: 7px;
    transition: .1s;
    cursor: default;
}
#about h2{
    letter-spacing: 2px;
}
#about .ab_img3{
    position: absolute;
    width: 15%;
    border: 7px solid var(--ab_bg);
    transform: translate(50%,0%);
}
#about .ab_text p{
    margin: 30px 0px 50px 0px;
    text-align: justify;
    line-height: 30px;
    letter-spacing: 1px;

}
/* number of student and courses seciton */
#stu_number{
    margin-top: 150px;
    width: 100%;
    height: 400px;
    text-align: center;
    padding-top: 50px;
}
#stu_number .row{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
}

#stu_number .col-xl-4{
    height: 200px;
    padding: 0px 40px; 
    display: flex; 
    align-items: center;
    justify-content: center;
}
#stu_number .col-xl-4 .card{
    border: 3px solid var(--maincolor);
    width: 60%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center ;
}
#stu_number .col-xl-4 .card span{
    font-size: 10px;
    position: absolute;
    top: 0;
    left: 0;
    background-color: var(--maincolor);
    color: var(--white);
    padding: 2px 5px;
    border-radius: 0 0 5px 0;
}
#stu_number .col-xl-4 .card img{
    position: absolute;
    width: 100%;
}

/* student projects section */
#stu_project{
    width: 100%;
    height: auto;
    text-align: center;
    margin-top: 150px;
    color: rgb(41, 41, 41);
}
#stu_project .heading h2{
    padding: 0px 10px;
    letter-spacing: 2px;
    border-bottom: 2px solid var(--maincolor);
    display: inline-block;
}
#stu_project img{
    width: 100%;
}
#stu_project .col-xl-3{
    padding: 0;

} 
#stu_project .col-xl-3 .text{
    height: 285px;
    padding: 20px 5px;
    display: flex;
    flex-direction: column;
    justify-content: end;
    background-color: #f1f1f1;
}
#stu_project span{
    font-size: 20px;
    letter-spacing: 1px;
    color: var(--maincolor);
    margin-bottom: 10px;
}
#stu_project .col-xl-3 .text p{
    font-size: 15px;
    letter-spacing: 1px;
}
/* slider section */
#slider{
    margin-top: 150px;
    width: 100%;
    height: 100vh;
    background: url(img/teachers.jpg);
    backdrop-filter: blur(20px); 
    background-position: center;
    background-size: cover;
    background-attachment:fixed;
    padding-bottom: 30px;
}
#slider img{
    width: 30%;
}
#slider .col-6{
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
#slider .col-6 .top{
    height: 100%;
}
#slider .col-6 .bot{
    display: flex;
}
#slider .col-6 #img1{
    width: 50%;
}   
#slider .col-6 #img2{
    width: 40%;
}
#slider .col-6 #img3{
    width: 35%;
}
#slider .col-6 #img4{
    width: 65%;
}

/* teacher section */

#teacher{
    margin-top: 150px;
    width: 100%;
}
#teacher::before{
    content: '';
    width: 900px;
    height: 900px;
    background-color: var(--side-orange);
    position: absolute;
    z-index: -6;
    transform: translate(90%, -45%);
    border-radius: 50%;
}
#teacher .container{
   display: flex;
   flex-direction: column;
   justify-content: center;
   align-items: center;
}
#teacher .row{
    padding-top: 50px;
}
#teacher .cards{
    padding: 10px 10px 0px 10px;
    background-color: var(--white);
    border-radius: 15px;
    box-shadow:  2px 2px 10px #8a8a8a;
    
}
#teacher .img{
    display: grid;
    place-items: center;
}
#teacher img{
    width: 70%;
}
#teacher .text{
    display: flex;
    flex-direction: column;
    padding: 20px 10px;
}
#teacher .footer{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center  ;
    margin-top: 30px;
}
#teacher .footer p{
    width: 60%;
    display: block;
}

/* contact section */

#contact{
    margin-top:150px;
    width: 100%;
    height: auto;
}
#contact #map {
    width: 100%;
    height: 400px;
}
#contact .container-fluid{
    width: 100%;
    height: 100%;
    background-color: aqua;
}
#contact iframe{
    width: 100%;
    height: 400px;
}
#contact .right{ 
    height: 100%;
    background-color: var(--side-orange);
    display: grid;
    place-items: center;
}
#contact .right .text{
    height: 400px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    width: 60%;
    padding: 20px 0px;
    color: var(--white);
}
#contact .right .text p{
    letter-spacing: 1px;
    margin: 20px 0px;
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
                    <a id="disp" href="#" class="active">Home</a>
                    <a class="disp" href="courses.php" id="courses">Courses</a>
                    <a id="disp" href="stu_projects.php">Projects</a>
                    <a id="disp" href="photo.php">Photo-Gallery</a>
                    <a id="disp" href="event.php">Events</a>
                    <a id="disp" href="#">
                        <div class="login">
                            <a class="disp" href="../login1.php"><i class="fa-solid fa-user"></i></a>
                            <!-- <span>Login <span style="color: orangered;">/</span> Signup</span> -->
                        </div>
                    </a>

                  <?php include('src/responsive_menu.php')?>
                </div>
            </div>
        </div>
        
    
    </section>

    
    <?php include('course_menu.php') ?>

   
    
    <section id="home">
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <?php
            $con = mysqli_connect("localhost:3306", "root", "", "yha") or die("error connection");
            $sql = "SELECT * FROM main_slider";
            $res = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($res)){
          ?>
          <div class="carousel-item active">
            <img src="img/<?php echo $row['slider_img1']?>" class="d-block w-100" alt="...">
          </div>
          <?php } ?>
          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
    </section>

    <section id="about">
      
      <div class="container">
        <h3 class="text-white" style="font-variant: small-caps; font-size: 25px; letter-spacing: 1px;"> Build Your Future With <br> TECHNOLOGY</h3>
        <div class="row">
        <?php
                $con = mysqli_connect("localhost:3306","root","","yha") or die ("Error connection"); //step 1 database connection
                $sql = "SELECT * FROM about";
                $contact = $con->query($sql);
                while($row = mysqli_fetch_assoc($contact)){
              ?> 
          <div id="ab_left" class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
            <img class="ab_img1 hidden1" src="img/<?php echo $row['ab_photo1'] ?>">
            <img class="ab_img2 hidden2" src="img/<?php echo $row['ab_photo2'] ?>">
            <img class="ab_img3 hidden3" src="img/<?php echo $row['ab_photo3'] ?>">
          </div>
          <div id="ab_right" class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="ab_text">
              <h2>About Us</h2>
              <p class="section"> <?php echo $row['about'] ?>  </p>
              <?php } ?>
              <button id="btn1"><a href="">View More</a></button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="stu_number">
      <div class="container">
        <h5 class="hidden">Lorem ipsum dolor, sit amet consectetur adipisicing.</h5>
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 justify-content-end">
            <div class="card hidden1">
              <span>YHA</span>
              <h3 id="number" data-goal="20">0</h3>
              <p>courses</p>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 justify-content-center">
            <div class="card hidden2">
              <span>YHA</span>
              <h3 id="number" data-goal="100">0</h3>
              <p>Students</p>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 justify-content-start">
            <div class="card hidden3">
              <span>YHA</span>
              <h3 id="number" data-goal="50">0</h3>
              <p>Batches</p>
            </div>
          </div>
          
        </div>
      </div>
    </section>

    <section id="stu_project">
      <div class="container">
        <div class="heading">
          <h2>Students Projects</h2>
          <p>We held project presentations end of the Batches to make sure that our students receive knowledge and truly understand the fields they are taking</p>
        </div>
        <div class="row">
        <?php
                $con = mysqli_connect("localhost:3306","root","","yha") or die ("Error connection"); //step 1 database connection
                $sql = "SELECT * FROM project";
                $contact = $con->query($sql); 
                while($row = mysqli_fetch_assoc($contact)){
                $id = $row['project_id'];
                  if (!empty($id)){     
            ?>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
            <img class="hidden1" src="img/<?php echo $row['project_photo']?>" alt="">
            <div class="text">
            
              <span><?php echo $row['project_heading']?></span>
              <p><?php echo $row['about_project'] ?></p>
            
            </div>
          </div>

          <?php } ?>

          <?php
            $row = mysqli_fetch_assoc($contact);  
            if (mysqli_num_rows($contact) == 1){ 
                echo "";  
                ?>

        <?php  } 

            else{ ?>

          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="text">
              <span><?php echo $row['project_heading']?></span>
              <p><?php echo $row['about_project'] ?></p>
              
            </div>
            <img class="hidden3" src="img/<?php echo $row['project_photo']?>" alt="">
            
          </div>
         
          <?php } } ?>
          
        </div>
      </div>
    </section>

    <section id="slider">
      <div class="container">
        
      </div>
    </section>

    <section id="teacher">
      <div class="container">
        <div class="header">
          <h2 style="text-align: center;">Teacher section</h2>
        </div>
        <div class="row">
        <?php
                $con = mysqli_connect("localhost:3306","root","","yha") or die ("Error connection"); //step 1 database connection
                $sql = "SELECT * FROM teacher";
                $contact = $con->query($sql);
                while($row = mysqli_fetch_assoc($contact)){
              ?>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="cards hidden1">
              <div class="img">
                <img src="img/<?php echo $row['teacher_photo'] ?>" alt="">
              </div>

              <div class="text">
                  <h4 style="text-align: center;"><?php echo $row['teachername'] ?></h4>
                  <span> Age: <span style="color: #ff6f00"> <?php echo $row['teacher_age'] ?> </span> </span>
                  <span>Position: <span style="color: #ff6f00"> <?php echo $row['teacher_position'] ?> </span> </span>
              </div>
            </div>
          </div>
          <?php } ?>
           
        </div>
        <div class="footer">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos, cumque expedita? Fugiat perferendis dolore ipsa omnis, magni harum libero fugit ex aperiam, ut vitae.</p>
          <!-- <button id="btn1"><a href="#">About our teachers</a></button> -->
        </div>
      </div>
    </section>

    <section id="contact">  
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 left">
            <!-- <div id="map"></div> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d238.68470692968666!2d96.12988827305935!3d16.828572950010972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smm!4v1689075973621!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 right">
            <div class="text">

            <?php
                $con = mysqli_connect("localhost:3306","root","","yha") or die ("Error connection"); //step 1 database connection
                $sql = "SELECT * FROM contact";
                $contact = $con->query($sql);
                while($row = mysqli_fetch_assoc($contact)){
              ?>

            <h2>Address And Location</h2>
            <div class="address">
              <p>Address - <?php echo $row['address'] ?></p>
            </div>
            <p><?php echo $row['time'] ?></p> 
            <?php } ?>
          </div>
        </div>
        </div>
    </section>

    

    <?php include ('footer.php') ?> 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/setinterval.js"></script>
    <script src="js.js"></script>
</body>
</html>
