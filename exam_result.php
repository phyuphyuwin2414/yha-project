<?php
include 'exam_result_process.php';
if(isset($_GET['id'])){
  $iid = $_GET['id'];
  $s_state = true;

  $sql = mysqli_query($conn, "SELECT * FROM register WHERE stu_id='$iid'");
  $data = mysqli_fetch_array($sql);
  $stuid = $data['stu_id'];
  $stuname = $data['stu_name'];
  echo $stuid;
}


if (isset($_GET['edit'])) {
    error_reporting(0);
    ini_set('display_errors',0);
		$id = $_GET['edit'];
		$edit_state = true;

		$record = mysqli_query($conn,"SELECT ex.*,re.* FROM exam_result AS ex LEFT JOIN register AS re ON ex.stuid=re.stu_id WHERE id = '$id'");
    $data = mysqli_fetch_array($record);
    $stuid=$data['stuid'];
    $stuname=$data['stu_name'];
    $word = $data['word'];
    $excel = $data['excel'];
    $cs = $data['cs'];
    $pro = $data['pro'];
    $ps = $data['ps'];
    $a_excel = $data['a_excel'];
    $b_ps=$data['b_ps'];
    $a_ps=$data['a_ps'];
    $e_date = $data['exam_date'];
	}
?>
<?php include('head.php');?>
  <div class="container-fluid">
    <?php include("nav.php");?>
    <section class="main">
      <div class="main-top">
        <h1>Exam Results</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      
    <form action="" method="post">
    <div class="form-group row">
        <input type="hidden" class="form-control" name="id" value="<?php $id;?>">
        <label for="studentId" class="col-sm-2 col-form-label">Student ID</label>
        <div class="col-sm-10">
          <input type="label" class="form-control" id="studentcId" value="<?php echo $stuid;?>" placeholder="Student ID" name="stuid">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Student Name</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" value="<?php echo $stuname;?>" id="name" placeholder="Student Name" name="stuname">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Microsoft Word</label>
        <div class="col-sm-10">
        <input type="number" class="form-control" value="<?php echo $word;?>" id="name" placeholder="Enter mark" name="word">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Microsoft Excel</label>
        <div class="col-sm-10">
        <input type="number" class="form-control" value="<?php echo $excel;?>" id="name" placeholder="Enter mark" name="excel">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Computer System</label>
        <div class="col-sm-10">
        <input type="number" class="form-control" value="<?php echo $cs;?>" id="name" placeholder="Enter mark" name="cs">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Programming</label>
        <div class="col-sm-10">
        <input type="number" class="form-control" value="<?php echo $pro;?>" id="name" placeholder="Enter mark" name="pro">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Graphic/Photoshop</label>
        <div class="col-sm-10">
        <input type="number" class="form-control" value="<?php echo $ps;?>" id="name" placeholder="Enter mark" name="ps">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Advance Excel</label>
        <div class="col-sm-10">
        <input type="number" class="form-control" value="<?php echo $a_excel;?>" id="name" placeholder="Enter mark" name="a_excel">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Photoshop Beginner</label>
        <div class="col-sm-10">
        <input type="number" class="form-control" value="<?php echo $b_ps;?>" id="name" placeholder="Enter mark" name="b_ps">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Advance Photoshop</label>
        <div class="col-sm-10">
        <input type="number" class="form-control" value="<?php echo $a_ps;?>" id="name" placeholder="Enter mark" name="a_ps">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10">
        <input type="date" class="form-control" value="<?php echo $e_date;?>" id="name" placeholder="Teacher Name" name="date">
        </div>
    </div><br/>
    <form class="form-inline">          
    <?php if ($edit_state == false): ?>
    <button class="btn" style="background-color:#ff6b01;width:150px;height:50px" type="submit" name="save" >Save</button>
    <?php else: ?>
      <button class="btn" style="background:#ff6b01;" type="submit" name="update" >Update</button>
    <?php endif ?>
    </form>
    </form><br/><br/>
    <div class="clearpad"></div>
    <div class="row">
      <div style="overflow-x:auto;">
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Word</th>
                <th>Excel</th>
                <th>Computer System</th>
                <th>Programming</th>
                <th>Graphic/Photoshop</th>
                <th>Advance Excel</th>
                <th>Photoshop Beginner</th>
                <th>Advance Photoshop</th>
                <th>Exam Date</th>
                <th colspan="2" style="text-align:center">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php
                    $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                    $sql = "SELECT e.*,re.* FROM exam_result AS e LEFT JOIN register AS re ON e.stuid=re.stu_id";
                    $res = mysqli_query($con,$sql);
                    $i=1;
                    while($row=mysqli_fetch_assoc($res)):
                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['stu_id']; ?></td>
                        <td><?php echo $row['stu_name']; ?></td>
                        <td><?php echo $row['word']; ?></td>
                        <td><?php echo $row['excel']; ?></td>
                        <td><?php echo $row['cs']; ?></td>
                        <td><?php echo $row['pro']; ?></td>
                        <td><?php echo $row['ps']; ?></td>
                        <td><?php echo $row['a_excel']; ?></td>
                        <td><?php echo $row['b_ps']; ?></td>
                        <td><?php echo $row['a_ps']; ?></td>
                        <td><?php echo $row['exam_date']; ?></td>
                        <td><a href="exam_result.php?edit=<?php echo $row['id']; ?>" class="btn btn-outline-success" style="width:70px">Edit</a></td>
                        <td><a href="exam_result_process.php?delete=<?php echo $row['id']; ?>" class="btn btn-outline-danger text-center" style="width:70px">Delete</a></td>
                <?php $i++; endwhile; ?>
            </tbody>
          </table>
      </div>
    </div>
        </div>
        <?php //endwhile;?>
      </section>
    </section>
  </div>
</body>
</html>
