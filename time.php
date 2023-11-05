<?php
include 'time_process.php';
if (isset($_GET['edit'])) {
    error_reporting(0);
    ini_set('display_errors',0);
		$id = $_GET['edit'];
		$edit_state = true;

		$record = mysqli_query($conn,"SELECT st.*,se.* FROM sectiontime AS st LEFT JOIN section AS se ON st.sectionid=se.sectionid WHERE timeid = '$id'");
    $data = mysqli_fetch_array($record);
    $timeid=$data['timeid'];
    $timename=$data['timename'];
    $sectionid=$data['sectionid'];
    $sectionname=$data['sectionname'];
	}
?>
<?php include('head.php');?>
  <div class="container-fluid">
    <?php include("nav.php");?>
    <section class="main">
      <div class="main-top">
        <h1>Section-Time Lists</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      
    <form action="" method="post">
    <div class="form-group row">
        <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
        <label for="studentId" class="col-sm-2 col-form-label">Time ID</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="studentcId" value="<?php echo $timeid;?>" placeholder="Time ID" name="timeid" disabled>
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Time Name</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" value="<?php echo $timename;?>" id="name" placeholder="Time Name" name="timename">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Section</label>
        <div class="col-sm-10">
            <select name="sectionid" id="" class="form-control">
              <?php if($edit_state==false):?>
                <option value="">Section</option>
              <?php else:?>
                <option value="<?php echo $sectionid;?>"><?php echo $sectionid;?>&nbsp;<?php echo $sectionname;?></option>
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
    <form class="form-inline">          
    <?php if ($edit_state == false): ?>
    <button class="btn" style="background-color:#ff6b01;color:white;font-size:18px;width:150px;height:50px" type="submit" name="save" >Save</button>
    <?php else: ?>
      <button class="btn btn-success" type="submit" name="update" >Update</button>
    <?php endif ?>
    </form>
    </form><br/><br/>
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Time ID</th>
                <th>Time</th>
                <th>Section</th>
                <th colspan="2" style="text-align:center">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php
                    $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                    $sql = "SELECT st.*,se.* FROM sectiontime AS st LEFT JOIN section AS se ON st.sectionid=se.sectionid";
                    $res = mysqli_query($con,$sql);
                    $i=1;
                    while($row=mysqli_fetch_assoc($res)):
                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['timeid']; ?></td>
                        <td><?php echo $row['timename']; ?></td>
                        <td><?php echo $row['sectionname']; ?></td>
                        <td><a href="time.php?edit=<?php echo $row['timeid']; ?>" class="btn btn-outline-success" style="width:70px">Edit</a></td>
                        <td><a href="time_process.php?delete=<?php echo $row['timeid']; ?>" class="btn btn-outline-danger text-center" style="width:70px">Delete</a></td>
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
