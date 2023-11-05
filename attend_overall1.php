<?php include('head.php');?>
  <div class="container-fluid">
    <?php include("nav.php");?>
    <section class="main">
      <div class="main-top">
        <i class="fas fa-user-cog"></i>
      </div>
      <section class="attendance">
        <div class="attendance-list">
          <h1>Attendance List</h1><br><br>
          <!--Date Search-->
          <form action="" method="post">
            <span style="margin-left:50px;font-weight:bold;">Start Date&nbsp; :&nbsp;&nbsp;<input type="date" name="st_date"></span>
            <span style="margin-left:130px;font-weight:bold;">End Date&nbsp; :&nbsp;&nbsp;<input type="date" name="e_date"></span>
            <button type="submit" name="save" id="d_search" style="margin-left:150px;width:140px;background:#ff6b01;color:white;" class="btn">Search</button>
          </form>
          <div id="searchdate"></div>
          <!-- End Date Search-->
          <br>
          <span>Total Present:</span>
          <input style="margin-left:40px;width:60px;background:#ff6b01;color:white;" type="button" class="btn" value="<?php 
            include("inc/dbcon.php");
            $sql = "SELECT COUNT(attend_id) FROM attendance WHERE attend='Present'";
            $res = mysqli_query($con,$sql);
            $row = implode(mysqli_fetch_assoc($res));
            echo $row;
          ?>">
          <span>Total Absent:</span>
          <input style="margin-left:40px;width:60px;background:#ff6b01;color:white;" type="button" class="btn" value="<?php 
            include("inc/dbcon.php");
            $sql = "SELECT COUNT(attend_id) FROM attendance WHERE attend='Absent'";
            $res = mysqli_query($con,$sql);
            $row = implode(mysqli_fetch_assoc($res));
            echo $row;
          ?>">
          
          <span style="width:200px;">Total Leave:</span>
            <input style="width:60px;background:#ff6b01;color:white;margin-left:190px;" type="button" class="btn" value="<?php 
              include("inc/dbcon.php");
              $sql = "SELECT COUNT(attend_id) FROM attendance WHERE attend='Leave'";
              $res = mysqli_query($con,$sql);
              $row = implode(mysqli_fetch_assoc($res));
              echo $row;
            ?>"><br><br>
            
          <table class="table">
            <thead>
              <tr>
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
                if(isset($_POST['save'])){
                    $st_date = $_POST['st_date'];
                    $e_date = $_POST['e_date'];
                    $edit_state = true;
                    $con = mysqli_connect("localhost","root","","yha");
                    $sql = "SELECT a.*,c.coursename,s.sectionname,se.timename FROM attendance AS a LEFT JOIN course AS c ON a.courseid=c.courseid LEFT JOIN section AS s ON a.sectionid=s.sectionid LEFT JOIN sectiontime AS se ON a.timeid=se.timeid WHERE dat BETWEEN '$st_date' AND '$e_date' ";
                    $res = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_assoc($res)):
                    $attend_id = $row['attend_id'];
                    $stu_id = $row['stu_id'];
                    $stu_name = $row['stu_name'];
                    $date = $row['dat'];
                    $course = $row['coursename'];
                    $section = $row['sectionname'];
                    $time = $row['timename'];
                    $attend = $row['attend'];
            ?>
                    <tr>
                        <td><?php echo $attend_id; ?></td>
                        <td><?php echo $stu_id;?></td>
                        <td><?php echo $stu_name?></td>
                        <td><?php echo $date;?></td>
                        <td><?php echo $course;?></th>
                        <td><?php echo $section;?></td>
                        <td><?php echo $time;?></td>
                        <td><?php echo $attend;?></td>
                    </tr>
                <?php endwhile; }else{
                    
                    $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                    $sql = "SELECT a.*,c.coursename,s.sectionname,se.timename FROM attendance AS a LEFT JOIN course AS c ON a.courseid=c.courseid LEFT JOIN section AS s ON a.sectionid=s.sectionid LEFT JOIN sectiontime AS se ON a.timeid=se.timeid ORDER BY attend_id DESC";
                    $res = mysqli_query($con,$sql);
                    $state=true;
                    while($row=mysqli_fetch_assoc($res)){
                ?>
                    <tr>
                        <td><?php echo $row['attend_id']; ?></td>
                        <td><?php echo $row['stu_id']; ?></td>
                        <td><?php echo $row['stu_name'];?></td>
                        <td><?php echo $row['dat'];?></td>
                        <td><?php echo $row['coursename'];?></th>
                        <td><?php echo $row['sectionname'];?></td>
                        <td><?php echo $row['timename'];?></td>
                        <td><?php echo $row['attend'];?></td>
                    </tr>
                <?php }

                }?>

            </tbody>
          </table>
        </div>
        <?php //endwhile;?>
      </section>
    </section>
  </div>
  <!--Script-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <!-- <script>
        $(document).ready(function(){
           $('#d_search').keyup(function(){
                var input = $(this).val();
                if(input != ''){
                    $.ajax({
                        url:"d_search.php",
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
        </script> -->
</body>
</html>
