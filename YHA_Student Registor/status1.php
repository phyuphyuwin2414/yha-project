<?php
include 'status_process.php';
if(isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$edit_state = true;
		$record = mysqli_query($conn, "SELECT s.*,re.*,sta.* FROM status_details AS s LEFT JOIN register AS re ON s.student_id = re.stu_id LEFT JOIN status AS sta ON s.status_id = sta.id WHERE std_id=$id");
        $data = mysqli_fetch_array($record);
        $std_id = $data['std_id'];
        $st_id = $data['id'];
        $phno=$data['phno'];
        $stu_id=$data['stu_id'];
        $stu_name=$data['stu_name'];
        $remark=$data['remark'];
        $dt_start=$data['dt_start'];
        $description=$data['description'];
	}
?>
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
    .container .id{
        display:none;
    }
</style>
<body>
  <div class="container">
        <?php include("nav.php");?>
        <section class="main">
            <div class="main-top">
                <h1>Status</h1>
                <i class="fas fa-user-cog"></i>
            </div>
            <form action="" method="post">
            <?php if($edit_state==true){?>
            <div class="form-group row id">
                    <label for="studentId" class="col-sm-2 col-form-label">Status ID</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="studentcId" value="<?php echo $std_id;?>" name="id">
                    </div>
                </div><br/>
                <?php }?>
                <?php if($edit_state==false){?>
                <div class="form-group row">
                    <label for="studentId" class="col-sm-2 col-form-label">Student Phone Number</label>
                    <div class="col-sm-10">
                        <input type="text" name="stu_ph" class="form-control" id="studentcId" value="<?php if(isset($_POST['stu_ph'])){ echo $_POST['stu_ph'];}?>" placeholder="Student Phone Number">
                    </div>
                </div><br/>
                <?php 
                    $con = mysqli_connect("localhost","root","","yha");
                    if(isset($_POST['stu_ph'])){
                        $stu_ph = $_POST['stu_ph'];
                        $sql = "SELECT * FROM register WHERE phno = '$stu_ph'";
                        $res = mysqli_query($con,$sql);
                        if(mysqli_num_rows($res)>0){
                            foreach($res as $row){
                                //echo $row['stu_name'];
                                ?>
                                    <div class="form-group row">
                                    <label for="studentId" class="col-sm-2 col-form-label">Student ID</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="stu_id" class="form-control" id="studentcId" value="<?= $row['stu_id'];?>" placeholder="Student ID">
                                    </div>
                                    </div><br/>
                                    <div class="form-group row">
                                        <label for="studentId" class="col-sm-2 col-form-label">Student Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="stu_name" id="studentcId" value="<?=  $row['stu_name'];?>" placeholder="Student Name">
                                        </div>
                                    </div><br/>
                                <?php
                            }
                        }else{
                            echo "No Record Found";
                        }
                    }
                }else{ 
                ?>
                <!---->
                <div class="form-group row">
                    <label for="studentId" class="col-sm-2 col-form-label">Student Phone Number</label>
                    <div class="col-sm-10">
                        <input type="text" name="stu_ph" class="form-control"  value="<?php echo $phno;?>" placeholder="Student Phone Number">
                    </div>
                </div><br/>
                <div class="form-group row">
                    <label for="studentId" class="col-sm-2 col-form-label">Student ID</label>
                    <div class="col-sm-10">
                        <input type="number" name="stu_id" class="form-control" value="<?php echo $stu_id;?>" placeholder="Student ID">
                    </div>
                    </div><br/>
                    <div class="form-group row">
                        <label for="studentId" class="col-sm-2 col-form-label">Student Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="stu_name" value="<?php echo $stu_name;?>" placeholder="Student Name">
                        </div>
                    </div><br/>
                <?php }?>
                <!---->
                <div class="form-group row">
                    <label for="studentId" class="col-sm-2 col-form-label">Remark</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="remark" rows="2"><?php echo $remark;?></textarea>
                    </div>
                </div><br/>
                <div class="form-group row">
                    <label for="studentId" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="studentcId" value="<?php echo $dt_start;?>" name="date">
                    </div>
                </div><br/>
                <div class="form-group row">
                    <label for="studentId" class="col-sm-2 col-form-label">Status Details</label>
                    <div class="col-sm-10">
                        <select name="status" id="" class="form-control">
                            <?php if($edit_state==false):?>
                            <option value="">Choose Status Details</option>
                            <?php else:?>
                            <option value="<?php echo $st_id;?>"><?php echo $description;?></option>
                            <?php endif?>
                            <?php 
                            include('inc/dbcon.php');
                            $sql = "SELECT * FROM status";
                            $res = mysqli_query($con,$sql);
                            while($row=mysqli_fetch_assoc($res)):
                            ?>
                            <option><?php echo $row['id'];?>&nbsp;&nbsp;<?php echo $row['description'];?></option>
                            <?php endwhile;?>
                        </select>
                    </div>
                </div><br/>
                <div class="form-inline">  
                    <?php if($edit_state==false):?>        
                    <button class="btn  my-2 my-sm-0" style="background-color:orangered;width:170px;"  type="submit" name="save">Save</button>
                    <?php else:?>
                    <button class="btn  my-2 my-sm-0" style="background-color:orangered; margin-left:170px;"  type="submit" name="update">Update</button>
                    <?php endif;?>
                </div>
                <div id="content"></div>
            </form>
            <section class="attendance" id="attend">
            <div class="attendance-list">
            <h1>Status List</h1><br>
            <div class="dt">
            <form action="std_search.php" method="post">
                <span style="margin-left:50px;font-weight:bold;">Start Date&nbsp; :&nbsp;&nbsp;<input type="date" id="stdate" name="st_date"></span>
                <span style="margin-left:50px;font-weight:bold;">End Date&nbsp; :&nbsp;&nbsp;<input type="date" id="edate" name="e_date"></span>
                &nbsp;&nbsp;<select name="status" id="">
                    <option value="">Choose Status</option>
                    <?php 
                        $con = mysqli_connect("localhost","root","","yha");
                        $sql = "SELECT * FROM status WHERE id=2";
                        $res = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_assoc($res)){
                    ?>
                    <option value="<?php echo $row['id'];?>"><?php echo $row['description'];?></option>
                    <?php }
                        $con = mysqli_connect("localhost","root","","yha");
                        $sql = "SELECT * FROM status WHERE id=3";
                        $res = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_assoc($res)){
                        ?>
                    <option value="<?php echo $row['id'];?>"><?php echo $row['description'];?></option>
                    <?php }?>
                </select>&nbsp;&nbsp;&nbsp;
                <button name="save" id="std_search" style="background-color:orangered;width:198px;" class="btn">Search</button>
          </form>
          <div id="searchdate"></div>
        <table class="table">
            <thead>
              <tr style="background-color:black;">
                <th>ID</th>
                <th>Status ID</th>
                <th>Student Name</th>
                <th>Student Phone Number</th>
                <th>Remark</th>
                <th>Date</th>
                <th>Status Details</th>
                <th colspan="2" style="text-align:center">Action</th>
              </tr>
            </thead>
            <tbody>
                    <?php 
                        $con = mysqli_connect("localhost","root","","yha");
                        $sql = "SELECT s.*,re.stu_name,re.phno,sta.* FROM status_details AS s LEFT JOIN register AS re ON s.student_id = re.stu_id LEFT JOIN status AS sta ON s.status_id = sta.id";
                        $res = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_assoc($res)):
                    ?>
                    <tr>
                        <td style="border:1px solid black;"><?php echo $row['std_id']; ?></td>
                        <td style="border:1px solid black;"><?php echo $row['status_id']; ?></td>
                        <td style="border:1px solid black;"><?php echo $row['stu_name']; ?></td>
                        <td style="border:1px solid black;"><?php echo $row['phno']; ?></td>
                        <td style="border:1px solid black;"><?php echo $row['remark']; ?></td>
                        <td><?php echo $row['dt_start']; ?></td>
                        <td  class="btn" width="120px" style="background-color:<?php if($row['id']==1){
                            echo '#B43CE3';
                        }elseif($row['id']==2){
                            echo '#FFFF00';
                        }else{
                            echo '#00FF4F';
                        }  
                        ?>"><?php echo $row['description']; ?></td>
                        <td><a href="status1.php?edit=<?php echo $row['std_id']; ?>" class="btn btn-outline-success" style="width:50px">Edit</a></td>
                        <td><a href="status_process.php?delete=<?php echo $row['std_id']; ?>" class="btn btn-outline-danger text-center" style="width:70px">Delete</a></td>
                    <?php endwhile;?>
            </tbody>
          </table>
    </section>
    </div>
</div>

<?php 
    if(isset($_POST['submit'])){
        $stu_ph = $_POST['stu_ph'];
        $stu_id = $_POST['stu_id'];
        $stu_name = $_POST['stu_name'];
        $status = $_POST['status'];
        $remark = $_POST['remark'];
        $date = $_POST['date'];
        if($stu_ph=='' || $stu_id=='' || $stu_name=='' || $status==''){
            echo "Something is wrong";
        }else{
        $con = mysqli_connect("localhost","root","","yha");
        $sql = "INSERT INTO status_details(status_id, student_id, dt_start, remark) VALUES('$status','$stu_id','$date','$remark')";
        mysqli_query($con,$sql);
        
        ?>
        <!--<script>
            let btnClear = document.querySelector('button');
            let inputs = document.querySelectorAll('input');
            btnClear.addEventListener('click',() =>{
                inputs.forEach(input => input.value = '');
            })
            
        </script>-->
        <?php
    }}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</body>
</html>