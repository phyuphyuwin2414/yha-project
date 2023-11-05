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
        <i class="fas fa-user-cog"></i>
      </div>
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
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Date</th>
                <th>Courses</th>
                <th>Section</th>
                <th>Time</th>
                <th>Attendance</th>
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
                        <td><?php echo $row['student_id'];?></td>
                        <td><?php echo $row['student_name']; ?></td>
                        <td><?php echo $row['dat']; ?></td>
                        <td><?php echo $row['coursename']; ?></th>
                        <td><?php echo $row['sectionname']; ?></td>
                        <td><?php echo $row['timename']; ?></td>
                        <td><?php echo $row['attend']; ?></td>
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
</body>
</html>
