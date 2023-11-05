<?php 
include("inc/dbcon.php");
if(isset($_POST['input'])){
    $input = $_POST['input'];
    $sql = "SELECT re.*,c.*,s.*,st.* FROM register AS re LEFT JOIN course AS c ON re.courseid=c.courseid LEFT JOIN section AS s ON re.sectionid=s.sectionid LEFT JOIN sectiontime AS st ON re.timeid=st.timeid  WHERE stu_id LIKE '{$input}%' OR stu_name LIKE '{$input}%' OR coursename LIKE '{$input}%' OR sectionname LIKE '{$input}%' OR timename LIKE '{$input}%' ";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){?>
        <table class="table table-bordered table striped mt-4" id="attend">
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Course</th>
                    <th>Section</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($row=mysqli_fetch_assoc($result)):
                ?>
                <tr>
                    <td><?php echo $row['stu_name']; ?></td>
                    <td><?php echo $row['coursename']; ?></th>
                    <td><?php echo $row['sectionname']; ?></td>
                    <td><?php echo $row['timename']; ?></td>
                    <td><a href="exam_result.php?id=<?php echo $row['stu_id']; ?>" class="btn btn-outline-info" style="width:70px">Edit</a></td>
            </tbody>
            <?php endwhile; ?>
        </table>
    <?php
    }else{

    }
}
?>