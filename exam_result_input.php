
<?php include('head.php');?>
  <div class="container-fluid">
    <?php include("nav.php");?>
    <section class="main">
      <div class="main-top">
        <h1>Attendance</h1> 
        <i class="fas fa-user-cog"></i>
      </div>
      <!--Searching-->
      <div class="form-group row">
        <label for="text" class="col-sm-3 col-form-label">Search For Students</label>
        <div class="col-sm-7">
        <div class="search-input">
          <a href="" target="_blank" hidden></a>
          <input type="text" id="live_search" autocomplete = "off" placeholder="Type to search..">
          <div class="icon"><i class="fas fa-search"></i></div>
        </div>
        </div>
      </div><br/>
      <div id="searchresult"></div>
      <!--Searching End-->
      <section class="attendance" id="attend">
        <div class="attendance-list">
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Student Name</th>
                <th>Courses</th>
                <th>Section</th>
                <th>Time</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php
                    $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
                    $sql = "SELECT re.*,c.*,s.*,st.* FROM register AS re LEFT JOIN course AS c ON re.courseid=c.courseid LEFT JOIN section AS s ON re.sectionid=s.sectionid LEFT JOIN sectiontime AS st ON re.timeid=st.timeid";
                    $res = mysqli_query($con,$sql);
                    $i=1;
                    while($row=mysqli_fetch_assoc($res)):
                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['stu_name']; ?></td>
                        <td><?php echo $row['coursename']; ?></th>
                        <td><?php echo $row['sectionname']; ?></td>
                        <td><?php echo $row['timename']; ?></td>
                        <td><a href="exam_result.php?id=<?php echo $row['stu_id']; ?>" class="btn btn-outline-success" style="width:70px">Edit</a></td>
                <?php $i++; endwhile; ?>
            </tbody>
          </table>
        </div>
        <?php //endwhile;?>
      </section>
    </section>
  </div>
  <!--Script-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
           $('#live_search').keyup(function(){
                var input = $(this).val();
                if(input != ''){
                    $.ajax({
                        url:"exam_result_search.php",
                        method:"post",
                        data:{input:input},
                        success:function(response){
                            $('#attend').html(response);
                        }
                    });
                }else{
                  $('#attend').css('display','none');
                  $('#searchresult').css('display','none');
                }
           });
        });
        </script>
</body>
</html>
