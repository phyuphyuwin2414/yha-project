<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Status</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/01.css">
</head>
<body>
<section class="attendance" id="alist">
        <div class="attendance-list">
          <h1>Attendance List</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Courses</th>
                <th>Date</th>
                <th>Section</th>
                <th>Time</th>
                <th>Attendance</th>
                <th colspan="2" style="text-align:center">Action</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
            <?php
                    $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                    $sql = "SELECT a.*,s.* FROM attendance AS a LEFT JOIN status AS s ON a.student_id=s.student_id";
                    $res = mysqli_query($con,$sql);
                    while($row=mysqli_fetch_assoc($res)):
                ?>
                    <tr>
                        <td><?php echo $row['attend_id']; ?></td>
                        <td><?php echo $row['student_id']; ?></td>
                        <td><?php echo $row['student_name']; ?></td>
                        <td><?php echo $row['course']; ?></th>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['section']; ?></td>
                        <td><?php echo $row['time']; ?></td>
                        <td><?php echo $row['attend']; ?></td>
                        <td><a href="attendupdate.php?id=<?php echo $row['student_id']; ?>" class="btn btn-outline-info" style="width:50px">Edit</a></td>
                        <td><a href="del_attend.php?id=<?php echo $row['student_id']; ?>" class="btn btn-outline-danger text-center" style="width:70px">Delete</a></td>
                        <td><a href="" class="btn" style="background-color:
                        <?php if($row['id']==1){
                            echo 'blue';
                        }elseif($row['id']==2){
                            echo 'red';
                        }else{
                            echo 'green';
                        }   
                        ?>
                        "><?php echo $row['description']; ?></a></td>
                <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      </section>
</body>
</html>