<?php
if(isset($_POST['update'])){
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
                mysqli_query($conn,"UPDATE register SET stu_id='$stuid',stu_name='$stuname',course_id='$course',section_id='$section',time_id='$time',register_date='$reg_date',enroll_date='$enroll',father_name='$ft_name',mother_name='$mt_name',phno='$phno',e_mail='$email',stu_address='$address',fb_acc='$fb',vb_phno='$vb',date_birth='$bd',nrc_no='$nrc',gender='$gender',edu='$edu',native_town='$natown',rg_status='$res',stu_img='$stimg' WHERE stu_id='$id'");



                // mysqli_query($conn, "UPDATE register SET stu_id='$stuid',stu_name='$stuname',course_id='$course',section_id='$section',time_id='$time',register_date='$reg_date',enroll_date='$enroll',father_name='$ft_name',mother_name='$mt_name',phno='$phno',e_mail='$email',stu_address='$address',fb_acc='$fb',vb_phno='$vb',date_birth='$bd',nrc_no='$nrc',gender='$gender',edu='$edu',native_town='$natown',rg_status='$res',stu_img='$stimg' WHERE stu_id = $id");
                $_SESSION['message'] = "Data Updated Successfully";
                header('location: re_form.php');  
                
                

                // $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                // $sql = "UPDATE register SET stu_id='$stuid',stu_name='$stuname',course_id='$course',section_id='$section',time_id='$time',register_date='$reg_date',enroll_date='$enroll',father_name='$ft_name',mother_name='$mt_name',phno='$phno',e_mail='$email',address='$address',fb_acc='$fb',vb_phno='$vb',date_birth='$bd',nrc_no='$nrc',gender='$gender',edu='$edu',native_town='$natown',rg_status='$res',stu_img='$stimg' WHERE stu_id = $id";
                // mysqli_query($con,$sql);
                // header("Location:re_form.php");
            }else{
                mysqli_query($conn, "UPDATE register SET stu_id='$stuid',stu_name='$stuname',course_id='$course',section_id='$section',time_id='$time',register_date='$reg_date',enroll_date='$enroll',father_name='$ft_name',mother_name='$mt_name',phno='$phno',e_mail='$email',stu_address='$address',fb_acc='$fb',vb_phno='$vb',date_birth='$bd',nrc_no='$nrc',gender='$gender',edu='$edu',native_town='$natown',rg_status='$res',stu_img='$old_img' WHERE stu_id = $id");
                $_SESSION['message'] = "Data Updated Successfully";
                header('location: re_form.php');



                // $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                // $sql = "UPDATE register SET stu_id='$stuid',stu_name='$stuname',course_id='$course',section_id='$section',time_id='$time',register_date='$reg_date',enroll_date='$enroll',father_name='$ft_name',mother_name='$mt_name',phno='$phno',e_mail='$email',address='$address',fb_acc='$fb',vb_phno='$vb',date_birth='$bd',nrc_no='$nrc',gender='$gender',edu='$edu',native_town='$natown',rg_status='$res',stu_img='$old_img' WHERE stu_id = $id";
                // mysqli_query($con,$sql);
                // header("Location:re_form.php");
            }
        }
?>




<div class="photo" style="margin-left:620px;">
                <div class="hero">
                    <div class="card">
                        <?php if($edit_state==false):?>
                        <img src="img/noprofil.jpg" name="stimg" alt="" id="profile-pic">
                        <?php else:?>
                        <img src="img/<?php echo $stimg;?>" name="old_img" alt="" id="profile-pic">
                        <?php endif;?>
                        <label for="input-file">Upload image</label>
                        <!---->
                        <input type="file" name="stimg" accept="img/jpeg, img/png, img/jpg" id="input-file">
                        <input type="hidden" name="old_img" accept="img/jpeg, img/png, img/jpg" id="input-file" value="<?php echo $stimg; ?>" style="padding-top:10px;">
                        <!---->
                    </div>
                </div>
            </div>