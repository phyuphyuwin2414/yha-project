<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="css/01.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Date</th>
                <th>Courses</th>
                <th>Section</th>
                <th>Time</th>
                <th>Attendance</th>
                <th colspan="2" style="text-align:center">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php
                    $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                    $sql = "SELECT a.*,c.coursename,s.sectionname,se.timename FROM attendance AS a LEFT JOIN course AS c ON a.course_id=c.courseid LEFT JOIN section AS s ON a.section_id=s.sectionid LEFT JOIN sectiontime AS se ON a.time_id=se.timeid";
                    $res = mysqli_query($con,$sql);
                    $i=1;
                    while($row=mysqli_fetch_assoc($res)):
                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['student_id']; ?></td>
                        <td><?php echo $row['student_name']; ?></td>
                        <td><?php echo $row['dat']; ?></td>
                        <td><?php echo $row['coursename']; ?></th>
                        <td><?php echo $row['sectionname']; ?></td>
                        <td><?php echo $row['timename']; ?></td>
                        <td><?php echo $row['attend']; ?></td>
                        <td><a href="01.php?edit=<?php echo $row['attend_id']; ?>" class="btn btn-outline-info" style="width:50px">Edit</a></td>
                        <td><a href="attend_process.php?delete=<?php echo $row['attend_id']; ?>" class="btn btn-outline-danger text-center" style="width:70px">Delete</a></td>
                    </tr>
                    <?php 
                        if(isset($_GET['edit'])){
                            $id = $_GET['edit'];
                        }
                        if($id = $row['attend_id']){
                            continue;
                        }
                    ?>
                    <tr>
                        <th><?php echo $i; ?></th>
                        <th><?php echo $row['student_id']; ?></th>
                        <th><?php echo $row['student_name']; ?></th>
                        <td><?php echo $row['dat']; ?></td>
                        <td><?php echo $row['coursename']; ?></th>
                        <td><?php echo $row['sectionname']; ?></td>
                        <td><?php echo $row['timename']; ?></td>
                        <td><?php echo $row['attend']; ?></td>
                        <td><a href="01.php?edit=<?php echo $row['attend_id']; ?>" class="btn btn-outline-info" style="width:50px">Edit</a></td>
                        <td><a href="attend_process.php?delete=<?php echo $row['attend_id']; ?>" class="btn btn-outline-danger text-center" style="width:70px">Delete</a></td>
                    </tr>
                <?php $i++; endwhile;?>
            </tbody>
          </table>
</body>
</html>