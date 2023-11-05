<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","yha");
    $subid = "";
    $subname = "";
    $id = 0;
    $edit_state = false;
    if (isset($_POST['save'])) {
        $subid=$_POST['subid'];
        $subname=$_POST['subname'];
        $sql = "INSERT INTO subject(subid, subname) VALUES ('$subid','$subname')";
    if (mysqli_query($conn, $sql)){
        $_SESSION['message'] = "Data Saved Successfully";
            header("Location: subject.php");
        } else {
            mysqli_close($conn);
        }

    }
    // For updating records
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $subid=$_POST['subid'];
        $subname=$_POST['subname'];
        mysqli_query($conn, "UPDATE subject SET subid='$id',subname='$subname' WHERE subid='$id'");
        $_SESSION['message'] = "Data Updated Successfully";
        header('location: subject.php');
    }
    // For deleteing records
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        mysqli_query($conn, "DELETE FROM subject WHERE subid='$id'");
        $_SESSION['message'] = "Data Deleted Successfully";
        header('location:subject.php');
    }
?>