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
</style>
<body>
  <div class="container">
    <?php include("nav.php");?>
    <section class="main">
      <div class="main-top">
        <h1>Attendance</h1>
        <i class="fas fa-user-cog">ef </i>
      </div>
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
            <!--End Select Option-->
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
                        $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                        $sql = "SELECT a.*,c.coursename,s.sectionname,se.timename FROM attendance AS a LEFT JOIN course AS c ON a.course_id=c.courseid LEFT JOIN section AS s ON a.section_id=s.sectionid LEFT JOIN sectiontime AS se ON a.time_id=se.timeid";
                        $res = mysqli_query($con,$sql);
                        $i=1;
                        while($row=mysqli_fetch_assoc($res)):
                    ?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $row['attend_id'];?></td>
                            <td><?php echo $row['student_id'];?></td>
                            <td><?php echo $row['student_name'];?></td>
                            <td><?php echo $row['dat'];?></td>
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
