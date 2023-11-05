<?php
include 'subject_detail_process.php';
if (isset($_GET['edit'])) {
    error_reporting(0);
    ini_set('display_errors',0);
		$id = $_GET['edit'];
		$edit_state = true;

		$record = mysqli_query($conn,"SELECT sd.*,su.* FROM subdetail AS sd LEFT JOIN subject AS su ON sd.subid=su.subid WHERE subdeid = '$id'");
    $data = mysqli_fetch_array($record);
    $subdeid=$data['subdeid'];
    $subdename=$data['subdename'];
    $subid=$data['subid'];
    $subname=$data['subname'];
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
        <label for="studentId" class="col-sm-2 col-form-label">Subject Detail ID</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="studentcId" value="<?php echo $subdeid;?>" placeholder="Subject Detail ID" name="subdeid" disabled>
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Subject Detail Name</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" value="<?php echo $subdename;?>" id="name" placeholder="Subject Detail Name" name="subdename">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Subject</label>
        <div class="col-sm-10">
            <select name="subid" id="" class="form-control">
              <?php if($edit_state==false):?>
                <option value="">Subject</option>
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
    <form class="form-inline">          
    <?php if ($edit_state == false): ?>
    <button class="btn" style="background-color:#ff6b01;width:150px;height:50px" type="submit" name="save" >Save</button>
    <?php else: ?>
      <button class="btn btn-success" type="submit" name="update" >Update</button>
    <?php endif ?>
    </form>
    </form><br/><br/>
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Subject Detail ID</th>
                <th>Subject Detail Name</th>
                <th>Subject</th>
                <th colspan="2" style="text-align:center">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php
                    $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                    $sql = "SELECT sd.*,su.* FROM subdetail AS sd LEFT JOIN subject AS su ON sd.subid=su.subid";
                    $res = mysqli_query($con,$sql);
                    $i=1;
                    while($row=mysqli_fetch_assoc($res)):
                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['subdeid']; ?></td>
                        <td><?php echo $row['subdename']; ?></td>
                        <td><?php echo $row['subname'];?></td>
                        <td><a href="subject_details.php?edit=<?php echo $row['subdeid']; ?>" class="btn btn-outline-success" style="width:70px">Edit</a></td>
                        <td><a href="subject_detail_process.php?delete=<?php echo $row['subdeid']; ?>" class="btn btn-outline-danger text-center" style="width:70px">Delete</a></td>
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
