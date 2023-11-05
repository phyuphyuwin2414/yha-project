<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YHA - Computer Training Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="event.css"> -->
    <link rel="shortcut icon" href="img/logo01.png" type="img/logo01.png"/>
</head>
<?php include ('src/nav_css.php') ?>
<style>

/* courses section end */

.home{
    margin-top: 40px;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    letter-spacing: 1px;
}
.home .bg-text {
    color: black;
    border: 3px solid #f1f1f1;
    z-index: 2;
    width: 80%;
    padding: 20px;
    text-align: center;

  }
/* main section */
.main{
    margin-top: 40px;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.main .left, .right{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.main .heading{
    width: 100%;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
}
.main .heading p{
    letter-spacing: 1px;
    color: var(--maincolor);
}
.main .heading h5{
    font-size: 20px;
    padding-bottom: 5px;
    border-bottom: 2px solid var(--maincolor);
}
.main .col-12{
    height: 400px;
    margin-bottom: 20px;
    border-radius: 15px;
    position: relative;
    z-index: 1;
}
.main .img{
    width: 80%;
    box-shadow: 2px 2px 10px rgb(97, 97, 97);
}
.main .img1{
    box-shadow: -2px 2px 10px rgb(97, 97, 97);
}
.main .img1::before{
    content: '';
    width: 600px;
    height: 200px;
    background-color: #ff6b01;
    position: absolute;
    z-index: -1;
    transform: translate(-50%, 10%);
}
.main .img2::before{
    content: '';
    width: 600px;
    height: 200px;
    background-color: #ff6b01;
    position: absolute;
    z-index: -1;
    transform: translate(50%, 10%);
}
.main img{
    width: 100%;
}
.main .text{
    text-align: justify;
    width: 100%;
    overflow: hidden;
}

.main button{
    margin-top: 10px;
    color: rgb(114, 114, 114);
    padding-bottom: 2px;
    border: none;
    outline: none;
    background-color: transparent;
    float: right;
}
.main button:hover{
    color: var(--maincolor);
    border-bottom: 2px solid var(--maincolor);
}
.main .btns{
    width: 100%;
    align-items: end;
}
.content {
    max-height: 50px;
    overflow: hidden;
    transition: 0.5s ease;
}
  
.show-content {
    max-height: none;
}

.btns{
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px 10px
}
.pagiantion{
  justify-content: space-evenly;
  align-items: center;
}
.page_number{
  border: 1px solid rgba(233, 233, 233, 0.945);
  padding: 2px 5px;
  border-radius: 5px; 
}
.btns a{
  margin: 0px 5px;
  padding: 5px;
  border-radius: 5px;
  transition: all .3s ease;
  cursor: pointer;
  color: var(--maincolor);
}
.btns a:hover{
  background: var(--maincolor);
  color: white;
  
}
.btns .active{
  background: var(--maincolor);
  color: white;
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

<?php
    if(isset($_GET['page-nr'])){
        $id = $_GET['page-nr'];
    }else{
        $id = 1;
    }
?>

<body id="<?php echo $id ?>">

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
                    <a id="disp" href="index.php" class="active">Home</a>
                    <a class="disp" href="courses.php" id="courses">Courses</a>
                    
                    <!-- <div class="dropdown active">
                      <button class="dropbtn"><a href="courses.php">Courses</a></button>
                      <div class="dropdown-content">
                      <a style="color: rgb(80, 80, 80); font-size: 15px;" href="#">JAVA</a>
                      <a style="color: rgb(80, 80, 80); font-size: 15px;" href="#">Python 2</a>
                      <a style="color: rgb(80, 80, 80); font-size: 15px;" href="course.php">JavaScript</a>
                      <a style="color: rgb(80, 80, 80); font-size: 15px;" href="#">Photoshop Beginner</a>
                      <a style="color: rgb(80, 80, 80); font-size: 15px;" href="#">Photoshop Advance</a>
                      <a style="color: rgb(80, 80, 80); font-size: 15px;" href="#">ICT Foundation</a>
                      <a style="color: rgb(80, 80, 80); font-size: 15px;" href="#">Advance Excel</a>
                      </div>
                    </div> -->
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

    <?php include('course_menu.php') ?>

    <section class="home">
        <div class="bg-text">
                <h2>Event Heading</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias ipsa, cupiditate minima esse facilis quo ut maiores saepe commodi rem unde quod libero tenetur laudantium deleniti modi sit a! Culpa.</p>
          </div>
    </section>

    <section class="main">
        <div class="container">
           <div class="row">

               <?php include "eventcon.php" ?>
            
           </div>

    <div class="btns">

        <div class="pagiantion d-flex">
        <a href="?page-nr=1">First page</a>

        <?php 
            if(isset($_GET['page-nr']) && $_GET['page-nr'] - 1){
                ?>
                    <a href="?page-nr=<?php echo $_GET['page-nr'] - 1 ?>">Perious</a>
                <?php 
            } else{
                ?> 
                    <a href="">Perivous</a>
                <?php
            }
        ?>
        
        <div class="page_number">

        <?php 
            for($counter = 1; $counter <= $pages ; $counter ++){
                ?>
                    <a href="?page-nr=<?php echo $counter ?>"> <?php echo $counter ?></a>
                <?php
            }
        ?>
            <!-- <a href="">1</a>
            <a href="">2</a>
            <a href="">3</a>
            <a href="">4</a>
            <a href="">5</a> -->
        </div>

        <?php 
            if(!isset($_GET['page-nr'])){
                ?>
                    <a href="?page-nr=2">Next</a>
                <?php
            } else{
                if($_GET['page-nr'] >= $pages){
                    ?>
                        <a>Next</a>
                    <?php
                } else{
                    ?>
                        <a href="?page-nr=<?php echo $_GET['page-nr'] + 1 ?>">Next</a>
                    <?php
                } 
            }
        ?>

        <a href="?page-nr=<?php echo $pages ?>">Last</a>
    </div>
        </div>
    </section>

    <?php include('footer.php') ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js.js"></script>
    <script>
        var readMoreButtons = document.getElementsByClassName("read-more-btn");
  
        for (var x = 0; x < readMoreButtons.length; x++) {
            readMoreButtons[x].addEventListener("click", toggleReadMore);
        }
        
        function toggleReadMore() {
            var contentContainer = this.parentNode;
            var paragraph = contentContainer.querySelector(".content");
        
            if (paragraph.classList.contains("show-content")) {
            // Hide the full content
            paragraph.classList.remove("show-content");
            this.textContent = "Read More...";
            } else {
            // Show the full content
            paragraph.classList.add("show-content");
            this.textContent = "Read Less...";
            }
        }
        

        let links = document.querySelectorAll('.page_number > a');
        let bodyId = parseInt(document.body.id) - 1;
        links[bodyId].classList.add("active");
        </script>
        
</body>
</html>