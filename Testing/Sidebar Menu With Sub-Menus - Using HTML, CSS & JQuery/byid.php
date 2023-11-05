<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>By ID</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="phno" value="<?php if(isset($_GET['phno'])){
            echo $_GET['phno'];
        }?>">
        <?php 
            if(isset($_GET['phno'])){
                $phno = $_GET['phno'];
                $con = mysqli_connect("localhost","root","","yha");
                $sql = "SELECT * FROM register WHERE phno = '$phno'";
                $res = mysqli_query($con,$sql);
                if(mysqli_num_rows($res)>0){
                foreach($res as $row){
            }
        ?>
        <input type="text" value="<?php echo $row['stu_name'];?>" name="uname">
        <?php }}?>
        <input type="submit">
    </form>
</body>
</html>