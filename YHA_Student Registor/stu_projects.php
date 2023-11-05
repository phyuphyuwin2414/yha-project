<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="stu_project.css">
    <link rel="shortcut icon" href="img/logo01.png" type="img/logo01.png"/>
</head>
<?php include("src/nav_css.php") ?>
<style>
.off1{
    position: absolute;
    transform: translateY(50%);
}


.main{
    width: 100%;
    height: 100vh;
}
.main .img{
    width: 100%;
}
.main .img img{
    width: 100%;
}
.main .left{
    border-right: 1px solid rgb(190, 190, 190);
    padding-top: 30px;
    height: 300px;
    display: flex;
    flex-direction: column;
}
.main .left .heading{
    display: flex;
    justify-content: space-evenly;
    align-items: center;
}
.left2 .heading{
    margin-top: 20px;
    font-size: 15px;
}
.main .right{
    text-align: center;
    padding-top: 30px;
}
.subjects{
    margin-top: 10px;
    display: flex;
    flex-direction: column;
    padding-left: 10px;
    align-items: start;
    font-weight: 900;
    text-align: start;
    font-size: 15px;
    line-height: 120%;
}
.main .active{
    color: var(--maincolor);
}
.subjects button{
    margin: 5px 0px ;
    transition: all .3s ease;
    font-weight: 400;
    color: rgb(102, 102, 102);
}
.subjects button:hover{
    color: var(--maincolor);
}
.main h1{
    border-bottom: 1px solid var(--maincolor);
}
.main .right .heading{
    display: flex;
    justify-content: start;
    align-items: center;
}
.main .right .heading h3{
    padding-top: 7px;
    padding-left: 10px;
}
.main .right i{
    font-size: 20px;
    color: var(--maincolor);
    display: block;
}
.main .right .row{
    width: 100%;
    height: 300px;
    overflow-y: scroll;
}
.main .right .row::-webkit-scrollbar {
    width: 7px;
    background: transparent;
}
.main .right .row::-webkit-scrollbar-thumb{
    background: var(--maincolor);
    border-radius: 5px;
}
.colour{
    color:red;
}
#proj_bar{
    display: none;
}

