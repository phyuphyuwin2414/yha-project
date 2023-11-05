<?php 
    include("inc/dbcon.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM status_details WHERE std_id='$id'";
        mysqli_query($con,$sql);
        header("Location:status1.php");
    }
?>