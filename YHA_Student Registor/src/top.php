<section class="top">
        <div class="container-fluid">
        <?php
          $con = mysqli_connect("localhost:3306","root","","yha") or die ("Error connection"); //step 1 database connection
          $sql = "SELECT * FROM contact";
          $contact = $con->query($sql);
          while($row = mysqli_fetch_assoc($contact)){
          ?> 
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex justify-content-evenly align-items-center">
                    <span><i style="color: orangered; margin-right: 5px;" class="fa-solid fa-phone"></i>Ph - <?php echo $row["con_ph"]; ?></span>
                    <span><i style="color: orangered; margin-right: 5px;" class="fa-solid fa-envelope"></i>Email - <?php echo $row["con_email"]; ?></span>
                    <?php
            }
            ?>
                </div> 
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex justify-content-end align-items-center">
                    <!-- <div class="search">
                      <input type="search" id="searchInput" class="search-input" placeholder="Search">
                      <button><i style="color: orangered; margin-right: 5px;" class="fa-solid fa-magnifying-glass"></i></button>
                    </div> -->
                </div>
            </div>
        </div>
    </section>