<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Button Color</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <section class="attendance" id="alist">
        <div class="attendance-list">
          <h1>Status</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
            <?php
                    $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                    $sql = "SELECT * FROM status";
                    $res = mysqli_query($con,$sql);
                    while($row=mysqli_fetch_assoc($res)):
                ?> 
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><input type="submit" value="<?php echo $row["description"]; ?>" style="background-color:<?php if($row['id']==1){
                            echo 'blue';
                        }elseif($row['id']==2){
                            echo 'red';
                        }else{
                            echo 'green';
                        }
                            
                        ?>"></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      </section>
</body>
</html> 