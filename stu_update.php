<?php 
    include('inc/dbcon.php');
    if(isset($_GET['id']));
    $id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Update</title>
    <link rel="stylesheet" href="css/re_form.css"/>
</head>
<body>
<div class="container">
        <header style="font-size:2rem">Student Registration</header>
        <div class="photo" style="margin-left:620px;">
        <?php 
            $sql = "SELECT re.*,c.coursename,s.sectionname,se.timename FROM register AS re LEFT JOIN course AS c ON re.course_id=c.courseid LEFT JOIN section AS s ON re.section_id=s.sectionid LEFT JOIN sectiontime AS se ON re.time_id=se.timeid WHERE stu_id=$id";
            $res = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($res);
            include('update_photoupload.php');
        ?>
        </div>
        <form action="" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Student ID</label>
                            <input type="number" placeholder="Student ID" name="stuid" value="<?php echo $row['stu_id']; ?>" required>
                        </div>
                        <div class="input-field">
                            <label>Student Name</label>
                            <input type="text" name="stuname" placeholder="Student Name" value="<?php echo $row['stu_name']; ?>" required>
                        </div>
                        <div class="input-field">
                            <label>Course</label>
                            <select name="course" required>
                                <option selected><?php echo $row['coursename']; ?></option>
                                <option><?php echo $row['coursename'];?></option>
                            </select>
                            <!--<input type="number" name="course" placeholder="Course ID" value="<?php //echo $row['course_id']; ?>" required>-->
                        </div>
                        <div class="input-field">
                            <label>Section</label>
                            <select name="section" required>
                                <option selected><?php echo $row['sectionname']; ?></option>
                                <option><?php echo $row['sectionname'];?></option>
                            </select>
                            <!--<input type="number" name="section" placeholder="Section ID" value="<?php //echo $row['section_id']; ?>" required>-->
                        </div>
                        <div class="input-field">
                            <label>Time ID</label>
                            <select name="course" required>
                                <option selected><?php echo $row['timename']; ?></option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                            <!--<input type="number" name="time" placeholder="Time ID" value="<?php //echo $row['time_id']; ?>" required>-->
                        </div>
                        <div class="input-field">
                            <label>Register Date</label>
                            <input type="date" name="reg_date" placeholder="Register Date" value="<?php echo $row['register_date']; ?>" required>
                        </div>
                    </div>
                </div>
                <div class="details ID">
                    <span class="title">Current Information</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Father's Name</label>
                            <input type="text" name="ft_name" placeholder="Father's Name" value="<?php echo $row['father_name']; ?>" required>
                        </div>
                        <div class="input-field">
                            <label>Mother's Name</label>
                            <input type="text" name="mt_name" placeholder="Mother's Name" value="<?php echo $row['mother_name']; ?>" required>
                        </div>
                        <div class="input-field">
                            <label>Phone Number</label>
                            <input type="text" name="phno" placeholder="Phone Number" value="<?php echo $row['phno']; ?>" required>
                        </div>
                        <div class="input-field">
                            <label>E-mail</label>
                            <input type="email" name="email" placeholder="E-mail" value="<?php echo $row['e_mail']; ?>" required>
                        </div>
                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Address" value="<?php echo $row['address']; ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Facebook Account</label>
                            <input type="text" name="fb" value="<?php echo $row['fb_acc']; ?>" placeholder="Facebook Account" required>
                        </div>
                        <div class="input-field">
                            <label>Viber Phone Number</label>
                            <input type="text" name="vb" value="<?php echo $row['vb_phno']; ?>" placeholder="Viber Phone Number" required>
                        </div>
                        <div class="input-field">
                            <label>Enroll Date</label>
                            <input type="date" name="enroll" placeholder="Enroll Date" value="<?php echo $row['enroll_date']; ?>" required>
                        </div>
                        <div class="input-field">
                            <label
                            >Upload Photo</label>
                            <input type="file" name="stimg" style="padding-top:10px;">
                            <input type="hidden" name="old_img" value="<?php echo $row['stu_img']; ?>" style="padding-top:10px;">
                        </div>
                    </div>
                </div> 
                <div class="details ID">
                    <span class="title">Personal Information</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="bd" value = "<?php echo $row['date_birth']; ?>" placeholder="Date of Birth" required>
                        </div>
                        <div class="input-field">
                            <label>N.R.C.NO</label>
                            <input type="text" name="nrc" value="<?php echo $row['nrc_no']; ?>" placeholder="N.R.C.NO" required>
                        </div>
                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender" required>
                                <option selected><?php echo $row['gender']; ?></option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Education</label>
                            <input type="text" name="edu" value="<?php echo $row['edu']; ?>" placeholder="Education" required>
                        </div>
                        <div class="input-field">
                            <label>Native Town</label>
                            <input type="text" name="natown" value="<?php echo $row['native_town']; ?>" placeholder="Native Town" required>
                        </div>
                        <div class="input-field">
                            <label>Religious Status</label>
                            <input type="text" name="res" value="<?php echo $row['rg_status']; ?>" placeholder="Religious Status" required>
                        </div>
                </div><button class="nextBtn" name="save">
                    <span class="btnText">Save</span>
                    <i class="uil uil-navigator"></i>
                </button>
            </div>
        </form>
        <?php 
            if(isset($_POST['save'])){
                $stuid = $_POST['stuid'];
                $stuname = $_POST['stuname'];
                $course = $_POST['course'];
                $section = $_POST['section'];
                $time = $_POST['time'];
                $reg_date = $_POST['reg_date'];
                $ft_name = $_POST['ft_name'];
                $mt_name = $_POST['mt_name'];
                $phno = $_POST['phno'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $fb = $_POST['fb'];
                $vb = $_POST['vb'];
                $enroll = $_POST['enroll'];
                $stimg = $_POST['stimg'];
                $old_img = $_POST['old_img'];
                $bd = $_POST['bd'];
                $nrc = $_POST['nrc'];
                $gender = $_POST['gender'];
                $edu = $_POST['edu'];
                $natown = $_POST['natown'];
                $res = $_POST['res'];
                if($stimg != ''){
                $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                $sql = "UPDATE register SET stu_id='$stuid',stu_name='$stuname',course_id='$course',section_id='$section',time_id='$time',register_date='$reg_date',enroll_date='$enroll',father_name='$ft_name',mother_name='$mt_name',phno='$phno',e_mail='$email',address='$address',fb_acc='$fb',vb_phno='$vb',date_birth='$bd',nrc_no='$nrc',gender='$gender',edu='$edu',native_town='$natown',rg_status='$res',stu_img='$stimg' WHERE stu_id = $id";
                mysqli_query($con,$sql);
                header("Location:re_form.php");
            }else{
                $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                $sql = "UPDATE register SET stu_id='$stuid',stu_name='$stuname',course_id='$course',section_id='$section',time_id='$time',register_date='$reg_date',enroll_date='$enroll',father_name='$ft_name',mother_name='$mt_name',phno='$phno',e_mail='$email',address='$address',fb_acc='$fb',vb_phno='$vb',date_birth='$bd',nrc_no='$nrc',gender='$gender',edu='$edu',native_town='$natown',rg_status='$res',stu_img='$old_img' WHERE stu_id = $id";
                mysqli_query($con,$sql);
                header("Location:re_form.php");
            }
        }
        ?>
    </div>
</body>
</html>