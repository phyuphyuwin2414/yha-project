<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Input File Upload</title>
    <link rel="stylesheet" href="css/photoupload.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="upload">
      <img src="img/<?php echo $row['stu_img'];?>" width = 150 height = 150
       alt="">
      <div class="round">
        <input type="file" name="img">
        <i class = "fa fa-camera" style = "color: #fff;"></i>
      </div>
    </div>
  </body>
</html>
