<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/testStudent.css"/>
  </head>
</head>
</style>
<body>
<div class="row">
    <div class="col-12 bac1">
    <nav class="navbar navbar-light justify-content-between">
        <a class="col-xs-2 navbar-brand">
            <img src="img/yha.jpg" class="img-fluid" alt="Responsive image">
        </a>
        <h1 class="col-xs-8">YHA Computer Training Center</h1>
        <form class="form-inline">          
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log Out</button>
        </form>
    </nav>
    </div>
</div>
<div class="row">
    <div class="col-12 text-center">
        <h3>Welcome Phyu Phyu Win</h3>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <table class="table table-bordered table-hover my-table">
            <thead>
                <tr class="thead-dark">
                    <th scope="col">Student ID</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">
                    <select class="form-select form-control" aria-label="Default select example">
                        <option selected>Courses </option>
                        <option value="1">ICT Foundation</option>
                        <option value="2">Advance Photoshop</option>
                        <option value="3">Adobe Illustrator</option>
                        <option value="3">Web Design & Dev</option>
                        <option value="3">Java</option>
                        <option value="3">A+</option>
                    </select>
                    </th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Section</th>
                    <th scope="col">Attendance</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</th>
                    <td>Mark</td>
                    <td>Web Design & Development</td>
                    <td>1.3.2023</td>
                    <td>2:00-4:00PM</td>
                    <td>Mon-Thu</td>
                    <td>Present</td>
                </tr>
                <tr>
                    <td>2</th>
                    <td>Mark</td>
                    <td></td>
                    <td>1.3.2023</td>
                    <td>10:00-12:00AM</td>
                    <td>Mon-Thu</td>
                    <td>Absent</td>
                </tr>
                <tr>
                    <td>3</th>
                    <td>Mark</td>
                    <td></td>
                    <td>1.3.2023</td>
                    <td>12:00-2:00PM</td>
                    <td>Mon-Thu</td>
                    <td>Present</td>
                </tr>
                <tr>
                    <td>3</th>
                    <td>Mark</td>
                    <td></td>
                    <td>1.3.2023</td>
                    <td>12:00-2:00PM</td>
                    <td>Mon-Thu</td>
                    <td>Present</td>
                </tr>
                <tr>
                    <td>3</th>
                    <td>Mark</td>
                    <td></td>
                    <td>1.3.2023</td>
                    <td>12:00-2:00PM</td>
                    <td>Mon-Thu</td>
                    <td>Present</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>