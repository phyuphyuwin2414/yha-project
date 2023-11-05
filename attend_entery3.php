<?php
include 'attend_process.php';
if (isset($_GET['edit'])){
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
<style>
  .attendance .attendance-list span{
    margin:0 50px;
  }
  /* .con{
    overflow-x: scroll;
    width: 1000px;
    padding: 3px 0px;
  }
  #sec_form{
    width: 1400px
  }
  #sec_form input{
    color: blue;
    display:inline-block;
    margin: 0px;
    padding: 0px;
  }
  #sec_form #i1{
    width: 3%;
  }
  #sec_form #i2{
    width: 14%;
  }
  #sec_form #i3{
    width: 12%;
  }
  #sec_form #i4{
    width: 15%;
  }
  #sec_form #i5{
    width: 7%;
  }
  #sec_form #i6{
    width: 10%;
  }
  #sec_form #i7{
    width: 9%;
  }
  #sec_form #i8{
    width: 7%;
  }
  #sec_form #i9{
    width: 11%;
  }
  #sec_form #i10{
    width: 7%;
  } */
</style>
<body>
  <div class="container">
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
      <section class="attendance" id="attend">
        <div class="attendance-list">
            <!--Start Select Option-->
            <form action="" method="post">
              <div class="form-group row">
                  <div class="col-3">
                      <select name="course" id="">
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
                      <select name="section" id="">
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
                      <select name="time" id="">
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
                    <input type="submit" id="save" class="btn btn-success" value="Submit" name="submit">
                  </div>
              </div>
              </form>

              <div id="searchresult">
              <table class="table" id="attend">
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
                        $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                        $sql = "SELECT re.*,c.*,s.*,t.* FROM register AS re LEFT JOIN course AS c ON re.course_id=c.courseid LEFT JOIN section AS s ON re.section_id=s.sectionid LEFT JOIN sectiontime AS t ON re.time_id=t.timeid WHERE course_id='$course' AND section_id='$section' AND time_id='$time'";
                        //$sql = "SELECT a.*,c.coursename,s.sectionname,se.timename FROM attendance AS a LEFT JOIN course AS c ON a.course_id=c.courseid LEFT JOIN section AS s ON a.section_id=s.sectionid LEFT JOIN sectiontime AS se ON a.time_id=se.timeid WHERE course_id='$course' AND section_id='$section' AND time_id='$time'";
                        $res = mysqli_query($con,$sql);
                        $i=1;
                        while($row=mysqli_fetch_assoc($res)):
                    ?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td name="attend_id"></td>
                            <td name="stu_id"><?php echo $row['stu_id'];?></td>
                            <td name="stu_name"><?php echo $row['stu_name'];?></td>
                            <td name="date"><?php echo date("d/m/Y");?></td>
                            <td name="course"><?php echo $row['coursename']; ?></th>
                            <td name="section"><?php echo $row['sectionname']; ?></td>
                            <td name="time"><?php echo $row['timename']; ?></td>
                            <td name="attend">Present</td>
                            <td><a href="attend_entery1.php?edit=<?php echo $row['stu_id'];?>" class="btn btn-outline-success" style="width:50px;">Edit</a></td>
                            <td><a href="attend_delete.php?delete=<?php echo $row['stu_id'];?>" class="btn btn-outline-danger" style="width:70px;">Delete</a></td>
                            <td><a href="01.php?edit=<?php echo $row['attend_id']; ?>" class="btn btn-outline-success" style="width:50px">Edit</a></td>
                            <td><a href="attend_process.php?delete=<?php echo $row['attend_id']; ?>" class="btn btn-outline-danger text-center" style="width:70px">Delete</a></td>
                        </tr>
                    <?php $i++; endwhile; }?>
                </tbody>
              </table>
            <!--End Select Option-->
        </div>
        <?php endwhile;?>
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
