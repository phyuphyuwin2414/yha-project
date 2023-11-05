<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="shortcut icon" href="img/logo01.png" type=""/>
</head>
    <?php include('src/nav_css.php') ?>
  <style>
 

#courses_menu{
    width: 100%;
    position: absolute;
    right: 0;
    text-align: center;
    background-color: var(--ab_bg);
    display: none;
    z-index: 99;
    height: auto;
    
}

#courses_menu .col-xl-3{
    height: auto;
    padding: 10px;
}
#dropbtn {
    font-size: 16px;
    border: none;
    cursor: pointer;
    padding-left: 15px;
    background-color: var(--white);
}
  
.dropdown-content{
    padding-left: 20px;
    background-color: #f7f7f7;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    transition: all .3s ease;
    width: 100%;
    display: none;
}

.dropdown-content a{
    color: var(--maincolor);
    padding: 5px 10px;
    text-decoration: none;
    display: block;
    transition: all .3s ease;
    font-size: 20px;
}

.dropdown-content a:hover {
    color: var(--maincolor);
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* courses section end */

/* home section start */

.home .row{
    padding-top: 10px;
    border: 2px solid rgb(218, 218, 218);
    margin-bottom: 10px;
}
.home .row p{
    margin-top: 20px;
    width: 100%;
    text-indent: 3rem;
    text-align: justify;
    border: 2px solid rgb(218, 218, 218);
    padding: 10px;
}
.home .row p::first-line{
    padding-top: 20px;
}
/* home section ends */
.btns .row{
   border:none;
}
.page_number a{
    padding: 3px 5px;
    border-radius: 5px;
} 
.page_number{
  border: 1px solid rgba(233, 233, 233, 0.945);
  padding: 2px 5px;
  border-radius: 5px; 
}
.act{
    background-color: var(--maincolor);
    color: white;
} 
.page_number a:not(.act):hover{
    background-color: var(--maincolor);
    color: white;
}
.col-xl-4{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 5px 0px
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
                    <a id="disp" href="stu_projects.php" class="active">Projects</a>
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
   


    <section class="home mt-5">
        <div class="container">

        <section class="main my-2">
            <div class="container w-100">
            

        <div class="btns">

            <div class="row pagiantion d-flex w-100">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <a class="mx-2" href="?page-nr=1">First page</a>

            <?php 
                if(isset($_GET['page-nr']) && $_GET['page-nr'] - 1){
                    ?>
                        <a class="mx-2" href="?page-nr=<?php echo $_GET['page-nr'] - 1 ?>">Perious</a>
                    <?php 
                } else{
                    ?> 
                        <a class="mx-2" href="">Perious</a>
                    <?php
                }
            ?>

        </div>  
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            
            <div class="page_number mx-4">

            <?php 

            include ('proj_connect.php');
                for($counter = 1; $counter <= $pages ; $counter ++){
                    ?>
                        <a class="mx-2" href="?page-nr=<?php echo $counter ?>"> <?php echo $counter ?></a>
                    <?php
                }
            ?>
                <!-- <a href="">1</a>
                <a href="">2</a>
                <a href="">3</a>
                <a href="">4</a>
                <a href="">5</a> -->
            </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <?php 
                if(!isset($_GET['page-nr'])){
                    ?>
                        <a class="mx-2" href="?page-nr=2">Next</a>
                    <?php
                } else{
                    if($_GET['page-nr'] >= $pages){
                        ?>
                            <a class="mx-2">Next</a>
                        <?php
                    } else{
                        ?>
                            <a class="mx-2" href="?page-nr=<?php echo $_GET['page-nr'] + 1 ?>">Next</a>
                        <?php
                    } 
                }
            ?>

            <a class="mx-2" href="?page-nr=<?php echo $pages ?>">Last</a>
            </div>
        </div>
            </div>
    </section>

          <?php include ('projectcon.php') ?>                              
            
        </div> 
    </section>

    <?php include('footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js.js"></script>
    <script>
        let links = document.querySelectorAll('.page_number > a');
        let bodyId = parseInt(document.body.id) - 1;
        links[bodyId].classList.add("act");
       
    </script>
    <script src="proj.js"></script>
</body>
</html>