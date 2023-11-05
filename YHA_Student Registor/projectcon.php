<style>

.right img{
    width: 100%;
    cursor: pointer;
}
.img_act{
    position: absolute;
    transform: translate(-50%, -50%);
    top: 50%;
    left: 50%;
    max-width: 100vh;
    box-shadow: 4px 4px 10px 3px #ababab;
}
</style>

<?php include "proj_connect.php"; ?>

    <?php 
    if (mysqli_num_rows($result) > 0){
         while ($row = mysqli_fetch_assoc($result)){ 
            $id = $row['p_id'];
            if (!empty($id)){     
 
            ?>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="img mb-2">
                                <img class="w-75" src="img/<?php echo $row['stu_img'] ?>" alt="">
                            </div>
                            <span> <i class="fa-solid fa-phone me-2" style="color: var(--maincolor);"></i>  Ph Number - <?php echo $row['ph'] ?></span> <br>
                            <span> <i class="fa-solid fa-graduation-cap my-2 me-2" style="color: var(--maincolor);"></i>Name - <?php echo $row['stu_name'] ?></span> <br>
                            <span> <i class="fa-solid fa-clipboard-list ms-1" style="margin-right: 10px; color: var(--maincolor);"></i>   Batch - <?php echo $row['batch'] ?></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, atque nam vero odio enim praesentium hic, nisi, ea iure tenetur at culpa molestias qui! Tempore eum animi aspernatur qui quibusdam.</p>

                        </div>
                        <div class="col-xl-6 right">
                            <img id="img" class="" src="img/<?php echo $row['proj_img'] ?>" alt="">
                        </div>
                    </div>
                     <?php 
                }
            }    
        }         
            ?>
             </div>
            
        