<?php
include 'attend_process.php';
if (isset($_GET['edit'])) {
    error_reporting(0);
    ini_set('display_errors',0);
		$id = $_GET['edit'];
		$edit_state = true;

		  $record = mysqli_query($conn,"SELECT a.*,c.*,s.*,se.* FROM attendance AS a LEFT JOIN course AS c ON a.course_id=c.courseid LEFT JOIN section AS s ON a.section_id=s.sectionid LEFT JOIN sectiontime AS se ON a.time_id=se.timeid WHERE attend_id = '$id'");
      $data = mysqli_fetch_array($record);
	    $stuid=$data['student_id'];
      $stuname=$data['student_name'];
      $course=$data['course_id'];
      $coursename=$data['coursename'];
      $date=$data['dat'];
      $section=$data['section_id'];
      $sectionname=$data['sectionname'];
      $time=$data['time_id'];
      $timename=$data['timename'];
      $attend=$data['attend'];
	}
?>
<?php include('head.php');?>
  <div class="container-fluid">
    <?php include("nav.php");?>
    <section class="main">
      <div class="main-top">
        <h1>Attendance</h1> 
        <i class="fas fa-user-cog"></i>
      </div>
      
    <form action="" method="post">
    <div class="form-group row">
        <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
        <label for="studentId" class="col-sm-2 col-form-label">Student ID</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="studentcId" value="<?php echo $stuid;?>" placeholder="Student ID" name="student_id">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Student Name</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" value="<?php echo $stuname;?>" id="name" placeholder="Student Name" name="student_name">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10">
        <input type="date" class="form-control" value="<?php echo $date;?>" id="date" name="date">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Courses</label>
        <div class="col-sm-10">
            <select name="course" id="" class="form-control">
              <?php if($edit_state==false):?>
                <option value="">Courses</option>
              <?php else:?>
                <option value="<?php echo $course;?>"><?php echo $course;?>&nbsp;<?php echo $coursename;?></option>
              <?php endif;?>
                <?php 
                  include('inc/dbcon.php');
                  $sql = "SELECT * FROM course";
                  $res = mysqli_query($con,$sql);
                  while($row=mysqli_fetch_assoc($res)):
                ?>
                <option><?php echo $row['courseid'];?>&nbsp;&nbsp;<?php echo $row['coursename'];?></option>
                <?php endwhile;?>
            </select>
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Choose Section</label>
        <div class="col-sm-10">
            <select name="section" id="" class="form-control">
              <?php if($edit_state==false):?>
                <option value="">Section</option>
              <?php else:?>
                <option value="<?php echo $section;?>"><?php echo $section;?>&nbsp;<?php echo $sectionname;?></option>
              <?php endif;?>
                <?php 
                  include('inc/dbcon.php');
                  $sql = "SELECT * FROM section";
                  $res = mysqli_query($con,$sql);
                  while($row=mysqli_fetch_assoc($res)):
                ?>
                <option><?php echo $row['sectionid'];?>&nbsp;&nbsp;<?php echo $row['sectionname'];?></option>
                <?php endwhile;?>
            </select>
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Time</label>
        <div class="col-sm-10">
            <select name="time" id="" class="form-control">
              <?php if($edit_state==false):?>
                <option value="">Time</option>
              <?php else:?>
                <option value="<?php echo $time;?>"><?php echo $time;?> <?php echo $timename;?></option>
              <?php endif;?>
                <?php 
                  include('inc/dbcon.php');
                  $sql = "SELECT * FROM sectiontime";
                  $res = mysqli_query($con,$sql);
                  while($row=mysqli_fetch_assoc($res)):
                ?>
                <option><?php echo $row['timeid'];?>&nbsp;&nbsp;<?php echo $row['timename'];?></option>
                <?php endwhile;?>
            </select>
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Attendance</label>
        <div class="col-sm-10">
            <select name="attend" id="" class="form-control">
            <?php if ($edit_state == false): ?>
                <option value="">Attendance</option>
            <?php else: ?>
                <option value="<?php echo $attend;?>"><?php echo $attend;?></option>
            <?php endif;?>
                <option value="Present">Present</option>
                <option value="Absent">Absent</option>
                <option value="Leave">Leave</option>
            </select>
        </div>
    </div><br/>
    <form class="form-inline">          
    <?php if ($edit_state == false): ?>
    <button class="btn" style="background-color:orangered;width:150px;height:50px" type="submit" name="save" >Save</button>
    <?php else: ?>
      <button class="btn btn-success" type="submit" name="update" >Update</button>
    <?php endif ?>
    </form>
    </form><br/><br/>
      <!--Searching-->
      <div class="form-group row">
        <label for="text" class="col-sm-3 col-form-label">Search For Attendance</label>
        <div class="col-sm-9">
        <div class="search-input">
          <a href="" target="_blank" hidden></a>
          <input type="text" id="live_search" autocomplete = "off" placeholder="Type to search..">
          <div class="icon"><i class="fas fa-search"></i></div>
        </div>
        </div>
      </div><br/>
      <!-- <div class="wrapper">
      <label for="" style="background-color:orangered;">Search for Attendance</label>
        <div class="search-input">
          <a href="" target="_blank" hidden></a>
          <input type="text" id="live_search" autocomplete = "off" placeholder="Type to search..">
          <div class="icon"><i class="fas fa-search"></i></div>
        </div>
      </div> -->
      <div id="searchresult"></div>
      <!--Searching End-->
      <section class="attendance" id="attend">
        <div class="attendance-list">
          <h1>Attendance List</h1><br><br>
          <!--Date Search-->
          <form action="d_search.php" method="post">
            <span style="margin-left:50px;font-weight:bold;">Start Date&nbsp; :&nbsp;&nbsp;<input type="date" id="stdate" name="st_date"></span>
            <span style="margin-left:130px;font-weight:bold;">End Date&nbsp; :&nbsp;&nbsp;<input type="date" id="edate" name="e_date"></span>
            <button name="save" id="d_search" style="width:140px;" class="btn btn-secondary">Search</button>
          </form>
          <div id="searchdate"></div>
          <!-- End Date Search-->
          <br>
          <span>Total Present:</span>
          <input style="margin-left:40px;width:60px;" type="button" class="btn btn-secondary" value="<?php 
            include("inc/dbcon.php");
            $sql = "SELECT COUNT(attend_id) FROM attendance WHERE attend='Present'";
            $res = mysqli_query($con,$sql);
            $row = implode(mysqli_fetch_assoc($res));
            echo $row;
          ?>">
          <span>Total Absent:</span>
          <input style="margin-left:40px;width:60px;" type="button" class="btn btn-secondary" value="<?php 
            include("inc/dbcon.php");
            $sql = "SELECT COUNT(attend_id) FROM attendance WHERE attend='absent'";
            $res = mysqli_query($con,$sql);
            $row = implode(mysqli_fetch_assoc($res));
            echo $row;
          ?>">
          
          <span>Total Leave:</span>
            <input style="margin-left:40px;width:60px;" type="button" class="btn btn-secondary" value="<?php 
              include("inc/dbcon.php");
              $sql = "SELECT COUNT(attend_id) FROM attendance WHERE attend='leave'";
              $res = mysqli_query($con,$sql);
              $row = implode(mysqli_fetch_assoc($res));
              echo $row;
            ?>"><br><br>
            
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Attendance ID</th>
                <th>Student Name</th>
                <th>Date</th>
                <th>Courses</th>
                <th>Section</th>
                <th>Time</th>
                <th>Attendance</th>
                <th colspan="2" style="text-align:center">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php
                    $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                    $sql = "SELECT a.*,c.coursename,s.sectionname,se.timename FROM attendance AS a LEFT JOIN course AS c ON a.course_id=c.courseid LEFT JOIN section AS s ON a.section_id=s.sectionid LEFT JOIN sectiontime AS se ON a.time_id=se.timeid";
                    $res = mysqli_query($con,$sql);
                    $i=1;
                    while($row=mysqli_fetch_assoc($res)):
                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['attend_id']; ?></td>
                        <td><?php echo $row['student_name']; ?></td>
                        <td><?php echo $row['dat']; ?></td>
                        <td><?php echo $row['coursename']; ?></th>
                        <td><?php echo $row['sectionname']; ?></td>
                        <td><?php echo $row['timename']; ?></td>
                        <td><?php echo $row['attend']; ?></td>
                        <td><a href="01.php?edit=<?php echo $row['attend_id']; ?>" class="btn btn-outline-success" style="width:50px">Edit</a></td>
                        <td><a href="attend_process.php?delete=<?php echo $row['attend_id']; ?>" class="btn btn-outline-danger text-center" style="width:70px">Delete</a></td>
                <?php $i++; endwhile; ?>
            </tbody>
          </table>
        </div>
        <?php //endwhile;?>
      </section>
    </section>
  </div>
  <!--Script-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
           $('#live_search').keyup(function(){
                var input = $(this).val();
                if(input != ''){
                    $.ajax({
                        url:"live_search.php",
                        method:"post",
                        data:{input:input},
                        success:function(response){
                            $('#attend').html(response);
                        }
                    });
                }else{
                  $('#searchresult').css('display','none');
                }
           });
        });
        </script>
        <!--<script>
        $(document).ready(function(){
           $('#d_search').keyup(function(){
                var input = $('#stdate','#edate').val();
                if(input != ''){
                    $.ajax({
                        url:"test.php",
                        method:"post",
                        data:{input:input},
                        success:function(response){
                            $('#attend').html(response);
                        }
                    });
                }else{
                  $('#searchdate').css('display','none');
                }
           });
        });
        </script>-->
        <!--End Script-->
    <!--<script src="js/script1.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>-->
</body>
</html>
