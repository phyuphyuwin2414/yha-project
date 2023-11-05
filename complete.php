<?php include('head.php');?>
  <div class="container-fluid">
    <?php include("nav.php");?>
    <section class="main">
      <div class="main-top">
        <h1>Dropout Lists</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <!--Searching End-->
      <section class="attendance" id="attend">
        <div class="attendance-list">
          <!--Date Search-->
          <form action="d_search.php" method="post">
            <span style="margin-left:50px;font-weight:bold;">Start Date&nbsp; :&nbsp;&nbsp;<input type="date" id="stdate" name="st_date"></span>
            <span style="margin-left:130px;font-weight:bold;">End Date&nbsp; :&nbsp;&nbsp;<input type="date" id="edate" name="e_date"></span>
            <button name="save" id="d_search" style="width:140px;background:#ff6b01;margin-left:170px;" class="btn">Search</button>
          </form>
          <div id="searchdate"></div>
          <!-- End Date Search-->
          <br>
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Course Name</th>
                <th>Dropout Date</th>
                <th>Description</th>
                <th colspan="2" style="text-align:center">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php
                    $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                    $sql = "SELECT sd.*,s.*,r.*,sec.*,c.* FROM status_details AS sd LEFT JOIN status AS s ON sd.status_id=s.id LEFT JOIN register AS r ON sd.student_id=r.stu_id LEFT JOIN course AS c ON r.courseid=c.courseid LEFT JOIN section as sec ON r.sectionid=sec.sectionid WHERE status_id=3 ORDER BY dt_start DESC";
                    $res = mysqli_query($con,$sql);
                    $i=1;
                    while($row=mysqli_fetch_assoc($res)):
                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['student_id']; ?></td>
                        <td><?php echo $row['stu_name']; ?></td>
                        <td><?php echo $row['coursename'];?></td>
                        <td><?php echo $row['dt_start']; ?></td>
                        <td class="btn" width="120px" style="background-color:#00FF4F;padding:7px;margin-top:10px;"><?php echo $row['description']; ?></td>
                        <td><a href="status1.php?id=<?php echo $row['std_id'];?>" class="btn btn-outline-success" style="width:70px">Edit</a></td>
                        <td><a href="status_delete?id=<?php echo $row['std_id'];?>" class="btn btn-outline-danger text-center" style="width:70px">Delete</a></td>
                <?php $i++; endwhile; ?>
            </tbody>
          </table>
        </div>
        <?php //endwhile;?>
      </section>
    </section>
  </div>
</body>
</html>
