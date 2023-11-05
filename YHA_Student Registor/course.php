<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YHA-Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="course.css">
    <link rel="shortcut icon" href="img/logo01.png" type="img/logo01.png"/>
</head>
<?php include("src/nav_css.php") ?>
<style>

/* main section :start */
.main{
    width: 100%;
    height: 400px;
    background-color: #eeeeee;
}
.main ,.main .container, .main .row{
    width: 100%;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
}
.main .col-xl-7{
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.main .text{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
}
.main .text h1{
    font-size: 40px;
    font-weight: 900;
    letter-spacing: 2px;
    margin-bottom: 30px;
}
.main .text span{
    margin-bottom: 10px;
    font-size: 16px;
    font-weight: 400;
    color: rgb(56, 56, 56);
    letter-spacing: 2px;
}
.main .text p{
    letter-spacing: 1px;
    font-size: 18px;
    font-weight: 400;
}
.main .text button{
    background-color: var(--white);
    color: var(--maincolor);
    letter-spacing: 1px; 
}
.main .text button:hover{
    color: var(--white);
}
.main .img{
    background-image: url(img/shape3.png);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.main img{
    padding: 30px 0px;
    width: 100%;
    border-radius: 20px;
    background:transparent;
}
/* what section */
#what{
    padding-left: 10px;
}
#what h3{
    letter-spacing: 1px;
    font-weight: 500;
}
#what span{
    color: var(--maincolor);
}
#what p{
    line-height: 170%;
    margin-top: 20px;
}
#what img{
    width: 85%;
    float: right;
}
#what .what {
    height: 300px;
}
#what .what .img{
    width: 100%;
    height: 100%;
    align-items: end;
}
#what .why{
    margin-top: 50px;
}
/* about section */
#about{
    width: 100%;
    margin-top: 100px;
}

