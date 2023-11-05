<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","yha");
    $timetableid = "";
    $sectionid="";
    $courseid="";
    $subid="";
    $timeid="";
    $teacherid="";
    $dat="";
    $asteacher="";
    $id = 0;
    $edit_state = false;
    if (isset($_POST['save'])) {
        $id = $_POST['id'];
        $timetableid=$_POST['id'];
        $sectionid=$_POST['section'];
        $courseid=$_POST['course'];
        $subid=$_POST['subject'];
        $timeid=$_POST['time'];
        $teacherid=$_POST['teacher'];
        $dat=$_POST['date'];
        $asteacher=$_POST['asteacher'];
        $sql = "INSERT INTO timetable(sectionid, courseid, subid, timeid, teacherid, dat, astid) VALUES ('$sectionid','$courseid','$subid','$timeid','$teacherid','$dat','$asteacher')";
    if (mysqli_query($conn, $sql)){
        $_SESSION['message'] = "Data Saved Successfully";
            header("Location: timetable1.php");
        } else {
            mysqli_close($conn);
        }

    }
    // For updating records
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $timetableid=$_POST['id'];
        $sectionid=$_POST['section'];
        $courseid=$_POST['course'];
        $subid=$_POST['subject'];
        $timeid=$_POST['time'];
        $teacherid=$_POST['teacher'];
        $dat=$_POST['date'];
        $asteacher=$_POST['asteacher'];
        mysqli_query($conn, "UPDATE timetable SET sectionid='$sectionid',courseid='$courseid',subid='$subid',timeid='$timeid',teacherid='$teacherid',dat='$dat',astid='$asteacher' WHERE id='$id'");
        $_SESSION['message'] = "Data Updated Successfully";
        header('location: timetable1.php');
    }
    // For deleteing records
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        mysqli_query($conn, "DELETE FROM timetable WHERE id='$id'");
        $_SESSION['message'] = "Data Deleted Successfully";
        header('location:timetable1.php');
    }
?>