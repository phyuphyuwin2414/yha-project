<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Attendance Dashboard | By Code Info</title>
  <link rel="stylesheet" href="css/01.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="img/yha.jpg">
          <span class="nav-item"></span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-user"></i>
          <span class="nav-item">Admin</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-address-card"></i>
          <span class="nav-item">Registration</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-file"></i>
          <span class="nav-item">Attendance</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Report</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Setting</span>
        </a></li>

        <li><a href="#" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>
    <!--Tab Elements
    <div class="slider"></div>
    <div class="text-content">
        <div class="home text">
          <div class="title">Home Content</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi excepturi ducimus sequi dignissimos expedita tempore omnis quos cum, possimus, aspernatur esse nihil commodi est maiores dolorum rem iusto atque, beatae voluptas sit eligendi architecto dolorem temporibus. Non magnam ipsam, voluptas quasi nam dicta ut. Ad corrupti aliquid obcaecati alias, nemo veritatis porro nisi eius sequi dignissimos ea repellendus quibusdam minima ipsum animi quae, libero quisquam a! Laudantium iste est sapiente, ullam itaque odio iure laborum voluptatem quaerat tempore doloremque quam modi, atque minima enim saepe! Dolorem rerum minima incidunt, officia!</p>
        </div>
        <div class="blog text">
          <div class="title">Blog Content</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias tempora, unde reprehenderit incidunt excepturi blanditiis ullam dignissimos provident quam? Fugit, enim! Architecto ad officiis dignissimos ex quae iusto amet pariatur, ea eius aut velit, tempora magnam hic autem maiores unde corrupti tenetur delectus! Voluptatum praesentium labore consectetur ea qui illum illo distinctio, sunt, ipsam rerum optio quibusdam cum a? Aut facilis non fuga molestiae voluptatem omnis reprehenderit, dignissimos commodi repellat sapiente natus ipsam, ipsa distinctio. Ducimus repudiandae fuga aliquid, numquam.</p>
        </div>
        <div class="help text">
          <div class="title">Help Content</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores error neque, officia excepturi dolores quis dolor, architecto iusto deleniti a soluta nostrum. Fuga reiciendis beatae, dicta voluptatem, vitae eligendi maxime accusamus. Amet totam aut odio velit cumque autem neque sequi provident mollitia, nisi sunt maiores facilis debitis in officiis asperiores saepe quo soluta laudantium ad non quisquam! Repellendus culpa necessitatibus aliquam quod mollitia perspiciatis ducimus doloribus perferendis autem, omnis, impedit, veniam qui dolorem? Ipsam nihil assumenda, sit ratione blanditiis eius aliquam libero iusto, dolorum aut perferendis modi laboriosam sint dolor.</p>
        </div>
        <div class="code text">
          <div class="title">Code Content</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore magnam vitae inventore blanditiis nam tenetur voluptates doloribus error atque reprehenderit, necessitatibus minima incidunt a eius corrupti placeat, quasi similique deserunt, harum? Quia ut impedit ab earum expedita soluta repellat perferendis hic tempora inventore, accusantium porro consequuntur quisquam et assumenda distinctio dignissimos doloremque enim nemo delectus deserunt! Ullam perspiciatis quae aliquid animi quam amet deleniti, at dolorum tenetur, tempore laborum.</p>
        </div>
        <div class="about text">
          <div class="title">About Content</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus incidunt possimus quas ad, sit nam veniam illo ullam sapiente, aspernatur fugiat atque. Laboriosam libero voluptatum molestiae veniam earum quisquam, laudantium aperiam, eligendi dicta animi maxime sunt non nisi, ex, ipsa! Soluta ex, quibusdam voluptatem distinctio asperiores recusandae veritatis optio dolorem illo nesciunt quos ullam, dicta numquam ipsam cumque sed. Blanditiis omnis placeat, enim sit dicta eligendi voluptatibus laborum consectetur repudiandae tempora numquam molestiae rerum mollitia nemo. Velit perspiciatis, nesciunt, quo illo quas error debitis molestiae et sapiente neque tempore natus?</p>
        </div>
      </div>
    End Tab Elements-->
    <section class="main">
      <div class="main-top">
        <h1>Attendance</h1>
        <i class="fas fa-user-cog"></i>
      </div>
    <form action="addAttend.php" method="post">
    <div class="form-group row">
        <label for="studentId" class="col-sm-2 col-form-label">Student ID</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="studentcId" value="" placeholder="Student ID" name="student_id">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Student Name</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Student Name" name="student_name">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Courses</label>
        <div class="col-sm-10">
            <select name="course" id="" class="form-control">
                <option value="">Courses</option>
                <option value="ICT Foundation Course">ICT Foundation Course</option>
                <option value="Advance Photoshop">Advance Photoshop</option>
                <option value="Adobe Illustrator">Adobe Illustrator</option>
                <option value="Web Design & Development">Web Design & Development</option>
                <option value="Java">Java</option>
            </select>
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10">
        <input type="date" class="form-control" id="date" name="date">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Choose Section</label>
        <div class="col-sm-10">
            <select name="section" id="" class="form-control">
                <option value="">Sections</option>
                <option value="Mon-Thu">Mon-Thu</option>
                <option value="Sat-Sun">Sat-Sun</option>
                <option value="Sunday Only">Sunday Only</option>
            </select>
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Time</label>
        <div class="col-sm-10">
            <select name="time" id="" class="form-control">
                <option value="">Time</option>
                <option value="8:00-10:00AM">8:00-10:00AM</option>
                <option value="10:00-12:00AM">10:00-12:00AM</option>
                <option value="1:00-2:00PM">1:00-2:00PM</option>
                <option value="2:00-4:00PM">2:00-4:00PM</option>
                <option value="4:00-6:00PM">4:00-6:00PM</option>
            </select>
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Attendance</label>
        <div class="col-sm-10">
            <select name="attend" id="" class="form-control">
                <option value="">Attendance</option>
                <option value="Present">Present</option>
                <option value="Absent">Absent</option>
            </select>
        </div>
    </div><br/>
    <form class="form-inline">          
        <button class="btn  my-2 my-sm-0" style="background-color:orangered"  type="submit" name="save">Save</button>
    </form>
    </form><br/><br/>
    <!--Search Bar-->
    <div class="wrapper">
      <div class="search-input">
        <a href="" target="_blank" hidden></a>
        <input type="text" id="find" placeholder="Type to search..">
        <div class="autocom-box" id="alist">
          <!-- here list are inserted from javascript -->
        </div>
        <div class="icon"><i class="fas fa-search"></i></div>
      </div>
    </div>
    <!--<div id="alist"></div>-->
      <!--<section class="attendance">
        <div class="attendance-list">
          <h1>Attendance List</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Courses</th>
                <th>Date</th>
                <th>Section</th>
                <th>Time</th>
                <th>Attendance</th>
                <th colspan="2" style="text-align:center">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php
                /*$con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                $sql = "SELECT * FROM attendance";
                $res = mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)):*/
            ?>
              <tr>
                  <td><?php //echo $row['attend_id']; ?></td>
                  <td><?php //echo $row['student_id']; ?></td>
                  <td><?php //echo $row['student_name']; ?></td>
                  <td><?php //echo $row['course']; ?></th>
                  <td><?php //echo $row['date']; ?></td>
                  <td><?php //echo $row['section']; ?></td>
                  <td><?php //echo $row['time']; ?></td>
                  <td><?php //echo $row['attend']; ?></td>
                  <td><a href="attendupdate.php?id=<?php //echo $row['student_id']; ?>" class="btn btn-outline-info" style="width:50px">Edit</a></td>
                  <td><a href="del_attend.php?id=<?php //echo $row['student_id']; ?>" class="btn btn-outline-danger text-center" style="width:70px">Delete</a></td>
            <?php //endwhile; ?>
            </tbody>
          </table>
        </div>
      </section>-->
    </section>
  </div>
  <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
           $('#find').keyup(function(){
                var que = $(this).val();
                if(que != ''){
                    $.ajax({
                        url:"search.php",
                        method:"POST",
                        data:{que:que},
                        success:function(data){
                            $('#alist').fadeIn();
                            $('#alist').html(data);
                        }
                    });
                }
           });
           $(document).on('click','li',function(){
            $('#find').val($(this).text());
            $('#alist').fadeOut();
           });
        });
    </script>
    <script src="js/suggestions.js"></script>
    <script src="js/script1.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
