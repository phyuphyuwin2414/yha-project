
<?php 
    
?>
<?php
if(isset($_GET['id'])) {
		$id = $_GET['id'];
        $conn = mysqli_connect("localhost","root","","yha");
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
    if(isset($_POST['save'])){
        $stu_ph = $_POST['stu_ph'];
        $stu_id = $_POST['stu_id'];
        $stu_name = $_POST['stu_name'];
        $remark = $_POST['remark'];
        $date = $_POST['date'];
        $status = $_POST['status'];
        $con = mysqli_connect("localhost","root","","yha");
        $sql = "UPDATE status_details SET status_id='$status',student_id='$stu_id',dt_start='$date',remark='$remark' WHERE std_id='$id'";
        mysqli_query($con,$sql);
        header("Location:status1.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Status</title>
    <link rel="stylesheet" href="css/01.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="#" class="logo">
                <img src="img/yha_logo.png">
                <span class="nav-item"></span>
                </a></li>
                <li><a href="#">
                <i class="fas fa-user"></i>
                <span class="nav-item">Admin</span>
                </a></li>
                <li><a href="re_form.php">
                <i class="fas fa-address-card"></i>
                <span class="nav-item">Registration</span>
                </a></li>
                <li><a href="#">
                <i class="fas fa-file"></i>
                <span class="nav-item">Attendance</span>
                </a></li>
                <li><a href="#">
                <i class="fas fa-chart-bar"></i>
                <span class="nav-item">Report</span>
                </a></li>
                <li><a href="status.php">
                <i class="fas fa-check"></i>
                <span class="nav-item">Status</span>
                </a></li>
                <li><a href="#">
                <i class="fas fa-arrow-right"></i>
                <span class="nav-item">Dropout</span>
                </a></li>
                <li><a href="#">
                <i class="fas fa-star"></i>
                <span class="nav-item">Complete</span>
                </a></li>
                <li><a href="#">
                <i class="fas fa-cog"></i>
                <span class="nav-item">Setting</span>
                </a></li>

                <li><a href="#" class="logout">
                <i class="fas fa-sign-out-alt"></i>
                <span class="nav-item">Log out</span>
                </a></li>
            </ul>
        </nav>
        <section class="main">
            <div class="main-top">
                <h1>Status</h1>
                <i class="fas fa-user-cog"></i>
            </div>
            <form action="status_update.php" method="post">
                <div class="form-group row">
                    <label for="studentId" class="col-sm-2 col-form-label">Student Phone Number</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?php echo $phno;?>" name="stu_ph">
                    </div>
                </div><br/>
                <div class="form-group row">
                <label for="studentId" class="col-sm-2 col-form-label">Student ID</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $stu_id;?>" name="stu_id">
                </div>
                </div><br/>
                <div class="form-group row">
                    <label for="studentId" class="col-sm-2 col-form-label">Student Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Student Name" value="<?php echo $stu_name;?>" name="stu_name">
                    </div>
                </div><br/>
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
                        <select name="status" class="form-control">
                            <option selected><?php echo $description;?></option>
                            <?php 
                            include('inc/dbcon.php');
                            $sql = "SELECT * FROM status";
                            $res = mysqli_query($con,$sql);
                            while($row=mysqli_fetch_assoc($res)):
                            ?>
                            <option value="<?php echo $row['id'];?>"><?php echo $row['id'];?>&nbsp;&nbsp;<?php echo $row['description'];?></option>
                            <?php endwhile;?>
                        </select>
                    </div>
                </div><br/>
                <form class="form-inline">          
                    <button class="btn  my-2 my-sm-0" style="background-color:orangered; margin-left:170px;"  type="submit" name="save">Update</button>
                </form>
            </form>
    </section>
    </div>
</div>
</body>
</html>