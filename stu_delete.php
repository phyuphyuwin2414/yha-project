<?php 
    include('inc/dbcon.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    $sql = "DELETE FROM register WHERE stu_id=$id";
    mysqli_query($con,$sql);
    header('Location:re_form.php');
?>