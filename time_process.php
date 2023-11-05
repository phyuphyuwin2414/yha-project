<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","yha");
    $timeid = "";
    $timename = "";
    $sectionid = "";
    $id = 0;
    $edit_state = false;
    if (isset($_POST['save'])) {
        $timeid=$_POST['timeid'];
        $timename=$_POST['timename'];
        $sectionid=$_POST['sectionid'];
        $sql = "INSERT INTO sectiontime(timeid, timename,sectionid) VALUES ('$timeid','$timename','$sectionid')";
    if (mysqli_query($conn, $sql)){
        $_SESSION['message'] = "Data Saved Successfully";
            header("Location: time.php");
        } else {
            mysqli_close($conn);
        }

    }
    // For updating records
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $timename=$_POST['timeid'];
        $timename=$_POST['timename'];
        $sectionid=$_POST['sectionid'];
        mysqli_query($conn, "UPDATE sectiontime SET timeid='$id',timename='$timename',sectionid='$sectionid' WHERE timeid='$id'");
        $_SESSION['message'] = "Data Updated Successfully";
        header('location: time.php');
    }
    // For deleteing records
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        mysqli_query($conn, "DELETE FROM sectiontime WHERE timeid='$id'");
        $_SESSION['message'] = "Data Deleted Successfully";
        header('location:time.php');
    }
?>