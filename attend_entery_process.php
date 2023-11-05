<?php 

session_start();
$conn = mysqli_connect("localhost","root","","yha");
$stuid = "";
$stuname = "";
$course = "";
$subid = "";
$date = "";
$section = "";
$time = "";
$attend = "";
$id = 0;
$edit_state = false;
    // For updating records
if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$stuid=$_POST['student_id'];
    $stuname=$_POST['student_name'];
    $course=$_POST['course'];
	$subid=$_POST['subid'];
    $date=$_POST['date'];
    $section=$_POST['section'];
    $time=$_POST['time'];
    $attend=$_POST['attend'];
	mysqli_query($conn, "UPDATE attendance SET attend_id='$id',student_id='$stuid',student_name='$stuname',course_id='$course',subid='$subid',dat='$date',section_id='$section',time_id='$time',attend='$attend' WHERE attend_id='$id'");
	$_SESSION['message'] = "Data Updated Successfully";
	header('location: attend_entery4.php');
}
// For deleteing records
if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	mysqli_query($conn, "DELETE FROM attendance WHERE attend_id='$id'");
	$_SESSION['message'] = "Data Deleted Successfully";
	header('location:attend_entery4.php');
}

?>