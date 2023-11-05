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
    $end_date="";
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
    if(isset($_POST['save'])) {
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
        $end_date=$_POST['end_date'];
        $enroll=$_POST['enroll'];
        $bd=$_POST['bd'];
        $nrc=$_POST['nrc'];
        $gender=$_POST['gender'];
        $edu=$_POST['edu'];
        $natown=$_POST['natown'];
        $res=$_POST['res'];
        $stimg=$_POST['stimg'];
        $sql = "INSERT INTO register(stu_id, stu_name, courseid, sectionid, timeid, register_date, enroll_date,end_date, father_name, mother_name, phno, e_mail, stu_address, fb_acc, vb_phno, date_birth, nrc_no, gender, edu, native_town, rg_status, stu_img) VALUES ('$stuid','$stuname','$course','$section','$time','$reg_date','$enroll','$end_date','$ft_name','$mt_name','$phno','$email','$address','$fb','$vb','$bd','$nrc','$gender','$edu','$natown','$res','$stimg')";
        if(mysqli_query($conn, $sql)){
            $_SESSION['message'] = "Data Saved Successfully";
                header("Location: re_form2.php");
        } else {
            mysqli_close($conn);
        }

    }
    // For updating records
    if(isset($_POST['update'])){
        $id=$_POST['stuid'];
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
        $old_img=$_POST['old_img'];
        if($stimg != ''){
            mysqli_query($conn, "UPDATE register SET stu_name='$stuname',courseid='$course',sectionid='$section',timeid='$time',register_date='$reg_date',enroll_date='$enroll',father_name='$ft_name',mother_name='$mt_name',phno='$phno',e_mail='$email',stu_address='$address',fb_acc='$fb',vb_phno='$vb',date_birth='$bd',nrc_no='$nrc',gender='$gender',edu='$edu',native_town='$natown',rg_status='$res',stu_img='$stimg' WHERE stu_id=$id");
	        $_SESSION['message'] = "Data Updated Successfully";
	        header('location: re_form2.php');
        }else{
            mysqli_query($conn, "UPDATE register SET stu_name='$stuname',courseid='$course',sectionid='$section',timeid='$time',register_date='$reg_date',enroll_date='$enroll',father_name='$ft_name',mother_name='$mt_name',phno='$phno',e_mail='$email',stu_address='$address',fb_acc='$fb',vb_phno='$vb',date_birth='$bd',nrc_no='$nrc',gender='$gender',edu='$edu',native_town='$natown',rg_status='$res',stu_img='$old_img' WHERE stu_id=$id");
            $_SESSION['message'] = "Data Updated Successfully";
            header('location: re_form2.php');  
        }
    }
    // For deleteing records
    if(isset($_GET['delete'])) {
        $id = $_GET['delete'];
        mysqli_query($conn, "DELETE FROM register WHERE stu_id=$id");
        $_SESSION['message'] = "Data Deleted Successfully";
        header('location:re_form2.php');
    }
    ?>