@media screen and (max-width: 1115px) {
    .main .left{
        display: none;
    }
    #proj_bar{
        display: block;
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
              <a id="disp" href="index.php">Home</a>
              <a class="disp" href="courses.php" id="courses">Courses</a>
              <a id="disp"  class="active" href="stu_projects.php">Projects</a>
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

<?php include('course_menu.php') ?>

   
    <section class="main">
        <div class="container-fluid h-100">
            <div class="row w-100 h-100">
                <div class="col-xl-3 left left1 h-100">
                    <div class="heading">
                        <h4>Students' projects</h4>
                    </div>
                    <div class="subjects">
                        <a href="project_detail.php"><button id="btn" class="active">▸ Photoshop Beginner</button></a>
                        <button id="btn">▸ Photoshop Advence</button>
                        <button id="btn">▸ AI Beginner</button>
                        <button id="btn">▸ JAVA</button>
                        <button id="btn">▸ Webdesign & Development</button>
                        <button id="btn">▸ Python</button>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 right h-100">
                    <div class="heading">
                    <button id="proj_bar" class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa-solid fa-bars"></i></button>
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                                <h5 style="color:#ff6b01;" class="offcanvas-title" id="offcanvasRightLabel">YHA <br> Computer Training Center </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                            <div class="subjects">
                                <a href="project_detail.php"><button id="btn" class="active">▸ Photoshop Beginner</button></a>
                                <button id="btn">▸ Photoshop Advence</button>
                                <button id="btn">▸ AI Beginner</button>
                                <button id="btn">▸ JAVA</button>
                                <button id="btn">▸ Webdesign & Development</button>
                                <button id="btn">▸ Python</button>
                            </div>
                            </div>
                            </div>
                        <h3>Photoshop Beginner Projects</h3>
                    </div>
                    <div class="container-fluid h-100">
                        <div class="photobe row w-100 h-100">

                        <?php
                            $con = mysqli_connect("localhost","root", "", "yha") or die("error connection");
                            $sql = "SELECT * FROM projects where subj_id = 1";
                            $result = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_assoc($result)):
                        ?>

                            <div id="proj_cards" class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="cards">
                                    <div class="img">
                                        <img src="img/photo12.jpg" alt="">
                                    </div>
                                    <div class="text">
                                        <h5><?php echo $row['stu_name'] ?></h5>
                                        <span></span>
                                        <p>Batch - <?php echo $row['batch'] ?></p>
                                    </div>
                                </div>
                            </div>

                            <?php endwhile; ?>

                            <?php
                            $con = mysqli_connect("localhost","root", "", "yha") or die("error connection");
                            $sql = "SELECT * FROM projects where subj_id = 2";
                            $result = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_assoc($result)):
                        ?>

                            <div id="proj_cards" class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="cards">
                                    <div class="img">
                                        <img src="img/photo12.jpg" alt="">
                                    </div>
                                    <div class="text">
                                        <h5><?php echo $row['stu_name'] ?></h5>
                                        <span></span>
                                        <p>Batch - <?php echo $row['batch'] ?></p>
                                    </div>
                                </div>
                            </div>

                            <?php endwhile; ?>

                            <?php
                            $con = mysqli_connect("localhost","root", "", "yha") or die("error connection");
                            $sql = "SELECT * FROM projects where subj_id = 3";
                            $result = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_assoc($result)):
                        ?>

                            <div id="proj_cards" class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="cards">
                                    <div class="img">
                                        <img src="img/photo12.jpg" alt="">
                                    </div>
                                    <div class="text">
                                        <h5><?php echo $row['stu_name'] ?></h5>
                                        <span></span>
                                        <p>Batch - <?php echo $row['batch'] ?></p>
                                    </div>
                                </div>
                            </div>

                            <?php endwhile; ?>

                            <?php
                            $con = mysqli_connect("localhost","root", "", "yha") or die("error connection");
                            $sql = "SELECT * FROM projects where subj_id = 4";
                            $result = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_assoc($result)):
                        ?>

                            <div id="proj_cards" class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="cards">
                                    <div class="img">
                                        <img src="img/photo12.jpg" alt="">
                                    </div>
                                    <div class="text">
                                        <h5><?php echo $row['stu_name'] ?></h5>
                                        <span></span>
                                        <p>Batch - <?php echo $row['batch'] ?></p>
                                    </div>
                                </div>
                            </div>

                            <?php endwhile; ?>

                            <?php
                            $con = mysqli_connect("localhost","root", "", "yha") or die("error connection");
                            $sql = "SELECT * FROM projects where subj_id = 5";
                            $result = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_assoc($result)):
                        ?>

                            <div id="proj_cards" class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="cards">
                                    <div class="img">
                                        <img src="img/photo12.jpg" alt="">
                                    </div>
                                    <div class="text">
                                        <h5><?php echo $row['stu_name'] ?></h5>
                                        <span></span>
                                        <p>Batch - <?php echo $row['batch'] ?></p>
                                    </div>
                                </div>
                            </div>

                            <?php endwhile; ?>

                            <?php
                            $con = mysqli_connect("localhost","root", "", "yha") or die("error connection");
                            $sql = "SELECT * FROM projects where subj_id = 6";
                            $result = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_assoc($result)):
                        ?>
 
                            <div id="proj_cards" class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="cards">
                                    <div class="img">
                                        <img src="img/photo12.jpg" alt="">
                                    </div>
                                    <div class="text">
                                        <h5><?php echo $row['stu_name'] ?></h5>
                                        <span></span>
                                        <p>Batch - <?php echo $row['batch'] ?></p>
                                    </div>
                                </div>
                            </div>

                            <?php endwhile; ?>
                         </div>
                         
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    
      <?php include('footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
 
    <script src="proj_js.js"></script>
    
    <script>
        let btn = document.querySelectorAll("#btn");
        let cards = document.querySelectorAll("#proj_cards");

for(let i = 0; i < btn.length; i++){
    btn[i].addEventListener("click", function(){
        cards[i].classList.add("bg-danger");

        if (i !== -1) {
            cards[i].classList.remove("bg-danger");
        }
        
    })
}
    </script>
</body>
      </html>