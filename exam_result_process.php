<?php
session_start();
$conn = mysqli_connect("localhost","root","","yha");
$stuid = "";
$stuname = "";
$word = "";
$excel = "";
$cs = "";
$pro = "";
$ps = "";
$a_excel = "";
$b_ps = "";
$a_ps = "";
$date = "";
$id = 0;
$edit_state = false;
if (isset($_POST['save'])) {
	$stuid=$_POST['stuid'];
    $stuname=$_POST['stuname'];
    $word=$_POST['word'];
    $excel=$_POST['excel'];
    $cs=$_POST['cs'];
    $pro=$_POST['pro'];
    $ps=$_POST['ps'];
    $a_excel = $_POST['a_excel'];
    $b_ps=$_POST['b_ps'];
    $a_ps=$_POST['a_ps'];
    $date = $_POST['date'];
    $sql = "INSERT INTO exam_result(stuid,word, excel, cs, pro, ps,a_excel,b_ps,a_ps,exam_date) VALUES ('$stuid','$word','$excel','$cs','$pro','$ps','$a_excel','$b_ps','$a_ps','$date')";
 if (mysqli_query($conn, $sql)) {
 	$_SESSION['message'] = "Data Saved Successfully";
		header("Location: exam_result.php");
        echo $stuid;
	 } else {
		mysqli_close($conn);
	 }

}
// For updating records
if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$stuid=$_POST['stuid'];
    $stuname=$_POST['stuname'];
    $word=$_POST['word'];
    $excel=$_POST['excel'];
    $cs=$_POST['cs'];
    $pro=$_POST['pro'];
    $ps=$_POST['ps'];
    $a_excel = $_POST['a_excel'];
    $b_ps=$_POST['b_ps'];
    $a_ps=$_POST['a_ps'];
    $date = $_POST['date'];
	mysqli_query($conn, "UPDATE exam_result SET stuid='$stu_id',word='$word',excel='$excel',cs='$cs',pro='$pro',ps='$ps',a_excel='$a_excel',b_ps='$b_ps',a_ps='$a_ps',exam_date='$date' WHERE id='$id'");
	$_SESSION['message'] = "Data Updated Successfully";
	header('location: exam_result.php');
}
// For deleteing records
if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	mysqli_query($conn, "DELETE FROM exam_result WHERE id='$id'");
	$_SESSION['message'] = "Data Deleted Successfully";
	header('location:exam_result.php');
}
?>