<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetable And Attendance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
    .bac1{
        background-color: orangered;
    }
    .navbar-brand img{
        width: 60px;
        height: 60px;
        border-radius: 50%;
    }
</style>
<body>
  <nav class="navbar navbar-light bac1 justify-content-between">
        <div class="container-fluid">
        <a class="col-xs-2 navbar-brand">
            <img src="img/yha.jpg" class="img-fluid">
        </a>
        <h1 class="col-xs-8 text-center">YHA Computer Training</h1>
        <form class="col-xs-8 form-inline">          
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        </div>
  </nav>


 <!--<div class="container-fluid">
        <div class="row bac-1">
            <div class="col col-lg-2">
            <img src="img/yha.jpg" class="img-fluid">
            </div>
            <div class="col col-lg-8 text-center">
              <h1>YHA Computer Training</h1>
            </div>
            <div class="col col-lg-2">
              <nav class="navbar navbar-expand-lg navbar-light float-right">
              
                  <form class="form-inline">    
                    <button class="btn btn-success" type="submit">Log Out</button>
                  </form> 
              </nav>
            </div>
        </div>
    </div>
   End Navbar-->

            <div class="row">
              <div class="col-12">
                <h1>YHA Computer Training Center</h1>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Student ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Course</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Section</th>
                        <th scope="col">Attendance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tbl">
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Programming</td>
                        <td>23.2.2023</td>
                        <td>2:00PM-4:00PM</td>
                        <td>Mon-Fri</td>
                        <td>Present</td>
                        </tr>
                        <tr class="tbl">
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>ICT</td>
                        <td>24.2.2023</td>
                        <td>12:00AM-2:00PM</td>
                        <td>Sat-Sun</td>
                        <td>Absent</td>
                        </tr>
                        <tr class="tbl">
                        <th scope="row">3</th>
                        <td>Aster</td>
                        <td>Graphic</td>
                        <td>25.2.2023</td>
                        <td>10:00AM-12:00AM</td>
                        <td>Mon-Fri</td>
                        <td>Absent</td>
                        </tr>
                        <tr class="tbl">
                        <th scope="row">4</th>
                        <td>Larry</td>
                        <td>AI</td>
                        <td>26.2.2023</td>
                        <td>8:00AM-10:00AM</td>
                        <td>Mon-Fri</td>
                        <td>Present</td>
                        </tr>
                        <tr class="tbl">
                        <th scope="row">5</th>
                        <td>Tulip</td>
                        <td>A+</td>
                        <td>27.2.2023</td>
                        <td>1:00PM-3:00PM</td>
                        <td>Sat-Sun</td>
                        <td>Absent</td>
                        </tr>
                        <tr class="tbl">
                        <th scope="row">6</th>
                        <td>Merry</td>
                        <td>Java</td>
                        <td>28.2.2023</td>
                        <td>4:00PM-6:00PM</td>
                        <td>Sat-Sun</td>
                        <td class="p">Present</td>
                        </tr>
                    </tbody>
                </table>
              </div>
            </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>