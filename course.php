<?php
include 'course_process.php';
if (isset($_GET['edit'])) {
    error_reporting(0);
    ini_set('display_errors',0);
		$id = $_GET['edit'];
		$edit_state = true;

		  $record = mysqli_query($conn,"SELECT * FROM course WHERE courseid = '$id'");
      $data = mysqli_fetch_array($record);
	    $courseid=$data['courseid'];
      $coursename=$data['coursename'];
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
        <label for="studentId" class="col-sm-2 col-form-label">Course ID</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="studentcId" value="<?php echo $courseid;?>" placeholder="Course ID" name="course_id" disabled>
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Course Name</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" value="<?php echo $coursename;?>" id="name" placeholder="Course Name" name="course_name">
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
                <th>Course ID</th>
                <th>Course Name</th>
                <th colspan="2" style="text-align:center">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php
                    $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                    $sql = "SELECT * FROM course ";
                    $res = mysqli_query($con,$sql);
                    $i=1;
                    while($row=mysqli_fetch_assoc($res)):
                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['courseid']; ?></td>
                        <td><?php echo $row['coursename']; ?></td>
                        <td><a href="course.php?edit=<?php echo $row['courseid']; ?>" class="btn btn-outline-success" style="width:70px">Edit</a></td>
                        <td><a href="course_process.php?delete=<?php echo $row['courseid']; ?>" class="btn btn-outline-danger text-center" style="width:70px">Delete</a></td>
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
