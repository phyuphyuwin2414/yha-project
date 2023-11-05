<?php
include 'teacher_process.php';
if (isset($_GET['edit'])) {
    error_reporting(0);
    ini_set('display_errors',0);
		$id = $_GET['edit'];
		$edit_state = true;

		$record = mysqli_query($conn,"SELECT * FROM teacher WHERE teacherid = '$id'");
    $data = mysqli_fetch_array($record);
    $teacherid=$data['teacherid'];
    $teachername=$data['teachername'];
    $teacher_age=$data['teacher_age'];
    $teacher_position=$data['teacher_position'];
    $teacher_photo=$data['teacher_photo'];
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
        <label for="studentId" class="col-sm-2 col-form-label">Teacher ID</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="studentcId" value="<?php echo $teacherid;?>" placeholder="Teacher ID" name="teacherid" disabled>
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Teacher Name</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" value="<?php echo $teachername;?>" id="name" placeholder="Teacher Name" name="teachername">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Teacher Age</label>
        <div class="col-sm-10">
        <input type="number" class="form-control" value="<?php echo $teacher_age;?>" id="name" placeholder="Teacher Age" name="teacher_age">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Teacher Role</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" value="<?php echo $teacher_position;?>" id="name" placeholder="Teacher Position" name="teacher_position">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Teacher Photo</label>
        <div class="col-sm-10">
        <input type="file" class="form-control" value="<?php echo $teacher_photo;?>" id="name" placeholder="Teacher Name" name="teacher_photo">
        </div>
    </div><br/>
    <form class="form-inline">          
    <?php if ($edit_state == false): ?>
    <button class="btn" style="background-color:#ff6b01;width:150px;height:50px;color:white;" type="submit" name="save" >Save</button>
    <?php else: ?>
      <button class="btn btn-success" type="submit" name="update">Update</button>
    <?php endif ?>
    </form>
    </form>
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Teacher ID</th>
                <th>Teacher Name</th>
                <th>Teacher Age</th>
                <th>Teacher Position</th>
                <th>Teacher Photo</th>
                <th colspan="2" style="text-align:center">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php
                    $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                    $sql = "SELECT * FROM teacher ";
                    $res = mysqli_query($con,$sql);
                    $i=1;
                    while($row=mysqli_fetch_assoc($res)):
                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['teacherid']; ?></td>
                        <td><?php echo $row['teachername']; ?></td>
                        <td><?php echo $row['teacher_age'];?></td>
                        <td><?php echo $row['teacher_position'];?></td>
                        <td><img src="img/<?php echo $row['teacher_photo'];?>" alt="" width="80px"></td>
                        <td><a href="teacher.php?edit=<?php echo $row['teacherid']; ?>" class="btn btn-outline-success" style="width:70px">Edit</a></td>
                        <td><a href="teacher_process.php?delete=<?php echo $row['teacherid']; ?>" class="btn btn-outline-danger text-center" style="width:70px">Delete</a></td>
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
