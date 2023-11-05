<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","yha");
    $subdeid = "";
    $subdename = "";
    $subid="";
    $id = 0;
    $edit_state = false;
    if (isset($_POST['save'])) {
        $subdeid=$_POST['subdeid'];
        $subdename=$_POST['subdename'];
        $subid=$_POST['subid'];
        $sql = "INSERT INTO subdetail(subdeid, subdename,subid) VALUES ('$subdeid','$subdename','$subid')";
    if (mysqli_query($conn, $sql)){
        $_SESSION['message'] = "Data Saved Successfully";
            header("Location: subject_details.php");
        } else {
            mysqli_close($conn);
        }

    }
    // For updating records
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $subdeid=$_POST['subdeid'];
        $subdename=$_POST['subdename'];
        $subid=$_POST['subid'];
        mysqli_query($conn, "UPDATE subdetail SET subdeid='$id',subdename='$subdename',subid='$subid' WHERE subdeid='$id'");
        $_SESSION['message'] = "Data Updated Successfully";
        header('location: subject_details.php');
    }
    // For deleteing records
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        mysqli_query($conn, "DELETE FROM subdetail WHERE subdeid='$id'");
        $_SESSION['message'] = "Data Deleted Successfully";
        header('location:subject_details.php');
    }
?>