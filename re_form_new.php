<?php 
    include 'reg_process.php';
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $edit_state = true;

        $record = mysqli_query($conn, "SELECT re.*,c.coursename,s.sectionname,se.timename FROM register AS re LEFT JOIN course AS c ON re.course_id=c.courseid LEFT JOIN section AS s ON re.section_id=s.sectionid LEFT JOIN sectiontime AS se ON re.time_id=se.timeid WHERE stu_id='$id'");
        $data = mysqli_fetch_assoc($record);
        $stuid = $data['stu_id'];
        $stuname=$data['stu_name'];
        $courseid=$data['course_id'];
        $course=$data['coursename'];
        $sectionid=$data['section_id'];
        $section=$data['sectionname'];
        $timeid=$data['time_id'];
        $time=$data['timename'];
        $reg_date=$data['register_date'];
        $ft_name=$data['father_name'];
        $mt_name=$data['mother_name'];
        $phno=$data['phno'];
        $email=$data['e_mail'];
        $address=$data['stu_address'];
        $fb=$data['fb_acc'];
        $vb=$data['vb_phno'];
        $enroll=$data['enroll_date'];
        $bd=$data['date_birth'];
        $nrc=$data['nrc_no'];
        $gender=$data['gender'];
        $edu=$data['edu'];
        $natown=$data['native_town'];
        $res=$data['rg_status'];
        $stimg=$data['stu_img'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Student Registration Form</title>
  <link rel="stylesheet" href="css/re_form.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/01.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  
  
</head>
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}
table td img{
    width:70px;
}
tr:nth-child(even){background-color: #f2f2f2}
.clearpad{
    clear:both;
    margin:20px;
}
#del_btn:hover{
    background-color:#ff6b01;
}  
*{
    margin:0;
    padding:0;
    font-family:'Poppins',sans-serif;
    box-sizing:border-box;
}
.hero{
    background:#d1d1d1;
    display:flex;
    align-items:center;
    justify-content:center;
}
.card{
    background:#fff;
    border-radius:15px;
    text-align:center;
    color:#333;
}
.card img{
    border-radius:50%;
}
label[for="input-file"]{
    display:block;
    width:200px;
    background:#e3362c;
    color:#fff;
    padding:12px;
    margin:10px auto;
    border-radius:5px;
    cursor:pointer;
}
#input-file{
    display:none;
}
.container form{
    height:77vw;
}
    
