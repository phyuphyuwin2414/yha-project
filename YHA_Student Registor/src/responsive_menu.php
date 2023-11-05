
<style>
    .dropdown-content{
        box-shadow: 1px 1px 10px 1px #bababa;
    }
</style>

<div class="rightmenu">
    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
        <i class="fa-solid fa-bars"></i>
    </button>
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <img src="img/logo01.png" width="20%" alt="">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body"> 
            <div class="home_menu1 items">
                <i class="fa-solid fa-house"></i> 
                <a href="index.php">Home</a>
            </div>
            <div class="courses_menu items">
            <i class="fas fa-book"></i>
            <button id="dropbtn">Courses</button>
            <div class="dropdown-content">
                <div class="listes d-flex flex-column">
                    <a href="courses.php" style="color: orangered;">View All Courses</a>

                    <?php
                        $con = mysqli_connect("localhost:3306","root","","yha") or die ("Error connection"); //step 1 database connection
                        $sql = "SELECT * FROM course_detail";
                        $contact = $con->query($sql);
                        while($row = mysqli_fetch_assoc($contact)){
                    ?> 
                    
                    <a href="course.php?id=<?php echo $row['course_id'];?>"><?php echo $row['course_title'] ?></a>
                    
                    <?php } ?>
                
                </div>
            </div>
            </div>
            <div class="project_menu items">
            <i class="fa-solid fa-folder"></i>
            <a href="stu_projects.php">Projects</a>
            </div>
            <div class="photo_gallery_menu items">
            <i class="fa-solid fa-image"></i>
            <a href="photo.php">Photo-Gallery</a>
            </div>
            <div class="Events_menu items">
            <i class="fa-solid fa-calendar"></i>
            <a href="event.php">Events</a>
            </div>
            <div class="login_menu items">
            <i class="fa-solid fa-user"></i>
            <a href="../login1.php">
            <span>Login <span style="color: orangered;">/</span> Signup</span></a>
        </div>
        </div>
    </div>
</div> 