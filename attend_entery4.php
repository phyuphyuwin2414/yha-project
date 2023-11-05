<?php 

session_start();
$conn = mysqli_connect("localhost","root","","yha");
$stuid = "";
$stuname = "";
$course = "";
$date = "";
$section = "";
$time = "";
$attend = "";
$id = 0;
$edit_state = false;
    // For updating records

// For deleteing records
if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	mysqli_query($conn, "DELETE FROM attendance WHERE attend_id='$id'");
	$_SESSION['message'] = "Data Deleted Successfully";
	header('location:attend_entery4.php');
}

?>
<!------------------------------------------->
<?php
if (isset($_GET['edit'])) {
    error_reporting(0);
    ini_set('display_errors',0);
		$id = $_GET['edit'];
		$edit_state = true;

		  $record = mysqli_query($conn,"SELECT a.*,c.*,s.*,se.* FROM attendance AS a LEFT JOIN course AS c ON a.courseid=c.courseid LEFT JOIN section AS s ON a.sectionid=s.sectionid LEFT JOIN sectiontime AS se ON a.timeid=se.timeid WHERE attend_id = '$id'");
      $data = mysqli_fetch_array($record);
	    $stuid=$data['stu_id'];
      $stuname=$data['stu_name'];
      $course=$data['courseid'];
      $coursename=$data['coursename'];
      $date=$data['dat'];
      $section=$data['sectionid'];
      $sectionname=$data['sectionname'];
      $time=$data['timeid'];
      $timename=$data['timename'];
      $attend=$data['attend'];
      
      // $attend_id = $data['attend_id'];
      // $stu_id = $data['stu_id'];
      // $stu_name = $data['stu_name'];
      // $course = $data['coursename'];
      // $section = $data['sectionname'];
      // $time = $data['timename'];
      // $attend = $data['attend'];
      // $edit_state = true;
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
        <input type="hidden" class="form-control" name="id"  value="<?php echo $id; ?>">
        <label for="studentId" class="col-sm-2 col-form-label">Student ID</label>
        <div class="col-sm-10">
        <input type="text" <?php if($edit_state==false){?>disabled<?php }else{}?> class="form-control" id="studentcId"  value="<?php echo $stuid;?>" placeholder="Student ID" name="student_id">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Student Name</label>
        <div class="col-sm-10">
        <input type="text" <?php if($edit_state==false){?>disabled<?php }else{}?> class="form-control"  value="<?php echo $stuname;?>" id="name" placeholder="Student Name" name="student_name">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10">
        <input type="date" <?php if($edit_state==false){?>disabled<?php }else{}?> class="form-control"  value="<?php echo $date;?>" id="date" name="date">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Courses</label>
        <div class="col-sm-10">
            <select <?php if($edit_state==false){?>disabled<?php }else{}?> name="course" id=""  class="form-control">
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
        <label for="text" class="col-sm-2 col-form-label">Subjects</label>
        <div class="col-sm-10">
            <select <?php if($edit_state==false){?>disabled<?php }else{}?> name="subid" id=""  class="form-control">
              <?php if($edit_state==false):?>
                <option value="">Subjects</option>
              <?php else:?>
                <option value="<?php echo $subid;?>"><?php echo $subid;?>&nbsp;<?php echo $subname;?></option>
              <?php endif;?>
                <?php 
                  include('inc/dbcon.php');
                  $sql = "SELECT * FROM subject";
                  $res = mysqli_query($con,$sql);
                  while($row=mysqli_fetch_assoc($res)):
                ?>
                <option><?php echo $row['subid'];?>&nbsp;&nbsp;<?php echo $row['subname'];?></option>
                <?php endwhile;?>
            </select>
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Choose Section</label>
        <div class="col-sm-10">
            <select <?php if($edit_state==false){?>disabled<?php }else{}?> name="section"  id="" class="form-control">
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
            <select <?php if($edit_state==false){?>disabled<?php }else{}?> name="time"  id="" class="form-control">
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
            <select <?php if($edit_state==false){?>disabled<?php }else{}?> name="attend"  id="" class="form-control">
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
    <button class="btn"  style="background-color:#ff6b01;width:150px;height:50px;color:white;" type="submit" name="save" >Save</button>
    <?php else: ?>
      <button class="btn btn-success" type="submit" name="update" >Update</button>
    <?php endif ?>
    </form>
    </form><br/><br/>

      <section class="attendance" id="attend">
        <div class="attendance-list">
          <h1>Attendance List</h1><br><br>
          <!--Date Search-->
            <form action="" method="post">
              <div class="form-group row">
                  <div class="col-3">
                      <select name="course" id="" class="form-control flex">
                          <option value="">Choose Course</option>
                          <?php 
                              $con = mysqli_connect("localhost","root","","yha");
                              $sql = "SELECT * FROM course";
                              $res = mysqli_query($con, $sql);
                              while($row = mysqli_fetch_assoc($res)):
                          ?>
                          <option value="<?php echo $row['courseid'];?>"><?php echo $row['courseid'];?><?php echo $row['coursename'];?></option>
                          <?php endwhile;?>
                      </select>
                  </div>
                  <div class="col-3">
                      <select name="section" id="" class="form-control flex">
                          <option value="">Choose Section</option>
                          <?php 
                              $con = mysqli_connect("localhost","root","","yha");
                              $sql = "SELECT * FROM section";
                              $res = mysqli_query($con, $sql);
                              while($row = mysqli_fetch_assoc($res)):
                          ?>
                          <option value="<?php echo $row['sectionid'];?>"><?php echo $row['sectionid'];?><?php echo $row['sectionname'];?></option>
                          <?php endwhile;?>
                      </select>
                  </div>
                  <div class="col-3">
                      <select name="time" id="" class="form-control flex">
                          <option value="">Choose SectionTime</option>
                          <?php 
                              $con = mysqli_connect("localhost","root","","yha");
                              $sql = "SELECT * FROM sectiontime";
                              $res = mysqli_query($con, $sql);
                              while($row = mysqli_fetch_assoc($res)):
                          ?>
                          <option value="<?php echo $row['timeid'];?>"><?php echo $row['timeid'];?><?php echo $row['timename'];?></option>
                          <?php endwhile;?>
                      </select>
                  </div>
                  <div class="col-3">
                    <input type="submit" id="save" class="btn flex" value="Submit" name="submit" style="width:150px;margin-left:50px;margin-top:6px;background:#ff6b01;color:white;">
                  </div>
              </div>
              </form>

              <!------------------------->
              <form action="" class="form" method="post">
                  <table class="table" name="tbl">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Attendance ID</th>
                        <th>Student ID</th>
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
                  if(isset($_POST['submit'])){
                    $course = $_POST['course'];
                    $section = $_POST['section'];
                    $time = $_POST['time'];

                    $con = mysqli_connect("localhost","root","","yha");

                    $query = "SELECT re.*,c.*,s.*,t.* FROM register AS re LEFT JOIN course AS c ON re.courseid=c.courseid
                     LEFT JOIN section AS s ON re.sectionid=s.sectionid LEFT JOIN sectiontime AS t ON re.timeid=t.timeid WHERE re.courseid='$course' AND re.sectionid='$section' AND re.timeid='$time'";
                   // $res = mysqli_query($con, $query);
                   $res = mysqli_query($con,$query);

                    if($res){
                      while($row=mysqli_fetch_assoc($res)){
                        $stu_id = $row['stu_id'];
                        $stu_name = $row['stu_name'];
                        $course = $row['courseid'];
                        $section = $row['sectionid'];
                        $time = $row['timeid'];
                        $date = date("Y/m/d");
                        $attend = "Present";
                        $sql = "INSERT INTO attendance(stu_id, stu_name, courseid, dat, sectionid, timeid, attend) VALUES ('$stu_id','$stu_name','$course','$date','$section','$time','$attend')";
                        mysqli_query($con, $sql);
                      }
                      }else{
                          echo "Error: " . mysqli_error($con);
                      }
                  
                ?>

            <?php 
            if(isset($_POST['submit'])){
              $course = $_POST['course'];
              $section = $_POST['section'];
              $time = $_POST['time'];
              $date = date("Y/m/d");
              $con = mysqli_connect("localhost","root","","yha");

              $sql = "SELECT a.*,re.*,c.*,s.*,se.* FROM attendance AS a LEFT JOIN register AS re ON a.stu_id=re.stu_id LEFT JOIN course as c ON a.courseid=c.courseid LEFT JOIN section AS s ON a.sectionid=s.sectionid LEFT JOIN sectiontime AS se ON a.timeid=se.timeid WHERE a.courseid='$course' AND a.sectionid='$section' AND a.timeid='$time' AND dat='$date'";

              // $sql = "SELECT re.*,c.*,s.*,t.* FROM register AS re LEFT JOIN course AS c ON re.course_id=c.courseid LEFT JOIN section AS s ON re.section_id=s.sectionid LEFT JOIN sectiontime AS t ON re.time_id=t.timeid WHERE course_id='$course' AND section_id='$section' AND time_id='$time'";
              $res = mysqli_query($con, $sql);
              $i = 1;
              while($row = mysqli_fetch_assoc($res)):
            ?>

            <tr>
              <td><input type="number" disabled value="<?php echo $i;?>"></td>
              <td><input type="number" disabled name="attend_id" value="<?php echo $row['attend_id'];?>"></td>
              <td><input type="number" disabled name="stu_id" value="<?php echo $row['stu_id'];?>"></td>
              <td><input type="text" disabled name="stu_name" value="<?php echo $row['stu_name'];?>"></td>
              <td><input type="date" disabled name="date" value="<?php echo $row['dat'];?>"></td>
              <td><input type="text" disabled name="course" value="<?php echo $row['coursename'];?>"></td>
              <td><input type="text" disabled name="section" value="<?php echo $row['sectionname'];?>"></td>
              <td><input type="text" disabled name="time" value="<?php echo $row['timename'];?>"></td>
              <td><input type="text" disabled name="attend" value="<?php echo $row['attend'];?>"></td>
              <td><a href="attend_entery4.php?edit=<?php echo $row['attend_id'];?>" style="width:70px;" class="btn btn-primary">Edit</a></td>
              <td><a href="attend_entery4.php?delete=<?php echo $row['attend_id'];?>" style="width: 70px;" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php $i++;endwhile;}?>
            </tbody>
          </table>
          </form>
          <?php }elseif(isset($_POST['update'])) {
                    $id = $_POST['id'];
                    $stuid=$_POST['student_id'];
                    $stuname=$_POST['student_name'];
                    $course=$_POST['course'];
                    $date=$_POST['date'];
                    $section=$_POST['section'];
                    $time=$_POST['time'];
                    $attend=$_POST['attend'];
                    mysqli_query($conn, "UPDATE attendance SET attend_id='$id',student_id='$stuid',student_name='$stuname',course_id='$course',dat='$date',section_id='$section',time_id='$time',attend='$attend' WHERE attend_id='$id'");
                    $_SESSION['message'] = "Data Updated Successfully";
                    header('location: attend_entery4.php');
                    ?>
                    <?php 
                      if(isset($_POST['update'])){
                        $id = $_POST['id'];
                        $date = date("Y/m/d");

                        $course=$_POST['course'];
                        $section = $_POST['section'];
                        $time=$_POST['time'];
                        $con = mysqli_connect("localhost","root","","yha");
                        $sql = "SELECT a.*,re.*,c.*,s.*,se.* FROM attendance AS a LEFT JOIN register AS re ON a.student_id=re.stu_id LEFT JOIN course as c ON a.course_id=c.courseid LEFT JOIN section AS s ON a.section_id=s.sectionid LEFT JOIN sectiontime AS se ON a.time_id=se.timeid WHERE a.course_id='$course' AND a.section_id='$section' AND a.time_id='$time' AND dat='$date'";
                        $res = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_assoc($res)):
                    ?>
                      <tr>
                          <td><input type="number" disabled value="<?php echo $i;?>"></td>
                          <td><input type="number" disabled name="attend_id" value="<?php echo $row['attend_id'];?>"></td>
                          <td><input type="number" disabled name="stu_id" value="<?php echo $row['stu_id'];?>"></td>
                          <td><input type="text" disabled name="stu_name" value="<?php echo $row['stu_name'];?>"></td>
                          <td><input type="date" disabled name="date" value="<?php echo $row['dat'];?>"></td>
                          <td><input type="text" disabled name="course" value="<?php echo $row['coursename'];?>"></td>
                          <td><input type="text" disabled name="section" value="<?php echo $row['sectionname'];?>"></td>
                          <td><input type="text" disabled name="time" value="<?php echo $row['timename'];?>"></td>
                          <td><input type="text" disabled name="attend" value="<?php echo $row['attend'];?>"></td>
                          <td><a href="attend_entery4.php?edit=<?php echo $row['attend_id'];?>" style="width:50px;" class="btn btn-primary">Edit</a></td>
                          <td><a href="attend_entery4.php?delete=<?php echo $row['attend_id'];?>" style="width: 70px;" class="btn btn-danger">Delete</a></td>
                        </tr>
                    <?php $i++;endwhile;}?>
                    </tbody>
                  </table>
                  </form>
                <?php
                    }
                ?>
              <!------------------------->
              
        </div>
        <?php //endwhile;?>
      </section>   
    </section>
  </div>

  <!--Script-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
          
        $(document).ready(function(){
           $('#save').onclick(function(){
                var input = $(this).val();
                if(input != ''){
                    $.ajax({
                        url:"attend_save.php",
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
</body>
</html>
