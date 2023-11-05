<?php
session_start();
$conn = mysqli_connect("localhost","root","","yha");
    $stuid="";
    $stuname="";
    $course="";
    $section="";
    $time="";
    $reg_date="";
    $ft_name="";
    $mt_name="";
    $phno="";
    $email="";
    $address="";
    $fb="";
    $vb="";
    $enroll="";
    $bd="";
    $nrc="";
    $gender="";
    $edu="";
    $natown="";
    $res="";
    $stimg="";
    $id = 0;
    $edit_state = false;
    if (isset($_POST['save'])) {
        $stuid=$_POST['stuid'];
        $stuname=$_POST['stuname'];
        $course=$_POST['course'];
        $section=$_POST['section'];
        $time=$_POST['time'];
        $reg_date=$_POST['reg_date'];
        $ft_name=$_POST['ft_name'];
        $mt_name=$_POST['mt_name'];
        $phno=$_POST['phno'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $fb=$_POST['fb'];
        $vb=$_POST['vb'];
        $enroll=$_POST['enroll'];
        $bd=$_POST['bd'];
        $nrc=$_POST['nrc'];
        $gender=$_POST['gender'];
        $edu=$_POST['edu'];
        $natown=$_POST['natown'];
        $res=$_POST['res'];
        $stimg=$_POST['stimg'];
        $sql = "INSERT INTO register(stu_id, stu_name, course_id, section_id, time_id, register_date, enroll_date, father_name, mother_name, phno, e_mail, address, fb_acc, vb_phno, date_birth, nrc_no, gender, edu, native_town, rg_status, stu_img) VALUES ('$stuid','$stuname','$course','$section','$time','$reg_date','$enroll','$ft_name','$mt_name','$phno','$email','$address','$fb','$vb','$bd','$nrc','$gender','$edu','$natown','$res','$stimg')";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['message'] = "Data Saved Successfully";
            header("Location: re_form.php");
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