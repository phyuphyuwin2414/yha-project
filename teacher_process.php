<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","yha");
    $teacherid = "";
    $teachername = "";
    $teacher_age = "";
    $teacher_position = "";
    $teacher_photo = "";
    $id = 0;
    $edit_state = false;
    if (isset($_POST['save'])) {
        $teacherid=$_POST['teacherid'];
        $teachername=$_POST['teachername'];
        $teacher_age = $_POST['teacher_age'];
        $teacher_position = $_POST['teacher_position'];
        $teacher_photo = $_POST['teacher_photo'];
        $sql = "INSERT INTO teacher(teacherid, teachername, teacher_age, teacher_position, teacher_photo) VALUES ('$teacherid','$teachername','$teacher_age','$teacher_position','$teacher_photo')";
    if (mysqli_query($conn, $sql)){
        $_SESSION['message'] = "Data Saved Successfully";
            header("Location: teacher.php");
        } else {
            mysqli_close($conn);
        }

    }
    // For updating records
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $teacherid=$_POST['teacherid'];
        $teachername=$_POST['teachername'];
        $teacher_age = $_POST['teacher_age'];
        $teacher_position = $_POST['teacher_position'];
        $teacher_photo = $_POST['teacher_photo'];
        mysqli_query($conn, "UPDATE teacher SET teacherid='$id',teachername='$teachername',teacher_age='$teacher_age',teacher_position='$teacher_position',teacher_photo='$teacher_photo' WHERE teacherid='$id'");
        $_SESSION['message'] = "Data Updated Successfully";
        header('location: teacher.php');
    }
    // For deleteing records
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        mysqli_query($conn, "DELETE FROM teacher WHERE teacherid='$id'");
        $_SESSION['message'] = "Data Deleted Successfully";
        header('location:teacher.php');
    }
?>