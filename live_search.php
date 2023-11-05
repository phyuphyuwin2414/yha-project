<?php 
include("inc/dbcon.php");
if(isset($_POST['input'])){
    $input = $_POST['input'];
    $sql = "SELECT a.*,c.*,s.*,se.* FROM attendance AS a LEFT JOIN course AS c ON a.course_id=c.courseid LEFT JOIN section AS s ON a.section_id=s.sectionid LEFT JOIN sectiontime AS se ON a.time_id=se.timeid  WHERE student_id LIKE '{$input}%' OR student_name LIKE '{$input}%' OR coursename LIKE '{$input}%' OR dat LIKE '{$input}%' OR sectionname LIKE '{$input}%' OR timename LIKE '{$input}%' OR attend LIKE '{$input}%'";
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
                    <td><?php echo $row['coursename']; ?></th>
                    <td><?php echo $row['dat']; ?></td>
                    <td><?php echo $row['sectionname']; ?></td>
                    <td><?php echo $row['timename']; ?></td>
                    <td><?php echo $row['attend']; ?></td>
                    <td><a href="attend_edit.php?id=<?php echo $row['attend_id']; ?>" class="btn btn-outline-info" style="width:50px">Edit</a></td>
                    <td><a href="del_attend.php?id=<?php echo $row['attend_id']; ?>" class="btn btn-outline-danger text-center" style="width:70px">Delete</a></td>
            </tbody>
            <?php endwhile; ?>
        </table>
    <?php
    }else{

    }
}
?>