#about .row{
    padding: 20px 0px;
    
}
#about .col-12{
    border: 1px solid rgb(172, 172, 172);
    margin: 20px 0px;
    border-radius: 5px;
}
#about .outline{
    padding: 15px;
    margin-bottom: 20px;
}
#about .uls ul{
    columns: 2;
    column-gap: 10px;
}
#about .uls ul li{
    list-style-type: "➤";
    color: var(--maincolor);
    padding-left: 10px;
    margin: 10px 0px;
    margin-right: 10px;
}
#about .uls ul li span{
    color: var(--bg);
}
#about .content{
    padding: 15px;
    margin-bottom: 20px;
    width: 80%;
}
#about .content ul{
    margin-top: 20px;
    list-style-type: none;
}
#about .content i{
    color: var(--maincolor);
}
#about .content ul li{
    margin: 10px 0px;
    font-size: 20px;
    font-weight: 500;
}
#about .img img{
    width: 100%;
}
#about .img img:hover{
    position: absolute;
    transform: translate(-20%, -10%);
    width: 40%;
    z-index: 99;
    box-shadow: 2px 2px 10px black;
}
#about .times{
    padding: 20px 10px;
}
#about .times i{
    color: var(--maincolor);
}
#about .times h3{
    letter-spacing: 1px;
}
#about .times span{
    padding-left: 30px;
} 
 

  
</style>
<body> 
    <!-- top section --> 
   <?php include ('src/top.php') ?>



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
                  <a class="disp" href="courses.php" id="courses">Courses</a>
                  
                  <a id="disp" href="stu_projects.php">Projects</a>
                  <a id="disp" href="photo.php">Photo-Gallery</a>
                  <a id="disp" href="event.php">Events</a>
                  <a id="disp" href="#">
                      <div class="login">
                          <a class="disp" href="login1.php"><i class="fa-solid fa-user"></i></a>
                          <!-- <span>Login <span style="color: orangered;">/</span> Signup</span> -->
                      </div>
                  </a>
                   <?php include('src/responsive_menu.php') ?>
              </div>
          </div>
      </div>
      
  
  </section>

  <?php include ('course_menu.php') ?>

  

      <section class="main">
        <div class="container">

        <?php 
            include ('dbcon.php');
            $sql="SELECT * FROM p_detail";
            $res = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($res)){

            
        ?>

            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                    <div class="text">
                        <h1><?php echo $row['h1'] ?></h1>
                        <span><?php echo $row['h2'] ?></span>
                        <p><?php echo $row['h3'] ?></p>
                            
                                <a href="#">
                                    <Button id="btn1">Enroll Now</Button>
                                </a>
                            
                        
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                    <div class="img">
                        <img src="img/<?php echo $row['img1'] ?>" alt="">
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <div style="overflow: hidden;">
      <svg
        preserveAspectRatio="none"
        viewBox="0 0 1200 120"
        xmlns="http://www.w3.org/2000/svg"
        style="fill: #eeeeee; width: 176%; height: 162px;"
      >
        <path d="M321.39 56.44c58-10.79 114.16-30.13 172-41.86 82.39-16.72 168.19-17.73 250.45-.39C823.78 31 906.67 72 985.66 92.83c70.05 18.48 146.53 26.09 214.34 3V0H0v27.35a600.21 600.21 0 00321.39 29.09z" />
      </svg>
    </div>

    <section id="what">
      <div class="container">
        <div class="row what">
          <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12"><h3>What is <span><?php echo $row['h4'] ?></span>?</h3>
            <p> <span>⊳ </span><?php echo $row['p1'] ?></p>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="img">
              <img src="img/js_svg.jpg" alt="">
            </div>
          </div>
          </div>
        <div class="row why">
          <h3>Why should you learn?</h3>
          <p><span>⊳ </span><?php echo $row['p2'] ?></p>
        </div>
      </div>
      <?php }?>
    </section>

    <section id="about">
        <div class="container w-100 h-100">
            <div class="row w-100">
                <div class="col-12">
                    <div class="outline w-100">
                        <h3>Course Outline</h3>
                        <div class="uls w-100 h-100 d-flex">
                        <ul>
                                <?php 
                            include('dbcon.php');
                            $sql1 = "SELECT * FROM course_outline where pd_id = 1";

                            $result = mysqli_query($con, $sql1);
                            while($row = mysqli_fetch_assoc($result)){

                            
                        ?>
                                <li><span><?php echo $row['ab_outline'] ?></span></li>
                                
                                <?php } ?>
                            </ul>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="col-12 content w-100">
                  <h3>Course Content</h3>
                  <span class="text-secondary"> .4 sections .2 projects .total 12 hours (2 Hours a Day)  <i class="fa-solid fa-paperclip"></i> Assigiments</span>
                  <ul>
                    <li>Day 1 - JavaScript Introduction</li>
                    <li>Day 2 - Operators</li>
                    <li>Day 3 - Object datatype and Array datatype</li>
                    <li>Day 4 - Statements in JavaScript</li>
                    <li>Day 5 - Document Object Model (DOM)</li>
                    <li>Day 6 - Projects</li>
                  </ul>
                </div>
                <div class="col-12 w-100">
                  <div class="times">
                    <h3><i class="fa-solid fa-calendar-days"></i> TimeTable</h3>
                    <span>Mon to Thu - 12:00 PM to 2:00 PM</span> <br>
                    <span>Sat and Sun - 8:00 AM to 11:00 AM</span>
                    <p class="text-secondary mt-3">On Weekend (Sat and Sun) is 3 Hours 
                      a day</p>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <?php include ('footer.php') ?>
    

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
        let i1 = document.getElementById('i1');
        let i2 = document.getElementById('i2');
        let left = document.querySelector('.left');

        i1.addEventListener("click", function(){
            left.style.left = "0";
            i2.style.display = "inline-block";
            i1.style.display = "none";
        });
        i2.addEventListener("click", function(){
            left.style.left = "-800px";
            i1.style.display = "inline-block";
            i2.style.display = "none";
        })

        
    </script>
    <script src="js.js"></script>
</body>
      </html>