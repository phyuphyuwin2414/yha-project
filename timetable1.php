<?php
include 'timetable_process.php';
if (isset($_GET['edit'])) {
    error_reporting(0);
    ini_set('display_errors',0);
		$id = $_GET['edit'];
		$edit_state = true;

		$record = mysqli_query($conn,"SELECT * FROM timetable WHERE id = '$id'");
        $data = mysqli_fetch_array($record);
        $teacherid=$data['id'];
        $teachername=$data['sectionid'];
        $course=$data['courseid'];
        $subid = $data['subid'];
        $time = $data['timeid'];
        $teacher = $data['teacherid'];
        $date = $data['dat'];
        $asteacher = $data['astid'];
	}
?>
<?php include('head.php');?>
  <div class="container-fluid">
    <?php include("nav.php");?>
    <section class="main">
      <div class="main-top">
        <h1>Course Lists</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      
    <form action="" method="post">
    <div class="form-group row">
        <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
        <label for="studentId" class="col-sm-2 col-form-label">Timetable ID</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="studentcId" value="<?php echo $teacherid;?>" placeholder="Teacher ID" name="teacherid" disabled>
        </div>
    </div><br/>

    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Section</label>
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
        <label for="text" class="col-sm-2 col-form-label">Subject</label>
        <div class="col-sm-10">
            <select name="subject" id="" class="form-control">
              <?php if($edit_state==false):?>
                <option value="">Subject</option>
              <?php else:?>
                <option value="<?php echo $subject;?>"><?php echo $subject;?>&nbsp;<?php echo $subjectname;?></option>
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
        <label for="text" class="col-sm-2 col-form-label">Times</label>
        <div class="col-sm-10">
            <select name="time" id="" class="form-control">
              <?php if($edit_state==false):?>
                <option value="">Times</option>
              <?php else:?>
                <option value="<?php echo $time;?>"><?php echo $time;?>&nbsp;<?php echo $timename;?></option>
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
        <label for="text" class="col-sm-2 col-form-label">Teachers</label>
        <div class="col-sm-10">
            <select name="teacher" id="" class="form-control">
              <?php if($edit_state==false):?>
                <option value="">Teachers</option>
              <?php else:?>
                <option value="<?php echo $teacher;?>"><?php echo $teacher;?>&nbsp;<?php echo $teachername;?></option>
              <?php endif;?>
                <?php 
                  include('inc/dbcon.php');
                  $sql = "SELECT * FROM teacher";
                  $res = mysqli_query($con,$sql);
                  while($row=mysqli_fetch_assoc($res)):
                ?>
                <option><?php echo $row['teacherid'];?>&nbsp;&nbsp;<?php echo $row['teachername'];?></option>
                <?php endwhile;?>
            </select>
        </div>
    </div><br/>

    <div class="form-group row">
        <label for="studentId" class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="studentcId" value="<?php echo $date;?>" placeholder="Teacher ID" name="date">
        </div>
    </div><br/>

    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Assistance Teachers</label>
        <div class="col-sm-10">
            <select name="asteacher" id="" class="form-control">
              <?php if($edit_state==false):?>
                <option value="">Assistance Teachers</option>
              <?php else:?>
                <option value="<?php echo $teacher;?>"><?php echo $teacher;?>&nbsp;<?php echo $teachername;?></option>
              <?php endif;?>
                <?php 
                  include('inc/dbcon.php');
                  $sql = "SELECT * FROM teacher";
                  $res = mysqli_query($con,$sql);
                  while($row=mysqli_fetch_assoc($res)):
                ?>
                <option><?php echo $row['teacherid'];?>&nbsp;&nbsp;<?php echo $row['teachername'];?></option>
                <?php endwhile;?>
            </select>
        </div>
    </div><br/>

    <form class="form-inline">          
    <?php if ($edit_state == false): ?>
    <button class="btn" style="background-color:#ff6b01;width:150px;height:50px;color:white;" type="submit" name="save" >Save</button>
    <?php else: ?>
      <button class="btn btn-success" type="submit" name="update" >Update</button>
    <?php endif ?>
    </form>
    </form><br/><br/>
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Timetable ID</th>
                <th>Section</th>
                <th>Course</th>
                <th>Subject</th>
                <th>Time</th>
                <th>Teacher</th>
                <th>Date</th>
                <th>Assistance Teacher</th>
                <th colspan="2" style="text-align:center">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php
                    $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                    $sql = "SELECT t.*,se.*,c.*,s.*,st.*,te.*,tt.* FROM timetable AS t LEFT JOIN section AS se ON t.sectionid=se.sectionid LEFT JOIN course AS c ON t.courseid=c.courseid LEFT JOIN subject AS s ON t.subid=s.subid LEFT JOIN sectiontime AS st ON t.timeid=st.timeid LEFT JOIN teacher AS te ON t.teacherid=te.teacherid LEFT JOIN teacher AS tt ON t.astid=tt.teacherid";
                    $res = mysqli_query($con,$sql);
                    $i=1;
                    while($row=mysqli_fetch_assoc($res)):
                    
                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['sectionname']; ?></td>
                        <td><?php echo $row['coursename']; ?></td>
                        <td><?php echo $row['subname']; ?></td>
                        <td><?php echo $row['timename']; ?></td>
                        <td><?php echo $row['teachername']; ?></td>
                        <td><?php echo $row['dat']; ?></td>
                        <td><?php echo $row['teachername']; ?></td>
                        <td><a href="timetable1.php?edit=<?php echo $row['id']; ?>" class="btn btn-outline-success" style="width:70px">Edit</a></td>
                        <td><a href="timetable_process.php?delete=<?php echo $row['id']; ?>" class="btn btn-outline-danger text-center" style="width:70px">Delete</a></td>
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
