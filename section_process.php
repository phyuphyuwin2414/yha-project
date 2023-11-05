<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","yha");
    $sectionid = "";
    $sectionname = "";
    $id = 0;
    $edit_state = false;
    if (isset($_POST['save'])) {
        $sectionid=$_POST['sectionid'];
        $sectionname=$_POST['sectionname'];
        $sql = "INSERT INTO section(sectionid, sectionname) VALUES ('$sectionid','$sectionname')";
    if (mysqli_query($conn, $sql)){
        $_SESSION['message'] = "Data Saved Successfully";
            header("Location: section.php");
        } else {
            mysqli_close($conn);
        }

    }
    // For updating records
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $sectionid=$_POST['sectionid'];
        $sectionname=$_POST['sectionname'];
        mysqli_query($conn, "UPDATE section SET sectionid='$id',sectionname='$sectionname' WHERE sectionid='$id'");
        $_SESSION['message'] = "Data Updated Successfully";
        header('location: section.php');
    }
    // For deleteing records
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        mysqli_query($conn, "DELETE FROM section WHERE sectionid='$id'");
        $_SESSION['message'] = "Data Deleted Successfully";
        header('location:section.php');
    }
?>