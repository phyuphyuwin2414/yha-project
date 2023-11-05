<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Attendance Dashboard | By Code Info</title>
  
  <link rel="stylesheet" href="css/01.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="stylesheet" href="css/re_form.css">
</head>
<style>
  .attendance .attendance-list span{
    margin:0 50px;
  }
  /*nav{
    height:700px;
    overflow-y:scroll;
  }*/
  nav{
  position: sticky;
  top: 0;
  bottom: 0;
  height: 100vh;
  left: 0;
  background: #fff;
  overflow: hidden;
  transition: 1s;
  width: 20%;
  float:left;
  height:800px;
  overflow-y:scroll;
}
.main{
  position: relative;
  padding: 20px;
  width: 80%;
  float:left;
  height:800px;
  overflow-y:scroll;
}
.nav-item{
  color:black;
}
nav .fas{
  color:black;
}
.nav-item:hover{
  color:#ff6b01;
}
/* .nav-item{
  color:#ff6b01;
}
nav .fas{
  color:#ff6b01;
} */
</style>
<body>