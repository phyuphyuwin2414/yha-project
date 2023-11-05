<?php 
include("inc/dbcon.php"); 
if(isset($_POST['input'])){
    $input = $_POST['input'];
    $sql = "SELECT * FROM attendance  WHERE student_id LIKE '{$input}%' OR student_name LIKE '{$input}%' OR course LIKE '{$input}%' OR date LIKE '{$input}%' OR section LIKE '{$input}%' OR time LIKE '{$input}%' OR attend LIKE '{$input}%'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){?>
        <table class="table table-bordered table striped mt-4">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Courses</th>
                    <th>Date</th>
                    <th>Section</th>
                    <th>Time</th>
                    <th>Attendance</th>
                    <th colspan="2" style="text-align:center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($row=mysqli_fetch_assoc($result)):
                ?>
                <tr>
                    <td><?php echo $row['student_id']; ?></td>
                    <td><?php echo $row['student_name']; ?></td>
                    <td><?php echo $row['course']; ?></th>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['section']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                    <td><?php echo $row['attend']; ?></td>
                    <td><a href="attendupdate.php?id=<?php echo $row['student_id']; ?>" class="btn btn-outline-info" style="width:50px">Edit</a></td>
                    <td><a href="del_attend.php?id=<?php echo $row['student_id']; ?>" class="btn btn-outline-danger text-center" style="width:70px">Delete</a></td>
            </tbody>
            <?php endwhile; ?>
        </table>
    <?php
    }else{

    }
}
?>