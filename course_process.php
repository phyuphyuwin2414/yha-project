<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","yha");
    $courseid = "";
    $coursename = "";
    $id = 0;
    $edit_state = false;
    if (isset($_POST['save'])) {
        $courseid=$_POST['course_id'];
        $coursename=$_POST['course_name'];
        $sql = "INSERT INTO course(courseid, coursename) VALUES ('$courseid','$coursename')";
    if (mysqli_query($conn, $sql)){
        $_SESSION['message'] = "Data Saved Successfully";
            header("Location: course.php");
        } else {
            mysqli_close($conn);
        }

    }
    // For updating records
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $courseid=$_POST['course_id'];
        $coursename=$_POST['course_name'];
        mysqli_query($conn, "UPDATE course SET courseid='$id',coursename='$coursename' WHERE courseid='$id'");
        $_SESSION['message'] = "Data Updated Successfully";
        header('location: course.php');
    }
    // For deleteing records
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        mysqli_query($conn, "DELETE FROM course WHERE courseid='$id'");
        $_SESSION['message'] = "Data Deleted Successfully";
        header('location:course.php');
    }
?>