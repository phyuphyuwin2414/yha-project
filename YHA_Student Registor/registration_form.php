<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Attendance Dashboard | By Code Info</title>
  <link rel="stylesheet" href="css/re_form.css"/>
  <link rel="stylesheet" href="css/01.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="img/yha_logo.png">
          <span class="nav-item"></span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-user"></i>
          <span class="nav-item">Admin</span>
        </a></li>
        <li><a href="re_form.php">
          <i class="fas fa-address-card"></i>
          <span class="nav-item">Registration</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-file"></i>
          <span class="nav-item">Attendance</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Report</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-check"></i>
          <span class="nav-item">Inprogress</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-arrow-right"></i>
          <span class="nav-item">Dropout</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-star"></i>
          <span class="nav-item">Complete</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Setting</span>
        </a></li>

        <li><a href="#" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>
    <section class="main">
      <div class="main-top">
        <header style="font-size:2rem">Student Registration</header>
        <i class="fas fa-user-cog"></i>
      </div>
      <!--Photo Upload-->
      <div class="photo" style="margin-left:720px;">
        <?php include('photoupload.php'); ?>
        </div>
      <!--End Photo Upload-->
      <!--Form-->
      <form action="addregistration.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Student ID</label>
                            <input type="number" placeholder="Student ID" name="stuid" required>
                        </div>
                        <div class="input-field">
                            <label>Student Name</label>
                            <input type="text" name="stuname" placeholder="Student Name" required>
                        </div>
                        <div class="input-field">
                            <label>Course ID</label>
                            <input type="number" name="course" placeholder="Course ID" required>
                        </div>
                        <div class="input-field">
                            <label>Section ID</label>
                            <input type="number" name="section" placeholder="Section ID" required>
                        </div>
                        <div class="input-field">
                            <label>Time ID</label>
                            <input type="number" name="time" placeholder="Time ID" required>
                        </div>
                        <!--<div class="input-field">
                            <label>Gender</label>
                            <select required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>-->
                        <div class="input-field">
                            <label>Register Date</label>
                            <input type="date" name="reg_date" placeholder="Register Date" required>
                        </div>
                    </div>
                </div>
                <div class="details ID">
                    <span class="title">Current Information</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Father's Name</label>
                            <input type="text" name="ft_name" placeholder="Father's Name" required>
                        </div>

                        <div class="input-field">
                            <label>Mother's Name</label>
                            <input type="text" name="mt_name" placeholder="Mother's Name" required>
                        </div>

                        <div class="input-field">
                            <label>Phone Number</label>
                            <input type="text" name="phno" placeholder="Phone Number" required>
                        </div>

                        <div class="input-field">
                            <label>E-mail</label>
                            <input type="email" name="email" placeholder="E-mail" required>
                        </div>

                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Address" required>
                        </div>

                        <div class="input-field">
                            <label>Facebook Account</label>
                            <input type="text" name="fb" placeholder="Facebook Account" required>
                        </div>
                        <div class="input-field">
                            <label>Viber Phone Number</label>
                            <input type="text" name="vb" placeholder="Viber Phone Number" required>
                        </div>
                        <div class="input-field">
                            <label>Enroll Date</label>
                            <input type="date" name="enroll" placeholder="Enroll Date" required>
                        </div>
                    </div>

                    <!--<button class="nextBtn">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>-->
                </div> 
                <div class="details ID">
                    <span class="title">Personal Information</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="bd" placeholder="Date of Birth" required>
                        </div>
                        <div class="input-field">
                            <label>N.R.C.NO</label>
                            <input type="text" name="nrc" placeholder="N.R.C.NO" required>
                        </div>
                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender" required>
                                <option disabled selected>Select gender</option>
                                <option class="mal">Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Education</label>
                            <input type="text" name="edu" placeholder="Education" required>
                        </div>
                        <div class="input-field">
                            <label>Native Town</label>
                            <input type="text" name="natown"placeholder="Native Town" required>
                        </div>
                        <div class="input-field">
                            <label>Religious Status</label>
                            <input type="text" name="res" placeholder="Religious Status" required>
                        </div>
                    <!--<button class="nextBtn">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>-->
                </div>
                <button class="nextBtn" name="submit">
                    <span class="btnText">Submit</span>
                    <i class="uil uil-navigator"></i>
                </button>
            </div>
        </form>
      </div>
      <!--Test--> 
      <!--<div class="row">
            <div class="register-list">
            <h1>Register List</h1>
            <div style="overflow-x:auto;">
            <table class="table">
                <thead>
                <tr>
                    <th>No</th>
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
                    <th colspan="2" style="text-align:center">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                    $sql = "SELECT * FROM register";
                    $res = mysqli_query($con,$sql);
                    $i=1;
                    while($row=mysqli_fetch_assoc($res)):
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['stu_id']; ?></td>
                            <td><?php echo $row['stu_name']; ?></td>
                            <td><?php echo $row['course_id']; ?></td>
                            <td><?php echo $row['section_id']; ?></th>
                            <td><?php echo $row['time_id']; ?></td>
                            <td><?php echo $row['register_date']; ?></td>
                            <td><?php echo $row['enroll_date']; ?></td>
                            <td><?php echo $row['father_name']; ?></td>
                            <td><?php echo $row['mother_name']; ?></td>
                            <td><?php echo $row['phno']; ?></td>
                            <td><?php echo $row['e_mail']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['fb_acc']; ?></td>
                            <td><?php echo $row['vb_phno']; ?></td>
                            <td><?php echo $row['date_birth']; ?></td>
                            <td><?php echo $row['nrc_no']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['edu']; ?></td>
                            <td><?php echo $row['native_town']; ?></td>
                            <td><?php echo $row['rg_status']; ?></td>
                            <td><a href="attendupdate.php?id=<?php echo $row['stu_id']; ?>" class="btn btn-outline-info" style="width:50px">Edit</a></td>
                            <td><a href="del_attend.php?id=<?php echo $row['stu_id']; ?>" class="btn btn-outline-danger text-center" style="width:70px">Delete</a></td>
                    <?php $i++; endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>-->
      <!--End Test-->
        <!--End Form-->
      <!--<div class="row">
            <div class="col">
            <div class="register-list">
            <h1>Register List</h1>
            <div style="overflow-x:auto;">
            <table class="table">
                <thead>
                <tr>
                    <th>No</th>
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
                    <th colspan="2" style="text-align:center">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                    $sql = "SELECT * FROM register";
                    $res = mysqli_query($con,$sql);
                    $i=1;
                    while($row=mysqli_fetch_assoc($res)):
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['stu_id']; ?></td>
                            <td><?php echo $row['stu_name']; ?></td>
                            <td><?php echo $row['course_id']; ?></td>
                            <td><?php echo $row['section_id']; ?></th>
                            <td><?php echo $row['time_id']; ?></td>
                            <td><?php echo $row['register_date']; ?></td>
                            <td><?php echo $row['enroll_date']; ?></td>
                            <td><?php echo $row['father_name']; ?></td>
                            <td><?php echo $row['mother_name']; ?></td>
                            <td><?php echo $row['phno']; ?></td>
                            <td><?php echo $row['e_mail']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['fb_acc']; ?></td>
                            <td><?php echo $row['vb_phno']; ?></td>
                            <td><?php echo $row['date_birth']; ?></td>
                            <td><?php echo $row['nrc_no']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['edu']; ?></td>
                            <td><?php echo $row['native_town']; ?></td>
                            <td><?php echo $row['rg_status']; ?></td>
                            <td><a href="attendupdate.php?id=<?php echo $row['stu_id']; ?>" class="btn btn-outline-info" style="width:50px">Edit</a></td>
                            <td><a href="del_attend.php?id=<?php echo $row['stu_id']; ?>" class="btn btn-outline-danger text-center" style="width:70px">Delete</a></td>
                    <?php $i++; endwhile; ?>
                </tbody>
            </table>
            </div>
        </div>-->
  </body>
  </html>