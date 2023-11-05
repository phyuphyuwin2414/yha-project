<?php include('head.php');?>
  <div class="container-fluid">
    <?php include("nav.php");?>
    <section class="main">
      <div class="main-top">
        <i class="fas fa-user-cog"></i>
      </div>
      <section class="attendance" id="attend">
        <div class="attendance-list">
          <h1>Attendance List</h1><br><br>
          <form action="" method="post">
            <div class="form-group row">
                <input type="text" class="form-control col-4 mx-4" name="phno">
                <input type="submit" name="search" style="background:#ff6b01;color:white;" class="btn col-2">
            </div>
          </form>
          <!--Date Search
          <form action="d_search.php" method="post">
            <span style="margin-left:50px;font-weight:bold;">Start Date&nbsp; :&nbsp;&nbsp;<input type="date" id="stdate" name="st_date"></span>
            <span style="margin-left:130px;font-weight:bold;">End Date&nbsp; :&nbsp;&nbsp;<input type="date" id="edate" name="e_date"></span>
            <button name="save" id="d_search" style="width:140px;" class="btn btn-secondary">Search</button>
          </form>
          <div id="searchdate"></div>
          End Date Search-->
          <br>
          
          <?php 
            if(isset($_POST['search'])){
              $phno = $_POST['phno'];
            
          ?>

          <span>Total Present:</span>
          <input style="margin-left:40px;width:60px;" type="button" class="btn btn-dark" value="<?php 
            include("inc/dbcon.php");
            $sql = "SELECT COUNT(attend_id) FROM attendance AS a LEFT JOIN register AS re ON a.student_id=re.stu_id WHERE attend='Present' AND phno='$phno'";
            $res = mysqli_query($con,$sql);
            $row = implode(mysqli_fetch_assoc($res));
            echo $row;
          ?>">
          <span>Total Absent:</span>
          <input style="margin-left:40px;width:60px;" type="button" class="btn btn-dark" value="<?php 
            include("inc/dbcon.php");
            $sql = "SELECT COUNT(attend_id) FROM attendance AS a LEFT JOIN register AS re ON a.student_id=re.stu_id WHERE attend='Absent' AND phno='$phno'";
            $res = mysqli_query($con,$sql);
            $row = implode(mysqli_fetch_assoc($res));
            echo $row;
          ?>">
          
          <span>Total Leave:</span>
            <input style="margin-left:40px;width:60px;" type="button" class="btn" value="<?php 
              include("inc/dbcon.php");
              $sql = "SELECT COUNT(attend_id) FROM attendance AS a LEFT JOIN register AS re ON a.student_id=re.stu_id WHERE attend='Leave' AND phno='$phno'";
              $res = mysqli_query($con,$sql);
              $row = implode(mysqli_fetch_assoc($res));
              echo $row;
            ?>"><br><br>
            
            <?php }?>

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
                if(isset($_POST['search'])){
                    $phno = $_POST['phno'];
                    $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                    $sql = "SELECT re.*,c.coursename,s.sectionname,t.timename,a.* FROM register AS re LEFT JOIN attendance AS a ON re.stu_id=a.student_id LEFT JOIN course AS c ON a.course_id=c.courseid LEFT JOIN section AS s ON a.section_id=s.sectionid LEFT JOIN sectiontime AS t ON a.time_id=t.timeid WHERE phno='$phno'";
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
                <?php $i++; endwhile; }?>
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
