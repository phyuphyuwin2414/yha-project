<?php
session_start();
$conn = mysqli_connect("localhost","root","","yha");
$phno="";
$stu_id="";
$stu_name="";
$remark="";
$dt_start="";
$description="";
$id = 0;
$edit_state = false;
if (isset($_POST['save'])){
    error_reporting(0);
    ini_set('display_errors',0);
    $stu_ph = $_POST['stu_ph'];
    $status = $_POST['status'];
    $stu_id = $_POST['stu_id'];
    $stu_name = $_POST['stu_name'];
    $remark = $_POST['remark'];
    $date = $_POST['date'];
    if($stu_ph=='' || $stu_id=='' || $stu_name=='' || $status==''){
    }else{
    $sql = "INSERT INTO status_details(status_id, student_id, dt_start, remark) VALUES('$status','$stu_id','$date','$remark')";
        if(mysqli_query($conn,$sql)){
            $_SESSION['message'] = "Data Save Successfully";
            header("Location:status1.php");
        }else{
            mysqli_close($conn);
        }
    }
}
// For updating records
if (isset($_POST['update'])) {
    $id = $_POST['id'];
	$stu_ph = $_POST['stu_ph'];
    $stu_id = $_POST['stu_id'];
    $stu_name = $_POST['stu_name'];
    $status = $_POST['status'];
    $remark = $_POST['remark'];
    $date = $_POST['date'];
    $status = $_POST['status'];
    
    // $sql = "UPDATE status_details SET status_id='[value-2]',student_id='[value-3]',dt_start='[value-4]',remark='[value-5]' WHERE 1";
	mysqli_query($conn, "UPDATE status_details SET status_id='$status',student_id='$stu_id',dt_start='$date',remark='$remark' WHERE std_id='$id'");
	$_SESSION['message'] = "Data Updated Successfully";
	header('location: status1.php');
}
// For deleteing records
if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	mysqli_query($conn, "DELETE FROM status_details WHERE std_id='$id'");
	$_SESSION['message'] = "Data Deleted Successfully";
	header('location:status1_re.php');
}
?>