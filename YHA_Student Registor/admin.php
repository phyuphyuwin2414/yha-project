<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>
    body{
        margin:20px;
        padding:20px;
        background: url('img/c.jpg') no-repeat;
        background-size: cover;
        height: 100vh;
    }
    .row label{
        font-weight:bolder;
        font-size:20px;
    }
    .btn{
        text-align:center;
        margin-left:700px;
    }
    .my-table {
        table-layout: fixed;
        word-wrap: break-word;
    }
    table th{
        font-size:20px;
    }
    table th,tr td{
        color:orangered;
        font-weight:bold;
    }
</style>
<body>
    <h2 style="text-align:center;">Student's Attendance</h2><br>
    <form action="addAttend.php" method="post">
    <div class="form-group row">
        <label for="studentId" class="col-sm-2 col-form-label">Student ID</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="studentcId" value="" placeholder="Student ID" name="student_id">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Student Name</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Student Name" name="student_name">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Courses</label>
        <div class="col-sm-10">
            <select name="course" id="" class="form-control">
                <option value="">Courses</option>
                <option value="ICT Foundation Course">ICT Foundation Course</option>
                <option value="Advance Photoshop">Advance Photoshop</option>
                <option value="Adobe Illustrator">Adobe Illustrator</option>
                <option value="Web Design & Development">Web Design & Development</option>
                <option value="Java">Java</option>
            </select>
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10">
        <input type="date" class="form-control" id="date" name="date">
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Choose Section</label>
        <div class="col-sm-10">
            <select name="section" id="" class="form-control">
                <option value="">Sections</option>
                <option value="Mon-Thu">Mon-Thu</option>
                <option value="Sat-Sun">Sat-Sun</option>
                <option value="Sunday Only">Sunday Only</option>
            </select>
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Time</label>
        <div class="col-sm-10">
            <select name="time" id="" class="form-control">
                <option value="">Time</option>
                <option value="8:00-10:00AM">8:00-10:00AM</option>
                <option value="10:00-12:00AM">10:00-12:00AM</option>
                <option value="1:00-2:00PM">1:00-2:00PM</option>
                <option value="2:00-4:00PM">2:00-4:00PM</option>
                <option value="4:00-6:00PM">4:00-6:00PM</option>
            </select>
        </div>
    </div><br/>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Attendance</label>
        <div class="col-sm-10">
            <select name="attend" id="" class="form-control">
                <option value="">Attendance</option>
                <option value="Present">Present</option>
                <option value="Absent">Absent</option>
            </select>
        </div>
    </div><br/>
    <form class="form-inline">          
        <button class="btn btn-success my-2 my-sm-0"  type="submit" name="save">Save</button>
    </form>
    </form><br/><br/>
    <!--End Form-->
        <table class="table table-bordered table-hover my-table">
                <tr class="thead-primary">
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Courses</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Section</th>
                    <th>Attendance</th>
                    <th colspan="2" style="text-align:center">Action</th>
                </tr>
                <?php
                    $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                    $sql = "SELECT * FROM student";
                    $res = mysqli_query($con,$sql);
                    while($row=mysqli_fetch_assoc($res)):
                ?>
                    <tr>
                        <td><?php echo $row['student_id']; ?></td>
                        <td><?php echo $row['student_name']; ?></td>
                        <td><?php echo $row['course']; ?></th>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['section']; ?></td>
                        <td><?php echo $row['time']; ?></td>
                        <td><?php echo $row['attend']; ?></td>
                        <td><a href="edit.php?id=<?php echo $row['student_id']; ?>" class="btn btn-info">Edit</a></td>
                        <td><a href="del.php?id=<?php echo $row['student_id']; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php endwhile; ?>
        </table>
    <form class="form-inline">          
        <button class="btn btn-success my-2 my-sm-0" type="submit">Log Out</button>
    </form><br/><br/>
</body>
</html>