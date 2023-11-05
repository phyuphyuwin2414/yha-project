<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
<section class="main">
    <div class="container">
        <div class="main-top">
            <h1>Attendance</h1>
            <i class="fas fa-user-cog"></i>
        </div>
        <form action="register.php" method="post">
            <div class="form-group row">
                <label for="studentName" class="col-sm-2 col-form-label">Student Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="studentName" value="" placeholder="Student Name" name="stuname">
                </div>
            </div><br/>
            <div class="form-group row">
                <label for="studentPhNo" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="studentphNo" value="" placeholder="Phone Number" name="phNo">
                </div>
            </div><br/>
            <form class="form-inline">          
            <button class="btn  my-2 my-sm-0" style="background-color:orangered"  type="submit" name="signin">Sign In</button>
            </form>
        </form>
    </div>
</section>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>