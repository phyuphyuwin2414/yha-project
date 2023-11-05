<?php
session_start();
$conn = mysqli_connect("localhost","root","","yha");
$stuid = "";
$stuname = "";
$course = "";
$date = "";
$section = "";
$time = "";
$attend = "";
$id = 0;
$edit_state = false;
if (isset($_POST['save'])) {
	$stuid=$_POST['student_id'];
    $stuname=$_POST['student_name'];
    $course=$_POST['course'];
    $date=$_POST['date'];
    $section=$_POST['section'];
    $time=$_POST['time'];
    $attend=$_POST['attend'];
    $sql = "INSERT INTO attendance(student_id, student_name, course_id, dat, section_id, time_id, attend) VALUES ('$stuid','$stuname','$course','$date','$section','$time','$attend')";
 if (mysqli_query($conn, $sql)) {
 	$_SESSION['message'] = "Data Saved Successfully";
		header("Location: 01.php");
	 } else {
		mysqli_close($conn);
	 }

}
// For updating records
if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$stuid=$_POST['student_id'];
    $stuname=$_POST['student_name'];
    $course=$_POST['course'];
    $date=$_POST['date'];
    $section=$_POST['section'];
    $time=$_POST['time'];
    $attend=$_POST['attend'];
	mysqli_query($conn, "UPDATE attendance SET attend_id='$id',student_id='$stuid',student_name='$stuname',course_id='$course',dat='$date',section_id='$section',time_id='$time',attend='$attend' WHERE attend_id='$id'");
	$_SESSION['message'] = "Data Updated Successfully";
	header('location: 01.php');
}
// For deleteing records
if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	mysqli_query($conn, "DELETE FROM attendance WHERE attend_id='$id'");
	$_SESSION['message'] = "Data Deleted Successfully";
	header('location:01.php');
}
?>