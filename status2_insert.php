<?php 
    if(isset($_POST['submit'])){
        $stu_ph = $_POST['stu_ph'];
        $stu_id = $_POST['stu_id'];
        $stu_name = $_POST['stu_name'];
        $status = $_POST['status'];
        $remark = $_POST['remark'];
        $date = $_POST['date'];
        if($stu_ph=='' || $stu_id=='' || $stu_name=='' || $status==''){
            echo "Something is wrong";
        }else{
        $con = mysqli_connect("localhost","root","","yha");
        $sql = "INSERT INTO status_details(status_id, student_id, start_date, remark) VALUES('$status','$stu_id','$date','$remark')";
        mysqli_query($con,$sql);
        header("Location:status2.php");
        ?>
        <!--<script>
            let btnClear = document.querySelector('button');
            let inputs = document.querySelectorAll('input');
            btnClear.addEventListener('click',() =>{
                inputs.forEach(input => input.value = '');
            })
            
        </script>-->
        <?php
    }}
?>