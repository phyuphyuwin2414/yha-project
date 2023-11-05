<style>
/* courses section start */

#courses_menu{
    width: 100%;
    position: absolute;
    right: 0;
    background-color: var(--ab_bg);
    display: none;
    z-index: 99;
    text-align: center;
    transition: .5s ease;
}
#courses_menu a{
    color: rgb(99, 99, 99);
    font-size: 15px;
    margin: 3px 0px;
}
#courses_menu .col-xl-3{
    height: auto;
    padding: 10px;
}
#courses_menu a:hover{
    color: var(--maincolor);
}
#courses_menu .courses{
    height: auto;
    display: flex;
    flex-direction: column; 
}
#courses_menu .courses h6{
    border-bottom: 1px solid var(--maincolor);
    padding-bottom: 3px;
    margin-bottom: 10px;
}

/* courses section end */
</style>


<section id="courses_menu">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
          <div class="courses programming w-100 h-50">
              <h6>Programming Classes</h6>
              <?php
                $con = mysqli_connect("localhost:3306","root","","yha") or die ("Error connection"); //step 1 database connection
                $sql = "SELECT * FROM course_detail where couh_id = 1";
                $contact = mysqli_query($con,$sql);
                while($row = mysqli_fetch_assoc($contact)){
              ?> 
            
              <a href="course.php?id=<?php echo $row['course_id'];?>"> <?php echo $row['course_title'] ?> </a>
              
              <?php } ?>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
            <div class="courses  webd w-100">
            
              <h6>Basic Classes</h6>
              <?php
              $con = mysqli_connect("localhost:3306","root","","yha") or die ("Error connection"); //step 1 database connection
              $sql = "SELECT * FROM course_detail  where couh_id = 2";
              $contact = $con->query($sql);
              while($row = mysqli_fetch_assoc($contact)){
            ?> 
              <a href="course.php?id=<?php echo $row['course_id'];?>"><?php echo $row['course_title'] ?></a>
              
              <?php } ?>
            </div>
          </div> 
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
            <div class="courses ict w-100 h-50">
              <h6>Graphic design Classes</h6>
              <?php
                $con = mysqli_connect("localhost:3306","root","","yha") or die ("Error connection"); //step 1 database connection
                $sql = "SELECT * FROM course_detail where couh_id = 3";
                $contact = $con->query($sql);
                while($row = mysqli_fetch_assoc($contact)){
              ?> 
            
              <a href="course.php?id=<?php echo $row['course_id'];?>"><?php echo $row['course_title'] ?></a>
              
              <?php } ?>
            </div>
            
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
            <div class="courses advanceexcel w-100 h-50">
              <a href="#">Advance Excel</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script>
      let courses = document.getElementById('courses');
      let courses_menu = document.getElementById('courses_menu');
      let i = 0;
      courses.addEventListener("mouseover", function(){
          
              courses.style.color="#ff2b01";
              courses_menu.style.display="block";
          
      })  
      courses_menu.addEventListener("mouseover", function(){
          
              courses.style.color="#ff2b01";
              courses_menu.style.display="block";
        })
      courses_menu.addEventListener("mouseout", function(){
          
        courses.style.color="black";
        courses_menu.style.display="none";
      
      })

     let course2 = document.getElementById("dropbtn");
      c = 0;

      course2.addEventListener("click", function(){
          let dropdown_content = document.querySelector(".dropdown-content");
          if(c == 1){
              c = 0;
              console.log(c);
              dropdown_content.style.display = "none";
          } else{
              c = 1;
              console.log(c);
              dropdown_content.style.display = "block";
          }
      })

    </script>