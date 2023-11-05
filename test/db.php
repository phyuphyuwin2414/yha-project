<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "data";

// // Create connection

// $conn =  mysqli_connect($servername,$username,$password,"$dbname");

// if (!$conn) {
	
// 	die("Could Not Connect:" .mysqli_connect_error());
// }
?>

<?php
                        if(isset($_POST['submit'])){
                        $course = $_POST['course'];
                        $section = $_POST['section'];
                        $time = $_POST['time'];
                        $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                        $sql = "SELECT re.*,c.*,s.*,t.* FROM register AS re LEFT JOIN course AS c ON re.course_id=c.courseid LEFT JOIN section AS s ON re.section_id=s.sectionid LEFT JOIN sectiontime AS t ON re.time_id=t.timeid WHERE course_id='$course' AND section_id='$section' AND time_id='$time'";
                        $res = mysqli_query($con,$sql);
                        $i=1;
                        while($row=mysqli_fetch_assoc($res)):
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td></td>
                        <td><?php echo $row['stu_id'];?></td>
                        <td><?php echo $row['stu_name']; ?></td>
                        <td><?php echo date("d/m/Y"); ?></td>
                        <td><?php echo $row['coursename']; ?></th>
                        <td><?php echo $row['sectionname']; ?></td>
                        <td><?php echo $row['timename']; ?></td>
                        <td>Present</td>
                        <td><a href="attend_entery4.php?edit=<?php echo $row['stu_id'];?>" style="width:50px;" class="btn btn-primary">Edit</a></td>
                        <td><a href="attend_process.php?delete=<?php echo $row['stu_id'];?>" style="width:70px;" class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php $i++; endwhile; }?>