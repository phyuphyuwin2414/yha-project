<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Status</title>
    <link rel="stylesheet" href="css/01.css"/>
    <link rel="stylesh+eet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
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
                <li><a href="01.php">
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
                <li><a href="dropout.php">
                <i class="fas fa-arrow-right"></i>
                <span class="nav-item">Dropout</span>
                </a></li>
                <li><a href="complete.php">
                <i class="fas fa-star"></i>
                <span class="nav-item">Complete</span>
                </a></li>
                <li><a href="#">
                <i class="fas fa-cog"></i>
                <span class="nav-item">Setting</span>
                </a></li>

                <li><a href="index.php" class="logout">
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
            <form action="" method="post">
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
                ?>
                <div class="form-group row">
                    <label for="studentId" class="col-sm-2 col-form-label">Remark</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="remark" rows="2"></textarea>
                    </div>
                </div><br/>
                <div class="form-group row">
                    <label for="studentId" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="studentcId" value="" name="date">
                    </div>
                </div><br/>
                <div class="form-group row">
                    <label for="studentId" class="col-sm-2 col-form-label">Status Details</label>
                    <div class="col-sm-10">
                        <select name="status" id="" class="form-control">
                            <option value="">Choose Status Details</option>
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
                    <button class="btn  my-2 my-sm-0" style="background-color:orangered; margin-left:170px;"  type="submit" name="submit">Save</button>
                </div>
                <div id="content"></div>
            </form>
            <section class="attendance" id="attend">
            <div class="attendance-list">
            <h1>Status List</h1>
            <div class="dt">
            <form action="std_search.php" method="post">
                <span style="margin-left:50px;font-weight:bold;">Start Date&nbsp; :&nbsp;&nbsp;<input type="date" id="stdate" name="st_date"></span>
                <span style="margin-left:50px;font-weight:bold;">End Date&nbsp; :&nbsp;&nbsp;<input type="date" id="edate" name="e_date"></span>
                <button name="search" id="d_search" class="btn btn-secondary">Search</button>
          </form>
          <div id="searchdate"></div>
        <table class="table">
            <thead>
              <tr>
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
                        <td><?php echo $row['std_id']; ?></td>
                        <td><?php echo $row['status_id']; ?></td>
                        <td><?php echo $row['stu_name']; ?></td>
                        <td><?php echo $row['phno']; ?></td>
                        <td><?php echo $row['remark']; ?></td>
                        <td><?php echo $row['start_date']; ?></td>
                        <td class="btn" style="background-color:<?php if($row['id']==1){
                            echo 'blue';
                        }elseif($row['id']==2){
                            echo 'red';
                        }else{
                            echo 'green';
                        }  
                        ?>"><?php echo $row['description']; ?></th>
                        <td><a href="status_update.php?id=<?php echo $row['std_id']; ?>" class="btn btn-outline-info" style="width:50px">Edit</a></td>
                        <td><a href="status_delete.php?id=<?php echo $row['std_id']; ?>" class="btn btn-outline-danger text-center" style="width:70px">Delete</a></td>
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
        $sql = "INSERT INTO status_details(status_id, student_id, start_date, remark) VALUES('$status','$stu_id','$date','$remark')";
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