</style>
<body>
  <div class="container">
    <?php include("nav.php");?>

    <section class="main">
    <div class="main-top">
        <h1>Student Registration Form</h1>
        <i class="fas fa-user-cog"></i>
      </div>
    <form action="" method="post">
            <div class="photo" style="margin-left:620px;">
                <div class="hero">
                    <div class="card">
                        <?php if($edit_state==false):?>
                        <img src="img/noprofil.jpg" style="margin-left:23px;padding:20px;width:150px;height:150px;" name="stimg" alt="" id="profile-pic">
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
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Student ID</label>
                            <input type="number" value="<?php echo $stuid;?>" placeholder="Student ID" name="stuid" >
                        </div>
                        <div class="input-field">
                            <label>Student Name</label>
                            <input type="text" name="stuname" value="<?php echo $stuname;?>" placeholder="Student Name" >
                        </div>
                        <div class="input-field">
                            <label>Course ID</label>
                            <select name="course" required>
                                <?php if($edit_state==false):?>
                                <option value="">Choose Courses</option>
                                <?php else:?>
                                <option value="<?php echo $courseid;?>"><?php echo $courseid;?>&nbsp;<?php echo $course;?></option>
                                <?php endif;?>
                                <?php 
                                    include("inc/dbcon.php");
                                    $sql = "SELECT * FROM course";
                                    $res = mysqli_query($con,$sql);
                                    while($row=mysqli_fetch_assoc($res)):
                                ?>
                                <option><?php echo $row['courseid'];?>&nbsp;&nbsp;<?php echo $row['coursename'];?></option>
                                <?php endwhile;?>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Section ID</label>
                            <select name="section" required>
                                <?php if($edit_state==false):?>
                                <option value="">Choose Section</option>
                                <?php else:?>
                                <option value="<?php echo $sectionid;?>"><?php echo $sectionid;?>&nbsp;<?php echo $section;?></option>
                                <?php endif;?>
                                <?php 
                                    include("inc/dbcon.php");
                                    $sql = "SELECT * FROM section";
                                    $res = mysqli_query($con,$sql);
                                    while($row=mysqli_fetch_assoc($res)):
                                ?>
                                <option><?php echo $row['sectionid'];?>&nbsp;&nbsp;<?php echo $row['sectionname'];?></option>
                                <?php endwhile;?>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Time ID</label>
                            <select name="time" required>
                                <?php if($edit_state==false):?>
                                <option value="">Choose Time</option>
                                <?php else:?>
                                <option value="<?php echo $timeid;?>"><?php echo $timeid;?>&nbsp;<?php echo $time;?></option>
                                <?php endif;?>
                                <?php 
                                    include('inc/dbcon.php');
                                    $sql = "SELECT * FROM sectiontime";
                                    $res = mysqli_query($con,$sql);
                                    while($row=mysqli_fetch_assoc($res)):
                                ?>
                                <option><?php echo $row['timeid'];?>&nbsp;&nbsp;<?php echo $row['timename'];?></option>
                                <?php endwhile;?>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Register Date</label>
                            <input type="date" name="reg_date" value="<?php echo $reg_date;?>" placeholder="Register Date">
                        </div>
                    </div>
                </div>
                <div class="details ID">
                    <span class="title">Current Information</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Father's Name</label>
                            <input type="text" value="<?php echo $ft_name;?>" name="ft_name" placeholder="Father's Name" >
                        </div>

                        <div class="input-field">
                            <label>Mother's Name</label>
                            <input type="text" name="mt_name" value="<?php echo $mt_name;?>" placeholder="Mother's Name" >
                        </div>

                        <div class="input-field">
                            <label>Phone Number</label>
                            <input type="text" value="<?php echo $phno;?>" name="phno" placeholder="Phone Number" >
                        </div>

                        <div class="input-field">
                            <label>E-mail</label>
                            <input type="email" name="email" value="<?php echo $email;?>" placeholder="E-mail" >
                        </div>

                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" value="<?php echo $address;?>" name="address" placeholder="Address" >
                        </div>

                        <div class="input-field">
                            <label>Facebook Account</label>
                            <input type="text" name="fb" value="<?php echo $fb;?>" placeholder="Facebook Account" >
                        </div>
                        <div class="input-field">
                            <label>Viber Phone Number</label>
                            <input type="text" name="vb" value="<?php echo $vb;?>" placeholder="Viber Phone Number" >
                        </div>
                        <div class="input-field">
                            <label>Enroll Date</label>
                            <input type="date" name="enroll" value="<?php echo $enroll;?>" placeholder="Enroll Date" >
                        </div>
                    </div>
                </div> 
                <div class="details ID">
                    <span class="title">Personal Information</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="bd" value="<?php echo $bd;?>" placeholder="Date of Birth" >
                        </div>
                        <div class="input-field">
                            <label>N.R.C.NO</label>
                            <input type="text" name="nrc" value="<?php echo $nrc;?>" placeholder="N.R.C.NO">
                        </div>
                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender" >
                                <?php if($edit_state==false):?>
                                <option disabled selected>Select gender</option>
                                <?php else:?>
                                <option value="<?php echo $gender;?>"><?php echo $gender;?></option>
                                <?php endif;?>
                                <option class="mal">Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Education</label>
                            <input type="text" name="edu" value="<?php echo $edu;?>" placeholder="Education" >
                        </div>
                        <div class="input-field">
                            <label>Native Town</label>
                            <input type="text" name="natown" value="<?php echo $natown;?>" placeholder="Native Town" >
                        </div>
                        <div class="input-field">
                            <label>Religious Status</label>
                            <input type="text" name="res" value="" placeholder="Religious Status" >
                        </div>
                    <!--<button class="nextBtn">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>-->
                </div>
                <?php if($edit_state==false): ?>
                    <button class="btn btn-success" type="submit" name="save" >Save</button>
                <?php else: ?>
                    <button class="btn btn-success" type="submit" name="update" >Update</button>
                <?php endif ?>
                <!---->
                <?php //if($edit_state==false):?>
                <!--<button class="nextBtn" name="save">
                    <span class="btnText">Save</span>
                    <i class="uil uil-navigator"></i>
                </button>
                <?php //else:?>
                    <button class="nextBtn" type="submit" name="update">
                    <span class="btnText">Update</span>
                    <i class="uil uil-navigator"></i>
                </button>-->
                <?php //endif;?>  
            </div>
        </form>
    </div>
    <div class="clearpad"></div>
        <div class="row">
            <div class="col">
            <div class="register-list">
            <h1>Register List</h1>
            <div style="overflow-x:auto;">
            <table class="table">
                <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Course ID</th>
                    <th>Section ID</th>
                    <th>Time ID</th>
                    <th>Register Date</th>
                    <th>Enroll Date</th>
                    <th>Father Name</th>
                    <th>Mother Name</th>
                    <th>Phone Number</th>
                    <th>E-mail</th>
                    <th>Address</th>
                    <th>Facebook Account</th>
                    <th>Viber Phone Number</th>
                    <th>Date of Birth</th>
                    <th>N.R.C.NO</th>
                    <th>Gender</th>
                    <th>Education</th>
                    <th>Native Town</th>
                    <th>Religious Status</th>
                    <th>Student's Photo</th>
                    <th colspan="2" style="text-align:center">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                    $sql = "SELECT r.stu_id,r.stu_name,r.edu,r.native_town,r.rg_status,r.register_date,r.enroll_date,r.father_name,r.mother_name,r.phno,r.e_mail,r.stu_address,r.vb_phno,r.date_birth,r.nrc_no,r.stu_img,r.gender,r.fb_acc,r.father_name,c.coursename,r.course_id,s.sectionname,se.timename,se.timeid FROM register AS r LEFT JOIN course AS c ON r.course_id=c.courseid LEFT JOIN section AS s ON r.section_id=s.sectionid LEFT JOIN sectiontime AS se ON r.time_id=se.timeid;";
                    $res = mysqli_query($con,$sql);
                    while($row=mysqli_fetch_assoc($res)):
                    ?>
                        <tr>
                            <td><?php echo $row['stu_id']; ?></td>
                            <td><?php echo $row['stu_name']; ?></td>
                            <td><?php echo $row['coursename']; ?></td>
                            <td><?php echo $row['sectionname']; ?></td>
                            <td><?php echo $row['timename']; ?></td>
                            <td><?php echo $row['register_date']; ?></td>
                            <td><?php echo $row['enroll_date']; ?></td>
                            <td><?php echo $row['father_name']; ?></td>
                            <td><?php echo $row['mother_name']; ?></td>
                            <td><?php echo $row['phno']; ?></td>
                            <td><?php echo $row['e_mail']; ?></td>
                            <td><?php echo $row['stu_address']; ?></td>
                            <td><?php echo $row['fb_acc']; ?></td>
                            <td><?php echo $row['vb_phno']; ?></td>
                            <td><?php echo $row['date_birth']; ?></td>
                            <td><?php echo $row['nrc_no']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['edu']; ?></td>
                            <td><?php echo $row['native_town']; ?></td>
                            <td><?php echo $row['rg_status']; ?></td>
                            <td><img src="./img/<?php echo $row['stu_img']; ?>" alt=""></td>
                            <td><a href="re_form.php?edit=<?php echo $row['stu_id']; ?>" style="width:50px" class="btn btn-outline-success">Edit</a></td>
                            <td><a href="reg_process.php?delete=<?php echo $row['stu_id']; ?>" style="width:70px" class="btn btn-outline-danger">Delete</a></td>
                    <?php endwhile; ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
    </section>
  </div>
  <script>
        let profilePic = document.getElementById("profile-pic");
        let inputFile = document.getElementById("input-file");

        inputFile.onchange = function(){
            profilePic.src = URL.createObjectURL(inputFile.files[0]);
        }
    </script>
    <!------------------>
    <!--Script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
           $('#live_search').keyup(function(){
                var input = $(this).val();
                if(input != ''){
                    $.ajax({
                        url:"live_search.php",
                        method:"post",
                        data:{input:input},
                        success:function(response){
                            $('#attend').html(response);
                        }
                    });
                }else{
                  $('#searchresult').css('display','none');
                }
           });
        });
        </script>
    <!------------------->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/re_form.js"></script>
  <!--Script-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</body>
</html>
