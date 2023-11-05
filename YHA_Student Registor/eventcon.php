<?php include "connect.php"; ?>

    <?php 
    if (mysqli_num_rows($result) > 0){
         while ($row = mysqli_fetch_assoc($result)){ 
            $id = $row['id'];
            if (!empty($id)){     
 
            ?>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 left">
                        <div class="heading">
                            <h5><?php echo $row["heading"] ?></h5>
                            <p><?php echo $row["date"] ?></p>
                        </div>
                        <div class="img img1">
                            <img src="img/slider1.JPG" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 right">
                        <div class="content-container">
                            <p class="content"><?php echo $row["para"] ?></p>         
                            <button id="btn" class="read-more-btn">Read More...</button>
                            <!-- <button id="btn2" style="display: none;">Read Less...</button> -->
                        </div>
                    </div>

                    <?php }
                    
                     ?>

                    <?php
                        $row = mysqli_fetch_assoc($result);  
                        if (mysqli_num_rows($result) == 1){ 
                            echo "";  
                            ?>
 
                    <?php  } 

                        else{ ?>
                    
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 left">
                        <div class="content-container">
                            <p class="content"><?php echo $row["para"] ?></p>
                            <button id="btn" class="read-more-btn">Read More...</button>
                            <!-- <button id="btn2" style="display: none;">Read Less...</button> -->
                       </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 right">
                        <div class="heading">
                            <h5><?php echo $row["heading"] ?></h5>
                            <p><?php echo $row["date"] ?></p>
                        </div>
                        <div class="img img2">
                            <img src="img/slider1.JPG" alt="">
                        </div>
                    </div>
                    
                    <?php }
                    ?>
                   
                    
                   
            <?php 
                
            }    
        }         
            ?>
             </div>

             
            
        